<?php

namespace CityCRM\Http\Controllers;

use CityCRM\MenuOptions;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $menu_options;

    public function __construct()
    {
        $this->menu_options = new MenuOptions();
    }

    public function menu_options()
    {
        return $this->menu_options;
    }
}
