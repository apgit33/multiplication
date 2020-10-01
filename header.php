<?php

echo "
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='icon' href='favicon.ico'/>
        <title>Multiplications</title>
        <link rel='stylesheet' href='default.css'>
    </head>
    <body>
        <header>
            <div class='container d-flex'>
                <nav class='d-flex jc-end ai'>
                    <div class='path'>".$_SESSION['nav']."</div>
                    <div id='menuToggle'>
                        <input type='checkbox' id='burger'/>
                        
                        <span></span>
                        <span></span>
                        <span></span>
                        
                        <ul id='menu' class='d-flex jc-around ai'>
                            <li><a href='index.php'>Home</a></li>
                            <li><a href='table-3.php'>Table 3</a></li>
                            <li><a href='liste-table.php'>Choix Table</a></li>
                            <li><a href='checkbox-tables.php'>Checkbox Tables</a></li>
                            <li><a href='revision.php'>Révision</a></li>
                            <li><a href='revision-js.php'>Révision +</a></li>
                            <li><a href='super-revision.php'>Super Révision</a></li>
                            <li><a href='super-revision-ajax.php'>Super Révision ajax</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <div class='container'>
"
?>