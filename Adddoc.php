<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    
  </head>
  <body>
    




    <div   id="add1"align="center">


<form >
  <div class="form-group">
    
    <input my-2  type="text" class="form " name='drn' style="text-align:center"  required size="40" id="drnameo" aria-describedby="emailHelp" placeholder="Doctor Name">
    <br>

    <p my-1><button type="submit" name='submit' id="submit" class="btn btn-primary btn-xs">Add Doctor</button><p>
</div>
</form>

</div>

<div class="container" id='dt'>



</div>








<script src="jquery-1.11.0.js"></script>

  




<script type="text/javascript">
  $(document).ready(function(){
    $('#submit').on('click',function(){
      var dname=$('#drnameo').val();


      $.ajax({
              

             url:"adr.php", method:"POST",data:{nam:dname}              
      });

 


 



});


});
</script>



<script type="text/javascript">
  $(document).ready(function(){

     $.ajax('drtable.php')
 .done(function(response){

$('#dt').html(response);
 });







  });



</script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>