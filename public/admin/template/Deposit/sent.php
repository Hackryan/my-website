
<?php
session_start();

// Ensure that the required session variables are set
if (!isset($_SESSION['sender_name']) || !isset($_SESSION['receivers_name']) || !isset($_SESSION['receivers_email']) || !isset($_SESSION['bank-account']) || !isset($_SESSION['amount'])) {
    header("Location: LEVEL1-1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Transfer Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .receipt {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .receipt h1 {
            font-size: 24px;
            text-align: center;
        }

        .receipt p {
            font-size: 16px;
            margin: 10px 0;
        }

        .receipt .details {
            border-top: 1px solid #ccc;
            padding-top: 10px;
            margin-top: 20px;
        }

        .timestamp {
            font-style: italic;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="receipt">
        <h1>Money Transfer Receipt</h1>
        <p><strong>Sender's Name:</strong> <?php echo $_SESSION['sender_name']; ?></p>
        <p><strong>Recipient's Name:</strong> <?php echo $_SESSION['receivers_name']; ?></p>
        <p><strong>Recipient's Email:</strong> <?php echo $_SESSION['receivers_email']; ?></p>
        <p><strong>Bank Account:</strong> <?php echo $_SESSION['bank-account']; ?></p>
        <p><strong>Amount:</strong> $<?php echo number_format($_SESSION['amount'], 2); ?></p>
        <p><strong>Date:</strong> <?php echo date('F j, Y'); ?></p>
        <div class="details">
            <p><strong>Transaction Details:</strong></p>
            <p>The amount of $<?php echo number_format($_SESSION['amount'], 2); ?> has been successfully transferred from your account to the recipient's account.</p>
        </div>
    </div>
    <div class="timestamp">
        <p>Receipt generated on: <?php echo date('F j, Y'); ?></p>
    </div>
</body>
</html>
