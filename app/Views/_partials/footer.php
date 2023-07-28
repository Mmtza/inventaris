<aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>

<footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
        Sistem Inventaris
    </div>
    <strong>Copyright &copy; 2023 <a href="<?php echo base_url('/'); ?>">Sistem Inventaris - Batik Aira</a>.</strong>
    All rights reserved.
</footer>
</div>

<script src="<?php echo base_url('themes/plugins'); ?>/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('themes/plugins'); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('themes/dist'); ?>/js/adminlte.min.js"></script>

<!-- Datatables -->
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function () {
        $('#myTable').DataTable(
            {
                // dom: 'fltip'
            }
        );
    });
</script>
</body>

</html>