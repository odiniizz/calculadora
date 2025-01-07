<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerCalculo extends Controller
{
    public function Calcular(Request $request)
    {
        $emprestimo = $request->input('emprestimo');
        $taxa = $request->input("taxa"); 
        $parcelas = $request->input('parcelas');
        $juros = $taxa / 100;
        
        $dados = array();
        
        for($i= 1; $i <= $periodo; $i++){
            $dados[$i]['parcela'] = $i;
            $dados[$i]['valorAtualizado'] = number_format(($emprestimo + ($emprestimo * $juros)), 2, ',', '.');
            $dados[$i]['valorParcela'] = number_format(($emprestimo / $parcelas) + ($emprestimo * $juros), 2, ',', '.');
            $emprestimo = $emprestimo + ($emprestimo * $juros);
        }
        
        return view('resposta', compact('dados'));
    }
}