<template>
    <div>
      <Head title="Chats" />
      <h1 class="text-3xl font-bold">Internal Chats</h1>
      <div class="my-3 bg-white h-[75vh] rounded-md border md:flex">
        <div class="min-w-[350px] border-r p-4">
          <header class="flex gap-4 sm:justify-between items-center">
            <p class="text-xl font-semibold">Converations</p>
            <button class="py-2 px-6 bg-[#242424] text-white rounded-md">Add <i class="bi bi-plus-lg"></i></button>
          </header>
          <div class="my-4 border rounded-lg p-2 gap-2 w-full flex items-center">
              <i class="bi bi-search text-xl"></i>
              <input type="text" placeholder="Search" class="p-1" style="outline: none;" value="">
          </div>
          <Chatlist/>
        </div>
        <div class="flex-1 relative hidden md:block">
            <header class="p-2 border-b" >
                <button><i class="bi bi-list text-3xl"></i></button>
            </header>
           <div class="p-2 h-[65vh] flex items-center justify-center">
              <div class="text-center">
                  <p class="text-[120px]"><i class="bi bi-chat-quote-fill"></i></p>
                  <p class="my-2 text-xl font-semibold text-gray-400">Start a conversation with your customers</p>
              </div>
           </div>
        </div>
      </div>
    </div>
  </template>

  <script>
  import { Head } from '@inertiajs/vue3'
  import Layout from '@/Shared/Layout.vue'
  import Chatlist from "./ChatList.vue"
  import ActiveChat from "./ActiveChat.vue"

  export default {
    data(){
      return{
        activeChat:null
      }
    },
    components: {
      Head,
      Chatlist,
      ActiveChat,
    },
    layout: Layout,
  }
  </script>
