<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative CV</title>
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css?ver=1.1.0" rel="stylesheet">
    <link href="./css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
    <link href="./css/main.css?ver=1.1.0" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>

    <script type="text/javascript">
     jQuery(document).ready(function ($) {
    $.fancybox({
        href: "./index.php",
        modal: true,
        scrolling : 'no',
        titleShow: false,
    });
});
    </script>


  </head>
  <body>






    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
         
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Skills</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <div class="page-content">

      <div>
            <div class="profile-page">
              <div class="wrapper">
                <div class="page-header page-header-small" filter-color="green">
                  <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg')"></div>
                  <div class="container">
                    <div class="content-center">
                      <div class="cc-profile-image"><a href="#"><img src="images/anthony.jpg" alt="Image"/></a></div>
                      <div class="h2 title"><?php echo $_POST["Fullname"]?></div>
                      <p class="category text-white">Web Developer, Graphic Designer,  Photographer</p>
                      
                    </div>
                  </div>
                  <div class="section">
                    <div class="container">
                      <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Google+"><i class="fa fa-google-plus"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="section" id="about">
              <div class="container">
                <div class="card" data-aos="fade-up" data-aos-offset="10">
                  <div class="row">
                    <div class="col-lg-6 col-md-12">
                      <div class="card-body">
                        <div class="h4 mt-0 title">About</div>
                        <p>Hello! <?php echo $_POST["Fullname"]?>. Web Developer.</p>
                        <p>Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skills and experience. <a href="https://templateflip.com/templates/creative-cv/" target="_blank">Learn More</a></p>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="card-body">
                        <div class="h4 mt-0 title">Basic Information</div>
                        <div class="row">

                          <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
                          <div class="col-sm-8"><?php echo $_POST["Age"]?></div>
                        </div>

                        <div class="row mt-3">
                          <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                          <div class="col-sm-8"><?php echo $_POST["Emailadress"]?></div>
                        </div>

                        <div class="row mt-3">
                          <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
                          <div class="col-sm-8"><?php echo $_POST["tele"]?></div>
                        </div>

                        <div class="row mt-3">
                          <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
                          <div class="col-sm-8"><?php echo $_POST["AdressHome"]?></div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

      </div>


    </div>
 



    <footer class="footer">
      <div class="container text-center"><a class="cc-facebook btn btn-link" href="#"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="#"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link" href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="#"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
      <div class="h4 title text-center"><?php echo $_POST["Fullname"]?></div>
      <div class="text-center text-muted">
        <p>&copy; Creative CV. All rights reserved.<br>Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
      </div>
    </footer>

    


    <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
    <script src="js/core/popper.min.js?ver=1.1.0"></script>
    <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
    <script src="js/now-ui-kit.js?ver=1.1.0"></script>
    <script src="js/aos.js?ver=1.1.0"></script>
    <script src="scripts/main.js?ver=1.1.0"></script>

  </body>
</html>