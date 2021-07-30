@extends('app')
@section('content')
<h1>Novo Cliente</h1>
<form class="form needs-validation" method="post" action="/clients/add" novalidate>
    @csrf
    <div class="col-12">
        <label for="validationCustom01" class="form-label">Nome</label>
        <input type="text" class="form-control" id="validationCustom01" name="nome" required>
        <div class="valid-feedback">
            Ok!
        </div>
    </div>
    <div class="col-12">
        <label for="validationCustom01" class="form-label">CPF</label>
        <input type="text" class="form-control" id="validationCustom01" name="cpf" required>
        <div class="valid-feedback">
            Ok!
        </div>
    </div>
    <div class="col-12">
        <label for="validationCustom01" class="form-label">RG</label>
        <input type="text" class="form-control" id="validationCustom01" name="rg" required>
        <div class="valid-feedback">
            Ok!
        </div>
    </div>
    <div class="col-12">
        <label for="validationCustom01" class="form-label">Data Nascimento</label>
        <input type="date" class="form-control" id="validationCustom01" name="data_nascimento" required>
        <div class="valid-feedback">
            Ok!
        </div>
    </div>
    <div class="col-12">
        <label for="validationCustom01" class="form-label">Data Nascimento</label>
        <select type="date" class="form-control" id="validationCustom01" name="local_nascimento" required>
            <option value="">Selecione</option>
            <option value="BA">Bahia</option>
            <option value="SP">São Paulo</option>
        </select>
        <div class="valid-feedback">
            Ok!
        </div>
    </div>
    <div class="spacer-md">&nbsp;</div>
    <div class="col-12 text-center">
        <button class="btn btn-primary" type="submit">Salvar</button>
    </div>
</form>
@endsection