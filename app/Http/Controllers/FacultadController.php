<?php

namespace App\Http\Controllers;
use App\Http\Requests\FacultadSaveRequest;
use App\Http\Requests\FacultadUpdateRequest;
use App\Http\Resources\FacultadResource;
use App\Models\Facultad;
use Illuminate\Http\Request;

class FacultadController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Facultad::where('estado', 'ACTIVE')
        // ->with('getEscuelas')
        ->get();
        return FacultadResource::collection( $result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FacultadSaveRequest $request)
    {
        $category = Facultad::create($request->all());

        return new FacultadResource($category);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facultad  $facultad
     * @return \Illuminate\Http\Response
     */
    public function show(Facultad $facultad)
    {
        return new FacultadResource($facultad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facultad  $facultad
     * @return \Illuminate\Http\Response
     */
    public function update(FacultadUpdateRequest $request, Facultad $facultad)
    {
        $facultad->update($request->all());

        return new FacultadResource($facultad);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facultad  $facultad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facultad $facultad)
    {
        // $category->delete($category);

        if($facultad) 
        $facultad->update(['estado' => 'DELETE']);

        return response()->noContent();
    }
}
