<!DOCTYPE html>
<html lang="en">

    <head>
         <title>Upload file</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
    <?php include('fixed_header.php'); ?>
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>Upload your file</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Your file must be in pdf format and must contain your group name</i><p>
                               <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                                  <input type="file" name="file" ><br>
                                    </div>
                                    
                                    <button type="submit" name="submit" class="btn btn-primary">Upload</button><br><br>
                                </form><br/>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <?php include('footer.php'); ?>
    </body>
</html>