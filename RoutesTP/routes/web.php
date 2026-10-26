<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    return $request->url();
});

Route::get('/login', function(){
    return "<h1>Login page</h1>"; 
});

Route::get('/page/{n}', function($n){
    return "<h1>dans la page $n</h1>";
});

Route::get('/test/{param}', function($param){
    return view('formulaire', ["param"=>$param]);
})->name('formation');

Route::get('/Formation/{formation}/filiere/{filiere}/groupe/{groupe}/stagiaire/{stagiaire?}', function($formation, $filiere, $groupe, $stagiaire='aucun'){
    $info = ["formation"=>$formation, "filiere" => $filiere, "groupe" => $groupe, "stagiaire" => $stagiaire];
    return view('formulaire', ['info' => $info]);
});

Route::get('/profile', function(){
    return view('profile');
})->name('profile');

Route::post('/profile', function(Request $request){
    return view('profile', ["nom" =>$request->input('nom'), "email"=> $request->input('email') ]);
});

Route::get('/home/{resultat?}',function($resultat = null){
    return view('calculatriceView');
});

Route::post('/home/{resultat?}', function(Request $req, $resultat = null){
    $n1 = $req->input('n1');
    $n2 = $req->input('n2');
    $operator = $req->input('operator');
    $operators = ['+' => $n1 + $n2, '-' => $n1 - $n2, '*' => $n1 * $n2 , '/' => $n1 / $n2];

    $resultat =  $operators[$operator];
    return view('calculatriceView', ['resultat' => $resultat]);
});