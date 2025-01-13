export default () => ({
    html5QrcodeScanner: null,

    init() {
        this.html5QrcodeScanner = new Html5QrcodeScanner(
        "reader",
        { fps: 10, qrbox: { width: 250, height: 250 } },
        false
        );
        this.html5QrcodeScanner.render(this.onScanSuccess, this.onScanFailure);
    },

    onScanSuccess(decodedText, decodedResult) {
        console.log(`Code matched = ${decodedText}`, decodedResult);
    },

    onScanFailure(error) {
        console.warn(`Code scan error = ${error}`);
    },

    destroy() {
        if (this.html5QrcodeScanner) {
        this.html5QrcodeScanner.clear();
        }
    },
})