<?php $__env->startSection('tablecontent'); ?>

<div class="col-sm-9">
	

    <table class="table table-striped table-bordered">
    	<tr>
    	    <th>Id</th>
   			<th>Carrier Name</th>
   			<th>Remove</th>
 		</tr>
    	<?php foreach($carriers as $carrier): ?>
    	<tr>
    		<td><?php echo e($carrier->id); ?></td>
    		<td><?php echo e($carrier->name); ?></td>
    		<td class='deleterow'>
                <a href="/db/carrier/delete/<?php echo e($carrier->id); ?>">
                    <div class='glyphicon glyphicon-remove' style = 'color : red'></div>
                </a>	
            </td>
    	</tr>
    	<?php endforeach; ?>
    </table>
    <div class="col-sm-9 col-sm-offset-9">
        <?php echo $carriers->render(); ?>

    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('db.carriers.carrier', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>