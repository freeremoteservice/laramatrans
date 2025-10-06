<!-- Main Tracking Content -->
<section class="tracking-main-section">
    <div class="container">
        <?php if (isset($error_message)): ?>
            <div class="alert alert-error">
                <i class="fas fa-exclamation-circle"></i>
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>

        <?php if (isset($success_message)): ?>
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i>
                <?php echo $success_message; ?>
            </div>
        <?php endif; ?>

        <!-- PIN Entry Form -->
        <div class="tracking-card">
            <div class="tracking-header">
                <h2>PIN-Bestätigung erforderlich</h2>
                <p>Bitte geben Sie Ihre 4-stellige PIN ein, um fortzufahren</p>
            </div>
            
            <form action="<?php echo site_url('respond/' . (isset($reference) ? $reference : '')); ?>" method="POST" class="pin-form">
                <div class="form-group-tracking">
                    <label for="pin">PIN-Nummer:</label>
                    <input type="text" 
                           id="pin" 
                           name="pin" 
                           class="form-control-tracking" 
                           placeholder="0000" 
                           maxlength="4" 
                           pattern="[0-9]{4}" 
                           required>
                    <small>Die PIN wurde Ihnen vom Verkäufer mitgeteilt</small>
                </div>
                
                <div class="button-group">
                    <button type="submit" class="btn btn-primary-tracking">
                        <i class="fas fa-lock"></i> PIN bestätigen
                    </button>
                    <a href="<?php echo base_url(); ?>" class="btn btn-secondary-tracking">
                        Abbrechen
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>

