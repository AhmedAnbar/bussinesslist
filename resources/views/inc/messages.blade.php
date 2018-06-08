@if(count($errors) > 0)
  @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      {{ $error }}
    </div>
  @endforeach
@endif

@if(session('smsg'))
  <div class="alert alert-success" role="alert">
    {{ session('smsg') }}
  </div>
@endif

@if(session('fmsg'))
  <div class="alert alert-danger" role="alert">
    {{ session('fmsg') }}
  </div>
@endif
