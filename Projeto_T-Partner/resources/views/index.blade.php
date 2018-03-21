@extends('layouts.app')
 
@section('content')
  <div class="container-fluid" id="content">
    <div class="jumbotron">
    <h1 class="display-4">Bem vindo(a), @foreach($instructors as $instruc)
    {{$instruc->firstname}}
    @endforeach!
    </h1>
    <p class="lead">Veja o progresso dos alunos por disciplina, selecionando uma delas no botão ao lado.</p>
    <hr class="my-4">
    <p>Ou veja o progresso dos alunos, de uma forma geral, enquanto esteve fora.</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Visão geral</a>
    </p>
    </div>
     
    <div id="schedule2">
        <h1 style="font-family: Calibri">Agenda</h1>
        <div class="container">
          <div class="row row-striped">
            <div class="col-2 text-right">
              <h1 class="display-4"><span class="badge badge-secondary">13</span></h1>
              <h2>OUT</h2>
            </div>
            <div class="col-10">
              <h3 class="text-uppercase"><strong>Reunião da instituição</strong></h3>
              <ul class="list-inline">
                  <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Segunda-feira</li>
                <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 00:30- 14:00</li>
                <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i>Localização</li>
              </ul>
              <p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="row row-striped">
            <div class="col-2 text-right">
              <h1 class="display-4"><span class="badge badge-secondary">27</span></h1>
              <h2>OUT</h2>
            </div>
            <div class="col-10">
              <h3 class="text-uppercase"><strong>Entrega da atividade</strong></h3>
              <ul class="list-inline">
                  <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i>Sexta-feira</li>
                <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 14:30 - 16:00</li>
                <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i>Localização</li>
              </ul>
              <p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection

   