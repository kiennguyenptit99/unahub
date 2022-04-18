<!--Include Header-->
<?php
$GLOBALS['titlePage'] = "Project";
$GLOBALS['classBody'] = "tpl-project";
$GLOBALS['currentHeader'] = "project";
include 'header.php';

?>
<!--End Include Header-->


<!-- Main -->
<?php include 'header2.php'; ?>
<link rel="stylesheet" href="./styles/scss/project.css" />
<link rel="stylesheet" href="./styles/chart/chart.min.css" />
<main>
  <!-- topPageProject -->
  <section class="topPageProject">
    <div class="container-master">
      <h1 class="titlePage"><span>Projects</span></h1>
      <div class="searchProject">
        <form action="" class="form" action="">
          <p class="inputSearch">
            <input type="text" placeholder="Search Projects" autocomplete="on">
            <i class="fa fa-search" aria-hidden="true"></i>
          </p>
          <p class="button_submit">
            <!-- <button type="submit">Team</button> -->
            <a href="/teams.php">Team</a>
          </p>
        </form>
      </div>
    </div>
  </section>
  <!-- endtopPageProject -->
  <!-- boxListProjects -->
  <section class="section__projects">
        <div class="container-master">
            <div class="section__projects__content">
                <h2 class="title_box">Projects</h2>
                <div class="section__projects__list">
                  <div class="section__projects__item">
                      <h3 class="section__projects__item__name">Project’s Name</h3>
                      <a href="/project.php" class="select">...</a>
                      <a href="#" class="buttonstatus">Status</a>
                      <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenean aliquet ullamcorper nibh vitae venenatis.
                        Integer malesuada tempus turpis et rhoncus.
                      </div>
                      <div class="listmembers">
                          <a href="/teams.php" class="member"><img src="./images/project/Oval.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval1.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval2.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval3.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval4.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval5.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval6.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval7.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval8.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval9.png" alt="orthers"></a>
                          <a href="/teams.php" class="others">+5 others</a>
                      </div>
                  </div>
                  <div class="section__projects__item">
                      <h3 class="section__projects__item__name">Project’s Name</h3>
                      <a href="/project.php" class="select">...</a>
                      <a href="#" class="buttonstatus">Status</a>
                      <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenean aliquet ullamcorper nibh vitae venenatis.
                        Integer malesuada tempus turpis et rhoncus.
                      </div>
                      <div class="listmembers">
                          <a href="/teams.php" class="member"><img src="./images/project/Oval.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval1.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval2.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval3.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval4.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval5.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval6.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval7.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval8.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval9.png" alt="orthers"></a>
                          <a href="/teams.php" class="others">+5 others</a>
                      </div>
                  </div>
                  <div class="section__projects__item">
                      <h3 class="section__projects__item__name">Project’s Name</h3>
                      <a href="/project.php" class="select">...</a>
                      <a href="#" class="buttonstatus">Status</a>
                      <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenean aliquet ullamcorper nibh vitae venenatis.
                        Integer malesuada tempus turpis et rhoncus.
                      </div>
                      <div class="listmembers">
                          <a href="/teams.php" class="member"><img src="./images/project/Oval.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval1.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval2.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval3.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval4.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval5.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval6.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval7.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval8.png" alt="orthers"></a>
                          <a href="/teams.php" class="member"><img src="./images/project/Oval9.png" alt="orthers"></a>
                          <a href="/teams.php" class="others">+5 others</a>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <!-- endboxListProjects -->
  <!-- boxMilestones__MeetingSchedule -->
  <section class="section__milestonesmeeting">
    <div class="container-master">
      <div class="row-master">
        <div class="section__milestonesmeeting__milestones col-12 col-xl-6">
          <div class="section__milestonesmeeting__milestones__content">
            <h3 class="title_box">
              <span class="schedule-text">Upcoming Project Milestones</span>
              <span class="schedule-month">June</span>
            </h3>
            <img src="./images/thumbnails/Upcoming-demo.png" alt="">
          </div>
        </div>
        <div class="meetings col-12 col-xl-6">
              <div class="meetings--content">
                <h3 class="title_box">
                  Individual Schedule of Meetings
                </h3>
                <div class="meetings__list">
                  <div class="meetings__item">
                      <div class="time__meeting">
                        09:00 AM
                      </div>
                      <div class="meetings__item--content">
                        <div class="meetings__item--left">
                          <h3>Title of Meeting</h3>
                          <p><a href="/meeting.php">Location Here</a></p>
                          <div class="memberMeeting">
                            <img src="./images/meeting/img.png" alt="membermeeting">
                            <img src="./images/meeting/img copy.png" alt="membermeeting">
                            <img src="./images/meeting/img copy2.png" alt="membermeeting">
                            <img src="./images/meeting/img copy3.png" alt="membermeeting">
                            <img src="./images/meeting/img copy4.png" alt="membermeeting">
                          </div>
                        </div>
                        <div class="meetings__item--right">
                          <p class="date">16 MAY</p>
                          <p class="hour">09:00 - 14:00</p>
                        </div>
                      </div>
                  </div>
                  <div class="meetings__item">
                      <div class="timeMeeting">
                        09:00 AM
                      </div>
                      <div class="meetings__item--content">
                        <div class="meetings__item--left">
                          <h3>Title of Meeting</h3>
                          <p><a href="/meeting.php">Location Here</a></p>
                          <div class="memberMeeting">
                            <img src="./images/meeting/img.png" alt="membermeeting">
                            <img src="./images/meeting/img copy.png" alt="membermeeting">
                            <img src="./images/meeting/img copy2.png" alt="membermeeting">
                            <img src="./images/meeting/img copy3.png" alt="membermeeting">
                            <img src="./images/meeting/img copy4.png" alt="membermeeting">
                          </div>
                        </div>
                        <div class="meetings__item--right">
                          <p class="date">16 MAY</p>
                          <p class="hour">09:00 - 14:00</p>
                        </div>
                      </div>
                  </div>
                  <div class="meetings__item">
                      <div class="timeMeeting">
                        09:00 AM
                      </div>
                      <div class="meetings__item--content">
                        <div class="meetings__item--left">
                          <h3>Title of Meeting</h3>
                          <p><a href="/meeting.php">Location Here</a></p>
                          <div class="memberMeeting">
                            <img src="./images/meeting/img.png" alt="membermeeting">
                            <img src="./images/meeting/img copy.png" alt="membermeeting">
                            <img src="./images/meeting/img copy2.png" alt="membermeeting">
                            <img src="./images/meeting/img copy3.png" alt="membermeeting">
                            <img src="./images/meeting/img copy4.png" alt="membermeeting">
                          </div>
                        </div>
                        <div class="meetings__item--right">
                          <p class="date">16 MAY</p>
                          <p class="hour">09:00 - 14:00</p>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>
  </section>
  <!-- endboxMilestones__MeetingSchedule -->
  <!-- ProcessStatistics__Notes -->
  <section class="section__statisticsnotes">
    <div class="container-master">
      <div class="row-master">
        <div class="section__statisticsnotes__statistics col-12 col-md-6">
          <div class="section__statisticsnotes__statistics__wrap">
              <h3 class="title_box">Process Statistics</h3>
              <a href="#" class="buttonViewAll">
                View All
                <i class="fa fa-chevron-right"></i>
              </a>
            <canvas id="myChart" width="530" height="369"></canvas>
          </div>
        </div>
        <div class="notes col-12 col-lg-6">
          <div class="pastmeetingnotes__content">
            <h3 class="title_box">Notes</h3>
            <a href="#" class="buttonViewAll">View All <i class="fa fa-chevron-right"></i></a>
            <div class="pastmeetingnotes__list--notes">
              <div class="pastmeetingnotes__list--notes--item">
                <h3 class="title__notes"><a href="/document.php">Title of Note</a></h3>
                <div class="date">MAY 16</div>
                <p class="content">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nam volutpat convallis ipsum, sed pellentesque orci gravida sit amet.
                  Aliquam at odio lorem.
                </p>
              </div>
              <div class="pastmeetingnotes__list--notes--item">
                <h3 class="title__notes"><a href="/document.php">Title of Note</a></h3>
                <div class="date">MAY 16</div>
                <p class="content">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nam volutpat convallis ipsum, sed pellentesque orci gravida sit amet.
                  Aliquam at odio lorem.
                </p>
              </div>
              <div class="pastmeetingnotes__list--notes--item">
                <h3 class="title__notes"><a href="/document.php">Title of Note</a></h3>
                <div class="date">MAY 16</div>
                <p class="content">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nam volutpat convallis ipsum, sed pellentesque orci gravida sit amet.
                  Aliquam at odio lorem.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- endProcessStatistics__Notes -->
  <!-- CustomInterlink -->
  <section class="section__customlink">
    <div class="container-master">
      <div class="row-master">
        <div class="section__customlink__item col-12 col-md-6">
          <div class="section__customlink__itemcontent">
            <h3 class="title_box">Custom Interlink</h3>
            <div class="section__customlink__itemcontent__description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Nunc sem mi, rhoncus id neque ac, rutrum imperdiet massa.
            </div>
            <a href="#" class="button__interlink"><span>See More</span></a>
          </div>
        </div>
        <div class="section__customlink__item col-12 col-md-6">
          <div class="section__customlink__itemcontent">
            <h3 class="title_box">Custom Interlink</h3>
            <div class="section__customlink__itemcontent__description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Nunc sem mi, rhoncus id neque ac, rutrum imperdiet massa.
            </div>
            <a href="#" class="button__interlink"><span>See More</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- endCustomInterlink -->
