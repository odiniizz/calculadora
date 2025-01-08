<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCalculo extends Controller
{
    public function calcular(Request $request)
{
    $nome = $request->input('nome');
    $emprestimo = $request->input('emprestimo');
    $taxa = $request->input('taxa') / 100;
    $parcelas = $request->input('parcelas');
    $saldo = $emprestimo;
    $dados = [];
    $total = 0;

    for ($i = 1; $i <= $parcelas; $i++) {
        $juros = $saldo * $taxa;
        $valorAtualizado = $saldo + $juros;
        $parcela = $valorAtualizado / ($parcelas - $i + 1);
        $saldo = $valorAtualizado - $parcela;

        $dados[] = [
            'parcela' => $i,
            'valorAtualizado' => number_format($valorAtualizado, 2, ',', '.'),
            'juros' => number_format($juros, 2, ',', '.'),
            'parcela' => number_format($parcela, 2, ',', '.'),
            'sobra' => number_format($saldo, 2, ',', '.'),
        ];

        $total = $total + $parcela;
    }

    $total = number_format($total, 2, ',', '.');

    return view('resposta', compact('nome', 'emprestimo', 'dados', 'total'));
}
}