<?php

namespace Hexagono\Menu;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;


class MenuServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadViewsFrom(__DIR__."/views", "menu");
        $this->loadViewComponentsAs("menu", [
            Blade::component('menu::components.main-menu', 'main-menu'),
        ]);
        $this->publishes([
            __DIR__."/css/menu-main.scss" => resource_path('sass/menu.scss'),
            __DIR__."/js/menu-main.js" => public_path('js/menu.js'),
            __DIR__."/views/components/main-menu.blade.php" => resource_path('views/components/menu.blade.php')
        ]);
    }
    public function register()
    {

    }
}
