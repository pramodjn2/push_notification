<?php
public function sendOtpMobile($phone,$otp){
              if(!empty($phone) && !empty($otp)){
             
                              $ch = curl_init();
                            $url="https://control.msg91.com/api/sendhttp.php?authkey=167017AeiaeT42JEr659783c0c&mobiles=".$phone."&message=Your%20ShareYatra%20OTP%20is%20".$otp."&sender=SHAREY&route=4";
                            curl_setopt($ch, CURLOPT_URL,$url);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_HEADER, 0);  
                            $output=curl_exec($ch);
                            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                            curl_close($ch);
                                 if($httpcode=="200"){
                               
                                    return true;
                                
                                  }else{
                                    
                                      return false;
                                  }
                             }else{
                            
                                      return false;
                               
                            }
                      }



-------------------------

    $otpCode=mt_rand(100000, 999999);

?>