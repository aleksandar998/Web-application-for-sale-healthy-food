<div class="row">
    <div class="col-md-6"> <!-- leva strana prikaza -->
        <div class="page-header">
            <h2>Registruj se</h2>
        </div>

        <!-- PHP -->
        <br>
        <form method="post" action="registracija.php">
            <?php
            $mysqli = new mysqli("localhost", "root", "", "korisnici");

            if($mysqli->error)
            {
                die("Greska: " . $mysqli->error);
            }

            $ime="";
            $prezime="";
            $email="";
            $password1="";
            $password2="";

            if(isset($_POST['dodaj']))
            {
                if((!$_POST['ime']) || (!$_POST['prezime']) || (!$_POST['email']) || (!$_POST['password1']))
                {
                    echo ("Mora biti uneto ime, prezime, email i lozinka");
                }

                else
                {
                    $upitdod = "insert into profil (ime, prezime, email, password1)
                    VALUES ('" .$_POST['ime']
                    . "','" . $_POST['prezime']
                    . "','" . $_POST['email']
                    . "','" . sha1($_POST['password1']) . "')";

                    if($_POST['password1']===$_POST['password2'])

                      $rezd = $mysqli->query($upitdod);

                  else $rezd = false;

                  if($rezd)
                  {
                     ?>
                     <div class="alert alert-warning alert-dismissible" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <strong>Uspesno ste se registrovali</strong> Uspesno ste se registrovali!
                     </div>
                     <?php 
                 }
                 else
                 {
                    ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <strong>Neuspesno ste se registrovali</strong> Neuspesno ste se registrovali!
                 </div>
                 <?php
             }
         }

     }
     ?>
     <?php
     if(isset($_POST['submit2']))
     {
        if(!empty($_POST['email']) && !empty($_POST['password1']))
        {
            $email = htmlspecialchars($_POST['email']);
            $password1 = htmlspecialchars($_POST['password1']);
            $result = $mysqli->query("SELECT * FROM profil WHERE email = '$email'");
            if($result->num_rows === 1)
            {
                $data = $result->fetch_assoc();
                $mysqli->close();
                if(password_verify($password1, $data['password1']))
                {
                    echo '<div class="alert alert-success" role="alert">Uspesno ste se ulogovali</div>';
                }
                else
                {
                    echo '<div class="alert alert-danger" role="alert">Pogresna lozinka</div>';
                }
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Korisnik sa adresom <u>'.$email.'</u> ne postoji u bazi</div>';
            }
        }
        else
        {
            echo '<div class="alert alert-danger" role="alert">Niste uneli sve podatke</div>';
        }
    }
    ?>

    <!-- HTML FORMA -->
    <div class="form-group">
        <label for="ime">Vaše ime</label>
        <input type="text" class="form-control" id="ime" name="ime" value="<?php echo $ime ?>" placeholder="Unesite ime" required>
    </div>
    <div class="form-group">
        <label for="prezime">Vaše prezime</label>
        <input type="text" class="form-control" id="prezime" name="prezime" value="<?php echo $prezime ?>" placeholder="Unesite prezime" required>
    </div>
    <div class="form-group">
        <label for="email">email adresa</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>" placeholder="Unesite e-mail adresu" required>
    </div>
    <div class="form-group">
        <label for="password1">Password</label>
        <input type="password" class="form-control" id="password1" name="password1" value="<?php echo $password1 ?>"placeholder="Unesite Password" required>
    </div>
    <div class="form-group">
        <label for="password2">Password</label>
        <input type="password" class="form-control" id="password2" name="password2" value="<?php echo $password2 ?>" placeholder="Ponovite Password" required>
    </div>
    <button type="submit" name="dodaj" value="dodaj" class="btn btn-warning btn-lg btn-block"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> Registruj se</button>
</div>


<div class="col-md-6"> <!-- desna strana prikaza -->
    <div class="page-header">
        <h2>Uloguj se</h2>
    </div>
    <div class="form-group">
        <label for="email">email adresa</label>
        <input type="email" class="form-control" id="email" placeholder="Unesite e-mail adresu">
    </div>
    <div class="form-group">
        <label for="Password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Unesite Password">
    </div>
    <button type="submit" name="submit2" class="btn btn-success btn-lg btn-block">Uloguj se <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
</div> <!-- kraj desne strane -->
</div> <!-- kraj podele prikaza -->