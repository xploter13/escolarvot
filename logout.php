<?php
session_start();
session_destroy();
session_unset();
header('location: http://localhost:8080/escolarvot/');
