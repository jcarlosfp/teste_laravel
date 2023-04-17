<div class="header">
    <div class="header-left">
       <a href="{!! route('home') !!}" class="logo">
       <img src="{!! asset('assets/img/logoPng.png') !!}" alt="Logo">
       </a>
       <a href="{!! route('home') !!}" class="logo logo-small">
       <img src="{!! asset('assets/img/logo-small.png')!!}" alt="Logo" width="30" height="30">
       </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn">
    <i class="fe fe-text-align-left"></i>
    </a>

    @if(!in_array(Route::currentRouteName(),['clientes']))
    <div class="top-nav-search">
       <form action="{!! route('clientes') !!}" method="get">
          <input type="text" class="form-control" name="pesquisar" value="" placeholder="Pesquisar clientes">
          <button class="btn" type="submit"><i class="fa fa-search"></i></button>
       </form>
    </div>
    @endif
    <a class="mobile_btn" id="mobile_btn">
    <i class="fa fa-bars"></i>
    </a>
    <ul class="nav user-menu">
       <li class="nav-item dropdown has-arrow">
          <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
          <span class="user-img"><img class="rounded-circle" src="{!! asset('assets/img/profiles/avatar_masculino.jpg') !!}" width="31" alt="Seema Sisty"></span>
          </a>
          <div class="dropdown-menu">
             <div class="user-header">
                <div class="avatar avatar-sm">
                   <img src="{!! asset('assets/img/profiles/avatar_masculino.jpg') !!}" alt="User Image" class="avatar-img rounded-circle">
                </div>
                <div class="user-text">
                   <h6>José Carlos</h6>
                   <p class="text-muted mb-0">Administrador</p>
                </div>
             </div>
             <a class="dropdown-item" href="mailto:jcarloswk@gmail.com" target="_blank">Meu E-mail</a>
             <a class="dropdown-item" href="https://api.whatsapp.com/send?phone=5561996059565&text=Olá, José Carlos!" target="_blank">Meu Whatsapp</a>
             <a class="dropdown-item" href="#">Sair</a>
          </div>
       </li>
    </ul>
 </div>