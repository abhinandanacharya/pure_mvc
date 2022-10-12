<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
   <table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Brand</th>
        </tr>
    </thead>
    <tbody>
        <?php
            pr($products);
         ?>
    </tbody>
   </table>
</body>
</html>