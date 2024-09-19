<template>
    <section>
        <div class="overflow-x-auto min-h-[150px] max-w-[53vw] bg-gray-50 rounded-xl">
        <table class="w-full">
            <thead class="bg-gray-200">
                <tr>
                    <th class="uppercase min-w-[100px] p-3 text-left">ID</th>
                    <th class="uppercase min-w-[200px] p-3 text-left">Account Name</th>
                    <th class="uppercase min-w-[140px] p-3 text-left">Updated At</th>
                    <th class="uppercase min-w-[120px] p-3 text-left">Field</th>
                    <th class="uppercase min-w-[120px] p-3 text-left">Before</th>
                    <th class="uppercase min-w-[120px] p-3 text-left">After</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b py-4">
                    <th class="min-w-[100px] font-light p-3 py-5 text-left">13242</th>
                    <th class="min-w-[200px] p-3 font-normal py-5 text-left">Ethan Bennett</th>
                    <th class="min-w-[140px] p-3 font-normal py-5 text-left">January 16, 2024 10:38:45</th>
                    <th class="min-w-[120px] p-3 font-normal py-5 text-left">desk_id</th>
                    <th class="min-w-[120px] p-3 font-normal py-5 text-left">2024-01-15T00:00:02+00:00</th>
                    <th class="min-w-[120px] p-3 font-normal py-5 text-left">2024-01-16T00:00:02+00:00</th>
                </tr> 
                <tr class="border-b py-4">
                    <td class="min-w-[100px] font-light p-3 py-5 text-left">13217</td>
                    <td class="min-w-[200px] p-3 font-normal py-5 text-left">Samuel Kim</td>
                    <td class="min-w-[140px] p-3 font-normal py-5 text-left">January 16, 2024 10:38:45</td>
                    <td class="min-w-[120px] p-3 font-normal py-5 text-left">swap_at</td>
                    <td class="min-w-[120px] p-3 font-normal py-5 text-left">2024-01-15T00:00:02+00:00</td>
                    <td class="min-w-[120px] p-3 font-normal py-5 text-left">2024-01-16T00:00:02+00:00</td>
                </tr>
            </tbody>
        </table>
        </div>
        <div class="flex justify-end items-center gap-4 my-4 p-2 mt-8">
            <div class="flex items-center gap-2">
                <p>Rows Per Page:</p>
                <button class="rounded-md bg-gray-100 p-2">
                    <span>10</span>
                    <span><i class="ml-2 bi bi-caret-down-fill"></i></span>
                </button>
            </div>
            <p>Page <span class="font-semibold">1</span> of <span class="font-semibold">10</span></p>
            <div class="flex items-center gap-4">
            <button><i class="bi bi-chevron-left"></i></button>
            <button><i class="bi bi-chevron-right"></i></button>
        </div>
        </div>
    </section>
</template>
<script>
</script>