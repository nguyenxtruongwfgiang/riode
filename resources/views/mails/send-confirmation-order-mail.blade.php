<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAIL</title>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            font-style: normal
        }

        table {
            width: 600px;
            text-align: left;
            border-collapse: collapse;
            border-bottom: 1px solid #cdcdcd;
            font-size: 13px;
            margin-left: 10px
        }

        table th {
            background-color: #f3f3f3;
            border-top: 1px solid #cdcdcd;
            padding: 10px;
            width: auto;
        }

        table td {
            background-color: #fff;
            border-top: 1px solid #cdcdcd;
            padding: 10px;
            width: auto;
        }
    </style>
</head>

<body>
    <div style="margin-left: 17px; font-size: 13px">
        <h3>Hi Giang Nguyen</h3>
        <p>Thanks you for submitting an order for </p>
    </div>
    <br />
    <table>
        <tr>
            <th>Order Number.</th>
            <td>{{ $order->id }}</td>
        </tr>
        <tr>
            <th>Order Items.</th>
            <td>{{ count($order->orderItems) }} items</td>
        </tr>
        @foreach ($order->orderItems as $item)
            <tr>
                <th>{{ $item->product->name }}</th>
                <td>{{ $item->color->display_name . ' x ' . $item->quantity . ' ' . $item->storage->name }}</td>
            </tr>
        @endforeach

        <tr>
            <th>Payment method.</th>
            <td>{{ $order->payment_method_name }}</td>
        </tr>
        <tr>
            <th>Order at.</th>
            <td>{{ $order->ordered_at }}</td>
        </tr>
        <tr>
            <th>Total amount</th>
            <td>{{ number_format($order->total_amount) }}</td>
        </tr>
    </table>
    <br />
</body>

</html>
