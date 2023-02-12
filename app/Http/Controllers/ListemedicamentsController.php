<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Listemedicaments;
use App\Models\Ordonnances;
use App\Models\Medicaments;

class ListemedicamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $listemeds=Listemedicaments::all();
        return view('listemedicaments',compact('listemeds'))->with('listemeds', Listemedicaments::paginate(3));;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      return view('listemedicaments.create');


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
            
            
            'nomclient' => 'required',
            'image'=> 'required',
            'created_at' => 'required',

           
            
        ]);
        $input =$request->except(['_token', '_method']);

        if($image=$request->file('image'))
         {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } 
        $listemeds=Listemedicaments::create($input);

        return redirect('/listemedicaments')->with('success','Liste enregistrée avec succés');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        $listemeds=Listemedicaments::findOrFail($id);

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
        $listemeds=Listemedicaments::findOrFail($id);
        return view('listemedicaments.edit',compact('listemeds'));

 
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
        $request->validate([
            
            'nomclient' => 'required',
            'image'=> 'required',
            
            
           
           
            'created_at' => 'required',

           
            
        ]);

        $input =$request->except(['_token', '_method']);

        if($image=$request->file('image'))
         {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } 
        else{
            unset($input['image']);
        }
        
        $listemeds=Listemedicaments::whereId($id)->update( $input);
        return redirect('/listemedicaments')->with('success','Liste mise a jour avec succés');

 
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
        $listemeds=Listemedicaments::findOrFail($id);
        $listemeds->delete();
        return redirect('/listemedicaments')->with('success','Liste supprimée avec succés');


    }
}
