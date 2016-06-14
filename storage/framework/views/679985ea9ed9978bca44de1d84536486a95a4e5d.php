<?php $__env->startSection('tablecontent'); ?>


<div class="col-sm-9">
     <div class="panel panel-default">
        <div class="panel-heading">Edit product</div>
            <div class="panel-body">
                    <?php echo Form::model($product, array('url'=>array('/db/product/update', $product->id),'class' => 'form-horizontal')); ?>

                    <!-- <?php echo Form::model($product, array('action' => array('ProductController@updateProd', $product->id),'class' => 'form-horizontal')); ?> -->
                	<div class='form-group'>
    				    <?php echo e(Form::label('prod_name', 'Product Name', ['class' => 'col-md-4 control-label'])); ?>

    				    <div class='col-md-6'>
    				        <?php echo e(Form::text('prod_name', null, ['class'=>'form-control'])); ?>

    				    </div>
    				</div>
                    <div class='form-group'>
                        <?php echo e(Form::label('prod_num', 'Product Number', ['class' => 'col-md-4 control-label'])); ?>

                        <div class='col-md-6'>
                            <?php echo e(Form::text('prod_num', null, ['class'=>'form-control'])); ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <?php echo Form::submit('Update Product', ['class' => 'btn btn-primary']); ?>

                        </div>
                    </div>

    				<?php echo Form::close(); ?>

            </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('db.product', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>