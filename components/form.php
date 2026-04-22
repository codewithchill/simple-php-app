<form class="px-4 mt-6">
   <div class="space-y-4 max-w-sm mx-auto">
      <div>
         <label for="email"
            class="mb-2 text-slate-900 dark:text-slate-50 font-medium text-sm inline-block">Email</label>
         <input type="email" id="email" name="email" placeholder="john@readymadeui.com" required
            class="px-3 py-2.5 text-sm text-slate-900 dark:text-slate-50 rounded-md bg-white dark:bg-neutral-800 w-full outline-1 -outline-offset-1 outline-slate-300 dark:outline-neutral-700 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600" />
      </div>
      <div>
         <label for="password"
            class="mb-2 text-slate-900 dark:text-slate-50 font-medium text-sm inline-block">Password</label>
         <input type="password" id="password" name="password" placeholder="••••••••" required
            class="px-3 py-2.5 text-sm text-slate-900 dark:text-slate-50 rounded-md bg-white dark:bg-neutral-800 w-full outline-1 -outline-offset-1 outline-slate-300 dark:outline-neutral-700 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600" />
      </div>

      <div class="flex items-start">
         <label class="flex items-center group has-[input:checked]:text-slate-900">
            <input id="tmc" name="tmc" type="checkbox" required class="sr-only" />
            <!-- Custom box -->
            <span class="flex h-4 w-4 shrink-0 items-center justify-center rounded outline-1 outline-slate-300 dark:outline-neutral-700
                  bg-white dark:bg-neutral-800
                  group-has-[input:checked]:bg-blue-600
                  group-has-[input:checked]:outline-blue-600
                  group-focus-within:outline-2
                  group-focus-within:outline-blue-600" aria-hidden="true">
               <!-- Checkmark -->
               <svg class="size-3 text-white opacity-0 group-has-[input:checked]:opacity-100" viewBox="0 0 12 10"
                  fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M1 5l3 3 7-7" />
               </svg>
            </span>
            <span class="ml-3 text-sm text-slate-600 dark:text-slate-50">
               I accept the
            </span>
         </label>

         <a href="#"
            class="ml-1 text-sm font-medium text-blue-700 dark:text-blue-500 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
            Terms and Conditions
         </a>
      </div>

      <button type="submit"
         class="!mt-2 py-2 px-3.5 text-sm rounded-md font-semibold cursor-pointer tracking-wide text-white border border-blue-600 bg-blue-600 hover:bg-blue-700 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">Submit</button>
   </div>
</form>