<?php $__env->startSection('tablecontent'); ?>

<div class="col-sm-9">
	

    <table class="table table-striped table-bordered">
    	<tr>
    	    <th>Id</th>
   			<th>Warehouse</th>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
            <th>Phone Number</th>
   			<th>Remove</th>
            <th>Edit</th>
 		</tr>
    	<?php foreach($addresses as $addr): ?>
    	<tr>
    		<td><?php echo e($addr->id); ?></td>
    		<td>
                <a href="/db/address/view/<?php echo e($addr->id); ?>">
                    <?php echo e($addr->name); ?>

                </a>
            </td>
            <td><?php echo e($addr->city); ?></td>
            <td><?php echo e($addr->state); ?></td>
            <td><?php echo e($addr->country); ?></td>
            <td><?php echo e($addr->phonenumber); ?></td>
    		<td class='deleterow'>
                <a href="/db/address/delete/<?php echo e($addr->id); ?>">
                    <div class='glyphicon glyphicon-remove' style = 'color : red'></div>
                </a>	
            </td>
            <td class='editrow'>
                <a href="/db/address/edit/<?php echo e($addr->id); ?>">
                    <div class='glyphicon glyphicon-edit' style ='color : blue'></div>
                </a>
            </td>   
    	</tr>
    	<?php endforeach; ?>
    </table>
    <div class="col-sm-9 col-sm-offset-9">
        <?php echo $addresses->render(); ?>

    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('db.addresses.address', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>