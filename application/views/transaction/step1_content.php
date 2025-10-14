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
            <?php if (isset($decline_success) && $decline_success): ?>
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    Sie haben die Transaktion erfolgreich abgelehnt. Der Verkäufer wird benachrichtigt.
                </div>
            <?php endif; ?>
            
            <div class="tracking-header">
                <h2>Transaktionsdetails für ID <?php echo $transaction[0]->reference; ?></h2>
            </div>

            <!-- Transaction Details Grid -->
            <div class="details-grid">
                <!-- Transaction Details -->
                <div class="transaction-details-card">
                    <h3><i class="fas fa-file-alt"></i> Transaktionsdetails</h3>
                    <div class="detail-row">
                        <span class="detail-label">Transaktions-ID:</span>
                        <span class="detail-value highlight"><?php echo $transaction[0]->reference; ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Fahrzeug:</span>
                        <span class="detail-value highlight"><?php echo $transaction[0]->p_brief; ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Gesamtpreis (€):</span>
                        <span class="detail-value highlight"><?php echo number_format($transaction[0]->p_value, 2, ',', '.'); ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Inspektionszeitraum:</span>
                        <span class="detail-value"><?php echo $transaction[0]->inspection_days; ?> Tage</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Name:</span>
                        <span class="detail-value"><?php echo $transaction[0]->s_name; ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Adresse:</span>
                        <span class="detail-value"><?php echo $transaction[0]->s_address; ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Transportstatus:</span>
                        <span class="detail-value" style="color: #ef4444;">Das Fahrzeug wird an der Adresse des Verkäufers abgeholt</span>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="action-buttons">
                <button type="button" class="btn-approve" id="approve-btn">
                    <i class="fas fa-check-circle"></i> AKZEPTIEREN
                </button>
                
                <form action="<?php echo site_url('respond/' . $transaction[0]->reference); ?>" method="POST" style="display: inline;">
                    <input type="hidden" name="response" value="DECLINE">
                    <input type="hidden" name="pin" value="">
                    <button type="submit" class="btn-decline">
                        <i class="fas fa-times-circle"></i> ABBRECHEN
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- PIN Modal -->
<div id="pin-modal" class="pin-modal" style="display: none;">
    <div class="pin-modal-content">
        <div class="pin-modal-header">
            <h3><i class="fas fa-lock"></i> PIN-Verifizierung erforderlich</h3>
            <button type="button" class="pin-modal-close" id="close-pin-modal">&times;</button>
        </div>
        <div class="pin-modal-body">
            <p>Bitte geben Sie Ihre PIN ein, um die Transaktion zu akzeptieren:</p>
            <form action="<?php echo site_url('respond/' . $transaction[0]->reference); ?>" method="POST" id="pin-form">
                <input type="hidden" name="response" value="APPROVE">
                <div class="pin-input-group">
                    <input type="password" 
                           id="pin-input" 
                           name="pin" 
                           class="pin-input" 
                           placeholder="PIN eingeben" 
                           maxlength="4"
                           required>
                </div>
                <div id="pin-error" class="pin-error" style="display: <?php echo (isset($pin_error) && $pin_error) ? 'flex' : 'none'; ?>;">
                    <i class="fas fa-exclamation-circle"></i> <span id="pin-error-message">Falsche PIN. Bitte versuchen Sie es erneut.</span>
                </div>
                <div class="pin-modal-buttons">
                    <button type="button" class="btn-cancel-pin" id="cancel-pin-btn">
                        Abbrechen
                    </button>
                    <button type="submit" class="btn-submit-pin">
                        <i class="fas fa-check"></i> Bestätigen
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

