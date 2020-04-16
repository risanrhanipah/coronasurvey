<?php $__env->startSection('content'); ?>
<form action="/setor" method="POST"> 
    <?php echo csrf_field(); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <h5 class="card-header">Masukan Nama</h5>
                    <div class="card-body">
                      <div class="card-title"><input type="text" name="name" id=""> <br>
                    </div>
                      <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                  </div>
            </div>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appbackup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/danialabror/Documents/laravel/coronavirus/resources/views/home.blade.php ENDPATH**/ ?>