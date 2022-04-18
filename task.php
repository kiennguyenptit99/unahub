<!--Include Header-->
<?php
$GLOBALS['titlePage'] = "Task";
$GLOBALS['classBody'] = "tpl-task";
$GLOBALS['currentHeader'] = "task";
include 'header.php';

?>
<!--End Include Header-->
<!-- Main -->
<?php $GLOBALS['current'] = "task"; include 'header2.php'; ?>
<link rel="stylesheet" href="./styles/scss/task.css" />
<link rel="stylesheet" href="./styles/chart/chart.min.css" />
<main>
  <section class="section__titlepage">
    <div class="container-master">
      <h1 class="section__titlepage--headertitle"><span>Tasks</span></h1>
    </div>
  </section>
  <!-- TasksToday__MeetingSchedule -->
  <section class="section__tasksmeeting">
    <div class="container-master">
      <div class="row-master">
        <div class="boxmeetings col-12 col-xl-6">
          <div class="section__tasksmeeting__contenttaskstoday">
            <h3 class="title_box">Your Tasks for Today</h3>
            <a href="#" class="buttonViewAll">ViewAll <i class="fa fa-chevron-right"></i></a>
            <div class="list__task">
              <div class="list__task__item"><a href="#">Priority</a></div>
              <div class="list__task__item"><a href="/teams.php">Team</a></div>
              <div class="list__task__item"><a href="/project.php">Project</a></div>
            </div>
            <div class="list__contenttask">
              <div class="list__contenttask__item">
                <h3 class="list__contenttask__item__title">Title of Task</h3>
                <div class="list__contenttask__item__description">
                  DESCRIPTION
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat</p>
                </div>
                <div class="list__contenttask__item__date">
                  DUE DATE
                  <p>15:30 June 3, 2020</p>
                </div>
              </div>
              <div class="list__contenttask__item">
                <h3 class="list__contenttask__item__title">Title of Task</h3>
                <div class="list__contenttask__item__description">
                  DESCRIPTION
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat</p>
                </div>
                <div class="list__contenttask__item__date">
                  DUE DATE
                  <p>15:30 June 3, 2020</p>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="meetings col-12 col-xl-6">
          <div class="meetings--content">
            <h3 class="title_box">
              Team Schedule of Meetings
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
  <!-- End TasksToday__MeetingSchedule -->
  <!-- ProcessStatistics__ProjectArchives -->
  <section class="section__statistics__archives">
    <div class="container-master">
      <div class="row-master">
        <div class=" boxstatistics col-12 col-xl-6">
          <div class="boxstatistics__content">
            <h3 class="title_box">Process Statistics</h3>
            <a href="" class="buttonViewAll">ViewAll <i class="fa fa-chevron-right"></i></a>
            <canvas id="myChart" width="600" height="500"></canvas>
          </div>
        </div>
        <div class="boxarchives col-12 col-xl-6">
          <div class="boxarchives__content">
            <h3 class="title_box">Current Project Archives</h3>
            <a href="/project.php" class="buttonViewAll">ViewAll <i class="fa fa-chevron-right"></i></a>
            <div class="boxarchives__content__list">
              <div class="boxarchives__content__list__item">
                <h3 class="boxarchives__content__list__item__title"><a href="/document.php">Title</a></h3>
                <div class="date">MAY 16</div>
                <p class="content">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nam volutpat convallis ipsum, sed pellentesque orci gravida sit amet.
                  Aliquam at odio lorem.
                </p>
              </div>
              <div class="boxarchives__content__list__item">
                <h3 class="boxarchives__content__list__item__title"><a href="/document.php">Title</a></h3>
                <div class="date">MAY 16</div>
                <p class="content">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nam volutpat convallis ipsum, sed pellentesque orci gravida sit amet.
                  Aliquam at odio lorem.
                </p>
              </div>
              <div class="boxarchives__content__list__item">
                <h3 class="boxarchives__content__list__item__title"><a href="/document.php">Title</a></h3>
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
  <!-- End ProcessStatistics__ProjectArchives -->
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
              <a href="#" class="member"><img src="./images/project/Oval.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval1.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval2.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval3.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval4.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval5.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval6.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval7.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval8.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval9.png" alt="orthers"></a>
              <a href="#" class="others">+5 others</a>
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
              <a href="#" class="member"><img src="./images/project/Oval.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval1.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval2.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval3.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval4.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval5.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval6.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval7.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval8.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval9.png" alt="orthers"></a>
              <a href="#" class="others">+5 others</a>
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
              <a href="#" class="member"><img src="./images/project/Oval.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval1.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval2.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval3.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval4.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval5.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval6.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval7.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval8.png" alt="orthers"></a>
              <a href="#" class="member"><img src="./images/project/Oval9.png" alt="orthers"></a>
              <a href="#" class="others">+5 others</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- endboxListProjects -->
  <!-- Members -->
  <section class="section__members">
    <div class="container-master">
      <div class="section__members__content">
        <h3 class="title_box">Members</h3>
        <a href="#" class="buttonViewAll">ViewAll <i class="fa fa-chevron-right"></i></a>
        <div class="section__members__list">
          <?php for ($i = 1; $i < 4; $i++): ?>
          <div class="section__members__item">
            <h3 class="section__members__item__name">Member’s Name</h3>
            <a href="#" class="select">...</a>
            <a href="#" class="buttonstatus">Status</a>
            <div class="section__members__listwork">
              <div class="section__members__itemwork">
                <div class="section__members__itemwork__title">Projects</div>
                <a href="#" class="buttonviewall">ViewAll <i class="fa fa-chevron-right"></i></a>
                <div class="section__members__itemwork__content">Assigned to 5 projects</div>
              </div>
              <div class="section__members__itemwork">
                <div class="section__members__itemwork__title">Meetings</div>
                <a href="#" class="buttonviewall">ViewAll <i class="fa fa-chevron-right"></i></a>
                <div class="section__members__itemwork__content">4 meetings today</div>
              </div>
              <div class="section__members__itemwork">
                <div class="section__members__itemwork__title">Journal</div>
                <a href="#" class="buttonviewall">ViewAll <i class="fa fa-chevron-right"></i></a>
                <div class="section__members__itemwork__content">Latest: 2 days ago</div>
              </div>
            </div>
          </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- End Members -->
  <!-- Handoff__CustomInterlink -->
  <section class="section__handoffcustomlink">
    <div class="container-master">
      <div class="row-master">
        <div class="section__handoffcustomlink__handoff col-12 col-md-6">
          <div class="section__handoffcustomlink__handoff__content">
            <h3 class="title_box">Handoff</h3>
            <a href="#" class="buttonViewAll">ViewAll <i class="fa fa-chevron-right"></i></a>
            <div class="section__handoffcustomlink__handoff__itemhandoff">
              <h3 class="title__handoff">Title</h3>
              <a href="#" class="select">...</a>
              <p class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Aenean aliquet ullamcorper nibh vitae venenatis. Integer malesuada tempus turpis et rhoncus.
                Pellentesque nibh ante, laoreet a ipsum et, ornare cursus arcu. Donec luctus, risus in tempor convallis,
                risus nisl vestibulum augue, eu mollis justo purus sit amet enim. Maecenas euismod, est non aliquet
                malesuada,
                velit quam tempor ligula, nec dapibus erat ipsum egestas ex. Morbi aliquam placerat quam vitae mattis.
                Aliquam cursus sollicitudin lacus et convallis. Sed eget venenatis nibh, ut dictum metus.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Aenean aliquet ullamcorper nibh vitae venenatis. Integer malesuada tempus turpis et rhoncus.
                Pellentesque nibh ante, laoreet a ipsum et, ornare cursus arcu. Donec luctus, risus in tempor convallis,
                risus nisl vestibulum augue, eu mollis justo purus sit amet enim. Maecenas euismod, est non aliquet
                malesuada,
                velit quam tempor ligula, nec dapibus erat ipsum egestas ex. Morbi aliquam placerat quam vitae mattis.
                Aliquam cursus sollicitudin...
              </p>
            </div>
          </div>
        </div>
        <div class="section__handoffcustomlink__customlink col-12 col-md-6">
          <div class="section__handoffcustomlink__customlink__content">
            <h3 class="title_box">Custom Interlink</h3>
            <div class="description__interlink">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Nunc sem mi, rhoncus id neque ac, rutrum imperdiet massa.
            </div>
            <a href="#" class="button__interlink">
              <span>See More</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end Handoff__CustomInterlink -->
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
      position: 'bottom',
      labels: {
        fontColor: '#000'
      }
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
