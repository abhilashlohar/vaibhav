<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Module;
use App\UserRight;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAuth;

class ModuleController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckAuth::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::latest()->where('deleted',0)->paginate(5);

        return view('admin.modules.index',compact('modules'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(Module::rules(), Module::messages());

        Module::create($request->all());

        return redirect()->route('modules.index')
                        ->with('success','Module created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        return view('admin.modules.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        $request->validate(Module::rules($module->id), Module::messages());

        $module->update($request->all());

        return redirect()->route('modules.index')
                        ->with('success','Module updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        if(UserRight::where('module_id',$module->id)->doesntExist())
        {
            $module->deleted = true;
            $module->save();

            return redirect()->route('modules.index')
                            ->with('success','Module deleted successfully');
        }
        return redirect()->route('modules.index')
                            ->with('success','Module not deleted, exist in user rights');
    }
}
