<?php
    session_start();

    echo $_SESSION['user_email'];
    if(!isset($_SESSION['user_email']))
    {
        echo "<script type='text/javascript'>";
        echo "alert('You have to login first');";
        echo "window.location.href = '/pages/examples/login.php';";
        echo "</script>";
    }

    elseif(isset($_SESSION['user_email']))
    {
        ?>

        <!DOCTYPE html>
        <html>

            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>Petabytz</title>
                <!-- Tell the browser to be responsive to screen width -->
                <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
                <!-- Bootstrap 3.4.0 -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
                <!-- Font Awesome -->
                <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
                <!-- Ionicons -->
                <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
                <!-- daterange picker -->
                <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
                <!-- bootstrap datepicker -->
                <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
                <!-- iCheck for checkboxes and radio inputs -->
                <link rel="stylesheet" href="plugins/iCheck/all.css">
                <!-- Bootstrap Color Picker -->
                <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
                <!-- Bootstrap time Picker -->
                <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
                <!-- Select2 -->
                <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
                <!-- DataTables -->
                <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
                <!-- Theme style -->
                <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
                <!-- AdminLTE Skins. Choose a skin from the css/skins
                folder instead of downloading all of them to reduce the load. -->
                <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
                <!-- bootstrap wysihtml5 - text editor -->
                <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
                <!-- Google Font -->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
            </head>

            <body class="hold-transition skin-blue sidebar-mini">
                <div class="wrapper">

                    <header class="main-header">

                        <!-- Logo -->
                        <a href="index.html" class="logo">
                            <!-- mini logo for sidebar mini 50x50 pixels -->
                            <span class="logo-mini"><b>P</b>T</span>
                            <!-- logo for regular state and mobile devices -->
                            <span class="logo-lg"><b>Petabytz</b>Dashboard</span>
                        </a>

                        <!-- Header Navbar: style can be found in header.less -->
                        <nav class="navbar navbar-static-top">
                            <!-- Sidebar toggle button-->
                            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                                <span class="sr-only">Toggle navigation</span>
                            </a>
                            <!-- Navbar Right Menu -->
                            <div class="navbar-custom-menu">
                                <ul class="nav navbar-nav">
                                    <!-- User Account: style can be found in dropdown.less -->
                                    <li class="dropdown user user-menu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                            <span class="hidden-xs">Alexander Pierce</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <!-- User image -->
                                            <li class="user-header">
                                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                <p>
                                                    Alexander Pierce - Web Developer
                                                    <small>Member since Nov. 2012</small>
                                                </p>
                                            </li>
                                            <!-- Menu Body -->
                                            <li class="user-body">
                                                <div class="row">
                                                    <div class="col-xs-4 text-center">
                                                        <a href="#">Followers</a>
                                                    </div>
                                                    <div class="col-xs-4 text-center">
                                                        <a href="#">Sales</a>
                                                    </div>
                                                    <div class="col-xs-4 text-center">
                                                        <a href="#">Friends</a>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                            </li>
                                            <!-- Menu Footer-->
                                            <li class="user-footer">
                                                <div class="pull-left">
                                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                                </div>
                                                <div class="pull-right">
                                                    <a href="pages/examples/logout.php" class="btn btn-default btn-flat">Sign out</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </header>
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="main-sidebar">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                            <div class="user-panel">
                                <div class="pull-left image">
                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                </div>
                                <div class="pull-left info">
                                    <p>Alexander Pierce</p>
                                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                                </div>
                            </div>
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            <ul class="sidebar-menu" data-widget="tree">
                                <li class="header">MAIN NAVIGATION</li>
                                <li>
                                    <a href="pages/widgets.html">
                                        <i class="fa fa-th"></i> <span>Widgets</span>
                                        <span class="pull-right-container">
                                            <small class="label pull-right bg-green">new</small>
                                        </span>
                                    </a>
                                </li>

                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-laptop"></i>
                                        <span>UI Elements</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                                        <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                                        <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                                        <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                                        <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                                        <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-edit"></i> <span>Forms</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                                        <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                                        <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-table"></i> <span>Tables</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                                        <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-folder"></i> <span>Examples</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                                        <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                                        <li><a href="pages/examples/login.php"><i class="fa fa-circle-o"></i> Login</a></li>
                                        <li><a href="pages/examples/register.php"><i class="fa fa-circle-o"></i> Register</a></li>
                                        <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                                        <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                                        <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                                        <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                                        <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-share"></i> <span>Multilevel</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                                        <li class="treeview">
                                            <a href="#"><i class="fa fa-circle-o"></i> Level One
                                                <span class="pull-right-container">
                                                    <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                                            </a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                                <li class="treeview">
                                                    <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                                        <span class="pull-right-container">
                                                            <i class="fa fa-angle-left pull-right"></i>
                                                        </span>
                                                    </a>
                                                    <ul class="treeview-menu">
                                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                                    </ul>
                                </li>
                                <li class="header">System Log</li>
                                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                                <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
                                <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                            </ul>
                        </section>
                        <!-- /.sidebar -->
                    </aside>

                    <!-- Content Wrapper. Contains page content -->
                    <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <section class="content-header">
                            <h1>
                                Dashboard
                                <small>Version 2.0</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </section>

                        <!-- Content Header (Page header) -->
                        <section class="content-header">
                            <h1>
                                General Form Elements
                                <small>Preview</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                                <li><a href="#">Forms</a></li>
                                <li class="active">General Elements</li>
                            </ol>
                        </section>
                    </div>
                    <!-- /.content-wrapper -->

                    <footer class="main-footer">
                        <div class="pull-right hidden-xs">
                            <b>Version</b> 2.4.0
                        </div>
                        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights reserved.
                    </footer>

                </div>
                <!-- ./wrapper -->

                <!-- jQuery 3 -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <!-- Bootstrap 3.4.0 -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                <!-- Select2 -->
                <script src="/bower_components/select2/dist/js/select2.full.min.js"></script>
                <!-- InputMask -->
                <script src="plugins/input-mask/jquery.inputmask.js"></script>
                <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
                <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
                <!-- date-range-picker -->
                <script src="bower_components/moment/min/moment.min.js"></script>
                <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
                <!-- bootstrap datepicker -->
                <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
                <!-- bootstrap color picker -->
                <script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
                <!-- bootstrap time picker -->
                <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
                <!-- iCheck 1.0.1 -->
                <script src="plugins/iCheck/icheck.min.js"></script>
                <!-- DataTables -->
                <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
                <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
                <!-- FastClick -->
                <script src="bower_components/fastclick/lib/fastclick.js"></script>
                <!-- AdminLTE App -->
                <script src="dist/js/adminlte.min.js"></script>
                <!-- SlimScroll -->
                <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
                <!-- CK Editor -->
                <script src="bower_components/ckeditor/ckeditor.js"></script>
                <!-- Bootstrap WYSIHTML5 -->
                <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
                <!-- page script -->
                <script>
                    $(function() {
                        $('#example1').DataTable();
                        $('#example2').DataTable({
                            'paging': true,
                            'lengthChange': false,
                            'searching': false,
                            'ordering': true,
                            'info': true,
                            'autoWidth': false
                        });
                    })
                </script>
                <script>
                    $(function() {
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace('editor1');
                        //bootstrap WYSIHTML5 - text editor
                        $('.textarea').wysihtml5();
                    })
                </script>
                <script>
                    $(function() {
                        //Initialize Select2 Elements
                        $('.select2').select2();

                        //Datemask dd/mm/yyyy
                        $('#datemask').inputmask('dd/mm/yyyy', {
                            'placeholder': 'dd/mm/yyyy'
                        });
                        //Datemask2 mm/dd/yyyy
                        $('#datemask2').inputmask('mm/dd/yyyy', {
                            'placeholder': 'mm/dd/yyyy'
                        });
                        //Money Euro
                        $('[data-mask]').inputmask();

                        //Date range picker
                        $('#reservation').daterangepicker();
                        //Date range picker with time picker
                        $('#reservationtime').daterangepicker({
                            timePicker: true,
                            timePickerIncrement: 30,
                            format: 'MM/DD/YYYY h:mm A'
                        });
                        //Date range as a button
                        $('#daterange-btn').daterangepicker({
                                ranges: {
                                    'Today': [moment(), moment()],
                                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                                        'month').endOf('month')]
                                },
                                startDate: moment().subtract(29, 'days'),
                                endDate: moment()
                            },
                            function(start, end) {
                                $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                                    'MMMM D, YYYY'));
                            }
                        );

                        //Date picker
                        $('#datepicker').datepicker({
                            autoclose: true
                        });

                        //iCheck for checkbox and radio inputs
                        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                            checkboxClass: 'icheckbox_minimal-blue',
                            radioClass: 'iradio_minimal-blue'
                        });
                        //Red color scheme for iCheck
                        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                            checkboxClass: 'icheckbox_minimal-red',
                            radioClass: 'iradio_minimal-red'
                        });
                        //Flat red color scheme for iCheck
                        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                            checkboxClass: 'icheckbox_flat-green',
                            radioClass: 'iradio_flat-green'
                        });

                        //Colorpicker
                        $('.my-colorpicker1').colorpicker();
                        //color picker with addon
                        $('.my-colorpicker2').colorpicker();

                        //Timepicker
                        $('.timepicker').timepicker({
                            showInputs: false
                        });
                    })
                </script>
            </body>

        </html>

        <?php
    }
?>