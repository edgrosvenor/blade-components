<div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:py-5">
    <label for="{{ $attributes->get('id') ?? 'x'.md5(json_encode($attributes)) }}"
           class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
        {{ $attributes->get('label') ?? Str::random(8) }}
    </label>
    <div class="mt-1 sm:mt-0 sm:col-span-2">
        <div class="max-w-lg flex rounded-md shadow-sm">
            @if ($attributes->offsetExists('prefix'))
                <span
                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                {{ $attributes->get('prefix') }}
              </span>
            @endif
            <select
                    @include('bcl::components.partials.livewire-inputs')

                    id="{{ $attributes->get('id') ?? 'x'.md5(json_encode($attributes)) }}"
                    class="block form-select w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                    {{ $attributes->except('id', 'prefix', 'label') }}
            >
                {{ $slot }}
            </select>
            @if ($attributes->offsetExists('postfix'))
                <span
                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                {{ $attributes->get('postfix') }}
              </span>
            @endif
        </div>
    </div>
</div>
