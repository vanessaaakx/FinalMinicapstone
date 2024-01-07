<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

import { onMounted, provide } from 'vue';
const selectedColor = ref('green'); // Default background color
provide('color', selectedColor)

const showingNavigationDropdown = ref(false);
const sidebarWidth = ref(200); // Initial width of the sidebar
const minSidebarWidth = 64; // Minimum width of the sidebar
const maxSidebarWidth = 200; // Maximum width of the sidebar
const smallSizeThreshold = 100; // Adjust this threshold as needed

const toggleSidebarWidth = () => {
  sidebarWidth.value = sidebarWidth.value === minSidebarWidth ? maxSidebarWidth : minSidebarWidth;
};
</script>



<template>
  <div class="min-h-screen flex bg-dark ">
    <!-- Sidebar -->
    <aside :style="{ width: `${sidebarWidth}px`, transition: 'width 0.5s' }" class="bg-white dark:bg-green-800 border-r border-green-100 dark:border-green-700">
      <!-- Resizable Button -->
      <div class="cursor-pointer" @click="toggleSidebarWidth">
        <div class="flex justify-end">
          <button v-if="sidebarWidth <= smallSizeThreshold" style="font-size: 80px;">
            <i class="fa-solid fa-caret-right text-white hover:text-black p-7 duration-100"></i>
          </button>

          <button v-else style="font-size: 80px;">
            <i class="fa-solid fa-caret-left text-white hover:text-black p-5 duration-100"></i>
          </button>
        </div>
      </div>

      <!-- Logo -->
      <div class="mt-5" style="display: grid; place-content: center;">
        <img width="150px" class="rounded-full" src="data:image/png;base64,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" alt="">
      </div>

      <!-- Links -->
      <div class="mt-10" style="display: grid; place-content: center;">
        <!-- Check if sidebarWidth is less than or equal to a threshold for small size -->
        <NavLink v-if="sidebarWidth <= smallSizeThreshold" style="font-size: 25px;" :href="route('dashboard')">
          <i class="fa fa-dashboard"></i>
        </NavLink>

        <!-- Otherwise, show only the icon -->
        <NavLink v-else style="font-size: 20px;" :href="route('dashboard')">
          <div style="width: 150px;"><i class="fa fa-dashboard"></i><span style="margin-left: 10px;">Home</span></div>
        </NavLink>

      </div>





         <!-- Links -->
      <div class="mt-10" style="display: grid; place-content: center;">
        <!-- Check if sidebarWidth is less than or equal to a threshold for small size -->
        <NavLink v-if="sidebarWidth <= smallSizeThreshold" style="font-size: 25px;" :href="route('index')">
          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        </NavLink>

        <!-- Otherwise, show only the icon -->
        <NavLink v-else style="font-size: 20px;" :href="route('index')">
          <div style="width: 150px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span style="margin-left: 7px;">Product</span></div>
        </NavLink>

      </div>







       <!-- Links -->
       <div class="mt-10 mb-10" style="display: grid; place-content: center;">
        <!-- Check if sidebarWidth is less than or equal to a threshold for small size -->
        <NavLink v-if="sidebarWidth <= smallSizeThreshold" style="font-size: 25px;" :href="route('dateIndex')">
            <i class="fa-solid fa-calendar"></i>
        </NavLink>

        <!-- Otherwise, show only the icon -->
        <NavLink v-else style="font-size: 20px;" :href="route('dateIndex')">
          <div style="width: 150px;"><i class="fa-solid fa-calendar"></i><span style="margin-left: 7px;">Calendar</span></div>
        </NavLink>

      </div> <hr> <br>

      <label v-if="sidebarWidth <= smallSizeThreshold" for="colorSelect" class="block text-gray-100 ms-5" style="font-size: 30px;"><i class="fa-solid fa-droplet"></i></label>
      <label v-else for="colorSelect" class="block text-gray-100 text-center"><i class="fa-solid fa-droplet"></i> Select a color:</label>

        <select id="colorSelect" v-model="selectedColor" class="w-full p-2 border rounded-md">
            <option value="red" class="py-2">High</option>
            <option value="green" class="py-2">Low</option>
        </select>


    </aside>



    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
      <nav class="bg-white dark:bg-green-800 border-b border-green-100 dark:border-green-700">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex justify-between h-16">
            <div class="flex">
              <!-- Logo -->
              <!-- <div class="shrink-0 flex items-center">
                <Link :href="route('dashboard')">
                  <ApplicationLogo
                    class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200"
                  />
                </Link>
              </div> -->

              <!-- Navigation Links -->
              <div class="text-white mt-2">
                <!-- <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                  Dashboard
                </NavLink> -->
                <h1 style="margin-left: -225px; font-size: 30px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Fish Store</h1>
              </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
              <!-- Settings Dropdown -->
              <div class="ms-3 relative">
                <Dropdown align="right" width="48">
                  <template #trigger>
                    <span class="inline-flex rounded-md">
                      <button
                        type="button"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150"
                      >
                        {{ $page.props.auth.user.name }}
                        <svg
                          class="ms-2 -me-0.5 h-4 w-4"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </button>
                    </span>
                  </template>

                  <template #content>
                    <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                    <DropdownLink :href="route('logout')" method="post" as="button">
                      Log Out
                    </DropdownLink>
                  </template>
                </Dropdown>
              </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
              <button
                @click="showingNavigationDropdown = !showingNavigationDropdown"
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out"
              >
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path
                    :class="{
                      hidden: showingNavigationDropdown,
                      'inline-flex': !showingNavigationDropdown,
                    }"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                  />
                  <path
                    :class="{
                      hidden: !showingNavigationDropdown,
                      'inline-flex': showingNavigationDropdown,
                    }"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div
          :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
          class="sm:hidden"
        >
          <div class="pt-2 pb-3 space-y-1">
            <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
              Dashboard
            </ResponsiveNavLink>
          </div>

          <!-- Responsive Settings Options -->
          <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
              <div class="font-medium text-base text-gray-800 dark:text-gray-200">
                {{ $page.props.auth.user.name }}
              </div>
              <div class="font-medium text-sm text-gray-500">{{ $page.props.auth.user.email }}</div>
            </div>

            <div class="mt-3 space-y-1">
              <ResponsiveNavLink :href="route('profile.edit')"> Profile </ResponsiveNavLink>
              <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                Log Out
              </ResponsiveNavLink>
            </div>
          </div>
        </div>
      </nav>

      <!-- Page Heading -->
      <header class="bg-white dark:bg-gray-800 shadow" v-if="$slots.header">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <slot name="header" />
        </div>
      </header>

      <!-- Page Content -->
      <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <slot />
        </div>
      </main>
    </div>
  </div>
</template>

<style>
.body{
  background-color: yellowgreen;
}
  </style>