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
                'about',
                'fasilitas',
                'rooms',
                'pesanKamar/{id}',
                'pesanKamarForm/{id}',
                'buktiPemesanan',
            ],
            'Resepsionis' => [
                '/',
                'about',
                'fasilitas',
                'rooms',
                'resepsionis',
                'search',
                'searchDate'
            ],
            'Admin' => [
                '/',
                'about',
                'fasilitas',
                'rooms',
                'tambahKamar',
                'tambahKamarForm',
                'deleteThis/{id}',
                'editKamarForm/{id}',
                'editKamar/{id}',
                'fasilitas',
                'tambahFasilitas',
                'tambahFasilitasForm',
                'editFasilitas/{id}',
                'editFasilitasForm/{id}',
                'deleteThisFasilitas/{id}'
            ]
        ];
    }
}
