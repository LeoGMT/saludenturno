<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>sedes</title>
        <link rel="stylesheet" href="assets/css/sed.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="assets/js/script.js" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    </head>
        <body>
        <?php

include "nav.php";


?>
            <main>
                <div class=".titulo">
                    <h1>SEDES</h1>
                </div>

                <div class="cuadro">
                    <div class="cuadro1">
                        <!--cajita 1-->
                        <div class="cajitatexto">
                            <div class="texto">
                                Dirrecion:
                            </div>
                        </div>
                        <!--cajita 2-->
                        <div class="cajitatexto">
                            <div class="texto">
                                Codigo Postal:
                            </div>
                        </div>
                        <!--cajita 3-->
                        <div class="cajitatexto">
                            <div class="texto">
                                Telefono de la sede:
                            </div>
                        </div>
                        <!--cajita 4-->
                        <div class="cajitatexto">
                            <div class="texto">
                                Nombre de la sede:
                            </div>
                        </div>
                        <!--cajita 5-->
                        <div class="cajitatexto">
                            <div class="texto">
                                Administrador:
                            </div>
                        </div>
                        <!--cajita 6-->
                        <div class="cajitatexto">
                            <div class="texto">
                                Horario:
                            </div>
                        </div>
                        <!--cajita 7-->                    
                        <div class="cajitatexto">
                            <div class="texto">
                                Turno:
                            </div>
                        </div>
                    </div>

                    <div class="cuadro2">
                        <div class="co">
                            <input type="text" class="i" id="name" required></imput>
                            
                        </div>

                        <div class="co">
                            <input type="text" class="i" id="name1" required></imput>

                        </div>

                        <div class="co">
                            <input type="text" class="i" id="name2" required></imput>
                        </div>

                        <div class="co">
                            <input type="text" class="i" id="name3" required></imput>
                        </div>

                        <div class="co">
                            <input type="text" class="i" id="name4" required></imput>
                        </div>

                        <div class="co">
                            <input type="text" class="i" id="name5" required></imput>
                        </div>

                        <div class="co">
                            <div class="grupo">
                                <label for="opcion1">
                                    <input type="radio" id="opcion1" name="grupo-radio" value="opcion1">
                                        Matutino
                                </label>
                                <label for="opcion2">
                                    <input type="radio" id="opcion2" name="grupo-radio" value="opcion2">
                                        Vespertino
                                </label>
                            
                            </div>
                        </div>
                            
                    </div>
                        <button type="button" class="f">
                            <div class="b">
                                Registrar
                            </div>

                        </button>
                </div>
            
            </main>
        </body>
</html>