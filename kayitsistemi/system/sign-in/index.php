<?php
include("session.php");
require_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head><script src="../assets/js/color-modes.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  
    <div class="container text-center">
    <h1 class="m-3">Hoşgeldiniz <spam class="bg-white text-black p-2" style="border-radius: 20px;"><?php echo $logsession;?></spam></h1>
    <a href="logout.php">Oturumu Kapat</a>
    <form action="process.php" method="POST" class="mt-5">
        <center>
        <input type="text" placeholder="Email:" class="form-control w-50 m-3" name="insertemail">
        <input type="text" placeholder="UserName:" class="form-control w-50 m-3" name="insertusername">
        <input type="password" placeholder="Password" class="form-control w-50 m-3" name="insertpassword">
        <input type="submit" class="btn btn-primary" value="Kaydet" name="insertbtn">
        </center>
    </form>
    <table class="table mt-5">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Email</th>
      <th scope="col">UserName</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <?php
    $cmd="SELECT * from users";
    $list=$con->query($cmd);
    while($vericek=$list->fetch_assoc()){
?>
<tr>
    <th> <?php echo $vericek["user_id"]; ?> </th>
    <td><?php echo $vericek["user_mail"]; ?> </td>
    <td><?php echo $vericek["user_name"]; ?> </td>
    <td><?php echo $vericek["user_password"]; ?> </td>
    <td> <form action="process.php" method="GET">
            <input type="hidden" name="id" value="<?php echo $vericek['user_id']; ?>">
            <button class="btn btn-danger" name="deletebtn" type="submit">Delete</button>
        </form></td>
</tr>

<?php } ?>

</table>

    </div>
</body>
</html>