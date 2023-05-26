<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern HTML Şablonu</title>
    <style>
        /* Genel Stil */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f6f6f6;
            color: #333;
            margin: 0;
            padding: 0;
        }
        
        /* Başlık Stili */
        h1 {
            color: #333;
            text-align: center;
            margin: 20px 0;
            font-size: 28px;
        }
        
        /* İçerik Kutusu Stili */
        .content-box {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 30px auto;
            max-width: 600px;
            text-align: center;
        }
        
        /* Buton Stili */
        .button {
            display: inline-block;
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            margin-top:20px;
        }
        
        .button:hover {
            background-color: #2980b9;
        }
        
        /* Footer Stili */
        footer {
            text-align: center;
            margin-top: 50px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="content-box">
        <p>{{ $subject }}</p> 
        <hr>
        <p>{{ $answer }}</p> 
    </div>
</body>
</html>
