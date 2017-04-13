<?php
$nav = 1;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>TreeStack - App & Web Development Agency </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
 -->  <!-- stylesheets -->
<?php include 'meta.php';?>

  <!-- javascript -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>
  <script src="js/theme.js"></script>
  <script src="js/onscreen.js"></script>

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


  </head>
  <body>

<?php
  include 'header.php';
?>



<button onclick="topFunction()" id="topButton" title="Go to top"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></button>


<div id="container">
  <div class="back-video" >

  <video class="back-video hidden-sm hidden-xs" autoplay="autoplay" loop muted>
    <source src="video/TreeStack.mp4" type="video/mp4">
   </video>
  <div class="back-img hidden-md hidden-lg">
  </div>
 </div>
   <div class="content">
    <div class="container">
      <h1 class="hero-text  animated fadeInDownBig">WE CREATE<br />BEAUTIFUL<br />THINGS</h1>


      <span class="scroll-btn">
        <a href="#">
          <span class="mouse">
            <span>
            </span>
          </span>
        </a>


      </span>
     <!--  <div class='message-box' id="who" >
        <img src="images/icons/three-dots.png">
        <h2 class="title-text" >Who are we?</h2>

         <p class="text-left gray-matter">We are passionate mobile app & web development agency that combine thoughtful design with technical excellence</p>
      </div> -->

    </div>
  </div>


</div>



<div class="features-section ">
  <div class="container ">
      <div class='card mt-1' id="who">
       <img src="images/icons/three-dots.jpg">
      <h2 class="title-text ">Who are we?</h2>
 <p class="text-left gray-matter">We are passionate mobile app & web development agency that combine thoughtful design with technical excellence</p>

</div>
    <div class='card mt-1'>
       <img src="images/icons/three-dots.jpg">
      <h2 class="title-text ">What we do?</h2>
      <div class="row margin100">
       <div class="col-md-7 feature-text" id="mobText">
        <h2 class="text-left light"> Mobile Applications</h2>
        <p class="text-left gray-matter">We create rich, functional experiences inside our client’s apps. In the crowded world of apps we know that success is about focusing on designing apps that wow and keep your users coming  back.</p>
      </div>

      <div class="col-md-5" id="mobImage">
       <img src="images/icons/mobile.gif" class="feature-icon ">

     </div>
   </div>
   <div class="row margin100 ">
    <div class="col-md-5 hidden-sm hidden-xs" id="webImage">
     <img src="images/icons/web.gif" class="feature-icon">

   </div>

   <div class="col-md-7 feature-text" id="webText">
    <h2 class="text-right light"> Web Development</h2>
    <p class=" text-right gray-matter">We create rich, functional experiences inside our client’s apps. In the crowded world of apps we know that success is about focusing on designing apps that wow and keep your users coming  back.</p>
  </div>
   <div class="col-md-5 hidden-md hidden-lg" id="webImage">
     <img src="images/icons/web.gif" class="feature-icon">

   </div>
</div>
<div class="row margin100 ">
  <div class="col-md-7 feature-text" id="desText">
     <h2 class="light text-left">Strategy & Design</h2>
    <p class="text-left gray-matter ">We create rich, functional experiences inside our client’s apps. In the crowded world of apps we know that success is about focusing on designing apps that wow and keep your users coming  back.</p>
  </div>

  <div class="col-md-5" id="dsImage">
   <img src="images/icons/strategy.gif" class="feature-icon hor">
   <br/>
 </div>
</div>
</div>
</div>
 <div class="container">
<div class='card big-card'>
   <img src="images/icons/three-dots.jpg">
  <h2 class="title-text">Why work with us?</h2>
  <div class="row">
   <div class="col-md-12" >


<!--     Add carousal
 -->
<div id="myCarousel" class="carousel fade tree" data-ride="carousel"  >
  <!-- Indicators -->
  <div class="controls-div">
    <a class="left carousel-new" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-new" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <!-- Wrapper for slides -->

  <div class="carousel-inner r10" role="listbox">

    <div class="item active">

      <div class="carousel-caption  two">
        <h2 class="light ">User Centric Solutions</h2>

        <p class="gray-matter">Our process is rooted in the principles of human-centered design so the finished project truly delivers the results you need</p>
      </div>
    </div>

    <div class="item">

      <div class="carousel-caption  two">
        <h2 class="light ">Experiences That Wow</h2>
        <p class="gray-matter"> We care deeply about creating a natural, beautiful, and intuitive experience so your users or visitors keep on returning</p>
      </div>
    </div>

    <div class="item">

      <div class="carousel-caption  two">
        <h2 class="light ">Build For Tomorrow</h2>
        <p class="gray-matter">We only create forward thinking solutions so your app or site delivers long-term ROI</p>
      </div>
    </div>


  </div>

<!-- <div class="dotstyle dotstyle-fillup hidden-lg hidden-md " >
  <ul>
    <li class="current"><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Products</a></li>

  </ul>
</div> -->

</div>





   </div>
   <!-- Left and right controls -->

 </div>
</div>
</div>


<div class="container-fluid margin40 pback" >
   <img src="images/icons/quote-left.png" class="quote-left">
