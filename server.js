
var ghost = require('ghost'),
  express = require('express'),
  app = express();

app.use(express.static('html'));


ghost().then(function (ghostServer) {
  app.use(ghostServer.config.paths.subdir, ghostServer.rootApp);

  ghostServer.start(app);
});

app.listen(3000);