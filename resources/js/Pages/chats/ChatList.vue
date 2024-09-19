<template>
    <ul class="my-7 w-full">
    <Link href="/chats/12345">
        <li class="flex sm:gap-3 w-full items-center">
        <div>
            <div class="h-[50px] w-[50px] rounded-full bg-gray-100"></div>
        </div>
        <div class="flex sm:flex-1 ml-2">
        <div class="text-xs sm:text-base">
            <p>James Bond</p>
            <p class="my-1" >some message here</p>
        </div>
        <div class="ml-auto">
            <p class="text-xs text-gray-400 font-bold ml-auto">2h</p>
        </div>
    </div>
    </li>
    </Link>
    </ul>
</template>
<script>
import { Link } from '@inertiajs/vue3';

export default {
    components:{
        Link
    }
}

</script>