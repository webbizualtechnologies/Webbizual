//Accordion Item
// const accordionItemHeaders = document.querySelectorAll(
//   ".accordion-item-header"
// );

// accordionItemHeaders.forEach((accordionItemHeader) => {
//   accordionItemHeader.addEventListener("click", (event) => {
//     accordionItemHeader.classList.toggle("active");
//     const accordionItemBody = accordionItemHeader.nextElementSibling;
//     if (accordionItemHeader.classList.contains("active")) {
//       accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
//     } else {
//       accordionItemBody.style.maxHeight = 0;
//     }
//   });
// });

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contactForm");
  form.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    // Validate required fields
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const contact = document.getElementById("contact").value.trim();
    const message = document.getElementById("message").value.trim();

    if (name === "" || email === "" || contact === "" || message === "") {
      alert("Please fill in all required fields.");
      return;
    }

    // If all fields are filled, submit the form
    form.submit();
  });
});
