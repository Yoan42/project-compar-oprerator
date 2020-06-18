<?php

include '../../controler/upload.php';
$statusMsg = '';


// Chemin de téléchargement du fichier
$targetDir = "../uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Autoriser certains formats de fichiers
    $allowTypes = array('jpg','png','jpeg','gif','pdf','PNG');
    if(in_array($fileType, $allowTypes)){
        // Telechargement du serveur
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insertion de l'image dans la BDD
            $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                header( 'location: home.php');
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Afficher l'état du message
echo $statusMsg;

?>
