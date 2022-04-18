<!--Include Header-->
<?php
$GLOBALS['titlePage'] = "Profile";
$GLOBALS['classBody'] = "tpl-profile";
$GLOBALS['currentHeader'] = "profile";
include 'header.php';

?>
<!--End Include Header-->
<link rel="stylesheet" href="./styles/scss/profile.css" />

<!-- Main -->
<main>

  <section class="profile__wrapper">
    <div class="container-master">
      <h1 class="profile__title">
        <span>Profile</span>
      </h1>

      <!-- To do - schedule meeting -->
      <div class="profile__to-do_meeting">
        <div class="row-master">
          <div class="col-12 col-md-12 col-xl-6">
            <div class="profile__to-do">
              <span class="profile__to-do_title">What do you want to?</span>

              <div class="profile__to-do_items">
                <div class="profile__to-do_item">
                  <a href="/commerce.php"><span>Find Customers</span></a>
                </div>
                <div class="profile__to-do_item">
                  <span>Find Work</span>
                </div>
                <div class="profile__to-do_item">
                  <span>Find Projects</span>
                </div>
                <div class="profile__to-do_item">
                  <a href="/hub-shop.php"><span>Sell Products</span></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-12 col-xl-6">
            <div class="profile__meeting">
              <span class="profile__meeting_title">Individual Schedule of Meetings</span>

              <div class="profile__meeting__schedule">
                <div class="profile__meeting__schedule-item">
                  <div class="profile__meeting__schedule-item__time">09:00 AM</div>
                  <div class="profile__meeting__schedule-item__detail">
                    <div class="schedule-item__detail__info">
                      <div class="detail__info__title">Title of Meeting</div>
                      <a href="/meeting.php"><span>Location Here</span></a>
                      <div class="detail__info__user">
                        <ul>
                          <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                          <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                          <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                          <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                          <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                        </ul>
                      </div>
                    </div>

                    <div class="schedule-item__detail__time">
                      <span class="detail__time__date">28 MAY</span>
                      <span class="detail__time">09:00 - 14:00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="profile__meeting__schedule">
                <div class="profile__meeting__schedule-item">
                  <div class="profile__meeting__schedule-item__time">09:00 AM</div>
                  <div class="profile__meeting__schedule-item__detail">
                    <div class="schedule-item__detail__info">
                      <div class="detail__info__title">Title of Meeting</div>
                      <a href="/meeting.php"><span>Location Here</span></a>
                      <div class="detail__info__user">
                        <ul>
                          <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                          <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                          <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                          <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                          <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                        </ul>
                      </div>
                    </div>

                    <div class="schedule-item__detail__time">
                      <span class="detail__time__date">28 MAY</span>
                      <span class="detail__time">09:00 - 14:00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="profile__meeting__schedule">
                <div class="profile__meeting__schedule-item">
                  <div class="profile__meeting__schedule-item__time">09:00 AM</div>
                  <div class="profile__meeting__schedule-item__detail">
                    <div class="schedule-item__detail__info">
                      <div class="detail__info__title">Title of Meeting</div>
                      <a href="/meeting.php"><span>Location Here</span></a>
                      <div class="detail__info__user">
                        <ul>
                          <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                          <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                          <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                          <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                          <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                        </ul>
                      </div>
                    </div>

                    <div class="schedule-item__detail__time">
                      <span class="detail__time__date">28 MAY</span>
                      <span class="detail__time">09:00 - 14:00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Profile Projects -->
      <div class="profile-project">
        <span class="profile-project__title">Projects</span>

        <div class="profile-project__items">
          <div class="row-master">
            <div class="col-xs-12 col-md-12 col-xl-4">
              <div class="profile-project__item">
                <div class="item__header">
                  <a href="/project.php"><span>Project’s Name</span></a>
                  <img src="./images/icons/icon-ellipsis.svg" alt="">
                </div>

                <span class="item__status">Status</span>
                <div class="item__content">
                  <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet ullamcorper nibh vitae
                  venenatis. Integer malesuada tempus turpis et rhoncus.</span>
                </div>

                <div class="item__user">
                  <ul>
                    <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                    <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                    <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                    <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                    <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                  </ul>
                  <span class="item__user__more">+68 others</span>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-12 col-xl-4">
              <div class="profile-project__item">
                <div class="item__header">
                  <a href="/project.php"><span>Project’s Name</span></a>
                  <img src="./images/icons/icon-ellipsis.svg" alt="">
                </div>

                <span class="item__status">Status</span>
                <div class="item__content">
                  <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet ullamcorper nibh vitae
                  venenatis. Integer malesuada tempus turpis et rhoncus.</span>
                </div>

                <div class="item__user">
                  <ul>
                    <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                    <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                    <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                    <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                    <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                  </ul>
                  <span class="item__user__more">+68 others</span>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-12 col-xl-4">
              <div class="profile-project__item">
                <div class="item__header">
                  <a href="/project.php"><span>Project’s Name</span></a>
                  <img src="./images/icons/icon-ellipsis.svg" alt="">
                </div>

                <span class="item__status">Status</span>
                <div class="item__content">
                  <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet ullamcorper nibh vitae
                  venenatis. Integer malesuada tempus turpis et rhoncus.</span>
                </div>

                <div class="item__user">
                  <ul>
                    <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                    <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                    <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                    <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                    <li><a href="#"><img src="./images/thumbnails/card-avatar.png" alt=""></a></li>
                  </ul>
                  <span class="item__user__more">+68 others</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Career Resume -->
      <div class="career-resume">
        <div class="row-master">
          <div class="col-xs-12 col-md-12 col-xl-6">
            <div class="career-resume__career-goals">
              <div class="career-goals--title">
                <span>Career Goals</span>
                <a href="#">View All</a>
              </div>

              <div class="career-goals--items">
                <div class="career-goals--item">
                  <span class="career-goals--item--title">Title of Goal</span>
                  <div class="career-goals--item--content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat convallis ipsum, sed
                    pellentesque orci gravida sit amet. Aliquam at odio lorem.
                  </div>
                </div>
                <div class="career-goals--item">
                  <span class="career-goals--item--title">Title of Goal</span>
                  <div class="career-goals--item--content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat convallis ipsum, sed
                    pellentesque orci gravida sit amet. Aliquam at odio lorem.
                  </div>
                </div>
                <div class="career-goals--item">
                  <span class="career-goals--item--title">Title of Goal</span>
                  <div class="career-goals--item--content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat convallis ipsum, sed
                    pellentesque orci gravida sit amet. Aliquam at odio lorem.
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-md-12 col-xl-6">
            <div class="career-resume__resume">
              <div class="resume--title">
                <span>Resume/Products</span>
                <a href="#">View All</a>
              </div>

              <div class="resume--items">
                <div class="resume-row">
                  <div class="resume-col">
                    <div class="resume--item">
                      <div class="resume--item--modifer">
                        <p>Product</p>
                        <span>Information</span>
                      </div>
                    </div>
                  </div>
                  <div class="resume-col">
                    <div class="resume--item">
                      <div class="resume--item--modifer">
                        <p>Product</p>
                        <span>Information</span>
                      </div>
                    </div>
                  </div>
                  <div class="resume-col">
                    <div class="resume--item">
                      <div class="resume--item--modifer">
                        <p>Product</p>
                        <span>Information</span>
                      </div>
                    </div>
                  </div>
                  <div class="resume-col">
                    <div class="resume--item">
                      <div class="resume--item--modifer">
                        <p>Product</p>
                        <span>Information</span>
                      </div>
                    </div>
                  </div>
                  <div class="resume-col">
                    <div class="resume--item">
                      <div class="resume--item--modifer">
                        <p>Product</p>
                        <span>Information</span>
                      </div>
                    </div>
                  </div>
                  <div class="resume-col">
                    <div class="resume--item">
                      <div class="resume--item--modifer">
                        <p>Product</p>
                        <span>Information</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Best Match -->
      <div class="best-match">
        <span class="best-match__title">Best Match</span>

        <div class="best-match__items">
          <div class="row-master">
            <div class="col-xs-12 col-md-12 col-xl-4">
              <div class="best-match__item">
                <div class="item__header">
                  <a href="/project.php"><span>Project’s Name</span></a>
                  <img src="./images/icons/icon-ellipsis.svg" alt="">
                </div>

                <span class="item__tag">@company</span>
                <div class="item__content">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet ullamcorper nibh vitae
                  venenatis. Integer malesuada tempus turpis et rhoncus.
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-12 col-xl-4">
              <div class="best-match__item">
                <div class="item__header">
                  <a href="/project.php"><span>Project’s Name</span></a>
                  <img src="./images/icons/icon-ellipsis.svg" alt="">
                </div>

                <span class="item__tag">@company</span>
                <div class="item__content">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet ullamcorper nibh vitae
                  venenatis. Integer malesuada tempus turpis et rhoncus.
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-12 col-xl-4">
              <div class="best-match__item">
                <div class="item__header">
                  <a href="/project.php"><span>Project’s Name</span></a>
                  <img src="./images/icons/icon-ellipsis.svg" alt="">
                </div>

                <span class="item__tag">@company</span>
                <div class="item__content">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet ullamcorper nibh vitae
                  venenatis. Integer malesuada tempus turpis et rhoncus.
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
