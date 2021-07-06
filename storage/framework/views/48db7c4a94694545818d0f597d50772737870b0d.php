<?php $__env->startSection('content'); ?>
<main id="js-page-content" role="main" class="page-content mt-3">
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-image'></i> Загрузить аватар
        </h1>
    </div>
        <?php echo $__env->make('message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo e(Form::open(['route' => ['users.update_avatar', 'id' => $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])); ?>

        <div class="row">
            <div class="col-xl-6">
                <div id="panel-1" class="panel">
                    <div class="panel-container">
                        <div class="panel-hdr">
                            <h2>
                                Current avatar of user <?php echo e($user->info->name); ?>

                            </h2>
                        </div>
                        <div class="panel-content">
                            <div class="form-group">
                                <img src="<?php echo e(asset($user->info->getUserAvatar())); ?>" alt="" class="img-responsive" width="200">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="image">Выберите аватар</label>
                                <input type="file" id="image" name="image" class="form-control-file">
                            </div>
                            <div class="col-md-12 mt-3 d-flex flex-row-reverse">
                                <button class="btn btn-warning">Загрузить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php echo e(Form::close()); ?>

</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/marlin_diplom/resources/views/users/avatar.blade.php ENDPATH**/ ?>