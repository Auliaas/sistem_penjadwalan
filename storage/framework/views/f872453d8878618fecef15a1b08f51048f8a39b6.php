<?php echo Form::hidden('idlecturer', isset($lecturers->id) ? $lecturers->id : '', ['class' => 'form-control', 'id' => 'idlecturer']); ?>

<div class="form-group">
    <label>
        Kode Dosen
    </label>
    <?php echo Form::text('code_lecturers', null, ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan Kode Dosen']); ?>

</div>
<div class="form-group">
    <label>
        Nidn
    </label>
    <?php echo Form::text('nidnlecturer', isset($lecturers->nidn) ? $lecturers->nidn : '',  ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan NIDN ', 'id' => 'nidnlecturer']); ?>

</div>
<div class="form-group">
    <label>
        Nama
    </label>
    <?php echo Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan Nama ']); ?>

</div>
<div class="form-group">
    <label>
        Email
    </label>
    <?php echo Form::text('emaillecturer', isset($lecturers->email) ? $lecturers->email : '' , ['class' => 'form-control EmailFormat', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan Email', 'id' => 'emaillecturer']); ?>

</div>
<button class="btn btn-primary">
    Simpan
</button>
