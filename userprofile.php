<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Frontendfunn - Bootstrap 5 Admin Dashboard Template</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="$_SESSION['full_name'] = $user['full_name']";
          >FitZone Gym Admin DashBoard </a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                CORE
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Interface
              </div>
            </li>
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span>Layouts</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Dashboard</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="add_news.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Add News Pages</span>
              </a>
            </li>
            <li>
              <a href="add_item.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Add items</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Addons
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>Charts</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Tables</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Dashboard</h4>
          </div>
        </div>
       
        <div class="row">
  <!-- Card with Digital Clock -->
  <div class="col-md-6 mb-3">
    <div class="card h-100">
      <div class="card-header">
        <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
        Digital Clock
      </div>
      <div class="card-body d-flex justify-content-center align-items-center">
        <div id="clock" style="font-size: 2rem; font-weight: bold;"></div>
      </div>
    </div>
  </div>

  <!-- Card with Image -->
  <div class="col-md-6 mb-3">
    <div class="card h-100">
      <div class="card-header">
        <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
        
      </div>
      <div class="card-body d-flex justify-content-center align-items-center">
        <img src="mainBG.jpg" alt="Chart Image" width="400" height="200" style="object-fit: cover;">
      </div>
    </div>
  </div>
</div>

        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Data Table <a class="btn btn-success"href = "addstaff.php">register staff</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                  >
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>full name</th>
                        <th>mobile number</th>
                        <th>email</th>
                        <th>password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tr>
                    </thead>
                    <tbody>
                     <?php

include 'config.php';

// Query to fetch staff data
$sql = "SELECT * FROM staff";

// Execute the query and store the result
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result === false) {
    echo "Error: " . mysqli_error($conn);
} elseif (mysqli_num_rows($result) > 0) {
    // Proceed with fetching and displaying the data
}
?>

                      <?php
                      while ($row=mysqli_fetch_assoc($result)){
                      ?>
                      
                      <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['full_name']?></td>
                        <td><?php echo $row['mobile_number']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['password']?></td>
                        <td><a href="update.php?id=<?php echo $row ['id'] ?>" class="btn btn-primary">Edit </a></td>
                        <td><a href="delete.php ?id=<?php echo $row ['id'] ?>"class="btn btn-danger">delete</a></td>

                      </tr>
                      <?php
                      }
                      
                      ?>

                    </tbody>
                    </tfoot>
                     
                  </table>

                  <span><i class="bi bi-table me-2"></i></span> customer massages 
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                  >
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>full_name</th>
                        <th>email</th>
                        <th>message</th>
                        <th>submited_at</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tr>
                    </thead>
                    <tbody>
                     <?php

include 'config.php';

// Query to fetch staff data
$sql = "SELECT * FROM contacts";

// Execute the query and store the result
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result === false) {
    echo "Error: " . mysqli_error($conn);
} elseif (mysqli_num_rows($result) > 0) {
    // Proceed with fetching and displaying the data
}
?>

                      <?php
                      while ($row=mysqli_fetch_assoc($result)){
                      ?>
                      
                      <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['full_name']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['message']?></td>
                        <td><?php echo $row['submitted_at']?></td>
                        
                        <td><a href="delete.php ?id=<?php echo $row ['id'] ?>"class="btn btn-danger">delete</a></td>

                      </tr>
                      <?php
                      }
                      
                      ?>

                    </tbody>
                    </tfoot>
                     
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-12 mb-3">
        <div class="card">
            <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Trainer Data Table 
                <a class="btn btn-success" href="addtrainer.php">Register Trainer</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="trainerTable" class="table table-striped data-table" style="width: 100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Specialty</th>
                                <th>Mobile Number</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Query to fetch trainer data
                            $sql = "SELECT * FROM trainers"; // Ensure this table exists in your database
                            $result = mysqli_query($conn, $sql);

                            if ($result === false) {
                                echo "Error: " . mysqli_error($conn);
                            } elseif (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['full_name'] ?></td>
                                        <td><?php echo $row['specialty'] ?></td>
                                        <td><?php echo $row['mobile_number'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['password'] ?></td>
                                        <td><a href="update_trainer.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a></td>
                                        <td><a href="delete_trainer.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-12 mb-3">
        <div class="card">
            <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Personal Trainer Data Table 
                <a class="btn btn-success" href="personaltrainer.php">Register Trainer</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="trainerTable" class="table table-striped data-table" style="width: 100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th> Name</th>
                                <th>Specialty</th>
                                <th>hourly_rate </th>
                                <th>experience_years</th>
                                <th>photo</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Query to fetch trainer data
                            $sql = "SELECT * FROM personal_trainers"; // Ensure this table exists in your database
                            $result = mysqli_query($conn, $sql);

                            if ($result === false) {
                                echo "Error: " . mysqli_error($conn);
                            } elseif (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['specialty'] ?></td>
                                        <td><?php echo $row['hourly_rate'] ?></td>
                                        <td><?php echo $row['experience_years'] ?></td>
                                        <td><?php echo $row['photo'] ?></td>
                                        <td><a href="update_trainer.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a></td>
                                        <td><a href="delete_trainer.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>

      </div>
    </main>

    <script>
  // Digital Clock Function
  function updateClock() {
    const now = new Date();
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');
    document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;
  }
  setInterval(updateClock, 1000);
  updateClock(); // Initial call to set clock immediately
</script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>