<?php
$nav = 2;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Our Approach | TreeStack - App & Web Development Agency </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/compiled/theme.css">
  <link rel="stylesheet" type="text/css" href="css/vendor/animate.css">
  <link rel="stylesheet" type="text/css" href="css/compiled/custom.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>
  <script src="js/theme.js"></script>

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>
  <body >





<button onclick="topFunction()" id="topButton" title="Go to top"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></button>

<?php
include 'header.php';
?>


<div class="features-sectio mt-10 " >



<div class="container-fluid " >

<div class="fi ">

  <div class="row ">
    <!-- <div class="col-md-3">
    <div class="tree-behind">

    </div>
    </div> -->
    <div class="col-md-10 col-md-offset-1">
       <div class='card card-full' style="margin-top:0px;height:auto;">
         <h1 class="hidden-lg">Our Approach</h1>
          <img src="images/icons/three-dots.jpg">
      <h2 class="title-text " id="head">Listen</h2>
      <!-- <h3 class="tree-head"  style="margin-top:0px;"> Listen </h3> -->
      <img src="images/icons/1.png" class="tree-all">
      <h4 class="tree-content " id="content" style="margin-top:30px;">For us, listening to you is the most important step. We want to be certain that we understand your key requirements, what victory feels like and the parts of the project where there’s room for us to be creative. This way we’ll be able to give you a sound estimate for the project cost. At the kick-off meeting we’ll dive deep into the investigation (coffees in hand!) and agree a set of expectations and milestones.</h4>
    </div>
  </div>

    <div class="col-md-1 hidden-sm padl0">
        <ul class="n">
          <li class="" id="mark1"> Listen </li>
          <li class="" id="mark2"> Think </li>
          <li class="" id="mark3"> Design </li>
          <li class="" id="mark4"> Build </li>
          <li class="" id="mark5"> Test </li>
          <li class="" id="mark6"> Release </li>

        </ul>
    </div>
    <!--  <div class="col-md-12 margin10">
       <a href="talk.html" class="btn  purple-button btn-lg center-block " role="button">Let's Talk</a>

     </div> -->
  </div>
</div>

</div>
<div class="con">

</div>
<!--  <div class="col-md-10 col-md-offset-1">
 <a href="talk.php" class="btn  purple-button btn-lg center-block " role="button" style="margin-bottom:10px;">Let's Talk</a>
</div> -->
<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>




</div>



</body>




<script>

$('#mark1').click(function(){
 $('html, body').animate({
        scrollTop: 700
    }, 500);
          //  clearClass();
          //  $('.tree-all').attr("src",'images/icons/1.png');
          //  $('#content').text('For us, listening to you is the most important step. We want to be certain that we understand your key requirements, what victory feels like and the parts of the project where there’s room for us to be creative. This way we’ll be able to give you a sound estimate for the project cost. At the kick-off meeting we’ll dive deep into the investigation (coffees in hand!) and agree a set of expectations and milestones.');
          // $('#head').text('Listen');
          // $('#mark1').addClass('current');
    return false;
});

$('#mark2').click(function(){
 $('html, body').animate({
        scrollTop: 900
    }, 500);
          //  clearClass();
          //  $('.tree-all').attr("src",'images/icons/2.png');
          //  $('#content').text('Before we jump into designing anything, we’ll take a step back and try to envision the wider context of your project. We call this the “research & reflect” phase. We will review the landscape of your business or idea to see what others have achieved. This ensures our implementation is creative and original.');
          // $('#head').text('Think');
          // $('#mark2').addClass('current');
    return false;
});

$('#mark3').click(function(){
 $('html, body').animate({
        scrollTop: 1200
    }, 500);
          //  clearClass();
          //  $('.tree-all').attr("src",'images/icons/3.png');
          //  $('#content').text('This is an iterative process with you where we give user empathy the utmost importance in order to achieve an intuitive experience. There’s many steps in this process including doing user research and creating personas, mapping flows and information architecture. This will lead us to wireframes and prototypes that we’ll test with target users to ensure that all the requirements have been met. Only then will we design the final interactions and visuals.');
          // $('#head').text('Design');
          // $('#mark3').addClass('current');
    return false;
});

