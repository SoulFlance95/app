<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Ordonnances;
use  App\Models\Listemedicaments;

class OrdonnancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $ordos= Ordonnances::all();
        return view('ordonnances',compact('ordos'))->with('ordos', Ordonnances::paginate(3));;

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ordonnances.create');

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
        $validatedata= $request->validate([
            'libellé' => 'required',
       
            'created_at' => 'required',
            'prix'=> 'required',
           
            'nommedicament'=> 'required',
            'stock'=> 'required',
           
            
        ]);
    
            $ordos=Ordonnances::create($validatedata);
            return redirect('/ordonnances')->with('success','Ordonnance enregistrée avec succés');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($numordonnance)
    {
        //
        $listemeds=Listemedicaments::findOrFail($numordonnance);

        return view('listemedicaments.show',compact('listemeds'));
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
        $ordos= Ordonnances::findOrFail($id);

        return view('ordonnances.edit',compact('ordos'));
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
        $validatedata= $request->validate([
            'libellé' => 'required|max:255',
            'created_at' => 'required',
            'prix'=> 'required',
        
            'nommedicament'=> 'required',
            'stock'=> 'required',
           
            
        ]);

        $ordos=Ordonnances::whereId($id)->update($validatedata);

        return redirect('/ordonnances')->with('success','Ordonnance mise a jour avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ordos=Ordonnances::findOrFail($id);
   $ordos->delete();

   return redirect('/ordonnances')->with('success','Ordonnance supprimée avec succés');
    }
}
