@php
    $currentRoute = Route::currentRouteName();
@endphp

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
       <div id="sidebar-menu" class="sidebar-menu">
          <ul>
             <li class="menu-title"></li>
             <li class="{!! Route::currentRouteName() == 'home' ? 'active' : '' !!}">
                <a href="{!! route('home') !!}"><i class="fe fe-home"></i> <span>Home</span></a>
             </li>
             <li class="submenu">
                <a href="#"><i class="fe fe-users"></i> <span> Clientes</span> <span class="menu-arrow"></span></a>
                <ul style="display: none;">
                   <li><a href="{!! route('clientes') !!}" class="{{ in_array($currentRoute,['clientes','cliente']) ? 'active' : '' }}">Clientes</a></li>
                   <li><a href="{!! route('cadastrar-cliente') !!}" class="{{ $currentRoute == 'cadastrar-cliente' ? 'active' : '' }}">Cadastrar</a></li>
                </ul>
             </li>
          </ul>
       </div>
    </div>
 </div>