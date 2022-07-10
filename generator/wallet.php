<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require "C:/xampp/htdocs/subway_surf/require/connect.php" ?>
        <title>Generate the wallet.json file</title>
    </head>
    <body>
        <header>
                <h1>Generate the wallet.json file</h1>
                <p style="color:#aaa;font-size:25px">Fill out the options and generate your customized JSON template code.</p>
        </header>
        
        <form method="post" action="/generator/wallet">
        <fieldset>
            <legend>Game data</legend>
            <label for="number">Coins:</label> <input type="number" name="coins" required><br>
            <label for="number">Keys:</label> <input type="number" name="keys" required><br>
        </fieldset>
        <br><input type="submit" name="submit" class="btn btn-success">
        </form>

        <br><br><br>
        <?php require "C:/xampp/htdocs/subway_surf/require/footer.php" ?>
</html>