<div id="testimonials" class="carousel fade " data-ride="carousel"  >
  <!-- Indicators -->

  <!-- Wrapper for slides -->

  <div class="carousel-inner testimonials" role="listbox">
    <div class="item active">

      <div class="carousel-caption">
        <p class="testimony"><i>Our process is rooted in the principles of human-centered design so the finished project truly delivers the results you need</i></p>
          <p class="testimony pull-right"><i> - Walter White</i></p>
      </div>
    </div>
    <div class="item ">

      <div class="carousel-caption">
        <p class="testimony"><i>Our process is rooted in the principles of human-centered design so the finished project truly delivers the results you need</i></p>
          <p class="testimony pull-right"><i> - Walter White</i></p>
      </div>
    </div>
    <div class="item ">

      <div class="carousel-caption">
        <p class="testimony"><i>Our process is rooted in the principles of human-centered design so the finished project truly delivers the results you need</i></p>
          <p class="testimony pull-right"><i> - Walter White</i></p>
      </div>
    </div>
  </div>
  <img src="images/icons/quote-right.png" class="quote-right pull-right">


</div>

</div>


<div class="mapView">
  <div class="container-fluid" style="padding:0px;margin:0px;">
    <div class="row" style="padding:0px;margin:0px;">
      <div class="col-xs-6">
        <div class="uk">
          <p class="address text-center"> London <br/>- - - - - <br/>UK</p>
         </div>
      </div>
      <div class="col-xs-6">
         <div class="ind">
          <p class="address text-center"> Bangalore <br/>- - - - - - - - - <br/>IND</p>
         </div>
      </div>
    </div>
  </div>


 <div class="container mobT" id="talk">
   <div class='card pattern' >

       <img src="images/icons/three-dots.png">
      <h3 class="title-text">Ready to start?</h3>

   <div class="row">
    <div class="col-md-12 margin40">

   <a href="talk.php" class=" btn purple-button btn-lg center-block" role="button">Let's Talk</a>
   </div>
</div>

</div>
  </div>
</div>

  <?php include 'footer.php'
  ?>




</body>




<script>
$('#nav').affix({
  offset: {
    top: $('header').height()
  }
});

$(document).ready(function(){



// Animate who div
$('#who').css('opacity', 0);
$('#who').onScreen({
   container: window,
   direction: 'vertical',
   doIn: function() {
    $('#who').addClass('animated fadeInLeft');
   },
   doOut: function() {
     // Do something to the matched elements as they get off scren
   },
   tolerance: 0,
   throttle: 50,
   toggleClass: 'onScreen',
   lazyAttr: null,
   debug: false
});



$('#who').css('opacity', 0);
$('#who').onScreen({
   container: window,
   direction: 'vertical',
   doIn: function() {
    $('#who').addClass('animated fadeInLeft');
   },
   doOut: function() {
     // Do something to the matched elements as they get off scren
   },
   tolerance: 0,
   throttle: 50,
   toggleClass: 'onScreen',
   lazyAttr: null,
   debug: false
});

$('#talk').css('opacity', 0);
$('#talk').onScreen({
   container: window,
   direction: 'vertical',
   doIn: function() {
    $('#talk').addClass('animated fadeInLeft');
   },
   doOut: function() {
     // Do something to the matched elements as they get off scren
   },
   tolerance: 0,
   throttle: 50,
   toggleClass: 'onScreen',
   lazyAttr: null,
   debug: false
});

$('#mobText').css('opacity', 0);
$('#mobText').onScreen({container: window,direction: 'vertical',doIn: function() {$('#mobText').addClass('animated fadeInLeft');},});

$('#mobImage').css('opacity', 0);
$('#mobImage').onScreen({container: window,direction: 'vertical',doIn: function() {$('#mobImage').addClass('animated fadeInRight');},});


$('#webText').css('opacity', 0);
$('#webText').onScreen({container: window,direction: 'vertical',doIn: function() {$('#webText').addClass('animated fadeInRight');},});

$('#webImage').css('opacity', 0);
$('#webImage').onScreen({container: window,direction: 'vertical',doIn: function() {$('#webImage').addClass('animated fadeInLeft');},});

$('#desText').css('opacity', 0);
$('#desText').onScreen({container: window,direction: 'vertical',doIn: function() {$('#desText').addClass('animated fadeInLeft');},});

$('#desImage').css('opacity', 0);
$('#desImage').onScreen({container: window,direction: 'vertical',doIn: function() {$('#desImage').addClass('animated fadeInRight');},});

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


offSetManager();
});


$(window).scroll(function() {


   if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
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





// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("topButton").style.display = "block";
    } else {
        document.getElementById("topButton").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
   $("html, body").animate({ scrollTop: 0 }, "slow");
}

// $("#vehicle").change(function(){
//     var selected = $(this).val();
//     var image = $("#selectedVehicle");
//     image.fadeOut('fast', function () {
//         image.attr('src', '/assets/images/mini/'+selected+'.png');
//         image.fadeIn('fast');
//     });
// });

// function init() {
//     window.addEventListener('scroll', function(e){
//         var distanceY = window.pageYOffset || document.documentElement.scrollTop,
//             shrinkOn = 300,
//             header = document.querySelector("logo");
//         if (distanceY > shrinkOn) {
//             classie.add(header,"smaller")
//         } else {
//             if (classie.has(header,"smaller")) {
//                 classie.remove(header,"smaller");
//             }
//         }
//     });
// }
// window.onload = init();
</script>
</html>
