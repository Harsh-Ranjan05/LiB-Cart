<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>LiB-Cart</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f1f3f6;
    }

    nav {
      background-color: white;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
      flex-wrap: wrap;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 28px;
      font-weight: bold;
      color: #2874F0;
    }

    .logo-icon {
      width: 40px;
      height: 40px;
      background-color: #FFD700;
      border-radius: 8px;
      position: relative;
    }

    .logo-icon::before,
    .logo-icon::after {
      content: '';
      position: absolute;
      background: white;
    }

    .logo-icon::before {
      width: 24px;
      height: 16px;
      top: 10px;
      left: 8px;
      border-radius: 2px;
    }

    .logo-icon::after {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      bottom: 4px;
      left: 6px;
      box-shadow: 14px 0 white;
    }

    .brand-highlight {
      color: grey;
    }

    .search-input {
      flex: 1;
      max-width: 400px;
      position: relative;
    }

    .search-input input {
      width: 100%;
      padding: 10px 40px 10px 15px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 20px;
      outline: none;
      transition: border-color 0.3s;
    }

    .search-input input:focus {
      border-color: #2874F0;
    }

    .search-input i {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #2874F0;
      font-size: 16px;
    }

    .nav-fun ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    .nav-fun ul li a {
      text-decoration: none;
      color: #333;
      font-size: 16px;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .nav-fun ul li a:hover {
      color: #2874F0;
    }

    .nav-fun ul li i {
      margin-right: 6px;
      color: #2874F0;
    }

    .product-rental-section {
      width: 100%;
      padding: 20px;
    }

    .top-rential-services {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
      gap: 5px;
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    }

    .product-services {
      text-align: center;
      padding: 10px;
      border-radius: 10px;
      background: #fafafa;
      transition: transform 0.3s;
    }

    .product-services:hover {
      transform: translateY(-5px);
    }

    .product-services img {
      width: 100%;
      max-width: 100px;
      height: 110px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    }

    .title {
      margin-top: 10px;
      font-weight: bold;
      font-size: 16px;
    }

    .banner-section {
      width: 100%;
      padding: 10px 20px;
      transition: transform 0.3s;
    }
    .banner-section:hover{
      transform: translateY(-5px);
    }
    #img {
      width: 100%;
      height: 400px;
      border-radius: 10px;
      object-fit: cover;
      box-shadow: 0 15px 15px rgba(0, 0, 0, 0.05);
    }

    .rentals-city {
      padding: 20px;
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      justify-content: center;
      border-radius: 10px;
      background:white;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    }
    .top-heading{
      text-align:center;
    }
    #link{
          color: #36b8f5;
          text-decoration:none;
          font-weight:bold;
    }
    .input-box input {
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      width: 200px;
      font-size: 14px;
    }
    #input{
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      width: 200px;
      font-size: 14px;
    }
    #btn {
      padding: 10px 20px;
      background-color: #2874F0;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    #btn:hover {
      background-color: #185abc;
    }
     .container{
      background-color: white;
      padding: 5px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
      margin-top:5px;
    }
    .inside-container{
     margin:5px;
    }
    #banner{
      width: 400px;
      height:400px;
      border-radius:100%;
      margin:5px;
    }
    #sub-banner{
      width: 200px;
      height:200px;
      border-radius:100%;
    }
    .card{
      border:none;
      border-radius: 10px;
      box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.05);
    }
  </style>
