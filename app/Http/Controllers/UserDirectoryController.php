<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

        $user_directory = new UsersDirectory;
        $user_directory->name = $validateData['name'];
        $user_directory->phone = $validateData['phone'];
        // $user_directory->phone = explode(',' , $request->input('phone'));
        $user_directory->message = $validateData['message'];
        $user_directory->timezonestamp = Carbon::parse("{$validateData['date']} {$validateData['time']}");
        $user_directory->save();

        return response($user_directory->jsonSerialize(), Response::HTTP_OK);
        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pending(Request $request)
    {
        $users = UsersDirectory::orderBy('id', 'desc')->get();
        return response()->json($users);
    }

    // public function sent()
    // {
    //     $pipe_dream = 
    // }


}
