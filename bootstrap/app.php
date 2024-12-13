<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        
        $middleware->alias([

           'guru' => \App\Http\Middleware\guru::class,
           'kelas7' => \App\Http\Middleware\kelas7::class,
           'kelas8' => \App\Http\Middleware\kelas8::class,
           'kelas9' => \App\Http\Middleware\kelas9::class,
            
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
