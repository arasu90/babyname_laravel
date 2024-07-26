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
            @foreach($nameList as $name)
            <div class="col-md-3 pt-1">
                <div class="{{  Arr::random(['gray','primary','secondary','tertiary']) }} rounded-3 p-2">
                    <div class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                            <use href="#pencil-box" class="svg-primary" />
                        </svg>
                        <div class="ps-2">
                            <p class="category-paragraph fw-bold text-uppercase mb-1">{{$name->name}}</p>
                            <p class="category-paragraph m-0">{{$name->tamil_name}}</p>
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
        <div class="d-flex justify-content-between py-5" style="overflow:auto">
            @for ($x = ord('a'); $x <= ord('z'); $x++) 
                <a href="{{ url('/babyname/')}}/{{$gender}}/{{chr($x)}}" class="btn btn-outline-primary m-1 {{ (chr($x)==$start_letter) ? 'active activename' : ''  }} ">{{ chr($x)  }}</a>
            @endfor
        </div>
    </div>
</div>
@endsection