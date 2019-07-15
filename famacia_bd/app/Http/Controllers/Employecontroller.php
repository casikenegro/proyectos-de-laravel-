<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Employe;
use App\Http\Requests\Employerequest;
class Employecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Employe=Employe::all();
        $category_employe=DB::table('employe_categories')->get();
        return view('Employe.EmployeMenu',['categories'=>$category_employe,'employes' => $Employe]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $category_employe=DB::table('employe_categories')->get();
      return view('Employe.Register_Employe',['categorias'=>$category_employe]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Employerequest $request)
    {
      $Employe=new Employe();
      $Employe->name=$request->input('nombre');
      $Employe->surname=$request->input('apellido');
      $Employe->cedula=$request->input('cedula');
      $Employe->employe_category_id=$request->input('categoria_id');
      $Employe->Phone=$request->input('telefono');
      $Employe->save();
      return redirect('/Employe');
    }

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
    public function edit(Employe $Employe)
    {
      $category_employe=DB::table('employe_categories')->get();
        return view('Employe.edit',['categorias'=>$category_employe,'Employe'=>$Employe]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $Employe)
    {
    $Employe->fill($request->all());
      $Employe->save();
    return redirect('/Employe');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $Employe)
    {
      
    }
}
