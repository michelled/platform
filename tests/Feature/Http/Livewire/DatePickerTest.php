<?php

use App\Http\Livewire\DatePicker;
use function Pest\Livewire\livewire;

test('empty date picker can be rendered', function () {
    livewire(DatePicker::class, ['name' => 'date'])
        ->assertSee('name="date" id="date" type="hidden" value="--"', false);
});

test('filled date picker can be rendered', function () {
    livewire(DatePicker::class, ['name' => 'date', 'value' => '2022-08-12'])
        ->assertSee('name="date" id="date" type="hidden" value="2022-08-12"', false);
});

test('incorrectly filled date picker can be rendered', function () {
    livewire(DatePicker::class, ['name' => 'date', 'value' => '2022-08-'])
        ->assertSee('name="date" id="date" type="hidden" value="2022-08-"', false);

    livewire(DatePicker::class, ['name' => 'date', 'value' => '2022-08-01'])
        ->set('year', '0')
        ->assertSee('name="date" id="date" type="hidden" value="0000-08-01"', false);

    livewire(DatePicker::class, ['name' => 'date', 'value' => '2022-08-01'])
        ->set('year', '')
        ->assertSee('name="date" id="date" type="hidden" value="-08-1"', false);

    livewire(DatePicker::class, ['name' => 'date', 'value' => '2022-08-01'])
        ->set('day', '0')
        ->assertSee('name="date" id="date" type="hidden" value="2022-08-0"', false);

    livewire(DatePicker::class, ['name' => 'date', 'value' => '2022-08-01'])
        ->set('day', '')
        ->assertSee('name="date" id="date" type="hidden" value="2022-08-"', false);
});
