<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<!--script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
    <script src="js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


    <!--<link rel="stylesheet" href="css/bootstrap.css">-->
    <link rel="stylesheet" href="css/fonts.css">
    <script src="js/myjs.js"></script>
    <!--<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>-->
    <title>Ajax Project with PHP</title>
</head>
<body class="badge-dark">
    
    <div class="row">
        <div class="col">
            <div class="card mt-5"> <!-- margin top 5-->
                <div class="card-title ml-5 my-2"> <!--margin left 5 -->
                    <!--Registration Button-->
                    <button type="button" class="btn btn-primary" data-toggle ="modal" data-target="#Registration">Add New User</button>
                </div>
                <div class="card-body">
                    <p id="delete-message" class="text-dark"></p>
                    <div id="table"></div>
                </div>
            </div>

        </div>
    </div>

    <!-- Registration Modal -->
    <div class="modal" id="Registration">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-dark">Registration Form</h3>
                </div>
                <div class="modal-body">
                    <p id="message" class="text-dark"></p>
                    <form>
                        <input type="text" class="form-control my-2" placeholder="User Name" id="UserName">
                        <input type="email" class="form-control my-2" placeholder="User Email" id="UserEmail">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btn_register">Register Now</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_close">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Update Modal -->
    <!-- Registration Modal -->
    <div class="modal" id="update">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-dark">Update Form</h3>
                </div>
                <div class="modal-body">
                    <p id="up-message" class="text-dark"></p>
                    <form>
                        <input type="hidden" class="form-control my-2" placeholder="User Email" id="Up_User_ID">
                        <input type="text" class="form-control my-2" placeholder="User Name" id="Up_UserName">
                        <input type="email" class="form-control my-2" placeholder="User Email" id="Up_UserEmail">
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btn_update">Update Now</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_close">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Delete Modal-->
    <div class="modal" id="delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-dark">Delete Record</h3>
                </div>
                <div class="modal-body">
                    <!--<p id="delete-message" class="text-dark"></p>-->
                    <p class="text-dark"> Do You Want to Delete the Record ? </p>
                    <button type="button" class="btn btn-success" id="btn_delete_record">Delete Now</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_close">Close</button>
                </div>
                  
            </div>
        </div>
    </div>
    




</body>
</html>