<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        .main-container{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items:center;
            justify-content:center;
        }

        h1 {
            text-align: center;
            padding: 20px 0;
            font-size: 24px;
            letter-spacing: 5px;
        }

        .table-container{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: space-between;
            max-width: 750px;
            padding: 20px;
        }

        .card-container{
            flex-shrink: 0;
            padding: 15px 30px;
            border-radius: 10px;
            background: #165DFF;
            color: #ffffff;
            display: flex;
            justify-content: space-between;
            gap: 20px;
            width: 180px;
        }

        .table-number {
            font-size: 18px;
            width: 120px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap:10px;
        }

        .table-number span{
            width: 20px;
            text-align: center;
        }

        .table-title{
            font-size: 40px;
            font-weight: 600;
            text-align: center;
            line-height: 40px;
        }
    </style>
</head>
<body>
    <?php $color = ['#c0babc','#C7AC92','#CD533B','#ACBFA4','#9CC4B2','#778DA9','#82A3A1','#588B8B','#C18C5D', '#CE796B'] ?> 
    <div class="main-container">
        <h1>Multiplication table</h1>
        <div class="table-container">
            <?php 
            
            for ($x = 1; $x <= 9; $x++) { 
                echo '<div class="card-container" style="background: '. $color[$x] .'">';
                echo '<div class="table-title">' . $x . '</div>';
                echo '<div>';
                    for ($y = 1; $y <= 9; $y++){
                        $ans = $x * $y;
                        echo '<div class="table-number"><span>' . $x . '</span> × <span>' . $y . '</span> = <span>' . $ans . '</span></div>';
                    };
                echo '</div></div>';
            }
            
            ?>
        </div>
    </div>
</body>
</html>