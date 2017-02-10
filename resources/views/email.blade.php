  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
  <body style="position:absolute">

    <!-- LEFT MENU -->
    <div class="left-menu">
     <div id="mySidenav" class="sidenav">
      <div class="nav-side-menu">
        <!-- BRAND, LOGO -->
        <div class="brand hidden-xs"><a href="index.php"><img class="" src="assets/images/logo.png" alt=""></a>
          <i class="fa fa-envelope" aria-hidden="true"></i><i class="fa fa-home" aria-hidden="true"></i>
          <span>2</span>
        </div>
          <div class="left-email-menu pull-left">
            <ul>
              <li><a href="#"><i class="fa fa-home" style="font-size:19px" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-th" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa fa-adjust" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-file-text" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="icon-custom-ui" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="icon-custom-form" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="icon-custom-portlets" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="icon-custom-thumb" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="icon-custom-map" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="icon-custom-chart" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="icon-custom-extra" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-folder-open" aria-hidden="true"></i></a></li>
            </ul>
          </div>

          <div class="right-email-menu">
            <div class="compose text-center">
              <a href="compose"><span class="bold">COMPOSE</span></a>
            </div>
            <div class="email-menu-content">
              <h6>FOLDER</h6>
              <ul class="text-right">
                <li><a href="#"><span>2</span> Inbox</a></li>
                <li><a href="#">Sent</a></li>
                <li><a href="#">Draft</a></li>
                <li><a href="#">Trash</a></li>
              </ul>
              <ul class="text-right">
                <li><a href="#">Home</a></li>
                <li><a href="#"><span>2</span> Work</a></li>
              </ul>
              <h6>QUICK VIEW</h6>
              <ul class="text-right">
                <li><a href="#">Documents</a></li>
                <li><a href="#"><span class="hotnews gray">203</span> Images</a></li>
                <li><a href="#">Flagged</a></li>
              </ul>
            </div>
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
       <div class="input-group col-md-8 col-lg-12">
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
              <h2  class="pull-left">Inbox </h2>

               <div class="dropdown pull-right">
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
              <span class="caret"></span></button>
              <ul class="dropdown-menu ">
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">JavaScript</a></li>
              </ul>
            </div></h2>
            </div>

            <div class="mail-pages pull-right">
              {{$mail->links()}}
            </div>
            <div class="pull-right mail-pages-info">
               Showing <b>1 to 10</b> of <b>14</b> entries
            </div>

          </div>
          <div class="col-md-12 mail-content">
          <table>
            <tbody>
              @foreach($mail as $message)

                <tr>
                  <td>
                    <div >
                      <input id="checkbox8" type="checkbox" style="" value="1">
                    </div>
                  </td>
                  <td>
                    <div class="star">
                      <input id="checkbox9"
                      class="hidden" type="checkbox" value="1" >
                      <label for="checkbox9" class=""></label>
                    </div>
                  </td>
                  <td class="clickable v-align-middle">{{$message->sender_name}}</td>
                  <td class="clickable tablefull v-align-middle"><span class="muted">{{$message->heading}}</span></td>
                  <td class="clickable"><span class="muted">{{$message->created_at}}</span></td>
                </tr>


              @endforeach
            </tbody>
          </table>
          </div>
  		  </div>

	 </div>
</div>
<div class="clearfix">

</div>
