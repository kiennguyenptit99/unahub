<!--Include Header-->
<?php
$GLOBALS['titlePage'] = "Finances";
$GLOBALS['classBody'] = "tpl-finance";
$GLOBALS['currentHeader'] = "finance";
include 'header.php';

?>
<!--End Include Header-->
<link rel="stylesheet" href="./styles/scss/finance.css" />
<link rel="stylesheet" href="./styles/chart/chart.min.css" />
<!-- Main -->
<main>

  <?php
    $GLOBALS['current'] = "finance";
    include 'header2.php';
  ?>

  <section class="topTitle">
    <div class="container-master">
      <h1 class="titlePage"><span>Finances</span></h1>
    </div>
  </section>
  <!-- Chart Finance -->
  <section class="boxChartFinance">
    <div class="container-master">
      <div class="content__Finance">
        <h3 class="titlebox">Profit and Loss</h3>
        <a href="" class="buttonViewAll">
          <svg width="28px" height="7px" viewBox="0 0 28 7" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
            xmlns="http://www.w3.org/2000/svg">
            <g id="more">
              <path
                d="M3.13158 6.26316C4.8611 6.26316 6.26316 4.8611 6.26316 3.13158C6.26316 1.40206 4.8611 0 3.13158 0C1.40206 0 0 1.40206 0 3.13158C0 4.8611 1.40206 6.26316 3.13158 6.26316Z"
                id="Oval" fill="#CFAA40" fill-rule="evenodd" stroke="none" />
              <path
                d="M3.13158 6.26316C4.8611 6.26316 6.26316 4.8611 6.26316 3.13158C6.26316 1.40206 4.8611 0 3.13158 0C1.40206 0 0 1.40206 0 3.13158C0 4.8611 1.40206 6.26316 3.13158 6.26316Z"
                transform="translate(10.438477 0)" id="Oval-Copy-2" fill="#CFAA40" fill-rule="evenodd" stroke="none" />
              <path
                d="M3.13158 6.26316C4.8611 6.26316 6.26316 4.8611 6.26316 3.13158C6.26316 1.40206 4.8611 0 3.13158 0C1.40206 0 0 1.40206 0 3.13158C0 4.8611 1.40206 6.26316 3.13158 6.26316Z"
                transform="translate(20.876953 0)" id="Oval-Copy-3" fill="#CFAA40" fill-rule="evenodd" stroke="none" />
            </g>
          </svg>
        </a>
        <canvas id="manage-plate__chart" width="1124" height="320"></canvas>
      </div>
    </div>
  </section>
  <!-- boxChartFinance -->
  <section class="boxChartFinance">
    <div class="container-master">

    </div>
  </section>
  <!-- endboxChartFinance -->
  <!-- boxChartFinance -->
  <section class="boxListFinance">
    <div class="container-master">
      <div class="ListFinance">
        <div class="itemFinance">
          <h4 class="titleItemFinance">Pay Your Team</h4>
          <div class="descriptionItemFinance">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Nunc sem mi, rhoncus id neque ac, rutrum imperdiet massa.
          </div>
          <a href="/finance.php" class="button buttonItemFinance btn-select"><span>See More</span></a>
        </div>
        <div class="itemFinance">
          <h4 class="titleItemFinance">Billing History</h4>
          <div class="descriptionItemFinance">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Nunc sem mi, rhoncus id neque ac, rutrum imperdiet massa.
          </div>
          <a href="/finance.php" class="button buttonItemFinance"><span>See More</span></a>
        </div>
        <div class="itemFinance">
          <h4 class="titleItemFinance">Revenue</h4>
          <div class="descriptionItemFinance">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Nunc sem mi, rhoncus id neque ac, rutrum imperdiet massa.
          </div>
          <a href="/finance.php" class="button buttonItemFinance"><span>See More</span></a>
        </div>
        <div class="itemFinance">
          <h4 class="titleItemFinance">Financial Reports</h4>
          <div class="descriptionItemFinance">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Nunc sem mi, rhoncus id neque ac, rutrum imperdiet massa.
          </div>
          <a href="/finance.php" class="button buttonItemFinance"><span>See More</span></a>
        </div>
        <div class="itemFinance">
          <h4 class="titleItemFinance">Current Orders</h4>
          <div class="descriptionItemFinance">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Nunc sem mi, rhoncus id neque ac, rutrum imperdiet massa.
          </div>
          <a href="/hub-shop.php" class="button buttonItemFinance"><span>See More</span></a>
        </div>
        <div class="itemFinance">
          <h4 class="titleItemFinance">Custom Interlink 2</h4>
          <div class="descriptionItemFinance">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Nunc sem mi, rhoncus id neque ac, rutrum imperdiet massa.
          </div>
          <a href="/finance.php" class="button buttonItemFinance"><span>See More</span></a>
        </div>
      </div>
    </div>
  </section>
  <!-- endboxChartFinance -->
