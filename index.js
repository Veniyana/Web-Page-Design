const emailValidation = (input) =>
  new RegExp(/^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9-]{2,5})+\.[a-zA-Z0-9-.]{1,4}/).test(
    input
  );

const handleClickEvent = (event) => {
  const email = document.getElementById("email").value || "";

  if (emailValidation(email)) {
    alert("Successfull submit!");
  } else {
    event.preventDefault();
    alert("Enter a valid email!");
  }
};
