<?php


namespace Grosv\BladeComponents;

use Grosv\BladeComponents\Components\ButtonComponent;
use Grosv\BladeComponents\Components\ExampleComponent;
use Grosv\BladeComponents\Components\InputTextComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;


class BladeComponentsProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'bcl');

        Blade::component(ExampleComponent::class, 'example-component');
        Blade::component(ButtonComponent::class, 'button');
        Blade::component(InputTextComponent::class, 'input-text');
    }
}