<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Empleado;

use Illuminate\Http\Request;

class EmpleadoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$empleados = Empleado::paginate(20);

		return view('empleados.index')->with('empleados',$empleados);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('empleados.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		//

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $rut
	 * @return Response
	 */
	public function show($rut)
	{
		//
		$empleado = Empleado::find($rut);
		return view('empleados.show')->with('empleado',$empleado);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
