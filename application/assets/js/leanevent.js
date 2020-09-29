
var modal;
var span;
var slideIndex = 0;
var emailRegex = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/
var nameRegex = /[a-zA-Z ]+/
var dateRegex = /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/m;
var horaRegex = /^([01]\d|2[0-3]):?([0-5]\d)$/;
var valorRegex = /^[\d]+(.[\d]+)*$/;
var postalRegex = /^[\d]{5}$/;
var phoneRegex = /^\d{3}[-.\s]?\d{3}[-.\s]?\d{4}$/
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("carousel");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" nav-active-triangle active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " nav-active-triangle active";
}

// function modal() {
//   // Get the modal
//   modal = document.getElementById(modalName.toString());
// }
// When the user clicks the button, open the modal 
function openModal(modalName) {
  modal = document.getElementById(modalName);
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function closeModal() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var slideLogoIndex = 1;


function plusSlides(n) {
  showLogoSlides(slideLogoIndex += n);
}

function currentSlide(n) {
  showLogoSlides(slideLogoIndex = n);
}

function showLogoSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) { slideLogoIndex = 1 }
  if (n < 1) { slideLogoIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideLogoIndex - 1].style.display = "block";
}

function login() {
  var username = document.getElementById("usuario").value;
  var password = document.getElementById("contrasena").value;
  if (username == 'individual' && password == 'individual')
    window.location.href = "home_individual.php";
  else if (username == 'business' && password == 'business')
    window.location.href = "home_business.php";
  else
    window.location.href = "home_agent.php";
}

function validateForm(form) {
  var flag = true;
  if (form.newsletter_email !== undefined) {
    if (!emailRegex.test(form.newsletter_email.value)) {
      form.newsletter_email.style.setProperty('border-color', 'red');
      document.getElementById('newsletter_email_error').textContent = "Please enter valid email."
      flag = false;
    } else {
      //document.getElementById('newsletter_email_error').textContent = "";
    }
  }
  // add event
  if (form["profile-nombre"] !== undefined) {
    if (!nameRegex.test(form["profile-nombre"].value) || form["profile-nombre"].value == "") {
      document.getElementById("profile-nombre-error").textContent = "Please enter valid name.";
      form["profile-nombre"].focus();
      flag = false;
    } else {
      // document.getElementById("profile-nombre-error").textContent = "";
    }
  }
  if (form["profile-apellido"] !== undefined) {
    if (!nameRegex.test(form["profile-apellido"].value) || form["profile-apellido"].value == "") {
      document.getElementById("profile-apellido-error").textContent = "Please enter valid name.";
      form["profile-apellido"].focus();
      flag = false;
    } else {
      // document.getElementById("profile-apellido-error").textContent = "";
    }
  }
  if (form["files"] !== undefined) {
    if (form["files"].value == "") {
      document.getElementById("image-error").textContent = "Please select file to upload.";
      flag = false;
    } else {
      document.getElementById("image-error").textContent = "";
    }
  }
  if (form["profile-lugar"] !== undefined) {
    if (form["profile-lugar"].value == "") {
      document.getElementById("address-error").textContent = "Please enter valid address.";
      form["profile-lugar"].focus();
      flag = false;
    } else {
      document.getElementById("address-error").textContent = "";
    }
  }
  // lugar
  if (form["profile-telefono"] !== undefined) {
    if (form["profile-telefono"].value == "" || !dateRegex.test(form["profile-telefono"].value)) {
      document.getElementById("date-error").textContent = "Please enter valid date.";
      form["profile-telefono"].focus();
      flag = false;
    } else {
      document.getElementById("date-error").textContent = "";
    }
  }
  // hora
  if (form["profile-usuario"] !== undefined) {
    if (form["profile-usuario"].value == "" || !horaRegex.test(form["profile-usuario"].value)) {
      document.getElementById("hora-error").textContent = "Please enter valid time.";
      form["profile-usuario"].focus();
      flag = false;
    } else {
      document.getElementById("hora-error").textContent = "";
    }
  }
  //valor
  if (form["profile-contrasena"] !== undefined) {
    if (form["profile-contrasena"].value == "" || !valorRegex.test(form["profile-contrasena"].value)) {
      document.getElementById("valor-error").textContent = "Please enter valid price.";
      form["profile-contrasena"].focus();
      flag = false;
    } else {
      document.getElementById("valor-error").textContent = "";
    }
  }
  return flag;
}

