// Step 1 PIN Modal Functionality
document.addEventListener('DOMContentLoaded', function() {
    const approveBtn = document.getElementById('approve-btn');
    const pinModal = document.getElementById('pin-modal');
    const closePinModal = document.getElementById('close-pin-modal');
    const cancelPinBtn = document.getElementById('cancel-pin-btn');
    const pinInput = document.getElementById('pin-input');
    const pinError = document.getElementById('pin-error');
    
    // Check if elements exist (only on step1)
    if (!approveBtn || !pinModal) {
        return;
    }
    
    // Auto-show modal if there's a PIN error
    if (pinError && pinError.style.display === 'flex') {
        pinModal.style.display = 'flex';
        setTimeout(() => {
            pinInput.focus();
        }, 300);
    }
    
    // Open PIN modal when approve button is clicked
    approveBtn.addEventListener('click', function() {
        pinModal.style.display = 'flex';
        setTimeout(() => {
            pinInput.focus();
        }, 300);
    });
    
    // Close modal function
    function closeModal() {
        pinModal.style.display = 'none';
        pinInput.value = '';
        pinError.style.display = 'none';
    }
    
    // Close modal on X button
    closePinModal.addEventListener('click', closeModal);
    
    // Close modal on cancel button
    cancelPinBtn.addEventListener('click', closeModal);
    
    // Close modal when clicking outside
    pinModal.addEventListener('click', function(e) {
        if (e.target === pinModal) {
            closeModal();
        }
    });
    
    // Close modal on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && pinModal.style.display === 'flex') {
            closeModal();
        }
    });
    
    // Only allow numbers in PIN input
    pinInput.addEventListener('input', function(e) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
});

