<?php
session_start();
require_once 'database.php';
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
  <script type="text/javascript" src="ProductPage.js"></script>

</head>

<body>
  <div class="main">
    <!-- Header -->
    <?php include('Header.php'); ?>
    
    <!--Separator-->
    <nav class="navbar navbar-expand blue-border d-none d-md-block">
      <div class="container-fluid">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">
              <img src="Pictures\SearchIcon.png" alt="User" width="25" height="25">
            </button>
          </form>
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active link-border category-link" aria-current="page" href="Tactical.php">Tactical</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active link-border category-link" aria-current="page" href="Hunting.php">Hunting</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active link-border category-link" aria-current="page" href="AllKnives.php">All Knives</a>
            </li>
          </ul>
      </div>
    </nav>      
    <!--End Separator-->
    <input type="hidden" id="id" value="<?php echo $_GET['product'] ?>">
    <div class="col" id="productData">
     

              
                      </div>


    <footer>
      <?php include('Footer.php'); ?>    
    </footer>
    
        
        <script>
          function Favorite(id) {
            let elem = document.getElementById("heart_product_"+id);
            let isMainPresent = elem.classList.contains("fa-heart-o");
            if (isMainPresent) {
              elem.className = "fa-solid fa-heart";
              $.ajax({
                url: "addProductrFavorites.php",
                method: 'POST',
                data: {
                  id: id
                },
              }).done(function( data ) {          
              })
                }
            else {
              elem.className = "fa fa-heart-o";
              $.ajax({
                url: "delProductFavorites.php",
                method: 'POST',
                data: {
                  id: id
                },
              }).done(function( data ) {         
              })
                }
          }
          
          function Add_To(ids){
            $.ajax({
              url: "addToCart.php",
              method: 'POST',
              data: {
                ids: ids
              },
              success: function (response)
              {
                if (response.match("1")) {
                  alert("Product added to cart");
                }
                else if (response.match("2")){
                  alert("Product already in cart");
                }
              }
            });
            
          }
       
       </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="ProductPage.js"></script>

</body>

