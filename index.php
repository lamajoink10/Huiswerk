<!DOCTYPE html>
<html lang="nl">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De weer van vandaag</title>
    <style>
        * {
            background-color: aliceblue;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        header {
            background-color: aliceblue;
        }
        b{
            color: gray;
            font-size: 50px;
        }
        p {
            color: darkgray;
            font-size: 25px;
        }
        .bglbl {
            width: 750px;
            height: 500px;  
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border-radius: 10%;
            background-color: lightsteelblue;
            border: 3px,solid,lightskyblue;
        }
        .uniquetext {
            width: 750px;
            height: 500px;  
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: lightsteelblue;
            border-radius: 100%;
        }
    </style>
</head>
<body>
    <?php require_once 'header.php'; ?>
    <main>
        <div class="bglbl">
            <b class="uniquetext">Het weer voor vandaag:</b>
            <p class="uniquetext">Mauris viverra pulvinar lacinia. Proin dapibus dictum venenatis. Curabitur at ipsum sed libero semper efficitur. Aenean libero magna, tristique vitae vulputate at, tempus eu libero. Fusce volutpat iaculis lectus non venenatis. Aenean luctus ante sagittis erat elementum, eget cursus est auctor. Sed dignissim mi eu justo vestibulum, sed tempus mi interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi congue lorem arcu, non varius velit sollicitudin ac. Praesent a neque ipsum. Sed aliquam elit non velit semper bibendum. Aenean varius placerat nibh et porttitor. Nullam sollicitudin urna eu facilisis sollicitudin.</p>
        </div>
    </main>
    <?php require_once 'footer.php'; ?>
</body>
</html>