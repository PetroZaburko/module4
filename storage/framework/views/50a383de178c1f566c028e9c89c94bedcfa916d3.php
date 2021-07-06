<?php $__env->startSection('content'); ?>
<main id="js-page-content" role="main" class="page-content mt-3">
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-sun'></i> Установить статус
        </h1>
    </div>
    <?php echo e(Form::open(['route' => ['users.update_status', 'id' => $user->id], 'method' => 'POST'])); ?>

        <div class="row">
            <div class="col-xl-6">
                <div id="panel-1" class="panel">
                    <div class="panel-container">
                        <div class="panel-hdr">
                            <h2>Changing status for user <?php echo e($user->info->name); ?></h2>
                        </div>
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- status -->
                                    <div class="form-group">
                                        <label class="form-label" for="status_id">Выберите статус</label>
                                        <select class="form-control" id="status_id" name="status_id">
                                            <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($status->id); ?>" <?php echo e($status->id == $user->status_id ? 'selected' : ''); ?>><?php echo e($status->status); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3 d-flex flex-row-reverse">
                                    <button class="btn btn-warning">Set Status</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php echo e(Form::close()); ?>

</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/marlin_diplom/resources/views/users/status.blade.php ENDPATH**/ ?>