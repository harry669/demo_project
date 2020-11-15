$(document).ready(function(){
  $("form").submit(function(e){

    let name= $('#fname').val();
    let lastname= $('#lname').val();
    let comment= $('#comment').val();
    let password= $('#password').val();
    let cpassword= $('#cpassword').val();
    let gender= $( "input[name='gender']" );
    let status1=false;
    let status2=false;
    let status3= false;
    let age= $('#age');
    let birthday= $('#birthday').val();
    let checkbox= $(':checkbox');
    let status= $('#status');
    if(birthday.length > 9)
    {
          status2= true
          let val1= calculateAge(birthday);
           age.disabled= false;
           age.val(val1);
    }
    




    
     //age calculation
    function calculateAge(bdo)
    {
         let birth= new Date(bdo)
         let diff_ms= Date.now()- birth.getTime()
         let age_dt= new Date(diff_ms)
         return Math.abs(age_dt.getUTCFullYear()- 1970)
    }

    //gender validation

    for(let i=0;i<gender.length;i++)
    {
        let ele= gender[i];
        if(ele.checked)
        {
            
            status1=true;
        }
    }


      //checkbox validation

      for(let i=0;i<checkbox.length;i++)
      {
          let ele= checkbox[i];
          if(ele.checked)
          {
              status3= true;
          }
      }
     //Age validation
  
    //alpahnumeric passsword
    //regular expression array
    let rgx=  /[^a-zA-Z0-9]/g;
    let validpassword= password.match(rgx);
     //console.log(validpassword.length);
    let compare= password.localeCompare(cpassword);
    if(name.length <= 0)
    {
          e.preventDefault();
          document.getElementById('invalid-fname').innerHTML="first name requierd";
          
    }
     if(lastname.length <= 0)
    {
        e.preventDefault();
        document.getElementById('invalid-lname').innerHTML="last name requierd";
    }
    if(comment.length <=0)
    {
        e.preventDefault();
        document.getElementById('invalid-comment').innerHTML="comments requierd";
    }
     if(compare < 0 || compare > 0 || password.length!==cpassword.length)
    {
        e.preventDefault();
        document.getElementById('invalid-repassword').innerHTML="please enter correct password";
    }
    if(password.length<=0 || validpassword!=null)
    {
        e.preventDefault();
        document.getElementById('invalid-password').innerHTML="please enter corrcet password credentials";
    }
    if(status1 == false)
    { 
         e.preventDefault();
         document.getElementById('invalid-gender').innerHTML="please Choose Gender";
    }
     if(status2 == false)
    {
        e.preventDefault();
        document.getElementById('invalid-birthdate').innerHTML="Birthdate required";
    }
    if(status3 == false)
    {
        e.preventDefault();
        document.getElementById('invalid-checkbox').innerHTML="please Select checkbox";
    }
    else
    {
        status.addClass(" container alert alert-success");
        status.text("submiting Details");
        e.submit();
    }
    
  });
});
