<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="animate.min.css"/>
    <script src="wow.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css">
    <title>homepage</title>
</head>
<body>
    <!--navbar-->
    <div class="nav navbar-default navbar-fixed-top wow zoomIn">
        <div class="logo">WEBSITE</div>
            <ul class="menu">
            <li><a href="home.php">Logout</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>
    <!--intro-->
    <div class="intro">
        <div class="left">
              <div class="slogan">Connect fast</div >
                <span class="bar"><span class="line1" ></span></span>
              <div class="quote">If opportunity doesn't knock, build a door.</div>
              <div class="info">We’re on a mission to provide better opportunities to the emerging talent.</div>
        </div>
        <div class="right">
            <img src="images/about.jpg" >
       </div>
    </div>
    <!--about-->
    <div id="about">
        <div class="left wow fadeInLeft" style="animation-delay:600ms">
            <img src="images/handshake.jpg" >
       </div>
       <div class="right">
        <div class="greet">Hello</div>
        <div class="webname">WEBSITE</div >
        <div class="content">We connect T&p cells to companies for better flow of communication.</div>
  </div>
    </div>
    <!--company-->
    <div class="companies wow zoomIn" style="animation-delay: 900ms">
        <div class="heading">
            Companies Connected With Us
        </div>
        <div class="logos">
                    <a href="Accenture.php"><img src="images/Accenture.png" ></a>
                    <a href="Amazon.php"><img src="images/Amazon.png" ></a>
                    <a href="cognizant.php"><img src="images/Cognizant.png" ></a>
                    <a href="hcl.php"><img src="images/HCL.png" ></a>
                    <a href="hp.php"><img src="images/HP.png" ></a>
                    <a href="infosys.php"><img src="images/Infosys.png" ></a>
                    <a href="techmahindra.php"><img src="images/Mahindra.png" ></a>
                    <a href="nvidia.php"><img src="images/Nvidia.png" ></a>
                    <a href="reliance.php"><img src="images/Reliance.png" ></a>
        </div>
        <a href="#">View more</a>
    </div>
    <!--t&p-->
    <div class="container wow zoomIn" style="animation-delay: 1200ms">
        <div class="heading">
            T&P's Connected With Us
        </div>
        <input type="radio" name="dot" id="one">
        <input type="radio" name="dot" id="two">
        <div class="main-card">
          <div class="cards">
            <div class="card">
            <a href="tpo2.php">
             <div class="content">
               <div class="img">
                <img src="images/SXCCE.png" >
               </div>
               <div class="details">
                 <div class="name">Wilson Pinto</div>
                 <div class="job">CGEC</div>
               </div>
            </a>
            </div>
            </div>
            <div class="card">
            <a href="tpo3.php">
             <div class="content">
               <div class="img">
                <img src="images/IIIT_Kota.png" >
               </div>
               <div class="details">
                 <div class="name">Akshay Gupta</div>
                 <div class="job">IIIT Kota</div>
               </div>
             </a>
             </div>
            </div>
            <div class="card">
            <a href="tpo1.php">
             <div class="content">
               <div class="img">
                <img src="images/KGEC.png" >
               </div>
               <div class="details">
                 <div class="name">Neha Pattankar</div>
                 <div class="job">KGEC</div>
               </div>
             </div>
             </a>
            </div>
          </div>
          <div class="cards">
            <div class="card">
             <div class="content">
               <div class="img">
                 <img src="images/LDCE.png" >
               </div>
               <div class="details">
                 <div class="name">Tripti Nayak</div>
                 <div class="job">LDCE</div>
               </div>
             </div>
            </div>
            <div class="card">
             <div class="content">
               <div class="img">
                 <img src="images/SXCCE.png" >
               </div>
               <div class="details">
                 <div class="name">Lian Sequeira</div>
                 <div class="job">SXCCE</div>
               </div>
             </div>
            </div>
            <div class="card">
             <div class="content">
               <div class="img">
                 <img src="images/AEC.jpg" >
               </div>
               <div class="details">
                 <div class="name">Divya Panchal</div>
                 <div class="job">AEC</div>
               </div>
             </div>
            </div>
          </div>
        </div>
        <div class="button">
          <label for="one" class=" active one"></label>
          <label for="two" class="two"></label>
        </div>
        <a href="#">View more</a>
      </div>
    <!--contact-->
    <div id="contact">
    <div class="left">
        <div>We're here</div>
        <div>Contact us for more info</div>
    </div>
    <div class="right">
        <div>Let's talk</div>
        <a href="#">nayaktripti0@gmail.com  --></a>
    </div>
</div>
<script>
     wow = new WOW({
        boxClass: "wow", 
        animateClass: "animated", 
        offset: 0, 
        mobile: true, 
        live: true, 
      });
      wow.init();

      $(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 300) {
	    $(".nav").css("background" , "black");
        $(".nav>.logo").css("color" , "white");
	  }
	  else{
		  $(".nav").css("background" , "white");  	
          $(".nav>.logo").css("color" , "white");
	  }
  })
})
</script>
</body>
</html>