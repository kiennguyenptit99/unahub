<?php

$GLOBALS['titlePage'] = "Category";
$GLOBALS['classBody'] = "tpl-category";
$GLOBALS['currentHeader'] = "Category";
include 'header.php';

?>
<link rel="stylesheet" href="./styles/scss/main.css" />
<link rel="stylesheet" href="./styles/scss/category.css"/>
<link rel="stylesheet" href="./plugins/fontAwesome/css/all.min.css">
<main>
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
  <section class="category__banner">
    <img src="./images/header/header-img-2.png" alt="">
  </section>
  <section class="category__wrapper">
      <div class="container-master">
          <div class="backtofriends">
            <i class="fa fa-arrow-left-long"></i>
            <a href="friends.php">Back to Friends</a>
          </div>
          <h1 class="category__title">
            <span>Category</span>
          </h1>
          <div class="category_group">
              <div class="row-master">
                  <div class="col-12 col-md-8">
                     <div class="createpost">
                         <input type="text" placeholder="Create Post"/>
                         <i class="fa-solid fa-image"></i>
                         <i class="fa-solid fa-link"></i>
                     </div>
                     <div class="latest_Activity">
                         
                     </div>
                  </div>
                  <div class="col-12 col-md-4">

                  </div>
              </div>
          </div>
      </div>
  </section>