@include('include/header')
<body>
   
    @include('include/navbar')
    @if(!request()->is('contactus'))
    @include('searchbar')
    @endif
    @yield('namebox')
    @yield('content')
@include('include/footer')
</body>
</html>
