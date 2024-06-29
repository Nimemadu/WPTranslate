 document.addEventListener('DOMContentLoaded', function () {
    const languageSelector = document.getElementById('language');
    languageSelector.addEventListener('change', function () {
        document.getElementById('language-form').submit();
    });
});
