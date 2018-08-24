<?php
date_default_timezone_set('Asia/Islamabad');
$yx = opendir('janty');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=01&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
$x=$stat[data][$i-1][id].'~'; 
$y= fopen('komen.txt','a');
fwrite($y,$x); fclose($y);
$text = array(
' <3   тσρ ℓgα куα  :p ¢нвσттєяχ <3   ', 
);

$comments = $text[rand(0,count($text)-1)];
$stickers= array('893308157455556', '399315893918650', '399316793918560', '427321144292505', '427321267625826', '344395972623284', '1758297314385291', '1747081465603105', '553453204782021', '387545514704666', '872067619521749',);
$mess=$stickers[rand(0,count($stickers)-1)];
$reaction = $react[rand(0,count($react)-1)];

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($comments).'&attachment_id='.$mess.'&access_token='.$token.'&method=POST');
echo ' Success ';
}
}

function auto($url) {
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl); 
return $ch;
}

?>