
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="submit.php" method="post">
        <fieldset class="fieldset">
            <legend class="legend">Register Form:</legend>

            <div class="section">
            <label for="username">Username: </label> <br>
            <input name="username" placeholder="Enter your username" type="text">
            </div> 
            <br>

            <div class="section">
                <label for="email">Email:</label> <br>
                <input name="email" placeholder="example@gmail.com" type="email">
                </div> 
                <br>

                <div class="section">
                    <label for="gender">Gender:</label> <br>
                    <select name="gender" id="">
                        <option value="male">Male</option>
                        <option value="female">Female/option>
                        <option value="other">Others</option>
                    </select>
                    </div> 
                    <br>

                    <div class="section">
                    <label for="country">Country:</label> <br>
                    <input list="country" name="country">
                    <datalist id="country">
                        <option value="nepal">Nepal</option>
                        <option value="bhutan">USA</option>
                        <option value="india">UK</option>
                    </datalist>
                    </div> 
                    <br>
                <div class="section">
                    <label for="password">Password:</label> <br>
                    <input name="password" placeholder="Enter your password" type="password">
                    </div> <br>
                    <button type="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>