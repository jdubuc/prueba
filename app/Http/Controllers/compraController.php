<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\compra;
use App\detalle_compra;
use App\categoria;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use View;
class compraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    }

    public function detalles ($param){
         
        if($param=='detalles'){
            $flag=0;
            $detalles;
            $compra =compra::all();
            foreach ($compra as $key => $value) {
                $detalles[$flag]['producto']=$value->producto;
                $detalles[$flag]['cantidad']=$value->cantidad;
                $flag++;
            }
            dd($detalles);
            //return View::make('compra/show')->with('detalles',$detalles);
        }
        else if ($param=='total'){
            $flag=0;
            $precio;
            $answer = DB::table('detalle_compra')->select('precio','categoria_id')->orderBy('categoria_id')->get();
 
            foreach ($answer as $key => $value){
                if(isset($precio[$value->categoria_id-1]['total'])){
                    $precio[$value->categoria_id-1]['total']+= $value->precio;
                }
                else{
                    $precio[$value->categoria_id-1]['total']= $value->precio;
                }
                $precio[$value->categoria_id-1]['categoria_id']=$value->categoria_id;
            }
            dd($precio);
             //return View::make('compra/show')->with('precio',$precio);
        } 
        else{
            abort(404);
        }
    }
        
     
}
