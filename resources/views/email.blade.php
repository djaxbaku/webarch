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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://rawgithub.com/darkskyapp/skycons/master/skycons.js"></script>
    <script src="/vendor/rickshaw-master/vendor/d3.min.js"></script> 
    <script src="/vendor/rickshaw-master/vendor/d3.layout.min.js"></script> 
    <script src="/vendor/js/main.js"></script>
    <script src="/vendor/rickshaw-master/rickshaw.min.js"></script> 
    <script src="/vendor/js/jquery.sparkline.min.js"></script>
    <link rel="stylesheet" href="/vendor/fonts/line-icons.woff">
    <link rel="stylesheet" href="/vendor/css/font-awesome.css">
    <link rel="stylesheet" href="/vendor/css/font-lineicons.css">
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
    <h6>{{Auth::user()->name}}CHARTS</h6>
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
    <div class="col-md-12 active">
      <img src="assets/images/d.jpg" class="img-circle pull-left" alt="">
      <i class="fa fa-circle-o pull-right fa-lg" aria-hidden="true"></i>
      <p>Jane Smith</p>
      <span>Hello you here?</span>
    </div>
    <div class="col-md-12">
      <img src="assets/images/c.jpg" class="img-circle pull-left" alt="">
      <i class="fa fa-circle-o pull-right fa-lg offline" aria-hidden="true"></i>
      <p>David Nester</p>
      <span>Busy,Do not disturb</span>
    </div>
    <h6>MORE FRIENDS</h6>
    <div class="col-md-12">
      <img src="assets/images/d.jpg" class="img-circle pull-left" alt="">
      <i class="fa fa-circle-o pull-right fa-lg" aria-hidden="true"></i>
      <p>Jane Smith</p>
      <span>Hello you here?</span>
    </div>
    <div class="col-md-12">
      <img src="assets/images/h.jpg" class="img-circle pull-left" alt="">
      <i class="fa fa-circle-o pull-right fa-lg offline" aria-hidden="true"></i>
      <p>David Nester</p>
      <span>Busy,Do not disturb</span>
    </div>
    <div class="col-md-12">
      <img src="assets/images/c.jpg" class="img-circle pull-left" alt="">
      <i class="fa fa-circle-o pull-right fa-lg" aria-hidden="true"></i>
      <p>Jane Smith</p>
      <span>Hello, you there?</span>
    </div>
    <div class="col-md-12">
      <img src="assets/images/h.jpg" class="img-circle pull-left" alt="">
      <i class="fa fa-circle-o pull-right fa-lg offline" aria-hidden="true"></i>
      <p>David Nester</p>
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
    <div class="col-md-12 ">
    <div class="bubble pull-right sender">
      Let me know when you free
      <div class="senderarrow"></div>
    </div>
  </div>
   <div class="chat-input col-md-12">
   
   {{ csrf_field() }}
   <input type="hidden" >
    <textarea rows="1" placeholder="Type your message" class="text"></textarea>
    
  </div>
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
       <div class="input-group col-md-8">
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
  		  <div class="mail-body">
    		  <div class="mail-head">
            <div class="pull-left">
              <h2>Inbox
               <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">JavaScript</a></li>
              </ul>
            </div></h2>
            </div>
            <div class="pull-right mail-pages">
               <ul class="list-inline">
                 <li><i class="fa fa-2x fa-angle-left" aria-hidden="true"></i>
                 </li>
                 <li class="active">1</li>
                 <li>2</li>
                 <li><i class="fa fa-2x fa-angle-right" aria-hidden="true"></i></li>
               </ul>
            </div>  
            <div class="pull-right mail-pages-info">
               Showing <b>1 to 10</b> of <b>14</b> entries
            </div>  
          </div>
          <div class="col-md-12">
          <table>
            <tbody>
              <tr>
                <td >
                  <div class="checkbox check-success">
                    <input id="checkbox8" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="star">
                    <input id="checkbox9" type="checkbox" value="1" checked="">
                    <label for="checkbox9" class=""></label>
                  </div>
                </td>
                <td class="clickable v-align-middle">David Nester</td>
                <td class="clickable tablefull v-align-middle"><span class="muted">Less spam, and mobile access. Gmail is email that's intuitive, ...efficient, and useful. And maybe even fun.</span></td>
                <td class="clickable"><span class="muted">Yesterday </span></td>
              </tr>
            </tbody>
          </table>
          </div>
  		  </div>
	 </div>
</div>