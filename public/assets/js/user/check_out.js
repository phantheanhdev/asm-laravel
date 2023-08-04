function calculateTotals() {
    let subtotal = 0;
    const totalElements = document.querySelectorAll('.ckout_total_one');
    totalElements.forEach(element => {
        subtotal += parseFloat(element.textContent.replace(/[^0-9.-]+/g, ""));
    });

    // Định dạng tổng phụ thành tiền tệ có dấu phẩy
    const formattedSubtotal = subtotal.toLocaleString(undefined, { style: 'currency', currency: 'VND' });

    // Hiển thị tổng phụ đã tính vào phần tổng phụ
    const subtotalElement = document.getElementById('ckout_subtotal');
    subtotalElement.textContent = formattedSubtotal;

    // Hiển thị tổng cộng đã tính vào phần tổng cộng
    const grandTotalElement = document.getElementById('ckout_total');
    grandTotalElement.textContent = subtotal.toFixed(0); // Hiển thị giá trị số nguyên, không định dạng tiền tệ

    // Cập nhật giá trị của input ẩn với giá trị tổng cộng
    const inputTotalElement = document.getElementById('input_total');
    inputTotalElement.value = subtotal.toFixed(0); // Lưu giá trị số nguyên, không định dạng tiền tệ
}

// Gọi hàm tính tổng phụ và tổng cộng khi trang được tải hoàn tất
document.addEventListener('DOMContentLoaded', function () {
    calculateTotals();
});
