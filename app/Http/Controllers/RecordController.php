<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;




class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $token = PersonalAccessToken::findToken($request->header("token"));
        $user = $token->tokenable;
        dd( $user );
        $record = Record::create([
            'batch_name' => $request->batch_name,
            'order_status' => $request->order_status,
            'techsupervisor_id'=> $request->techsupervisor_id,
            'cmap_label'=> $request->cmap_label,
            'office_number'=> $request->office_number
        ]);
        return response()->json([
            'message' => 'Record Created Successfully',
            'data' =>'$record'
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id){

        return Record::all();
    }



    public function showanalysis($id){


    }


}
