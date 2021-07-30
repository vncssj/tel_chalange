@extends('app')
@section('content')
<h1>Novo Usuário</h1>
<form class="form needs-validation" method="post" action="/users/add" novalidate>
    @csrf
    <div class="col-12">
        <label for="validationCustom01" class="form-label">Nome</label>
        <input type="text" class="form-control" id="validationCustom01" name="nome" required>
        <div class="valid-feedback">
            Ok!
        </div>
    </div>
    <div class="col-12">
        <label for="validationCustom01" class="form-label">Email</label>
        <input type="email" class="form-control" id="validationCustom01" name="email" required>
        <div class="valid-feedback">
            Ok!
        </div>
    </div>
    <div class="col-12">
        <label for="validationCustom01" class="form-label">Senha</label>
        <input type="password" class="form-control" id="validationCustom01" name="senha" required>
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