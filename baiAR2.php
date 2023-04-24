<?php
$catList = [
    ['id' => 1, 'name' => 'Phone'], // key 0
    ['id' => 2, 'name' => 'Tablet'], // key 1
    ['id' => 4, 'name' => 'Laptop'], // key 2
];
$productList = [
    ['id' => 1, 'name' => 'iPhone', 'prices' => 1200, 'qty' => 10, 'catId' => 1],
    ['id' => 5, 'name' => 'Samsung', 'prices' => 900, 'qty' => 14, 'catId' => 1],
    ['id' => 7, 'name' => 'Nokia', 'prices' => 650, 'qty' => 7, 'catId' => 2],
    ['id' => 8, 'name' => 'Oppo', 'prices' => 400, 'qty' => 9, 'catId' => 1],
    ['id' => 9, 'name' => 'Sony', 'prices' => 660, 'qty' => 5, 'catId' => 4],
];
?>
<!Doctype html>
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
                    <th scope="col">CATEGORY</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">QTY</th>
                    <th scope="col">DT</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $totalQty = 0;
                $totalDT = 0;
                $catMap = [];
                foreach ($catList as $catKey => $catItem) {
                    $catMap[$catItem['id']] = $catItem;
                }
                // $catList = [
                //     ['id' => 1, 'name' => 'Phone'],// key 1
                //     ['id' => 2, 'name' => 'Tablet'], // key 2
                //     ['id' => 4, 'name' => 'Laptop'], // key 4
                // ]; 
                $catCount = [];
                 foreach ($productList as $key => $item) : ?>
                    <?php
                    if (isset($catCount[$item['catId']])) {
                        $catCount[$item['catId']] += (float)$item['qty'];
                    } else {
                        $catCount[$item['catId']] = (float)$item['qty'];
                    }
                    $totalQty += (float)$item['qty'];
                    $dt = (float)$item['qty'] * floatval($item['prices']);
                    $totalDT += $dt;
                    // Case 1
                    // $catName = '';
                    /* foreach ($catList as $catKey => $catItem) {
                            if ($catItem['id'] == $item['catId']) {
                                $catName = $catItem['name'];
                                break;
                            }
                        } */
                    // Case 2
                    ?>
                    <tr>
                        <th scope="row"><?= $item['id'] ?></th>
                        <td><?= $item['name'] ?></td>
                        <!-- <td><?= $catName ?></td> -->
                        <td><?= $catMap[$item['catId']]['name'] ?? 'N/A' ?></td>
                        <td style="text-align: right;">$<?= number_format($item['prices'], 2, '.', ',') ?></td>
                        <td><?= $item['qty'] ?></td>
                        <td class="right">$<?= number_format($dt, 0, '.', ',') ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p>Total Qty: <?= $totalQty ?> Unit</p>
        <p>Total DT: $<?= $totalDT ?></p>
        <p>
            Total Qty:<br>
            <?php foreach ($catCount as $key => $item) : ?>
                Category: <?= $catMap[$key]['name'] ?>, Total: <?= $item ?><br>
            <?php endforeach; ?>
        </p>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>