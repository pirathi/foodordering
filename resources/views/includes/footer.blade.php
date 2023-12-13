<style>
    @media(max-width: 575px) {
      div.dataTables_wrapper div.dataTables_paginate ul.pagination {
          justify-content: center;
          flex-wrap: wrap;
      }
   
  
  }
  </style>
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0-rc
    </div>
  </footer>
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  
  <!-- jQuery -->
  <script src="{{ URL::asset('AdminLTE-master/plugins/jquery/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ URL::asset('AdminLTE-master/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
  $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ URL::asset('AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- ChartJS -->
  <script src="{{ URL::asset('AdminLTE-master/plugins/chart.js/Chart.min.js') }}"></script>
  <!-- Sparkline -->
  <script src="{{ URL::asset('AdminLTE-master/plugins/sparklines/sparkline.js') }}"></script>
  <!-- JQVMap -->
  <script src="{{ URL::asset('AdminLTE-master/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
  <script src="{{ URL::asset('AdminLTE-master/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ URL::asset('AdminLTE-master/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
  <!-- daterangepicker -->
  <script src="{{ URL::asset('AdminLTE-master/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ URL::asset('AdminLTE-master/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ URL::asset('AdminLTE-master/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
  <!-- Summernote -->
  <script src="{{ URL::asset('AdminLTE-master/plugins/summernote/summernote-bs4.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ URL::asset('AdminLTE-master/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ URL::asset('AdminLTE-master/dist/js/adminlte.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ URL::asset('AdminLTE-master/dist/js/pages/dashboard.js') }}"></script>
  </body>
  </html>