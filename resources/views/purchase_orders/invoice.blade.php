<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        .header {
            text-align: center;
        }

        .invoice-details,
        .customer-details {
            margin-bottom: 20px;
        }

        .total {
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1 class="header">Invoice</h1>

    <div class="customer-details">
        <h2>Customer Details</h2>
        <p><strong>Name:</strong> {{ $customer->name }}</p>
        <p><strong>Email:</strong> {{ $customer->email }}</p>
        <p><strong>Phone:</strong> {{ $customer->phone }}</p>
        <p><strong>Address:</strong> {{ $customer->address }}</p>
    </div>

    <div class="invoice-details">
        <h2>Purchase Order Details</h2>
        <p><strong>Order Number:</strong> {{ $order->order_number }}</p>
        <p><strong>Order Date:</strong> {{ $order->order_date }}</p>
        <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Description</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Purchase Order Total</td>
                <td>{{ number_format($order->total_amount, 2) }}</td>
            </tr>
        </tbody>
    </table>

    <p class="total">Total: ${{ number_format($order->total_amount, 2) }}</p>
</body>

</html>
