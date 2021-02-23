<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\epreuve;
class epController extends Controller
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
        $epreuves= epreuve::all();
        return view('epreuve.tableauE', compact('epreuves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('epreuve.create');
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
            'numepreuve' => 'required',
            'datepreuve' => 'required',
            'lieu' => 'required'
        ]);

            $epreuve = new epreuve;
                $epreuve ->numepreuve = request('numepreuve');
                $epreuve ->datepreuve = request('datepreuve'); 
                $epreuve ->lieu = request('lieu'); 
            $epreuve->save();

            epreuve::create($validatedData);
            //return redirect('/cars');
            //$matiere->save();
            return redirect('epreuve');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Epreuve $epreuve)
    {
        return view('epreuve.show',compact('epreuve'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Epreuve $epreuve)
    {
        return view('epreuve.edit',compact('epreuve'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Epreuve $epreuve)
    {
        $validatedData = request()->validate([
            'numepreuve' => 'required',
            'datepreuve' => 'required',
            'lieu' => 'required'
        ]);

        /*$car->name = request('name');
        $car->color = request('color');
        $car->company = request('company');
        $car->save();*/

        $epreuve->update($validatedData);

        return redirect('/epreuve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Epreuve $epreuve)
    {
        $matiere->delete();
        return redirect('/matiere');
    }
}
