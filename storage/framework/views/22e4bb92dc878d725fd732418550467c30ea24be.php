<?php $__env->startSection('tablecontent'); ?>

        <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">Add new carrier</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/db/addnewcarrier')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Carrier Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" >

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Carrier
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('db.carriers.carrier', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>