<html>
  <head>
    <title> search</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link rel="stylesheet" href="/js/jquery-ui.min.css" type="text/css" /> 
  </head>
  <body>
    <div class="container auto">
      <div class="row" style="margin-bottom:10px;">
        <div class="col-lg-12"><h2 style="text-align:center;">jquery autocomplete search books using php mysql and ajax</h2></div>
      </div>
      <div class="form-group row">
        <div class="col-lg-3">&nbsp;</div>
        <div class="col-lg-6">
          <label for="txtSearch">Enter title:</label>
          <input type="text" class="form-control" id="txtSearch" name="txtSearch" value='' class='auto'>
          <input type="hidden" class="form-control d-none" id="id" name="id"> <br>
          <input type="text" class="form-control" id="price" name="price" disabled> <br>
          <img id="image" src=""/>
          <ul></ul>
        </div>
        <div class="col-lg-3">&nbsp;</div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="./js/app.js"></script>

    <script type="text/javascript">
    $(function() {
    $("#txtSearch").autocomplete({
        source: "search.php",
        minLength: 2,
        select: function (event, ui) {
         // Set all fields to the selection
          $('#txtSearch').val(ui.item.label); // display the selected text
          $('#id').val(ui.item.id); // save selected id to input
          $('#price').val(ui.item.price); 
          $('#image').attr('src', './images/'+ui.item.image);
         return false;
         }
    });
      });
    </script>

  </body>
</html>