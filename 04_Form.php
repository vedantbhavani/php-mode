<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "vsdata";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error! </strong> We are facing some technical issues and your entry was not submitted successfully! We regret the inconvinience cause.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    $sql = "INSERT INTO `form` (`name`, `email`, `description`, `date & time`) VALUES ('$name', '$email', '$desc', current_timestamp())";

    $result =  mysqli_query($conn, $sql);
    if (!$result) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error! </strong> We are facing some technical issues and your entry was not submitted successfully! We regret the inconvinience cause.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else {
      if ($name != "" && $email != "" && $desc != "") {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success : </strong> Your entry will be added successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error! </strong>Fill the all blanks either otherwise your entry was not submitted successfully!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
      }
    }
  }

  ?>
  <div class="container w-50  mt-2">
    <h1 class="text-center">Contact us for your concerns</h1>
    <form action="/phpmode/04_Form.php" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" id="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="desc" class="form-label">Description</label>
        <textarea class="form-control" name="desc" id="desc" rows="6"></textarea>
      </div>
      <button type="submit" class="btn btn-primary d-block mx-auto">Submit</button>
    </form>
  </div>
</body>

</html>