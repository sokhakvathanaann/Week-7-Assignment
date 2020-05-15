<?php

    function displayABA($paymentmethod)
    {
        echo '<table border = "1">';
        foreach($paymentmethod as $payment){
            if(get_class($payment) == 'ABA'){
                echo '<tr>';
                    echo '<td>' . $payment->getItem() . '</td>';
                    echo '<td>' . get_class($payment) . '</td>';
                    echo '<td>' . $payment->getTotal() .'</td>';
                echo '</tr>';
            } 
        }
        echo '</table>';
    }


    function displayPipayandWing($paymentmethod)
    {
        echo '<table border = "1">';

        foreach($paymentmethod as $payment){
            if(get_class($payment) == 'Pipay' || get_class($payment) == 'Wing'){
                echo '<tr>';
                    echo '<td>' . $payment->getItem() . '</td>';
                    echo '<td>' . get_class($payment) . '</td>';
                    echo '<td>' . $payment->getTotal() .'</td>';
                echo '</tr>';
            } 
        }
        echo '</table>';   
    }
?>