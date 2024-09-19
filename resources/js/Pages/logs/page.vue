<template>
     <Head title="Logs" />
    <div class="mt-10 p-4">
        <h1 class="text-3xl font-bold">Logs</h1>
        <div class="my-4 bg-white min-h-[75vh] rounded-md flex">
            <div class="min-w-[250px] p-3">
                <button class="block w-full p-2 py-3 font-medium text-lg text-left bg-gray-100 rounded-md">
                    <span><i class="bi bi-person-fill mr-2"></i></span>
                    <span>Clients</span>
                </button>
                <button class="block w-full p-2 py-3  text-lg text-left rounded-md">
                    <span><i class="bi bi-credit-card-fill mr-2"></i></span>
                    <span>Transactions</span>
                </button>
                <button class="block w-full p-2 py-3 text-lg text-left rounded-md">
                    <span><i class="bi bi-person-up mr-2"></i></span>
                    <span>Positions</span>
                </button>
                <button class="block w-full p-2 py-3 text-lg text-left rounded-md">
                    <span><i class="bi bi-envelope-fill mr-2"></i></span>
                    <span>Email</span>
                </button>
                <button class="block w-full p-2 py-3 text-lg text-left  rounded-md">
                    <span><i class="bi bi-chat-fill mr-2"></i></span>
                    <span>Comment</span>
                </button>
                <!-- <button class="block">Transactions</button>
                <button class="block">Positions</button>
                <button>Email</button>
                <button>Phone</button>
                <button>Comment</button> -->
            </div>
            <div class="flex-1 border-l">
                <header class="p-3 border-b">
                    <button><i class="bi bi-list text-xl"></i></button>
                </header>
                <div class="p-4">
                    <p class="my-3 text-3xl font-semibold mb-6">Client Logs</p>
                    <Table/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { Head } from '@inertiajs/vue3'
    import Layout from '@/Shared/Layout.vue'
    import Table from "./components/Table.vue"

    export default {
    components: {
        Head,
        Table
    },
    
    layout: Layout,
    }
</script>
