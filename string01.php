<?php
echo 'You Can Also Have Embedded Newlines In Strings This Way As It Is Okay To Do';
//Outputs : Arnold Once Said : "I'll Be Back"
echo 'Arnold Once Said : "I\'ll Be Back"';
//Outputs : You Deleted C:*.*?
echo 'You Deleted C:\\*.*?';
//Outputs : You Deleted C::\*.*?
echo 'You Deleted C:\*.*?';
//Outputs : This Will Not Expand : \n a Newline
echo nl2br(" This Will Not Expand : \n a Newline<br>");
//Outputs : Variable Do not $expand $either
echo 'Variables Do Not $expand $either';
?>