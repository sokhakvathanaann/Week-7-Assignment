<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1></h1>
    <?php
        require_once(__DIR__ . '/classes/ABA.php');
        require_once(__DIR__ . '/classes/Pipay.php');
        require_once(__DIR__ . '/classes/Wing.php');

        $paymentmethod = [
            new aba("Item 1", 1, 5),
            new wing("Item 2", 2, 3),
            new aba("Item 3", 4, 1),
            new aba("Item 4", 5, 1),
            new pipay("Item 5", 6, 1),
            new aba("Item 6", 10,1),
            new wing("Item 7", 15, 1),
            new wing("Item 8", 2, 1) 
        ];
        echo '<h>1. Number of sales by ABA method</h> </br>';
        displayABA($paymentmethod);

        echo '<h>2. Number of sales by PiPay and Wing method</h> </br>';
        displayPipayandWing($paymentmethod);

        echo '<h>3. Display all sales ordering by biggest total amount</h> </br>';
        function displayAll($paymentmethod){
            echo '<table border = "1">';
            foreach ($paymentmethod as $payment) {
                echo '<tr>';
                    echo '<td>' .$payment->getItem() . '</td>';
                    echo '<td>' . get_class($payment) . '</td>';
                    echo '<td>' . $payment->getTotal() . '</td>';
                echo '</tr>';    
            }
          
            echo '</table>';
        
        }
        $clonePaymentMethod = $paymentmethod;
        
        usort ($clonePaymentMethod, function ($item1, $item2)
        {
            return $item2->getTotal() <=> $item1 -> getTotal();
        });
        displayAll($clonePaymentMethod);

        
    ?>
    
</body>
</html>