</head>
<body>

  <nav>
    <div class="logo">
      <div class="logo-icon"></div>
      <div>LiB-<span class="brand-highlight">Cart</span>.com</div>
    </div>

    <div class="search-input">
      <input type="text" placeholder="Search for rent camera, fashion and more..." />
      <i class="fas fa-search"></i>
    </div>

    <div class="nav-fun">
      <ul>
        <li><a href="#"><i class="fas fa-sign-in-alt"></i> Login</a></li>
        <li><a href="#"><i class="fas fa-shopping-cart"></i> Cart</a></li>
        <li><a href="#"><i class="fas fa-store"></i>Your Rent</a></li>
        <li><a href="#"><i class="fas fa-ellipsis-vertical"></i></a></li>
      </ul>
    </div>
  </nav>

  <div class="product-rental-section">
    <div class="top-rential-services">
      <div class="product-services">
        <img src="img/fashionwear.jpg" alt="Fashion Rent">
        <div class="title">Fashion Rent</div>
      </div>
      <div class="product-services">
        <img src="img/mall.jpeg" alt="Wedding Rent">
        <div class="title">Wedding Rent</div>
      </div>
      <div class="product-services">
        <img src="img/furniture_rent.webp" alt="Furniture Rent">
        <div class="title">Furniture Rent</div>
      </div>
      <div class="product-services">
        <img src="img/libaray.jpeg" alt="Books Rent">
        <div class="title">Books Rent</div>
      </div>
      <div class="product-services">
        <img src="img/electronic.jpg" alt="Electronic Rent">
        <div class="title">Electronic Rent</div>
      </div>
    </div>
  </div>

  <div class="banner-section">
    <img src="img/banner.png" alt="Banner" id="img">
  </div>
   <div class="top-heading">
      <h2>Select Your City & Duration</h2>
      <div class="sub-heading">
        <a id="link" href="">Choose your city to see available product</a>
      </div>
    </div>
  <div class="rentals-city">
    <div class="input-box">
      <select id="input" name="city">
            <option value="">--Select City--</option>
            <option value="delhi">Delhi</option>
            <option value="mumbai">Mumbai</option>
            <option value="bangalore">Bangalore</option>
            <option value="kolkata">Kolkata</option>
     </select>
   </div>
    <div class="input-box">
       <select id="input" name="product">
              <option value="">--Select Product--</option>
              <optgroup label="Clothing">
                       <option value="suit">Men's Suit</option>
                       <option value="lehenga">Women's Lehenga</option>
             </optgroup>
             <optgroup label="Electronics">
                      <option value="camera">Camera</option>
                      <option value="laptop">Laptop</option>
            </optgroup>
      </select>
   </div>
    <div class="input-box">
      <input type="date" placeholder="From date">
    </div>
    <div class="input-box">
      <input type="date" placeholder="To date">
    </div>
    <button id="btn">Filter & Rent  Now</button>
  </div>
  <div class="step-rent">
  <section class="step-rent py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold text-primary">How to Rent in 4 Easy Steps</h2>
    <div class="row g-4">

      <!-- Step 1 & 2 -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 text-center shadow-sm">
          <img src="img/register.jpg" class="card-img-top p-3 rounded-circle mx-auto" style="width: 150px; height: 150px;" alt="Register">
          <div class="card-body">
            <h5 class="card-title text-primary">1. Register Yourself</h5>
            <p class="card-text">Create your account in a few easy steps and get started.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card h-100 text-center shadow-sm">
          <img src="img/camera.jpg" class="card-img-top p-3 rounded-circle mx-auto" style="width: 150px; height: 150px;" alt="Select Product">
          <div class="card-body">
            <h5 class="card-title text-primary">2. Select Product</h5>
            <p class="card-text">Browse and choose your desired product to rent from our collection.</p>
          </div>
        </div>
      </div>

      <!-- Step 3 & 4 -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 text-center shadow-sm">
          <img src="img/delivery.avif" class="card-img-top p-3 rounded-circle mx-auto" style="width: 150px; height: 150px;" alt="Delivery">
          <div class="card-body">
            <h5 class="card-title text-primary">3. Fast Delivery</h5>
            <p class="card-text">Get the product delivered to your doorstep within 24 hours.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card h-100 text-center shadow-sm">
          <img src="img/money-exchange.avif" class="card-img-top p-3 rounded-circle mx-auto" style="width: 150px; height: 150px;" alt="Pay Later">
          <div class="card-body">
            <h5 class="card-title text-primary">4. Pay After Satisfaction</h5>
            <p class="card-text">Inspect the product upon delivery and pay only if you're satisfied.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
