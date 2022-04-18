<!--Include Header-->
<?php
$GLOBALS['titlePage'] = "Documents";
$GLOBALS['classBody'] = "tpl-document";
$GLOBALS['currentHeader'] = "document";
include 'header.php';

?>
<!--End Include Header-->
<link rel="stylesheet" href="./styles/scss/document.css" />

<!-- Main -->
<main>

  <?php $GLOBALS['current'] = "document"; include 'header2.php'; ?>

  <section class="section__layout section__header">
    <div class="container-master">
      <h1>
        <span>Documents</span>
      </h1>
    </div>
  </section>

  <section class="section__layout section__search">
    <div class="container-master">
      <div class="search__wrap">
        <form class="search__form" action="">
          <input type="text" placeholder="Search Project...">
          <i class="fa fa-search"></i>
        </form>
        <ul class="search__list">
          <li class="search__item">
            <a href="#">Department</a>

            <ul class="search__submenu">
              <li>Finances</li>
              <li>Marketing</li>
              <li>HR</li>
            </ul>
          </li>
          <li class="search__item">
            <a href="">Publicity</a>

            <ul class="search__submenu">
              <li>Press releases</li>
            </ul>
          </li>
          <li class="search__item">
            <a href="#">Confidential</a>

            <ul class="search__submenu">
              <li>Semi-private</li>
              <li>Private</li>
              <li>Executive</li>
            </ul>
          </li>
          <li class="search__item">
            <a href="#">Running</a>

            <ul class="search__submenu">
              <li>Edit only docs</li>
            </ul>
          </li>
          <li class="search__item">
            <a href="#">Members</a>

            <ul class="search__submenu">
              <li>Name Member 1</li>
              <li>Name Member 2</li>
              <li>Name Member 3</li>
              <li>Name Member 4</li>
              <li>Name Member 5</li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section__documents">
    <div class="container-master">
      <div class="table-responsive">
        <table class="table__documents">
          <thead>
            <tr>
              <th>Title</th>
              <th>Status</th>
              <th>Title</th>
              <th>Title</th>
              <th>Title</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="table-col-1">
                <p class="title">Title Here</p>
                <p class="subTitle">Subtitle</p>
              </td>
              <td>
                <a href="/project.php"><span class="table__status">Active</span>
              </td>
              <td>
                <p class="title">289</p>
                <p class="subTitle">information</p>
              </td>
              <td>
                <p class="title">3,299</p>
                <p class="subTitle">information</p>
              </td>
              <td class="table__btn">
                <div>
                  <p class="title">3,299</p>
                  <p class="subTitle">information</p>
                </div>
                <button>
                  <i class="fa fa-circle" aria-hidden="true"></i>
                  <i class="fa fa-circle" aria-hidden="true"></i>
                  <i class="fa fa-circle" aria-hidden="true"></i>
                </button>
              </td>
            </tr>
            <tr>
              <td class="table-col-1">
                <p class="title">Title Here</p>
                <p class="subTitle">Subtitle</p>
              </td>
              <td>
                <a href="/project.php"><span class="table__status">Active</span>
              </td>
              <td>
                <p class="title">289</p>
                <p class="subTitle">information</p>
              </td>
              <td>
                <p class="title">3,299</p>
                <p class="subTitle">information</p>
              </td>
              <td class="table__btn">
                <div>
                  <p class="title">3,299</p>
                  <p class="subTitle">information</p>
                </div>
                <button>
                  <i class="fa fa-circle" aria-hidden="true"></i>
                  <i class="fa fa-circle" aria-hidden="true"></i>
                  <i class="fa fa-circle" aria-hidden="true"></i>
                </button>
              </td>
            </tr>
            <tr>
              <td class="table-col-1">
                <p class="title">Title Here</p>
                <p class="subTitle">Subtitle</p>
              </td>
              <td>
                <a href="/project.php"><span class="table__status">Active</span>
              </td>
              <td>
                <p class="title">289</p>
                <p class="subTitle">information</p>
              </td>
              <td>
                <p class="title">3,299</p>
                <p class="subTitle">information</p>
              </td>
              <td class="table__btn">
                <div>
                  <p class="title">3,299</p>
                  <p class="subTitle">information</p>
                </div>
                <button>
                  <i class="fa fa-circle" aria-hidden="true"></i>
                  <i class="fa fa-circle" aria-hidden="true"></i>
                  <i class="fa fa-circle" aria-hidden="true"></i>
                </button>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </section>

</main>
<!-- End Main -->

<!-- Footer -->
<?php include 'footer.php' ?>
<!-- End Footer -->

<script src="./scripts/main.js"></script>
<script src="./scripts/header2.js"></script>
