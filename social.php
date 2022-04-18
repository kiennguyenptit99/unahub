<?php
$GLOBALS['titlePage'] = "Social";
$GLOBALS['classBody'] = "tpl-social";
$GLOBALS['currentHeader'] = "Social";
include 'header.php';

?>
<link rel="stylesheet" href="./styles/scss/main.css" />
<link rel="stylesheet" href="./styles/scss/social.css"/>
<link rel="stylesheet" href="./plugins/fontAwesome/font-awesome.min.css">
<section class="header__search">
    <div class="container-master">
      <div class="search__wrap">
      <form action="" class="search__box">
          <div class="search__hub">
          <p href="">Select Your Hub</p>
          <i class="fa-solid fa-angle-down"></i>
          <div class="drop__hub">
            <a href="">UnaBank</a>
            <a href="">UnaEd</a>
            <a href="">UnaFood</a>
            <a href="">UnaGov</a>
            <a href="">UnaHealth</a>
            <a href="">UnaHelp</a>
            <a href="">UnaShop</a>
            <a href="">UnaWork</a>
           </div>
          </div>
           <div class="search">
            <span class="search__icon">
              <i class="fa fa-search"></i>
            </span>
            <input type="text" placeholder="Search..." />
          </div>
          <button>Search</button>
        </form>
        <ul class="nav__list">
         <li class="nav__item nav__item--special">
          <a href="#" class="nav__link">
            Centralized
          </a>
          <a href="#" class="nav__link">
            Decentralized
          </a>
         </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="social__banner">
    <img src="./images/header/header-img-2.png" alt="">
  </section>
  
  <main>
  <section class="section__titlepage">
    <div class="container-master">
      <h1 class="section__titlepage--headertitle"><span>Social</span></h1>
    </div>
  </section>
    <section>
      <div class="manage-plate__items">
        <div class="container-master">
        <div class="row-master">
          <div class="col-12 col-md-6 col-xl-4">
            <div class="manage-plate__item">
              <div class="item__header">
                <div class="item__title">Friends</div>
              </div>
              <div class="item__body">
                <div class="item__copy">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sem mi, rhoncus id neque ac, rutrum
                  imperdiet massa.
                </div>
              </div>
              <div class="item__footer">
                <div class="card__actions">
                  <a href="friends.php"> <span> See More </span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <div class="manage-plate__item">
              <div class="item__header">
                <div class="item__title">Family</div>
              </div>
              <div class="item__body">
                <div class="item__copy">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sem mi, rhoncus id neque ac, rutrum
                  imperdiet massa.
                </div>
              </div>
              <div class="item__footer">
                <div class="card__actions">
                  <a href="/meeting.php"> <span> See More </span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <div class="manage-plate__item">
              <div class="item__header">
                <div class="item__title">Business</div>
              </div>
              <div class="item__body">
                <div class="item__copy">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sem mi, rhoncus id neque ac, rutrum
                  imperdiet massa.
                </div>
              </div>
              <div class="item__footer">
                <div class="card__actions">
                  <a href="/hub-shop.php"> <span> See More </span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <div class="manage-plate__item">
              <div class="item__header">
                <div class="item__title">Tribes</div>
              </div>
              <div class="item__body">
                <div class="item__copy">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sem mi, rhoncus id neque ac, rutrum
                  imperdiet massa.
                </div>
              </div>
              <div class="item__footer">
                <div class="card__actions">
                  <a href="/finance.php"> <span> See More </span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <div class="manage-plate__item">
              <div class="item__header">
                <div class="item__title">Public</div>
              </div>
              <div class="item__body">
                <div class="item__copy">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sem mi, rhoncus id neque ac, rutrum
                  imperdiet massa.
                </div>
              </div>
              <div class="item__footer">
                <div class="card__actions">
                  <a href="/project.php"> <span> See More </span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>
  </section>

</main>
<!-- End Main -->

<!-- Footer -->
<?php include 'footer.php' ?>
<!-- End Footer -->
