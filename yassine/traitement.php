<?php

session_start();
$email= $_SESSION['login'];
$code_etud= $_SESSION['pass'];
    

    $target_dir = 'video/'; //dossier ou sera place le fichier dans le meme directory
        $target_file = $target_dir . basename($_FILES["imgaff"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $_SESSION['filetype']= $imageFileType;
    
        // Check if image file is a actual image or fake image
        
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Le fichier existe déja.<br>";
            $uploadOk = 0;
        }

        // if($imageFileType != "png" && $imageFileType != "PNG") {
        //     echo "Seuls les fichiers PNG sont acceptés.<br>";
        //     $uploadOk = 0;}
        
        // Check file size
        // if ($_FILES["imgaff"]["size"] > 10000000) {
        //     echo "Votre fichier est trop large. La taille maximum est 10Mb. <br>";
        //     $uploadOk = 0;
        // }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Votre fichier n'a pas été uploadé.<br>";
        // if everything is ok, try to upload file
        } 
      else { 

        $filename=$_FILES["imgaff"]["name"];
        move_uploaded_file($_FILES["imgaff"]["tmp_name"], $target_file);
                
       include("connexion.php");

    $langue=$_POST['langue'];
    $niv_lang=$_POST['niv_langue'];
    $diplome=$_POST['diplome'];
    $annee_dip=$_POST['annee_dip'];
    $filiere=$_POST['filiere'];
    $exp_mois=$_POST['exp_mois'];
    $exp_detail=$_POST['exp_detail'];

    $sql7= "SELECT id_cv from cv where code_etud= $code_etud ";
    $result7= mysqli_query($link, $sql7);
    $row=mysqli_fetch_assoc($result7);
    if ($row==false) {

    $sql6= "INSERT INTO cv(diplome, annee_dip, filiere, langue, niv_lang, experience, nb_mois, video, code_etud) VALUES('$diplome', $annee_dip, '$filiere', '$langue', '$niv_lang', '$exp_detail', $exp_mois, '$filename', $code_etud )";

    $result6= mysqli_query($link, $sql6); }

    else {
        $sql8="UPDATE cv SET diplome= '$diplome', annee_dip= $annee_dip, filiere= '$filiere', langue= '$langue', niv_lang= '$niv_lang', experience= '$exp_detail', nb_mois= $exp_mois, video='$filename' where code_etud= $code_etud ";
        $result8= mysqli_query($link, $sql8);
    }

    header("Location: afficher_cv.php");
}
?>