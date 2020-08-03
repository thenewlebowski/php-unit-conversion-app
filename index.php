<?php

    session_start();

    require("./php/conversionFunctions.php");

    if(isset($_POST["submit"])){
        $value = intval($_POST["value1"]);
        $measurmentType1 = $_POST["measurmentType1"];
        $measurmentType2 = $_POST["measurmentType2"];
        switch($measurmentType1){
            case "pounds":
                convertFromPounds($value, $measurmentType2);
                break;
            case "kilograms" : 
                convertFromKilograms($value, $measurmentType2);
                break;
            case "ounces" : 
                convertFromOunces($value, $measurmentType2);
                break;
            case "stone" : 
                convertFromStone($value, $measurmentType2);
                break;
            case "us ton" :
                convertFromUSTon($value, $measurmentType2);
                break;
            default : $_SESSION['result'] = "Please select proper measurment";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Converter</title>
    <!-- Custom Styling -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" crossorigin="anonymous">

    <!-- Bootstrap CDN  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title " >Mass Conversion Tool</h3>
                <form action="index.php" method="post">
                    <div class="form-row">
                        <div class="from-group col-4">
                            <input 
                                type="number" 
                                step="0.001" 
                                value="1" 
                                class="form-control" 
                                name="value1" 
                                required
                            >                            
                            <select name="measurmentType1" class='form-control'>
                                <option value=''>measurment...</option>
                                <option value='pounds'>pounds</option>
                                <option value='kilograms'>kilograms</option>
                                <option value='ounces'>ounces</option>
                                <option value="stone">stone</option>
                                <option value="us ton">us ton</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <h5>TO</h5>
                        </div>

                        <div class="from-group col-4">
                            <select name="measurmentType2" class='form-control'>
                                <option value=''>measurment...</option>
                                <option value='pounds'>pounds</option>
                                <option value='kilograms'>kilograms</option>
                                <option value='ounces'>ounces</option>
                                <option value="stone">stone</option>
                                <option value="us ton">us ton</option>
                            </select>
                        </div>
                    </div>
                    
                        <?php   
                            if($_SESSION["result"]){
                                echo "<h5 class='result display-4'>";
                                echo $_SESSION['result'];
                                echo "</h5>";
                            } 
                        ?>

                    <button type='submit' name='submit' class='btn btn-info form-control'>Convert</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Custom JS -->
    <script src="script.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>