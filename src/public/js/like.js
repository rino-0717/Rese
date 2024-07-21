document.addEventListener('DOMContentLoaded', function() {
    const likeButtons = document.querySelectorAll('.like_btn');

    likeButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const shopCard = this.closest('.shop-card');
            const shopId = shopCard.getAttribute('data-shop-id');
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            fetch(`/like/${shopId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': token
                },
                body: JSON.stringify({ shop_id: shopId })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    const img = this.querySelector('img');
                    if (data.liked) {
                        img.src = '/images/liked.png'; // 赤いハートの画像に変更
                    } else {
                        img.src = '/images/like.png'; // 元のハートの画像に変更
                    }
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
});