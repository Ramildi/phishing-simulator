document.getElementById("loginForm").addEventListener("submit", function (e) {
  const phone = document.getElementById("phone").value.trim();
  const otp = document.getElementById("otp").value.trim();

  if (!/^\d{3} \d{3} \d{2} \d{2}$/.test(phone)) {
    alert("Zəhmət olmasa mobil nömrəni düzgün daxil edin. (050 123 45 67)");
    e.preventDefault();
  } else if (!/^\d{4}$/.test(otp)) {
    alert("4 rəqəmli SMS kod daxil edin.");
    e.preventDefault();
  } else {
    alert("Təbriklər! Sistemə daxil oldunuz.");
  }
});
