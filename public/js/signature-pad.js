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
        
        // Save signature as base64 without border
        if (hasDrawn) {
            // Create a temporary canvas to crop the signature content
            const tempCanvas = document.createElement('canvas');
            const tempCtx = tempCanvas.getContext('2d');
            
            // Get the bounding box of the signature
            const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
            const data = imageData.data;
            
            let minX = canvas.width, minY = canvas.height, maxX = 0, maxY = 0;
            let foundPixel = false;
            
            // Find the bounding box of non-transparent pixels
            for (let y = 0; y < canvas.height; y++) {
                for (let x = 0; x < canvas.width; x++) {
                    const index = (y * canvas.width + x) * 4;
                    if (data[index + 3] > 0) { // Check alpha channel
                        foundPixel = true;
                        minX = Math.min(minX, x);
                        minY = Math.min(minY, y);
                        maxX = Math.max(maxX, x);
                        maxY = Math.max(maxY, y);
                    }
                }
            }
            
            if (foundPixel) {
                // Add some padding
                const padding = 10;
                minX = Math.max(0, minX - padding);
                minY = Math.max(0, minY - padding);
                maxX = Math.min(canvas.width, maxX + padding);
                maxY = Math.min(canvas.height, maxY + padding);
                
                // Set temporary canvas size to cropped area
                tempCanvas.width = maxX - minX;
                tempCanvas.height = maxY - minY;
                
                // Draw the cropped signature
                tempCtx.drawImage(canvas, minX, minY, maxX - minX, maxY - minY, 0, 0, maxX - minX, maxY - minY);
                
                // Save the cropped signature
                const dataURL = tempCanvas.toDataURL('image/png');
                signatureInput.value = dataURL;
            } else {
                signatureInput.value = '';
            }
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

