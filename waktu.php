<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylewaktu.css">
</head>
<body>
<div class="all-container">
        <div class="container">
            <div class="inputan-form">
                <form action="" method="post">
                    <p class="title-input">Kalkulator waktu + 1</p>
                    <center>
                    <input class="jam" type="text" name="jam" placeholder="Jam" autocomplete="off">
                        <br><br>
                    <input class="menit" type="text" name="menit" placeholder="Menit" autocomplete="off">
                        <br><br>
                    <input class="detik" type="text" name="detik" placeholder="Detik" autocomplete="off">
                        <br><br>
                    <button name="kirim" tpye="submit">Kirim</button>
                    </center>
                </form>
            </div>
            <div class="outputan">
                <div class="output">
                    <p>Output</p>
                </div>
                <?php
                    if(isset($_POST["kirim"])) {
                        if(isset($_POST["jam"]) && is_numeric($_POST["jam"])) {
                            if(isset($_POST["menit"]) && is_numeric($_POST["menit"])) {
                                if(isset($_POST["detik"]) && is_numeric($_POST["detik"])) {
                                    $hh = ($_POST["jam"]);
                                    $mm = $_POST["menit"];
                                    $ss = ($_POST["detik"]);
                                    $ss2 = $ss + 1;

                                    if($ss2 >= 60) {
                                        $mm = $mm + 1;
                                        $ss2 = 00;
                                    } if ($mm >= 60) {
                                        $hh = $hh + 1;
                                        $mm = 00;
                                        $ss2 = 00;
                                    } if ($hh >= 4) {
                                        $hh = 00;
                                        $mm = 00;
                                        $ss2 = 00;
                                    }

                                    echo "<p style='text-align: center; margin-top: 100px; font-family: arial; font-size: 17px;'>$hh Jam, $mm Menit, $ss2 Detik</p>";
                                }
                            }
                        } else {
                            echo "<p style='color: red; font-size: 17px; font-style: italic; margin-top: 130px; text-align: center;'>Masukan jam, menit dan detik!</p>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>

