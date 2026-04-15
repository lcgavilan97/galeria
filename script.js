// script.js - JavaScript for carousel and data loading

document.addEventListener('DOMContentLoaded', function() {
    const carouselInner = document.getElementById('carousel-inner');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const indicators = document.getElementById('indicators');

    let characters = [];
    let currentIndex = 0;

    // Fetch characters data
    fetch('get_characters.php')
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert('Error: ' + data.error);
                return;
            }
            characters = data;
            renderCarousel();
            renderIndicators();
        })
        .catch(error => console.error('Error fetching data:', error));

    function renderCarousel() {
        carouselInner.innerHTML = '';
        characters.forEach((char, index) => {
            const item = document.createElement('div');
            item.className = 'carousel-item';
            item.innerHTML = `
                <img src="${char.imagen}" alt="${char.nombre}">
                <h2>${char.nombre}</h2>
                <p>${char.descripcion}</p>
            `;
            carouselInner.appendChild(item);
        });
        updateCarousel();
    }

    function renderIndicators() {
        indicators.innerHTML = '';
        characters.forEach((_, index) => {
            const indicator = document.createElement('div');
            indicator.className = 'indicator';
            indicator.addEventListener('click', () => goToSlide(index));
            indicators.appendChild(indicator);
        });
        updateIndicators();
    }

    function updateCarousel() {
        const offset = -currentIndex * 100;
        carouselInner.style.transform = `translateX(${offset}%)`;
    }

    function updateIndicators() {
        const indicatorElements = document.querySelectorAll('.indicator');
        indicatorElements.forEach((ind, index) => {
            ind.classList.toggle('active', index === currentIndex);
        });
    }

    function goToSlide(index) {
        currentIndex = index;
        updateCarousel();
        updateIndicators();
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % characters.length;
        updateCarousel();
        updateIndicators();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + characters.length) % characters.length;
        updateCarousel();
        updateIndicators();
    }

    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    // Auto-slide every 5 seconds
    setInterval(nextSlide, 5000);
});