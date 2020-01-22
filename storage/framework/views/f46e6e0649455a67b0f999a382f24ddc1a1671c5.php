<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Liste des utilisateurs</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Utilisateur</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Mail</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody> 
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($user->id); ?></th>
                                <td><?php echo e($user->username); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e(implode(', ',$user->roles()->get()->pluck('description')->toArray())); ?></td>
                                <td>
                                    <a href="<?php echo e(route('admin.users.edit',$user )); ?>"><button class="btn btn-primary">Editer</button></a>
                                    <form action="<?php echo e(route('admin.users.destroy',$user)); ?>" method="post" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-warning">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                      </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\PUOE\resources\views/admin/users/index.blade.php ENDPATH**/ ?>