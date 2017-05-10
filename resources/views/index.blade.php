  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Webarch</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">
    <script src="vendor/js/jq.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://rawgithub.com/darkskyapp/skycons/master/skycons.js"></script>
    <script src="/vendor/rickshaw-master/vendor/d3.min.js"></script>
    <script src="/vendor/rickshaw-master/vendor/d3.layout.min.js"></script>
    <script src="/vendor/rickshaw-master/rickshaw.min.js"></script>
    <script src="/vendor/js/jquery.sparkline.min.js"></script>
    <script src="/vendor/js/main.js"></script>
    <link rel="stylesheet" href="/vendor/fonts/line-icons.woff">
    <link rel="stylesheet" href="/vendor/css/font-awesome.css">
    <link rel="stylesheet" href="/vendor/css/font-.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <!-- LEFT MENU -->
    <div class="left-menu">
     <div id="mySidenav" class="sidenav">
      <div class="nav-side-menu">
        <!-- BRAND, LOGO -->
        <div class="brand hidden-xs"><img class="" src="assets/images/logo.png" alt=""><i class="fa fa-envelope" aria-hidden="true"></i><i class="fa fa-home" aria-hidden="true"></i><span>2</span>
        </div>
        <!-- USER GREETING -->
        <div class="user-greeting">
          <img src="{{Auth::user()->img}}" width="45px" height="45px" class="img-circle" alt="">
          <p class="username">Welcome <br> {{Auth::user()->name}} {{Auth::user()->surname}}</p>
          <p class="userstatus">Status <a href=""><i class="fa fa-circle-o" aria-hidden="true"></i>
            <span>Online</span></a>
          </p>
        </div>
        <h6>BROWSE <i class="fa fa-refresh pull-right" aria-hidden="true"></i></h6>
        <div class="menu-list">

          <ul id="menu-content" class="menu-content collapse out">


            <li  data-toggle="collapse" data-target="#products" class="collapsed">
              <a href="#"><i class="fa fa-home" aria-hidden="true"></i> Dashboard <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="products">
              <li><a href="#">Dashboard v1</a></li>
              <li><a href="#">Dashboard v2</a></li>
            </li>
          </ul>


          <li>
            <a href="#">
              <i class="fa fa-th" aria-hidden="true"></i> Widgets <span class="hotwidgets pull-right"><p>HOT</p></span>
            </a>
          </li><li>
          <a href="email" >
            <i class="fa fa-envelope fa-md"></i> Email  <span class="hotnews pull-right"><p>203</p></span>
          </a>
        </li>

        <li data-toggle="collapse" data-target="#service" class="collapsed">
          <a href="#"><i class="fa fa-adjust" aria-hidden="true"></i> Themes <span class="arrow"></span></a>
        </li>
        <ul class="sub-menu collapse" id="service">
          <li><a href="">New Service 1</a></li>
          <li>New Service 2</li>
          <li>New Service 3</li>
        </ul>


        <li data-toggle="collapse" data-target="#new" class="collapsed">
          <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i> Layouts <span class="arrow"></span></a>
        </li>
        <ul class="sub-menu collapse" id="new">
          <li>New New 1</li>
          <li>New New 2</li>
          <li>New New 3</li>
        </ul>
        <li data-toggle="collapse" data-target="#elements" class="collapsed">
          <a href="#"><i class="fa fa-magnet" aria-hidden="true"></i> UI Elements <span class="arrow"></span></a>
        </li>
        <ul class="sub-menu collapse" id="elements">
          <li>New New 1</li>
          <li>New New 2</li>
          <li>New New 3</li>
        </ul>
        <li data-toggle="collapse" data-target="#forms" class="collapsed">
          <a href="#"><i class="fa fa-align-right" aria-hidden="true"></i> Forms <span class="arrow"></span></a>
        </li>
        <ul class="sub-menu collapse" id="forms">
          <li>New New 1</li>
          <li>New New 2</li>
          <li>New New 3</li>
        </ul>

        <li data-toggle="collapse" data-target="#grids" class="collapsed">
          <a href="#"><i class="fa fa-pencil-square" aria-hidden="true"></i> Grids <span class="arrow"></span></a>
        </li>
        <ul class="sub-menu collapse" id="grids">
          <li>New New 1</li>
          <li>New New 2</li>
          <li>New New 3</li>
        </ul>
        <li data-toggle="collapse" data-target="#tables" class="collapsed">
          <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i> Tables <span class="arrow"></span></a>
        </li>
        <ul class="sub-menu collapse" id="tables">
          <li>New New 1</li>
          <li>New New 2</li>
          <li>New New 3</li>
        </ul>

        <li data-toggle="collapse" data-target="#maps" class="collapsed">
          <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Maps <span class="arrow"></span></a>
        </li>
        <ul class="sub-menu collapse" id="maps">
          <li>New New 1</li>
          <li>New New 2</li>
          <li>New New 3</li>
        </ul>

        <li>
          <a href="#">
            <i class="fa fa-line-chart" aria-hidden="true"></i>
            Charts
          </a>
        </li>
        <li data-toggle="collapse" data-target="#extra" class="collapsed">
          <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
           Extra <span class="arrow"></span></a>
         </li>
         <ul class="sub-menu collapse" id="extra">
          <li>New New 1</li>
          <li>New New 2</li>
          <li>New New 3</li>
        </ul>

        <li data-toggle="collapse" data-target="#menulevels" class="collapsed">
          <a href="#"><i class="fa fa-folder-open" aria-hidden="true"></i> Menu Levels <span class="arrow"></span></a>
        </li>
        <ul class="sub-menu collapse" id="menulevels">
          <li>New New 1</li>
          <li>New New 2</li>
          <li>New New 3</li>
        </ul>
        <h6>FOLDER <i class="fa pull-right fa-plus" aria-hidden="true"></i></h6>
        <li>
          <a href="#">
            <i class="fa fa-circle-o" style=" color: #00A69A;" aria-hidden="true"></i> My quick tasks
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-circle-o" style="color: #F35958;" aria-hidden="true"></i> To do list
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-circle-o" style="color: #0092D3;" aria-hidden="true"></i> Projects
          </a>
        </li>
        <h6>PROJECTS <i class="fa pull-right fa-plus" style="" aria-hidden="true"></i></h6>
        <li>
          <a href="#">
            Freelancer <i class="fa fa-times pull-right" style="margin-top: 10px;" aria-hidden="true"></i>
            <br>  <span class="project">Redesign home page</span>
          </a>
        </li>
        <li>
          <a href="#">
           envato <i class="fa fa-times pull-right" style="margin-top: 10px;" aria-hidden="true"></i><br> <span class="project">Statistical report</span>
         </a>
       </li>
     </ul>

   </div>
   <div class="menu-footer">
    <div class="progress-bar footer-menu-progressbar" role="progressbar" aria-valuenow="76"
    aria-valuemin="0" aria-valuemax="100" style="width:50%;">
    <span>86%</span><a href=""><i class="fa fa-power-off fa-lg" aria-hidden="true"></i></a>

  </div>
