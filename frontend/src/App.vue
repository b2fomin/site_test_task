<script setup lang="ts">
import Dashboard from "@/components/Dashboard.vue";
import {ref, onMounted, reactive, Reactive} from "vue";
import axios from 'axios';
import type {IDashboardData, IMainWorkspaceData} from "@/components/TypesList.types";


let dashboard_data: Reactive<IDashboardData>  = reactive({
  all: 0,
  completed: 0,
  in_progress: 0,
  outdated: 0});

let main_workspace_data: Array<Reactive<IMainWorkspaceData>> = reactive([]);

let loading = ref(false);
let page = ref(1);
let per_page = ref(1);

async function getData() {
  loading.value = true;
  await axios.get('./api/jobs?per_page=1')
      .then((response) => {
        let raw_data = response.data;
        dashboard_data.all = raw_data.meta.total;
        axios.get(`./api/jobs?per_page=1&status=done`)
            .then((response) => {
              let raw_data = response.data;
              dashboard_data.completed = raw_data.meta.total;
              dashboard_data.in_progress = dashboard_data.all - dashboard_data.completed;
              let date = new Date();
              let date_str = date.toISOString();
              let date_arr = date_str.split('T');
              date_str = date_arr[0]+ ' ' + date_arr[1].split('.')[0];
              axios.get(`./api/jobs?per_page=1&date_end=${date_str}`)
                  .then((response) => {
                    let raw_data = response.data;
                    dashboard_data.outdated = raw_data.meta.total;
                    loading.value = false;
                  });
            });
      });
}
onMounted(getData);
</script>

<template>
  <div v-if="loading">Загрузка...</div>
  <Dashboard :data="dashboard_data"/>
</template>
<style scoped>
@import './main.css';
</style>