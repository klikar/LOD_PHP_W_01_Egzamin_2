<?php
$exercise_1a = "CREATE TABLE Destinations ( id int unsigned not null auto_increment, user_id int, address varchar(255), lat decimal(13,10), `long` decimal(13,10), primary key(id), foreign key(user_id) references Users(id) on delete cascade )";

$exercise_1b = "CREATE TABLE Item_Orders ( id int unsigned not null auto_increment, item_id int not null, order_id int not null, foreign key (item_id) references Items(id), foreign key (order_id) references Orders(id), primary Key(id) )";

$exercise_1c = "INSERT INTO Item_Orders ( item_id, order_id ) VALUES ( 2, 6 )";

$exercise_1d = "SELECT * FROM Items WHERE price > 50 ORDER BY price ASC";

$exercise_1e = "INSERT INTO Orders ( description ) VALUES ( 'Przykładowy opis 1' )";

$exercise_1f = "DELETE FROM Users WHERE id=10";

$exercise_1g = "SELECT user_id FROM Messages WHERE message IS NOT NULL GROUP BY user_id ORDER BY user_id ASC";
