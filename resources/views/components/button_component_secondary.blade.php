<span class="inline-flex rounded-md shadow-sm">
  <{{ $tag }} @if (!is_null($onclick)) onclick="{{ $onclick }}" @endif @if (!is_null($href)) href="{{$href}}" @endif class="inline-flex items-center px-{{ $measurements['px'] }} py-{{ $measurements['py'] }} border border-transparent text-xs leading-{{ $measurements['leading'] }} font-medium rounded text-{{$color}}-700 bg-{{ $color }}-100 hover:bg-{{ $color }}-50 focus:outline-none focus:border-{{ $color }}-300 focus:shadow-outline-{{ $color }} active:bg-{{ $color }}-700 transition ease-in-out duration-150 {{ $classes }} {{$attributes}}">
    {{ $slot }}
  </{{ $tag }}>
</span>