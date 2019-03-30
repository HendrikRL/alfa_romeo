<?php

    include("db_connection.php");  // $pdo 
 
    //get all engines and show them to user
    function getEngines($pdo){ 
        $sql = 'SELECT *
        FROM CL_Engine 
        WHERE end_date IS NULL'; 

        $engines = $pdo->prepare($sql);
        $engines->execute(); 
        $results = $engines->fetchAll(); // fetch() kui mitu t ainult üks mootor vms

        return $results;
    }

    $engineList =  getEngines($pdo);
   // echo "<pre>";
    echo '<div class="table-responsive">  <table class="table table-sm">';


            //kuva pealkirjad
            echo '<tr>';
                echo '<th>';
                echo 'deaktiveeri';
                echo '</th>';
                foreach ($engineList[0] as  $key => $value) {
                
                    echo '<th>' . $key .  '</th>'; 
                    
                } 
            echo '</tr>';

            foreach ($engineList as $engine) {

                echo '<tr>';
                    echo '<td>';
                    echo '<button>deaktiveeri</button>';
                    echo '</td>';

                    foreach ($engine as $key => $value) {

                        echo '<td>' . $value .  '</td>'; 
                    }
                echo '</tr>';
            }
            //  print_r($engineList);
 


    echo "</table> </div>";

?>
