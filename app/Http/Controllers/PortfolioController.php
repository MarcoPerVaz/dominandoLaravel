<?php

/* Notas:
    | ------------------------------------------------------------------------------------
    | *index():   Listar recursos
    | *create():  Mostrar el formulario para crear un recurso
    | *store():   Guardar el recurso en la base de datos
    | *show():    Mostrar un recurso específico mediante el $id
    | *edit():    Mostrar el formulario para editar un recurso específico mediante el $id
    | *update():  Actualizar un recurso específico mediante el $id
    | *destroy(): Eliminar un recurso específico mediante el $id
    | ------------------------------------------------------------------------------------
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*  */
        $portfolio = [
            ['title' => 'Proyecto #1'],
            ['title' => 'Proyecto #2'],
            ['title' => 'Proyecto #3'],
            ['title' => 'Proyecto #4'],
        ];

        return view('portfolio', compact('portfolio'));
        /*  */
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}

/* Notas:
    | ------------------------
    | *Nota: Se comentaron las 6 funciones REST (create, store, show, edit, update y destroy) porque no se van a usar
    |  *Se dejaron como referencia
    | ------------------------
*/
