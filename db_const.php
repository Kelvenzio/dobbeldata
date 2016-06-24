<?php
const DB_HOST = 'localhost';
const DB_USERNAME = '20452';
const DB_PASSWORD = 'zfsakucx';
const DB_NAME = 'poker20452';
// maak connectie
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);//maak instance van mysqli class
// check connectie
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    else{ echo "Connected <br>";}
