<?php

namespace App\Http\Controllers;

use App\SensorValue;
use App\Http\Resources\SensorValue as SensorValueResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

use Illuminate\Http\Request;

class SensorValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function apiIndex(): AnonymousResourceCollection
    {
        // Get Sensorvalues
        $sensorvalues = SensorValue::all();

        // Return sensorvalues as a resource
        return SensorValueResource::collection($sensorvalues);
    }

    public function index()
    {
        $sensorvalues = SensorValue::all();
        return view('welcome')->with('sensorvalues', $sensorvalues);
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
        $sensorValue = new SensorValue;
        $sensorValue->timestamp = $request->input('timestamp');
        $sensorValue->name = $request->input('name');
        $sensorValue->value = $request->input('value');
        if ($sensorValue->save()) {
        return new SensorValueResource($sensorValue);
        }
        return null;
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
