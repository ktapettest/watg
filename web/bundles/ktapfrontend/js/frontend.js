$(document).ready(function(){
    
    // add active class to 'clicked' links from sidebar
    $(".sidebar ul > li").click(function () {
       $('ul > li').removeClass('active'); 
       $(this).addClass('active');   
    	
    });
    //end 
    

});
