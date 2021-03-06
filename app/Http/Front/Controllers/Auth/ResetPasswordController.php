<?php

namespace App\Http\Front\Controllers\Auth;

use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ResetPasswordController
{
    use ResetsPasswords, ValidatesRequests;

    protected $redirectTo = '/';
}
