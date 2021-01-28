@extends('layouts.app', ['pageSlug' => 'contact'])

@section('content')
<div class="jumbotron">
<div class="container text-center">

  <h1 class="display-4">Contato</h1>
  <hr class="my-4">
  <p class="lead">Trabalhamos para desenvolver o seu site. Onde você estiver nós chegamos até você.  Desenvolvemos o seu site por um preço acessível.</p>
</div>
</div>
<div class="container py-5">
  @include('partials.messages')
<form action="{{route('contact.send')}}" method="POST">
  {{ csrf_field ()}}
  <div class="form-group">
    <label>Nome</label>
    <input type="text" class="form-control" name="nome" aria-describedby="nome" placeholder="Seu Nome">
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="text" class="form-control" name="email" aria-describedby="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label>Telefone</label>
    <input type="text" class="form-control" name="telefone" aria-describedby="telefone" placeholder="Seu Telefone">
  </div>
  <div class="form-group">
    <label>O que procura</label>
    <input type="text" class="form-control" name="descricao" aria-describedby="descricao" placeholder="O que procura?">
  </div>
  <button type="submit" class="btn btn-success" role="button">Submit</button>
</form>
</div>
@endsection
