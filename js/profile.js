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
