<?php $__env->startSection('content'); ?>



<!-- dashbox drama-->
<div class="col-12">
    <div class="dashbox">
        <div class="dashbox__title">
            <h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10,13H3a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,10,13ZM9,20H4V15H9ZM21,2H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,9H15V4h5Zm1,4H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,21,13Zm-1,7H15V15h5ZM10,2H3A1,1,0,0,0,2,3v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,10,2ZM9,9H4V4H9Z"/>
            </svg>Actor List</h3>

            
        </div>

        <div class="dashbox__table-wrap dashbox__table-wrap--2">
            <table class="main__table main__table--dash">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $actors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $actor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <div class="main__table-text"><?php echo e($key + 1); ?></div>
                        </td>
                        <td>
                            <div class="main__table-text"><?php echo e($actor->actor_name); ?></div>
                        </td>
                        <td>
                            <div class="main__table-text">
                                <a href="<?php echo e(route('Actor Detail', ['id' => $actor->id])); ?>">See More</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end dashbox -->
    



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/gakvicheka/Documents/movie/movie/resources/views/user/actor_list.blade.php ENDPATH**/ ?>