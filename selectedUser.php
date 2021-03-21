<?php
include 'DatabaseConnection.php';

if (isset($_POST['submit'])) {
    $Sender = $_GET['id'];
    $Reciever = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$Sender";
    $query = mysqli_query($connection, $sql);
    $sql1 = mysqli_fetch_array($query);
    // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$Reciever";
    $query = mysqli_query($connection, $sql);
    $sql2 = mysqli_fetch_array($query);

    // constraint to check input of negative value by user
    if (($amount) < 0) {
        // showing an alert box.
        // echo `<script>alert("")</script>`;
        echo "<script>alert(`Oops! Negative values cannot be transferred.`)</script>";
    }
    // constraint to check insufficient balance.
    else if ($amount  > $sql1['balance']) {
        // showing an alert box.
        echo "<script>alert(`Bad Luck! Insufficient Balance.`)</script>";
    }
    // constraint to check zero values
    else if ($amount == 0) {
        // showing an alert box.
        echo "<script>alert(`Oops! Zero value cannot be transferred.`)</script>";
    } else {

        // deducting amount from sender's account
        $newbalance = $sql1['balance'] - $amount;
        $sql = "UPDATE users set balance=$newbalance where id=$Sender";
        mysqli_query($connection, $sql);


        // adding amount to reciever's account
        $newbalance = $sql2['balance'] + $amount;
        $sql = "UPDATE users set balance=$newbalance where id=$Reciever";
        mysqli_query($connection, $sql);
        // inserting into the transaction table
        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO `transactionhistory`(`Sender`, `Receiver`, `Amount`) VALUES ('$sender','$receiver','$amount')";
        $query = mysqli_query($connection, $sql);

        if ($query) {
        }

        $newbalance = 0;
        $amount = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Page</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/selected_user.css" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <div class="container">
        <h2 class="text-center pt-4">Transaction Page</h2>
        <?php
        $Selected_User = $_GET['id'];
        $sql = "SELECT * FROM  users where id=$Selected_User";
        $result = mysqli_query($connection, $sql);
        if (!$result) {
            echo "Error : " . $sql . "<br>" . mysqli_error($connection);
        }
        $rows = mysqli_fetch_assoc($result);
        ?>
        <form method="post" name="tcredit" class="tabletext"><br>
            <div class="table-container" style="margin-top: 2%;">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive-md">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">E-Mail</th>
                                    <th scope="col">Balance</th>
                                </thead>
                                <tr>
                                    <td><?php echo $rows['id'] ?></td>
                                    <td><?php echo $rows['name'] ?></td>
                                    <td><?php echo $rows['gender'] ?></td>
                                    <td><?php echo $rows['email'] ?></td>
                                    <td><?php echo $rows['balance'] ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <label>Transfer To:</label>
            <select name="to" class="form-control" required>
                <option value="" disabled selected>Choose</option>
                <?php
                $Selected_User = $_GET['id'];
                $sql = "SELECT * FROM users where id!=$Selected_User";
                $result = mysqli_query($connection, $sql);
                if (!$result) {
                    echo "Error " . $sql . "<br>" . mysqli_error($connection);
                }
                while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <option class="table" value="<?php echo $rows['id']; ?>">

                        <?php echo $rows['name']; ?> (Balance:
                        <?php echo $rows['balance']; ?> )

                    </option>
                <?php
                }
                ?>
                <div>
            </select>
            <br>
            <br>
            <label>Amount:</label>
            <input type="number" class="form-control" name="amount" required>
            <br><br>
            <div class="text-center" style="margin-left: 28px;">
                <button class="custom-btn1 btn-81" style="background-color: whitesmoke;" name="submit" type="submit" id="myBtn">
                    <a href="TransHistory.php">Transfer
                    </a>
                </button>
            </div>
        </form>
    </div>
    <!-- buttons and stufff -->
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
    padding: 0.2%;
">
        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">©2020 Aashutosh Shrivastava.All Rights Reserved.
        </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>