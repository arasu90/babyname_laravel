<!DOCTYPE html>
<html lang="en">
@include('admin/header')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('admin/menu')
        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('admin/topbar')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!-- End of Main Content -->
            @include('admin/footer')
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @include('admin/modalbox')
    @include('admin/jsscript')
</body>

</html>