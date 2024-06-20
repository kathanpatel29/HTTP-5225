<?php
 $connect = mysqli_connect('localhost', 'root', 'root', 'airplanes');
 if(!$connect){
   die("Connection Failed: " . mysqli_connect_error());
 }