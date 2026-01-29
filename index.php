<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Just Proyek - PHP Learning</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            width: 100%;
            padding: 40px;
        }
        
        h1 {
            color: #333;
            margin-bottom: 10px;
            text-align: center;
        }
        
        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
        }
        
        .menu {
            list-style: none;
        }
        
        .menu li {
            margin-bottom: 10px;
        }
        
        .menu a {
            display: block;
            padding: 12px 15px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: transform 0.3s, box-shadow 0.3s;
            font-weight: 500;
        }
        
        .menu a:hover {
            transform: translateX(10px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        
        .menu a::before {
            content: "▶ ";
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📚 Just Proyek</h1>
        <p class="subtitle">Pembelajaran PHP Dasar</p>
        
        <ul class="menu">
            <li><a href="aritmatika.php">Aritmatika</a></li>
            <li><a href="array.php">Array</a></li>
            <li><a href="if.php">If</a></li>
            <li><a href="if-else.php">If-Else</a></li>
            <li><a href="if-else_it.php">If-Else IT</a></li>
            <li><a href="incre-decre.php">Increment & Decrement</a></li>
            <li><a href="logic.php">Logic</a></li>
            <li><a href="penugasan.php">Penugasan</a></li>
            <li><a href="relation.php">Relasi</a></li>
            <li><a href="string.php">String</a></li>
            <li><a href="switch-case.php">Switch-Case</a></li>
        </ul>
    </div>
</body>
</html>