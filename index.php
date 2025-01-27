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
                <p>Enter the following information to split the check.</p>
            <div class="tippingForm">
                <form action="result.php" name="tippingCalculator" method="post">
                    <div class="people">
                        <label for="numberOfPeople">Number of Diners:</label>
                        <input type="number" name="numberOfPeople" id="numberOfPeople" min="1" placeholder="#" required>
                    </div>
                    <div class="cost">
                        <label for="totalCost">Total Cost ($):</label>
                        <input type="number" name="totalCost" id="totalCost" min="0" step="0.01" placeholder="$" required>
                    </div>

                    <div class="percent">
                        <label for="tipPercent">Tip (%):</label>
                        <input type="number" name="tipPercent" id="tipPercent" min="0" step="0.01" placeholder="%" value="15" required>
                    </div>

                    <input type="submit" value="Calculate">
                </form>
            </div>
        </section>
    </main>
</body>
</html>