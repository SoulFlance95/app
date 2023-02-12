<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Personnel;


class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $perso=Personnel::all();
        return view('personnel',compact('perso'))->with('perso', Personnel::paginate(3));;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
  return view('personnel.create');

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
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required',
            'fonction' => 'required',
            'salaire' => 'required',
            'image' => 'required',

           
           
           
            
        ]);

        
        $input = $request->all();
  
        if($image=$request->file('image'))
         {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } 
       
    
            $perso=Personnel::create($input);
            return redirect('/personnel')->with('success','Nouvel employé enregistré avec succés');

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
        $perso= Personnel::findOrFail($id);

        return view('personnel.edit',compact('perso'));
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
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required',
            'fonction' => 'required',
            'salaire' => 'required',
            'photo' => 'required',
           
           
            
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
        
        $perso=Personnel::whereId($id)->update($input);

        return redirect('/personnel')->with('success','Employé mise a jour avec succés');
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
        $perso=Personnel::findOrFail($id);
        $perso->delete();
     
        return redirect('/personnel')->with('success','Employé supprimée avec succés');
    }
}
