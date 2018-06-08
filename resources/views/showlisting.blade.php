@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  {{ $listing->name }}
                  @if($listing->user_id == auth()->user()->id)
                    <span style="float: right;"><a class="btn btn-sm btn-success" href="/listings/{{$listing->id}}/edit">Edit</a></span>
                  @endif
                </div>
                <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item"><strong>Address: </strong>{{ $listing->address }}</li>
                      <li class="list-group-item"><strong>WebSite: </strong>{{ $listing->website }}</li>
                      <li class="list-group-item"><strong>E-Mail: </strong>{{ $listing->email }}</li>
                      <li class="list-group-item"><strong>Phone: </strong>{{ $listing->phone }}</li>
                    </ul>
                    <hr>
                    <p>{{ $listing->bio }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
