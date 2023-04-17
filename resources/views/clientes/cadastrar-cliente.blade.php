@extends('layouts.main')
@section('title','Clientes')

@section('main')
<div class="page-wrapper">
    <div class="content container-fluid">
       <div class="page-header">
          <div class="row align-items-center">
             <div class="col">
                @include('clientes._partials.breadcrumb',['pageTitle'=> 'Cadastrar Cliente', 'navs' => 
                        [
                            [   
                                'title' => 'Cadastrar Cliente'
                            ]
                        ]
                    ]
                )
             </div>
          </div>
       </div>
       <div class="row settings-tab">
          <div class="col-md-12">
             <div class="card">
                <div class="card-header">
                   <h4 class="card-title">Formulário de Cadastro</h4>
                </div>
                <div class="card-body">
                   <form action="{!! route('inserir-dados') !!}" method="post">
                    @csrf
                      <div class="form-group">
                         <label>Nome</label>
                         <input type="text" name="nome" class="form-control" value="{{old('nome')}}">
                         @error('nome') <div class="invalid-feedback d-block">{{$message}}</div>@enderror
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>CPF</label>
                                <input type="text" id="cpf" name="cpf" class="form-control" value="{{old('cpf')}}" autocomplete="off">
                                @error('cpf') <div class="invalid-feedback d-block">{{$message}}</div>@enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Data Nasc.</label>
                                <input type="text"name="data_nasc" id="date" class="form-control" value="{{old('data_nasc')}}">
                                @error('data_nasc') <div class="invalid-feedback d-block">{{$message}}</div>@enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="d-block">Sexo</label>
                                   <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="sexo" id="gender_male" value="Masculino" {{(old('sexo') == 'Masculino') ? 'checked' : ''}}>
                                      <label class="form-check-label" for="gender_male">
                                       
                                      Masculino
                                      </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="sexo" id="gender_female" value="Feminino" {{(old('sexo') == 'Feminino') ? 'checked' : ''}}>
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
                         <input type="text" name="endereco" class="form-control" value="{!! old('endereco')!!}">
                         @error('endereco') <div class="invalid-feedback d-block">{{$message}}</div>@enderror
                      </div>
                      @livewire('clientes.estados')
                      <div class="text-end">
                         <button type="submit" class="btn btn-primary">Cadastrar</button>
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