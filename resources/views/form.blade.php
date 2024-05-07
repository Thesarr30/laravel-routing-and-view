<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

    body {
        font-family: 'Montserrat', sans-serif;
        background-image: url('https://images.pexels.com/photos/1229042/pexels-photo-1229042.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
        background-color: #f0f0f0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .signup-container {
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 80px;
        width: 400px;
        text-align: center;
    }

    .h1 {
        color: #333;
        font-size: 24px;
    }

    .signup-form {
        text-align: left;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="firstname"],
    input[type="lastname"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    
    .custom-select {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
        width: 100%;
        font-size: 16px;
        appearance: none;
    }

    .custom-select option {
        background-color: #fff;
        color: #333;
    }

    .custom-select:hover {
        border-color: #888;
    }

    .custom-select:focus {
        border-color: #333;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }

    .custom-select::after {
        content: '\25BC';
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        color: #333;
    }

    .custom-select option:hover {
        background-color: #ccc;
        color: #000;
    }

    input[type="checkbox"] {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 20px;
        height: 20px;
        border: 2px solid #ccc;
        border-radius: 3px;
        background-color: #fff;
        margin-right: 5px;
        cursor: pointer;
        outline: none;
    }

    input[type="checkbox"]:checked {
        background-color: #3498db; 
        border: 2px solid #3498db; 
    }

    label {
        display: inline-flex;
        align-items: center;
        cursor: pointer;
    }

    label span {
        font-size: 16px;
        color: #333;
    }

    input[type="checkbox"]:hover {
        border-color: #2980b9;
    }

    input[type="checkbox"]:focus {
        border-color: #2980b9;
        box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
    }

    a {
        text-decoration: none;
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    a:hover {
        background-color: #555;
}
</style>
<body>
    <div class="signup-container">
        <h1>Buat Account Baru</h1>
        <form action="{{ url ('welcome') }}" method="get">
            <div class="form-group">
                <label for="firstname">First name :</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last name :</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            <div class="form-group">
                <b><label for="gender">Gender :</label></b><br>
                <label class="btn btn-primary active">
                    <input type="radio" class="me-2" name="gender" value="Lanang" autocomplete="off" checked> Lanang
                </label><br>
                <label class="btn btn-primary">
                    <input type="radio" name="gender" value="Female" autocomplete="off"> Female
                </label><br>
                <label class="btn btn-primary">
                    <input type="radio" name="gender" value="E-mail" autocomplete="off"> E-mail
                </label>
            </div>
            <div class="dropdown-container">
                <label for="nationality">Nationality :</label>
                <select class="custom-select" id="nationality" name="nationality">
                    <option value="English">English</option>
                    <option value="Dutch">Dutch</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="German">German</option>
                </select>
            </div><br>
            <div class="form-group">
                <label for="languages">Language Spoken :</label><br>
                <input type="checkbox" id="language1" name="languages[]" value="Bahasa Indonesia">
                <label for="language1"> Bahasa Indonesia</label><br>
                <input type="checkbox" id="language2" name="languages[]" value="English">
                <label for="language2"> English</label><br>
                <input type="checkbox" id="language3" name="languages[]" value="Jawir">
                <label for="language3"> Jawir</label>
            </div>
            <div class="form-group">
                <b><label for="bio">Bio</label></b><br>
                <textarea class="form-control" name="bio" id="bio" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" value="Sign Up">
        </form>
    </div>
</body>
</html>
</html>