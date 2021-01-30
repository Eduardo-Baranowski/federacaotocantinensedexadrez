@extends('layouts.app', ['pageSlug' => 'diretoria'])

@section('content')
          <div class="row">
              <div class="col-lg-6 col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <h5 class="title">Diretor Técnico</h5>
                      </div>

                      <div class="card-body ">
                              <div class="card card-user">
                                  <div class="card-body">
                                      <p class="card-text">
                                      <div class="author">
                                          <div class="block block-one"></div>
                                          <div class="block block-two"></div>
                                          <div class="block block-three"></div>
                                          <div class="block block-four"></div>
                                          <a href="#">
                                              <img class="avatar" src="{{ asset('black') }}/img/adinan.jpeg" onerror="this.src='{{ asset('black') }}/img/default-avatar.png'" alt="">
                                              <h5 class="title">Adinan Souza</h5>
                                          </a>

                                          <p class="description">
                                              {{ __('Conselheiro Fiscal') }}
                                          </p>
                                      </div>
                                      </p>
                                  <!--
                    <div class="card-description">
                        {{ __('Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...') }}
                                      </div>
-->
                                  </div>
                                  <div class="card-footer">
                                      <div class="button-container">
                                          <button class="btn btn-icon btn-round btn-facebook">
                                              <i class="fab fa-facebook"></i>
                                          </button>
                                          <button class="btn btn-icon btn-round btn-twitter">
                                              <i class="fab fa-twitter"></i>
                                          </button>
                                          <button class="btn btn-icon btn-round btn-google">
                                              <i class="fab fa-google-plus"></i>
                                          </button>
                                      </div>
                                  </div>
                              </div>

                          </div>
                  </div>
              </div>
              <div class="col-lg-6 col-md-12">
                  <div class="card ">
                      <div class="card-header">
                          <h4 class="card-title">Compete ao Conselho Fiscal</h4>
                      </div>
                      <div class="card-body">

                              <table class="table">
                                  <thead class=" text-primary">
                                  <th>
                                  </th>
                                  <th>
                                  </th>

                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>Examinar trimestralmente os livros, documentos e balancetes da FTX;</td>

                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>Apresentar à Assembleia Geral denúncia fundamentada sobre erros administrativos ou qualquer violação da Lei ou deste Estatuto, sugerindo as medidas a serem adotadas, inclusive para que se possa, em cada caso, exercer plenamente sua função fiscalizadora;</td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td> Apresentar à Assembleia Geral parecer anual sobre o movimento económico, financeiro e administrativo e o resultado da execução orçamentária,
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td>Convocar a Assembleia Geral quando ocorrer motivo grave e urgente:</td>
                                  </tr>
                                  <tr>
                                      <td>5</td>
                                      <td>Emitir parecer sobre qualquer natureza financeira que lhe for encaminhada pelo Presidente da FTX: </td>

                                  </tr>
                                  <tr>
                                      <td>6</td>
                                      <td>Emitir parecer sobre compra, locação ou gravação de bens imóveis.</td>

                                  </tr>
                                  </tbody>
                              </table>
                          </div>

                  </div>
              </div>
          </div>
  </div>
@endsection
