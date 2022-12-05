$(".sidebar-dropdown > a").click(function() {
    $(".sidebar-submenu").slideUp(200);
    if (
    $(this)
    .parent()
    .hasClass("active")
    ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
    .parent()
    .removeClass("active");
    } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
    .next(".sidebar-submenu")
    .slideDown(200);
    $(this)
    .parent()
    .addClass("active");
    }
    });
    $("#close-sidebar").click(function() {
    $(".page-wrapper").removeClass("toggled");
    });
    $("#show-sidebar").click(function() {
    $(".page-wrapper").addClass("toggled");
    });
    $(function() {

        // info button transitions
        $(".hidden").on("click", function() {
          $(".hidden > i").toggleClass("fa-bars fa-close", 300);
          $(".sidebar-wrapper").toggleClass("show-sidebar", 500);
          $("body").toggleClass("push-body", 500);
        });
      });