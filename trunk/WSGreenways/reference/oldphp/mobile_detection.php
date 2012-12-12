<?php

function mobile_device_detect($iphone=true,$android=true,$opera=true,$blackberry=true,$palm=true,$windows=true,$mobileredirect=false,$desktopredirect=false){

  $mobile_browser   = false; //
  $user_agent       = $_SERVER['HTTP_USER_AGENT'];
  $accept           = $_SERVER['HTTP_ACCEPT'];

  switch(true){
  
  	/* iPhone & iPod */
    case (eregi('ipod',$user_agent)||eregi('iphone',$user_agent));
      $mobile_browser = $iphone;
      if(substr($iphone,0,4)=='http'){
        $mobileredirect = $iphone;
      }
    break;

	/* Android */
    case (eregi('android',$user_agent));
      $mobile_browser = $android;
      if(substr($android,0,4)=='http'){
        $mobileredirect = $android;
      }
    break;

	/* Opera mini */
    case (eregi('opera mini',$user_agent));
      $mobile_browser = $opera;
      if(substr($opera,0,4)=='http'){
        $mobileredirect = $opera;
      }
    break;

	/* Blackberry */
    case (eregi('blackberry',$user_agent));
      $mobile_browser = $blackberry;
      if(substr($blackberry,0,4)=='http'){
        $mobileredirect = $blackberry;
      } 
    break;

	/* Palm */
    case (preg_match('/(palm os|palm|hiptop|avantgo|plucker|xiino|blazer|elaine|Pre)/i',$user_agent));
      $mobile_browser = $palm;
      if(substr($palm,0,4)=='http'){
        $mobileredirect = $palm;
      }
    break;

	/* Windows mobile */
    case (preg_match('/(windows ce; ppc;|windows ce; smartphone;|windows ce; iemobile)/i',$user_agent));
      $mobile_browser = $windows;
      if(substr($windows,0,4)=='http'){
        $mobileredirect = $windows;
      } 
    break;

	/* Common mobile devices */
    case (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|vodafone|o2|pocket|kindle|mobile|pda|psp|treo)/i',$user_agent));
      $mobile_browser = true;
    break;

    case ((strpos($accept,'text/vnd.wap.wml')>0)||(strpos($accept,'application/vnd.wap.xhtml+xml')>0));
      $mobile_browser = true;
    break;

    case (isset($_SERVER['HTTP_X_WAP_PROFILE'])||isset($_SERVER['HTTP_PROFILE']));
      $mobile_browser = true;
    break;

  } // ends the switch 

  // tell adaptation services (transcoders and proxies) to not alter the content based on user agent as it's already being managed by this script
  header('Cache-Control: no-transform');
  header('Vary: User-Agent, Accept');

  // if redirect is true redirect else we return the status of $mobile_browser
  if($redirect = ($mobile_browser==true) ? $mobileredirect : $desktopredirect){
    header('Location: '.$redirect);
    exit;
  }else{ 
    return $mobile_browser; 
  }

}

?>