
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/homecss.css">

    <title>Document</title>
</head>
<body>
    <table>
    <?php
    // echo '<pre>';
    // print_r($data['admin']);

    ?>  
    <?php foreach($data['admin'] as $datavalue): ?>
    <tr>
        <td><?=$datavalue['id']." "?></td>
        <td><?=$datavalue['departurePlace']." "?></td>
        <td><?=$datavalue['arrivalPlace']." "?> </td>
        <td><?=$datavalue['departureDate']." "?></td>
        <td><?=$datavalue['passengerNumber']." "?></td>
        <td><?=$datavalue['placeNumber']." "?></td>
        <td><?=$datavalue['price']."<br>"?></td>
        <td>
            <form action="deleteflight" method="post">
                <input type="hidden" name='delete' value="<?=$datavalue['id']?>" >
                <button type="submit"></button>
            </form>
         </td>
         <td>
            <form action="<?= URL ?>admins/showForm" method="post">
                <input type="hidden" name='edit' value="<?=$datavalue['id']?>" >
                <button type="submit">Update</button>
            </form>
         </td>
    </tr>
    <?php endforeach; ?>
    </table>

    <form action="<?= URL ?>admins/addflight" method="post">
        <input  type="text" name="departurePlace" placeholder="departurePlace">
        <input type="text" name="arrivalPlace"  placeholder="arrivalPlace">
        <input type="text" name="departureDate"  placeholder="departureDate">
        <input type="text" name="passengerNumber" placeholder="passengerNumber">
        <input type="text" name="placeNumber" placeholder="placeNumber">
        <input type="text" name="price" placeholder="price">
        <button style="background-color: black; width: 158px; height: 40px;color: white; border-radius: 20px;">Add </button>
    </form>

    
</body>
</html>