</div>
</div>
</div>


</div>
<!-- CHAT SYSTEM -->
<div class="main-chat">

  <div class="col-md-12 search">
    <input type="search" placeholder="search">
    <i class="fa fa-cog fa-lg" aria-hidden="true"></i>
  </div>
  <div class="col-md-12 group-charts" style="">
    <h6>GROUP CHATS</h6>
    <ul>
      <li>
        <a href="">
          <i class="fa fa-circle-o"  aria-hidden="true"></i> Office work
        </a>
      </li>
      <li>
        <a href="">
         <i class="fa fa-circle-o" aria-hidden="true"></i> Personal vibes
       </a>
     </li>
   </ul>
 </div>
  <div class="col-md-12 favourites" style="">
    <h6>FAVOURITES</h6>
    <div class="col-md-12 active elnur">
      <img src="assets/images/58417ef9ec469.jpg" class="img-circle pull-left" alt="">
      <i class="fa fa-circle-o pull-right fa-lg" aria-hidden="true"></i>
      <p>Elnur Khalilov</p>
      <span>Hello you here?</span>
    </div>
    <div class="col-md-12 samir">
      <img src="assets/images/58418018514ab.jpg" class="img-circle pull-left" alt="">
      <i class="fa fa-circle-o pull-right fa-lg offline" aria-hidden="true"></i>
      <p>Samir Kerimov</p>
      <span>Busy,Do not disturb</span>
    </div>


  </div>
  <div class="chat-messages col-md-12">


    <p><span class="status-online"></span> Jane Smith <span class="pull-right"><i class="fa fa-times"></i></span></p>
    <p class="sent-time text-center">Yesterday 11:25pm</p>
    <div class="col-md-12">
      <img src="assets/images/d.jpg" class="img-responsive img-circle pull-left" alt="">
      <div class="bubble pull-left">
        Hello, You there?
        <div class="arrow"></div>
      </div>
    </div>
    <div class="col-md-12">
      <img src="assets/images/d.jpg" class="img-responsive img-circle pull-left" alt="">
      <div class="bubble pull-left">
        How was the meeting?
      <div class="arrow"></div>
      </div>
    </div>
    <div class="col-md-12">
      <img src="assets/images/d.jpg" class="img-responsive img-circle pull-left" alt="">
      <div class="bubble pull-left">
      Let me know when you free
        <div class="arrow"></div>
      </div>
    </div>
    <p class="sent-time text-center">Today 11:25pm</p>
    <ul id="messages">

    </ul>

    </div>
    <div class="chat-input col-md-12">
        <form action="" method="">
         <input autocomlete=off placeholder="Type your message" id="m">
        </form>
    </div>
</div>