</main>
<!-- End Main -->

<div class="select__transaction">
  <div class="overlay">

  </div>
  <div class="select__content">
    <h3>
      <span>Select Transaction Type</span>
      <i class="fa fa-times select-close"></i>
    </h3>
    <p class="select__description">
      lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullamcorper
    </p>
    <ul class="select__list">
      <li class="select__item">
        <h4>Vault</h4>
        <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Nunc sed diam</p>
      </li>
      <li class="select__item">
        <h4>Personal Bank</h4>
        <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Nunc sed diam</p>
      </li>
      <li class="select__item">
        <h4>Wallet</h4>
        <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Nunc sed diam</p>
      </li>
    </ul>
    <button class="btn-submit disabled">
      <span>Next</span>
    </button>
  </div>
</div>

<!-- Footer -->
<?php include 'footer.php' ?>
<!-- End Footer -->
<script src="./scripts/chart.min.js"></script>
<script src="./scripts/main.js"></script>
<script src="./scripts/header2.js"></script>
<script>
var ctx = document.getElementById('manage-plate__chart').getContext('2d');
var labels = [
  'Jan 1 ',
  'Jan 8 ',
  'Jan 15 ',
  'Jan 22 ',
  'Jan 1 ',
  'Jan 8 ',
  'Jan 15 ',
  'Jan 22 ',
  'Jan 1 ',
  'Jan 8 ',
  'Jan 15 ',
  'Jan 22 ',

];

var myChart = new Chart(ctx, {
  width: 1124,
  height: 320,
  type: 'line',
  data: {
    labels,
    datasets: [{
        label: 'Chart Name',
        data: [20, 32, 46, 20, 54, 30, 11, 40, 50, 28, 100, 80, ],
        backgroundColor: 'rgba(241,244,254, .6)',
        borderColor: '#2554F4',
        borderWidth: 2,
        lineTension: 0,
      }, {
        label: 'Chart Name 2',
        data: [15, 9, 30, 14, 39, 23, 5, 13, 30, 10, 80, 60],
        backgroundColor: '#eb7100a6',
        borderColor: '#eb7100a6',
        borderWidth: 2,
        lineTension: 0,
      }

    ]
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
var btnSubmit = $('.btn-submit');
var itemsSelect = $('.select__item');
var selectWrap = $('.select__transaction');
var overlay = $('.overlay');
var btnClose = $('.select-close');

itemsSelect.click(function() {
  $(this).toggleClass('active');
  var itemSelectActive = $('.select__item.active');
  console.log(itemSelectActive)
  if (itemSelectActive.length > 0) {
    btnSubmit.removeClass('disabled');
  } else {
    btnSubmit.addClass('disabled');
  }
});

overlay.click(function() {
  selectWrap.removeClass('active');
});
btnClose.click(function() {
  selectWrap.removeClass('active');
});
</script>

<script>
  var btnSelect = $('.btn-select');
  var transactionContent = $('.select__transaction');

  btnSelect.click(function(e) {
    e.preventDefault();
    transactionContent.addClass('active');
  });
</script>
