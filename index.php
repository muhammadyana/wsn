<?PHP
    session_start();
    include_once 'model/function.php';
    $user = new User();
    $id=$_SESSION['id'];
    if (!$user->get_session()) {
        header("location:login.php");
    }if (isset($_GET['q'])) {
        $user->user_logout();
        header("location:login.php");
    }
    $get = $user->get_data($id);
    //var_dump($get);
	//echo ucwords($get->name);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Welcome In Admin Dashboard</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
       
		<!-- Styles -->
       
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
        <link href="assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>           
        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
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
                <div class="spinner-layer spinner-teal lighten-1">
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
        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="cyan darken-1">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s4 m4">      
                            <span class="chapter-title">Wireless Sensor Networking (WSN)</span>
                        </div>
                        
                    </div>
                </nav>
            </header>
           
           
            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="assets/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p><?PHP echo ucwords($get->name)?></p>
                                <span><?PHP echo $get->email?><i class="material-icons right">arrow_drop_down</i></span>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-account-settings">
                        <ul>
                           
                            <li class="no-padding">
                                <a class="waves-effect waves-grey" href="?q"><i class="material-icons">exit_to_app</i>Sign Out</a>
                            </li>
                        </ul>
                    </div>
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding active"><a class="waves-effect waves-grey active" href="index.php"><i class="material-icons">settings_input_svideo</i>Dashboard</a></li>
                   
                   
                   <!--  <li class="no-padding"><a class="waves-effect waves-grey" href="charts.html"><i class="material-icons">trending_up</i>Charts</a></li> -->
                   
                </ul>
                <div class="footer">
                    <p class="copyright">Wireless Sensor Networking©</p>
                    
                </div>
                </div>
            </aside>
            <!-- Main page -->
            <main class="mn-inner">
                <div class="row">
                   <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-options"> </div>
                                <span class="card-title">Monitoring </span>
                                <table id="logData" class="display responsive-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID User</th>
                                            <th>Log Data</th>
                                            <th>Sensor Pir</th>
                                            <th>Sensor Gas</th>
                                            <th>Temperatur</th>
                                            <th>Human</th>
                                            
                                        </tr>
                                    </thead>
                                     <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>ID User</th>
                                            <th>Log Data</th>
                                            <th>Sensor Pir</th>
                                            <th>Sensor Gas</th>
                                            <th>Temperatur</th>
                                            <th>Human</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?PHP
                                           
                                             $user->get_user_data($id);
                                            
                                        ?>
                                    </tbody>
                                </table>
                            </div> <!-- card content -->
                        </div> <!-- card -->
                    </div> <!-- colom -->
                </div> <!-- row -->
            </main>
        </div>
        <div class="left-sidebar-hover"></div>
        
        
       <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/sweetalert/sweetalert.min.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script>
      
        
            $(document).ready(function() {
                // inisialisasi dataTables
                $('#logData').DataTable({
                    language: {
                        searchPlaceholder: 'Cari Logdata',
                        sSearch: '',
                        sLengthMenu: 'Show _MENU_',
                        sLength: 'dataTables_length',
                        oPaginate: {
                            sFirst: '<i class="material-icons">chevron_left</i>',
                            sPrevious: '<i class="material-icons">chevron_left</i>',
                            sNext: '<i class="material-icons">chevron_right</i>',
                            sLast: '<i class="material-icons">chevron_right</i>' 
                        }
                    }
                });
                $('.dataTables_length select').addClass('browser-default');
            });

        </script>
        
    </body>
</html>