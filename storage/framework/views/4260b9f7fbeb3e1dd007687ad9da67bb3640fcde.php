<?php $__env->startSection('content'); ?>
    <main id="js-page-content" role="main" class="page-content mt-3">
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-user'></i>
                <?php echo e($user->info->name); ?>

            </h1>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xl-6 m-auto">
            <!-- profile summary -->
                <div class="card mb-g rounded-top">
                    <div class="row no-gutters row-grid">
                        <div class="col-12">
                            <div class="d-flex flex-column align-items-center justify-content-center p-4">
                                <img src="<?php echo e(asset($user->info->getUserAvatar())); ?>" style="height: 200px; width: 200px" class="rounded-circle shadow-2 img-thumbnail" alt="">
                                <h5 class="mb-0 fw-700 text-center mt-3">
                                    <?php echo e($user->info->name); ?>

                                    <small class="text-muted mb-0"><?php echo e($user->info->company); ?></small>
                                </h5>
                                <div class="mt-4 text-center demo">
                                    <a href="<?php echo e($user->links->getUserInstagramLink()); ?>" class="fs-xl" style="color:#C13584">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="<?php echo e($user->links->getUserVKLink()); ?>" class="fs-xl" style="color:#4680C2">
                                        <i class="fab fa-vk"></i>
                                    </a>
                                    <a href="<?php echo e($user->links->getUserTelegramLink()); ?>" class="fs-xl" style="color:#0088cc">
                                        <i class="fab fa-telegram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3 text-center">
                                <a href="tel:<?php echo e($user->info->telephone); ?>" class="mt-1 d-block fs-sm fw-400 text-dark">
                                    <i class="fas fa-mobile-alt text-muted mr-2"></i><?php echo e($user->info->telephone); ?></a>
                                <a href="mailto:<?php echo e($user->email); ?>" class="mt-1 d-block fs-sm fw-400 text-dark">
                                    <i class="fas fa-mouse-pointer text-muted mr-2"></i><?php echo e($user->email); ?></a>
                                <address class="fs-sm fw-400 mt-4 text-muted">
                                    <i class="fas fa-map-pin mr-2"></i><?php echo e($user->info->address); ?>

                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/marlin_diplom/resources/views/users/profile.blade.php ENDPATH**/ ?>