<div id="main-part">
 <!-- HEADER MENU -->
 <div class="header header-quick-nav navbar navbar-inverse" style="">
  <div class="container-fluid">

   <ul class="nav navbar-nav pull-left navbar-left">
     <li class="pull-left"><a href="#"><i class="fa pull-left fa-bars" aria-hidden="true" ></i></a>
     </li>
     <li class="hidden-xs"><a href="#"><i class="fa hidden-xs fa-repeat" aria-hidden="true"></i></a>
     </li>
     <li class="hidden-xs"><a href="#"><i class="fa hidden-xs fa-th-large" aria-hidden="true"></i></a>
     </li>

   </ul>
   <div class="" style="display: flex;
  align-items: center;
  justify-content: center;">
     <img class="text-center visible-xs " src="assets/images/logo.png" alt="">
   </div>

   <div class=" hidden-xs pull-left">
     <form class="navbar-form" role="search">
       <div class="input-group col-md-12 col-sm-12" >
        <div class="input-group-btn">
         <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
       </div>
       <input type="text" class="form-control hidden-xs" placeholder="Search Dashboard"  name="q">
     </div>
   </form>
   <img class="text-center visible-xs visible-sm" src="assets/images/logo.png" alt="">
 </div>

 <ul class="nav navbar-nav pull-right navbar-right">

   <li class="usermessages hidden-xs"><a href="#"><span>3</span> {{Auth::user()->name}} <span>{{Auth::user()->surname}}</span><i class="fa fa-angle-down" aria-hidden="true"></i>
     <img class="img-circle hidden-xs" src="{{Auth::user()->img}}" width="35px" height="35px" alt="">
   </a>
 </li>
 <li class="hidden-xs"><a href="#"><i class="fa hidden-xs fa-cog1 fa-cog" aria-hidden="true"></i></a>
 </li>
 <li class="chat-open pull-right"><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
 </li>
</ul>
</div>
</div>
<!-- NOTIFICATIONS -->
<div class="notifications">
  <div class="userarrow"></div>
  <div class="row">
    <div class="col-md-12 text-center">
      <p>Notifications</p>
    </div>


    <div class="col-md-12  notification-messages">
      <img src="assets/images/d.jpg" class="img-circle pull-left" alt="">
      <p class="heading ">David Nester - Commented...</p>
      <p class="description">Meeting postponed to tomorrow</p>
      <p class="time">A min ago</p>
    </div>
    <div class="col-md-12 notification-messages danger">
     <p class="heading">Server load limited</p>
     <p class="description">Database server has reached its d...</p>
     <p class="time">2 mins ago</p>
   </div>
   <div class="col-md-12 notification-messages">
    <img src="assets/images/h.jpg" class="img-circle pull-left" alt="">
    <p class="heading">You haveve got 150 messa...</p>
    <p class="description">150 newly unread messages in you...</p>
    <p class="time">An hour ago</p>
  </div>
</div>
</div>
<!-- SETTNGS -->
<div class="settings" >
  <div class="userarrow"></div>
  <ul>
    <li><a href="">My Account</a></li>
    <li><a href="">My Calendar</a></li>
    <li><a href="">My Inbox <span class="badge badge-important animated bounceIn">2</span> </a></li>
    <li><a href="{{ url('/logout') }}">Log Out</a></li>
  </ul>
</div>
<!-- MAIN CONTENT -->

<div id="main-content">
  <div class="content sm-gutter">

    <!-- FIRST LINE -->
    <div class="row">
     <div class="col-md-4 col-xs-12 col-sm-6">
      <div class="titles green">
        <div class="text">OVERALL SALES <span><i class="fa fa-times exitbutton fa-lg pull-right" aria-hidden="true"></i><i class="fa fa-repeat pull-right" aria-hidden="true" style="padding-top: 1px;"></i></span></div>
        <div class="widget-stats pull-left">
          <p>Overall Visits</p>
          <span class="count">2415</span>
        </div>
        <div class="widget-stats pull-left">
          <p>Today's</p>
          <span class="count">751</span>
        </div>
        <div class="widget-stats pull-left">
          <p>Monthly</p>
          <span class="count">1547</span>
        </div>
        <div class="clearfix"></div>
        <div id="progressBar"><div></div></div>
        <span class="mini-description"><span class="white">4% higher</span> than last month</span>
      </div>
    </div>
    <div class="col-md-4 col-xs-12 col-sm-6">
     <div class="titles red">
      <div class="text">OVERALL VISITS <span><i class="fa fa-times exitbutton fa-lg pull-right" aria-hidden="true"></i><i class="fa fa-repeat pull-right" aria-hidden="true" style="padding-top: 1px;"></i></span></div>

      <div class="widget-stats pull-left">
        <p>Overall Visits</p>
        <span class="count">15489</span>
      </div>
      <div class="widget-stats pull-left">
        <p>Today's</p>
        <span class="count">551</span>
      </div><div class="widget-stats pull-left">
      <p>Monthly</p>
      <span class="count">1450</span>
    </div>
    <div class="clearfix"></div>
    <div id="progressBar2"><div></div></div>
    <span class="mini-description"><span class="white">4% higher</span> than last month</span>
  </div>
