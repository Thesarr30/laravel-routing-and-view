<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
    
        body {
            background-image: url('https://images.pexels.com/photos/1229042/pexels-photo-1229042.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-repeat: no-repeat;
            background-attachment: fixed;  
            background-size: cover;
    }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #3498db;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
    }

        .welcome-container {
            background-color: #fff;
            border-radius: 40px;
            box-shadow: 0 0 80px rgba(0, 0, 0, 0.7);
            padding: 100px;
            text-align: left;
    }

        h1 {
            color: #333;
            font-size: 50px;
    }
    </style>
</body>
<body>
    <div class="welcome-container">
        <h1>Selamat Datang!</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $firstName = isset($_GET['firstname']) ? $_GET['firstname'] : "";
            $lastName = isset($_GET['lastname']) ? $_GET['lastname'] : "";
            $gender = isset($_GET['gender']) ? $_GET['gender'] : "";
            $nationality = isset($_GET['nationality']) ? $_GET['nationality'] : "";
            $languages = isset($_GET['languages']) ? $_GET['languages'] : [];
            $bio = isset($_GET['bio']) ? $_GET['bio'] : "";

            echo "<h3>Nama: $firstName $lastName</h3>";
            echo "<h3>Jenis Kelamin: $gender</h3>";
            echo "<h3>Kewarganegaraan: $nationality</h3>";
            echo "<h3>Bahasa yang Dikuasai:</h3>";
            echo "<ul>";
            foreach ($languages as $language) {
                echo "<h3><li>$language</li></h3>";
            }
            echo "</ul>";
            echo "<h3>Bio:</h3>";
            echo "<h3>$bio</h3>";
        }
        ?>
    </div>
</body>
</body>
</html>