
<?php

$username = $_POST['topic_owner'];
$topic = $_POST['topic_title'];

echo $username;
echo $topic;

/*The forum will display a table that will include:
    -> topic_id int not null primary key auto_increment,
    -> topic_title varchar (100),
    -> topic_create_time datetime,
    -> topic_owner varchar (100),
    -> post_text text,
    -> post_owner varchar (150)
*/        

?>



