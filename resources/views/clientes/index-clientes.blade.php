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
               <div class="card-header">
                  <h4 class="card-title float-start">Últimos Cadastros</h4>
                  <div class="table-search float-end">
                     <form action="" method="get">
                        <input type="text" class="form-control" value="{{Request::input('pesquisar')}}" name="pesquisar" placeholder="Pesquisar">
                        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                     </form>
                  </div>
               </div>
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
                           @livewire('clientes.list-clientes')
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div><div class="col-md-12 d-flex justify-content-center">{{$clientes->appends(Request::except('page'))->links('layouts._partials.pagination')}}</div>
    </div>
    
 </div>

   @section('scripts')
      @livewireScripts
      <script>    
         /*jQuery(function($){
               Livewire.hook('message.sent', (message, component) => {
                  alert('puxa')
                  return false;
                  if(message.updateQueue[0].payload.name == 'estado'){
                     $('.select-cidades').html(`<option>Carregando...</option>`);
                  }
               })
         })*/
      </script>
   @stop
@stop