<?php

namespace App\Http\Controllers;

Use Request;

use App\Models\Medicaments;


class MedicamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        $key = trim($request->get('q'));

        $medics = Medicaments::query()
            ->where('nommedicament', 'like', "%{$key}%")
            ->orWhere('dosage', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->get();

      

        

        return view('search', [
            'key' => $key,
            'medics' => $medics,
            
        ]);
    }

    
    public function index()
    {
        //
        if($search = Request::get('q')) {

            $medics = Medicaments::search($search)->paginate(3);
        
        } else {
    
            $medics = Medicaments::paginate(3);
    
        }
    
        return view('medicaments')->with('medics', $medics);


      


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('create');

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
        'nommedicament' => 'required',
        'nomlaboratoire' => 'required',
        'description' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required',
        'dosage' => 'required',
        'stocks' => 'required',
        'prix' => 'required',
        'image'=>'required',
        
    ]);
    $input = $request->all();
  
   
  
    if($image=$request->file('image'))
     {
        $destinationPath = 'images/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

        $image->move($destinationPath, $profileImage);
        $input['image'] = "$profileImage";
    } 
   
        $medics=Medicaments::create($input);
        return redirect('/medicaments')->with('success','Médicament enregistré avec succés');
         

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
        $medics= Medicaments::findOrFail($id);

        return view('edit',compact('medics'));
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
            'nommedicament' => 'required|max:255',
            'nomlaboratoire' => 'required|max:255',
            'description' => 'required|max:255',
            'created_at' => 'required',
            'updated_at' => 'required',
            'dosage' => 'required',
            'stocks' => 'required',
            'prix' => 'required',
            'image'=>'required',
           
            
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
        

        $medics=Medicaments::whereId($id)->update($input);

        return redirect('/medicaments')->with('success','Médicament mis a jour avec succés');
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
   $medics=Medicaments::findOrFail($id);
   $medics->delete();

   return redirect('/medicaments')->with('success','Médicament supprimé avec succés');

    }
}
