<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <style>
            span {
                margin: 5px;
            }
            .col {
                display: flex;
                flex-direction: column;
            }
            .row {
                display: flex;
                flex-direction: row;
                background-color: #b2e7e7;
                font-size: 20px;
                border: 1px solid black;
            }
            .container {
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin-top: 3%;
            }
            body {
                margin-top: 10%;
                background-color: #70a6a6;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <h2>Users</h2>
        <?php
        require_once 'helper.php';
        $mysqli = openMysqli();
        $users = $mysqli->query('select * from ' . users);
        ?>
        <div class="col">
            <?php foreach ($users as $user) { echo <<<A
            <div class="row">
                <span>{$user[id]}</span>
                <span>{$user[name]}</span>
                <span>{$user[password]}</span>
            </div>
        A;} ?>
        </div>
        <?php $mysqli->close(); ?>
    </div>
    </body>
</html>