<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="card shadow-lg" style="width: 25rem;">
            <div class="card-header bg-white text-center">
                <h3 class="font-weight-bold">Login</h3>
            </div>
            <div class="card-body">
                <form action="proses_login.php" method="post">
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="inputRememberPassword">
                        <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
            <div class="card-footer bg-light text-muted text-center">
                <a href="#" class="small">Forgot Password?</a>
            </div>
        </div>
    </div>
    <footer class="py-4 bg-light mt-auto text-center">
        <div class="container-fluid px-4">
            <div class="small">
                <a href="#" class="text-decoration-none">Privacy Policy</a>
                &middot;
                <a href="#" class="text-decoration-none">Terms &amp; Conditions</a>
            </div>
            <div class="text-muted">Copyright &copy; Bagas Damar Raditya 2024</div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
