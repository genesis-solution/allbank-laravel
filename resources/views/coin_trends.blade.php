<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coin Trends</title>

</head>
<body>
<h1>Coin Trends</h1>

<table id="coin-table" border="1">
    <thead>
    <tr>
        <th>Coin</th>
        <th>Symbol</th>
        <th>Price (USD)</th>
        <th>Market Cap (USD)</th>
        <th>24h Change (%)</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        // Function to fetch coin trends data
        function fetchCoinTrends() {
            $.ajax({
                url: "{{ url('getCoinTrends') }}",
                method: 'GET',
                success: function(response) {
                    // Update the table body with new data
                    $('#coin-table tbody').html(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        // Fetch coin trends data initially
        fetchCoinTrends();

        // Fetch coin trends data every 30 seconds (adjust interval as needed)
        setInterval(fetchCoinTrends, 30000);
    });
</script>
</html>
