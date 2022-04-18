<?php
$GLOBALS['titlePage'] = "Unahub";
$GLOBALS['classBody'] = "tpl-homepage";
include 'header.php'; ?>
<link rel="stylesheet" href="./styles/scss/main.css" />
<link rel="stylesheet" href="./styles/scss/index.css"/>
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
  <div class="image" style="background-image: url('./images/thumbnails/anh1.png')">
    <div class="container-header">
      <div class="title">
      <h1>Lorem ipsum dolor sit amet, consectetur</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nullam id rhoncos urna. Proin euismod, ipsum quis dictum molestie, orci tellus elementum neque, ac mattis.</p>
        <div class="card__actions">
                  <a href="/finance.php"> Join Now </a>
        </div>
      </div>
    </div>
  </div>
  <div class="container-master">
     <div class="offer">
       <h3>WHAT WE OFFER</h3>
       <p>Lorem ipsum dolor sit amet, consectetur</p>
     </div>
     <div class="background_group">
       <div class="background_icon">
         <div class="background">
           <img src="./images/meeting/img.png">
           <h4>Social</h4>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
         </div>
       </div>
       <div class="background_icon">
         <div class="background">
           <img src="./images/meeting/img.png">
           <h4>Commerce</h4> 
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
         </div>
       </div>
       <div class="background_icon">
         <div class="background">
           <img src="./images/meeting/img.png">
            <h4>Info</h4>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
         </div>
       </div>
     </div>
     <div class="main_group">
       <div class="main_text">
         <div class="social_text">
           <h3>Social</h3>
           <p>Phasellus vel ligula venenatis, placerat augue feugiat, egestas velit. Proin enim neque, cursus eu eleifend id, tempor ut magna. Mauris et velit a sem venenatis tincidunt. Integer blandit, metus in laoreet sollicitudin, tortor risus pulvinar sapien, sagittis sodales felis orci vitae magna.</p>
           <div class="card__actions">
                  <a href="/finance.php"> LEARN MORE </a>
           </div>
         </div>
         <div class="image">
           <img src="./images/thumbnails/anh2.png">
         </div>
        </div>
        <div class="main_text">
          <div class="image_icon">
           <img src="./images/thumbnails/anh2.png">
          </div>
         <div class="social_text p_text">
           <h3>Commerce</h3>
           <p>Phasellus vel ligula venenatis, placerat augue feugiat, egestas velit. Proin enim neque, cursus eu eleifend id, tempor ut magna. Mauris et velit a sem venenatis tincidunt. Integer blandit, metus in laoreet sollicitudin, tortor risus pulvinar sapien, sagittis sodales felis orci vitae magna.</p>
           <div class="card__actions">
                  <a href="/finance.php"> LEARN MORE </a>
        </div>
         </div>
        </div>
        <div class="main_text">
         <div class="social_text">
           <h3>Info</h3>
           <p>Phasellus vel ligula venenatis, placerat augue feugiat, egestas velit. Proin enim neque, cursus eu eleifend id, tempor ut magna. Mauris et velit a sem venenatis tincidunt. Integer blandit, metus in laoreet sollicitudin, tortor risus pulvinar sapien, sagittis sodales felis orci vitae magna.</p>
           <div class="card__actions">
                  <a href="/finance.php"> LEARN MORE </a>
        </div>
         </div>
         <div class="image">
           <img src="./images/thumbnails/anh2.png">
         </div>
        </div>
     </div>
   </div>
   <div class="subscribe_group">
     <div class="container-master">
       <div class="subscribe">
          <h3>Subscribe to stay updated of our latest deals</h3>
          <p>By signing up to our newletter you accept our Privacy Policy.</p>
          <div class="signup">
             <input type="text" placeholder="Full Name" />
             <input class="input_email" type="text" placeholder="Email" />
             <div class="card__actions">
                  <a href="/finance.php"> GET ACCESS </a>
        </div>
          </div>
       </div>
     </div>
   </div>
   <div class="question_group" style="background-image: url('./images/thumbnails/anh3.png')"> 
      <div class="container-master">
        <div class="question">
          <h3>Do you have any questions?</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nullam id rhoncos urna. Proin euismod, ipsum quis dictum molestie, orci tellus elementum neque, ac mattis.</p>
          <div class="card__actions">
                  <a href="/finance.php"> Contact Us </a>
        </div>
        </div>
      </div>
   </div>


<!-- Footer -->
<?php include 'footer.php' ?>
<!-- End Footer -->
