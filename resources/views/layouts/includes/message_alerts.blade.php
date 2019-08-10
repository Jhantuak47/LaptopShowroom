@if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}" style="margin: 9px;"> 
    {!! session('message.content') !!}
    </div>
@endif