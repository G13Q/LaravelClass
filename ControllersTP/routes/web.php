<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculController;
use App\Http\Controllers\DisplayController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/somme/{n1}/{n2}', [CalculController::class, "Somme"] );
Route::get('/produit/{n1}/{n2}', [CalculController::class, "Produit"] );
Route::get('/moyenne/{n1}/{n2}', [CalculController::class, "Moyenne"] );

Route::get('/affichage', [DisplayController::class, "etudiant"] );