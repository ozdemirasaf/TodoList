<?php
require_once('baglan.php');

$bilgilerimsor=$db->prepare("SELECT * from deneme");
	$bilgilerimsor->execute();

    
    
    
    


    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>Yapılacaklar Listesi</h2>
        <form id="new-task-form" method="post" action="islem.php">
            <input type="text" id="new-task-input" name="veri" placeholder="Bugün'ki Planın ne??">
            <input type="submit" id="nwe-task-submit" value="Add task">
        </form>
    </header>

    <main>
        <section class="task-list">
            <h1>Listeler</h1>

            <div id="tasks">

               
                    
                    
                        <ul>
                            <?php while($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)){?>
                                <div class="task">
                                <div class="content">
                                <li  class="text"> <?php echo $bilgilerimcek["deneme"]; ?></li>
                                </div>
                                <div class="actions">
                        <a href="islem.php?process=uptade&id=<?php echo $bilgilerimcek["id"]; ?>"><button class="edit">Düzenle</button></a>
                        <a href="islem.php?process=delete&id=<?php echo $bilgilerimcek["id"]; ?>"><button class="delete">Sil</button></a>
                    </div>
                                </div>
                        <?php } ?>
                        </ul>
                    
                   
                </div> 

            </div>
        </section>
    </main>

   




    <!-- JS -->

</body>

</html>