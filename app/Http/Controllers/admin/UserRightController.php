<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\UserRight;
use App\Admin;
use Illuminate\Http\Request;

class UserRightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $admins = Admin::all()->where('deleted',0);
        return view('admin.user-rights.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = Admin::find(2);

        $admin->userrights()->sync($request->input('modules', []));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserRight  $userRight
     * @return \Illuminate\Http\Response
     */
    public function show(UserRight $userRight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserRight  $userRight
     * @return \Illuminate\Http\Response
     */
    public function edit(UserRight $userRight)
    {
        return view('admin.user-rights.edit',compact('userRight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserRight  $userRight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserRight $userRight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserRight  $userRight
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserRight $userRight)
    {
        //
    }

}
