<head>
        <!--
    Formulaires de Cuisinella Orgeval
    HTML 5.1 
    Version 1.4
    © Léo LESIMPLE
    -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Privé">
    <meta name="author" content="Léo LESIMPLE and Bootstrap contributors">
    <title>Connectez-vous - Demande SAV</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"><link rel="stylesheet" href="../css/app.css">
<link rel="stylesheet" href="./css/keyframes.css">
<link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Favicons -->

</head>
<body>
    <div class="position-absolute top-50 start-50 translate-middle login shadow-lg">
        <form action="" method="post" name="Login_Form">
                <?php if(isset($msg)){?>
                <?php echo $msg;?></td>
                <?php } ?>
                <h1 class='text-white text-center h1-connect'>Connexion</h1>
                <h4 class='text-white'>Utilisateur</h4>
                <div class="input-group mb-3">
                    <span class="input-group-text"  id="basic-addon1"><i class="bi bi-people"></i></span>
                    <input type="text" class="form-control" name="Username" placeholder="Nom d'utilisateur" aria-label="Username" aria-describedby="basic-addon1" autocomplete="on" required autofocus>
                </div>
                <h4 class='text-white'>Mot de Passe</h4>
                <div class="input-group mb-3">
                    <span class="input-group-text"  id="basic-addon1"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" class="form-control" name="Password" placeholder="Mot de Passe" aria-label="Username" aria-describedby="basic-addon1" autocomplete="on" required autofocus>
                </div>
                <input name="Submit" type="submit" value="Connexion" class="btn btn-outline-light">
            </table>
            </form>
        </div>
    <?php session_start(); 
        
        if(isset($_POST['Submit'])){

                $logins = array('vendeurs' => 'ewC9Sx2A63uG','dev.admin' => 'iOSBootstrap01?');
                
                $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
                
                if (isset($logins[$Username]) && $logins[$Username] == $Password){
                        $_SESSION['UserData']['Username']=$logins[$Username];
                        header("location:../index.php");
                        exit;
                } else {
                        echo"<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        <span>Mot de Passe et/ou Nom d'utilisateur incorrect(s)</span>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                      </div>
                        ";
                }
        }
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>