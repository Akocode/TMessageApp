<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsersDirectory;
use Twilio\Rest\Client;
use Carbon\Carbon;

class UserDirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validateData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'date' => 'date|nullable',
            'time' => 'nullable',
            'message' => 'required|max:160'
        ]);

        $user_directory = new UsersDirectory();
        $user_directory->name = $validateData['name'];
        $user_directory->phone = $validateData['phone'];
        $user_directory->message = $validateData['message'];
        $user_directory->timezonestamp = Carbon::parse("{$validateData['date']} {$validateData['time']}");
        $user_directory->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
