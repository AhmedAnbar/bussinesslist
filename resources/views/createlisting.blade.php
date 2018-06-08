@extends('layouts.app')

@section('title')
Create New List Item
@endsection

@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="card">
      <div class="card-header">
          Create Listing
      </div>
      <div class="card-body">
        {!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}
            {{ Form::bsText('name', '', ['placeholder' => 'Enter Name']) }}
            {{ Form::bsText('address', '', ['placeholder' => 'Enter Address']) }}
            {{ Form::bsText('website', '', ['placeholder' => 'Enter Website']) }}
            {{ Form::bsText('email', '', ['placeholder' => 'Enter E-mail']) }}
            {{ Form::bsText('phone', '', ['placeholder' => 'Enter Phone']) }}
            {{ Form::bsTextArea('bio', '', ['placeholder' => 'Enter Bio']) }}

            {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}

        {!! Form::close() !!}
      </div>

    </div>
  </div>
</div>
@endsection
