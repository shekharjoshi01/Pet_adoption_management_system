
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Furry Friends</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav>
      <div class="logo"><img src="image/logo.png" alt="" /></div>
      <!-- <label for="menu-toggle" class="menu-icon">&#9776;</label> -->
      <ul class="menu">
        <li><a href="#">Who We Are</a></li>
        <li><a href="#">What We Do</a></li>
        <li><a href="#">How To Help</a></li>
        <li><a href="#">Contact US</a></li>
        <li><a href="login/logindetails/login.php">Login</a></li>
      </ul>
    </nav>

    <div class="content">
      <div class="one">
        <p>
          Find your perfect furry companion at our <br />
          pet adoption website. Browse through adorable animals waiting to find
          their forever homes.
        </p>
        <br />
        <button>Learn More</button>
      </div>
      <div class="two"><img src="image/1.jpeg" alt="" /></div>
    </div>
    <div class="con">
      <p>Find your forever friend. Adopt, don't shop....</p>
    </div>
    <main>
      <div class="main">
        <div class="card">
          <img src="image/dogone.jpg" />
          <div class="card-content">
            <h2>
              Khaire
            </h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
              exercitationem iste, voluptatum, quia explicabo laboriosam rem
              adipisci voluptates cumque, veritatis atque nostrum corrupti ipsa
              asperiores harum? Dicta odio aut hic.
            </p>
          </div>
        </div>
        <div class="card">
          <img src="image/dogtwo.jpg" />
          <div class="card-content">
            <h2>
              Ramu
            </h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
              exercitationem iste, voluptatum, quia explicabo laboriosam rem
              adipisci voluptates cumque, veritatis atque nostrum corrupti ipsa
              asperiores harum? Dicta odio aut hic.
            </p>
          </div>
        </div>
        <div class="card">
          <img src="image/dogthree.jpg" />
          <div class="card-content">
            <h2>
              Kalu
            </h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
              exercitationem iste, voluptatum, quia explicabo laboriosam rem
              adipisci voluptates cumque, veritatis atque nostrum corrupti ipsa
              asperiores harum? Dicta odio aut hic.
            </p>
          </div>
        </div>
      </div>
    </main>

    <div class="gallery"><p>Image Gallery</p></div>
    <div class="image_gallery">
      <img
        src="https://images.pexels.com/photos/15246864/pexels-photo-15246864/free-photo-of-white-dog-sleeping-on-the-sand-next-to-the-brown-dog.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        alt=""
      />
      <img
        src="https://images.pexels.com/photos/16704332/pexels-photo-16704332/free-photo-of-stray-dogs-around-elderly-man-in-town.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        alt=""
      />
      <img
        src="https://images.pexels.com/photos/16823671/pexels-photo-16823671/free-photo-of-sad-stray-dog.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        alt=""
      />
    </div>
    <div class="image_gallery">
      <img
        src="https://images.pexels.com/photos/6151185/pexels-photo-6151185.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        alt=""
      />
      <img
        src="https://images.pexels.com/photos/5812866/pexels-photo-5812866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        alt=""
      />
      <img
        src="https://images.pexels.com/photos/18953828/pexels-photo-18953828/free-photo-of-dog-sleeping-in-city.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        alt=""
      />
    </div>
    <div class="image_gallery">
      <img
        src="https://images.pexels.com/photos/12352426/pexels-photo-12352426.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        alt=""
      />
      <img
        src="https://images.pexels.com/photos/11636636/pexels-photo-11636636.jpeg?auto=compress&cs=tinysrgb&w=600"
        alt=""
      />
      <img
        src="https://images.pexels.com/photos/10722284/pexels-photo-10722284.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        alt=""
      />
    </div>
    <div class="container">
      <div class="text">
        Contact us Form
      </div>
      <form action="#" method="POST">
        <div class="form-row">
          <div class="input-data">
            <input type="text" name="fname" required />
            <div class="underline"></div>
            <label for="">First Name</label>
          </div>
          <div class="input-data">
            <input type="text" name="lname" required />
            <div class="underline"></div>
            <label for="">Last Name</label>
          </div>
        </div>
        <div class="form-row">
          <div class="input-data">
            <input type="text" name="mail" required />
            <div class="underline"></div>
            <label for="">Email Address</label>
          </div>
          <div class="input-data">
            <input type="text" name="pname" required />
            <div class="underline"></div>
            <label for="">Pet Name</label>
          </div>
        </div>
        <div class="form-row">
          <div class="input-data textarea">
            <textarea rows="8" cols="80" name="message" required></textarea>
            <br />
            <div class="underline"></div>
            <label for="">Write your message</label>
            <br />
            <div class="form-row submit-btn">
              <div class="input-data">
                <div class="inner"></div>
                <input type="submit" value="submit" name="contact" />
              </div>
            </div>
          </div>
        </div>
      </form>
      <?php include("contactdetails/connection.php"); ?>
    </div>
    <!-- Footer  -->
    <div class="footer">
      <div class="footer-row">
        <div class="footer-col">
          <h4>Info</h4>
          <ul class="links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Pets</a></li>
            <li><a href="#">Pet Gallery</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Explore</h4>
          <ul class="links">
            <li><a href="#">Who We Are</a></li>
            <li><a href="#">What We DO</a></li>
            <li><a href="#">How To Help US</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Login</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <div class="lottiefour">
            <script
              src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
              type="module"
            ></script>

            <dotlottie-player
              src="https://lottie.host/f290c6b4-ff62-4e7a-a3bb-51db9f8add40/lfFVRODcLP.json"
              background="transparent"
              speed="0.70"
              style="width: 200px; height: 200px;"
              loop
              autoplay
            ></dotlottie-player>
          </div>

          <div class="icons">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-brands fa-github"></i>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<?php
if($_POST['contact'])
{
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['mail'];
  $petname = $_POST['pname'];
  $message = $_POST['message'];

  $query = "INSERT INTO contact_us (FirstName, LastName, Email, PetName, Message) VALUES ('$fname','$lname','$email','$petname','$message')";
  $data = mysqli_query($conn,$query);

  if($data)
  {
    echo "Data inserted successfully";
  }else{
    echo "Data is not inserted!!!!!";
  }
}
?>
