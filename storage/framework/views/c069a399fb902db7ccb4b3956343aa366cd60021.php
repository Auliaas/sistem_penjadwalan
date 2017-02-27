<table class="table table-bordered table-striped">
    <thead>
        <tr class="info">
            <th style="text-align:center;">
                No.
            </th>
            <th style="text-align:center;">
                Hari
            </th>
            <th style="text-align:center;">
                Jam
            </th>
            <th style="text-align:center;">
                Nama Ruangan
            </th>
            <th style="text-align:center;">
                Kapasitas Ruangan
            </th>
            <th style="text-align:center;">
                Mata Kuliah
            </th>
            <th style="text-align:center;">
                Dosen Pengampu
            </th>
            <th style="text-align:center;">
                Semester
            </th>
            <th style="text-align:center;">
                SKS
            </th>
            <th style="text-align:center;">
                Kelas
            </th>
            <th style="text-align:center;">
                Nilai
            </th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $schedule): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td align="center">
                <?php echo e($key + 1); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->day->name_day) ? $schedule->day->name_day : ''); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->time->range) ? $schedule->time->range : ''); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->room->name) ? $schedule->room->name : ''); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->room->capacity) ? $schedule->room->capacity : ''); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->teach->course->name) ? $schedule->teach->course->name : ''); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->teach->lecturer->name) ? $schedule->teach->lecturer->name : ''); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->teach->course->semester) ? $schedule->teach->course->semester : ''); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->teach->course->sks) ? $schedule->teach->course->sks : ''); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->teach->class_room) ? $schedule->teach->class_room : ''); ?>

            </td>
            <td >
                <?php echo e(isset($schedule->value) ? $schedule->value : ''); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>
