<html>
<head>
  <title>
     Registration Form
  </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>
<body >
<div class="album py-5 bg-light" style="height:100vh;">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="card border-success" style="max-width: 30rem;padding: 2%;">
                    <h2 style="text-align:center; color: gray;"><u> <b>Login</b></u> </h2> <hr>
                    <div class="card-body">
                        <form method="post">
                            <div class="mb-3">
                                <label for="login_email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="login_email" name="email" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="login_password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="login_password" name="pass" placeholder="password">
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="login" id="login" value="Login" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>