<?php

$q= "INSERT into train(t_id,sl,sr,speed,type,timel,timer,duration ,stops) VALUES
 (1,'اسيوط','قنا',120,'مكيف','21:43','9:84',7,5),
(2,'اسيوط','قنا',120,'ركاب','21:43','9:84',7,5),
(3,'اسيوط','اسوان',120,'ركاب','11:43','8:44',4,3),
(4,'اسيوط','الاقصر',120,'ركاب','1:43','3:64',5,7),
(5,'اسيوط','المنيا',120,'ركاب','12:43','9:84',5,6),
(6,'اسيوط','بنى سويف',120,'ركاب','6:43','3:84',6,2),
(7,'اسيوط','سوهاج',120,'مميز','4:5','9:8',7,6),
(8,'سوهاج','اسيوط',120,'vip','4:5','9:8',7,6),
(9,'قنا','اسيوط',120,'مكيف','4:5','9:8',7,6),
(10,'قنا','اسيوط',120,'vip','4:5','9:8',7,6),
(11,'قنا','اسيوط',120,'ركاب','4:5','9:8',7,6);";
 $db->myExec($q);

?>
