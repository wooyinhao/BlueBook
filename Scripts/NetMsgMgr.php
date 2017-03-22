<?php

class NetMsgMgr
{
	public static function ReceiveMsg($connection, $data)
	{
	    // 向客户端发送hello $data
	    $sendData = new stdClass();
	    $sendData->data="收到客户端发来的消息:".$data;
	    $connection->send(json_encode($sendData,JSON_UNESCAPED_UNICODE));
	}
}


?>