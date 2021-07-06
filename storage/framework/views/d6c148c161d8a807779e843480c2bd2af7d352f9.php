<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <meta name="description" content="Chartist.html">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">

    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="<?php echo e(asset('css/vendors.bundle.css')); ?>">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="<?php echo e(asset('css/app.bundle.css')); ?>">
    <link id="myskin" rel="stylesheet" media="screen, print" href="<?php echo e(asset('css/skins/skin-master.css')); ?>">
    <link rel="stylesheet" media="screen, print" href="<?php echo e(asset('css/fa-solid.css')); ?>">
    <link rel="stylesheet" media="screen, print" href="<?php echo e(asset('css/fa-brands.css')); ?>">
    <link rel="stylesheet" media="screen, print" href="<?php echo e(asset('css/fa-regular.css')); ?>">
    <?php if(auth()->guard()->guest()): ?>
    <link rel="stylesheet" media="screen, print" href="<?php echo e(asset('css/page-login-alt.css')); ?>">
    <?php endif; ?>
</head>
<body class="mod-bg-1 mod-nav-link">
<?php if(auth()->guard()->check()): ?>
    <?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php echo $__env->yieldContent('content'); ?>
<?php if(auth()->guard()->check()): ?>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
</body>

<script src="<?php echo e(asset('js/vendors.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('js/app.bundle.js')); ?>"></script>
<script>
    $(document).ready(function()
    {

        $('input[type=radio][name=contactview]').change(function()
        {
            if (this.value == 'grid')
            {
                $('#js-contacts .card').removeClassPrefix('mb-').addClass('mb-g');
                $('#js-contacts .col-xl-12').removeClassPrefix('col-xl-').addClass('col-xl-4');
                $('#js-contacts .js-expand-btn').addClass('d-none');
                $('#js-contacts .card-body + .card-body').addClass('show');

            }
            else if (this.value == 'table')
            {
                $('#js-contacts .card').removeClassPrefix('mb-').addClass('mb-1');
                $('#js-contacts .col-xl-4').removeClassPrefix('col-xl-').addClass('col-xl-12');
                $('#js-contacts .js-expand-btn').removeClass('d-none');
                $('#js-contacts .card-body + .card-body').removeClass('show');
            }

        });

        //initialize filter
        initApp.listFilter($('#js-contacts'), $('#js-filter-contacts'));
    });
</script>
</html>
<?php /**PATH /var/www/html/marlin_diplom/resources/views/head.blade.php ENDPATH**/ ?>