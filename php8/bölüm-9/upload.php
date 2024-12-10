<?php 

        if(isset($_POST["btnFileUpload"])  && $_POST["btnFileUpload"]=="Upload" ){

            /*
            echo "<pre>";
            

            print_r($_FILES["fileToUpload"]);
            print_r($_POST);
            echo"  </pre>";
    */
            if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"]==0) 
                {
                    $upload0k=true;

                    $dest_path= "./images/";
                    $filename = $_FILES["fileToUpload"]["name"];
                    $fileSize = $_FILES["fileToUpload"]["size"];
                    $dosya_uzantilari = array('jpg','jpeg','png');
            
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
            
                    // 1.jpg => 1, jpg
                    $dosyaAdi = explode(".",$filename); 
                    $dosyaAdi_uzantisisiz = $dosyaAdi[0];
                    $dosyaAdi_uzantisi = $dosyaAdi[1];
            
                    if(!in_array($dosyaAdi_uzantisi,$dosya_uzantilari)){
                        $upload0k=false;
                        echo "dosya uzantısı kabul edilmiyor";
                        echo "kabul edilen dosyalar : ".implode(",",$dosya_uzantilari);
                        echo "<br>";    
                    }
            
                    $yeni_dosyaAdi= md5(time().$dosyaAdi_uzantisisiz).'.'.$dosyaAdi_uzantisi;
            
            
                    
                    $fileSourcePath=$_FILES["fileToUpload"]["tmp_name"];
            
                    $fileDestPath=$dest_path.$yeni_dosyaAdi;
                    
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
            else {
                    echo "bir hata oluştu";
                }
            
            
        
        }


?>