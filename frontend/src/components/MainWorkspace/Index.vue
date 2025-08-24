<script setup lang="ts">
  import {IMainWorkspaceData} from "@/components/TypesList.types";
  let props = defineProps<{
    data: Array<IMainWorkspaceData>
  }>();
</script>

<template>
<div class="works-grid">
  <div v-for="row in props.data" class="work-card tech-order-3">
    <div class="work-details">
      <div v-for="key in Object.keys(row)" class="work-detail">
        <span class="work-detail-label">{{key}}:</span>
        <span class="work-detail-value">{{row[key]}}:</span>
      </div>
    </div>
  </div>
</div>
</template>

<style scoped>

</style>