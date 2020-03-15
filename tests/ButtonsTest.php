<?php

namespace Tests;

use NunoMaduro\LaravelMojito\InteractsWithViews;

class ButtonsTest extends TestCase
{
    use InteractsWithViews;
    /** @test */
    public function can_create_a_button_a_component()
    {
        $this->assertView('bcl::button', ['test' => 'defaults'])->contains('</button');
        $this->assertView('bcl::button', ['test' => 'a'])->contains('</a');
        $this->assertView('bcl::button', ['test' => 'hello world'])->contains('Hello World');
        $this->assertView('bcl::button', ['test' => 'indigo'])->contains('bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700');
        $this->assertView('bcl::button', ['test' => 'xs'])->contains('px-2.5');
        $this->assertView('bcl::button', ['test' => 's'])->contains('px-3');
        $this->assertView('bcl::button', ['test' => 'm'])->contains('px-4');
        $this->assertView('bcl::button', ['test' => 'l'])->contains('px-4');
        $this->assertView('bcl::button', ['test' => 'xl'])->contains('px-6');

    }
}