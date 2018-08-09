<?php

include("config.php");

  if($submit)
  {//begin of if($submit).

      // Set global variables to easier names
     //this will pervent sql injection and apostrophe to break the db.
      $title = mysqli_real_escape_string($_POST['title']);
      $text1 = mysqli_real_escape_string($_POST['text1']);
      $text2 = mysqli_real_escape_string($_POST['text2']);


              //check if (title) field is empty then print error message.
              if(!$title){  //this means If the title is really empty.
                     echo "Error: News title is a required field. Please fill it.";
                     exit(); //exit the script and don't do anything else.
              }// end of if
         //run the query which adds the data gathered from the form into the database
         $result = mysqli_query("INSERT INTO news (title, dtime, text1, text2)
                       VALUES ('$title',NOW(),'$text1','$text2')",$connect);
          //print success message.
          echo "&lt;b&gt;Thank you! News added Successfully!&lt;br&gt;You'll be redirected to Home Page after (4) Seconds";
          echo "&lt;meta http-equiv=Refresh content=4;url=index.php&gt;";
  }//end of if($submit).


  // If the form has not been submitted, display it!
else
  {//begin of else

      ?&gt;
      &lt;br&gt;
      &lt;h3&gt;::Add News&lt;/h3&gt;

      &lt;form method="post" action="&lt;?php echo $PHP_SELF ?&gt;"&gt;
      Title: &lt;input name="title" size="40" maxlength="255"&gt;
      &lt;br&gt;
      Text1: &lt;textarea name="text1"  rows="7" cols="30"&gt;&lt;/textarea&gt;
      &lt;br&gt;
      Text2: &lt;textarea name="text2" rows="7" cols="30"&gt;&lt;/textarea&gt;
      &lt;br&gt;
      &lt;input type="submit" name="submit" value="Add News"&gt;
      &lt;/form&gt;
      &lt;?
  }//end of else

?>