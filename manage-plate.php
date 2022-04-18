<!--Include Header-->
<?php
$GLOBALS['titlePage'] = "Manage Plate";
$GLOBALS['classBody'] = "tpl-manage-plate";
$GLOBALS['currentHeader'] = "manage-plate";
include 'header.php';

?>
<!--End Include Header-->
<link rel="stylesheet" href="./styles/scss/manage-plate.css" />
<link rel="stylesheet" href="./styles/chart/chart.min.css" />

<!-- Main -->
<main>

  <?php include 'header2.php'; ?>
  <section class="section__titlepage">
    <div class="container-master">
      <h1 class="section__titlepage--headertitle"><span>Manage Plate</span></h1>
    </div>
  </section>
  <section class="manage-plate__wrapper">
    <div class="container-master">
      <div class="manage-plate__chart">
        <div class="chart__title">
          <h4>Recent Orders</h4>
          <button class="btn btn-dot btn_select">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>
          </button>
          <ul class="select__chart">
            <li>Project progress</li>
            <li>Milestone
              charts</li>
            <li>Task progress</li>
          </ul>
        </div>
        <canvas id="manage-plate__chart" width="1124" height="320"></canvas>
      </div>

      <div class="manage-plate__items">
        <div class="row-master">
          <div class="col-12 col-md-6 col-xl-4">
            <div class="manage-plate__item">
              <div class="item__header">
                <div class="item__title">Current Team Activities</div>
              </div>
              <div class="item__body">
                <div class="item__copy">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sem mi, rhoncus id neque ac, rutrum
                  imperdiet massa.
                </div>
              </div>
              <div class="item__footer">
                <div class="card__actions">
                  <a href="/teams.php"> <span> See More </span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <div class="manage-plate__item">
              <div class="item__header">
                <div class="item__title">Stats</div>
              </div>
              <div class="item__body">
                <div class="item__copy">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sem mi, rhoncus id neque ac, rutrum
                  imperdiet massa.
                </div>
              </div>
              <div class="item__footer">
                <div class="card__actions">
                  <a href="/finance.php"> <span> See More </span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <div class="manage-plate__item">
              <div class="item__header">
                <div class="item__title">Upcoming Events</div>
              </div>
              <div class="item__body">
                <div class="item__copy">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sem mi, rhoncus id neque ac, rutrum
                  imperdiet massa.
                </div>
              </div>
              <div class="item__footer">
                <div class="card__actions">
                  <a href="/meeting.php"> <span> See More </span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <div class="manage-plate__item">
              <div class="item__header">
                <div class="item__title">Company Updates</div>
              </div>
              <div class="item__body">
                <div class="item__copy">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sem mi, rhoncus id neque ac, rutrum
                  imperdiet massa.
                </div>
              </div>
              <div class="item__footer">
                <div class="card__actions">
                  <a href="/hub-shop.php"> <span> See More </span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <div class="manage-plate__item">
              <div class="item__header">
                <div class="item__title">Profit Loss Updates</div>
              </div>
              <div class="item__body">
                <div class="item__copy">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sem mi, rhoncus id neque ac, rutrum
                  imperdiet massa.
                </div>
              </div>
              <div class="item__footer">
                <div class="card__actions">
                  <a href="/finance.php"> <span> See More </span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <div class="manage-plate__item">
              <div class="item__header">
                <div class="item__title">Daily Agenda / Tasks</div>
              </div>
              <div class="item__body">
                <div class="item__copy">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sem mi, rhoncus id neque ac, rutrum
                  imperdiet massa.
                </div>
              </div>
              <div class="item__footer">
                <div class="card__actions">
                  <a href="/project.php"> <span> See More </span></a>
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

<script src="./scripts/chart.min.js"></script>
<script src="./scripts/main.js"></script>
<script src="./scripts/header2.js"></script>
<script>
var ctx = document.getElementById('manage-plate__chart').getContext('2d');
var labels = [
  'Jan 1 - Jan 7',
  'Jan 8 - Jan 15',
  'Jan 15 - Jan 22',
  'Jan 22 - Jan 29',
  'Jan 29 - Feb 5',
  'Feb 5 - Feb 12',
  'Feb 13 - Feb 20',
  'Feb 21 - Feb 28',
];

var myChart = new Chart(ctx, {
  width: 1124,
  height: 320,
  type: 'line',
  data: {
    labels,
    datasets: [{
      label: 'Chart Name',
      data: [9, 12, 16, 20, 14, 30, 11, 16.5],
      backgroundColor: 'rgba(241,244,254, .6)',
      borderColor: '#2554F4',
      borderWidth: 2,
      lineTension: 0,
    }]
  },
  options: {
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


<script>
  var btn = $('.btn_select');
  var chart = $('.select__chart');
  btn.click(function(){
    chart.toggleClass('active');
  })
</script>
