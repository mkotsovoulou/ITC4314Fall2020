<html> <!-- Press Shift-Tab to beautify -->
  <head>
    <title> Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
     

    <h1 class="display-4">
      User registration information
    </h1>
      
 <div class="container mt-5 p-5" style="background-color:#ededed;">
    <div id="flashMessage" class="alert fade show" role="alert" style="display:none;"></div>
   
    <form id="registrationForm">
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" placeholder="Type your username...">
    </div> 
      
    <div class="form-group">
    <label for="password1">Password</label>
    <input type="password" class="form-control" id="password1" name="password1">
    </div>
      
    <div class="form-group">
    <label for="password2">Verify Password</label>
    <input type="password" class="form-control" id="password2" name="password2">
    </div>
      
    <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
      
       <button type="submit" class="btn btn-primary mx-3">Submit</button>

     </form>
      </div>


    </div>

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <script src="./js/app.js"></script>
  </body>
</html>