<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('Welcome');
    }

    public function testingPageAbout()
    {
        $response = $this->get('/about');

        $response->assertDontSeeText('Welcome');
        $response->assertStatus(200);
        $response->assertSeeText('О нашем проекте!');
    }

    public function testingPageNews()
    {
        $response = $this->get('/news');

        $response->assertStatus(200);
        $response->assertDontSeeText('О нашем проекте!');
        $response->assertSeeText('Новости');
    }

    public function testingPageAdmin()
    {
        $response = $this->get('/admin');

        $response->assertStatus(200);
        $response->assertDontSeeText('О нашем проекте!');
        $response->assertSeeText('Добавить новость');
        $response->assertSeeText('Скачать картинку');
        $response->assertSeeText('Скачать новости в json');
    }

    public function testingPageAuth()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertDontSeeText('О нашем проекте!');
        $response->assertSeeText('Login');
        $response->assertSeeText('Зарегистрироваться');
        $response->assertSeeText('Войти');
    }
}
