

<?php $__env->startSection('title', 'Detail Guru'); ?>

<?php $__env->startSection('content'); ?>
    <table class="table">
        <tr>
            <th width="150px">NIP</th>
            <th width="30px">:</th>
            <th><?php echo e($guru->nip); ?></th>
        </tr>
        <tr>
            <th width="150px">Nama Guru</th>
            <th width="30px">:</th>
            <th><?php echo e($guru->nama_guru); ?></th>
        </tr>
        <tr>
            <th width="150px">Mata Pelajaran</th>
            <th width="30px">:</th>
            <th><?php echo e($guru->mapel); ?></th>
        </tr>
        <tr>
            <th width="150px">Foto</th>
            <th width="30px">:</th>
            <th><img src="<?php echo e(url('img/' . $guru->foto_guru)); ?>" width="200px" alt=""></th>
        </tr>
        <tr>
            <th><a href="/guru" class="btn btn-success btn-sm">Kembali</a></th>
        </tr>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar-laravel8\resources\views/v_detailguru.blade.php ENDPATH**/ ?>