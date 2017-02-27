<?php $__env->startSection('title'); ?>
Halaman Tidak Ditemukan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            404 Halaman Tidak Ditemukan
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="error-page">
            <h2 class="headline text-yellow">
                404
            </h2>
            <div class="error-content">
                <h3>
                    <i class="fa fa-warning text-yellow">
                    </i>
                    Oops! Halaman Tidak Ditemukan.
                </h3>
                <p>
                    Kami tidak dapat menemukan halaman yang Anda cari.
                    Sementara itu, Anda dapat kembali ke
                    <a href="<?php echo e(route('admin.dashboard')); ?>">
                        dashboard
                    </a>
                    atau mencoba menggunakan form pencarian.
                </p>
            </div>
            <!-- /.error-content -->
        </div>
        <!-- /.error-page -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>