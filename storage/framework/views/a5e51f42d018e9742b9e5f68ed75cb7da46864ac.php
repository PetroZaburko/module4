<?php $__env->startSection('content'); ?>
<main id="js-page-content" role="main" class="page-content mt-3">
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-plus-circle'></i> Добавить пользователя
        </h1>
    </div>
    <?php echo $__env->make('message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo e(Form::open(['route' => 'users.store', 'files' => true ])); ?>

        <div class="row">
            <div class="col-xl-6">
                <div id="panel-1" class="panel">
                    <div class="panel-container">
                        <div class="panel-hdr">
                            <h2>Общая информация</h2>
                        </div>
                        <div class="panel-content">
                            <!-- username -->
                            <div class="form-group">
                                <label class="form-label" for="name">Имя</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <!-- title -->
                            <div class="form-group">
                                <label class="form-label" for="company">Место работы</label>
                                <input type="text" id="company" name="company" class="form-control">
                            </div>
                            <!-- tel -->
                            <div class="form-group">
                                <label class="form-label" for="telephone">Номер телефона</label>
                                <input type="text" id="telephone" name="telephone" class="form-control">
                            </div>
                            <!-- address -->
                            <div class="form-group">
                                <label class="form-label" for="address">Адрес</label>
                                <input type="text" id="address" name="address" class="form-control">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-6">
                <div id="panel-1" class="panel">
                    <div class="panel-container">
                        <div class="panel-hdr">
                            <h2>Безопасность и Медиа</h2>
                        </div>
                        <div class="panel-content">
                            <!-- email -->
                            <div class="form-group">
                                <label class="form-label" for="email">Email</label>
                                <input type="text" id="email" name="email" class="form-control" required>
                            </div>
                            <!-- password -->
                            <div class="form-group">
                                <label class="form-label" for="password">Пароль</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                            <!-- password confirmation -->
                            <div class="form-group">
                                <label class="form-label" for="password_confirm">Подтверждение пароля</label>
                                <input type="password" id="password_confirm" name="password_confirmation" class="form-control" required>
                            </div>
                            <!-- status -->
                            <div class="form-group">
                                <label class="form-label" for="example-select">Выберите статус</label>
                                <select class="form-control" id="status" name="status">
                                   <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($status->id); ?>"><?php echo e($status->status); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="image">Загрузить аватар</label>
                                <input type="file" id="image" name="avatar" class="form-control-file">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-container">
                        <div class="panel-hdr">
                            <h2>Социальные сети</h2>
                        </div>
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- vk -->
                                    <div class="input-group input-group-lg bg-white shadow-inset-2 mb-2">
                                        <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent border-right-0 py-1 px-3">
                                                    <span class="icon-stack fs-xxl">
                                                        <i class="base-7 icon-stack-3x" style="color:#4680C2"></i>
                                                        <i class="fab fa-vk icon-stack-1x text-white"></i>
                                                    </span>
                                                </span>
                                        </div>
                                        <input type="text" name="vk" class="form-control border-left-0 bg-transparent pl-0">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- telegram -->
                                    <div class="input-group input-group-lg bg-white shadow-inset-2 mb-2">
                                        <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent border-right-0 py-1 px-3">
                                                    <span class="icon-stack fs-xxl">
                                                        <i class="base-7 icon-stack-3x" style="color:#38A1F3"></i>
                                                        <i class="fab fa-telegram icon-stack-1x text-white"></i>
                                                    </span>
                                                </span>
                                        </div>
                                        <input type="text" name="telegram" class="form-control border-left-0 bg-transparent pl-0">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- instagram -->
                                    <div class="input-group input-group-lg bg-white shadow-inset-2 mb-2">
                                        <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent border-right-0 py-1 px-3">
                                                    <span class="icon-stack fs-xxl">
                                                        <i class="base-7 icon-stack-3x" style="color:#E1306C"></i>
                                                        <i class="fab fa-instagram icon-stack-1x text-white"></i>
                                                    </span>
                                                </span>
                                        </div>
                                        <input type="text" name="instagram" class="form-control border-left-0 bg-transparent pl-0">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3 d-flex flex-row-reverse">
                                    <button class="btn btn-success">Добавить</button>
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

<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/marlin_diplom/resources/views/users/create.blade.php ENDPATH**/ ?>