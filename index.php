<!doctype html>
<html lang="zh-Hant">

<head>
    <?php include "header-title.php"; ?>
</head>

<body>
    <div class="wp" id="index">
        <?php include "header.php"; ?>
        <!-- main ======================================================================================= -->
        <main>
            <h1 class="d-none">宏碁遊戲</h1>
            <div class="banner-section position-relative">
                <swiper class="swiper" ref="bannerSwiper" :options="bannersData.swiperOptions">
                    <swiper-slide v-for="(item, index) in bannersData.list" :key="index">
                        <div class="imgFill" data-query="size">
                            <picture>
                                <source media="(min-width: 768px)" :srcset="item.img" />
                                <source media="(max-width: 767px)" :srcset="item.imgMobile" />
                                <img src="#" alt="" />
                            </picture>
                        </div>
                        <div class="text text-white position-absolute w-100" :class="[item.textPosition]">
                            <div class="pb-3 pb-lg-4 mb-xl-3">
                                <span class="d-block fz-40 fw-light">{{item.text1}}</span>
                                <span class="d-block fz-40 fw-light">{{item.text2}}</span>
                            </div>
                            <a class="flex-center fz-18 bg-2469C9 bg-hover-3B7EDB text-white les1 w150 h40 rounded-30" :href="item.href">探索更多</a>
                        </div>
                    </swiper-slide>
                </swiper>
                <div class="swiper-pagination"></div>
                <div class="swiper-button swiper-button-prev"><i class="icon-arrow-left"></i></div>
                <div class="swiper-button swiper-button-next"><i class="icon-arrow-right"></i></div>
            </div>
            <div class="content-section">
                <div class="bg-white position-relative z-1 pt-5 px-4">
                    <div class="container">
                        <div class="ads-block row pb-3 pb-md-5">
                            <div v-for="(item,index) in adsData.list" :Key="index" class="col-md-4 mb-4 mb-md-0">
                                <a :href="item.href" class="d-block rounded-10 overflow-hidden" data-aos="fade-up">
                                    <img :src="item.img" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white position-relative z-1 px-4">
                    <div class="container">
                        <div class="news-block pb-5">
                            <div class="news-title position-relative mb-3 mb-md-5" data-aos="fade-up">
                                <h2 class="d-table fz-30 fw-bold bg-white position-relative z-1 mx-md-auto mb-0 px-md-5">最新消息</h2>
                                <a class="more d-block text-gray808080 bg-white position-absolute z-1 ps-3 pe-md-2" href="news">
                                    <span>看更多</span>
                                    <i class="icon-tri ms-2"></i>
                                </a>
                            </div>
                            <div class="newsItem row">
                                <div class="col-12 col-md-6 col-lg-3" v-for="(item,index) in newsData.list" :key="index">
                                    <h3 class="d-none">{{item.title}}</h3>
                                    <a class="newItem d-block position-relative pb-4 pb-md-5 mb-2 mb-md-0" href="" data-aos="fade-up" :data-aos-delay="index*50">
                                        <span class="img-inner d-block background-cover rounded-10 mb-3" :style="'background-image:url('+item.img+')'"></span>
                                        <span class="text-inner d-block px-xl-3">
                                            <span class="title line2 fz-22 fw-bold lh-sm mb-2 pb-md-1">{{item.title}}</span>
                                            <span class="line2 text-gray333333 mb-2 mb-md-3">{{item.content}}</span>
                                            <span class="d-block text-gray808080 fw-500">{{item.date}}</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white position-relative z-1 px-4">
                    <div class="container">
                        <div class="flagshipProduct-block pb-4 pb-md-5 pt-xl-4">
                            <h2 class="fz-30 fw-bold text-center mb-0 mb-md-2 pb-3 pb-md-4" data-aos="fade-up">本月最新主打</h2>
                            <div class="row text-center">
                                <div class="col-12 col-lg-6 mb-2 mb-lg-0">
                                    <div class="productItem spec position-relative rounded-10 overflow-hidden" data-aos="fade-up">
                                        <h3 class="d-none">{{flagshipProductsData.specProduct.title}}</h3>
                                        <a class="d-flex h-100" href="">
                                            <span class="img-inner flex-grow-1 d-block background-cover" :style="'background-image:url('+flagshipProductsData.specProduct.img+')'">
                                                <span class="tags d-block position-absolute">
                                                    <span class="fz-13 fw-bold text-white bg-3DA7AF rounded-circle w45 h45 mb-2" :class="[flagshipProductsData.specProduct.new==true?'flex-center':'d-none']">NEW</span>
                                                    <span class="fz-13 fw-bold text-white bg-2469C9 rounded-circle w45 h45" :class="[flagshipProductsData.specProduct.preOrder==true?'flex-center':'d-none']">預購</span>
                                                </span>
                                            </span>
                                            <span class="text-inner flex-center p-4">
                                                <span class="d-block max460 mx-auto pb-4 mb-lg-3">
                                                    <span class="d-block fz-30 fw-bold mb-2 pb-md-1">{{flagshipProductsData.specProduct.title}}</span>
                                                    <span class="d-block text-gray33333">{{flagshipProductsData.specProduct.content}}</span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="row">
                                        <div class="col-12 col-md-6 mb-4 mb-lg-3" v-for="(item,index) in flagshipProductsData.list" :key="index">
                                            <product-item :product="item"></product-item>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white position-relative z-1 px-4">
                    <div class="container">
                        <div class="newProductsItem-block pb-5 pt-md-4">
                            <h2 class="fz-30 fw-bold text-center mb-3" data-aos="fade-up">最新優惠</h2>
                            <ul class="ns links fz-18 fw-500 flex-center les1 pb-4 mb-xl-3" data-aos="fade-up">
                                <li class="px-3">
                                    <a class="d-block px-md-3 pb-2 active" href="">新商品</a>
                                </li>
                                <li class="px-3">
                                    <a class="d-block px-md-3 pb-2" href="">熱門商品</a>
                                </li>
                                <li class="px-3">
                                    <a class="d-block px-md-3 pb-2" href="">精選商品</a>
                                </li>
                            </ul>
                            <swiper class="swiper pb-md-4 mb-2" ref="newProductSwiper" :options="newProductsData.swiperOptions">
                                <swiper-slide v-for="(item, index) in newProductsData.list" :key="index">
                                    <product-item :product="item"></product-item>
                                </swiper-slide>
                            </swiper>
                            <div class="swiper-pagination style-1 position-static"></div>
                        </div>
                    </div>
                </div>
                <div class="fixed-area position-relative z-1">
                    <div class="text-inner position-absolute text-center text-md-start w-100">
                        <div class="title position-relative lh-1 ps-md-4 pb-2 pb-md-4 mb-md-3" data-aos="fade-up">
                            <div class="ps-md-2">
                                <span class="d-block LeelawUI fw-bold fz-30">DualSense<sup class="fz-14 ms-2">TM</sup></span>
                                <span class="d-block LeelawUI fz-30">Wireless Controller</span>
                            </div>
                        </div>
                        <div class="ps-md-5 ms-md-2" data-aos="fade-up">
                            <p class="fz-36 fw-light lh-sm mb-4 pb-md-3">
                                <span class="d-block">隨心暢玩</span>
                                <span class="d-block">全新感官享受再進化。</span>
                            </p>
                            <a class="flex-center bg-black bg-hover-2469C9 text-white w150 h40 rounded-30 mx-auto ms-md-0" href="">了解更多</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white position-relative z-1 pt-4 pt-lg-5 px-4">
                    <div class="container pt-xl-4">
                        <div class="ads2-block" data-aos="fade-up">
                            <swiper class="swiper" ref="ads2Swiper" :options="ads2Data.swiperOptions">
                                <swiper-slide v-for="(item,index) in ads2Data.list" :key="index">
                                    <a :href="item.href" class="d-block rounded-10 overflow-hidden">
                                        <img :src="item.img" alt="">
                                    </a>
                                </swiper-slide>
                            </swiper>
                            <div class="swiper-pagination style-1 position-static pt-2 pt-lg-4"></div>
                        </div>
                    </div>
                </div>
                <div class="bg-white position-relative z-1 pb-md-5 px-4">
                    <div class="container pt-4 pb-xl-5">
                        <div class="allBuy-block pt-3 pt-lg-5 mt-xl-5">
                            <div class="row g-0">
                                <div class="col-12 col-xl-4 pe-xl-4 mb-lg-4">
                                    <div class="product-box background-cover text-center position-relative px-4 py-4 py-md-5 mx-auto mb-5 mb-xl-0" style="background-image:url(styles/images/index/product-bg.jpg)" data-aos="fade-up">
                                        <a class="row pt-xl-4" href="">
                                            <span class="d-block col-12 col-md-6 col-xl-12 ps-3 ps-md-5 ps-xl-0">
                                                <span class="tags d-block position-absolute">
                                                    <span style="background:#3DA7AF" class="flex-center fz-13 fw-bold text-white rounded-circle w45 h45 mb-2">NEW</span>
                                                    <span style="background:#D60026" class="flex-center fz-15 fw-bold text-white rounded-circle w45 h45 mb-2">15%</span>
                                                    <span style="background:#F29205" class="flex-center fz-15 fw-bold text-white rounded-circle w45 h45">限時</span>
                                                </span>
                                                <span class="img flex-center mx-auto mb-4">
                                                    <img src="styles/images/index/product.png" alt="">
                                                </span>
                                            </span>
                                            <span class="d-flex d-xl-block align-items-center col-12 col-md-6 col-xl-12">
                                                <span class="d-block text-center text-md-start text-xl-center mx-auto ms-md-0">
                                                    <span class="line1 d-block fw-500 text-gray333333 pt-1 mb-1">全球限量生產機身碼</span>
                                                    <span class="line1 d-block fz-18 fw-bold">PlayStationR Vulcan鋁鎂合金耳機</span>
                                                    <span class="price d-block text-gray333333 mt-md-2 pt-2 pb-1 mb-3 mb-md-4">
                                                        <span class="fw-500 me-3">促銷價</span>
                                                        <span class="Nobel">
                                                            <span>$</span>
                                                            <span class="fz-24">3,080</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                        <div class="d-flex justify-content-center mb-4 mb-xl-5 pb-xl-2">
                                            <a class="flex-center text-white bg-2469C9 bg-hover-3B7EDB rounded-30 w150 h35 me-2" href="">
                                                <i class="icon-cart-1 d-flex me-2"></i>
                                                <span>立即購買</span>
                                            </a>
                                            <button class="flex-center rounded-circle text-2469C9 text-hover-white bg-white bg-hover-2469C9 w35 h35" type="button">
                                                <i class="icon-heart"></i>
                                            </button>
                                        </div>
                                        <div class="px-md-5 mx-md-5 mx-xl-0">
                                            <div class="px-md-5 px-xl-0 mx-md-5 mx-xl-0">
                                                <span class="d-block fw-500 text-gray333333 mb-3">趕快 ! 特別優惠結束於</span>
                                                <div class="row gx-2 text-2469C9">
                                                    <div class="col-3">
                                                        <div class="bg-white rounded-10 py-2">
                                                            <span class="d-block LeelawUI fz-18 fw-bold mb-xl-1">3</span>
                                                            <span class="d-block fw-500">天</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="bg-white rounded-10 py-2">
                                                            <span class="d-block LeelawUI fz-18 fw-bold mb-xl-1">06</span>
                                                            <span class="d-block fw-500">時</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="bg-white rounded-10 py-2">
                                                            <span class="d-block LeelawUI fz-18 fw-bold mb-xl-1">15</span>
                                                            <span class="d-block fw-500">分</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="bg-white rounded-10 py-2">
                                                            <span class="d-block LeelawUI fz-18 fw-bold mb-xl-1">28</span>
                                                            <span class="d-block fw-500">秒</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <div class="d-md-flex justify-content-between align-items-center px-md-3 pb-4 pb-lg-5 mb-lg-2">
                                        <h2 class="fz-30 fw-bold text-center mb-3 mb-md-0">大家都在買</h2>
                                        <ul class="ns links fz-18 fw-500 flex-center les1">
                                            <li class="px-3">
                                                <a class="d-block px-md-3 pb-2" href="">PS4遊戲</a>
                                            </li>
                                            <li class="px-3">
                                                <a class="d-block px-md-3 pb-2 active" href="">PS5遊戲</a>
                                            </li>
                                            <li class="px-3">
                                                <a class="d-block px-md-3 pb-2" href="">週邊商品</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-12 col-md-6 col-lg-4 mb-4" v-for="(item,index) in allBuyProductsData.list">
                                            <product-item :product="item"></product-item>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-F6F6F6 position-relative z-1 pt-5 pt-md-3">
                    <div class="ps-4 pe-xl-0">
                        <div class="pointCard-block position-relative py-md-5 mb-xl-5 pe-4 pe-xl-0">
                            <div class="row align-items-center max1200 position-relative z-1 mb-4 pe-xl-3" data-aos="fade-up">
                                <h2 class="col-12 col-md-auto fz-30 fw-bold me-md-5 mb-0">PSN點數卡專區</h2>
                                <a class="more col-auto d-block text-gray808080 ps-3" href="">
                                    <span>看更多</span>
                                    <i class="icon-tri ms-2"></i>
                                </a>
                                <div class="col-auto d-flex ms-auto">
                                    <div class="swiper-button position-static text-gray808080 text-hover-white bg-white bg-hover-3B7EDB w50 h50 rounded-circle mx-1 swiper-button-prev"><i class="icon-left-open-big fz-18"></i></div>
                                    <div class="swiper-button position-static text-gray808080 text-hover-white bg-white bg-hover-3B7EDB w50 h50 rounded-circle mx-1 swiper-button-next"><i class="icon-right-open-big fz-18"></i></div>
                                </div>
                            </div>
                            <div class="position-relative z-1" data-aos="fade-up">
                                <swiper class="swiper" ref="pointCardSwiper" :options="pointCardsData.swiperOptions">
                                    <swiper-slide v-for="(item, index) in pointCardsData.list" :key="index">
                                        <product-item :product="item"></product-item>
                                    </swiper-slide>
                                </swiper>
                            </div>
                            <img class="dec position-absolute" src="styles/images/index/pointCard-dec.png" alt="">
                        </div>
                    </div>
                    <div class="position-relative z-2 px-4 pt-4 py-md-5">
                        <div class="video-block container">
                            <div class="row">
                                <div class="col-12 col-md flex-grow-1 mb-4 mb-md-0" data-aos="fade-up">
                                    <div class="flex-center bg-black h-100">
                                        <div class="video-element w-100">
                                            <iframe src="https://www.youtube.com/embed/NZvqys3KhHA" class="border-0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-auto" data-aos="fade-up">
                                    <a class="d-block h-100 background-cover" href="">
                                        <img src="styles/images/index/ads.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps5-block position-relative pt-lg-5 px-4" data-aos="fade-up">
                        <div class="ps5-box max1500 position-relative z-2 mx-auto">
                            <swiper class="swiper" ref="ps5sSwiper" :options="ps5sData.swiperOptions">
                                <swiper-slide v-for="(item, index) in ps5sData.list" :key="index">
                                    <div class="ps5Item pe-lg-5 me-lg-5 pt-5 pb-4 py-md-5 py-lg-0 mt-4 mt-lg-0">
                                        <img class="ps5 d-table position-relative z-1 pe-none ms-lg-4 ms-xl-5 px-4 px-lg-0 mx-xxl-auto mt-xl-5" :src="item.img" alt="">
                                        <div class="text position-lg-absolute background-cover text-center text-md-start rounded-10 px-4 px-xl-5 py-3 py-xl-4" style="background-image:url(styles/images/index/ps5-text-bg.jpg);">
                                            <div class="border-bottom-2469C9 pb-3 pb-xl-4 mb-3 mb-xl-4 mt-3">
                                                <span class="d-block fz-36 fw-bold mb-2 pb-xl-1">{{item.title}}</span>
                                                <span class="d-block fz-20 fw-500 lh-base les1" v-html="item.subTitle"></span>
                                            </div>
                                            <p class="scrollbarY">{{item.content}}</p>
                                            <a class="flex-center bg-2469C9 bg-hover-3B7EDB text-white rounded-30 w180 h40 les1 mt-4 mt-xl-5 mx-auto ms-md-0" href="">了解更多</a>
                                            <div>
                                                <img class="position-absolute ps5-dec-1" src="styles/images/index/ps5-dec-1.svg" alt="">
                                                <img class="position-absolute ps5-dec-2 d-none d-xl-block" src="styles/images/index/ps5-dec-2.svg" alt="">
                                                <img class="position-absolute ps5-dec-3 d-none d-md-block" src="styles/images/index/ps5-dec-3.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </swiper-slide>
                            </swiper>
                            <div class="d-table mx-auto pt-4 pb-5">
                                <div class="swiper-pagination Nobel position-relative d-flex text-white bg-2469C9 les1 rounded-10 w-auto px-4 px-xl-5 py-2 py-xl-3 mb-3"></div>
                            </div>
                        </div>
                        <img class="dec d-none d-md-block position-absolute z-1" src="styles/images/index/ps5-block-dec.png" alt="">
                    </div>
                </div>
            </div>
            <div class="fixed w-100 background-cover" style="background-image:url(styles/images/index/fixed-bg.jpg)">
            </div>
        </main>
        <!-- main ======================================================================================= -->
        <?php include "footer.php"; ?>
    </div>
    <?php include 'footer-js.php' ?>
    <script src="/scripts/default/pages/index.js"></script>
</body>

</html>