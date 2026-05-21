// 「同意する」のチェックボックスを取得
const agreeCheckbox = document.getElementById("agree");
// 送信ボタンを取得
const submitBtn = document.getElementById("submit-btn");
const registerBtn = document.querySelector('.register-btn');

// チェックボックスをクリックした時
agreeCheckbox.addEventListener("click", () => {
    // チェックされている場合
    if (agreeCheckbox.checked === true) {
        registerBtn.classList.add('active');
        submitBtn.disabled = false; // disabledを外す
    }
    // チェックされていない場合
    else {
        registerBtn.classList.remove('active');
        submitBtn.disabled = true; // disabledを付与
    }
});