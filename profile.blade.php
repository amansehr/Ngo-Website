@extends('layout')
@section('title','Profile')

@section('Header')
<x-pheader/>
@endsection

@section('container')

<div id="wrapper">
<div class="clear">
<div class="slideshow-container">

<div class="mySlides fade">
  <!--<div class="numbertext">1 / 3</div>-->
  <img src="images/Container/DSC_1 (4).jpg" style="width:100%">
  <!--<div class="text">Caption Text</div>-->
</div>

<div class="mySlides fade">
  <!--<div class="numbertext">2 / 3</div>-->
  <img src="images/Container/DSC_1 (3).jpg" style="width:100%">
  <!--<div class="text">Caption Two</div>-->
</div>

<div class="mySlides fade">
  <!--<div class="numbertext">3 / 3</div>-->
  <img src="images/Container/DSC_1 (2).jpg" style="width:100%">
  <!--<div class="text">Caption Three</div>-->
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
<div class="clear">
</div>
<div id="wrapper">

<div class="clear">
<center>
<!--<marquee onMouseOver   hspace="200" width="700"  scrolldelay="100"><span style="font-size:14px;Color:red;"> Digital India Week</span>  launched by <span style="font-size:14px;Color:red;">  Hon'ble Prime Minister of India on 1<sup>st</sup> July, 2015 at 4:00 PM</span> .   <span style="font-size:14px;Color:red;">Webcast Link :</span> <span style="font-size:14px;Color:blue;">http://webcast.gov.in/digitalindia & www.youtube.com/PMOfficeIndia </span></marquee>
-->

<!--<marquee onMouseOver   hspace="200" width="700"  scrolldelay="100"><a href="http://nyks.nic.in//Resources/tenders.html" class="textblack" target="_blank"> <span style="font-size:14px;Color:red;">Opening of Financial Bid on 07/07/2017 for selection  of Outsourcing Agency for providing 300 Programme Coordinators </span>  </a></marquee>-->



</center>
</div>

<!--<div style="text-align:center;">
 <iframe src="constitution.htm"  width="575" height="575"  class="lnkstyle" ></iframe>


</div>-->
<div class="box-1">






<div class="box-1-map-1">
<div class="box-1-heading-1">YVCK Location in Kalirawan</div>

<div class="box-1-mapimage-1"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3479.6616713922685!2d75.57032011505159!3d29.292260682162254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3913d77a9fa9f257%3A0xf037165e11fd26bc!2sYuva%20Vikash%20Club%20Kalirawan!5e0!3m2!1sen!2sin!4v1617783071427!5m2!1sen!2sin" width="250" height="282" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
</div>
</div>


<div class="box-2">

<div class="box-2-text">
<div><a href="#" class="box-2cnt">Core Programmes</a></div>
<div ><img class="box-2-img" src="images/Container/DSC_1 (1).jpg" /></div>
</div>
<div class="box-2-text">
<div><a href="#" class="box-2cnt">Projects</a></div>
<div><img class="box-2-img" src="images/Container/DSC_1 (1).jpg" /></div>
</div>
<div class="clear"></div>

<div class="box-2-text">
<div><a href="#" class="box-2cnt">Sports</a></div>
<div ><img class="box-2-img" src="images/Container/DSC_1 (1).jpg" /></div>
</div>
<div class="box-2-text">
<div><a href="#" class="box-2cnt">COVID Activities</a></div>
<div ><img class="box-2-img" src="images/Container/DSC_1 (1).jpg" /></div>
</div></div>

<div class="box-3">


<div class="middle">

<div id="tabsection">
 <div class="box-1-heading-1"> What's New</div>
       
     
                

                

      <div style="clear:both;"></div>
      

               
        
    	<!--<script type="text/javascript">
    	    document.getElementById('right_accordian').style.width = '100%';
        </script>-->

        <!--<script type="text/javascript">

            $(document).ready(function () {
                var wow = new WOW(
                        {
                            boxClass: 'wow', // animated element css class (default is wow)
                            animateClass: 'animated', // animation css class (default is animated)
                            offset: 0, // distance to the element when triggering the animation (default is 0)
                            mobile: true, // trigger animations on mobile devices (default is true)
                            live: true, // act on asynchronously loaded content (default is true)
                            callback: function (box) {
                                // the callback is fired every time an animation is started
                                // the argument that is passed in is the DOM node being animated
                            },
                            scrollContainer: null // optional scroll container selector, otherwise use window
                        }
                );
                wow.init();

                $('#news_custom').easyTicker({
                    direction: 'up',
                    easing: 'jswing',
                    speed: 'slow',
                    interval: 12000,
                    height: 'auto',
                    visible: 0,
                    mousePause: 1,
                    controls: {
                        up: '.up',
                        down: '.down',
                        toggle: '.toggle',
                        stopText: 'Stop !!!'
                    }
                }).data('easyTicker');

                var dd = $('#rel_site').easyTicker({
                    direction: 'up',
                    easing: 'jswing',
                    speed: 'slow',
                    interval: 4000,
                    height: 'auto',
                    visible: 1,
                    mousePause: 1,
                    controls: {
                        up: '.up',
                        down: '.down',
                        toggle: '.toggle',
                        stopText: 'Stop !!!'
                    }
                }).data('easyTicker');


            });

            document.onkeydown = function (e) {
                if (e.ctrlKey &&
                        (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {
                    return false;
                }
                else {
                    return true;
                }
            };

        </script>-->
               
</div>         


     
             

 <p  style=" background-color:white; width:auto;text-decoration:none; color:Red;  margin-top:3px; text-align:center; " 
            class="style1"> 
           
 

 
  </p> 


  	

<div class="tab_container">
   <div id="tab1" class="tab_content">
		  
          <p >  </p
  </div> 
</div>

<div id="tab2" class="tab_content">
	     
		
        
</div>
</div>
</div>
</div>

<!-----------------wrapper end------------------------>

<div class="clear"></div>
<div id="specialprogramme">



<div id="bluepatti" style="background-color:#deeff7; font-family: Arial; height: 30px;  color:blue; font-size:14px; "> &nbsp; </div>




<div id="Div6" style="background-color:#deeff7; font-family: Arial; height: 30px;  color:blue; font-size:14px; "  vertical-align="middle"   align="center" > &nbsp; </div>




<div id="photogallary-part">

<table width="100%" border="0" cellspacing="5" cellpadding="0">


<tr>
<td width="50%" valign="top"> <a href="#"> <img src="images/Container/DSC_1 (1).jpg" class="img" width="475" height="320"   /></a></td>



<td width="50%">
<a href="#"> <img src="images/Container/DSC_1 (1).jpg" class="img" width="475" height="320" /></a></td>     
</tr>

<tr>
<td width="50%" class="phototext1">Photogallery    </td>
<td width="50%" class="phototext"> Videogallery   </td>

</tr>




</table>


</div>


@endsection
@section('Foot')
<x-footer/>
@endsection
