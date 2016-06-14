@extends('db.carriers.carrier')

@section('tablecontent')

<div class="col-sm-9">
	

    <table class="table table-striped table-bordered">
    	<tr>
    	    <th>Id</th>
   			<th>Carrier Name</th>
   			<th>Remove</th>
 		</tr>
    	@foreach($carriers as $carrier)
    	<tr>
    		<td>{{ $carrier->id }}</td>
    		<td>{{ $carrier->name}}</td>
    		<td class='deleterow'>
                <a href="/db/carrier/delete/{{$carrier->id}}">
                    <div class='glyphicon glyphicon-remove' style = 'color : red'></div>
                </a>	
            </td>
    	</tr>
    	@endforeach
    </table>
    <div class="col-sm-9 col-sm-offset-9">
        {!! $carriers->render() !!}
    </div>

</div>


@endsection