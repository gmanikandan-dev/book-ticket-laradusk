<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AuthTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            //We'll test the register feature here
            $browser->visit('/')
                    ->clickLink('Register')
                    ->value('#name', 'Samson') 
                    ->value('#email', 'samson@test.com')
                    ->value('#password', '00000000')
                    ->value('#password_confirmation', '00000000')
                    ->click('button[type="submit"]') ;

            //We'll test the login feature here
                    // ->press('Samson');
                    // if ($browser->seeLink('Log Out')) {
                    //     $browser->clickLink('Log Out')

                    //     ->clickLink('Login')
                    //     ->value('#email', 'samson@test.com')
                    //     ->value('#password', '00000000')
                    //     ->click('button[type="submit"]');
                    // }
        });
    }
}
