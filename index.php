<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee House</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" >
  
</head>
<body>
  <header class="header">
    <a href="#" class="logo">
      <img src="assets/coffee-logo.png" alt="" >
    </a>

    <nav class="navbar">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#menu">Menu</a>
      <a href="#products">Products</a>
      <a href="#review">Review</a>
      <a href="#contact">Contact</a>

    </nav>

    <div class="icons">
      <div class="fas fa-search" id="search-btn"></div>
      <div class="fas fa-shopping-cart" id="cart-btn"></div>
      <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="assets/logo.png" alt="">
          <div class="content">
            <h3>cart item 01</h3>
            <div class="price">₱249.99/-</div>
          </div>
        </div>
        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="assets/logo.png" alt="">
          <div class="content">
            <h3>cart item 01</h3>
            <div class="price">₱249.99/-</div>
          </div>
        </div>
        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="assets/logo.png" alt="">
          <div class="content">
            <h3>cart item 01</h3>
            <div class="price">₱249.99/-</div>
          </div>
        </div>
        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="assets/logo.png" alt="">
          <div class="content">
            <h3>cart item 01</h3>
            <div class="price">₱249.99/-</div>
          </div>
        </div>
        <a href="#" class="btn" >check out now</a>
    </div>
  </header>


  <section class="home" id="home">
    <div class="content">
      <h3>hot coffee in the morning</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate esse quo quam quibusdam impedit incidunt sapiente quis?</p>
      <a href="#" class="btn">get yours now</a>
    </div>
  </section>

  <section class="about" id="about">
    <h1 class="heading"><span>about</span> us </h1>
    <div class="row">
      <div class="image">
        <img src="assets/about.png" alt="">
      </div>

      <div class="content">
        <h3>What makes our coffee special?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate esse quo quam quibusdam impedit incidunt sapiente quis?</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quod consequatur deleniti quos voluptatum in sit error quas, voluptate pariatur dolores. Qui minima ipsam accusamus, blanditiis iste omnis sed ipsa.</p>
        <a href="#" class="btn">Learn more</a>
      </div>

    </div>
  </section>

  <section class="menu" id="menu">
    <h1 class="heading">our <span>menu</span></h1>
      
    <div class="box-container">

      <div class="box">
        <img src="assets/logo.png" alt="">
        <h3>tasty and healty</h3>
        <div class="price">₱249.99 <span>299.99</span></div>
        <a href="#" class="btn">add to cart</a>
      </div>

      <div class="box">
        <img src="assets/logo.png" alt="">
        <h3>tasty and healty</h3>
        <div class="price">₱249.99 <span>299.99</span></div>
        <a href="#" class="btn">add to cart</a>
      </div>

      <div class="box">
        <img src="assets/logo.png" alt="">
        <h3>tasty and healty</h3>
        <div class="price">₱249.99 <span>299.99</span></div>
        <a href="#" class="btn">add to cart</a>
      </div>

      <div class="box">
        <img src="assets/logo.png" alt="">
        <h3>tasty and healty</h3>
        <div class="price">₱249.99 <span>299.99</span></div>
        <a href="#" class="btn">add to cart</a>
      </div>

      <div class="box">
        <img src="assets/logo.png" alt="">
        <h3>tasty and healty</h3>
        <div class="price">₱249.99 <span>299.99</span></div>
        <a href="#" class="btn">add to cart</a>
      </div>

      <div class="box">
        <img src="assets/logo.png" alt="">
        <h3>tasty and healty</h3>
        <div class="price">₱249.99 <span>299.99</span></div>
        <a href="#" class="btn">add to cart</a>
      </div>

      <div class="box">
        <img src="assets/logo.png" alt="">
        <h3>tasty and healty</h3>
        <div class="price">₱249.99 <span>299.99</span></div>
        <a href="#" class="btn">add to cart</a>
      </div>

      <div class="box">
        <img src="assets/logo.png" alt="">
        <h3>tasty and healty</h3>
        <div class="price">₱249.99 <span>299.99</span></div>
        <a href="#" class="btn">add to cart</a>
      </div>

    </div>
  </section>

  <section class="products" id="products">
    <h1 class="heading">our <span>products</span></h1>
      
    <div class="box-container">

      <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>

        <div class="image">
          <img src="assets/logo.png" alt="">
        </div>
        <div class="content">
          <h3>fresh coffee</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price">₱249.99 <span>299.99</span></div>
        </div>
      </div>

      <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>

        <div class="image">
          <img src="assets/logo.png" alt="">
        </div>
        <div class="content">
          <h3>fresh coffee</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price">₱249.99 <span>299.99</span></div>
        </div>
      </div>

      <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>

        <div class="image">
          <img src="assets/logo.png" alt="">
        </div>
        <div class="content">
          <h3>fresh coffee</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price">₱249.99 <span>299.99</span></div>
        </div>
      </div>

      <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>

        <div class="image">
          <img src="assets/logo.png" alt="">
        </div>
        <div class="content">
          <h3>fresh coffee</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price">₱249.99 <span>299.99</span></div>
        </div>
      </div>

    </div>
  </section>

