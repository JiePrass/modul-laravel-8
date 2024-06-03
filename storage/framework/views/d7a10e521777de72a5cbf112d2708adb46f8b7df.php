

<?php $__env->startSection('title', 'Edit Guru'); ?>

<?php $__env->startSection('content'); ?>
    <form action="/guru/update/<?php echo e($guru->id_guru); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>NIP</label>
                        <input name="nip" class="form-control" value="<?php echo e($guru->nip); ?>" readonly>
                        <div class="text-danger">
                            <?php $__errorArgs = ['nip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Guru</label>
                        <input name="nama_guru" class="form-control" value="<?php echo e($guru->nama_guru); ?>">
                        <div class="text-danger">
                            <?php $__errorArgs = ['nama_guru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Mata Pelajaran</label>
                        <input name="mapel" class="form-control" value="<?php echo e($guru->mapel); ?>">
                        <div class="text-danger">
                            <?php $__errorArgs = ['mapel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Foto Guru</label>
                        <div class="col-sm-12">
                            <div class="col-sm-4">
                                <img src="<?php echo e(url('img/' . $guru->foto_guru)); ?>" alt="" width="150px">
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input name="foto_guru" class="form-control" type="file" value="<?php echo e($guru->foto_guru); ?>">
                                    <div class="text-danger">
                                        <?php $__errorArgs = ['foto_guru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group" style="margin-top: 20px;">
                                        <button class="btn btn-sm btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar-laravel8\resources\views/v_editguru.blade.php ENDPATH**/ ?>