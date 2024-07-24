<?php $__env->startSection('content'); ?>

<div class="col-12">

    <div class="row">
        
            <!-- Image Section -->
        <div class="col-4">
                <div class="dashbox">
                    <div class="card-body text-center">
                        
                        <!-- Placeholder for the image -->
                        <img src="<?php echo e(asset('img/' . $actors->photo)); ?>" height="326x" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
        <div class="col-8">
            <div class="dashbox">
                <div class="dashbox__title" style="color:white">
                    <h2 style="margin:0%"><?php echo e($actors->actor_name); ?></h2>
                </div>
                <div class="col-12">
                    <div class="dashbox__body" style="color:white">
                        <div>
                            <p style="margin: 15px"><strong>Name:</strong> <?php echo e($actors->actor_name); ?></p>
                            <p style="margin: 15px"><strong>Occupation:</strong> <?php echo e($actors->occupation); ?></p>
                            <p style="margin: 15px"><strong>Nationality:</strong> <?php echo e($actors->Nationality); ?></p>
                            <p style="margin: 15px"><strong>Gender:</strong> <?php echo e($actors->gender); ?></p>
                            <p style="margin: 15px"><strong>Date of Birth:</strong> <?php echo e($actors->Date_of_Birth); ?></p>
                            <p style="margin: 15px"><strong>Age:</strong> <?php echo e($actors->age); ?> years old</p>
                        </div>
                    
                </div>
                </div>
                
            </div>
        </div>
    </div>

</div>

   
<!-- dashbox director-->
<div class="col-12">
    <div class="dashbox">
        <div class="dashbox__title">
            <h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10,13H3a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,10,13ZM9,20H4V15H9ZM21,2H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,9H15V4h5Zm1,4H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,21,13Zm-1,7H15V15h5ZM10,2H3A1,1,0,0,0,2,3v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,10,2ZM9,9H4V4H9Z"/>
            </svg>History</h3>

            
        </div>

        <div class="dashbox__table-wrap dashbox__table-wrap--2">
            <table class="main__table main__table--dash">
                <thead>
                    <tr>
                        <th>YEAR</th>
                        <th>TITLE</th>
                        <th>TYPE</th>
                        <th>See More</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $actorMovies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <div class="main__table-text"><?php echo e(\Carbon\Carbon::parse($movie->release_date)->format('Y')); ?></div>
                        </td>
                        <td>
                            <div class="main__table-text"><?php echo e($movie->title); ?></div>
                        </td>
                        <td>
                            <div class="main__table-text"><?php echo e($movie->type); ?></div>
                        </td>
                        <td>
                            <div class="main__table-text">
                                <a href="<?php echo e(route('Movie Detail', ['id' => $movie->id])); ?>">See More</a>
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
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/gakvicheka/Documents/movie/movie/resources/views/user/actor.blade.php ENDPATH**/ ?>