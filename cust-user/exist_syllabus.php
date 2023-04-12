<?php require_once '../includes/header.php'; ?>
<body style="background-color: #444654;">
<?php require_once '../includes/top_nav.php';?>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-3 col-xl-2 d-md-block background-color-custom sidebar collapse">
            <div class="mh-100">
                <div class="d-grid">
                    <a href="new_syllabus.php" class="btn btn-outline-secondary text-start text-light btn-lg py-3" style="font-size: 15px;"><i class='bx bx-list-plus me-2' style="font-size:20px; vertical-align: middle;"></i>New Syllabus</a>
                </div>
                <ul class="nav flex-column text-decoration-none">
                    <li class="nav-item pt-1 text-truncate">
                        <a href="exist_syllabus.php" class="nav-link active">
                            <div class="row"></div>
                            <i class='bx bxs-book-reader me-2'></i>
                            <span class="links-name">First Syllabus</span>
                            <i class='bx bxs-trash-alt cust-marg-s'></i>
                        </a>
                    </li>
                </ul>
                <div class="position-absolute bottom-0 start-0 w-100 px-2 mb-2">
                    <hr class="line">
                    <ul class="nav flex-column text-decoration-none">
                        <li class="nav-item">
                            <a href="#" class="nav-link" title="Settings">
                                <i class='bx bx-cog me-2' style="font-size:20px; vertical-align: middle;"></i>
                                <span class="links-name">Settings</span>
                            </a>
                        </li>
                        <li id="logout-link" class="nav-item">
                            <a class="logout-link nav-link text-decoration-none text-light" href="../index.php" title="Logout">
                                <i class='bx bx-log-out me-1' style="font-size:20px; vertical-align: middle;" ></i>
                                <span class="links-name">Log out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<main class="col-md-9 ms-sm-auto col-lg-9 col-xl-10 p-md-4" >
  <div class="w-100 text-light">
    <?php include_once 'exist_process.php';?>
  </div>
</main>

<script src="../js/multi_form.js"></script>
<script>
  $('.cust-btn').on('click', function (event) {
    event.preventDefault();
    $('.cust-div').addClass('active');
});

function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>
</html>
