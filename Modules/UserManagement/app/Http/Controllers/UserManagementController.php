<?php

namespace Modules\UserManagement\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\UserManagement\Services\UserServices;
use Modules\UserManagement\app\Http\Requests\UserRequest;

class UserManagementController extends Controller
{


    protected $userService;

    public function __construct(UserServices $userService)
    {
        $this->userService = $userService;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return view('usermanagement::index');
    }

    /**
     * load the view page for register.
     */
    public function register()
    {
        return view('usermanagement::register');
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create(UserRequest $request)
    {
        $this->userService->createUser($request->validated());
        return redirect()->route('users.index')->with('success', 'User created successfully!');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('usermanagement::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('usermanagement::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
