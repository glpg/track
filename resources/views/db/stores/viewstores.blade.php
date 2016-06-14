@extends('db.stores.store')

@section('tablecontent')

<div class="col-sm-9">
	

    <table class="table table-striped table-bordered">
    	<tr>
    	    <th>Id</th>
   			<th>Store Name</th>
   			<th>Remove</th>
 		</tr>
    	@foreach($stores as $store)
    	<tr>
    		<td>{{ $store->id }}</td>
    		<td>{{ $store->name}}</td>
    		<td class='deleterow'>
                <a href="/db/store/delete/{{$store->id}}">
                    <div class='glyphicon glyphicon-remove' style = 'color : red'></div>
                </a>	
            </td>
    	</tr>
    	@endforeach
    </table>
    <div class="col-sm-9 col-sm-offset-9">
        {!! $stores->render() !!}
    </div>

</div>


@endsection