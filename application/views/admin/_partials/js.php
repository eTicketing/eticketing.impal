<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>
<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js') ?>"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>
<!-- Demo scripts for this page-->
<script src="<?php echo base_url('js/demo/datatables-demo.js') ?>"></script>
<script src="<?php echo base_url('js/demo/chart-area-demo.js') ?>"></script>
<script>
    function logoutConfirm(url){
        $('#btn-logout').attr('href', url);
        $('#logoutModal').modal();
    }
    function beliConfirm(url){
        var val1 = document.getElementById("valSatu").value;
        var val2 = document.getElementById("valDua").value;
        var hasil = val1*val2;
        $('#exampleModalLabelBeli').html("Yakin ingin membeli "+val1+" tiket?");
        $('#hasilnya').html("Total Harga : "+hasil);
        $('#hasilnyaaa').html("Total Harga : "+hasil);
        $('#btn-beli').attr('href', url);
        $('#beliModal').modal();
    }
</script>