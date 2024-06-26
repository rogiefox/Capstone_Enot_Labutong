// search product
function searchCards() {
    const searchInput = document.getElementById('search-input').value.toLowerCase();
    const cards = document.querySelectorAll('.card-container');

    cards.forEach(card => {
        const productName = card.querySelector('.product-name').textContent.toLowerCase();
        const productDescription = card.querySelector('.product-description').textContent.toLowerCase();
        const productPrice = card.querySelector('.product-price').textContent.toLowerCase();

        if (productName.includes(searchInput) || productPrice.includes(searchInput) || productDescription.includes(searchInput)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

document.getElementById('search-input').addEventListener('input', searchCards);

// search table
function searchTable() {
    const searchInput = document.getElementById('search-input').value.toLowerCase();
    const rows = document.querySelectorAll('.product-row');
    
    rows.forEach(row => {
        const productName = row.querySelector('[name="ProductName"]').value.toLowerCase();
        const productDescription = row.querySelector('[name="ProductDescription"]').value.toLowerCase();
        const productPrice = row.querySelector('[name="ProductPrice"]').value.toLowerCase();
        const productCategory = row.querySelector('[name="ProductCategory"]').value.toLowerCase();
        const productType = row.querySelector('[name="ProductType"]').value.toLowerCase();
        const productCare = row.querySelector('[name="ProductCare"]').value.toLowerCase();

        if (
            productName.includes(searchInput) ||
            productDescription.includes(searchInput) ||
            productPrice.includes(searchInput) ||
            productCategory.includes(searchInput) ||
            productType.includes(searchInput) ||
            productCare.includes(searchInput)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}

document.getElementById('search-input').addEventListener('input', searchTable);
          