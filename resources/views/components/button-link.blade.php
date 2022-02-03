<a x-on:click="{{ $click ?? '' }}" href="{{ $href ?? '' }}" class="inline-flex items-center p-3 appearance-none bg-{{ $color }} border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-{{ $color }} active:bg-{{ $color }} focus:outline-none focus:border-{{ $color }} focus:ring focus:ring-{{ $color }} disabled:opacity-25 transition">
    {{ $slot }}
</a>
