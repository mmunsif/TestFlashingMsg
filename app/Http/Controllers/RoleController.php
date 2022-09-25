<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
 

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // session()->flash('success_message', 'Updated successfully!');
        // session()->reflash();
        // return redirect()->route('roles.ym', [$year, $month]);
      
        return view(
            'roles.index',
            [
                'roles' => Role::paginate(10),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // session()->flash('success_message', 'Updated successfully! Redirect');
        // session()->reflash();

        // dd($request);

        // $request->session()->now('success_message', 'Task was successful!');
        session()->flash('success_message', 'Create redirect');
        return redirect('/roles');
        // return redirect('/roles')->with('success_message', 'Updated successfully Redirect!');
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        session()->flash('success_message', 'Controller Show!!');
        // return redirect('/roles');
        return redirect('/')->with('success_message2', 'Updated successfully Redirect!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show2(Role $role)
    {
        session()->flash('success_message', 'Controller Show!!');
        return view(
            'roles.index',
            [
                'roles' => Role::paginate(10),
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        Route::post('/user/profile', function () {
            // Update the user's profile...
         
            return redirect('/dashboard')->with('status', 'Profile updated!');
        });
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoleRequest  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        session()->flash('success_message', 'Controller Update!');
        // session()->reflash();
        return redirect()->route('calendar.ym', [$year, $month]);
        
        // return redirect()->route('calendar.ym', [$year, $month])->with('success_message', 'Updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        Route::get('/', fn () =>  redirect(route('flash'))->with('zaiman', 'was here'))->name('index');
        Route::get('/flash', fn () =>  session()->all())->name('flash');
    }
}
