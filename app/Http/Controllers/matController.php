<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\matiere;
class matController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }
    
    public function index()
    {
        $matieres= matiere::orderBy('created_at','desc')->paginate(5);
        return view('matiere.tableauM', compact('matieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matiere.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = request()->validate([
            'codemat' => ['required','max:5'],
            'libelle' => 'required',
            'coef' => 'required'
        ]);

            $matiere = new matiere;
                $matiere ->codemat = request('codemat');
                $matiere ->libelle = request('libelle'); 
                $matiere ->coef = request('coef'); 
            $matiere->save();

            matiere::create($validatedData);
            //return redirect('/cars');
            //$matiere->save();
            return redirect('matiere');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Matiere $matiere)
    {
        return view('matiere.show',compact('matiere'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Matiere $matiere)
    {
        return view('matiere.edit',compact('matiere'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matiere $matiere)
    {
        $validatedData = request()->validate([
            'codemat' => 'required',
            'libelle' => 'required',
            'coef' => 'required'
        ]);

        /*$car->name = request('name');
        $car->color = request('color');
        $car->company = request('company');
        $car->save();*/

        $matiere->update($validatedData);

        return redirect('/matiere');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matiere $matiere)
    {
        $matiere->delete();
        return redirect('/matiere');
    }
}
