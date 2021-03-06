<?php $__env->startSection('tablecontent'); ?>

<div class="col-sm-9">
     <div class="panel panel-default">
        <div class="panel-heading">View Order</div>
            <div class="panel-body">
            	<ul class="list-group">   		
            		<li class = "list-group-item">
            			<span style = "color : blue; font-weight:bold; ">Order Number : </span>
            			<?php echo $order->order_num; ?></li>
            		<li class = "list-group-item">
            			<span style = "color : blue; font-weight:bold; ">Order Date :  </span>
            			<?php echo $order->order_date; ?></li>
                    <li class = "list-group-item">
                        <span style = "color : blue; font-weight:bold; ">Purchase Store :  </span>
                        <?php echo $order->store->name; ?></li>
            	</ul>
            </div>
        </div>
    </div>
 </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('db.orders.order', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>