<section class="review" id="review">
  <h1 class="heading"> customer's <span>review</span> </h1>
  <div class="box-container">
    <div class="box">
      <img src="assets/quote.png" alt="" class="quote">
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, beatae esse est, quisquam maiores ut dolorem reprehenderit hic accusamus voluptatum tempore doloremque mollitia quis aspernatur numquam dolorum reiciendis eligendi quas!
      </p>
      <img src="assets/img.jpg" class="user" alt="">
      <h3>prince louie</h3>
      <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
    </div>

    <div class="box">
      <img src="assets/quote.png" alt="" class="quote">
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, beatae esse est, quisquam maiores ut dolorem reprehenderit hic accusamus voluptatum tempore doloremque mollitia quis aspernatur numquam dolorum reiciendis eligendi quas!
      </p>
      <img src="assets/img.jpg" class="user" alt="">
      <h3>prince louie</h3>
      <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
    </div>

    <div class="box">
      <img src="assets/quote.png" alt="" class="quote">
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, beatae esse est, quisquam maiores ut dolorem reprehenderit hic accusamus voluptatum tempore doloremque mollitia quis aspernatur numquam dolorum reiciendis eligendi quas!
      </p>
      <img src="assets/img.jpg" class="user" alt="">
      <h3>prince louie</h3>
      <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
    </div>

    <div class="box">
      <img src="assets/quote.png" alt="" class="quote">
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, beatae esse est, quisquam maiores ut dolorem reprehenderit hic accusamus voluptatum tempore doloremque mollitia quis aspernatur numquam dolorum reiciendis eligendi quas!
      </p>
      <img src="assets/img.jpg" class="user" alt="">
      <h3>prince louie</h3>
      <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
    </div>
  </div>
</section>

<section class="contact" id="contact">
  <h1 class="heading"><span>contact</span> us </h1>

  <div class="row">
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.0465740297263!2d120.97854409999994!3d14.6532977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b42d244f9999%3A0x746d55b15c11859!2sBarangay%2069%20Zone%206%20Dist.%20II%20P%2FB%20Jenette%20B.%20Manlapig%20%26%20Council!5e0!3m2!1sen!2sph!4v1710490939104!5m2!1sen!2sph" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
    <form action="">
      <h3>get in touch</h3>
      <div class="inputBox">
        <span class="fas fa-user"></span>
        <input type="text" placeholder="name" >
      </div>
      <div class="inputBox">
        <span class="fas fa-envelope"></span>
        <input type="email" placeholder="email" >
      </div>
      <div class="inputBox">
        <span class="fas fa-user"></span>
        <input type="number" placeholder="number" >
      </div>
      <input type="submit" value="contact now" class="btn" >
    </form>
  </div>

</section>

<section class="footer">
  <div class="share">
    <a href="#" class="fab fa-facebook"></a>
    <a href="#" class="fab fa-twitter"></a>
    <a href="#" class="fab fa-instagram"></a>
    <a href="#" class="fab fa-linkedin"></a>
    <a href="#" class="fab fa-pinterest"></a>
  </div>

  <div class="links">
    <a href="#">home</a>
    <a href="#">about</a>
    <a href="#">menu</a>
    <a href="#">products</a>
    <a href="#">review</a>
    <a href="#">contact</a>
  </div>

  <div class="credit">created by <span>blackcode</span> | all rights reserved</div>

</section>




  <script src="script.js"></script>
</body>
</html>