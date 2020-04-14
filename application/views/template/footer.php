<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Arsip_Digital_Web 2019</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout Aplikasi</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah anda yakin ingin keluar ?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.3.4.1.min.js"></script>
<!-- datatables boostrap -->
<script src="<?= base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/js/datatables-demo.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>

<script>
    // untuk menampilkan label yang tidak ada di input file di bootsrap
    $(function() {
        $('.hapusModal').on('click', function() {
            const id = $(this).data('id');
            console.log(id);
            var href = '<?= base_url(); ?>admin/hapus_doc_keluar/' + id;
            console.log(href);
            $('#btn-yes').attr('href', href);
        });
        $('.hapusModalMasuk').on('click', function() {
            const id = $(this).data('id');
            console.log(id);
            var href = '<?= base_url(); ?>admin/hapus_doc_masuk/' + id;
            console.log(href);
            $('#btn-yes').attr('href', href);
        });
        $('.hapusModalKateg').on('click', function() {
            const id = $(this).data('id');
            console.log(id);
            var href = '<?= base_url(); ?>admin/hapus_kategori/' + id;
            console.log(href);
            $('#btn-yes').attr('href', href);
        });
    });

    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    //datepicker boostrap
    $(function() {
        $(".datepicker").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
    });
</script>
</body>

</html>