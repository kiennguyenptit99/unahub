<!--Include Header-->
<?php
$GLOBALS['titlePage'] = "Hub Shop";
$GLOBALS['classBody'] = "tpl-hub-shop";
$GLOBALS['currentHeader'] = "hub-shop";
include 'header.php'; ?>
<!--End Include Header-->
<link rel="stylesheet" href="./styles/scss/hub-shop.css" />
<link rel="stylesheet" href="./plugins/fancybox/fancybox.min.css" />


<!-- Main -->
<main>
  <div class="container-master">
    <div class="row-master">
      <div class="col-12 col-md-12 col-xl-9">
        <section class="section__introduce">
          <div class="col-left">
            <img src="./images/thumbnails/logoShop.png" alt="Logo Shop">
          </div>
          <div class="col-right">
            <div class="item">
              <div class="item__title">
                <h1>Company Name</h1>
              </div>
              <div class="item__content">
                <ul>
                  <li>
                    <i class="fa fa-map-marker"></i>
                    <address title="Address">12E Essex Street, Santry</address>
                  </li>
                  <li>
                    <i class="fa fa-phone"></i> <a href="tel:+36 70 676 3185 " title="Phone">+36 70
                      676 3185</a>
                  </li>
                  <li>
                    <i class="fa fa-envelope"></i> <a href="mailto:info@address.com" title="Mail">info@address.com</a>
                  </li>
                  <li>
                    <i class="fa fa-globe"></i> <a href="#" title="Website">Go to Website</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </section>
        <section class="section__about section__layout">
          <div class="section__title">
            <h2>About</h2>
          </div>
          <div class="section__content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur quam nisl, et faucibus
            tortor viverra ac. In lobortis tortor massa, a ultrices lectus elementum eu. Proin bibendum
            interdum ex sed congue. Curabitur dapibus tellus eu orci placerat euismod. Suspendisse vitae
            orci porta justo hendrerit imperdiet.
            <a href="#" class="section__btnMore"><span>Visit Site</span></a>
          </div>
        </section>

        <section class="section__service section__layout">
          <div class="section__title">
            <h2>Services/Products</h2>
            <div>
              <a href="#">View All</a>
              <i class="fa fa-chevron-right"></i>
            </div>
          </div>
          <div class="section__content table-responsive">
            <table>
              <tr class="row__service">
                <th class="row__title">Service</th>
                <?php for ($i = 1; $i < 6; $i++): ?>
                <td>Service Name</td>
                <?php endfor; ?>
              </tr>
              <tr class="row__price">
                <th class="row__title">Price</th>
                <?php for ($i = 1; $i < 6; $i++): ?>
                <td>from <span>$123.00</span></td>
                <?php endfor; ?>
              </tr>
              <tr class="row__description">
                <th class="row__title">Description</th>
                <?php for ($i = 1; $i < 6; $i++): ?>
                <td>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur quam nisl.</p>
                  <a href="#">
                    <span>See more</span>
                  </a>
                </td>
                <?php endfor; ?>
              </tr>
            </table>
          </div>
        </section>

        <section class="section__courses section__layout">
          <div class="section__title">
            <h2>Online Courses</h2>
            <div>
              <a href="#">View All</a>
              <i class="fa fa-chevron-right"></i>
            </div>
          </div>
          <div class="section__content">
            <div class="row-master">
              <?php for ($i = 1; $i < 4; $i++): ?>
              <div class="col-12 col-md-4 col-xl-4">
                <div class="courses__card">
                  <div class="courses__header">
                    <img src="./images/thumbnails/img-course.png" alt="">
                  </div>
                  <div class="courses__body">
                    <div class="courses__title">
                      <a href="#">The Basics of UX / UI Design and Research</a>
                    </div>
                    <div class="courses__subtitle">
                      10 Lessons
                    </div>
                    <div class="courses__dot">
                      <button>
                        <i class="fa fa-circle" aria-hidden="true"></i>
                        <i class="fa fa-circle" aria-hidden="true"></i>
                        <i class="fa fa-circle" aria-hidden="true"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <?php endfor; ?>
            </div>
          </div>
        </section>

        <section class="section__meets section__layout">
          <div class="section__title">
            <h2>Video Meets</h2>
          </div>
          <div class="section__content section__content-grid">
            <?php for ($i = 1; $i < 4; $i++): ?>
            <div class="content_meets">
              <a class="content_meets-video" data-fancybox href="https://www.youtube.com/watch?v=cnXapYkboRQ">
                <img src="./images/thumbnails/video-thumb<?php echo $i ?>.png" class="Image thumb" />
                <span class="btn__play">
                  <i class="fa fa-play"></i>
                </span>
              </a>
              <?php if ($i == 1) :?>
              <a class="btn__seemore" href="/meeting.php">
                <span>Get Started</span>
              </a>
              <?php endif; ?>
            </div>
            <?php endfor; ?>
          </div>

          <div class="section__content section__content-2">
            <div class="row-master">
              <div class="col-12 col-md-4 col-xl-4 content-box__text">
                <h3>Live Training</h3>
                <div>
                  <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur quam nisl.</span>
                </div>
              </div>
              <div class="col-12 col-md-8 col-xl-8 content_meets">
                <a class="content_meets-video" data-fancybox href="https://www.youtube.com/watch?v=cnXapYkboRQ">
                  <img src="./images/thumbnails/video-thumb<?php echo $i ?>.png" class="Image thumb" />
                  <span class="btn__play">
                    <i class="fa fa-play"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="col-12 col-md-12 col-xl-3">
        <aside class="aside__container">

          <div class="aside__card">
            <div class="aside__card__title">
              <span>Set a Meeting</span>
            </div>
            <div class="aside__card__body">
              <span>Integer scelerisque leo a maximus volutpat. Cras commodo est sed lectus elementum
                pulvinar.</span>
            </div>
            <div class="aside__card__actions">
              <a href="/meeting.php"><img src="./images/icons/icon-fly.png" alt=""><span> Send a
                  message</span></a>
            </div>
          </div>
          <div class="aside__card">
            <div class="aside__card__title">
              <span>Online Video</span>
            </div>
            <div class="aside__card__body">
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
            </div>
            <div class="aside__card__actions">
              <button>
                <span>
                  <img src="./images/icons/icon-video.png" alt="">
                  Start Now
                </span>
              </button>
            </div>
          </div>
          <div class="aside__card">
            <div class="aside__card__title">
              <span>Hire / Buy</span>
            </div>
            <div class="aside__card__body">
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
            </div>
            <div class="aside__card__actions">
              <button><span>Get Started</span></button>
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

<script src="./plugins/fancybox/fancybox.min.js"></script>
</script>
<script>
// Meets video popup
$('.content_meets1 a').fancybox({
  caption: function(instance, item) {
    return $(this).parent().find('.card-text').html();
  }
});
</script>
