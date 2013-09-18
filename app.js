// Init
var express = require('express')
    , cons = require('consolidate')
    , app = express()
    , app_port = 81;

// Configuration
app.engine('html', cons.ejs);  // assign the ejs engine to .html files
app.set('view_engine', 'html');  // set .html as the default extension
app.set('views', __dirname + '/views');  // views directory
app.use('/static', express.static(__dirname + '/public'));  // static files


// Routes
app.get('/', function(req, res) {
    res.render('teste.html');
});

// Listen
app.listen(app_port);
console.log('Listening on port ' + app_port);
