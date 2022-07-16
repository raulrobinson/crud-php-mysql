<?php

include_once "controllers.php";
include_once "models.php";

/*### Area de Test PHP ###*/
//var_dump(Controllers::Get_All_Customers());
//var_dump(Controllers::Get_Customer_by_id(2));
//var_dump(Controllers::Add_Customer("Robinson", "New York"));
//var_dump(Controllers::Update_Customer_by_id(3, "Del Carmen", "Madrid"));
//var_dump(Controllers::Delete_Customer_by_id(2));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-PHP-MYSQL</title>
    <style>table, th, td {border:1px solid black;}</style>
</head>
<body>
    <div>
        <table style="width:50%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Ciudad</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $customers = Controllers::Get_All_Customers(null);

                foreach ($customers as $key => $value) {
                    echo '<tr>
                            <td>'.$value["id"].'</td>
                            <td>'.$value["name"].'</td>
                            <td>'.$value["city"].'</td>
                    </tr>';
                }

                ?>
            </tbody>
        </table>
    </div>    
</body>
</html>
