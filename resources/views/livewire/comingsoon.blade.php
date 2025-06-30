<div class="min-h-screen bg-blue-50 flex flex-col justify-center items-center p-8">
    <div class="text-center animate-fadeIn">
        <img src="/image/develpment1-removebg-preview.png" alt="Page in Development" class="mx-auto w-80" />
        <h1 class="text-5xl sm:text-7xl font-extrabold text-blue-700 mt-6">Page In Development</h1>
        <p class="text-lg sm:text-xl text-gray-700 mt-2">This feature is currently being built. Please check back soon!</p>
        <a wire:navigate href="{{ route('getstarted') }}" class="mt-6 inline-block bg-blue-600 text-white px-8 py-3 rounded-full text-lg font-semibold shadow-lg transition hover:scale-105 hover:bg-blue-700">Return KodigoUI</a>
    </div>

    @livewire('footer')
</div>
