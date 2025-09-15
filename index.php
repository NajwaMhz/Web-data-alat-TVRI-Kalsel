<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login</title>
</head>
<style>
    body {
        background-color:rgb(27, 29, 34) ;
        font-family: sans-serif;
        margin: 0;
    }

    fieldset {
        margin: 100px auto;
        background-color: white ;
        height: 320px;
        width: 250px;
        border: 2px solid white;
        border-radius: 10px;
        padding-bottom: 50px;
    }

    input {
        position: center;
        margin: 5px;
        padding: 10px;
        width: 200px;
        height: 40px;
        border: 1px solid white;
        border-radius: 5px;
    }

    select {
        position: center;
        margin: 5px;
        padding: 10px;
        width: 200px;
        height: 40px;
        border: 1px solid white;
        border-radius: 5px;
    }

    #submit{
        color: white;
        background-color: #3950a2;
    }

    #input {
        background-color: #c6cfc7;
    }

    img {
        border-radius: 50px;
        border: 4px solid #3950a2;
    }

    h1 {
        color: white;
    }

 


</style>
<body>
    <h1 align="center"><b>Data Alat</b></h1>
    <form action="login.php" method="post">
        <fieldset>
            <?php
            if(isset($_GET['pesan'])){
                if($_GET['pesan']=="gagal"){
                    echo "<div class='alert'>Username dan Password tidak sesuai! </div>";
                }
            }        
            ?>

            <legend align="center"><img src="foto/logo.jpg" width="75px"></legend>
            <table align="center">
                <p align="center"><b>Login Data barang</b></p>
                <tr>
                    <td>
                        <input type="text" name="username" placeholder="Username" id="input" required>
                    </td>
                </tr>
               
                <tr>
                    <td>
                        <input type="password" name="password" placeholder="Password" id="input" required > 
                    </td>
                </tr>
               
                <tr align="center" >
                    <td class="submit" >
                        <input type="submit" name="login" value="LOGIN" id="submit">
                        <!-- <a href="lupa_password.php">Lupa Password?</a> -->
                    </td> 
                   
                </tr>
               
               
            </table>

        </fieldset>
    </form>
</body>
</html>