</div>
<div class="col-md-4 col-xs-12 col-sm-6">
 <div class="titles purple">
   <div class="text">SERVER LOAD <span><i class="fa fa-times exitbutton fa-lg pull-right" aria-hidden="true"></i><i class="fa fa-repeat pull-right" aria-hidden="true" style="padding-top: 1px;"></i></span></div>
   <div class="widget-stats pull-left">
    <p>Overall Visits</p>
    <span class="count">5695</span>
  </div>
  <div class="widget-stats pull-left">
    <p>Today's</p>
    <span class="count">568</span>
  </div><div class="widget-stats pull-left">
  <p>Monthly</p>
  <span class="count">12459</span>
</div>
<div class="clearfix"></div>
<div id="progressBar3"><div></div></div>
<span class="mini-description"><span class="white">4% higher</span> than last month</span>
</div>
</div>
<div class=" col-xs-12 hidden-sm-up hidden-md hidden-lg col-md-4 col-sm-6 visible xs">
 <div class="titles qirmizi col-md-4">
   <div class="text">SERVER LOAD <span><i class="fa fa-times exitbutton fa-lg pull-right" aria-hidden="true"></i><i class="fa fa-repeat pull-right" aria-hidden="true" style="padding-top: 1px;"></i></span></div>
   <div class="widget-stats pull-left">
    <p>Overall Visits</p>
    <span class="count">5695</span>
  </div>
  <div class="widget-stats pull-left">
    <p>Today's</p>
    <span class="count">568</span>
  </div><div class="widget-stats pull-left">
  <p>Monthly</p>
  <span class="count">12459</span>
</div>
<div class="clearfix"></div>
<div id="progressBar3"><div></div></div>
<span class="mini-description"><span class="white">4% higher</span> than last month</span>
</div>
</div>
<!-- SECOND LINE -->

<div class="col-md-8 col-sm-12 col-xs-12">

  <div class="col-md-7 col-xs-12 col-sm-8">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26081603.294420466!2d-95.677068!3d37.06250000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1478436706365" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <div class="col-md-5 col-xs-12 col-sm-4">
    <div class="titles">
      <div class="text-white">
        <span>QUICK </span> VIEW
        <div class="col-md-12 col-sm-12">Search...</div>
        <div class="widget-stats pull-left">
          <p>Overall Visits</p>
          <span class="count">5695</span>
        </div>
        <div class="widget-stats pull-left">
          <p>Today's</p>
          <span class="count">568</span>
        </div><div class="widget-stats pull-left">
        <p>Monthly</p>
        <span class="count">12459</span>

      </div>
      <div class="clearfix"></div>
      <div id="progressBar4"><div></div></div>
      <span class="mini-description"><span class="white">4% higher</span> than last month</span>
    </div>

  </div>
  <span id="sparkline">1,4,4,7,5,9,10</span>
  <span id="sparkline2">1,4,4,7,5,9,10</span>
</div>
</div>
<div class="col-md-4 sales-graph col-sm-12 col-xs-12">
  <div class="sales-graph-title">
    <div class="row">
      <div class="col-md-4 col-xs-12 col-sm-4">
        You Earned<br> <span class="count"><b>2145</b> </span><span class="p"> USD</span>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-4">
        <b>TODAY </b><br><span class="count"><b>451</b></span><span class="p"> USD</span>
      </div>

      <div class="col-md-4 col-xs-12 col-sm-4">
        <b>THIS MONTH</b> <span class="count"><b>8514</b></span><span class="p"> USD</span>
      </div>
      <div class="col-md-12 col-xs-12 col-sm-12">
        LAST SALE
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="col-md-4 col-sm-4">25601</div>
            <div class="col-md-4 col-sm-4">Redesign project template</div>
            <div class="col-md-4 col-sm-4">$4,500</div>
          </div>
          <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="col-md-4 col-xs-4 col-sm-4">25601</div>
            <div class="col-md-4 col-xs-4 col-sm-4">Redesign project template</div>
            <div class="col-md-4 col-xs-4 col-sm-4">$4,500</div>
          </div>

        </div>
      </div>

    </div>

  </div>
  <div class="sparklines">
   <span id="sparkline3">1,4,4,7,5,9,10</span>
   <span id="sparkline4">1,4,4,7,5,9,10</span>
 </div>

