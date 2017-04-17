@foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has($msg))
    <div id="flash-alert" class="alert alert-{{ $msg }} text-center">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

      {{ Session::get($msg) }}
    </div>
  @endif
@endforeach
