const express = require('express');
const app = express();

const PORT = process.env.PORT || 3002;

app.get("/", function(req, res) {
    res.sendFile(__dirname + '/index.html');
});
app.use(express.static(__dirname + '/public'));


/*
app.listen(PORT, () => {
    // console.log(`App is UP on port ${PORT}`);
});

*/
