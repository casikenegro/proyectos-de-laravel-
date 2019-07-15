<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Doctor;
use App\Http\Requests\CrearDoctorRequest;

class DoctorController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $doctor=Doctor::all();
      $category_doctor=DB::table('doctor_categories')->get();
      return view('Doctor.DoctorMenu',['categories'=>$category_doctor,'doctores' => $doctor]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $category_doctor=DB::table('doctor_categories')->get();
        return view('Doctor.RegisterDoctor',['categorias'=>$category_doctor]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearDoctorRequest $request)
    {
      $Doctor=new Doctor();
      $Doctor->name=$request->input('nombre');
      $Doctor->surname=$request->input('apellido');
      $Doctor->cedula=$request->input('cedula');
      $Doctor->license=$request->input('Licencia');
      $Doctor->doctor_category_id=$request->input('categoria_id');
      $Doctor->Phone=$request->input('telefono');
      $Doctor->save();
      return redirect('/Doctor');
    } /**
          */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $Doctor)
    {
      $category_doctor=DB::table('doctor_categories')->get();
        return view('Doctor.edit',['categorias'=>$category_doctor,'doctor'=>$Doctor]);


    }

    /**
     * Update the specified resource in storage.
     *,
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CrearDoctorRequest $request,Doctor $Doctor)
    {
      $Doctor->fill($request->all());
      $Doctor->save();
    return redirect('/Doctor');
    //  return redirect('/Doctor/{$Doctor->id}');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $Doctor)
    {

          $Doctor->delete();
     return redirect('/Doctor');
    }
}
