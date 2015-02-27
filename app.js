var http = require('http');
var static = require('node-static');
var port = process.env.PORT || 8080;
var file = new static.Server('.');

var server = http.createServer(function (req, res) {
    file.serve(req, res);
});

server.listen(port);
////////////////////////////////////////////////////////////////////////////
var io = require('socket.io')(server);
var usernames = {};
var numUsers = 0;

io.on('connection', function (socket) {
    var addedUser = false;

    socket.on('add user', function (username) {
        console.log('Received name: ', username, 'from client');

        socket.username = username;
        usernames[username] = username;
        ++numUsers;
        addedUser = true;
        socket.emit('login', {
            numUsers: numUsers
        });
        socket.broadcast.emit('user joined', {
            username: socket.username,
            numUsers: numUsers
        });
    });

    socket.on('new message', function (data) {
        console.log('Received message: ', data.message, ' from ', data.username);
        io.emit('new message', {
            username: data.username,
            message: data.message
        });
    });

    //socket.on('disconnect', function () {
    //    // remove the username from global usernames list
    //    if (addedUser) {
    //        delete usernames[socket.username];
    //        --numUsers;
    //
    //        // echo globally that this client has left
    //        socket.broadcast.emit('user left', {
    //            username: socket.username,
    //            numUsers: numUsers
    //        });
    //    }
    //});
});