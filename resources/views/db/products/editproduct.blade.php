@extends('db.product')

@section('tablecontent')


<div class="col-sm-9">
     <div class="panel panel-default">
        <div class="panel-heading">Edit product</div>
            <div class="panel-body">
                    {!! Form::model($product, array('url'=>array('/db/product/update', $product->id),'class' => 'form-horizontal')) !!}
                    <!-- {!! Form::model($product, array('action' => array('ProductController@updateProd', $product->id),'class' => 'form-horizontal')) !!} -->
                	<div class='form-group'>
    				    {{ Form::label('prod_name', 'Product Name', ['class' => 'col-md-4 control-label']) }}
    				    <div class='col-md-6'>
    				        {{ Form::text('prod_name', null, ['class'=>'form-control']) }}
    				    </div>
    				</div>
                    <div class='form-group'>
                        {{ Form::label('prod_num', 'Product Number', ['class' => 'col-md-4 control-label']) }}
                        <div class='col-md-6'>
                            {{ Form::text('prod_num', null, ['class'=>'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Update Product', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>

    				{!! Form::close() !!}
            </div>
    </div>
</div>


@endsection