<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('asset/css/resume.css') }}">

     <link href="https://fonts.cdnfonts.com/css/freesans-2" rel="stylesheet">
     <link href="https://fonts.cdnfonts.com/css/verdana-pro-cond" rel="stylesheet">
                          
    <title>Resume template</title>
</head>
<body>
    <div style="text-align:center";>
    <form action="{{url('resume')}}" method="POST">
        @csrf
        <fieldset>
            <legend style="text-align:center";>ProVitae Resume</legend>
                <div class="pro-d1">
                    <h3>PERSONAL INFORMATION</h3>

                    <div class="pro-uImg">
                        <label for="image">Upload Image:</label>
                        <input type="file"  id='image' name='image'>
                    </div><br>

                    <div class="pro-N">
                        <label for="name">Name:</label>
                        <input type="text" placeholder="Full Name"  id='name' name='name' minlength='5' required/>
                    </div><br>

                    <div class="pro-JT">
                        <label for="job title">Job Title:</label>
                        <input type="text" placeholder="Title" id="title" name="job_title" minlength='5' required/>
                    </div><br>

                    <div class="pro-SD">
                        <label for="description">Short Description:</label><br>
                        <textarea name="description" placeholder="Write a short description here..." id="description" required/></textarea>
                    </div><br>

                </div><br>

                <div class="pro-d2">
                    <h3>ADDITIONAL INFORMATION</h3> 

                    <div class="pro-Em">
                        <label for="email">Email:</label>
                        <input type="email" placeholder="Email ID" id="email" name="email" required/>
                    </div><br>

                   <div class="pro-Pn">
                        <label for="phone">Phone No:</label>
                        <!-- <input type="text" placeholder="Phone Number" name="phone" id="phone"  minlength='10' required/> -->
                         <input type="number" placeholder="Phone Number" name="phone" id="phone" minlength='10' required/>
                   </div><br>

                   <div class="pro-Lc">
                        <label for="location">Location:</label>
                        <input type="text" placeholder="Location" name="location" id="location" required/>
                   </div><br>

                   <div class="pro-git">
                        <label for="github">GitHub:</label>
                        <input type="text" placeholder="https://github.com/yourusername" name="github" id="github">
                   </div><br>

                </div><br>

                <div class="pro-d3">

                
                        <h3>WORK EXPERIENCE</h3>

                    <div class="pro-Ps">
                        <label for="position">Position:</label>
                        <input type="text" placeholder="position" name="position" id="position" required/>
                    </div><br>

                    <div class="pro-C">
                        <label for="company">Company:</label>
                        <input type="text" placeholder="company" name="company" id="company" required/>
                    </div><br>

                    <div class="pro-D">
                        <label for="from-date">From:</label>
                        <input type="date" name="from-date" id="from-date" required/>

                        <label for="to-date">To:</label>
                        <input type="date" name="to-date" id="to-date" required/>

                        <input type="checkbox" placeholder="Present" name="date" id="date"/> 
                    </div><br> 

                    <div class="pro-I">
                        <label for="currently doing">Currently Doing:</label>
                        <input type="text" placeholder="Job/Intership/Course" name="currently doing" id="currently doing" />
                    </div><br>

                    <div class="pro-loc">
                        <label for="work location">Work Location:</label>
                        <input type="text" placeholder="Work Location" name="work location" id="work location" />
                    </div>
                </div><br>

                <!-- <div class="pro-d4">
                    <h3>ACHIEVEMENTS</h3>

                    <div class="pro-ach">
                        <label for="achievements"></label>
                        <textarea placeholder="Major accomplishments in professional your life" name="achievements" id="achievements"></textarea>
                    </div>
                </div><br> -->

               <div class="pro-d4">
                    <h3>PERSONAL PROJECTS</h3>
                    <div id="rows">

                            <!-- <input type="text" name="project[]" placeholder="Project Title:">
                            
                            <textarea name="description[]" placeholder="Brief Description..."></textarea> -->
      
                    </div>
                            <div class="pro-btn">
                                <button type="button" onclick="addProjectRow()">ADD PROJECTS</button>
                            </div>
                </div>
                <div class="pro-d5">
                    <h3>TECHNICAL SKILLS</h3>
                        <div id="Trows">

                        </div>
                            <div class="pro-btn2">
                                <button type="button" onclick="addSkillRow()">ADD SKILLS</button>
                            </div>
                </div>
                 <div class="pro-d6">
                    <h3>ACHIEVEMENTS</h3>

                    <div class="pro-ach">
                        <label for="achievements"></label>
                        <textarea placeholder="Major accomplishments in professional your life" name="achievements" id="achievements" minlength="500" required></textarea>
                    </div>
                </div><br>

                <div class="pro-d7">
                    <h3>ORGANIZATIONS</h3>
                        <div class="pro-org">
                            <label for="organizations"></label>
                            <textarea  placeholder="Company/Institution"  name="organizations" id="organization" required></textarea>
                            <br>
                            <label for="from-date">From:</label>
                            <input type="date" name="from-date" id="from-date" required>

                            <label for="to-date">To:</label>
                            <input type="date" name="to-date" id="to-date" required>
                        </div>
                </div>
                <div class="pro-d8">
                    <h3>CERTIFICATES</h3>
                    <div class="pro-crt">
                        <label for="certificates"></label>
                        <textarea placeholder="Your Credentials..." name="certificates" id="certificates" minlength="500" required></textarea>
                    </div>
                </div><br>

                <div class="pro-d9">
                    <h3>EDUCATION</h3>
                    <div id="proEdu">
                        <!-- <label for="education">Graduation/Post-Graduation/Diploma:</label>
                        <input type="text" placeholder="Course" name="education" id="education" required/>

                        <label for="education">College Name:</label>
                        <input type="text" placeholder="College Name" name="education" id="education" required/>

                        <label for="from-date">From:</label>
                        <input type="date" name="from-date" id="from-date" required>

                        <label for="to-date">To:</label>
                        <input type="date" name="to-date" id="to-date" required> -->
                    </div>
                        <div class="btn-edu">
                            <button type="button" onclick="addEduRow()">ADD EDUCATION</button>
                        </div>
                </div>
        </fieldset>
    </form>
    </div>
    <script>
    //====================================Project section function============================================//
    function addProjectRow() {
        const rows = document.getElementById('rows');
            const newRow = document.createElement('div');
                newRow.innerHTML = `
                    <input type="text" name="project[]" placeholder="Project Title:">
            <br><br>
                    <textarea name="description[]" placeholder="Brief description..."></textarea>
                <br>
                    <button type="button" onclick="deleteRow(this)">DELETE</button>
                    `;
                rows.appendChild(newRow);
    }
    
   function deleteRow(button) {
        button.parentElement.remove();
  }
    
    //========================================Skill section function===========================================================//
     function addSkillRow() {
        const Trows = document.getElementById('Trows');
            const newRow = document.createElement('div');
                newRow.innerHTML = `
                    <input type="text" name="skill[]" placeholder="Skills:">
                    <button type="button" onclick="deleteSkillRow(this)">DELETE</button>
                    `;
                    Trows.appendChild(newRow);
    }
    function deleteSkillRow(button){
        button.parentElement.remove();
  }
  //===========================================Education section function=========================================================//
    function addEduRow(){
        const proEdu=document.getElementById('proEdu');
            const newRow=document.createElement('div');
                newRow.innerHTML=`
                        <label for="education">Graduation/Post-Graduation/Diploma:</label>
                        <textarea placeholder="Course" name="education" id="education" required/></textarea>
                    <br>
                        <label for="education">College Name:</label>
                        <textarea placeholder="College Name" name="education" id="education" required/></textarea>
                    <br>
                        <label for="from-date">From:</label>
                        <input type="date" name="from-date" id="from-date" required>

                        <label for="to-date">To:</label>
                        <input type="date" name="to-date" id="to-date" required>
                    <br>
                        <button type="button" onclick="deleteEdu(this)">DELETE</button>
                        `;
                        proEdu.appendChild(newRow);
    }
    function deleteEdu(button){
        button.parentElement.remove();
    }
  </script>
</body>
</html>