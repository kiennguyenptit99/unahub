<?php
$GLOBALS['titlePage'] = "Friends";
$GLOBALS['classBody'] = "tpl-friends";
$GLOBALS['currentHeader'] = "Friends";
include 'header.php';
?>
<link rel="stylesheet" href="./styles/scss/main.css" />
<link rel="stylesheet" href="./styles/scss/friends.css"/>
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
  <section class="hire__banner">
    <img src="./images/header/header-img-2.png" alt="">
  </section>
   <section class="hire__wrapper">
    <div class="container-master">
        <div class="backtosocial">
            <i class="fa fa-arrow-left-long"></i>
            <a href="social.php">Back to Social</a>
        </div>
      <div class="friends_group">
         <h1 class="hire__title">
           <span>Friends</span>
         </h1>
         <div class="friends_category">
           <div class="category category_item">
             <p>Category</p>
             <div class="icon">
               <a href="">All Categories</a>
               <i class="fa-solid fa-sort-down"></i>
             </div>
           </div>
           <div class="category">
             <p>Sort by</p>
             <div class="icon">
               <a href="">Activity</a>
               <i class="fa-solid fa-sort-down"></i>
             </div>
           </div>
         </div>
      </div>
      <div class="row-master">
     <?php $string = file_get_contents("data/friends.json");
       $json = json_decode($string, true);
          for ($i = 0; $i < 8; $i++){ ?>
        <div class="col-12 col-md-6 col-xl-3">
          <div class="hire-card">
            <div class="card__header">
              <div class="card__title"><?php echo $json[$i]['title'] ?></div>
            </div>
            <div class="card__body">
              <div class="card__copy">
              <?php echo $json[$i]['content'] ?>
              </div>
            </div>
            <div class="project__footer">
                <ul class="project-list__person">
                  <?php for ($j = 1; $j < 4; $j++) : ?>
                  <li>
                    <a href="#section__water" class="project-person__link">
                      <img src="./images/thumbnails/avatarProfile.jpg" alt="Person" />
                    </a>
                  </li>
                  <?php endfor; ?>
                  <li>
                    <span>5+ others</span>
                  </li>
                </ul>
                <p>Active <?php echo $json[$i]['hour_active'] ?> hours ago</p>
              </div>
            <div class="card__footer">
              <div class="card__actions">
                <a href="category.php"><span>SEE MORE</span></a>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
</main>
<?php include 'footer.php' ?>