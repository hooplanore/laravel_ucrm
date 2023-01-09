<script setup>
import { Link } from '@inertiajs/inertia-vue3';


</script>
<template>
テストです。
<a href="/">aタグです</a><br>
<Link href="/">Link経由です</Link><br>
<Link :href="route('inertia.index')">名前つきルートです</Link><br>
<Link :href="route('inertia.show',{id: 100 })">ルートパラメータテストです</Link>
</template>