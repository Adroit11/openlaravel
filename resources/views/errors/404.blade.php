@extends('layouts.app')

@section('title', '404 Not Found')

@section('content')
	<div class="content has-text-centered">
		<h2 class="title">
			404 Not Found
		</h2>
		
		{{-- <h4>Comments, Suggestions, Improvements? Let’s talk.</h4> --}}
		<p>
			Woops! Looks like this page doesn't exist.
		</p>
		<a class="button is-secondary" href="{{ url('/') }}">
			Take Me Home
		</a>
	</div>
@stop