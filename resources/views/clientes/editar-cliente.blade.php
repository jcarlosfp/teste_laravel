@extends('layouts.main')
@section('title','Clientes')

@section('main')
<div class="page-wrapper">
    <div class="content container-fluid">
       <div class="page-header">
          <div class="row align-items-center">
             <div class="col">
                @include('clientes._partials.breadcrumb',['pageTitle'=> 'Editar Dados', 'navs' => 
                        [
                            [
                                'route' => route('clientes'),
                                'title' => 'Clientes'
                            ],
                            [   
                                'title' => 'Editar Dados'
                            ]
                        ]
                    ]
                )
             </div>
          </div>
       </div>
       <div class="row settings-tab">
          <div class="col-md-4">
             <div class="card">
                <div class="card-header all-center">
                   <a href="general.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{!! asset('assets/img/profiles/avatar-01.jpg') !!}" alt="User Image">
                   <i class="fe fe-camera"></i>
                   </a>
                   <h6>Teste</h6>
                </div>
                <div class="card-body p-0">
                   <div class="profile-list">
                      <a href="#"><i class="fe fe-document"></i></a>
                      <a href="#">CPF</a>
                      <a href="#" class="float-end">
                         <h5>10, 203</h5>
                      </a>
                   </div>
                   <div class="profile-list">
                      <a href="#"><i class="fe fe-calendar"></i></a>
                      <a href="#">Data Nasc.</a>
                      <a href="#" class="float-end">
                         <h5>403</h5>
                      </a>
                   </div>
                   <div class="profile-list">
                      <a href="#"><i class="fe fe-users"></i></a>
                      <a href="#">Sexo</a>
                      <a href="#" class="float-end">
                         <h5>103</h5>
                      </a>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-8">
             <div class="card">
                <div class="card-header">
                   <h4 class="card-title">Detalhes</h4>
                </div>
                <div class="card-body">
                   <form action="#">
                      <div class="form-group">
                         <label>Nome</label>
                         <input type="text" class="form-control" value="">
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>CPF</label>
                                <input type="text" id="cpf" class="form-control" value="s">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Data Nasc.</label>
                                <input type="text" id="date" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="d-block">Sexo</label>
                                   <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="sexo" id="gender_male" value="option1" checked>
                                      <label class="form-check-label" for="gender_male">
                                      Masculino
                                      </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="sexo" id="gender_female" value="option2">
                                      <label class="form-check-label" for="gender_female">
                                      Feminino
                                      </label>
                                   </div>
                             </div>
                        </div>
                    </div>
                      <div class="form-group">
                         <label>Endereço</label>
                         <input type="text" class="form-control" value="">
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                            <label>Estado</label>
                              <select class="select form-control">
                                 <option>Select Country</option>
                                 <option value="1">USA</option>
                                 <option value="2">France</option>
                                 <option value="3">India</option>
                                 <option value="4">Spain</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cidade</label>
                               <select class="select form-control">
                                  <option>Select Country</option>
                                  <option value="1">USA</option>
                                  <option value="2">France</option>
                                  <option value="3">India</option>
                                  <option value="4">Spain</option>
                               </select>
                            </div>
                         </div>
                     </div>
                      <div class="text-end">
                         <button type="submit" class="btn btn-primary">Atualizar</button>
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

    @section('scripts')
        <script src="{!! asset('assets/js/jquery.maskedinput.min.js') !!}"></script>
        <script src="{!! asset('assets/js/mask.js') !!}"></script>
    @stop
@stop