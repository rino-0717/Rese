document.addEventListener('DOMContentLoaded', function () {
    const likeButtons = document.querySelectorAll('.like_btn');

    likeButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault(); // デフォルトのフォーム送信を防ぐ
            const shopCard = this.closest('.shop-card');
            const shopId = shopCard.getAttribute('data-shop-id');

            fetch(`/shop/${shopId}/like`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ shop_id: shopId })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const img = this.querySelector('img');
                    if (data.liked) {
                        img.src = '/images/like_red.png'; // 赤いハートの画像に切り替え
                    } else {
                        img.src = '/images/like.png'; // 元の画像に戻す
                    }
                } else if (data.redirect) {
                    window.location.href = data.redirect;
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
});