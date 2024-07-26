@extends('index')
@section('content')
<section id="register">
    <div class="container padding-medium">
      <div class="row align-items-center">
        <div class="offset-md-1 col-md-5 ">
          <div>
            <h2 class="display-6 fw-semibold">We always welcome your suggestions</h2>
            <p class="text-secondary ">Send your suggest name with monther launage and english as well as.</p>
            @if (session('message'))
              <h4>{{ session('message') }}</h4>
            @endif
          </div>
        </div>
        <div class="col-md-5">
          <form action="/submitcontactus" method="post">
          @csrf
            <input type="text" name="name" placeholder="Your Name*" class="form-control bg-white border-0 rounded-4 shadow-none rounded-pill text-center px-4 py-3 w-100 mb-4"  />
            <input type="email" name="email" placeholder="Your email*" class="form-control bg-white border-0 rounded-4 shadow-none rounded-pill text-center px-4 py-3 w-100 mb-4"  />
            <textarea name="textval" class="form-control bg-white border-0 rounded-4 shadow-none rounded-pill text-center px-4 py-3 w-100 mb-4" placeholder="Wtire your suggestions...!"></textarea>

            <div class="d-grid">
              <button class="btn btn-primary px-5 py-3">Send Now</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>
  @endsection