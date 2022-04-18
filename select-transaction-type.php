<link rel="stylesheet" href="./styles/scss/transaction-type.css" />
<link rel="stylesheet" href="./plugins/fontAwesome/css/all.min.css">


<!-- Main -->
<div class="select__transaction active">
  <div class="overlay">

  </div>
  <div class="select__content">
    <h3>
      <span>Select Transaction Type</span>
      <i class="fa-solid fa-xmark"></i>
    </h3>
    <p class="select__description">
      lorem ipsum dolor sit amet, consectetur adipisicing elit.Ut at sem sodales, efficitur orci sit amet, dapibus sapien. Etiam feugiat augue quis odio aliquet, eget lobortis libero auctor.
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
<!-- End Main -->

<script src="./plugins/jQuery/jquery.min.js"></script>
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
