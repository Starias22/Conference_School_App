<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Bases/reset.css">
    <link rel="stylesheet" href="Style/Bases/base.css">
    <link rel="stylesheet" href="Style/Modules/links.css">
    <link rel="stylesheet" href="Style/Modules/create_publication.css">
    <link rel="stylesheet" href="Style/Modules/title.css">
    <link rel="stylesheet" href="Style/Modules/input.css">
    <link rel="stylesheet" href="Style/Modules/button.css">
    <link rel="stylesheet" href="Style/Layouts/create_publication.layout.css">
    <link rel="stylesheet" href="Style/Layouts/panel.layout.css">
    <link rel="stylesheet" href="Style/Modules/panel.css">

    <title>Document</title>
</head>
<body>
    <div id="content-app">
        <?php include("panel.php") ?>
        
        <div id="create-publication">
            <h1 class="create-publication-title">
                Manager de publication
            </h1>

            <form method="post" action="../Controllers/action_create_publication.php" class="create-publication-form">
                <div class="create-publication-groupefield">
                    <label class="create-publication-label" for="name_publication">Nom de la publication</label>
                    <input name = "nom_pub" type="text" id="name_publication" class="input">
                </div>

                <div class="create-publication-groupefield">
                    <label class="create-publication-label" for="name_publication">Id de la conference</label>
                    <select name="id_selected" id="id_selected">
 
                    </select>
                </div>

                <div class="create-publication-groupefield">
                    <label class="create-publication-label" for="content_publication">Contenue de la publication</label>
                    <textarea class="text-area" name="content_pub" id="" cols="30" rows="10"></textarea>
                </div>
                <input type = "submit" class ="button button-create" value = "Créer">
            </form>
        </div>
    </div>
</body>
</html>