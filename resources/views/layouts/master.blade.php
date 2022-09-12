@extends('layouts.base')
@section('base.contant')

<div class="main-wrapper main-wrapper-1">
	@include('layouts.partial.topbar')
	@include('layouts.partial.sidebar')
	@yield('contant')
	@include('layouts.partial.footer')
</div>

@stop 