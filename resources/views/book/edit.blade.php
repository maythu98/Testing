<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Page</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center">Book Edition Page</h1>
				<form action="{{route('book.update', $book)}}" method="post">
					@method('PATCH')
					@csrf
					<div class="form-group">
						<label for="bookName">Book Name</label>
						@if($errors->has('bookname'))
							<input type="text" name="bookname" class="form-control" value="{{old('bookname')}}" autofocus="">
							<small class="form-text text-danger">
								{{$errors->first('bookname')}}
							</small>
						@else
							<input type="text" name="bookname" class="form-control" value="{{$book->bookname}}">
						@endif
					</div>
					<div class="form-group">
						<label for="date">Publish Date</label>
						@if($errors->has('date'))
							<input type="text" name="date" class="form-control" value=" {{old('date')}} ">
						@else 
							<input type="text" name="date" class="form-control" value=" {{$book->date}} ">
						@endif
					</div>
					<div class="form-group">
						<label for="author">Author Name</label>
						@if($errors->has('author'))
							<input type="text" name="author" class="form-control" value=" {{ old('author') }} " >
						@else 
							<input type="text" name="author" class="form-control" value=" {{ $book->author }} " >
						@endif
					</div>
					<div class="form-group">
						<label for="">Description</label>
						@if($errors->has('description'))
							<textarea name="description" cols="20" rows="10" class="form-control">{{old('description')}}</textarea>
						@else
							<textarea name="description" cols="20" rows="10" class="form-control">{{$book->description}}</textarea>
						@endif
					</div>
					<button class="btn btn-primary btn-block btn-lg">Edition Book Record</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>