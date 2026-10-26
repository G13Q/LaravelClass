<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    function etudiant(){
        $data = [
            ['nom' => 'Alaoui', 'prenom' => 'Sara',  'age' => 20, 'modules' => ['PHP', 'Laravel', 'MySQL']],
            ['nom' => 'Bennani', 'prenom' => 'Omar', 'age' => 22, 'modules' => ['JavaScript', 'HTML/CSS']],
            ['nom' => 'Idrissi', 'prenom' => 'Ali',  'age' => 21, 'modules' => []]
        ];
        return view('affichage', ['data' => $data]);
    }
}
