<?php


namespace Grosv\TailwindComponents;

use Grosv\TailwindComponents\Components\ButtonComponent;
use Grosv\TailwindComponents\Components\ExampleComponent;
use Grosv\TailwindComponents\Components\InputTextComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;


class TailwindComponentsProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'bcl');

        Blade::component(ExampleComponent::class, 'example-component');
        Blade::component(ButtonComponent::class, 'button');
        Blade::component(InputTextComponent::class, 'input-text');
    }
}