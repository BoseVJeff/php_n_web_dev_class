<?php
    $method='';
    switch (strtolower($_GET["method"])) {
        case 'get':
            $method= "GET";
            break;
        case "post":
            $method= "POST";
            break;
        default:
            $method= "GET";
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP <?php echo $method ?></title>
</head>
<body>
    <form action="form_getter_poster.php?method=<?php echo $method ?>" method="get">
        <div>
            <label for="fname">
                Full Name
            </label>
            <input type="text" id="fname" name="fname">
        </div>
        <div>
            <label for="address">
                Address
            </label>
            <textarea name="address" id="address"></textarea>
        </div>
        <div>
            <label for="email">
                Email
            </label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="password">
                Password
            </label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <label for="mob">
                Mobile No.
            </label>
            <input type="number" id="mob" name="mobile">
        </div>
        <div>
            <label>
                Gender
            </label>
            <input type="radio" name="gender" id="m" value="m">
            <label for="m">Male</label>
            <input type="radio" name="gender" id="f" value="f">
            <label for="f">Female</label>
        </div>
        <input type="submit" value=<?php echo $method ?>>
    <input type="reset" value="Reset">
    </form>
</body>
</html>