@php 
    $pageTitle = $pageTitle ?? '-';
    $navs = $navs ?? [['title' => $pageTitle]];
@endphp

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