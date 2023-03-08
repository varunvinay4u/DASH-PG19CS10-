// Select all input elements for varification
const userName = document.getElementById("name");
const age = document.getElementById("age");
const dob = document.getElementById("dob");
const email = document.getElementById("email");
const password = document.getElementById("password");
const confirmpassword = document.getElementById("confirmpassword");
const phoneNumber = document.getElementById("phoneNumber");
const gender = document.registration;
const zipcode = document.getElementById("zipcode");


// function for form varification
function formValidation() {
    // checking length of name
    if (userName.value.length < 2 || userName.value.length > 20) {
      alert("Name length should be more than 2 and less than 21 charaters");
      userName.focus();
      return false;
    }

    
  if (isNaN(age.value) || age.value < 3 || age.value > 100) {
    alert("Age not in range");
    age.focus();
    return false;
  }

  
  if (dob.value === "")  {
    alert("please provide Date of Birth");
    dob.focus();
    return false;
  }

    // checking password character pattern

    if (password.value === "")  {
        alert("please provide a password");
        password.focus();
        return false;
      }