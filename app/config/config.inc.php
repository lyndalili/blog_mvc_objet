<?php

if ($_SERVER["HTTP_HOST"] == "localhost:8888") {

    //en DEV
    define("DB_HOST", "localhost");
    define("DB_NAME", "afpa_blog_2020");
    define("DB_USER", "root");
    define("DB_PASSWORD", "root");
    define("DB_CHARSET", "utf8");
  
    define("DEFAULT_MODULE", "posts");
    define("DEFAULT_ACTION", "index");
    define("ABSOLUTE", "http://localhost:8888/documents/blog2/");
    
} else {
    //en prod
    define("DB_HOST", "sql210.epizy.com");
    define("DB_NAME", "epiz_27262904_w812");
    define("DB_USER", "epiz_27262904");
    define("DB_PASSWORD", "VKMKp3Lmi1aXpmG");
    define("DB_CHARSET", "utf8");
    define("DEV", false);
    define("DEFAULT_MODULE", "posts");
    define("DEFAULT_ACTION", "index");
    define("ABSOLUTE", "http://lyndahaddad.epizy.com/blog2/");
   
}
define("TRUNCATE", 300);


 
define("NBPAGE", 3);
