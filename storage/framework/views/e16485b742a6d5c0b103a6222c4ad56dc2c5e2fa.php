<nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-primary-gradient">
    <a class="navbar-brand d-flex align-items-center fw-500" href="<?php echo e(route('users.all')); ?>"><img alt="logo" class="d-inline-block align-top mr-2" src="<?php echo e(asset('img/logo.png')); ?>"> Учебный проект</a> <button aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarColor02" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(route('users.all')); ?>">Главная <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('users.profile', ['id' => Auth::id()])); ?>"> Logged as: <?php echo e(Auth::user()->info->name); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="
                        event.preventDefault();
                        document.getElementById('logout-form').submit();
                        "><?php echo e(__('Logout')); ?></a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </li>
        </ul>
    </div>
</nav>
<?php /**PATH /var/www/html/marlin_diplom/resources/views/nav.blade.php ENDPATH**/ ?>