<?php
$nav = 1;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Lets Talk | TreeStack - App & Web Development Agency </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

 <?php include 'meta.php';?>

  <!-- javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>
  <script src="js/theme.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>
  <body ng-app="main" ng-controller="talkController">

 <?php include 'header.php';?>




<button onclick="topFunction()" id="topButton" title="Go to top"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></button>




<div class="features-section mt-10">
  <div class="container">
    <div class='card '>
       <img src="images/icons/three-dots.jpg">
      <h2 class="title-text">Let's craft a masterpiece </h2>
      <div class="row ">
       <div class="col-md-12 feature-text">

         <h3 class="sub-text">Help us to know you better</h3>
      </div>
   </div>
</div>
</div>







<div class="container" id="form">
   <div class='card mt-6'>
       <img src="images/icons/three-dots.png">
      <h3 class="title-text">A little about you & your project</h3>

   <div class="row">
   <div class="col-md-6 margin40">


    <div class="form-group">
      <input type="text" class="" id="nameInput" placeholder="Your Name" autocomplete="off" ng-model="name" ng-focus="error = false">
    </div>


    <div class="form-group margin40">
      <input type="email" class="" id="emailInput" placeholder="E-mail  address" autocomplete="off" ng-model="email" ng-pattern="emailFormat" ng-focus="error = false">
    </div>

</div>
<div class="col-md-6 margin40">
    <div class="form-group">
      <input type="text" class="" id="companyInput" placeholder="Company" autocomplete="off" ng-model="company" ng-focus="error = false">
    </div>
    <div class="form-group margin40">
      <input type="number" class="" id="phoneInput" placeholder="Phone" autocomplete="off" ng-model="phone" ng-focus="error = false">
    </div>

</div>
<div class="col-md-12 margin40">
<div class="alert  customAlert" ng-show="error">
  {{message}}
</div>
</div>
</div>

<!-- </div>
  </div>


<div class="container">
   <div class='card mt-10'> -->

   <div class="row ">
       <div class="col-xs-10 col-xs-offset-2">
        <h3 class="sub-text text-left">Select a platform for your project</h3>
       </div>
   <div class="col-xs-4 ">
    <div class="task-liner  pull-right" id="phone" ng-click="phoneSelect = !phoneSelect ; error=false;">
    <div class="task-selector">
      <img src="images/icons/task-phone.png" class="task-icon " id="phoneImage" >
    <br/>
       <h4 class="sub-text gray small">Mobile</h4>
    </div>
</div>
</div>

<div class="col-xs-4 ">
<div class="task-liner pull-center l" id="web" ng-click="webSelect = !webSelect ; error=false;">
<div class="task-selector">
      <img src="images/icons/task-web.png" class="task-icon" id="webImage" >
       <br/>
       <h4 class="sub-text gray small">Web</h4>
    </div>
</div>
</div>


<div class="col-xs-4 ">
<div class="task-liner pull-left" id="design" ng-click="designSelect = !designSelect ; error=false;">
<div class="task-selector ">
      <img src="images/icons/task-design.png" class="task-icon" id="designImage" >
        <br/>
       <h4 class="sub-text gray small">User Experience</h4>
    </div>
</div>
</div>

</div>

   <div class="row margin40">
   <div class="col-md-12  margin40">
     <div class="form-group margin40">
      <textarea type="text" class="" id="detailInput" placeholder="Brief Summary"  rows="1" onkeyup="auto_grow(this)" ng-model="detail" ng-focus="error = false"></textarea>
    </div>
</div>
  <div class="col-md-12">

<div class="alert  alert-success successAlert" ng-show="success">
  {{message}}
</div>

<!--     <button  class="btn purple-button btn-lg center-block">Let's Talk</button>
 --><a href="" class="btn  purple-button btn-lg center-block" role="button" ng-click='submit()' id="done">Let's Go</a>

   </div>

</div>

</div>
  </div>

<div class="row margin40">

</div>


  <?php include 'footer.php';?>

</body>


 <script>
         var app = angular.module('main', []);
         app.controller('talkController', function($scope, $http, $anchorScroll, $location) {

           $scope.phoneSelect = false;
           $scope.webSelect = false;
           $scope.designSelect = false;
           $scope.name = '';
           $scope.company = '';
           $scope.email = '';
           $scope.phone = '';
           $scope.detail = '';
           $scope.message = '';
           $scope.error = false;
           $scope.success = false;
           $scope.domain = '';
           $scope.emailFormat = /^[a-z]+[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/;

            $scope.submit = function(){

          console.log($scope.phoneSelect);
          console.log($scope.webSelect);
          console.log($scope.success);
          if($scope.name == '' || $scope.email == '' || $scope.phone == '' || $scope.company== ''){
            $scope.message = 'Please enter all the fields';
            $scope.error = true;
            validate();
             $('html, body').animate({
             scrollTop: $("#form").offset().top
              }, 2000);
             validate();
          }

          else{
              var domains = [];
              if( $scope.phoneSelect ){
                domains.push('Phone');
              }
              if( $scope.webSelect ){
                domains.push('Web');
              }
              if( $scope.designSelect ){
                domains.push('UX');
              }
              $scope.domain = domains.join(', ');
              postNow();
          }
        }

        function postNow(){
          $scope.message = 'Thank you for your interest. We will get in touch with you as soon as possible.';
      $scope.success = true;
       $("#done").addClass('disabled');
        $scope.$apply();
          $.post("services/contact.php", {
                    name :  $scope.name,
                    company: $scope.company,
                    email:$scope.email,
                    phone:$scope.phone,
                    domain:$scope.domain,
                    detail:$scope.detail,

  }, function(result) {

    var print = jQuery.parseJSON(result);
    if (print.status == 200) {
      console.log(print);
      $scope.message = 'Thank you for your interest. We will get in touch with you as soon as possible.';
      $scope.success = true;
      $("#done").addClass('disabled');

} else {


}
});


        }
        function validate(){
          if($scope.name == ''){
            $("#nameInput").addClass('red');
          }else{
            $("#nameInput").removeClass('red');
          }

          if($scope.email == ''){
            $("#emailInput").addClass('red');
          }else{
            $("#emailInput").removeClass('red');
          }

          if($scope.phone == ''){
            $("#phoneInput").addClass('red');
          }else{
            $("#phoneInput").removeClass('red');
          }

          if($scope.company == ''){
            $("#companyInput").addClass('red');
          }else{
            $("#companyInput").removeClass('red');
          }
        }

         });



</script>
<script>
$('#nav').affix({
  offset: {
    top: $('header').height()
  }
});


function auto_grow(element) {

    element.style.height = "20px";
    element.style.height = (element.scrollHeight)+"px";
}


$(document).ready(function(){

var phoneOn = false;
var webOn = false;
var designOn = false;


$( "#phone" ).click(function() {

    if(phoneOn){
       $("#phone").removeClass('liner');
     $("#phoneImage").removeClass('dark');
    }else{
       $("#phone").addClass('liner');
     $("#phoneImage").addClass('dark');
    }
     phoneOn = !phoneOn;


});
$( "#web" ).click(function() {

  if(webOn){
    $("#web").removeClass('liner');
     $("#webImage").removeClass('dark');
  }else{
    $("#web").addClass('liner');
     $("#webImage").addClass('dark');
  }
    webOn = !webOn;

});
$( "#design" ).click(function() {

  if(designOn){
    $("#design").removeClass('liner');
     $("#designImage").removeClass('dark');
  }else{
    $("#design").addClass('liner');
     $("#designImage").addClass('dark');
  }
  designOn = !designOn;
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
