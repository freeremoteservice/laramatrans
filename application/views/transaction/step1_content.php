<!-- Main Content -->
<section class="tracking-main-section">
    <div class="container">
        <!-- Progress Steps -->
        <div class="progress-steps">
            <div class="progress-step active">
                <div class="progress-step-circle">1</div>
                <div class="progress-step-label">Details prüfen</div>
            </div>
            <div class="progress-step">
                <div class="progress-step-circle">2</div>
                <div class="progress-step-label">Lieferadresse</div>
            </div>
            <div class="progress-step">
                <div class="progress-step-circle">3</div>
                <div class="progress-step-label">Bestätigung</div>
            </div>
        </div>

        <!-- Transaction Header -->
        <div class="tracking-card">
            <div class="tracking-header">
                <h2>Transaktionsdetails für ID <?php echo $transaction[0]->reference; ?></h2>
                <p><?php echo $transaction[0]->b_detail_1; ?></p>
            </div>

            <!-- Info Box -->
            <div class="info-box">
                <p>
                    Unser Unternehmen stellt Ihnen einen persönlichen und individuellen Berater zur Seite, der Sie während des gesamten Bezahlungsprozesses sowie des Transports begleitet. Die Transaktion wird sicher in Treuhand über unser Unternehmen abgewickelt, sodass Sie maximalen Schutz genießen.
                    <br><br>
                    Falls Sie Fragen haben, nutzen Sie bitte unser Kontaktformular und geben Sie Ihre Transaktions-ID (<strong><?php echo $transaction[0]->reference; ?></strong>) an, damit wir Ihnen schnell und gezielt weiterhelfen können.
                </p>
            </div>

            <!-- Transaction Details Grid -->
            <div class="details-grid">
                <!-- Seller Details -->
                <div class="transaction-details-card">
                    <h3><i class="fas fa-user"></i> Verkäuferdetails / Abholung-Standort</h3>
                    <div class="detail-row">
                        <span class="detail-label">Name:</span>
                        <span class="detail-value"><?php echo $transaction[0]->s_name; ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Adresse:</span>
                        <span class="detail-value"><?php echo $transaction[0]->s_address; ?></span>
                    </div>
                </div>

                <!-- Transaction Details -->
                <div class="transaction-details-card">
                    <h3><i class="fas fa-file-alt"></i> Transaktionsdetails</h3>
                    <div class="detail-row">
                        <span class="detail-label">Fahrzeug:</span>
                        <span class="detail-value highlight"><?php echo $transaction[0]->p_brief; ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Fahrzeugtyp:</span>
                        <span class="detail-value"><?php echo $transaction[0]->p_type; ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Gesamtpreis (€):</span>
                        <span class="detail-value highlight"><?php echo number_format($transaction[0]->p_value, 2, ',', '.'); ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Inspektionszeitraum:</span>
                        <span class="detail-value"><?php echo $transaction[0]->inspection_days; ?> Tage</span>
                    </div>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="transaction-details-card" style="margin-top: 2rem;">
                <h3><i class="fas fa-info-circle"></i> Zusätzliche Information</h3>
                <div class="detail-row">
                    <span class="detail-label">Transportoption:</span>
                    <span class="detail-value"><?php echo $transaction[0]->t_type; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Transportdienste:</span>
                    <span class="detail-value">Express Transport</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Transportstatus:</span>
                    <span class="detail-value" style="color: #ef4444;">Das Fahrzeug muss an der Adresse des Verkäufers abgeholt werden</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Zahlungsmethode:</span>
                    <span class="detail-value">Banküberweisung</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Transaktionsstatus:</span>
                    <span class="detail-value">Ausstehende Antwort</span>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="action-buttons">
                <form action="<?php echo site_url('respond/' . $transaction[0]->reference); ?>" method="POST" style="display: inline;">
                    <input type="hidden" name="response" value="APPROVE">
                    <input type="hidden" name="pin" value="<?php echo isset($verified_pin) ? $verified_pin : ''; ?>">
                    <button type="submit" class="btn-approve">
                        <i class="fas fa-check-circle"></i> AKZEPTIEREN
                    </button>
                </form>
                
                <form action="<?php echo site_url('respond/' . $transaction[0]->reference); ?>" method="POST" style="display: inline;">
                    <input type="hidden" name="response" value="DECLINE">
                    <input type="hidden" name="pin" value="<?php echo isset($verified_pin) ? $verified_pin : ''; ?>">
                    <button type="submit" class="btn-decline">
                        <i class="fas fa-times-circle"></i> ABBRECHEN
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

