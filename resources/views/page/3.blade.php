<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<style>

body{
    background-color:rgb(191, 228, 235);
}
    .btn {
    position: relative;
    display: inline-block;
    margin: 15px;
    padding: 15px 30px;
    text-align: center;
    font-size: 16px;
    letter-spacing: 1px;
    text-decoration: none;
    color: #7ffca8;
    background: transparent;
    border: 2px solid green;
    cursor: pointer;
    transition: ease-out 0.5s;
    -webkit-transition: ease-out 0.5s;
    -moz-transition: ease-out 0.5s;
}

.btn.btn-slide-4 {
    background:rgb(78, 129, 206);
    border: none;
    box-shadow: inset 0 0 0 0 #fffb03;
}


.btn.btn-slide-4:hover {
    color: #222222;
    box-shadow: inset -200px 0 0 0 #fffb03;
}




</style>
</head>

<body>
@extends('layouts.nav')
    @section('title')
    Courses & Cetificates
    @endsection

<br><br>

 <form action="/k" method="GET" style="padding:10px;margin-top:10px;height:50px;">

   <h3 style="color: rgb(106, 155, 155);font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Send me any commnt you went</h3>
    <label for="n" style="font-family:  sans-serif ,Arial, Helvetica;color: rgb(46, 169, 206);font-size:20px">Name:</label><br>
   <input type="text" id="n" placeholder="Enter Name" name="na" style="background-color: rgb(215, 246, 255)">
          <br>
          <label for="e" style="font-family:  sans-serif ,Arial, Helvetica;color: rgb(46, 169, 206);font-size:20px">Email:</label><br>
          <input type="email" id="e" placeholder="Enter Email" name="em" style="background-color: rgb(215, 246, 255)">
          <br>
        <label for="m" style="font-family: Arial, Helvetica, sans-serif;color:rgb(46, 169, 206);font-size:20px">Message:</label><br>
          <input type="text" id="m" placeholder="Write Anything.." name="me"   style="height:100px;background-color: rgb(215, 246, 255)">
          <br>
        <button type="submit" class="btn btn-slide-4" >Submit</button>


<br><br>
<p class="fa fa-map-marker fa-2x" style="color:rgb(13, 107, 60);font-size:28px">Buraydah, SA</p><br>
<p class="fa fa-envelope-open-o" style="color:rgb(13, 107, 60);font-size:28px">saraalharbi944@gmail.com</p><br>
<p class="fa fa-whatsapp" style="color:rgb(13, 107, 60);font-size:28px">+966 500-772-958</p><br>

</form>

<br><br>
</body>
</html>
