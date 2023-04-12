<?php require_once '../includes/header.php'; ?>
<body>

<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
<div class="container py-5">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-4">
            <div class="card">
            <div class="card-body">
                <div class="text-center mb-2"><img src="../img/logo.png" class="img-fluid" style="width:90px"></div>
                <h5 class="card-title text-center mb-3">Log in with your WMSU Account</h5>
                <form>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="inputEmail" placeholder="name@example.com" required>
                    <label for="inputEmail">Email address</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                    <label for="inputPassword">Password</label>
                </div>
                <div class="mb-2 d-flex justify-content-end"><a href="#" class="text-decoration-none">Forgot Password?</a></div>
                <div class="d-grid gap-2">
                    <a href="../cust-user/userpage.php"  class="btn btn-primary">Log in</a>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

</div>

</body>
</html>
