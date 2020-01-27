<!-- Main Footer -->
<footer class="main-footer">
  <!-- To the right -->
  <div class="float-right d-none d-sm-inline">
    Anything you want
  </div>
  <!-- Default to the left -->
  <strong>Copyright &copy; 2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url() ?>plugins/toastr/toastr.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?= base_url() ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url() ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>dist/js/adminlte.min.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url() ?>dist/js/demo.js"></script>

<!-- ChartJS -->
<script src="<?= base_url() ?>plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="<?= base_url() ?>dist/js/pages/dashboard2.js"></script>
<script src="<?= base_url() ?>dist/js/ajax/<?= $uri_ajax ?>.js"></script>


<script>
  $(function() {
    $('#example1').DataTable();
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    bsCustomFileInput.init();

    create("<?= base_url() ?>", "<?= $uri_ajax ?>");

    read("<?= base_url() ?>", "<?= $uri_ajax ?>");

    action("<?= base_url() ?>");

    update("<?= base_url() ?>", "<?= $uri_ajax ?>");

    drop("<?= base_url() ?>", "<?= $uri_ajax ?>");
  });
</script>
</body>

</html>