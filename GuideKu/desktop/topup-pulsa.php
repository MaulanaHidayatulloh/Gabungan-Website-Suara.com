<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topup & Tagihan</title>

    <!-- CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.1/sweetalert2.min.js"></script>
     <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://biller-interface.2secure.co.id/css/topup-tagihan.css">
</head>

<style>
    .tab-btn {
     background: transparent !important;
     border:none!important;
    }
    .tab-btn.active{
     background:#1F5FD1 !important;
     color:#fff!important;
    }
</style>

<body class="">
<div class="w-[300px] max-w-2xl bg-[#EDFBFF] px-3 pb-3 rounded-2xl shadow-xl space-y-6">
    <!-- Header -->
    <div class="relative w-full 
                bg-gradient-to-r from-teal-400 to-blue-700 
                h-16 w-290px
                flex items-center justify-between px-6
                rounded-b-3xl overflow-hidden">

        <!-- Text -->
        <h1 class="text-white text-sm font-semibold">
            Top-Up & Bayar
        </h1>

        <div class="absolute right-[-10px] bottom-[-4px]">
            <img src="./assets/images/widget/icon.png" alt="" width="60">
        </div>
    </div>
    
    <!-- Tabs -->
    <div class="flex flex-wrap gap-2 text-sm font-medium bg-gradient-to-r from-teal-300 to-cyan-300 p-1.5 rounded-full">
    
        <button class="tab-btn flex-1 rounded-full bg-transparent text-indigo-900 transition" data-tab="pulsa">
            Pulsa
        </button>
        
        <button class="tab-btn flex-1 rounded-full  bg-transparent text-white/70 transition" data-tab="data">
            Paket Data
        </button>
        
        <button class="tab-btn flex-1 rounded-full  bg-transparent text-white/70 transition" data-tab="ewallet">
            E-Wallet
        </button>

    </div>

 
    <!-- ================= PULSA ================= -->
    <div class="tab-content" data-tab="pulsa">
        <form action="https://biller-interface.2secure.co.id/checkout" method="POST" class="space-y-4">
            
            <div class="flex flex-wrap gap-4 items-end">
                
                <div class="flex-1 relative">
                    <label class="text-sm font-semibold">Nomor Telepon</label>
                    <input type="number" name="nomor_telepon"
                        placeholder="08xxxx"
                        class="w-full px-4 py-2 border rounded-xl"
                        required>
                </div>

                <div class="w-full">
                    <label class="text-sm font-semibold">Nominal</label>
                    <select name="produk" class="w-full px-4 py-2 border rounded-xl" required>
                        <option>Pilih Nominal</option>
                    </select>
                </div>

                <button type="submit" class="w-full bg-[#FF1753] from-red-600 to-purple-800 text-white px-6 py-2 rounded-xl">
                    Beli
                </button>
            </div>

            <input type="hidden" name="type" value="pulsa">
        </form>

        <button onclick="openStatusModal()" class="w-full mt-3 bg-[#0088FF] text-white px-6 py-2 rounded-xl">
           Cek Status
        </button>
    </div>

    <!-- ================= DATA ================= -->
    <div class="tab-content hidden" data-tab="data">
        <form action="https://biller-interface.2secure.co.id/checkout" method="POST" class="space-y-4">

            <div class="flex flex-wrap gap-4 items-end">

                <input type="number" placeholder="Nomor" class="flex-1 px-4 py-2 border rounded-xl" required>

                <select class="w-full px-4 py-2 border rounded-xl" required>
                    <option>Pilih Paket</option>
                </select>

                <button type="submit" class="w-full bg-[#FF1753] from-red-600 to-purple-800 text-white px-6 py-2 rounded-xl">
                    Beli
                </button>
            </div>

            <input type="hidden" name="type" value="data">
        </form>
        <button onclick="openStatusModal()" class="w-full mt-3 bg-[#0088FF] text-white px-6 py-2 rounded-xl">
            Cek Status
        </button>
    </div>

    <!-- ================= EWALLET ================= -->
    <div class="tab-content hidden" data-tab="ewallet">
        <form action="https://biller-interface.2secure.co.id/checkout" method="POST" class="space-y-4">

            <select class="w-full px-4 py-2 border rounded-xl">
                <option>-- Pilih E-Wallet --</option>
                <option>GOPAY</option>
                <option>DANA</option>
                <option>OVO</option>
                <option>SHOPEE PAY</option>
            </select>

            <input type="number" placeholder="Nomor" class="w-full px-4 py-2 border rounded-xl">

            <select class="w-full px-4 py-2 border rounded-xl">
                <option>Pilih Nominal</option>
            </select>

            <button type="submit" class="w-full bg-[#FF1753] from-red-600 to-purple-800 text-white px-6 py-2 rounded-xl">
               Beli
            </button>

            <input type="hidden" name="type" value="ewallet">
        </form>
        <button onclick="openStatusModal()" class="w-full mt-3 bg-[#0088FF] text-white px-6 py-2 rounded-xl">
            Cek Status
        </button>
    </div>

