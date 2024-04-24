const form = document.getElementById("contact");

function send(event) {
  event.preventDefault();
  const name = document.querySelector('[name="name"]').value;
  
  let client = new XMLHttpRequest();
  let formData = new FormData(form)

  client.open('POST', './controller/form-processing-server.php', true);
  client.send(formData);

  client.onload = function() {
    if (client.status != 200) {
      alert(`Error, please try later.`);
    } else {
      alert(`Dear ${name}, your message has been sent successfully.`);
    }
  };
  form.reset();
}