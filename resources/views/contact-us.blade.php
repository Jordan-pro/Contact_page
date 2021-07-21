<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA_Compatible" content="ie=edge">	
	<title>Contact Us</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

	<section style type="padding-top:100px">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card">
						<div class="card-header">
							Contact Us
						</div>
						<div class="card-body">
							@if(Session::has('message_sent'))
								<div class="alert alert-success" role="alert">
									{{Session::get('message_sent')}}
								</div>
							@endif
							<form action="{{route('contact.send')}}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" name="name"/>
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" class="form-control" name="email"/>
								</div>
								<div class="form-group">
									<label for="number">Phone Number</label>
									<input type="text" class="form-control" name="number"/>
								</div>
								<div class="form-group">
									<label for="msg"></label>
									<textarea name="msg" class="form-control" id="" cols="20" rows="5"></textarea>
								</div>
								<button type="submit" class="btn btn-primary float-right">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>