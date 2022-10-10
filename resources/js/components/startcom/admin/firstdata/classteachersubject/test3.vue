<template>
  <Multiselect
    mode="tags"
    v-model="value"
    placeholder="Select options"
    :close-on-select="false"
    :searchable="true"
    :object="true"
    :resolve-on-load="false"
    :delay="0"
    :min-chars="1"
    :options="async (query) => {
      return await fetchLanguages(query)
    }"
  />
</template>
<script>
export default {
  data: () => ({
    value: [
      { value: 'Java', label: 'Java' },
      { value: 'JavaScript', label: 'JavaScript' },
    ]
  })
}
</script>