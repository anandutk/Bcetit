<?php
include("config.php");

        $result = mysqli_query("SELECT * FROM news WHERE newsid='$newsid' ",$connect);
        while($myrow = mysqli_fetch_assoc($result))

             {
                     echo "&lt;b&gt;";
                     echo $myrow['title'];
                     echo "&lt;/b&gt;&lt;br&gt;On: &lt;i&gt;";
                     echo $myrow['dtime'];
                     echo "&lt;/i&gt;&lt;hr&gt;";
                     echo $myrow['text1'];
                     echo " ";
                     echo $myrow['text2'];
                     echo "&lt;br&gt;&lt;br&gt;&lt;a href=\\"javascript:self.history.back();\\"&gt;&lt;-- Go Back&lt;/a&gt;";

             }
?>