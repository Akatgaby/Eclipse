$(document).ready(function(){
    $('.slider').slider({
        indicators: false,
        height: 480,
        interval: 2700
    });
  });

  $(document).ready(function(){
    $('.carousel').carousel();
  });

  $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton({
        direction: 'left',
        hoverEnabled: false
    });
});