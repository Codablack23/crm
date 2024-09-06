<template>
  <div class="bg-[#1C2536] px-4">
    <div class="mb-1">
      <Link class="group flex items-center py-3" href="/">
        <!-- <icon name="dashboard" class="mr-2 w-4 h-4" :class="isUrl('') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" /> -->
        <div :class="isUrl('') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Dashboard</div>
      </Link>
    </div>
    <div class="mb-1">
      <Link class="group flex items-center py-3" href="/organizations">
        <!-- <icon name="office" class="mr-2 w-4 h-4" :class="isUrl('organizations') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" /> -->
        <div :class="isUrl('organizations') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Agents</div>
      </Link>
    </div>
    <div class="mb-1">
      <Link class="group flex items-center py-3" href="/contacts">
        <!-- <icon name="users" class="mr-2 w-4 h-4" :class="isUrl('contacts') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" /> -->
        <div :class="isUrl('contacts') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Customers</div>
      </Link>
    </div>
    <div class="mb-1">
      <Link class="group flex items-center py-3" href="/reports">
        <!-- <icon name="printer" class="mr-2 w-4 h-4" :class="isUrl('reports') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" /> -->
        <div :class="isUrl('reports') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Reports</div>
      </Link>
    </div>
    <div class="mb-1">
      <Link class="group flex items-center py-3" href="/reports">
        <!-- <icon name="printer" class="mr-2 w-4 h-4" :class="isUrl('reports') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" /> -->
        <div :class="isUrl('reports') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Internal Chats</div>
      </Link>
    </div>
    <div class="mb-1">
      <Link class="group flex items-center py-3" href="/reports">
        <!-- <icon name="printer" class="mr-2 w-4 h-4" :class="isUrl('reports') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" /> -->
        <div :class="isUrl('reports') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Logs</div>
      </Link>
    </div>
    <div class="mb-1">
      <Link class="group flex items-center py-3" href="/reports">
        <!-- <icon name="printer" class="mr-2 w-4 h-4" :class="isUrl('reports') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" /> -->
        <div :class="isUrl('reports') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Lead Management</div>
      </Link>
    </div>
    <div class="mb-1">
      <Link class="group flex items-center py-3" href="/reports">
        <!-- <icon name="printer" class="mr-2 w-4 h-4" :class="isUrl('reports') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" /> -->
        <div :class="isUrl('reports') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Payment Audit</div>
      </Link>
    </div>
    <div class="mb-1">
      <Link class="group flex items-center py-3" href="/reports">
        <!-- <icon name="printer" class="mr-2 w-4 h-4" :class="isUrl('reports') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" /> -->
        <div :class="isUrl('reports') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">FAQs and articles</div>
      </Link>
    </div>
  </div>
</template>

<script>
import { Link } from '@inertiajs/vue3'
import Icon from '@/Shared/Icon.vue'

export default {
  components: {
    Icon,
    Link,
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
