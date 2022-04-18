$(document).ready(function ($) {
    var mainMenuMobile = $("header#header .header__main");
    var button = $("#btn-menu-responsive");
    var body = $("body");

    toggleBtnMenu = (elm) => {
      button.toggleClass('change');
      mainMenuMobile.toggleClass('active');
      body.toggleClass('no-scroll');
    }

    $(document).mouseup(function (e) {
      // if the target of the click isn't the container nor a descendant of the container
      if (!mainMenuMobile.is(e.target) && mainMenuMobile.has(e.target).length === 0 && !button.is(e.target) && button.has(e.target).length === 0) {
        if (body.hasClass("no-scroll")) {
          button.toggleClass('change')
          mainMenuMobile.toggleClass('active');
          body.toggleClass('no-scroll');
        }
      }
    });
  }
);


