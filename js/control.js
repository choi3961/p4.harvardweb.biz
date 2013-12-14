//$("#display01").html("hello");
/*
$('.header02-li').click(function(){
	$("#display01").html("hello555");
	$(this).css("font-weight", "bold");
});
*/


//var ajax_load = "<img src='img/load.gif' alt='loading...' />";

// center local(random)
/////////////////////////////////////////////////////////

$(".total-part").click(function(e){  
    e.preventDefault();
    var part = $(this).html();
    part = part * 10;
    var loadUrl = "/producers/total_part/" + part; 
    $(".center").load(loadUrl,{local:part});  
}); 

///////////////////////////////////////////////////////////

// header pannel
$(".header02-local").click(function(){    
    var temp = $(this).html();
    var loadUrl = "/producers/local/" + temp;
    $(".center").load(loadUrl,{local:temp});  
});  


$(".local-part").click(function(){
    //var ajax_load = "<img src='img/load.gif' alt='loading...' />";
    //$('#display01').html("hello local part");
    var temp = $(this).html();
    var loadUrl = "/producers/local_part/" + temp;
    $(".center").load(loadUrl,{local:temp});  
}); 

$(".local02").click(function(){
    //$('#display01').html("hello?");
    var temp = $(this).html();
    var loadUrl = "/producers/local02/" + temp;
    $(".center").load(loadUrl,{local02:temp});  
}); 

$(".local02-part").click(function(){
    var temp = $(this).html();
    var loadUrl = "/producers/local02_part/" + temp;
    
    $(".center").load(loadUrl,{local02:temp});  
}); 


// lefter pannel
$('.category001').click(function(e){
    e.preventDefault();
    $(this).parent().siblings().find('ul').slideUp();
    $(this).next().slideToggle();
});

// lefter pannel category02
$(".category02").click(function(){  
    var temp = $(this).html();
    var loadUrl = "/producers/category02/" + temp;
    $(".center").load(loadUrl,{category02:temp});  
}); 

$(".category02-part").click(function(){  
    var temp = $(this).html();
    var loadUrl = "/producers/category02/" + temp;
    $(".center").load(loadUrl,{category02:temp});  
}); 

//  menu function calling for producers controller
//$(".center-part-local").click(function(e){  
//    e.preventDefault();
//    var face = $(this).html();
//    var loadUrl = "/producers/center_part_local" + face; 
//    $(".center").html(ajax_load).load(loadUrl);//,{category02:temp});  
//});

// menu function calling for users controller
$(".menu-users").click(function(e){  
    e.preventDefault();
    var face = $(this).html();
    
    var loadUrl = "/users/" + face; 
    $(".center").load(loadUrl);//,{category02:temp});  
}); 

//  menu function calling for posts controller
$(".menu-posts").click(function(e){  
    e.preventDefault();
    var face = $(this).html();
    var loadUrl = "/posts/" + face; 
    $(".center").load(loadUrl);//,{category02:temp});  
}); 

//  menu function calling for producers controller
$(".menu-producers").click(function(e){  
    e.preventDefault();
    var face = $(this).html();
    var loadUrl = "/producers/" + face; 
    $(".center").load(loadUrl);//,{category02:temp});  
});

