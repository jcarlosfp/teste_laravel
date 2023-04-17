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
                   <a href="general.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{!! $cliente->sexo == 'Feminino' ? asset('assets/img/profiles/avatar_feminino.jpg') : asset('assets/img/profiles/avatar_masculino.jpg') !!}" alt="User Image">
                   <i class="fe fe-camera"></i>
                   </a>
                   <h6>{!! $cliente->nome !!}</h6>
                </div>
                <div class="card-body p-0">
                   <div class="profile-list">
                      <a href="#"><i class="fe fe-document"></i></a>
                      <a href="#">CPF</a>
                      <a href="#" class="float-end">
                         <h5>{!! $cliente->cpf !!}</h5>
                      </a>
                   </div>
                   <div class="profile-list">
                      <a href="#"><i class="fe fe-calendar"></i></a>
                      <a href="#">Data Nasc.</a>
                      <a href="#" class="float-end">
                         <h5>{!! date('d/m/Y',strtotime($cliente->data_nasc)) !!}</h5>
                      </a>
                   </div>
                   <div class="profile-list">
                      <a href="#"><i class="fe fe-users"></i></a>
                      <a href="#">Sexo</a>
                      <a href="#" class="float-end">
                         <h5>{!! $cliente->sexo !!}</h5>
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
                   <form action="/clientes/{!! $cliente->id !!}" method="post">
                     @csrf
                     @method('PUT')
                      <div class="form-group">
                         <label>Nome</label>
                         <input type="text" class="form-control"name="nome" value="{!! $cliente->nome !!}">
                         @error('nome') <div class="invalid-feedback d-block">{{$message}}</div>@enderror
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>CPF</label>
                                <input type="text" id="cpf" name="cpf" class="form-control" value="{!! $cliente->cpf !!}">
                                @error('cpf') <div class="invalid-feedback d-block">{{$message}}</div>@enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Data Nasc.</label>
                                <input type="text" id="date" name="data_nasc" class="form-control" value="{!! date('d/m/Y',strtotime($cliente->data_nasc)) !!}">
                                @error('data_nasc') <div class="invalid-feedback d-block">{{$message}}</div>@enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="d-block">Sexo</label>
                                   <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="sexo" id="gender_male" value="Masculino" {!! $cliente->sexo == 'Masculino' ? ' checked ' : '' !!}>
                                      <label class="form-check-label" for="gender_male">
                                      Masculino
                                      </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="sexo" id="gender_female" value="Feminino" {!! $cliente->sexo == 'Feminino' ? ' checked ' : '' !!}>
                                      <label class="form-check-label" for="gender_female">
                                      Feminino
                                      </label>
                                   </div>
                                   @error('sexo') <div class="invalid-feedback d-block">{{$message}}</div>@enderror
                             </div>
                        </div>
                    </div>
                      <div class="form-group">
                         <label>Endereço</label>
                         <input type="text" name="endereco" class="form-control" value="{!! $cliente->endereco !!}">
                         @error('endereco') <div class="invalid-feedback d-block">{{$message}}</div>@enderror
                      </div>
                      @livewire('clientes.estados',['estado' => $cliente->estado, 'municipio' => $cliente->cidade])
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
        @livewireScripts

        <script>    
            jQuery(function($){
                Livewire.hook('message.sent', (message, component) => {
                    if(message.updateQueue[0].payload.name == 'estado'){
                        $('.select-cidades').html(`<option>Carregando...</option>`);
                    }
                })
            })
        </script>
    @stop
@stop