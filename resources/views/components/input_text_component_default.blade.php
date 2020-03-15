<div>
    <div class="flex justify-between">
        <label for="{{ $id }}" class="@if ($hide_label) sr_only @else block text-sm font-medium leading-5 text-gray-700 text-left @endif">{{ $label }}</label>
        @if ($hint) <span class="text-sm leading-5 text-gray-500">{{ $hint }}</span> @endif
    </div>
    <div class="mt-1 relative rounded-md shadow-sm">
        <input id="{{ $id }}" type="{{ $type ?? 'text' }}" class="form-input block w-full sm:text-sm sm:leading-5" placeholder="{{ $placeholder }}" value="{{ $value }}" />

        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
            @if ($error)
            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
            @endif
        </div>


    </div>
    @if ($help)<p class="mt-2 ml-2 text-sm text-gray-500 text-left">{{ $help }}</p>@endif
    @if ($error)<p class="mt-2 ml-2 text-sm text-red-600 text-left">{{ $error }}</p>@endif
</div>