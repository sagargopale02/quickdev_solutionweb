  /** Document Ready Functions **/
  /********************************************************************/



  $(document).ready(function () {

      //            var top = $('.thisone').offset().top;
      //            $('.trigger').click(function() {
      //                $('.thisone').css('position', '');
      //                $('.left2').toggle('slow', function() {
      //                    top = $('.thisone').offset().top;
      //                });
      //
      //
      //            });
      //
      //
      //
      //            $(document).scroll(function() {
      //                $('.thisone').css('position', '');
      //                top = $('.thisone').offset().top;
      //                $('.thisone').css('position', 'absolute');
      //                $('.thisone').css('top', Math.max(top, $(document).scrollTop()));
      //            });
      $(".navbar a, footer a[href='.videobg']").on('click', function (event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();
              // Store hash
              var hash = this.hash;
              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                  scrollTop: $(hash).offset().top
              }, 900, function () {
                  // Add hash (#) to URL when done scrolling (default click behavior)
                  window.location.hash = hash;
              });
          } // End if
      });


      $(window).on("scroll", function () {
          if ($(window).scrollTop() > 50) {
              $("#fullnav").addClass("active");
          } else {
              //remove the background property so it comes transparent again (defined in your css)
              $("#fullnav").removeClass("active");
          }
      });


      var scroll_start = 0;
      var startchange = $('#startchange');
      var offset = startchange.offset();
      if (startchange.length) {
          $(document).scroll(function () {
              scroll_start = $(this).scrollTop();
              if (scroll_start > offset.top) {
                  $(".navbar-default").css('background-color', '#f0f0f0');
              } else {
                  $('.navbar-default').css('background-color', 'transparent');
              }
          });
      }

      // Resive video
      scaleVideoContainer();

      initBannerVideoSize('.video-container .poster img');
      initBannerVideoSize('.video-container .filter');
      initBannerVideoSize('.video-container video');

      $(window).on('resize', function () {
          scaleVideoContainer();
          scaleBannerVideoSize('.video-container .poster img');
          scaleBannerVideoSize('.video-container .filter');
          scaleBannerVideoSize('.video-container video');
      });

  });

  /** Reusable Functions **/
  /********************************************************************/

  function scaleVideoContainer() {

      var height = $(window).height();
      var unitHeight = parseInt(height) + 'px';
      $('.homepage-hero-module').css('height', unitHeight);

  }

  function initBannerVideoSize(element) {

      $(element).each(function () {
          $(this).data('height', $(this).height());
          $(this).data('width', $(this).width());
      });

      scaleBannerVideoSize(element);

  }

  function scaleBannerVideoSize(element) {

      var windowWidth = $(window).width(),
          windowHeight = $(window).height(),
          videoWidth,
          videoHeight;

      console.log(windowHeight);

      $(element).each(function () {
          var videoAspectRatio = $(this).data('height') / $(this).data('width'),
              windowAspectRatio = windowHeight / windowWidth;

          if (videoAspectRatio > windowAspectRatio) {
              videoWidth = windowWidth;
              videoHeight = videoWidth * videoAspectRatio;
              $(this).css({
                  'top': -(videoHeight - windowHeight) / 2 + 'px',
                  'margin-left': 0
              });
          } else {
              videoHeight = windowHeight;
              videoWidth = videoHeight / videoAspectRatio;
              $(this).css({
                  'margin-top': 0,
                  'margin-left': -(videoWidth - windowWidth) / 2 + 'px'
              });
          }

          $(this).width(videoWidth).height(videoHeight);

          $('.homepage-hero-module .video-container video').addClass('fadeIn animated');


      });
  }

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
      scrollFunction()
  };

  function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
      } else {
          document.getElementById("myBtn").style.display = "none";
      }
  }

  function topFunction() {
      $('html, body').animate({
          scrollTop: $('.videobg').offset().top
      }, 500, function () {});
  }

  $('.navbar a').on('click', function () {
      $('.navbar-collapse').collapse('hide');
      //        alert();
  });

  function movetoservicespage() {
      $('html, body').animate({
          scrollTop: $('#services').offset().top
      }, 500, function () {});
  }

  $(window).scroll(function () {
      $(".slideanim").each(function () {
          var pos = $(this).offset().top;
          var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
              $(this).addClass("slide");
          }
      });

  });

  $('.thumbnail').click(function () {
      $('.modal-body').empty();
      var title = $(this).parent('a').attr("title");
      $('.modal-title').html(title);
      $($(this).parents('div').html()).appendTo('.modal-body');
      $('#myModal').modal({
          show: true
      });
  });



  
