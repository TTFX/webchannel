<?php
require_once ("TeamSpeak3.php");
include ('config.php');
error_reporting(0);

$ChannelName = $_POST['name'];
$SubChannelName = $_POST['subname'];
$ChannelPassword = $_POST['ChannelPass'];
$SubChannelPass = $_POST['SubChannelPass'];
$idUnica = $_POST['idts'];

if (!$ChannelName || !$idUnica) {
	echo "Introduceti ambele detalii Numele Canalului dar și UniqId-ul";
	exit();
}

$ts3_VirtualServer = TeamSpeak3::factory("serverquery://" . $UserAdmin . ":" . $PWQuery . "@" . $IP_TS . ":" . $PuertoQuery . "/?server_port=" .  $PuertoTS . "&blocking=0&nickname=" . $nickname . "");
/*$ListaDeChannels = $ts3_VirtualServer->request("channellist")->toString();
$MembraList = $ts3_VirtualServer->request("clientList")->toString();
$ListaDeChannels = $ts3_VirtualServer->request("channellist")->toString(); */

if (strpos($ListaDeChannels, $ChannelName)) {
	echo "Acest canal există deja!";
	exit();
}
$clID = $ts3_VirtualServer->clientGetByUid($idUnica);
$sub_cid = $ts3_VirtualServer->channelCreate(array(
	"channel_name" => $ChannelName,
	"channel_password" => $ChannelPassword,
	"channel_description" => "[img]http://i.imgur.com/bdsh79F.gif[/img][center]\n[img]http://i.imgur.com/ArHU0UO.png[/img]\n[hr][b]Canal creat prin platforma online [color=red][url=http://board.evodark.com/channelevd]EvoDark Channels[/url][/color][hr][/center][img]http://i.imgur.com/bdsh79F.gif[/img]",
	"channel_codec" => TeamSpeak3::CODEC_OPUS_VOICE,
	"channel_codec_quality" => '10',
	"channel_topic" => "Canal creat via EvDBoard",
	"channel_flag_permanent" => TRUE,
	"cpid"                   => '65',
));
$sub2_cid = $ts3_VirtualServer->channelCreate(array(
	"channel_name" => $SubChannelName,
	"channel_password" => $ChannelPassword,	
	"channel_description" => "[img]http://i.imgur.com/bdsh79F.gif[/img][center]\n[img]http://i.imgur.com/ArHU0UO.png[/img]\n[hr][b]Canal creat prin platforma online [color=red][url=http://board.evodark.com/channelevd]EvoDark Channels[/url][/color][hr][/center][img]http://i.imgur.com/bdsh79F.gif[/img]",
	"channel_codec" => TeamSpeak3::CODEC_OPUS_VOICE,
	"channel_codec_quality" => '10',
	"channel_topic" => "Sub-Canal creat via EvDBoard",
	"channel_flag_permanent" => TRUE,
	"cpid"                   => $sub_cid,
));
$clID = $ts3_VirtualServer->clientGetByUid($idUnica);
$infoCliente = $ts3_VirtualServer->execute("clientgetnamefromuid", array(
	"cluid" => $idUnica
))->toList();
$cldbid = strval($infoCliente['cldbid']);
$ts3_VirtualServer->execute("clientmove", array(
	"clid" => $clID,
	"cid" => $sub_cid
));
$ts3_VirtualServer->execute("setclientchannelgroup", array(
	"cldbid" => $cldbid,
	"cid" => $sub_cid,
	"cgid" => '9'
));
echo "Felicitări canalul tău a fost creat ! Ședere plăcută în continuare !";
?>