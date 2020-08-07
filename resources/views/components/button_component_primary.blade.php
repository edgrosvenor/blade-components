<span class="inline-flex rounded-md shadow-sm">
  <{{ $tag }} @include('bcl::components.partials.livewire-inputs') @if (!is_null($onclick)) onclick="{{ $onclick }}" @endif @if (!is_null($href)) href="{{$href}}" @endif class="inline-flex items-center px-{{ $measurements['px'] }} py-{{ $measurements['py'] }} border border-transparent text-xs leading-{{ $measurements['leading'] }} font-medium rounded text-white bg-{{ $color }}-600 hover:bg-{{ $color }}-500 focus:outline-none focus:border-{{ $color }}-700 focus:shadow-outline-{{ $color }} active:bg-{{ $color }}-700 transition ease-in-out duration-150 {{ $classes }} {{$attributes}}">
    {{ $slot }}
  </{{ $tag }}>
</span>

