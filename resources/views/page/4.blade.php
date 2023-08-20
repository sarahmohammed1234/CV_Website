
    <!DOCTYPE html>
    <html>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans: ital, wght@0,100;0 ,200;0,300;0,400; 0,500; 0,600;0,700; 1,100; 1,200; 1,300;1,400; 1,500; 1,600;1,700&displa y=swap" rel="stylesheet">

    <style>
*{

padding: 0;
margin: 0;
font-family: 'Josefin Sans',sans-serif;
box-sizing: border-box;
}
.about{
    width: 100%;
    padding: 70px 0px;

}
.about img {
height: auto;
width: 20%;

}
.about-text{
width: 550px;
}
.main{
    width: 1130px;
    max-width: 95%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
}
.about-text h1{
    color: gray;
    font-size: 50px;
    text-transform: capitalize;
    margin-bottom: 20px;

}
.about-text h5{
    color: gray;
    font-size: 25px;
    text-transform: capitalize;
    margin-bottom: 25px;
    letter-spacing: 2px;

}
span{
    color: rgb(196, 30, 99);
}
.about-text p {
    color: rgb(98, 173, 127);
    letter-spacing: 1px;
    line-height: 28px;
    font-size: 18px;
    margin-bottom: 45px;
}
.checked {
  color: orange;
}
    </style>
    <body >

<section class="about">
<div class="main">
<img src="fb4607e3-5210-4938-9535-fbe633948493.png">
<div class="about-text">
<h1>About Me</h1>
<h5>Developer <span> & Designer</span></h5>
<p>
    I am an information technology student passionate about web developing
     nd design. I have a lot of desire to learn more and
     more science, especially in technical fields.
</p>
<br><br>
 <h5>Soft Skills</h5>

      <p>
        - work under pressure<br>
        - quick learning<br>
        - leadership<br>
        - helpful and efficient
      </p>

      <br>
      <h5>language</h5>
      <p>Arabic<span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span></p>
      <p>English<span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span></p>
<h5>Education</h5>
<p>
    Al-qassim University<br>
    2019 - 2024
</p>

</div>
</div>
</section>


    @extends('layouts.mode')
    @extends('layouts.nav')
    @section('title')

    Courses & Cetificates
    @endsection

</body>
</html>
