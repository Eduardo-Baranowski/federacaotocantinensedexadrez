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
                                              <img class="avatar" src="{{ asset('black') }}/img/anax.jpeg" onerror="this.src='{{ asset('black') }}/img/default-avatar.png'" alt="">
                                              <h5 class="title">Anaximandro Fernandes de Oliveira Camargos</h5>
                                          </a>

                                          <p class="description">
                                              {{ __('Diretor Secretário') }}
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
                          <h4 class="card-title">Compete ao Diretor Secretário</h4>
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
                                      <td>Supervisionar os trabalhos da Secretaria;</td>

                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>Lavrar os termos de abertura e encerramento de todos os livros da FTX:</td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td>Redigir as Atas de reuniões de Diretoria das Assembleias Gerais e das competições:
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td>Auxiliar o Diretor Técnico nos Congressos Técnicos de todas as Competições da FTX:</td>
                                  </tr>
                                  <tr>
                                      <td>5</td>
                                      <td>Votar nas reuniões de Diretoria:</td>

                                  </tr>
                                  <tr>
                                      <td>6</td>
                                      <td>Providenciar todo o material de expediente da FTX:</td>

                                  </tr>
                                  <tr>
                                      <td>7</td>
                                      <td>Elaborar anualmente o relatório da Secretaria:</td>

                                  </tr>
                                  </tbody>
                              </table>
                          </div>

                  </div>
              </div>
          </div>
  </div>
@endsection
