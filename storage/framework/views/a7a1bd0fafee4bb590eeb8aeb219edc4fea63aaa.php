<?php echo Form::hidden('iduser', isset($users->id) ? $users->id : '', ['class' => 'form-control', 'id' => 'iduser']); ?>

<div class="form-group">
    <label>
        Nama Lengkap
    </label>
    <?php echo Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan Nama Lengkap']); ?>

</div>
<div class="form-group">
    <label>
        Email
    </label>
    <?php echo Form::email('emailuser', isset($users->email) ? $users->email : '', ['class' => 'form-control', 'required', 'maxlength' => '50', 'placeholder' => 'Masukkan Email', 'id' => 'emailuser']); ?>

</div>
<?php if(empty($users->password)): ?>
    <div class="form-group">
        <label>
            Password
        </label>
        <?php echo Form::password('password', ['class' => 'form-control','id' => 'password', 'maxlength' => '20', 'required', 'placeholder' => 'Masukkan Password']); ?>

    </div>
    <div class="form-group">
        <label>
            Password Konfirmasi
        </label>
        <?php echo Form::password('password_confirmation', ['class' => 'form-control', 'maxlength' => '20', 'required', 'placeholder' => 'Masukkan assword Konfirmasi']); ?>

    </div>
<?php else: ?>
    <div class="form-group">
        <label>
            Password
        </label>
        <?php echo Form::password('password', ['class' => 'form-control','id' => 'password', 'maxlength' => '20', 'placeholder' => 'Masukkan Password']); ?>

    </div>
    <div class="form-group">
        <label>
            Password Konfirmasi
        </label>
        <?php echo Form::password('password_confirmation', ['class' => 'form-control', 'maxlength' => '20', 'placeholder' => 'Masukkan Password Konfirmasi']); ?>

    </div>
<?php endif; ?>
<button class="btn btn-primary">
    Simpan
</button>
