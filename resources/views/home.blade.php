<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

body, ul {
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    background-color: #24252a;
}

li, a, button {
    font-family: "Montserrat", sans-serif;
    font-weight: 500;
    font-size: 16px;
    color: #edf0f1;
    text-decoration: none;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 10%;

}

.nav__links {
    list-style: none;
}

.nav__links li {
    display: inline-block;
    padding: 0px 20px;
}

.nav__links li a {
    transition: all 0.3s ease 0s;
}

.nav__links li a:hover {
    color: #0088a9;
}

button {
    padding: 9px 25px;
    background-color: rgba(0, 136, 169, 1);
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
}

button:hover {
    background-color: rgba(0, 136, 169, 0.8);
}

.hero {
    background: url('background.jpg') center/cover;
    color: #000;
    text-align: center;
    padding: 100px 0;
}

.hero h1 {
    font-size: 36px;
}

.features {
    font-family: 'Montserrat', sans-serif;
    color: #fff;
    text-align: center;
    padding: 100px 0;
}

.feature {
    margin: 20px;
}

.feature i {
    font-size: 36px;
    color: #f39c12;
}

.feature h2 {
    font-size: 24px;
}

.container {
  background: rgba(255, 255, 255, 0.2); 
  border-radius: 10px; 
  backdrop-filter: blur(10px); 
  border: 1px solid rgba(255, 255, 255, 0.18); 
  padding: 20px;
  width: 600px;
  margin: 0 auto;
  margin-top: 50px;
  text-align: center;
}

h1 {
  color: #fff;
}

p {
  color: #fff;
}


.cta-button {
    background: #f39c12;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
}

footer {
    color: #fff;
    font-family: 'Montserrat', sans-serif;
    text-align: center;
    padding: 20px 0;
}
</style>
<body>
    <header>
        <nav>
            <ul class="nav__links">
                <li><a href="#">Cuma</a></li>
                <li><a href="#">Tabahan</a></li>
                <li><a href="#">Doang</a></li>
                <li><a href="#">Hihihiha</a></li>
            </ul>
        </nav>
        <a class="cta" href="#"><button>Contact</button></a>
    </header>

    <section class="hero">
        <h1>MEDIA ONLINE</h1><br>
        <br>
        <a href="form" class="cta-button">Form Sign Up</a>
    </section>

    <div class="container">
    <section class="features">
        <div class="feature">
            <i class="fas fa-cogs"></i>
            <h2>Sosial Media Online</h2><br>
            <p>Belajar dan berbagi agar hidup menjadi lebih baik</p>
        </div><br>
        <div class="feature">
            <i class="fas fa-chart-line"></i>
            <h2>Benefit Join di Media Online</h2><br>
            <p>• Mendapatkan motivasi dari sesama para Developer</p>
            <p>• Sharing knowledge</p>
            <p>• Dibuat oleh calon web developer terbaik</p>
        </div><br>
        <div class="feature">
            <i class="fas fa-users"></i>
            <h2>Cara Bergabung ke Media Online</h2><br>
            <p>1. Mengunjungi Website ini</p>
            <p>2. Mendaftarkan di Form Sign Up diatas</p>
            <p>3. Selesai</p>
        </div>
    </section>
</div><br>

    <footer>
        <p>&copy; 2023 Matt</p>
    </footer>
</body>
</html>