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
  <script type="text/javascript" src="AdminAsignedJS.js"></script>
  

</head>

<body>
  <div class="main">
    <!-- Header -->
    <?php include('Header.php') ?>
    
    <!--Separator-->
    <nav class="navbar navbar-expand blue-border d-none d-md-block">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active link-border category-link" aria-current="page" href="AdminCategories.php">Back</a>
            </li>
          </ul>
      </div>
     </div>
    </nav>      
    <!--End Separator-->
    
    
    <!-- Table and search-->
    <div class="container list">
        
        <div class="row">
            <div class="col-12">

            <h3>Assigned to <?php $name = $pdo->query('SELECT name FROM categories where id = '.$_GET['id']);foreach ($name as $row) echo $row['name']; ?></h3>
              <button type="button" onclick="Id(this)" class="btn btn-success btn-whitesmoke del" data-bs-toggle="modal" data-bs-target="#addModal" id="Asign">Add products</button>   
              <input id="iden" type="hidden" value="<?php echo $_GET['id']; ?>" /> 
                <table class="table table1">
                    <thead>
                    <tr>
                        <th class="th1">ID</th>
                        <th class="th1">Name</th>
                        
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody id="productsData">
                    <tr>
                        <td colspan="9"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>


     <!-- Modal add product -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="addModalLabel">Add product to category</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="post" id="addform">    
        <div class="modal-body">
       <div class="form-group">
            <label for="InputId">Product</label>
            <select class="form-control" id="InputId" name="InputId">
                <option value=""></option>
                        <?php  
                         $publish = $pdo->query('SELECT id, name FROM products where id not in (select product_id from products_categories where category_id = '.$_GET['id'].')');
                        foreach ($publish as $row) {
                        echo '<option value="'.$row['id'].'">'.$row['name'].'</option>"';
                            }
                        ?>
            </select>
            <span class="error" id="productError"></span>
        </div>  
      </div>   
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" style="color: white" name="submit-zap" id="submit-zap" value="Add" />
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
        <h5 class="modal-title" id="deleteModalLabel">Delete product from category</h5>
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
    
  

<!-- Script delete -->
<script>
    var iden = 0;
    function Id(btn)
    {
        iden = btn.id;
        text = "Are you sure you want to delete from category product with id  "+iden+"?";
        document.getElementById("bookdel").innerHTML = text;
    }

    function Del()
        {
            let base = "delAdminAssign.php?id=";
            let urldel = base + iden;
        $.ajax({
          url: urldel,
          method: 'POST',
          data: {
                  CategoryId: $('#iden').val()            
                }
        }).done(function() {
            $("#deleteModal").modal('hide');
            $('#productsData').html('<tr>\n' +
          '<td colspan="9"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></td>\n' +
          '</tr>');
            $.ajax({
                url: "getAdminAsigned.php",
                method: 'POST',
                data: {
                  id: $('#iden').val()            
                }
            }).done(function( data ) {
                $('#productsData').html(data);
                $('td').css( 'padding-bottom', "1rem" );
                $('td').css( 'padding-top', "1rem" );
                $('td').css( 'color', "whitesmoke" );
                $('td').css( 'border-bottom', "2px solid whitesmoke" );
            });
        });
            }


</script>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="AdminAsignedJS.js"></script>
</body>
</html>   
