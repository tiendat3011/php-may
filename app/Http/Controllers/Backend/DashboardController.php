<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $config = $this->config();

        $template = 'backend.dashboard.home.index';
        return view('backend.dashboard.layout', 
            compact('template','config'
        ));
    }

    public function config(){
        return [
            'js' => [
            ]
        ];
    }
}
