<?php $__env->startSection('tablecontent'); ?>

        <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">Add new warehouse</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/db/addnewaddr')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Warehouse/Address Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" >

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('addressline1') ? ' has-error' : ''); ?>">
                            <label for="addressline1" class="col-md-4 control-label">Addressline 1</label>

                            <div class="col-md-6">
                                <input id="addressline1" type="text" class="form-control" name="addressline1" >

                                <?php if($errors->has('addressline1')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('addressline1')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('addressline2') ? ' has-error' : ''); ?>">
                            <label for="city" class="col-md-4 control-label">Addressline 2</label>

                            <div class="col-md-6">
                                <input id="addressline2" type="text" class="form-control" name="addressline2" >

                                <?php if($errors->has('addressline2')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('addressline2')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('city') ? ' has-error' : ''); ?>">
                            <label for="city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" >

                                <?php if($errors->has('city')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('city')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('state') ? ' has-error' : ''); ?>">
                            <label for="state" class="col-md-4 control-label">State</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" >

                                <?php if($errors->has('state')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('state')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('zip') ? ' has-error' : ''); ?>">
                            <label for="zip" class="col-md-4 control-label">Zip</label>

                            <div class="col-md-6">
                                <input id="zip" type="text" class="form-control" name="zip" >

                                <?php if($errors->has('zip')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('zip')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('country') ? ' has-error' : ''); ?>">
                            <label for="country" class="col-md-4 control-label">Country</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" >

                                <?php if($errors->has('country')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('country')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('phonenumber') ? ' has-error' : ''); ?>">
                            <label for="phonenumber" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phonenumber" type="text" class="form-control" name="phonenumber" >

                                <?php if($errors->has('phonenumber')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('phonenumber')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Warehouse/Address
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('db.addresses.address', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>