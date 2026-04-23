<?php
require_once './env.php';

$list_arr = [
   "Home" => '/',
   "Blog" => "/blog/",
   "About" => '/about.php',
   "Contact" => '/contact.php',
];
?>
<header class="absolute inset-x-0 top-0 z-50">
   <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">
      <div class="flex lg:flex-1">
         <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only"><?= $ENV['COMPANY_NAME'] ?></span>
            <img src="<?= $ENV['APP_BASE_PATH'] . $ENV['APP_ASSET_PATH'] . "/images/logo.png" ?>" alt="" class="h-8 w-auto" />
         </a>
      </div>
      <div class="flex lg:hidden">
         <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 dark:text-gray-200">
            <span class="sr-only">Open main menu</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
               <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
         </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
         <?php 
            foreach ($list_arr as $name => $url_suffix) {
               $url = $ENV['APP_BASE_PATH'] . $url_suffix;
               echo "<a href=\"{$url}\" class=\"text-sm/6 font-semibold text-gray-900 dark:text-white\">{$name}</a>";
            }
         ?>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:gap-x-6">
         <a href="<?= $ENV['APP_BASE_PATH'] . '/login.php' ?>" 
            class="text-sm/6 font-semibold text-gray-900 dark:text-white">Log in</a>
         <a href="<?= $ENV['APP_BASE_PATH'] . '/signup.php' ?>" 
            class="text-sm/6 font-semibold text-gray-900 dark:text-white">Sign Up</a>
      </div>
   </nav>
   <el-dialog>
      <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
         <div tabindex="0" class="fixed inset-0 focus:outline-none">
            <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 dark:bg-gray-900 dark:sm:ring-gray-100/10">
               <div class="flex items-center justify-between">
                  <a href="#" class="-m-1.5 p-1.5">
                     <span class="sr-only"><?= $ENV['COMPANY_NAME'] ?></span>
                     <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto dark:hidden" />
                     <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="" class="h-8 w-auto not-dark:hidden" />
                  </a>
                  <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-700 dark:text-gray-200">
                     <span class="sr-only">Close menu</span>
                     <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                  </button>
               </div>
               <div class="mt-6 flow-root">
                  <div class="-my-6 divide-y divide-gray-500/10 dark:divide-white/10">
                     <div class="space-y-2 py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Product</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Features</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Marketplace</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Company</a>
                     </div>
                     <div class="py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Log in</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Log in</a>
                     </div>
                  </div>
               </div>
            </el-dialog-panel>
         </div>
      </dialog>
   </el-dialog>
</header>   
<script>
   const toggleOpen = document.getElementById('toggleOpen');
   const toggleClose = document.getElementById('toggleClose');
   const menu = document.getElementById('collapseMenu');

   let lastFocusedElement = null;

   function openMenu() {
      lastFocusedElement = document.activeElement;
      menu.classList.remove('hidden');
      toggleOpen.setAttribute('aria-expanded', 'true');
      menu.focus();
   }

   function closeMenu() {
      menu.classList.add('hidden');
      toggleOpen.setAttribute('aria-expanded', 'false');
      lastFocusedElement?.focus();
   }

   toggleOpen.addEventListener('click', openMenu);
   toggleClose.addEventListener('click', closeMenu);

   document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && !menu.classList.contains('hidden')) {
         closeMenu();
      }
   });
</script>
