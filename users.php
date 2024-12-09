<?php session_start();


unset($_SESSION['user_name']);
unset($_SESSION['user_email']);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto p-2">
                <?php if (isset($_SESSION['errors'])): ?>
                    <?php foreach ($_SESSION['errors'] as $error): ?>
                        <div class="alert alert-danger text-center">
                            <?php echo $error; ?>
                        </div>
                    <?php endforeach; 
                    unset($_SESSION['errors']); 
                    endif;
                ?>
                <form action="user.php" method="POST" class="p-3 border">
                    <div class="mb-3">
                        <input type="text" name="user_name" class="form-control" placeholder="Type your username">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="user_email" class="form-control" placeholder="Type your email address">
                    </div>
                    <div class="p-3">
                        <input type="submit" value="Send" class="form-control btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
