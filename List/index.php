<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <lik href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="jquery/jq.js"></script>
    <script src="jquery/customjq.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>List Maker</title>
  </head>
<body>
    <div>
      <div class="dropdown float-right">
        <button class="btn btn-primary mt-4 mr-5 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="material-icons mt-2 text-light">account_circle</i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <!-- Button trigger modal -->
          <a class="dropdown-item" data-toggle="modal" href="#exampleModal1">Login</a>
          <!-- Button trigger modal -->
          <a class="dropdown-item" data-toggle="modal" href="#exampleModal2">Login</a>
          <!-- Button trigger modal -->
          <a class="dropdown-item" href="#">Logout</a>
        </div>
      </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title display-4" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <h1 class="display-4 text-light bg-primary text-center p-3 pl-5 mb-3">List Maker</h1>
  </div>
    <div class="main text-center jumbotron " id="main">
    <div class="row">
      <div class="col-sm-3">
    <span id="id1" class="display-4 mr-5 pt-5 text-center">0</span>
  </div>
  <div class="col-sm-9">
      <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Enter your item</span>
    </div>
    <input name="insertdata" type="text" id="item" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" onkeyup="show_hint(this.value)">
    <div id="h" class="hint"></div>
  </div>
    <input type="submit" class="btn btn-success" id="btn1" name="submit" value="Add item in the beginning">
    <input type="submit" class="btn btn-danger" id="btn2" name="deletedata" value="Enter the Item to Delete">
  </div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-3 fix">
      <div class="item-list">
        <ul class="list-group" id="ul1"></ul>
      </div>
    </div>
  </div>
</div>


<script src="js/fontawesome-all.js"</script>
</body>
</html>
