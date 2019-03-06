$('.bar-btn-sm').click(function(){
    
    
     if($('.navbar-collapse').hasClass('show')) {
        $(".all-content").removeClass("blur-me"); 
    }
    
    else if (!$('.navbar-collapse').hasClass('show') && $(this).hasClass('collapsed') && !$('.navbar-collapse').hasClass('collapsing')) {
        $(".all-content").addClass("blur-me"); 
    }
})
