<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/transaction_history.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
    include 'navbar.php';
    ?>
    <h1 class="h1 text-center" style="margin-top:6%;">Transaction History</h1>
    <div class="table-container" style="margin-top: 2%;">
        <div class="row">
            <div class="col">
                <div class="table-responsive-md">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">S.No.</th>
                                <th scope="col">Sender</th>
                                <th scope="col">Receiver</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'DatabaseConnection.php';
                            $sql = "SELECT * FROM `transactionhistory`";
                            $query = mysqli_query($connection, $sql);
                            while ($rows = mysqli_fetch_assoc($query)) {
                            ?>
                                <tr>
                                    <td><?php echo $rows['S.no']; ?></td>
                                    <td><?php echo $rows['Sender']; ?></td>
                                    <td><?php echo $rows['Receiver']; ?></td>
                                    <td><?php echo $rows['Amount']; ?> </td>
                                </tr>
                                <?php
                            }
                                ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- // buttons and str_shuffle -->
    <div id="buttons">
        <div class="homeBtn">
            <button class="custom-btn btn-8"><a href="index.php">Home</a></button>
        </div>
        <div class="TransferBtn">
            <button class="custom-btn btn-8"><a href="transfer_money.php">Transfer Money</a></button>
        </div>
        <div class="TransactBtn">
            <button class="custom-btn btn-8"><a href="TransHistory.php">Transaction</a></button>
        </div>
    </div>
    <footer style="   margin-top: 10%;
    text-align: -webkit-center;
    background: #f2f2f2;
    opacity: 0.6;
    padding: 0.5%;
    padding-bottom: 1%;
">
        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">©2020 Aashutosh Shrivastava.All Rights Reserved.
        </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>