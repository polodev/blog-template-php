//signinForm
$(document).ready(function () {
  $('#signinForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5 
      }
    },
    messages: {
      email: {
        required: 'Your email address is required',
        email: 'Please add a valide email address'
      },
      password: {
        required: 'Please add input a password',
        minlength: 'Password should be more than 5 character'
      }
    }
  });
});

//signup form
$(document).ready(function () {
  $('#signupForm').validate({
    rules: {
      first_name: {
        required: true,
        minlength: 2
      },
      last_name: {
        required: true,
        minlength: 2
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5 
      },
      confirm_password: {
        required: true,
        minlength: 5,
        equalTo: '#password'
      }
    },
    messages: {
      first_name: {
        required: 'Your first name is required',
        minlength: 'First name length must be 2 character or more'
      },
      last_name: {
        required: 'Your first name is required',
        minlength: 'First name length must be 2 character or more'
      },
      email: {
        required: 'Your email address is required',
        email: 'Please add a valid email address'
      },
      password: {
        required: 'Please add input a password',
        minlength: 'Password should be more than 5 character'
      },
      confirm_password: {
        required: 'Your first name is required',
        minlength: 'First name length must be 2 character or more',
        equalTo: 'Confirm password must be like password'
      }
    }
  });
});
