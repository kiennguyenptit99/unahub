<!--Include Header-->
<?php
$GLOBALS['titlePage'] = "Teams";
$GLOBALS['classBody'] = "tpl-teams";
$GLOBALS['currentHeader'] = "team";
include 'header.php'; ?>

<!--End Include Header-->
<link rel="stylesheet" href="./styles/scss/teams.css" />

<!-- Main -->
<main>


  <?php $GLOBALS['current'] = "team"; include 'header2.php'; ?>
  <section class="section__titlepage">
    <div class="container-master">
      <h1 class="section__titlepage--headertitle"><span>Teams</span></h1>
    </div>
  </section>
  <div class="container-master">
    <section class="section__layout section__project">
      <div class="container-master teams__title">
        <h2>Projects</h2>
      </div>
      <div class="container-master">
        <div class="row-master">
          <?php for ($i = 1; $i < 4; $i++) : ?>
          <div class="col-12 col-md-4 col-xl-4">
            <div class="project__card">
              <div class="project__header">
                <h4>Project's Name</h4>
                <button class="btn btn-dot">
                  <i class="fa fa-circle" aria-hidden="true"></i>
                  <i class="fa fa-circle" aria-hidden="true"></i>
                  <i class="fa fa-circle" aria-hidden="true"></i>
                </button>
              </div>
              <div class="project__body">
                <div class="project__status">
                  <a href="/task.php"><span> Status</span>  </a>
                </div>
                <div class="project__text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet ullamcorper nibh vitae
                  venenatis. Integer malesuada tempus turpis et rhoncus.
                </div>
              </div>
              <div class="project__footer">
                <ul class="project-list__person">
                  <?php for ($j = 1; $j < 11; $j++) : ?>
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
              </div>
            </div>
          </div>
          <?php endfor; ?>
        </div>
      </div>
    </section>

    <div id="section__chat" class="section__layout section__chat">
      <div class="container-master teams__title">
        <h2>Chat</h2>
        <div>
          <a href="#">View All</a>
          <i class="fa fa-chevron-right"></i>
        </div>
      </div>

      <div class="container-master">
        <div class="chat__wrap">
          <div class="chat__content">
            <div class="chat-text__wrap">
              <div class="chat__text">
                <div class="chat-text__header chat__avatar">
                  <img src="./images/thumbnails/card-avatar.png" alt="Avatar">
                </div>
                <div class="chat-text__body">
                  Now, if you are interested in being the best player, getting really good money and knowing some tricks
                  and advices of what to do in a live tournament games, here is the best place to learn them.
                </div>
                <div class="chat-text__date">
                  07:44 am
                </div>
              </div>

              <div class="chat__text chat__text__self">
                <div class="chat-text__header chat__avatar">
                  <img src="./images/thumbnails/card-avatar.png" alt="Avatar">
                </div>
                <div class="chat-text__body">
                  Something text
                </div>
                <div class="chat-text__date">
                  08:43 am
                </div>
              </div>

              <div class="chat__text">
                <div class="chat-text__header chat__avatar">
                  <img src="./images/thumbnails/card-avatar.png" alt="Avatar">
                </div>
                <div class="chat-text__body">
                  Become A Travel Pro In One Easy
                </div>
                <div class="chat-text__date">
                  08:43 am
                </div>
              </div>

              <div class="chat__text chat__text__pending">
                <div class="chat-text__header chat__avatar">
                  <img src="./images/thumbnails/card-avatar.png" alt="Avatar">
                </div>
                <div class="chat-text__body">
                  <i class="fa fa-circle"></i>
                  <i class="fa fa-circle"></i>
                  <i class="fa fa-circle"></i>
                </div>
              </div>
            </div>
            <div class="chat-actions">
              <div class="chat__input">
                <form><input class="input" type="text" placeholder="Type something"></form>
                <svg xmlns="http://www.w3.org/2000/svg" width="16.611" height="17.373" viewBox="0 0 16.611 17.373">
                  <path id="Fill_1" data-name="Fill 1"
                    d="M15.946,7.513,1.6.117A1.151,1.151,0,0,0,0,1.29V5.139A1.665,1.665,0,0,0,1.208,6.811l5.25,1.181a.731.731,0,0,1,0,1.388l-5.25,1.181A1.665,1.665,0,0,0,0,12.234v3.849a1.151,1.151,0,0,0,1.6,1.173l14.344-7.4a1.367,1.367,0,0,0,0-2.346"
                    fill="#cfaa40" />
                </svg>
              </div>
              <div class="chat__avatar">
                <img src="./images/thumbnails/card-avatar.png" alt="Avatar">
              </div>
            </div>
          </div>
          <div class="chat__list">
            <div class="chat__search">
              <svg xmlns="http://www.w3.org/2000/svg" width="10.041" height="9.831" viewBox="0 0 10.041 9.831">
                <path id="Fill_1" data-name="Fill 1"
                  d="M8.819,9.831a1.227,1.227,0,0,1-.864-.35L6.585,8.139a4.528,4.528,0,0,1-2.153.543A4.451,4.451,0,0,1,1.3,7.412a4.286,4.286,0,0,1,0-6.142,4.51,4.51,0,0,1,6.274,0,4.3,4.3,0,0,1,.742,5.178l1.37,1.341a1.179,1.179,0,0,1,0,1.692A1.227,1.227,0,0,1,8.819,9.831ZM4.434,1.952a2.452,2.452,0,0,0-1.727.7,2.359,2.359,0,0,0,0,3.38,2.481,2.481,0,0,0,3.453,0,2.357,2.357,0,0,0,0-3.38A2.452,2.452,0,0,0,4.434,1.952Z"
                  transform="translate(0 0)" fill="#022d4d" />
              </svg>
              <form><input type="text" placeholder="Search messages"></form>
            </div>
            <div class="chat-person">
              <div class="person__card">
                <div class="person__avatar">
                  <img src="./images/thumbnails/card-avatar.png" alt="Avatar">
                </div>
                <div class="person__body">
                  <div class="person__title">
                    <div class="header">
                      <div class="person__name">Project Title</div>
                      <div class="person__subtitle">Adobe</div>
                    </div>
                    <div class="person__date">
                      11:23 am
                    </div>
                  </div>
                  <div class="person__description">
                    <span>Three Ways To Get Travel Disco…</span>
                  </div>
                </div>
              </div>
              <div class="person__card">
                <div class="person__avatar">
                  <img src="./images/thumbnails/card-avatar.png" alt="Avatar">
                </div>
                <div class="person__body">
                  <div class="person__title">
                    <div class="header">
                      <div class="person__name">Project Title</div>
                      <div class="person__subtitle">Apple</div>
                    </div>
                    <div class="person__date">
                      10:11 am
                    </div>
                  </div>
                  <div class="person__description">
                    <span>Train Travel On Track For Safety</span>
                  </div>
                </div>
              </div>
              <div class="person__card person__card--active">
                <div class="person__avatar">
                  <img src="./images/thumbnails/card-avatar.png" alt="Avatar">
                </div>
                <div class="person__body">
                  <div class="person__title">
                    <div class="header">
                      <div class="person__name">Project Title</div>
                      <div class="person__subtitle">Invision</div>
                    </div>
                    <div class="person__date">
                      08:43 am
                    </div>
                  </div>
                  <div class="person__description">
                    <span>Become A Travel Pro In One Eas..</span>
                  </div>
                </div>
              </div>
              <div class="person__card">
                <div class="person__avatar">
                  <img src="./images/thumbnails/card-avatar.png" alt="Avatar">
                </div>
                <div class="person__body">
                  <div class="person__title">
                    <div class="header">
                      <div class="person__name">Project Title</div>
                      <div class="person__subtitle">Avocode</div>
                    </div>
                    <div class="person__date">
                      07:11 am
                    </div>
                  </div>
                  <div class="person__description">
                    <span>How To Maintain Your Mental Heal..</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="chat-calendar">
              <div class="calendar__header">
                <button><i class="fa fa-angle-left"></i></button>
                <div class="calendar__year">Dec 2019</div>
                <button><i class="fa fa-angle-right"></i></button>
              </div>
              <div class="calendar__content">
                <table class="calendar__table">
                  <thead>
                    <tr>
                      <th>Mo</th>
                      <th>Tu</th>
                      <th>We</th>
                      <th>Th</th>
                      <th>Fr</th>
                      <th>Sa</th>
                      <th>Su</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>2</td>
                      <td>3</td>
                      <td>4</td>
                      <td>5</td>
                      <td>6</td>
                      <td>7</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td class="active">9</td>
                      <td>10</td>
                      <td>11</td>
                      <td>12</td>
                      <td>13</td>
                      <td>14</td>
                    </tr>
                    <tr>
                      <td>15</td>
                      <td>16</td>
                      <td>17</td>
                      <td>18</td>
                      <td>19</td>
                      <td>20</td>
                      <td>21</td>
                    </tr>
                    <tr>
                      <td>22</td>
                      <td>23</td>
                      <td>24</td>
                      <td>25</td>
                      <td>26</td>
                      <td>27</td>
                      <td>28</td>
                    </tr>
                    <tr>
                      <td>29</td>
                      <td>30</td>
                      <td>31</td>
                      <td class="other">1</td>
                      <td class="other">2</td>
                      <td class="other">3</td>
                      <td class="other">4</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <section class="section__layout section__member">
      <div class="container-master teams__title">
        <h2>Members</h2>
        <div>
          <a href="#">View All</a>
          <i class="fa fa-chevron-right"></i>
        </div>
      </div>
      <div class="container-master">
        <div class="row-master">
          <?php for ($i = 1; $i < 4; $i++) : ?>
          <div class="col-12 col-md-4 col-xl-4">
            <div class="member__card">
              <div class="member__header">
                <h4>Member's Name</h4>
                <button class="btn btn-dot">
                  <i class="fa fa-circle" aria-hidden="true"></i>
                  <i class="fa fa-circle" aria-hidden="true"></i>
                  <i class="fa fa-circle" aria-hidden="true"></i>
                </button>
              </div>
              <div class="member__status">
                <span>Status</span>
              </div>
              <div class="member__body">
                <?php for ($j = 1; $j < 4; $j++) : ?>
                <div class="member-project">
                  <div>
                    <h5 class="member-project__name"><a href="#section__chat">Project</a></h5>
                    <div class="member-project__description">Assigned to 5 projects</div>
                  </div>
                  <div>
                    <a href="#" class="member-project__viewall">View All</a>
                    <i class="fa fa-chevron-right"></i>
                  </div>
                </div>
                <?php endfor; ?>
              </div>
            </div>
          </div>
          <?php endfor; ?>
        </div>
      </div>
    </section>

    <section id="section__water" class="section__layout section__water">
      <div class="container-master teams__title">
        <h2>Water Cools</h2>
        <div>
          <a href="#">View All</a>
          <i class="fa fa-chevron-right"></i>
        </div>
      </div>
      <div class="container-master">
        <div class="water__content">
          <div class="water__left">
            <div class="water-list__project">
              <div class="water-project__title">
                <h4>Project</h4>
                <button>
                  <i class="fa fa-circle" aria-hidden="true"></i>
                  <i class="fa fa-circle" aria-hidden="true"></i>
                  <i class="fa fa-circle" aria-hidden="true"></i>
                </button>
              </div>

              <ul>
                <li>
                  <span class="water__character">P</span>
                  <span class="water__name">Project</span>
                  <span class="water__count">15+</span>
                </li>
                <li>
                  <span class="water__character">P</span>
                  <span class="water__name">Project</span>
                </li>
                <li>
                  <span class="water__character">P</span>
                  <span class="water__name">Project</span>
                  <span class="water__count">15+</span>
                </li>
                <li>
                  <span class="water__character">P</span>
                  <span class="water__name">Project</span>
                </li>
                <li>
                  <span class="water__character">P</span>
                  <span class="water__name">Project</span>
                </li>
                <li>
                  <span class="water__character">P</span>
                  <span class="water__name">Project</span>
                </li>
              </ul>
            </div>

            <div class="water__calendar">
              <div class="calendar__header">
                <button><i class="fa fa-angle-left"></i></button>
                <div class="calendar__year">Dec 2019</div>
                <button><i class="fa fa-angle-right"></i></button>
              </div>
              <div class="calendar__content">
                <table class="calendar__table">
                  <thead>
                    <tr>
                      <th>Mo</th>
                      <th>Tu</th>
                      <th>We</th>
                      <th>Th</th>
                      <th>Fr</th>
                      <th>Sa</th>
                      <th>Su</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>2</td>
                      <td>3</td>
                      <td>4</td>
                      <td>5</td>
                      <td>6</td>
                      <td>7</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td class="active">9</td>
                      <td>10</td>
                      <td>11</td>
                      <td>12</td>
                      <td>13</td>
                      <td>14</td>
                    </tr>
                    <tr>
                      <td>15</td>
                      <td>16</td>
                      <td>17</td>
                      <td>18</td>
                      <td>19</td>
                      <td>20</td>
                      <td>21</td>
                    </tr>
                    <tr>
                      <td>22</td>
                      <td>23</td>
                      <td>24</td>
                      <td>25</td>
                      <td>26</td>
                      <td>27</td>
                      <td>28</td>
                    </tr>
                    <tr>
                      <td>29</td>
                      <td>30</td>
                      <td>31</td>
                      <td class="other">1</td>
                      <td class="other">2</td>
                      <td class="other">3</td>
                      <td class="other">4</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="water__right">
            <div class="water-add__status">
              <div class="add__actions">
                <div class="add__status">
                  <button class="active">Status</button>
                  <button>Photos</button>
                  <button>Videos</button>
                </div>

                <div class="add__form">
                  <div class="add__avatar">
                    <img src="./images/thumbnails/card-avatar.png" alt="">
                  </div>
                  <form action="">
                    <input class="add__input" type="text" placeholder="What's on your mind, <Name>?">
                  </form>
                </div>
              </div>
              <div class="add__features">
                <ul>
                  <li>
                    <a href="#"><img src="./images/icons/people.svg" alt="">
                    <span>People</span></a>
                  </li>
                  <li>
                    <a href="#"><img src="./images/icons/checkin.svg" alt="">
                    <span>Checkin</span></a>
                  </li>
                  <li>
                    <a href="#"><img src="./images/icons/mood.svg" alt="">
                    <span>Mood</span></a>
                  </li>
                </ul>
                <button class="btn-add__submit">
                  <span>Share</span>
                </button>
              </div>
            </div>

            <div class="water-list__newfeed">
              <div class="water-newfeed__item">
                <div class="newfeed-item__header">
                  <div class="item-header__avatar">
                    <img src="./images/thumbnails/card-avatar.png" alt="">
                  </div>

                  <div class="item-header__person">
                    <div class="head-info">
                      <span class="name">Quan Ha</span>
                      <span class="act">
                        shared a album
                      </span>
                    </div>
                    <div class="head-time">
                      6 hours ago
                    </div>

                  </div>

                  <div class="btn-head">
                    <button>
                      <i class="fa fa-circle" aria-hidden="true"></i>
                      <i class="fa fa-circle" aria-hidden="true"></i>
                      <i class="fa fa-circle" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>

                <div class="newfeed-item__content">
                  <div class="text">
                    <span>
                      Ocean breeze, salty air, sun kissed hair. That endless summer take me there.
                    </span>
                  </div>
                  <div class="img">
                    <img src="./images/thumbnails/bg.png" alt="">
                  </div>
                </div>

                <div class="newfeed-item__reaction">
                  <ul>
                    <li>
                      <a href=""><i class="fa fa-heart-o" aria-hidden="true"></i>
                      <span>100</span></a>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-commenting-o" aria-hidden="true"></i>
                      <span>100</span></a>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-share-square"></i>
                      <span>100</span></a>
                    </li>
                  </ul>
                </div>

                <div class="newfeed-item__comment">
                  <div class="item-comment__avatar">
                    <img src="./images/thumbnails/card-avatar.png" alt="">
                  </div>
                  <div class="form">
                    <form action="">
                      <input type="text">
                    </form>
                    <ul>
                      <li>
                        <a href=""><i class="fa fa-camera" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href=""><i class="fa fa-smile-o" aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>
<!-- End Main -->


<!-- Footer -->
<?php include 'footer.php' ?>
<!-- End Footer -->

<script src="./scripts/header2.js"></script>
