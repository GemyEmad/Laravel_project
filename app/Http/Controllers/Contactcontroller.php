<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Contact;


class Contactcontroller extends Controller
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
        try{
        $validations = $request ->validate
        ([
        'name'=> ['required','max:50'],
        'email' => ['required','email', 'max:100'],
        'phone' => ['nullable ','numeric', 'digits:11'],
        'message' => ['required']
        ],
        [
        'name.required' => "please Enter Full Name",
        'name.max' => "maximum name lenght 50 characters",
        'email.required' => "please Enter your Email",
        'email.max' => "maximum email lenght 100 characters",
        'email.email' => "please Enter Valid Email",
        'phone.numeric' => " please Enter Valid phone",
        'phone.digits' => "maximum phone lenght 11 number",
        'message.required' => "please Enter your message"
        ]);

        Contact::Create
        ([
            'name' => $request->name,
            'email'=> $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'stsus' => 0
        ]);

        return redirect()->route('front.home');

        }catch(\Exception $ex){

        session()->flash('error', 'Something went Wrong, please try againl');
        return redirect()->back()->withErrors(['error' => $ex->getMessage()]);

        }

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