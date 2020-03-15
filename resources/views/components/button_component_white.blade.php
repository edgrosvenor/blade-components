<span class="inline-flex rounded-md shadow-sm">
  <{{ $tag }} @if (!is_null($onclick)) onclick="{{ $onclick }}" @endif @if (!is_null($href)) href="{{$href}}" @endif class="inline-flex items-center px-{{ $measurements['px'] }} py-{{ $measurements['py'] }} border border-transparent text-xs leading-{{ $measurements['leading'] }} font-medium rounded text-black bg-white hover:bg-gray-100 focus:outline-none focus:border-gray-200 focus:shadow-outline-gray-100 active:bg-white transition ease-in-out duration-150 {{ $classes }} {{$attributes}}">
    {{ $slot }}
  </{{ $tag }}>
</span>