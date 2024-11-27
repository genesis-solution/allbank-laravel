@foreach($coins as $coin)
    <tr>
        <td>{{ $coin['name'] }}</td>
        <td>{{ $coin['symbol'] }}</td>
        <td>{{ number_format($coin['current_price'], 2) }}</td>
        <td>{{ number_format($coin['market_cap'], 2) }}</td>
        <td>{{ $coin['price_change_percentage_24h'] }}</td>
    </tr>
@endforeach
