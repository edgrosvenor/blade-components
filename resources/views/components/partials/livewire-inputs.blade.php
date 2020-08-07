@if ($attributes->offsetExists('wire:model')) wire:model.debounce.{{ $attributes->get('debounce') ?? '150ms' }}="{{ $attributes->get('wire:model') }}" wire:key="{{ str_replace('.', '_', $attributes->get('wire:model')) }}" @endif
@if ($attributes->offsetExists('wire:model.lazy')) wire:model.lazy="{{ $attributes->get('wire:model.lazy') }}" wire:key="{{ str_replace('.', '_', $attributes->get('wire:model.lazy')) }}" @endif
@if ($attributes->offsetExists('wire:click')) wire:click="{{ $attributes->get('wire:click') }}" @endif
