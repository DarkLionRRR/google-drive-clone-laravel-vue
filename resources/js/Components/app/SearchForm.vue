<template>
    <form class="w-[600px] h-[80px] flex items-center">
        <TextInput
            v-model="form.search"
            autocomplete
            class="block w-full mr-2"
            placeholder="Search for files and folders"
            type="text"
        />
    </form>
</template>

<script setup>
import {useForm} from "@inertiajs/vue3";
import TextInput from "@/Components/TextInput.vue";

const form = useForm({
    search: ''
})
</script>
