
<template>
    <Head title="Wallet"/>
    <div class="sm:p-4">
        <h1 class="text-3xl font-bold">Wallet</h1>
        <div class="bg-white rounded-md my-3 p-3 py-5">
            <header class="sm:flex items-center">
                <div>
                    <h3 class="text-[#242424] font-semibold text-base sm:text-lg">Current Balance</h3>
                    <p class="text-gray-500">Balance across all your accounts</p>
                </div>
                <div class="flex items-center gap-1 sm:gap-4 ml-auto my-4 sm:my-0">
                    <button class="text-sm sm:text-base px-3 sm:px-6 py-2 bg-[#242424] rounded-lg text-white">Recieve</button>
                    <button class="text-sm sm:text-base px-3 sm:px-6 py-2 bg-[#242424] rounded-lg text-white">Send</button>
                    <button class="text-sm sm:text-base px-3 sm:px-6 py-2 bg-[#242424] rounded-lg text-white">Swap</button>
                </div>
            </header>
            <div class="my-4 mt-10">
                <p class="text-center sm:text-left sm:text-lg text-gray-500 font-semibold">Total Balance</p>
                <p class="text-xl text-center sm:text-left sm:text-3xl font-bold text-[#242424]">$94,634.02</p>
                <p class="mt-4 text-gray-500 font-semibold">Available Currency</p>
                <ul class="my-4">
                    <li v-for="currency in currencies" class="flex border-y border-gray-100 justify-between py-2 font-semibold">
                        <p class="text-base">{{ currency.name }}</p>
                        <p class="text-base text-gray-400">{{ currency.amount }}</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
import { Head } from '@inertiajs/vue3';
import Layout from '@/Shared/Layout.vue';

export default {
    components:{
        Head
    },
    layout:Layout,
    created(){
        this.currencies = [
            {name:"Tron",amount:"$16,213.20",id:1},
            {name:"Tether(trc20)",amount:"$9,626.80",id:1},
            {name:"Ethereum",amount:"$10,076.25",id:1},
            {name:"Tether(erc20)",amount:"$8,076.00",id:1},
            {name:"BNB",amount:"$8,876.81",id:1},
            {name:"Tether (bep20)",amount:"$12,576.76",id:1},
            {name:"ETH-USDC",amount:"$1,676.20",id:1},
            {name:"BNB-USDC",amount:"$13,756.00",id:1},
            {name:"SOL",amount:"$13,756.00",id:1},
        ]
    }
}
</script>