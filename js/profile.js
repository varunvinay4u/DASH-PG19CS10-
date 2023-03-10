// Get form and fields
const profileForm = document.querySelector('#profile-form');
const usernameField = document.querySelector('#username');
const emailField = document.querySelector('#email');
const passwordField = document.querySelector('#password');
const ageField = document.querySelector('#age');
const editProfileBtn = document.querySelector('#edit-profile-btn');
const saveProfileBtn = document.querySelector('#save-profile-btn');

// Add event listeners to form fields
usernameField.addEventListener('input', toggleSaveButton);
emailField.addEventListener('input', toggleSaveButton);
passwordField.addEventListener('input', toggleSaveButton);
ageField.addEventListener('input', toggleSaveButton);

// Toggle the save button
function toggleSaveButton() {
    saveProfileBtn.disabled = false;
  }

// Edit profile button
editProfileBtn.addEventListener('click', () => {
    // Enable form fields for editing
    // $("#username").attr("readonly",false);
    // document.getElementById('username').removeAttribute('readonly');
    usernameField.removeAttribute('readonly');
    emailField.removeAttribute('readonly');
    passwordField.removeAttribute('readonly');
    ageField.removeAttribute('readonly');
    
  // // Toggle edit/save button
  editProfileBtn.disabled = true;
  saveProfileBtn.disabled = false;
});

// Save profile button
profileForm.addEventListener('submit', (event) => {
    event.preventDefault();

  // Save changes to database or API
  // ...

  // Disable form fields for editing
  usernameField.setAttribute('readonly', true);
  emailField.setAttribute('readonly', true);
  passwordField.setAttribute('readonly', true);
  ageField.setAttribute('readonly', true);

  // Toggle edit/save button
  editProfileBtn.disabled = false;
  saveProfileBtn.disabled = true;
});