</div>

<div id="statusModalOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-2 sm:p-4 hidden">
    <!-- Modal Box - Responsive -->
    <div id="statusModal" class="bg-white rounded-xl shadow-xl w-full max-w-2xl relative max-h-[95vh] sm:max-h-[90vh] flex flex-col">
        <!-- Header - Fixed -->
        <div class="flex items-center justify-between p-3 sm:p-6 border-b border-gray-200 flex-shrink-0">
            <h2 class="text-sm sm:text-lg font-bold text-gray-800">🔍 Cek Status Transaksi</h2>
            <button onclick="closeStatusModal()" class="text-gray-400 hover:text-gray-600 text-xl sm:text-2xl leading-none transition-colors p-1 -mr-1" aria-label="Close">
                ✕
            </button>
        </div>

        <!-- Content - Scrollable -->
        <div class="overflow-y-auto flex-1 p-3 sm:p-6 space-y-3 sm:space-y-4">
            <!-- Input & Tombol Cek -->
            <div class="space-y-2 sm:space-y-3">
                <label class="block text-xs sm:text-sm font-medium text-gray-700">
                    Masukkan Nomor Referensi / No Handphone:
                </label>
                <div class="flex flex-col sm:flex-row gap-2">
                    <input id="inputStatus" type="text" placeholder="TRX123456 atau 081234567890" class="flex-1 px-3 sm:px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-all" required="">
                    
                    <button onclick="checkStatus()" class="w-full sm:w-auto px-4 sm:px-6 py-2 bg-gradient-to-r from-teal-400 to-blue-700  text-white text-xs sm:text-sm font-semibold rounded-lg hover:opacity-90 transition-all whitespace-nowrap shadow-sm">
                        Cek Status
                    </button>
                </div>

                <!-- Error Message -->
                <div id="errorMessage" class="p-2.5 sm:p-3 text-xs sm:text-sm text-red-800 rounded-lg bg-red-100 border border-red-200 hidden" role="alert">
                    <span class="font-medium">Oops!</span> Transaksi tidak ditemukan atau input kosong.
                </div>
            </div>

            <!-- Tabel Hasil - Responsive -->
            <div id="statusResult" class="hidden">
                <h3 class="font-semibold text-xs sm:text-base mb-2 sm:mb-3 text-gray-800">Hasil:</h3>
                
                <!-- Table Container with Horizontal Scroll -->
                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white">
                    <div class="overflow-x-auto custom-scrollbar">
                        <table class="w-full text-xs sm:text-sm min-w-[400px]">
                            <tbody id="resultBody" class="divide-y divide-gray-200 text-gray-700"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SCRIPT -->
<script src="https://biller-interface.2secure.co.id/js/topup-tagihan.js"></script>

<script>
    function sendHeight() {
        window.parent.postMessage({ height: document.body.scrollHeight }, "*");
    }
    window.addEventListener("load", sendHeight);
    window.addEventListener("resize", sendHeight);
</script>

<script>

    
// [REST OF THE CODE REMAINS THE SAME - Modal functions, status check, etc.]
// Modal functions
function openStatusModal() {
    const overlay = document.getElementById('statusModalOverlay');
    if (overlay) {
        overlay.classList.remove('hidden');
        document.body.classList.add('modal-open');
        
        // Focus on input
        setTimeout(() => {
            document.getElementById('inputStatus')?.focus();
        }, 100);
    }
}

function closeStatusModal() {
    const overlay = document.getElementById('statusModalOverlay');
    if (overlay) {
        overlay.classList.add('hidden');
        document.body.classList.remove('modal-open');
        
        // Clear results
        const resultDiv = document.getElementById('statusResult');
        const errorMessage = document.getElementById('errorMessage');
        const inputStatus = document.getElementById('inputStatus');
        
        if (resultDiv) resultDiv.classList.add('hidden');
        if (errorMessage) errorMessage.classList.add('hidden');
        if (inputStatus) inputStatus.value = '';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const overlay = document.getElementById('statusModalOverlay');
    const modal = document.getElementById('statusModal');
    
    if (overlay && modal) {
        overlay.addEventListener('click', function(e) {
            if (e.target === overlay) {
                closeStatusModal();
            }
        });
    }
    
    // Close with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const overlay = document.getElementById('statusModalOverlay');
            if (overlay && !overlay.classList.contains('hidden')) {
                closeStatusModal();
            }
        }
    });
});
</script>
</body>
</html>