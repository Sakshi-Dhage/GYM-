<?php
  $conn=mysqli_connect('localhost','root','','admin');
  $uname=$_SESSION['uname'];
  $query="SELECT * FROM user WHERE uname='$uname'";
  $run=mysqli_query($conn,$query);
  $data=mysqli_fetch_assoc($run);  
?>
<link rel="stylesheet" href="./static/style/styl.css">
<nav class="navbar navbar-expand-lg navbar-light bg-info py-0">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <img src="./static/logo.png" alt="logo" height="50px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="registration.php">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
    <img src="<?php echo $data['photo']; ?>" alt="users" height="50px">
    <div class="dropdown mx-5 border border-light border-2 px-5">
      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        <?php echo $data['name']; ?>
      </a>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="edit_user.php?id=<?php echo $data['id']; ?>">Edit Profile</a></li>
        <li><a class="dropdown-item" href="forgot_pwd.php">Forgot Password</a></li>
        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>