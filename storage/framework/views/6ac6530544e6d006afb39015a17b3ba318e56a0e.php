<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php echo e(request()->is('/') ? 'active' : ''); ?>"><a href="/"><i class="fa fa-home"></i>
                        <span>Home</span></a>
        </li>

        <?php if(auth()->user()->level == 1): ?>
        <li class="<?php echo e(request()->is('guru') ? 'active' : ''); ?>"><a href="/guru"><i class="fa fa-user"></i>
                        <span>Guru</span></a>
        </li>
        <li class="<?php echo e(request()->is('siswa') ? 'active' : ''); ?>"><a href="/siswa"><i class="fa fa-graduation-cap"></i>
                        <span>Siswa</span></a>
        </li>
        <?php endif; ?>

        <?php if(auth()->user()->level == 2): ?>
        <li class="<?php echo e(request()->is('user') ? 'active' : ''); ?>"><a href="/user"><i class="fa fa-users"></i>
                        <span>User</span></a>
        </li>
        <?php endif; ?>

        <?php if(auth()->user()->level == 3): ?>
        <li class="<?php echo e(request()->is('koperasi') ? 'active' : ''); ?>"><a href="/koperasi">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Koperasi</span></a>
        </li>
        <?php endif; ?>

        <?php if(auth()->user()->level == 4): ?>
        <li class="<?php echo e(request()->is('user') ? 'active' : ''); ?>"><a href="/user"><i class="fa fa-user"></i>
                        <span>User</span></a>
        </li>

        <li class="<?php echo e(request()->is('guru') ? 'active' : ''); ?>"><a href="/guru"><i class="fa fa-users"></i>
                        <span>Guru</span></a>
        </li>
        <li class="<?php echo e(request()->is('siswa') ? 'active' : ''); ?>"><a href="/siswa"><i class="fa fa-graduation-cap"></i>
                        <span>Siswa</span></a>
        </li>

        <li class="<?php echo e(request()->is('koperasi') ? 'active' : ''); ?>"><a href="/koperasi">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Koperasi</span></a>
        </li>
        <?php endif; ?>
</ul><?php /**PATH C:\xampp\htdocs\belajar-laravel8\resources\views/layout/v_nav.blade.php ENDPATH**/ ?>