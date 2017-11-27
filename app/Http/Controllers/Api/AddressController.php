<?php

namespace App\Http\Controllers\Api;

use App\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Address[]|\Illuminate\Database\Eloquent\Collection
	 */
    public function index()
    {
	    return Address::all();
    }


	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return void
	 */
    public function store(Request $request)
    {
	    Address::create($request->all());
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
	 */
    public function show($id)
    {
	    return Address::findOrFail($id);
    }


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return void
	 */
    public function update(Request $request, $id)
    {
	    $address = Address::findOrFail($id);
	    $address->update($request->all());
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return void
	 * @throws \Exception
	 */
    public function destroy($id)
    {
	    $address = Address::findOrFail($id);
	    $address->delete();
    }
}
