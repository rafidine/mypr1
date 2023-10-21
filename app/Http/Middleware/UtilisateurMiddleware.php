<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UtilisateurMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Vérifier si l'utilisateur est authentifié
        if (Auth::check()) {
            return $next($request); // Autoriser l'accès pour tous les utilisateurs authentifiés.
        }

        // Rediriger vers la page de connexion si l'utilisateur n'est pas authentifié.
        return redirect()->route('login');
    }
}
