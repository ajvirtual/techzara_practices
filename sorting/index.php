<?php
    include('sorting.php');
    if(isset($_POST['init-array'])) {
        if(empty($_POST['init-array'])) {
            $error = 'you have to enter some digit';
        } else {
            $array = $_POST['init-array'];
            $initial_array = explode(',', $array);
            $init_array = SomeFunction::prettyPrint($initial_array, '|');
        //    $sorted_array = $some_function->selectSort(); 
            $bubble_sorted_array = SomeFunction::bubbleSort($initial_array);
            $select_sorted_array = SomeFunction::bubbleSort($initial_array, 'DSC');
            $max = SomeFunction::maxInArray($initial_array);
            $min = SomeFunction::minInArray($initial_array);
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>practice</title>
</head>
<body>
    <div class="c-container">
        <div class="content-wrapper">   
            <h1>hello world !</h1>
            <form action="" method="post">
                <label for="init-array">enter a suite of digit or character separed by a comma</label> <br>
                <input type="text" id="init-array" name="init-array" autocomplete="off" autofocus>
            </form>
            <?php
                if(isset($_POST['init-array'])) {
                    if(isset($initial_array)) {
                        echo ' <p class="init">initial array : '.$init_array.'</p> 
                        <span>max : '.$max.'</span>
                        <span>min : '.$min.' </span>
                        <p>here is the sorted function : </p>
                        <small>
                            ordre croissant :
                        </small>
                        <span class="res-container">'.$bubble_sorted_array.'
                        </span>
                        <br>
                        <small>
                            ordre décroissant :
                        </small>
                        <span class="res-container">
                        '.$select_sorted_array.'
                        </span>
                        ';

                    } else {
                        echo $error;
                    }
                }
            ?>
            
        </div>
    </div>
</body>
</html>

