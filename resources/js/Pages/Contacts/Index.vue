<template>
  <div class="p-2 pt-20">
    <Head title="Customers" />
    <div class="mb-8 flex items-center justify-between">
      <h1 class="text-3xl font-bold">Customers</h1>
      <!-- <search-filter v-model="form.search" class="mr-4 w-full max-w-md" @reset="reset">
        <label class="block text-gray-700">Trashed:</label>
        <select v-model="form.trashed" class="form-select mt-1 w-full">
          <option :value="null" />
          <option value="with">With Trashed</option>
          <option value="only">Only Trashed</option>
        </select>
      </search-filter> -->
      <Link class="btn-indigo rounded-md" href="/contacts/create">
        <span><bi class="bi-plus-lg mr-2"></bi></span>
        <span>Create</span>
      </Link>
    </div>
      <div class="bg-white rounded-xl shadow">
        <div class="flex items-center px-4 py-2 border-b">
          <div class="p-2 flex items-center">
            <i class="bi bi-search"></i>
            <input style="outline: none;" placeholder="Enter Keyword" class="p-2"/>
          </div>
          <div class="ml-auto flex gap-4 pr-2 items-center justify-end">
            <button><i class="bi bi-arrow-clockwise sm:text-2xl"></i></button>
            <button><i class="bi bi-funnel sm:text-2xl"></i></button>
            <button><i class="bi bi-gear sm:text-2xl"></i></button>
          </div>
        </div>
        <Table/>
      </div>
    <pagination class="mt-6" :links="contacts.links" />
  </div>
</template>

<script>
import { Head, Link } from '@inertiajs/vue3'
import Table from "./Table.vue"
import Icon from '@/Shared/Icon.vue'
import pickBy from 'lodash/pickBy'
import Layout from '@/Shared/Layout.vue'
import throttle from 'lodash/throttle'
import mapValues from 'lodash/mapValues'
import Pagination from '@/Shared/Pagination.vue'
import SearchFilter from '@/Shared/SearchFilter.vue'

export default {
  components: {
    Head,
    Icon,
    Link,
    Pagination,
    SearchFilter,
    Table
  },
  layout: Layout,
  props: {
    filters: Object,
    contacts: Object,
  },
  data() {
    return {
      form: {
        search: this.filters.search,
        trashed: this.filters.trashed,
      },
    }
  },
  watch: {
    form: {
      deep: true,
      handler: throttle(function () {
        this.$inertia.get('/contacts', pickBy(this.form), { preserveState: true })
      }, 150),
    },
  },
  methods: {
    reset() {
      this.form = mapValues(this.form, () => null)
    },
  },
}
</script>
