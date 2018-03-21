@extends('layouts.app')
 
@section('content')
  <div class="container-fluid" id="content">
    
      <div class="card border-primary mb-3 fluid" id="card_info">
        <div class="card-header" id="card_style"><h5 style="color: black">Estatística</h5></div>
          <div class="card-body text-primary" id="card_style">
          
          </div>
      </div>
      
      <div class="card border-primary mb-3 fluid" id="card_classes">
        <div class="card-header" id="card_style"><h5 style="color: black">Alunos</h5></div>
          <div class="card-body text-primary" id="card_style">

             <div class="col-sm">
                  <img src="/css/foto/perfilaluno.png" alt="..." class="rounded-circle" style="height:8%; width:11%;">
                  <a href="/students" style="font-size:16px; color: blue; padding-left: 3%;padding-top: 0%">@foreach($students as $student)
          {{$student->firstname}}
          @endforeach</a>

                  <img src="/css/foto/perfilaluno.png" alt="..." class="rounded-circle" style="height:8%; width:11%;">
                  <a href="/students" style="font-size:16px; color: blue; padding-left: 3%;padding-top: 0%">@foreach($students2 as $student)
          {{$student->firstname}}
          @endforeach</a>
              </div>
                  <h5></h5>
              <div class="col-sm">
                  <img src="/css/foto/perfilaluno.png" alt="..." class="rounded-circle" style="height:8%; width:11%;">
                  <a href="/students" style="font-size:16px; color: blue; padding-left: 3%;padding-top: 0%">@foreach($students as $student)
          {{$student->firstname}}
          @endforeach</a>

                  <img src="/css/foto/perfilaluno.png" alt="..." class="rounded-circle" style="height:8%; width:11%;">
                  <a href="/students" style="font-size:16px; color: blue; padding-left: 3%;padding-top: 0%">@foreach($students2 as $student)
          {{$student->firstname}}
          @endforeach</a>
              </div>
                  <h5></h5>
              <div class="col-sm">
                  <img src="/css/foto/perfilaluno.png" alt="..." class="rounded-circle" style="height:8%; width:11%;">
                  <a href="/students" style="font-size:16px; color: blue; padding-left: 3%;padding-top: 0%">@foreach($students as $student)
          {{$student->firstname}}
          @endforeach</a>

                  <img src="/css/foto/perfilaluno.png" alt="..." class="rounded-circle" style="height:8%; width:11%;">
                  <a href="/students" style="font-size:16px; color: blue; padding-left: 3%;padding-top: 0%">@foreach($students2 as $student)
          {{$student->firstname}}
          @endforeach</a>
              </div>
                  <h5></h5>
            </div>
         
      </div>

      <div id="middle">

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-desempenho" role="tab" aria-controls="nav-home" aria-selected="true">Desempenho</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-interacao" role="tab" aria-controls="nav-profile" aria-selected="false">Interação</a>
              
            </div>
          </nav>

          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-desempenho" role="tabpanel" aria-labelledby="nav-home-tab">...<div id="histogramContainer"></div></div>
            <div class="tab-pane fade" id="nav-interacao" role="tabpanel" aria-labelledby="nav-profile-tab">...<div id="histogramContainer"></div></div>
            
          </div>  
          
      </div>

      <div id="schedule">
        <h1 style="font-family: Calibri">Agenda</h1>
        <div class="container">
          <div class="row row-striped">
            <div class="col-2 text-right">
              <h1 class="display-4"><span class="badge badge-secondary">23</span></h1>
              <h2>OUT</h2>
            </div>
            <div class="col-10">
              <h3 class="text-uppercase"><strong>Segunda Prova</strong></h3>
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
