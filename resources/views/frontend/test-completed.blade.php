<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Completed</title>
    <link rel="stylesheet" href="/path/to/your/css/styles.css">
    <style>
        /* You can add some basic styles here */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
            background: white;
            padding: 2rem;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            font-size: 2rem;
            color: #333;
        }
        p {
            font-size: 1rem;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{asset('pbl-logo.svg')}}" alt="" width="184" height="55" class="d-none d-md-inline">
        <p>Thank you for completing the test. We will get back to you shortly after we finish compiling the results.</p>
    </div>
</body>
</html>
