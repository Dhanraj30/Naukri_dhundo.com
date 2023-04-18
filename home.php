<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Resume Builder Website</title>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.feedback-section {
  background-color: #f7f7f7;
  padding: 20px;
}

.feedback-section h2 {
  font-size: 24px;
  margin-bottom: 10px;
}

.feedback-section form {
  display: flex;
  flex-direction: column;
  max-width: 500px;
  margin-bottom: 20px;
}

.feedback-section label {
  font-weight: bold;
  margin-bottom: 5px;
}

.feedback-section input,
.feedback-section textarea {
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
}

.feedback-section button {
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
}

.feedback-section button:hover {
  background-color: #2E8B57;
}

.feedback-section #feedback-messages {
  max-width: 500px;
}

.feedback-section .rating-input {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.feedback-section .rating-input label {
  margin: 0 5px;
  font-size: 24px;
  color: #ccc;
  cursor: pointer;
}

.feedback-section .rating-input label:hover,
.feedback-section .rating-input label:hover ~ label,
.feedback-section .rating-input input:checked ~ label {
  color: #ffc107;
}
.feedback-section {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}
#feedback-messages {
  margin-top: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.feedback-message {
  background-color: #f5f5f5;
  border-radius: 5px;
  padding: 10px;
  margin: 10px;
  max-width: 500px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
}

.feedback-message h3 {
  margin-top: 0;
}

.feedback-message p {
  margin-bottom: 0;
}



</style>
</head>
<body>
    <section class="header">
        <img src="./logo.png" alt="logo">
        <nav>
            <div class="nav-links" id="navLinks">
               <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="aboutus.php">About us</a></li>
                    <li><a href="login.php">Templates</a></li>
                    <li><hr class="horiLine"></li>
                    <li><a href="register.php">Login</a></li>
                    
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()" ></i>
        </nav>
<div class="text-box">
    <h1>Ab Naukri dhundo <br>Minto mai!!</h1>
    <p>Use professional field-tested resume templates that follow the exact 'resume rules' employers look for<br>Easy to use and done within minutes-try now for free!</p>
    <a href="" class="hero-btn">Visit Us To know More</a>
</div>
    </section>
    <section class="Process">
        <h1>3 Step Process<br>For<br>Finding The BEST Job</h1>
        <div class="row">
            <div class="process-col">
                <h3>Details</h3>
                <p>Register and login then Fill your details with various fill-up option according to your choice.You can also get some suggestion for discription and other things which can help you to create beautiful resume. </p>
            </div>
            <div class="process-col">
                <h3>Search Job</h3>
                <p>Enetr your skills and Find the perfect job for you with our comprehensive job search tool to get your career started.</p>
            </div>
            <div class="process-col">
                <h3>Generate Resume</h3>
                <p>Generate resume using resume generator and Download your resume and send it straight to the company or hiring manager.</p>
            </div>
        </div>
    </section>
    <section class="job">
        <div class="job-box">
            <h1>Find Your Dream Jobs<br>With<br> NaukriDhundo</h1>
            <a href="" class="job-btn">Find Now</a>
        </div>
        <!--<img align="left" alt="" src="./images.png" >-->
        
    </section>
    <section class="feedback-section" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
        <h2>User Feedback</h2>
        <form id="feedback-form">
          <label for="name-input">Name:</label>
          <input type="text" id="name-input" required>
      
          <label for="feedback-input">Feedback:</label>
          <textarea id="feedback-input" required></textarea>
      
          <label for="rating-input">Rating:</label>
          <div class="rating-input">
            <input type="radio" name="rating" value="5" id="rating-5" required>
            <label for="rating-5"><span class="star">&#9733;</span></label>
            <input type="radio" name="rating" value="4" id="rating-4">
            <label for="rating-4"><span class="star">&#9733;</span></label>
            <input type="radio" name="rating" value="3" id="rating-3">
            <label for="rating-3"><span class="star">&#9733;</span></label>
            <input type="radio" name="rating" value="2" id="rating-2">
            <label for="rating-2"><span class="star">&#9733;</span></label>
            <input type="radio" name="rating" value="1" id="rating-1">
            <label for="rating-1"><span class="star">&#9733;</span></label>
          </div>
      
          <button type="submit">Submit</button>
        </form>
      
        <div id="feedback-messages"></div>
      </section>
      

<section class="footer">
    <h2>About Us</h2>
    <p>This website has been made as a part of web technology project by the students of RGIPT</p>
    <div class="icons">
<i class="fa fa-facebook"></i>
<i class="fa fa-twitter"></i>
<i class="fa fa-instagram"></i>
<i class="fa fa-linkedin"></i>
    </div>
<p>Made by PUNEET AND AVHAD </p>
</section>
    
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
</script>
<script>
    const feedbackForm = document.getElementById('feedback-form');
const feedbackMessages = document.getElementById('feedback-messages');

feedbackForm.addEventListener('submit', (e) => {
  e.preventDefault();

  const nameInput = document.getElementById('name-input');
  const feedbackInput = document.getElementById('feedback-input');
  const ratingInputs = document.getElementsByName('rating');

  // find the checked rating input
  let ratingValue = '';
  for (let i = 0; i < ratingInputs.length; i++) {
    if (ratingInputs[i].checked) {
      ratingValue = ratingInputs[i].value;
      break;
    }
  }

  // create a new feedback message
  const feedbackMessage = document.createElement('div');
  feedbackMessage.classList.add('feedback-message');

  // create a new feedback message header
  const feedbackMessageHeader = document.createElement('div');
  feedbackMessageHeader.classList.add('feedback-message-header');

  // create a new feedback message body
  const feedbackMessageBody = document.createElement('div');
  feedbackMessageBody.classList.add('feedback-message-body');

  // set the feedback message header content
  const feedbackMessageName = document.createElement('h3');
  feedbackMessageName.textContent = nameInput.value;

  const feedbackMessageDate = document.createElement('span');
  feedbackMessageDate.classList.add('feedback-message-date');
  feedbackMessageDate.textContent = new Date().toLocaleString();

  const feedbackMessageRating = document.createElement('span');
  feedbackMessageRating.classList.add('feedback-message-rating');
  feedbackMessageRating.innerHTML = '&#9733;'.repeat(ratingValue);

  feedbackMessageHeader.appendChild(feedbackMessageName);
  feedbackMessageHeader.appendChild(feedbackMessageDate);
  feedbackMessageHeader.appendChild(feedbackMessageRating);

  // set the feedback message body content
  const feedbackMessageText = document.createElement('p');
  feedbackMessageText.textContent = feedbackInput.value;

  feedbackMessageBody.appendChild(feedbackMessageText);

  feedbackMessage.appendChild(feedbackMessageHeader);
  feedbackMessage.appendChild(feedbackMessageBody);

  feedbackMessages.appendChild(feedbackMessage);

  // clear the form inputs
  nameInput.value = '';
  feedbackInput.value = '';
  for (let i = 0; i < ratingInputs.length; i++) {
    ratingInputs[i].checked = false;
  }
});

</script>
</body>
</html>