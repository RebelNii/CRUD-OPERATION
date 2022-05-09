<?php
require_once("./component/var.php");
require_once("./op.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <title>PHP</title>
</head>
<body>
    <main class="wrapper">
        <div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Project</h1>

            <div class="d-flex justify-content-center">
                <form action="" method="POST" class="w-50">
                    <div class="pt-2">
                        <?php input(icon:"<i class='fas fa-id-badge'></i>",placeholder:"ID",name:"id",value:""); ?>
                    </div>
                    <div class="pt-2">
                        <?php input(icon:"<i class='fas fa-book'></i>",placeholder:"Book Name",name:"book_name",value:""); ?>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                        <?php input(icon:"<i class='fas fa-people-carry'></i>",placeholder:"publisher",name:"book_publisher",value:""); ?>
                        </div>
                        <div class="col">
                        <?php input(icon:"<i class='fas fa-dollar'></i>",placeholder:"price",name:"price",value:""); ?>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <?php button(btnid:"btn-create",styleclass:"btn btn-success",
                        text:"<i class='fas fa-plus'></i>",name:"create",attr:"dat=toggle='tooltip' data-placement='bottom'
                        title='create'"); ?>
                        <?php button(btnid:"btn-read",styleclass:"btn btn-primary",
                        text:"<i class='fas fa-sync'></i>",name:"read",attr:"dat=toggle='tooltip' data-placement='bottom'
                        title='read'"); ?>
                        <?php button(btnid:"btn-update",styleclass:"btn btn-light-border",
                        text:"<i class='fas fa-pen-alt'></i>",name:"update",attr:"dat=toggle='tooltip' data-placement='bottom'
                        title='update'"); ?>
                        <?php button(btnid:"btn-delete",styleclass:"btn btn-danger",
                        text:"<i class='fas fa-trash-alt'></i>",name:"delete",attr:"dat=toggle='tooltip' data-placement='bottom'
                        title='delete'"); ?>
                    </div>
                </form>
            </div>

            <div class="d-flex table-data">
                <table class="table table-striped table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Book Name</th>
                            <th>Publisher</th>
                            <th>Price</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        
                        <?php 
                            if(isset($_POST["read"])){
                                
                            while($array = $result->fetch_array()){?>
                                <tr>
                                    <td data-id="<?php echo $array["id"] ?>"><?php echo $array["id"]; ?></td>
                                    <td data-id="<?php echo $array["id"] ?>"><?php echo $array["book_name"]; ?></td>
                                    <td data-id="<?php echo $array["id"] ?>"><?php echo $array["book_publisher"]; ?></td>
                                    <td data-id="<?php echo $array["id"] ?>"><?php echo $array["book_price"];  ?></td>
                                    <td ><i class="fas fa-edit btnedit" data-id="<?php echo $array["id"]; ?>"></i></td>
                                
                            
                                </tr>

                            <?php    
                            }
                        };
                        ?>
                        
                    </tbody>
                </table>
            </div>

        </div>
    </main>
    











<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
 integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="edit.js"></script>
</body>
</html>