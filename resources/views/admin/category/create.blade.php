@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Add New Category</h3> 
                </div>

                <div class="card-body">
                   
                {!! Form::open(['url' => action('CategoryController@store'), 'method' => 'post', 
                    'id' => 'product_add_form','class' => 'category_form ' , 'files' => true ]) !!}
                <div class="form-group">    
                    {!! Form::label('category_name', ('Category Name') . ':*') !!}
                    
                    {!! Form::text('category_name', null, ['class' => 'form-control', 'required',
                    'placeholder' => ('Category name')]); !!}
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
