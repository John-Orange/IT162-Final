<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();
//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Yana's Studio";
        $PageID = "Welcome to Yana's Studio";

    break;

    case 'gallery.php':
        $title = "Yana";
        $PageID = 'Testing';
    break;

    case 'services.php':
        $title = "Servies page";
        $PageID = "Servies";
    break;

    case 'contactme.php':
        $title = "Yana's Studio Contact Page";
        $PageID = 'Contact Yana';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
}


//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Welcome";
    $nav1['gallery.php'] = "Gallery";
    $nav1['services.php'] = "Services";
    $nav1['contactme.php'] = "Contact";
    

/*<!--
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Zhongyuan</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
--> */

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}





?>



