<template>
  <div>
    <Head title="Dashboard" />
    <h1 class="text-3xl font-bold">Dashboard</h1>
    <p class="my-2 leading-normal">Hey there! Welcome to CRM</p>
    <Overview/>
  </div>
</template>

<script>
import { Head } from '@inertiajs/vue3'
import Layout from '@/Shared/Layout.vue'
import Overview from '../../components/Overview.vue';

export default {
  components: {
    Head,
    Overview,
  },
  layout: Layout,
}
</script>
