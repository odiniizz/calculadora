@extends('layout')

@section('content')
<div class="container">
    <h1>Resultados para {{ $nome }}</h1>
    <p>Valor do Empréstimo: R$ {{ number_format($emprestimo, 2) }}</p>
    <table class="table">
    <thead>
        <tr>
            <th>Nº da Parcela</th>
            <th>Valor Atualizado</th>
            <th>Juros</th>
            <th>Valor da Parcela</th>
            <th>Quantidade a ser paga</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dados as $item)
        <tr>
            <td>{{ $resultado['parcela'] }}</td>
            <td>R$ {{ $resultado['valorAtualizado'] }}</td>
            <td>R$ {{ $resultado['juros'] }}</td>
            <td>R$ {{ $resultado['parcela'] }}</td>
            <td>R$ {{ $resultado['sobra'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<p>Total Pago: R$ {{ $total }}</p>

</div>
<button onclick="window.location.href='/';" type="button" class="btn btn-lg btn-primary btn-block botao">Voltar</button>
@endsection