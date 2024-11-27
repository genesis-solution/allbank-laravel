<?php

namespace App\Exceptions;

use Exception;

class Handler extends Exception
{
    public function render($request, Exception $exception)
    {
        // Render well-known exceptions here

        // Otherwise display internal error message
        if(!env('APP_DEBUG', false)){
            return view('errors.500');
        } else {
            return parent::render($request, $exception);
        }
    }
}
