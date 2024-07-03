document.addEventListener('DOMContentLoaded', function () {
    const likeButtons = document.querySelectorAll('.like-button');

    likeButtons.forEach(button => {
        button.addEventListener('click', function () {
            const shopId = this.getAttribute('data-shop-id');
            const icon = this.querySelector('i');
            const isLiked = icon.classList.contains('fa-heart');

            fetch(`/like/${shopId}`, {
                method: isLiked ? 'DELETE' : 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'liked') {
                    icon.classList.remove('fa-heart-o');
                    icon.classList.add('fa-heart');
                } else if (data.status === 'unliked') {
                    icon.classList.remove('fa-heart');
                    icon.classList.add('fa-heart-o');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
});