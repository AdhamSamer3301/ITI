<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
<<<<<<< HEAD

=======
          
>>>>>>> 76d92f8a84eb00a4c52731c0f1c05dc299dd1403
           
            return redirect()->route('home');
        }
    }
}
