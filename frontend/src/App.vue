<script setup lang="ts">
import Dashboard from "@/components/Dashboard.vue";
import {ref, onMounted, reactive, Reactive} from "vue";
import axios from 'axios';
import type { IDashboardData } from "@/components/TypesList.types";


let data: Reactive<IDashboardData>  = reactive({
  all: 0,
  completed: 0,
  in_progress: 0,
  outdated: 0});

let loading = ref(false);

async function getData() {
  loading.value = true;
  await axios.get('./api/jobs?per_page=1')
      .then((response) => {
        let raw_data = response.data;
        data.all = raw_data.meta.total;
        axios.get(`./api/jobs?per_page=1&status=done`)
            .then((response) => {
              let raw_data = response.data;
              data.completed = raw_data.meta.total;
              data.in_progress = data.all - data.completed;
              let date = new Date();
              let date_str = date.toISOString();
              axios.get(`./api/jobs?per_page=1&date_start=${date_str}`)
                  .then((response) => {
                    let raw_data = response.data;
                    data.outdated = raw_data.meta.total;
                    loading.value = false;
                  });
            });
      });
}
onMounted(getData);
</script>

<template>
  <div v-if="loading">Загрузка...</div>
  <Dashboard :data="data"/>
</template>
<style scoped>
@import './main.css';
</style>