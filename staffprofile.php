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
    <title> - Bootstrap 5 Admin Dashboard Template</title>
    <style>
    
    .offcanvas-start {
      width: 250px;
    }

    /* Shift content to the right when sidebar is open */
    .content-wrapper {
      margin-left: 250px;
      transition: margin-left 0.3s;
    }

    /* Adjust for smaller screens */
    @media (max-width: 992px) {
      .content-wrapper {
        margin-left: 50;
      }
    }

    /* Ensure content has padding */
    .content-wrapper {
      padding: 20px;
    }

    /* Optional: Customize card and table styling */
    .card {
      margin-bottom: 20px;
    }
    .offcanvas-start {
    width: 250px;
}

/* Shift content to the right when sidebar is open */
.content-wrapper {
    margin-left: 250px;
    margin-top: 56px; /* Adjust this based on your navbar height */
    transition: margin-left 0.3s;
}

/* Adjust for smaller screens */
@media (max-width: 992px) {
    .content-wrapper {
        margin-left: 0; /* Adjust for responsive design */
    }
}

/* Ensure content has padding */
.content-wrapper {
    padding: 20px;
}

/* Optional: Customize card and table styling */
.card {
    margin-bottom: 20px;
}
  </style>
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
          href="#"
          >Welcome To FitZone Fitness Center  </a
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
                <li><a class="dropdown-item" href="index.html">Log Out</a></li>
                
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
     <!-- offcanvas -->
     <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">CORE</div>
            </li>
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">Interface</div>
            </li>
            <li>
             
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                      <span>Fitzone Staff Dashboard</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              
            </li>
            <li>
              <a href="add_item.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Add items</span>
              </a>
            </li>
            <li>
              <a href="add_workout.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Add Workouts</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">Addons</div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>Charts</span>
              </a>
            </li>
            
          </ul>
        </nav>
      </div>
    </div>
    
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-6 mb-3">
          <div class="card h-100">
            <div class="card-header">
              <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
              Area Chart Example
            </div>
            <div class="card-body">
              <canvas class="chart" width="400" height="200"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="card h-100">
            <div class="card-header">
              <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
              Area Chart Example
            </div>
            <div class="card-body">
              <canvas class="chart" width="400" height="200"></canvas>
            </div>
          </div>
        </div>
      </div>
      

        <div class="card mb-3">
                <div class="card-header">
                    <span><i class="bi bi-table me-2"></i></span> Bookings Data Table
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-striped" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>customer_id</th>
                                    <th>trainer_id</th>
                                    <th>booking_date</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'config.php';
                                $sql = "SELECT * FROM bookings";
                                $result = mysqli_query($conn, $sql);

                                if ($result === false) {
                                    echo "Error: " . mysqli_error($conn);
                                } elseif (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['customer_id']; ?></td>
                                    <td><?php echo $row['trainer_id']; ?></td>
                                    <td><?php echo $row['booking_date']; ?></td>
                                    <td><a href="edit_booking.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td>
                                    <td><a href="delete.php ?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='6'>No bookings found.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Customers Data Table -->
            <div class="card">
                <div class="card-header">
                    <span><i class="bi bi-table me-2"></i></span> Customers Data Table
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>full name</th>
                                    <th>mobile number</th>
                                    <th>email</th>
                                    <th>password</th>
                                    <th>address</th>
                                    <th>plan_id</th>
                                    <th>Category</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'config.php';
                                $sql = "SELECT * FROM customers";
                                $result = mysqli_query($conn, $sql);

                                if ($result === false) {
                                    echo "Error: " . mysqli_error($conn);
                                } elseif (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['full_name']; ?></td>
                                    <td><?php echo $row['mobile_number']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['password']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['plan_id']; ?></td>
                                    <td><?php echo $row['category']; ?></td>
                                    <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td>
                                    <td><a href="delete.php ?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='10'>No customers found.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          

            <div class="card mb-3">
                <div class="card-header">
                    <span><i class="bi bi-table me-2"></i></span> Contact Us details 
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-striped" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>full_name</th>
                                    <th>email</th>
                                    <th>massage</th>
                                    <th>submitted_at</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'config.php';
                                $sql = "SELECT * FROM contacts";
                                $result = mysqli_query($conn, $sql);

                                if ($result === false) {
                                    echo "Error: " . mysqli_error($conn);
                                } elseif (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['full_name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['message']; ?></td>
                                    <td><?php echo $row['submitted_at']; ?></td>
                                    <td><a href="reply.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Reply</a></td>
                                    <td><a href="delete.php ?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='6'>No bookings found.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>  


            <div class="card mb-3">
                <div class="card-header">
                    <span><i class="bi bi-table me-2"></i></span> Online Oder Details
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-striped" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>customer_id</th>
                                    <th>email</th>
                                    <th>address</th>
                                    <th>phone_number</th>
                                    <th>total_amount</th>
                                    <th>order_date</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'config.php';
                                $sql = "SELECT * FROM orders";
                                $result = mysqli_query($conn, $sql);

                                if ($result === false) {
                                    echo "Error: " . mysqli_error($conn);
                                } elseif (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['customer_id']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['phone_number']; ?></td>
                                    <td><?php echo $row['total_amount']; ?></td>
                                    <td><?php echo $row['order_date']; ?></td>
                                    
                                    <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>

                                </tr>
                                <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='6'>No bookings found.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    <span><i class="bi bi-table me-2"></i></span> Online Oder items
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-striped" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>order_id</th>
                                    <th>item_id</th>
                                    <th>quantity</th>
                                    <th>price</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'config.php';
                                $sql = "SELECT * FROM order_items";
                                $result = mysqli_query($conn, $sql);

                                if ($result === false) {
                                    echo "Error: " . mysqli_error($conn);
                                } elseif (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['order_id']; ?></td>
                                    <td><?php echo $row['item_id']; ?></td>
                                    <td><?php echo $row['quantity']; ?></td>
                                    <td><?php echo $row['price']; ?></td>
                                    
                                    
                                    <td><a href="delete.php ?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='6'>No bookings found.</td></tr>";
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
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
    
  </body>
</html>