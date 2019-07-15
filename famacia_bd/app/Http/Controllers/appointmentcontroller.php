<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\appointment;
use App\Doctor;
use App\Doctor_categorie;
use App\User;
use App\Http\Requests\AppointmentRequest;
use Carbon\Carbon;
class appointmentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $cita=appointment::all();
      $category_doctor=DB::table('doctor_categories')->get();
      $user=DB::table('users')->get();
      $doctor=Doctor::all();
   return view('appointment.AppointmentMenu',['citas' => $cita,'users'=>$user,'doctors'=>$doctor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $categories=Doctor_categorie::all();
      $doctors=Doctor::all();
     return view('appointment.Register',['categories'=>$categories,'doctores' => $doctors]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $appointment=new appointment();
$users=User::all();
$doctors=Doctor::all();
foreach ($doctors as $doc) {
foreach ($users as $user) {
  if(($user->cedula==$request->input('cedula')) and ($doc->license==$request->input('license'))){
 $appointment->users_id=$user->id;
 $appointment->doctor_id=$doc->id;
 $appointment->date_query=$request->input('date');
 $appointment->save();
return 'save';
  }
}
    }
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
    public function destroy(appointment $cita)
    {

        //  $cita->delete();
     //return redirect('/appointment');
return $cita;
    }
}
