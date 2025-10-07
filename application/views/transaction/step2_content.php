<!-- Main Content -->
<section class="tracking-main-section">
    <div class="container">
        <!-- Progress Steps -->
        <div class="progress-steps">
            <div class="progress-step completed">
                <div class="progress-step-circle"><i class="fas fa-check"></i></div>
                <div class="progress-step-label">Details geprüft</div>
            </div>
            <div class="progress-step active">
                <div class="progress-step-circle">2</div>
                <div class="progress-step-label">Lieferadresse</div>
            </div>
            <div class="progress-step">
                <div class="progress-step-circle">3</div>
                <div class="progress-step-label">Bestätigung</div>
            </div>
        </div>

        <!-- Delivery Form -->
        <div class="tracking-card">
            <div class="tracking-header">
                <h2><i class="fas fa-map-marker-alt"></i> Lieferadresse eingeben</h2>
                <p>Bitte geben Sie Ihre vollständige Lieferadresse ein</p>
            </div>

            <?php if (isset($error_message)): ?>
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-circle"></i>
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>

            <form action="<?php echo base_url('action/update_transaction_details'); ?>" method="POST" class="tracking-form-style">
                <input type="hidden" name="id" value="<?php echo $transaction[0]->id; ?>">
                <input type="hidden" name="reference" value="<?php echo $transaction[0]->reference; ?>">
                
                <div class="form-group-tracking">
                    <label for="b_name">
                        <i class="fas fa-user"></i> Vollständiger Name *
                    </label>
                    <input type="text" 
                           id="b_name" 
                           name="b_name" 
                           class="form-control-tracking" 
                           style="text-align: left; letter-spacing: normal;"
                           placeholder="Max Mustermann" 
                           required>
                </div>

                <div class="form-group-tracking">
                    <label for="b_address">
                        <i class="fas fa-home"></i> Straße und Hausnummer *
                    </label>
                    <input type="text" 
                           id="b_address" 
                           name="b_address" 
                           class="form-control-tracking" 
                           style="text-align: left; letter-spacing: normal;"
                           placeholder="Musterstraße 123" 
                           required>
                </div>

                <div class="form-group-tracking">
                    <label for="b_postal_code">
                        <i class="fas fa-mail-bulk"></i> Postleitzahl *
                    </label>
                    <input type="text" 
                           id="b_postal_code" 
                           name="b_postal_code" 
                           class="form-control-tracking" 
                           style="text-align: left; letter-spacing: normal;"
                           placeholder="10115" 
                           maxlength="5"
                           required>
                </div>

                <div class="form-group-tracking">
                    <label for="b_city">
                        <i class="fas fa-city"></i> Stadt *
                    </label>
                    <input type="text" 
                           id="b_city" 
                           name="b_city" 
                           class="form-control-tracking" 
                           style="text-align: left; letter-spacing: normal;"
                           placeholder="Berlin" 
                           required>
                </div>

                <div class="form-group-tracking">
                    <label for="b_country">
                        <i class="fas fa-flag"></i> Land *
                    </label>
                    <input type="text" 
                           id="b_country" 
                           name="b_country" 
                           class="form-control-tracking" 
                           style="text-align: left; letter-spacing: normal;"
                           placeholder="Deutschland" 
                           required>
                </div>

                <div class="form-group-tracking">
                    <label for="b_phone">
                        <i class="fas fa-phone"></i> Telefonnummer *
                    </label>
                    <input type="tel" 
                           id="b_phone" 
                           name="b_phone" 
                           class="form-control-tracking" 
                           style="text-align: left; letter-spacing: normal;"
                           placeholder="+49 30 12345678" 
                           required>
                </div>

                <div class="form-group-tracking">
                    <label for="b_email">
                        <i class="fas fa-envelope"></i> E-Mail-Adresse *
                    </label>
                    <input type="email" 
                           id="b_email" 
                           name="b_email" 
                           class="form-control-tracking" 
                           style="text-align: left; letter-spacing: normal;"
                           placeholder="max@beispiel.de" 
                           required>
                    <small>An diese Adresse wird die Rechnung gesendet</small>
                </div>

                <div class="form-group-tracking">
                    <label for="signature">
                        <i class="fas fa-signature"></i> Unterschrift *
                    </label>
                    <div class="signature-container">
                        <canvas id="signature-pad" class="signature-pad"></canvas>
                        <input type="hidden" id="signature" name="signature" required>
                    </div>
                    <div class="signature-buttons">
                        <button type="button" id="clear-signature" class="btn-clear-signature">
                            <i class="fas fa-eraser"></i> Unterschrift löschen
                        </button>
                    </div>
                    <small>Bitte unterschreiben Sie mit Ihrer Maus oder Ihrem Finger (auf Touchscreens)</small>
                </div>

                <div class="button-group">
                    <button type="submit" class="btn-primary-tracking" id="submit-btn">
                        <i class="fas fa-arrow-right"></i> Weiter zur Bestätigung
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

