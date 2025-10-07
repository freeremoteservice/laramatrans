// Signature Pad Functionality for Step 2
document.addEventListener('DOMContentLoaded', function() {
    const canvas = document.getElementById('signature-pad');
    
    // Check if signature pad canvas exists (only on step 2)
    if (!canvas) {
        return;
    }
    
    const signatureInput = document.getElementById('signature');
    const clearButton = document.getElementById('clear-signature');
    const submitButton = document.getElementById('submit-btn');
    const form = canvas.closest('form');
    
    // Set canvas size
    function resizeCanvas() {
        const ratio = Math.max(window.devicePixelRatio || 1, 1);
        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = canvas.offsetHeight * ratio;
        canvas.getContext('2d').scale(ratio, ratio);
        
        // Reset canvas styles
        const ctx = canvas.getContext('2d');
        ctx.strokeStyle = '#000';
        ctx.lineWidth = 2;
        ctx.lineCap = 'round';
        ctx.lineJoin = 'round';
    }
    
    resizeCanvas();
    window.addEventListener('resize', resizeCanvas);
    
    // Drawing variables
    let isDrawing = false;
    let lastX = 0;
    let lastY = 0;
    let hasDrawn = false;
    
    const ctx = canvas.getContext('2d');
    ctx.strokeStyle = '#000';
    ctx.lineWidth = 2;
    ctx.lineCap = 'round';
    ctx.lineJoin = 'round';
    
    // Get mouse/touch position
    function getPosition(e) {
        const rect = canvas.getBoundingClientRect();
        const clientX = e.touches ? e.touches[0].clientX : e.clientX;
        const clientY = e.touches ? e.touches[0].clientY : e.clientY;
        
        return {
            x: clientX - rect.left,
            y: clientY - rect.top
        };
    }
    
    // Start drawing
    function startDrawing(e) {
        e.preventDefault();
        isDrawing = true;
        const pos = getPosition(e);
        lastX = pos.x;
        lastY = pos.y;
    }
    
    // Draw
    function draw(e) {
        if (!isDrawing) return;
        e.preventDefault();
        
        const pos = getPosition(e);
        
        ctx.beginPath();
        ctx.moveTo(lastX, lastY);
        ctx.lineTo(pos.x, pos.y);
        ctx.stroke();
        
        lastX = pos.x;
        lastY = pos.y;
        hasDrawn = true;
    }
    
    // Stop drawing
    function stopDrawing() {
        if (!isDrawing) return;
        isDrawing = false;
        
        // Save signature as base64
        if (hasDrawn) {
            const dataURL = canvas.toDataURL('image/png');
            signatureInput.value = dataURL;
        }
    }
    
    // Clear signature
    function clearSignature() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        signatureInput.value = '';
        hasDrawn = false;
    }
    
    // Mouse events
    canvas.addEventListener('mousedown', startDrawing);
    canvas.addEventListener('mousemove', draw);
    canvas.addEventListener('mouseup', stopDrawing);
    canvas.addEventListener('mouseout', stopDrawing);
    
    // Touch events
    canvas.addEventListener('touchstart', startDrawing);
    canvas.addEventListener('touchmove', draw);
    canvas.addEventListener('touchend', stopDrawing);
    
    // Clear button
    clearButton.addEventListener('click', clearSignature);
    
    // Form validation
    if (form) {
        form.addEventListener('submit', function(e) {
            if (!hasDrawn || !signatureInput.value) {
                e.preventDefault();
                alert('Bitte unterschreiben Sie das Formular, bevor Sie fortfahren.');
                return false;
            }
        });
    }
});

