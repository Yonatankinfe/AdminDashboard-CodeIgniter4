<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport"/>
  <meta content="ie=edge" http-equiv="X-UA-Compatible"/>
  <title>
   Admin Panel
  </title>
  <link href="favicon.ico" rel="icon"/>
  <link rel="stylesheet" href="<?= base_url('css/admin.css') ?>">
  <script src="<?= base_url('javascripte/admin.js') ?>"></script>
  <?php 
               $rates = array();
                 foreach ($products as $product) {
                      $rates[] = $product['rate'];
                      
                     }
                      $i = count($products);

                      if (!empty($rates)) {
                         $total = array_sum($rates);
                         $maxRate = max($rates);
                         } else {
                              echo "No rates found";
                        }
               ?>


</head>
 <body :class="{'dark bg-gray-900': darkMode === true}" x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }" x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value =&gt; localStorage.setItem('darkMode', JSON.stringify(value)))">
  <!-- ===== Preloader Start ===== -->
  <div class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black" x-init="window.addEventListener('DOMContentLoaded', () =&gt; {setTimeout(() =&gt; loaded = false, 500)})" x-show="loaded">
   <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-brand-500 border-t-transparent">
   </div>
  </div>
  <!-- ===== Preloader End ===== -->
  <!-- ===== Page Wrapper Start ===== -->
  
   </aside>
   <!-- ===== Sidebar End ===== -->
   <!-- ===== Content Area Start ===== -->
   <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
    <!-- Small Device Overlay Start -->
    <div :class="sidebarToggle ? 'block lg:hidden' : 'hidden'" class="fixed z-9 h-screen w-full bg-gray-900/50">
    </div>
    <!-- Small Device Overlay End -->
    <!-- ===== Main Content Start ===== -->
    <main>
     <!-- ===== Header Start ===== -->
     <header class="sticky top-0 z-99999 flex w-full border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900 lg:border-b" x-data="{menuToggle: false}">
      <div class="flex grow flex-col items-center justify-between lg:flex-row lg:px-6">
       <div class="flex w-full items-center justify-between gap-2 border-b border-gray-200 px-3 py-3 dark:border-gray-800 sm:gap-4 lg:justify-normal lg:border-b-0 lg:px-0 lg:py-4">
        <!-- Hamburger Toggle BTN -->
        
        <!-- Hamburger Toggle BTN -->
      
        <!-- Application nav menu button -->
         
        <!-- Application nav menu button -->
        <div class="hidden lg:block">
         <form>
          <div class="relative">
           <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2">
            <svg class="fill-gray-500 dark:fill-gray-400" fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
             <path clip-rule="evenodd" d="M3.04175 9.37363C3.04175 5.87693 5.87711 3.04199 9.37508 3.04199C12.8731 3.04199 15.7084 5.87693 15.7084 9.37363C15.7084 12.8703 12.8731 15.7053 9.37508 15.7053C5.87711 15.7053 3.04175 12.8703 3.04175 9.37363ZM9.37508 1.54199C5.04902 1.54199 1.54175 5.04817 1.54175 9.37363C1.54175 13.6991 5.04902 17.2053 9.37508 17.2053C11.2674 17.2053 13.003 16.5344 14.357 15.4176L17.177 18.238C17.4699 18.5309 17.9448 18.5309 18.2377 18.238C18.5306 17.9451 18.5306 17.4703 18.2377 17.1774L15.418 14.3573C16.5365 13.0033 17.2084 11.2669 17.2084 9.37363C17.2084 5.04817 13.7011 1.54199 9.37508 1.54199Z" fill="" fill-rule="evenodd">
             </path>
            </svg>
           </span>
           <input class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-200 bg-transparent py-2.5 pl-12 pr-14 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-800 dark:bg-gray-900 dark:bg-white/[0.03] dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800 xl:w-[430px]" id="search-input" placeholder="Search or type command..." type="text"/>
           <button class="absolute right-2.5 top-1/2 inline-flex -translate-y-1/2 items-center gap-0.5 rounded-lg border border-gray-200 bg-gray-50 px-[7px] py-[4.5px] text-xs -tracking-[0.2px] text-gray-500 dark:border-gray-800 dark:bg-white/[0.03] dark:text-gray-400" id="search-button">
            <span>
             ⌘
            </span>
            <span>
             K
            </span>
           </button>
          </div>
         </form>
        </div>
       </div>
       <div :class="menuToggle ? 'flex' : 'hidden'" class="w-full items-center justify-between gap-4 px-5 py-4 shadow-theme-md lg:flex lg:justify-end lg:px-0 lg:shadow-none">
        <div class="flex items-center gap-2 2xsm:gap-3">
        <button style="font-weight: bold; background-color: #5F8B4C; color: white; border-radius: 10px; padding: 10px 15px; border: none;"
           onclick="window.location.href='http://localhost:8080/product/create'">
           Add Post
        </button>

         <!-- Dark Mode Toggler -->
         <button @click.prevent="darkMode = !darkMode" class="hover:text-dark-900 relative flex h-11 w-11 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-500 transition-colors hover:bg-gray-100 hover:text-gray-700 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-white">
          <svg class="hidden dark:block" fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
           <path clip-rule="evenodd" d="M9.99998 1.5415C10.4142 1.5415 10.75 1.87729 10.75 2.2915V3.5415C10.75 3.95572 10.4142 4.2915 9.99998 4.2915C9.58577 4.2915 9.24998 3.95572 9.24998 3.5415V2.2915C9.24998 1.87729 9.58577 1.5415 9.99998 1.5415ZM10.0009 6.79327C8.22978 6.79327 6.79402 8.22904 6.79402 10.0001C6.79402 11.7712 8.22978 13.207 10.0009 13.207C11.772 13.207 13.2078 11.7712 13.2078 10.0001C13.2078 8.22904 11.772 6.79327 10.0009 6.79327ZM5.29402 10.0001C5.29402 7.40061 7.40135 5.29327 10.0009 5.29327C12.6004 5.29327 14.7078 7.40061 14.7078 10.0001C14.7078 12.5997 12.6004 14.707 10.0009 14.707C7.40135 14.707 5.29402 12.5997 5.29402 10.0001ZM15.9813 5.08035C16.2742 4.78746 16.2742 4.31258 15.9813 4.01969C15.6884 3.7268 15.2135 3.7268 14.9207 4.01969L14.0368 4.90357C13.7439 5.19647 13.7439 5.67134 14.0368 5.96423C14.3297 6.25713 14.8045 6.25713 15.0974 5.96423L15.9813 5.08035ZM18.4577 10.0001C18.4577 10.4143 18.1219 10.7501 17.7077 10.7501H16.4577C16.0435 10.7501 15.7077 10.4143 15.7077 10.0001C15.7077 9.58592 16.0435 9.25013 16.4577 9.25013H17.7077C18.1219 9.25013 18.4577 9.58592 18.4577 10.0001ZM14.9207 15.9806C15.2135 16.2735 15.6884 16.2735 15.9813 15.9806C16.2742 15.6877 16.2742 15.2128 15.9813 14.9199L15.0974 14.036C14.8045 13.7431 14.3297 13.7431 14.0368 14.036C13.7439 14.3289 13.7439 14.8038 14.0368 15.0967L14.9207 15.9806ZM9.99998 15.7088C10.4142 15.7088 10.75 16.0445 10.75 16.4588V17.7088C10.75 18.123 10.4142 18.4588 9.99998 18.4588C9.58577 18.4588 9.24998 18.123 9.24998 17.7088V16.4588C9.24998 16.0445 9.58577 15.7088 9.99998 15.7088ZM5.96356 15.0972C6.25646 14.8043 6.25646 14.3295 5.96356 14.0366C5.67067 13.7437 5.1958 13.7437 4.9029 14.0366L4.01902 14.9204C3.72613 15.2133 3.72613 15.6882 4.01902 15.9811C4.31191 16.274 4.78679 16.274 5.07968 15.9811L5.96356 15.0972ZM4.29224 10.0001C4.29224 10.4143 3.95645 10.7501 3.54224 10.7501H2.29224C1.87802 10.7501 1.54224 10.4143 1.54224 10.0001C1.54224 9.58592 1.87802 9.25013 2.29224 9.25013H3.54224C3.95645 9.25013 4.29224 9.58592 4.29224 10.0001ZM4.9029 5.9637C5.1958 6.25659 5.67067 6.25659 5.96356 5.9637C6.25646 5.6708 6.25646 5.19593 5.96356 4.90303L5.07968 4.01915C4.78679 3.72626 4.31191 3.72626 4.01902 4.01915C3.72613 4.31204 3.72613 4.78692 4.01902 5.07981L4.9029 5.9637Z" fill="currentColor" fill-rule="evenodd">
           </path>
          </svg>
          <svg class="dark:hidden" fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
           <path d="M17.4547 11.97L18.1799 12.1611C18.265 11.8383 18.1265 11.4982 17.8401 11.3266C17.5538 11.1551 17.1885 11.1934 16.944 11.4207L17.4547 11.97ZM8.0306 2.5459L8.57989 3.05657C8.80718 2.81209 8.84554 2.44682 8.67398 2.16046C8.50243 1.8741 8.16227 1.73559 7.83948 1.82066L8.0306 2.5459ZM12.9154 13.0035C9.64678 13.0035 6.99707 10.3538 6.99707 7.08524H5.49707C5.49707 11.1823 8.81835 14.5035 12.9154 14.5035V13.0035ZM16.944 11.4207C15.8869 12.4035 14.4721 13.0035 12.9154 13.0035V14.5035C14.8657 14.5035 16.6418 13.7499 17.9654 12.5193L16.944 11.4207ZM16.7295 11.7789C15.9437 14.7607 13.2277 16.9586 10.0003 16.9586V18.4586C13.9257 18.4586 17.2249 15.7853 18.1799 12.1611L16.7295 11.7789ZM10.0003 16.9586C6.15734 16.9586 3.04199 13.8433 3.04199 10.0003H1.54199C1.54199 14.6717 5.32892 18.4586 10.0003 18.4586V16.9586ZM3.04199 10.0003C3.04199 6.77289 5.23988 4.05695 8.22173 3.27114L7.83948 1.82066C4.21532 2.77574 1.54199 6.07486 1.54199 10.0003H3.04199ZM6.99707 7.08524C6.99707 5.52854 7.5971 4.11366 8.57989 3.05657L7.48132 2.03522C6.25073 3.35885 5.49707 5.13487 5.49707 7.08524H6.99707Z" fill="currentColor">
           </path>
          </svg>
         </button>
         <!-- Dark Mode Toggler -->
         <!-- Notification Menu Area -->
          <!-- Dropdown Start -->
         <!-- Notification Menu Area -->
        </div>
        <!-- User Area -->
        <div @click.outside="dropdownOpen = false" class="relative" x-data="{ dropdownOpen: false }">
         <a @click.prevent="dropdownOpen = ! dropdownOpen" class="flex items-center text-gray-700 dark:text-gray-400" href="#">
         
          <span class="mr-1 block text-theme-sm font-medium">
           Admin User
          </span>
          <svg :class="dropdownOpen &amp;&amp; 'rotate-180'" class="stroke-gray-500 dark:stroke-gray-400" fill="none" height="20" viewbox="0 0 18 20" width="18" xmlns="http://www.w3.org/2000/svg">
           <path d="M4.3125 8.65625L9 13.3437L13.6875 8.65625" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
           </path>
          </svg>
         </a>
         <!-- Dropdown Start -->
         <div class="absolute right-0 mt-[17px] flex w-[260px] flex-col rounded-2xl border border-gray-200 bg-white p-3 shadow-theme-lg dark:border-gray-800 dark:bg-gray-dark" x-show="dropdownOpen">
          <div>
           <span class="block text-theme-sm font-medium text-gray-700 dark:text-gray-400">
            Musharof Chowdhury
           </span>
           <span class="mt-0.5 block text-theme-xs text-gray-500 dark:text-gray-400">
            <a class="__cf_email__" data-cfemail="0c7e6d62686361797f697e4c7c65616663226f6361" href="/cdn-cgi/l/email-protection">
             [email protected]
            </a>
           </span>
          </div>
          <ul class="flex flex-col gap-1 border-b border-gray-200 pb-3 pt-4 dark:border-gray-800">
           <li>
            <a class="group flex items-center gap-3 rounded-lg px-3 py-2 text-theme-sm font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300" href="profile.html">
             <svg class="fill-gray-500 group-hover:fill-gray-700 dark:fill-gray-400 dark:group-hover:fill-gray-300" fill="none" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
              <path clip-rule="evenodd" d="M12 3.5C7.30558 3.5 3.5 7.30558 3.5 12C3.5 14.1526 4.3002 16.1184 5.61936 17.616C6.17279 15.3096 8.24852 13.5955 10.7246 13.5955H13.2746C15.7509 13.5955 17.8268 15.31 18.38 17.6167C19.6996 16.119 20.5 14.153 20.5 12C20.5 7.30558 16.6944 3.5 12 3.5ZM17.0246 18.8566V18.8455C17.0246 16.7744 15.3457 15.0955 13.2746 15.0955H10.7246C8.65354 15.0955 6.97461 16.7744 6.97461 18.8455V18.856C8.38223 19.8895 10.1198 20.5 12 20.5C13.8798 20.5 15.6171 19.8898 17.0246 18.8566ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM11.9991 7.25C10.8847 7.25 9.98126 8.15342 9.98126 9.26784C9.98126 10.3823 10.8847 11.2857 11.9991 11.2857C13.1135 11.2857 14.0169 10.3823 14.0169 9.26784C14.0169 8.15342 13.1135 7.25 11.9991 7.25ZM8.48126 9.26784C8.48126 7.32499 10.0563 5.75 11.9991 5.75C13.9419 5.75 15.5169 7.32499 15.5169 9.26784C15.5169 11.2107 13.9419 12.7857 11.9991 12.7857C10.0563 12.7857 8.48126 11.2107 8.48126 9.26784Z" fill="" fill-rule="evenodd">
              </path>
             </svg>
             Edit profile
            </a>
           </li>
           <li>
            <a class="group flex items-center gap-3 rounded-lg px-3 py-2 text-theme-sm font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300" href="chat.html">
             <svg class="fill-gray-500 group-hover:fill-gray-700 dark:fill-gray-400 dark:group-hover:fill-gray-300" fill="none" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
              <path clip-rule="evenodd" d="M10.4858 3.5L13.5182 3.5C13.9233 3.5 14.2518 3.82851 14.2518 4.23377C14.2518 5.9529 16.1129 7.02795 17.602 6.1682C17.9528 5.96567 18.4014 6.08586 18.6039 6.43667L20.1203 9.0631C20.3229 9.41407 20.2027 9.86286 19.8517 10.0655C18.3625 10.9253 18.3625 13.0747 19.8517 13.9345C20.2026 14.1372 20.3229 14.5859 20.1203 14.9369L18.6039 17.5634C18.4013 17.9142 17.9528 18.0344 17.602 17.8318C16.1129 16.9721 14.2518 18.0471 14.2518 19.7663C14.2518 20.1715 13.9233 20.5 13.5182 20.5H10.4858C10.0804 20.5 9.75182 20.1714 9.75182 19.766C9.75182 18.0461 7.88983 16.9717 6.40067 17.8314C6.04945 18.0342 5.60037 17.9139 5.39767 17.5628L3.88167 14.937C3.67903 14.586 3.79928 14.1372 4.15026 13.9346C5.63949 13.0748 5.63946 10.9253 4.15025 10.0655C3.79926 9.86282 3.67901 9.41401 3.88165 9.06303L5.39764 6.43725C5.60034 6.08617 6.04943 5.96581 6.40065 6.16858C7.88982 7.02836 9.75182 5.9539 9.75182 4.23399C9.75182 3.82862 10.0804 3.5 10.4858 3.5ZM13.5182 2L10.4858 2C9.25201 2 8.25182 3.00019 8.25182 4.23399C8.25182 4.79884 7.64013 5.15215 7.15065 4.86955C6.08213 4.25263 4.71559 4.61859 4.0986 5.68725L2.58261 8.31303C1.96575 9.38146 2.33183 10.7477 3.40025 11.3645C3.88948 11.647 3.88947 12.3531 3.40026 12.6355C2.33184 13.2524 1.96578 14.6186 2.58263 15.687L4.09863 18.3128C4.71562 19.3814 6.08215 19.7474 7.15067 19.1305C7.64015 18.8479 8.25182 19.2012 8.25182 19.766C8.25182 20.9998 9.25201 22 10.4858 22H13.5182C14.7519 22 15.7518 20.9998 15.7518 19.7663C15.7518 19.2015 16.3632 18.8487 16.852 19.1309C17.9202 19.7476 19.2862 19.3816 19.9029 18.3134L21.4193 15.6869C22.0361 14.6185 21.6701 13.2523 20.6017 12.6355C20.1125 12.3531 20.1125 11.647 20.6017 11.3645C21.6701 10.7477 22.0362 9.38152 21.4193 8.3131L19.903 5.68667C19.2862 4.61842 17.9202 4.25241 16.852 4.86917C16.3632 5.15138 15.7518 4.79856 15.7518 4.23377C15.7518 3.00024 14.7519 2 13.5182 2ZM9.6659 11.9999C9.6659 10.7103 10.7113 9.66493 12.0009 9.66493C13.2905 9.66493 14.3359 10.7103 14.3359 11.9999C14.3359 13.2895 13.2905 14.3349 12.0009 14.3349C10.7113 14.3349 9.6659 13.2895 9.6659 11.9999ZM12.0009 8.16493C9.88289 8.16493 8.1659 9.88191 8.1659 11.9999C8.1659 14.1179 9.88289 15.8349 12.0009 15.8349C14.1189 15.8349 15.8359 14.1179 15.8359 11.9999C15.8359 9.88191 14.1189 8.16493 12.0009 8.16493Z" fill="" fill-rule="evenodd">
              </path>
             </svg>
             Account settings
            </a>
           </li>
           <li>
            <a class="group flex items-center gap-3 rounded-lg px-3 py-2 text-theme-sm font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300" href="profile.html">
             <svg class="fill-gray-500 group-hover:fill-gray-700 dark:fill-gray-400 dark:group-hover:fill-gray-300" fill="none" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
              <path clip-rule="evenodd" d="M3.5 12C3.5 7.30558 7.30558 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C7.30558 20.5 3.5 16.6944 3.5 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM11.0991 7.52507C11.0991 8.02213 11.5021 8.42507 11.9991 8.42507H12.0001C12.4972 8.42507 12.9001 8.02213 12.9001 7.52507C12.9001 7.02802 12.4972 6.62507 12.0001 6.62507H11.9991C11.5021 6.62507 11.0991 7.02802 11.0991 7.52507ZM12.0001 17.3714C11.5859 17.3714 11.2501 17.0356 11.2501 16.6214V10.9449C11.2501 10.5307 11.5859 10.1949 12.0001 10.1949C12.4143 10.1949 12.7501 10.5307 12.7501 10.9449V16.6214C12.7501 17.0356 12.4143 17.3714 12.0001 17.3714Z" fill="" fill-rule="evenodd">
              </path>
             </svg>
             Support
            </a>
           </li>
          </ul>
          <button class="group mt-3 flex items-center gap-3 rounded-lg px-3 py-2 text-theme-sm font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300">
           <svg class="fill-gray-500 group-hover:fill-gray-700 dark:group-hover:fill-gray-300" fill="none" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" d="M15.1007 19.247C14.6865 19.247 14.3507 18.9112 14.3507 18.497L14.3507 14.245H12.8507V18.497C12.8507 19.7396 13.8581 20.747 15.1007 20.747H18.5007C19.7434 20.747 20.7507 19.7396 20.7507 18.497L20.7507 5.49609C20.7507 4.25345 19.7433 3.24609 18.5007 3.24609H15.1007C13.8581 3.24609 12.8507 4.25345 12.8507 5.49609V9.74501L14.3507 9.74501V5.49609C14.3507 5.08188 14.6865 4.74609 15.1007 4.74609L18.5007 4.74609C18.9149 4.74609 19.2507 5.08188 19.2507 5.49609L19.2507 18.497C19.2507 18.9112 18.9149 19.247 18.5007 19.247H15.1007ZM3.25073 11.9984C3.25073 12.2144 3.34204 12.4091 3.48817 12.546L8.09483 17.1556C8.38763 17.4485 8.86251 17.4487 9.15549 17.1559C9.44848 16.8631 9.44863 16.3882 9.15583 16.0952L5.81116 12.7484L16.0007 12.7484C16.4149 12.7484 16.7507 12.4127 16.7507 11.9984C16.7507 11.5842 16.4149 11.2484 16.0007 11.2484L5.81528 11.2484L9.15585 7.90554C9.44864 7.61255 9.44847 7.13767 9.15547 6.84488C8.86248 6.55209 8.3876 6.55226 8.09481 6.84525L3.52309 11.4202C3.35673 11.5577 3.25073 11.7657 3.25073 11.9984Z" fill="" fill-rule="evenodd">
            </path>
           </svg>
           Sign out
          </button>
         </div>
         <!-- Dropdown End -->
        </div>
        <!-- User Area -->
       </div>
      </div>
     </header>
     <!-- ===== Header End ===== -->
     <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
      <div class="grid grid-cols-12 gap-4 md:gap-6">
       <div class="col-span-12 space-y-6 xl:col-span-7">
        <!-- Metric Group One -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-6">
         <!-- Metric Item Start -->
         <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
          <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800">
           <svg class="fill-gray-800 dark:fill-white/90" fill="none" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" d="M8.80443 5.60156C7.59109 5.60156 6.60749 6.58517 6.60749 7.79851C6.60749 9.01185 7.59109 9.99545 8.80443 9.99545C10.0178 9.99545 11.0014 9.01185 11.0014 7.79851C11.0014 6.58517 10.0178 5.60156 8.80443 5.60156ZM5.10749 7.79851C5.10749 5.75674 6.76267 4.10156 8.80443 4.10156C10.8462 4.10156 12.5014 5.75674 12.5014 7.79851C12.5014 9.84027 10.8462 11.4955 8.80443 11.4955C6.76267 11.4955 5.10749 9.84027 5.10749 7.79851ZM4.86252 15.3208C4.08769 16.0881 3.70377 17.0608 3.51705 17.8611C3.48384 18.0034 3.5211 18.1175 3.60712 18.2112C3.70161 18.3141 3.86659 18.3987 4.07591 18.3987H13.4249C13.6343 18.3987 13.7992 18.3141 13.8937 18.2112C13.9797 18.1175 14.017 18.0034 13.9838 17.8611C13.7971 17.0608 13.4132 16.0881 12.6383 15.3208C11.8821 14.572 10.6899 13.955 8.75042 13.955C6.81096 13.955 5.61877 14.572 4.86252 15.3208ZM3.8071 14.2549C4.87163 13.2009 6.45602 12.455 8.75042 12.455C11.0448 12.455 12.6292 13.2009 13.6937 14.2549C14.7397 15.2906 15.2207 16.5607 15.4446 17.5202C15.7658 18.8971 14.6071 19.8987 13.4249 19.8987H4.07591C2.89369 19.8987 1.73504 18.8971 2.05628 17.5202C2.28015 16.5607 2.76117 15.2906 3.8071 14.2549ZM15.3042 11.4955C14.4702 11.4955 13.7006 11.2193 13.0821 10.7533C13.3742 10.3314 13.6054 9.86419 13.7632 9.36432C14.1597 9.75463 14.7039 9.99545 15.3042 9.99545C16.5176 9.99545 17.5012 9.01185 17.5012 7.79851C17.5012 6.58517 16.5176 5.60156 15.3042 5.60156C14.7039 5.60156 14.1597 5.84239 13.7632 6.23271C13.6054 5.73284 13.3741 5.26561 13.082 4.84371C13.7006 4.37777 14.4702 4.10156 15.3042 4.10156C17.346 4.10156 19.0012 5.75674 19.0012 7.79851C19.0012 9.84027 17.346 11.4955 15.3042 11.4955ZM19.9248 19.8987H16.3901C16.7014 19.4736 16.9159 18.969 16.9827 18.3987H19.9248C20.1341 18.3987 20.2991 18.3141 20.3936 18.2112C20.4796 18.1175 20.5169 18.0034 20.4837 17.861C20.2969 17.0607 19.913 16.088 19.1382 15.3208C18.4047 14.5945 17.261 13.9921 15.4231 13.9566C15.2232 13.6945 14.9995 13.437 14.7491 13.1891C14.5144 12.9566 14.262 12.7384 13.9916 12.5362C14.3853 12.4831 14.8044 12.4549 15.2503 12.4549C17.5447 12.4549 19.1291 13.2008 20.1936 14.2549C21.2395 15.2906 21.7206 16.5607 21.9444 17.5202C22.2657 18.8971 21.107 19.8987 19.9248 19.8987Z" fill="" fill-rule="evenodd">
            </path>
           </svg>
          </div>
          <div class="mt-5 flex items-end justify-between">
           <div>
            <span class="text-sm text-gray-500 dark:text-gray-400">
              Total Post
            </span>
            <h4 class="mt-2 text-title-sm font-bold text-gray-800 dark:text-white/90">
            <?php echo $i; ?>
            </h4>
           </div>
           <span class="flex items-center gap-1 rounded-full bg-success-50 py-0.5 pl-2 pr-2.5 text-sm font-medium text-success-600 dark:bg-success-500/15 dark:text-success-500">
            <svg class="fill-current" fill="none" height="12" viewbox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg">
             <path clip-rule="evenodd" d="M5.56462 1.62393C5.70193 1.47072 5.90135 1.37432 6.12329 1.37432C6.1236 1.37432 6.12391 1.37432 6.12422 1.37432C6.31631 1.37415 6.50845 1.44731 6.65505 1.59381L9.65514 4.5918C9.94814 4.88459 9.94831 5.35947 9.65552 5.65246C9.36273 5.94546 8.88785 5.94562 8.59486 5.65283L6.87329 3.93247L6.87329 10.125C6.87329 10.5392 6.53751 10.875 6.12329 10.875C5.70908 10.875 5.37329 10.5392 5.37329 10.125L5.37329 3.93578L3.65516 5.65282C3.36218 5.94562 2.8873 5.94547 2.5945 5.65248C2.3017 5.35949 2.30185 4.88462 2.59484 4.59182L5.56462 1.62393Z" fill="" fill-rule="evenodd">
             </path>
            </svg>
            <?php echo (($i-2)*10/100)*100 ?>%
           </span>
          </div>
         </div>
         <!-- Metric Item End -->
         <!-- Metric Item Start -->
         <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
          <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800">
           <svg class="fill-gray-800 dark:fill-white/90" fill="none" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" d="M11.665 3.75621C11.8762 3.65064 12.1247 3.65064 12.3358 3.75621L18.7807 6.97856L12.3358 10.2009C12.1247 10.3065 11.8762 10.3065 11.665 10.2009L5.22014 6.97856L11.665 3.75621ZM4.29297 8.19203V16.0946C4.29297 16.3787 4.45347 16.6384 4.70757 16.7654L11.25 20.0366V11.6513C11.1631 11.6205 11.0777 11.5843 10.9942 11.5426L4.29297 8.19203ZM12.75 20.037L19.2933 16.7654C19.5474 16.6384 19.7079 16.3787 19.7079 16.0946V8.19202L13.0066 11.5426C12.9229 11.5844 12.8372 11.6208 12.75 11.6516V20.037ZM13.0066 2.41456C12.3732 2.09786 11.6277 2.09786 10.9942 2.41456L4.03676 5.89319C3.27449 6.27432 2.79297 7.05342 2.79297 7.90566V16.0946C2.79297 16.9469 3.27448 17.726 4.03676 18.1071L10.9942 21.5857L11.3296 20.9149L10.9942 21.5857C11.6277 21.9024 12.3732 21.9024 13.0066 21.5857L19.9641 18.1071C20.7264 17.726 21.2079 16.9469 21.2079 16.0946V7.90566C21.2079 7.05342 20.7264 6.27432 19.9641 5.89319L13.0066 2.41456Z" fill="" fill-rule="evenodd">
            </path>
           </svg>
          </div>
          <div class="mt-5 flex items-end justify-between">
           <div>
            <span class="text-sm text-gray-500 dark:text-gray-400">
             Total Rating
            </span>
            <h4 class="mt-2 text-title-sm font-bold text-gray-800 dark:text-white/90">
              <?php echo $total; ?>
            </h4>
           </div>
           <span class="flex items-center gap-1 rounded-full bg-error-50 py-0.5 pl-2 pr-2.5 text-sm font-medium text-error-600 dark:bg-error-500/15 dark:text-error-500">
            <svg class="fill-current" fill="none" height="12" viewbox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg">
             <path clip-rule="evenodd" d="M5.31462 10.3761C5.45194 10.5293 5.65136 10.6257 5.87329 10.6257C5.8736 10.6257 5.8739 10.6257 5.87421 10.6257C6.0663 10.6259 6.25845 10.5527 6.40505 10.4062L9.40514 7.4082C9.69814 7.11541 9.69831 6.64054 9.40552 6.34754C9.11273 6.05454 8.63785 6.05438 8.34486 6.34717L6.62329 8.06753L6.62329 1.875C6.62329 1.46079 6.28751 1.125 5.87329 1.125C5.45908 1.125 5.12329 1.46079 5.12329 1.875L5.12329 8.06422L3.40516 6.34719C3.11218 6.05439 2.6373 6.05454 2.3445 6.34752C2.0517 6.64051 2.05185 7.11538 2.34484 7.40818L5.31462 10.3761Z" fill="" fill-rule="evenodd">
             </path>
            </svg>
            <?php echo ($total*10/100)*100 ?>%
           </span>
          </div>
         </div>
         <!-- Metric Item End -->
        </div>
        <!-- Metric Group One -->
        <!-- ====== Chart One Start -->
        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white px-5 pt-5 sm:px-6 sm:pt-6 dark:border-gray-800 dark:bg-white/[0.03] col-span-12 w-full max-w-full mx-0 px-0">
        <div class="flex items-center justify-between col-span-12 w-full w-full mx-0 px-0">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">Post Performance</h3>
    </div>
    <div class="max-w-full overflow-x-auto custom-scrollbar">
        <canvas  id="chartOne"></canvas>
    </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                let ctx = document.getElementById("chartOne").getContext("2d");
                
                // PHP data passed as JSON to JavaScript
                let productData = <?= json_encode($products) ?>;
                let titles = productData.map(product => product.Title);
                let ratings = productData.map(product => product.rate);

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: titles,
                        datasets: [{
                            label: 'Ratings',
                            data: ratings,
                            backgroundColor: 'rgba(54, 162, 235, 0.5)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true,
                                max: 10
                            }
                        }
                    }
                });
            });
        </script>

        <!-- ====== Chart One End -->
       </div>
       <div class="col-span-12 xl:col-span-5">
        <!-- ====== Chart Two Start -->
        <div class="rounded-2xl border border-gray-200 bg-gray-100 dark:border-gray-800 dark:bg-white/[0.03]">
         <div class="shadow-default rounded-2xl bg-white px-5 pb-11 pt-5 dark:bg-gray-900 sm:px-6 sm:pt-6">
          <div class="flex justify-between">
           <div>
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
             Maximum Rating
            </h3>
            <p class="mt-1 text-theme-sm text-gray-500 dark:text-gray-400">
            &Tab; &Tab; OverView of The Preformance of the Product
            </p>
           </div>
           <div class="relative h-fit" x-data="{openDropDown: false}">
           </div>
          </div>
         </div>
         <div class="flex items-center justify-center gap-5 px-6 py-3.5 sm:gap-8 sm:py-5">
          <div>
           <p class="mb-1 text-center text-theme-xs text-gray-500 dark:text-gray-400 sm:text-sm">
            Max Rating
           </p>
           <p class="flex items-center justify-center gap-1 text-base font-semibold text-gray-800 dark:text-white/90 sm:text-lg">
            <?php echo $maxRate; ?>
             <path clip-rule="evenodd" d="M7.26816 13.6632C7.4056 13.8192 7.60686 13.9176 7.8311 13.9176C7.83148 13.9176 7.83187 13.9176 7.83226 13.9176C8.02445 13.9178 8.21671 13.8447 8.36339 13.6981L12.3635 9.70076C12.6565 9.40797 12.6567 8.9331 12.3639 8.6401C12.0711 8.34711 11.5962 8.34694 11.3032 8.63973L8.5811 11.36L8.5811 2.5C8.5811 2.08579 8.24531 1.75 7.8311 1.75C7.41688 1.75 7.0811 2.08579 7.0811 2.5L7.0811 11.3556L4.36354 8.63975C4.07055 8.34695 3.59568 8.3471 3.30288 8.64009C3.01008 8.93307 3.01023 9.40794 3.30321 9.70075L7.26816 13.6632Z" fill="#D92D20" fill-rule="evenodd">
             </path>
            </svg>
           </p>
          </div>
          <div class="h-7 w-px bg-gray-200 dark:bg-gray-800">
          </div>
          <div>
           <p class="mb-1 text-center text-theme-xs text-gray-500 dark:text-gray-400 sm:text-sm">
            Total Rating
           </p>
           <p class="flex items-center justify-center gap-1 text-base font-semibold text-gray-800 dark:text-white/90 sm:text-lg">
            <?php echo $total; ?>
             <path clip-rule="evenodd" d="M7.60141 2.33683C7.73885 2.18084 7.9401 2.08243 8.16435 2.08243C8.16475 2.08243 8.16516 2.08243 8.16556 2.08243C8.35773 2.08219 8.54998 2.15535 8.69664 2.30191L12.6968 6.29924C12.9898 6.59203 12.9899 7.0669 12.6971 7.3599C12.4044 7.6529 11.9295 7.65306 11.6365 7.36027L8.91435 4.64004L8.91435 13.5C8.91435 13.9142 8.57856 14.25 8.16435 14.25C7.75013 14.25 7.41435 13.9142 7.41435 13.5L7.41435 4.64442L4.69679 7.36025C4.4038 7.65305 3.92893 7.6529 3.63613 7.35992C3.34333 7.06693 3.34348 6.59206 3.63646 6.29926L7.60141 2.33683Z" fill="#039855" fill-rule="evenodd">
             </path>
            </svg>
           </p>
          </div>
          <div class="h-7 w-px bg-gray-200 dark:bg-gray-800">
          </div>
          <div>
           <p class="mb-1 text-center text-theme-xs text-gray-500 dark:text-gray-400 sm:text-sm">
            Total Post
           </p>
           <p class="flex items-center justify-center gap-1 text-base font-semibold text-gray-800 dark:text-white/90 sm:text-lg">
            <?php echo $i; ?>
             <path clip-rule="evenodd" d="M7.60141 2.33683C7.73885 2.18084 7.9401 2.08243 8.16435 2.08243C8.16475 2.08243 8.16516 2.08243 8.16556 2.08243C8.35773 2.08219 8.54998 2.15535 8.69664 2.30191L12.6968 6.29924C12.9898 6.59203 12.9899 7.0669 12.6971 7.3599C12.4044 7.6529 11.9295 7.65306 11.6365 7.36027L8.91435 4.64004L8.91435 13.5C8.91435 13.9142 8.57856 14.25 8.16435 14.25C7.75013 14.25 7.41435 13.9142 7.41435 13.5L7.41435 4.64442L4.69679 7.36025C4.4038 7.65305 3.92893 7.6529 3.63613 7.35992C3.34333 7.06693 3.34348 6.59206 3.63646 6.29926L7.
            <svg fill="none" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
             <path clip-rule="evenodd" d="M7.60141 2.33683C7.73885 2.18084 7.9401 2.08243 8.16435 2.08243C8.16475 2.08243 8.16516 2.08243 8.16556 2.08243C8.35773 2.08219 8.54998 2.15535 8.69664 2.30191L12.6968 6.29924C12.9898 6.59203 12.9899 7.0669 12.6971 7.3599C12.4044 7.6529 11.9295 7.65306 11.6365 7.36027L8.91435 4.64004L8.91435 13.5C8.91435 13.9142 8.57856 14.25 8.16435 14.25C7.75013 14.25 7.41435 13.9142 7.41435 13.5L7.41435 4.64442L4.69679 7.36025C4.4038 7.65305 3.92893 7.6529 3.63613 7.35992C3.34333 7.06693 3.34348 6.59206 3.63646 6.29926L7.60141 2.33683Z" fill="#039855" fill-rule="evenodd">
             </path>
            </svg>
           </p>
          </div>
         </div>
        </div>
        <!-- ====== Chart Two End -->
       </div>
       <div class="col-span-12">
        <!-- ====== Chart Three Start -->
        <div class="rounded-2xl border border-gray-200 bg-white px-5 pb-5 pt-5 dark:border-gray-800 dark:bg-white/[0.03] sm:px-6 sm:pt-6">
         <div class="flex flex-col gap-5 mb-6 sm:flex-row sm:justify-between">
          <div class="w-full">
           <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
            Statistics
           </h3>
           <p class="mt-1 text-gray-500 text-theme-sm dark:text-gray-400">
            Target you’ve set for each month
           </p>
          </div>
          <div class="flex items-start w-full gap-3 sm:justify-end">
           <div class="inline-flex w-fit items-center gap-0.5 rounded-lg bg-gray-100 p-0.5 dark:bg-gray-900" x-data="{selected: 'overview'}">
            <button :class="selected === 'overview' ? 'shadow-theme-xs text-gray-900 dark:text-white bg-white dark:bg-gray-800' : 'text-gray-500 dark:text-gray-400'" @click="selected = 'overview'" class="px-3 py-2 font-medium rounded-md text-theme-sm hover:text-gray-900 dark:hover:text-white">
             Overview
            </button>
            <button :class="selected === 'sales' ? 'shadow-theme-xs text-gray-900 dark:text-white bg-white dark:bg-gray-800' : 'text-gray-500 dark:text-gray-400'" @click="selected = 'sales'" class="px-3 py-2 font-medium rounded-md text-theme-sm hover:text-gray-900 dark:hover:text-white">
             Sales
            </button>
            <button :class="selected === 'revenue' ? 'shadow-theme-xs text-gray-900 dark:text-white bg-white dark:bg-gray-800' : 'text-gray-500 dark:text-gray-400'" @click="selected = 'revenue'" class="px-3 py-2 font-medium rounded-md text-theme-sm hover:text-gray-900 dark:hover:text-white">
             Revenue
            </button>
           </div>
           <div class="relative w-fit">
            <input class="datepicker h-10 w-full max-w-11 rounded-lg border border-gray-200 bg-white py-2.5 pl-[34px] pr-4 text-theme-sm font-medium text-gray-700 shadow-theme-xs focus:outline-hidden focus:ring-0 focus-visible:outline-hidden dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 xl:max-w-fit xl:pl-11" data-class="flatpickr-right" placeholder="Select dates" readonly="readonly"/>
            <div class="absolute inset-0 right-auto flex items-center pointer-events-none left-4">
             <svg class="fill-gray-700 dark:fill-gray-400" fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
              <path clip-rule="evenodd" d="M6.66683 1.54199C7.08104 1.54199 7.41683 1.87778 7.41683 2.29199V3.00033H12.5835V2.29199C12.5835 1.87778 12.9193 1.54199 13.3335 1.54199C13.7477 1.54199 14.0835 1.87778 14.0835 2.29199V3.00033L15.4168 3.00033C16.5214 3.00033 17.4168 3.89576 17.4168 5.00033V7.50033V15.8337C17.4168 16.9382 16.5214 17.8337 15.4168 17.8337H4.5835C3.47893 17.8337 2.5835 16.9382 2.5835 15.8337V7.50033V5.00033C2.5835 3.89576 3.47893 3.00033 4.5835 3.00033L5.91683 3.00033V2.29199C5.91683 1.87778 6.25262 1.54199 6.66683 1.54199ZM6.66683 4.50033H4.5835C4.30735 4.50033 4.0835 4.72418 4.0835 5.00033V6.75033H15.9168V5.00033C15.9168 4.72418 15.693 4.50033 15.4168 4.50033H13.3335H6.66683ZM15.9168 8.25033H4.0835V15.8337C4.0835 16.1098 4.30735 16.3337 4.5835 16.3337H15.4168C15.693 16.3337 15.9168 16.1098 15.9168 15.8337V8.25033Z" fill="" fill-rule="evenodd">
              </path>
             </svg>
            </div>
           </div>
          </div>
         </div>
         <div class="max-w-full overflow-x-auto custom-scrollbar">
          <div class="-ml-4 min-w-[700px] pl-2 xl:min-w-full" id="chartThree">
          </div>
         </div>
        </div>
        <!-- ====== Chart Three End -->
       </div>
       <div class="col-span-12 col-span-12 w-full">
        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white px-4 pt-4 pb-3 sm:px-6 dark:border-gray-800 dark:bg-white/[0.03] w-full">
         <div class="flex flex-col gap-2 mb-4 sm:flex-row sm:items-center sm:justify-between col-span-12 w-full">
          <div>
           <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
            View All Posts
           </h3>
          </div>
          <div class="flex items-center gap-3">
           <button class="text-theme-sm shadow-theme-xs inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
            <svg class="stroke-current fill-white dark:fill-gray-800" fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
             <path d="M2.29004 5.90393H17.7067" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
             </path>
             <path d="M17.7075 14.0961H2.29085" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
             </path>
             <path d="M12.0826 3.33331C13.5024 3.33331 14.6534 4.48431 14.6534 5.90414C14.6534 7.32398 13.5024 8.47498 12.0826 8.47498C10.6627 8.47498 9.51172 7.32398 9.51172 5.90415C9.51172 4.48432 10.6627 3.33331 12.0826 3.33331Z" fill="" stroke="" stroke-width="1.5">
             </path>
             <path d="M7.91745 11.525C6.49762 11.525 5.34662 12.676 5.34662 14.0959C5.34661 15.5157 6.49762 16.6667 7.91745 16.6667C9.33728 16.6667 10.4883 15.5157 10.4883 14.0959C10.4883 12.676 9.33728 11.525 7.91745 11.525Z" fill="" stroke="" stroke-width="1.5">
             </path>
            </svg>
            Filter
           </button>
           <button class="text-theme-sm shadow-theme-xs inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
            See all
           </button>
          </div>
         </div>
         <div class="max-w-full overflow-x-auto custom-scrollbar">
          <table class="min-w-full">
           <!-- table header start -->
           <thead class="border-gray-100 border-y dark:border-gray-800">
            <tr>
             <th class="px-6 py-3 whitespace-nowrap first:pl-0">
              <div class="flex items-center">
               <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                Title
               </p>
              </div>
             </th>
             <th class="px-6 py-3 whitespace-nowrap">
              <div class="flex items-center">
               <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                Name
               </p>
              </div>
             </th>
             <th class="px-6 py-3 whitespace-nowrap">
              <div class="flex items-center">
               <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
               Content
               </p>
              </div>
             </th>
             <th class="px-6 py-3 whitespace-nowrap">
              <div class="flex items-center">
               <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                Rate
               </p>
              </div>
             </th>
            </tr>
           </thead>
           <!-- table header end -->
           <!-- table body start -->
           <tbody>
              <?php foreach ($products as $product): ?>
              <tr>
                  <td class="px-6 py-3 whitespace-nowrap first:pl-0">
                      <div class="flex items-center">
                          <div>
                              <p class="font-medium text-gray-800 text-theme-sm dark:text-white/90">
                                  <?= esc($product['Title']) ?>
                              </p>
                          </div>
                      </div>
                  </td>
                  <td class="px-6 py-3 whitespace-nowrap first:pl-0">
                      <div class="flex items-center">
                          <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                              <?= esc($product['name']) ?>
                          </p>
                      </div>
                  </td>
                  <td class="px-6 py-3 whitespace-nowrap first:pl-0">
                      <div class="flex items-center">
                          <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                            <?= esc($product['content']) ?>
                          </p>
                      </div>
                  </td>
                  <td class="px-6 py-3 whitespace-nowrap first:pl-0">
                      <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                              <div class="progress-percentage">
                                  <span class="text-xs font-weight-bold">
                                      <?= esc($product['rate'] * 10) ?>%
                                      &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                                      <button style="font-weight: bold; background-color: #5F8B4C; color: white; border-radius: 10px; padding: 10px 15px; border: none;"
                                        onclick="window.location.href='<?= base_url('product/edit/' . urlencode($product['hashed_id'])); ?>'">
                                        Update
                                      </button>

                                      &nbsp;&nbsp; &nbsp;&nbsp;

                                      <button style="font-weight: bold; background-color:rgb(144, 28, 28); color: white; border-radius: 10px; padding: 10px 15px; border: none;"
                                        onclick="confirm('Are you sure you want to delete this product?'); window.location.href='<?= base_url('product/delete/' . urlencode($product['hashed_id'])); ?>'">                                                                                           
                                             Delete
                                      </button>
                                  </span>
                              </div>
                          </div>
                          <div class="progress">
                          <div class="flex items-center">
                          <div class="progress-bar bg-gradient-info w-<?= esc($product['rate'] * 10) ?>" 
                                  role="progressbar" 
                                  aria-valuenow="<?= esc($product['rate'] * 10) ?>" 
                                  aria-valuemin="0" 
                                  aria-valuemax="100">
                              </div>
                             </p>
                        </div>
                          </div>
                      </div>
                  </td>
              </tr>
              <?php endforeach; ?>
          </tbody>
          </table>
         </div>
        </div>
        <!-- ====== Table One End -->
       </div>
      </div>
     </div>
    </main>
    <!-- ===== Main Content End ===== -->
   </div>
   <!-- ===== Content Area End ===== -->
  </div>
  <br/> <br/> <br/> <br/> <br/> <br/>

  <!-- ===== Page Wrapper End ===== -->
 </body>
</html>
