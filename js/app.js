$(document).ready(function() {

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

  // smooth scrolling
    $("a").click(function(event) {
      if (this.hash !== "") {
       event.preventDefault();
       var linkOffset = 0;
       $("html, body").animate({
         scrollTop: $(this.hash).offset().top - $(".navbar").height() + linkOffset
       }, 600);
      }
    });

});
