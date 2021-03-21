<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/transfer_money.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Transfer Page</title>
</head>

<body>

    <!-- Navbar -->
    <!-- php code to include navabr -->
    <?php
    include 'navbar.php';
    ?>
    <!-- php ends -->
    <!-- selecting a database table -->
    <?php
    include 'DatabaseConnection.php';
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($connection, $sql);
    $numR = mysqli_num_rows($result);
    //display rows returned by the queery
    ?>
    <!-- Tables -->
    <h1 class="h1 text-center" style="margin-top:6%;"> Transfer Money</h1>
    <div class="table-container" style="margin-top: 2%;">
        <div class="row">
            <div class="col">
                <div class="table-responsive-md">
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            <thead>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">E-Mail</th>
                                <th scope="col">Balance</th>
                                <th scope="col">Operation</th>
                            </thead>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $rows['id'] ?></td>
                                    <td><?php echo $rows['name'] ?></td>
                                    <td><?php echo $rows['gender'] ?></td>
                                    <td><?php echo $rows['email'] ?></td>
                                    <td><?php echo $rows['balance'] ?></td>
                                    <td><a href="selectedUser.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn btn-outline-secondary">Transact</button></a></td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>