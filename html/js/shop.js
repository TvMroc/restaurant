function shopSearch(productId) {
    const inputValue = document.getElementById('search').value.toLowerCase();
    const shopItems = document.getElementsByClassName(productId);
    for (var i = 0; i < shopItems.length; i++) {
        var shopItem = shopItems[i];
        var itemText = shopItem.textContent.toLowerCase();

        if (itemText.includes(inputValue)) {
            shopItem.style.display = 'unset';
        } else {
            shopItem.style.display = 'none';
        }
    }
}