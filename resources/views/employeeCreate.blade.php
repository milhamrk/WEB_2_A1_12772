<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>List Employee</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
	<div class="container">     
	<form action="{{ isset($data) ? route('employee.update',$data->id_employee) : route('employee.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
				
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="name" value="{{ isset($data) ? $data->name : '' }}">
                </div>
				<div class="form-group">
                    <label for="nama">Username:</label>
                    <input type="text" class="form-control" id="usr" name="username" value="{{ isset($data) ? $data->username : '' }}">
                </div>
				<div class="form-group">
                    <label for="nama">Password:</label>
                    <input type="password" class="form-control" id="usr" name="password" value="{{ isset($data) ? $data->password : '' }}">
                </div>
				<div class="form-group">
                    <label for="nama">CompanyEmail:</label>
                    <input type="email" class="form-control" id="usr" name="companyEmail" value="{{ isset($data) ? $data->companyEmail : '' }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
    </body>
</html>
