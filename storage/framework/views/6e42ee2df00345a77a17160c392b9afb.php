<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            transition: background-color 0.3s ease;
        }

        .dark body {
            background-color: #0f172a;
            color: #f8fafc;
        }

        .container {
            text-align: center;
            max-width: 480px;
            padding: 2rem;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        p {
            font-size: 1.125rem;
            color: #64748b;
            margin-bottom: 2.5rem;
        }

        .dark p {
            color: #94a3b8;
        }

        .buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s ease;
            display: inline-block;
        }

        .btn-primary {
            background-color: #3b82f6;
            color: white;
        }

        .btn-primary:hover {
            background-color: #2563eb;
            transform: translateY(-1px);
        }

        .btn-secondary {
            border: 1px solid #e2e8f0;
            color: #3b82f6;
        }

        .dark .btn-secondary {
            border-color: #334155;
            color: #8b5cf6;
        }

        .btn-secondary:hover {
            background-color: #f1f5f9;
            transform: translateY(-1px);
        }

        .dark .btn-secondary:hover {
            background-color: #1e293b;
        }

        .theme-toggle {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: none;
            border: none;
            cursor: pointer;
            color: #64748b;
            font-size: 1.25rem;
        }

        .dark .theme-toggle {
            color: #94a3b8;
        }
    </style>
</head>
<body>
<button class="theme-toggle" onclick="toggleTheme()">☀️</button>

<div class="container">
    <h1>Welcome</h1>
    <p>Nice to see you on my page </p>

    <div class="buttons">
        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">Login</a>
        <a href="<?php echo e(route('register')); ?>" class="btn btn-secondary">Register</a>
    </div>
</div>

<script>
    function toggleTheme() {
        document.body.classList.toggle('dark');
        const icon = document.querySelector('.theme-toggle');
        icon.textContent = document.body.classList.contains('dark') ? '🌙' : '☀️';
    }

    // Check for saved theme preference
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.body.classList.add('dark');
        document.querySelector('.theme-toggle').textContent = '🌙';
    }
</script>
</body>
</html>
<?php /**PATH D:\First_Year\Quarter-4\Frame-work-2\security\hackvisit-security-assignment3-app\assignment1\resources\views/welcome.blade.php ENDPATH**/ ?>