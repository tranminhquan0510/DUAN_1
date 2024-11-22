// Lấy các phần tử cần thao tác
const quantityInputs = document.querySelectorAll('.quantity-input');
const increaseButtons = document.querySelectorAll('.quantity button:nth-child(3)');
const decreaseButtons = document.querySelectorAll('.quantity button:nth-child(1)');
const removeButtons = document.querySelectorAll('.remove');
const subtotalElement = document.querySelector('.checkout-summary .summary-item .value');
const totalElement = document.querySelector('.checkout-summary .total .value');

// Hàm cập nhật tổng tiền
function updateTotal() {
  const cartItems = document.querySelectorAll('.cart-item');
  let subtotal = 0;

  cartItems.forEach((item) => {
    const quantity = parseInt(item.querySelector('.quantity-input').value);
    const priceText = item.querySelector('.price p').textContent.replace('đ', '').replace(/\./g, '');
    const price = parseInt(priceText);

    subtotal += price * quantity;
  });

  // Cập nhật giá trị tạm tính
  subtotalElement.textContent = `${subtotal.toLocaleString()}đ`;
  totalElement.textContent = `${subtotal.toLocaleString()}đ`;
}

// Sự kiện tăng số lượng
increaseButtons.forEach((button, index) => {
  button.addEventListener('click', () => {
    const input = quantityInputs[index];
    let currentValue = parseInt(input.value);
    input.value = currentValue + 1;

    // Cập nhật tổng tiền
    updateTotal();
  });
});

// Sự kiện giảm số lượng
decreaseButtons.forEach((button, index) => {
  button.addEventListener('click', () => {
    const input = quantityInputs[index];
    let currentValue = parseInt(input.value);

    if (currentValue > 1) {
      input.value = currentValue - 1;
    }

    // Cập nhật tổng tiền
    updateTotal();
  });
});

// Xóa sản phẩm
removeButtons.forEach((button, index) => {
  button.addEventListener('click', () => {
    const cartItem = button.closest('.cart-item');
    cartItem.remove();

    // Cập nhật tổng tiền
    updateTotal();
  });
});

// Cập nhật tổng tiền ban đầu
updateTotal();
