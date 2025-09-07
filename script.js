document.addEventListener('DOMContentLoaded', () => {
    const okButton = document.getElementById('okButton');

    okButton.addEventListener('click', () => {
        // ボタンに 'clicked' クラスを追加して色を変更
        okButton.classList.add('clicked');
    });
});