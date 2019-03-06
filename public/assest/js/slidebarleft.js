$(".menu-btn-o").click(function() {
    $(this).hide();
    $(".menu-btn-x").show();
    $(".menu").removeClass("clapsme");
    $(".menu").addClass("openme");
    $(".all-content").addClass("blur-me");

  });
  $(".menu-btn-x").click(function() {
    $(this).hide();
    $(".menu-btn-o").show();
    $(".menu").addClass("clapsme");
    $(".menu").removeClass("openme");
    $(".all-content").removeClass("blur-me"); 
  });