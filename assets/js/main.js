$(document).on("submit", "form.js-register", function (event) {
  event.preventDefault();

  const _form = $(this);
  const _error = $(".js-error", _form);

  const data = {
    email: $("input[type='email']", _form).val(),
    password: $("input[type='password']", _form).val(),
  };

  if (data.email.length < 6) {
    _error.text("Please enter a valid email address").show();
    return false;
  }

  if (data.password.length < 11) {
    _error
      .text("Please enter a passphrase that is at least 11 characters long.")
      .show();
    return false;
  }

  // Assuming the code gets this far, we can start the ajax process
  _error.hide();

  return false;
});
