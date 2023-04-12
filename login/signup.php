<?php require_once '../includes/header.php'; ?>
<body>

<div class="d-flex justify-content-center align-items-center mt-5" style="padding-bottom: 40px;">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                <div class="card-body">
                    <div class="text-center mb-2"><img src="../img/logo.png" class="img-fluid" style="width:90px"></div>
                    <h5 class="card-title text-center">Create Account</h5>
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-12 form-floating mb-2">
                            <input type="text" class="form-control" id="usrname" placeholder="User Name" required>
                            <label for="usrname" class="ms-2">Username</label>
                            <div class="valid-feedback">
                                Username is Available.
                            </div>
                            <div class="invalid-feedback">
                                Please Enter Username.
                            </div>
                        </div>
                        <div class="col-md-6 form-floating mb-2">
                            <input type="text" class="form-control" id="first_name" placeholder="First Name" required>
                            <label for="first_name" class="ms-2">First Name</label>
                            <div class="invalid-feedback">
                                Please Enter First Name.
                            </div>
                        </div>
                        <div class="col-md-6 form-floating mb-2">
                            <input type="text" class="form-control" id="mid_name" placeholder="Middle Name">
                            <label for="mid_name" class="ms-2">Middle Name</label>
                            <div class="valid-feedback">
                                Can Be Skipped.
                            </div>
                        </div>
                        <div class="col-md-12 form-floating mb-2">
                            <input type="text" class="form-control" id="lst_name" placeholder="Last Name" required>
                            <label for="lst_name" class="ms-2">Last Name</label>
                            <div class="invalid-feedback">
                                Please Enter Last Name.
                            </div>
                        </div>
                        <div class="col-md-12 form-floating mb-1">
                            <input type="email" class="form-control" id="email" placeholder="Email" required>
                            <label for="email" class="ms-2">WMSU E-mail Account</label>
                            <div class="invalid-feedback">
                                Please Enter a Valid WMSU E-mail Account.
                            </div>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" required>
                                <option selected disabled value="">Choose Department</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="floatingSelect" class="ms-2">Department</label>
                            <div class="invalid-feedback">
                            Please select a department.
                            </div>
                        </div>
                        
                        <label>Sex</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="male" name="sex" required>
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="female" name="sex" required>
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                            <input type="radio" style="display:none;" required>
                            <div class="invalid-feedback">
                                Please select an option.
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="file_id" class="mb-1 ms-1">WMSU ID</label>
                            <input type="file" id="file_id" class="form-control" aria-label="file example" required>
                            <div class="invalid-feedback">Upload Official WMSU ID.</div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                            </div>
                        </div>
                        <div class="d-grid col-12">
                            <button class="btn btn-primary" type="submit">Sign Up</button>
                        </div>
                        <p class="text-center">Already Have An Account? <a href="login.php" class="text-decoration-none" style="color: #d24d57 !important;">Log In</a></p>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

</body>
</html>
