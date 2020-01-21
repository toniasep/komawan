  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script src="<?=base_url().'assets/'?>vendor/datatables/jquery.dataTables.js"></script>
<script src="<?=base_url().'assets/'?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url().'assets/'?>vendor/datatables/dataTables.buttons.min.js"></script>
<script src="<?=base_url().'assets/'?>vendor/datatables/jszip.min.js"></script>
<script src="<?=base_url().'assets/'?>vendor/datatables/pdfmake.min.js"></script>
<script src="<?=base_url().'assets/'?>vendor/datatables/vfs_fonts.js"></script>
<script src="<?=base_url().'assets/'?>vendor/datatables/buttons.html5.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?=base_url().'assets/'?>js/demo/datatables-demo.js"></script>

<script>
  $(document).ready(function() {
      // Setup - add a text input to each footer cell
      $('#tabel thead tr').clone(true).appendTo( '#tabel thead' );
      $('#tabel thead tr:eq(1) th').each( function (i) {
          var title = $(this).text();
          $(this).html( '<input type="text" placeholder=" Cari '+title+'" />' );
   
          $( 'input', this ).on( 'keyup change', function () {
              if ( table.column(i).search() !== this.value ) {
                  table
                      .column(i)
                      .search( this.value )
                      .draw();
              }
          } );
      } );
   
      var table = $('#tabel').DataTable( {
          orderCellsTop: true,
          fixedHeader: true,
          dom: 'Bfrtip',
          buttons: [
              'copyHtml5',
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'
          ]
      } );
  } );
</script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url(); ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=base_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url(); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url(); ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?=base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url(); ?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url(); ?>assets/dist/js/demo.js"></script>
<script src="<?=base_url().'assets/'?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?=base_url().'assets/'?>vendor/jquery-easing/jquery.easing.min.js"></script>

</body>
</html>
