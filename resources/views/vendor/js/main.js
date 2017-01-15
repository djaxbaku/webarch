
  $( document ).ready(function() {

    $(".fa-bars").click(function () {
      
      if ( 767 > $(window).width()  ) {
        $("#mySidenav").toggleClass("nav-opener");
        $("#main-part").toggleClass("nav-opener-main-part");
      }
      else{
        $("#mySidenav").toggleClass("widthtoggle");
      $("#main-part").toggleClass("margintoggle");
      }
    });
    $(".usermessages").click(function () {
      $(".notifications").toggleClass("displaytoggle");
    });
    $(".favourites .col-md-12").click(function () {
      $(".favourites").css('display', 'none ');
      $(".group-charts").css('display', 'none');
      $(".chat-messages").css('display', 'block');
      $('.chat-input').css('display', 'block');
    });
    $(".fa-cog1").click(function () {
      $(".settings").toggleClass("displaytoggle");
    });
    $(".fa-cog1").click(function () {
      $(".notifications").removeClass("displaytoggle");
    });
    $(".usermessages").click(function () {
      $(".settings").removeClass("displaytoggle");
    });
    $(".chat-open").click(function () {
      
      $(".settings").toggleClass("margin-right-toggle");
      if ( 767 > $(window).width()  ) {
        $("#main-part").toggleClass("right-toggle");
      $("#mySidenav").toggleClass('margin-left-toggle');
      $(".main-chat").toggleClass('z-index-toggle');
      
      }
      else{
        $("#main-part").toggleClass("margin-right-toggle");
      $("#mySidenav").toggleClass('margin-left-toggle');
      $(".main-chat").toggleClass('z-index-toggle');
      $(".notifications").toggleClass("margin-right-toggle");
      }
    });
    
    $(window).resize(function() {
     if (768 < $(window).width() && 991 > $(window).width()  ) {
      $("#mySidenav").addClass("widthtoggle");
      $("#main-part").addClass("margintoggle");
      };
});
    $('.count').each(function () {
      $(this).prop('Counter',0).animate({
        Counter: $(this).text()
      }, {
        duration: 500,
        easing: 'swing',
        step: function (now) {
          $(this).text(Math.ceil(now));
        }
      });
    });
//     if (768 < $(window).width() && 991 > $(window).width()  ) {
//       $("#mySidenav").addClass("widthtoggle");
//       $("#main-part").addClass("margintoggle");
//       };
// });

    function progress(percent, $element) {
      var progressBarWidth = percent * $element.width() / 100;
      $element.find('div').animate({ width: progressBarWidth }, 500);
    }
    progress(64, $('#progressBar'));
    progress(54, $('#progressBar2'));
    progress(90, $('#progressBar3'));
    progress(90, $('#progressBar4'));

    $(".exitbutton").click(function(){
      $(this).parents(".col-md-4").fadeToggle('slow');
    });
    $(".fa-times").click(function(){
      $(this).parents(".col-md-12").fadeToggle('slow');
    });
    function stats(){
            var stats = [Math.round(Math.random()*10),Math.round(Math.random()*10),Math.round(Math.random()*10),Math.round(Math.random()*10),Math.round(Math.random()*10),'7','9','8','7','9','7','8','8','9','9','8','7','8','8','8','8','8','9','7','6','8','1'];
    $("#sparkline").sparkline([stats[0],stats[1],stats[2],stats[3],7,9,8,7,9,7,8,8,9,9,8,7,8,8,8,8,8,9,7,6,8,1], {
      type: 'line',
      lineColor: '#',
      fillColor: '#2C3038',
      height:'60px',
      width:'100%',
      spotRadius: 0});
    }
    setInterval(stats, 1000);
   
    $("#sparkline2").sparkline([9,8,7,9,9,8,9,8,8,9,7,8,8,9,9,8,7,8,8,8,7,9,9,1,8,7], {
      type: 'line',
      lineColor: '#',
      fillColor: 'black',
      height:'60px',
      width:'100%',
      spotRadius: 0});
    $("#sparkline3").sparkline([9,8,7,9,9,8,9,8,8,9,7,8,8,9,9,8,7,8,8,8,7,9,9,1,8,7], {
      type: 'line',
      lineColor: '#',
      fillColor: '#F2F4F6',
      height:'60px',
      width:'100%',
      spotRadius: 0});
    $("#sparkline4").sparkline([1,8,7,9,9,8,9,8,8,9,7,8,8,9,9,8,7,8,8,8,7,9,9,9,8,9], {
      type: 'line',
      lineColor: '#',
      fillColor: '#F35958',
      height:'60px',
      width:'100%',
      spotRadius: 0});
    $("#sparkline5").sparkline([1,8,7,9,8], {
      type: 'line',
      lineColor: 'white',
      fillColor: '#0AA699',
      height:'60px',
      width:'100%',
      spotColor: 'white',
      spotRadius: 2.5});

     setInterval(function(){
        $.slider_height= $('.slider1').height();
        
        $('.slider1 ul').animate({
          marginTop: "-"+$.slider_height+"px"
          },
          750, function() {

          $('.slider1 ul li:last').after($('.slider1 ul li:first'));
          $(this).css('margin-top', '0');
        });

      } , 2000);;
      setInterval(function(){
        $.slider_height= $('.slider2').height();
        
        $('.slider2 ul').animate({
          marginTop: "-"+$.slider_height+"px"
          },
          750, function() {

          $('.slider2 ul li:last').after($('.slider2 ul li:first'));
          $(this).css('margin-top', '0');
        });

      } , 3000);;

  // SKYCONS
  var icons = new Skycons({
    "color": "#73879C"
  }),
  list = [
  "clear-day", "clear-night", "partly-cloudy-day",
  "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
  "fog"
  ],
  i;

  for (i = list.length; i--;) {
    var weatherType = list[i],
    elements = document.getElementsByClassName(weatherType);
    for (e = elements.length; e--;) {
      icons.set(elements[e], weatherType);
    }
  }

  icons.play();
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


});

  
  var graph = new Rickshaw.Graph({
    renderer: 'bar',
    element: document.querySelector('#chart'),
    series: [ 
    {
      data: [ { x: 0, y: 4 }, { x: 1, y: 0 }, { x: 2, y: 38 }, { x: 3, y: 30 }, { x: 4, y: 32 }, { x: 5, y: 16 }, { x: 6, y: 16 }, { x: 7, y: 16 }, { x: 8, y: 12 }, { x: 9, y: 12 }, { x: 10, y: 16 }, { x: 11, y: 16 }, { x: 12, y: 19 }, { x: 13, y: 15 }, { x: 14, y: 34 }, { x: 15, y: 16 }, { x: 16, y: 16 }, { x: 17, y: 23 } ],
      color: 'rgb(39, 206, 188)'
    },
    {
      data: [ { x: 0, y: 6 }, { x: 1, y: 24 }, { x: 2, y: 19 }, { x: 3, y: 15 }, { x: 4, y: 16 }, { x: 5, y: 16 }, { x: 6, y: 16 }, { x: 7, y: 16 }, { x: 8, y: 12 }, { x: 9, y: 12 }, { x: 10, y: 16 }, { x: 11, y: 16 }, { x: 12, y: 19 }, { x: 13, y: 15 }, { x: 14, y: 34 }, { x: 15, y: 16 }, { x: 16, y: 16 }, { x: 17, y: 34 } ],
      color: 'rgb(61, 185, 175)'

    },
    {
      data: [ { x: 0, y: 10 }, { x: 1, y: 24 }, { x: 2, y: 19 }, { x: 3, y: 15 }, { x: 4, y: 16 }, { x: 5, y: 16 }, { x: 6, y: 16 }, { x: 7, y: 16 }, { x: 8, y: 12 }, { x: 9, y: 12 }, { x: 10, y: 16 }, { x: 11, y: 16 }, { x: 12, y: 19 }, { x: 13, y: 15 }, { x: 14, y: 21 }, { x: 15, y: 16 }, { x: 16, y: 16 }, { x: 17, y: 34 } ],
      color: 'rgb(242, 244, 246)'

    } ]

  });

  graph.render();    

 var graph = new Rickshaw.Graph({
  renderer: 'area',
  element: document.querySelector('#chart1'),
  stroke: true,
  series: [ 
  {
    data: [ { x: 0, y: 9 }, { x: 1, y: 25 }, { x: 2, y: 38 }, { x: 3, y: 30 }, { x: 4, y: 32 }, { x: 5, y: 16 }, { x: 6, y: 16 }, { x: 7, y: 16 }, { x: 8, y: 12 }, { x: 9, y: 12 }, { x: 10, y: 16 }, { x: 11, y: 16 }, { x: 12, y: 19 }, { x: 13, y: 15 }, { x: 14, y: 34 }, { x: 15, y: 16 }, { x: 16, y: 16 }, { x: 17, y: 23 } ],
    color: 'rgb(39, 206, 188)'
  },
  {
    data: [ { x: 0, y: 6 }, { x: 1, y: 24 }, { x: 2, y: 19 }, { x: 3, y: 15 }, { x: 4, y: 16 }, { x: 5, y: 16 }, { x: 6, y: 16 }, { x: 7, y: 16 }, { x: 8, y: 12 }, { x: 9, y: 12 }, { x: 10, y: 16 }, { x: 11, y: 16 }, { x: 12, y: 19 }, { x: 13, y: 15 }, { x: 14, y: 34 }, { x: 15, y: 16 }, { x: 16, y: 16 }, { x: 17, y: 34 } ],
    color: '#E9ECEE'

  } ]

});

 graph.render();   
 var graph = new Rickshaw.Graph({
  renderer: 'line',
  element: document.querySelector('#chart3'),
  stroke: true,
  series: [ 
  {
    data: [ { x: 0, y: 11 }, { x: 1, y: 25 }, { x: 2, y: 27 }, { x: 3, y: 30 }, { x: 4, y: 32 }, { x: 5, y: 16 }, { x: 6, y: 26 }, { x: 7, y: 16 }, { x: 8, y: 12 }, { x: 9, y: 12 }, { x: 10, y: 16 }, { x: 11, y: 16 }, { x: 12, y: 19 }, { x: 13, y: 21 }, { x: 14, y: 34 }, { x: 15, y: 16 }, { x: 16, y: 16 }, { x: 17, y: 23 } ],
    color: '#E0E3E5'
  },
  {
    data: [ { x: 0, y: 6 }, { x: 1, y: 24 }, { x: 2, y: 19 }, { x: 3, y: 15 }, { x: 4, y: 16 }, { x: 5, y: 16 }, { x: 6, y: 16 }, { x: 7, y: 16 }, { x: 8, y: 12 }, { x: 9, y: 14 }, { x: 10, y: 16 }, { x: 11, y: 20 }, { x: 12, y: 19 }, { x: 13, y: 15 }, { x: 14, y: 34 }, { x: 15, y: 16 }, { x: 16, y: 16 }, { x: 17, y: 34 } ],
    color: '#F26766'

  } ]

});

 graph.render();   

  $(document).keyup(function(e) {
    if(e.keyCode ==13){
      sendMessage();

    }
    else{
      isTyping();
    }
  });
  
  function sendMessage(){
    var text= $('textarea').val();
    var username = '{{Auth::user()->name}}';
    if (text.length > 1) {
      var text= $('textarea').val();
    var username = '{{Auth::user()->name}}';
        $.ajax({
            data:username,
            dataType: 'json',
            url: 'sendMessage',
            type: 'POST',
            contentType: 'application/json; charset=utf-8',
            success: function (result) {
                alert(result);
            },
            failure: function (errMsg) {
                alert('errMsg');
            }
        });
     
    }
    function isTyping(){
      $.post('/isTyping', {username: username});
    }
    function notTyping(){
      $.post('/notTyping', {username: username});
    }
  }
