<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="image float-left">
                <img src="/images/user2-160x160.jpg" class="rounded" alt="User Image">
            </div>
            <div class="info float-left">
                <p>   {{$user->name}} </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="{{ route('firm.dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>My Profile</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/widgets/widgets.html"><i class="fa fa-circle-o"></i> Settings</a></li>
                    <li><a href="pages/widgets/weather.html"><i class="fa fa-circle-o"></i> Logout</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>Accounting Firm</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('basedata')}}"><i class="fa fa-circle-o"></i> Base Data</a></li>
                    <li><a href="pages/widgets/weather.html"><i class="fa fa-circle-o"></i> Employee</a></li>
                    <li><a href="pages/widgets/weather.html"><i class="fa fa-circle-o"></i> Accounting</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Customer</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Customer 1
                            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Company Profile</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Employee</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Customer</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Suppliers</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Products/Goods</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Suppliers</a></li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Booking
                                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Income</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Outcome</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Payroll</a></li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Reports
                                    <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Income Statement</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Balance</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Resort directory</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Annual return</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Preferences
                                    <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Product category</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Document templates</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Proposal template</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Invoice template</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Reminder template</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Dcoument Archive</a></li>

                        </ul>
                    </li>
                </ul>

        </ul>
    </section>
    <!-- /.sidebar -->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cog fa-spin"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope"></i></a>
        <!-- item-->
        <a class="link" data-toggle="tooltip" title="" data-original-title="Logout" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <i class="fa fa-power-off"></i>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</aside>