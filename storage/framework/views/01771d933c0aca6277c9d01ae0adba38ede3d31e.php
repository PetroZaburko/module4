<?php $__env->startSection('content'); ?>
    <body>
    <div class="page-wrapper auth">
        <div class="page-inner bg-brand-gradient">
            <div class="page-content-wrapper bg-transparent m-0">
                <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                    <div class="d-flex align-items-center container p-0">
                        <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9 border-0">
                            <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                                <img src="<?php echo e(asset('img/logo.png')); ?>" alt="SmartAdmin WebApp" aria-roledescription="logo">
                                <span class="page-logo-text mr-1">Учебный проект</span>
                            </a>
                        </div>
                        <span class="text-white opacity-50 ml-auto mr-2 hidden-sm-down">
                                Уже зарегистрированы?
                            </span>
                        <a href="<?php echo e(route('login')); ?>" class="btn-link text-white ml-auto ml-sm-0">
                            <?php echo e(__('Login')); ?>

                        </a>
                    </div>
                </div>
                <div class="flex-1" style="background: url(img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
                    <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                        <div class="row">
                            <div class="col-xl-12">
                                <h2 class="fs-xxl fw-500 mt-4 text-white text-center">
                                    <?php echo e(__('Register')); ?>

                                    <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60 hidden-sm-down">
                                        Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.
                                        <br>
                                        По своей сути рыбатекст является альтернативой традиционному lorem ipsum
                                    </small>
                                </h2>
                            </div>
                            <div class="col-xl-6 ml-auto mr-auto">
                                <div class="card p-4 rounded-plus bg-faded">
                                    <form id="js-login" novalidate="" action="<?php echo e(route('register')); ?>" method="POST" aria-label="<?php echo e(__('Register')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label class="form-label" for="email"><?php echo e(__('E-Mail Address')); ?></label>
                                            <input type="email" name="email" id="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="Эл. адрес" value="<?php echo e(old('email')); ?>" required>
                                            <?php if($errors->has('email')): ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                            <div class="invalid-feedback">Заполните поле.</div>
                                            <div class="help-block">Эл. адрес будет вашим логином при авторизации</div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="name"><?php echo e(__('Name')); ?></label>
                                            <input type="text" name="name" id="name" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="Имя" value="<?php echo e(old('name')); ?>" required>
                                            <?php if($errors->has('name')): ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                            <div class="invalid-feedback">Заполните поле.</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="password"><?php echo e(__('Password')); ?> <br></label>
                                            <input type="password" name="password" id="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" required>
                                            <?php if($errors->has('password')): ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                            <div class="invalid-feedback">Заполните поле.</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="password_confirm"><?php echo e(__('Confirm Password')); ?><br></label>
                                            <input type="password" name="password_confirmation" id="password_confirm" class="form-control" required>
                                            <div class="invalid-feedback">Заполните поле.</div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-md-12 ml-auto text-right">
                                                <button id="js-login-btn" type="submit" class="btn btn-block btn-danger btn-lg mt-3"><?php echo e(__('Register')); ?></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo e(asset('js/vendors.bundle.js')); ?>"></script>
    <script>
        $("#js-login-btn").click(function(event)
        {

            // Fetch form to apply custom Bootstrap validation
            var form = $("#js-login")

            if (form[0].checkValidity() === false)
            {
                event.preventDefault()
                event.stopPropagation()
            }

            form.addClass('was-validated');
            // Perform ajax submit here...
        });

    </script>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/marlin_diplom/resources/views/auth/register.blade.php ENDPATH**/ ?>