document.addEventListener('DOMContentLoaded', function() {
    window.toggleLike = function(shopId, isLiked) {
        const url = isLiked ? '/unlike' : '/like';
        fetch(url, {
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
                const icon = document.querySelector(`button[data-shop-id="${shopId}"] i`);
                if (isLiked) {
                    icon.classList.remove('fas', 'fa-heart');
                    icon.classList.add('far', 'fa-heart');
                    icon.setAttribute('onclick', `toggleLike(${shopId}, false)`);
                } else {
                    icon.classList.remove('far', 'fa-heart');
                    icon.classList.add('fas', 'fa-heart');
                    icon.setAttribute('onclick', `toggleLike(${shopId}, true)`);
                }
            }
        })
        .catch(error => console.error('Error:', error));
    }
});