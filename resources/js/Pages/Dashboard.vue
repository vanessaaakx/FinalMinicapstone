<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Dashboard" />



    <AuthenticatedLayout>
        <div class="py-12 fade-in">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
                <div class="bg-dark dark:bg-green-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-green-700 text-dark">
    <h1 class="text-3xl font-bold mb-8">Welcome to Vanessa Pinakurat Suka Store!</h1>
    <p>Tuklasin ang sarap ng Suka Pinakurat! Our special vinegar adds an amazing flavor sa iyong mga pagkain. Gawa nang may puso at tradisyon, it brings a unique kick sa iyong lutuin.</p>
    <p class="mb-8">Enjoy the bold taste ng ating Filipino heritage sa bawat patak. Elevate your cooking with Suka Pinakurat's fiery zest!</p>
    <p>Timpla ng Lasa, Alab ng Tradisyon with Suka Pinakurat!.</p>
</div>
<br>
<hr class="border-t-2 border-green-300 my-6">
<br>
<div class="p-6 bg-green-700 text-dark">
    <h1 class="text-3xl font-bold mb-8">Contact Us</h1>
    <p class="mb-8">Have questions about our Sukang Pinakurat products or need assistance? Reach out to us!</p>
    <ul>
        <li><i class="fas fa-envelope mr-2"></i> Email: sukapinakurat@gmail.com</li>
        <li><i class="fas fa-phone mr-2"></i> Phone: 10896325412</li>
        <li><i class="fas fa-map-marker mr-2"></i> Address:Tubigon, Bohol Phillipines</li>
    </ul>
</div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>





</template>
<style>

</style>
