<!--Include Header-->
<?php
$GLOBALS['titlePage'] = "Info";
$GLOBALS['classBody'] = "tpl-info";
$GLOBALS['currentHeader'] = "info";
include 'header.php';

?>
<!--End Include Header-->
<link rel="stylesheet" href="./styles/scss/main.css" />
<link rel="stylesheet" href="./styles/scss/info.css" />
<link rel="stylesheet" href="./plugins/fontAwesome/css/all.min.css">

<!-- Main -->
<main>



  <section class="header__search">
    <div class="container-master">
      <div class="search__wrap">
        <form action="" class="search__box">
          <span class="search__icon">
            <i class="fa fa-search"></i>
          </span>
          <input type="text" placeholder="Search..." />
          <button>Search</button>
        </form>
        <ul class="search__list">
          <li class="search__item">
            <a href="#" class="search__link">All</a>
          </li>
          <li class="search__item">
            <a href="#" class="search__link">News</a>
          </li>
          <li class="search__item">
            <a href="#" class="search__link">Definitions</a>
          </li>
          <li class="search__item">
            <a href="#" class="search__link">Commentary</a>
          </li>
          <li class="search__item">
            <a href="#" class="search__link">Entertainment</a>
          </li>
          <li class="search__item">
            <a href="#" class="search__link">Experts</a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="info__banner">
    <img src="./images/thumbnails/thumb-info.png" alt="">
  </section>

  <section class="info__wrapper">
    <div class="container-master">
      <h1 class="info__title">
        <span>Info</span>
      </h1>
      <a href="" class="btn-link__rating">Relevancy Rating</a>
      <div class="row-master">
        <?php for ($i = 1; $i < 9; $i++): ?>
        <div class="col-12 col-md-6 col-xl-3">
          <div class="info-card">
            <div class="card__header">
              <div class="card__image">
                <img src="./images/info/img<?php echo $i ?>.png" alt="" />
              </div>
            </div>
            <div class="card__body">
              <div class="card__title">Lorem ipsum dolor sit amet, consectetur </div>

              <div class="card__date">
                <span>8 Sep, 2019</span>
              </div>
              <div class="card__copy">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              </div>

              <div class="card__rate">
                <span>Relevancy Rating:</span>
                <span>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                </span>
              </div>
              <div class="card__actions">
                <a href="/hub-shop.php"><span>Read more</span></a>
              </div>
            </div>
          </div>
        </div>
        <?php endfor; ?>

      </div>
    </div>
  </section>

</main>
<!-- End Main -->


<!-- Footer -->
<?php include 'footer.php' ?>
<!-- End Footer -->
