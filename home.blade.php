<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ShopX - Full Navbar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #111;
      color: #fff;
      font-family: 'Segoe UI', sans-serif;
    }

    .navbar {
      background-color: #000;
      padding: 10px 15px;
    }

    .navbar-brand {
      font-size: 26px;
      color: #00ff99 !important;
      font-weight: bold;
    }

    .btn-search {
      background-color: #00ff99;
      border: none;
      color: #000;
    }

    .btn-search:hover {
      background-color: #00cc7a;
    }

    .cart-icon {
      color: #00ff99;
      font-weight: bold;
      text-decoration: none;
    }

    .dropdown-menu {
      background-color: #222;
    }

    .dropdown-item {
      color: #fff;
    }

    .dropdown-item:hover {
      background-color: #00ff99;
      color: #000;
    }

    .support-info {
      font-size: 14px;
    }

    @media (max-width: 768px) {
      .support-info {
        display: none;
      }
    }

    /* Second navbar styling */
    .sub-navbar {
      background-color: #1a1a1a;
    }

    .sub-navbar .nav-link {
      color: #fff;
      padding: 12px 18px;
      font-weight: 500;
    }

    .sub-navbar .nav-link:hover {
      background-color: #00ff99;
      color: #000;
    }

    @media (max-width: 768px) {
      .sub-navbar .nav-link {
        padding: 10px;
      }
    }
  </style>
</head>
<body>

  <!-- Main Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">ShopX</a>

      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <!-- Search + Dropdown -->
        <form class="d-flex w-100 mt-3 mt-lg-0 px-lg-3" role="search">
          <div class="dropdown me-2">
            <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
              Categories
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Electronics</a></li>
              <li><a class="dropdown-item" href="#">Fashion</a></li>
              <li><a class="dropdown-item" href="#">Home</a></li>
            </ul>
          </div>
          <input class="form-control me-2" type="search" placeholder="Search for products..." />
          <button class="btn btn-search" type="submit">Search</button>
        </form>

        <div class="d-flex align-items-center ms-auto mt-3 mt-lg-0">
          <div class="me-3 support-info">
            <small><strong>Call Us:</strong> +92-300-1234567</small>
          </div>
          <a href="#" class="cart-icon">🛒 Your Cart</a>
        </div>
      </div>
    </div>
  </nav>


  <!-- Second Navbar (Horizontal Menu) -->
  <nav class="sub-navbar">
    <div class="container-fluid">
      <ul class="nav justify-content-center flex-wrap">
       <div class="d-flex justify-content-end">
  <div class="dropdown me-3"> <!-- 👈 Bootstrap margin-end (right spacing) -->
    <button type="button" data-bs-toggle="dropdown" class="dropdown-toggle"
      style="background: none; border: none; color: white; font-size: 16px; padding: 8px 16px;">
      Shop by Departments
    </button>

    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Groceries</a></li>
      <li><a class="dropdown-item" href="#">Drinks</a></li>
      <li><a class="dropdown-item" href="#">Choclates</a></li>
    </ul>
  </div>
</div>

        <li class="nav-item"><a class="nav-link" href="#">Women</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Men</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Kids</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Accessories</a></li>
       <button type="button" data-bs-toggle="dropdown" class="dropdown-toggle" style="background: none; border: none; color: white; font-size: 16px; padding: 8px 16px;">
  Pages
