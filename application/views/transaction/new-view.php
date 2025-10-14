<?php 
$ip_address = "saved in db";
if ($transaction[0]->ip_address != "") {
    $ip_address = $transaction[0]->ip_address;
} ?>

<?php if (($transaction[0]->status == '-2') || ($transaction[0]->status == '1')) : ?>
    <?php if (!empty($transaction)) : ?>
        <div class="container mt-5">
            <form id="shipping-details-form" action="<?= base_url('action/update_transaction_details') ?>" method="post">
                <div class="stages-container">
                    <?php if ($transaction[0]->status == '-2') : ?>
                    <!-- Start Displaying New Transaction to approve and continue -->
                    <div class="stage">
                        <div class="container">
                            <div class="stage-window">
                                <div class="stage-header" role="banner" style="background: var(--theme2)">
                                    <h3 class="invert mb-0" style="color: white; text-transform: unset;">Transaktionsdetails für 
                                        <span>ID <?= $transaction[0]->reference ?></span>
                                    </h3>
                                </div>
                                <div class="stage-body">
                                    <!-- owner photo & summary -->
                                    <div class="row">
                                        <div class="detail_box">
                                            <div class="row">
                                                <h4><?= $transaction[0]->b_detail_1 ?></h4>
                                                <p>
                                                    Unser Unternehmen stellt Ihnen einen persönlichen und individuellen Berater zur Seite, der Sie während des gesamten Bezahlungsprozesses sowie des Transports begleitet. Die Transaktion wird sicher in Treuhand über unser Unternehmen abgewickelt, sodass Sie maximalen Schutz genießen.
                                                    Falls Sie Fragen haben, nutzen Sie bitte unser Kontaktformular und geben Sie Ihre Transaktions-ID (<strong><?= $transaction[0]->reference ?></strong>)  an, damit wir Ihnen schnell und gezielt weiterhelfen können.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- seller details -->
                                    <div class="row mt-3">
                                        <div class="col-lg-6 col-sm-12 col-xs-12">
                                            <div class="detail_box">
                                                <div class="row">
                                                    <h4>Verkäuferdetails/Abholung-Standort</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-sm-12">
                                                        <strong>Name: </strong>
                                                    </div>
                                                    <div class="col-lg-7 col-sm-12">
                                                        <?= $transaction[0]->s_name ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-sm-12">
                                                        <strong>Adresse: </strong>
                                                    </div>
                                                    <div class="col-lg-7 col-sm-12">
                                                        <?= $transaction[0]->s_address ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- transaction details & additional information -->
                                    <div class="row mt-3">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="detail_box">
                                                <div class="row">
                                                    <h4>Transaktionsdetails</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-sm-12"><strong>Fahrzeug</strong></div>
                                                    <div class="col-lg-7 col-sm-12"><?= $transaction[0]->p_brief ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-sm-12"><strong>Fahrzeugtyp</strong></div>
                                                    <div class="col-lg-7 col-sm-12"><?= $transaction[0]->p_type ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-sm-12"><strong>Gesamtpreis(&euro;)</strong></div>
                                                    <div class="col-lg-7 col-sm-12"><?= $transaction[0]->p_value ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-sm-12"><strong>Inspektionszeitraum (tag)</strong></div>
                                                    <div class="col-lg-7 col-sm-12"><?= $transaction[0]->inspection_days ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="detail_box">
                                                <div class="row">
                                                    <h4>Zusätzliche Information</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-sm-12"><strong>Transportoption</strong></div>
                                                    <div class="col-lg-7 col-sm-12"><?= $transaction[0]->t_type ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-sm-12"><strong>Transportdienste</strong></div>
                                                    <div class="col-lg-7 col-sm-12">Express Transport</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-sm-12"><strong>Transportstatus</strong></div>
                                                    <div class="col-lg-7 col-sm-12"><strong style="color: red">Das Fahrzeug wird an der Adresse des Verkäufers abgeholt</strong></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-sm-12"><strong>Zahlungsmethode</strong></div>
                                                    <div class="col-lg-7 col-sm-12">Banküberweisung</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-sm-12"><strong>Transaktionsstatus</strong></div>
                                                    <div class="col-lg-7 col-sm-12"><p>Ausstehende Antwort</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- action buttons -->
                                    <div class="row mt-3">
                                        <div class="text-center">
                                            <a href="<?= site_url('transaction-accept') ?>"
                                            class="btn btn-success btn-lg response-button"
                                            data-reference-number="<?= $transaction[0]->reference ?>"
                                            data-response="approve" role="button"
                                            data-id="<?= $transaction[0]->pin ?>">
                                                AKZEPTIEREN
                                            </a>
                                            <a href="<?= site_url('transaction-decline') ?>"
                                            class="btn btn-danger btn-lg response-button"
                                            data-reference-number="<?= $transaction[0]->reference ?>"
                                            data-response="decline" role="button"
                                            data-id="<?= $transaction[0]->pin ?>">
                                                abbrechen
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Displaying New Transaction -->
                    <?php endif ?>
                    <!-- Start Displaying Buyer Details to input -->
                    <div class="stage">
                        <div class="container">
                            <div class="stage-window">
                                <div class="stage-header" role="banner" style="background: var(--theme2)">
                                    <h3 class="invert mb-0" style="color: white" >Lieferadresse</h3>
                                </div>
                                <div class="stage-body">
                                    <div class="row form-group mb-3">
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <label for="b_name">Vollständiger Name</label>
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                                            <input type="text" id="b_name" name="b_name" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row form-group mb-3">
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <label for="b_address">Straße und Nummer</label>
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                                            <input type="text" id="b_address" name="b_address" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row form-group mb-3">
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <label for="b_city">Stadt</label>
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                                            <input type="text" id="b_city" name="b_city" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row form-group mb-3">
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <label for="b_postal_code">Postleitzahl</label>
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                                            <input type="text" id="b_postal_code" name="b_postal_code" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row form-group mb-3">
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <label for="b_phone">Telefonnummer</label>
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                                            <input type="number" id="b_phone" name="b_phone" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row form-group mb-3">
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <label for="b_email">Email</label>
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                                            <input type="email" id="b_email" name="b_email" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row form-group mb-3">
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <label for="b_country">Land</label>
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                                            <input type="text" id="b_country" name="b_country" class="form-control" />
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="<?= $transaction[0]->id ?>" />
                                    <input type="hidden" name="reference" value="<?= $transaction[0]->reference ?>" />
                                    <div class="callout warning" style="display: none; height: 50px; margin-bottom: 15px;" id="ajaxWarning">
                                        <p><i class="fa fa-exclamation-circle"></i> ERROR. Please input all fields correctly.</p>
                                    </div>
                                    <div class="row form-group">
                                        <button class="btn btn-primary btn-lg go-ahead" style="background-color: var(--theme2)">
                                            Weiter
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Displaying Buyer Details -->
                    <!-- Start Displaying Payment Details to confirm -->
                    <div class="stage">
                        <div class="container">
                            <div class="stage-window">
                                <div class="stage-header" role="banner" style="background: var(--theme2)">
                                    <h3 class="invert mb-0" style="color: white">
                                        <p id="buyername"></p>
                                        <span class="invert" style="color: white">Transaktions</span>
                                        <?= $transaction[0]->reference ?>
                                        zusammenfassung
                                    </h3>
                                </div>
                                <div class="stage-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <h3>Zahlungsdetails</h3>
                                            <hr />
                                            <div class="row mb-3">
                                                <div class="col-lg-4 col-md-6 col-sm-12 right_border">
                                                    <strong>Fahrzeug</strong>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-12">
                                                    <?= $transaction[0]->p_brief ?>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-4 col-md-6 col-sm-12 right_border">
                                                    <strong>Gesamtpreis</strong>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-12">
                                                    <?= $transaction[0]->p_value ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-12 right_border">
                                                    <strong>Inspektionszeitraum (tag)</strong>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-12">
                                                    <?= $transaction[0]->inspection_days ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <h3>Transaktionsdetails</h3>
                                            <hr>
                                            <div class="row mb-3">
                                                <div class="col-lg-4 col-md-6 col-sm-12 right_border">
                                                    <strong>Zahlungsmethode</strong>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-12">
                                                    Banküberweisung
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-4 col-md-6 col-sm-12 right_border">
                                                    <strong>Zahlungsfrist</strong>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-12">
                                                    24 Stunden
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-lg-6 col-sm-12">
                                            <!-- <span>Ihre IP-Adresse ist (<?php echo $ip_address ?>)</span>
                                            <span>*Ihre Zahlung wird derzeit von <?= $transaction[0]->b_detail_4 ?> bearbeitet</span> -->
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <button class="btn btn-primary btn-lg expanded approve_button" style="text-transform: uppercase; background-color: var(--theme2); color: white; width: 100%;">
                                                Ich stimme zu
                                            </button>
                                            <button class="btn btn-primary btn-lg expanded hide">
                                                <i class="fa fa-map"></i>
                                                Ich stimme zu
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-sm-12">
                                            <h3>Kann ich das Fahrzeug wirklich wieder zurückgeben?</h3>
                                            <span>
                                                Natürlich, das können Sie. Wir stehen voll und ganz hinter unseren Dienstleistungen. Ewering ist der sicherste Weg, einen Gebrauchtwagen zu kaufen. Das ausgesuchte Fahrzeug wird vor dem Kauf zunächst gründlich von uns untersucht.  Ewering übernimmt soweit jeweils sämtliche mit dem Fahrzeug verbundenen Risiken. Wenn es Ihnen dann doch nicht gefallen sollte, können Sie es uns innerhalb von 21 Tagen ab Übernahme wieder zurückgeben (nähere Details siehe AGB).
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Displaying Payment Details -->
                </div>
            </form>

            <div class="pin-input" style="opacity: 0; visibility: hidden;">
                <span class="close-window">X</span>
                <label for="pin">Bitte bestätigen Sie Ihre PIN:
                    <?php $pin = array('name' => 'pin', 'id' => 'pin', 'type' => 'text', 'required' => '', 'pattern' => 'number', 'autocomplete' => 'off');
                    echo form_input($pin); ?>
                    <span class="form-error">
                        Please enter a valid PIN
                    </span>
                </label>
                <a href="" class="submit-pin ajax-submit">Fortsetzen</a>
            </div>

            <div class="reveal" id="exampleModal2" data-reveal>
                <div class="row">
                    <div class="small-12 columns">
                        <h4>Edit Delivery Address:</h4>
                        <label for="b_address">Old Address:
                            <?php
                            $b_address = array('name' => 'b_address', 'id' => 'b_address', 'type' => 'text', 'required' => '', 'disabled' => 'disabled', 'value' => $transaction[0]->b_address);
                            echo form_input($b_address); ?>
                        </label>
                        <label for="b_address">New Address:
                            <?php
                            $b_address = array('name' => 'b_address', 'id' => 'b_address', 'type' => 'text', 'required' => '', 'value' => '');
                            echo form_input($b_address); ?>
                        </label>
                    </div>
                    <div class="small-12 columns">
                        <a href="#" class="button success float-right"><i class="fa fa-check"></i>
                            Confirm Address
                        </a>
                    </div>
                </div>
                <button class="close-button" data-close aria-label="Close reveal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

    <?php else : ?>
        <div class="callout warning" data-closable>
            <p class="lead">An error occurred when trying to get your transaction. Please try again</p>
            <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <?php if ($this->session->userdata('role') == 'Admin') : ?>
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-sm-12">
                    <a href="<?= base_url('dashboard') ?>" class="btn btn-primary btn-lg" style="background-color: var(--theme2); width: 100%; color: white;">Back to Admin Area</a>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php else : ?>
    <!---------------------------------------- Start Transaction Details Page ---------------------------------------->
    <?php if (!empty($transaction)) : ?>
        <!--<< Breadcrumb Section >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url(<?= base_url('public/img/bg-header-banner.png') ?>);">
            <div class="container">
                <div class="page-heading">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="<?= base_url() ?>"> Home </a>
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                        </li>
                        <li>
                            Transaction Details Page
                        </li>
                    </ul>
                    <h1 class="wow fadeInUp text-uppercase" data-wow-delay=".5s"><?= $transaction[0]->reference ?></h1>
                </div>
            </div>
        </div>
        <!--<< Transaction Details Section >>-->
        <section class="mt-5 pt-5">
            <div class="container">
                <div class="section-title">
                    <img src="<?= base_url('assets/img/sub-icon.png') ?>" alt="icon-img" class="wow fadeInUp" />
                    <span class="wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        Wichtige Informationen zu Ihrer Transaktion:
                    </span>
                </div>
                
                
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                            Unser Unternehmen stellt Ihnen einen persönlichen und individuellen Berater zur Seite. Dieser begleitet Sie von Beginn an durch den gesamten Bezahlprozess sowie den Transport.
                            Die Rechnung wurde an die von Ihnen angegebene E-Mail-Adresse (<strong style="color: var(--theme2)"><?= $transaction[0]->b_email ?></strong>) gesendet.
                            <a href="<?=base_url()?>action/print_invoice/<?=$transaction[0]->reference ?>"><strong style="color: var(--theme2)">Sie können Ihre Rechnung ausdrucken</strong></a>.
                            Um Missbrauch unserer Dienstleistungen zu vermeiden, haben wir Ihre IP-Adresse (<strong style="color: var(--theme2)"><?= $transaction[0]->ip_address ?></strong>) gespeichert.  
                            Bei Fragen nutzen Sie bitte das Kontaktformular und geben Ihre Transaktions-ID (<?= $transaction[0]->reference ?>) an.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seller Details -->
        <section class="mt-5 pt-5">
            <div class="container">
                <div class="section-title">
                    <img src="<?= base_url('assets/img/sub-icon.png') ?>" alt="icon-img" class="wow fadeInUp" />
                    <span class="wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        Abholung-Standort
                    </span>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <strong>Address</strong>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <?= $transaction[0]->s_address ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Payment Details -->
        <section class="mt-5 pt-5">
            <div class="container">
                <div class="section-title">
                    <img src="<?= base_url('assets/img/sub-icon.png') ?>" alt="icon-img" class="wow fadeInUp" />
                    <span class="wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        Transaction details
                    </span>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <strong>Fahrzeug</strong>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <?= $transaction[0]->p_brief ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <strong>Bezeichnung</strong>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <?= $transaction[0]->p_description ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <strong>Gesamtpreis &euro;</strong>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <?= $transaction[0]->p_value ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <strong>Inspektionszeitraum (tag)</strong>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <?= $transaction[0]->inspection_days ?> Tage
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <strong>Kunden-Nr</strong>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        KN006200
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <strong>Rechnungs-Nr</strong>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        PB023012
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <strong>Transportmethode</strong>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        Open Transport
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <strong>Transportdienste</strong>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        Express Transport
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <strong>Transport status</strong>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        Fahrzeug abgeholt werden
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <strong>Zahlungsart</strong>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        Banküberweisung
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <strong>Datum</strong>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <?= date("d-m-Y") ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Buyer Details -->
        <section class="mt-5 pt-5">
            <div class="container">
                <div class="section-title">
                    <img src="<?= base_url('assets/img/sub-icon.png') ?>" alt="icon-img" class="wow fadeInUp" />
                    <span class="wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        Lieferadresse
                    </span>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <strong>Name</strong>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <?= $transaction[0]->b_name ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <strong>Adresse</strong>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <?= $transaction[0]->b_address ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <strong>Stadt</strong>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <?= $transaction[0]->b_city ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <strong>Country</strong>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <?= $transaction[0]->b_country ?>
                    </div>
                </div>
            </div>
        </section>

        <?php if ($this->session->userdata('role') == 'Admin') : ?>
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-sm-12">
                        <a href="<?= base_url('dashboard') ?>" class="btn btn-primary btn-lg" style="background-color: var(--theme2); width: 100%; color: white;">
                            Back to Admin Area
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    <?php endif; ?>
    <!---------------------------------------- End Transaction Details Page ---------------------------------------->
<?php endif; ?>