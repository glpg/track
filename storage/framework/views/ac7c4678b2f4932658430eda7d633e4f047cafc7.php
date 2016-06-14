<?php $__env->startSection('tablecontent'); ?>

<div class="col-sm-9">
	

    <table class="table table-striped table-bordered">
    	<tr>
    	    <th>Id</th>
   			<th>Product Name</th>
   			<th>Product Number</th>
   			<th>Remove</th>
   			<th>Edit</th>
 		</tr>
    	<?php foreach($products as $product): ?>
    	<tr>
    		<td><?php echo e($product->id); ?></td>
    		<td><?php echo e($product->prod_name); ?></td>
    		<td><?php echo e($product->prod_num); ?></td>
    		<td class='deleterow'>
                <a href="/db/product/delete/<?php echo e($product->id); ?>">
                    <div class='glyphicon glyphicon-remove' style = 'color : red'></div>
                </a>	
            </td>
    		<td class='editrow'>
    			<a href="/db/product/edit/<?php echo e($product->id); ?>">
    				<div class='glyphicon glyphicon-edit' style ='color : blue'></div>
    			</a>
    		</td>	
    	</tr>
    	<?php endforeach; ?>
    </table>
    <div class="col-sm-9 col-sm-offset-9">
        <?php echo $products->render(); ?>

    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('db.products.product', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>