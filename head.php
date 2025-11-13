<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="../images/favicon.png">
    <title>LMS Admin Template</title>
    <link rel="stylesheet" href="./assets/css/dashlite583f.css??v=<?php echo time(); ?>">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme583f.css??v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./assets/css/editors/quill583f.css?v=<?php echo time(); ?>">
</head>
<?php 
    require_once("functions.php");
    $mainfunc = new mainfunctions;
    if(isset($_POST['login'])){
      unset($_POST['login']);
      $table = "registeration";
      $username = $_POST['email'];
      $_POST['password'] =  md5($_POST['password']);
      $data = $_POST;
     $run_login = $mainfunc->login_function($table, $data);
      if($run_login){
          session_start();
          $_SESSION["email"] = $username;
          header("location:index.php");
      }else{
          echo "<script>alert('Entered detial is not correct');</script>";
      }
  }