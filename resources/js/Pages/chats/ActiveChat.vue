<template>
    <section class=" h-[75vh]">
        <header class="flex items-center p-2 gap-4 w-full py-4 border-y">
            <div>
                <div class="h-[50px] w-[50px] rounded-full bg-gray-100"></div>
            </div>
            <div class="text-xs sm:text-base">
                <p>James Bond</p>
                <p class="my-1" >some message here</p>
            </div>
            <div class="ml-auto flex gap-2 sm:gap-4">
                <button><i class="bi sm:text-2xl bi-telephone"></i></button>
                <button><i class="bi sm:text-2xl bi-camera"></i></button>
                <button><i class="bi sm:text-2xl bi-three-dots"></i></button>
            </div>
        </header>
        <div class="mb-[80px] overflow-y-auto">

        </div>
        <div class="absolute gap-2 flex items-center bottom-12 sm:bottom-0 w-full p-4 h-[80px] border-t">
            <div>
                <div class="h-[35px] w-[35px] rounded-full bg-gray-100"></div>
            </div>
            <div class="flex-1">
                <input type="text" class="border rounded-md p-2 w-full placeholder:text-[#242424] " style="outline: none;" placeholder="Leave a message" id="">
            </div>
            <div class="ml-auto flex gap-2 sm:gap-4">
                <button><i class="bi sm:text-2xl bi-send"></i></button>
                <button><i class="bi sm:text-2xl bi-camera"></i></button>
                <button><i class="bi sm:text-2xl bi-paperclip"></i></button>
            </div>
        </div>
    </section>
</template>
<script>
</script>