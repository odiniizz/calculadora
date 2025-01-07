@extends('layout')

@section('content')
<div class="texto">
    <h2>Cálculo efetuado</h2>
</div>

<div class="row">
    <div class="col-md-3">Nº da parcela</div>
    <div class="col-md-6">Valor atualizado</div>
    <div class="col-md-3">Valor da parcela</div>
</div>

@foreach ($dados as $item)

    <div>
        <div class="col-md-3"> {{$item["mes"]}} </div>
        <div class="col-md-6"> R$ {{$item["valorAtualizado"]}} </div>
        <div class="col-md-3"> R$ {{$item["valorParcela"]}} </div>
    </div>

@endforeach

<button onclick="window.location.href='/';" type="button" 
    class="btn btn-lg btn-primary btn-block botao">Voltar</button>

@endsection