<?php

include './includes/data.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DISCHI</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- STYLE -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Header Content Area -->
                    <div>
                        <figure class="m-0">
                            <img src="../images/logo.svg" alt="logo">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- MAIN -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex flex-wrap">
                        <?php foreach($discs as $disc) : ?>
                        <div class="card">
                            <figure class="m-0 mb-2 h-50">
                                <img src="<?php echo $disc['poster']?>" alt="<?php $disc['title'] ?>">
                            </figure>
                            <div class="h-50 text-center d-flex flex-column justify-content-between">
                                <h2 class="mb-3 text-white"><?php echo $disc['title'] ?></h2>
                                <div>
                                    <p class="color-gray"><?php echo $disc['author'] ?></p>
                                    <p class="color-gray"><?php echo $disc['year'] ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>