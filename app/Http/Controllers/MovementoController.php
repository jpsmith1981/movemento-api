<?php namespace App\Http\Controllers;

use App\Movemento;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MovementoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

        return response()->json( Movemento::with('likes','user')->get(), 200);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

        // Todo:: Use Built in Validation Methods.
		if($request->has('note') && $request->has('user_id') && $request->has('latitude') && $request->has('longitude')){

            $movemento = new Movemento();
            $movemento->note = $request->input('note');
            $movemento->user_id = $request->input('user_id');
            $movemento->latitude = $request->input('latitude');
            $movemento->longitude = $request->input('longitude');
            $movemento->save();
            return response()->json($movemento,200);
        }
        else{
            die('missing data');
        }

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
        return response()->json( Movemento::with('likes','user')->find($id), 200);
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
        Movemento::destroy($id);

	}

}
