<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?= URL ?>admins/editflight" method="post">
        <input  type="text" name="departurePlace" placeholder="departurePlace">
        <input type="text" name="arrivalPlace"  placeholder="arrivalPlace">
        <input type="text" name="departureDate"  placeholder="departureDate">
        <input type="text" name="passengerNumber" placeholder="passengerNumber">
        <input type="text" name="placeNumber" placeholder="placeNumber">
        <input type="text" name="price" placeholder="price">
        <button style="background-color: black; width: 158px; height: 40px;color: white; border-radius: 20px;">Edit </button>
    </form>
    
</body>
</html>