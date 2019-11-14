<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Speed Journey</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- styles -->
  <link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.css">
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-theme.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/slippry.css">
  <link href="assets/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/color/default.css">

  <!-- =======================================================
    Theme Name: Groovin
    Theme URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <script src="assets/js/modernizr.custom.js"></script>
</head>

<body>
  <header>

    <div id="navigation" class="navbar navbar-inverse navbar-fixed-top default" role="navigation">
      <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Speed Journey</a>
        </div>

        <div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <nav>
              <ul class="nav navbar-nav navbar-right">
                <li class="current"><a href="index.html#intro">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="index.html#about">About</a></li>
                <li><a href="index.html#works">Works</a></li>
                <li><a href="index.html#join">Join</a></li>
                <li><a href="index.html#contact">Contact</a></li>
              </ul>
            </nav>
          </div>
          <!-- /.navbar-collapse -->
        </div>

      </div>
    </div>

  </header>

  <section class="section gray">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>Login</span></h3>
          </div>
          <div class="sub-heading">
            <p>
        <?php
        require_once 'classes/user.php';

        $user = new users;

        // login user
        if (isset($_POST['login'])) {

          $username = $_POST['username'];
          $pass = $_POST['password'];
          $id = $user->user_login($username, $pass);
          if ($id) {
            header('location: user_post.php');
          } else {
            echo "<center><h4><strong>Incorrect user and password</strong></h4></center>";
          }
        }
        ?>
              Please enter your username and password. <br>
              If you have no account, please <a href="index.html#subscribe"><strong>creat</strong></a> it first.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
          <form action="" method="post">
            <div class="form-group">
              <input type="text" name="username" class="form-control" placeholder="Username">
              <br>
              <input type="password" name="password" placeholder="Password" class="form-control">
              <br>
              <div class="text-center">
                <button type="submit" name="login" class="btn btn-theme">Login</button>
              </div>
            </div>
          </form>

        </div>


      </div>
    </div>
    </div>
  </section>



  <!-- end section contact -->
  <footer>
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aligncenter">
              <ul class="social-network social-circle">
                <li><a href="https://feedly.com/i/welcome" target="_blank" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                <li><a href="https://www.facebook.com/" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/?lang=en" class="icoTwitter" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://plus.google.com/discover" class="icoGoogle" target="_blank" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://www.linkedin.com/login" class="icoLinkedin" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="aligncenter">
              <p>
                &copy; Speed Journey
              </p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Groovin
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x"></i></a>
  <!-- javascript -->
  <script src="assets/js/jquery-1.9.1.min.js"></script>
  <script src="assets/js/jquery.easing.js"></script>
  <script src="assets/js/classie.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/slippry.min.js"></script>
  <script src="assets/js/nagging-menu.js"></script>
  <script src="assets/js/jquery.nav.js"></script>
  <script src="assets/js/jquery.scrollTo.js"></script>
  <script src="assets/js/jquery.fancybox.pack.js"></script>
  <script src="assets/js/jquery.fancybox-media.js"></script>
  <script src="assets/js/masonry.pkgd.min.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/jquery.nicescroll.min.js"></script>
  <script src="assets/js/AnimOnScroll.js"></script>
  <script>
    new AnimOnScroll(document.getElementById('grid'), {
      minDuration: 0.4,
      maxDuration: 0.7,
      viewportFactor: 0.2
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#slippry-slider').slippry(
        defaults = {
          transition: 'vertical',
          useCSS: true,
          speed: 5000,
          pause: 3000,
          initSingle: false,
          auto: true,
          preload: 'visible',
          pager: false,
        }
      )
    });
  </script>

  <script src="assets/js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>