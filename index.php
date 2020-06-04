<?php  
$message = '';  
$error = '';  
if(isset($_POST["submit"]))  
{  
     if(empty($_POST["name"]))  
     {  
          $error = "<label class='text-danger'>Enter Name</label>";  
     }  
     else  
     {  
          if(file_exists('AJ.json'))  
          {  
               $current_data = file_get_contents('AJ.json');  
               $array_data = json_decode($current_data, true);  
               $extra = array(  
                    'name'               =>     $_POST['name'],  

               );  
               $array_data[] = $extra;  
               $final_data = json_encode($array_data);  
               if(file_put_contents('AJ.json', $final_data))  
               {  
 
               }  
          }  
          else  
          {  
               $error = 'JSON File not exits';  
          }  
     }  
}  
?>  
<!DOCTYPE html>  
<html>  
     <head>  
<title>Bhagyesh JADHAV Mems ADMIN</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.4.6/tailwind.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
<style type="text/css">
body{
font-family: 'Paytone One', sans-serif;
margin:0;
padding:0;
box-sizing: bordered-box;
height:100%;
width:100%;
}
img{
height:3rem;
width:3rem;
}
input:hover{
border:none;
outline:none;
}
.in{
height:10rem !important;
width:90%;
}
.sec{
height:10%;
}
button:hover{
outline:none;
border:none;
}
.bt{
width:5rem;
height:3rem;
}
@keyframes pulse {
    0% {
     transform: scale(1, 1);
    }

    50% {
     transform: scale(1.1, 1.1);
    }

    100% {
    transform: scale(1, 1);
    }
}

.h{
    animation: pulse 1s linear infinite;
}
</style>
     </head>  
     <body>  
<body class="bg-gray-200 w3-small">


<header class="text-gray-500 bg-gray-200 body-font">
<br>
  <div class="container mx-auto flex flex-wrap p-2 flex-col md:flex-row items-center">
    <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
     <img src="https://image.flaticon.com/icons/png/512/2877/2877109.png" class="w3-small">
      <span class="ml-3 text-gray-800 text-xl">Bhagyesh Jadhav</span>
    </a>
     </div>
</header>


<section class="text-gray-500 sec  bg-gray-200 ">


  <div id="ap" class="container ap w3-animate-zoom  append w px-2 py-2 mx-auto">
   <form method="post">  
        <br />  

        <input autocomplete="off" placeholder="Add Your Next Quote" type="text" name="name" class="form-control w3-round w3-padding in w3-margin w3-large text-blue-400" /><br />  
                 <br>
        <center><input type="submit" name="submit" value="submit" class=" w3-round-xlarge w3-button bt w3-red" /><br />          </center> 
        <br><br>
       <center><label class="w3-hide text-green-400 w3-medium lb">Quote Added Successfully <u> Visit</u></label>      </center>
       
   </form>  
   
  <center><a class="w3-text-red  w3-medium " href="BHAGYESH"><u>Visit</u></a></center>
   </div>
</section>

<br>
<center>

</div>
</center>
<footer class="text-gray-700 bg-gray-800 body-font">
<div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
<a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-400">
<i class="fa fa-quote-left"></i> 
<span class="ml-3 text-xl">Quotes By Bhagyesh.J&nbsp;&nbsp;</b></span>
  <i class="fa fa-quote-right"></i> 
</a>
<p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4"> <i class="fa fa-copyright"></i>&nbsp;&nbsp;2020 Sagar.J 
<a href="mailto:sagarjadhavlive@gmail.com" class="text-green-400 ml-1" rel="noopener noreferrer" target="_blank">sagarjadhavlive@gmail.com</a>
</p>
<span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
<a class="text-gray-600">
<i class="fab fa-twitter"></i></b>
</a>
<a class="ml-3 text-gray-600">
  <i class="  fab fa-facebook"></i> </b>
</a>
<a class="ml-3 text-gray-600">
   <i class="  fab fa-instagram"></i> </b>
</a>
<a class="ml-3 text-gray-600">
<i class=" fab fa-youtube"></i> 
</a>
</span>
<br>

<label class="text-gray-100">Code with <i class=" w3-large h w3-text-red fa fa-heartbeat"></i> By <a class="w3-text-blue" href="https://www.linkedin.com/in/sagar-jadhav-25181a1a0" target="_blank"><b style="font-size:0.9rem">Sagar.J</b></a></label>
</div></b>
</footer>
<script type="text/javascript">
$('button').click(function(){
$(".lb").toggleClass("w3-hide");
});
</script>
     </body>  
</html>  
