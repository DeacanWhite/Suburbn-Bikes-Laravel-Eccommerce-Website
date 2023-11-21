<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>401 Unauthorized</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
        }

        .container {
            text-align: center;
        }

        .error-code {
            font-size: 120px;
            font-weight: bold;
            color: #B2D3A8;
        }

        .error-message {
            font-size: 24px;
            margin-top: 20px;
            color: #555;
        }

        .back-link {
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="error-code">401</div>
    <div class="error-message">Unauthorized Access</div>
    <a href="{{ route('home.index') }}" class="back-link">Back to Home</a>
</div>
</body>
</html>
