<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Order Items</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-center mb-3">
            <h1>Cetak Order Items</h1>
         </div>
         
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Order ID</th>
                    <th>Product ID</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orderItems as $item)
                    <tr>
                        <td>{{ $item->product->name ?? 'No Name' }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->order_id }}</td>
                        <td>{{ $item->product_id }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No data available</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
