<?php

namespace App\Http\Controllers;
use App\Models\Mriver;
use Illuminate\Http\Request;

class MriverController extends Controller
{
    public function index(){
        $mriver = Mriver::all();
        return response()->json($mriver);
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
        $mriver = Mriver::create([
            'userName'=>$request->userName,
            'email'=>$request->email,
            'cin'=>$request->cin,
            'password'=>$request->password,
            'address'=>$request->address,
            'city'=>$request->city,
            'postalCode'=>$request->postalCode,
        ]);

        //return Response
        return response()->json($mriver);
    }
    public function show($id){
        
        //return Response
        return Mriver::find($id);

    }
}
