<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $client = Client::all();
        return response()->json($client);
    }

    public function store(Request $request){
        
        //Validation
        $request->validate([
            'userName'=>'required',
            'email'=>'required',
            'cin'=>'required',
            'password'=>'required',
            'address'=>'required',
            'city'=>'required',
            'postalCode'=>'required',
        ]);

        //Save to DB
        $client = Client::create([
            'userName'=>$request->userName,
            'email'=>$request->email,
            'cin'=>$request->cin,
            'password'=>$request->password,
            'address'=>$request->address,
            'city'=>$request->city,
            'postalCode'=>$request->postalCode,
        ]);

        //return Response
        return response()->json($client);
    }
    public function show($id){
        
        //return Response
        return Client::find($id);

    }
}
