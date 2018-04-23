<?php $__env->startSection('title','Admin'); ?>

<?php $__env->startSection('page-title','Admin'); ?>

<?php $__env->startSection('dashboard-content'); ?>
    <a href="#" class="btn btn-primary">
        Tambah
    </a>
    <table class="table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($admin->first_name); ?></td>
            <td><?php echo e($admin->last_name); ?></td>
            <td><?php echo e($admin->username); ?></td>
            <td><?php echo e($admin->email); ?></td>
            <td>
                <a href="#" class="btn btn-success">
                    <i class="fa fa-pencil"></i>
                </a>
                <a href="#" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>