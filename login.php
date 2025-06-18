<html>
<?php 
    require_once("head.php");
    
 
   
?>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="brand">
                        <a href="/index.php" class="logo-link nk-sidebar-logo"><img class="logo-light logo-img"
                                src="./images/dholilogo.png" srcset="/demo2/images/logo2x.png 2x" alt="logo"><img
                                class="logo-dark logo-img" src="./images/dholilogo.png"
                                srcset="/demo2/images/logo-dark2x.png 2x" alt="logo-dark"><img
                                class="logo-small logo-img logo-img-small" src="./images/dholilogo.png"
                                srcset="/demo2/images/logo-small2x.png 2x" alt="logo-small"></a>
                    </div>
                </div>
                <div class="col-sm-8">

                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form method="post" class="login-form">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>