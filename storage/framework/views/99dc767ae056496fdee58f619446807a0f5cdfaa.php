<?php $__env->startSection('title','Music'); ?>

<?php $__env->startSection('page-title','Music'); ?>

<?php $__env->startSection('dashboard-content'); ?>
    <a href="#" class="btn btn-primary">
        Tambah
    </a>
    <table class="table">
        <tr>
            <th>Title</th>
            <th>Singer</th>
            <th>Genre</th>
            <th>Song Writer</th>
            <th>Action</th>
        </tr>
        <?php $__currentLoopData = $musics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $music): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($music->title); ?></td>
            <td><?php echo e($music->singer); ?></td>
            <td><?php echo e($music->genre); ?></td>
            <td><?php echo e($music->song_writer); ?></td>
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