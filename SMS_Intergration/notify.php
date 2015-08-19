<?php 
        
        $soapUrl = "http://196.11.241.46:8310/SmsNotificationManagerService/services/SmsNotificationManager"; // asmx URL of WSDL
        $soapUser = "1000010000469";  //  username
        $soapPassword = "bmeB500"; // password

		$todays_date = date("Y-m-d H:i:s ");
		
		$spid='1000010000469';
		$password='bmeB500';
		$timestamp=trim($todays_date,"-:");
		
		//Encrypting the pasword
		
		$spPassword = md5($spid.$password.$timestamp);
		
		//20100731   06424
		//http://196.11.241.46:8312/SmsNotificationManagerService/services/SmsNotificationManager

        // xml post structure

$xml_post_string = 'xmlns:loc="http://www.csapi.org/schema/parlayx/sms/notification_manager/v2_3/local">     
                <soapenv:Header>        
                                <RequestSOAPHeader xmlns="http://www.huawei.com.cn/schema/common/v2_1">          
                                <spId>1000010000469<spId>           
                                <spPassword>$spPassword</spPassword>           
                                <serviceId>100002000001670</serviceId>           
                                <timeStamp>$timestamp</timeStamp>        
                                </RequestSOAPHeader>     
                </soapenv:Header>     
                <soapenv:Body>        
                                <loc:startSmsNotification>          
                                <loc:reference>              
                                <endpoint>192.168.0.90/SMS_Intergration/notify.php</endpoint>              
                                <interfaceName>notifySmsReception</interfaceName>              
                                <correlator>00001</correlator>           
                                </loc:reference>           
                                <loc:smsServiceActivationNumber>1234501</loc:smsServiceActivationNumber>          
                                <loc:criteria>demand</loc:criteria>        
                                </loc:startSmsNotification>     
                </soapenv:Body>  
                                </soapenv:Envelope>';   




           $headers = array(
                        "Content-type: text/xml;charset=\"utf-8\"",
                        "Accept-Encoding: gzip,deflate",
                        "Accept: text/xml",
                        "Cache-Control: no-cache",
                        "Pragma: no-cache", 
                        "Content-length: ".strlen($xml_post_string),//758
                    ); 


            $url = $soapUrl;

            // PHP cURL  for https connection with auth
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            // converting
            $response = curl_exec($ch); 
            curl_close($ch);

            // converting
            $response1 = str_replace("<soap:Body>","",$response);
            $response2 = str_replace("</soap:Body>","",$response1);

            // converting to XML
            $parser = simplexml_load_string($response2);
            // user $parser to get data out of XML response and to display it.
    ?>
