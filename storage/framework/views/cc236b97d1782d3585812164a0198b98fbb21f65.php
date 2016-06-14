<?php $__env->startSection('content'); ?>

<div class="col-sm-3 col-lg-2">
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Database</a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo e(url('/db/product')); ?>">Product</a></li>
          <li><a href="#">Warehouse / Address</a></li> 
          <li><a href="#">Store</a></li>
          <li><a href="#">Shipping Carrier</a></li>
          <li><a href="#">Order</a></li>
          <li><a href="#">US tracking</a></li>
          <li><a href="#">US-China tracking</a></li>
          <li><a href="#">China tracking</a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
    </nav>
</div>


<div class = "col-sm-9">
    <div class="panel panel-default" >
        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
            You are logged in!
        </div>

    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>