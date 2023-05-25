<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        $user = Auth::user();
        
        if ($user && $this->checkRole($user, $role)) {
            return $next($request);
        }
        
        return redirect('/login'); // or show an error message
    }
     
    private function checkRole($user, $role)
    {
        switch ($role) {
            case 'mahasiswa':
                return $user instanceof \App\Models\Mahasiswa;
            case 'admin':
                return $user instanceof \App\Models\Admin;
            case 'dosen':
                return $user instanceof \App\Models\Dosen;
            default:
                return false;
        }
    }
}
