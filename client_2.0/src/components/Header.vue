<template>
    <header>
        <div class="text-center bg-gray-10 text-gray-700 py-5 px-1.5">
            <h1 class="text-4xl font-bold mt-0 mb-6">{{ title }}</h1>
          
        </div>
    </header>
</template>

<script>
import Button from './Button.vue';

export default {
    name: 'Header',
    props: {
        title: {
            title: String,
            default: 'Header Title (text) '
        }
    },
}
</script>