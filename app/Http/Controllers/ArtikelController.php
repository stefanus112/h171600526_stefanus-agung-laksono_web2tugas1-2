<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use App\KategoriArtikel;

class ArtikelController extends Controller
{
    public function index(){
      
      $Artikel=Artikel::all(); 

      return view ('Artikel.index',compact('Artikel'));
      //return view ('artikel.index'->with('data',$listArtikel);
    }

    public function show($id) {

        //$Artikel=Artikel::where('id',$id)->first();
        $Artikel=Artikel::find($id);


        if (empty($Artikel)){
            return redirect(route ('Artikel.index'));
        }

        return view ('Artikel.show', compact('Artikel'));
        
    }

    public function create(){

        $KategoriArtikel=KategoriArtikel::pluck('nama','id');
        
        return view('artikel.create', compact('KategoriArtikel'));
    }

    public function store(Request $request){

        $input= $request->all();

        Artikel::create($input);

        return redirect(route('Artikel.index'));
    }

     public function edit($id) {
        $Artikel = Artikel::find($id);
        $KategoriArtikel=KategoriArtikel::pluck('nama','id');

        return view('Artikel.edit', compact('Artikel','KategoriArtikel'));
    }

    public function update($id,Request $request){
      $Artikel=Artikel::find($id);
      $input=$request->all();
  
      if(empty($Artikel)) {
        return redirect(route('Artikel.index'));
      }

      $Artikel->update($input);
      return redirect(route('Artikel.index'));
    }

    public function destroy($id){
        $Artikel=Artikel::find($id);

        if (empty($Artikel)){
            return redirect(route ('Artikel.index'));
        }

        $Artikel->delete();
        return redirect(route('Artikel.index'));
    }
    
    public function trash(){
        
        $Artikel=Artikel::onlyTrashed()
                            ->WhereNotNull('deleted_at')
                            ->get();

        return view ('artikel.index',compact('Artikel'));
        //return view ('artikel.index'->with('data',$listArtikel);
    }
}