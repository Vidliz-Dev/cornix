<?php 
// blank--title-subtitle-btn
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'button_link'     => $button_link,
'button_text'     => $button_text,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<?php 
// wp_enqueue_script("script-id");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>



<section class="banner block pt-0 mb-50">    
    <div class="container">
        <div class="banner__wrapper rounded bg-primary">
        
            <div class="row">
                <div class="banner__image-wrap col-12 col-lg-5 d-none d-lg-flex position-relative">               
                    <div class="banner__image">
                        <svg class="shadow" width="575" height="462" viewBox="0 0 575 462" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="115.851" height="115.851" rx="17.5812" transform="matrix(-0.945567 0.325426 0.325426 0.945567 541.328 289.922)" fill="#1B59B6"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M477.124 348.909C476.284 348.848 475.442 349.009 474.684 349.376C473.925 349.743 473.278 350.304 472.808 350.999C472.337 351.695 472.061 352.501 472.007 353.335C471.954 354.169 472.124 355.001 472.502 355.745C477.944 366.48 487.919 386.151 493.214 396.592C493.58 397.315 494.129 397.93 494.807 398.379C495.484 398.828 496.269 399.095 497.083 399.154C497.898 399.214 498.715 399.064 499.457 398.719C500.198 398.373 500.838 397.845 501.316 397.184C505.923 390.803 512.83 381.236 516.337 376.377C516.608 376.002 516.792 375.573 516.878 375.121C516.964 374.668 516.948 374.203 516.833 373.759C516.718 373.314 516.505 372.9 516.211 372.547C515.916 372.194 515.547 371.909 515.128 371.714C509.626 369.146 498.667 364.03 491.128 360.51C490.95 360.426 490.81 360.28 490.736 360.099C490.662 359.917 490.659 359.715 490.728 359.531C490.797 359.347 490.932 359.195 491.107 359.104C491.283 359.014 491.485 358.991 491.676 359.041C500.644 361.41 514.38 365.037 521.111 366.815C522.373 367.149 523.692 367.219 524.985 367.024C526.279 366.828 527.519 366.369 528.629 365.677C531.444 363.92 535.504 361.387 539.117 359.132C539.683 358.78 540.123 358.259 540.375 357.646C540.627 357.032 540.678 356.356 540.52 355.715C540.362 355.073 540.004 354.498 539.497 354.073C538.989 353.647 538.358 353.391 537.694 353.343C522.187 352.208 491.84 349.987 477.124 348.909Z" fill="white"/>
                            <rect width="124.767" height="124.767" rx="25" transform="matrix(-0.945567 0.325426 0.325426 0.945567 111.662 0.686523)" fill="#1B59B6"/>
                            <path d="M44.0095 64.02C47.5452 60.93 51.5235 58.2465 55.8768 56.0947C55.9558 56.0546 56.0507 56.0681 56.1163 56.1317C56.9781 56.9683 57.9912 58.0925 58.7339 58.992C63.4497 56.7911 68.3592 55.3364 73.4117 54.6431C73.5379 53.4613 73.8044 51.9828 74.0739 50.811C74.0951 50.7244 74.1673 50.6614 74.2546 50.6494C79.0741 50.0805 83.8721 50.1637 88.5238 50.8307C88.5639 50.8355 88.6018 50.8519 88.6317 50.8791C100.639 60.8479 106.514 72.3016 108.944 84.6119C108.957 84.6719 108.94 84.7378 108.905 84.787C104.609 90.4469 100.015 94.4713 95.2748 97.6411C95.1988 97.6913 95.1012 97.687 95.0277 97.6339C93.2931 96.3134 91.6653 94.8613 90.1674 93.2709C90.0793 93.1779 90.0939 93.0322 90.195 92.9552C91.7449 91.7754 93.1682 90.4751 94.4959 89.0842C94.6006 88.9729 94.5571 88.7889 94.4149 88.7368C94.0036 88.5843 93.5892 88.4216 93.1893 88.2519C93.1168 88.2207 93.0328 88.2346 92.9734 88.2853C83.8876 96.1958 72.5123 99.5663 60.7077 97.8454C60.6295 97.8326 60.5516 97.8669 60.5052 97.9331C60.2622 98.2934 60.0041 98.658 59.7398 99.0107C59.6491 99.1318 59.7103 99.3105 59.8586 99.3469C61.7351 99.8079 63.6317 100.105 65.5759 100.247C65.7025 100.256 65.7925 100.374 65.7691 100.5C65.3582 102.653 64.7843 104.757 64.0719 106.803C64.0424 106.889 63.9604 106.947 63.8693 106.946C58.1425 106.878 52.0975 106.006 45.4111 103.6C45.3524 103.578 45.3062 103.534 45.2839 103.477C39.8418 90.0245 39.8583 76.9336 43.9489 64.1211C43.9559 64.0803 43.9787 64.0458 44.0095 64.02ZM85.5937 83.5962C88.7571 82.6589 90.5032 78.9824 89.4464 75.4157C88.3896 71.849 84.9732 69.702 81.7591 70.6543C78.52 71.614 76.8067 75.3087 77.9066 78.8348C78.9634 82.4016 82.38 84.5485 85.5937 83.5962ZM64.2604 89.9172C67.4237 88.9799 69.1698 85.3034 68.113 81.7366C67.0562 78.17 63.6397 76.023 60.4258 76.9752C57.1866 77.935 55.4734 81.6296 56.5731 85.1558C57.6299 88.7226 61.0211 90.877 64.2604 89.9172Z" fill="white"/>
                            <rect width="204.014" height="130.123" rx="30.0837" transform="matrix(-0.940615 0.339475 0.339475 0.940615 472.971 -7.58691)" fill="white"/>
                            <path d="M493.401 61.1804L309.751 124.763" stroke="#A5A5A5" stroke-width="0.589877" stroke-dasharray="1.18 2.95"/>
                            <rect width="0.724414" height="42.4996" rx="0.362207" transform="matrix(0.939801 -0.341723 -0.341723 -0.939801 344.575 128.84)" fill="#A5A5A5"/>
                            <rect width="10.2952" height="28.3944" rx="1.76963" transform="matrix(0.939801 -0.341723 -0.341723 -0.939801 337.674 124.115)" fill="#12FF71"/>
                            <rect width="0.724414" height="50.959" rx="0.362207" transform="matrix(0.939801 -0.341723 -0.341724 -0.9398 409.198 128.537)" fill="#A5A5A5"/>
                            <rect width="10.2952" height="22.7734" rx="1.76963" transform="matrix(0.939802 -0.341719 -0.341727 -0.939799 403.629 126.607)" fill="#12FF71"/>
                            <rect width="0.724414" height="50.959" rx="0.362207" transform="matrix(-0.939801 0.341723 0.341723 0.939801 423.762 56.3962)" fill="#A5A5A5"/>
                            <rect width="10.2952" height="22.7734" rx="1.76963" transform="matrix(-0.939801 0.341723 0.341723 0.939801 429.331 58.3257)" fill="#12FF71"/>
                            <rect width="0.724414" height="56.0365" rx="0.362207" transform="matrix(0.939801 -0.341723 -0.341723 -0.939801 370.483 138.193)" fill="#A5A5A5"/>
                            <rect width="10.2952" height="35.0034" rx="1.76963" transform="matrix(0.939801 -0.341723 -0.341723 -0.939801 363.972 134.54)" fill="#12FF71"/>
                            <rect width="0.724414" height="56.0365" rx="0.362207" transform="matrix(-0.939801 0.341723 0.341723 0.939801 462.475 46.739)" fill="#A5A5A5"/>
                            <rect width="10.2952" height="35.0034" rx="1.76963" transform="matrix(-0.939801 0.341723 0.341723 0.939801 468.986 50.3923)" fill="#12FF71"/>
                            <rect width="0.724414" height="47.1936" rx="0.362207" transform="matrix(0.939801 -0.341723 -0.341723 -0.939801 387.505 123.9)" fill="#A5A5A5"/>
                            <rect width="10.2952" height="16.6059" rx="1.76963" transform="matrix(0.939802 -0.341718 -0.341728 -0.939799 374.565 102.573)" fill="#FF5353"/>
                            <rect width="0.724414" height="47.1936" rx="0.362207" transform="matrix(-0.939801 0.341723 0.341723 0.939801 445.457 61.0298)" fill="#A5A5A5"/>
                            <rect width="10.2952" height="16.6059" rx="1.76963" transform="matrix(-0.939802 0.341718 0.341728 0.939799 458.396 82.3567)" fill="#FF5353"/>
                            <rect width="0.724414" height="40.7619" rx="0.362207" transform="matrix(0.939799 -0.341724 -0.341723 -0.939802 425.537 120.221)" fill="#A5A5A5"/>
                            <rect width="10.2952" height="9.20952" rx="1.76963" transform="matrix(0.939798 -0.341726 -0.34172 -0.939803 412.298 98.0654)" fill="#FF5353"/>
                            <rect width="274.301" height="167.807" rx="44.9397" transform="matrix(-0.938511 0.34525 0.34525 0.938511 266.016 221)" fill="white"/>
                            <g filter="url(#filter0_d_248_1353)">
                            <path d="M273.258 302.162C273.981 301.046 275.472 300.728 276.588 301.451C277.704 302.173 278.023 303.664 277.3 304.78L273.258 302.162ZM257.769 315.07L257.246 317.42L257.769 315.07ZM74.6174 379.581L76.9773 380.057L74.6174 379.581ZM49.1676 377.444C48.2144 376.517 48.1932 374.992 49.1202 374.039C50.0471 373.086 51.5713 373.065 52.5245 373.992L49.1676 377.444ZM277.3 304.78C275.734 307.197 272.942 310.694 269.56 313.421C266.272 316.071 261.855 318.445 257.246 317.42L258.292 312.72C260.673 313.25 263.549 312.081 266.538 309.672C269.432 307.339 271.9 304.26 273.258 302.162L277.3 304.78ZM257.246 317.42C255.68 317.072 254.126 316.186 252.679 315.134C251.2 314.059 249.656 312.677 248.1 311.139C244.99 308.067 241.644 304.181 238.444 300.432C235.208 296.639 232.132 293.001 229.461 290.268C228.126 288.902 226.956 287.83 225.973 287.101C225.484 286.738 225.084 286.492 224.768 286.339C224.614 286.263 224.495 286.218 224.41 286.192C224.326 286.166 224.29 286.164 224.297 286.165L224.653 281.363C226.185 281.477 227.646 282.346 228.843 283.234C230.123 284.184 231.497 285.463 232.904 286.902C235.718 289.781 238.922 293.575 242.107 297.306C245.328 301.081 248.544 304.809 251.484 307.714C252.952 309.165 254.304 310.362 255.511 311.24C256.751 312.141 257.673 312.583 258.292 312.72L257.246 317.42ZM224.297 286.165C224.347 286.168 224.561 286.16 224.792 286.005C224.993 285.87 225.025 285.745 224.98 285.845C224.856 286.124 224.71 286.828 224.711 288.179C224.712 290.802 225.236 294.55 225.85 298.993C226.449 303.339 227.114 308.23 227.3 312.847C227.484 317.417 227.218 322.02 225.763 325.689L221.287 323.915C222.359 321.21 222.666 317.437 222.489 313.041C222.314 308.694 221.684 304.031 221.08 299.651C220.489 295.368 219.898 291.217 219.896 288.182C219.895 286.704 220.024 285.14 220.581 283.887C220.877 283.222 221.351 282.515 222.112 282.005C222.902 281.476 223.793 281.299 224.653 281.363L224.297 286.165ZM225.763 325.689C224.402 329.124 222.583 331.58 220.098 332.696C217.536 333.847 214.932 333.285 212.715 332.199C210.514 331.12 208.355 329.369 206.364 327.524C204.361 325.666 202.362 323.553 200.551 321.688L204.005 318.333C205.884 320.268 207.755 322.247 209.638 323.993C211.533 325.75 213.277 327.112 214.834 327.875C216.374 328.63 217.383 328.637 218.125 328.304C218.945 327.936 220.122 326.854 221.287 323.915L225.763 325.689ZM200.551 321.688C198.77 319.854 197.768 319.33 197.386 319.226C197.264 319.193 197.37 319.247 197.577 319.167C197.772 319.092 197.835 318.983 197.801 319.031C197.67 319.22 197.482 319.729 197.345 320.642C197.201 321.595 197.195 322.205 197.099 323.063L192.314 322.529C192.351 322.191 192.436 320.906 192.583 319.925C192.737 318.904 193.042 317.441 193.848 316.282C194.283 315.657 194.925 315.03 195.841 314.676C196.77 314.317 197.739 314.332 198.651 314.58C200.339 315.04 202.096 316.367 204.005 318.333L200.551 321.688ZM197.099 323.063C197.062 323.391 196.915 324.126 196.236 324.706C195.496 325.338 194.66 325.341 194.203 325.265C193.777 325.195 193.458 325.031 193.304 324.944C193.125 324.844 192.974 324.736 192.861 324.65C192.452 324.336 191.996 323.872 191.576 323.422C190.688 322.472 189.441 321.019 188.007 319.36C185.09 315.988 181.23 311.57 177.195 307.736C173.07 303.816 169.11 300.852 166.012 299.961C164.544 299.539 163.559 299.664 162.853 300.063C162.122 300.477 161.214 301.454 160.485 303.725L155.901 302.253C156.841 299.326 158.318 297.097 160.483 295.873C162.673 294.633 165.096 294.687 167.343 295.334C171.676 296.58 176.377 300.316 180.512 304.246C184.738 308.261 188.737 312.844 191.649 316.21C193.128 317.921 194.287 319.272 195.093 320.134C195.29 320.345 195.452 320.511 195.581 320.636C195.645 320.698 195.695 320.745 195.734 320.78C195.774 320.816 195.792 320.829 195.79 320.828C195.789 320.827 195.778 320.819 195.759 320.806C195.74 320.793 195.706 320.771 195.658 320.744C195.595 320.708 195.353 320.575 194.991 320.515C194.598 320.45 193.813 320.443 193.109 321.044C192.466 321.593 192.342 322.276 192.314 322.529L197.099 323.063ZM160.485 303.725C158.95 308.507 158.73 313.929 159.126 319.467C159.522 325.011 160.514 330.458 161.301 335.363C161.69 337.785 162.031 340.095 162.2 342.154C162.367 344.186 162.384 346.149 162.033 347.825C161.678 349.521 160.87 351.252 159.124 352.27C157.432 353.255 155.4 353.249 153.329 352.774L154.405 348.081C155.932 348.431 156.526 348.211 156.7 348.109C156.819 348.04 157.117 347.811 157.32 346.838C157.528 345.847 157.557 344.434 157.402 342.548C157.249 340.69 156.934 338.539 156.547 336.126C155.782 331.358 154.739 325.626 154.323 319.81C153.907 313.988 154.098 307.869 155.901 302.253L160.485 303.725ZM153.329 352.774C149.244 351.837 145.608 349.599 142.447 347.263C140.857 346.088 139.337 344.849 137.923 343.7C136.491 342.534 135.18 341.471 133.931 340.571C131.294 338.67 129.564 337.988 128.317 338.152C127.308 338.284 125.701 339.148 123.81 343.24L119.439 341.221C121.536 336.682 124.154 333.843 127.689 333.378C130.987 332.945 134.119 334.771 136.746 336.665C138.13 337.662 139.551 338.817 140.961 339.964C142.391 341.127 143.824 342.294 145.308 343.39C148.296 345.598 151.292 347.367 154.405 348.081L153.329 352.774ZM123.81 343.24C121.618 347.982 118.706 350.752 115.117 351.851C111.662 352.908 108.048 352.258 104.774 351.263C103.112 350.758 101.443 350.132 99.8391 349.518C98.2099 348.894 96.6609 348.287 95.1291 347.766C92.0202 346.707 89.4072 346.161 87.1939 346.528L86.4064 341.778C89.8646 341.204 93.4432 342.105 96.6808 343.207C98.3223 343.766 99.9852 344.418 101.561 345.021C103.162 345.634 104.691 346.205 106.175 346.656C109.192 347.573 111.658 347.874 113.708 347.247C115.625 346.66 117.641 345.11 119.439 341.221L123.81 343.24ZM87.1939 346.528C85.0708 346.88 83.6583 347.906 82.5775 349.544C81.4256 351.29 80.6329 353.77 80.0407 356.974C79.4516 360.161 79.1039 363.793 78.6909 367.768C78.2827 371.697 77.8146 375.908 76.9773 380.057L72.2575 379.104C73.0444 375.206 73.4934 371.2 73.9017 367.271C74.3051 363.388 74.6733 359.521 75.3059 356.099C75.9355 352.693 76.8705 349.451 78.5586 346.892C80.318 344.226 82.858 342.366 86.4064 341.778L87.1939 346.528ZM76.9773 380.057C76.2319 383.751 74.5002 386.391 71.6995 387.565C69.0566 388.673 66.0992 388.187 63.4949 387.233C58.2547 385.315 52.6694 380.849 49.1676 377.444L52.5245 373.992C55.8638 377.239 60.8647 381.143 65.1503 382.712C67.3088 383.502 68.8492 383.539 69.8382 383.125C70.6693 382.776 71.7036 381.849 72.2575 379.104L76.9773 380.057Z" fill="#2094FF"/>
                            </g>
                            <path d="M258.39 314.841C265.427 316.379 273.102 307.71 276.059 303.184L289.699 342.767L68.0248 426.222L49.7868 376.107C56.66 382.748 71.0695 392.806 73.722 379.91C77.0376 363.79 74.6583 346.326 86.0895 344.414C97.5207 342.501 113.092 359.696 121.174 342.396C129.256 325.095 139.139 347.248 153.631 350.514C168.122 353.779 151.334 323.85 158.116 303.017C164.899 282.183 194.569 325.138 194.844 322.745C195.119 320.351 195.064 312.348 202.479 319.936C209.893 327.524 218.744 337.449 223.869 324.675C228.993 311.901 218.409 283.129 224.936 283.594C231.463 284.058 249.593 312.92 258.39 314.841Z" fill="url(#paint0_linear_248_1353)"/>
                            <defs>
                            <filter id="filter0_d_248_1353" x="16.3387" y="265.301" width="293.448" height="171.051" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="16.0499"/>
                            <feGaussianBlur stdDeviation="16.0499"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.52 0 0 0 0 1 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_248_1353"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_248_1353" result="shape"/>
                            </filter>
                            <linearGradient id="paint0_linear_248_1353" x1="149.042" y1="302.541" x2="179.583" y2="385.562" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#00A3FF" stop-opacity="0.26"/>
                            <stop offset="1" stop-color="#00A3FF" stop-opacity="0"/>
                            </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>

                <div class="col-12 col-lg-7 banner__content text-center">
                    <h2 class="section-title text-white text-center mb-50">
                        <?php echo $title; ?>
                    </h2>
                    <a href="<?php echo $button_link; ?>" class="btn btn-secondary btn-lg"><?php echo $button_text; ?></a>
                </div>
            </div>

        </div>
    </div>
</section>



