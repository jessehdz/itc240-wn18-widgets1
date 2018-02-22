<?php 
/*
config.php

-- put configuration information here

*/

//copyright
$curYear = date('Y');

//echo 'inside config file!';

//echo basename($_SERVER['PHP_SELF']); //way for a page to identify itself (location)

//constants are primative and never change
define('DEBUG',TRUE); #we want to see all errors
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav1['index.php'] = "HOME";
$nav1['customers.php'] = "CUSTOMERS";
$nav1['daily.php'] = "DAILY";
$nav1['contact.php'] = "CONTACT";

//defaults for header.php
$banner = 'WIDGETS';
$slogan = 'Our widgets are better!';

switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'Home Page';
        $pageID = 'HOME';
        $icon = '<i class="fas fa-home fa-2x"></i>';
        break;
        
    case 'customers.php':
        $title = 'Customers Page';
        $pageID = 'CUSTOMERS';
        $icon = '<i class="fas fa-id-card fa-2x"></i>';
        break;
    
    case 'daily.php':
        $title = 'Daily Page';
        $pageID = 'DAILY';
        $icon = '<i class="fas fa-calendar-alt fa-2x"></i>';
        break;
        
    case 'contact.php':
        $title = 'Contact Us Page';
        $pageID = 'CONTACT US';
        $icon = '<i class="fas fa-envelope fa-2x"></i>';
        break;
        
    //absolute requirement from google to have unique title
    default:
        $title = THIS_PAGE;
        
        
}

//other include files referenced here
include 'credentials.php';
//NO OTHER CREDENTIALS OR CONFIG FILES

//testing above code
/*echo DB_HOST;
die;*/

//safe error messages
function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
        echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
        die();
    }
}

function widget_links($nav1) 
{
    foreach($nav1 as $url => $text) {
//        echo '<li><a href="' . $url . '">' . $text . '</a></li>';
        
        if(THIS_PAGE == $url) {
            echo '
            <li class="nav-item active px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
            </li>
        ';   
        } else {
            echo '
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
            </li>
        ';   
        } 
    }
    
} //end widget_links

?>