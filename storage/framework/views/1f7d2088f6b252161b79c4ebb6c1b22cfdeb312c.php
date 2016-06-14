<?php $__env->startSection('content'); ?>
<!-- cp from internet-->


<div class="col-sm-3 col-lg-2">
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <a class="navbar-brand" href="#">Store</a>
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li><a href="<?php echo e(url('/db/addnewstore')); ?>">Add New Store</a></li>
      <li><a href="<?php echo e(url('/db/viewstores')); ?>">View Stores</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
</div>
<?php echo $__env->yieldContent('tablecontent'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>