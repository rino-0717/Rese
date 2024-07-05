document.addEventListener('DOMContentLoaded', function () {
    const unlikeButtons = document.querySelectorAll('.unlike-button');

    unlikeButtons.forEach(button => {
        button.addEventListener('click', function () {
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
                    shopCard.remove();
                } else {
                    alert('Failed to unlike.');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
});