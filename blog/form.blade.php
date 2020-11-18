<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>

    <h2>Sign Up Form</h2>
    <form action="/login" method="POST">
        @csrf
        
        <label for="first">First Name:</label> <br><br>
        <input type="text" placeholder="First Name" name="first">
        <br><br>
        <label for="last">Last Name:</label> <br><br>
        <input type="text" placeholder="Last Name" name="last">
        <br><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="0">Male <br>
        <input type="radio" name="gender" value="1">Female <br>

        <p>Nationality:</p>
        <select>
            <option>Indonesia</option>
            <option>English</option>
            <option>Chinese</option>
        </select>
        <p>Language Spoken:</p>
        <input type="checkbox" name="language">Bahasa Indonesia <br>
        <input type="checkbox" name="language">English <br>
        <input type="checkbox" name="language">Other <br>
        <p>Bio:</p>
        <textarea cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>    
</body>
</html>