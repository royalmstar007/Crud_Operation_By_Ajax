<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-primary">
    <form action="insert.php" method="get">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
                <h3 class="text-center text-primary font-monospace">TODO LIST</h3>
                <div class="col-8">
                    <input type="text" required name="list" class="form-control" id="" autocomplete="off">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
        </div>
    </form>

    <!--get data-->
    <?php
    include "config.php";
    $rawData=mysqli_query($conn,"select * from todo");
    ?>
    <div class="container">
        <div class="col-8 bg-white m-auto mt-3">
    <table class="table">
        <tbody class="fs-3 text-primary shadow">
            <?php
                while($row=mysqli_fetch_array($rawData)){

                
            ?>
            <tr>
                
                <td><?php echo $row['list']?></td>
                <td class="w-1/12"> <a href="delete.php? ID=<?php echo $row['id']?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
    </div>
</body>
</html>