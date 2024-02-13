

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Form Database</h1>
    <form action="connect.php" method="POST">
        <div class="container">
            <div>
                <label>Name</label>
                <input type="text" name="username" placeholder="Name Here">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" placeholder="Email Here">
            </div>
            <div class="genderContainer">
                <label>Gender</label>
                <input type="radio" name="gender" class="gender1" value="m">Male
                <input type="radio" name="gender" class="gender1" value="f">Female
                <input type="radio" name="gender" class="gender1" value="o">Other
            </div>
            <div>
                <label>Mobile</label>
                <input type="text" name="mobile" placeholder="Mobile Here">
            </div>
            <div>
                <label>Password</label>
                <input type="text" name="password" placeholder="Password Here">
            </div>
            <div class="btn">
                <button type="submit" class="button">Submit</button>
            </div>
        </div>

    </form>

</body>
</html>











<!-- *{
    box-sizing: border-box;
}
body{
    background-image: linear-gradient(to right ,yellow,white ,yellow);
    height: 100vh;
}
h1{
    text-align: center;
}
.container{
    width: 70%;
    margin: 0 auto;   
}
input{
    width: 100%;
    padding: 15px;
    margin: 8px;
    border: 1px solid #000;
    font-size: 18px;
}
::placeholder{
    text-align: center;
}
.genderContainer{
    text-align: center;
    font-size: 18px;
}
.gender1{
    width: 10%;
}
label{
    font-weight: bold;
    padding: 10px;
    
}
.btn{
    text-align: center;
    margin: 10px;
}
button{
    padding: 10px;
    width: 20%;
    border-radius: 10px;
    background-color: rgb(13,226,13);
    font-size: 18px;
} -->