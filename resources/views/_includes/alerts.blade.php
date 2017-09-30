  @if(Session::has('status'))
        <div style="width:100%;text-align:center" class="alert alert-danger is-font-16 m-t-15">{{ Session::get('status') }}</div>
  @endif
  @if(Session::has('success'))
        <div style="width:100%;text-align:center" class="alert alert-success is-font-16 m-t-15">{{ Session::get('success') }}</div>
  @endif
