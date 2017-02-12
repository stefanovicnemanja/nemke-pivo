<?php

namespace Nemke\Pivo\App\Providers;	// Ovako zato sto namespace u json podrazumeva src 

use Illuminate\Support\ServiceProvider;	// Zato sto su u glavnom composer.json ukljucene(autoloadovane) sve klase laravela, mozemo ovde da ih pozovemo

class PivoServiceProvider extends ServiceProvider  
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/routes.php');  //ucitava rute iz foldera routes, fajl routes.php

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'pivo'); // metod loadviews from prihvata dva argumenta: putanju i naziv paketa 
	}																	// koji se dodeljuje u routes npr 'index::pivo'
}


// kORISTI ZA POVEZIVANJE NASEG PAKETA SA LARAVELOM