</button>

            <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">About Us</a></li>
             <li><a class="dropdown-item" href="#">Shope</a></li>
            <li><a class="dropdown-item" href="#">Single Product</a></li>
             <li><a class="dropdown-item" href="#">Accounts</a></li>
            <li><a class="dropdown-item" href="#">Card</a></li>
            <li><a class="dropdown-item" href="#">Cheakout</a></li>
            <li><a class="dropdown-item" href="#">Blogs</a></li>
            <li><a class="dropdown-item" href="#">Single Posts</a></li>
            <li><a class="dropdown-item" href="#">Styles</a></li>
            <li><a class="dropdown-item" href="#">Single Posts</a></li>
            <li><a class="dropdown-item" href="#">Contant</a></li>
            <li><a class="dropdown-item" href="#">Thanks</a></li>
            </ul>       
        <li class="nav-item"><a class="nav-link" href="#">Brand</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Sale</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
      </ul>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Responsive Image Layout</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #111;
      font-family: 'Segoe UI', sans-serif;
      color: white;
    }

    .split-section {
      display: flex;
      flex-wrap: wrap;
      min-height: 100vh;
      background-image: url('https://www.transparenttextures.com/patterns/flowers.png');
      background-repeat: repeat;
      background-size: contain;
    }

    .left-image,
    .right-image {
      flex: 1;
      min-width: 300px;
    }

    .left-image img,
    .right-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .right-image {
      display: flex;
      flex-direction: column;
    }

    .right-image img {
      height: 50%;
    }

    .gallery-section {
      width: 100%;
      padding: 160px 20px 60px;
      box-sizing: border-box;
      background-color: #111;
    }

    .gallery-header {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
    }

    .gallery-header div:first-child {
      font-size: 24px;
      font-weight: bold;
    }

    .gallery-header button {
      background: #333;
      border: none;
      color: white;
      padding: 8px 14px;
      margin-right: 10px;
      cursor: pointer;
    }

    .image-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
      gap: 12px;
    }

    .image-grid-item {
      width: 100%;
      aspect-ratio: 6 / 5;
      background-color: #222;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 8px;
      overflow: hidden;
    }

    .image-grid-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    @media (max-width: 768px) {
      .gallery-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }
    }
  </style>
</head>
<body>

  <!-- Split Section (Top) -->
  <div class="split-section">
    <div class="left-image">
      <img src="https://dcassetcdn.com/design_img/117020/30934/30934_1649287_117020_image.jpg" alt="Main Left Image">
    </div>
    <div class="right-image">
      <img src="https://thumbs.dreamstime.com/b/unhealthy-fast-food-delivery-menu-featuring-assorted-burgers-cheeseburgers-nuggets-french-fries-soda-high-calorie-low-356045884.jpg" alt="Top Right Image">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqBMz-b5lNlZ2EI-_e--P_NC_4veqHC2uE1A&s" alt="Bottom Right Image">
    </div>
  </div>

  <!-- Gallery Section (Bottom) -->
  <div class="gallery-section">
    <div class="gallery-header">
      <div><h1>Category</h1></div>
      <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Image Viewer (Five at a Time)</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background: #f4f4f4;
      padding: 30px;
    }

    .image-row {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      margin-bottom: 20px;
    }

    .image-box {
      width: 200px;
      height: 150px;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
      background: white;
    }

    .image-box img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 10px;
    }

    .nav-buttons {
      margin-top: 10px;
    }

    .nav-buttons button {
      font-size: 24px;
      padding: 10px 20px;
      margin: 0 10px;
      cursor: pointer;
      border: none;
      border-radius: 8px;
      background-color: #333;
      color: #fff;
      transition: background-color 0.3s ease;
    }

    .nav-buttons button:hover {
      background-color: #555;
    }
  </style>