</div>
<!-- THIRD LINE -->
<div class="col-md-12 col-xs-12 col-sm-12 third-line">

  <div class="col-md-6 col-xs-12 col-sm-12">
  <img src="assets/images/9.jpg" class="img-responsive-responsive bg" width="100%" height="100%" alt="">
    <div class="col-md-6 col-xs-5 col-sm-5 overlayer">

      <i class="fa fa-map-marker  fa-2x" aria-hidden="true"></i>
      <p>21 Jan</p>
      <h3>New Year <b>UI Bundle </b>
        now on webarch
      </h3>
      <p>211Comments    24kLikes</p>

    </div>
    <i class="fa fa-times fa-lg pull-right" style="position: relative;
    padding-right: 10px; color: #ABABAB; padding-top: 10px;" aria-hidden="true"></i><i class="fa fa-repeat pull-right" style="padding-top: 10px; color: #ABABAB; position: relative;" aria-hidden="true"></i>

    <div class="overlayer-wrapper col-md-12 col-xs-12 col-sm-12">
      <a href="">#citymax</a>
      <a href="">#new york city</a>
      <a href="">#amazing</a>
      <p><b>Jane Smith, John Smith, David Jester,</b> pepper post and 214 others like this.</p>
      <span>
        <img src="assets/images/avatar_small.jpg" class="img-circle" alt="">
        <input type="text" class="comment" placeholder="Write a comment">
        <input type="submit" class="submit" value="Join Group">
      </span>
    </div>



  </div>


  <div class="col-md-3 col-xs-12 col-sm-6 slider1">
    <ul>
      <li>
          <div>
          <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
          <p>21 Jan</p>
          <h3>New Year <b>UI Bundle </b>
           <br> now on webarch
         </h3>

         </div>
      </li>
      <li>
         <div>

          <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
          <p>21 Jan</p>
          <h3>New Year <b>UI Bundle </b>
           <br> now on webarch
         </h3>
        </div>
      </li>
 </ul>
</div>
<div class="col-md-3 col-xs-12 col-sm-6 slider2">
  <ul>
    <li class="slide1">
      <div>
        <h4>“Just <b>Completed</b><br> the <b>Heart walk</b> advertiing   campaign”
        </h4>
        <span><img src="assets/images/avatar_small.jpg" class="img-circle" alt="">David Cooper @Revox</span>
      </div>
    </li>
    <li class="slide2">
      <div>
      <span><img src="assets/images/d.jpg" class="img-circle" alt="">David Cooper @Revox</span>
      <h4>“Just <b>Completed</b><br> the <b>Heart walk</b> advertiing   campaign”
      </h4>

    </div>
    </li>
  </ul>
</div>
<div class="row line">
  <div class="col-md-3 col-xs-12 col-sm-6 slider3">
    <div>
      Today Sale's
      <h4>450 USD</h4>
      Last Sale 23.5 USD
      <span id="sparkline5">1,4,4,7,5,9,10</span>
    </div>
  </div>
  <div class="col-md-3 col-xs-12 col-sm-6 slider4">
   <div>
     <h4>RUN AWAY GO</h4>
     <p>Queen's favourite</p>
     <p><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i>  Read More</p>
   </div>
 </div>
</div>
</div>

