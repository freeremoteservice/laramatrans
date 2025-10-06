<!-- Main Content -->
<section class="tracking-main-section">
    <div class="container">
        <!-- Progress Steps -->
        <div class="progress-steps">
            <div class="progress-step completed">
                <div class="progress-step-circle"><i class="fas fa-check"></i></div>
                <div class="progress-step-label">Details geprüft</div>
            </div>
            <div class="progress-step completed">
                <div class="progress-step-circle"><i class="fas fa-check"></i></div>
                <div class="progress-step-label">Lieferadresse</div>
            </div>
            <div class="progress-step active">
                <div class="progress-step-circle">3</div>
                <div class="progress-step-label">Bestätigung</div>
            </div>
        </div>

        <!-- Payment Confirmation -->
        <div class="tracking-card">
            <div class="tracking-header">
                <h2><i class="fas fa-check-circle" style="color: #22c55e;"></i> Transaktionszusammenfassung</h2>
                <p>Transaktion <?php echo $transaction[0]->reference; ?></p>
            </div>

            <!-- Payment Details Grid -->
            <div class="details-grid">
                <!-- Payment Details -->
                <div class="transaction-details-card">
                    <h3><i class="fas fa-credit-card"></i> Zahlungsdetails</h3>
                    <div class="detail-row">
                        <span class="detail-label">Fahrzeug:</span>
                        <span class="detail-value highlight"><?php echo $transaction[0]->p_brief; ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Gesamtpreis:</span>
                        <span class="detail-value highlight"><?php echo number_format($transaction[0]->p_value, 2, ',', '.'); ?> €</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Inspektionszeitraum:</span>
                        <span class="detail-value"><?php echo $transaction[0]->inspection_days; ?> Tage</span>
                    </div>
                </div>

                <!-- Transaction Details -->
                <div class="transaction-details-card">
                    <h3><i class="fas fa-file-invoice"></i> Transaktionsdetails</h3>
                    <div class="detail-row">
                        <span class="detail-label">Zahlungsmethode:</span>
                        <span class="detail-value">Banküberweisung</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Zahlungsfrist:</span>
                        <span class="detail-value">24 Stunden</span>
                    </div>
                </div>
            </div>

            <!-- Delivery Address Summary -->
            <div class="transaction-details-card" style="margin-top: 2rem;">
                <h3><i class="fas fa-shipping-fast"></i> Lieferadresse</h3>
                <div class="detail-row">
                    <span class="detail-label">Name:</span>
                    <span class="detail-value"><?php echo $transaction[0]->b_name; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Adresse:</span>
                    <span class="detail-value"><?php echo $transaction[0]->b_address; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Stadt:</span>
                    <span class="detail-value"><?php echo $transaction[0]->b_city; ?>, <?php echo $transaction[0]->b_postal_code; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Land:</span>
                    <span class="detail-value"><?php echo $transaction[0]->b_country; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Telefon:</span>
                    <span class="detail-value"><?php echo $transaction[0]->b_phone; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">E-Mail:</span>
                    <span class="detail-value highlight"><?php echo $transaction[0]->b_email; ?></span>
                </div>
            </div>

            <!-- Bank Transfer Details -->
            <div class="transaction-details-card" style="margin-top: 2rem; background: rgba(59, 130, 246, 0.05);">
                <h3><i class="fas fa-university"></i> Überweisungsdetails</h3>
                <div class="detail-row">
                    <span class="detail-label">Empfänger:</span>
                    <span class="detail-value"><?php echo $transaction[0]->b_detail_1; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Bank:</span>
                    <span class="detail-value"><?php echo $transaction[0]->b_detail_4; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">IBAN:</span>
                    <span class="detail-value highlight"><?php echo $transaction[0]->b_detail_2; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">BIC/SWIFT:</span>
                    <span class="detail-value highlight"><?php echo $transaction[0]->b_detail_3; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Betrag:</span>
                    <span class="detail-value highlight" style="font-size: 1.3rem;"><?php echo number_format($transaction[0]->p_value, 2, ',', '.'); ?> €</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Verwendungszweck:</span>
                    <span class="detail-value">Transaktion <?php echo $transaction[0]->reference; ?></span>
                </div>
            </div>

            <!-- Important Notice -->
            <div class="info-box" style="margin-top: 2rem;">
                <p>
                    <strong><i class="fas fa-shield-alt"></i> Wichtig:</strong> Die Rechnung wurde an Ihre E-Mail-Adresse (<strong><?php echo $transaction[0]->b_email; ?></strong>) gesendet.
                    Sie können <a href="<?php echo base_url('action/print_invoice/' . $transaction[0]->reference); ?>" style="color: var(--accent-light); text-decoration: underline;">Ihre Rechnung hier ausdrucken</a>.
                </p>
            </div>

            <!-- FAQ Section -->
            <div class="transaction-details-card" style="margin-top: 2rem;">
                <h3><i class="fas fa-question-circle"></i> Kann ich das Fahrzeug wirklich wieder zurückgeben?</h3>
                <p style="color: var(--text-light); line-height: 1.6; margin-top: 1rem;">
                    Natürlich, das können Sie. Wir stehen voll und ganz hinter unseren Dienstleistungen. TrustAuto ist der sicherste Weg, einen Gebrauchtwagen zu kaufen. Das ausgesuchte Fahrzeug wird vor dem Kauf zunächst gründlich von uns untersucht. TrustAuto übernimmt soweit jeweils sämtliche mit dem Fahrzeug verbundenen Risiken. Wenn es Ihnen dann doch nicht gefallen sollte, können Sie es uns innerhalb von <?php echo $transaction[0]->inspection_days; ?> Tagen ab Übernahme wieder zurückgeben (nähere Details siehe AGB).
                </p>
            </div>

            <!-- IP Notice -->
            <div style="text-align: center; margin-top: 2rem; color: var(--text-light); font-size: 0.9rem;">
                <p>Ihre IP-Adresse (<?php echo $transaction[0]->ip_address; ?>) wurde aus Sicherheitsgründen gespeichert.</p>
            </div>

            <!-- Confirmation Button -->
            <div class="button-group" style="margin-top: 2.5rem;">
                <button type="button" class="btn-primary-tracking" style="background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);" onclick="window.location.href='<?php echo base_url('transaction/view/' . $transaction[0]->reference); ?>'">
                    <i class="fas fa-check-double"></i> Ich stimme zu und bestätige die Zahlung
                </button>
            </div>
        </div>
    </div>
</section>

