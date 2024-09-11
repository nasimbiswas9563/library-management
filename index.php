<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Library Management System</title>
    <link rel="stylesheet" href="/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div>
    <div class="banner">
        <h1 class="upper">Your Journey to Endless Learning Begins Here [Book Now]</h1>
        <p class="down"> we believe that learning is a lifelong journey. That's why we provide easy access to thousands of books, journals, and digital resources—all available at your fingertips. Join our community of readers and scholars, and let your journey to endless learning begin today.</p>
    </div>

    </div>
    <div class="hello">
        <h2 class="heading">Hello person</h2>
    </div>
    
    <div class="main-div">
     <div class="sub-div text">
        <h3>Explore Our Collections</h3>
        <p>Whether you're a student, a researcher, or a curious reader, our extensive catalog has something for everyone. Dive into our diverse genres, including fiction, non-fiction, science, history, and more. Our easy-to-use search tools and categorized sections make finding your next great read effortless.</p>
        <p>Becoming a member of [Book Now] unlocks exclusive benefits. Borrow books, access digital resources, and participate in community events—all designed to enrich your learning experience. Our user-friendly registration process makes it simple to join and start enjoying the full range of our offerings.</p>
     </div>
     <div class="sub-div image">
        <img src="photo/womanlb.jpg" alt="Descriptive Text">
     </div>
   </div>
   <h2 class="heading" >New Book</h2>

   <div class="image-text-row">
        <div class="image-text-box">
            <img src="photo/story.jpg" alt="Image 1">
            <p>The Story School</p>
            <button class="button">Read</button>
        </div>
        <div class="image-text-box">
            <img src="photo/story2.jpg" alt="Image 2">
            <p>Story Thieves</p>
            <button class="button">Read</button>
        </div>
        <div class="image-text-box">
            <img src="photo/story3.jpg" alt="Image 3">
            <p>Story Thieves 2</p>
            <button class="button" >Read</button>
        </div>
        <div class="image-text-box">
            <img src="photo/story5.jpg" alt="Image 4">
            <p>The End of The Day</p>
            <button class="button">Read</button>
        </div>
    </div>
   <h2 class="heading">Why We Read Books</h2>
   <div class="toggole">
            <div class="toggole-div"><div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Knowledge and Learning:
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Books are a valuable source of information, offering insights into various topics, cultures, and ideas. They help us learn new skills, broaden our perspectives, and stay informed about the world.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Imagination and Creativity:
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Reading stimulates our imagination, allowing us to explore new worlds, characters, and scenarios. It nurtures creativity and helps us think beyond our everyday experiences.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Relaxation and Stress Relief:
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Books can be a great way to unwind and escape from daily stress. Reading helps reduce stress levels, improves mental well-being, and offers a sense of calm and relaxation.
      </div>
    </div>
  </div>
</div></div>
            <div class="toggole-div"><img src="photo/bookread.jpg" alt=""></div>
        </div>

    <h2 class="heading" >Up Coming Book</h2>

    
   <div class="image-text-row">
        <div class="image-text-box">
            <img src="photo/story.jpg" alt="Image 1">
            <p>The Story School</p>
            <button class="button">Read</button>
        </div>
        <div class="image-text-box">
            <img src="photo/story2.jpg" alt="Image 2">
            <p>Story Thieves</p>
            <button class="button">Read</button>
        </div>
        <div class="image-text-box">
            <img src="photo/story3.jpg" alt="Image 3">
            <p>Story Thieves 2</p>
            <button class="button">Read</button>
        </div>
        <div class="image-text-box">
            <img src="photo/story5.jpg" alt="Image 4">
            <p>The End of The Day</p>
            <button class="button">Read</button>
        </div>
    </div>
    <h2 class="heading">Contact</h2>
<div class="contact-bottom">
    <div class="content-bottom">
    <div class="form-div text">
    <form class="feedback-form">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required>

    <label for="feedback">Feedback:</label>
    <textarea id="feedback" name="feedback" rows="4" required></textarea>

    <button type="submit">Submit</button>
    </form>

    </div>
    
    </div>
    <div class="content-bottom">
      <div class="sub-content">
        <div class="mini-content">
          <h3>about</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum, debitis.</p>
        </div>
        <div class="mini-content">
          <h3>office</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </div>
      <div class="sub-content">
        <div class="mini-content">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, reiciendis?</p>
        </div>
        <div class="mini-content">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7364.933840709981!2d88.45198141466354!3d22.63637346744219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89fbf7e3b4075%3A0xe9256183ddbc69fe!2sBablatala%2C%20Gopalpur%20I%2C%20Kolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1724309838108!5m2!1sen!2sin" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>

</div>   
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
