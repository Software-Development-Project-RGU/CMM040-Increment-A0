<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <!-- Bootstrap Link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"/>
    
      <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- Extarnal css link -->
    <link rel="stylesheet" href="./css/index.css" />
    <title>TeamO Mart Home Page</title>
  </head>
  <body class= "homepage">
    <header>
      <!-- Navigation Bar -->
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark opacity-75">
          <div class="container-fluid">
            <a class="navbar-brand" href="/index.php"
              ><img src="image/Bagsmely.png" height="120" alt="logo" /></a>
           
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a
                >
                
                <div class="navbar-nav">
                  <a class="nav-link active" href="seller.php" aria-current="page">
                    Seller's Market
                  </a>
                 
                </div>
                <a class="nav-link" href="#contact">Contact us</a>
              </div>
            </div>
            <form id= "categoryForm" class="d-flex" action="#" method="GET" onsubmit="redirectToSubcategoryPage(); return false;">
  <select class="form-select me-2" name="category" id="categorySelect" onchange="updateSubcategories()">
    <option selected>Choose category...</option>
    <option value="products">Products</option>
    <option value="services">Services</option>
  </select>

  <select class="form-select me-2" name="subcategory" id="subcategorySelect">
    <option selected>Choose sub-category...</option>
   
  </select>

  <button class="btn btn-outline-success" type="submit">Go</button>
</form>
   <script>
function updateSubcategories() {
  var category = document.getElementById("categorySelect").value;
  var subcategorySelect = document.getElementById("subcategorySelect");

  subcategorySelect.innerHTML = ''; 

  if (category === "products") {
    var subcategories = ["Clothing", "Automobile", "Electronics", "Household"];
  } else if (category === "services") {
    var subcategories = ["Beauty Services", "Tutoring Services"];
  }


  subcategories.forEach(function(subcategory) {
    var option = new Option(subcategory, subcategory.toLowerCase().replace(/\s+/g, '_'));
    subcategorySelect.add(option);
  });
}

function redirectToSubcategoryPage(event) {
  event.preventDefault(); 

  var categorySelect = document.getElementById("categorySelect");
  var category = categorySelect.value;
  var subcategorySelect = document.getElementById("subcategorySelect");
  var subcategory = subcategorySelect.value;

  
  var pageUrl = (category === "products" ? 'product.html' : 'service.html') + '#' + subcategory;
  window.location.href = pageUrl;
}


document.getElementById("categoryForm").addEventListener("submit", redirectToSubcategoryPage);
</script>
          
