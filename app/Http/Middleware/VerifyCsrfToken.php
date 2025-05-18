<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * URIs yang tidak perlu validasi CSRF.
     *
     * Ini penting agar endpoint API tidak error 419 saat diuji di Postman.
     */
    protected $except = [
        'api/*', // ✅ Kecualikan semua route yang diawali dengan /api/
    ];
}