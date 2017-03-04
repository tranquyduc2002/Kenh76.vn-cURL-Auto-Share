<?php
include 'curl.php';
include 'config.php';
$tokenlist = array('EAAAAAYsX7TsBAGscCRX0WygPsQpTrx2QvgjVjp1Y2BnQZBZA2qFPBWVuPZAVfXnbiqxFLwFNJ0CYw1l3rEWLIIxf1AVlYklaF2T2aVs3phZCXivO3NnCFItJbemLs6NoXE9FWrTv2j7KSpKZCxe5ZAI9sQGMXhZCsKor7lKYS97sAZDZD','EAAAAAYsX7TsBALA1oc6Y5sKPDGbMEDtUHmZBCnASHu2OZCRI1MJIERyBIqCyOjjb6gZATE2NZC8WRrQrHkriZAhE279UukZCs0syl1yVkvn4xyxuMIphijKxWOXJZB1lGgxM1ImEKtwV9kGT3iadPgiFOLw476X8i4Gb8ZAx5NW4CwZDZD','EAAAAAYsX7TsBAC6zOZBN4ZCQeDeBqxk92Qr1V2w3vm6YieiUANWMSjoHwKE5SjsuZBZBLSFxgtTqbjimr04L6SZBWL2AYOHZC8fkLM0WWctQi2CpzZBuNKwHg3UM7wcR6eCSngwZCq81UHf1mfRZCALL6McFmZBodDZCLnA3Xn8jfFCUwZDZD'); // B1: Get token iphone ở phương bách B2 Dán token Get token page ở http://chuyhiep.net/tokenpage/
$token = $tokenlist[rand(0,count($tokenlist)-1)]; 
$feed=json_decode(file_get_contents('https://graph.fb.me/'.$id_share.'/feed?access_token='.$token.'&limit=1'),true); // giơi han 1 id tus dau tien tren wall
for($i=0;$i<count($feed[data]);$i++){
$id = $feed[data][$i][id];  
$slshare = $feed[data][$i][shares][count]; // dem so luong share
} 
$share = explode("_", $id);
$iduser= $share[0];
$idstt= $share[1];  
if($slshare <= $limitshare){
echo post_data("https://graph.facebook.com/".$idstt."/sharedposts?access_token=".$token."&method=post");
}
?>