<!-- FOURTH LINE -->
<div class="fourth-line">
  <div class="row">
    <div class="col-md-6 col-xs-12 col-sm-12">
      <div class="col-md-7 col-xs-12 col-sm-7 pd-sm">
        <p>California USA</p>
        <p>Sunday</p>
        <p>32&#176;</p>
        <p>partly cloudly</p>
        <p class="col-md-9 col-sm-9 col-md-offset-1"><canvas class="pull-left partly-cloudy-day" class="" width="48" height="48"></canvas>
          <span class="pull-left"><canvas class="wind" width="16" height="16"></canvas>
            <span>54</span> <br>MPH</span>
            <span class="pull-right"><canvas class="sleet" width="16" height="16"></canvas>
              <span>53</span> <br>MPH</span>
            </p>

            <div class="col-md-12 col-xs-12 col-sm-12">
              <div class="col-md-2 col-xs-2 col-sm-2">
                11:30
                PM
                <br>
                <canvas class="partly-cloudy-day" width="16" height="16"></canvas>
                <span>32&#176;</span>
              </div>
              <div class="col-md-2 col-xs-2 col-sm-2">
                11:30
                PM
                <br>
                <canvas class="partly-cloudy-day text-center" width="16" height="16"></canvas>
                <span>32&#176;</span>
              </div>
              <div class="col-md-2 col-xs-2 col-sm-2">
                11:30
                PM
                <br>
                <canvas class="partly-cloudy-day text-center" width="16" height="16"></canvas>
                <span>32&#176;</span>
              </div>
              <div class="col-md-2 col-xs-2 col-sm-2">
                11:30
                PM
                <br>
                <canvas class="partly-cloudy-day" width="16" height="16"></canvas>
                <span>32&#176;</span>
              </div>
              <div class="col-md-2 col-xs-2 col-sm-2">
                11:30
                PM
                <br>
                <canvas class="partly-cloudy-day" width="16" height="16"></canvas>
                <span>32&#176;</span>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-xs-12 col-sm-5">
            <div class="col-md-12 col-xs-12 col-sm-12">
              Sun <canvas class="partly-cloudy-day text-center" width="16" height="16"></canvas> <span class="pull-right">32-38 <span>C&#176;</span></span>
            </div>
            <div class="col-md-12  col-xs-12 col-sm-12">
             Sun <canvas class="partly-cloudy-day text-center" width="16" height="16"></canvas> <span class="pull-right">32-38 <span>C&#176;</span></span>
           </div>
           <div class="col-md-12 col-xs-12 col-sm-12">
            Sun <canvas class="partly-cloudy-day" width="16" height="16"></canvas> <span class="pull-right">32-38 <span>C&#176;</span></span>
          </div>
          <div class="col-md-12 col-xs-12 col-sm-12">
           Sun <canvas class="partly-cloudy-day" width="16" height="16"></canvas> <span class="pull-right">32-38 <span>C&#176;</span></span>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12">
           Sun <canvas class="partly-cloudy-day" width="16" height="16"></canvas> <span class="pull-right">32-38 <span>C&#176;</span></span>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12">
           Sun <canvas class="partly-cloudy-day" width="16" height="16"></canvas> <span class="pull-right">32-38 <span>C&#176;</span></span>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12">
           Sun <canvas class="partly-cloudy-day" width="16" height="16"></canvas> <span class="pull-right">32-38 <span>C&#176;</span></span>
         </div>
       </div>
       <!-- WEARTHER INFO -->
       <div class="col-md-12   col-sm-12 weather-info" style="padding-left: 0px;padding-right: 0px;">
        <div class="col-md-6 col-xs-12 col-sm-6">
          <div class="col-md-5 col-xs-5 col-sm-5">
            <canvas class="partly-cloudy-day" width="64" height="64"></canvas>
            <h6>WEDNESDAY</h6>
          </div>
          <div class="col-md-7 col-xs-7 col-sm-7">
            <p>34&#176;</p>
            <p>CURRENTLY</p>
            <p class="col-md-12 col-xs-12  col-sm-12">
              <span class="pull-left"><canvas class="wind" width="16" height="16"></canvas>
                <span>54</span> <br>MPH</span>
                <span class="pull-right"><canvas class="sleet" width="16" height="16"></canvas>
                  <span>53</span> <br>MPH</span>
                </p>
              </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-6">
              <div class="col-md-7 col-xs-7 col-sm-7">
                <p>16&#176;</p>
                <p>CURRENTLY</p>
              </div>
              <div class="col-md-5 col-xs-5 col-sm-5">
                <canvas class="wind" width="64" height="64"></canvas>
                <h6>WEDNESDAY</h6>
              </div>
            </div>
          </div>
          <!-- TOTAL INCOME -->
          <div class="col-md-12  col-xs-12 col-sm-12 total-income">
            <div class="col-md-4 col-xs-12 col-sm-4">
              Total income
              <span>$15,354</span>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-3">
              Total due
              <span>$4,653</span>
            </div>
            <div class="col-md-5 col-xs-12  col-sm-5">
              <input type="text" placeholder="Search">
            </div>
            <div class="col-md-12 col-xs-12 col-sm-12">
              <div class="col-md-3 col-xs-12 col-sm-3">
                Open
                <br>
                <span>16:203.26</span>
              </div>
              <div class="col-md-3 col-xs-12 col-sm-3">
                Day Range
                <br>
                <span>01.12.13 </span>
              </div>
              <div class="col-md-3 col-xs-12 col-sm-3">
                Cash  <br>
                <span>Visa Classic</span>
              </div>
              <div class="col-md-3 col-xs-12 col-sm-3">
                $10,525
                <br>
                <span>$5,989</span>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-xs-12 col-sm-12">
            <div id="chart1"></div>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 col-sm-12">
          <div class="mytitles">
           <div class="col-md-7 col-xs-12 col-sm-7">
             <div class="col-md-12 col-xs-12 col-sm-12">
               MARKET <span class="col-md-offset-1">DOW</span>

               <span><br><i class="fa fa-caret-up" aria-hidden="true"></i> 15,580.11</span>
             </div>
             <div class="col-md-12 col-xs-12 col-sm-12">
               <p>Open <span class=" col-md-offset-4">Day Range</span></p>
               <p>16:203.26 <span class="pull-right">15,568.11 - 16,203.25</span></p>
             </div>
             <div class="col-md-12 col-xs-12 col-sm-12">
               <div id="chart"></div>
             </div>
           </div>
           <div class="col-md-5 col-xs-12 col-sm-5">
             <div class="col-md-12 col-xs-12 col-sm-12">
               Watchlist
               <input type="search" placeholder="Search">
             </div>
             <div class="col-md-12 col-xs-12 col-sm-12">
               <p>GMY <span class=" col-md-offset-3 pull-right">GMY & SKR 100</span></p>
               <p>18,500.11 <span class="pull-right">-318.2</span></p>
             </div>
             <div class="col-md-12 col-xs-12 col-sm-12">
               <p>KPM <span class=" col-md-offset-3 pull-right">KPMG 350</span></p>
               <p>15,425.25  <span class="pull-right green">+318.2</span></p>
             </div>
             <div class="col-md-12 col-xs-12 col-sm-12">
               <p>PTR <span class=" col-md-offset-3 pull-right">PRT & SPR 245</span></p>
               <p>11,540.12<span class="pull-right">-318.2</span></p>
             </div>
             <div class="col-md-12 col-xs-12 col-sm-12">
               <p>HGM <span class=" col-md-offset-3 pull-right">HGM & POR 450</span></p>
               <p>9,500<span class="pull-right green">+100.2</span></p>
             </div>
             <div class="col-md-12 col-xs-12 col-sm-12">
               <p>MKR <span class=" col-md-offset-3 pull-right">MKR & SPR 547</span></p>
               <p>15,855.11 <span class="pull-right">-318.2</span></p>
             </div>
           </div>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 total-income">
          <div class="col-md-4 col-xs-12 col-sm-4">
            Total Visits
            <span>$25,850</span>
          </div>
          <div class="col-md-3 col-xs-12 col-sm-3">
            Today
            <span>$4,653</span>
          </div>
          <div class="col-md-5 col-xs-12 col-sm-5">
            <input type="text" placeholder="Search">
          </div>
          <div class="col-md-12  col-xs-12 col-sm-12">
            <div class="col-md-3 col-sm-3">
              Open
              <br>
              <span>16:203.26</span>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-3">
              Day Range
              <br>
              <span>01.12.13 </span>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-3">
              Cash  <br>
              <span>Visa Classic</span>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-3">
              $10,525
              <br>
              <span>$5,989</span>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-xs-12 col-sm-12" style="padding-left: 0px;padding-right: 0px; ">
          <div id="chart3" style="background-color: #E9ECEE;"></div>
        </div>
      </div>
    </div>
    <!-- FIFTH LINE -->
    <div class="row fifth-line">
      <div class="col-md-4 col-xs-12 col-sm-6">

        <div class="col-md-12 col-xs-12 col-sm-12">
          <div class="titles">
            <span><i class="fa fa-lg fa-times pull-right" aria-hidden="true"></i><i class="fa fa-repeat pull-right" aria-hidden="true"></i></span>
            <h3>Webarch <span>UI Bundle highly customizable UI elements</span></h3>
            <div class="clearfix"></div>
            <p>#Art Design</p>
            <div class="clearfix"></div>
          </div>
          <div class="titles">
            <img src="assets/images/avatar_small.jpg" class="img-circle pull-left" alt=""> David Cooper <span class="pull-right">24m</span>
            <span class="gray"><br>@revox</span>
            <div class="clearfix"></div>
            <h5 class="p-t-10 p-b-10">The attention to detail and the end product is stellar! I enjoyed the process</h5>
            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i> 1584 </span> <span class="like"><i class="fa fa-heart" aria-hidden="true"></i> 47</span>
          </div>
        </div>
        <div class="col-md-12 col-xs-12 col-sm-12">
          <div class="titles">
            <img src="assets/images/c.jpg" class="img-circle pull-left" alt=""> John Smith <span><i class="fa fa-lg fa-times pull-right" aria-hidden="true"></i><i class="fa fa-repeat pull-right" aria-hidden="true"></i></span>
            <span class="gray"><br>shared a picture with Jane Smith.</span>
            <div class="clearfix">

            </div>
          </div>
          <div class="p-l-10 p-r-10"><img src="assets/images/1.jpg" class="img-responsive" alt="">
          </div>
          <div class="titles border">
            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i> 24 </span> <span class="like"><i class="fa fa-heart-o" aria-hidden="true"></i> 5</span>
          </div>
          <p class="">
            <b>Jane Smith, John Smith, David Jester, pepper</b>
            post and 214 others like this.
          </p>
          <div class="input">
            <img src="assets/images/avatar_small.jpg" class="img-circle pull-left p-l-10" alt="">
            <div class="input-group transparent">
                <input type="text" class="form-control" placeholder="Write a comment">
                <span class="input-group-addon">
                  <i class="fa fa-camera"></i>
                </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 hidden-xs hidden-sm">
        <div class="col-md-12 col-sm-12">
          <img src="assets/images/10.png" class=" big lazy hover-effect-img img-responsive" alt="">

          <div class="content">
            <span><i class="fa fa-lg fa-times pull-right" aria-hidden="true"></i><i class="fa fa-repeat pull-right" aria-hidden="true"></i></span>
            <br><p class="pull-right">#art design</p>
            <div class="clearfix"></div>

              <div class="col-md-6">
                <img src="assets/images/avatar.jpg" class="img-circle img-responsive"  alt=""><div class="clearfix"></div>
                <h5>David Jester <br><span>@revox</span>
                </h5>
              </div>

              <div class="col-md-6 col-sm-6">
                <span class="pull-right">24m</span>

                <h6>
                The attention to detail and the end product is stellar! I enjoyed the process
                </h6>
                <p class="pull-left">#New york city</p>
                <p class="pull-left">#amazing</p>
                <p class="pull-left">#citymax</p>
              </div>

          </div>
        </div>
         <div class="col-md-12 col-xs-12 col-sm-12 second">
          <div class="titles">
            <span><i class="fa fa-lg fa-times pull-right" aria-hidden="true"></i><i class="fa fa-repeat pull-right" aria-hidden="true"></i></span>
            <h3>Webarch <span>UI Bundle highly customizable UI elements</span></h3>
            <div class="clearfix"></div>
            <p>#Art Design</p>
            <div class="clearfix"></div>
          </div>
          <div class="titles">
            <img src="assets/images/avatar_small.jpg" class="img-circle" alt=""> David Cooper <span class="pull-right">24m</span>
            <span class="gray"><br>@revox</span>
            <div class="clearfix"></div>
            <h5 class="p-t-10 p-b-10">The attention to detail and the end product is stellar! I enjoyed the process</h5>
            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i> 1584 </span> <span class="like"><i class="fa fa-heart" aria-hidden="true"></i> 47</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-6">
        <div class="col-md-12">
            <div class="titles">
              <img src="assets/images/h.jpg" class="img-circle pull-left first" alt=""> David Jester <span><i class="fa fa-lg fa-times pull-right" style="margin-right: 10px;" aria-hidden="true"></i><i class="fa fa-repeat pull-right" aria-hidden="true"></i></span>
              <span class="gray"><br>was with Jane Smith and 4 others </span>
              <div class="clearfix">
           </div>
            <div class=""><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d737625.313296574!2d49.9149789270159!3d40.49121583334771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sru!2sru!4v1479499040345" width="100%" height="225" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="titles border">
              <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i> 24 </span> <span class="like"><i class="fa fa-heart-o" aria-hidden="true"></i> 5</span>
            </div>
            <p class="">
              <b>Jane Smith, John Smith, David Jester, pepper</b>
              post and 214 others like this.
            </p>
            <div class="input">
              <img src="assets/images/e.jpg" class="img-circle pull-left p-l-10" alt="">
              <div class="input-group transparent">
                  <input type="text" class="form-control" placeholder="Write a comment">
                  <span class="input-group-addon">
                    <i class="fa fa-camera"></i>
                  </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-xs-12">
          <img src="assets/images/10.png" class="lazy hover-effect-img big img-responsive" alt="">

          <div class="content">
            <span><i class="fa fa-lg fa-times pull-right" aria-hidden="true"></i><i class="fa fa-repeat pull-right" aria-hidden="true"></i></span>
            <br><p class="pull-right">#art design</p>
            <div class="clearfix"></div>
            <div class="col-md-6">
              <img src="assets/images/avatar.jpg" class="img-circle img-responsive"  alt=""><div class="clearfix"></div>
              <h5>David Jester <br><span>@revox</span>
              </h5>
            </div>
            <div class="col-md-6">
              <span class="pull-right">24m</span>

              <h6>
              The attention to detail and the end product is stellar! I enjoyed the process
              </h6>
              <p class="pull-left">#New york city</p>
              <p class="pull-left">#amazing</p>
              <p class="pull-left">#citymax</p>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
