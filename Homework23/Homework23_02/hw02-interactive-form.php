<?php 
$city = (isset($_POST['city']) && !empty($_POST['city'])) ? $_POST['city'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div cass="col-md-6 offset-md-3 mt-5">
            <h1 class="mb-3">Favourite City</h1>
            <?php if(!isset($city)) : ?>
            <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="city" placeholder="Entewr your favourite city">
                </div>
                <button type="submit" class="btn btn-block btn-outline-primary">Go!</button>
                    </form>
                <?php else : ?>
                    <h4>Your favourite city is <?php echo $city; ?>.</h4>
                <?php endif; ?>
        </div>
    </div>
</body> 
</html>