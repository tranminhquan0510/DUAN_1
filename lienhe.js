function kiemtra() {
  // Lấy các phần tử input và radio button từ DOM
  var hotenInput = document.getElementById("hoten");
  var emailInput = document.getElementById("email");
  var phoneInput = document.getElementById("phone");
  var gioitinhInputs = document.getElementsByName("phai");
  var noidungInput = document.getElementById("noidung");

  // Lấy giá trị đã nhập từ các phần tử input
  var hoten = hotenInput.value.trim();
  var email = emailInput.value.trim();
  var phone = phoneInput.value.trim();
  var gioitinh = "";
  var noidung = noidungInput.value.trim();

  // Biến để kiểm tra lỗi
  var hasError = false;

  // Kiểm tra Họ và tên
  if (hoten === "") {
    alert("Họ và tên là bắt buộc!");
    hotenInput.focus();
    hasError = true;
    return false; // Ngừng kiểm tra tiếp nếu trường này không hợp lệ
  }

  // Kiểm tra Email
  if (email === "") {
    alert("Email là bắt buộc!");
    emailInput.focus();
    hasError = true;
    return false;
  } else if (!validateEmail(email)) {
    alert("Email không hợp lệ!");
    emailInput.focus();
    hasError = true;
    return false;
  }

  // Kiểm tra Số điện thoại
  if (phone === "") {
    alert("Số điện thoại là bắt buộc!");
    phoneInput.focus();
    hasError = true;
    return false;
  } else if (!validatePhoneNumber(phone)) {
    alert("Số điện thoại không hợp lệ! (Chỉ chứa số, tối đa 11 chữ số)");
    phoneInput.focus();
    hasError = true;
    return false;
  }

  // Kiểm tra Giới tính
  for (var i = 0; i < gioitinhInputs.length; i++) {
    if (gioitinhInputs[i].checked) {
      gioitinh = gioitinhInputs[i].value;
      break;
    }
  }
  if (gioitinh === "") {
    alert("Vui lòng chọn Giới tính!");
    gioitinhInputs[0].focus();
    hasError = true;
    return false;
  }

  // Kiểm tra Nội dung
  if (noidung === "") {
    alert("Nội dung không được để trống!");
    noidungInput.focus();
    hasError = true;
    return false;
  }

  // Nếu không có lỗi, hiển thị thông báo gửi thành công
  if (!hasError) {
    alert("Đã gửi thành công!");
  }
  
  return true; // Cho phép gửi form nếu tất cả hợp lệ
}

// Hàm kiểm tra định dạng Email
function validateEmail(email) {
  var emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
  return emailRegex.test(email);
}

// Hàm kiểm tra định dạng Số điện thoại
function validatePhoneNumber(phone) {
  var phoneRegex = /^\d{1,11}$/; // Chỉ cho phép số và tối đa 11 ký tự
  return phoneRegex.test(phone);
}
