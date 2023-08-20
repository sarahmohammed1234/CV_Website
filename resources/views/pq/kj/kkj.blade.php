<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<style>

body {
    margin:0px;
  font-family:  sans-serif;
  text-align:center;
  background-color: black;
}

img {
    display: block;
   margin-left: auto;

   height:30%;
   width: 40%;
}

@import url('https://fonts.googleapis.com/css?family=Roboto:700');


#container {
  color:#28a36a;
  text-transform: uppercase;
  font-size:36px;
  font-weight:bold;
  padding-top:200px;
  position:fixed;
  width:100%;
  bottom:45%;
  display:block;
}

#flip {
  height:50px;
  overflow:hidden;
}

#flip > div > div {
  color:#fff;
  padding:4px 12px;
  height:45px;
  margin-bottom:45px;
  display:inline-block;
}

#flip div:first-child {
  animation: show 5s linear infinite;
}

#flip div div {
  background:#42c58a;
}
#flip div:first-child div {
  background:#4ec7f3;
}
#flip div:last-child div {
  background:#DC143C;
}

@keyframes show {
  0% {margin-top:-270px;}
  5% {margin-top:-180px;}
  33% {margin-top:-180px;}
  38% {margin-top:-90px;}
  66% {margin-top:-90px;}
  71% {margin-top:0px;}
  99.99% {margin-top:0px;}
  100% {margin-top:-270px;}
}

p {
  position:fixed;
  width:100%;
  bottom:30px;
  font-size:12px;
  color:#999;
  margin-top:200px;
}
</style>
</head>

<body>



    <br><br> <br><br> <br><br>

    <div id=container>
       I’m Sara Alharbi,
        <div id=flip>
          <div><div>front-end developer</div></div>
          <div><div>back-end developer</div></div>
          <div><div>ui/ux designer</div></div>
        </div>

    </div>



    <div> <img src="28c7a681-06c4-4050-b928-6909fdee34eb.png" alt="logo" ></div>

    @extends('layouts.nav')
    @extends('layouts.footer')
  @section('title')
  Courses & Cetificates
  @endsection

</body>
</html>
