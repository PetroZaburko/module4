<?php $__env->startSection('content'); ?>
    <body>
        <div class="blankpage-form-field">
            <div class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4">
                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                    <img src="<?php echo e(asset('img/logo.png')); ?>" alt="SmartAdmin WebApp" aria-roledescription="logo">
                    <span class="page-logo-text mr-1">Учебный проект</span>
                    <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                </a>
            </div>
            <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">
                <div class="message-info">
                    <?php if(session('message')): ?>
                        <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('message')); ?>

                            </div>
                        <?php else: ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('message')); ?>

                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <form action="<?php echo e(route('login')); ?>" method="POST" aria-label="<?php echo e(__('Login')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label class="form-label" for="email"><?php echo e(__('E-Mail Address')); ?></label>
                        <input type="email" name="email" id="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="Email" value="<?php echo e(old('email')); ?>" required autofocus>
                        <?php if($errors->has('email')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password"><?php echo e(__('Password')); ?></label>
                        <input type="password" name="password" id="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="Password" required>
                        <?php if($errors->has('email')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group text-left">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                            <label class="custom-control-label" for="remember"><?php echo e(__('Remember Me')); ?></label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default float-right"><?php echo e(__('Login')); ?></button>
                </form>
            </div>
            <div class="blankpage-footer text-center">
                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                    <?php echo e(__('Forgot Your Password?')); ?>

                </a>
               <a class="btn btn-link" href="<?php echo e(route('register')); ?>">
                   <?php echo e(__('Register')); ?>

            </div>
        </div>
        <video poster="<?php echo e(asset('img/backgrounds/clouds.png')); ?>" id="bgvid" playsinline autoplay muted loop>
            <source src="<?php echo e(asset('media/video/cc.webm')); ?>" type="video/webm">
            <source src="<?php echo e(asset('media/video/cc.mp4')); ?>" type="video/mp4">
        </video>
        <script src="<?php echo e(asset('js/vendors.bundle.js')); ?>"></script>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/marlin_diplom/resources/views/auth/login.blade.php ENDPATH**/ ?>