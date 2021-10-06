<script type="text/x-template" id="productItem">
	<div class="productItem text-center bg-white position-relative rounded-10 overflow-hidden px-3" data-aos="fade-up">
		<h3 class="d-none">{{product.title}}</h3>
		<a class="d-block position-relative pb-2 pt-4 py-xxl-4" href="">
			<span class="img-inner flex-center d-block mx-auto mt-1">
                <span class="tags d-block position-absolute z-1">
                    <span style="background:#3DA7AF" class="fz-13 fw-bold text-white rounded-circle w45 h45 mb-2" :class="[product.new==true?'flex-center':'d-none']">NEW</span>
                    <span style="background:#2469C9" class="fz-13 fw-bold text-white rounded-circle w45 h45" :class="[product.preOrder==true?'flex-center':'d-none']">預購</span>
                </span>
                <span class="img flex-center mx-auto" data-aos="flip-right">
				    <img :src="product.img" alt="">
                </span>
			</span>
			<span class="text-inner d-block pt-2 mt-1">
				<span class="line1 d-block fw-500 text-gray333333 mb-1">{{product.subTitle}}</span>
				<span class="line1 d-block fw-bold">{{product.title}}</span>
				<span class="price d-block position-relative my-1">
					<span class="d-block Nobel text-2469C9">
						<span>$</span>
						<span class="fz-24">{{product.price}}</span>
					</span>
				</span>
			</span>
		</a>
		<div class="hoverButton d-flex position-xxl-absolute justify-content-center pb-4 pb-xxl-0">
			<a class="flex-center text-white bg-2469C9 bg-hover-3B7EDB rounded-30 w150 h35 me-2" href="">
				<i class="icon-cart-1 d-flex me-2"></i>
				<span>立即購買</span>
			</a>
			<button class="flex-center rounded-circle text-2469C9 text-hover-white bg-white bg-hover-2469C9 w35 h35" type="button">
				<i class="icon-heart"></i>
			</button>
		</div>
	</div>
</script>
<script src="scripts/default/jquery.min.js"></script>
<script src="scripts/plugins/bootstrap.bundle.min.js"></script>
<script src="scripts/plugins/aos.js"></script>
<script src="scripts/plugins/imgLiquid.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="scripts/plugins/sweetalert2.js"></script>
<script src="scripts/plugins/vue-dev.js"></script>
<script src="scripts/plugins/vue-select.js"></script>
<script src="scripts/plugins/vue-awesome-swiper.js"></script>
<script src="scripts/plugins/mCustomScrollbar.js"></script>
<script src="scripts/plugins/greensock/gsap.min.js"></script>
<script src="scripts/plugins/greensock/DrawSVGPlugin.min.js"></script>
<script src="scripts/plugins/greensock/MotionPathPlugin.min.js"></script>
<script src="scripts/default/function.js"></script>
<script src="scripts/default/ui.js"></script>