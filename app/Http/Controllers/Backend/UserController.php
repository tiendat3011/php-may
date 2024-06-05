<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\User;

use App\Services\Interfaces\UserServiceInterface as UserService ;

use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceRepository;

use App\Http\Requests\StoreUserRequest;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    protected $provinceRepository;

    public function __construct(
        UserService  $userService,
        ProvinceRepository $provinceRepository,
    )
    {
        $this -> userService = $userService;

        $this -> provinceRepository = $provinceRepository;
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
        $provinces = $this -> provinceRepository -> all();
        $config = $this->config();
        $config['seo'] = config('app.user');
        $template = 'backend.user.create';
        return view('backend.dashboard.layout',compact('template','config','provinces'));
    }

    public function config()
    {
        return [
        ];
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        if($this -> userService ->create($request)){
            return \redirect()->route('user.index')->with('success', 'Create User successfully');

        }
        return \redirect()->route('user.index')->with('error', 'Create User failed');

        // return redirect()->route('user.index');
    }
}
