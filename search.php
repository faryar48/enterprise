<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Search</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->

    <link rel="stylesheet" href="css/search.css">


    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/rd-smoothscroll.min.js"></script> 

    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
  </head>
  <body>
  <div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
    
<header class="head1">
        <div id="stuck_container" class="stuck_container">
            <nav class="navbar navbar-default navbar-static-top ">
                <div class="container">
                    <div class="navbar-header">
                        <h1 class="navbar-brand">
                            <span>E</span>nterprise <span>C</span>onstruction <span>I</span>nc.
                        </h1>
                    </div>

                    <ul class="navbar-nav sf-menu navbar-right" data-type="navbar">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="sub-contracting.html">Sub-Contracting</a>
                        </li>
                        <li>
                            <a href="FAQ.html">FAQ</a>
                        </li>
                        <li>
                            <a href="jobs.html">Jobs</a>
                        </li>
                        <li>
                            <a href="https://enterpriseconst.remotewebaccess.com">Employee Sign In</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <section>
                <div class="container">
                    <div class="sform">
                        <a class="search-form_toggle" href="#"></a>

                        <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
                            <label class="search-form_label">
                                <input class="search-form_input" type="text" name="s" autocomplete="off"
                                       placeholder="Search"/>
                                <span class="search-form_liveout"></span>
                            </label>
                            <button class="search-form_submit fa-search" type="submit"></button>
                        </form>
                    </div>
                </div>
            </section>

        </div>

    </header>

  <!--========================================================
                            CONTENT
  =========================================================-->
  <main>
    <section id="content" class="content well">
        <div class="container">
            <h3>Search Results</h3>
            <div id="search-results"></div>
        </div>
    </section>
  </main>  

  <!--========================================================
                            FOOTER
  =========================================================-->
  <footer>
      <section  class="well_foot-2">
          <div class="container">
              <div class="rights">
                  <h1><span>E</span>nterprise <span>C</span>onstruction <span>I</span>nc.</h1> &#169; <span id="copyright-year"></span>&nbsp;
              </div>
          </div>
      </section>
  </footer>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->         
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tm-scripts.js"></script>    
  <!-- </script> -->


  </body>
</html>
