<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Jquery Ajax</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h3 id="table-data" class="my-5"></h3>
                <form action="" method="POST" class="my-5">
                    <div class="form-group">
                        <label for="firstName">FirstName</label>
                        <input type="text" class="form-control" id="firstName" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="lastName">LastName</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                    </div>
                    <button type="submit" id="save-button" name="submit" class="btn btn-primary my-2">Submit</button>
                </form>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            function loadTable() {
                $.ajax({
                    url: "load-ajax.php",
                    type: "POST",
                    success: function(data) {
                        $("#table-data").html(data);
                    }
                });
            }
            loadTable();
            $("#save-button").on("click", function(e) {
                e.preventDefault();
                var firstName = $("#firstName").val();
                var lastName = $("#lastName").val();
                $.ajax({
                    url : "ajax-insert.php",
                    type: "POST",
                    data: {
                        firstName: firstName,
                        lastName: lastName
                    },
                    success: function(data) {
                        
                        if (data == 1) {
                            loadTable();
                        }else{
                            alert("can't save record");
                        }
                    }
                });
            })
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>