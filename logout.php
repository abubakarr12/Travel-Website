<?php


include('include/db.php');

session_unset();
session_destroy();

header("location: register.php");
