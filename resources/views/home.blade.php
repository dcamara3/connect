@extends('master')

@section('title', 'HomePage')

@section('content')

	Post a Message:
	
	<form action ="create" method="post">
		<input type="text" name="title" placeholder="Title">	
		<input type="text" name="content" placeholder="Content">
		{{-- echoes out hidden field with token value. 
			server remembers token and knows to accept it --}}
		{{ csrf_field() }} 
		<button type="submit">Submit</button> {{-- can also use input type="submit" --}}
	</form>

	<br/>

	Recent Messages:

	<ul>
		@foreach ($messages as $message)
			<li> 
				<strong>{{ $message->title }}</strong>
				<br/>
				{{ $message->content }} 
				<br/>
				{{ $message->created_at->diffForHumans() }}
				{{-- {{ $message->created_at->format('d/m/Y H:i') }} --}}
				<br/>
				<a href="/message/{{ $message->id }}">view</a>
			</li>
		@endforeach
	</ul>

@endsection