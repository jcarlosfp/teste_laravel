@extends('layouts.main')
@section('title','Página Principal')

@section('main')
<div class="page-wrapper">
    <div class="content container-fluid">
       <div class="row">
          <div class="col-xl-4 col-sm-4 col-12">
             <div class="card">
                <div class="card-body">
                   <div class="dash-widget-header">
                      <span class="dash-widget-icon bg-primary">
                      <i class="fe fe-users"></i>
                      </span>
                      <div class="dash-count">
                         <a href="{!! route('clientes') !!}" class="count-title">Total de Clientes</a>
                         <a href="{!! route('clientes') !!}" class="count"> {!! $totalClientes !!}</a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-4 col-sm-4 col-12">
             <div class="card">
                <div class="card-body">
                   <div class="dash-widget-header">
                      <span class="dash-widget-icon bg-warning">
                      <span class="user-img"><img class="rounded-circle" src="{!! asset('assets/img/profiles/avatar_masculino.jpg') !!}" width="31" alt="Seema Sisty"></span>
                      </span>
                      <div class="dash-count">
                         <a href="{!! route('clientes') !!}?pesquisar=Masculino" class="count-title">Total Masculino</a>
                         <a href="{!! route('clientes') !!}?pesquisar=Masculino" class="count"> {!! $totalHomens !!}</a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-4 col-sm-4 col-12">
             <div class="card">
                <div class="card-body">
                   <div class="dash-widget-header">
                      <span class="dash-widget-icon bg-danger">
                        <span class="user-img"><img class="rounded-circle" src="{!! asset('assets/img/profiles/avatar_feminino.jpg') !!}" width="31" alt="Seema Sisty"></span>
                      </span>
                      <div class="dash-count">
                         <a href="{!! route('clientes') !!}?pesquisar=Feminino" class="count-title">Total Feminino</a>
                         <a href="{!! route('clientes') !!}?pesquisar=Feminino" class="count"> {!! $totalMulheres !!}</a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-12 d-flex">
             <div class="card card-table flex-fill">
                <div class="card-header">
                   <h4 class="card-title float-start">Últimos Cadastros</h4>
                   <div class="table-search float-end">
                     <form action="{!! route('clientes') !!}" method="get">
                        <input type="text" class="form-control" name="pesquisar" placeholder="Pesquisar">
                     </form>
                      <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                   </div>
                </div>
                <div class="card-body">
                   <div class="table-responsive no-radius">
                      <table class="table table-hover table-center">
                         <thead>
                            <tr>
                               <th>Nome</th>
                               <th>Data de Nasc.</th>
                               <th>Estado</th>
                               <th class="text-end">Sexo</th>
                            </tr>
                         </thead>
                         <tbody>
                           @foreach($clientes as $cliente)
                            <tr>
                               <td class="text-nowrap">
                                  <div class="font-weight-600">{!!$cliente->nome!!}</div>
                               </td>
                               <td>{!! date('d/m/Y',strtotime($cliente->data_nasc)) !!}</td>
                               <td>{!! $cliente->estado !!}</td>
                               <td class="text-end">
                                  <div class="font-weight-600">{!!$cliente->sexo!!}</div>
                               </td>
                            </tr>
                            @endforeach
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@stop