function getFName()
  {
      console.log("asche");
      var name = document.getElementById('firstName').value;
      console.log(name);
      var namelength=name.length;
      var err = true;

      for (var i = 0; i < namelength; i++) {
        if(!(name[i] >= 'a' && name[i] <= 'z') && !(name[i] >= 'A' && name[i] <= 'Z'))
        {
            console.log(name[i]);
            err = false;
            //console.log("asce");
            alert("Name can not have any number or special characters");
            break;
        }
      }

      return err; 
  }  

  function getLName()
  {
      
      var name = document.getElementById('lastName').value;
      console.log(name);
      var namelength=name.length;
      var err = true;

      for (var i = 0; i < namelength; i++) {
        if(!(name[i] >= 'a' && name[i] <= 'z') && !(name[i] >= 'A' && name[i] <= 'Z'))
        {
            err = false;
            alert("Name can not have any number or special characters");
            break;
        }
      }

      return err; 
    
    
  } 
  function datechk()
        {
            var date = document.getElementById('uday').value.trim();
            console.log(date);
            var today = new Date();
            var birthDate = new Date(date);
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            console.log(age);
            if(age<0)
            {
              alert("age can not negetive");
              return false;
            }
            return true;
        }

        
  function getques(){
    var ques=document.getElementById('ques').value;
    if(ques.length==0)
    {
      alert('Enter the question');
    }
  }

  function getans(){
    var ans=document.getElementById('ans').value;
    if(ans.length==0)
    {
      alert('Enter the question');
    }
  }

  function getEmail()
{
    var email = document.getElementById('email').value;
    var emailarr = email.split('@');
    var err = true;
    if(emailarr.length == 2)
    {
        var emailexarr = emailarr[1].split('.');
        if(emailexarr.length != 2)
        {
            alert('Email is not valid');
            err = false;
        }
    }
    else
    {
        alert("Email is not valid");
        err = false;
    }
    return err;
}
function getPhone()
{
    var phone = document.getElementById('phoneNumber').value;
    var length= phone.length;
    var err = true;
    if(length!=11){
      alert("Phoneno is not valid!");
      err = false;

    }
    for( var i = 0; i<length; i++)
    {
        if(!(phone[i]>= 0 && phone[i]<= 11))
        {
            alert("Phone no is not valid");
            err = false;
        }
    }
    return err;
}

function getPassword()
{
  console.log("in password");
  var password = document.getElementById('password').value;
  //console.log(password);
    var length= password.length;
    var err = true;
    if(length< 8){
      alert("Password must be 8 characters!");
      err = false;
    }else{
      var charFlag = false;
      for(var i=0; i<length; i++)
      {
        if((password[i]>='a' && password[i]<='z') || (password[i]>='A' && password[i]<='Z'))
        {
          charFlag = true;
          break;
        }
      }
      if(!charFlag)
      {
        alert('Password must contains at least one char!!');
        err = false;
      }
      var specChar = false;
      for(var i=0; i<length; i++)
      {
        if(password[i]>='!' && password[i]<='/')
        {
          specChar = true;
          break;
        }
      }
      if(!specChar)
      {
        alert('Password must contains at least one special char!!');
        err = false;
      }
    }
    return err;
}

function getConfirmpassword(){
  var password = document.getElementById('password').value;
  var cpassword= document.getElementById('cpassword').value;
  if( cpassword!=password){
    alert("password doesnot match");
    return false;
  }
  return true;
}

function getUser(){

   var owner = document.getElementById('owner').checked;
   var volunteer= document.getElementById('volunteer').checked;
   var manager=document.getElementById('manager').checked;
   var generaluser = document.getElementById('generaluser').checked;

   if(!owner&&!volunteer&&!manager&&!generaluser){
    alert('Please select an option!');
    return false;

   }
   else
    return true;
}
  function genderValid()
  {
    var genders = document.getElementsByName("gender");
    var length = genders.length;
    var err = false;
    for(var i=0; i<length; i++)
    {
      if(genders[i].checked)
      {
        err = true;
      }
    }
    if(!err)
      alert("Plase select a gender");
    return err;
  }


  function submitValid()
  {
    if(!getFName() || !getLName() || !getEmail() || !getPassword() || !getConfirmpassword() || !datechk() || !getPhone() || !genderValid() || !getUser())
    {
      alert("There is something wrong with this fucking form, Please Fill up every fucking thing you fucking moron and then go fuck yourself to the helllllll!!!! >.<");
      return false;
    }
    return true;
  }