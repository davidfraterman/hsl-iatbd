window.onload = () => {
    // menu
    const hamburger = document.getElementById('js--header__hamburger');
    const mobileMenu = document.getElementById('js--header__mobileLinks');
    const closeMobileMenu = document.getElementById('js--header__mobileLinks--close');

    hamburger.addEventListener('click', () => {
        mobileMenu.classList.toggle('header__mobileLinks--active');
    });

    closeMobileMenu.addEventListener('click', () => {
        mobileMenu.classList.remove('header__mobileLinks--active');
    });

    // if route is /
    if (window.location.pathname === '/') {

        // zoeken en filters
        let productsList = document.getElementsByClassName('allProducts__listItem');
        const search = document.getElementById('js--allProducts__searchBox');
        const categoryFilter = document.getElementById('js--allProducts__categoryFilter');
        const searchBtn = document.getElementById('js--allProducts__searchBtn');

        let productsArray;

        searchBtn.addEventListener('click', () => {

            productsArray = [];

            for (let i = 0; i < productsList.length; i++) {

                // bij zoekbox match en categorie match
                if (productsList[i].innerHTML.toLocaleLowerCase()
                    .includes(search.value.toLocaleLowerCase()) &&
                    productsList[i].dataset.category === categoryFilter.value) {
                    productsArray.push(productsList[i].dataset.productId);
                }

                // bij gevulde zoekbox en geen categorie
                if (categoryFilter.value == 'Alles' && productsList[i].innerHTML.toLocaleLowerCase()
                    .includes(search.value.toLocaleLowerCase())) {
                    productsArray.push(productsList[i].dataset.productId);
                }

                // bij lege zoekbox en matching categorie
                if (categoryFilter.value == productsList[i].dataset.category && search.value == '') {
                    productsArray.push(productsList[i].dataset.productId);
                }
            
                // bij geen invoer alles laten zien
                if (search.value == '' && categoryFilter.value == 'Alles') {
                    console.log('alles');
                    productsArray.push(productsList[i].dataset.productId);
                }
                
            }

            showOrHideProducts();
        });

        const showOrHideProducts = () => {
            for (let i = 0; i < productsList.length; i++) {
                if (productsArray.includes(productsList[i].dataset.productId)) {
                    productsList[i].style.display = 'block';
                } else {
                    productsList[i].style.display = 'none';
                }
            }
        }
        
    }
}

