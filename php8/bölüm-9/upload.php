<?php 

    if(isset($_POST["btnFileUpload"])  && $_POST["btnFileUpload"]=="Upload" ){

        /*
        echo "<pre>";
        

        print_r($_FILES["fileToUpload"]);
        print_r($_POST);
        echo"  </pre>";
*/

        $upload0k=true;

        $dest_path= "./uploadedFiles/";
        $filename = $_FILES["fileToUpload"]["name"];
        $fileSize = $_FILES["fileToUpload"]["size"];

        if(empty($filename)){
            $upload0k = false;
            echo "dosya seçiniz";
            echo "<br>";
        }
        
        if($fileSize > 500000000){
            echo "Dosya boyutu fazla";
            $upload0k = false;
            echo "<br>";
        }

        
        
        $fileSourcePath=$_FILES["fileToUpload"]["tmp_name"];

        $fileDestPath=$dest_path.$filename;
        
        if(!$upload0k){
            echo "dosya yüklenmedi";
        }
        else {
            if(move_uploaded_file($fileSourcePath,$fileDestPath)){
                echo "dosya yüklendi";
            }
            else {
                echo "hata";
            }
        }
        
       
    }


?>