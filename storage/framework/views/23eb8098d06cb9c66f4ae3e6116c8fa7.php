<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Order Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f9fc;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: white;
            padding: 2rem 3rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        h1 {
            margin-bottom: 1.5rem;
            color: #333;
        }
        p {
            font-size: 1.1rem;
            color: #555;
            margin: 0.5rem 0;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Order #<?php echo e($order->id); ?></h1>
    <p><strong>User ID:</strong> <?php echo e($order->user_id); ?></p>
    <p><strong>Created At:</strong> <?php echo e($order->created_at); ?></p>
</div>
</body>
</html>
<?php /**PATH D:\First_Year\Quarter-4\Frame-work-2\security\script-kiddie-security-assignment1-app\assignment1\resources\views/orders/show.blade.php ENDPATH**/ ?>