@extends('index')

@section("namebox")
<section id="features">
        <div class="feature-box container">
            <div class="row ">
                <div class="col-md-3 offset-md-3 col-sm-6 mb-5 mb-md-0">
                    <div class="feature-item py-2 rounded-4">
                        <a href="/babyname/boy">
                            <div class="feature-detail text-center">
                                <h2 class="feature-title">Boy Name</h2>
                                <h6 class="feature-info text-uppercase">{{$boyname_count}}+ Names</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-5 mb-md-0">
                    <div class="feature-item py-2 rounded-4">
                        <a href="/babyname/girl">
                            <div class="feature-detail text-center">
                                <h2 class="feature-title">Girl Name</h2>
                                <h6 class="feature-info text-uppercase">{{$girlname_count}}+ Names</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
<section id="category">
        <div class="container ">
            <div class="mt-4 d-md-flex justify-content-between align-items-center">
                <div>
                    <p class="text-secondary ">Pick your favourite Name</p>
                    <h2 class="display-6 fw-semibold">Popular Laungages</h2>
                </div>
                <div class="mt-4 mt-md-0">
                    <a href="/babyname/all" class="btn btn-primary px-5 py-3">View all Names</a>
                </div>
            </div>
            <div class="row g-md-3 mt-2">
                <div class="col-md-4">
                    <div class="primary rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#pencil-box" class="svg-primary" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">Tamil</p>
                                <p class="category-paragraph m-0">{{$ta_count}}+ Names</p>
                            </div>
                        </div>
                    </div>
                    <div class="tertiary rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#speakerphone" class="svg-tertiary" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">Telugu</p>
                                <p class="category-paragraph m-0">0+ Names</p>
                            </div>
                        </div>
                    </div>
                    <div class="secondary rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#handshake" class="svg-secondary" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">Kannada</p>
                                <p class="category-paragraph m-0">0+ Names</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gray rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#camera" class="svg-gray" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">English</p>
                                <p class="category-paragraph m-0">{{$en_count}}+ Names</p>
                            </div>
                        </div>
                    </div>
                    <div class="secondary rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#laptop" class="svg-secondary" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">Malayalam</p>
                                <p class="category-paragraph m-0">0+ Names</p>
                            </div>
                        </div>
                    </div>
                    <div class="tertiary rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#fitness" class="svg-tertiary" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">Hindi</p>
                                <p class="category-paragraph m-0">0+ Names</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tertiary rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#speakerphone" class="svg-tertiary" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">Hindu</p>
                                <p class="category-paragraph m-0">0+ Names</p>
                            </div>
                        </div>
                    </div>
                    <div class="primary rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#pencil-box" class="svg-primary" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">Musliem</p>
                                <p class="category-paragraph m-0">0+ Names</p>
                            </div>
                        </div>
                    </div>
                    <div class="gray rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#pencil-box" class="svg-gray" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">Chritian</p>
                                <p class="category-paragraph m-0">0+ Names</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection