<?php
/*************************************************************
 * Guide to writing functions in WordPress
 **************************************************************/

 // a basic function 
 
 function orionf_say_hello() {

    echo 'Greetings. Welcome to Wordpress PHP';

 }

 // a plugable function

 if ( ! function_exists ( ' orionf_say_hello ')) {

    function orionf_say_hello(){

        echo 'I\'m working towards becoming a great WordPress developer.';
        }
    }
    
  
