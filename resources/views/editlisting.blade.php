@extends('layouts.app')

@section('title')
Edit Listing
@endsection

@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="card">
      <div class="card-header">
          Edit Listing
          <span style="float: right;"><a href="/dashbord" class="btn btn-outline-secondary btn-sm">Go Back</a></span>
      </div>
      <div class="card-body">
        {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'POST']) !!}
            {{ Form::bsText('name', $listing->name, ['placeholder' => 'Enter Name']) }}
            {{ Form::bsText('address', $listing->address, ['placeholder' => 'Enter Address']) }}
            {{ Form::bsText('website', $listing->website, ['placeholder' => 'Enter Website']) }}
            {{ Form::bsText('email', $listing->email, ['placeholder' => 'Enter E-mail']) }}
            {{ Form::bsText('phone', $listing->phone, ['placeholder' => 'Enter Phone']) }}
            {{ Form::bsTextArea('bio', $listing->bio, ['placeholder' => 'Enter Bio']) }}
            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}

        {!! Form::close() !!}
      </div>

    </div>
  </div>
</div>
@endsection
