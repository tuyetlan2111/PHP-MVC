
<?php
	session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
    <link href="<?php echo BASE_URL;?>cdn/css/sign_out.css" rel="stylesheet" type="text/css">
</head>

<body>
  <?php

 $email ="";
 $pass ="";

 
  
  ?>

  <div class="form">     
      <ul class="tab-group">
       
 <li class="tab"><a href="#signup">Đăng kí</a></li>
       
 <li class="tab active"><a href="#login">Đăng nhập</a></li>
      
</ul>     
     <div class="tab-content">

         <div id="login">   
           
          <form action="index.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Mật khẩu<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>
          
          <p class="forgot"><a href="forgot.php">Quên mật khẩu</a></p>
          
          <button class="button button-block" name="login"/>Đăng nhập</button>         
          </form>
        </div>         
        <div id="signup">            
          <form action="index.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>
          
          <div class="field-wrap">
            <label>
              Mật khẩu<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />Đăng kí</button>
          
          </form>

        </div>  
        
      </div>
      
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="<?php echo BASE_URL;?>cdn/js/cms.js"></script>

</body>
</html>

