<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Payroll</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php require 'includes/link.php'; ?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="inner_page tables_page">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <?php require 'includes/sidebar.php'; ?>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <?php require 'includes/navbar.php'; ?>
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="container my-2">
                <div class="row">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h1>Add User</h1>
                           </div>
                        </div>
                </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <form action="control/ctrl.add.users.php" method="POST">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label>First Name</label>
                                                <input type="text" name="firstname" placeholder="First Name"
                                                    class="form-control">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label>Middle Name</label>
                                                <input type="text" name="middlename" placeholder="Middle Name"
                                                    class="form-control">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="lastname" placeholder="Last Name"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="row my-2">
                                            <div class="col-md-6 form-group">
                                                <label>Username</label>
                                                <input type="text" name="username" placeholder="Username"
                                                    class="form-control">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label>Password</label>
                                                <input type="text" name="password" placeholder="Password"
                                                    class="form-control">
                                            </div>
                                        </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer -->
                <?php require 'includes/footer.php'; ?>
            </div>
            <!-- end dashboard inner -->
        </div>
    </div>
    <!-- model popup -->
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    Modal body..
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end model popup -->
    </div>
    <?php require 'includes/script.php'; ?>
</body>

</html>