<?php $__env->startSection('main'); ?>
    <!-- registration form -->
        <form action="<?php echo e(route('password.email')); ?>" class="sign__form" method="POST">
            <?php echo csrf_field(); ?>
            <a href="index.html" class="sign__logo">
                <img src="img/logo.svg" alt="">
            </a>

            <?php if(session('status')): ?>
                <div style="color:green">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>

            <div class="sign__group">
                <input type="text" class="sign__input" 
                placeholder="Email" name="email" value="<?php echo e(old('email')); ?>">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span style="color:red">
                    <?php echo e($message); ?>

                </span>
                
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 

            </div>

            

            

            
            
            <button class="sign__btn" type="submit">Request Reset</button>

           

            

            
        </form>
    <!-- registration form -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/gakvicheka/Documents/movie/movie/resources/views/auth/forgot-password.blade.php ENDPATH**/ ?>