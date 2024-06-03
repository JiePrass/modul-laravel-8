

<?php $__env->startSection('title', 'Koperasi'); ?>

<?php $__env->startSection('content'); ?>
    <a href="/koperasi/print" target="_blank" class="btn btn-primary">Print to Printer</a>
    <a href="/koperasi/printpdf" target="_blank" class="btn btn-success">Print to PDF</a>

    <h1>DATA PENJUALAN KOPERASI</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>NO FAKTUR</th>
                <th>PELANGGAN</th>
                <th>TANGGAL</th>
                <th>TOTAL</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>
            <?php $__currentLoopData = $koperasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e($data->no_faktur); ?></td>
                    <td><?php echo e($data->pelanggan); ?></td>
                    <td><?php echo e($data->tanggal); ?></td>
                    <td><?php echo e($data->total); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bab5-18\resources\views/v_koperasi.blade.php ENDPATH**/ ?>