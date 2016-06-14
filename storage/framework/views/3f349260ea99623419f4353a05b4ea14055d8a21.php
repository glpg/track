<?php $__env->startSection('tablecontent'); ?>

<div class="col-sm-9">
     <div class="panel panel-default">
        <div class="panel-heading">View Address</div>
            <div class="panel-body">
            	<ul class="list-group">   		
            		<li class = "list-group-item">
            			<span style = "color : blue; font-weight:bold; ">Warehouse : </span>
            			<?php echo $address->name; ?></li>
            		<li class = "list-group-item">
            			<span style = "color : blue; font-weight:bold; ">Address 1 :  </span>
            			<?php echo $address->addressline1; ?></li>
            		<li class = "list-group-item">
            		    <span style = "color : blue; font-weight:bold; ">Address 2 :  </span>
            			<?php echo $address->addressline2; ?></li>
            		<li class = "list-group-item">
            			<span style = "color : blue; font-weight:bold; ">City/State/Zip :   </span>
						<?php echo $address->city; ?>, 
            		    <?php echo $address->state; ?>
            		    <?php echo $address->zip; ?>
            		</li>
            		<li class = "list-group-item">
            			<span style = "color : blue; font-weight:bold; ">Country :  </span>
            			<?php echo $address->country; ?></li>
            		<li class = "list-group-item">
            			<span style = "color : blue; font-weight:bold; ">Phone :  </span>
            			<?php echo $address->phonenumber; ?></li>
            	</ul>
            </div>
        </div>
    </div>
 </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('db.addresses.address', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>