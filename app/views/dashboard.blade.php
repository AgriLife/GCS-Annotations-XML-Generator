@extends('layouts.master')

@section('main')
	<div class="row">
		<div class="large-10 columns">
			@if ( Session::get('notice') )
				<div data-alert class="alert-box success">
					{{ Session::get('notice') }}
				</div>
			@endif
			<h2>Dashboard - {{ $user->email }}</h2>
		</div>
		<div class="large-2 columns">
			<a href="#" class="button">Edit Account</a>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<p><strong>API Key: </strong><pre>{{ Crypt::decrypt($user->api_key) }}</pre></p>
			<p><a href="#" class="button">Regenerate</a></p>
		</div>
	</div>
	<div class="row">
		<hr>
		<div class="large-12 columns">
			<h3>Custom Search Engines</h3>
			<table>
				<thead>
					<tr>
						<th>Name</th>
						<th>Label</th>
					</tr>
				</thead>
				<tbody>
					@foreach($searches as $search)
					<tr>
						<td>{{ $search->name }}</td>
						<td>{{ $search->label }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<hr>
		<div class="large-12 columns">
			<h3>Sites</h3>
			<table>
				<thead>
					<tr>
						<th>Name</th>
						<th>URL</th>
						<th>Comment</th>
					</tr>
				</thead>
				<tbody>
					@foreach($sites as $site)
					<tr>
						<td>{{ $site->name }}</td>
						<td>{{ $site->url }}</td>
						<td>{{ $site->comment }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop