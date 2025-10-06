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
                        <span class="detail-label">Fahrzeugtyp:</span>
                        <span class="detail-value"><?php echo $transaction[0]->p_type; ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Menge:</span>
                        <span class="detail-value"><?php echo $transaction[0]->p_qty; ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Gesamtpreis:</span>
                        <span class="detail-value highlight"><?php echo number_format($transaction[0]->p_value, 2, ',', '.'); ?> €</span>
                    </div>
                </div>

                <div class="transaction-details-card">
                    <h3><i class="fas fa-info-circle"></i> Zusätzliche Informationen</h3>
                    <div class="detail-row">
                        <span class="detail-label">Beschreibung:</span>
                        <span class="detail-value"><?php echo $transaction[0]->p_description; ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Inspektionszeitraum:</span>
                        <span class="detail-value"><?php echo $transaction[0]->inspection_days; ?> <?php echo ($transaction[0]->inspection_days > 1) ? 'Tage' : 'Tag'; ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Frist:</span>
                        <span class="detail-value">
                            <?php 
                            $days_left = dateDiff($transaction[0]->deadline);
                            if ($days_left < 0): ?>
                                <?php echo date("d.m.Y", strtotime($transaction[0]->deadline)); ?> | 
                                <span style="color: #22c55e;"><?php echo ($days_left * -1); ?> <?php echo ($days_left == -1) ? 'Tag' : 'Tage'; ?> übrig</span>
                            <?php else: ?>
                                <span style="color: #ef4444;">Abgelaufen am <?php echo date("d.m.Y", strtotime($transaction[0]->deadline)); ?></span>
                            <?php endif; ?>
                        </span>
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
                    <span class="detail-label">Erstellt am:</span>
                    <span class="detail-value"><?php echo date("d.m.Y H:i", strtotime($transaction[0]->date_created)); ?></span>
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
                    <span class="detail-label">Aktueller Status:</span>
                    <span class="detail-value">
                        <?php if ($transaction[0]->status == 'Y'): ?>
                            <span style="color: #22c55e; font-weight: 600;">
                                <i class="fas fa-check-circle"></i> Genehmigt
                            </span>
                            <?php if (!empty($transaction[0]->date_updated)): ?>
                                am <?php echo date("d.m.Y", strtotime($transaction[0]->date_updated)); ?>
                            <?php endif; ?>
                        <?php elseif ($transaction[0]->status == 'N'): ?>
                            <span style="color: #ef4444; font-weight: 600;">
                                <i class="fas fa-times-circle"></i> Abgelehnt
                            </span>
                            <?php if (!empty($transaction[0]->date_updated)): ?>
                                am <?php echo date("d.m.Y", strtotime($transaction[0]->date_updated)); ?>
                            <?php endif; ?>
                        <?php elseif ($transaction[0]->status == '3'): ?>
                            <span style="color: #22c55e; font-weight: 600;">
                                <i class="fas fa-check-double"></i> Zahlung bestätigt
                            </span>
                        <?php else: ?>
                            <?php if (dateDiff($transaction[0]->deadline) < 0): ?>
                                <span style="color: #fbbf24; font-weight: 600;">
                                    <i class="fas fa-clock"></i> Ausstehend - Warten auf Käuferantwort
                                </span>
                            <?php else: ?>
                                <span style="color: #64748b; font-weight: 600;">
                                    <i class="fas fa-exclamation-triangle"></i> Abgelaufen
                                </span>
                            <?php endif; ?>
                        <?php endif; ?>
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

