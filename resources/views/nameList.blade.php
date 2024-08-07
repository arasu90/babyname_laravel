@extends('index', ['title'=> $title])
@section('content')
<section id="category">
    <div class="container ">
        <div class="mt-4 d-md-flex justify-content-between align-items-center">
            <div>
                <h3>{{$start_letter}} Starting Letter {{$gender}} Baby Name List</h3>
            </div>
        </div>
        <div class="row g-md-3 mt-2">
            @foreach($nameList as $key=>$name)
            @php
            
            $namesss = mb_substr($name->tamil_name,0,2);
            @endphp
            @if($nameList == mb_substr($name,0,2))
            <div>
                <h3>{{$start_letter}} Starting Letter {{ $namesss }} Baby Name List</h3>
            </div>
            @endif
            <div class="col-md-3 pt-1">
                <div class="{{  Arr::random(['gray','primary','secondary','tertiary']) }} rounded-3 p-2">
                    <div class="d-flex align-items-center">
                        @if($name->gender == 'M')
                       <img src="{{asset('images/icons8-boy-48.png')}}">
                       @else
                       <img src="{{asset('images/icons8-girl-48.png')}}">
                       @endif
                        <div class="ps-2">
                            @if($nametype == 'ta')
                            <p class="category-paragraph fw-bold text-uppercase mb-1">{{$name->tamil_name}}</p>
                            <p class="category-paragraph m-0">{{$name->name}}</p>
                            @else
                            <p class="category-paragraph fw-bold text-uppercase mb-1">{{$name->name}}</p>
                            <p class="category-paragraph m-0">{{$name->tamil_name}}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@section('name_start')
<div class="row justify-content-center">
    <div class="col-auto">
        <div class="d-flex justify-content-between py-1" style="overflow:auto">
            @foreach($en_letters as $letters)
                <a href="{{ url('/babyname/')}}/{{$gender}}/{{$letters->nameletter}}" class="btn btn-outline-primary m-1 {{ ($letters->nameletter==$start_letter) ? 'active activename' : ''  }} ">{{ $letters->nameletter  }}</a>
            @endforeach
        </div>
        <div class="d-flex justify-content-between py-1" style="overflow:auto">
            @foreach($ta_letters as $letters)
                <a href="{{ url('/babyname/')}}/{{$gender}}/{{$letters->nameletter}}" class="btn btn-outline-primary m-1 {{ ($letters->nameletter==$start_letter) ? 'active activename' : ''  }} ">{{ $letters->nameletter  }}</a>
            @endforeach
        </div>
    </div>
</div>
@endsection