<!-- Main Content -->
<section class="tracking-main-section">
    <div class="container">
        <!-- Header -->
        <div class="tracking-card">
            <div class="tracking-header">
                <h2><i class="fas fa-file-contract"></i> Transaktion <?php echo $transaction[0]->reference; ?></h2>
                <p>Vollständige Transaktionsdetails</p>
            </div>

            <!-- Important Information -->
            <div class="info-box">
                <p>
                    <strong><i class="fas fa-info-circle"></i> Wichtige Informationen zu Ihrer Transaktion:</strong><br><br>
                    Unser Unternehmen stellt Ihnen einen persönlichen und individuellen Berater zur Seite. Dieser begleitet Sie von Beginn an durch den gesamten Bezahlprozess sowie den Transport.
                    Die Rechnung wurde an die von Ihnen angegebene E-Mail-Adresse (<strong style="color: var(--accent-light)"><?php echo $transaction[0]->b_email; ?></strong>) gesendet.
                    <br><br>
                    <a href="<?php echo base_url('action/print_invoice/' . $transaction[0]->reference); ?>" style="color: var(--accent-light); text-decoration: underline;">
                        <i class="fas fa-print"></i> Sie können Ihre Rechnung hier ausdrucken
                    </a>.
                    <br><br>
                    Um Missbrauch unserer Dienstleistungen zu vermeiden, haben wir Ihre IP-Adresse (<strong><?php echo $transaction[0]->ip_address; ?></strong>) gespeichert.
                    Bei Fragen nutzen Sie bitte das Kontaktformular und geben Ihre Transaktions-ID (<strong><?php echo $transaction[0]->reference; ?></strong>) an.
                </p>
            </div>

            <!-- Abholung-Standort -->
            <div class="transaction-details-card" style="margin-top: 2rem;">
                <h3><i class="fas fa-map-marker-alt"></i> Abholung-Standort</h3>
                <div class="detail-row">
                    <span class="detail-label">Adresse:</span>
                    <span class="detail-value"><?php echo $transaction[0]->s_address; ?></span>
                </div>
            </div>

            <!-- Transaction Details -->
            <div class="details-grid">
                <div class="transaction-details-card">
                    <h3><i class="fas fa-car"></i> Transaktionsdetails</h3>
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
                        <span class="detail-value"><?php echo $transaction[0]->inspection_days; ?> <?php echo ($transaction[0]->inspection_days > 1) ? 'Tage' : 'Tag'; ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Zahlungsart:</span>
                        <span class="detail-value">Banküberweisung</span>
                    </div>
                </div>
            </div>

            <!-- Transport & Status -->
            <div class="transaction-details-card" style="margin-top: 2rem;">
                <h3><i class="fas fa-truck"></i> Transport & Status</h3>
                <div class="detail-row">
                    <span class="detail-label">Transportstatus:</span>
                    <span class="detail-value" style="color: #ef4444;">Das Fahrzeug wird an der Adresse des Verkäufers abgeholt</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Transportart:</span>
                    <span class="detail-value">Express Transport</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Transaktions-ID:</span>
                    <span class="detail-value highlight"><?php echo $transaction[0]->reference; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Transaktionsstatus:</span>
                    <span class="detail-value">
                        <span style="color: #fbbf24; font-weight: 600;">
                            <i class="fas fa-clock"></i> Zahlung ausstehend
                        </span>
                    </span>
                </div>
            </div>

            <!-- Delivery Address -->
            <div class="transaction-details-card" style="margin-top: 2rem;">
                <h3><i class="fas fa-home"></i> Lieferadresse</h3>
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
                    <span class="detail-value"><?php echo $transaction[0]->b_city; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Land:</span>
                    <span class="detail-value"><?php echo $transaction[0]->b_country; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">E-Mail:</span>
                    <span class="detail-value highlight"><?php echo $transaction[0]->b_email; ?></span>
                </div>
            </div>

            <?php if ($this->session->userdata('role') == 'Admin'): ?>
                <div class="button-group" style="margin-top: 2.5rem;">
                    <a href="<?php echo base_url('dashboard'); ?>" class="btn-primary-tracking">
                        <i class="fas fa-arrow-left"></i> Zurück zum Admin-Bereich
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

