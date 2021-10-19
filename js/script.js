$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $(".navbar").addClass("navActive");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".navbar").removeClass("navActive");
        }
    });

    $(".connect").click(function() {
       // gsap.to(window, {duration: 0.4, scrollTo:{y: "#footer", autoKill: false,ease: "power2"}});

       $("html, body").animate({ scrollTop: $(document).height() }, 1000);
      });

 });

// var btn = document.getElementById("connect"),
// menuContent = document.getElementById("mainContainer");

// btn.addEventListener("click", () => {
//     gsap.to(menuContent, {duration: 1, scrollTo:{y:"#footer", offsetY:70,autoKill:false}});
//   });


$(document).ready(function(){

    if($(window).scrollTop() > 50) {
        $(".navbar").addClass("navActive");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $(".navbar").removeClass("navActive");
    }

    $("#tileCarousel").owlCarousel({
        nav:true,
        responsive: {
            0: {
              items: 1
            },

            600: {
              items: 1
            },
            1024: {
                items:4,
            }
          }
    });
    
    $("#testiCarousel").owlCarousel({
        dotsEach:true,
        autoplay:true,
        autoplayTimeout:4000,
        loop:true,
        responsive: {
            0: {
              items: 1
            },

            600: {
              items: 1
            },
            1024: {
                items:1,
            }
          }
    });
    $("#imageCarousel").owlCarousel({
        dotsEach:true,
        autoplay:true,
        items:1,
        autoplayTimeout:2000,
        loop:true
    });
            });

   



