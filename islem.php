<?php
require_once('baglan.php');

if (isset($_POST['veri'])) {

    $kaydet = $db->prepare("INSERT into  deneme set
    
    deneme=:nnn


");

    $insert = $kaydet->execute(
        array(

            'nnn' => trim($_POST['veri']),


        )

    );

    header('location:index.php');

}
else{
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $islem = $_GET['process'];
        if($islem == "uptade"){
            /*
    $bilgilerimsor=$db->prepare("SELECT * from deneme where id=:id");
    $bilgilerimsor->execute(array(
        'id' => $_GET['id'];
    ))*/
        }else{
            
                $sil=$db->prepare("DELETE FROM deneme where id=:idm");
                $kontorl=$sil->execute(array("idm"=>$_GET["id"]));
                
                    header("location:index.php");
        
        }

    }
    else{
        echo "id Gelmedi";
    }
    
}

?>