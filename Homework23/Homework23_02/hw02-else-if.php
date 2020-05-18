<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Day of the week</h2>
    <form action="" method="POST">
        <laber for="day">Enter Day here:</label>
        <input type="text" name="day"></input><br>
        <button type="submit">submit</button>
    </form>

    <?php
    if (!empty($_POST["day"])) {
        $day = $_POST["day"];
        if (strtoupper($day) === "MONDAY") {
            echo "<p>Laugh on Monday, laugh for danger.</p>";
        } else if (strtoupper($day) === "TUESDAY") {
            echo "<p>Laugh on Tuesday, kiss a stranger.</p>";
        } else if (strtoupper($day) === "WEDNESDAY") {
            echo "<p>Laugh on Wednesday, laugh for a letter.</p>";
        } else if (strtoupper($day) === "THURSDAY") {
            echo "<p>Laugh on Thursday, something better.</p>";
        } else if (strtoupper($day) === "FRIDAY") {
            echo "<p>Laugh on Friday, laugh for sorrow.</p>";
        } else if (strtoupper($day) === "SATURDAY") {
            echo "<p>Laugh on Saturday, joy tommorrow.</p>";
        } else {
            echo "<p>Enter valid day!";
        }
    }
    ?>
</body>
</html>