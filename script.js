// Simulated array of news articles
const newsArticles = [
    { title: "News Article 1", content: "Content of Article 1" },
    { title: "News Article 2", content: "Content of Article 2" },
    // Add more articles as needed
];

const slider = document.querySelector('.slider');

// Function to populate the slider with news articles
function populateSlider() {
    slider.innerHTML = '';
    newsArticles.forEach(article => {
        const slide = document.createElement('div');
        slide.classList.add('slide');
        slide.innerHTML = `
      <h2>${article.title}</h2>
      <p>${article.content}</p>
    `;
        slider.appendChild(slide);
    });
}

populateSlider();

// Slider functionality
let slideIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

function showSlide(index) {
    if (index < 0) {
        slideIndex = totalSlides - 1;
    } else if (index >= totalSlides) {
        slideIndex = 0;
    }
    const offset = -slideIndex * 100;
    slider.style.transform = `translateX(${offset}%)`;
}

// Automatic sliding every 5 seconds (adjust as needed)
setInterval(() => {
    slideIndex++;
    showSlide(slideIndex);
}, 5000);