</head>
<body>

  <h2>Image Viewer (Five at a Time)</h2>

  <div id="imageRow" class="image-row">
    <!-- Images will be displayed here -->
  </div>

  <div class="nav-buttons">
    <button onclick="changePage(-1)">&#10094;</button>
    <button onclick="changePage(1)">&#10095;</button>
  </div>

  <script>
    const allImages = [
      "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_s51lSf4cQoGa3ONltyALTJnE-E48K6Xlag&s",
      "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRarjOmS5CXspT3Y8yyeZaEIMfORuCL4tftvw&s",
      "https://images.unsplash.com/photo-1550547660-d9450f859349?auto=format&fit=crop&w=400&q=80",
      "https://images.unsplash.com/photo-1571091718767-18b5b1457add?auto=format&fit=crop&w=400&q=80",
      "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMo5Qlq88A_2W-zHWwU1O_dmXUk--FvQuNUg&s",
      "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXQjGmq5amjHWim219XT9yPiHMiewGhSYJFA&s",
      "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxR9uD1mSmuhIq2V5ZauwfwQCSx6PhhZRBJA&s",
      "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx58XKQ0ZQCtoyHMw2_m6pGpgrrn3q6rIMjw&s",
      "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlL6N9V3Bq7jx-FvJ1WQp1w7Wy2On7E5ttV7ORIDCiohA3gakYqLxbtMIt5Qr8t91Tb4w&usqp=CAU",
      "https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=400&q=80",
      "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFa6tOMDv1IaZRaGTB4vijBCVgKbs4bNdzWw&s",
      "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbKPeP9VWvdOSjNEwLOXpahm4SduxmsOEqEg&s",
      "https://www.shutterstock.com/image-photo/street-food-meat-cutlet-burgers-600nw-1824570860.jpg",
      "https://martiantoys.com/cdn/shop/files/B0915CAD-4F22-48B5-8FD7-0D95ADE047E6_799x700.jpg?v=1699339288",
      "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWxHlXZc8ECIeppBnQHF2ynX-KiaHoXrhmbQ&s",
      "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpc5Mknx8ZoiYc8uMc7IOE1F3doVKeqo22kQ&s",
      "https://media01.stockfood.com/largepreviews/Mjc5MzI0MjY=/00901046-French-Fries-in-Red-Fast-Food-Box.jpg",
      "https://fastfoodpak.com/cdn/shop/files/fastfoodpak_19_533x.png?v=1723616084",
      "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxDdHN5qX5wELcq4wlr-E5QOkeEqfb5GrwBw&s",
      "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQo8FWNBpSDlPb_6d3u2m8CuC5KwXU7iYybTQ&s",
    ];

    const pageSize = 5;
    let currentPage = 0;

    function renderImages() {
      const row = document.getElementById("imageRow");
      row.innerHTML = "";
      const start = currentPage * pageSize;
      const end = start + pageSize;
      const currentImages = allImages.slice(start, end);

      currentImages.forEach(src => {
        const box = document.createElement("div");
        box.className = "image-box";

        const img = document.createElement("img");
        img.src = src;

        box.appendChild(img);
        row.appendChild(box);
      });
    }

    function changePage(direction) {
      const totalPages = Math.ceil(allImages.length / pageSize);
      currentPage = (currentPage + direction + totalPages) % totalPages;
      renderImages();
    }

    renderImages();
  </script>
</body>
</html>
</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Trending Products - Full Screen</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #111; /* Dark background for contrast */
      min-height: 100vh;
    }

    .product-section {
      width: 100%;
      padding: 40px 20px;
    }

    .section-title {
      font-size: 2.5rem;
      text-align: center;
      margin-bottom: 35px;
      color: white; /* White title text */
    }

    .filter-search {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 15px;
      margin: 0 auto 30px;
      max-width: 1300px;
      padding: 0 20px;
    }

    .filters {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
    }

    .filters button {
      padding: 10px 18px;
      border: none;
      background: #ddd;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s ease;
      font-size: 1rem;
    }

    .filters button.active,
    .filters button:hover {
      background-color: #0f9d58;
      color: white;
    }

    #searchInput {
      padding: 10px 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 1rem;
      flex-grow: 1;
      max-width: 320px;
    }

    .products {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
      gap: 25px;
      padding: 0 20px;
      max-width: 1400px;
      margin: 0 auto;
    }

    .product-card {
      background: white;
      padding: 16px;
      border-radius: 12px;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.05);
      text-align: center;
      transition: transform 0.3s ease;
    }

    .product-card:hover {
      transform: translateY(-6px);
    }

    .product-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 8px;
    }

    .product-card h4 {
      margin: 14px 0 6px;
      font-size: 1.1rem;
      color: #333;
    }

    .product-card span {
      font-weight: bold;
      color: #0f9d58;
      font-size: 1rem;
    }

    @media (max-width: 600px) {
      .section-title {
        font-size: 1.8rem;
      }

      #searchInput {
        width: 100%;
      }

      .filters {
        justify-content: center;
      }
    }
  </style>
