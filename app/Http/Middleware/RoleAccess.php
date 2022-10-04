<?php

namespace App\Http\Middleware;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Closure;
use Illuminate\Http\Request;

class RoleAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $userRole = auth()->user()->role;
        $currentRoute = Route::current()->uri;
        if(in_array($currentRoute, $this->WhichRoleCanAccessWhichPages()[$userRole])){
            return $next($request);
        } else {
           return redirect('/');
        }
    }

    private function WhichRoleCanAccessWhichPages(){
        return [
            'Tamu' => [
                '/',
                'ruangan',
                'services',
                'profile',
                'pesanKamar/{id}',
                'pesanKamarForm/{id}',
                'buktiPemesanan',

            ],
            'Resepsionis' => [
                '/',
                'ruangan',
                'services',
                'profile',
                'ubahData',
                'search',
                'searchDate',
                'repsepsionis'

            ],
            'Admin' => [
                '/',
                'ruangan',
                'ubahData',
                'addKamar',
                'tambahkamar',
                'deleteThis/{id}',
                'tambahService',    
                'addService',
                'services',
                'ubahServiceForm/{id}',
                'ubahService/{id}',
                'ubahRuanganForm/{id}',
                'ubahRuangan/{id}',
                'repsepsionis',
                'searchDate',
              
            ]
        ];
    }
}
        




 