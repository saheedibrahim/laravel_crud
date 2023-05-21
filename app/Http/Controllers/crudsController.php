<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class crudsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cruds = Crud::all();
        return view('index', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'qualification'=>'required'
        ]);

        $crud = new Crud();
        $crud->first_name = $request->get('first_name');
        $crud->last_name = $request->get('last_name');
        $crud->gender = $request->get('gender');
        $crud->qualification = $request->get('qualification');
        $crud->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $crud = Crud::find($id);
        return view('edit', compact('crud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'qualification'=>'required'
        ]);

        $crud = Crud::find($id);
        $crud->first_name = $request->get('first_name');
        $crud->last_name = $request->get('last_name');
        $crud->gender = $request->get('gender');
        $crud->qualification = $request->get('qualification');
        $crud->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Crud::destroy($id);
        $crud = Crud::find($id);
        $crud->delete();
    }
}
