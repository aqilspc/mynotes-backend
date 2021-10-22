<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'login_user',
        'regsiter_user',
        'get_note',
        'get_note_by_id',
        'delete_note',
        'create_note',
        'update_note',
    ];
}
