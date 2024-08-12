<!-- Banner de Sucesso -->
<div>
    <div id="successBanner" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
        <span class="block sm:inline">{{ $slot }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="closeBanner()">
            <svg class="fill-current h-6 w-6 text-green-700" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Fechar</title><path d="M14.348 14.849a1 1 0 01-1.414 0L10 11.414l-2.934 2.935a1 1 0 11-1.414-1.415l2.934-2.935-2.934-2.934a1 1 0 111.414-1.414L10 8.586l2.934-2.935a1 1 0 111.414 1.415L11.414 10l2.934 2.934a1 1 0 010 1.415z"/></svg>
        </span>
    </div>
    <script>
        function closeBanner() {
            var banner = document.getElementById('successBanner');
            banner.style.display = 'none';
        }
    </script>
</div>
