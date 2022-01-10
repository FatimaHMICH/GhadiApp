<?php

namespace App\Http\Controllers;

use App\Models\AnnounceClient;
use Illuminate\Http\Request;

class AnnounceClientController extends Controller
{
    public function index(){
        $announcesClients = AnnounceClient::all();
        return response()->json($announcesClients);
    }

    public function store(Request $request){
        
        //Validation
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'starting_address'=>'required',
            'arrival_address'=>'required',
            'contact_phone'=>'required',
            'luggage_type'=>'required',
            'image'=>'required',
        ]);

        //Save to DB
        $announcesClients = AnnounceClient::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'starting_address'=>$request->starting_address,
            'arrival_address'=>$request->arrival_address,
            'contact_phone'=>$request->contact_phone,
            'luggage_type'=>$request->luggage_type,
            'notes'=>$request->notes,
            'image'=>$request->image
        ]);

        //return Response
        return response()->json($announcesClients);

    }
}
