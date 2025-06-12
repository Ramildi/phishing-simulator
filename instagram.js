const form = document.getElementById('loginForm');
const errorMsg = document.getElementById('error-msg');

form.addEventListener('submit', function(e) {
  const username = form.username.value.trim();
  const password = form.password.value.trim();


  if (username.length < 3) {
    e.preventDefault();
    errorMsg.textContent = "İstifadəçi adı ən azı 3 simvol olmalıdır!";
    return;
  }

  if (password.length < 6) {
    e.preventDefault();
    errorMsg.textContent = "Şifrə ən azı 6 simvol olmalıdır!";
    return;
  }

  errorMsg.textContent = '';
});
