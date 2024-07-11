<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/client/./dist/output.css" />
    <link
      href="<?= BASE_URL ?>assets/client/https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <section
        class="container max-w-screen-xl m-auto flex items-center justify-between py-4"
      >
        <img src="<?= BASE_URL ?>assets/client/./assets/images/logo.png" alt="" />
        <ul class="flex gap-8 font-medium text-xl">
          <li class="hover:text-amber-500"><a href="">Home</a></li>
          <li class="hover:text-amber-500"><a href="shop.html">Shop</a></li>
          <li class="hover:text-amber-500"><a href="">About</a></li>
          <li class="hover:text-amber-500"><a href="">Contact</a></li>
        </ul>
        <div class="flex gap-4">
          <span class="material-symbols-outlined"> Đăng nhập </span>
          <a href="<?= BASE_URL ?>assets/client/cart.html"
            ><span class="material-symbols-outlined"> Giỏ hàng </span></a
          >
        </div>
      </section>
      <!--End Navigation Bar -->
      <section>
        <img src="<?= BASE_URL ?>assets/client/assets/images/banner.jpg" alt="" class="w-full" />
      </section>
    </header>
    <!-- End Banner -->
    <section class="container max-w-screen-xl m-auto mt-16">
      <div class="flex justify-between items-center mb-4">
        <h2 class="font-semibold text-[40px]">New Product</h2>
        <a
          href="<?= BASE_URL ?>assets/client/shop.html"
          class="border border-solid border-yellow-500 px-4 py-2 font-semibold text-base text-yellow-500"
          >View all product</a
        >
      </div>
      <div class="grid grid-cols-4 gap-8">
        <div>
          <div class="overflow-hidden">
            <img
              src="<?= BASE_URL ?>assets/client/./assets/images/product-4.jpg"
              alt=""
              class="hover:scale-125 duration-1000"
            />
          </div>
          <div class="bg-[#F5F5F5] p-4">
            <h3 class="font-semibold text-xl">Syltherine</h3>
            <p class="text-[#898989] text-base">Stylish cafe chair</p>
            <p class="font-semibold text-xl text-red-600 mb-3">2.500.000đ</p>
            <button
              class="border border-solid border-yellow-700 text-yellow-700 w-full font-semibold text-base py-2 hover:bg-yellow-700 hover:text-white"
            >
              Add to cart
            </button>
          </div>
        </div>
        <div>
          <div class="overflow-hidden">
            <img
              src="<?= BASE_URL ?>assets/client/./assets/images/product-1.jpg"
              alt=""
              class="hover:scale-125 duration-1000"
            />
          </div>
          <div class="bg-[#F5F5F5] p-4">
            <h3 class="font-semibold text-xl">Syltherine</h3>
            <p class="text-[#898989] text-base">Stylish cafe chair</p>
            <p class="font-semibold text-xl text-red-600 mb-3">2.500.000đ</p>
            <button
              class="border border-solid border-yellow-700 text-yellow-700 w-full font-semibold text-base py-2 hover:bg-yellow-700 hover:text-white"
            >
              Add to cart
            </button>
          </div>
        </div>
        <div>
          <div class="overflow-hidden">
            <img
              src="<?= BASE_URL ?>assets/client/./assets/images/product-2.jpg"
              alt=""
              class="hover:scale-125 duration-1000"
            />
          </div>
          <div class="bg-[#F5F5F5] p-4">
            <h3 class="font-semibold text-xl">Syltherine</h3>
            <p class="text-[#898989] text-base">Stylish cafe chair</p>
            <p class="font-semibold text-xl text-red-600 mb-3">2.500.000đ</p>
            <button
              class="border border-solid border-yellow-700 text-yellow-700 w-full font-semibold text-base py-2 hover:bg-yellow-700 hover:text-white"
            >
              Add to cart
            </button>
          </div>
        </div>
        <div>
          <div class="overflow-hidden">
            <img
              src="<?= BASE_URL ?>assets/client/./assets/images/product-3.jpg"
              alt=""
              class="hover:scale-125 duration-1000"
            />
          </div>
          <div class="bg-[#F5F5F5] p-4">
            <h3 class="font-semibold text-xl">Syltherine</h3>
            <p class="text-[#898989] text-base">Stylish cafe chair</p>
            <p class="font-semibold text-xl text-red-600 mb-3">2.500.000đ</p>
            <button
              class="border border-solid border-yellow-700 text-yellow-700 w-full font-semibold text-base py-2 hover:bg-yellow-700 hover:text-white"
            >
              Add to cart
            </button>
          </div>
        </div>
      </div>
    </section>
    <!-- End New Product -->
    <section class="container max-w-screen-xl m-auto mt-16">
      <div class="flex justify-between items-center mb-4">
        <h2 class="font-semibold text-[40px]">Gallery</h2>
        <a
          href=""
          class="border border-solid border-yellow-500 px-4 py-2 font-semibold text-base text-yellow-500"
          >View all Gallery</a
        >
      </div>
      <div class="grid grid-cols-3 gap-8">
        <img src="<?= BASE_URL ?>assets/client/./assets/images/gallery-1.jpg" alt="" />
        <img src="<?= BASE_URL ?>assets/client/./assets/images/gallery-2.jpg" alt="" />
        <img src="<?= BASE_URL ?>assets/client/./assets/images/gallery-3.jpg" alt="" />
        <img src="<?= BASE_URL ?>assets/client/./assets/images/gallery-4.jpg" alt="" />
        <img src="<?= BASE_URL ?>assets/client/./assets/images/gallery-5.jpg" alt="" />
        <img src="<?= BASE_URL ?>assets/client/./assets/images/gallery-6.jpg" alt="" />
      </div>
    </section>
    <!-- End Gallery -->
    <section class="container max-w-screen-xl m-auto mt-16">
      <div class="flex justify-between items-center mb-4">
        <h2 class="font-semibold text-[40px]">News</h2>
        <a
          href=""
          class="border border-solid border-yellow-500 px-4 py-2 font-semibold text-base text-yellow-500"
          >View all news</a
        >
      </div>
      <div class="grid grid-cols-4 gap-8">
        <div>
          <div>
            <img src="<?= BASE_URL ?>assets/client/./assets/images/news-1.jpg" alt="" />
          </div>
          <div>
            <p
              class="text-[#9CA3AF] font-semibold text-sm flex items-center mt-4 mb-1"
            >
              <span class="materials-symbols-outlined mr-2">calendar_month</span
              >24/4/2024
            </p>
            <h3 class="font-semibold text-xl">
              A bedroom must have something like this
            </h3>
            <a
              href=""
              class="text-red-600 font-semibold text-base flex items-center"
              >Xem chi tiết<span class="material-symbols-outlined">
              </span></a
            >
          </div>
        </div>
        <div>
          <div>
            <img src="<?= BASE_URL ?>assets/client/./assets/images/news-2.jpg" alt="" />
          </div>
          <div>
            <p
              class="text-[#9CA3AF] font-semibold text-sm flex items-center mt-4 mb-1"
            >
              <span class="materials-symbols-outlined mr-2">calendar_month</span
              >24/4/2024
            </p>
            <h3 class="font-semibold text-xl">
              A bedroom must have something like this
            </h3>
            <a
              href=""
              class="text-red-600 font-semibold text-base flex items-center"
              >Xem chi tiết<span class="material-symbols-outlined">
              </span></a
            >
          </div>
        </div>
        <div>
          <div>
            <img src="<?= BASE_URL ?>assets/client/./assets/images/news-3.jpg" alt="" />
          </div>
          <div>
            <p
              class="text-[#9CA3AF] font-semibold text-sm flex items-center mt-4 mb-1"
            >
              <span class="materials-symbols-outlined mr-2">calendar_month</span
              >24/4/2024
            </p>
            <h3 class="font-semibold text-xl">
              A bedroom must have something like this
            </h3>
            <a
              href=""
              class="text-red-600 font-semibold text-base flex items-center"
              >Xem chi tiết<span class="material-symbols-outlined">
              </span></a
            >
          </div>
        </div>
        <div>
          <div>
            <img src="<?= BASE_URL ?>assets/client/./assets/images/news-4.jpg" alt="" />
          </div>
          <div>
            <p
              class="text-[#9CA3AF] font-semibold text-sm flex items-center mt-4 mb-1"
            >
              <span class="materials-symbols-outlined mr-2">calendar_month</span
              >24/4/2024
            </p>
            <h3 class="font-semibold text-xl">
              A bedroom must have something like this
            </h3>
            <a
              href=""
              class="text-red-600 font-semibold text-base flex items-center"
              >Xem chi tiết<span class="material-symbols-outlined">
              </span></a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- End News -->
    <section class="bg-[#FFF7ED] py-16 mt-16">
      <div class="container max-w-screen-xl m-auto grid grid-cols-4">
        <div class="flex gap-5 items-center">
          <img src="<?= BASE_URL ?>assets/client/./assets/images/quality.png" alt="" />
          <div>
            <h3 class="font-semibold text-xl mb-1">High Quality</h3>
            <p class="text-[#898989]">Crafted from top materials</p>
          </div>
        </div>
        <div class="flex gap-5 items-center">
          <img src="<?= BASE_URL ?>assets/client/./assets/images/help.png" alt="" />
          <div>
            <h3 class="font-semibold text-xl mb-1">High Quality</h3>
            <p class="text-[#898989]">Crafted from top materials</p>
          </div>
        </div>
        <div class="flex gap-5 items-center">
          <img src="<?= BASE_URL ?>assets/client/./assets/images/tick.png" alt="" />
          <div>
            <h3 class="font-semibold text-xl mb-1">High Quality</h3>
            <p class="text-[#898989]">Crafted from top materials</p>
          </div>
        </div>
        <div class="flex gap-5 items-center">
          <img src="<?= BASE_URL ?>assets/client/./assets/images/ship.png" alt="" />
          <div>
            <h3 class="font-semibold text-xl mb-1">High Quality</h3>
            <p class="text-[#898989]">Crafted from top materials</p>
          </div>
        </div>
      </div>
    </section>
    <footer class="bg-[#262626] text-white pt-16 pb-8">
      <div class="container max-w-screen-xl m-auto grid grid-cols-4 gap-8">
        <div>
          <img src="<?= BASE_URL ?>assets/client/./assets/images/logo.png" alt="" class="mb-4" />
          <p>400 University Drive Suite 200 Coral Gables, FL 33134 USA</p>
        </div>
        <div>
          <h3 class="font-semibold text-xl">Sitemap</h3>
          <ul>
            <li class="mb-4"><a href="">Home</a></li>
            <li class="mb-4"><a href="">Shop</a></li>
            <li class="mb-4"><a href="">About</a></li>
            <li><a href="">Contact</a></li>
          </ul>
        </div>
        <div>
          <h3>Help</h3>
          <ul>
            <li class="mb-4"><a href="">Payment Options</a></li>
            <li class="mb-4"><a href="">Returns</a></li>
            <li><a href="">Privacy Policies</a></li>
          </ul>
        </div>
        <div>
          <h3>Location</h3>
          <ul>
            <li class="mb-4"><a href="">support@euphoria.in</a></li>
            <li class="mb-4"><a href="">Ahmedabad Main Road</a></li>
            <li><a href="">Udaipur, India- 313002</a></li>
          </ul>
        </div>
      </div>
      <hr class="my-8" />
      <p class="text-center mt-8">
        Copyright © 2023 Euphoria Folks Pvt Ltd. All rights reserved.
      </p>
    </footer>
  </body>
</html>
