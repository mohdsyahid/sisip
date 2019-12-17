<?php

namespace App\Http\Controllers;

use App\Ipadress;
use Illuminate\Http\Request;

class IpadressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alamatip = Ipadress::latest()->paginate(5);
  
        return view('ipadressx.index',compact('ipadress'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ipadressx.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'ipadress' => 'required',
            'email' => 'required',
            'passemail' => 'required',
        ]);
  
        Product::create($request->all());
   
        return redirect()->route('ipadress.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ipadress  $ipadress
     * @return \Illuminate\Http\Response
     */
    public function show(Ipadress $ipadress)
    {
        //
        return view('ipadress.show',compact('ipadress'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ipadress  $ipadress
     * @return \Illuminate\Http\Response
     */
    public function edit(Ipadress $ipadress)
    {
        //
        return view('ipadress.edit',compact('ipadress'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ipadress  $ipadress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ipadress $ipadress)
    {
        //
        $request->validate([
            'name' => 'required',
            'ipadress' => 'required',
            'email' => 'required',
            'passemail' => 'required',
        ]);
  
        $product->update($request->all());
  
        return redirect()->route('ipadress.index')
                        ->with('success','Ip Adress updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ipadress  $ipadress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ipadress $ipadress)
    {
        //
        $ipadress->delete();
  
        return redirect()->route('ipadress.index')
                        ->with('success','Data deleted successfully');
    }
}
