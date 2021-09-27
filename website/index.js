var express = require('express');
var path = require('path');
var app = express();

app.use(express.static(path.join(__dirname, 'client')));

app.get('/', function (req, res) {
    res.sendFile(path.join(process.cwd(), 'client', 'index.html'));
});

var server = app.listen(80, function () {
    var port = server.address().port

    console.log(`Inessaweb Portal Listening at port: ${port}`)
});