<html>
    <head>
        <title>Register Page</title>
        <link rel="stylesheet" href="{{url('assets/style_register.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body style="background-color: #233d69;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <a class="navbar-brand font-weight-bold " style="color: white;">Pegawai Controller</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav" style="margin-left: auto;">
                    <li class="nav-item">
                        <a class="nav-link" href="/login" style="color: white;">Login</a>
                    </li>
                </ul>
       
            </div>
        </nav>
        <div class="container" id="register">
            <h1 style="text-align: center; margin-top: 3%;">Create an Account ! </h1>
            <form method="POST" action="/registration/post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Email or Username</label>
                    <input class="form-control" name="uname" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" name="pwd" type="password" required>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input class="form-control" name="addr" required>
                </div>
                <button class="btn btn-success" style="width: 100%;">Register</button>
            </form>            
        </div>
    </body>
</html>