function validateRegistrationForm(name) {
  var flag = true;
  var correo = document.getElementById("correo-" + name);
  var contrasena = document.getElementById("contrasena-register-" + name);
  var nombre = document.getElementById("nombre-register-" + name);
  var apellido = document.getElementById("apellido-register-" + name);
  var direction = document.getElementById("direction-register-" + name);
  var ciudad = document.getElementById("ciudad-register-" + name);
  var postal = document.getElementById("postal-register-" + name);
  if (!emailRegex.test(correo.value) || correo.value == "") {
    document.getElementById('correo-'+name+'-error').textContent = "Please enter valid email.";
    flag = false;
  } else {
    document.getElementById('correo-'+name+'-error').textContent = "";
  }
  if(contrasena.value == "") {
    document.getElementById('contrasena-register-'+name+'-error').textContent = "Please enter valid password.";
    flag = false;
  } else {
    document.getElementById('contrasena-register-'+name+'-error').textContent = "";
  }
  if (!nameRegex.test(nombre.value) || nombre.value == "") {
    document.getElementById('nombre-register-'+name+'-error').textContent = "Please enter valid name.";
    flag = false;
  } else {
    document.getElementById('nombre-register-'+name+'-error').textContent = "";
  }
  if (!nameRegex.test(apellido.value) || apellido.value == "") {
    document.getElementById('apellido-register-'+name+'-error').textContent = "Please enter valid surname.";
    flag = false;
  } else {
    document.getElementById('apellido-register-'+name+'-error').textContent = "";
  }
  if (direction.value == "") {
    document.getElementById('direcion-register-'+name+'-error').textContent = "Please enter valid address."
    flag = false;
  } else {
    document.getElementById('direcion-register-'+name+'-error').textContent = "";
  }
  if (!nameRegex.test(ciudad.value) || ciudad.value == "") {
    document.getElementById('ciudad-register-'+name+'-error').textContent = "Please enter valid city.";
    flag = false;
  } else {
    document.getElementById('ciudad-register-'+name+'-error').textContent = "";
  }
  if (!postalRegex.test(postal.value) || postal.value == "") {
    document.getElementById('postal-register-'+name+'-error').textContent = "Please enter valid postal code.";
    flag = false;
  } else {
    document.getElementById('postal-register-'+name+'-error').textContent = "";
  }
  return flag;
}

function validateContactForm() {
  var flag = true;
  var nombre = document.getElementById("nombre").value;
  var apellido = document.getElementById("apellido").value;
  var correo = document.getElementById("correo").value;
  var tema = document.getElementById("tema").value;
  var mensaje = document.getElementById("mensaje").value;
  if (!nameRegex.test(nombre) || nombre == "") {
    document.getElementById('nombre-error').textContent = "Please enter valid name.";
    flag = false;
  } else {
    document.getElementById('nombre-error').textContent = "";
  }
  if (!nameRegex.test(apellido) || apellido == "") {
    document.getElementById('apellido-error').textContent = "Please enter valid name.";
    flag = false;
  } else {
    document.getElementById('apellido-error').textContent = "";
  }
  if (!emailRegex.test(correo) || correo == "") {
    document.getElementById('correo-error').textContent = "Please enter valid email.";
    flag = false;
  } else {
    document.getElementById('correo-error').textContent = "";
  }
  if (tema == "") {
    document.getElementById('tema-error').textContent = "Please enter valid subject.";
    flag = false;
  } else {
    document.getElementById('tema-error').textContent = "";
  }
  if (mensaje == "") {
    document.getElementById('mensaje-error').textContent = "Please enter valid message.";
    flag = false;
  } else {
    document.getElementById('mensaje-error').textContent = "";
  }
  return flag;
}

function validateLogin() {
  var flag = true;
  var email = document.getElementById('usuario').value;
  var password = document.getElementById('contrasena').value;
  if(!emailRegex.test(email) || email == "") {
    document.getElementById('user-error').textContent = "Invalid email.";
    flag = false;
  } else {
    document.getElementById('user-error').textContent = "";
  }
  if(password == "") {
    document.getElementById('pass-error').textContent = "Invalid password.";
    flag = false;
  } else {
    document.getElementById('pass-error').textContent = "";
  }
  return flag;
}

function validateReset() {
  var flag = true;
  var resetEmail = document.getElementById('correo').value;
  if(!emailRegex.test(resetEmail) || resetEmail == "") {
    document.getElementById('correo-error').textContent = "Invalid email.";
    flag = false;
  } else {
    document.getElementById('correo-error').textContent = "";
  }
  return flag;
}

function validateProfile() {
  var flag = true;
  var name = document.getElementById('profile-nombre').value;
  var apellido = document.getElementById('profile-apellido').value;
  var correo = document.getElementById('profile-correo').value;
  var telefono = document.getElementById('profile-telefono').value;
  var usuario = document.getElementById('profile-usuario').value;
  var contrasena = document.getElementById('profile-contrasena').value;
  if(!nameRegex.test(name) || name == ""){
    document.getElementById('profile-nombre-error').textContent = "Enter valid name.";
    flag = false;
  } else {
    document.getElementById('profile-nombre-error').textContent = "";
  }
  if(!nameRegex.test(apellido) || apellido == ""){
    document.getElementById('profile-apellido-error').textContent = "Enter valid surname.";
    flag = false;
  } else {
    document.getElementById('profile-apellido-error').textContent = "";
  }
  if(!emailRegex.test(correo) || correo == ""){
    document.getElementById('profile-correo-error').textContent = "Enter valid email.";
    flag = false;
  } else {
    document.getElementById('profile-correo-error').textContent = "";
  }
  if(!phoneRegex.test(telefono) || telefono == ""){
    document.getElementById('profile-telephono-error').textContent = "Enter valid phone number.";
    flag = false;
  } else {
    document.getElementById('profile-telephono-error').textContent = "";
  }
  if(usuario == ""){
    document.getElementById('profile-usuario-error').textContent = "Enter valid username.";
    flag = false;
  } else {
    document.getElementById('profile-usuario-error').textContent = "";
  }
  if(contrasena == ""){
    document.getElementById('profile-contrasena-error').textContent = "Enter valid password.";
    flag = false;
  } else {
    document.getElementById('profile-contrasena-error').textContent = "";
  }
  return flag;
}

window.addEventListener("error", handleError, true);

function handleError(evt) {
    if (evt.message) { // Chrome sometimes provides this
      alert("error: "+evt.message +" at linenumber: "+evt.lineno+" of file: "+evt.filename);
    } else {
      alert("error: "+evt.type+" from element: "+(evt.srcElement || evt.target));
    }
}