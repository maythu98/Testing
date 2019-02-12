<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="text-center">
					<h2>Hello,Welcome to My Book Store</h2>
				</div>
				<div>
					<a href="{{route('book.create')}}" class="btn btn-success">Entry New Book</a>
					<br><br><br>
					@if($books->count() > 0)
						@foreach($books as $book)
							<div class="row">
								<div class="col-md-6">
									<h2>Title : <b>{{ $book->bookname }}</b></h2>
								</div>
								<div class="col-md-6">
									<p align="right"> {{ $book->date }} </p>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<h3>Author : <b> {{ $book->author }} </b> </h3>
									<p> {{ $book->description }} </p>
									<div class="row">
										&nbsp &nbsp
										<a href="{{ route('book.edit', $book->id )}}" class="btn btn-primary">Edit</a>
										&nbsp &nbsp
										<form action="{{route('book.destroy', $book->id)}}" method="post">
											@csrf
											@method('delete')
											<button class="btn btn-danger">Delete</button>
										</form>
										
									</div>
								</div>
							</div>
							<hr>
						@endforeach
					@else
						<h1>Book Not Found</h1>
					@endif
				</div>
			</div>
		</div>
	</div>

</body>
</html>