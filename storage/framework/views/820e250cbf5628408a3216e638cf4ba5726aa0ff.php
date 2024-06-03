

<?php $__env->startSection('title', 'Siswa'); ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Mapel</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>
            <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e($data->nisn); ?></td>
                    <td><?php echo e($data->nama_siswa); ?></td>
                    <td><?php echo e($data->kelas); ?></td>
                    <td><?php echo e($data->mapel); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bab5-18\resources\views/v_siswa.blade.php ENDPATH**/ ?>