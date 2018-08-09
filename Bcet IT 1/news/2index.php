<?php

// load the configuration file.

include("config.php");
        //load all news from the database and then OREDER them by newsid
        //you will notice that newlly added news will appeare first.
        //also you can OREDER by (dtime) instaed of (news id)
        $result = mysqli_query("SELECT * FROM news ORDER BY newsid DESC",$connect);

        //lets make a loop and get all news from the database
        while($myrow = mysqli_fetch_assoc($result))
             {//begin of loop

               //now print the results:
               echo "&lt;b&gt;Title: ";
               echo $myrow['title'];
               echo "&lt;/b&gt;&lt;br&gt;On: &lt;i&gt;";
               echo $myrow['dtime'];
               echo "&lt;/i&gt;&lt;hr align=left width=160&gt;";
               echo $myrow['text1'];

               // Now print the options to (Read,Edit & Delete the news)
               //echo "&lt;br&gt;&lt;a href=\\"read_more.php?newsid=$myrow[newsid]\\"&gt;Read More...&lt;/a&gt;
                || &lt;a href=\\"edit_news.php?newsid=$myrow[newsid]\\"&gt;Edit&lt;/a&gt;
                 || &lt;a href=\\"delete_news.php?newsid=$myrow[newsid]\\"&gt;Delete&lt;/a&gt;&lt;br&gt;&lt;hr&gt;";

             }//end of loop
			 ?>
