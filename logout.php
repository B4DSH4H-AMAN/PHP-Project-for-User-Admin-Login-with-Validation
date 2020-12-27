<?php

session_start();

if(session_destroy()){
    header("location: AdminLogin.htm");
}













?>