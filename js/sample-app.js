//$("#display01").html("hello");
/*
$('.header02-li').click(function(){
	$("#display01").html("hello555");
	$(this).css("font-weight", "bold");
});
*/


$.ajaxSetup ({  
        cache: false  
    });  
var ajax_load = "<img src='img/load.gif' alt='loading...' />";  
      
//  load() functions  
  

// header pannel
$(".header02-local").click(function(){  
    //e.preventDefault();
    //$(this).parent().siblings().find('ul').slideUp();
    //$(this).next().slideToggle();

    var loadUrl = "/producers/local";
    var temp = $(this).html();
    $(".center").html(ajax_load).load(loadUrl,{local:temp});  
});  


$(".local02").click(function(){  
    var loadUrl = "/producers/local02";
    var temp = $(this).html();
    $(".center").html(ajax_load).load(loadUrl,{local02:temp});  
}); 

// lefter pannel
$('.category001').click(function(e){
    e.preventDefault();
    $(this).parent().siblings().find('ul').slideUp();
    $(this).next().slideToggle();
});

// lefter pannel category02
$(".category02").click(function(){  
    var part = $(this).attr('id');
    var loadUrl = "/producers/category02/" + part;
    var temp = $(this).html();
    $(".center").html(ajax_load).load(loadUrl,{category02:temp});  
}); 

// center local(random)
$(".center-part").click(function(){  
    //var part = $(this).attr('id');
    var part = $(this).html();
    part = part * 10;
    //var part = 50;
    var loadUrl = "/producers/local_part/" + part; 
    //var temp = $(this).html();
    $(".center").html(ajax_load).load(loadUrl);//,{category02:temp});  
}); 
