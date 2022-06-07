<div class="min-h-screen flex flex-col sm:justify-center items-center bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="card m-auto w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
