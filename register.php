<?PHP
    session_start();
    include_once 'model/function.php';
    $user = new User();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Registrasi Device WSN</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Internet Of Things" />
        <meta name="keywords" content="iot," />
        <meta name="author" content="Anton Prafanto" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">        

        	
        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/notie.css">

      
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="signin-page">
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <?PHP
          if (isset($_REQUEST['register'])) {
              extract($_REQUEST);
             // echo $_REQUEST['emailusername'];
             $login=$user->reg_device($name,$username,$email,$passwordLogin);
             if ($login) {
                echo '<div id="signupSuccess"></div> ';
             }else{ 
               echo '<div id="signupfailed"></div>';
               // echo $emailusername;
               // echo $passwordLogin;

               }
          }
        
        ?>
        <div class="mn-content valign-wrapper">
            <main class="mn-inner container">
                <div class="valign">
                      <div class="row">
                          <div class="col s12 m6 l6 offset-l3 offset-m3">
                              <div class="card white darken-1">
                                  <div class="card-content ">
                                      <span class="card-title center">Sign In Wireless Sensor Networking (WSN)</span>
                                       <div class="row">
                                            <form class="col s12" action="<?PHP echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="POST" >
                                               <div class="input-field col s12">
                                                   <input id="name" type="text" class="validate text-capitalize" name="name" required="required"/>
                                                   <label for="name">Full Name</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="email" type="email" class="validate" name="email" required="required"/>
                                                   <label for="email">Email</label>
                                               </div>

                                               <div class="input-field col s12">
                                                   <input id="username" type="text" class="validate" name="username" required="required"/>
                                                   <label for="username">Username</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="password" type="password" class="validate" name="passwordLogin" required="required"/>
                                                   <label for="password">Password</label>
                                               </div>
                                               <div class="col s12 m6 l6">
                                                   <button name="register" class="waves-effect waves-grey btn orange ">Register Device</button>
                                               </div>
                                               <div class="col s12 m6 l6">
                                                   <a href="login.php" class="waves-effect waves-grey btn teal ">Sign</a>
                                               </div>
                                               
                                           </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                    </div>
                </div>
            </main>
        </div>
        
          <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script type="text/javascript" src="assets/js/notie.js"></script>

        <script type="text/javascript">
          $(document).ready(function(){
         
            if ($('#signupSuccess').length !==0 ) {
                $('#signupSuccess').html(notie.alert(1, 'Registration success.! login to enter admin panel' ));
            }
            if ($('#signupfailed').length !==0) {
                $('#signupfailed').html(notie.alert(2, 'Opps...! Username or email already registered. try another email or username'));
            }
          });
        </script>
        
    </body>
</html>