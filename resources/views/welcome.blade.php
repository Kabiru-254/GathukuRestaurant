<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GathukuRestaurant</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        
        <link href="{{asset('/css/welcome.css')}}" rel="stylesheet" type="text/css">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/fa0463f5e9.js" crossorigin="anonymous"></script>
    </head>
   <body>
       <div class="kichwa">
       <header>
           <div class="logo">
               <a href=""><i class="fas fa-cocktail fa-2x"></i>Manjivaa</a>
           </div>
           <div class="options">
                <a href="#menus"><i class="fa fa-cutlery "></i> Culinary</a>
                <a href="#testimonials"><i class="fa-solid fa-comments"></i> Experiences</a>  
                <a href="#enquire"><i class="fa fa-heart"></i> Enquire</a>
                <a href="#contact"><i class="fa fa-address-book"></i> Contact us</a>
           </div>
           <div class="account">
                <a href="{{route('register')}}"><i class="fa fa-sign-in fa-lg"></i> Sign Up</a>
                <a href="{{route('login')}}"><i class="fas fa-sign-in-alt fa-lg"></i> Login</a>
                
           </div>
       </header>
       </div>
       
       <div class="mwili">
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

            <div class="Makadi">
                <div class="kadi">
                    <div class="card transition">
                        <h2 class="transition">Good food and great vibes.</h2>
                        <p>At Gathuku Restaurant we pride ourselves on providing a fresh experience for catering in Nairobi, Kenya.
                        Our menus are vibrant, contemporary and creative. </p>
                        <div class="cta-container transition"><a href="#" class="cta">Get Quote</a></div>
                        <div class="card_circle transition"></div>
                    </div>
                </div>
            </div>


    

           <br>

            <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            </div>

       </div>

       <div style="display: flex; align-items: center; justify-content: center;">
            <div class="about">
                <div class="details">
                    <h3>Gathuku Restaurant</h3>
                    <h4>Best Outside Catering Service in Nairobi | Luxury Catering</h4>
                    <br>
                    <p>At Gathuku restaurant we pride ourselves on providing a fresh experience for catering in Nairobi, Kenya.
                        Our menus are vibrant, contemporary and creative. Our classically trained chefs are continuously using their
                    culinary imagination and inventing new delicious dishes. Our exceptional team deliver the best there is in Nairobi.</p>
                    <br>
                    <p>In addition to unique event catering and mobile bar services we offer daily ‘lunch at your desk’ sandwiches & hot pots; healthy, 
                        distinctive and affordable range of ‘ready meals’ to stock your freezer;
                        a drop off ‘At Home’ service so you can have quality food while you entertain your guests (and they’re none the wiser!)</p>
                    <br>
                    <p>We are dedicated to using the best ingredients, developing personalised menus and offering outstanding International level of service.</p>
                    <br>
                    <p><a href="">Contact Us</a>  to be sent our full menu and to discuss an upcoming event you may be planning.</p>
                </div>
            </div>
       </div>
        
       
    <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 50px;">
    <section class="speciality" id="menus" >

    <h1 class="heading"> our <span>Menus</span> </h1>

    <div class="box-container">

        <div class="box">
            <img class="image" src="{{URL::asset('/images/Sweet and sour chicken.jpeg')}}" alt="">
            <div class="content">
                <img src="{{URL::asset('/images/s-1.png')}}" alt="">
                <h3>Beef Stew/ Grilled Chicken</h3>
                <p>Accompanied by pilau/ white vegetable rice/ Mokimo /Chapo / Ugali</p>
            </div>
        </div>
        <div class="box">
        <img class="image" src="{{URL::asset('/images/tumeric rice.jpeg')}}" alt="">
            <div class="content">
                <img src="{{URL::asset('/images/s-2.png')}}" alt="">
                <h3>Mbuzi choma/ Fried Njahi</h3>
                <p>Accompanied by pilau/ white vegetable rice/ Mokimo /Chapo / Ugali</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="{{URL::asset('/images/ugali.jpeg')}}" alt="">
            <div class="content">
                <img src="{{URL::asset('/images/s-3.png')}}" alt="">
                <h3>Ugali</h3>
                <p>Accompanied by diced beef, or chicken with a side of greens</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="{{URL::asset('/images/Lamb Rib.jpeg')}}" alt="">
            <div class="content">
                <img src="{{URL::asset('/images/s-4.png')}}" alt="">
                <h3>Lamb rib</h3>
                <p>Ugali, Chapati, Rice, Pilau, Optional side dressing of Kachumbari</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="{{URL::asset('/images/pilau_rice.jpeg')}}" alt="">
            <div class="content">
                <img src="{{URL::asset('/images/s-5.png')}}" alt="">
                <h3>Pilau Rice</h3>
                <p>Accompanied by Kachumbari and Soft Drinks</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="{{URL::asset('/images/Sweet and sour chicken.jpeg')}}" alt="">
            <div class="content">
                <img src="{{URL::asset('/images/s-6.png')}}" alt="">
                <h3>Sweet and Sour Chicken</h3>
                <p>Accompanied by pilau/ white vegetable rice/ Mokimo /Chapo / Ugali</p>
            </div>
        </div>

    </div>

    </section>
    </div>

    <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 50px;">
    <div class="testim" id="testimonials">
  <div id="content">
        <div class="testimonial">
            <blockquote>
            Tried the ready to eat taco on a whim today while grocery shopping. First bite in I knew I had to go back and get a few more for the weekend. Outstanding!!! (Of course that was the last one in the case)
            </blockquote>
            <div></div>
            <p>Forest Wilkes &mdash; Nairobi, UK</p>
        </div>
    </div>

    <div id="content">
        <div class="testimonial">
            <blockquote>
            I wanted to write and personally thank you for starting this company! Your snacks have helped me lose 80lbs and I am still going. I went on a low carb diet in 2011 and I really believe that your product helped me stick to it. I was dying trying to stay away from crunchy snack foods, as many times, that is what I end up eating for lunch because I spend a lot of time at my desk. I cannot tell you how excited I was to find your flax crackers to put my smoked salmon on!!! Your crackers and kale chips took care of my cravings without costing me my diet. I was also really glad to see that somewhere local making these products. I live close to Bridgeport, PA and was thrilled to know my food was made by a local “neighbor”. Thank you so much for creating your products, selling them at a reasonable cost, and making my dream of getting to a healthy weight so much easier!
            </blockquote>
            <div></div>
            <p>Miss Fatty Fatty &mdash; Kinoo, UK</p>
        </div>
    </div>
    <div id="content">
        <div class="testimonial">
            <blockquote>
            I just wanted to say that I have fallen IN LOVE with your foods. I have sacrificed good wholesome food to “treat” myself and fulfill my hunger in the past, but i have found such satisfaction with awesome foods products, that i no longer need to eat the junk. I was just having my carrot sticks paired with my two faves- sprouted hummus and better than turkey salad, and had to tell you how much i enjoy this stuff. It really is so good! i have never been so satisfied by raw roods. my husband agrees! as a busy mom who not always has time to dedicate to preparing healthy food for myself, I appreciate you! keep making great products.
            </blockquote>
            <div></div>
            <p>MaryBeth &mdash; Westlands, Nairobi</p>
        </div>
    </div>
  </div>  
    </div>
  
    
        
   <section class="enquiry" id="enquire">
            <div class="topic">
               <h3>Gathuku Enquiry Form</h3>
               
               <hr>
               <p>Tell us how we can help</p>
               <br>
           </div>
       <form action="">
           
           <div class="row">
               <div class="col">
                   <input type="text" name="" id="" placeholder="First Name">
                   <input type="text" name="" id="" placeholder="Second Name">
                   <input type="email" name="" id="" placeholder="Email">
                   <input type="tel" name="" id="" placeholder="Phone" >
                   
               </div>
               <div class="col">
                    <input type="text" name="" id="" placeholder="Style of Service (Full Board, Half Board etc)">
                   <input type="number" name="" id="" placeholder="Number of guests">
                   <input type="text" name="" id="" placeholder="Type of Event (Wedding, private party, home bbq etc)">
                   <input type="text" name="" id="" placeholder="Venue">
                   
               </div>
               <div class="col">
                   <div class="date">
                       <small>Date and time of event</small> 
                        <input type="datetime-local" name="" id="date-time" placeholder="Date & Time">
                   </div>
                   
                   <div class="range">
                       <small>Whats your budget?</small>
                      
                        <input type="range" name="" id="range" min="5000" max="100000" class="slider">
                        <small>Ksh: <span id="demo"></span></small>
                   </div>
                   
               </div>
           </div>
         
           <textarea name="" id="" cols="10" rows="10" placeholder="Special Notes"></textarea>

           <a href="" type="submit">Submit</a>
       </form>
   </section>

   <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 50px; width: 100%;">
   <div class="contact" id="contact">
       <div style="display: flex; align-items: center; justify-content: center; width: 100%; flex-direction: row;">
       <h3 style="flex-basis: 50%; text-align: center;">Call us at  <span>0724802599</span></h3>
       <h3 style="flex-basis: 50%; ">Email  <span>gathukurestaurant@gmail.com</span></h3>
       </div>
       
       <div class="socials">
        <a href="#" class="btn"><i class="fa fa-facebook-f"></i> facebook</a>
        <a href="#" class="btn"><i class="fa fa-twitter" ></i> twitter</a>
        <a href="#" class="btn"><i class="fa fa-instagram" ></i> instagram</a>
       </div>

       <div class="copyright">
           <p>Copyright 2022 | Gathuku Restaurant | Designed and developed by <span>kabiruworld</span></p>
       </div>
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

            var slider = document.getElementById("range");
            var output = document.getElementById("demo");
            output.innerHTML = slider.value; // Display the default slider value

            // Update the current slider value (each time you drag the slider handle)
            slider.oninput = function() {
            output.innerHTML = this.value;
            }


            
       </script>
   </body>
</html>
