@extends('master_index')
@section('content')
<img class="bd-placeholder-img" 
    width="100%" height="80%" 
    src="{{asset('uploades/qr/').'/'.$qr->img}}">
@endsection