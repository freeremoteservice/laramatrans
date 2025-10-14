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
                <div class="transaction-details-card" style="margin-bottom: 0;">
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
                    <div class="detail-row">
                        <span class="detail-label">Zahlungsmethode:</span>
                        <span class="detail-value">Banküberweisung</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Transaktionsstatus:</span>
                        <span class="detail-value">Zahlung ausstehend</span>
                    </div>
                </div>
            </div>

            <!-- Important Notice -->
            <div class="info-box">
                <p>
                    <strong>Verfügbare Dienstleistungen für diese Transaktion:</strong> Fahrzeugabholung / Fahrzeugtransport / 14 Tage Geld-zurück-Garantie</a>.
                </p>
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

            <!-- Important Notice -->
            <div class="info-box" style="margin-top: 2rem;">
                <p>
                    <strong><i class="fas fa-shield-alt"></i> Wichtig:</strong> Die Rechnung wurde an Ihre E-Mail-Adresse (<strong><?php echo $transaction[0]->b_email; ?></strong>) gesendet.
                    Sie können <a href="<?php echo base_url('action/print_invoice/' . $transaction[0]->reference); ?>" style="color: var(--accent-light); text-decoration: underline;">Ihre Rechnung hier ausdrucken</a>.
                </p>
            </div>

            <!-- IP Notice -->
            <div style="text-align: center; margin-top: 2rem; color: var(--text-light); font-size: 0.9rem;">
                <p>Ihre IP-Adresse (<?php echo $transaction[0]->ip_address; ?>) wurde aus Sicherheitsgründen gespeichert.</p>
            </div>

            <!-- Confirmation Button -->
            <div class="button-group" style="margin-top: 2.5rem;">
                <button type="button" class="btn-primary-tracking" style="background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);" onclick="window.location.href='<?php echo base_url('transaction/view/' . $transaction[0]->reference); ?>'">
                    <i class="fas fa-check-double"></i> Ich bestätige
                </button>
            </div>
        </div>
    </div>
</section>

