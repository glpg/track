<?php $__env->startSection('tablecontent'); ?>

<div class="col-sm-9">
	

    <table class="table table-striped table-bordered">
    	<tr>
    	    <th>Id</th>
   			<th>Store Name</th>
   			<th>Remove</th>
 		</tr>
    	<?php foreach($stores as $store): ?>
    	<tr>
    		<td><?php echo e($store->id); ?></td>
    		<td><?php echo e($store->name); ?></td>
    		<td class='deleterow'>
                <a href="/db/store/delete/<?php echo e($store->id); ?>">
                    <div class='glyphicon glyphicon-remove' style = 'color : red'></div>
                </a>	
            </td>
    	</tr>
    	<?php endforeach; ?>
    </table>
    <div class="col-sm-9 col-sm-offset-9">
        <?php echo $stores->render(); ?>

    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('db.stores.store', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>