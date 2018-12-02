Install Node js in ubuntu : 

sudo apt-get update

sudo rm -rf /usr/local/bin/npm /usr/local/share/man/man1/node* /usr/local/lib/dtrace/node.d ~/.npm ~/.node-gyp /opt/local/bin/node opt/local/include/node /opt/local/lib/node_modules

sudo apt-get remove nodejs

sudo apt-get remove npm

sudo apt-get update

which node

sudo rm -rf /usr/local/lib/node*

sudo rm -rf /usr/local/include/node*

sudo rm -rf /usr/local/bin/node*

sudo apt-get update

sudo apt-get install nodejs

sudo apt-get install npm

curl -sL https://deb.nodesource.com/setup_9.x | sudo -E bash -

sudo apt-get install -y nodejs

sudo apt-get install -y build-essential

sudo apt-get update

sudo apt-get install build-essential libssl-dev

curl https://raw.githubusercontent.com/creationix/nvm/v0.16.1/install.sh | sh

source ~/.profile

nvm ls-remote

nvm install 9.7.1

node -v

nvm ls

nvm alias default 9.7.1

nvm use default

npm install -g express

npm i -g npm

npm link express

Create project folder

cd /var/www/html/chat

create file package.json

{
  "name": "telenyze",
  "version": "0.0.1",
  "description": "my first socket.io app",
  "dependencies": {}
}

install package in package.json

npm install --save express@4.15.2

create file index.js

var app = require('express')(); // include express package
var http = require('http').Server(app); // include http
// get method include html 
app.get('/', function(req, res){
res.sendFile(__dirname + '/index.html');
});
// port number where project will run like localhost:3000
http.listen(3000, function(){
  console.log('listening on *:3000');
});

// Run file use this command 
node index.js

// install soket.io
npm install --save socket.io

// include package socket.io in index.js
var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

app.get('/', function(req, res){
  res.sendFile(__dirname + '/index.html');
});

io.on('connection', function(socket){
  console.log('a user connected');
});

http.listen(3000, function(){
  console.log('listening on *:3000');
});

// install mysql connection package see ex: https://www.npmjs.com/package/mysql
npm install mysql
 

For more example see : https://socket.io/get-started/chat/

// install FCM for notification 
npm install fcm-node