<?php

namespace App\Providers;

use Artisaninweb\SoapWrapper\SoapWrapper;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(SoapWrapper::class, function ($app) {
            $soapWrapper = new SoapWrapper();
            $soapWrapper->add('UserProfileService', function ($service) {
                $service
                    ->wsdl('http://user_soap_api:5109/profile?wsdl')
                    ->trace(true)
                    ->options([
                        'connection_timeout' => 30,
                    ])
                    ->classmap([
                        'Profile' => \App\Models\Profile::class,
                        'Address' => \App\Models\Address::class,
                    ]);
            });
            return $soapWrapper;
        });
    }

    public function boot()
    {
        //
    }
}
