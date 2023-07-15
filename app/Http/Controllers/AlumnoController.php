<?php

namespace App\Http\Controllers;
use App\Http\Requests\AlumnoSaveRequest;
use App\Http\Requests\AlumnoUpdateRequest;
use App\Http\Resources\AlumnoResource;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Alumno::where('estado', 'ACTIVE')
        // ->with('getEscuelas')
        ->get();
        return AlumnoResource::collection( $result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlumnoSaveRequest $request)
    {
        $category = Alumno::create($request->all());

        return new AlumnoResource($category);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $Alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $Alumno)
    {
        return new AlumnoResource($Alumno);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $Alumno
     * @return \Illuminate\Http\Response
     */
    public function update(AlumnoUpdateRequest $request, Alumno $Alumno)
    {
        $Alumno->update($request->all());

        return new AlumnoResource($Alumno);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $Alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $Alumno)
    {
        // $category->delete($category);

        if($Alumno) 
        $Alumno->update(['estado' => 'DELETE']);

        return response();
    }
}
