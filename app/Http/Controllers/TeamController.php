<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
{
    $this->middleware('auth');
}
    public function index()
    {
        $data = Team::all();
        return view('dashboard.team.team', compact ('data'));
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
        $input = $request->validate([
            'name' => 'required',
            'jabatan' => 'required',
            'photo' => 'required|max:2048',
        ]);
        if($request->hasFile('photo')){
            $destination_path = 'public/images/team';
            $image = $request->file('photo');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('photo')->storeAs($destination_path, $image_name);
            
            $input['photo'] = $image_name;
        }
        
        Team::create($input);
        session()->flash('success', 'Berhasil Menambah Team');
        
        return redirect('/team');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Team::find($id);
        return view('dashboard.team.edit', compact ('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->validate([
            'name' => 'required',
            'jabatan' => 'required',
            'photo' => 'required|max:2048',
        ]);
        if($request->hasFile('photo')){
            $destination_path = 'public/images/team';
            $image = $request->file('photo');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('photo')->storeAs($destination_path, $image_name);
            
            $input['photo'] = $image_name;
        }
        
        Team::create($input);
        session()->flash('success', 'Berhasil Mengedit Team');
        
        return redirect('/team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Team::find($id);
        $data->delete();
        return back();
    }
}
