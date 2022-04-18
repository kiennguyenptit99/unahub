<section class="header-2">
  <div class="container-master">
    <nav class="nav__menu">
      <ul class="nav__list">
        <li class="nav__item menu__has-children" data-dropdown="1">
          <a href="/meeting.php" class="<?php echo $GLOBALS['current'] == 'meeting' ? 'active' : ''; ?>">Meetings
            <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="5.535" viewBox="0 0 10.5 5.535">
              <path id="Path"
                d="M9.878.113a.441.441,0,0,0-.589,0L5,4.072.711.113a.441.441,0,0,0-.589,0,.364.364,0,0,0,0,.544L4.705,4.887a.441.441,0,0,0,.589,0L9.878.657A.364.364,0,0,0,9.878.113Z"
                transform="translate(0.25 0.285)" fill="#cfaa40" stroke="#cfaa40" stroke-miterlimit="10"
                stroke-width="0.5" />
            </svg>
          </a>

          <ul class="nav-sub__menu">
            <li><a href="#">Sub Menu 1</a></li>
            <li><a href="#">Sub Menu 2</a></li>
            <li><a href="#">Sub Menu 3</a></li>
            <li><a href="#">Sub Menu 4</a></li>
          </ul>
        </li>

        <li class="nav__item menu__has-children" data-dropdown="2">
          <a href="/teams.php" class="<?php echo $GLOBALS['current'] == 'team' ? 'active' : ''; ?>">Teams
            <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="5.535" viewBox="0 0 10.5 5.535">
              <path id="Path"
                d="M9.878.113a.441.441,0,0,0-.589,0L5,4.072.711.113a.441.441,0,0,0-.589,0,.364.364,0,0,0,0,.544L4.705,4.887a.441.441,0,0,0,.589,0L9.878.657A.364.364,0,0,0,9.878.113Z"
                transform="translate(0.25 0.285)" fill="#cfaa40" stroke="#cfaa40" stroke-miterlimit="10"
                stroke-width="0.5" />
            </svg>
          </a>

          <ul class="nav-sub__menu">
            <li><a href="#">Sub Menu 1</a></li>
            <li><a href="#">Sub Menu 2</a></li>
            <li><a href="#">Sub Menu 3</a></li>
            <li><a href="#">Sub Menu 4</a></li>
          </ul>
        </li>

        <li class="nav__item">
          <a href="/document.php" class="<?php echo $GLOBALS['current'] == 'document' ? 'active' : ''; ?>">Docs</a>
        </li>
        <li class="nav__item">
          <a href="/task.php" class="<?php echo $GLOBALS['current'] == 'task' ? 'active' : ''; ?>">Tasks</a>
        </li>
        <li class="nav__item">
          <a href="/document.php">Co. Notes</a>
        </li>
        <li class="nav__item">
          <a href="/finance.php" class="<?php echo $GLOBALS['current'] == 'finance' ? 'active' : ''; ?>">Finances</a>
        </li>
        <li class="nav__item">
          <a href="/document.php">Resources</a>
        </li>
      </ul>
    </nav>
  </div>
</section>
