$(document).ready(function () {

	$('#adv_categ').dropdown();
	$('#advanced_city').dropdown();
	$('#area').dropdown();
	$('#advanced_district').dropdown();
	$('#adv_categ2').dropdown();
	$('#advanced_city2').dropdown();
	$('#adv_categ3').dropdown();
	$('#adv_status').dropdown();

	// nut menu an hien silebar dang mobile
    $("#iconmenumobile").on("click",function(){
    document.getElementById("mobilenav").style.visibility = "visible";
    document.getElementById("mobilenav").style.opacity = "1";
    document.getElementById("subpage").style.display = "block";
    document.getElementById("mobilenav").style.transform = "translate3d(0,0,0)";
    document.getElementById('iconmenumobile').style.visibility= "hidden";
    document.getElementById('iconmenumobile').style.opacity= "1";
    document.getElementsByClassName('backgroundmobile')[0].style= "top: 0px;left: 0px; position: fixed;width: 100%;height: 100%;z-index: 9999;background-color: rgba(0,0,0,.7);";
    });

    // button an hien menu con sidebar moblie
    $(".angledown").on("click", function() {
        var id = $(this).attr('id');
        id = "sub-"+id;
        $('#'+id).slideToggle();
    });
    // button an hien menu con sub_sidebar moblie
    $(".angledown2").on("click", function() {
        var id = $(this).attr('id');
        id = "sub-"+id;
        $('#'+id).slideToggle();
    });



    // tat sidebar dang moblie
    $(".mobile-nav-close").on("click",function(){
    document.getElementById("mobilenav").style.visibility = "hidden";
    document.getElementById("mobilenav").style.opacity = "0";
    document.getElementById("mobilenav").style.transform = "translate3d(-330px,0,0)";
    document.getElementById('iconmenumobile').style.visibility="visible";
    document.getElementById('iconmenumobile').style.opacity="1";
    document.getElementsByClassName('backgroundmobile')[0].style= "";
    });


    $(".search_bar").click(function() {
	  $(this).toggleClass("fa-search fa-times");
	  var input2 = $($(this).attr("toggle"));
	  if( $(input2).hasClass('displaysearch')){
	  	$(input2).removeClass('displaysearch');
	  } else {
	    $(input2).addClass('displaysearch');
	  }
	});
	$(".search_bar2").click(function() {
	  $(this).toggleClass("fa-search fa-times");
	  var input2 = $($(this).attr("toggle"));
	  if( $(input2).hasClass('displaysearch')){
	  	$(input2).removeClass('displaysearch');
	  } else {
	    $(input2).addClass('displaysearch');
	  }
	});

	function isOnScreen(elem) {
        if( elem.length == 0 ) {
            return;
        }
        var $window = jQuery(window)
        var viewport_top = $window.scrollTop() //vị trí đang scroll
        var viewport_height = $window.height()  // chiều cao màn hình
        var viewport_bottom = viewport_top + viewport_height
        var $elem = jQuery(elem)
        var top = $elem.offset().top
        var height = $elem.height()
        var bottom = top + height

        return (top >= viewport_top && top < viewport_bottom) ||
            (bottom > viewport_top && bottom <= viewport_bottom) ||
            (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
    }


	function runOnScroll() {

		if(jQuery(window).scrollTop() >80 && ($(".header_bar").hasClass("master_header_sticky") == false)){
			$(".header_bar").addClass("master_header_sticky");
			$(".header_wrapper").addClass("customnav");
			// document.getElementById("logo_image").src = "/asset/images/logo.png";
			document.getElementById("scroll_up").style.display = "block";
			document.getElementsByClassName("header_wrapper")[0].style.backgroundColor = "#ee2624";
			document.getElementsByClassName("header_wrapper")[0].style.height = "70px";
			$(".no-megamenu").addClass("editlineheightmenu");
			$(".submenu_ul").addClass("editsubmenu_ul");
			$(".submenu_ul2").addClass("editsubmenu_ul2");
			document.getElementById("logo_image").style.maxWidth = "230px";
			document.getElementById("logo_image").style.minHeight = "70px";

		}
		if(jQuery(window).scrollTop() <80 && ($(".header_bar").hasClass("master_header_sticky") == true)){
			$(".header_bar").removeClass("master_header_sticky");
			$(".header_wrapper").removeClass("customnav");
			// document.getElementById("logo_image").src = "/asset/images/transparentopt.png";
            document.getElementById("scroll_up").style.display = "none";
			document.getElementsByClassName("header_wrapper")[0].style.backgroundColor = "#ee2624";
			document.getElementsByClassName("header_wrapper")[0].style.height = "90px";
			$(".no-megamenu").removeClass("editlineheightmenu");
			$(".submenu_ul").removeClass("editsubmenu_ul");
			$(".submenu_ul2").removeClass("editsubmenu_ul2");
			document.getElementById("logo_image").style.maxWidth = "300px";
			document.getElementById("logo_image").style.minHeight = "80px";
		}
	}
	$(window).scroll(runOnScroll);



	 $(".adv_search_tab_item").on("click",function(){
        var item = $(".adv_search_tab_item");
        item.removeClass('active');
        $(this).addClass('active');
        var tabattr = $(this).attr("data");
        var tab = $(".tab-pane");
        tab.removeClass('active');
        $(tabattr).addClass('active');
    });

	let min = 10;
	let max = 100;

	const calcLeftPosition = value => 100 / (100 - 10) *  (value - 10);

	$('#rangeMin').on('input', function(e) {
	  const newValue = parseInt(e.target.value);
	  if (newValue > max) return;
	  min = newValue;
	  $('#thumbMin').css('left', calcLeftPosition(newValue) + '%');
	  $('#min').html(newValue);
	  $('#line').css({
	    'left': calcLeftPosition(newValue) + '%',
	    'right': (100 - calcLeftPosition(max)) + '%'
	  });
	});

	$('#rangeMax').on('input', function(e) {
	  const newValue = parseInt(e.target.value);
	  if (newValue < min) return;
	  max = newValue;
	  $('#thumbMax').css('left', calcLeftPosition(newValue) + '%');
	  $('#max').html(newValue);
	  $('#line').css({
	    'left': calcLeftPosition(min) + '%',
	    'right': (100 - calcLeftPosition(newValue)) + '%'
	  });
	});
	$('#scroll_up').on("click",function(){
		document.body.scrollTop = 0;
  		document.documentElement.scrollTop = 0;
	})

});
