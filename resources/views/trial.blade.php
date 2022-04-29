<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GathukuRestaurant</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        
        <link href="{{asset('/css/trial.css')}}" rel="stylesheet" type="text/css">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/fa0463f5e9.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="mwili">
        <div class="kisigino">
        <div class="kichwa">
       <header>
           <div class="logo">
               <a href=""><i class="fas fa-cocktail fa-2x"></i>Manjivaa</a>
           </div>
           <div class="options">
                <a href=""><i class="fa fa-cutlery "></i> Culinary</a>
                <a href=""><i class="fa-solid fa-comments"></i> Experiences</a>  
                <a href=""><i class="fa fa-heart"></i> Gathuku Cares</a>
                <a href=""><i class="fa fa-address-book"></i> Contact us</a>
           </div>
           <div class="account">
                <a href="{{route('trial')}}"><i class="fa fa-sign-in fa-lg"></i> Sign Up</a>
                <a href="{{route('trial')}}"><i class="fas fa-sign-in-alt fa-lg"></i> Login</a>
                
           </div>
       </header>
       </div>
        </div>
   
        <div class="container">  
            <div class="mySlides fade">
               
                <img src="{{URL::asset('/images/100.jpg')}}"> 
                    
            </div>

            <div class="mySlides fade">
                   
                <img src="{{URL::asset('/images/200.jpg')}}" >
                    
            </div>

            <div class="mySlides fade">
                
                <img src="{{URL::asset('/images/300.jpg')}}" >
                
                
            </div>  
        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>

    </div>
    <script>
           let slideIndex = 0;
            showSlides();

            function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 5000); // Change image every 5 seconds
            }
       </script>
</body>
</html>