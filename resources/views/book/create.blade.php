<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Book Form</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{route('book.store')}}" method="post">
					@csrf
					<h1 class="text-center">Book Registration Form</h1>
					<div class="form-group">
						<label for="bookName">Book Name</label>
						<input type="text" name="bookname" class="form-control" placeholder="Type Book Name" autofocus="">
						@if($errors->has('bookname'))
							<small class="form-text text-danger">
								{{$errors->first('bookname')}}
							</small>
						@endif
					</div>
					<div class="form-group">
						<label for="Date">Publish Date</label>
						<input type="date" name="date" class="form-control" placeholder="Type Publish Date">
						@if($errors->has('date'))
							<small class="text-danger">
								{{$errors->first('date')}}
							</small>
						@endif
					</div>
					<div class="form-group">
						<label for="author">Author Name</label>
						<input type="text" name="author" class="form-control" placeholder="Type Author Name">
						@if($errors->has('author'))
							<small class="text-danger">
								{{ $errors->first('author') }}
							</small>
						@endif
					</div>
					<div class="form-group">
						<label for="">Description</label>
						<textarea name="description" rows="5" class="form-control" placeholder="Describe Book"></textarea>
						@if($errors->has('description'))
							<small class="text-danger">
								{{ $errors->first('description') }}
							</small>
						@endif
					</div>
					<button class="btn btn-primary btn-block btn-lg">Create New Book</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>