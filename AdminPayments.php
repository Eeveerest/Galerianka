<?php
session_start();
require_once 'database.php';
  if(!isset($_SESSION['user_login'])){
   echo "<script>window.location.href = '/LogIn.php';   </script>";
    }
  else if ($_SESSION['user_type'] != "admin") {
    echo "<script>window.location.href = '/LogIn.php';   </script>";
  }
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galerianka</title>

    <script src="https://kit.fontawesome.com/06d4f426f5.js" crossorigin="anonymous">
      </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="custom.css" rel="stylesheet">
  <script type="text/javascript" src="AdminPaymentsJS.js"></script>
  

</head>

<body>
  <div class="main">
    <!-- Header -->
    <?php include('Header.php'); ?>
    
    <!--Separator-->
    <nav class="navbar navbar-expand blue-border d-none d-md-block">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active link-border category-link" aria-current="page" data-bs-toggle="modal" data-bs-target="#deliveryModal">Add payment type</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active link-border category-link" aria-current="page" href="AdminPanel.php">Back</a>
            </li>
          </ul>
      </div>
     </div>
    </nav>      
    <!--End Separator-->
    
    
    <!-- Table and search-->
    <div class="container list">
        <form action="" method="post" id="searchform">
        <div class="row my-5">
            <div class="col-md-4">
                <input type="text" class="form-control" name="search" id="search" placeholder="ID or name" value=""/>
            </div>
            <div class="col-md-8 text-left">
                <input type="submit" class="btn btn-success" style="margin: 0; border-color: whitesmoke;" name="submit" value="Search" />
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col-12">

            <h3>Payment types</h3>
                <table class="table table1">
                    <thead>
                    <tr>
                        <th class="th1">ID</th>
                        <th class="th1">Name</th>
                        
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody id="paymentsData">
                    <tr>
                        <td colspan="9"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

   <!-- Modal add product -->
<div class="modal fade" id="deliveryModal" tabindex="-1" aria-labelledby="deliveryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="deliveryModalLabel">Add payment type</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="" method="post" id="addform">    
        <div class="modal-body">
       <div class="form-group">
            <label for="InputName">Name</label>
            <input type="text" class="form-control" name="InputName" id="InputName" value="">
            <span class="error" id="nameError"></span>
        </div>
      
        
      </div>   
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="margin-top: 1rem;" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" style="color: white; margin-top: 1rem;" name="submit-edit" id="submit-edit" value="Add" />
      </div>          
    </form>
    </div>
  </div>
</div>


<!-- Modal delete -->
<div class="modal fade" id="deleteModal" name="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete payment type</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="del.php" method="post" name="reserve">
      <div class="modal-body">
        <input type="hidden" name="reserve_id" id="reserve_id">
      <p id="bookdel"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
        <button type="button" id="deletedata" name="deletedata" style="color: white" onclick=Del() class="btn btn-success">Delete</button>
      </div>
    </form>
    </div>
  </div>
</div>
  

<!-- Script delete and edit -->
<script>
    var iden = 0;
    function Id(btn)
    {
        iden = btn.id;
        text = "Are you sure you want to delete payment type with id  "+iden+"?";
        document.getElementById("bookdel").innerHTML = text;
    }

    function Del()
        {
            let base = "delAdminPayments.php?id=";
            let urldel = base + iden;
        $.ajax({
           url: urldel,
            method: 'POST'
        }).done(function() {
            $("#deleteModal").modal('hide');
            $('#paymentsData').html('<tr>\n' +
          '<td colspan="9"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></td>\n' +
          '</tr>');
            $.ajax({
                url: "getAdminPayments.php",
                method: 'POST'
            }).done(function( data ) {
                $('#paymentsData').html(data);
                $('td').css( 'padding-bottom', "1rem" );
                $('td').css( 'padding-top', "1rem" );
                $('td').css( 'color', "whitesmoke" );
                $('td').css( 'border-bottom', "2px solid whitesmoke" );
            });
        });
            }
  
  function IdEdit(btn){
    document.getElementById('PaymentId').value = btn.id;

  }


</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="AdminPaymentsJS.js"></script>
</body>
</html>   
