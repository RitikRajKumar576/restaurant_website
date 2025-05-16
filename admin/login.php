<html>

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body style="background-color:lightblue">
    <div class="container">
        <!-- <div class="card">
            <div class="card-body">
</div>
        </div> -->
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="margin-top:220px;">
                <div class="card">
                    <div class="card-body" style="padding:20px;">
                        <center>
                            <h4>Login <br>Admin | Panel</h4>
                        </center>
                        <form action="action.php" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email"name="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email" required>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password" required>
                            </div>
                            <center> <button type="submit" name="login_user" value="login_user" class="btn btn-primary">Login</button></center>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


</body>

</html>
