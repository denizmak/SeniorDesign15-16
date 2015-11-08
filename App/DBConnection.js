/**
 * Created by Deni on 11/7/15.
 */


/**
 * Created by Deni on 11/7/15.
 */


var mysql = require('mysql');

var connection = mysql.createConnection
({
    host     : 'us-cdbr-azure-east-a.cloudapp.net',
    user     : 'b20220a8f33fd0',
    password : 'aafe2e63',
    database : 'ERAU_DB'
});

connection.connect();



var strQuery = 'SELECT * FROM Account ORDER BY username;';
var strQuery2 = 'SELECT LastName, firstName FROM Instructor ORDER BY lastName, firstName;';
var strQuery3 = 'SELECT courseID FROM Course ORDER BY courseID;';


connection.query(strQuery3, function(err, rows, fields)
{
    if (err) throw err;

    console.log('Data received from DB:\n');
    console.log(rows);
});

connection.end();