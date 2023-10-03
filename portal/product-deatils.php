<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Filter Example</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="./css/product-details.css">
        <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>

    <body>
        <div class="container">
            <button id="filterButton" class="filter-toggle-button" onclick="toggleFilter()">
                <!-- SVG icon for filter -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-adjustments-horizontal" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M14 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                    <path d="M4 6l8 0"></path>
                    <path d="M16 6l4 0"></path>
                    <path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                    <path d="M4 12l2 0"></path>
                    <path d="M10 12l10 0"></path>
                    <path d="M17 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                    <path d="M4 18l11 0"></path>
                    <path d="M19 18l1 0"></path>
                </svg>
            </button>
            <!-- Filter Buttons and Product Lists -->
            <div class="filter-container" style="display: none;">
                <div class="product-type-title"><b>Product Type</b></div>
                <button class="filter-button" onclick="showList('brand')">
                    <div class="button-text">Brand</div>
                </button>
                <button class="filter-button" onclick="showSlider('price')">
                    <div class="button-text">Price</div>
                </button>
                <button class="filter-button" onclick="showList('type4')">
                    <div class="button-text">Type4</div>
                </button>
                <button class="filter-button" onclick="showList('type5')">
                    <div class="button-text">Type5</div>
                </button>
                <button class="filter-button" onclick="showList('type6')">
                    <div class="button-text">Type6</div>
                </button>
                <!--button id="exitButton" class="exit-button" onclick="closeFilter()">

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button-->
            </div>

            <!-- Product Lists -->
            <div class="product-list-container brand" style="display: none;">
                <!-- Dummy list for BRAND -->
                <b>Product List for BRAND</b>
                <div class="list-item-container">Item 1</div>
                <div class="list-item-container">Item 2</div>
                <div class="list-item-container">Item 3</div>
                <div class="list-item-container">Item 4</div>
                <div class="list-item-container">Item 5</div>
                <div class="list-item-container">Item 6</div>
                <div class="list-item-container">Item 7</div>
                <div class="list-item-container">Item 8</div>
                <div class="list-item-container">Item 9</div>
                <div class="list-item-container">Item 10</div>
            </div>

            <div class="product-list-container price" style="display: none;">
                <!-- Dummy list for Price -->
                <p>Price Range</p>
                <div id="price-slider"></div>
                <div class="price-input-container">
                    <input type="text" class="price-input" id="minPrice" placeholder="Min">
                    <input type="text" class="price-input" id="maxPrice" placeholder="Max">
                </div>
                <div id="price-label">0 - 100</div>
            </div>

            <div class="product-list-container type4" style="display: none;">
                <!-- Dummy list for Type4 -->
                <p>Product List for Type4</p>
                <div class="list-item-container">Item 1</div>
            </div>

            <div class="product-list-container type5" style="display: none;">
                <!-- Dummy list for Type5 -->
                <p>Product List for Type5</p>
                <div class="list-item-container">Item 1</div>
                <div class="list-item-container">Item 2</div>
            </div>

            <div class="product-list-container type6" style="display: none;">
                <!-- Dummy list for Type6 -->
                <p>Product List for Type6</p>
                <div class="list-item-container">Item 1</div>
                <div class="list-item-container">Item 2</div>
                <div class="list-item-container">Item 3</div>
                <div class="list-item-container">Item 4</div>
                <div class="list-item-container">Item 5</div>
            </div>

        </div>
        <button id="toggle-sort-container">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sort-descending" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M4 6l9 0"></path>
                <path d="M4 12l7 0"></path>
                <path d="M4 18l7 0"></path>
                <path d="M15 15l3 3l3 -3"></path>
                <path d="M18 6l0 12"></path>
            </svg>
        </button>
        
        <div class="sort-container">
            <!-- <div class="sort-label">Sort by:</div> -->
            <div class="sort-options">
                <div class="sort-option" data-sort="price-asc">Sort By Price ↑</div>
                <div class="sort-option" data-sort="price-desc">Sort By Price ↓</div>
                <div class="sort-option" data-sort="popularity-asc">Sort By Popularity ↑</div>
                <div class="sort-option" data-sort="popularity-desc">Sort By Popularity ↓</div>
                <div class="sort-option" data-sort="arrival-asc">Sort By Arrival ↑</div>
                <div class="sort-option" data-sort="arrival-desc">Sort By Arrival ↓</div>
                <!-- Add more sorting options here -->
            </div>
        </div>

        <!-- new filter  -->
        
        <div id="containerProduct">
            <!-- JS rendered code -->
            <div id="containerD">
                <div class="slider">
                    <i class="fa-solid fa-angles-left fa-2x previous"></i>
                    <div class="img-container">
                    <img  src="./images/undefined6.png" alt="">
                    <img  src="./images/undefined6.png" alt="">
                    <img src="images/undefined6.png" alt="">
                    <img src="images/undefined6.png" alt="">
                    <img src="images/undefined6.png" alt="">
                    </div>
                    <i class="fa-solid fa-angles-right fa-2x next"></i>
                </div>

                <div id="productDetails" class="custom-scrollbar">
                    
                    <div id="productDetails" class="custom-scrollbar">
                        <h1>Unisex Silver-Toned Series 3 Smart Watch</h1>
                        <div class="button-container">
                            <button class="button1">ICB Choice</button>
                            <button class="button2">Customer choice</button>
                        </div>
                        <h4>Apple</h4>
                        <div id="details">
                            <h3>Rs 31999</h3>
                            <h3>About Product</h3>
                            <p>Low and high heart rate notifications. Emergency SOS. New Breathe watch faces. Automatic
                                workout detection. New yoga and hiking workouts. Advanced features for runners like
                                cadence
                                and pace alerts. New head-to-head competitions. Activity sharing with friends.
                                Personalized
                                coaching. Monthly challenges and achievement awards. Walkie-Talkie, make phone calls,
                                and
                                send messages. Listen to Apple Music and Apple Podcasts. Use Siri in all-new ways.
                                Silver
                                aluminum case. Built-in GPS, GLONASS, Galileo, and QZSS. S3 with dual-core processor. W2
                                Apple wireless chip. Barometric altimeter Capacity 8GB. Optical heart sensor. 1 Year
                                Manufacture Warranty</p>
                            <br>
                            <h3>Fetures</h3>
                            <p>Low and high heart rate notifications. Emergency SOS. New Breathe watch faces. Automatic
                                workout detection. New yoga and hiking workouts. Advanced features for runners like
                                cadence
                                and pace alerts. New head-to-head competitions. Activity sharing with friends.
                                Personalized
                                coaching. Monthly challenges and achievement awards. Walkie-Talkie, make phone calls,
                                and
                                send messages. Listen to Apple Music and Apple Podcasts. Use Siri in all-new ways.
                                Silver
                                aluminum case. Built-in GPS, GLONASS, Galileo, and QZSS. S3 with dual-core processor. W2
                                Apple wireless chip. Barometric altimeter Capacity 8GB. Optical heart sensor. 1 Year
                                Manufacture Warranty</p>
                            <br><br>
                            <p>Low and high heart rate notifications. Emergency SOS. New Breathe watch faces. Automatic
                                workout detection. New yoga and hiking workouts. Advanced features for runners like
                                cadence
                                and pace alerts. New head-to-head competitions. Activity sharing with friends.
                                Personalized
                                coaching. Monthly challenges and achievement awards. Walkie-Talkie, make phone calls,
                                and
                                send messages. Listen to Apple Music and Apple Podcasts. Use Siri in all-new ways.
                                Silver
                                aluminum case. Built-in GPS, GLONASS, Galileo, and QZSS. S3 with dual-core processor. W2
                                Apple wireless chip. Barometric altimeter Capacity 8GB. Optical heart sensor. 1 Year
                                Manufacture Warranty
                            </p>
                        </div>

                    </div>
                </div>
                            <div id="productPreview">
                                <h3>Product Preview</h3>
                                <img id="previewImg" src="images/undefined6.png">
                                <img id="previewImg" src="images/undefined6.png">
                                <img id="previewImg" src="images/undefined6.png">
                            </div>
                            <div class="button-container">
                                <button class="button1" id="refer-button">Refer Product</button>
                                <button class="button2">Pitch Product</button>
                            </div>
                            
                            <div class="popup" id="popup">
                                <div class="popup-content">
                                    <div class="popup-left">
                                        <h1>Smart Watch: IPX 6 Waterproof</h1>
                                        <div class="button-container">
                                            <button class="button1" id="refer-button">Refer Product</button>
                                            <button class="button2">Pitch Product</button>
                                        </div>
                                        <br><br><br>

                                        <div class="image-container">
                                            <img src="images/undefined6.png" alt="Image Description">
                                        </div>
                                    </div>
                                    <div class="popup-divider"></div>
                                    <div class="right-part">
                                        <h1>ICB Choice</h1>
                                        <h1>Customers Choice</h1>
                                        <div class="qr-code-container">
                                            <img class="qr-code" src="./images/QR CODE.png" alt="QR code">
                                            <p class="cta">Scan the QR code to learn more</p>
                                        </div>
                                        <div class="share-container">
                                            <div class="copy-icon">
                                                <!-- SVG icon for copy to clipboard -->
                                                <!-- You can replace this with your preferred SVG icon code -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-copy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M8 8m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z"></path>
                                                    <path d="M16 8v-2a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h2"></path>
                                                 </svg>
                                            </div>
                                            <button id="share-button">Share</button>
                                            <p><a class="share-link-popup" href="https://careforbharatoro/pro?pid=123&cid=123">https://careforbharatoro/pro3</a></p>
                                        </div>
                                        
                                    </div>
                                    <button class="popup-exit" id="popup-exit-button">X</button>
                                    
                                </div>
                            </div>
                            
                            
                            
            </div>
        </div>


        <script>
            function showList(listType) {
                // Hide all product lists
                const productLists = document.querySelectorAll('.product-list-container');
                productLists.forEach(list => {
                    list.style.display = 'none';
                });

                // Show the selected product list
                const selectedList = document.querySelector(`.product-list-container.${listType}`);
                selectedList.style.display = 'block';

                // Expand the container to a maximum of 500px
                const container = document.querySelector('.container');
                container.classList.add('expanded');
            }

            function showSlider(listType) {
                // Hide all product lists except for Price
                const productLists = document.querySelectorAll('.product-list-container');
                productLists.forEach(list => {
                    if (list.classList.contains('price')) {
                        list.style.display = 'block';
                    } else {
                        list.style.display = 'none';
                    }
                });

                // Create a price range slider
                const priceSlider = document.getElementById('price-slider');
                $(priceSlider).slider({
                    range: true,
                    min: 0,
                    max: 100,
                    values: [0, 100],
                    slide: function (event, ui) {
                        const priceLabel = document.getElementById('price-label');
                        priceLabel.textContent = `${ui.values[0]} - ${ui.values[1]}`;
                    }
                });

                // Expand the container to a maximum of 500px
                const container = document.querySelector('.container');
                container.classList.add('expanded');
            }

        </script>
        <script>
            $(document).ready(function() {
            $("#productDetails").on("mouseenter", function() {
            $(this).addClass("scroll-active");
            });

            $("#productDetails").on("mouseleave", function() {
            $(this).removeClass("scroll-active");
            });
            });

        </script>
        <script>
            const next = document.querySelector(".next");
            const prev = document.querySelector(".previous");

            const numImg = document.querySelectorAll(".img-container img").length;
            let currImg = 1;
            let timeoutID;

            next.addEventListener("click", () => {
                currImg++;
                clearTimeout(timeoutID);
                updateImage();
            });

            prev.addEventListener("click", () => {
                currImg--;
                clearTimeout(timeoutID);
                updateImage();
            });

            const imgcontainer = document.querySelector(".img-container");

            function updateImage() {
                if (currImg > numImg) {
                    currImg = 1;
                } else if (currImg < 1) {
                    currImg = numImg;
                }
                imgcontainer.style.transform = `translateX(-${(currImg - 1) * 100}%)`; // Adjust the percentage based on the number of images

                timeoutID = setTimeout(() => {
                    currImg++;
                    updateImage();
                }, 3000); // 3 seconds per slide
            }

            updateImage();

        </script>
        <script>
            function toggleFilter() {
                const filterContainer = document.querySelector('.filter-container');
                if (filterContainer.style.display === 'none' || filterContainer.style.display === '') {
                    filterContainer.style.display = 'block';
                } else {
                    filterContainer.style.display = 'none';
                }
                
                // Hide all product lists when closing the filter
                const productLists = document.querySelectorAll('.product-list-container');
                productLists.forEach(list => {
                    list.style.display = 'none';
                });
            }

            function closeFilter() {
                const filterContainer = document.querySelector('.filter-container');
                filterContainer.style.display = 'none';
                
                // Hide all product lists when closing the filter
                const productLists = document.querySelectorAll('.product-list-container');
                productLists.forEach(list => {
                    list.style.display = 'none';
                });
            }



        </script>
        <!-- POP UP START -->
        <script>
            // JavaScript to show and hide the popup
            const referButton = document.getElementById("refer-button");
            const popup = document.getElementById("popup");
            const popupExitButton = document.getElementById("popup-exit-button");

            referButton.addEventListener("click", () => {
                popup.style.display = "block";
            });

            popup.addEventListener("click", (event) => {
                if (event.target === popup) {
                    popup.style.display = "none";
                }
            });

            popupExitButton.addEventListener("click", () => {
                popup.style.display = "none";
            });

        </script>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const toggleButton = document.getElementById("toggle-sort-container");
                    const sortContainer = document.querySelector(".sort-container");
                
                    toggleButton.addEventListener("click", function() {
                        sortContainer.classList.toggle("open");
                    });
                });
            </script>

    </body>

    </html>

</body>

</html>