</html>
                      <!-- Product
                            <div class="container-fluid" style="padding: 11px;">
        <div class="row name-border" style="background-color: rgb(50, 53, 46, 0.5); border-color: rgb(100, 112, 84);">
          <div class="col-lg-2 order-lg-1 order-2">
            <ul class="image_list">
              <li data-image="Pictures\Knife2-2.jpg"><img src="Pictures\Knife3-2.jpg" alt=""></li>
              <li data-image="Pictures\Knife2-3.jpg"><img src="Pictures\Knife3-3.jpg" alt=""></li>
              <li data-image="Pictures\Knife2-4.jpg"><img src="Pictures\Knife3-4.jpg" alt=""></li>
            </ul>
          </div>
          <div class="col-lg-4 order-lg-2 order-1">
            <div class="image_selected"><img src="Pictures\Knife3.jpg" alt=""></div>
          </div>
          <div class="col-lg-6 order-3">
            <div class="product_description">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="Tactical.php">Tactical</a></li>
                  <li class="breadcrumb-item active">Nikon DSLR</li>
                  <span class="wish-icon" style="margin-left: 3rem; font-size: 28px;"><i class="fa fa-heart-o" id="heart"></i></span>
                </ol>
              </nav>
              <div class="product_name">Nikon DSLR</div>
              <div> <span class="product_price">$250.00</span> </div>
              
              <div>
                <span class="product_info">Manufacturer: DOMINIK SULEJ KNIVES<span><br>
                  <span class="product_info">Availability: Available (1 pcs)<span><br>
                    <span class="product_info">Delivery time: Available immediately<span><br>
                      <div>
                        <div class="row">
                          <div class="col-md-5"></div>
                        </div>
                        <div class="col-md-7"> </div>
                      </div>
                      
                      </div>
                      <div class="align-middle">
                        <div class="d-flex flex-row">
                          <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                          </button>
                            
                            <input id="quantity" min="0" name="quantity" value="1" type="number"
                            class="form-control form-control-sm" style="width: 50px;" />
                            
                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                              <i class="fas fa-plus"></i>
                            </button>
                            
                            </div>
                            </div>
                              <div class="row">                    
                                <div class="col-6">
                                  <button type="button" class="btn btn-success shop-button">Add to Cart</button>
                                </div>
                              </div>
                            </div>
                            </div>
                            </div>
                      
                      -->
                      
                              <!-- Product details
              <div class="row" style="margin-top: 1rem;">
                  <div  class="col-md-6"> <a href="#" data-abc="true"> <span  class="ml-auto view-all"></span> </a> </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button  class="nav-link active" id="details-tab" data-bs-toggle="tab"  data-bs-target="#details-tab-pane" type="button" role="tab"  aria-controls="details-tab-pane"  aria-selected="true">Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button  class="nav-link" id="Opinions-tab" data-bs-toggle="tab"  data-bs-target="#Opinions-tab-pane" type="button" role="tab"  aria-controls="Opinions-tab-pane"  aria-selected="false">Opinions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button  class="nav-link" id="Shipping-tab" data-bs-toggle="tab"  data-bs-target="#Shipping-tab-pane" type="button" role="tab"  aria-controls="Shipping-tab-pane"  aria-selected="false">Shipping</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div  class="tab-pane fade show active black-border" style="margin-top: 2rem;  margin-bottom: 2rem;" id="details-tab-pane" role="tabpanel"  aria-labelledby="details-tab" tabindex="0">
                          <table class="col-md-12">
                          <tbody>
                              <tr class="row mt-10">
                                  <td class="col-md-4"><span class="p_specification">Blade:</span> </td>
                                  <td class="col-md-8">
                                      <ul>
                                          <li>A8mod steel, thickness 7.8 mm (0.3071), hardness 58 HRC</li>
                                      </ul>
                                  </td>
                              </tr>
                              <tr class="row mt-10">
                                  <td class="col-md-4"><span class="p_specification">Blade finish:</span> </td>
                                  <td class="col-md-8">
                                      <ul>
                                          <li> Satin </li>
                                      </ul>
                                  </td>
                              </tr>
                              <tr class="row mt-10">
                                  <td class="col-md-4"><span class="p_specification">Handle:</span> </td>
                                  <td class="col-md-8">
                                      <ul>
                                          <li>G10, Micarta, Brass pins</li>
                                      </ul>
                                  </td>
                              </tr>
                              <tr class="row mt-10">
                                  <td class="col-md-4"><span class="p_specification">Guard: </span> </td>
                                  <td class="col-md-8">
                                      <ul>
                                          <li>Bronze</li>
                                      </ul>
                                  </td>
                              </tr>
                              <tr class="row mt-10">
                                  <td class="col-md-4"><span class="p_specification">Sheath: </span> </td>
                                  <td class="col-md-8">
                                      <ul>
                                          <li>Leather</li>
                                      </ul>
                                  </td>
                              </tr>
                              <tr class="row mt-10">
                                  <td class="col-md-4"><span class="p_specification">Weight:</span> </td>
                                  <td class="col-md-8">
                                      <ul>
                                          <li>648 g (22.86 oz)</li>
                                      </ul>
                                  </td>
                              </tr>
                              <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Overall length:</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li>358 mm (14.09 ")</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Blade length:</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li>216 mm (8.50 ")</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Blade width:</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li>49 mm (1.93 ")</li>
                                    </ul>
                                </td>
                            </tr>
                          </tbody>
                      </table>  
                        </div>
                        <div class="tab-pane fade" id="Opinions-tab-pane" role="tabpanel" aria-labelledby="Opinions-tab" tabindex="0">
                            <div class="row text-center " style="margin-top: 2rem; margin-bottom: 2rem;">
                                <div class="col-md-4 mb-4 mb-md-0">
                                  <div class="card">
                                    <div class="card-body py-4 mt-2">
                                      <div class="d-flex justify-content-center mb-4">
                                        <img src="Pictures\prof1.jfif"
                                          class="rounded-circle shadow-1-strong" width="100" height="100" />
                                      </div>
                                      <h5 class="font-weight-bold">  A. Lai</h5>
                                      <ul class="list-unstyled d-flex justify-content-center">
                                        <li>
                                          <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                          <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                          <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                          <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                          <i class="fas fa-star-half-alt fa-sm text-info"></i>
                                        </li>
                                      </ul>
                                      <p class="mb-2">
                                        <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat
                                        ad velit ab hic tenetur.
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 mb-4 mb-md-0">
                                  <div class="card">
                                    <div class="card-body py-4 mt-2">
                                      <div class="d-flex justify-content-center mb-4">
                                        <img src="Pictures\prof2.jfif"
                                          class="rounded-circle shadow-1-strong" width="100" height="100" />
                                      </div>
                                      <h5 class="font-weight-bold">Alexis</h5>
                                      <ul class="list-unstyled d-flex justify-content-center">
                                        <li>
                                          <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                          <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                          <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                          <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                          <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                      </ul>
                                      <p class="mb-2">
                                        <i class="fas fa-quote-left pe-2"></i>Autem, totam debitis suscipit saepe
                                        sapiente magnam officiis quaerat necessitatibus odio assumenda perferendis
                                        labore laboriosam.
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 mb-0">
                                  <div class="card">
                                    <div class="card-body py-4 mt-2">
                                      <div class="d-flex justify-content-center mb-4">
                                        <img src="Pictures\prof3.jfif"
                                          class="rounded-circle shadow-1-strong" width="100" height="100" />
                                      </div>
                                      <h5 class="font-weight-bold">roostertrey</h5>
                                      <ul class="list-unstyled d-flex justify-content-center">
                                        <li>
                                          <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                          <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                          <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                          <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                          <i class="far fa-star fa-sm text-info"></i>
                                        </li>
                                      </ul>
                                      <p class="mb-2">
                                        <i class="fas fa-quote-left pe-2"></i>Cras sit amet nibh libero, in gravida
                                        nulla metus scelerisque ante sollicitudin commodo cras purus odio,
                                        vestibulum in tempus viverra turpis.
                                      </p>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div  class="tab-pane fade black-border" style="margin-top: 2rem;  margin-bottom: 2rem;" id="Shipping-tab-pane" role="tabpanel"  aria-labelledby="Shipping-tab" tabindex="0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a elit sed est cursus viverra. <br>
                                Vivamus fringilla eget est et blandit. Nullam commodo bibendum lorem, sed dictum purus aliquet in. <br>
                                Suspendisse non elit eget eros rutrum vestibulum. Praesent viverra felis vel lacus faucibus egestas vitae luctus leo. <br>
                                Nam aliquet ex vel elit dapibus ornare. Class aptent taciti sociosqu ad litora torquent per conubia nostra, <br>
                                per inceptos himenaeos.</p>

                            <p>Donec  varius venenatis justo sit amet viverra. Aliquam eget risus lorem. Duis  quis eros vitae velit semper lacinia. <br>
                                Integer  in nulla vel diam pellentesque pharetra ac sed ex. Vestibulum laoreet  erat nisi, ut dignissim lectus volutpat eget.<br>
                                 Cras blandit tortor eu consectetur tempus. Curabitur at eros a mauris dapibus rutrum sed eu eros. <br>
                                Donec fringilla nisi sed odio aliquam, nec lacinia nisi pretium. Phasellus pellentesque metus ut consectetur rutrum. <br>
                                Morbi venenatis sapien non porttitor cursus. Curabitur eget ipsum dignissim, tempor mauris mattis, fringilla velit. <br>
                                Donec ultrices aliquam leo.</p>
                        </div>
                      </div>
                      
                  </div>
              </div>
            <div class="row row-underline">
                  
              </div>  
          </div>
      </div>
                             -->