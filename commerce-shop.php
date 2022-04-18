<!--Include Header-->
<?php
$GLOBALS['titlePage'] = "Commerce Shop";
$GLOBALS['classBody'] = "tpl-commerce-shop";
$GLOBALS['currentHeader'] = "commerce-shop";
include 'header.php'; ?>
<!--End Include Header-->
<link rel="stylesheet" href="./styles/scss/commerce-shop.css"/>

<!-- Main -->
<main>
    <div class="container-master">
        <div class="row-master">
            <div class="col-12 col-xl-9">
                <div class="cm-shop__left">
                    <div class="row-master">
                        <section class="col-12 cm-shop__information">
                            <div class="cm-shop__image">
                                <img src="./images/thumbnails/avatarProfile.jpg" alt="Thomas Johnson">
                                <div class="profile__save">
                                    <button class="like" onclick="slcBtnProfile(this)" title="Like">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        <i class="active fa fa-heart" aria-hidden="true"></i>
                                    </button>
                                    <button class="save" onclick="slcBtnProfile(this)" title="BookMark">
                                        <i class="active fa fa-bookmark" aria-hidden="true"></i>
                                        <i class=" fa fa-bookmark-o" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="cm-shop__profile">
                                <div class="profile__name">
                                    <h1>Thomas Johnson</h1>
                                    <div>Agency Name</div>
                                </div>

                                <div class="profile__skills">
                                    <div class="title">
                                        <span>Skills</span>
                                    </div>
                                    <ul>
                                        <li class="skill__name">Skill</li>
                                        <li class="skill__name">Skill</li>
                                        <li class="skill__name">Skill</li>
                                        <li class="skill__name">Skill</li>
                                        <li class="skill__name">Skill</li>
                                    </ul>
                                </div>

                                <div class="profile__bio">
                                    <div class="title">
                                        <span>Bio</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a nunc a elit
                                        mollis fringilla. Integer scelerisque leo a maximus volutpat. Cras commodo est
                                        sed lectus elementum pulvinar. Phasellus imperdiet condimentum lorem, tempor
                                        rhoncus risus elementum ac. </p>
                                </div>

                                <div class="profile__interview">
                                    <div class="title">
                                        <span>Interview</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectet</p>
                                </div>

                                <div class="profile__actions">
                                    <button class="actions__btn">
                                        <i class="fa fa-video-camera" aria-hidden="true"></i>
                                        <a href="/manage-plate.php"><span>Video call</span></a>
                                    </button>
                                    <button class="actions__btn">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <a href="/manage-plate.php"><span>Voice call</span></a>
                                    </button>
                                </div>
                            </div>
                        </section>

                        <section class="col-12 cm-shop__reviews">
                            <div class="reviews__header">
                                <div class="reviews__title">
                                    <span>Reviews</span>
                                </div>
                                <div class="reviews__actions">
                                    <a href="#">View All</a>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                          <?php for ($i = 1; $i < 4; $i++): ?>
                              <div class="reviews__card">
                                  <div class="reviews__vote">
                                      <ul>
                                        <?php for ($j = 1; $j < 6; $j++): ?>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <?php endfor; ?>
                                      </ul>
                                      <ul class="reviews__vote--active" style="width: <?php echo 20*$i."%" ?>">
                                        <?php for ($m = 1; $m < 6; $m++): ?>
                                          <li><i class="fa fa-star active" aria-hidden="true"></i></li>
                                        <?php endfor; ?>
                                      </ul>

                                  </div>

                                  <div class="card__header">
                                      <div class="card__image">
                                          <img src="./images/thumbnails/card-avatar.png" alt="">
                                      </div>
                                      <div class="card__info">
                                          <div class="card__name">Full Name</div>
                                          <div class="card__date">
                                              <span>March 4, 2019 · Edited: March 10, 2019 </span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="card__content">
                                      <div class="card__title">
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur quam
                                          nisl, et faucibus tortor viverra ac. In lobortis tortor massa.
                                      </div>
                                      <div class="card__description">
                                          Proin bibendum interdum ex sed congue. Curabitur dapibus tellus eu orci
                                          placerat
                                          euismod. Suspendisse vitae orci porta justo hendrerit imperdiet. Cras quis
                                          mauris non elit aliquam mollis vel eu urna. Proin bibendum interdum ex sed
                                          congue. Curabitur dapibus tellus eu orci placerat
                                          euismod. Suspendisse vitae orci porta justo hendrerit imperdiet. Cras quis
                                          mauris non elit aliquam mollis vel eu urna. Proin bibendum interdum ex sed
                                          congue. Curabitur dapibus tellus eu orci placerat
                                          euismod. Suspendisse vitae orci porta justo hendrerit imperdiet. Cras quis
                                          mauris non elit aliquam mollis vel eu urna.
                                      </div>

                                      <button class="card__readmore" onclick="showFullContent(this)">
                                          <span class="showMore">Read Full Review</span>
                                          <i class="showMore fa fa-angle-down"></i>
                                          <span class="collapse">Collapse Review</span>
                                          <i class="collapse fa fa-angle-up"></i>
                                      </button>


                                  </div>

                                  <div class="card__actions">
                                      <button onclick="slcBtn(this)" class="card__like">
                                          <i class="fa fa-thumbs-o-up"></i>
                                          <i class="active fa fa-thumbs-up"></i>
                                          <span>Helpful</span>
                                      </button>

                                      <button onclick="slcBtn(this)" class="card__dislike">
                                          <i class="fa fa-thumbs-o-down"></i>
                                          <i class="active fa fa-thumbs-down"></i>
                                          <span>Not helpful</span>
                                      </button>
                                  </div>
                              </div>
                          <?php endfor; ?>

                        </section>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-3">
                <aside class="aside__container">

                    <div class="aside__card">
                        <div class="aside__card__title">
                            <span>Hub Shop</span>
                        </div>
                        <div class="aside__card__body">
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </div>
                        <div class="aside__card__actions">
                            <a href="/hub-shop.php"><span>Connect Now</span></a>
                        </div>
                    </div>
                    <div class="aside__card">
                        <div class="aside__card__title">
                            <span>Contact</span>
                        </div>
                        <div class="aside__card__body">
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </div>
                        <div class="aside__card__actions">
                            <a href="#">
                                <span>
                                    <img src="./images/icons/icon-fly.png" alt="">
                                    Send a message
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="aside__card">
                        <div class="aside__card__title">
                            <span>Interlink</span>
                        </div>
                        <div class="aside__card__body">
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </div>
                        <div class="aside__card__actions">
                            <a href="#"><span>Manage Process</span></a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</main>
<!-- End Main -->


<!-- Footer -->
<?php include 'footer.php' ?>
<!-- End Footer -->

<script>
    //Collapse Content Comment
    const showFullContent = (elm) => {
        $(elm).parents('.card__content').find('.card__description').toggleClass('showFullContent');
        $(elm).toggleClass('active');
    }

    //Like or Dislike
    const slcBtn = (elm) => {
        if ($(elm).hasClass("active")) {
            $(elm).removeClass('active')
        } else {
            $(elm).parents('.card__actions').find('button').removeClass('active');
            $(elm).toggleClass('active');
        }

    }

    //Active Btn Profile
    const slcBtnProfile = (elm) => {
        $(elm).toggleClass('active')
    }
</script>
