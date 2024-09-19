<template>
    <div class="bg-white overflow-x-auto">
      <table class="w-full whitespace-nowrap">
        <tr class="text-left font-medium uppercase bg-gray-100 text-sm">
          <th class="pb-4 pt-6 px-6">Full Name</th>
          <th class="pb-4 pt-6 px-6">Email</th>
          <th class="pb-4 pt-6 px-6">Phone</th>
          <th class="pb-4 pt-6 px-6" colspan="2">Call & Chat</th>
         <th class="pb-4 pt-6 px-6">Desk</th>
          <th class="pb-4 pt-6 px-6">Affiliate</th>
          <th class="pb-4 pt-6 px-6">Internal Brand</th>
          <th class="pb-4 pt-6 px-6" colspan="2">Labels</th>
          <th class="pb-4 pt-6 px-6">Chats state</th>
          <th class="pb-4 pt-6 px-6">Balance</th>
          <th class="pb-4 pt-6 px-6">Agent</th>
          <th class="pb-4 pt-6 px-6" colspan="2">Team</th>
          <th class="pb-4 pt-6 px-6">Online</th>
          <th class="pb-4 pt-6 px-6">Last Online</th>
          <th class="pb-4 pt-6 px-6">Created At</th>
          <th class="pb-4 pt-6 px-6" colspan="2">Last Agent</th>
          <th class="pb-4 pt-6 px-6">Last Team</th>
          <th class="pb-4 pt-6 px-6">Last Desk</th>
          <th class="pb-4 pt-6 px-6">Last Lead Campaign</th>
          <th class="pb-4 pt-6 px-6" colspan="2">Last Lead Description</th>
        </tr>
        <tr class="text-left">
          <td class="pb-4 pt-6 px-6">Goodluck Edih</td>
          <td class="pb-4 pt-6 px-6">goodluckedih@gmail.com</td>
          <td class="pb-4 pt-6 px-6">+2349032137908</td>
          <td class="pb-4 pt-6 px-6" colspan="2">
            <div class="flex items-center gap-6 text-gray-500 font-semibold">
              <button><i class="bi bi-info-circle text-2xl"></i></button>
              <button><i class="bi bi-calendar-date text-2xl"></i></button>
              <button><i class="bi bi-tag text-2xl"></i></button>
              <button><i class="bi bi-building-gear text-2xl"></i></button>
              <button><i class="bi bi-telephone-outbound text-2xl"></i></button>
              <button><i class="bi bi-chat-quote text-2xl"></i></button>
              <button><i class="bi bi-clipboard-plus text-2xl"></i></button>
              <button><i class="bi bi-chat-text text-2xl"></i></button>
            </div>
          </td>
          <td class="pb-4 pt-6 px-6">
            <div class="flex gap-2">
                <div class="h-4 w-4 rounded-full bg-red-600"></div>
                <p>Rentention</p>
            </div>
          </td>
          <td class="pb-4 pt-6 px-6">
            <span class="p-2 bg-cyan-500 text-sm font-medium text-white rounded-full">Angelique Morse</span>
          </td>
          <td class="pb-4 pt-6 px-6">Codablack Foundation</td>
          <td class="pb-4 pt-6 px-6" colspan="2">
            <span class="px-3 py-1 bg-green-500 text-sm font-medium text-white rounded-full">Conversion</span>
          </td>
          <td class="pb-4 pt-6 px-6">
            <span class="px-3 py-1 uppercase text-sm bg-green-100 text-green-600 rounded-full">open</span>
        </td>
          <td class="pb-4 pt-6 px-6">750</td>
          <td class="pb-4 pt-6 px-6">
            <div class="flex items gap-2">
                <div class="h-4 w-4 rounded-full bg-gray"></div>
                <p>Samuel Thomas</p>
            </div>
          </td>
          <td class="pb-4 pt-6 px-6" colspan="2">Software Team</td>
          <td class="pb-4 pt-6 px-6">
            <span><i class="bi bi-check-circle text-green-700"></i></span>
          </td>
          <td class="pb-4 pt-6 px-6">
            <p>{{ (new Date()).toUTCString() }}</p>
          </td>
          <td class="pb-4 pt-6 px-6">
            <p>{{ (new Date()).toUTCString() }}</p>
            </td>
          <td class="pb-4 pt-6 px-6" colspan="2">
            <p>{{ (new Date()).toUTCString() }}</p>
          </td>
          <td class="pb-4 pt-6 px-6"><p>{{ (new Date()).toUTCString() }}</p></td>
          <td class="pb-4 pt-6 px-6"><p>{{ (new Date()).toUTCString() }}</p></td>
          <td class="pb-4 pt-6 px-6">
            <p>{{ (new Date()).toUTCString() }}</p>
          </td>
          <td class="pb-4 pt-6 px-6" colspan="2">
            <p>{{ (new Date()).toUTCString() }}</p>
          </td>
        </tr>
        <!-- <tr v-for="contact in contacts.data" :key="contact.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
          <td class="border-t">
            <Link class="flex items-center px-6 py-4 focus:text-indigo-500" :href="`/contacts/${contact.id}/edit`">
              {{ contact.name }}
              <icon v-if="contact.deleted_at" name="trash" class="shrink-0 ml-2 w-3 h-3 fill-gray-400" />
            </Link>
          </td>
          <td class="border-t">
            <Link class="flex items-center px-6 py-4" :href="`/contacts/${contact.id}/edit`" tabindex="-1">
              <div v-if="contact.organization">
                {{ contact.organization.name }}
              </div>
            </Link>
          </td>
          <td class="border-t">
            <Link class="flex items-center px-6 py-4" :href="`/contacts/${contact.id}/edit`" tabindex="-1">
              {{ contact.city }}
            </Link>
          </td>
          <td class="border-t">
            <Link class="flex items-center px-6 py-4" :href="`/contacts/${contact.id}/edit`" tabindex="-1">
              {{ contact.phone }}
            </Link>
          </td>
          <td class="w-px border-t">
            <Link class="flex items-center px-4" :href="`/contacts/${contact.id}/edit`" tabindex="-1">
              <icon name="cheveron-right" class="block w-6 h-6 fill-gray-400" />
            </Link>
          </td>
        </tr> -->
        <!-- <tr v-if="contacts.data.length === 0">
          <td class="px-6 py-4 border-t" colspan="4">No contacts found.</td>
        </tr> -->
      </table>
    </div>
</template>
<script>
</script>