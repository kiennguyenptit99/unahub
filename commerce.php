<!--Include Header-->
<?php
$GLOBALS['titlePage'] = "Commerce";
$GLOBALS['classBody'] = "tpl-commerce";
include 'header.php';

?>
<!--End Include Header-->
<link rel="stylesheet" href="./styles/scss/commerce.css">
<link rel="stylesheet" href="./styles/scss/main.css" />

<!-- Main -->
<main>
  
  <section class="header__commerce">
    <div class="container-master">
      <ul class="nav__list">
        <li class="nav__item">
          <a href="#" class="nav__link">Search</a>
        </li>
        <li class="nav__item">
          <a href="#" class="nav__link">Localty</a>
        </li>
        <li class="nav__item" id="myType">
          <a href="#" class="nav__link">Type of Business</a>
          <div class="menu__list">
            <div class="menu__list__item">
              <input type="checkbox" id="check__list1">
              <label for="check__list1">Entrepreneur</label>
            </div>
            <div class="menu__list__item">
              <input type="checkbox" id="check__list2">
              <label for="check__list2">Small</label>
            </div>
            <div class="menu__list__item">
              <input type="checkbox" id="check__list3">
              <label for="check__list3">Medium</label>
            </div>
            <div class="menu__list__item">
              <input type="checkbox" id="check__list4">
              <label for="check__list4">Large</label>
            </div>
            <div class="menu__list__item1">
               <button class="buttonclear">Clear</button>
               <button class="buttonapply">APPLY</button>
            </div>
          </div>
        </li>
        <li class="nav__item" id="myBrand">
          <a href="#" class="nav__link">Brand</a>
        </li>
        <li class="nav__item nav__item--special">
          <a href="#" class="nav__link">
            FIAT
          </a>
          <a href="#" class="nav__link">
            Crypto
          </a>
        </li>
        <li class="nav__item nav__item--special">
          <a href="#" class="nav__link">
            Product
          </a>
          <a href="#" class="nav__link">
            Service
          </a>
        </li>
      </ul>
    </div>
  </section>

  <section class="commerce__banner">
    <img src="./images/header/header-img-2.png" alt="">
  </section>

  <section class="commerce__wrapper">
    <div class="container-master">
      <h1 class="commerce__title">
        <span>Commerce</span>
      </h1>
      <div class="search__commerce" id="input-brand">
          <form action="" class="search__box">
            <div class="search__input">
               <span class="search__icon">
                 <i class="fa fa-search"></i>
               </span>
               <input type="text" placeholder="Search Brand Names..." />
            </div>
          <button>Search</button>
        </form>
      </div>
      <div class="row-master">
      <?php $string = file_get_contents("data/commerce.json");
       $json = json_decode($string, true);
          for ($j = 0; $j < 8; $j++){ ?>
        <div class="col-12 col-md-6 col-xl-3">
          <div class="commerce-card">
            <div class="card__header">
              <div class="card__image">
                <img src="./images/commerce/<?php echo $json[$j]['images'] ?>.png" alt="" />
              </div> 
              <div class="card__title"><?php echo $json[$j]['title'] ?></div>
            </div>
            <div class="card__body">
              <div class="card__copy">
              <?php echo $json[$j]['content'] ?>
              </div>
            </div>
            <div class="card__footer">
              <div class="card__actions">
                <a href="/hub-shop.php"><span>See more</span></a>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>

</main>
<!-- End Main -->


<!-- Footer -->
<?php include 'footer.php' ?>
<!-- End Footer -->

<script>
window.onload = function() {
  var header = document.querySelector(".header__commerce .nav__list");
  var btns = header.querySelectorAll(".nav__item");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var typeBtn = document.getElementById('myType');
      if (this == typeBtn) {
        var currentshowtype = document.getElementsByClassName("show__type");
       if (currentshowtype.length) {
      currentshowtype[0].className = currentshowtype[0].className.replace(" show__type", "");
       }
       this.className += " show__type";
      } else {
        typeBtn.classList.remove("show__type");
      }
      var currentshowtype = document.getElementsByClassName("show__type");
    if (currentshowtype.length) {
      currentshowtype[0].className = currentshowtype[0].className.replace(" show__type", "");
    }
    this.className += " show__type";
    // typebrand
    var typeBrand = document.getElementById('myBrand');
    var inputBrand = document.getElementById("input-brand");
    if (this == typeBrand) {
        var currentshowbrand = document.getElementsByClassName("show__brand");
       if (currentshowbrand.length) {
        currentshowbrand[0].className = currentshowbrand[0].className.replace(" show__brand", "");
       }
       inputBrand.className += " show__brand";
      } else {
        inputBrand.classList.remove("show__brand");
      }
    // end type Brand
    var current = document.getElementsByClassName("active");
    if (current.length) {
        current[0].className = current[0].className.replace(" active", "");
    }
    this.className += " active";
    
 });
  }
}
</script>
