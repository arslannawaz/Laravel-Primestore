<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Primestore | </title>

    {!! Html::style('../theme/vendors/bootstrap/dist/css/bootstrap.min.css') !!}
    {!! Html::style('../theme/vendors/nprogress/nprogress.css') !!}
    {!! Html::style('../theme/vendors/font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style('../theme/vendors/iCheck/skins/flat/green.css') !!}
    {!! Html::style('../theme/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') !!}
    {!! Html::style('../theme/vendors/jqvmap/dist/jqvmap.min.css') !!}
    {!! Html::style('../theme/vendors/bootstrap-daterangepicker/daterangepicker.css') !!}
    {!! Html::style('../theme/build/css/custom.min.css') !!}

    {!! Html::style('../theme/vendors/starrr/dist/starrr.css') !!}
    {!! Html::style('../theme/vendors/switchery/dist/switchery.min.css') !!}
    {!! Html::style('../theme/vendors/select2/dist/css/select2.min.css') !!}
    {!! Html::style('../theme/vendors/google-code-prettify/bin/prettify.min.css') !!}


    {!! Html::style('../theme/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') !!}
    {!! Html::style('../theme/vendors/pnotify/dist/pnotify.css') !!}
    {!! Html::style('../theme/vendors/pnotify/dist/pnotify.buttons.css') !!}
    {!! Html::style('../theme/vendors/pnotify/dist/pnotify.nonblock.css') !!}
    <style src="{{asset('css/app.css')}}"></style>

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="" class="site_title"><i class="fa fa-paw"></i> <span>Seller</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{\Illuminate\Support\Facades\Auth::user()->name}}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Product <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('seller.product.index')}}">Products</a></li>
                                    <li><a href="{{route('seller.product.create')}}">Add Product</a></li>

                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="form.html">General Form</a></li>
                                    <li><a href="form_advanced.html">Advanced Components</a></li>
                                    <li><a href="form_validation.html">Form Validation</a></li>
                                    <li><a href="form_wizards.html">Form Wizard</a></li>
                                    <li><a href="form_upload.html">Form Upload</a></li>
                                    <li><a href="form_buttons.html">Form Buttons</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="general_elements.html">General Elements</a></li>
                                    <li><a href="media_gallery.html">Media Gallery</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="glyphicons.html">Glyphicons</a></li>
                                    <li><a href="widgets.html">Widgets</a></li>
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="inbox.html">Inbox</a></li>
                                    <li><a href="calendar.html">Calendar</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="tables.html">Tables</a></li>
                                    <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="chartjs.html">Chart JS</a></li>
                                    <li><a href="chartjs2.html">Chart JS2</a></li>
                                    <li><a href="morisjs.html">Moris JS</a></li>
                                    <li><a href="echarts.html">ECharts</a></li>
                                    <li><a href="other_charts.html">Other Charts</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                                    <li><a href="fixed_footer.html">Fixed Footer</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>Live On</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="e_commerce.html">E-commerce</a></li>
                                    <li><a href="projects.html">Projects</a></li>
                                    <li><a href="project_detail.html">Project Detail</a></li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="page_403.html">403 Error</a></li>
                                    <li><a href="page_404.html">404 Error</a></li>
                                    <li><a href="page_500.html">500 Error</a></li>
                                    <li><a href="plain_page.html">Plain Page</a></li>
                                    <li><a href="login.html">Login Page</a></li>
                                    <li><a href="pricing_tables.html">Pricing Tables</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#level1_1">Level One</a>
                                    <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                                            </li>
                                            <li><a href="#level2_1">Level Two</a>
                                            </li>
                                            <li><a href="#level2_2">Level Two</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#level1_2">Level One</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="images/img.jpg" alt="">{{\Illuminate\Support\Facades\Auth::user()->name}}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li>
                                    <a  class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out pull-right"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
           {{-- <div class="row tile_count">
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                    <div class="count">2500</div>
                    <span class="count_bottom"><i class="green">4% </i> From last Week</span>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
                    <div class="count">123.50</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
                    <div class="count green">2,500</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
                    <div class="count">4,567</div>
                    <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
                    <div class="count">2,315</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                    <div class="count">7,325</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                </div>
            </div>--}}
            <!-- /top tiles -->

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="dashboard_graph">

                        <div class="row x_title">
                            <div class="col-md-6">
                                @yield('content-head')
                            </div>
                            <div class="col-md-6">
                                <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                        @yield('content')
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <br /><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


    <div class="col-md-8 col-sm-8 col-xs-12">

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

{!!Html::script('../theme/vendors/jquery/dist/jquery.min.js')!!}
{!!Html::script('../theme/vendors/bootstrap/dist/js/bootstrap.min.js')!!}
{!!Html::script('../theme/vendors/fastclick/lib/fastclick.js')!!}
{!!Html::script('../theme/vendors/nprogress/nprogress.js')!!}
{!!Html::script('../theme/vendors/Chart.js/dist/Chart.min.js')!!}
{!!Html::script('../theme/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')!!}
{!!Html::script('../theme/vendors/iCheck/icheck.min.js')!!}
{!!Html::script('../theme/vendors/skycons/skycons.js')!!}
{!!Html::script('../theme/vendors/Flot/jquery.flot.js')!!}
{!!Html::script('../theme/vendors/Flot/jquery.flot.pie.js')!!}
{!!Html::script('../theme/vendors/Flot/jquery.flot.time.js')!!}
{!!Html::script('../theme/vendors/Flot/jquery.flot.stack.js')!!}
{!!Html::script('../theme/vendors/Flot/jquery.flot.resize.js')!!}
{!!Html::script('../theme/vendors/flot.orderbars/js/jquery.flot.orderBars.js')!!}
{!!Html::script('../theme/vendors/flot-spline/js/jquery.flot.spline.min.js')!!}
{!!Html::script('../theme/vendors/flot.curvedlines/curvedLines.js')!!}
{!!Html::script('../theme/vendors/')!!}
{!!Html::script('../theme/vendors/jqvmap/dist/jquery.vmap.js')!!}
{!!Html::script('../theme/vendors/jqvmap/dist/maps/jquery.vmap.world.js')!!}
{!!Html::script('../theme/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')!!}
{!!Html::script('../theme/vendors/jmoment/min/moment.min.js')!!}
{!!Html::script('../theme/vendors/bootstrap-daterangepicker/daterangepicker.js')!!}
{!!Html::script('../theme/build/js/custom.min.js')!!}

{!!Html::script('../theme/vendors/starrr/dist/starrr.js')!!}
{!!Html::script('../theme/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')!!}
{!!Html::script('../theme/vendors/autosize/dist/autosize.min.js')!!}
{!!Html::script('../theme/vendors/select2/dist/js/select2.full.min.js')!!}
{!!Html::script('../theme/vendors/switchery/dist/switchery.min.js')!!}
{!!Html::script('../theme/vendors/jquery.tagsinput/src/jquery.tagsinput.js')!!}
{!!Html::script('../theme/vendors/google-code-prettify/src/prettify.js')!!}
{!!Html::script('../theme/vendors/jquery.hotkeys/jquery.hotkeys.js')!!}
{!!Html::script('../theme/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')!!}

{!!Html::script('../theme/vendors/validator/validator.js')!!}

{!!Html::script('../theme/vendors/pnotify/dist/pnotify.js')!!}
{!!Html::script('../theme/vendors/pnotify/dist/pnotify.buttons.js')!!}
{!!Html::script('../theme/vendors/pnotify/dist/pnotify.nonblock.js')!!}

<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
