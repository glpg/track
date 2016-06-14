@extends('db.products.product')

@section('tablecontent')

<div class="col-sm-9">
	

    <table class="table table-striped table-bordered">
    	<tr>
    	    <th>Id</th>
   			<th>Product Name</th>
   			<th>Product Number</th>
   			<th>Remove</th>
   			<th>Edit</th>
 		</tr>
    	@foreach($products as $product)
    	<tr>
    		<td>{{ $product->id }}</td>
    		<td>{{ $product->prod_name }}</td>
    		<td>{{ $product->prod_num }}</td>
    		<td class='deleterow'>
                <a href="/db/product/delete/{{$product->id}}">
                    <div class='glyphicon glyphicon-remove' style = 'color : red'></div>
                </a>	
            </td>
    		<td class='editrow'>
    			<a href="/db/product/edit/{{$product->id}}">
    				<div class='glyphicon glyphicon-edit' style ='color : blue'></div>
    			</a>
    		</td>	
    	</tr>
    	@endforeach
    </table>
    <div class="col-sm-9 col-sm-offset-9">
        {!! $products->render() !!}
    </div>

</div>


@endsection