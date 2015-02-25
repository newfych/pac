<?php
Header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
Header("Content-Type: text/javascript; charset=utf-8");

$config = array( 'hostname' => 'localhost',
                    'username' => 'root',
                    'password' => '',
                    'dbname' => 'bob' );

if( !mysql_connect($config['hostname'], $config['username'], $config['password']) )
{
    echo 'no connect to db';
	exit(); 
}

if( !mysql_select_db($config['dbname']) )
{
    echo 'can not select table';
	exit();
}



echo $_POST;

if( isset($_POST['act']) ) 
{
	echo $_POST ." recivied\n";
	switch ($_POST['act'])
	{
        case "name" : Name();break;
		case "send" : Send();break;
		case "load" : Load();break;
		default :
			exit();
	}
}

function Name(){
    echo 'Name action';
}

function Send() {
    echo 'Send recivied';
	$name = substr($_POST['name'], 0, 10);
    $name = trim($name);
	$name = strip_tags($name);
	$name = mysql_real_escape_string($name);
	
	$text = substr($_POST['text'], 0, 40);
    $text = trim($text);
	$text = strip_tags($text);
	$text = mysql_real_escape_string($text);

	mysql_query("INSERT INTO messages (name,text) VALUES ('" . $name . "', '" . $text . "')");
    echo "Inserted to db";
}

function Load()
{
    echo 'Load received\n';
    echo 'Пример 2 - передача завершилась успешно. Параметры: name = ' . $_POST['act'] . ', nickname= ' . $_POST['last'];

//	$last_message_id = intval($_POST['last']);
//	$query = mysql_query("SELECT * FROM messages WHERE ( id > $last_message_id ) ORDER BY id DESC LIMIT 3");
//	if( mysql_num_rows($query) > 0 )
//	{
//		$js = 'var chat = $(".messages");';
//		$messages = array();
//		while ( $row = mysql_fetch_array($query) )
//		{
//			$messages[] = $row;
//		}
//
//		$last_message_id = $messages[0]['id'];
//		$messages = array_reverse($messages);
//
//		foreach ( $messages as $value )
//		{
//			$js .= 'chat.append("<li>' . $value['name'] . 'Test&raquo; ' . $value['text'] . '</li>");';
//		}
//
//		$js .= "last_message_id = $last_message_id;";
//		echo $js;
//	}
}
?>