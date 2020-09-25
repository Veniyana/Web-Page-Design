const emailValidation = (input) =>
  new RegExp(/^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9-]{2,5})+\.[a-zA-Z0-9-.]{1,4}/).test(
    input
  );

const handleClickEvent = (event) => {
  const emailDefault = document.getElementById("email-default").value || "";
  const emailMobile = document.getElementById("email-mobile").value || "";

  if (emailValidation(emailDefault) || emailValidation(emailMobile)) {
    alert("Successful submit!");
  } else {
    event.preventDefault();
    alert("Enter a valid email!");
  }
};
