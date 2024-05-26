<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\User;

use App\Services\Interfaces\UserServiceInterface as UserService ;


use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(
        UserService  $userService
    )
    {
        $this -> userService = $userService;
    } 

    public function index()
    {
        $users = $this -> userService -> paginate();
        $config = $this->config();
        $config['seo'] = config('app.user');
        $template = 'backend.user.index';
        return view('backend.dashboard.layout',compact(
            'template',
            'config',
            'users'));
    }

    public function create()
    {
        $config = $this->config();
        $config['seo'] = config('app.user');
        $template = 'backend.user.create';
        return view('backend.dashboard.layout',compact('template','config'));
    }

    public function config()
    {
        return [
        ];
    }
}
