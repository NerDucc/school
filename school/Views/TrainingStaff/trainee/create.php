<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="add.css">
    <link rel="stylesheet" href = "<?php echo assets_css()?>add.css">
    <link rel="stylesheet" href="grid.css">
    <link rel="stylesheet" href = "<?php echo assets_css()?>grid.css">
    <title>Insert Page</title>
</head>

<body>
    <div class="heading">

        <a class="heading__logo"href="<?php echo SITE_URL ?>index.php?controller=trainee&action=indexTrainee" alt="logo"><i class="fas fa-home"></i></a>

        <h3 class="heading__title"></h3>
    </div>
    <div class="grid wide">
        <div class="row">
            <form class="l-6 l-o-3" method="post" action="<?php echo SITE_URL ?>index.php?controller=trainee&action=store">
                <div class="input-group ">
                    <span class="input-group-text" id="basic-addon1">Name</span>
                    <input type="text" name="" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">

                </div>


                <div class="input-group ">
                    <span class="input-group-text" id="basic-addon3">Email</span>
                    <input type="email" name="" class="form-control" id="basic-url url" aria-describedby="basic-addon3" placeholder="">
                </div>

                <div class="input-group ">
                    <span class="input-group-text" id="basic-addon3">Phone</span>
                    <input type="text" name="" class="form-control" id="basic-url url" aria-describedby="basic-addon3" placeholder="">
                </div>
                
                <div class="input-group ">
                    <span class="input-group-text" id="basic-addon3">Age</span>
                    <input type="text" name="" class="form-control" id="basic-url url" aria-describedby="basic-addon3" placeholder="">
                </div>
                <input class="btn btn-dark" type="submit" value="Add">

            </form>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>