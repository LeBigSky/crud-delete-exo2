<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function store (Request $request){
        $store= New Voiture();
        $store->marque = $request->marque;
        $store->année = $request->année;
        $store->couleur = $request->couleur;
        $store->prix = $request->prix;
        $store->reduction = $request->reduction;
        $store->save();
        return redirect()->back();

    }
    public function home (){
        $cars= Voiture::all();
        $modeles= Voiture::all()->where('prix','<', 4000 );
        $executives= Voiture::all()->where('prix','>', 4000 );
        $promo= $cars->where('reduction', '>', 0 );
        $prix= $cars->where('prix', '>', 0);
        // $percent =  ($prix * $promo / 100);
        return view('home' ,compact('cars', 'modeles', 'executives', 'promo'));
    }
    public function delete (Voiture $id){
        $id->delete();
        return redirect('/');
}
}
