@include('layouts/head')

        <!-- Sidebar -->
        @include('layouts/sidebar')
      
        <!-- End of Sidebar -->
          <!-- Content Wrapper -->
          <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
            
                <!-- Topbar -->
                @include('layouts/topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @include('layouts/dashboard-graphs',['totalshale'=>$shaleArray])

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('layouts/footer')
</body>

</html>