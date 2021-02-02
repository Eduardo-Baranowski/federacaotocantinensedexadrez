@extends('layouts.app', ['pageSlug' => 'diretoria'])

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Diretoria FTX</h5>
        </div>
        <div class="card-body all-icons">
          <div class="row">
            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail">
                  <a href="{{ route('presidente') }}"><img class="featurette-image img-fluid mx-auto" src="{{ asset('black') }}/img/eudes.jpeg"  width="100" height="100"  alt="Generic placeholder image"></a>
                <p>Presidente: Raimundo Eudes</p>
              </div>
            </div>
            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail">
                  <img class="featurette-image img-fluid mx-auto" src="{{ asset('black') }}/img/default-avatar.png"  width="100" height="100"  alt="Generic placeholder image">
                <p>Vice: Luciano </p>
              </div>
            </div>
            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail">
                  <a href="{{ route('diretorsec') }}"><img class="featurette-image img-fluid mx-auto" src="{{ asset('black') }}/img/anax.jpeg"  width="100" height="100"  alt="Generic placeholder image"></a>
                <p>Diretor Secretário: Anaximandro</p>
              </div>
            </div>
            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail">
                  <a href="{{ route('diretortes') }}"><img class="featurette-image img-fluid mx-auto" src="{{ asset('black') }}/img/default-avatar.png"  width="100" height="100"  alt="Generic placeholder image"></a>
                <p>Diretor Tesoureiro e Patrimônio: Euzamar </p>
              </div>
            </div>
            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail">
                  <a href="{{ route('diretortec') }}"><img class="featurette-image img-fluid mx-auto" src="{{ asset('black') }}/img/eduardo.jpg"  width="100" height="100"  alt="Generic placeholder image"></a>
                <p>Diretor Técnico: Eduardo Baranowski</p>
              </div>
            </div>
            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail">
                  <a href="{{ route('diretorarb') }}"><img class="featurette-image img-fluid mx-auto" src="{{ asset('black') }}/img/default-avatar.png"  width="100" height="100"  alt="Generic placeholder image"></a>
                <p>Diretor de Arbitragem: Washington Gabriel </p>
              </div>
            </div>
            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail">
                  <a href="{{ route('diretormed') }}"><img class="featurette-image img-fluid mx-auto" src="{{ asset('black') }}/img/pons.jpeg"  width="100" height="100"  alt="Generic placeholder image"></a>
                <p>Diretor Médico: Antônio Pons</p>
              </div>
            </div>
            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail">
                  <a href="{{ route('diretorcon1') }}"><img class="featurette-image img-fluid mx-auto" src="{{ asset('black') }}/img/default-avatar.png"  width="100" height="100"  alt="Generic placeholder image"></a>
                <p>Conselheiro Fiscal: Eiberto Nascimento</p>
              </div>
            </div>
            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail">
                  <a href="{{ route('diretorcon2') }}"><img class="featurette-image img-fluid mx-auto" src="{{ asset('black') }}/img/rangel.jpeg"  width="100" height="100"  alt="Generic placeholder image"></a>
                <p>Conselheiro Fiscal: Rangel Cavalcante</p>
              </div>
            </div>
            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail">
                  <a href="{{ route('diretorcon3') }}"><img class="featurette-image img-fluid mx-auto" src="{{ asset('black') }}/img/default-avatar.png"  width="100" height="100"  alt="Generic placeholder image"></a>
                <p>Conselheiro Fiscal: Jailson Sousa</p>
              </div>
            </div>
            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail">
                  <a href="{{ route('diretorcon1s') }}"><img class="featurette-image img-fluid mx-auto" src="{{ asset('black') }}/img/default-avatar.png"  width="100" height="100"  alt="Generic placeholder image"></a>
                <p>Conselheiro Fiscal: Gilson Oliveira</p>
              </div>
            </div>
            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail">
                  <a href="{{ route('diretorcon2s') }}"><img class="featurette-image img-fluid mx-auto" src="{{ asset('black') }}/img/default-avatar.png"  width="100" height="100"  alt="Generic placeholder image"></a>
                <p>Conselheiro Fiscal: Adinan Souza</p>
              </div>
            </div>
            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail">
                  <a href="{{ route('diretorcon3s') }}"><img class="featurette-image img-fluid mx-auto" src="{{ asset('black') }}/img/default-avatar.png"  width="100" height="100"  alt="Generic placeholder image"></a>
                <p>Conselheiro Fiscal: Filipe Carvalho</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
