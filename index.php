<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <section class="tippingCalculator">
            <h1>Tipping Calculator</h1>
            <p>Enter the folling information to split the check.</p>

            <form action="result.php" name="tippingCalculator" method="post">
                <div class="people">
                    <label for="numberOfPeople">Number of Diners:</label>
                    <input type="number" name="numberOfPeople" id="numberOfPeople" min="1">
                </div>
                <div class="cost">
                    <label for="totalCost">Total Cost:</label>
                    <input type="number" name="totalCost" id="totalCost" min="0">
                </div>

                <div class="percent">
                    <label for="tipPercent">Tip %:</label>
                    <input type="number" name="tipPercent" id="tipPercent" min="0">
                </div>

                <input type="submit" value="Calculate">

            </form>

            
        </section>
    </main>
</body>
</html>