$("#contact").submit(beforeSend, event);

function beforeSend(event) {
  event.preventDefault();
  const name = document.querySelector('[name="name"]').value;
  const tel = document.querySelector('[name="tel"]').value;
  const email = document.querySelector('[name="email"]').value;
  const message = document.querySelector('[name="message"]').value;
  success(name);
}

function success(name) {
  alert(`Dear ${name}, your message has been sent successfully.`);
}