<!-- Content -->
<div class="layout-content" data-scrollable>
    <div class="container-fluid">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li><a href="./">iControl</a></li>
            <li class="active">Liste des entreprises</li>
        </ol>
        <!-- // END Breadcrumb -->

        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Liste des entreprises</h5>
            </div>
            <?php
            echo $entreprises->messages();
            echo $entreprises->afficherTableau();
            ?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="assets/vendor/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/tether.min.js"></script>
<script src="assets/vendor/bootstrap.min.js"></script>

<!-- Simplebar.js -->
<script src="assets/vendor/simplebar.min.js"></script>

<!-- Bootstrap Layout -->
<script src="assets/vendor/bootstrap-layout.js"></script>

<!-- Bootstrap Layout Scrollable Extension JS -->
<script src="assets/vendor/bootstrap-layout-scrollable.js"></script>

<!-- Vendor JS -->
<script src="assets/vendor/jquery.dataTables.js"></script>
<script src="assets/vendor/dataTables.bootstrap.js"></script>

<!-- Initialize -->
<script type="text/javascript">
    $(document).ready( function () {
        $('#users').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
            },
            "pageLength": 25
        });
    } );
</script>
</body>

</html>