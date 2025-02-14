<?php
require_once 'database/users.php';
?>
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
      <!-- site icon -->
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
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h1>User List</h1>
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Search User
                    </div>
                    <div class="card-body mb-5">
                        <form method="POST">
                            <div class="row justify-content-center">
                                <div class="col-md-8 form-group">
                                    <input name="search" type="text" class="form-control" placeholder="Search User">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" name="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                     <!-- row -->
                     <div class="row my-4">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>User List and Info</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-bordered">
                                       <thead>
                                          <tr>
                                             <th><b>First Name</b></th>
                                             <th><b>Middle Name</b></th>
                                             <th><b>Last Name</b></th>
                                             <th><b>Username</b></th>
                                             <th><b>Action</b></th>
                                          </tr>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                        if (isset($_POST['submit'])) {
                                            $search = $_POST['search'];
                                            foreach ($user->selectUser($search, 0) as $row ) {

                                        ?>
                                          <tr>
                                             <td><?php echo $row['firstname']?></td>
                                             <td><?php echo $row['middlename']?></td>
                                             <td><?php echo $row['lastname']?></td>
                                             <td><?php echo $row['username']?></td>
                                             <td>
                                                <a href= "edit.user.php" class="btn btn-primary">Edit</a>
                                                <a href= "control/ctrl.delete.user.php" class="btn btn-danger">Delete</a>
                                             </td>
                                          </tr>
                                          <?php
                                            }}
                                          ?>  
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- table section -->
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