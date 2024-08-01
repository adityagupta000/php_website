const books = [
    { title: 'The Hobbit', author: 'J.R.R Tolkien', price: '₹750.00', imgSrc: 'photo/1.jpg', description: 'The Hobbit is a fantasy novel about Bilbo Baggins, a hobbit who embarks on a journey with a group of dwarves to reclaim their mountain home from the dragon Smaug. It is a tale of adventure, bravery, and the discovery of one\'s own potential.' },
    { title: 'The Alchemist', author: 'Paulo Coelho', price: '₹900.00', imgSrc: 'photo/2.jpg', description: 'The Alchemist is a story about Santiago, a shepherd who dreams of finding treasure in the Egyptian pyramids. Along his journey, he learns profound lessons about listening to his heart, recognizing opportunity, and following his dreams, leading to unexpected discoveries about himself.' },
    { title: 'Harry Potter', author: 'J.K Rowling', price: '₹1050.00', imgSrc: 'photo/3.jpg', description: 'Harry Potter follows the journey of a young wizard, Harry, who discovers his magical heritage on his eleventh birthday. He attends Hogwarts School of Witchcraft and Wizardry, where he makes friends, faces dangers, and learns about his destiny to defeat the dark wizard Voldemort.' },
    { title: 'The Echo Wife', author: 'Sarah Gailey', price: '₹1200.00', imgSrc: 'photo/4.jpg', description: 'The Echo Wife is a science fiction thriller about Evelyn Caldwell, a brilliant geneticist, and her clone, Martine. When Evelyn discovers that her husband has been having an affair with Martine, their lives spiral into chaos, revealing dark secrets and exploring themes of identity and betrayal.' },
    { title: 'Snow Crash', author: 'Neal Stephenson', price: '₹1350.00', imgSrc: 'photo/5.jpg', description: 'Snow Crash is a cyberpunk novel set in a near-future dystopian world. It follows the adventures of Hiro Protagonist, a hacker and pizza delivery driver, as he uncovers a virtual drug called Snow Crash that threatens to destroy both the digital and physical worlds. It is a blend of technology, history, and adventure.' },
];

let cart = [];

document.addEventListener('DOMContentLoaded', () => {
    const bookCardsContainer = document.getElementById('book-cards');
    books.forEach((book, index) => {
        const card = document.createElement('div');
        card.className = 'card card-width';
        card.innerHTML = `
            <img src="${book.imgSrc}" class="card-img-top card-img-width" alt="${book.title}">
            <div class="card-body">
                <h5 class="card-title mt-2">${book.title}</h5>
                <p class="card-text mt-2"><strong>Author:</strong> ${book.author}</p>
                <p class="card-text"><strong>Price:</strong> ${book.price}</p>
                <button class="btn btn-primary mt-3 view-details" data-index="${index}">View Details</button>
            </div>
        `;
        bookCardsContainer.appendChild(card);
    });

    document.querySelectorAll('.view-details').forEach(button => {
        button.addEventListener('click', () => {
            const book = books[button.dataset.index];
            document.getElementById('book-details-image').src = book.imgSrc;
            document.getElementById('book-details-title').textContent = book.title;
            document.getElementById('book-details-author').textContent = `Author: ${book.author}`;
            document.getElementById('book-details-price').textContent = `Price: ${book.price}`;
            document.getElementById('book-details-description').textContent = book.description;
            $('#bookDetailsModal').modal('show');
        });
    });
});

function addToCart(book) {
    const existingItem = cart.find(item => item.title === book.title);
    existingItem ? existingItem.quantity++ : cart.push({ ...book, quantity: 1 });
    updateCartUI();
}

function updateCartUI() {
    const cartCount = document.getElementById('cart-count');
    const cartTotal = document.getElementById('cart-total');
    const cartItemsContainer = document.getElementById('cart-items');

    const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
    const totalPrice = cart.reduce((total, item) => total + parseFloat(item.price.slice(1)) * item.quantity, 0).toFixed(2);

    cartCount.textContent = totalItems;
    cartTotal.textContent = `₹${totalPrice}`;

    cartItemsContainer.innerHTML = cart.map(item => `
        <tr>
            <td><img src="${item.imgSrc}" alt="${item.title}" style="max-width: 50px;"></td>
            <td>${item.title}</td>
            <td>${item.author}</td>
            <td>${item.price}</td>
            <td>${item.quantity}</td>
            <td>₹${(parseFloat(item.price.slice(1)) * item.quantity).toFixed(2)}</td>
            <td><button class="btn btn-outline-danger " onclick="removeFromCart('${item.title}')">Remove</button></td>
        </tr>
    `).join('');
}

function removeFromCart(title) {
    cart = cart.filter(item => item.title !== title);
    updateCartUI();
}

function addToCartFromModal() {
    const bookTitle = document.getElementById('book-details-title').textContent;
    const book = books.find(book => book.title === bookTitle);
    addToCart(book);
    $('#bookDetailsModal').modal('hide');
}