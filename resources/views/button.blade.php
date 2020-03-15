@if ($test === 'defaults')
<x-button>Button Tag Button</x-button>
@endif
@if ($test === 'hello world')
<x-button>Hello World</x-button>
@endif
@if ($test == 'indigo')
<x-button color="indigo">Indigo Button</x-button>
@endif
@if ($test == 'a')
    <x-button href="indigo">A Tag Button</x-button>
@endif
@if ($test == 'xs')
    <x-button size="xs">A Tiny Button</x-button>
@endif
@if ($test == 's')
    <x-button size="s">A Small Button</x-button>
@endif
@if ($test == 'm')
    <x-button size="m">A Medium Button</x-button>
@endif
@if ($test == 'l')
    <x-button size="l">A Large Button</x-button>
@endif
@if ($test == 'xl')
    <x-button size="xl">A Huge Button</x-button>
@endif