<a href="logout.php" class="btn btn-danger">Logout</a>
          </div>
        </nav>
      </div>
    </header>
    <main>
      <!-- Welcome Message -->
      <div class="welcomeNote" style="background-image: url('path/to/your/background-image.jpg');">
        <h1>Welcome <?php if(isset($_SESSION['fname'])): echo htmlspecialchars($_SESSION['fname']) . " "; endif; ?>to TeamO Mart</h1>
        <p>Explore the best products and services handpicked for you.</p>
        <a href="#product" class="ExploreBut">Explore Now</a>
      </div>

      <!-- Bootstrap Carousel -->
      <div class="container-fluid">
        <div
          id="carouselExampleIndicators"
          class="carousel slide caro-bg"
          data-bs-ride="carousel"
        >
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row d-flex align-items-center">
                <div class="col-md-7">
                  <h1>Beauty services</h1>
                  <p>Lets make you look great for that special someone</p>
                  <h3 class="pricing">From £6</h3>
                  <button class="btn buy-now">Buy now</button>
                </div>
                <div class="col-md-5 d-flex justify-content-center">
                  <img src="image/salon.png"  alt="Salon service Image"/>
                  <img src="image/Barbing.png" alt="Salon service Image"/>
                  
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row d-flex align-items-center">
                <div class="col-md-7">
                  <h1>Clothing and Accessories</h1>
                  <p>
                  High Quality Clothing at Affordable Prices
                  </p>
                  <h3 class="pricing">From £3</h3>
                  <button class="btn buy-now">Buy now</button>
                </div>
                <div class="col-md-5 d-flex justify-content-center">
                  <img src="image/clothing 2.png" class="d-block" alt="Clothing" />
                  <img src="image/suitcase.png" class="d-block" alt="Clothing" />
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row d-flex align-items-center">
                <div class="col-md-7">
                  <h1>Household Item that matches your style</h1>
                  <p>Great Household items at Best Prices</p>
                  <h3 class="pricing">£1130</h3>
                  <button class="btn buy-now">Buy now</button>
                </div>
                <div class="col-md-5 d-flex justify-content-center">
                  <img src="image/Household Appliances.png" class="d-block" alt="Household" />
                  <img src="image/Home appliances.png" class="d-block" alt="Household" />
                </div>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
     

      <!-- Sample Products -->
      <section id="product">
        <div class="containerT">
          <h1>Most Favourited Items</h1>
        </div>
        <div class="container-fluid">
          <h1>Shoes</h1>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="./image/p-shoe1.png" class="card-img-top" alt="Shoe Image" />
                <div class="card-body">
                  <h5 class="card-title">BATA</h5>
                  <p class="card-text">
                    Bata casual jumper for tracking,hiking.light weight shoe with
                    fashion touch
                  </p>
                  <h6>£130</h6>
                  <button class="btn buy-now">Buy now >></button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="./image/p-shoe2.png" class="card-img-top" alt="Shoe Image" />
                <div class="card-body">
                  <h5 class="card-title">NIKE</h5>
                  <p class="card-text">
                    Nike shoe for sport lover.Nike shoe is the best choice for
                    Athletics
                  </p>
                  <h6>£200</h6>
                  <button class="btn buy-now">Buy now >></button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="./image/p-shoe3.png" class="card-img-top" alt="Shoe Image" />
                <div class="card-body">
                  <h5 class="card-title">ADIDAS</h5>
                  <p class="card-text">
                    Fasion,Comfort,sports adidas is compatable for anything
                  </p>
                  <h6>£195</h6>
                  <button class="btn buy-now">Buy now >></button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <h1>Women Bags</h1>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="image/NICOLE & DORIS Women Handbag.png" class="card-img-top" alt="bags" />
                <div class="card-body">
                  <h5 class="card-title">NICOLE & DORIS Women Handbag</h5>
                  <p class="card-text">
                    Fashion Ladies Handbags & Shoulder Bags Multicolor Top Handle Bag Crossbody Bag with Pompom
                  </p>
                  <h6>£70</h6>
                  <button class="btn buy-now">Buy now >></button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="image/Miss Lulu Handbags.png" class="card-img-top" alt="bags" />
                <div class="card-body">
                  <h5 class="card-title">Miss Lulu Handbags</h5>
                  <p class="card-text">
                    Ladies Fashion Shoulder Bag Girls PU Leather Top Handle Bag
                  </p>
                  <h6>£100</h6>
                  <button class="btn buy-now">Buy now >></button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="image/Fila Jute Bag.png" class="card-img-top" alt="bag" />
                <div class="card-body">
                  <h5 class="card-title">Fila Jute Bag</h5>
                  <p class="card-text">
                    6 Pcs Handbag Set Hobo Top Handle Bag Totes Satchels Crossbody Shoulder Bags and Purse Clutch
                  </p>
                  <h6>£95</h6>
                  <button class="btn buy-now">Buy now >></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- footer -->
    <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <a href="#top-of-page">
                     <img class="logo1" src="image/Bagsmely.png" alt="Footer Logo"/>
                  </a>
                  <ul class="social_icon">
                     <li><a href="https://www.facebook.com/marketplace/create" alt="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                     <li><a href="https://twitter.com/home?lang=en" alt="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                     <li><a href="https://www.linkedin.com/feed/" alt="linkedin"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                     <li><a href="https://www.instagram.com/?login&hl=en-gb" alt="instagram><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <h3>INFO</h3>
                  <ul class="about_us">
                     <li><a href="#">About Us</a></li>
                     <li><a href="#">FAQs</a></li>
                     <li><a href="#">Advertise</a></li>
                     <li><a href="#">Terms and Conditions</a></li>
                     <li><a href="PrivacyPolicy.html">Privacy Policy</a></li>
                     <li><a href="#">Help & Support</a></li>
                  </ul>
               </div>

               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <h3>Contact Us</h3>
                  <ul class="conta">
                     <li>
                        <p>RGU, Garthdee</p>
                     </li>
                     <li>+44 35565962049</li>
                     <li>TeamO@gmail.com</li>

                  </ul>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <form class="bottom_form">
                     <h3>Newsletter</h3>
                     <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                     <button class="sub_btn">subscribe</button>
                  </form>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>Copyright © 2024 TeamO, Inc. All rights reserved.</a></p>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>

    <!-- JS bundle for Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
   
  </body>
  
</html>
