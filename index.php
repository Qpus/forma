<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forama</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <form id="myForm">
            <label for="name">Ime:</label><br>
            <input type="text" id="name" name="name" placeholder="Tvoje ime.." maxlength="20" required>*<br>
            <label for="lastName">Prezime:</label><br>
            <input type="text" id="lastName" name="lastName" placeholder="Tvoje prezime.." maxlength="20" required>*<br>
            <label for="email" id="email">Email:</label><br>
            <input type="email" id="email "name="email" placeholder="Tvoj email.." required>*<br>
            <label for="opis" >Opis:</label><br>
            <textarea id="opis" placeholder="Tvoj opis.."></textarea><br>
            <input id="submitBtn" class="btn" type="button" value="OK">
            <input class="btn delete" type="button" onclick="brisanje()" value="BRISANJE">
        </form>
        <script src="script.js"></script>
    </body>
</html>