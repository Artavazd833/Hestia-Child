$(document).ready(function(){
  
    $('#slider-costumer').slick({
            prevArrow: `<button id="prev" type="button" class="slick-button d-flex align-items-center justify-content-center"  aria-hidden="true"> <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20" viewBox="0 0 12 20" fill="none"> 
              <path d = "M11.4207 2.49362L11.6159 2.31123L11.421 2.12853L10.2889 1.06759L10.1183 0.907639L9.94732 1.0673L0.579352 9.8173L0.383749 10L0.579352 10.1827L9.94732 18.9327L10.1178 19.0919L10.2885 18.9329L11.4205 17.8774L11.6163 17.6948L11.4207 17.5119L3.38567 10.0001L11.4207 2.49362Z"
            fill = "#FF8A16"
            stroke = "#FF8A16"
            stroke - width = "0.5" / ></path>
            </svg> </button > `,
        
            nextArrow: `<button id="next" type="button" class="slick-button d-flex align-items-center justify-content-center"  aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20" viewBox="0 0 12 20" fill="none">
        <path d="M0.579334 17.5064L0.384099 17.6888L0.579044 17.8715L1.71108 18.9324L1.88174 19.0924L2.05268 18.9327L11.4206 10.1827L11.6163 10L11.4206 9.8173L2.05268 1.0673L1.88218 0.908052L1.71155 1.06715L0.579515 2.12262L0.383663 2.30522L0.579269 2.48809L8.61433 9.99994L0.579334 17.5064Z" fill="#FF8A16" stroke="#FF8A16" stroke-width="0.5"/>
        </svg>
            </button>`,
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: false,
            responsive: [{
                breakpoint: 992,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              },
              {
                breakpoint: 350,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
            ]
          });
})
