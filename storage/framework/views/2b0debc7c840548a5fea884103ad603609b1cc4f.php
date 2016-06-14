<?php $__env->startSection('tablecontent'); ?>

<div class="col-sm-9">
     <div class="panel panel-default">
        <div class="panel-heading">Edit address</div>
            <div class="panel-body">
                    <?php echo Form::model($address, array('url'=>array('/db/address/update', $address->id),'class' => 'form-horizontal')); ?>

                	<div class='form-group'>
    				    <?php echo e(Form::label('name', 'Warehouse/Address Name', ['class' => 'col-md-4 control-label'])); ?>

    				    <div class='col-md-6'>
    				        <?php echo e(Form::text('name', null, ['class'=>'form-control'])); ?>

    				    </div>
    				</div>
                    <div class='form-group'>
                        <?php echo e(Form::label('addressline1', 'Addressline 1', ['class' => 'col-md-4 control-label'])); ?>

                        <div class='col-md-6'>
                            <?php echo e(Form::text('addressline1', null, ['class'=>'form-control'])); ?>

                        </div>
                    </div>
                    <div class='form-group'>
                        <?php echo e(Form::label('addressline2', 'Addressline 2', ['class' => 'col-md-4 control-label'])); ?>

                        <div class='col-md-6'>
                            <?php echo e(Form::text('addressline2', null, ['class'=>'form-control'])); ?>

                        </div>
                    </div>
                    <div class='form-group'>
                        <?php echo e(Form::label('city', 'City', ['class' => 'col-md-4 control-label'])); ?>

                        <div class='col-md-6'>
                            <?php echo e(Form::text('city', null, ['class'=>'form-control'])); ?>

                        </div>
                    </div>
                    <div class='form-group'>
                        <?php echo e(Form::label('state', 'State', ['class' => 'col-md-4 control-label'])); ?>

                        <div class='col-md-6'>
                            <?php echo e(Form::text('state', null, ['class'=>'form-control'])); ?>

                        </div>
                    </div>
                    <div class='form-group'>
                        <?php echo e(Form::label('zip', 'Zip', ['class' => 'col-md-4 control-label'])); ?>

                        <div class='col-md-6'>
                            <?php echo e(Form::text('zip', null, ['class'=>'form-control'])); ?>

                        </div>
                    </div>
                    <div class='form-group'>
                        <?php echo e(Form::label('country', 'Country', ['class' => 'col-md-4 control-label'])); ?>

                        <div class='col-md-6'>
                            <?php echo e(Form::text('country', null, ['class'=>'form-control'])); ?>

                        </div>
                    </div>
                    <div class='form-group'>
                        <?php echo e(Form::label('phonenumber', 'Phone Number', ['class' => 'col-md-4 control-label'])); ?>

                        <div class='col-md-6'>
                            <?php echo e(Form::text('phonenumber', null, ['class'=>'form-control'])); ?>

                        </div>
                    </div>




                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <?php echo Form::submit('Update Address', ['class' => 'btn btn-primary']); ?>

                        </div>
                    </div>

    				<?php echo Form::close(); ?>

            </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('db.addresses.address', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>