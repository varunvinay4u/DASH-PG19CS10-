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

      if (!password.value.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/)) {
        alert("Password must contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character, and must be between 8 and 15 characters long.");
        password.focus();
        return false;
      }


      if (!(confirmpassword.value === password.value))  {
        alert("passwords do not match");
        password.focus();
        return false;
      }

        // checking phone number
  if (!phoneNumber.value.match(/^[1-9][0-9]{9}$/)) {
    alert("Phone number must be 10 characters long number and first digit can't be 0!");
    phoneNumber.focus();
    return false;
  }

    // checking gender
    if (gender.gender.value === "") {
        alert("Please select your gender!");
        return false;
      }