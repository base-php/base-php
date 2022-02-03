<button x-show="{{ $show }}" x-on:click="{{ $click }}" type="button" id="{{ $id ?? '' }}" class="inline-flex items-center p-2 appearance-none bg-{{ $background }} border border-gray-200 border-transparent rounded-md font-semibold text-xs text-{{ $text }} uppercase tracking-widest hover:bg-{{ $background }} active:bg-{{ $background }} focus:outline-none focus:border-{{ $background }} focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
    {{ $slot }}
</button>
