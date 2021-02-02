@extends('layouts.app', ['pageSlug' => 'presidente'])

@section('content')
          <div class="row">
              <div class="col-lg-6 col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <h5 class="title">Presidente</h5>
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
                                              <img class="avatar" src="{{ asset('black') }}/img/eudes.jpeg" onerror="this.src='{{ asset('black') }}/img/default-avatar.png'" alt="">
                                              <h5 class="title">Raimundo EUdes Pereira de Sousa</h5>
                                          </a>

                                          <p class="description">
                                              {{ __('Presidente') }}
                                          </p>
                                      </div>
                                      </p>
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
                          <h4 class="card-title">Compete ao Presidente</h4>
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
                                      <td>Supervisionar, coordenar dirigir e fiscalizar as atividades administrativas econômicas, financeiras e desportivas da FTX:</td>

                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>Convocar poderes e os órgãos Internos, à exceção do TJD:</td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td>Presidir, sem direito de voto, a Assembleia Geral, salvo os casos previstos neste Estatuto</td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td>Presidir as reuniões de Diretoria, com direito a voto, inclusive o de qualidade nos casos de desempate:</td>
                                  </tr>
                                  <tr>
                                      <td>5</td>
                                      <td>Dar posse, aos membros do Tribunal de Justiça Desportiva e aos membros da Comissão Disciplinar:</td>

                                  </tr>
                                  <tr>
                                      <td>6</td>
                                      <td>Nomear, dar posse licenciar e dispensar os membros da Diretoria:</td>
                                  </tr>
                                  <tr>
                                      <td>7</td>
                                      <td>Designar e dispensar Assessores e componentes de Comissão que instituir:</td>
                                  </tr>
                                  <tr>
                                      <td>8</td>
                                      <td>Cumprir e fazer cumprir, nos poderes e órgãos da FTX estes Estatutos e a Legislação em vigor, bem como as normas estabelecidas pelas entidades nacionais a que esteja filiada:</td>
                                  </tr>
                                  <tr>
                                      <td>9</td>
                                      <td>Praticar ou delegar todos os atos necessários à administração da FTX, tais como: supervisionar o pessoal que presta serviço remunerado à entidade, cabendo-lhe nomear, admitir, designar, demitir. punir, destituir, licenciar, conceder férias, elogiar, premiar, abrir inquérito, e instaurar processos: transigir, desistir ou conceder moratória ou anistia; celebrar convênios e acordos que importem em compromissos para a FTX; autenticar os livros da FTX; decidir sobre o registro e transferência de atletas, etc.: </td>
                                  </tr>
                                  <tr>
                                      <td>10</td>
                                      <td>Apresentar à Assembleia Geral, em cada uma das suas reuniões anuais, relatório circunstanciado da administração realizada no exercício anterior, juntamente com o balanço do movimento económico e financeiro e o parecer do Conselho Fiscal;</td>
                                  </tr>
                                  <tr>
                                      <td>11</td>
                                      <td>Fiscalizar a arrecadação da receita e autorizar o pagamento de despesa, observados o orçamento em execução e o limite de créditos adicionais:</td>
                                  </tr>
                                  <tr>
                                      <td>12</td>
                                      <td>Assinar com o Vice - Presidente, títulos, cheques, recibos ou quaisquer outros documentos que constituam obrigação financeira, obedecidas às disposições deste Estatuto ou do Regimento Geral;</td>
                                  </tr>
                                  <tr>
                                      <td>13</td>
                                      <td>Adquirir e providenciar a guarda e a conservação de bens móveis e imóveis da FTX aliená-los e constituir direitos reais sobre os mesmos, mediante autorização da Diretoria e parecer do Conselho Fiscal;</td>
                                  </tr>
                                  <tr>
                                      <td>14</td>
                                      <td>Autorizar a divulgação dos atos originários dos poderes e órgãos da FTX:</td>
                                  </tr>
                                  <tr>
                                      <td>15</td>
                                      <td>Expedir avisos às entidades filiadas e associadas, observadas as normas deste Estatuto e competência dos demais poderes:</td>
                                  </tr>
                                  <tr>
                                      <td>16</td>
                                      <td>Aplicar as pessoas físicas e jurídicas sujeitas à jurisdição da FTX as sanções previstas neste Estatuto, no Regimento Geral ou em qualquer outro ato da Entidade, ressalvada a competência dos demais poderes:</td>
                                  </tr>
                                  <tr>
                                      <td>17</td>
                                      <td>Rever penalidades que tenha imposto, inclusive relevando ou comutando-as:</td>
                                  </tr>
                                  <tr>
                                      <td>18</td>
                                      <td>Conceder licença a seus filiados e associados a promoverem ou participarem de competições internacionais ou interestaduais, observadas as normas legais:</td>
                                  </tr>
                                  <tr>
                                      <td>19</td>
                                      <td>Nomear procuradores, com poderes expressos, para representar a FTX em juízo ou fora dele:</td>
                                  </tr>
                                  <tr>
                                      <td>20</td>
                                      <td>Designar membros incumbidos da representação da FTX dentro ou fora do país:</td>
                                  </tr>
                                  <tr>
                                      <td>21</td>
                                      <td>Praticar quaisquer atos excluídos de sua competência explicita, mediante autorização da Assembleia Geral:</td>
                                  </tr>
                                  </tbody>
                              </table>
                          </div>

                  </div>
              </div>
          </div>
  </div>
@endsection
