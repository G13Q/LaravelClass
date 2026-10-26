<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculController extends Controller
{
    function Somme($n1, $n2){
        return "La somme est " . ($n2 + $n1);
    }

    function Produit($n1, $n2){
        return "Le produit est " . ($n1 * $n2);
    }

    function Moyenne($n1, $n2){
        $moy = ($n1 + $n2) / 2;
        return "La moyenne de $n1 et $n2 est $moy";
    }
}
