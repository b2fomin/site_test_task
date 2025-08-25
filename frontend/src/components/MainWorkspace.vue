<script setup lang="ts">
  import {IMainWorkspaceData} from "@/components/TypesList.types";
  import Paginate from 'vuejs-paginate-next';
  let props = defineProps<{
    data: Array<IMainWorkspaceData>,
    page: number,
    per_page: number,
    total: number
  }>();
</script>

<template>
<div class="works-grid">
  <div v-for="row in props.data" class="work-card">
    <div class="work-details">
      <div v-for="key in Object.keys(row)" class="work-detail">
        <span class="work-detail-label">{{key}}:</span>
        <span class="work-detail-value">{{row[key]}}</span>
      </div>
    </div>
  </div>
</div>
  <Paginate :page-count="props.total"/>
</template>

<style scoped>

</style>