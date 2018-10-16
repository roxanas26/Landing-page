<?php
  $contact = "";
if (isset($_POST['user_mail'])&& isset($_POST['user_message']) ){


  

$userName = $_POST['user_name'];
$userMail = $_POST['user_mail'];
$userMessage = $_POST['user_message'];
$message = "email: ".$userMail." \r\n".
"user: ".$userName."\r\n".
     "message: ".$userMessage;

     $headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <'.$userMail.'>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

if (strlen($userMail) <= 5 ) {
    $contact = "E-mail adress is not valid!";
 
};

if (strlen($userMessage) <= 5 ) {
$contact = "Please insert your message!";
  
};


    

if (@mail("roxana.stelea01@gmail.com", "New Message from your website", $message, $headers)) {
    $contact = "Message was sent!";
} else {
    $contact = "Your message wasn't sent. Please try again!";
}






}


?>



<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Teko|Fredericka+the+Great|Cuprum" rel="stylesheet">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Hind+Madurai" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tienne" rel="stylesheet">



    <link href="https://fonts.googleapis.com/css?family=Exo+2|Monoton" rel="stylesheet">


    <link rel="stylesheet" href="Assets/css/style.css">
    <title>Personal website</title>
</head>

<body>
    <div class="wholePage"></div>
    <div class="homeContainer">

        <div class="headerImage v-shape">

            <div class="centerPart">

                <div class="container">
                    <h2 id="dynamicTitle" class="title">


                    </h2>
                    <br>
                    <p class="description">Think of a creative digital agency like dreamy in Paris,
                        <br>turning your dreams into reality.</p>

                    <div class="socialMediaIcons">

                        <a href="facebook.com">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="twiter.com">
                            <i class="fab fa-twitter"></i>
                        </a>

                        <a href="linked.in">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="dribble.com">
                            <i class="fab fa-dribbble"></i>
                        </a>
                        <a href="behace.com">
                            <i class="fab fa-behance"></i>
                        </a>



                    </div>
                    <div class="arrowButtonContainer">
                        <a href="#Aboutme">
                            <i class="fas fa-angle-down sageataJos"></i>
                        </a>
                    </div>

                </div>


            </div>


        </div>







    </div>


    <div class="AboutMe" id="Aboutme">
        <div class="container-fluid">
            <h3 class="text-center"> About Us

            </h3>
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                    <img class="photo" src="Assets/images/computer.jpg">

                </div>
                <div class="col-xs-12 col-sm-8 col-md-5 col-lg-5">

                    <p class="text-pg2">

                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates minima deserunt fugiat vitae soluta culpa veniam nulla
                        tenetur voluptatem earum nesciunt, eius, iusto molestiae quod officiis iure corrupti unde ducimus.

                        <br>
                        <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates minima deserunt fugiat vitae
                        soluta culpa veniam nulla tenetur voluptatem earum nesciunt, eius, iusto molestiae quod officiis
                        iure corrupti unde ducimus.
                    </p>



                </div>


            </div>

        </div>


    </div>

    <svg class="left-svg cut svgGrey" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L0 10 Z"></path>
    </svg>
    <svg class="right-svg cut svgGrey" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L100 10 Z"></path>
    </svg>

    <div class="ourWork">
        <h3 class="text-center">WHAT CAN WE DO</h3>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="workContainer">
                        <i class="fas fa-desktop"></i>
                        <h5> Web Development</h5>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy
                            text.
                        </p>

                    </div>


                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">

                    <div class="workContainer">
                        <i class="fas fa-pencil-ruler"></i>
                        <h5> Branding Identity</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy
                            text.
                        </p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">

                    <div class="workContainer">
                        <i class="fas fa-paint-brush"></i>
                        <h5>Graphic Design</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy
                            text.
                        </p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">

                    <div class="workContainer">
                        <i class="fas fa-mobile-alt"></i>
                        <h5>Mobile Development</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy
                            text.
                        </p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">

                    <div class="workContainer">
                        <i class="fas fa-camera-retro"></i>
                        <h5>Photography</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy
                            text.
                        </p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">

                    <div class="workContainer">


                        <i class="far fa-sun"></i>
                        <h5>Creative Design</h5>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy
                            text.
                        </p>


                    </div>
                </div>
            </div>
        </div>
        <svg class="left-svg  svgWhite" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
                <path d="M0 100 L100 100 L0 10 Z"></path>
            </svg>
            <svg class="right-svg svgWhite" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
                <path d="M0 100 L100 100 L100 10 Z"></path>
            </svg>
    </div>


    


    <div class="containerPortofolio">
        <h3 class="text-center">Portofolio</h3>

        <div class="container">
            <div class="row">

                <div class="col-4 nopadding">
                    <div class="imgContainer">
                        <img class="photo portofolioPhoto" src="Assets/images/website.jpg">
                    </div>
                </div>

                <div class="col-4 nopadding">
                    <div class="imgContainer">
                        <img class="photo portofolioPhoto" src="Assets/images/prints.jpg">
                    </div>
                </div>

                <div class="col-4 nopadding">
                    <div class="imgContainer">
                        <img class="photo portofolioPhoto" src="Assets/images/branding.jpg">
                    </div>
                </div>

                <div class="col-4 nopadding">
                    <div class="imgContainer">
                        <img class="photo portofolioPhoto" src="Assets/images/pc.jpg">
                    </div>
                </div>


                <div class="col-4 nopadding">
                    <div class="imgContainer">
                        <img class="photo portofolioPhoto" src="Assets/images/businesscard.jpg">
                    </div>
                </div>

                <div class="col-4 nopadding">
                    <div class="imgContainer">
                        <img class="photo portofolioPhoto" src="Assets/images/site.jpg">

                    </div>
                </div>


            </div>
        </div>
    </div>



    <svg class="left-svg  svgGrey" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L0 10 Z"></path>
    </svg>
    <svg class="right-svg  svgGrey" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L100 10 Z"></path>
    </svg>








































    
    <div class="containerContact">

        <h3>GET IN TOUCH</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus porro ea debitis dolorem voluptatum, consequatur
            distinctio vero, sit voluptatibus, omnis nemo illum. Blanditiis enim officia necessitatibus? Amet commodi error
            quos! </p>

        <form action="index.php" method="post">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="user_name" class="formInput">
            </div>
            <div>
                <label for="mail">E-mail:</label>
                <input type="email" id="mail" name="user_mail" class="formInput">
            </div>
            <div>
                <label for="msg">Message:</label>
                <textarea id="msg" name="user_message"></textarea>
            </div>
            <p class="contactStatus"> <?php echo $contact;   ?></p>
            <br> <br>
            <div class="button">
                <button class="contactButton" type="submit">SEND YOUR MESSAGE</button>

               
            
            </div>
        </form>

        
    </div>



    
   

    <div class="containerCopyright">
            <div class="socialMediaIcons">

                    <a href="facebook.com">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="twiter.com">
                        <i class="fab fa-twitter"></i>
                    </a>

                    <a href="linked.in">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="dribble.com">
                        <i class="fab fa-dribbble"></i>
                    </a>
                    <a href="behace.com">
                        <i class="fab fa-behance"></i>
                    </a>
                </div>

<br>
        <p class="copyrightP text-center">Copyright &copy;2018, All rights Reserved.  <br>Created by Roxana</p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/1.0.0/typewriter.js"></script>
<script>
    var app = document.getElementById('dynamicTitle');
    var typewriter = new Typewriter(app, { loop: true });
      typewriter.typeString('We\'re Dynamic')
      .pauseFor(1000)
      .deleteChars(7)
      .typeString('Creative')
      .pauseFor(1000)
    
      .start();
  </script>
  
<script>
 

$('.wholePage').fadeOut(10);


</script>
   

</body>

</html>