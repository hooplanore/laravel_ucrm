<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    students: Array
})
</script>

<template>
    <Head title="生徒一覧" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">生徒一覧</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        
                        <section class="text-gray-600 body-font">
                        <div class="container px-5 py-8 mx-auto">
                            <div class="flex pl-4 my-4 lg:w-2/3 w-full mx-auto">
                                <Link as="button" :href="route('students.create')" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">生徒登録</Link>
                            </div>
                            

                            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                                <thead>
                                <tr>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ID</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">所属クラス</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">生徒名</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">フリガナ</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メール</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">電話番号</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">性別</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">生年月日</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="student in students" :key="student.id">
                                    <td class="px-4 py-3">
                                    <Link :href="route('students.show',{student:student.id})">
                                        {{ student.id }}
                                    </Link>
                                    </td>
                                    <td class="px-4 py-3">{{ student.class_id }}</td>
                                    <td class="px-4 py-3">{{ student.name }}</td>
                                    <td class="px-4 py-3">{{ student.kana }}</td>
                                    <td class="px-4 py-3">{{ student.email }}</td>
                                    <td class="px-4 py-3">{{ student.tel }}</td>
                                    <td class="px-4 py-3">{{ student.gender }}</td>
                                    <td class="px-4 py-3">{{ student.birthday }}</td>
                                </tr>
                                
                                </tbody>
                            </table>
                            </div>
                            
                        </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
