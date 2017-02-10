var app = require('express')();
var mysql = require('mysql');
var http = require('http').Server(app);
var io = require('socket.io')(http);
var PORT = process.env.PORT || 3000;
var connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'webarch'
  });
  connection.connect(function (err) {
    if (err){
        console.error("error connecting " + err.stack);
    }
});
app.get('/', function(req, res){
  res.sendFile(__dirname + 'index.html');
});

io.on('connection', function(socket){
  socket.on('data', function(result) {
    connection.query("SELECT * FROM chats WHERE sender_id=" + result.sender_id, function (err,result) {
        if (err) throw err;
        io.emit('all_data',result);
    });
  });
  socket.on('chat message', function(data){
    if (data.message != '') {
      connection.query('INSERT INTO chats SET?',[data],function (err) {
          if (err) throw err;
          connection.query("SELECT * FROM chats WHERE sender_id=" + data.sender_id,function (err,result) {
                if (err) throw err;
                io.emit('all_data',result);
            });
      });
    }else {
      console.log('Mesaj boş ola bilməz');
    }
    socket.on(data, function(result){

    connection.query("SELECT * FROM chats WHERE sender_id=" + data.sender_id,function (err,result) {
          if (err) throw err;
          io.emit('all_data',result);
      });
    });
  });

});