$('#mark4').click(function(){
 $('html, body').animate({
        scrollTop: 1500
    }, 500);
          //  clearClass();
          //  $('.tree-all').attr("src",'images/icons/4.png');
          //  $('#content').text('We use the agile methodology to develop your website or app. This allows us to deliver value to you fast, and as your project evolves it’s an efficient way to manage changes. We’ll also show you the work as it’s ready, which means you’ve got transparency and assurance that we’re on track and delivering what you need.');
          // $('#head').text('Build');
          // $('#mark4').addClass('current');
    return false;
});

$('#mark5').click(function(){
 $('html, body').animate({
        scrollTop: 1800
    }, 500);
          //  clearClass();
          //  $('.tree-all').attr("src",'images/icons/5.png');
          //  $('#content').text('We have a rigorous testing process which is a combination of human and machine based testing. We root out & fix bugs, fine-tune performance, and optimise the experience. Depending upon the nature of your project, we test up to 800 parameters.');
          // $('#head').text('Test');
          // $('#mark5').addClass('current');
    return false;
});

$('#mark6').click(function(){
 $('html, body').animate({
        scrollTop: 2100
    }, 500);
          //  clearClass();
          //  $('.tree-all').attr("src",'images/icons/6.png');
          //  $('#content').text('It’s time to cut the virtual ribbon on your digital doors. We deploy your project and assist you in monitoring it in the live environment. We’ll also have a full debrief with you and ensure you’re happy with our work. And if you need future assistance as your business develops, we’d love to work with you again.');
          // $('#head').text('Release');
          // $('#mark6').addClass('current');
    return false;
});



function clearClass(){
  $('#mark1').removeClass('current');
  $('#mark2').removeClass('current');
  $('#mark3').removeClass('current');
  $('#mark4').removeClass('current');
  $('#mark5').removeClass('current');
  $('#mark6').removeClass('current');
}

$(function(){
 var shrinkHeader = 300;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           // $('.fi').addClass('shrink');
           $('.tree-all').addClass('newAnimation');
           $('.tree-content').addClass('newAnimation');
        }

         if( scroll >= 300 && scroll >= 600 ) {
          clearClass();
          $('.tree-all').attr("src",'images/icons/1.png');
          $('#content').text('For us, listening to you is the most important step. We want to be certain that we understand your key requirements, what victory feels like and the parts of the project where there’s room for us to be creative. This way we’ll be able to give you a sound estimate for the project cost. At the kick-off meeting we’ll dive deep into the investigation (coffees in hand!) and agree a set of expectations and milestones.');
          $('#head').text('Listen');
          $('#mark1').addClass('current');

        }

        if( scroll >= 601 && scroll >= 900 ) {
          clearClass();
          $('.tree-all').attr("src",'images/icons/2.png');
           $('#content').text('Before we jump into designing anything, we’ll take a step back and try to envision the wider context of your project. We call this the “research & reflect” phase. We will review the landscape of your business or idea to see what others have achieved. This ensures our implementation is creative and original.');
          $('#head').text('Think');
          $('#mark2').addClass('current');
        }

        if( scroll >= 901 && scroll >= 1200 ) {
          clearClass();
          $('.tree-all').attr("src",'images/icons/3.png');
           $('#content').text('This is an iterative process with you where we give user empathy the utmost importance in order to achieve an intuitive experience. There’s many steps in this process including doing user research and creating personas, mapping flows and information architecture. This will lead us to wireframes and prototypes that we’ll test with target users to ensure that all the requirements have been met.');
          $('#head').text('Design');
          $('#mark3').addClass('current');
        }
         if( scroll >= 1201 && scroll >= 1500 ) {
          clearClass();
          $('.tree-all').attr("src",'images/icons/4.png');
           $('#content').text('We use the agile methodology to develop your website or app. This allows us to deliver value to you fast, and as your project evolves it’s an efficient way to manage changes. We’ll also show you the work as it’s ready, which means you’ve got transparency and assurance that we’re on track and delivering what you need.');
          $('#head').text('Build');
          $('#mark4').addClass('current');
        }
        if( scroll >= 1501 && scroll >= 1800 ) {
          clearClass();
           $('.tree-all').attr("src",'images/icons/5.png');
            $('#content').text('We have a rigorous testing process which is a combination of human and machine based testing. We root out & fix bugs, fine-tune performance, and optimise the experience. Depending upon the nature of your project, we test up to 800 parameters.');
          $('#head').text('Test');
          $('#mark5').addClass('current');
        }
         if( scroll >= 1801 && scroll >= 2100 ) {
          clearClass();
           $('.tree-all').attr("src",'images/icons/6.png');
            $('#content').text('It’s time to cut the virtual ribbon on your digital doors. We deploy your project and assist you in monitoring it in the live environment. We’ll also have a full debrief with you and ensure you’re happy with our work. ');
          $('#head').text('Release');
          $('#mark6').addClass('current');
        }

        else{
            $('.fi').removeClass('shrink');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});


