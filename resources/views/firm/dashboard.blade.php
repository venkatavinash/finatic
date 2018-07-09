@extends('layouts.firmapp')

@section('content')

    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-xl-3 col-md-6 col">
            <div class="info-box bg-blue">
                <span class="info-box-icon push-bottom"><i class="ion ion-ios-pricetag-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">New Clients</span>
                    <span class="info-box-number">450</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 45%"></div>
                    </div>
                    <span class="progress-description">
                    45% Increase in 28 Days
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col">
            <div class="info-box bg-green">
                <span class="info-box-icon push-bottom"><i class="ion ion-ios-eye-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Visits</span>
                    <span class="info-box-number">15,489</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 40%"></div>
                    </div>
                    <span class="progress-description">
                    40% Increase in 28 Days
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col">
            <div class="info-box bg-purple">
                <span class="info-box-icon push-bottom"><i class="ion ion-ios-cloud-download-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Downloads</span>
                    <span class="info-box-number">55,005</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 85%"></div>
                    </div>
                    <span class="progress-description">
                    85% Increase in 28 Days
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col">
            <div class="info-box bg-red">
                <span class="info-box-icon push-bottom"><i class="ion-ios-chatbubble-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Direct Chat</span>
                    <span class="info-box-number">13,921</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                    <span class="progress-description">
                    50% Increase in 28 Days
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-xl-8 connectedSortable">
            <!-- LINE CHART -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Products Yearly Sales</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="lineChart" style="height:327px"></canvas>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-4 connectedSortable">
            <!-- weather -->
            <div class="box bg-blue text-center">
                <div class="box-body">
                    <div class="p-5">
                        <h3 class="white">
                            <span class="font-size-30">City, </span>Country
                        </h3>
                        <p class="weather-day-date mb-30">
                            <span class="mr-5">MONDAY</span> May 11, 2017
                        </p>
                        <div class="mb-30 weather-icon">
                            <canvas class="mr-40 text-top" id="icon1" width="90" height="90"></canvas>
                            <div class="inline-block">
					  <span class="font-size-50">29°
						<span class="font-size-40">C</span>
					  </span>
                                <p class="text-left">DAY RAIN</p>
                            </div>
                        </div>
                        <div class="row no-space">
                            <div class="col-2">
                                <div>
                                    <div class="mb-10">TUE</div>
                                    <i class="wi-day-sunny font-size-30 mb-10"></i>
                                    <div>24°
                                        <span class="font-size-12">C</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div>
                                    <div class="mb-10">WED</div>
                                    <i class="wi-day-cloudy font-size-30 mb-10"></i>
                                    <div>21°
                                        <span class="font-size-12">C</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div>
                                    <div class="mb-10">THU</div>
                                    <i class="wi-day-sunny font-size-30 mb-10"></i>
                                    <div>25°
                                        <span class="font-size-12">C</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div>
                                    <div class="mb-10">FRI</div>
                                    <i class="wi-day-cloudy-gusts font-size-30 mb-10"></i>
                                    <div>20°
                                        <span class="font-size-12">C</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div>
                                    <div class="mb-10">SAT</div>
                                    <i class="wi-day-lightning font-size-30 mb-10"></i>
                                    <div>18°
                                        <span class="font-size-12">C</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div>
                                    <div class="mb-10">SUN</div>
                                    <i class="wi-day-storm-showers font-size-30 mb-10"></i>
                                    <div>14°
                                        <span class="font-size-12">C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-4 connectedSortable">
            <!-- Chat box -->
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Browser Usage</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="chart-responsive">
                                <canvas id="pieChart" height="148"></canvas>
                            </div>
                            <!-- ./chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-lg-4 col-md-12">
                            <ul class="chart-legend clearfix">
                                <li><i class="fa fa-circle-o text-purple"></i> Chrome</li>
                                <li><i class="fa fa-circle-o text-green"></i> IE</li>
                                <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
                                <li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
                                <li><i class="fa fa-circle-o text-red"></i> Opera</li>
                                <li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
                            </ul>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer no-padding">
                    <ul class="nav nav-pills d-block nav-stacked">
                        <li class="nav-item"><a class="nav-link" href="#">USA
                                <span class="pull-right text-red"><i class="fa fa-angle-up"></i> 12%</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="#">UK
                                <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Japan
                                <span class="pull-right text-purple"><i class="fa fa-angle-right"></i> 18%</span></a></li>
                    </ul>
                </div>
                <!-- /.footer -->
            </div>
            <!-- /.box (chat box) -->
        </div>
        <div class="col-xl-4">
            <!-- DIRECT CHAT DANGER -->
            <div class="box box-primary direct-chat direct-chat-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Direct Chat</h3>

                    <div class="box-tools pull-right">
                        <span data-toggle="tooltip" title="1 New Messages" class="badge bg-danger">1</span>
                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                            <i class="fa fa-comments"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages inner-content-div" id="direct-chat">
                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left">James Anderson</span>
                                <span class="direct-chat-timestamp pull-right">April 14, 2017 18:00 </span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="/images/user1-128x128.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Lorem Ipsum is simply dummy text industry.
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-right">Michael Jorden</span>
                                <span class="direct-chat-timestamp pull-left">April 14, 2017 18:00</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="/images/user3-128x128.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Lorem Ipsum is...
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left">James Anderson</span>
                                <span class="direct-chat-timestamp pull-right">April 14, 2017 18:00 </span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="/images/user1-128x128.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Lorem Ipsum is simply dummy text industry.
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-right">Michael Jorden</span>
                                <span class="direct-chat-timestamp pull-left">April 14, 2017 18:00</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="/images/user3-128x128.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Lorem Ipsum is...
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left">James Anderson</span>
                                <span class="direct-chat-timestamp pull-right">April 14, 2017 18:00 </span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="/images/user1-128x128.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Lorem Ipsum is simply dummy text industry.
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-right">Michael Jorden</span>
                                <span class="direct-chat-timestamp pull-left">April 14, 2017 18:00</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="/images/user3-128x128.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Lorem Ipsum is...
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                    </div>
                    <!--/.direct-chat-messages-->

                    <!-- Contacts are loaded here -->
                    <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="/images/user1-128x128.jpg" alt="User Image">

                                    <div class="contacts-list-info">
							<span class="contacts-list-name">
							  Pavan kumar
							  <small class="contacts-list-date pull-right">April 14, 2017</small>
							</span>
                                        <span class="contacts-list-email">info@.multipurpose.com</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="/images/user7-128x128.jpg" alt="User Image">

                                    <div class="contacts-list-info">
							<span class="contacts-list-name">
							  Sonu Sud
							  <small class="contacts-list-date pull-right">March 14, 2017</small>
							</span>
                                        <span class="contacts-list-email">sonu@gmail.com</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                        </ul>
                        <!-- /.contatcts-list -->
                    </div>
                    <!-- /.direct-chat-pane -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                            <span class="input-group-btn">
                        <button type="submit" class="btn btn-danger">Send</button>
                      </span>
                        </div>
                    </form>
                </div>
                <!-- /.box-footer-->
            </div>
            <!--/.direct-chat -->
        </div>
        <!-- /.col -->
        <div class="col-xl-4">
            <!-- USERS LIST -->
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">New User</h3>

                    <div class="box-tools pull-right">
                        <span class="label bg-aqua">8 New User</span>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <ul class="users-list clearfix">
                        <li>
                            <img src="/images/user1-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Arijit Sinh</a>
                            <span class="users-list-date">Today</span>
                        </li>
                        <li>
                            <img src="/images/user8-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Sonu Nigam</a>
                            <span class="users-list-date">Yesterday</span>
                        </li>
                        <li>
                            <img src="/images/user7-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Pavan kumar</a>
                            <span class="users-list-date">12 Jan</span>
                        </li>
                        <li>
                            <img src="/images/user6-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">John Doe</a>
                            <span class="users-list-date">12 Jan</span>
                        </li>
                        <li>
                            <img src="/images/user1-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Alexander</a>
                            <span class="users-list-date">13 Jan</span>
                        </li>
                        <li>
                            <img src="/images/user5-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Angela</a>
                            <span class="users-list-date">14 Jan</span>
                        </li>
                        <li>
                            <img src="/images/user4-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Maical</a>
                            <span class="users-list-date">15 Jan</span>
                        </li>
                        <li>
                            <img src="/images/user3-128x128.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Juliya</a>
                            <span class="users-list-date">15 Jan</span>
                        </li>
                    </ul>
                    <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                    <a href="javascript:void(0)" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
            </div>
            <!--/.box -->
        </div>
    </div>
    <!-- /.row -->
    <div class="row">

        <div class="col-xl-4">
            <!-- PRODUCT LIST -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Recently Products</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ul class="products-list product-list-in-box">
                        <li class="item">
                            <div class="product-img">
                                <img src="/images/default-50x50.gif" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">iphone 7plus
                                    <span class="label label-warning pull-right">$300</span></a>
                                <span class="product-description">
							  12MP Wide-angle and telephoto cameras.
							</span>
                            </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                            <div class="product-img">
                                <img src="/images/default-50x50.gif" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Apple Tv
                                    <span class="label label-info pull-right">$400</span></a>
                                <span class="product-description">
							  Library | For You | Browse | Radio
							</span>
                            </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                            <div class="product-img">
                                <img src="/images/default-50x50.gif" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">MacBook Air<span
                                            class="label label-danger pull-right">$450</span></a>
                                <span class="product-description">
							  Make big things happen. All day long.
							</span>
                            </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                            <div class="product-img">
                                <img src="/images/default-50x50.gif" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">iPad Pro
                                    <span class="label label-success pull-right">$289</span></a>
                                <span class="product-description">
							  Anything you can do, you can do better.
							</span>
                            </div>
                        </li>
                        <!-- /.item -->
                    </ul>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                    <a href="javascript:void(0)" class="uppercase">View All Products</a>
                </div>
                <!-- /.box-footer -->
            </div>
        </div>
        <div class="col-xl-8 connectedSortable">
            <!-- MAP & BOX PANE -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Our Visitors</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <div class="pad">
                                <!-- Map will be created here -->
                                <div id="visitfromworld" style="height: 325px;"></div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-lg-3 col-md-4">
                            <div class="row pad box-pane-right bg-blue m-0">
                                <div class="col-4 col-sm-12 description-block margin-bottom p-0">
                                    <div class="sparkbar pad" data-color="#fff">80,60,95,70,75,80,50</div>
                                    <h5 class="description-header">7458</h5>
                                    <span class="description-text">Visits</span>
                                </div>
                                <!-- /.description-block -->
                                <div class="col-4 col-sm-12 description-block margin-bottom p-0">
                                    <div class="sparkbar pad" data-color="#fff">70,40,85,70,61,93,63</div>
                                    <h5 class="description-header">56%</h5>
                                    <span class="description-text">Referrals</span>
                                </div>
                                <!-- /.description-block -->
                                <div class="col-4 col-sm-12 description-block p-0">
                                    <div class="sparkbar pad" data-color="#fff">80,55,91,70,81,43,67</div>
                                    <h5 class="description-header">85%</h5>
                                    <span class="description-text">Organic</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-xl-6">
            <!-- quick email widget -->
            <div class="box box-info">
                <div class="box-header">
                    <i class="fa fa-envelope"></i>

                    <h3 class="box-title">Quick Email</h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-danger btn-sm" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                    <!-- /. tools -->
                </div>
                <div class="box-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>
                        <div>
                            <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                    </form>
                </div>
                <div class="box-footer clearfix">
                    <button type="button" class="pull-right btn btn-blue" id="sendEmail"> Send <i class="fa fa-paper-plane-o"></i></button>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Medium model <code>Click on image</code></h3>
                </div>
                <div class="box-body">
                    <!-- sample modal content -->
                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Base data</h4>
                                </div>
                                <div class="modal-body">
                                    <h6>Please submit your base data to proceed</h6>
                                    {{--{!! Form::open(['id'=>'createFirm','class'=>'ajax','method'=>'POST']) !!}--}}
                                    {!! Form::model($firm,['method'=>'PATCH', 'action'=>['Firm\FirmBasedataController@update',$firm->id],'class'=>'form-group']) !!}

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="form-body">

                                        <div class="form-group row">
                                            {{--<label class="col-sm-2 col-form-label">@lang('app.role')</label>--}}
                                            {!! Form::label('title', trans('app.title'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                            <div class="col-sm-10">
                                                {!! Form::select('title', [trans('app.mr')=>trans('app.mr'),
                                                                             trans('app.ms')=> trans('app.ms'),
                                                                             trans('app.company')=> trans('app.company')  ], null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            {!! Form::label('firstname', trans('app.firstName'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                            <div class="col-sm-10">
                                                {!! Form::text('firstname',null, ['class' => 'form-control']) !!}

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            {!! Form::label('email', trans('app.email'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                            <div class="col-sm-10">
                                                {!! Form::email('email', null,['class' => 'form-control']) !!}

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('surname', trans('app.surname'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                            <div class="col-sm-10">
                                                {!! Form::text('surname', null,['placeholder'=> 'Surname','class' => 'form-control']) !!}

                                            </div>
                                        </div>

                                        <h4 style="margin: 2em 0">Company Data</h4>

                                        <div class="form-group row">
                                            {!! Form::label('companyname', trans('app.companyName'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                            <div class="col-sm-10">
                                                {!! Form::text('companyname', null,['placeholder'=> 'Microsoft Inc','class' => 'form-control']) !!}

                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            {!! Form::label('street', trans('app.street'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                            <div class="col-sm-10">
                                                {!! Form::text('street', null,['class' => 'form-control']) !!}

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            {!! Form::label('house_number', trans('app.houseNumber'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                            <div class="col-sm-10">
                                                {!! Form::text('house_number', null,['class' => 'form-control']) !!}

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            {!! Form::label('postcode', trans('app.postcode'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                            <div class="col-sm-10">
                                                {!! Form::text('postcode', null,['class' => 'form-control']) !!}

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            {!! Form::label('place', trans('app.place'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                            <div class="col-sm-10">
                                                {!! Form::text('place', null,['class' => 'form-control']) !!}

                                            </div>
                                        </div>

                                        <h4 style="margin: 2em 0">Contact Data</h4>
                                        <div class="form-group row">
                                            {!! Form::label('companymail', trans('app.email'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                            <div class="col-sm-10">
                                                {!! Form::text('companymail', null,['class' => 'form-control']) !!}

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('phone', trans('app.phone'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                            <div class="col-sm-10">
                                                {!! Form::text('phone', null,['class' => 'form-control']) !!}

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('fax', trans('app.fax'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                            <div class="col-sm-10">
                                                {!! Form::text('fax', null,['class' => 'form-control']) !!}

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('mobile', trans('app.mobile'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                            <div class="col-sm-10">
                                                {!! Form::text('mobile', null,['class' => 'form-control']) !!}

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('web', trans('app.web'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                            <div class="col-sm-10">
                                                {!! Form::text('web', null,['class' => 'form-control']) !!}

                                            </div>
                                        </div>




                                        <h4 style="margin: 2em 0">Company Presettings</h4>

                                        <div class="form-group row">
                                            {{--<label class="col-sm-2 col-form-label">@lang('app.role')</label>--}}
                                            {!! Form::label('country', trans('app.country'),[ 'class' => 'col-sm-3 col-form-label', ]) !!}

                                            <div class="col-sm-8">
                                                {!! Form::select('country', ['Österreich'=>'Österreich'], null, ['class' => 'form-control']) !!}


                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            {{--<label class="col-sm-2 col-form-label">@lang('app.role')</label>--}}
                                            {!! Form::label('region', trans('app.region'),[ 'class' => 'col-sm-3 col-form-label', ]) !!}

                                            <div class="col-sm-8">
                                                {!! Form::select('region', ['Wien'=>'Wien',
                                                                        'Niederösterreich' => 'Niederösterreich',
                                                                        'Salzburg' => 'Salzburg',
                                                                        'Burgenland' => 'Burgenland',
                                                                        'Oberösterreich' => 'Oberösterreich',
                                                                        'Steiermark' => 'Steiermark',
                                                                        'Vorarlberg' => 'Vorarlberg',
                                                                        'Kärnten' => 'Kärnten',
                                                                        'Tirol' => 'Tirol'], null, ['class' => 'form-control']) !!}


                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            {!! Form::label('premium_account', trans('app.premiumAccount'),[ 'class' => 'col-sm-4 col-form-label', ]) !!}

                                            <div class="col-sm-8">
                                                {!! Form::text('premium_account', null,['class' => 'form-control']) !!}

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            {!! Form::label('tax_number', trans('app.taxNumber'),[ 'class' => 'col-sm-4 col-form-label', ]) !!}

                                            <div class="col-sm-8">
                                                {!! Form::text('tax_number', null,['class' => 'form-control']) !!}

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            {!! Form::label('uid_taxnumber', trans('app.uidTaxnumber'),[ 'class' => 'col-sm-4 col-form-label', ]) !!}

                                            <div class="col-sm-8">
                                                {!! Form::text('uid_taxnumber', null,['class' => 'form-control']) !!}

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            {{--<label class="col-sm-2 col-form-label">@lang('app.role')</label>--}}
                                            {!! Form::label('region_finance_office', trans('app.regionFinanceOffice'),[ 'class' => 'col-sm-4 col-form-label', ]) !!}

                                            <div class="col-sm-8">
                                                {!! Form::select('region_finance_office', ['Wien'=>'Wien',
                                                                        'Niederösterreich' => 'Niederösterreich',
                                                                        'Salzburg' => 'Salzburg',
                                                                        'Burgenland' => 'Burgenland',
                                                                        'Oberösterreich' => 'Oberösterreich',
                                                                        'Steiermark' => 'Steiermark',
                                                                        'Vorarlberg' => 'Vorarlberg',
                                                                        'Kärnten' => 'Kärnten',
                                                                        'Tirol' => 'Tirol'], null, ['class' => 'form-control']) !!}


                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            {{--<label class="col-sm-2 col-form-label">@lang('app.role')</label>--}}
                                            {!! Form::label('finance_office', trans('app.financeOffice'),[ 'class' => 'col-sm-4 col-form-label', ]) !!}

                                            <div class="col-sm-8">
                                                {!! Form::select('finance_office', ['Wien'=>[
                                                                        'Finanzamt Wien 12/13/14 Purkersdorf (FA08)' => 'Finanzamt Wien 12/13/14 Purkersdorf (FA08)',
                                                                        'Finanzamt Wien 1/23 (FA09)' => 'Finanzamt Wien 1/23 (FA09)',
                                                                        'Finanzamt Wien 2/20/21/22 (FA12)' => 'Finanzamt Wien 2/20/21/22 (FA12)',
                                                                        'Finanzamt Wien 3/6/7/11/15 Schwechat Gerasdorf (FA03)' => 'Finanzamt Wien 3/6/7/11/15 Schwechat Gerasdorf (FA03)',
                                                                        'Finanzamt Wien 4/5/10 (FA04)' => 'Finanzamt Wien 4/5/10 (FA04)',
                                                                        'Finanzamt Wien 8/16/17 (FA06)' => 'Finanzamt Wien 8/16/17 (FA06)',
                                                                        'Finanzamt Wien 9/18/19 Klosterneuburg (FA07)' => 'Finanzamt Wien 9/18/19 Klosterneuburg (FA07)',
                                                                        'Finanzamt für Gebühren, Verkehrsteuern und Glücksspiel (FA10)' => 'Finanzamt für Gebühren, Verkehrsteuern und Glücksspiel (FA10)']], null, ['class' => 'form-control']) !!}


                                            </div>
                                        </div>


                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <div class="form-actions">
                                        <button type="submit" id="save-form" class="btn btn-success"> <i class="fa fa-check"></i> @lang('app.save')</button>
                                        <button type="reset" class="btn btn-default">@lang('app.reset')</button>
                                    </div>
                                    {!! Form::close() !!}                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <img src="../../images/model.png" alt="default" data-toggle="modal" data-target="#myModal" class="model_img img-fluid" />
                </div>
            </div>
        </div><!-- /.col -->


        <div class="col-xl-6">
            <!-- TABLE: LATEST ORDERS -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">New Orders</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-responsive no-margin">
                            <thead>
                            <tr>
                                <th>Order No</th>
                                <th>Item</th>
                                <th>Status</th>
                                <th>Popularity</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="pages/examples/invoice.html">ODN84952</a></td>
                                <td>Iphone 6s</td>
                                <td><span class="label bg-purple">Shipped</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#7460ee" data-height="20">60,50,90,-40,91,-53,83</div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">ODN84845</a></td>
                                <td>Apple TV</td>
                                <td><span class="label bg-yellow">Pending</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#f39c12" data-height="20">40,80,-90,80,61,-73,68</div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">ODN84982</a></td>
                                <td>Samsung TV</td>
                                <td><span class="label bg-green">Delivered</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#41b613" data-height="20">60,50,90,-40,91,-53,83</div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">ODN85452</a></td>
                                <td>Intex Smart Watch</td>
                                <td><span class="label bg-blue">Processing</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#389af0" data-height="20">40,80,-90,80,61,-73,68</div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">ODN94992</a></td>
                                <td>Onida AC</td>
                                <td><span class="label bg-yellow">Pending</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#f39c12" data-height="20">40,80,-90,80,61,-73,68</div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">ODN98952</a></td>
                                <td>iPhone 7 Plus</td>
                                <td><span class="label bg-green">Delivered</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#41b613" data-height="20">60,50,90,-40,91,-53,83</div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">ODN88989</a></td>
                                <td>Samsung LED</td>
                                <td><span class="label bg-purple">Shipped</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#7460ee" data-height="20">60,50,90,-40,91,-53,83</div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <a href="javascript:void(0)" class="btn btn-sm btn-info pull-left">Place New Order</a>
                    <a href="javascript:void(0)" class="btn btn-sm btn-default pull-right">View All Orders</a>
                </div>
                <!-- /.box-footer -->
            </div>
        </div>

    </div>



@endsection


@push('footer-script')
    <!-- fox_admin dashboard demo (This is only for demo purposes) -->
    <script src="/js/pages/dashboard.js"></script>
    <script>
        @if(!$firm->status )
            $(function() {
                $('#myModal').modal({backdrop: 'static', keyboard: false})
            });
        @endif
        @if (count($errors) > 0)
            $('#myModal').modal('show');
        @endif
        @if (Session::has('basedata-updated'))
        $.toast({
            heading: 'Success',
            text: '{{Session::get('basedata-updated')}}',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });
        @endif

    </script>


@endpush