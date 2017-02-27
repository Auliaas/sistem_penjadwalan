<?php $__env->startSection('title'); ?>
<?php echo e($title= 'Waktu Berhalangan'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<style type="text/css">
.panel-body{
       width:auto;
       height:auto;
       overflow-x:auto;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            <?php echo e($title); ?>

                        </h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" type="button">
                                <i class="fa fa-minus">
                                </i>
                            </button>
                            <button class="btn btn-box-tool" data-widget="remove" type="button">
                                <i class="fa fa-times">
                                </i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <?php echo Form::open(['role' => 'form', 'route' => 'admin.timenotavailables', 'method' =>'get']); ?>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::text('searchlecturers', Input::get('searchlecturers')?: null, ['class' => 'form-control', 'placeholder' => 'Mencari Berdasarkan Nama Dosen']); ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::text('searchday', Input::get('searchday')?: null, ['class' => 'form-control', 'placeholder' => 'Mencari Berdasarkan Hari']); ?>

                                </div>
                            </div>
                            <div class="col-md-12" style="padding-bottom: 15px;">
                                <?php echo Form::submit('Search',['class'=>'btn btn-default btn-block']); ?>

                            </div>
                            <div class="col-md-12">
                            <?php echo Form::close(); ?>

                            <div class="panel-body table-responsive">
                            <?php echo $__env->make('admin._partials.notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr class="info">
                                            <th style="text-align:center;">
                                                No.
                                            </th>
                                            <th style="text-align:center;">
                                                Dosen
                                            </th>
                                            <th style="text-align:center;">
                                                Hari
                                            </th>
                                            <th style="text-align:center;">
                                                Waktu
                                            </th>
                                           <th colspan="2" style="text-align:center;">
                                                <a class="btn btn-primary" href="<?php echo e(route('admin.timenotavailable.create')); ?>">
                                                    <i class="fa fa-plus">
                                                    </i>
                                                    Tambah Data
                                                </a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php $__currentLoopData = $timenotavailables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $timenotavailable): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <tr>
                                            <td align="center">
                                                <?php echo e(($timenotavailables->currentpage()-1) * $timenotavailables->perpage() + $key + 1); ?>

                                            </td>
                                            <td>
                                                <?php echo e(isset($timenotavailable->lecturer->name) ? $timenotavailable->lecturer->name : ''); ?>

                                            </td>
                                            <td>
                                                <?php echo e(isset($timenotavailable->day->name_day) ? $timenotavailable->day->name_day : ''); ?>

                                            </td>
                                            <td>
                                                <?php echo e(isset($timenotavailable->time->range) ? $timenotavailable->time->range : ''); ?>

                                            </td>
                                           <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-warning btn-sm" href="<?php echo e(route('admin.timenotavailable.edit', $timenotavailable->id)); ?>">
                                                        <span class="glyphicon glyphicon-edit">
                                                        </span>
                                                        Ubah
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <?php echo Form::model($timenotavailable, ['route' => ['admin.timenotavailable.delete', $timenotavailable->id], 'onclick' => 'return confirm("Anda Yakin?");']); ?>

                                                    <?php echo Form::hidden('_method', 'DELETE'); ?>

                                                    <?php echo Form::button('
                                                    <span class="glyphicon glyphicon-trash">
                                                    </span>
                                                    Hapus', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm']); ?>

                                                <?php echo Form::close(); ?>

                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    </tbody>
                                </table>
                                <?php echo $timenotavailables->appends(Input::all())->render(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>