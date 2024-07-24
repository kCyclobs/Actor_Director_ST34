<?php $__env->startSection('content'); ?>



<!-- dashbox drama-->
<div class="col-12">
    <div class="dashbox">
        <div class="dashbox__title">
            <h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10,13H3a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,10,13ZM9,20H4V15H9ZM21,2H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,9H15V4h5Zm1,4H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,21,13Zm-1,7H15V15h5ZM10,2H3A1,1,0,0,0,2,3v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,10,2ZM9,9H4V4H9Z"/>
            </svg>Production</h3>

            
        </div>

        <div class="dashbox__table-wrap dashbox__table-wrap--2">
            <div style="color:white">
                
                <!-- Display actor names -->
                <?php if($actor && $actor->isNotEmpty()): ?>
                    <p>Actors:</p>
                    <ul>
                        <?php $__currentLoopData = $actor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <?php echo e($actors->actor_name); ?>

                                <a href="<?php echo e(route('Actor Detail', ['id' => $actors->id])); ?>">See More</a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php else: ?>
                    <p>No actors found for this movie.</p>
                <?php endif; ?>
                <br>
                <!-- Display director names -->
                <?php if($director && $director->isNotEmpty()): ?>
                    <p>Directors:</p>
                    <ul>
                        <?php $__currentLoopData = $director; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $directors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <?php echo e($directors->director_name); ?>

                                <a href="<?php echo e(route('Director Detail', ['id' => $directors->id])); ?>">See More</a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php else: ?>
                    <p>No directors found for this movie.</p>
                <?php endif; ?>
                <!-- Add more details as needed -->
            </div>
        </div>
    </div>
</div>
<!-- end dashbox -->
    



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/gakvicheka/Documents/movie/movie/resources/views/user/movie_detail.blade.php ENDPATH**/ ?>