<script src="<?= base_url('assets/admin/')?>assets/js/jquery-3.6.0.min.js"></script>

<script src="<?= base_url('assets/admin/')?>assets/js/feather.min.js"></script>

<script src="<?= base_url('assets/admin/')?>assets/js/jquery.slimscroll.min.js"></script>

<script src="<?= base_url('assets/admin/')?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/admin/')?>assets/js/dataTables.bootstrap4.min.js"></script>

<script src="<?= base_url('assets/admin/')?>assets/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url('assets/admin/')?>assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="<?= base_url('assets/admin/')?>assets/plugins/apexchart/chart-data.js"></script>

<script src="<?= base_url('assets/admin/')?>assets/js/script.js"></script>
<script>$('#menghilang').delay('slow').slideDown('slow').delay(1000).slideUp(600);</script>
<script>
    $(document).ready(function() {
        // When the user clicks the button to view photo, show the modal
        $('.view-photo-button').on('click', function() {
            var targetModal = $(this).data('target');
            $(targetModal).modal('show');
        });

        // When the user clicks the close button, hide the modal
        $('.close, .btn-secondary').on('click', function() {
            var modal = $(this).closest('.modal');
            modal.modal('hide');
        });
    });
</script>