</head>
<body>

  <section class="product-section">
    <h2 class="section-title">Trending Products</h2>

    <div class="filter-search">
      <div class="filters">
        <button onclick="filterProducts('all')" class="active">All</button>
        <button onclick="filterProducts('fruit')">Fruit</button>
        <button onclick="filterProducts('drink')">Drink</button>
      </div>
      <input type="text" id="searchInput" onkeyup="searchProducts()" placeholder="Search products..." />
    </div>

    <div class="products" id="productGrid">
      <!-- Product cards will render here -->
    </div>
  </section>

  <script>
    const products = [
      { name: "Apple", category: "fruit", image: "https://cdn.britannica.com/22/187222-050-07B17FB6/apples-on-a-tree-branch.jpg", price: "$1.20" },
      { name: "Orange Juice", category: "drink", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKwplVhF5un82RmwD9fEDNlkSzs71FB2pwVA&s", price: "$2.50" },
      { name: "Banana", category: "fruit", image: "https://5.imimg.com/data5/SELLER/Default/2024/11/469049667/CC/HE/KJ/236762987/yellow-banana-500x500.jpg", price: "$0.80" },
      { name: "Mango Juice", category: "drink", image: "https://theallnaturalvegan.com/wp-content/uploads/2023/08/mango-juice-featured-image-500x500.jpg", price: "$2.00" },
      { name: "Grapes", category: "fruit", image: "https://hips.hearstapps.com/hmg-prod/images/766/grapes-main-1506688521.jpg?resize=640:*", price: "$2.20" },
      { name: "Coke", category: "drink", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScBbN7uPbbhgrbPIZFJB0_5P3kY1cm23x4Cw&s", price: "$1.00" },
      { name: "Watermelon", category: "fruit", image: "https://ujamaaseeds.com/cdn/shop/products/SugarBabyWatermelon.jpg?v=1645759312", price: "$3.00" },
      { name: "Lemonade", category: "drink", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdavlQdjsItHMHiGVu0EghSABBadnytJzvUg&s", price: "$1.75" }
    ];

    let currentCategory = 'all';

    function renderProducts() {
      const grid = document.getElementById('productGrid');
      const search = document.getElementById('searchInput').value.toLowerCase();
      grid.innerHTML = '';

      products.forEach(product => {
        const matchesCategory = currentCategory === 'all' || product.category === currentCategory;
        const matchesSearch = product.name.toLowerCase().includes(search);

        if (matchesCategory && matchesSearch) {
          const card = document.createElement('div');
          card.className = 'product-card';
          card.innerHTML = `
            <img src="${product.image}" alt="${product.name}" />
            <h4>${product.name}</h4>
            <span>${product.price}</span>
          `;
          grid.appendChild(card);
        }
      });
    }

    function filterProducts(category) {
      currentCategory = category;
      document.querySelectorAll('.filters button').forEach(btn => btn.classList.remove('active'));
      event.target.classList.add('active');
      renderProducts();
    }

    function searchProducts() {
      renderProducts();
    }

    // Initial render
    renderProducts();
  </script>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Offer Cards</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f5f5f5;
    }

    .card-wrapper {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 30px;
      padding: 40px;
      max-width: 1200px;
      margin: auto;
    }

    .offer-card {
      background: white;
      flex: 1 1 48%;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      display: flex;
      flex-direction: column;
    }

    .offer-card img {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }

    .offer-content {
      padding: 20px;
    }

    .offer-content h3 {
      font-size: 1.8rem;
      color: #0f9d58;
      margin: 0 0 10px;
    }

    .offer-content h4 {
      font-size: 1.3rem;
      color: #333;
      margin-bottom: 10px;
    }

    .offer-content p {
      font-size: 1rem;
      color: #666;
    }

    @media (max-width: 768px) {
      .offer-card {
        flex: 1 1 100%;
      }
    }
  </style>
</head>
<body>

  <div class="card-wrapper">
    <!-- Left Card -->
    <div class="offer-card">
      <img src="https://media-assets.swiggy.com/swiggy/image/upload/f_auto,q_auto,fl_lossy/xvbyihlswjto4etqoyva " alt="Luxa Dark Chocolate">
      <div class="offer-content">
        <h3>Upto 25% Off</h3>
        <h4>Luxa Dark Chocolate</h4>
        <p>Very tasty & creamy vanilla flavour creamy muffins.</p>
      </div>
    </div>

    <!-- Right Card -->
    <div class="offer-card">
      <img src="https://www.whittierdailynews.com/wp-content/uploads/migration/2017/201705/FEATURES_170539898_AR_0_VKLOPOWJLUXA.jpg?w=978" alt="Vanilla Muffins">
      <div class="offer-content">
        <h3>Upto 25% Off</h3>
        <h4>Luxa Dark Chocolate</h4>
        <p>Very tasty & creamy vanilla flavour creamy muffins.</p>
      </div>
    </div>
  </div>

</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Best Selling Products</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f5f5f5;
    }

    .container {
      padding: 30px;
      max-width: 100%;
      overflow-x: hidden;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
      background: #0f9d58;
      padding: 10px 20px;
      border-radius: 10px;
    }

    .header h2 {
      font-size: 2rem;
      color: #fff;
      margin: 0;
    }

    .header a {
      font-size: 1rem;
      color: #fff;
      text-decoration: none;
    }

    .scroll-wrapper {
      position: relative;
    }

    .scroll-buttons {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 100%;
      display: flex;
      justify-content: space-between;
      z-index: 2;
    }

    .scroll-btn {
      background: rgba(0,0,0,0.1);
      border: none;
      padding: 10px 15px;
      font-size: 20px;
      cursor: pointer;
      backdrop-filter: blur(5px);
    }

    .products-row {
      display: flex;
      overflow-x: auto;
      gap: 16px;
      scroll-behavior: smooth;
      padding-bottom: 10px;
    }

    .product-box {
      background: white;
      min-width: 250px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      padding: 16px;
      position: relative;
      flex-shrink: 0;
    }

    .product-box img {
      width: 100%;
      height: 160px;
      object-fit: cover;
      border-radius: 10px;
    }

    .discount {
      position: absolute;
      top: 10px;
      left: 10px;
      background: #e53935;
      color: #fff;
      padding: 4px 8px;
      font-size: 0.8rem;
      border-radius: 5px;
    }

    .product-box h4 {
      margin: 10px 0 5px;
      font-size: 1rem;
      color: #222;
    }

    .rating {
      font-size: 0.9rem;
      color: #888;
    }

    .price {
      font-weight: bold;
      color: #0f9d58;
      margin: 8px 0;
    }

    .quantity-control {
      display: flex;
      align-items: center;
      gap: 8px;
      margin: 10px 0;
    }

    .quantity-control button {
      padding: 4px 10px;
      font-size: 1rem;
      border: none;
      background: #eee;
      cursor: pointer;
      border-radius: 5px;
    }

    .add-btn {
      background: #0f9d58;
      color: white;
      border: none;
      padding: 8px 12px;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
      font-weight: bold;
    }

    @media (max-width: 600px) {
      .header h2 {
        font-size: 1.4rem;
      }

      .product-box {
        min-width: 200px;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <div class="header">
    <h2>Best Selling Products</h2>
    <a href="#">View All Categories →</a>
  </div>

  <div class="scroll-wrapper">
    <div class="scroll-buttons">
      <button class="scroll-btn" onclick="scrollRow(-1)">←</button>
      <button class="scroll-btn" onclick="scrollRow(1)">→</button>
    </div>

    <div class="products-row" id="productRow">
      <!-- Repeat this block to make 23 products -->
      <script>
        const row = document.getElementById('productRow');
        for (let i = 1; i <= 23; i++) {
          row.innerHTML += `
            <div class="product-box">
              <div class="discount">-15%</div>
              <img src="https://via.placeholder.com/250x160?text=Product+${i}" alt="Product ${i}">
              <h4>Sunstar Fresh Melon Juice</h4>
              <div class="rating">1 Unit ★ 4.5</div>
              <div class="price">$18.00</div>
              <div class="quantity-control">
                <button onclick="decreaseQty(this)">-</button>
                <span>1</span>
                <button onclick="increaseQty(this)">+</button>
              </div>
              <button class="add-btn">Add to Cart</button>
            </div>
          `;
        }
      </script>
    </div>
  </div>
</div>

<script>
  function scrollRow(direction) {
    const row = document.getElementById('productRow');
    row.scrollLeft += direction * 300;
  }

  function increaseQty(btn) {
    const span = btn.previousElementSibling;
    let val = parseInt(span.textContent);
    span.textContent = val + 1;
  }

  function decreaseQty(btn) {
    const span = btn.nextElementSibling;
    let val = parseInt(span.textContent);
    if (val > 1) span.textContent = val - 1;
  }
</script>

</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Subscribe Offer Fullscreen</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      font-family: 'Segoe UI', sans-serif;
      background: #f4f4f4;
    }

    .full-page {
      display: flex;
      min-height: 100vh;
      width: 100%;
      flex-wrap: wrap;
    }

    .offer-left,
    .offer-right {
      flex: 1 1 50%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 60px;
    }

    .offer-left {
      background: #0f9d58;
      color: white;
    }

    .offer-left h2 {
      font-size: 2.5rem;
      margin-bottom: 20px;
    }

    .offer-left p {
      font-size: 1.1rem;
      line-height: 1.6;
    }

    .offer-right {
      background: #fff;
    }

    .offer-right h3 {
      font-size: 1.8rem;
      margin-bottom: 30px;
      color: #222;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-size: 1rem;
      margin-bottom: 6px;
      color: #333;
      text-align: left;
    }

    .form-group input {
      width: 100%;
      padding: 12px;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .subscribe-btn {
      background: #0f9d58;
      color: white;
      padding: 14px;
      font-size: 1rem;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
      font-weight: bold;
      transition: background 0.3s;
    }

    .subscribe-btn:hover {
      background: #0c7c45;
    }

    @media (max-width: 992px) {
      .offer-left h2 {
        font-size: 2rem;
      }

      .offer-right h3 {
        font-size: 1.5rem;
      }

      .offer-left,
      .offer-right {
        padding: 40px;
      }
    }

    @media (max-width: 768px) {
      .full-page {
        flex-direction: column;
      }

      .offer-left,
      .offer-right {
        flex: 1 1 100%;
        text-align: center;
        padding: 30px 20px;
      }

      .form-group label {
        text-align: center;
      }
    }

    @media (max-width: 480px) {
      .offer-left h2 {
        font-size: 1.6rem;
      }

      .offer-right h3 {
        font-size: 1.3rem;
      }

      .form-group input {
        padding: 10px;
        font-size: 0.95rem;
      }

      .subscribe-btn {
        padding: 12px;
        font-size: 0.95rem;
      }
    }
  </style>
</head>
<body>

<div class="full-page">
  <!-- Left Side Content -->
  <div class="offer-left">
    <h2>Get 25% Discount on your first purchase</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictumst amet, metus, sit massa posuere maecenas. At tellus ut nunc amet vel egestas.</p>
  </div>

  <!-- Right Side Form -->
  <div class="offer-right">
    <h3>Subscribe to the newsletter</h3>
    <form>
      <div class="form-group">
        <label for="fname">Name</label>
        <input type="text" id="fname" placeholder="Your Name" />
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="abc@mail.com" />
      </div>
      <button type="submit" class="subscribe-btn">Subscribe</button>
    </form>
  </div>
</div>

</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Double Best Selling Sections</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f5f5f5;
    }

    .container {
      padding: 30px;
      max-width: 100%;
      overflow-x: hidden;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
      background: #0f9d58;
      padding: 10px 20px;
      border-radius: 10px;
      flex-wrap: wrap;
    }

    .header h2 {
      font-size: 2rem;
      color: #fff;
      margin: 0;
    }

    .header a {
      font-size: 1rem;
      color: #fff;
      text-decoration: none;
      margin-top: 8px;
    }

    .scroll-wrapper {
      position: relative;
      margin-bottom: 50px;
    }

    .scroll-buttons {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 100%;
      display: flex;
      justify-content: space-between;
      z-index: 2;
      pointer-events: none;
    }

    .scroll-btn {
      background: rgba(0,0,0,0.1);
      border: none;
      padding: 10px 15px;
      font-size: 20px;
      cursor: pointer;
      backdrop-filter: blur(5px);
      pointer-events: all;
    }

    .products-row {
      display: flex;
      overflow-x: auto;
      gap: 16px;
      scroll-behavior: smooth;
      padding-bottom: 10px;
    }

    .products-row::-webkit-scrollbar {
      display: none;
    }

    .product-box {
      background: white;
      min-width: 250px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      padding: 16px;
      position: relative;
      flex-shrink: 0;
    }

    .product-box img {
      width: 100%;
      height: 160px;
      object-fit: cover;
      border-radius: 10px;
    }

    .discount {
      position: absolute;
      top: 10px;
      left: 10px;
      background: #e53935;
      color: #fff;
      padding: 4px 8px;
      font-size: 0.8rem;
      border-radius: 5px;
    }

    .product-box h4 {
      margin: 10px 0 5px;
      font-size: 1rem;
      color: #222;
    }

    .rating {
      font-size: 0.9rem;
      color: #888;
    }

    .price {
      font-weight: bold;
      color: #0f9d58;
      margin: 8px 0;
    }

    .quantity-control {
      display: flex;
      align-items: center;
      gap: 8px;
      margin: 10px 0;
    }

    .quantity-control button {
      padding: 4px 10px;
      font-size: 1rem;
      border: none;
      background: #eee;
      cursor: pointer;
      border-radius: 5px;
    }

    .add-btn {
      background: #0f9d58;
      color: white;
      border: none;
      padding: 8px 12px;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
      font-weight: bold;
    }

    /* Media Queries for Responsive Design */
    @media (max-width: 600px) {
      .header h2 {
        font-size: 1.4rem;
      }

      .product-box {
        min-width: 200px;
      }
    }

    @media (max-width: 480px) {
      .container {
        padding: 15px;
      }

      .header {
        flex-direction: column;
        align-items: flex-start;
      }

      .header h2 {
        font-size: 1.2rem;
      }

      .header a {
        font-size: 0.9rem;
        margin-top: 5px;
      }

      .product-box {
        min-width: 180px;
        padding: 12px;
      }

      .product-box h4 {
        font-size: 0.9rem;
      }

      .price {
        font-size: 0.9rem;
      }

      .quantity-control span {
        min-width: 20px;
        text-align: center;
      }

      .scroll-btn {
        font-size: 18px;
        padding: 8px 12px;
      }
    }
  </style>
</head>
<body>

<div class="container">

  <!-- Section 1 -->
  <div class="header">
    <h2>Best Selling Products</h2>
    <a href="#">View All Categories →</a>
  </div>
  <div class="scroll-wrapper">
    <div class="scroll-buttons">
      <button class="scroll-btn" onclick="scrollBothRows(-1)">←</button>
      <button class="scroll-btn" onclick="scrollBothRows(1)">→</button>
    </div>
    <div class="products-row" id="productRow1"></div>
  </div>

  <!-- Section 2 -->
  <div class="header">
    <h2>More Best Sellers</h2>
    <a href="#">View All Categories →</a>
  </div>
  <div class="scroll-wrapper">
    <div class="scroll-buttons">
      <button class="scroll-btn" onclick="scrollBothRows(-1)">←</button>
      <button class="scroll-btn" onclick="scrollBothRows(1)">→</button>
    </div>
    <div class="products-row" id="productRow2"></div>
  </div>

</div>

<script>
  // Generate 23 product boxes for both rows
  function generateProducts(containerId, startIndex) {
    const row = document.getElementById(containerId);
    for (let i = 0; i < 23; i++) {
      row.innerHTML += `
        <div class="product-box">
          <div class="discount">-15%</div>
          <img src="https://via.placeholder.com/250x160?text=Product+${startIndex + i}" alt="Product ${startIndex + i}">
          <h4>Sunstar Fresh Melon Juice</h4>
          <div class="rating">1 Unit ★ 4.5</div>
          <div class="price">$18.00</div>
          <div class="quantity-control">
            <button onclick="decreaseQty(this)">-</button>
            <span>1</span>
            <button onclick="increaseQty(this)">+</button>
          </div>
          <button class="add-btn">Add to Cart</button>
        </div>
      `;
    }
  }

  generateProducts('productRow1', 1);
  generateProducts('productRow2', 24);

  // Scroll both rows together
  function scrollBothRows(direction) {
    const row1 = document.getElementById('productRow1');
    const row2 = document.getElementById('productRow2');
    row1.scrollLeft += direction * 300;
    row2.scrollLeft += direction * 300;
  }

  // Quantity controls
  function increaseQty(btn) {
    const span = btn.previousElementSibling;
    let val = parseInt(span.textContent);
    span.textContent = val + 1;
  }

  function decreaseQty(btn) {
    const span = btn.nextElementSibling;
    let val = parseInt(span.textContent);
    if (val > 1) span.textContent = val - 1;
  }
</script>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foodmart App Promo</title>
</head>
<body style="margin:0;font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;background:#f5f5f5;">

  <div id="appSection" style="display:flex;flex-direction:row;max-width:1200px;margin:50px auto;background:white;border-radius:15px;overflow:hidden;box-shadow:0 10px 25px rgba(0,0,0,0.1);">
    
    <div id="appImage" style="flex:1;display:flex;justify-content:center;align-items:center;background:#e0f7fa;">
      <img id="phoneImage" src="https://cdn-icons-png.flaticon.com/512/888/888857.png" alt="Phone" style="position:relative;top:-40px;height:400px;object-fit:contain;">
    </div>

    <div id="appContent" style="flex:1;padding:60px 40px;display:flex;flex-direction:column;justify-content:center;background:white;">
      <h1 style="font-size:2.8rem;margin:0 0 20px 0;font-weight:900;line-height:1.1;color:#0f9d58;">Shop faster with foodmart App</h1>
      <p style="font-size:1.1rem;line-height:1.6;color:#444;margin-bottom:35px;max-width:500px;">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis sed ptibus liberolectus nonet psryroin. Amet sed lorem posuere sit iaculis amet, ac urna. Adipiscing fames semper erat ac in suspendisse iaculis. Amet blandit tortor praesent ante vitae. A, enim pretiummi senectus magna. Sagittis sed ptibus liberolectus non et psryroin.
      </p>
      <div style="display:flex;gap:20px;">
        <a href="#" style="display:inline-block;width:140px;height:45px;background:url('https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg') center/contain no-repeat;border-radius:8px;box-shadow:0 4px 10px rgba(15,157,88,0.3);"></a>
        <a href="#" style="display:inline-block;width:140px;height:45px;background:url('https://upload.wikimedia.org/wikipedia/commons/5/5f/Apple_logo_black.svg') center/contain no-repeat;border-radius:8px;box-shadow:0 4px 10px rgba(15,157,88,0.3);"></a>
      </div>
    </div>
  </div>

  <script>
    function makeResponsive() {
      const width = window.innerWidth;
      const appSection = document.getElementById("appSection");
      const appContent = document.getElementById("appContent");
      const phoneImage = document.getElementById("phoneImage");

      if (width <= 900) {
        appSection.style.flexDirection = "column";
        appSection.style.maxWidth = "90vw";
        appContent.style.textAlign = "center";
        appContent.style.padding = "30px 20px";
        phoneImage.style.height = "300px";
        phoneImage.style.top = "0";
      } else {
        appSection.style.flexDirection = "row";
        appSection.style.maxWidth = "1200px";
        appContent.style.textAlign = "left";
        appContent.style.padding = "60px 40px";
        phoneImage.style.height = "400px";
        phoneImage.style.top = "-40px";
      }
    }

    window.addEventListener("resize", makeResponsive);
    window.addEventListener("load", makeResponsive);
  </script>

</body>
</html>

