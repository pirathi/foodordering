@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Create New Menu Items</h3> 
                </div>

                <div class="card-body">
                   
                {!! Form::open(['url' => action('ProductController@store'), 'method' => 'post', 
                    'id' => 'product_add_form','class' => 'product_form ' , 'files' => true ]) !!}
                <div class="form-group">    
                    {!! Form::label('item_name', ('Menu Item Name') . ':*') !!}
                    
                    {!! Form::text('item_name', null, ['class' => 'form-control', 'required',
                    'placeholder' => ('Menu Item name')]); !!}
                </div>       
                <div class="form-group">    
                    {!! Form::label('item_description', ('Menu Item Description') . ':*') !!}
                    
                    {!! Form::textarea('item_description', null, ['class' => 'form-control','rows' => 3,  'required',
                    'placeholder' => ('Menu Item description')]); !!}
                </div>         
                <div class="form-group">    
                    {!! Form::label('item_category', ('Menu Item Category') . ':*') !!}

                    {!! Form::select('category_id', $categories,  null, ['placeholder' => __('Select category'), 'class' => 'form-control select2']); !!}
                    
                </div>       
                <div class="form-group">    
                    {!! Form::label('restaurant', ('Restaurant') . ':*') !!}
                    
                    {!! Form::select('restaurant_id', $restaurants,  null, ['placeholder' => __('Select restaurant'), 'class' => 'form-control select2']); !!}
                </div>     
                <div class="form-group">    
                    {!! Form::label('price', ('Menu Item Price') . ':*') !!}
                    
                    {!! Form::text('price', null, ['class' => 'form-control', 'required',
                    'placeholder' => ('Menu Item price')]); !!}
                </div>     
                <div class="form-group">    
                    {!! Form::label('image', ('Menu Item Image') . ':*') !!}
                    {!! Form::file('menu_image[]', ['multiple' => true]) !!}

                </div>     
                <div class="form-group">    
                    {!! Form::label('video_url', ('Menu Item Sort Video') . ':*') !!}
                    
                    {!! Form::text('video_url', null, ['class' => 'form-control', 
                    'placeholder' => ('Menu Item Sort Video')]); !!}
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