</main>
<!-- End Main -->

<!-- Footer -->
<?php include 'footer.php' ?>
<!-- End Footer -->
<script src="./scripts/chart.min.js"></script>
<script src="./scripts/main.js"></script>
<script src="./scripts/header2.js"></script>

<script>
let myChart = document.getElementById('myChart').getContext('2d');
let massPopChart = new Chart(myChart, {
  type: 'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
  data: {
    labels: ['Jan 1', '', '', 'Jan 8', ' ', ' ', 'Jan 15', ' ', ' ', 'Jan 12', ' ', ' ', 'Feb 1'],
    datasets: [{
      // label:'Population',
      data: [
        617594,
        95072,
        95072,
        617594,
        617594,
        617594,
        617594,
        617594,
        181045,
        153060,
        106519,
        105162,
        95072
      ],
      backgroundColor: 'green',
      backgroundColor: [
        '#022D4D',
        '#022D4D',
        '#022D4D',
        '#022D4D',
        '#022D4D',
        '#022D4D',
        '#022D4D',
        '#022D4D',
        '#022D4D',
        '#022D4D',
        '#022D4D',
        '#022D4D',
        '#022D4D',
      ],
      borderWidth: 1,
      borderColor: '#777',
      hoverBorderWidth: 3,
      hoverBorderColor: '#000'
    }]
  },
  options: {
    title: {
      display: true,
      // text:'Largest Cities In Massachusetts',
      fontSize: 25
    },
    legend: {
      display: false,
    },
    layout: {
      padding: {
        // left:50,
        right: 0,
        bottom: 0,
        top: 0
      }
    },
    tooltips: {
      enabled: true
    },
    scales: {
      xAxes: [{
        ticks: {
          fontColor: 'rgba(2, 45, 77, 0.7)'
        },
      }],
      yAxes: [{
        ticks: {
          beginAtZero: true,
          fontColor: 'rgba(2, 45, 77, 0.7)'
        },
      }]
    }
  }
});
</script>
