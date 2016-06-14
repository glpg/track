<?php $__env->startSection('tablecontent'); ?>

        <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">Add new product</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/db/addnewprod')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('prod_name') ? ' has-error' : ''); ?>">
                            <label for="prod_name" class="col-md-4 control-label">Product Name</label>

                            <div class="col-md-6">
                                <input id="prod_name" type="text" class="form-control" name="prod_name" >

                                <?php if($errors->has('prod_name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('prod_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('prod_num') ? ' has-error' : ''); ?>">
                            <label for="prod_num" class="col-md-4 control-label">Product Number</label>

                            <div class="col-md-6">
                                <input id="prod_num" type="text" class="form-control" name="prod_num">

                                <?php if($errors->has('prod_num')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('prod_num')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Product
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('db.product', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>