let likeArticle = document.querySelector('.js-like-article');

likeArticle.addEventListener('click', (e) => {
    e.preventDefault();
    let link = e.currentTarget;
    link.classList.toggle('fa-heart-o');
    link.classList.toggle('fa-heart');

    fetch(link.href, {method: 'POST'})
        .then((res) => {

            return res.json();
        })
        .then((data) => {
            document.querySelector('.js-like-article-count').innerHTML = data.hearts;
        })
});