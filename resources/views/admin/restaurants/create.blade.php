@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Add New Restaurant</h3> 
                </div>

                <div class="card-body">
                   
                {!! Form::open(['url' => action('RestaurantController@store'), 'method' => 'post', 
                    'id' => 'product_add_form','class' => 'product_form ' , 'files' => true ]) !!}
                <div class="form-group">    
                    {!! Form::label('restaurant_name', ('Restaurat Name') . ':*') !!}
                    
                    {!! Form::text('restaurant_name', null, ['class' => 'form-control', 'required',
                    'placeholder' => ('Restaurat name')]); !!}
                </div>       
                <div class="form-group">    
                    {!! Form::label('restaurant_address', ('Restaurant Address') . ':*') !!}
                    
                    {!! Form::text('restaurant_address', null, ['class' => 'form-control',  'required',
                    'placeholder' => ('Restaurant address')]); !!}
                </div>       
                <div class="form-group">    
                    {!! Form::label('restaurant_phone', ('Restaurant Phone') . ':*') !!}
                    
                    {!! Form::text('restaurant_phone', null, ['class' => 'form-control', 'required',
                    'placeholder' => ('Restaurant phone')]); !!}
                </div>        
                <div class="col-sm-4">
                    <div class="form-group">    
                        {{ Form::submit('SAVE', ['class' => 'btn btn-block btn-success btn-sm']) }}

                    </div> 
                </div>     

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
