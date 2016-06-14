@extends('layouts.app')

@section('content')
<!-- cp from internet-->


<div class="col-sm-3 col-lg-2">
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <a class="navbar-brand" href="#">Product</a>
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li><a href="{{ url('/db/addnewprod') }}">Add New Product</a></li>
      <li><a href="{{ url('/db/viewprods') }}">View Products</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
</div>
@yield('tablecontent')
@endsection

