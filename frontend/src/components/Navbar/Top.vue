<script setup lang="ts">

</script>

<template>
  <!-- Верхняя панель навигации -->
  <div class="top-navbar">
    <div class="navbar-row">
      <div class="brand">
        🏗️ Система управления строительными проектами
      </div>
      <div class="top-actions">
        <button class="btn btn-success" onclick="addNewWork()">➕ Добавить работу</button>
        <button class="btn btn-primary" onclick="addNewProject()">🏗️ Новый проект</button>
        <button class="btn btn-warning" onclick="exportData()">📥 Экспорт</button>
      </div>
    </div>

    <div class="navbar-row">
      <div class="global-search-container">
        <input type="text" class="search-input" id="globalSearchInput" placeholder="🔍 Поиск по работам, объектам, этажам, исполнителям...">

        <div class="filters-group">
          <button class="filter-btn active" id="allWorksFilter" onclick="setGlobalFilter('all')">
            📋 Все работы
          </button>
          <button class="filter-btn" id="completedFilter" onclick="setGlobalFilter('completed')">
            ✅ Выполненные
          </button>
          <button class="filter-btn" id="notCompletedFilter" onclick="setGlobalFilter('not-completed')">
            ⏳ Невыполненные
          </button>
          <button class="filter-btn" id="todayFilter" onclick="setGlobalFilter('today')">
            📅 Сегодня
          </button>
          <button class="filter-btn" id="overdueFilter" onclick="setGlobalFilter('overdue')">
            🚨 Просрочено
          </button>
        </div>
      </div>
    </div>

    <!-- Фильтры по категориям работ -->
    <div class="navbar-row">
      <div class="category-filters" id="categoryFilters">
        <button class="category-filter active" onclick="setCategoryFilter('all')">Все категории</button>
        <button class="category-filter" onclick="setCategoryFilter('Черновые работы')">Черновые</button>
        <button class="category-filter" onclick="setCategoryFilter('Отделочные работы')">Отделочные</button>
        <button class="category-filter" onclick="setCategoryFilter('Потолки')">Потолки</button>
        <button class="category-filter" onclick="setCategoryFilter('Конструкции')">Конструкции</button>
        <button class="category-filter" onclick="setCategoryFilter('Завершающие работы')">Завершающие</button>
      </div>
    </div>
  </div>

</template>

<style scoped>

</style>