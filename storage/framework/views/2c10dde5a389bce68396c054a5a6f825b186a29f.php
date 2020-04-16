<?php $__env->startSection('content'); ?>

<div class="container my-5">
    <div class="row">
        <div class="col offset-md-1">
            <div class="card text-center">
                <div class="card-header">
                    Hasil
                  </div>
                <div class="card-body">
                    <h2 class="card-title"><?php echo e($name); ?></h2> <hr>
                    <h4 class="card-text">Kamu memiliki <?php echo e($msg); ?> untuk tertular virus corona</h4>
                    <a href="/" class="btn btn-primary">Selesai.</a>
                </div>
              </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/danialabror/Documents/laravel/coronavirus/resources/views/result.blade.php ENDPATH**/ ?>