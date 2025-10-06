<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Developer: Makhmudov J.
 * Date: 10/01/2018
 * Email: applepopov803@gmail.com
 */

class Action extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('pdf');
        $this->lang->load('information', 'english');

        $config['protocol']    = 'mail';
        $config['smtp_host']    = 'mail.laramatrans.de';
        $config['smtp_port']    = '465';
        $config['smtp_crypto'] = 'ssl';
        $config['smtp_timeout'] = '25';
        $config['smtp_user']    = 'info@laramatrans.de';
        $config['smtp_pass']    = 'B9vEA{SXrUvZ';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['crlf']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not

        $this->email->initialize($config);
    }

    public function login_account($submit = null)
    {
        $this->load->model('user_model');
        $data['no_follow'] = 'nofollow';
        $data['link'] = $this->lang->line('link');
        $data['footer'] = $this->lang->line('footer');
        if ($submit == null) {
            $data['mainContent'] = 'user/login';
            $data['title'] = 'Login Account ' . WEBSITE_NAME;
            $this->load->view('layout/template', $data);
            return true;
        }

        $login_acc_email = $this->input->post('login_acc_email', TRUE);
        $login_acc_pass = $this->input->post('login_acc_pass', TRUE);

        $result = $this->user_model->login($login_acc_email, $login_acc_pass);

        if ($result == true) {
            $role = $result[0]->type;
            $usr_id = $result[0]->id;
            $usr_email = $result[0]->email;

            $this->session->set_userdata(array(
                'role' => $role,
                'id' => $usr_id,
                'email' => $usr_email,
                'status' => 'logged_in'
            ));
            redirect(site_url('dashboard'));
        } else {
            $data['error_message'] = 'Your email and password do not match our records. Please try again';
        }
        $data['mainContent'] = 'user/login';
        $data['title'] = 'Login Account ' . WEBSITE_NAME;
        $this->load->view('layout/template', $data);
    }

    public function logout_account()
    {
        $this->session->sess_destroy();
        redirect('/');
    }

    public function register_account($submit = null)
    {

        $this->load->model('user_model');
        $data['no_follow'] = 'nofollow';
        if ($this->session->userdata('status') == 'logged_in') {
            redirect(site_url('dashboard'));
        }

        if ($submit == null) {
            $data['mainContent'] = 'user/register';
            $data['title'] = 'Register ' . WEBSITE_NAME;
            $this->load->view('layout/template', $data);
            return true;
        }

        /* Set form input rules */

        $form_rules = array(
            array(
                'field' => 'acc_email', //name of input
                'label' => 'Email', //label of input
                'rules' => 'required|valid_email|min_length[5]|max_length[64]|is_unique[user.email]', // input rules Server side validation
                'errors' => array(
                    'required' => 'Email is required', // Error message if the key is not met
                    'valid_email' => 'Email is invalid',
                    'is_unique' => 'Account already associated with this email'
                )
            ),
            array(
                'field' => 'acc_pass',
                'label' => 'Password',
                'rules' => 'required|min_length[5]|max_length[64]',
                'errors' => array(
                    'required' => 'Password is required',
                )
            ),
            array(
                'field' => 'acc_pass_confirm',
                'label' => 'Confirm Password',
                'rules' => 'required|min_length[5]|max_length[64]|matches[acc_pass]',
                'errors' => array(
                    'matches' => 'Passwords do not match'
                )
            )
        );

        /*Set form rules*/
        $this->form_validation->set_rules($form_rules);

        if ($this->form_validation->run() == FALSE) {
            $data['mainContent'] = 'user/register';
            $data['error_message'] = 'Some errors occurred while trying to register your account';
        } else {
            $email = $this->input->post('acc_email', TRUE);   /*$_POST['acc_email']*/
            $password = $this->input->post('acc_pass', TRUE); /*$_POST['acc_pass']*/
            $data['mainContent'] = 'user/success';
            $data['success_message'] = 'Thank you for registering. Please remember your login details';
            $this->user_model->create_user($email, $password);
        }
        $data['title'] = 'Register Account ' . WEBSITE_NAME;
        $this->load->view('layout/template', $data);
    }

    public function delete_account($user_id)
    {

        if ($this->session->userdata('role') == 'Admin' && $this->session->userdata('status') == 'logged_in') {
            $this->load->model('user_model');
            if ($this->session->userdata('id') != $user_id) {
                $this->user_model->delete_user($user_id);
                redirect(site_url('dashboard'));
            }
        } else if ($this->session->userdata('role') == 'User' && $this->session->userdata('status') == 'logged_in' && $this->session->userdata('id') == $user_id) {
            $this->load->model('user_model');
            $this->user_model->delete_user($user_id);
            $this->logout_account();
        } else {
            // Error logic goes here
            $data['error_message'] = 'Error Message. Stop other users from deleting anything other than themselves';
            $this->load->view('layout/template_two_column', $data);
        }
    }

    public function edit_account($user_id = null, $submit = null)
    {
        $data['no_follow'] = 'nofollow';
        if ($this->session->userdata('status') != 'logged_in') {
            redirect(site_url());
        }

        $this->load->model('user_model');

        $form_rules = array(
            array(
                'field' => 'acc_email', //name of input
                'label' => 'Email', //label of input
                'rules' => 'required|valid_email|min_length[5]|max_length[64]|is_unique[user.email]', // input rules Server side validation
                'errors' => array(
                    'required' => 'You must provide a %s.', // Error message if the key is not met
                    'valid_email' => 'Email is invalid',
                    'is_unique' => 'Email already associated with an account'
                )
            )
        );

        $this->form_validation->set_rules($form_rules);

        $data['mainContent'] = 'user/edit';
        $data['title'] = 'Edit Account ' . WEBSITE_NAME;
        $data['page_id'] = 4;
        $data['page'] = $this->lang->line('home');
        $data['footer'] = $this->lang->line('footer');
        $data['link'] = $this->lang->line('link');

        if (($this->session->userdata('status') == 'logged_in' && $this->session->userdata('id') == $user_id) or $this->session->userdata('role') == 'Admin') {
            $result = $this->user_model->get($user_id);
            $data['user'] = $result;

            if ($submit == null) {
                $this->load->view('layout/template', $data);
                return true;
            } else {

                if ($this->form_validation->run() == FALSE) {
                    $data['error_message'] = 'Ops, something went wrong. Please try again';
                } else {

                    $new_email = $this->input->post('acc_email', TRUE);

                    if ($this->session->userdata('role') == 'Admin') {
                        $this->user_model->update_user($user_id, $new_email);
                        $data['done_message'] = 'User updated';
                    } else if ($this->session->userdata('role') == 'User' && $this->session->userdata('id') == $user_id) {
                        $this->user_model->update_user($user_id, $new_email);
                        $this->load->model('transaction_model');
                        $this->transaction_model->update_bulk_my_transaction($new_email, $this->session->userdata('email'));
                        $this->transaction_model->update_bulk_their_transaction($new_email, $this->session->userdata('email'));
                        $this->session->set_userdata('email', $new_email);
                        $data['done_message'] = 'Account details updated';
                    } else {
                        $data['error_message'] = 'No changes registered.If this is an error please try again';
                    }
                    $data['user'] = $this->user_model->get($user_id);
                }
            }
            $this->load->view('layout/template', $data);
        } else {
            redirect(site_url('dashboard'));
        }
    }

    public function change_password($user_id = null, $submit = null)
    {

        if ($this->session->userdata('status') != 'logged_in') {
            redirect(site_url());
        }

        $this->load->model('user_model');

        if ($this->session->userdata('role') == 'User') {
            $form_rules = array(
                array(
                    'field' => 'old_acc_pass',
                    'label' => 'Password',
                    'rules' => 'required|min_length[5]|max_length[64]'
                ),
                array(
                    'field' => 'new_acc_pass',
                    'label' => 'New Password',
                    'rules' => 'required|min_length[5]|max_length[64]'
                ),
                array(
                    'field' => 'new_acc_pass_confirm',
                    'label' => 'Confirm New Password',
                    'rules' => 'matches[new_acc_pass]|min_length[5]|max_length[64]'
                )
            );
        } else {
            $form_rules = array(
                array(
                    'field' => 'new_acc_pass',
                    'label' => 'New Password',
                    'rules' => 'required|min_length[5]|max_length[64]'
                ),
                array(
                    'field' => 'new_acc_pass_confirm',
                    'label' => 'Confirm New Password',
                    'rules' => 'matches[new_acc_pass]|min_length[5]|max_length[64]'
                )
            );
        }


        $this->form_validation->set_rules($form_rules);

        $data['mainContent'] = 'user/change_password';
        $data['title'] = 'Edit Account ' . WEBSITE_NAME;
        $data['page_id'] = 4;
        $data['page'] = $this->lang->line('home');
        $data['footer'] = $this->lang->line('footer');
        $data['link'] = $this->lang->line('link');

        if (($this->session->userdata('status') == 'logged_in' && $this->session->userdata('id') == $user_id) or $this->session->userdata('role') == 'Admin') {
            $result = $this->user_model->get($user_id);
            $data['user'] = $result;

            if ($submit == null) {
                $this->load->view('layout/template', $data);
                return true;
            } else {

                if ($this->form_validation->run() == FALSE) {
                    $data['error_message'] = 'Ops, something went wrong. Please try again';
                } else {

                    /*$new_email = $this->input->post('acc_email', TRUE);*/
                    $old_password = $this->input->post('old_acc_pass', TRUE);
                    $new_password = ($this->input->post('new_acc_pass', TRUE)) ? $this->input->post('new_acc_pass', TRUE) : $old_password;

                    $old_password = sha1($old_password . HASH_KEY);
                    $curr_password = $result[0]->password;

                    if ($this->session->userdata('role') == 'Admin') {
                        $this->user_model->change_user_password($user_id, sha1($new_password . HASH_KEY));
                        $data['done_message'] = 'User updated';
                    } else if ($this->session->userdata('role') == 'User' && $this->session->userdata('id') == $user_id && $old_password == $curr_password) {
                        $this->user_model->change_user_password($user_id, sha1($new_password . HASH_KEY));
                        $data['done_message'] = 'Account details updated';
                    } else {
                        $data['error_message'] = 'No changes registered.If this is an error please try again';
                    }
                    $data['user'] = $this->user_model->get($user_id);
                }
            }
            $this->load->view('layout/template', $data);
        } else {
            redirect('dashboard');
        }
    }

    public function create_transaction($submit = null)
    {
        if ($this->session->userdata('status') != 'logged_in') {
            redirect(site_url());
        }

        $this->load->model('transaction_model');

        $data['mainContent'] = 'transaction/new';
        $data['my_email'] = $this->session->userdata('email');
        $data['title'] = 'New Transaction ' . WEBSITE_NAME;
        $data['page_id'] = 4;
        $data['page'] = $this->lang->line('home');
        $data['footer'] = $this->lang->line('footer');
        $data['link'] = $this->lang->line('link');

        if ($submit == null) {
            $this->load->view('layout/template', $data);
            return true;
        } else {
            $form_rules = array(
                array(
                    'field' => 's_name', //name of input
                    'label' => 'Buyer Name', //label of input
                    'rules' => 'min_length[3]|max_length[255]|required' // input rules Server side validation
                ),
                array(
                    'field' => 's_address', //name of input
                    'label' => 'Buyer Address', //label of input
                    'rules' => 'min_length[3]|max_length[255]|required' // input rules Server side validation
                ),
                array(
                    'field' => 's_phone', //name of input
                    'label' => 'Buyer Phone', //label of input
                    'rules' => 'is_natural|min_length[9]|max_length[255]' // input rules Server side validation
                ),
                array(
                    'field' => 'p_type', //name of input
                    'label' => 'Product Type', //label of input
                    'rules' => 'required' // input rules Server side validation
                ),
                array(
                    'field' => 'p_brief', //name of input
                    'label' => 'Product Brief', //label of input
                    'rules' => 'min_length[3]|max_length[255]|required' // input rules Server side validation
                ),
                array(
                    'field' => 'p_value', //name of input
                    'label' => 'Product Brief', //label of input
                    'rules' => 'min_length[2]|max_length[255]|required' // input rules Server side validation
                ),
                array(
                    'field' => 'p_qty', //name of input
                    'label' => 'Product Quantity', //label of input
                    'rules' => 'numeric|is_natural|required' // input rules Server side validation
                ),
                array(
                    'field' => 'p_description', //name of input
                    'label' => 'Product Description', //label of input
                    'rules' => 'required' // input rules Server side validation
                ),
                array(
                    'field' => 'inspection', //name of input
                    'label' => 'Days of Inspection', //label of input
                    'rules' => 'numeric|is_natural|required' // input rules Server side validation
                ),
                array(
                    'field' => 't_type', // name of input
                    'label' => 'Transaction Type', //label of input
                    'rules' => 'required' // input rules Server side validation
                ),
                array(
                    'field' => 'deadline', //name of input
                    'label' => 'Transaction Deadline', //label of input
                    'rules' => 'required' // input rules Server side validation
                ),
                array(
                    'field' => 'b_detail_1', //name of input
                    'label' => 'Detail 1', //label of input
                    'rules' => 'required' // input rules Server side validation
                ),
                array(
                    'field' => 'b_detail_2', //name of input
                    'label' => 'Detail 2', //label of input
                    'rules' => 'required' // input rules Server side validation
                ),
                array(
                    'field' => 'b_detail_3', //name of input
                    'label' => 'Detail 3', //label of input
                    'rules' => 'required' // input rules Server side validation
                ),
                array(
                    'field' => 'b_detail_4', //name of input
                    'label' => 'Detail 4', //label of input
                    'rules' => 'required' // input rules Server side validation
                ),
            );

            /*Set form rules*/
            $this->form_validation->set_rules($form_rules);

            if ($this->form_validation->run() == FALSE) {
                $data['error_message'] = 'Some errors occurred while trying to create your transaction';
            } else {
                $s_email = ($this->input->post('s_email', TRUE)) ? $this->input->post('s_email', TRUE) : $data['my_email'];
                $s_name = $this->input->post('s_name', TRUE);
                $s_address = $this->input->post('s_address', TRUE);
                $s_phone = $this->input->post('s_phone', TRUE);
                $p_type = $this->input->post('p_type', TRUE);
                $p_brief = $this->input->post('p_brief', TRUE);
                $p_value = $this->input->post('p_value', TRUE);
                $p_qty = $this->input->post('p_qty', TRUE);
                $p_description = $this->input->post('p_description', TRUE);
                $t_type = $this->input->post('t_type', TRUE);
                $deadline = $this->input->post('deadline', TRUE);
                $inspection = $this->input->post('inspection', TRUE);
                $reference = generate_reference();
                $pin = generate_pin();
                $b_detail_1 = $this->input->post('b_detail_1', TRUE);
                $b_detail_1_2 = $this->input->post('b_detail_1_2', TRUE);
                $b_detail_2 = $this->input->post('b_detail_2', TRUE);
                $b_detail_3 = $this->input->post('b_detail_3', TRUE);
                $b_detail_4 = $this->input->post('b_detail_4', TRUE);
                $transaction_data = array(
                    's_email' => $s_email,
                    's_name' => $s_name,
                    's_address' => $s_address,
                    's_phone' => $s_phone,
                    'p_type' => $p_type,
                    'p_brief' => $p_brief,
                    'p_value' => $p_value,
                    'p_qty' => $p_qty,
                    'p_description' => $p_description,
                    't_type' => $t_type,
                    'deadline' => $deadline,
                    'inspection_days' => $inspection,
                    'reference' => $reference,
                    'date_created' => date("Y-m-d H:i:s"),
                    'pin' => $pin,
                    'status' => '-2',
                    'b_detail_1' => $b_detail_1,
                    'b_detail_1_2' => $b_detail_1_2,
                    'b_detail_2' => $b_detail_2,
                    'b_detail_3' => $b_detail_3,
                    'b_detail_4' => $b_detail_4
                );

                // $data['success_message'] = 'Your new transaction reference: <a href="' . site_url() . 'track/' . $reference . '">' . $reference . '</a>';
                $data['success_message'] = 'Your new transaction reference: <a href="' . site_url() . 'transaction/view/' . $reference . '">' . $reference . '</a>';

                $this->transaction_model->create_transaction($transaction_data);
            }
        }

        $this->load->view('layout/template', $data);
    }

    public function delete_transaction($transaction_reference = null)
    {
        $data['footer'] = $this->lang->line('footer');
        $data['link'] = $this->lang->line('link');

        if ($this->session->userdata('status') != 'logged_in') {
            redirect(site_url());
        }

        $this->load->model('transaction_model');
        $transactions = $this->transaction_model->get_my_transaction($this->session->userdata('email'));

        if ($this->session->userdata('role') == 'Admin') {

            $this->transaction_model->delete_transaction($transaction_reference);
            $data['mainContent'] = 'transaction/response';
            $data['done_message'] = 'Deleted transaction ' . $transaction_reference;
            $this->load->view('layout/template', $data);
        } else if ($this->session->userdata('role') == 'User') {

            if ($transactions[0]->s_email == $this->session->userdata('email')) {
                $this->transaction_model->delete_transaction($transaction_reference);
                $data['mainContent'] = 'transaction/response';
                $data['done_message'] = 'Deleted transaction ' . $transaction_reference . ' from our database';
                $this->load->view('layout/template', $data);
            } else {
                $data['mainContent'] = 'transaction/response';
                $data['error_message'] = 'Could not delete that transaction';
                $this->load->view('layout/template', $data);
            }
        } else {
            // Error logic goes here
            $data['mainContent'] = 'transaction/response';
            $data['error_message'] = 'Stop other users from deleting anything other than their own transactions';
            $this->load->view('layout/template', $data);
        }
    }

    public function react_transaction($transaction_reference)
    {
        if ($transaction_reference == null or strlen($transaction_reference) != 8) {
            redirect(base_url());
            return false;
        }
        
        $this->load->model('transaction_model');
        $currentTransaction = $this->transaction_model->get_transaction($transaction_reference);

        if (count($currentTransaction) != 1) {
            redirect(site_url('track/' . $transaction_reference));
            return false;
        }

        $currentPIN = $currentTransaction[0]->pin;
        $pin = $this->input->post('pin');
        $response = $this->input->post('response');

        // Verify PIN first
        if (!isset($pin) || $currentPIN != $pin) {
            redirect(site_url('track/' . $transaction_reference . '?error=1'));
            return false;
        }

        // PIN is correct - handle approve/decline or show step 1
        if (isset($response)) {
            // Handle approve/decline
            if ($response == 'APPROVE') {
                // Update status and redirect to step 2 (delivery form)
                $data['transaction'] = $currentTransaction;
                $data['verified_pin'] = $pin;
                $data['title'] = 'Lieferadresse - ' . $currentTransaction[0]->reference . ' | TrustAuto GmbH';
                $data['mainContent'] = 'transaction/step2_content';
                $data['additional_css'] = array('public/css/tracking.css');
                $this->load->view('layout/landing_template', $data);
            } else if ($response == 'DECLINE') {
                $transaction_data = array('status' => 'N');
                $this->transaction_model->update_transaction($currentTransaction[0]->id, $transaction_data);
                $data['success_message'] = 'Sie haben die Transaktion abgelehnt. Der Verkäufer wird benachrichtigt.';
                $data['reference'] = $transaction_reference;
                $data['mainContent'] = 'transaction/tracking_pin_content';
                $data['additional_css'] = array('public/css/tracking.css');
                $this->load->view('layout/landing_template', $data);
            }
        } else {
            // PIN verified - show step 1 (transaction details)
            $data['transaction'] = $currentTransaction;
            $data['verified_pin'] = $pin;
            $data['title'] = 'Transaktionsdetails - ' . $currentTransaction[0]->reference . ' | TrustAuto GmbH';
            $data['mainContent'] = 'transaction/step1_content';
            $data['additional_css'] = array('public/css/tracking.css');
            $this->load->view('layout/landing_template', $data);
        }
    }

    public function approve_transaction($transaction_id, $approving_user = null)
    {
        if ($this->session->userdata('status') == 'logged_in') {
            if ($this->session->userdata('id') == $approving_user) {
                $this->load->model('transaction_model');
                $transaction_data = array(
                    'status' => 'Y'
                );
                $this->transaction_model->update_transaction($transaction_id, $transaction_data);
            }
            redirect(site_url('dashboard'));
        } else {
            redirect(site_url());
        }
    }

    private function apprv_no_log($transaction_id)
    {
        $this->load->model('transaction_model');
        $transaction_data = array(
            'status' => '1'
        );
        $this->transaction_model->update_transaction($transaction_id, $transaction_data);
    }

    private function dcln_no_log($transaction_id)
    {
        $this->load->model('transaction_model');
        $transaction_data = array(
            'status' => '0'
        );
        $this->transaction_model->update_transaction($transaction_id, $transaction_data);
    }

    public function trigger_approve($transaction_reference, $pin)
    {
        $this->load->model('transaction_model');
        $transaction = $this->transaction_model->get_transaction($transaction_reference);
        $transaction_id = $transaction[0]->id;

        if ($pin == $transaction[0]->pin) {
            $this->apprv_no_log($transaction_id);
        } else {
            return false;
        }
    }

    public function trigger_decline($transaction_reference, $pin)
    {
        $this->load->model('transaction_model');
        $transaction = $this->transaction_model->get_transaction($transaction_reference);
        $transaction_id = $transaction[0]->id;
        if ($pin == $transaction[0]->pin) {
            $this->dcln_no_log($transaction_id);
        } else {
            return false;
        }
    }

    public function decline_transaction($transaction_id, $approving_user = null)
    {
        if ($this->session->userdata('status') == 'logged_in') {
            if ($this->session->userdata('id') == $approving_user) {
                $this->load->model('transaction_model');
                $transaction_data = array(
                    'status' => 'N'
                );
                $this->transaction_model->update_transaction($transaction_id, $transaction_data);
            }
            redirect(site_url('dashboard'));
        } else {
            redirect(site_url());
        }
    }

    public function reset_transaction($transaction_id)
    {
        if ($this->session->userdata('role') != 'Admin' && $this->session->userdata('status') != 'logged_in') {
            redirect(site_url());
        }

        $this->load->model('transaction_model');
        $transaction_data = array(
            'status' => '-2'
        );
        $this->transaction_model->update_transaction($transaction_id, $transaction_data);
    }

    public function amend_transaction($transaction_reference, $submit = null)
    {
        if ($this->session->userdata('status') != 'logged_in') {
            redirect(site_url());
        }

        $this->load->model('transaction_model');
        $transaction = $this->transaction_model->get_transaction($transaction_reference);

        if ($submit == null) {
            $data['transaction'] = $transaction;
            $data['mainContent'] = 'transaction/edit';
            $data['footer'] = $this->lang->line('footer');
            $data['link'] = $this->lang->line('link');
            $this->load->view('layout/template', $data);
            return true;
        }

        $form_rules = array(
            array(
                'field' => 'b_email', //name of input
                'label' => 'Buyer Email', //label of input
                'rules' => 'required|valid_email|min_length[8]|max_length[64]', // input rules Server side validation
                'errors' => array(
                    'required' => 'Email is required', // Error message if the key is not met
                    'valid_email' => 'Email is invalid'
                )
            ),
            array(
                'field' => 'b_name', //name of input
                'label' => 'Buyer Name', //label of input
                'rules' => 'min_length[3]|max_length[255]|required' // input rules Server side validation
            ),
            array(
                'field' => 'b_address', //name of input
                'label' => 'Buyer Address', //label of input
                'rules' => 'min_length[3]|max_length[255]|required' // input rules Server side validation
            ),
            array(
                'field' => 'b_phone', //name of input
                'label' => 'Buyer Phone', //label of input
                'rules' => 'numeric|is_natural|min_length[9]|max_length[255]|required' // input rules Server side validation
            ),
            array(
                'field' => 's_name', //name of input
                'label' => 'Buyer Name', //label of input
                'rules' => 'min_length[3]|max_length[255]|required' // input rules Server side validation
            ),
            array(
                'field' => 's_address', //name of input
                'label' => 'Buyer Address', //label of input
                'rules' => 'min_length[3]|max_length[255]|required' // input rules Server side validation
            ),
            array(
                'field' => 's_phone', //name of input
                'label' => 'Buyer Phone', //label of input
                'rules' => 'numeric|is_natural|min_length[9]|max_length[255]|required' // input rules Server side validation
            ),
            array(
                'field' => 'p_type', //name of input
                'label' => 'Product Type', //label of input
                'rules' => 'required' // input rules Server side validation
            ),
            array(
                'field' => 'p_brief', //name of input
                'label' => 'Product Brief', //label of input
                'rules' => 'min_length[3]|max_length[255]|required' // input rules Server side validation
            ),
            array(
                'field' => 'p_value', //name of input
                'label' => 'Product Brief', //label of input
                'rules' => 'min_length[2]|max_length[255]|required' // input rules Server side validation
            ),
            array(
                'field' => 'p_qty', //name of input
                'label' => 'Product Quantity', //label of input
                'rules' => 'numeric|is_natural|required' // input rules Server side validation
            ),
            array(
                'field' => 'p_description', //name of input
                'label' => 'Product Description', //label of input
                'rules' => 'required' // input rules Server side validation
            ),
            array(
                'field' => 'inspection', //name of input
                'label' => 'Days of Inspection', //label of input
                'rules' => 'numeric|is_natural|required' // input rules Server side validation
            ),
            array(
                'field' => 'deadline', //name of input
                'label' => 'Transaction Deadline', //label of input
                'rules' => 'required' // input rules Server side validation
            ),
        );

        /*Set form rules*/
        $this->form_validation->set_rules($form_rules);

        if ($transaction[0]->status != null) {
        }

        if ($this->session->userdata('role') == 'Admin') {
            if ($this->form_validation->run() == FALSE) {
                $data['error_message'] = 'Some errors occurred while trying to update your transaction';
            } else {
                $b_email = $this->input->post('b_email', TRUE);
                $b_name = $this->input->post('b_name', TRUE);
                $b_address = $this->input->post('b_address', TRUE);
                $b_phone = $this->input->post('b_phone', TRUE);
                $s_email = $this->input->post('s_email', TRUE);
                $s_name = $this->input->post('s_name', TRUE);
                $s_address = $this->input->post('s_address', TRUE);
                $s_phone = $this->input->post('s_phone', TRUE);
                $p_type = $this->input->post('p_type', TRUE);
                $p_brief = $this->input->post('p_brief', TRUE);
                $p_value = $this->input->post('p_value', TRUE);
                $p_qty = $this->input->post('p_qty', TRUE);
                $p_description = $this->input->post('p_description', TRUE);
                $deadline = $this->input->post('deadline', TRUE);
                $inspection = $this->input->post('inspection', TRUE);
                $transaction_data = array(
                    'b_email' => $b_email,
                    'b_name' => $b_name,
                    'b_address' => $b_address,
                    'b_phone' => $b_phone,
                    's_email' => $s_email,
                    's_name' => $s_name,
                    's_address' => $s_address,
                    's_phone' => $s_phone,
                    'p_type' => $p_type,
                    'p_brief' => $p_brief,
                    'p_value' => $p_value,
                    'p_qty' => $p_qty,
                    'p_description' => $p_description,
                    'deadline' => $deadline,
                    'inspection_days' => $inspection,
                );
                $this->transaction_model->update_transaction($transaction[0]->id, $transaction_data);
                $transaction = $this->transaction_model->get_transaction($transaction_reference);
                $data['done_message'] = 'Transaction updated';
            }

            $data['transaction'] = $transaction;
            $data['mainContent'] = 'transaction/edit';
            $data['footer'] = $this->lang->line('footer');
            $data['link'] = $this->lang->line('link');
            $this->load->view('layout/template', $data);
        } else if ($this->session->userdata('role') == 'User') {
            if ($transaction[0]->s_email == $this->session->userdata('email')) {
                if ($this->form_validation->run() == FALSE) {
                    $data['error_message'] = 'Some errors occurred while trying to update your transaction';
                } else {
                    $s_email = ($this->input->post('s_email', TRUE)) ? $this->input->post('s_email', TRUE) : $this->session->userdata('email');
                    $b_email = $this->input->post('b_email', TRUE);
                    $b_name = $this->input->post('b_name', TRUE);
                    $b_address = $this->input->post('b_address', TRUE);
                    $b_phone = $this->input->post('b_phone', TRUE);
                    $s_name = $this->input->post('s_name', TRUE);
                    $s_address = $this->input->post('s_address', TRUE);
                    $s_phone = $this->input->post('s_phone', TRUE);
                    $p_type = $this->input->post('p_type', TRUE);
                    $p_brief = $this->input->post('p_brief', TRUE);
                    $p_value = $this->input->post('p_value', TRUE);
                    $p_qty = $this->input->post('p_qty', TRUE);
                    $p_description = $this->input->post('p_description', TRUE);
                    $deadline = $this->input->post('deadline', TRUE);
                    $inspection = $this->input->post('inspection', TRUE);
                    $transaction_data = array(
                        'b_email' => $b_email,
                        'b_name' => $b_name,
                        'b_address' => $b_address,
                        'b_phone' => $b_phone,
                        's_email' => $s_email,
                        's_name' => $s_name,
                        's_address' => $s_address,
                        's_phone' => $s_phone,
                        'p_type' => $p_type,
                        'p_brief' => $p_brief,
                        'p_value' => $p_value,
                        'p_qty' => $p_qty,
                        'p_description' => $p_description,
                        'deadline' => $deadline,
                        'inspection_days' => $inspection,
                    );
                    $this->transaction_model->update_transaction($transaction[0]->id, $transaction_data);
                    $transaction = $this->transaction_model->get_transaction($transaction_reference);
                    $data['done_message'] = 'Transaction updated';
                }

                $data['transaction'] = $transaction;
                $data['mainContent'] = 'transaction/edit';
                $data['footer'] = $this->lang->line('footer');
                $data['link'] = $this->lang->line('link');
                $this->load->view('layout/template', $data);
            } else {
                redirect(site_url());
            }
        }
    }


    public function continue_transaction($transaction_id)
    {
        $this->load->model('transaction_model');
        $transaction = $this->transaction_model->get_transaction($transaction_id);

        $form_rules = array(
            array(
                'field' => 'step', //name of input
                'rules' => 'required', // input rules Server side validation
                'errors' => array(
                    'required' => 'Status is required', // Error message if the key is not met
                )
            )
        );

        /*Set form rules*/
        $this->form_validation->set_rules($form_rules);

        if ($this->form_validation->run() == FALSE) {
            $data['error_message'] = 'Some errors occurred while trying to allow your transaction.';
        } else {
            $status = $this->input->post('step', TRUE);
            $transaction_data = array(
                'status' => $status
            );
            $this->transaction_model->update_transaction($transaction[0]->id, $transaction_data);
            $transaction = $this->transaction_model->get_transaction($transaction_id);
            $data['done_message'] = 'Status updated';
        }

        $data['transaction'] = $transaction;
        $data['mainContent'] = 'transaction/edit';
        $data['footer'] = $this->lang->line('footer');
        $data['link'] = $this->lang->line('link');
        $this->load->view('layout/template', $data);
    }

    public function allow_transaction($transaction_id)
    {
        $this->load->model('transaction_model');
        $transaction = $this->transaction_model->get_transaction($transaction_id);

        $form_rules = array(
            array(
                'field' => 'inspection', //name of input
                'label' => 'Days of Inspection', //label of input
                'rules' => 'numeric|is_natural|required' // input rules Server side validation
            ),
            array(
                'field' => 'deadline', //name of input
                'label' => 'Transaction Deadline', //label of input
                'rules' => 'required' // input rules Server side validation
            )
        );

        /*Set form rules*/
        $this->form_validation->set_rules($form_rules);

        if ($this->form_validation->run() == FALSE) {
            $data['error_message'] = 'There isn`t a checked status.';
        } else {
            $deadline = $this->input->post('deadline', TRUE);
            $inspection = $this->input->post('inspection', TRUE);
            $transaction_data = array(
                'deadline' => $deadline,
                'inspection_days' => $inspection,
                'status' => '1'
            );
            $this->transaction_model->update_transaction($transaction[0]->id, $transaction_data);
            $transaction = $this->transaction_model->get_transaction($transaction_id);
            $data['done_message'] = 'Transaction allowed';
        }

        $data['transaction'] = $transaction;
        $data['mainContent'] = 'transaction/edit';
        $data['footer'] = $this->lang->line('footer');
        $data['link'] = $this->lang->line('link');
        $this->load->view('layout/template', $data);
    }

    public function getUserIpAddr()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }


    public function track_transaction($reference = null)
    {
        $this->load->model('transaction_model');
        $data['title'] = 'Tracking ' . WEBSITE_NAME;

        if ($reference != null && strlen($reference) == 8) {
            $transaction = $this->transaction_model->get_transaction($reference);
            $count = count($transaction);

            if ($count > 0) {
                // Check if admin is logged in - skip PIN entry
                if ($this->session->userdata('status') == 'logged_in' && $this->session->userdata('role') == 'Admin') {
                    // Admin user - go directly to transaction view
                    $data['footer'] = $this->lang->line('footer');
                    $data['link'] = $this->lang->line('link');
                    $data["transaction"] = $transaction;
                    $data['mainContent'] = 'transaction/view';
                    $this->load->view('layout/template', $data);
                    return;
                }

                // Save IP address for non-admin users
                $ip_address = $this->getUserIpAddr();
                if (empty($transaction[0]->ip_address)) {
                    $transaction_data = array('ip_address' => $ip_address);
                    $this->transaction_model->update_transaction($transaction[0]->id, $transaction_data);
                }

                // Show PIN entry page with landing style for buyers
                $data['reference'] = $reference;
                $data['error_message'] = isset($_GET['error']) ? 'Falsche PIN. Bitte versuchen Sie es erneut.' : null;
                $data['mainContent'] = 'transaction/tracking_pin_content';
                $data['additional_css'] = array('public/css/tracking.css');
                $this->load->view('layout/landing_template', $data);
            } else {
                $data['error_message'] = 'Transaktion nicht gefunden. Bitte überprüfen Sie die Referenznummer.';
                $data['reference'] = $reference;
                $data['mainContent'] = 'transaction/tracking_pin_content';
                $data['additional_css'] = array('public/css/tracking.css');
                $this->load->view('layout/landing_template', $data);
            }
        } else {
            redirect(base_url());
        }
    }

    public function send_email()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('message', 'Message', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['mainContent'] = 'page/contact';
            $data['title'] = 'Page ' . WEBSITE_NAME;
            $data['page_id'] = 3;
            $data['page'] = $this->lang->line('contact');
            $data['footer'] = $this->lang->line('footer');
            $data['link'] = $this->lang->line('link');
            $data['contact_errors'] = validation_errors('<div class="errors">', '</div>');
            $this->load->view('layout/template', $data);
        } else {
            $this->load->library('email');

            $this->email->from($this->input->post('email'), $this->input->post('name'));
            $this->email->to(WEBSITE_EMAIL); //
            $this->email->subject('Message from contact form on ' . WEBSITE_NAME . '');
            $this->email->message($this->input->post('message'));

            $this->email->send();

            $data['mainContent'] = 'page/contact';
            $data['page_id'] = 3;
            $data['title'] = 'Page ' . WEBSITE_NAME;
            $data['page'] = $this->lang->line('contact');
            $data['footer'] = $this->lang->line('footer');
            $data['link'] = $this->lang->line('link');
            $data['success_message'] = 'Anfrage erfolgreich versendet!   Wir sind für dich da!  Unser Team steht dir jederzeit zur Verfügung.';
            $this->load->view('layout/template', $data);
        }
    }

    public function update_transaction_details()
    {
        $this->load->model('transaction_model');

        // Validate required fields
        $required_fields = array('b_name', 'b_email', 'b_address', 'b_country', 'b_city', 'b_postal_code', 'b_phone', 'id', 'reference');
        foreach ($required_fields as $field) {
            if (empty($_POST[$field])) {
                $transaction = $this->transaction_model->get_transaction($_POST["reference"]);
                $data['transaction'] = $transaction;
                $data['error_message'] = 'Bitte füllen Sie alle Pflichtfelder aus.';
                $data['title'] = 'Lieferadresse - ' . $transaction[0]->reference . ' | TrustAuto GmbH';
                $data['mainContent'] = 'transaction/step2_content';
                $data['additional_css'] = array('public/css/tracking.css');
                $this->load->view('layout/landing_template', $data);
                return;
            }
        }

        $transaction_data = array(
            'b_name' => $_POST["b_name"],
            'b_email' => $_POST["b_email"],
            'b_address' => $_POST["b_address"],
            'b_country' => $_POST["b_country"],
            'b_city' => $_POST["b_city"],
            'b_postal_code' => $_POST["b_postal_code"],
            'b_phone' => $_POST["b_phone"],
            'status' => '3' // Payment Confirmed
        );
        $this->transaction_model->update_transaction($_POST["id"], $transaction_data);
        $transaction = $this->transaction_model->get_transaction($_POST["reference"]);

        // generate invoice pdf file
        $data["transaction"] = $transaction;
        $data["current_date"] = date("d.m.Y");

        $arr_s_address = explode(", ", $transaction[0]->s_address);

        $data["b_address"] = $_POST["b_address"];
        $data["s_address"] = $arr_s_address;

        $startDate = time();
        $add_days = 2; // $transaction[0]->inspection_days;
        $final_date = date('d.m.Y', strtotime('+' . $add_days . ' day', $startDate));

        $data["final_date"] = $final_date;

        $msg_html = $this->load->view('transaction/message_template', $data, true);
        $pdf_html = $this->load->view('transaction/invoice_template', $data, true);

        $pdfFilePath = "invoice/TREUHANDVERTRAG_" . $_POST["reference"] . ".pdf";

        $this->pdf->savePDF($pdf_html, $pdfFilePath);

        // send invoice to buyer
        $this->load->library('email');
        $this->email->from(WEBSITE_EMAIL);
        $this->email->to($_POST["b_email"]);
        $this->email->subject('Die Transaktion ' . $_POST["reference"] . ' wurde gestartet!');
        $this->email->message($msg_html);
        $this->email->attach(base_url() . $pdfFilePath);
        $this->email->attach($pdfFilePath);
        
        try {
            $this->email->send();
        } catch (Exception $e) {
            // Log error but don't stop the process
        }

        // Show step 3 (confirmation page) with landing style
        $data['title'] = 'Zahlungsbestätigung - ' . $transaction[0]->reference . ' | TrustAuto GmbH';
        $data['mainContent'] = 'transaction/step3_content';
        $data['additional_css'] = array('public/css/tracking.css');
        $this->load->view('layout/landing_template', $data);
    }

    public function transaction_view($reference)
    {
        $this->load->model('transaction_model');

        $transaction = $this->transaction_model->get_transaction($reference);

        if (empty($transaction)) {
            redirect(base_url());
            return;
        }

        // Show final transaction view with landing style
        $data["transaction"] = $transaction;
        $data['title'] = 'Transaktion ' . $transaction[0]->reference . ' | TrustAuto GmbH';
        $data['mainContent'] = 'transaction/view_content';
        $data['additional_css'] = array('public/css/tracking.css');
        
        // Use landing template
        $this->load->view('layout/landing_template', $data);
    }

    public function print_invoice($reference)
    {
        $this->load->model('transaction_model');

        $transaction = $this->transaction_model->get_transaction($reference);

        $data["transaction"] = $transaction;
        $data["current_date"] = date("d.m.Y");

        $arr_b_address = explode(", ", $transaction[0]->b_address);
        $arr_s_address = explode(", ", $transaction[0]->s_address);

        $data["b_address"] = $arr_b_address;
        $data["s_address"] = $arr_s_address;

        $startDate = time();
        $add_days = 2; // $transaction[0]->inspection_days;
        $final_date = date('d.m.Y', strtotime('+' . $add_days . ' day', $startDate));

        $data["final_date"] = $final_date;

        $html = $this->load->view('transaction/invoice_template', $data, true);
        $filename = 'TREUHANDVERTRAG_' . $reference;
        $this->pdf->createPDF($html, $filename);
    }

    public function test()
    {
       
        $this->load->library('email');
        $this->email->from('info@promart-gmbh.de');

        $this->email->to("raystk2018@gmail.com");
        $this->email->subject('Die Transaktion #333 wurde gestartet!');
        $this->email->message("test message");

        try {
            $result = $this->email->send();
            var_dump($result);
            exit;
        } catch (Exception $e) {
            var_dump("error: " . $e->getMessage());
        }
    }
}
