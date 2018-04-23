<?php $__env->startSection('title','Lecture'); ?>

<?php $__env->startSection('page-title','Lecture'); ?>

<?php $__env->startSection('dashboard-content'); ?>
    <a href="#" class="btn btn-primary">
        Tambah
    </a>
    <table class="table">
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Tanggal</th>
            <th>Action</th>
        </tr>
        <?php $__currentLoopData = $lectures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($lecture->nip); ?></td>
            <td><?php echo e($lecture->name); ?></td>
            <td><?php echo e($lecture->age); ?></td>
            <td><?php echo e($lecture->date_of_birth); ?></td>
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