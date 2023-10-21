<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request; // Ajout de l'importation de la classe Request

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     **/ 
    protected function redirectTo($request)
    {
        return $request->expectsJson() ? null : route('login');
    }
} // Ajout d'une accolade pour fermer la classe Authenticate
