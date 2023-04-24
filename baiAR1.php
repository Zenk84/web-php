<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bai 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">QTY</th>
                    <th scope="col">DT</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $productList = [
                    ['id' => 1, 'name' => 'iPhone', 'price' => 1200, 'qty' => 10,],
                    ['id' => 5, 'name' => 'Samsung', 'price' => 900, 'qty' => 14,],
                    ['id' => 7, 'name' => 'Nokia', 'price' => 650, 'qty' => 7,],
                    ['id' => 8, 'name' => 'Oppo', 'price' => 400, 'qty' => 9,],
                    ['id' => 9, 'name' => 'Sony', 'price' => 660, 'qty' => 5,],
                ];
                $totalQty = 0;
                $totalDT = 0;
                ?>
                <?php foreach($productList as $key => $item): ?>
                    <?php 
                        $totalQty += (float)$item['qty'];
                        $dt = (float)$item['qty'] * floatval($item['price']);
                        $totalDT += $dt;
                        ?>
                <tr>
                    <th scope="row"><?= $item['id'] ?></th>
                    <td><?= $item['name'] ?></td>
                    <td style="text-align: right;">$<?= number_format($item['price'], 2, '.', ',') ?></td>
                    <td><?= $item['qty'] ?></td>
                    <td class="right">$<?= number_format($dt, 0, '.', ',') ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p>Total Qty: <?= $totalQty ?> Unit</p>
        <p>Total DT: $<?= $totalDT ?></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>