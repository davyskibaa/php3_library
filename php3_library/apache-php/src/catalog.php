<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Catalog</title>
        <style>
            td {
                padding: 5px;
                border: solid 1px black;
            }
            table {
                border-collapse: collapse;
                font-size: 20px;
                background-color: #b2e7e7;
            }
            .container {
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            body {
                margin-top: 10%;
                background-color: #70a6a6;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Catalog of Books</h2>
            <?php
                require_once 'helper.php';
                $mysqli = openMysqli();
                $results = $mysqli->query("select * from " . catalog);
            ?>
            <table>
                <?php if ($results->num_rows > 0) foreach ($results as $result) echo <<<A
                <tr>
                    <td>{$result[author]}</td>
                    <td>{$result[book]}</td>
                </tr>
            A; else echo 'Empty'; ?>
            </table>
        </div>
    </body>
</html>
