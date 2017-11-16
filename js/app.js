$(document).ready(function() {

  // on load animate big logo
  $('.big-logo').animate({
    opacity: 1
  }, 1500, function() {

    $('.big-logo').delay(2000).animate({
      top: '40%',
      opacity: 0
    }, 2000, function() {

      emergence.init({
        container: null,
        throttle: 250,
        reset: true,
        handheld: true,
        elemCushion: 0.15,
        offsetTop: 0,
        offsetRight: 0,
        offsetBottom: 0,
        offsetLeft: 0,
        callback: function(element, state) {
          if (state === 'visible') {
            console.log('Element is visible.');
          } else if (state === 'reset') {
            console.log('Element is hidden with reset.');
          } else if (state === 'noreset') {
            console.log('Element is hidden with NO reset.');
          }
        }
      });

      window.scrollBy(0, 1);
      window.scrollBy(0, -1);

      $('.big-logo').remove();

    });

  });


  // smooth scrolling
  $("a").click(function(event) {
    if (this.hash !== "" && !($(this).hasClass('carousel-prev') || $(this).hasClass('carousel-next') || $(this).hasClass('agreement-accordion'))) {
     event.preventDefault();
     var linkOffset = 0;
     $("html, body").animate({
       scrollTop: $(this.hash).offset().top - $(".navbar").height() + linkOffset
     }, 600);
    }
  });

  // set box shadow on fixed header
  $(window).scroll(function() {
    if ($(document).scrollTop() > ($('#our-story').offset().top - 80)) {
      $('.site-header').addClass('with-shadow');
    } else {
      $('.site-header').removeClass('with-shadow');
    }
  });
  $(window).resize(function() {
    if ($(document).scrollTop() > ($('#our-story').offset().top - 80)) {
      $('.site-header').addClass('with-shadow');
    } else {
      $('.site-header').removeClass('with-shadow');
    }
  });


  // book now drawer
  $('*[href="#book-drawer"]').click(function() {
    $('#book-drawer').addClass('open');
    $('#drawer-bg-overlay').addClass('open');
    $('#book-drawer').find('.section-title').addClass('visible');
    $('#drawer-bg-overlay').animate({
      opacity: 1
    }, 300, function() {
      $('body').css('overflow', 'hidden');
    });
  });
  $('#drawer-bg-overlay').click(function() {
    $('#book-drawer').removeClass('open');
    $('#book-drawer').find('.section-title').removeClass('visible');
    $('#drawer-bg-overlay').animate({
      opacity: 0
    }, 300, function() {
      $('#drawer-bg-overlay').removeClass('open');
      $('body').css('overflow', 'auto');
    });
  });
  $('#btn-close-drawer').click(function() {
    $('#book-drawer').removeClass('open');
    $('#book-drawer').find('.section-title').removeClass('visible');
    $('#drawer-bg-overlay').animate({
      opacity: 0
    }, 300, function() {
      $('#drawer-bg-overlay').removeClass('open');
      $('body').css('overflow', 'auto');
    });
  });


  // accordion toggle
  $('div[id^=agreement-]').on('hide.bs.collapse', function () {
    $(this).parent().find('.agreement-accordion').find('svg').removeClass('fa-rotate-180');
  });
  $('div[id^=agreement-]').on('show.bs.collapse', function () {
    $(this).parent().find('.agreement-accordion').find('svg').addClass('fa-rotate-180');
  });

});