$('#nav').affix({
  offset: {
    top: $('header').height()
  }
});


function auto_grow(element) {
  console.log("imhere");
    element.style.height = "20px";
    element.style.height = (element.scrollHeight)+"px";
}


$(document).ready(function(){


$( "#phone" ).click(function() {
  clear();
    $("#phone").addClass('liner');
     $("#phoneImage").addClass('dark');

});
$( "#web" ).click(function() {
  clear();
 $("#web").addClass('liner');
     $("#webImage").addClass('dark');
});
$( "#design" ).click(function() {
  clear();
   $("#design").addClass('liner');
     $("#designImage").addClass('dark');
});


  function clear(){
    $("#phone").removeClass('liner');
     $("#phoneImage").removeClass('dark');
     $("#web").removeClass('liner');
     $("#webImage").removeClass('dark');
      $("#design").removeClass('liner');
     $("#designImage").removeClass('dark');
  }
/**
 * This object controls the nav bar. Implement the add and remove
 * action over the elements of the nav bar that we want to change.
 *
 * @type {{flagAdd: boolean, elements: string[], add: Function, remove: Function}}
 */
var myNavBar = {

    flagAdd: true,

    elements: [],

    init: function (elements) {
        this.elements = elements;
    },

    add : function() {
        if(this.flagAdd) {
            for(var i=0; i < this.elements.length; i++) {
                document.getElementById(this.elements[i]).className += " fixed-theme";
            }
            this.flagAdd = false;
        }
    },

    remove: function() {
        for(var i=0; i < this.elements.length; i++) {
            document.getElementById(this.elements[i]).className =
                    document.getElementById(this.elements[i]).className.replace( /(?:^|\s)fixed-theme(?!\S)/g , '' );
        }
        this.flagAdd = true;
    }

};

/**
 * Init the object. Pass the object the array of elements
 * that we want to change when the scroll goes down
 */
myNavBar.init(  [
    "header",
    "header-container",
    "brand"
]);

/**
 * Function that manage the direction
 * of the scroll
 */
function offSetManager(){

    var yOffset = 0;
    var currYOffSet = window.pageYOffset;

    if(yOffset < currYOffSet) {
        myNavBar.add();
    }
    else if(currYOffSet == yOffset){
        myNavBar.remove();
    }

}

/**
 * bind to the document scroll detection
 */
window.onscroll = function(e) {
    offSetManager();

}

/**
 * We have to do a first detectation of offset because the page
 * could be load with scroll down set.
 */
offSetManager();
});


$(window).scroll(function() {

 if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        document.getElementById("topButton").style.display = "block";
    } else {
        document.getElementById("topButton").style.display = "none";
    }

    if ($(".navbar").offset().top > 50) {
       var selected = 'small-logo';

        $('#custom-nav').addClass('affix');
        $(".navbar-fixed-top").addClass("top-nav-collapse");

        $('.navbar-brand img').attr('src','images/icons/small-logo.png'); //change src
    } else {
      var selected = 'logo';


        $('#custom-nav').removeClass('affix');
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $('.navbar-brand img').attr('src','images/icons/logo.png');
    }
});


function topFunction() {
   $("html, body").animate({ scrollTop: 0 }, "slow");
}
</script>
</html>
