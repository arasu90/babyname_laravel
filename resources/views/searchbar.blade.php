<section id="hero" style="background-image:url('{{asset('/images/billboard-bg.png')}}'); background-repeat: no-repeat; height:400px">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pe-5 mt-5 mt-md-0">
                <h2 class="display-1 text-uppercase">Find Your Baby Name</h2>
                <p class="fs-4 my-4 pb-2">Search for the perfect boys and girls names</p>
                <div>
                    <form action="/searchname" method="get" class="d-flex position-relative ">
                        <input type="text" name="name_start" placeholder="Type name starting letters minimum 2 char" class="form-control bg-white border-0 rounded-4 shadow-none px-4 py-3 w-100" minlength="2" required title="2 characters minimum">
                        <button class="btn btn-primary rounded-4 px-3 py-2 position-absolute align-items-center m-1 end-0"><svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                                <use href="#search" />
                            </svg></button>
                    </form>

                </div>
                @yield('name_start')
            </div>
        </div>

    </div>

</section>