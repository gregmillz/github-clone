<script setup lang="ts">
const { data: repositories, pending, error } = await useFetch("http://localhost:8000/api/repository");
</script>

<template>
  <Header></Header>
  <div>
    <h1 v-if="pending">Loading...</h1>
    <h1 v-else-if="error">Error: {{  error.message }}</h1>

    <ul v-if="repositories?.length" class="space-y-2">
      <li v-for="repository in repositories" :key="repository.id" class="p-2 border rounded">
        Repository Name: {{  repository.id }}<br></br>
        Created By: {{ repository.name }}
      </li>
    </ul>

    <h1 v-else>No repositories found</h1>
  </div>
</template>
