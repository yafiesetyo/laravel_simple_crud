<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="assets/style_login.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body class="bg-success">
        <div id="login">
            @if(Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
                @endif
            <h2 class="font-weight-lighter" style="margin-top: 20px;">Login</h2>
            <div class="d-flex justify-content-center" id="form">
                
                <form method='POST' action='/login/auth'>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control" placeholder="Email or Username" name="uname" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Password" name="pwd" type="password" required>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-success">Login</button> 
                    </center>
                                           
                </form>
            </div>
            <center>
                <a href="/registration" style="color:white">Belum Punya Akun ?</a> 
            </center>
        </div>
    </body>
</html>