<?php
require_once './env.php';
require_once 'data/socials.php'
?>
<footer class="bg-white dark:bg-neutral-900 pt-16 pb-8 px-4 md:px-8">
   <div class="max-w-7xl mx-auto">
      <?php /* (Please make sure you add the number of columns or update the number of columns accordingly in the PHP in the style of Tailwind. This is very necessary. In the next line that is of grid. ) */ ?>
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-y-16 gap-x-12 sm:gap-x-8">

         <!-- Logo -->
         <div class="lg:flex lg:items-center">
            <a href="<?= $ENV['APP_BASE_PATH'] . '/' ?>" class="block focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
               <img src="<?= $ENV['APP_BASE_PATH'] . $ENV['APP_ASSET_PATH'] . '/images/logo.png' ?>" alt="logo" class="w-18" />
            </a>
         </div>

         <!-- Socials -->
         <div>
            <h3 class="text-slate-900 dark:text-slate-50 font-semibold text-sm mb-6">Connect</h3>
            <div class="lg:flex lg:items-center">
               <ul class="flex flex-wrap justify-center gap-6">
                  <?php
                  foreach ($socials as $key => $value) {

                     $social_link = $value['link_prefix'] . $value['username'];
                     $image_url = $ENV['APP_BASE_PATH'] . $ENV['APP_ASSET_PATH']. $value['icon'];
                     $svg_path = $_SERVER['DOCUMENT_ROOT'] . $image_url;
                     $svg_code = file_get_contents($svg_path);

                     echo
                     "<li>" .
                        "<a href=\"{$social_link}\"
                     class=\"flex items-center bg-slate-200 dark:bg-neutral-800 w-8 h-8 p-2 rounded-full focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500\"
                     aria-label=\"{$key}\" target=\"_blank\" >" .
                        "{$svg_code}" .
                        "</a></li>";
                  }
                  ?>
               </ul>
            </div>
         </div>

         <?php /* Other Columns () */ ?>

         <div>
            <h3 class="text-slate-900 dark:text-slate-50 font-semibold text-sm mb-6">Information</h3>
            <ul class="space-y-4 text-slate-600 dark:text-slate-400 text-sm font-normal">
               <?php
               $arr = [
                  "About Us" => $ENV["APP_BASE_PATH"] . "/about.php",
                  "Contact Us" => $ENV["APP_BASE_PATH"] . "/contact.php",
                  "Privacy Policy" => $ENV["APP_BASE_PATH"] . "/",
                  "Terms &amp; Conditions" => $ENV["APP_BASE_PATH"] . "/",
               ];
               foreach ($arr as $name => $url) {
                  echo "<li> <a href=\"{$url}\"" .
                     "class=\"hover:text-slate-900 dark:hover:text-slate-50 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded transition-all\">" .
                     $name . "</a></li>";
               }
               ?>
            </ul>
         </div>

      </div>

      <div class="lg:flex justify-between">
         <p class="text-slate-600 dark:text-slate-400 text-sm mt-8">
            &copy; <?php echo date('Y') . ' ' . $ENV['COMPANY_NAME']; ?>. All rights reserved.
         </p>
         <p class="text-slate-600 dark:text-slate-400 flex items-center text-sm mt-8 gap-1">
            Built with <span id="loveIcon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart h-4 w-4 text-red-500 fill-red-500">
                  <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
               </svg></span> by Swarnadeep Paul
         </p>
      </div>
   </div>
</footer>
<script>
   const heart = document.getElementById("loveIcon");

   let scale = 1;
   let growing = true;

   function animateHeart() {
      if (growing) {
         scale += 0.005;
         if (scale >= 1.2)
            growing = false;
      } else {
         scale -= 0.005;

         if (scale <= 1)
            growing = true;
      }

      heart.style.transform = `scale(${scale})`;
      heart.style.display = "inline-block";
      heart.style.transformOrigin = "center";

      window.requestAnimationFrame(animateHeart);
   }

   animateHeart();
</script>
