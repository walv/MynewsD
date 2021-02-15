1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
<?php
include('config/database_connection.php');
 
session_start();
 
if($_POST["action"] == "insert_data")
{
$data = array(
  ':from_user_id'  => $_SESSION["user_id"],
  ':chat_message'  => $_POST['chat_message'],
  ':status'   => '1'
);
 
$query = "
INSERT INTO chat_message
(from_user_id, chat_message, status)
VALUES (:from_user_id, :chat_message, :status)
";
 
$statement = $connect->prepare($query);
 
if($statement->execute($data))
{
  echo fetch_group_chat_history($connect);
}
 
}
 
if($_POST["action"] == "fetch_data")
{
echo fetch_group_chat_history($connect);
}
 
?>