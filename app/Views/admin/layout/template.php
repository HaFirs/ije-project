<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link rel="stylesheet" href="<?= base_url('assets/admin/assets/css/bootstrap.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/admin/assets/vendors/chartjs/Chart.min.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/admin/assets/vendors/simple-datatables/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/assets/vendors/quill/quill.bubble.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/assets/vendors/quill/quill.snow.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/assets/css/app.css'); ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/ije/logos/ije-group.png'); ?>" type="image/x-icon">
</head>

<body>


    <?= $this->include('admin/layout/sidebar'); ?>
    <?= $this->include('admin/layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>


    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2020 &copy; Voler</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="http://ahmadsaugi.com">Ahmad Saugi</a></p>
            </div>
        </div>
    </footer>
    </div>
    </div>
    <script src="<?= base_url('assets/admin/assets/js/feather-icons/feather.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/assets/js/app.js'); ?>"></script>

    <script src="<?= base_url('assets/admin/assets/vendors/chartjs/Chart.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/assets/vendors/apexcharts/apexcharts.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/assets/js/pages/dashboard.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/assets/vendors/quill/quill.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/assets/js/pages/form-editor.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/assets/vendors/simple-datatables/simple-datatables.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/assets/js/vendors.js'); ?>"></script>

    <script src="<?= base_url('assets/admin/assets/js/main.js'); ?>"></script>
</body>

</html>