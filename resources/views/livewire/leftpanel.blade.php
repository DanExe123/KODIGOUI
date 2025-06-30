<div>
     <!-- Left Sidebar -->
  <aside class="w-64 bg-blue-50 border-r border-gray-200 shadow-md min-h-screen">
    <div class="px-6 py-5 border-b border-gray-200">
      <h2 class="text-xl font-bold text-gray-800" style="font-family: 'Arial Black', Arial, sans-serif;">KodigoUI</h2>
      <p class="text-[10px] text-gray-500">TALL Stack Powered</p>
    </div>

    <nav class="p-4 space-y-4 text-gray-700">
      <div>
        <x-side-link>Documentation</x-side-link>
      </div>

      <div>
        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">UI Components</h3>
        <x-side-link wire:navigate href="{{ route('modal-section') }}">Modal</x-side-link>  
        <x-side-link wire:navigate href="{{ route('button-section') }}">Buttons</x-side-link>
        <x-side-link wire:navigate href="{{ route('links-section') }}">Links</x-side-link>
        <x-side-link wire:navigate href="{{ route('input-section') }}">Input</x-side-link>
        <x-side-link wire:navigate href="{{ route('comingsoon') }}">Select</x-side-link>
        <x-side-link wire:navigate href="{{ route('alert-section') }}">Alert</x-side-link>
        <x-side-link wire:navigate href="{{ route('loading-section') }}">Loading</x-side-link>
        <x-side-link wire:navigate href="{{ route('comingsoon') }}">Table</x-side-link>
        <x-side-link wire:navigate href="{{ route('comingsoon') }}">Sweet Alert</x-side-link>
        <x-side-link wire:navigate href="{{ route('comingsoon') }}">Rich Editor</x-side-link>
        <x-side-link wire:navigate href="{{ route('comingsoon') }}">Badge</x-side-link>
        <x-side-link wire:navigate href="{{ route('comingsoon') }}">toast</x-side-link>
        
      </div>
    </nav>
  </aside>
</div>
