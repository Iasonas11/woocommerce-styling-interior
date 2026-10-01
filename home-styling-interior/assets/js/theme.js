// Scroll to Top
document.addEventListener('DOMContentLoaded', () => {
  const home_styling_interior_btn = document.body.appendChild(document.createElement('button'));
  home_styling_interior_btn.className = 'return-to-top-btn';
  home_styling_interior_btn.innerHTML = '<span class="dashicons dashicons-arrow-up-alt"></span>';

  window.addEventListener('scroll', () =>
    home_styling_interior_btn.classList.toggle('show', window.scrollY > 300)
  );

  home_styling_interior_btn.onclick = () => window.scrollTo({ top: 0, behavior: 'smooth' });
});

// Home Sidebar
jQuery('document').ready(function($) {
  var $sidebar = $(".sidebar");
  var $toggleBtn = $(".toggle-btn-main");
  var $crossBtn = $(".cross-btn-main");

  // Toggle button click
  $toggleBtn.on("click", function() {
    if ($sidebar.hasClass("is-hidden")) {
      // Show sidebar
      $sidebar
        .removeClass("is-hidden")
        .attr({
          "aria-hidden": "false",
          "tabindex": "-1"
        })
        .focus();

      $toggleBtn
        .removeClass("dashiconss-menu")
        .addClass("dashiconss-no-alt")
        .attr("aria-expanded", "true");
    } else {
      // Hide sidebar
      $sidebar
        .addClass("is-hidden")
        .attr("aria-hidden", "true");

      $toggleBtn
        .removeClass("dashiconss-no-alt")
        .addClass("dashiconss-menu")
        .attr("aria-expanded", "false")
        .trigger("focus"); // explicitly return focus
    }
  });

  // Cross button click → hide safely
  $crossBtn.on("click", function(e) {
    e.preventDefault(); // prevent unwanted focus loss
    e.stopPropagation();

    $sidebar
      .addClass("is-hidden")
      .attr("aria-hidden", "true");

    // Return focus *asynchronously* to avoid Chrome accessibility reset
    setTimeout(function() {
      $toggleBtn
        .removeClass("dashiconss-no-alt")
        .addClass("dashiconss-menu")
        .attr("aria-expanded", "false")
        .trigger("focus");
    }, 50);
  });


  var owl = jQuery('.slider-main.owl-carousel');
    owl.owlCarousel({
    margin: 20,
    nav: true,
    navText: ["<span class='dashicons dashicons-arrow-left-alt'></span>", "<span class='dashicons dashicons-arrow-right-alt'></span>"],
    autoplay: true,
    autoplayTimeout: 3000,
    lazyLoad: true,
    loop: true,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    },
    mouseDrag: true
  });


  var owl = jQuery('.gallery-section.owl-carousel');
    owl.owlCarousel({
    margin: 20,
    nav: false,
    navText: ["<span class='dashicons dashicons-arrow-left-alt'></span>", "<span class='dashicons dashicons-arrow-right-alt'></span>"],
    autoplay: true,
    autoplayTimeout: 3000,
    lazyLoad: true,
    loop: true,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 4
      }
    },
    mouseDrag: true
  });
});