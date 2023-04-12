<?php require_once '../includes/header.php'; ?>
<body style="background-color: #444654;">
<?php require_once '../includes/top_nav.php';?>
<?php require_once '../includes/side_nav.php';?>
<main class="col-md-9 ms-sm-auto col-lg-9 col-xl-10 p-md-4" >
  <div class="w-100 text-light">
    <?php include_once 'process.php';?>
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
