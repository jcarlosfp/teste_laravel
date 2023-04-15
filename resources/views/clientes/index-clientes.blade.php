@extends('layouts.main')
@section('title','Clientes')

@section('main')
<div class="page-wrapper">
    <div class="content container-fluid">
       <div class="page-header">
          <div class="row align-items-center">
             <div class="col">
                @include('clientes._partials.breadcrumb',['pageTitle' => 'Clientes'])
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-12 d-flex">
             <div class="card card-table flex-fill">
                <div class="card-body">
                   <div class="table-responsive">
                      <table class="table table-hover table-center mb-0 no-footer">
                         <thead>
                            <tr>
                               <th>Nome</th>
                               <th>CPF</th>
                               <th>Data Nasc.</th>
                               <th>Estado</th>
                               <th>Cidade</th>
                               <th>Sexo</th>
                               <th class="text-end"></th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                               <td>
                                  <h2 class="table-avatar">
                                     {{--<a href="general.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-03.jpg" alt="User Image"></a>--}}
                                     <a href="{!! route('clientes') !!}/fe">Teste</a>
                                  </h2>
                               </td>
                               <td>01 Oct 2019</td>
                               <td>01.00 PM</td>
                               <td>03.54 PM</td>
                               <td>11.00 PM</td>
                               <td>M</td>
                               <td class="text-end">
                                  <div class="actions">
                                     <a href="{!! route('clientes') !!}/fe" class="btn btn-sm bg-success-light me-2">
                                     <i class="fe fe-pencil"></i>
                                     </a>
                                     <a href="#" class="btn btn-sm bg-danger-light">
                                     <i class="fe fe-trash"></i>
                                     </a>
                                  </div>
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