<template>
  <div class="bg-black px-2" style="background-color: black;">
    <div v-for="link in links" class="mb-1">
      <Link :class="isUrl(link.slug) ? 'bg-[#212121] text-white font-semibold' : 'text-gray-500' " class="group hover:bg-[#212121] hover:text-white rounded gap-4  flex items-center p-4" :href="link.url">
        <!-- <icon name="dashboard" class="mr-2 w-4 h-4" :class="isUrl('') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" /> -->
        <i :class="link.icon"></i>
        <div >{{link.title}}</div>
      </Link>
    </div>
  </div>
</template>

<script>
import { Link } from '@inertiajs/vue3'
import Icon from '@/Shared/Icon.vue'
import { dashboardLinks } from '../lib/data';

export default {
  components: {
    Icon,
    Link,
  },
  created(){
    this.links = dashboardLinks
  },
  methods: {
    isUrl(...urls) {
      let currentUrl = this.$page.url.substr(1)
      if (urls[0] === '') {
        return currentUrl === ''
      }
      return urls.filter((url) => currentUrl.startsWith(url)).length
    },
  },
}
</script>
