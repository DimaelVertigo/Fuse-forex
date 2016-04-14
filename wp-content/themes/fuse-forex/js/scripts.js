$(document).ready(function() {

$('.trader--1 .trader__price').each(function() {
  $(this).prop('Counter', 0).animate({
    Counter: $(this).text()
  }, {
    duration: 30000,
    easing: 'linear',
    step: function(now) {
      $(this).text(Math.ceil(now));
    }
  });
});
$('.trader--2 .trader__price').each(function() {
  $(this).prop('Counter', 0).animate({
    Counter: $(this).text()
  }, {
    duration: 30000,
    easing: 'linear',
    step: function(now) {
      $(this).text(Math.ceil(now));
    }
  });
});

/*=============================================
=            Tabs for posts filter            =
=============================================*/
$('.posts-filter__tab-trigger').on('click', function() {
  $(this).addClass('posts-filter__tab-trigger--enabled')
  .removeClass('posts-filter__tab-trigger--disabled')
  .siblings('.posts-filter__tab-trigger')
  .removeClass('posts-filter__tab-trigger--enabled')
  .addClass('posts-filter__tab-trigger--disabled');
  event.preventDefault();
});

$('.posts-filter__tab-trigger--popular').on('click', function() {
  $('.posts-filter__list--popular')
  .addClass('posts-filter__list--enabled')
  .removeClass('posts-filter__list--disabled')
  .siblings('ul')
  .addClass('posts-filter__list--disabled');
});
$('.posts-filter__tab-trigger--latest').on('click', function() {
  $('.posts-filter__list--latest')
  .addClass('posts-filter__list--enabled')
  .removeClass('posts-filter__list--disabled')
  .siblings('ul')
  .addClass('posts-filter__list--disabled');
});
$('.posts-filter__tab-trigger--tutorials').on('click', function() {
  $('.posts-filter__list--tutorials')
  .addClass('posts-filter__list--enabled')
  .removeClass('posts-filter__list--disabled')
  .siblings('ul')
  .addClass('posts-filter__list--disabled');
});
/*=========================================
=            Blockquote slider            =
=========================================*/
$(document).ready(function() {

  $("#owl-demo").owlCarousel({
    items: 1,
    autoHeight: true,
    navigation: true,
    navigationText: false
  });
});

/*============================
=            Game            =
============================*/

// Action 1
var $firstChooseTraderCard = $('.trader--1 .choose-trader-card'),
    $secondChooseTraderCard = $('.trader--2 .choose-trader-card'),
    $firstSelectTraderCard = $('.trader--1 .select-trader-card'),
    $secondSelectTraderCard = $('.trader--2 .select-trader-card'),
    $firstTraderItem = $('.trader--1 .select-trader-card__item'),
    $secondTraderItem = $('.trader--2 .select-trader-card__item'),
    $firstTraderName = $('.trader--1 .select-trader-card__name'),
    $secondTraderName = $('.trader--2 .select-trader-card__name'), 
    $firstTraderBtn = $('.trader--1 .select-trader-card__btn'),
    $secondTraderBtn = $('.trader--2 .select-trader-card__btn'),
    $name,
    $capital,
    $firstTraderCapital,
    $secondTraderCapital,
    totalCapital;

// Activate select your trader
$('.traders--act-1 .trader--1').on('click', function() {

  $firstChooseTraderCard.addClass('disabled');
  $firstSelectTraderCard.removeClass('disabled');

});
$('.traders--act-1 .trader--2').on('click', function() {

  if ( !$(this).hasClass('trader--blur') ) {
    $secondChooseTraderCard.addClass('disabled');
    $secondSelectTraderCard.removeClass('disabled');
  }

});

$firstTraderItem.on('click', function() {
  var itemNumber = $(this).index() + 1;
  var $this = $(this);
  $name = $(this).data('name');
  $capital = $(this).data('capital');

  $firstTraderCapital = $capital;

  $firstTraderName.text($name);
  $('.trader--1 .trader__name').text($name);
  $('.trader--1 .trader__capital-val').text('$'+ $capital +' '+ 'BILLION');
    $('.bigcard__trader--1 .bigcard__name').text($name);
  traderChooser($this);
  $firstTraderBtn.removeAttr('disabled');
  $('.traders--act-3 .trader--1 .trader__icon').removeClass().addClass('trader__icon--' + itemNumber + ' ' + 'trader__icon');

  $('.trader--1 .selected-trader-card .trader__icon').removeClass().addClass('trader__icon--' + itemNumber + ' ' + 'trader__icon');

});

$secondTraderItem.on('click', function() {
  var itemNumber = $(this).index() + 1;
  var $this = $(this);
  $name = $(this).data('name');
  $capital = $(this).data('capital');

  $secondTraderCapital = $capital;

  $secondTraderName.text($name);
  $('.trader--2 .trader__name').text($name);
  $('.trader--2 .trader__capital-val').text('$'+ $capital +' '+ 'BILLION');
  $('.bigcard__trader--2 .bigcard__name').text($name);
  traderChooser($this);
  $secondTraderBtn.removeAttr('disabled');
  $('.traders--act-3 .trader--2 .trader__icon').removeClass().addClass('trader__icon--' + itemNumber + ' ' + 'trader__icon');

  $('.trader--2 .selected-trader-card .trader__icon').removeClass().addClass('trader__icon--' + itemNumber + ' ' + 'trader__icon');


});

function traderChooser(trader) {
  trader.find('.select-trader-card__icon').addClass('select-trader-card__icon--checked').closest('.select-trader-card__item').siblings().find('.select-trader-card__icon').removeClass('select-trader-card__icon--checked');
}

// First card Button activate second card
$firstTraderBtn.on('click', function() {
  $('.trader--blur').removeClass('trader--blur');
  selectedCardActivator($(this));
});
//Second card Button activate next Action arrow
$secondTraderBtn.on('click', function() {
  arrowEnabler($('.traders--act-1 .arrow'));
  selectedCardActivator($(this));
  setInterval(setTime, 3000);
});

$('.trader__return').on('click', function() {
  $(this).closest('.selected-trader-card').addClass('disabled');
});
function selectedCardActivator(target) {
  target.closest('.select-trader-card').siblings('.selected-trader-card').removeClass('disabled');
}
function arrowEnabler(arrow) {
  arrow.addClass('enabled');
}
// Action 2
$('.arrow--act-2').on('click', function() {
  $('.bigcard__total-capital').text(totalCapital($firstTraderCapital, $secondTraderCapital));
});
function totalCapital(a, b) {
  return a + b;
}
// Tooltip
$('.trader--1 .tooltip').on('click', function() {
  $('.trader--1 .tooltip').addClass('disabled');
  $('.trader--1 .tooltip__list').toggleClass('disabled');
  $('.trader--1 .tooltip__item').addClass('tooltip__item--animated');
});
$('.trader--2 .tooltip').on('click', function() {
  $('.trader--2 .tooltip').addClass('disabled');
  $('.trader--2 .tooltip__list').toggleClass('disabled');
  $('.trader--2 .tooltip__item').addClass('tooltip__item--animated');
});
$('.bigcard .tooltip').on('click', function() {
  $('.bigcard .tooltip').addClass('disabled');
  $('.bigcard .tooltip__list').toggleClass('disabled');
  $('.bigcard .tooltip__item').addClass('tooltip__item--animated');
});
// Action 3

// Copy to clipboard
var code = $('.clipboard__input').data('code');
var clip = new ZeroClipboard( $('.clipboard__btn') );

$('.clipboard__input').text(code);
clip.setText(code);

  // Rotate cards 
  $('.arrow--act-1').on('click', function() {
    $('.traders--act-1 .trader').addClass('flipOutCards');
    $('.traders--act-3 .trader').addClass('flipInCards');
    $('.traders--act-1').fadeOut('slow');
    $('.traders--act-3').toggleClass('disabled');
  });
  $('.arrow--act-3').on('click', function() {
    $('.traders--act-3 .trader').removeClass('flipInCards').addClass('flipOutCards');
    $('.traders--act-4 .trader').addClass('flipInCards');
    $('.traders--act-3').fadeOut('slow');
    $('.traders--act-4').toggleClass('disabled');

    $('.playwithtraders__title--1').text("Discount Code");
    $('.playwithtraders__title--2').text("This content is Locked");
  });
  
  $('.arrow--act-4').on('click', function() {
    $('.traders--act-4 .singlecard').addClass('flipOutCards');
    $('.traders--act-5 .singlecard').addClass('flipSinglecard');
    $('.traders--act-4').fadeOut('slow');
    $('.traders--act-5').toggleClass('disabled');

    $('.playwithtraders__title--1').text("Get your code");
    $('.playwithtraders__title--2').text("Write this down");
  });
  $('.arrow--act-5').on('click', function() {
    $('.traders--act-5 .singlecard').addClass('flipOutCards');
    $('.traders--act-6 .singlecard').addClass('flipSinglecard');
    $('.traders--act-5').fadeOut('slow');
    $('.traders--act-6').toggleClass('disabled');

    $('.playwithtraders__title--1').text("Email Area");
    $('.playwithtraders__title--2').text("Without spam");
  });

//Clock 
var hoursLabel = document.getElementById("hours");
var minutesLabel = document.getElementById("minutes");
var secondsLabel = document.getElementById("seconds");
var totalSeconds = 0;
var hoursLabel2 = document.getElementById("hours2");
var minutesLabel2 = document.getElementById("minutes2");
var secondsLabel2 = document.getElementById("seconds2");
var totalSeconds = 0;


function setTime()
{
    ++totalSeconds;
    hoursLabel.innerHTML = pad(00);
    secondsLabel.innerHTML = pad(totalSeconds%60);
    minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
    hoursLabel2.innerHTML = pad(00);
    secondsLabel2.innerHTML = pad(totalSeconds%60);
    minutesLabel2.innerHTML = pad(parseInt(totalSeconds/60));
}

function pad(val)
{
    var valString = val + "";
    if(valString.length < 2)
    {
        return "0" + valString;
    }
    else
    {
        return valString;
    }
}
// Disable category link
  $('.post-categories a').on('click', function() {
    event.preventDefault();
  });
  
// Cute pagination links
  var navPrevious = $('.nav-previous a').text();
  var navNext = $('.nav-next a').text();

  $('.nav-previous a').text(navLinkCute(navPrevious, 40));
  $('.nav-next a').text(navLinkCute(navNext, 40));

  function navLinkCute(str, maxlength) {
    if (str.length > maxlength) {
      return str.slice(0, maxlength - 3) + '...';
    }
    return str;
  };

// Article anchors 
$("a.ancLinks").click(function(e) { 
  var elementClick = $(this).attr("href");
  var destination = $(elementClick).offset().top;
  $('html, body').animate({
    scrollTop: destination 
  }, 1100);
  e.preventDefault();
});


});



