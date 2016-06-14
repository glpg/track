<?php $__env->startSection('tablecontent'); ?>


<div class="col-sm-9">
     <div class="panel panel-default">
        <div class="panel-heading">Add new product</div>
            <div class="panel-body">
                	<?php echo Form::open(array('url' => 'foo/bar', 'class' => 'form-horizontal')); ?>

                	<div class='form-group'>
    				<?php echo e(Form::label('email', 'E-Mail Address', ['class' => 'col-md-4 control-label'])); ?>

    				<div class='col-md-6'>
    				<?php echo e(Form::text('first_name', null, ['class'=>'form-control'])); ?>

    				</div>
    				</div>
    				<?php echo Form::close(); ?>

            </div>
    </div>
</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('db.product', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>