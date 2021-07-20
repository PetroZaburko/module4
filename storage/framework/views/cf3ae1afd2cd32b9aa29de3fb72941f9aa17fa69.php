<?php $__env->startSection('content'); ?>
<main id="js-page-content" role="main" class="page-content mt-3">
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-plus-circle'></i> Редактировать
        </h1>
    </div>
    <?php echo $__env->make('message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo e(Form::open(['route' => ['users.update_info', 'id' => $user->id], 'method' => 'POST'])); ?>

        <div class="row">
            <div class="col-xl-6">
                <div id="panel-1" class="panel">
                    <div class="panel-container">
                        <div class="panel-hdr">
                            <h2>Changing info about user <?php echo e($user->info->name); ?></h2>
                        </div>
                        <div class="panel-content">
                            <!-- username -->
                            <div class="form-group">
                                <label class="form-label" for="name">Имя</label>
                                <input type="text" id="name" name="name" class="form-control" value="<?php echo e($user->info->name); ?>">
                            </div>
                            <!-- title -->
                            <div class="form-group">
                                <label class="form-label" for="comapny">Место работы</label>
                                <input type="text" id="comapny" name="company" class="form-control" value="<?php echo e($user->info->company); ?>">
                            </div>
                            <!-- tel -->
                            <div class="form-group">
                                <label class="form-label" for="telephone">Номер телефона</label>
                                <input type="text" id="telephone" name="telephone" class="form-control" value="<?php echo e($user->info->telephone); ?>">
                            </div>
                            <!-- address -->
                            <div class="form-group">
                                <label class="form-label" for="address">Адрес</label>
                                <input type="text" id="address" name="address" class="form-control" value="<?php echo e($user->info->address); ?>">
                            </div>
                            <div class="col-md-12 mt-3 d-flex flex-row-reverse">
                                <button class="btn btn-warning">Редактировать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php echo e(Form::close()); ?>

</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/marlin_diplom/resources/views/users/edit.blade.php ENDPATH**/ ?>