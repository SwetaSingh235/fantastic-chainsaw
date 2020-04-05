# fantastic-chainsaw
 Our website specifically addresses women reproductive health issues ,hence making it less complex and more efficient unlike other websites which addresses larger healthcare section. 
 House-makers, working women or women living in remote section are the major beneficiary under this part.
 Once the applicant registers in the website a list of specialized doctors will be displayed
   on the website with their status of availability, day and time along with the clinic address.. 
   
   
   
   
 About Pages-
 
 
 
 Main Page-index.php
 
 
 FOR PATIENT
 Navbar contain-
 
    Doctor-appoint.php(to book appointment with doctor)
          -doc.php(get form data from appoint.php and insert in database)
    Ask Doctor-chat.php(to send message to doctor)
              -chat1.php(to see reply from doctor)
    My Booking-patient.php(to see all booking status).
    Login-login.php(login pager for both patient and doctor)
         -validp.php(validate form data)
         -validd.php(validate form data)
    Register-pregister.php(patient registration)-insert.php(insert form data to database)
             dregister.php(doctor registration)-dinsert.php(insert form data to database)
    Search According to Symptom-example.php(displays various problems for which we need to visit gynecologist).
    contact.php(inserts complaints of the user to the database)
    logout.php(destroys session)
    
    
    
  FOR DOCTOR
  Navbar contains-
  
      docindex.php(home page for doctor's login)
      dviewprof.php(view the profile)
      docupdate.php(updates the profile)
                   -update.php(sends form data to database)
      dmessage.php(checks messages that are sent from patient)
                   dchat.php(updates the replied messages by doctor to the database).       
      daapoint.php(checks all the scheduled appointment and marks the one whom the doctor has diagnosed).
                -dappointphp.php(updates the diagnosis status)
                
                
                
  FOR ADMIN
  
     adminlogin.php(login page for admin)
     admin.php(checks all the appointment booking request from patient and books appointment)
     adminappbook.php(updates the data to database)
     
     
     
  CSS FILES
  
      style.css(for index.php)
      drstyle.css(for dregister.php)
      prstyle.css(for pregister.php)
      lstyle.css(for login.php)
      astyle.css(for appoint.php)
      cstyle.css(for chat.php)
      sstyle.css(for example.php)
      style1.css(for patient.php)
      docstyle.css(for docindex.php)
      
      
      
  LANGUAGES USED-
                 HTML
                 CSS
                 PHP
                 JAVASCRIPT
  
  DATABASE NAME-janm
  TABLE NAME-patient(contains information of patients )
            -doctor(contains information of doctors)
            -appoint(contains data of appointment)
            -chat(contains all the messages)
            -adminlogin(contains id password of admin)
      
      
    
    
    
 
