document.getElementById('filter_company_id').addEventListener('change',
    function () {
        let company_id = this.value || this.options[this.selectedIndex].value;
        window.location.href = window.location.href.split('?')[0] + '?company_id=' + company_id;
    })

document.addEventListener('DOMContentLoaded', function () {
    const successMsg = document.getElementById('success-msg');

    if (successMsg) {
        setTimeout(function () {
            successMsg.style.opacity = '0';
            setTimeout(function () {
                successMsg.style.display = 'none';
            }, 500);
        }, 3000);
    }
});