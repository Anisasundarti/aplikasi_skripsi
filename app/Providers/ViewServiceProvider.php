<?php

namespace App\Providers;
use App\Models\Kecamatan;
use App\Models\Tahun;
use App\Models\Kelurahan;
use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['kelurahans.fields'], function ($view) {
            $kecamatanItems = Kecamatan::pluck('kecamatan','id')->toArray();
            $view->with('kecamatanItems', $kecamatanItems);
        });

         View::composer(['lokasi_kejahatans.fields'], function ($view) {
            $kelurahanItems = Kelurahan::pluck('kelurahan','id')->toArray();
             $tahunItems = Tahun::pluck('tahun_kejadian','id')->toArray();
            $view->with('kelurahanItems', $kelurahanItems)->with('tahunItems', $tahunItems);
        });

         
        //
    }
}