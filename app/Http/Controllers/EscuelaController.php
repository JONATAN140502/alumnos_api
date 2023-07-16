<?php

namespace App\Http\Controllers;

use App\Models\Escuela;
use App\Http\Requests\EscuelaSaveRequest;
use App\Http\Requests\EscuelaUpdateRequest;
use App\Http\Resources\EscuelaResource;
use Illuminate\Http\Request;

class EscuelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Escuela::where('state', 'ACTIVE')
        // ->with('getEscuelas')
        ->get();
        return EscuelaResource::collection( $result);
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
    public function store(EscuelaSaveRequest $request)
    {
        $escuela = Escuela::create($request->all());

        return new EscuelaResource($escuela);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function show(Escuela $escuela)
    {
        return new EscuelaResource($escuela);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function edit(Escuela $escuela)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function update(EscuelaUpdateRequest $request, Escuela $escuela)
    {
        $escuela->update($request->all());

        return new EscuelaResource($escuela);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escuela $escuela)
    {
        if($escuela) 
        $escuela->update(['state' => 'DELETE']);

        return response()->noContent();
    }
}
