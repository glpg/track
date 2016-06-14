@extends('db.addresses.address')

@section('tablecontent')

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
    	@foreach($addresses as $addr)
    	<tr>
    		<td>{{ $addr->id }}</td>
    		<td>
                <a href="/db/address/view/{{$addr->id}}">
                    {{ $addr->name}}
                </a>
            </td>
            <td>{{ $addr->city }}</td>
            <td>{{ $addr->state }}</td>
            <td>{{ $addr->country}}</td>
            <td>{{ $addr->phonenumber}}</td>
    		<td class='deleterow'>
                <a href="/db/address/delete/{{$addr->id}}">
                    <div class='glyphicon glyphicon-remove' style = 'color : red'></div>
                </a>	
            </td>
            <td class='editrow'>
                <a href="/db/address/edit/{{$addr->id}}">
                    <div class='glyphicon glyphicon-edit' style ='color : blue'></div>
                </a>
            </td>   
    	</tr>
    	@endforeach
    </table>
    <div class="col-sm-9 col-sm-offset-9">
        {!! $addresses->render() !!}
    </div>

</div>


@endsection