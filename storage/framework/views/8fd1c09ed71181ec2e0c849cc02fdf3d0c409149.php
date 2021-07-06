<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

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
<?php /**PATH /var/www/html/marlin_diplom/resources/views/message.blade.php ENDPATH**/ ?>