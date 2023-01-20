<?php
  if(isset($_POST['submit_perf']))
  {
    /*
    header('Location: index.php');
    print_r($_POST['nome']);
    print_r($_POST['email']);
    print_r($_POST['senha']);
    print_r($_POST['confi_senha']); 
    */
    
    include_once('config.php');
    $raca = $_POST['raca'];
    $username = $_POST['username'];
    $age = $_POST['age'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['endereco'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $postal_code = $_POST['postal_code'];
    $about_me = $_POST['about_me'];

    $result = mysqli_query($conn, "INSERT INTO perfil(username, age, first_name, last_name, 
    endereco, city, country, postal_code, about_me) 
    VALUES ('$username', '$age', '$first_name', '$last_name', '$address', '$city', '$country', '$postal_code', '$about_me')");
  }

  $dbHost = 'Localhost';
  $dbUsername = 'root';
  $dbPassword = '';
  $dbName = 'formulario_danilo';

  $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

  $query = "SELECT raca, username, age, first_name, last_name, 
  endereco, city, country, postal_code, about_me FROM perfil";
  $busca = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $row_result = mysqli_fetch_assoc($busca);


?>


<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href= "assets/img/icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title> My Pet Routine</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


 


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color=orange>

    <!--   data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
        <ul class="nav">
                    <li>
                        <a href="../HOME/index.php">
                            <i class="pe-7s-angle-left" style="margin-top: 2px;"></i>
                            <h6 class="1">MY PET ROUTINE</h6>
                        </a>
                    </li>
            </ul>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Calendário</p>
                    </a>
                </li>
                <li class="active">
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>Perfil</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Cronograma</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Lembretes</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Jogos</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Mapa</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-light"></i>
                        <p>Curiosidades</p>
                    </a>
                </li>
 
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Meu Perfil</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Deslogar</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edite o perfil do seu pet</h4>
                            </div>
                            <div class="content">

                            

                                <form method="POST" action="teste.php">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Raça</label>
                                                <input id="raca" name="raca" type="text" class="form-control" placeholder="Raça" value="<?php echo(($row_result['raca']));?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Usuário</label>
                                                <input id="username" name="username" type="text" class="form-control" placeholder="Nome de usuário" value="<?php echo(($row_result['username']));?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Idade</label>
                                                <input id="age" name="age" type="text" class="form-control" placeholder="" value="<?php echo(($row_result['age']));?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input id="first_name" name="first_name" type="text" class="form-control" placeholder="" value="<?php echo(($row_result['first_name']));?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Sobrenome</label>
                                                <input id="last_name" name="last_name" type="text" class="form-control" placeholder="" value="<?php echo(($row_result['last_name']));?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Endereço</label>
                                                <input id="endereco" name="endereco" type="text" class="form-control" placeholder="" value="<?php echo(($row_result['endereco']));?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cidade</label>
                                                <input id="city" name="city" type="text" class="form-control" placeholder="" value="<?php echo(($row_result['city']));?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>País</label>
                                                <input id="country" name="country" type="text" class="form-control" placeholder="" value="<?php echo(($row_result['country']));?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Código Postal</label>
                                                <input id="postal_code" name="postal_code" type="number" class="form-control" placeholder="" value="<?php echo(($row_result['postal_code']));?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Sobre mim</label>
                                                <input id="about_me" name="about_me" textarea rows="5" class="form-control" placeholder="" value="<?php echo(($row_result['about_me']));?>"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit_perf" class="btn btn-info btn-fill pull-right">Salvar perfil</button>
                                    <div class="clearfix"></div>
                                </form>

    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <a href="dashboard.html">
                                <img src="https://st2.depositphotos.com/4164361/6539/i/450/depositphotos_65398393-stock-photo-orange-background.jpg" alt="..."/>
                            </a>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    
                                    <!--
                                     <img class="avatar border-gray" src="assets/img/danilo.jpeg" alt="..."/>
                                    -->

                                                                    
                                    <label class="avatar border-gray" for="picture__input" tabIndex="0">
                                        <span class="picture__image"></span>
                                        <input type="file" name="picture__input" id="picture__input">
                                        <style>
                                            #picture__input{
                                                display: none;
                                            }
                                            
                                        </style>
                                    </label>
                                    
                                    

                                     <!--
                                     <form method="POST" onsubmit="Checkfiles(this)">
                                        <input id="filename" type="file" name="arquivos" class="avatar border-gray"  accept="image/png, image/jpeg"  src="assets/img/danilo.jpeg" multiple /> 
                                     </form>
                                     -->
                                      <h4 class="title"><?php echo(($row_result['first_name']));?><br />
                                         <small><?php echo(($row_result['raca']));?>, <?php echo(($row_result['age']));?> anos</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> Biografia
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                
            
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="www.mypetroutine.com"> My Pet Routine 
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
    </script>

    <script src="imagem.js"></script>

    <script>
        
        /*
        function Checkfiles(){
            var fup = document.getElementById('filename');
            var fileName = fup.value;
            var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

            if(ext =="jpeg" || ext=="png"){
                return true;
            }
            else{
                return false;
            }
        }
        */
       

        $(function(){
            $('#upload').change(function(){
                const file = $(this)[0].files[0]
                const fileReader = new FileReader()
                fileReader.onloadend = function(){
                    $('#img').attr('src', fileReader.result)
                }
                fileReader.readAsDataURL(file)
            })
        })
    </script>

    <!--
    <script>
          function Checkfiles(){
            var fup = document.getElementById('filename');
            var fileName = fup.value;
            var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

            if(ext =="jpeg" || ext=="png"){
                return true;
            }
            else{
                return false;
            }
        }
    </script>
    -->

</html>
