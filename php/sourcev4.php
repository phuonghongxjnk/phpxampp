<?php
error_reporting(0);
session_start();
//color
date_default_timezone_set("Asia/Ho_Chi_Minh");
$res="\033[0m";
$red="\033[0;31m";
$white= "\033[0;37m";  
$green="\033[0;32m";
$mit="\033[0;32m";
$yellow="\033[0;33m";
$mti="\033[0;33m";
$test="\033[1;33m";
$tim="\033[1;36m";
$lam="\033[1;34m";
$tmi="\033[1;34m";
$hong="\033[1;35m";
$imt="\033[1;35m";
$blue="\033[1;36m";
$banner="\r
$white----------------------------------------------------------------
$tim ✅ Bản Quyền  : $res Ngô Văn Thành
$tim ✅ Youtube   : $res Ngô Văn Thành
$tim ✅ Zalo   : $res 0389718987
$tim ✅ Momo       :  $res 0389718987
$white----------------------------------------------------------------
  \n\n";
//config
{
@system('clear');
echo $banner;
sleep(1);
while (true) {
echo($b.'Mã Kích Hoạt: ');
  $unl=trim(fgets(STDIN));
       if('thanhv4.0'==$unl){
print ($van."Đăng Nhập Thành Công.\n");
       break;
    }sleep(2);
{
echo $pass[1];
echo ($red."Key Sai Vui Lòng Nhập Lại!.\n\033[0m");
sleep(1);}}
$listnv = [];
echo $tim."Tài Khoản TDS: $yellow";
$_SESSION["username"]=trim(fgets(STDIN));
echo $tim."Mật Khẩu TDS: $yellow";
$_SESSION['password']=trim(fgets(STDIN));
echo $tim."Cookie FB: $yellow";
$cookie=trim(fgets(STDIN));
echo"$res";
$ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
curl_setopt($ch, CURLOPT_COOKIEJAR, "TDS.txt");
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
$login =array('username' => $_SESSION['username'],'password' => $_SESSION['password'],'submit' => ' Đăng Nhập');
curl_setopt($ch, CURLOPT_POST,count($login));
curl_setopt($ch, CURLOPT_POSTFIELDS,$login);
curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
$source=curl_exec($ch);
curl_close($ch);
if ($source != 1 && $source != ''){
	@system('clear');
	echo $banner;
	sleep(1);
	echo "\r
	[1;45m [1;31m●[;36m --------------Thông Tin - Giá Xu-------------- [1;31m●\n";
echo $green."----------------------------------------------------------------\n";
echo $yellow."\r💠Giá Xu Like Là 200🔹\n";
sleep(1);
echo $yellow."\r💠Giá Xu Follow + Like Page  Là 600🔹\n";
sleep(1);
echo $yellow."\r💠Giá Xu Cảm Xúc Là 400🔹\n";
sleep(1);
echo $yellow."\r💠Giá Xu Comment Là 600🔹\n";
sleep(1);
echo $green."----------------------------------------------------------------\n";
sleep(1);
	echo $do."Vui Lòng Nhập Chế Độ!\n";
	$user = $_SESSION["username"];
	$xu = file_get_contents('https://traodoisub.com/scr/test3.php?user='.$user);
		echo $red."[".$yellow."•".$red."]".$tim." >> ".$green."Nhập [1] Chế độ Cảm Xúc \n";
		sleep(1);
		echo $red."⟨".$yellow."•".$red."⟩".$tim." >> ".$green."Nhập [2] Chế độ Like \n";
		sleep(1);
		echo $red."⟨".$yellow."•".$red."⟩".$tim." >> ".$green."Nhập [3] Chế độ Comment \n";
		sleep(1);
		echo $red."⟨".$yellow."•".$red."⟩".$tim." >> ".$green."Nhập [4] Chế độ Follow\n";
		sleep(1);
		echo $red."⟨".$yellow."•".$red."⟩".$tim." >> ".$green."Nhập [5] Chế Độ Like Page \n";
		sleep(1);
		echo $red."⟨".$yellow."•".$red."⟩".$tim." >> ".$green."Nhập [6] Chế Độ Random Like Page + Folow \n";
		sleep(1);
		echo $red."⟨".$yellow."•".$red."⟩".$tim." >> ".$green."Nhập [7] Chế Độ Random Like + Cảm Xúc \n";
		sleep(1);
		echo $red."⟨".$yellow."•".$red."⟩".$tim." >> ".$green."Nhập [8] Chế Độ Random Like + Cảm Xúc + Like Page + Folow \n";
		sleep(1);
		echo $green."Nhập Số : $yellow";
		$nv = trim(fgets(STDIN));
		if($nv =='1'){
		  array_push($listnv,'cx');
		}
		elseif($nv=='2'){
		  array_push($listnv,'like');
		}
		elseif($nv=='3'){
		  array_push($listnv,'cmt');
		}
		elseif($nv=='4'){
		  array_push($listnv,'sub');
		}
		elseif($nv=='5'){
			array_push($listnv,'page');
		}
		elseif($nv=='6'){
			array_push($listnv,'page','sub');
		}
		elseif($nv=='7'){
			array_push($listnv,'like','cx');
		}
		elseif($nv=='8'){
			array_push($listnv,'like','cx','page','sub');
		}
		
		else{exit("Bạn nhập sai!");}
		echo $green."Nhập Thời Gian Delay Sau Mỗi Job: $yellow";
		$_SESSION['delay']=trim(fgets(STDIN));
	echo $green."Làm Bao Nhiêu Nhiệm Vụ: $yellow";
	$_SESSION['i']=trim(fgets(STDIN));
	if($_SESSION['i'] < 1)
	{exit($red."Tối Thiểu 1 Lần\n");}
	
	echo $green."Thời Gian Nghỉ Chống Block: $yellow";
	$_SESSION['j']=trim(fgets(STDIN));
	if($_SESSION['j'] < 0)
	{exit($red."Tối thiểu 0 giây: \n\n");}
}else{
	exit($red."Tài khoản hoặc mật khẩu sai, kiểm tra lại");
}
echo $yellow."-------------------------------------------------------------\n";
#get_token
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "authority: m.facebook.com";
$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
$head[] = "cache-control: max-age=0";
$head[] = "upgrade-insecure-requests: 1";
$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$head[] = "sec-fetch-site: none";
$head[] = "sec-fetch-mode: navigate";
$head[] = "sec-fetch-user: ?1";
$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
$access_token = explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
	$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};	
}else{
	exit($red."Cookie die!!");
}
$h = datnick($user,$idfb);
$xu = file_get_contents('https://traodoisub.com/scr/test3.php?user='.$user);
echo $white."⟨•⟩ CHÀO BẠN\033[0;32m ".$user."\n";
sleep(1);
echo $white."⟨•⟩ SỐ XU CỦA BẠN HIỆN TẠI LÀ:\033[0;32m ".$xu." XU\n";
sleep(1);
echo $white."⟨•⟩ BẠN ĐANG CẤU HÌNH VỚI ID:\033[0;32m ".$idfb." \033[0;37mĐỂ LÀM NHIỆM VỤ\n";
sleep(1);
echo $yellow."---------------------------------------------------------------\n";
$h = datnick($user,$idfb);
$xu = file_get_contents('https://traodoisub.com/scr/test3.php?user='.$user);
if ($h == '1'){
		$i=1;
		while ($i <= $_SESSION['i']){
			$rand = $listnv[array_rand($listnv,1)];
			if ($rand == 'like'){
				$list = getnv('like',$user);
				$check = count($list);
				if ($check == 0){echo $red."Hết nhiệm vụ!\r"; $i++; continue;}
				echo $green."Tìm thấy ".$check." nhiệm vụ!\r";
				foreach ($list  as $id) {
					$g = like($access_token,$id,$cookie);
					if ($g->{'error'}->{'code'} == 368){
						exit($red."Đã bị block!");
					}
					$s = nhantien('like',$id);
					if ($s == 2){$stt=$stt+1;$xu = $xu + 200; echo $green."[$stt]$red|".$green.date("H:i")."$red|$green Like $red|$green".$id."$red|$green+200 XU$red|$yellow".$xu." XU";}
					else{echo $i; continue;}
					echo "\n";
					sleep($_SESSION['delay']);
				}
			}else if($rand == 'sub'){
				$list = getnv('follow',$user);
				$check = count($list);
				if ($check == 0){echo $red."Hết nhiệm vụ!\r"; $i++; continue;}
				echo $green."Tìm thấy ".$check." nhiệm vụ!\r";
				foreach ($list  as $id) {
					$g = follow($access_token,$id,$cookie);
					if ($g->{'error'}->{'code'} == 368){
						exit($red."Đã bị block!");
					}
					$s = nhantien('sub',$id);
					if ($s == 2){$stt=$stt+1;$xu = $xu + 600; echo $yellow."[$stt]$red|".$yellow.date("H:i")."$red|$yellow Follow $red|$yellow".$id."$red|$yellow+600 XU$red|$yellow".$xu."XU";}
					else{echo $i; continue;}
					echo "\n";
					sleep($_SESSION['delay']);
				}
			}else if($rand == 'page'){
				$list = getnv('likepage',$user);
				$check = count($list);
				if ($check == 0){echo $red."Hết nhiệm vụ!\r"; $i++; continue;}
				echo $green."Tìm thấy ".$check." nhiệm vụ!\r";
				foreach ($list  as $id) {
					page($id,$cookie);
					$s = nhantien('page',$id);
					if ($s == 2){$stt=$stt+1;$xu = $xu + 600; echo $yellow."[$stt]$red|".$yellow.date("H:i")."$red|$yellow Page $red|$yellow".$id."$red|$yellow+600 XU$red|$yellow".$xu." XU";}
					else{echo $i; continue;}
					echo "\n";
					sleep($_SESSION['delay']);
				}
			}else if($rand == 'cx'){
				$list = getnv('camxuc',$user);
				$check = count($list);
				if ($check == 0){echo $red."Hết nhiệm vụ!\r"; $i++; continue;}
				echo $green."Tìm thấy ".$check." nhiệm vụ!\r";
				foreach ($list  as $id => $key) {
					$id = $key->{'id'};
					$type = $key->{'type'};
					camxuc($id,$type,$cookie);
					$s = nhantiencx($type,$id);
					if ($s == 2){$stt=$stt+1;$xu = $xu + 400; echo $green."[$stt]$red|".$green.date("H:i")."$red|$green $type $red|$green".$id."$red|$green+400 XU$red|$yellow".$xu." XU";}
					else{echo $i; continue;}
					echo "\n";
					sleep($_SESSION['delay']);
				}
			}
			else{
				$list = getnv('cmt',$user);
				$check = count($list);
				if ($check == 0){echo $red."Hết nhiệm vụ!\r"; $i++; continue;}
				echo $green."Tìm thấy ".$check." nhiệm vụ!\r";
				foreach ($list  as $id => $key) {
					$uid = $key->{'id'};
					$msg = $key->{'nd'};
					$g = cmt($access_token,$uid,$cookie,$msg);
					if ($g->{'error'}->{'code'} == 368){
						exit($red."Đã bị block!");
					}
					$s = nhantien('cmt',$uid);
					if ($s == 2){$stt=$stt+1;$xu = $xu + 800; echo $yellow."[$stt]$red|".$yellow.date("H:i")."$red|$yellow Cmt $red|$yellow".$id."$red|$yellow+800 XU$red|$yellow".$xu." XU";}
					else{echo $i; continue;}
					echo "\r";
					sleep($_SESSION['delay']);
				}
		}
		echo "\r";
		}
}else{exit($red."Cấu hình thất bại, vui lòng thêm id: $id vào cấu hình");}
}else{exit($red."Cookie die!!");}
}
function follow($access_token,$id,$cookie){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/subscribers');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function like($access_token,$id,$cookie){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function cmt($access_token,$id,$cookie,$msg){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/comments');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('message' => $msg,'access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function page($id,$cookie){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
	$page = curl_exec($ch);
	if (explode('&amp;refid=',explode('pageSuggestionsOnLiking=1&amp;gfid=',$page)[1])[0]){
		$get = explode('&amp;refid=',explode('pageSuggestionsOnLiking=1&amp;gfid=',$page)[1])[0];
		$link = 'https://mbasic.facebook.com/a/profile.php?fan&id='.$id.'&origin=page_profile&pageSuggestionsOnLiking=1&gfid='.$get.'&refid=17';
		curl_setopt($ch, CURLOPT_URL, $link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_exec($ch);
	}	
	curl_close($ch);

}
function camxuc($id,$type,$cookie){
	$ch = curl_init();
	if(strpos($id,'_')){
		$uid = explode('_',$id, 2);
		$id2 = 'story.php?story_fbid='.$uid[1].'&id='.$uid[0];
	}else{
		$id2 = $id;
	}
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id2);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
	$page = curl_exec($ch);
	if ($id2 != $id && explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0]){
		$get = explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0];
	}else{
		$get = $id2;
	}
	$link = 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$get;
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$cx = curl_exec($ch);
	$haha = explode('<a href="',$cx);
	if ($type == 'LOVE'){
		$haha2 = explode('" style="display:block"',$haha[2])[0];
	}else if ($type == 'WOW'){
		$haha2 = explode('" style="display:block"',$haha[5])[0];
	}else if ($type == 'HAHA'){
		$haha2 = explode('" style="display:block"',$haha[4])[0];
	}else if ($type == 'SAD'){
		$haha2 = explode('" style="display:block"',$haha[6])[0];
	}else{
		$haha2 = explode('" style="display:block"',$haha[7])[0];
	}
	$link2 = html_entity_decode($haha2);	

	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_exec($ch);
	curl_close($ch);
}
function getnv($loai,$user){
	$list = file_get_contents('https://traodoisub.com/scr/api_job.php?chucnang='.$loai.'&user='.$user);
	return json_decode($list);
}
function datnick($user,$id){
	$xxx = file_get_contents('https://traodoisub.com/scr/api_dat.php?user='.$user.'&idfb='.$id);
	return $xxx;
}
function nhantien($loai,$id){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/nhantien'.$loai.'.php');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$tdsxu=array('id' => $id);
	curl_setopt($ch, CURLOPT_POST,count($tdsxu));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$tdsxu);
	curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
	$xu=curl_exec($ch);
	curl_close($ch);
	return $xu;
}
function nhantiencx($loai,$id){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/nhantiencx.php');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$tdsxu=array('id' => $id, 'loaicx' => $loai);
	curl_setopt($ch, CURLOPT_POST,count($tdsxu));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$tdsxu);
	curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
	$xu=curl_exec($ch);
	curl_close($ch);
	return $xu;
}

?>
