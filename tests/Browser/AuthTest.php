<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AuthTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test register.
     */
    public function testRegisterLogoutLogin(): void
    {
        $this->browse(function (Browser $browser) {
            //We'll test the register feature here
            $browser->visit('/')
                ->clickLink('Register')
                ->value('#name', 'Admin')
                ->value('#email', 'admin@test.com')
                ->value('#password', 'password')
                ->value('#password_confirmation', 'password')
                ->click('button[type="submit"]')
                ->assertSee('Welcome to your Jetstream application')
                ->press('Admin')
                ->click('@logout')
                ->assertSee('News')
                ->clickLink('Log in')
                ->value('#email', 'admin@test.com')
                ->value('#password', 'password')
                ->click('button[type="submit"]')
                ->assertSee('Welcome to your Jetstream application');
        });
    }
}
