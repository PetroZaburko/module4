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
    <link rel="stylesheet" media="screen, print" href="<?php echo e(asset('css/page-login-alt.css')); ?>">
</head>
    <?php echo $__env->yieldContent('content'); ?>
</html>
<?php /**PATH /var/www/html/marlin_diplom/resources/views/auth/auth_header.blade.php ENDPATH**/ ?>