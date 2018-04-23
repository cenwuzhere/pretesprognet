<?php $__env->startSection('title','Welcome'); ?>

<?php $__env->startSection('page-title','Welcome'); ?>

<?php $__env->startSection('dashboard-content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">Semangat !!!</div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>