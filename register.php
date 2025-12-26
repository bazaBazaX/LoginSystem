<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login system by bazaBaza</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <?php include 'include/header.php'; ?>
    <main>
        <div class="mainChild">
            <h1>Register</h1>
            <form action="logic/register.php" method="POST">
                <input type="email" name="email" class="form-control" placeholder="Enter your email">

                <input type="text" name="login" class="form-control" placeholder="Enter your login">

                <input type="password" name="password" class="form-control" placeholder="Enter your password">

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a href="login.php">Login</a>
        </div>
    </main>
</body>
</html>