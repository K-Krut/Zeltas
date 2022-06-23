<script>
    $(document).ready(function () {
        $(".product-box").hover(
            function () {
                $(this).addClass('product-bg-appear');
                $(this).removeClass('product-bg-fade');
                $(this).find('.details').stop(true, true).css({'opacity': '1'})
                $(this).find('.product-title').stop(true, true).css({'opacity': '.7'})
            },
            function () {
                $(this).addClass('product-bg-fade');
                $(this).removeClass('product-bg-appear');
                $(this).find('.details').stop(true, true).css({'opacity': '.2'})
                $(this).find('.product-title').stop(true, true).css({'opacity': '.2'})
            }
        );
    });
</script>
<script>
    let slideIndex = 1;

    showDivs(slideIndex);

    function plusDivs(num) {
        showDivs(slideIndex += num);
    }

    function showDivs(num) {
        var itemSlide = document.getElementsByClassName("item-slide");

        if (num > itemSlide.length) {
            slideIndex = 1
        } else if (num < 1) {
            slideIndex = itemSlide.length
        }

        for (let i = 0; i < itemSlide.length; ++i) {
            itemSlide[i].style.display = "none";
        }

        itemSlide[slideIndex - 1].style.display = "block";
    }
</script>
<script>
    const header = document.querySelector('header');
    const sectionIntro = document.querySelector('.Intro-product-slider');

    const sectionObserved = new IntersectionObserver(
        function (entries, sectionObserved) {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    header.classList.add('nav-scrolled');
                } else {
                    header.classList.remove('nav-scrolled')
                }
            })
        }, {
            rootMargin: '-200px 0px 0px 0px'
        }
    );

    sectionObserved.observe(sectionIntro);

</script>
