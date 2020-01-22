<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Modifier <strong><?php echo e($user->username); ?></strong></div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.users.update', $user)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" name="roles[]" value="<?php echo e($role->id); ?>" id="<?php echo e($role->id); ?>" 
                                <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userRole): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($userRole->id == $role->id): ?>
                                        checked
                                    <?php endif; ?>    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                >
                                <label for="<?php echo e($role->id); ?>" class="form-check-label"><?php echo e($role->description); ?></label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\PUOE\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>