</div>

</body>
</html>
{{-- <script src="https://cdn.socket.io/socket.io-1.4.5.js"></script>
    <script type="text/javascript">
      var socket = io.connect(':3000');

      jQuery(document).ready(function($) {
        $('#messages').scrollTop = $("#messages").scrollHeight;
        var data = {
                  sender_id :{{Auth::user()->id}},
                  receiver_id: 7,
                  message :  ""
              };

              
              if ({{Auth::user()->id}}==7) {
                data.receiver_id=6;
              }
        $('form').submit(function(){
          data.message = $('#m').val();
          socket.emit('chat message', data);
          $('#m').val('');
          socket.on('all_data', function(result){
                      $('#messages').text('');
                      $.each(result,function (key,value) {
                          if (value.sender_id ==6) {
                            $('#messages').append('<li>' +'<div class="col-md-12"><div class="bubble pull-right sender">' +value.message +'</div></div></li>');
                          }
                          else{
                            $('#messages').append('<li>' +'<div class="col-md-12"><img src="assets/images/58417ef9ec469.jpg" class="img-responsive img-circle pull-left" alt=""><div class="bubble pull-left">' +value.message +'</div></div></li>');
                          }
                      });
          });
          return false;
        });
        // socket.emit('data',data);
        // socket.on('all_data', function(result){
        //       $('#messages').text('');
        //       $.each(result,function (key,value) {
        //           if (value.sender_id == 6) {
        //             $('#messages').append('<li>' +'<div class="col-md-12"><div class="bubble pull-right sender">' +value.message +'</div></div></li>');
        //           }
        //           else{
        //             $('#messages').append('<li>' +'<div class="col-md-12"><img src="assets/images/58417ef9ec469.jpg" class="img-responsive img-circle pull-left" alt=""><div class="bubble pull-left">' +value.message +'</div></div></li>');
        //           }
        //       })
        // });
      });

    </script> --}}