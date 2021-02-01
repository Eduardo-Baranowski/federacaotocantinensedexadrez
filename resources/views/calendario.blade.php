@extends('layouts.app', ['page' => __('Calendário'), 'pageSlug' => 'notifications'])

@section('content')
  <div class="row">

  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="places-buttons">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto text-center">
              <h4 class="card-title">
                Eventos

                <p class="category">Click para visualizar os links ou informações.</p>
                  <p class="category">No momento estamos apenas com calendário para torneios online.</p>
              </h4>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 ml-auto mr-auto">
              <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','left')"><i class="tim-icons icon-calendar-60"> {{ date('d-m-Y') }}</i></button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','center')"><i class="tim-icons icon-calendar-60"> {{ date('d-m-Y', strtotime('+1 days', strtotime(date('d-m-Y')))) }}</i></button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','right')"><i class="tim-icons icon-calendar-60"> {{ date('d-m-Y', strtotime('+2 days', strtotime(date('d-m-Y')))) }}</i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 ml-auto mr-auto">
              <div class="row">
                <div class="col-md-4">
                  <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','left')"><i class="tim-icons icon-calendar-60"> {{ date('d-m-Y', strtotime('+3 days', strtotime(date('d-m-Y')))) }} </i></button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','center')"><i class="tim-icons icon-calendar-60"> {{ date('d-m-Y', strtotime('+4 days', strtotime(date('d-m-Y')))) }} </i></button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','right')"><i class="tim-icons icon-calendar-60"> {{ date('d-m-Y', strtotime('+5 days', strtotime(date('d-m-Y')))) }} </i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
