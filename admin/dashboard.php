<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Dashboard</title>

        <!-- Bootstrap Core CSS -->
        <link  rel="stylesheet" href="assets/css/bootstrap.min.css"/>

        <!-- MetisMenu CSS -->
        <link href="assets/js/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="assets/css/sb-admin-2.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([ // use get_data_grievance_month
                    ['Month', 'Grievances'],
                    ['Jan',  1000],
                    ['Feb',  1170],
                    ['Mar',  660],
                    ['Apr',  1030],
                    ['May',  345],
                    ['Jun',  1354],
                    ['July',  543],
                    ['Aug',  3442],
                    ['Sep',  345],
                    ['Oct',  679],
                    ['Nov',  890],
                    ['Dec',  1424]
                ]);

                var data2 = google.visualization.arrayToDataTable([ // use get_data_grievance_category
                    ['Category', 'No. of grievances'],
                    ['Sanitation',     11],
                    ['Electrical',      2],
                    ['Civil',  2],
                    ['Employee related', 2],
                    ['Others',    7]
                ]);

                var options = {
                    title: 'No. of Grievances in last 12 months',
                    legend: { position: 'bottom' }
                    
                };
                var options2 = {
                    title: 'Grievance Category'
                };

                var chart = new google.visualization.LineChart(document.getElementById('line_chart'));
                var chart2 = new google.visualization.PieChart(document.getElementById('piechart'));


                chart.draw(data, options);
                chart2.draw(data2, options2);
            }

        

        </script>
        
<script></script>

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php //if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true): ?>
                <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">Admin Panel</a>
                    </div>
                    <!-- /.navbar-header -->

                    <ul class="nav navbar-top-links navbar-right">
                        <!-- /.dropdown -->

                        <!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                </li>
                                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                                </li> -->
                                <li class="divider"></li>
                                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                    </ul>
                    <!-- /.navbar-top-links -->

                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                                <li>
                                    <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                                </li>

                                <li>
                                    <a href="grievance.php"><i class="fa fa-user-circle fa-fw"></i> Grievance<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="grievance.php"><i class="fa fa-list fa-fw"></i>List all</a>
                                        </li>
                                    <!-- <li>
                                        <a href=""><i class="fa fa-plus fa-fw"></i>Add New</a>
                                    </li> -->
                                    </ul>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- /.sidebar-collapse -->
                    </div>
                    <!-- /.navbar-static-side -->
                </nav>
            <?php //endif;?>
            <!-- The End of the Header -->

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                         <div class="huge">#1</div> <!--use get_data_count_grievance -->
                                        <div>Grievance</div>
                                    </div>
                                </div>
                                
                            </div>
                            <a href="grievance.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <span class="fa fa-tasks fa-5x" ></span>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">#1</div> <!--use get_data_count_solved_grievance -->
                                        <div>Solved</div> 
                                    </div>
                                </div>
                                
                            </div>
                            <a href="grievance.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    

                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <span class="glyphicon glyphicon-file fa-5x" ></span>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">#1</div>
                                        <div>Grievances Today</div> <!--use get_data_count_today_grievance -->
                                    </div>
                                </div>
                                
                            </div>
                            <a href="grievance.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                    
                        
                    <div class="col-m-6 col-lg-6" >
                        <div id="line_chart" style="width: 70rem; height: 50rem;object-fit:cover;display:flex;"></div>
                    </div>
                        
                    <div class="col-lg-6 col-lg-6">
                        <div id="piechart" style="width: 60rem; height: 50rem;object-fit:cover;display:flex;"></div>
                    </div>
                    
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-8">


                       
                    
                    </div>
                    <!-- /.col-lg-8 -->
                    <div class="col-lg-4">

                        
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->


        <!-- Bootstrap Core JavaScript -->

        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="assets/js/metisMenu/metisMenu.min.js"></script>


        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="assets/js/sb-admin-2.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>

    </body>

    </html>