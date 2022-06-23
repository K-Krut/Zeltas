let slideIndex = 1;

showDivs(slideIndex);

function plusDivs(num) {
    showDivs(slideIndex += num);
}

function showDivs(num) {
    const itemSlide = document.getElementsByClassName("item-slide");

    if (num > itemSlide.length) {

        slideIndex = 1;

    } else if (num < 1) {

        slideIndex = itemSlide.length
    }

    for (let i = 0; i < itemSlide.length; ++i) {

        itemSlide[i].style.display = "none";
    }

    itemSlide[slideIndex - 1].style.display = "block";
}
