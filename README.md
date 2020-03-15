# Laravel 7+ Tailwind UI Blade Component Library

## Installation
```shell script
composer require gros/tailwind-ui-components
```
@todo - Add repository information when I have the satis installation ready

## Available Components

```blade
<x-button color="(optional)Tailwind Color"><img src="icon or whatever" alt=""> Button Text</x-button>
```

### Adding New Components

I have demonstrated a very simple blade component at `src/Components/ExampleComponent.php` that uses `resources/views/components/example_component.blade.php`. The component is used in `resources/views/example.blade.php`.

Create New Component Classes: `src/Components/{MyNewComponentName}.php` 
 
Create New Component Templates: `resources/views/components/{my_new_component_name}.blade.php`

Test Test Test: Write lots of tests because Mojito makes it really easy to write tests that take virtually no time to run. Nothing should be left untested. There's just no excuse in this package.
