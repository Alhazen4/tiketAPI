<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'stripe/*',
        'http://localhost:8000/rute',
        'http://localhost:8000/rute/*',
        'http://localhost:8000/kelasbis',
        'http://localhost:8000/kelasbis/*',
        'http://localhost:8000/armadabis',
        'http://localhost:8000/armadabis/*',
        'http://localhost:8000/pesanan',
        'http://localhost:8000/pesanan/*'
    ];
}
