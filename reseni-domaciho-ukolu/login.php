<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">
    <!--
        4. Na stránce vytvořte pomocí bootstrap přihlašovací formulář
        5. Formuláři nastavte odesílání metodou POST
    -->
    <form method="POST">
        <div class="form-group">
            <label for="loginInput">Login:</label>
            <input type="text" class="form-control" id="loginInput" name="login">
        </div>
        <div class="form-group">
            <label for="passwordInput">Password:</label>
            <input type="password" class="form-control" id="passwordInput" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Přihlásit</button>
    </form>
    <br>
    <?php
    session_start();

    // 6. V případě, že byl formulář odeslán, vypište pod ním zadaný login:
    // if (isset($_POST['login'])) {
    //     echo 'Zadaný login: ' . $_POST['login'];
    // }

    // 7. Nyní nahraďte vypsání loginu kontrolou na správnost přihlašovacích údajů:
    if (isset($_POST['login'], $_POST['password'])) {
        if ($_POST['login'] === 'admin' && $_POST['password'] === 'top-secret') {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['data'] = [
                'Datum registrace:' => '2.4.2018',
                'Souhlas s podmínkami' => 'ANO',
                'Počet objednávek' => 23
            ];
            echo '<a href="admin.php">Pokračovat do administrace</a>';
        } else {
            echo 'Chybné jméno nebo heslo';
        }
    }
    ?>
</div>
</body>
</html>
