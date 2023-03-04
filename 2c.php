<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>2C</title>
    <style>
        .kotak {
            border: 1px solid black;
            color: cornsilk;
            flex-flow: column-reverse;
            text-align: center;
            background-color: brown;
        }
    </style>
</head>

<body>
    <table cellpadding="0px" cellspacing="0px">
        <?php
        $jumlah = '1';
        echo "<tr>";
        for ($nilai = 10; $nilai >= $jumlah; $nilai--) {
            for ($angka = 1; $angka <= $nilai; $angka++) {
                echo "<td class=kotak height=50px width=50px>$angka</td>";
            }
            echo "</tr>";
        } ?>
    </table>
</body>

</html>