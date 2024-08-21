<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ManitodexTest extends DuskTestCase
{
    
    public function testHomePageLoad(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('ManitoDex');
        });
    }

    public function testUpdatePokemon(): void
    {
        $this->browse(function (Browser $browser) 
        {
            $user = User::find(1);
            $browser->loginAs($user)
                ->visit('/admin/pokemon')
                ->click('#edit1')
                ->type('#name', 'test')
                ->click('#sendEdit')
                ->waitForText('test')
                ->assertSee('test')
                ->assertDontSee('MissingNo.');
        });
    }

    public function testShowPokemon(): void
    {
        $this->browse(function (Browser $browser)
        {
            $browser->visit('/pokemon/2')
                ->assertSee('Ricochico')
                ->assertSee('Statistiques');
        });
    }
}
