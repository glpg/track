@extends('db.addresses.address')

@section('tablecontent')

<div class="col-sm-9">
     <div class="panel panel-default">
        <div class="panel-heading">Edit address</div>
            <div class="panel-body">
                    {!! Form::model($address, array('url'=>array('/db/address/update', $address->id),'class' => 'form-horizontal')) !!}
                	<div class='form-group'>
    				    {{ Form::label('name', 'Warehouse/Address Name', ['class' => 'col-md-4 control-label']) }}
    				    <div class='col-md-6'>
    				        {{ Form::text('name', null, ['class'=>'form-control']) }}
    				    </div>
    				</div>
                    <div class='form-group'>
                        {{ Form::label('addressline1', 'Addressline 1', ['class' => 'col-md-4 control-label']) }}
                        <div class='col-md-6'>
                            {{ Form::text('addressline1', null, ['class'=>'form-control']) }}
                        </div>
                    </div>
                    <div class='form-group'>
                        {{ Form::label('addressline2', 'Addressline 2', ['class' => 'col-md-4 control-label']) }}
                        <div class='col-md-6'>
                            {{ Form::text('addressline2', null, ['class'=>'form-control']) }}
                        </div>
                    </div>
                    <div class='form-group'>
                        {{ Form::label('city', 'City', ['class' => 'col-md-4 control-label']) }}
                        <div class='col-md-6'>
                            {{ Form::text('city', null, ['class'=>'form-control']) }}
                        </div>
                    </div>
                    <div class='form-group'>
                        {{ Form::label('state', 'State', ['class' => 'col-md-4 control-label']) }}
                        <div class='col-md-6'>
                            {{ Form::text('state', null, ['class'=>'form-control']) }}
                        </div>
                    </div>
                    <div class='form-group'>
                        {{ Form::label('zip', 'Zip', ['class' => 'col-md-4 control-label']) }}
                        <div class='col-md-6'>
                            {{ Form::text('zip', null, ['class'=>'form-control']) }}
                        </div>
                    </div>
                    <div class='form-group'>
                        {{ Form::label('country', 'Country', ['class' => 'col-md-4 control-label']) }}
                        <div class='col-md-6'>
                            {{ Form::text('country', null, ['class'=>'form-control']) }}
                        </div>
                    </div>
                    <div class='form-group'>
                        {{ Form::label('phonenumber', 'Phone Number', ['class' => 'col-md-4 control-label']) }}
                        <div class='col-md-6'>
                            {{ Form::text('phonenumber', null, ['class'=>'form-control']) }}
                        </div>
                    </div>




                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Update Address', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>

    				{!! Form::close() !!}
            </div>
    </div>
</div>

@endsection