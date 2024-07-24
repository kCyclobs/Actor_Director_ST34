<?php $__env->startSection('main'); ?>
    <!-- registration form -->
        <form action="<?php echo e(route('login')); ?>" class="sign__form" method="GET">
            <?php echo csrf_field(); ?>
            <a href="index.html" class="sign__logo">
                <img src="img/logo.svg" alt="">
            </a>

            

            <div class="sign__group">
                <span>Please check your email for verificaition link</span>
            </div>

            

            
            <button class="sign__btn" >Back Login</button>

            
        </form>
    <!-- registration form -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/gakvicheka/Documents/movie/movie/resources/views/auth/verify-email.blade.php ENDPATH**/ ?>