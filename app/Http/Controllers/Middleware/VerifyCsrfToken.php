<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Los URIs que deberían estar excluidos de la verificación CSRF.
     */
    protected $except = [
        '/login',
        '/logout',
    ];
}
