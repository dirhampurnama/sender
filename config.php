<?php

/*
██╗  ██╗███╗   ███╗ █████╗ ██████╗ ██╗   ██╗███████╗██╗ 
╚██╗██╔╝████╗ ████║██╔══██╗██╔══██╗██║   ██║██╔════╝██║ 
 ╚███╔╝ ██╔████╔██║███████║██████╔╝██║   ██║█████╗  ██║ 
 ██╔██╗ ██║╚██╔╝██║██╔══██║██╔══██╗╚██╗ ██╔╝██╔══╝  ██║ 
██╔╝ ██╗██║ ╚═╝ ██║██║  ██║██║  ██║ ╚████╔╝ ███████╗███████╗
    ╚═╝  ╚═╝╚═╝ ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝  ╚═══╝  ╚══════╝╚══════╝ 
xMarvel Sender v2.0 [UPDATE]
*/
#SMTP SETUP
$hostname[]		= 'mail.tongseng-group.com'; 	
$username[] 	= 'sales@tongseng-group.com';
$password[] 	= 'sales123#';
$secure[] 		= 'tls';
$port[] 		= '587';

#EMAIL SETUP
$frommail 		= 'sales@tongseng-group.com';
$fromname 		= 'Support';
$subject 		= 'Your id Disabled !';

#LETTER SETUP
$letter 		= 'letter.html';
$attachment 	= '';
$language 		= 'us';
$emaillist 		= 'list.txt';

#FEATURES
$bmheader 		 = 1;  // xMarvel HEADER , 0 = OFF | 1 = ON ( USE 1 RECOMMENDED )
$priority 		 = 1;  // 0 = NORMAL | 1 = HIGH
$mode			 = 1;  // 0 = TO  | 1 = BCC ( USE 1 RECOMMENDED )
$sensoremail 	 = 0;  // 0 = OFF | 1 = ON ( USE 0 RECOMMENDED )
$duplicate 		 = 0;  // 0 = OFF | 1 = ON 
$removeaftersend = 0;  // 0 = OFF | 1 = ON
$delay 			 = 3;  // DELAY = $DELAY SECOND/$EMAIL ( USE 3 RECOMMENDED )
$email 			 = 30;  // DELAY FOR MUCH EMAIL ( USE 30 RECOMMENDED )

?>
