<?php
declare(strict_types=1); ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP Project 1</title>
</head>
<body>
<header class="header navbar-dark bg-dark">
    <div class="container">
        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    Transaction
                </a>
            </div>
        </nav>
    </div>
</header>
<section class="transactions">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Check Number</th>
                        <th scope="col">Description</th>
                        <th scope="col">Amount</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if (!empty($transactions)) : ?>
                        <?php foreach ($transactions as $transaction): ?>
                            <tr>
                                <td>
                                    <?php echo formatDate($transaction['date']); ?>
                                </td>
                                <td>
                                    <?php echo $transaction['checkNumber']; ?>
                                </td>
                                <td>
                                    <?php echo $transaction['description']; ?>
                                </td>
                                <td>
                                    <span style="color:<?php echo ($transaction['amount'] < 0) ? 'red' : 'green'; ?>">
                                        <?php echo formatDollarAmount($transaction['amount']); ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th colspan="3">Total Income</th>
                        <td>
                            <span style="color: green"><?php echo formatDollarAmount($totals['totalIncome'] ?? 0); ?></span>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="3">Total Expanse</th>
                        <td>
                            <span style="color: red"><?php echo formatDollarAmount($totals['totalExpanse'] ?? 0); ?></span>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="3">Net Total</th>
                        <td>
                            <span style="color: black"><?php echo formatDollarAmount($totals['netTotal'] ?? 0); ?></span>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>
</html>