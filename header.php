<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  function titlePage()
  {
    echo $GLOBALS['titlePage'] ? $GLOBALS['titlePage'] : "UnaWork";
  }

  function classBody()
  {
    echo $GLOBALS['classBody'] ? $GLOBALS['classBody'] : "";
  }

  ?>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="./images/header/favicon.png">
    <title><?php titlePage(); ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="./styles/scss/main.css"/>
    <link rel="stylesheet" href="./plugins/fontAwesome/font-awesome.min.css"/>
</head>

<body class="<?php classBody(); ?>">

<!-- Header -->
<header id="header">
    <div class="header__top">
        <div class="container-master">
            <div class="header__container">
                <div class="logoHeader">
                    <a href="index.php" title="UnaWork">
                        <img src="./images/header/logo.png" alt="Logo UnaWork"/>
                    </a>
                </div>
                <div class="header__main">
                    <nav class="col nav__left">
                        <ul class="nav__list">
                            <li class="logoHeaderMenu">
                                <a href="/">
                                    <img src="./images/header/logo.png" alt="Logo UnaWork"/>
                                </a>
                            </li>
                            <li class="<?php echo $GLOBALS['currentHeader'] == 'manage-plate' ? 'active' : '' ?>">
                                <!-- is going to turn into the manage plate after they sign in -->
                                <a href="index.php">Home</a>
                            </li>
                            <li class="<?php echo $GLOBALS['currentHeader'] == 'profile' ? 'active' : '' ?>">
                                <a href="profile.php">Profile</a>
                            </li>
                        </ul>
                    </nav>
                    <nav class="col nav__right">
                        <ul class="nav__list">
                            <li class="<?php echo $GLOBALS['currentHeader'] == 'Social' ? 'active' : '' ?>">
                                <a href="social.php">Social</a>
                            </li>
                            <li class="<?php echo $GLOBALS['currentHeader'] == 'commerce' ? 'active' : '' ?>">
                                <a href="commerce.php">Commerce</a>
                            </li>
                            <li class="<?php echo $GLOBALS['currentHeader'] == 'hire' ? 'active' : '' ?>">
                                <a href="info.php">Info</a>
                            </li>
                            <li class="<?php echo $GLOBALS['currentHeader'] == 'UnaWallet' ? 'active' : '' ?>">
                                <a href="select-transaction-type.php" >UnaWallet</a>
                            </li>
                            <!-- <li class="<?php echo $GLOBALS['currentHeader'] == 'fire-work' ? 'active' : '' ?>">
                                <a href="#" title="Fire Work">Fire Work</a>
                            </li>
                            <li class="<?php echo $GLOBALS['currentHeader'] == 'partnerships' ? 'active' : '' ?>">
                                <a href="#" title="Partnerships">Partnerships</a>
                            </li> -->
                        </ul>
                    </nav>
                </div>

                <div class="account__group">
                    <div class="account__avatar">
                        <a href="/profile.php"><img src="./images/thumbnails/card-avatar.png" alt="User"/></a>
                    </div>
                    <div class="account__listItem">
                        <ul>
                            <li><a href="#" title="Dashboard">Dashboard</a></li>
                            <li><a href="#" title="Profile">Profile</a></li>
                            <li><a href="#" title="Log out">Log out</a></li>
                        </ul>
                    </div>
                </div>
                <button id="btn-menu-responsive" onClick="toggleBtnMenu(this)">
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </button>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->
