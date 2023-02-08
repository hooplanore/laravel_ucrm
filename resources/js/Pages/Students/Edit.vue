<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { propsToAttrMap } from '@vue/shared';

const props = defineProps({
    student:Object
})

const form = reactive({
    id: props.student.id,
    class_id : props.student.class_id,
    name : props.student.name,
    kana: props.student.kana,
    email: props.student.email,
    password: props.student.password,
    zip_code: props.student.zip_code,
    address1: props.student.address1,
    address2: props.student.address2,
    tel: props.student.tel,
    gender: props.student.gender,
    birthday: props.student.birthday,
    joindate: props.student.joindate,
    is_payment: props.student.is_payment,
    introducer: props.student.introducer,
    parent_name: props.student.parent_name,
    canpaign: props.student.canpaign,
    memo: props.student.memo,
    is_rest: props.student.is_rest
})
const updateStudent = id => {
    Inertia.put(route('students.update',{ student: id}),form)
}
</script>

<template>
    <Head title="生徒編集" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">生徒編集</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                       <section class="text-gray-600 body-font relative">
                        <form @submit.prevent="updateStudent(form.id)">
                        <div class="container px-5 py-8 mx-auto">
                            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                            <div class="flex flex-wrap -m-2">
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="class_id" class="leading-7 text-sm text-gray-600">所属クラス</label>
                                    <input type="text" id="class_id" name="class_id" v-model="form.class_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">生徒名</label>
                                    <input type="text" id="name" name="name" v-model="form.name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="kana" class="leading-7 text-sm text-gray-600">フリガナ</label>
                                    <input type="text" id="kana" name="kana" v-model="form.kana" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="email" class="leading-7 text-sm text-gray-600">メール</label>
                                    <input type="text" id="email" name="email" v-model="form.email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="password" class="leading-7 text-sm text-gray-600">パスワード</label>
                                    <input type="text" id="password" name="password" v-model="form.password" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="zip_code" class="leading-7 text-sm text-gray-600">郵便番号</label>
                                    <input type="text" id="zip_code" name="zip_code" v-model="form.zip_code" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="address1" class="leading-7 text-sm text-gray-600">住所1</label>
                                    <input type="text" id="address1" name="address1" v-model="form.address1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="address2" class="leading-7 text-sm text-gray-600">住所2</label>
                                    <input type="text" id="address2" name="address2" v-model="form.address2" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="tel" class="leading-7 text-sm text-gray-600">電話番号</label>
                                    <input type="text" id="tel" name="tel" v-model="form.tel" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for=".gender" class="leading-7 text-sm text-gray-600">性別</label>
                                    <input type="text" id=".gender" name=".gender" v-model="form.gender" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="birthday" class="leading-7 text-sm text-gray-600">生年月日</label>
                                    <input type="text" id="birthday" name="birthday" v-model="form.birthday" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="joindate" class="leading-7 text-sm text-gray-600">入会日</label>
                                    <input type="text" id="joindate" name="joindate" v-model="form.joindate" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="is_payment" class="leading-7 text-sm text-gray-600">支払方法</label>
                                    <input type="text" id="is_payment" name="is_payment" v-model="form.is_payment" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="introducer" class="leading-7 text-sm text-gray-600">紹介者</label>
                                    <input type="text" id="introducer" name="introducer" v-model="form.introducer" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="parent_name" class="leading-7 text-sm text-gray-600">保護者氏名</label>
                                    <input type="text" id="parent_name" name="parent_name" v-model="form.parent_name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="canpaign" class="leading-7 text-sm text-gray-600">キャンペーン名</label>
                                    <input type="text" id="canpaign" name="canpaign" v-model="form.canpaign" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="memo" class="leading-7 text-sm text-gray-600">備考</label>
                                    <input type="text" id="memo" name="memo" v-model="form.memo" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="is_rest" class="leading-7 text-sm text-gray-600">在籍・休会</label>
                                    <input type="radio" id="is_rest" name="is_rest" v-model="form.is_rest" value="0" >
                                    <label class="ml-2 mr-4">在籍</label>
                                    <input type="radio" id="is_rest" name="is_rest" v-model="form.is_rest" value="1" >
                                    <label class="ml-2 mr-4">休会</label>
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">更新する</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
