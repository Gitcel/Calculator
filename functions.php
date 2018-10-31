<?php

    $addedFirst = 0;
    $addedSecond = 0;

    $store = array();
    $_SESSION['results'][0] = array();

    function calculator () {
        
        $result = 0;                 
        
        if ( isset($_POST['Submit']) && $_POST['Submit'] == 'submit-val' ) {
           
            if ( !empty($_POST['first-name']) && !empty($_POST['second-name']) ) {
                
                if ( $_POST['operator'] == 'add' ) {
                    if (is_numeric($_POST['first-name']) && is_numeric($_POST['second-name'])) {
                        
                        $addedFirst = $_POST['first-name'];
                        $addedSecond =  $_POST['second-name'];                        
                        $result = $addedFirst + $addedSecond;
                        
                        array_push($_SESSION['results'], $result);                        
                        
                        echo $result;                        
                    
                    } else {

                        echo "That's not numbers.";

                    }
                }

                else if ( $_POST['operator'] == 'sub' ) {
                    if (is_numeric($_POST['first-name']) && is_numeric($_POST['second-name'])) {

                        $addedFirst = $_POST['first-name'];
                        $addedSecond =  $_POST['second-name'];                        
                        $result = $addedFirst - $addedSecond;
                        
                        array_push($_SESSION['results'], $result);

                        echo $result;

                    } else {

                        echo "That's not numbers.";

                    }                
                }

                else if ( $_POST['operator'] == 'multi' ) {
                    if (is_numeric($_POST['first-name']) && is_numeric($_POST['second-name'])) {

                        $addedFirst = $_POST['first-name'];
                        $addedSecond =  $_POST['second-name'];                        
                        $result = $addedFirst * $addedSecond;
                        
                        array_push($_SESSION['results'], $result);

                        echo $result;

                    } else {

                        echo "That's not numbers.";

                    }
                }

                else if ( $_POST['operator'] == 'divi' ) {
                    if (is_numeric($_POST['first-name']) && is_numeric($_POST['second-name'])) {

                        $addedFirst = $_POST['first-name'];
                        $addedSecond =  $_POST['second-name'];                        
                        $result = $addedFirst / $addedSecond;
                        
                        array_push($_SESSION['results'], $result);

                        echo $result;

                    } else {

                        echo "That's not numbers.";

                    }
                }

                else if ( $_POST['operator'] == 'modulus' ) {
                    if (is_numeric($_POST['first-name']) && is_numeric($_POST['second-name'])) {

                        $addedFirst = $_POST['first-name'];
                        $addedSecond =  $_POST['second-name'];                        
                        $result = $addedFirst % $addedSecond;
                        
                        array_push($_SESSION['results'], $result);                                               

                        echo $result;

                    } else {

                        echo "That's not numbers.";

                    }
                }
                
            }

        }

        if ( isset($_POST['Submit']) && empty($_POST['first-name']) && empty($_POST['second-name']) ) {

            echo "You must type numbers in the boxes and select an operator first.";
        
        }

        if ( isset($_POST['Submit']) && empty($_POST['first-name']) && !empty($_POST['second-name']) ) {

            echo "Type in a number in both boxes. ";

            if ( !is_numeric($_POST['second-name']) ) {

                echo "It must be numbers only.";
            
            }
        }

        if ( isset($_POST['Submit']) && !empty($_POST['first-name']) && empty($_POST['second-name']) ) {
            
            echo "Type in a number in both boxes. ";

            if ( !is_numeric($_POST['first-name']) ) {

                echo "It must be numbers only.";
            
            }
        }
        
        echo "<br><br>";

        $store = $_SESSION['results'];

        //$storeSorted = array_unique($store, SORT_NUMERIC);
        $_SESSION['results'] = array_unique($_SESSION['results'], SORT_NUMERIC);

        foreach ($_SESSION['results'][0] as $key => $value) {

            echo $key." and ".$value;

        }
        
        echo "<br><br><br><br>";
        //print_r($storeSorted);
        //print_r($_SESSION['results']);

    }

    function showResultsHistory() {

        print_r($_SESSION['results']);
        
    }

?>
<style>

    .section-3 {

        align-self: center;
        justify-self: center;  
        text-align: center;        
        font-size: 1vw;
        z-index: -1;                

    }

    .results-history-container {
        
        position: relative;
        display: grid;
        align-items: center;
        justify-self: center;
        top: 80px;  
        left: 35px;      
        width: 400px;
        height: 145px;    
        background: radial-gradient(rgba(60, 60, 60, 1), rgba(20, 20, 20, 1));
        border-style: outset;
        border-width: 10px;
        border-color: rgba(60, 20, 20, 1);
        color: rgba(255, 160, 160, 1);
        text-shadow: 0 0 2px rgba(255, 60, 60, 1), 0 0 3px rgba(255, 40, 40, 1);
        box-shadow: 0 0 20px rgba(200, 20, 20, 0.6), 0 0 30px rgba(200, 20, 20, 0.6);

    }

    .section-1 {
        
        align-self: center;
        justify-self: center;  
        text-align: center;
        background: linear-gradient(rgba(40, 10, 150, 1), rgba(120, 110, 250, 1));
        font-size: 40px;
        z-index: -1;
        box-shadow: 0 0 20px rgba(200, 20, 20, 0.6), 0 0 30px rgba(200, 20, 20, 0.6);
        
    }

    .screen-container {
        
        display: grid;
        align-items: center;
        justify-self: center;        
        width: 400px;
        height: 145px;    
        background: radial-gradient(rgba(60, 60, 60, 1), rgba(20, 20, 20, 1));
        border-style: outset;
        border-width: 10px;
        border-color: rgba(60, 20, 20, 1);
        color: rgba(255, 160, 160, 1);
        text-shadow: 0 0 2px rgba(255, 60, 60, 1), 0 0 3px rgba(255, 40, 40, 1);

    }

</style>