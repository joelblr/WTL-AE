<!DOCTYPE html>
<html>

<head>
    <title>Chessboard</title>
    <style>
        .chessboard {
            width: 400px;
            height: 400px;
            display: grid;
            margin: auto;
            border-radius: 5px;
            border-color: skyblue;
            border-style: solid;
            grid-template-columns: repeat(8, 50px);
            grid-template-rows: repeat(8, 50px);
        }

        .cell {
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            font-weight: bold;
        }

        .white {
            /* background-color: #f0d9b5; */
            background-color: rgb(97, 192, 255);
        }

        .black {
            /* background-color: #b58863; */
            background-color: rgb(47, 104, 121);



            color: white;
        }
    </style>
</head>

<body>
    <h2 style="text-align:center">Chessboard</h2>
    <div class="chessboard">
        <?php
        $file = array(1, 2, 3, 4, 5, 6, 7, 8);
        $rank = array("a", "b", "c", "d", "e", "f", "g", "h");

        $isWhite = true;
        for ($row = 7; $row >= 0; $row--) {
            for ($col = 0; $col < 8; $col++) {
                $cellClass = $isWhite ? "white" : "black";
                // echo "<div class='cell $cellClass'>$row, $col</div>";
                echo "<div class='cell $cellClass'>$rank[$col], $file[$row]</div>";
                $isWhite = !$isWhite;
            }
            $isWhite = !$isWhite;
        }
        ?>
    </div>
</body>

</html>