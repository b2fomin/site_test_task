<script setup lang="ts">
import {IDashboardData} from "@/components/TypesList.types";

  const props = defineProps<{
    data: IDashboardData
  }>();

  let numbers = Object.keys(props.data);
  let texts = ['Всего работ', 'Завершено', 'В процессе', 'Просрочено'];
  let arr = texts.map((e, i) => {
    return [e, props.data[numbers[i]]]
  });
</script>

<template>
  <div class="dashboard">
    <div class="stats-grid">
      <div class="stat-card" v-for="prop in arr">
        <div class="stat-number">{{prop[1]}}</div>
        <div class="stat-label">{{prop[0]}}</div>
      </div>
    </div>
  </div>
</template>