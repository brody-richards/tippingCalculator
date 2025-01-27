<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <section>
            <h1>Tipping Calculator</h1>
            <p>Result:</p>
            <div class="result">
                <?php         
                $numberOfPeople = ($_POST['numberOfPeople']);                
                $totalCost = ($_POST['totalCost']);
                $tipPercent = ($_POST['tipPercent']);
                $tipPercentDecimal = $tipPercent / 100;
                $tipAmount = ($totalCost * $tipPercentDecimal);
                $costPlusTip = $totalCost + $tipAmount;
                $costPerPerson = $costPlusTip / $numberOfPeople;
                ?>

                <p>Bill Total: $<?php echo number_format($totalCost,2) ?></p>
                <p>Tip: $<?php echo number_format($tipAmount,2) . " (" . $tipPercent . "%)"; ?></p>
                <p>Total Owed: $<?php echo number_format($costPlusTip,2) ?></p>
                <div class="resultSentence">
                <?php
                if($numberOfPeople=='1') {
                    echo "The single diner owes $" . number_format($costPerPerson,2);
                } else {
                    echo "Each of the " . $numberOfPeople . " diners owes $" . number_format($costPerPerson,2);
                }
                ?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>