<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #000000;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.8);
            border: 2px solid #ff0000;
            border-radius: 15px;
            padding: 50px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 0 30px rgba(255, 0, 0, 0.5);
            text-align: center;
        }

        h1 {
            color: #ff0000;
            font-size: 32px;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 0 0 10px rgba(255, 0, 0, 0.7);
        }

        .info {
            color: #ff0000;
            font-size: 18px;
            margin-bottom: 20px;
            line-height: 1.8;
        }

        .label {
            font-weight: bold;
            color: #ff3333;
            text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
        }

        .value {
            color: #ffaaaa;
            font-style: italic;
        }

        a {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 30px;
            background-color: #ff0000;
            color: #000000;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.7);
        }

        a:hover {
            background-color: #ff3333;
            box-shadow: 0 0 30px rgba(255, 0, 0, 1), inset 0 0 10px rgba(255, 0, 0, 0.5);
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>✓ Selamat!</h1>
        
        <div class="info">
            <p><span class="label">Nama:</span><br>
            <span class="value"><?php echo htmlspecialchars($_POST["name"]); ?></span></p>
        </div>
        
        <div class="info">
            <p><span class="label">Email:</span><br>
            <span class="value"><?php echo htmlspecialchars($_POST["email"]); ?></span></p>
        </div>
        
        <a href="latihan.html">← Kembali</a>
    </div>
</body>
</html>