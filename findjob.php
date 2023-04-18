<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Matching Companies</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
  background: linear-gradient(to right, #d4ecf6, #eafdcc);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
}

.sticker {
  position: absolute;
  top: 0;
  left: 0;
  width: 100px;
  height: 100px;
}

.sticker-1 {
  top: 50px;
  left: 50px;
}

.sticker-2 {
  top: 200px;
  left: 200px;
}

.sticker-3 {
  top: 350px;
  left: 350px;
}

@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

  </style>
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
      <a class="navbar-brand" href="#"> Job Place</a>
    </nav>
    <div class="container mt-4">
      <div class="row">
        <div class="col-sm-8">
          <h1 class="mb-4">Find Companies</h1>
          <h3 class="mb-4">On the basis of Skills</h3>
          <form>
            <div class="form-group">
              <label for="skillsInput">Enter your skills:</label>
              <input type="text" id="skillsInput" class="form-control">
            </div>
            <button type="button" onclick="findMatchingCompanies()" class="btn btn-primary">Find Companies</button>
          </form>
          <div class="card mt-4">
            <div class="card-body">
              <h5 class="card-title">Matching Companies</h5>
              <ul id="matchingCompaniesList" class="list-group">
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-4 ">
            <h5>Example Skills</h5>
            <div class="form-box"
                
                <p>JavaScript, React, Node.js, MongoDB, Python, Django, SQL, AWS, Java, Spring, MySQL, Docker, Ruby, Rails, PostgreSQL, Heroku, C#, .NET, SQL Server, Azure ,etc.</p>
        
            </div>
            <div>
                <img src="./space.jpg">
            </div>
        </div>
      </div>
    </div>
    <script>
      // Add your JavaScript code here
      const companies = [  { name: 'Google', profile: 'Web Dev', skills: ['javascript', 'react', 'node.js', 'mongodb'] },
  { name: 'Accenture', profile: 'Web Dev', skills: ['python', 'django', 'sql', 'aws'] },
  { name: 'Amazon', profile: 'App Dev', skills: ['java', 'spring', 'mysql', 'docker'] },
  { name: 'Microsoft', profile: 'Web Dev', skills: ['ruby', 'rails', 'postgresql', 'heroku'] },
  { name: 'Algo8', profile: 'cloud', skills: ['c#', '.net', 'sql server', 'azure'] },
  { name: 'IBM', profile: 'AI', skills: ['python', 'tensorflow', 'keras', 'big data'] },
  { name: 'Facebook', profile: 'Social Media', skills: ['php', 'react', 'node.js', 'mysql'] },
  { name: 'Apple', profile: 'Mobile', skills: ['swift', 'objective-c', 'ios', 'xcode'] },
  { name: 'Intel', profile: 'Hardware', skills: ['c', 'c++', 'verilog', 'fpga'] },
  { name: 'Cisco', profile: 'Networking', skills: ['cisco ios', 'routing', 'switching', 'firewalls'] },
  { name: 'Oracle', profile: 'Database', skills: ['oracle sql', 'pl/sql', 'oracle dba', 'data warehousing'] },
  { name: 'Salesforce', profile: 'CRM', skills: ['apex', 'visualforce', 'salesforce admin', 'salesforce developer'] },
  { name: 'Uber', profile: 'Transportation', skills: ['java', 'kotlin', 'android', 'google maps'] },
  { name: 'Airbnb', profile: 'Hospitality', skills: ['ruby', 'rails', 'postgresql', 'aws'] },
  { name: 'Netflix', profile: 'Entertainment', skills: ['java', 'scala', 'kafka', 'hadoop'] },
  { name: 'Tesla', profile: 'Electric Vehicles', skills: ['python', 'c++', 'ros', 'catia'] },
  { name: 'Boeing', profile: 'Aerospace', skills: ['c++', 'matlab', 'simulink', 'solidworks'] },
  { name: 'SpaceX', profile: 'Space Exploration', skills: ['python', 'c++', 'ros', 'catia'] },
  { name: 'Ford', profile: 'Automotive', skills: ['c++', 'java', 'android', 'ios'] },
  { name: 'General Electric', profile: 'Energy', skills: ['python', 'r', 'matlab', 'hadoop'] }
];


      function findMatchingCompanies() {
        const userSkillsInput = document.getElementById('skillsInput').value;
        userSkillsInput.toLowerCase();
        const userSkillsArray = userSkillsInput.split(',').map(skill => skill.trim());
        const matchingCompanies = companies.filter(company => company.skills.some(skill => userSkillsArray.includes(skill)));
        const matchingCompaniesList = document.getElementById('matchingCompaniesList');
        matchingCompaniesList.innerHTML = '';
        if (matchingCompanies.length === 0) {
          const noCompaniesMessage = document.createElement('li');
          noCompaniesMessage.textContent = 'Sorry, we could not find a suitable job option for you.';
          noCompaniesMessage.classList.add('list-group-item', 'list-group-item-danger');
          matchingCompaniesList.appendChild(noCompaniesMessage);
        } else {
          const matchingCompaniesHeader = document.createElement('li');
          matchingCompaniesHeader.textContent = 'Based on your skills, the following companies may be a good match for you:';
          matchingCompaniesHeader.classList.add('list-group-item', 'list-group-item-secondary');
          matchingCompaniesList.appendChild(matchingCompaniesHeader);
          for (const company of matchingCompanies) {
            const missingSkills = company.skills.filter(skill => !userSkillsArray.includes(skill));
            const matchingCompanyMessage = document.createElement('li');
            if (missingSkills.length === 0) {
              matchingCompanyMessage.textContent = `${company.name} (${company.profile})`;
              matchingCompanyMessage.classList.add('list-group-item', 'list-group-item-success');
            } else {
              matchingCompanyMessage.textContent = `${company.name} for the profile of ${company.profile} (missing skills: ${missingSkills.join(', ')})`;
              matchingCompanyMessage.classList.add('list-group-item', 'list-group-item-warning');
            }
            matchingCompaniesList.appendChild(matchingCompanyMessage);
          }
        }
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
  </body>
</html>