<script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('qr', () => ({
            html5QrcodeScanner: null,
            open: false,

            init() {
                this.html5QrcodeScanner = new Html5QrcodeScanner(
                "reader",
                { fps: 1, qrbox: { width: 250, height: 250 } },
                false
                );
                this.html5QrcodeScanner.render(this.onScanSuccess, this.onScanFailure);
            },

            onScanSuccess(decodedText, decodedResult) {
                console.log(`Code matched = ${decodedText}`, decodedResult);
                let name = this.full_name;

                // Perform additional actions if needed (e.g., update UI or process the result)
                alert(`Scan successful: ${decodedText}. Welcome ${name}`);

                
            },

            onScanFailure(error) {
                console.warn(`Code scan error = ${error}`);
            },

            destroy() {
                if (this.html5QrcodeScanner) {
                this.html5QrcodeScanner.clear();
                }
            },


            }));
        });
    </script>