<span class="inline-flex rounded-md shadow-sm">
  <{{ $tag }} @if (!is_null($onclick)) onclick="{{ $onclick }}" @endif @if (!is_null($href)) href="{{$href}}" @endif class="inline-flex items-center px-{{ $measurements['px'] }} py-{{ $measurements['py'] }} border border-transparent text-xs leading-{{ $measurements['leading'] }} font-medium rounded text-white bg-black hover:bg-gray-800 focus:outline-none focus:gray-700 focus:shadow-outline-gray-700 active:bg-gray-800 transition ease-in-out duration-150 {{ $classes }} {{$attributes}}">
    {{ $slot }}
  </{{ $tag }}>
</span>