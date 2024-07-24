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

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            
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
                                    <a href="#"><i class="fa fa-user-circle fa-fw"></i> Grievance<span class="fa arrow"></span></a>
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
<!-- Main container -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="page-header">Grievance</h1>
                </div>
                <div class="col-lg-6">
                    <div class="page-action-links text-right">
                        <a href="add_customer.php?operation=create" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Add new</a>
                    </div>
                </div>
            </div>
            

            <!-- Filters -->
            <!-- <div class="well text-center filter-form">
                <form class="form form-inline" action="">
                    <label for="input_search">Search</label>
                    <input type="text" class="form-control" id="input_search" name="search_string" value="">
                    <label for="input_order">Order By</label>
                    <select name="filter_col" class="form-control">
                    
                    </select>
                    <select name="order_by" class="form-control" id="input_order">
                        <option value="Asc">Desc</option>
                    </select>
                    <input type="submit" value="Go" class="btn btn-primary">
                </form>
            </div>
            <hr> -->
            <!-- //Filters -->


            <!-- <div id="export-section">
                <a href="export_customers.php"><button class="btn btn-sm btn-primary">Export to CSV <i class="glyphicon glyphicon-export"></i></button></a>
            </div> -->

            <!-- Table -->
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <!-- use get_data_grievance_list -->
                        <th width="5%">ID</th>
                        <th width="20%">Location</th>
                        <th width="20%">Issue</th>
                        <th width="20%">Status</th>
                        <th width="10%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <tr>
                        <td>#</td>
                        <td>LL1</td>
                        <td>Sanitation</td>
                        <td>Not Resolved</td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="#" class="btn btn-danger delete_btn" data-toggle="modal" data-target=""><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                    </tr>
                    
                    
                </tbody>
            </table>
            <!-- //Table -->

            <!-- Pagination -->
            <!-- //Pagination -->
        </div>
<!-- //Main container -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="assets/js/metisMenu/metisMenu.min.js"></script>




        <!-- Custom Theme JavaScript -->
        <script src="assets/js/sb-admin-2.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>

    </body>

    </html>
