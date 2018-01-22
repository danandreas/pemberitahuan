    <!-- Load site level scripts -->

    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/enquire.min.js"></script> 									<!-- Load Enquire -->

    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/velocityjs/velocity.ui.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->

    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> 		<!-- Swith/Toggle Button -->

    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>     					<!-- iCheck -->

    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/application.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/demo/demo.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/demo/demo-switcher.js"></script>

    <!-- End loading site level scripts -->

    <!-- Load page level scripts-->

    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/demo/demo-datatables.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#gantibahasa').DataTable( {
                "language":
                {
                    "decimal":        "",
                    "emptyTable":     "Data masih kosong",
                    "info":           "Menampilkan _START_ sampai _END_ pada _TOTAL_ data",
                    "infoEmpty":      "Menampilkan 0 sampai 0 pada 0 data",
                    "infoFiltered":   "(filtered from _MAX_ total entries)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Menampilkan _MENU_ data",
                    "loadingRecords": "Menunggu...",
                    "processing":     "Sedang proses...",
                    "search":         "Cari",
                    "zeroRecords":    "No matching records found",
                    "paginate": {
                        "first":      "Pertama",
                        "last":       "Terakhir",
                        "next":       "Selanjutnya",
                        "previous":   "Sebelumnya"
                    },
                    "aria": {
                        "sortAscending":  ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                }
            } );
        } );
    </script>
    <!-- End loading page level scripts-->
