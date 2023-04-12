jQuery(document).ready(function ($) {
    $('.gallery__wrap').slick({
        slidesToShow: 4,
        autoplay: true,
        variableWidth: true,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        speed: 500,
        useTransform: true,
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    adaptiveHeight: true
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});

// &__list {
//     display: flex;
//     align-items: flex-start;
//     // flex-wrap: wrap;
//     // width: 200%;
//     // width: 100%;
//     overflow: hidden;
//     // overflow-x: scroll;
//     // overflow-y: hidden;

//     @media screen and (max-width:850px) {
//         width: 100%;
//         justify-content: center;
//     }

//     // @media screen and (max-width:715px) {
//     //     width: 150%;
//     // }

//     & .slick-cloned {
//         // transform: translateY(-7rem);

//         & .gallery__item {
//             opacity: 1 !important;
//             transform: translate(0, 0) !important;
//         }
//     }
// }