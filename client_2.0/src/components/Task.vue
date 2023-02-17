<template>

<div class="container mx-auto" >
   <!-- <div class="task">
        <h3 class="text-purple-700 text-opacity-100">{{ task.text }}</h3>
        <h3 class="text-purple-700 text-opacity-75">{{ task.date }}</h3>
        <h3 class="text-purple-700 text-opacity-50">{{ task.repeated }}</h3>
        <h3 class="text-purple-700 text-opacity-25">{{ task.selectRepeated }}</h3>

    </div>
-->

<table class="table-auto table-center  " >
  <thead>
    <tr>
      <th>Task</th>
      <th>Date</th>
      <th>Repeated</th>
      <th>Select Repeated</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ task.text }}</td>
      <td>{{ task.date }}</td>
      <td>{{ task.repeated }}</td>
      <td>{{ task.selectRepeated }}</td>
    </tr>

  </tbody>
</table>
</div>
</template>

<script>
export default {
    name: 'Task',
    props: {
        task: Object,
    },
}
</script>