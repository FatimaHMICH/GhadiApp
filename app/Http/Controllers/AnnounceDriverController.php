<?php

namespace App\Http\Controllers;

use App\Models\AnnounceDriver;
use Illuminate\Http\Request;

class AnnounceDriverController extends Controller
{
    public function index(){
        $announcesDrivers = AnnounceDriver::all();
        return response()->json($announcesDrivers);
    }

    public function store(Request $request){
        
        //Validation
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'address'=>'required',
            'contact_phone'=>'required',
            'vehicule_type'=>'required',
            'image'=>'required',
        ]);

        //Save to DB
        $announcesDrivers = AnnounceDriver::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'address'=>$request->address,
            'contact_phone'=>$request->contact_phone,
            'vehicule_type'=>$request->vehicule_type,
            'notes'=>$request->notes,
            'image'=>$request->image
        ]);

        //return Response
        return response()->json($announcesDrivers);

    }
}
