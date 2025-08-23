<script setup lang="ts">
import Dashboard from "@/components/Dashboard.vue";
import {ref, Ref} from "vue";
import axios from 'axios';
import type { IDashboardData } from "@/components/TypesList.types";


const data: Ref<IDashboardData>  = ref({
  all: 0,
  completed: 0,
  in_progress: 0,
  outdated: 0});

async function getData() {
  await axios.get('./api/jobs?per_page=1')
      .then((response) => {
        let raw_data = response.data;
        data.value.all = raw_data.meta.total;
        axios.get(`./api/jobs?per_page=1&status=done`)
            .then((response) => {
              let raw_data = response.data;
              data.value.completed = raw_data.meta.total;
              data.value.in_progress = data.value.all - data.value.in_progress;
              let date = new Date();
              let date_str = date.toISOString();
              axios.get(`./api/jobs?per_page=1&date_start=${date_str}`)
                  .then((response) => {
                    let raw_data = response.data;
                    data.value.outdated = raw_data.meta.total;
                  });
            });
      });
}
</script>

<template>
  <Dashboard @loadstart="getData" :data="data"/>
</template>
<style scoped>
@import './main.css';
</style>