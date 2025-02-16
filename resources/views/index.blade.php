@extends('layout')

@section('content')
<div class="container">
    <h1>Simulação de Empréstimo</h1>
    <form method="POST" action="{{ route('calcular') }}">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="emprestimo" class="form-label">Valor do Empréstimo</label>
            <input type="number" step="0.01" class="form-control" id="emprestimo" name="emprestimo" required>
        </div>
        <div class="mb-3">
            <label for="taxa" class="form-label">Taxa de Juros (%)</label>
            <input type="number" step="0.01" class="form-control" id="taxa" name="taxa" required>
        </div>
        <div class="mb-3">
            <label for="parcelas" class="form-label">Quantidade de Parcelas</label>
            <input type="number" class="form-control" id="parcelas" name="parcelas" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
</div>
@endsection