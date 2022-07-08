<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid">

        <h1>Daftar Account</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No.Account</th>
                    <th scope="col">Nasabah</th>
                    <th scope="col">Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'class_bankAccount.php';
                $no = 1;
                foreach ($transaksi1 as $arc) : 
                ?>
                <tr>
                    <th scope="row"><?= $no++;?></th>
                    <td><?= $arc->nomor?></td>
                    <td><?= $arc->costumer?></td>
                    <td><?= $arc->saldo?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <br><br>


    </div>
</body>

</html>