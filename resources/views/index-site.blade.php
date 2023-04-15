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
                         <a href="#" class="count-title">Total de Clientes</a>
                         <a href="#" class="count"> 10,320</a>
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
                      <i class="fe fe-phone"></i>
                      </span>
                      <div class="dash-count">
                         <a href="#" class="count-title">Call Duration</a>
                         <a href="#" class="count"> 14,628</a>
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
                      <i class="fe fe-comments"></i>
                      </span>
                      <div class="dash-count">
                         <a href="#" class="count-title">Chat Count</a>
                         <a href="#" class="count"> 2,980</a>
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
                      <input type="text" class="form-control" placeholder="Search">
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
                            <tr>
                               <td class="text-nowrap">
                                  <div class="font-weight-600">001</div>
                               </td>
                               <td>Scott Albright</td>
                               <td>20 Jan 2019</td>
                               <td class="text-end">
                                  <div class="font-weight-600 text-danger">Inactive</div>
                               </td>
                            </tr>
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