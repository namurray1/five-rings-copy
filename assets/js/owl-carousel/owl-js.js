  $(document).ready(function() {
'use strict';
      var owl = $("#owl-demo");

      owl.owlCarousel();

      // Custom Navigation Events
      $(".next").on("click", function() {
          owl.trigger('owl.next');
      })
      $(".prev").on("click", function() {
          owl.trigger('owl.prev');
      })
      $(".play").on("click", function() {
          owl.trigger('owl.play', 1000);
      })
      $(".stop").on("click", function() {
          owl.trigger('owl.stop');
      })


  });