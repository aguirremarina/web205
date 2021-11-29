
<html>
    <head>
        <title>W3-A2 - Write a text a file</title>
    </head>

    <body>
            <div id="page-wrap" >
                <h1>Write a text a file</h1>

                <form action="" method="post" id="quiz-form">
                    <div class="d-flex justify-content-center">
                        <textarea name="textInput" id="textInput" rows="5" cols="50" maxlength="250"></textarea>
                    </div>
                    
                    <div class="d-flex justify-content-center btn-lg">
                        <button type="submit" name="write-submit" id="write-submit" class="btn btn-primary">Write File</button>
                    </div>
                </form>
                <?php

                    $name     = "file-". date("Y-m-d") .".txt";

                    $pathFile = fopen($name,"w") or die("Unable to open file!"); 

                    fwrite($pathFile, $_POST['textInput']);

                    fclose($pathFile);

               ?>
            </div>
    </body>
</html>