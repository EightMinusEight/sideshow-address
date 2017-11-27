<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $addresses = Address::paginate(10);

	    return view('addresses.index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    return view('addresses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $this->validate(request(), [
		    'address1' => 'required',
		    'city' => 'required',
		    'state' => 'required',
		    'zip' => 'required'
	    ]);

	    Address::create([
		    'address1' => $request->address1,
		    'address2' => $request->address2,
		    'city' => $request->city,
		    'state' => strtoupper($request->state),
		    'zip' => $request->zip
	    ]);

	    // Redirect to the projects page
	    return redirect('/addresses');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param Address $address
	 * @return \Illuminate\Http\Response
	 */
    public function show(Address $address)
    {
	    return view('addresses.show', compact(['address']));
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param Address $address
	 * @return \Illuminate\Http\Response
	 */
    public function edit(Address $address)
    {
	    return view('addresses.edit',compact(['address']));
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
	    $address = Address::findOrFail($id);

	    $this->validate(request(), [
		    'address1' => 'required',
		    'city' => 'required',
		    'state' => 'required',
		    'zip' => 'required'
	    ]);

	    $address->address1 = $request->input("address1");
	    $address->address2 = $request->input("address2");
	    $address->city = $request->input("city");
	    $address->state = $request->input("state");
	    $address->zip = $request->input("zip");

	    $address->save();

	    return redirect()->route('addresses.index')->with('message', 'Item updated successfully.');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 * @throws \Exception
	 */
    public function destroy($id)
    {
	    $address = Address::findOrFail($id);
	    $address->delete();

	    return redirect()->route('addresses.index')->with('message', 'Item deleted successfully.');
    }
}
