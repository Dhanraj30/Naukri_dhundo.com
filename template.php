<!DOCTYPE html>
<html>
  <head>
    <title>CV Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    -->
    <link rel="stylesheet" href="form.css">
    <style>
      /* Global Styles */
      body {
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        color: #333;
        margin: 0;
        padding: 0;
      }
      h1, h2, h3, h4, h5, h6 {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 600;
        line-height: 1.2;
        margin: 0 0 15px 0;
        color: #333;
      }
      ul {
      
        padding: 0;
        margin: 0;
      }
      li {
        margin-bottom: 10px;
      }
      a {
        color: #333;
        text-decoration: none;
        border-bottom: 1px solid #ccc;
      }
      a:hover {
        color: #333;
        border-bottom: 1px solid #333;
      }
      .text-center {
        text-align: center;
      }
      .row{
        margin-bottom: 10px;
      }
      .container {
        margin-top: 2px;
        max-width: 1140px;
        margin: 0 auto;
        padding: 0 15px;
      }
      .container h3{
        margin-left: 20px;
      }
      .link ul li{
        
        display:inline-flex ;
      }
      
      
      /* Header Styles */
      #cv-template {
        background-color: #f9f9f9;
        padding: 50px 0;
      }
      #cv-template h2 {
        font-size: 36px;
        margin-bottom: 10px;
      }
      #cv-template p {
        font-size: 18px;
        margin: 0 0 10px 0;
      }
      #cv-template hr {
        border: none;
        border-top: 1px solid #171616;
        margin: 20px 0;
      }
      #cv-template ul li {
        margin-left: 40px;
        font-size: 18px;
        margin-bottom: 10px;
        line-height: 1.4;
        
      }
      /* Work Experience Styles */
      .card-header h3 {
        font-size: 24px;
        margin-top: 10px;
        margin-bottom: 20px;
      }
      /* Print Button Styles */
      .btn {
        display: inline-block;
        padding: 10px 20px;
        border: none;
        background-color: #333;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }
      .btn:hover {
        background-color: #555;
      }
      /* Media Queries */
      @media screen and (max-width: 768px) {
        #cv-template {
          padding: 25px 0;
        }
        #cv-template h2 {
          font-size: 28px;
        }
        #cv-template p {
          font-size: 16px;
        }
        #cv-template ul li {
          font-size: 16px;
        }
        .card-header h3 {
          font-size: 22px;
        }
        .btn {
          font-size: 14px;
        }
      }
    </style>
 
           

  </head>
  <body>

    <div class="container" id="cv-form">
        <h1 class="text-center my-2">Resume Generator</h1>
        <div class="row">
            <div class="col-md-6">
                <!--first col-->
                <h3>Personal Information</h3>

                <div class="form-group">
                    <label for="nameField">Your Name</label>
                    <input
                        type="text"
                        id="nameField"
                        placeholder="Enter here"
                        class="form-control"
                        />
                </div>
                <div class="form-group mt-2">
                    <label for="contactField">Your Contact</label>
                    <input
                        type="text"
                        id="contactField"
                        placeholder="Enter here"
                        class="form-control"
                        />
                </div>
                <div class="form-group mt-2">
                    <label for="addressField">Your Address </label>
                    <textarea
                        
                        id="addressField"
                        placeholder="Enter here"
                        class="form-control"
                        rows="5"
                    ></textarea>
                </div>

                <p class="text-secondary my-3">Important Links</p>

                <div class="form-group mt-2">
                    <label for="emailField">Email</label>
                    <input
                        type="text"
                        id="emailField"
                        placeholder="Enter here"
                        class="form-control"
                        />
                </div>
                <div class="form-group mt-2">
                    <label for="gitField">Git hub</label>
                    <input
                        type="text"
                        id="gitField"
                        placeholder="Enter here"
                        class="form-control"
                        />
                </div>
                <div class="form-group mt-2">
                    <label for="linkedField">LinkedIn</label>
                    <input
                        type="text"
                        id="linkedField"
                        placeholder="Enter here"
                        class="form-control"
                        />
                </div>

            </div>
            <div class="col-md-6" >
                <!--2nd col-->
                <h3>Professional Information</h3>

                <div class="form-group mt-2" id="we">
                    <label for="">Work Experience </label>
                    <textarea
                        
                        placeholder="Enter here"
                        class="form-control weField"
                        rows="2"
                        
                    ></textarea>

                    <div class="container text-center mt-2 " id="weAddButton">
                        <button onclick="addNewWEField()" class="btn-primary btn-sm">Add</button>
                    </div>
                </div>
                <div class="form-group mt-2" id="eq">
                    <label for="">Education </label>
                    <textarea
                       
                        placeholder="Enter here"
                        class="form-control eqField"
                        rows="2"
                       
                    ></textarea>

                    <div class="container text-center mt-2" id="eqAddButton">
                        <button onclick="addNewEQField()" class="btn-primary btn-sm">Add</button>
                    </div>
                </div>
                <div class="form-group mt-2" id="pj">
                    <label for="">Projects </label>
                    <textarea
                       
                        placeholder="Enter here"
                        class="form-control pjField"
                        rows="2"
                       
                    ></textarea>

                    <div class="container text-center mt-2" id="pjAddButton">
                        <button onclick="addNewPJField()" class="btn-primary btn-sm">Add</button>
                    </div>
                </div>
                <div class="form-group mt-2" id="sk">
                    <label for="">Skills </label>
                    <textarea
                       
                        placeholder="Enter here"
                        class="form-control skField"
                        rows="2"
                       
                    ></textarea>

                    <div class="container text-center mt-2" id="skAddButton">
                        <button onclick="addNewSKField()" class="btn-primary btn-sm">Add</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="container text-center mt-3">
            <button onclick="generate()" class="btn btn-primary btn-lg">Generate</button>
        </div>
      
    </div>

    
    <!--template-->
    <div class="container" id="cv-template">
      <div class="row">
        <div class="col-md-3 text-center py-3 background">
          <!--1st col-->
          <div class="container">
                <h2 id="nameT1">Dhanraj Avhad</h2>
                <p id="contactT">+91131344131 </p>
                <p id="addressT">
                123455 , xyz , India.
                </p>
                <hr />
                <div class="link">
                    <ul><li ><a id="emailT" href="#1">dhanraj@gmail.com</a></li>
                    <li><a id="gitT" href="#1">dhanraj_30.git hub</a></li>
                    <li><a id="linkedT" href="#1">Dhanraj Avhad .LinkedIn</a></li>
                </ul></div>
              
            
            </div>
        </div>
        <div class="col-md-8 py-5">
          <!--2nd col-->
          <div class="card mt-4">
            <div class="card-header ">
              <h3>Work Experience</h3>
            </div>
            <div class="card-body">
              <ul id="weT">
                <li>wuewje ijefiwjefjvvwldnvsdvsdvsn silvvsnl knv</li>
                <li>ddvnslnvs sfvsvsnl ljnlnnlinlnils</li>
                <li>kkevjwevwewihkl wlwihihwvn eijvv eihfleihv eiflec</li>
                <li>ldvsldnvs lknvnsjnn lknlvnsjnln lkfnvvlkn</li>
            </ul>
         <hr>
        </div>
    

    
        <!-- Education-->
        <div class="card mt-4">
            <div class="card-header ">
            <h3>Education</h3>

             </div>
            <div class="card-body">
                <ul id="eqT">
                    <li>wuewje ijefiwjefjvvwldnvsdvsdvsn silvvsnl knv</li>
                    <li>ddvnslnvs sfvsvsnl ljnlnnlinlnils</li>
                    <li>kkevjwevwewihkl wlwihihwvn eijvv eihfleihv eiflec</li>
                    <li>ldvsldnvs lknvnsjnn lknlvnsjnln lkfnvvlkn</li>
                </ul>
            </div><hr>
        </div>
     <!-- Projects-->
        <div class="card mt-4">
            <div class="card-header ">
            <h3>Projects</h3>

            </div>
            <div class="card-body">
                <ul id="pjT">
                    <li>wuewje ijefiwjefjvvwldnvsdvsdvsn silvvsnl knv</li>
                    <li>ddvnslnvs sfvsvsnl ljnlnnlinlnils</li>
                    <li>kkevjwevwewihkl wlwihihwvn eijvv eihfleihv eiflec</li>
                    <li>ldvsldnvs lknvnsjnn lknlvnsjnln lkfnvvlkn</li>
                </ul>
            </div><hr>
        </div>
     <!-- Skills-->
        <div class="card mt-4">
            <div class="card-header ">
                    <h3>Skills</h3>

            </div>
            <div class="card-body">
                <ul id="skT">
                    <li>wuewje ijefiwjefjvvwldnvsdvsdvsn silvvsnl knv</li>
                    <li>ddvnslnvs sfvsvsnl ljnlnnlinlnils</li>
                    <li>kkevjwevwewihkl wlwihihwvn eijvv eihfleihv eiflec</li>
                    <li>ldvsldnvs lknvnsjnn lknlvnsjnln lkfnvvlkn</li>
                    </ul>
            </div>
        </div>  
        
   </div>
   
   <div class="container mt-3 text-center">
       <button onclick="printCV()" class="btn ">
          Print Resume
       </button>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   <script src="register.js" defer></script>

</body>
</html>
