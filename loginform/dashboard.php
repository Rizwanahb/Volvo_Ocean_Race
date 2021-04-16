
<?php include 'crud.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/c0fc838bea.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <!-- JavaScriptthen Bootstrap JS -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
  <body>

     <!---Nav bar-->
<nav class="navbar navbar-expand-md navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

<div class="collapse navbar-collapse" id="collapsibleNavbar">
    <div class="container-fluid">
        <div class="nav-item">
            <!---Sidebar-->class="navbar-nav"
            <div class=" col-xl-2 sidebar fixed-top">
                <a class="navbar-brand text-white d-block
                mx-auto text-center py-3 mb-4"></a>
                <div class="bottom-border pb-3">
                    <h4 class="text-white">Volvo Ocean Race</h4>
                </div>
                    <ul class="navbar-nav flex-column mt-4">
                      <li class="nav-item"><a class="nav-link text-white p-3 mb-2
                      current"><i class="fas fa-home text-light fa-lg mr-3"></i>
                      Dashboard</a></li>
                
                      <li class="nav-item"><a href="dashboard.php" class="nav-link text-white p-3 mb-2
                      sidebar-link"><i class="fas fa-table text-light fa-lg mr-3"></i>
                      Vis Lister</a></li>
                    </ul>
          
                    <ul class="list-inline">
                       <li class="list-inline-item mr-2">
                       <a href="#" class="text-success">
                       Volvo Ocean Race &copy; 2021</a>
                       </li>
                    </ul>
            </div>
            <!---end of side bar-->

            <!---Top Nav-->
            <div class="col-xl-10  ml-auto top-bar fixed-top top-nav py-3">
              <div class="row  py-3">
                <ul class="col">
                   <h3 class="text-capitalize text-secondary">Velkommen til <?php echo $_SESSION['username']; ?>!</h3>
                </ul>
                <ul class="px-5">
                <a class="nav-link active text-secondary " aria-current="page" href="loginform.php">Log ud</a>
                </ul>
              </div>
            </div>
            <!---End of Top Nav-->
        </div>
    </div>
</div>
</nav>
      <!----End of Navbar-->
    
     
      <!--table-->
<section>
    <div class="container-fluid  py-4">
      <div class="col-xl-10  ml-auto">
        <div class="row">
            <div class="col-xl-10 ml-auto">
                <div class="row align-items-center">
                     <div>
                         <h2 class="ml-auto py-3">Teams Lister</h2>
                         
                          <?php if (isset($_SESSION['message'])): ?>
                          <div class="msg">
                            <?php
                              echo $_SESSION['message'];
                              unset($_SESSION['message']);
                            ?>
                          </div>
                            <?php endif ?>  
                    
                            <?php if (isset($_SESSION['message'])): ?>
                          <div class="msg">
                            <?php
                              echo $_SESSION['message'];
                              unset($_SESSION['message']);
                            ?>
                          </div>
                            <?php endif ?>  

                        <?php $results = mysqli_query($database, "SELECT * FROM ranking ORDER BY points DESC"); ?>
               
                      <div class="table-responsive table-hover col-sm-12">
                        <table class="table">
                            <thead class="thead-dark shadow">
                              <tr>
                                <th>No.</th>
                                <th>Team Navn</th>
                                <th>Points</th>
                                 <th></th>
                                <th colspan="2">Action</th>
                              </tr>
                            </thead>
                      
                            <?php while ($row = mysqli_fetch_array($results)) { ?>
                              <tr>
                                <td></td>
                                <td><?php echo $row['team_navn']; ?></td>
                                <td><?php echo $row['points']; ?></td>
                                <td>
                                  <a href="javascript:void(0);" data-href="editform.php?edit=<?php echo $row['team_id']; ?>" type="button" class="openPopup btn btn-success">Edit</a>   <!--update button for opening update modal form with data of database  -->
                                </td>
                                <td>
                                  <a href="crud.php?del=<?php echo $row['team_id']; ?>" type="bsutton" class="btn btn-danger">Delete</a>
                                </td>
                              </tr>
                            <?php } ?>
                        </table>
                      </div>
                
                       <a href="javascript:void(0);" data-href="editform.php?" type="button" class="openPopup btn btn btn-info">Add Team</a> 

                        <!-- Edit Modal form -->
                        <div class="container">
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                  
                                    <div class="modal-body">

                                    <!--  Dynamic content appaer here...! -->

                                  </div>
                                </div>     
                            </div>
                        </div>
                               

                        <script>
                        $(document).ready(function(){
                            $('.openPopup').on('click',function(){
                                var dataURL = $(this).attr('data-href');
                                $('.modal-body').load(dataURL,function(){
                                    $('#myModal').modal({show:true});
                                });
                            }); 
                        });
                        </script>
                         <!-- End  of edit Modal form -->
                  </div>
               </div>
            </div>
          </div>  
      </div>
    </div>
</section>        
      <!--End of table-->
  
</body>
</html>
