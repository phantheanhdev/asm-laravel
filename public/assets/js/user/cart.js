
// Tính tổng cộng của các sản phẩm và cập nhật vào phần tổng cộng
function calculateGrandTotal() {
    let total = 0;
    const totalElements = document.querySelectorAll('.total_money');
    totalElements.forEach(element => {
        total += parseFloat(element.textContent.replace(/[^0-9.-]+/g, ""));
    });

    // Hiển thị tổng cộng đã tính vào phần tổng cộng
    const grandTotalElement = document.querySelector('.cart_grandtotal span');
    const cartSubtotal = document.querySelector('.cart_subtotal span');
    grandTotalElement.textContent = total.toFixed(0);
    cartSubtotal.textContent = total.toFixed(0);
}

// Gọi hàm tính tổng cộng khi trang được tải hoàn tất
document.addEventListener('DOMContentLoaded', function () {
    calculateGrandTotal();
});

