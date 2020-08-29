<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Welcome!!!');
        });

        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/create')
                ->type('title', '1')
                ->press('Добавить')
                ->assertSee('Количество символов в поле Заголовок новости должно быть не меньше 3.');
        });

        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/categories/create')
                ->type('name_category', '')
                ->press('Добавить')
                ->assertSee('Поле Название категории обязательно для заполнения.');
        });

        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/categories/create')
                ->type('name_category', 'wo')
                ->press('Добавить')
                ->assertSee('Количество символов в поле Название категории должно быть не меньше 3.');
        });

        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/categories/create')
                ->type('name_category', 'world')
                ->press('Добавить')
                ->assertSee('Поле Псевдоним категории обязательно для заполнения.');
        });

        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/categories/create')
                ->type('name_category', 'world')
                ->type('slug_category', 'wo')
                ->press('Добавить')
                ->assertSee('Количество символов в поле Псевдоним категории должно быть не меньше 3.');
        });

    }
}
