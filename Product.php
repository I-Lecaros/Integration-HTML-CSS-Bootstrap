<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UINITY</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- End Bootstrap CSS -->
  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
  <!-- End Bootstrap Bundle -->
  
  <!-- icon fonts stylesheet -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- End icon fonts stylesheet -->
  <link rel="stylesheet" href="main.css">
</head>
<body><!-- body -->
  
    <!-- <header> -->
    <?php include('nav.php');?>
    <!-- </header> -->
    
    <main> <!-- main -->
      
      <div class="container">
        <div class="row justify-content-end align-items-center">
          
          <div class="col-12 mt-5 mb-5">
            <h1 class="titre">Fashion Product Name</h1>
            <v class="soustitre">Women / Dress</v>
          </div>
          
        </div>
      </div>
      
      <div class="container">
        <div class="row">
          
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6"><!-- colonne gache -->
            
            <img src="Photo-image/produit-robe.jpg" class="img-thumbnail" alt="produit-robe">
          </div>
          
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6"><!-- colonne droite -->
            <div class="row">
              <div class="col-12">
                
                <!--price start-->
                <div class="row">
                  <div class="col-12">
                    <b class="fs-4">$500</b>
                    <span class="badge bg-danger">30% Off</span>
                    <span class="text-secondary">5 pièces left</span> <br>
                    
                    <div class="col-12"></div>
                    <p class="text-decoration-line-through text-secondary text-start">$1000</p>
                    
                  </div>
                </div>
                <!--trait-1-->
                <div class="container-fluid gris mt-5">
                  <div class="row"></div>
                </div>
                
                <!--price end-->
                
                <p class="text-start mt-4">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit... </p>
                
                <!--size start-->
                <div class="row justify-content-between">
                  <div class="col-6">
                    <p class="text-start">Size</p>
                  </div>
                  
                  <div class="col-6 text-end">
                    <button type="button" class="btn btn-outline-dark">S</button>
                    <button type="button" class="btn btn-dark">M</button>
                    <button type="button" class="btn btn-outline-dark">L</button>
                    <button type="button" class="btn btn-outline-secondary">XL</button>
                  </div>
                </div>
                <!--size end-->
                
                <!--color start-->
                <div class="row justify-content-between">
                  <div class="col-6 mt-2">
                    <p class="text-start">Color</p>
                  </div>
                  
                  <div class="col-6 mt-2 text-end">
                    <button type="button" class="mybutton rounded-circle btn btn-warning rose"></button>
                    <button type="button" class="mybutton rounded-circle btn btn-warning"></button>
                    <button type="button" class="mybutton rounded-circle btn btn-danger"></button>
                  </div>
                </div>
                <!--color end-->
                
                <!--quantité start-->
                <div class="row justify-content-between">
                  <div class="col-6 mt-2">
                    <p class="text-start">Quantity</p>
                  </div>
                  
                  <div class="col-6 mt-2 text-end">
                    <div class="dropdown">
                      <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Quantity
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">1</a></li>
                        <li><a class="dropdown-item" href="#">2</a></li>
                        <li><a class="dropdown-item" href="#">3</a></li>
                        <li><a class="dropdown-item" href="#">4</a></li>
                        <li><a class="dropdown-item" href="#">5</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--quantité end-->
                
                <!--shipping start-->
                <div class="row justify-content-between">
                  <div class="col-6 mt-2">
                    <p class="text-start">Color</p>
                  </div>
                  
                  <div class="col-6 mt-2 text-end">
                    <p class="happy">US & Canada <span class="badge bg-success">FREE SHIPPING</span> <br>
                      $10 Worldwide
                    </p>
                  </div>
                </div>
                <!--shipping END-->
                
                
                <!--button ADD-->
                <div class="row ">
                  <div class="col-12">
                    <button type="button" class="btn btn-outline-dark text-start">ADD TO MY CART
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                      </svg>
                    </button>
                  </div>
                </div>
                
                <!--button ADD END-->
                
                <div class="row mt-3">
                  
                  <div class="col-12">
                    
                    <p class="text-secondary">Share One:
                    </p>
                    
                  </div>
                </div>
                
                <!-- btn RS -->
                <div class="row">
                  
                  <div class="col-12 text-start">
                    
                    
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                      
                      <!-- btn facebook -->
                      <input type="checkbox" class="btn-check" id="btnfacebook" autocomplete="off">
                      <label class="btn btn-outline-none" for="btnfacebook"><i class="bi bi-facebook"></i></label>
                      
                      <!-- btn instagram -->
                      <input type="checkbox" class="btn-check" id="btninstagram" autocomplete="off">
                      <label class="btn btn-outline-none" for="btninstagram"><i class="bi bi-instagram"></i></label>
                      
                      <!-- btn award-fill -->
                      <input type="checkbox" class="btn-check" id="btnaward" autocomplete="off">
                      <label class="btn btn-outline-none" for="btnaward"><i class="bi bi-award"></i></label>
                      
                      <!-- btn bi-twitter -->
                      <input type="checkbox" class="btn-check" id="btntwitter" autocomplete="off">
                      <label class="btn btn-outline-none" for="btntwitter"><i class="bi bi-twitter"></i></label>
                      
                    </div>
                  </div>
                  <!-- btn RS -->
                  
                </div>
                
                <div class="row mt-3">
                  
                  <div class="col-12">
                    
                    <p>Product Détail
                    </p>
                    
                    <!--trait-1-->
                    <div class="container-fluid gris">
                      <div class="row"></div>
                    </div>
                    
                    <p>Lorem ipsum dolor sit amet, tellus enim, varius nec magna lobortis neque, aenean tempor, arcu magnam nisl nulla a, sed nec. Ac elit consequat et integer. Sed in lobortis. Pulvinar nulla viverra orci ullamcorper faucibus fermentum,<br><br>
                      
                      Tincidunt vitae eget, vivamus velit viverra. Magnis scelerisque posuere hymenaeos quis ut non. llamcorper faucibus fermentum, tincidunt vitae eget, vivamus velit viverra. Magnis scelerisque posuere hymenaeos quis ut non. 
                      
                    </p>
                    
                  </div>
                </div>
                
                <div class="row mt-3">
                  
                  <div class="col-12">
                    
                    <p>Product Détail
                    </p>
                    
                    <!--trait-1-->
                    <div class="container-fluid gris">
                      <div class="row"></div>
                    </div>
                    
                    <!-- array -->
                    
                  </div>
                </div>
                
                
                <div class="row mt-3">
                  
                  <div class="col-12">
                    
                    <p>FAQ
                    </p>
                    
                    <!--trait-1-->
                    <div class="container-fluid gris">
                      <div class="row"></div>
                    </div>
                    
                    <p>Lorem ipsum dolor sit amet, tellus enim, varius nec magna?
                      lobortis neque, aenean tempor, arcu magnam nisl nulla a, sed nec. Ac elit consequat et integer. Sed in lobortis. Pulvinar nulla viverra orci ullamcorper faucibus fermentum,
                      <br><br>
                      Tincidunt vitae eget, vivamus velit viverra?
                      Magnis scelerisque posuere hymenaeos quis ut non. 
                    </p>
                    
                  </div>
                </div>
                
                <div class="row mt-3">
                  
                  <div class="col-12">
                    
                    <h2>You May Also Like
                    </h2>
                  </div>
                  <!--trait-1-->
                  <div class="container-fluid gris">
                    <div class="row"></div>
                  </div>
                  
                  
                  
                  <div class="col-12 mt-3">
                    
                    <div class="row justify-content-between">
                      
                      <div class="col-sm-3 col-md-4 col-lg-4 col-xl-4">
                        <img src="Photo-image/photo-produit.jpg" class="img-thumbnail" alt="photo-produit">
                        <p class="secondary">Product Name<br>Top</p>
                      </div>
                      
                      <div class="col-sm-3 col-md-3 col-lg-4 col-xl-4">
                        <img src="Photo-image/photo-produit.jpg" class="img-thumbnail" alt="photo-produit">
                        <p class="secondary">Product Name<br>Top</p>
                      </div>
                      
                      <div class="col-sm-3 col-md-3 col-lg-4 col-xl-4">
                        <img src="Photo-image/photo-produit.jpg" class="img-thumbnail" alt="photo-produit">
                        <p class="secondary">Product Name<br>Top</p> 
                      </div>
                      
                    </div>
                    
                    
                  </div>
                  
                  
                  
                </div>
              </div>
              
            </div>
            
          </main> <!-- end main -->
          
        </body><!-- end body -->
        
        <!-- footer -->
        <?php include('footer.php');?>
        <!-- end footer -->
        </html>