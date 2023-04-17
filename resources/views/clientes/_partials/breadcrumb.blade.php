@php 
    $pageTitle = $pageTitle ?? '-';
    $navs = $navs ?? [['title' => $pageTitle]];
@endphp

<div class="page-header">
    <div class="row align-items-center">
       <div class="col">
            <h3 class="page-title">{{ $pageTitle ?? '-' }}</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>

                @foreach($navs as $k=> $nav)
                    <li class="breadcrumb-item {{-- $nav['title'] == $pageTitle ? ' active' : '' --}}">
                        @if(!empty($nav['route']))
                            <a href="{!! $nav['route'] !!}">{!! $nav['title']!!}</a>
                        @else
                            {!! $nav['title'] !!}
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@if(session('mensagens'))
<div class="alert alert-{{session('mensagens')['type']}} alert-dismissible fade show" role="alert">
    <strong>{{session('title')}}</strong> {{session('mensagens')['msg']}}
    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
</div>
@endif