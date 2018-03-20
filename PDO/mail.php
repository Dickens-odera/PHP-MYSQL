<?php 
//=================EMAIL VALIDATION======================//
function validateEmail($email) {
      return filter_var($email, FILTER_VALIDATE_EMAIL);
   }
   //====================URL VALIDATION======================//
    function validateURL($URL) {
      $pattern_1 = "/^(http|https|ftp):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+.(com|org|net|dk|at|us|tv|info|uk|co.uk|biz|se)$)(:(\d+))?\/?/i";
      $pattern_2 = "/^(www)((\.[A-Z0-9][A-Z0-9_-]*)+.(com|org|net|dk|at|us|tv|info|uk|co.uk|biz|se)$)(:(\d+))?\/?/i";       
      if(preg_match($pattern_1, $URL) || preg_match($pattern_2, $URL)){
        return true;
      } else{
        return false;
      }
    }
?>