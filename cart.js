const form = document.getElementById('cardForm');
const successMessage = document.getElementById('successMessage');

form.addEventListener('submit', function (e) {
  let valid = true;

  const cardNumber = form.card_number.value.replace(/\s+/g, '');
  const expiry = form.expiry_date.value;
  const cvc = form.cvc.value;

  const cardError = document.getElementById('cardNumberError');
  const expiryError = document.getElementById('expiryDateError');
  const cvcError = document.getElementById('cvcError');

  if (!/^\d{16}$/.test(cardNumber)) {
    cardError.style.display = 'block';
    valid = false;
  } else cardError.style.display = 'none';

  if (!/^(0[1-9]|1[0-2])\/\d{2}$/.test(expiry)) {
    expiryError.style.display = 'block';
    valid = false;
  } else expiryError.style.display = 'none';

  if (!/^\d{3}$/.test(cvc)) {
    cvcError.style.display = 'block';
    valid = false;
  } else cvcError.style.display = 'none';

  if (!valid) {
    e.preventDefault();
    return;
  }

  e.preventDefault(); // Test məqsədli, əsl göndərmə olmur
  successMessage.style.display = 'block';
});
