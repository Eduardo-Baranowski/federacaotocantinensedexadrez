@extends('layouts.app', ['pageSlug' => 'diretoria'])

@section('content')
          <div class="row">
              <div class="col-lg-6 col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <h5 class="title">Diretor Tesoureiro e Patrimônio</h5>
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
                                              <img class="avatar" src="{{ asset('black') }}/img/zamar.jpeg" onerror="this.src='{{ asset('black') }}/img/default-avatar.png'" alt="">
                                              <h5 class="title">Euzamar Viana Macedo Junior</h5>
                                          </a>

                                          <p class="description">
                                              {{ __('Diretor Tesoureiro e Patrimônio') }}
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
                          <h4 class="card-title">Compete ao Diretor Tesoureiro e Patrimônio</h4>
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
                                      <td>Providenciar a aquisição do material necessário ao expediente da FTX:</td>

                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>Fiscalizar a conservação dos bens móveis e imóveis da FTX:</td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td>Manter em dia o inventário completo dos bens móveis e imóveis da FTX:
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td>Votar nas reuniões da FTX:</td>
                                  </tr>
                                  <tr>
                                      <td>5</td>
                                      <td>Mandar fazer a escrituração contábil da FTX:</td>

                                  </tr>
                                  <tr>
                                      <td>6</td>
                                      <td>Submeter trimestralmente à aprovação da Diretoria e do Conselho Fiscal, o Balancete da FTX:</td>

                                  </tr>


                                  <tr>
                                      <td>7</td>
                                      <td>Depositar em entidade bancária, as importâncias e valores da FTX:</td>

                                  </tr>

                                  <tr>
                                      <td>8</td>
                                      <td>Apresentar anualmente balanço analítico, que será anexado ao relatório da Diretoria;</td>

                                  </tr>
                                  <tr>
                                      <td>9</td>
                                      <td>Pagar as despesas autorizadas pelo Presidente;</td>

                                  </tr>
                                  <tr>
                                      <td>10</td>
                                      <td>Assinar com o Presidente documentos relacionados com dinheiro e haveres da FTX:</td>

                                  </tr>
                                  <tr>
                                      <td>11</td>
                                      <td>Ao ser substituído no cargo, assinar e apresentar o Balancete econômico-financeiro, bem como o inventário de bens e utensílios da FTX:</td>

                                  </tr>
                                  <tr>
                                      <td>12</td>
                                      <td>Fiscalizar as rendas de todas as competições da FTX:</td>

                                  </tr>
                                  <tr>
                                      <td>13</td>
                                      <td>Elaborar a Tabela de Taxas, mediante autorização do presidente:</td>

                                  </tr>
                                  </tbody>
                              </table>
                          </div>

                  </div>
              </div>
          </div>
  </div>
@endsection
