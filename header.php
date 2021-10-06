<header class="position-fixed w-100">
	<div class="spotlight text-white position-relative lh18 z-2" style="background-image:url(styles/images/common/spotlight-bg.jpg)">
		<div class="py-2 py-xl-3">
			<div class="d-block d-md-flex flex-center py-1 px-4">
				<img class="d-table mx-auto ms-md-0 me-md-0" src="styles/images/common/OOXX.png" alt="">
				<p class="fw-500 les1 text-center mb-0 ms-md-4">2021年 PlayStation 發布會將於下週五播出</p>
			</div>
			<button class="close text-white position-absolute p-0" type="button">
				<i class="icon-cancel fz-12"></i>
			</button>
		</div>
	</div>
	<div class="header-main bg-white z-2 px-4">
		<div class="container d-flex align-items-center position-relative">
			<a class="logo z-2" href="./">
				<img src="styles/images/common/logo.svg" alt="">
			</a>
			<div class="menu-wrapper fz-18 z-1 ms-xl-4 ps-xl-3">
				<div class="menu-inner">
					<ul class="ns d-xl-flex les1">
						<li><a class="menu-item d-block" href="">產品專區</a></li>
						<li><a class="menu-item d-block" href="">活動專區</a></li>
						<li><a class="menu-item d-block" href="">常見問題</a></li>
						<li><a class="menu-item d-block" href="">銷售據點</a></li>
						<li><a class="menu-item d-block" href="">關於我們</a></li>
						<li><a class="menu-item d-block" href="">最新消息</a></li>
					</ul>
					<div class="follows d-flex d-xl-none mt-4 ms-4">
						<a class="flex-center rounded-circle mx-1 icon-twitter" href=""></a>
						<a class="flex-center rounded-circle mx-1 icon-fb fz-20" href=""></a>
						<a class="flex-center rounded-circle mx-1 icon-youtube fz-20" href=""></a>
						<a class="flex-center rounded-circle mx-1 icon-line fz-20" href=""></a>
					</div>
				</div>
			</div>
			<div class="tools z-1 ms-auto me-xxl-4">
				<ul class="ns d-flex align-items-center">
					<li class="tool me-xl-1" data-tool="search">
						<button class="tool-toggle flex-center" type="button" id="search-toggle">
							<i class="icon-search text-gray808080"></i>
						</button>
					</li>
					<li class="tool d-none d-md-block position-relative me-xl-2" data-tool="member">
						<a class="tool-toggle flex-center" href="">
							<i class="icon-person text-gray808080"></i>
						</a>
						<div class="tool-dropdown">
							<div class="tool-dropdown-box bg-white">
								<ul class="ns les1 tool-dropdown-inner">
									<li class="d-flex justify-content-between align-items-center">
										<a class="d-flex align-items-center" href="">
											<i class="icon icon-file-text me-1"></i>
											會員中心
										</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<a class="d-flex align-items-center" href="">
											<i class="icon-coupon  me-1"></i>
											優惠券
										</a>
										<span class="text-2469C9 fw-bold">2</span>
									</li>
									<li class="d-flex justify-content-between align-items-center pb-3">
										<a class="d-flex align-items-center" href="">
											<i class="icon-coin  me-1"></i>
											WU幣
										</a>
										<span class="text-2469C9 fw-bold">500000000</span>
									</li>
									<li class="for-logout pt-2"><a href="/"><i class="icon-log-out"></i>登出</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="tool d-none d-md-block me-xl-2" data-tool="heart">
						<a class="tool-toggle flex-center position-relative" href="">
							<i class="icon-heart-1 text-gray808080"></i>
							<span class="num Arial text-white text-center bg-2469C9 rounded-30 position-absolute fz-14 lh-1">12</span>
						</a>
					</li>
					<li class="tool position-relative" data-tool="cart">
						<a class="tool-toggle flex-center position-relative" href="">
							<i class="icon-cart-1 text-gray808080"></i>
							<span class="num Arial text-white text-center bg-2469C9 rounded-30 position-absolute fz-14 lh-1">5</span>
						</a>
						<div class="tool-dropdown">
							<div class="tool-dropdown-box bg-white">
								<div class="tool-dropdown-inner">
									<div class="fz-15 pb-2">您的購物袋有6件商品</div>
									<div class="tool-cart-list scrollbarY">
										<ul class="ns">
											<li class="list-item d-flex align-items-center py-2">
												<a href="" class="pic flex-center flex-shrink-0 my-1">
													<img src="/styles/images/index/newProduct-4.png" alt="" />
												</a>
												<div class="ms-3">PS5 媒體遙控器</div>
												<div class="ms-auto">
													<button type="button" onclick="pdRemove()"><i class="icon-delete"></i></button>
												</div>
											</li>
											<li class="list-item d-flex align-items-center py-2">
												<a href="" class="pic flex-center flex-shrink-0 my-1">
													<img src="/styles/images/index/newProduct-5.png" alt="" />
												</a>
												<div class="ms-3">PlayStationR Vulcan鋁鎂合金耳機</div>
												<div class="ms-auto">
													<button type="button" onclick="pdRemove()"><i class="icon-delete"></i></button>
												</div>
											</li>
											<li class="list-item d-flex align-items-center py-2">
												<a href="" class="pic flex-center flex-shrink-0 my-1">
													<img src="/styles/images/index/newProduct-2.png" alt="" />
												</a>
												<div class="ms-3">PlayStationR Vulcan鋁鎂合金耳機</div>
												<div class="ms-auto">
													<button type="button" onclick="pdRemove()"><i class="icon-delete"></i></button>
												</div>
											</li>
											<li class="list-item d-flex align-items-center py-2">
												<a href="" class="pic flex-center flex-shrink-0 my-1">
													<img src="/styles/images/index/newProduct-8.png" alt="" />
												</a>
												<div class="ms-3">PS5 死亡擱淺 導演版《中文版》</div>
												<div class="ms-auto">
													<button type="button" onclick="pdRemove()"><i class="icon-delete"></i></button>
												</div>
											</li>
											<li class="list-item d-flex align-items-center py-2">
												<a href="" class="pic flex-center flex-shrink-0 my-1">
													<img src="/styles/images/index/newProduct-4.png" alt="" />
												</a>
												<div class="ms-3">PS5 媒體遙控器</div>
												<div class="ms-auto">
													<button type="button" onclick="pdRemove()"><i class="icon-delete"></i></button>
												</div>
											</li>
											<li class="list-item d-flex align-items-center py-2">
												<a href="" class="pic flex-center flex-shrink-0 my-1">
													<img src="/styles/images/index/newProduct-5.png" alt="" />
												</a>
												<div class="ms-3">PlayStationR Vulcan鋁鎂合金耳機</div>
												<div class="ms-auto">
													<button type="button" onclick="pdRemove()"><i class="icon-delete"></i></button>
												</div>
											</li>
										</ul>
									</div>
									<a href="" class="d-block text-white text-center bg-2469C9 bg-hover-3B7EDB py-2 px-3 mt-4">前往購物清單</a>
								</div>
							</div>
						</div>
					</li>

				</ul>
			</div>
			<div class="menu-toggle d-xl-none flex-center z-2">
				<div class="wrapper position-relative">
					<div class="bar1 position-absolute bg-2469C9"></div>
					<div class="bar2 position-absolute bg-2469C9"></div>
					<div class="bar3 position-absolute bg-2469C9"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="search bg-white px-4">
		<div class="search-inner container pb-5">
			<div class="search-bar">
				<form class="d-flex py-2 py-md-3" action="search">
					<input class="flex-grow-1 fz-20" type="text" placeholder="輸入搜尋關鍵字" />
					<button type="submit">
						<i class="icon-search"></i>
					</button>
				</form>
			</div>
			<div class="search-trending pt-2 pt-md-3">
				<ul class="ns row g-0 align-items-center fz-14">
					<li class="d-none d-md-block col-12 col-md-auto me-md-3"><span class="tag bg-2469C9 text-white rounded-30 px-3">熱搜</span></li>
					<li class="col-12 col-md-auto me-md-3"><a class="px-2" href="search">PlayStationR Vulcan鋁鎂合金耳機</a></li>
					<li class="col-12 col-md-auto me-md-3"><a class="px-2" href="search">PlayStation Move 動態控制器</a></li>
					<li class="col-12 col-md-auto me-md-3"><a class="px-2" href="search">PS VR豪華全配包</a></li>
					<li class="col-12 col-md-auto me-md-3"><a class="px-2" href="search">PS5 媒體遙控器</a></li>
					<li class="col-12 col-md-auto me-md-3"><a class="px-2" href="search">PlayStationR Vulcan鋁鎂合金耳機</a></li>
					<li class="col-12 col-md-auto me-md-3"><a class="px-2" href="search">PlayStation Move 動態控制器</a></li>
				</ul>
			</div>
		</div>
	</div>

</header>
<div class="header-mask position-fixed z-2"></div>

<div class="modal fade" id="ads-modal">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content flex-center border-0 mx-auto">
			<div class="modal-box z-1 px-4 px-md-5">
				<button type="button" class="btn-close position-absolute text-white rounded-circle z-1" data-bs-dismiss="modal" aria-label="Close">
					<i class="icon-close fz-20"></i>
				</button>
				<div class="modal-body lh-base text-white pt-5">
					<p class="fz-20 fw-bold">【防詐騙提醒】</p>
					<div class="scrollbarY">
						<p class="mb-md-4 pb-md-2">提醒您！宏碁遊戲不會以電話通知您更改付款方式或要求改用 ATM 重新轉帳。亦不會在電話中要求您提供信用卡帳號資料、銀行帳號，或主動提供您銀行/信用卡客服電話。請隨時提高警覺勿上當！若接獲可疑電話請立即連繫網站客服或警政署防詐騙諮詢專線165。</p>
						<p class="mb-md-4 pb-md-2">防治詐騙，提醒您務必提高警覺：1.定期更新病毒碼及網站密碼。2.切勿聽從指示操作提款機。3.切勿提供信用卡及個人資料。</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>